<?php
namespace Common;
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
        $jsonCode = json_encode($q->fetchAll(\PDO::FETCH_ASSOC));
        return $jsonCode;
    }
    public function getAllServices() {
        $db = $this->dbConnect();
        $q = $db->query("SELECT service_Id, 
                service_Img, 
                service_Title, 
                service_Description, 
                service_Publish,
                service_Booklet 
            FROM iso_services 
            ORDER BY service_Id ASC");
        $jsonCode = json_encode($q->fetchAll(\PDO::FETCH_ASSOC));
        return $jsonCode;
    }
    public function addService($img, $title, $content, $booklet) {
        $db = $this->dbConnect();
        $q = $db->prepare("INSERT INTO iso_services (`service_Img`, `service_Title`, `service_Description`,
                `service_Booklet`)
            VALUES (:img, :title, :content, :booklet)");
        $q->bindValue(':img', $img);
        $q->bindValue(':title', $title);
        $q->bindValue(':content', $content);
        $q->bindValue(':booklet', $booklet);
        $affectedLines = $q->execute();
        return $affectedLines;
    }
    public function publishService($id, $val) {
        $db = $this->dbConnect();
        $q = $db->prepare("UPDATE iso_services SET service_Publish = :val WHERE service_Id = :id");
        $q->bindValue(':id', $id);
        $q->bindValue(':val', $val);
        $affectedLines = $q->execute();
        return $affectedLines;
    }  
}