<?php

class ProspectsManager extends Manager {
    public function getCompte($pseudo, $pwd) {
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
    protected function encrypt($pwd) {
        $encrypted_string = password_hash($pwd, PASSWORD_DEFAULT);
        return $encrypted_string;
    }
    protected function decrypt($pwd, $hash) {
        return password_verify($pwd, $hash);
    }
}