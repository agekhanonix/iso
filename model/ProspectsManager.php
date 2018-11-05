<?php

class ProspectsManager extends Manager {
    public function getCompte($pseudo, $pwd) {
        $db = $this->dbConnect();
        $q = $db->prepare("SELECT `prospect_Id`, `prospect_Pseudo`, `prospect_LastName`,
                `prospect_FirstName`,`prospect_StreetNum`,`prospect_Addr1`, `prospect_Addr2`, `prospect_Addr3`,
                `prospect_PostalCode`, `prospect_Phone`, `prospect_Mobile`, `prospect_Pwd`,`prospect_Email`,
                `prospect_Msn`, `prospect_Url`,`prospect_Localisation`,`prospect_Registred`,`prospect_Level`,
                `prospect_CreationDate` 
            FROM iso_prospects 
            WHERE prospect_Pseudo = :pseudo AND prospect_Pwd = :pwd");
        $q->bindValue(':pseudo', $pseudo);
        $q->bindValue(':pwd', $this->encrypt($pwd, $pseudo));
        $q->execute();
        $jsonCode = json_encode($q->fetchAll(PDO::FETCH_ASSOC));
        return $jsonCode;
    }
    protected function encrypt($pwd, $pseudo) {
        $encrypted_string = hash_hmac('sha512', $pseudo . $pwd, '6Tune7+?2fred');
        return $encrypted_string;
    }
}