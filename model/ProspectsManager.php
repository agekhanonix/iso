<?php

class ProspectsManager extends Manager {

    public function getProspect($pseudo, $pwd, $val=0) {
        $db = $this->dbConnect();
        $q = $db->prepare("SELECT `prospect_Id`, `prospect_Pseudo`, `prospect_Society`, `prospect_LastName`,
                `prospect_FirstName`,`prospect_StreetNum`,`prospect_Addr1`, `prospect_Addr2`, `prospect_City`,
                `prospect_PostalCode`, `prospect_Phone`, `prospect_Mobile`, `prospect_Pwd`,`prospect_Email`,
                `prospect_Msn`, `prospect_Url`,`prospect_Localisation`,`prospect_Registred`,`prospect_Level`,
                `prospect_CreationDate` 
            FROM iso_prospects 
            WHERE prospect_Pseudo = :pseudo AND prospect_Registred = :val");
        $q->bindValue(':pseudo', $pseudo);
        $q->bindValue(':val', $val);
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
        $q = $db->prepare("SELECT T1.* FROM iso_prospects_vw AS T1 INNER JOIN (SELECT Id, MAX(Quests) AS maxQuests FROM iso_prospects_vw GROUP BY Id) AS T2 ON T1.Id = T2.Id AND T1.Quests = T2.maxQuests");
        $q->execute();
        $data = json_encode($q->fetchAll(PDO::FETCH_ASSOC));
        if(count($data) == 0) {
            return false;
        } else {
            if($js) { echo $data;} else {return $data;}
        }
    }
    public function revokeProspect($Id, $val)  {
        $db = $this->dbConnect();
        $q = $db->prepare("UPDATE iso_prospects SET prospect_Registred = :val WHERE prospect_Id = :id");
        $q->bindValue(':id', $Id);
        $q->bindValue(':val', $val);
        $affectedLines = $q->execute();
        return $affectedLines;
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
    function getCreations($js=true) {
        $db = $this->dbConnect();
        $q = $db->prepare("SELECT CONCAT(YEAR(prospect_CreationDate),'-',SUBSTRING(CONCAT('00',MONTH(prospect_CreationDate)),-2,2)) AS Mois,COUNT(`prospect_Id`) AS Creations FROM `iso_prospects` WHERE prospect_CreationDate >= NOW() - INTERVAL 12 MONTH GROUP BY Mois ORDER BY Mois ASC");
        $q->execute();
        $creations = array();
        $datas = json_encode($q->fetchAll(PDO::FETCH_ASSOC));
        if($js) { echo $datas;} else {return $datas;}
    }
}