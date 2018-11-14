<?php

class AuditsManager extends Manager {
    public function updAudit($auditId, $prospectId, $auditDate, $questionId, $questionValue) {
        $db = $this->dbConnect();
        $q = $db->prepare("REPLACE INTO iso_audits (`audit_Id`, `prospect_Id`, `audit_date`, `question_Id`, `question_Value` ) VALUES
                (:auditId, :prospectId, :auditDate, :questionId, :questionValue)");
        $q->bindValue(':auditId', $auditId);
        $q->bindValue(':prospectId', $prospectId);
        $q->bindValue(':auditDate', $auditDate);
        $q->bindValue(':questionId', $questionId);
        $q->bindValue(':questionValue', $questionValue);
        $q->execute();
        return $q;
    }
    public function getNotes4Graphe($auditId, $prospectId, $js=true) {
        $db = $this->dbConnect();
        $q = $db->prepare("SELECT T1.chapter_Id,(SUM(CASE T3.question_Value WHEN '-1' THEN T4.question_Value ELSE T3.question_Value END)/T1.chapter_Value)*100 AS note FROM iso_chapters AS T1
                INNER JOIN iso_chapters_questions AS T2 ON T1.chapter_Id = T2.chapter_Id
                INNER JOIN iso_audits AS T3 ON T2.question_Id = T3.question_Id
                INNER JOIN iso_questions AS T4 on T2.question_Id = T4.question_Id
            WHERE T3.audit_Id = :auditId AND T3.prospect_Id = :prospectId
            GROUP BY T1.chapter_Id
            ORDER BY T1.chapter_Id ASC");
        $q->bindValue(':auditId', $auditId);
        $q->bindValue(':prospectId', $prospectId);
        $q->execute();
        $jsonCode = json_encode($q->fetchAll(PDO::FETCH_ASSOC));
        if($js=true) {echo $jsonCode;} else { return $jsonCode;}
    }  
}