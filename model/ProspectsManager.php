<?php

class ProspectsManager extends Manager {

    public function getProspect($pseudo, $pwd) {
        $db = $this->dbConnect();
        $q = $db->prepare("SELECT `prospect_Id`, `prospect_Pseudo`, `prospect_Society`, `prospect_LastName`,
                `prospect_FirstName`,`prospect_StreetNum`,`prospect_Addr1`, `prospect_Addr2`, `prospect_City`,
                `prospect_PostalCode`, `prospect_Phone`, `prospect_Mobile`, `prospect_Pwd`,`prospect_Email`,
                `prospect_Msn`, `prospect_Url`,`prospect_Localisation`,`prospect_Registred`,`prospect_Level`,
                `prospect_CreationDate` 
            FROM iso_prospects 
            WHERE prospect_Pseudo = :pseudo");
        $q->bindValue(':pseudo', $pseudo);
        $q->execute();
        $data = $q->fetch();
        if(count($data) == 0 || !$this->decrypt($pwd, $data['prospect_Pwd'])) {
            return false;
        } else {
            return $data;
        }
    }
    public function getAllProspects($js=true) {
        $db = $this->dbConnect();
        $q = $db->prepare("SELECT T1.prospect_Id AS Id, SUM(CASE WHEN T2.audit_Id THEN 1 ELSE 0 END) AS Quests,
                    T1.prospect_Society AS Society, T1.prospect_LastName AS LastName, T1.prospect_FirstName AS FirstName,
                    T1.prospect_StreetNum AS StreetNum, T1.prospect_Addr1 AS Addr1, T1.prospect_Addr2 AS Addr2,
                    T1.prospect_City AS City, T1.prospect_PostalCode AS PostalCode, T1.prospect_Phone AS Phone,
                    T1.prospect_Mobile AS Mobile, T1.prospect_Email AS Email, 
                    SUBSTRING_INDEX(T1.prospect_Localisation, ';', 1) AS Lat,
                    SUBSTRING_INDEX(T1.prospect_Localisation, ';', -1) AS Lng,
                    (CASE WHEN SUM(CASE WHEN T2.audit_Id THEN 1 ELSE 0 END) = 0 THEN 1
                        WHEN SUM(CASE WHEN T2.audit_Id THEN 1 ELSE 0 END) > 0 AND SUM(CASE WHEN T2.audit_Id THEN 1 ELSE 0 END) < 50  THEN 2
                        WHEN SUM(CASE WHEN T2.audit_Id THEN 1 ELSE 0 END) >= 50 AND SUM(CASE WHEN T2.audit_Id THEN 1 ELSE 0 END) < 75  THEN 3
                        WHEN SUM(CASE WHEN T2.audit_Id THEN 1 ELSE 0 END) >= 75 AND SUM(CASE WHEN T2.audit_Id THEN 1 ELSE 0 END) < 98  THEN 4
                        WHEN SUM(CASE WHEN T2.audit_Id THEN 1 ELSE 0 END) = 98 THEN 5
                    END) AS Type,
                    T2.audit_Id                 
                FROM iso_prospects AS T1
                LEFT OUTER JOIN iso_audits AS T2 ON T1.prospect_Id = T2.prospect_Id
                WHERE T1.prospect_Id > 111
                GROUP BY T1.prospect_Id");
        $q->execute();
        $data = json_encode($q->fetchAll(PDO::FETCH_ASSOC));
        if(count($data) == 0) {
            return false;
        } else {
            if($js) { echo $data;} else {return $data;}
        }
    }    
    public function addProspect($pseudo, $society, $lastname, $firstname, $streetnum, $addr1, $addr2, $city, $postalcode, $phone, $mobile, $email, $pwd) {
        $db = $this->dbConnect();
        $q = $db->prepare("INSERT INTO iso_prospects (`prospect_Pseudo`, `prospect_Society`, `prospect_LastName`,
                `prospect_FirstName`,`prospect_StreetNum`,`prospect_Addr1`, `prospect_Addr2`, `prospect_City`,
                `prospect_PostalCode`, `prospect_Phone`, `prospect_Mobile`, `prospect_Pwd`,`prospect_Email`,
                `prospect_Localisation`,`prospect_CreationDate`)
            VALUES (:pseudo, :society, :lastname, :firstname, :streetnum, :addr1, :addr2, :city, :postalcode, :phone, :mobile, :pwd, :email, :localisation, NOW())");
        $q->bindValue(':pseudo', $pseudo);
        $q->bindValue(':society', $society);
        $q->bindValue(':lastname', $lastname);
        $q->bindValue(':firstname', $firstname);
        $q->bindValue(':streetnum', $streetnum);
        $q->bindValue(':addr1', $addr1);
        $q->bindValue(':addr2', $addr2);
        $q->bindValue(':city', $city);
        $q->bindValue(':postalcode', $postalcode);
        $q->bindValue(':phone', $phone);
        $q->bindValue(':mobile', $mobile);
        $q->bindValue(':pwd', $this->encrypt($pwd));
        $q->bindValue(':email', $email);
        $q->bindValue(':localisation', $this->getGeocodeData($streetnum . " " . $addr1 . " " . $addr2 . ", " . $postalcode . " " . $city . ", FRANCE"));
        $affectedLines = $q->execute();
        return $affectedLines;
    }

    protected function encrypt($pwd) {
        $encrypted_string = password_hash($pwd, PASSWORD_DEFAULT);
        return $encrypted_string;
    }
    protected function decrypt($pwd, $hash) {
        return password_verify($pwd, $hash);
    }

    /**
    * To geolocate an address with API GOOGLE MAPS
    */
    function getGeocodeData($address) {
        $address = urlencode($address);
        $googleMapUrl = "https://maps.googleapis.com/maps/api/geocode/json?address={$address}&key=AIzaSyCXB6yLq41R_CSfl2saDa1pqqOutPwVNnI";
        $geocodeResponseData = file_get_contents($googleMapUrl);
        $responseData = json_decode($geocodeResponseData, true);
        if($responseData['status']=='OK') {
            $latitude = isset($responseData['results'][0]['geometry']['location']['lat']) ? $responseData['results'][0]['geometry']['location']['lat'] : "";
            $longitude = isset($responseData['results'][0]['geometry']['location']['lng']) ? $responseData['results'][0]['geometry']['location']['lng'] : "";
            $formattedAddress = isset($responseData['results'][0]['formatted_address']) ? $responseData['results'][0]['formatted_address'] : "";
                if($latitude && $longitude && $formattedAddress) {
                    $geocodeData = $latitude . ";" . $longitude;
                    return $geocodeData;
                } else {
                    return false;
                }
        } else {
            echo "ERROR: {$responseData['status']}";
            return false;
        }
    }
}