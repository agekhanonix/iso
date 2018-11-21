<?php

class ServicesManager extends Manager {
    public function getServices() {
        $db = $this->dbConnect();
        $q = $db->query("SELECT service_Id, 
                service_Img, 
                service_Title, 
                service_Description, 
                service_Publish,
                service_Booklet 
            FROM iso_services
            WHERE service_Publish = 1 
            ORDER BY service_Id ASC");
        $jsonCode = json_encode($q->fetchAll(PDO::FETCH_ASSOC));
        return $jsonCode;
    }   
}