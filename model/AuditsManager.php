<?php

class AuditsManager extends Manager {
    public function updAudit($auditId, $clientId, $auditDate, $questionId, $questionValue) {
        $db = $this->dbConnect();
        $q = $db->prepare("REPLACE INTO iso_audits (`audit_Id`, `client_Id`, `audit_date`, `question_Id`, `question_Value` ) VALUES
                (:auditId, :clientId, :auditDate, :questionId, :questionValue)");
        $q->bindValue(':auditId', $auditId);
        $q->bindValue(':clientId', $clientId);
        $q->bindValue(':auditDate', $auditDate);
        $q->bindValue(':questionId', $questionId);
        $q->bindValue(':questionValue', $questionValue);
        $q->execute();
        return $q;
    }
    public function getNotes($auditId, $clientId, $js=true) {
        $db = $this->dbConnect();
        $q = $db->prepare("SELECT T1.chapter_Id,(SUM(T3.question_Value)/T1.chapter_Value)*100 AS note FROM iso_chapters AS T1
                INNER JOIN iso_chapters_questions AS T2 ON T1.chapter_Id = T2.chapter_Id
                INNER JOIN iso_audits AS T3 ON T2.question_Id = T3.question_Id
            WHERE T3.audit_Id = :auditId AND T3.client_Id = :clientId
            GROUP BY T1.chapter_Id
            ORDER BY T1.chapter_Id ASC");
        $q->bindValue(':auditId', $auditId);
        $q->bindValue(':clientId', $clientId);
        $q->execute();
        $jsonCode = json_encode($q->fetchAll(PDO::FETCH_ASSOC));
        if($js=true) {echo $jsonCode;} else { return $jsonCode;}
    }  
}