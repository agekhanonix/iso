<?php

class ChaptersManager extends Manager {
    public function listChapters() {
        $db = $this->dbConnect();
        $q = $db->query("SELECT chapter_Id, chapter_Libelle, chapter_Value FROM iso_chapters ORDER BY chapter_Id ASC");
        $jsonCode = json_encode($q->fetchAll(PDO::FETCH_ASSOC));
        return $jsonCode;
    }   
}