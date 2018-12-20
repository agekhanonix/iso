<?php
namespace Common;
class QuestionsManager extends Manager {
    public function listQuestions() {
        $db = $this->dbConnect();
        $q = $db->query("SELECT question_Id, 
            question_ChapterId,
            question_predecessorId,
            question_Value,
            question_Libelle
            FROM iso_questions
            ORDER BY question_ChapterId ASC");
        $jsonCode = json_encode($q->fetchAll(\PDO::FETCH_ASSOC));
        return $jsonCode;
    }
    
    public function listSubchapters() {
        $db = $this->dbConnect();
        $q = $db->query('SELECT subChapter_Id, subChapter_Libelle
            FROM iso_subChapters
            ORDER BY subChapter_Id');
        $jsonCode = json_encode($q->fetchAll(\PDO::FETCH_ASSOC));
        return $jsonCode;
    }

    public function listPreambles() {
        $db = $this->dbConnect();
        $q = $db->query('SELECT preamble_Id, preamble_Libelle
            FROM iso_preambles
            ORDER BY preamble_Id');
        $jsonCode = json_encode($q->fetchAll(\PDO::FETCH_ASSOC));
        return $jsonCode;   
    }
}