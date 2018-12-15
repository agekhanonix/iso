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
        if($js==true) {echo $jsonCode;} else { return $jsonCode;}
    }
    public function getGlobalNote4Graphe($auditId, $prospectId, $js=true) {
        $db = $this->dbConnect();
        $q = $db->prepare("SELECT (SUM(CASE T1.question_Value WHEN '-1' THEN T2.question_Value ELSE T1.question_Value END) / (SELECT SUM(chapter_Value) FROM iso_chapters))*100 AS note
            FROM iso_audits AS T1 INNER JOIN iso_questions AS T2 ON T2.question_Id = T1.question_Id
            WHERE T1.audit_Id = :auditId AND T1.prospect_Id = :prospectId");
        $q->bindValue(':auditId', $auditId);
        $q->bindValue(':prospectId', $prospectId);
        $q->execute();
        $jsonCode = json_encode($q->fetchAll(PDO::FETCH_ASSOC));
        if($js==true) {echo $jsonCode;} else { return $jsonCode;}
    }
    public function getAuditInfos($js=true) {
        $db = $this->dbConnect();
        $q = $db->prepare("SELECT TD1.audit_Id,TD1.chapter_Id,TD1.Score,TD2.Notes,TD3.Quests 
        FROM (
            SELECT T1.audit_Id,T2.chapter_Id,(SUM(CASE T1.question_Value 
                WHEN '-1' THEN T3.question_Value ELSE T1.question_Value END)/T4.chapter_Value)*100 AS Score
            FROM iso_audits AS T1
                INNER JOIN iso_chapters_questions AS T2 ON T2.question_Id = T1.question_Id
                INNER JOIN iso_questions AS T3 ON T3.question_Id = T2.question_Id
                INNER JOIN iso_chapters AS T4 ON T4.chapter_Id = T2.chapter_Id
            GROUP BY T1.audit_Id,T2.chapter_Id) AS TD1
        INNER JOIN (
            SELECT T4.audit_Id,T5.chapter_Id,COUNT(T4.question_Value) AS Notes
            FROM iso_audits AS T4
                INNER JOIN iso_chapters_questions AS T5 ON T5.question_Id = T4.question_Id
                INNER JOIN iso_questions AS T6 ON T6.question_Id = T5.question_Id
                INNER JOIN iso_chapters AS T7 ON T7.chapter_Id = T5.chapter_Id
            GROUP BY T4.audit_Id,T5.chapter_Id) AS TD2
        INNER JOIN (
            SELECT T7.chapter_Id,COUNT(T7.question_Id) AS Quests
            FROM iso_chapters_questions AS T7
            GROUP BY T7.chapter_Id) AS TD3
        ON TD1.audit_Id = TD2.audit_Id AND TD1.chapter_Id = TD2.chapter_Id AND TD1.chapter_Id = TD3.chapter_Id
        GROUP BY TD2.audit_Id,TD2.chapter_Id");
        $q->execute();
        $jsonCode = json_encode($q->fetchAll(PDO::FETCH_ASSOC));
        if($js==true) {echo $jsonCode;} else { return $jsonCode;}
    }
    public function getAllNotes41Audit($auditId) {
        $db = $this->dbConnect();
        $q = $db->prepare("SELECT question_Id, question_Value FROM iso_audits WHERE audit_Id = :id");
        $q->bindValue(':id', $auditId);
        $q->execute();
        $datas = $q->fetchAll(PDO::FETCH_ASSOC);
        return $datas;
    }
    public function getAudits41Prospect($prospectId) {
        $db = $this->dbConnect();
        $q = $db->prepare("SELECT DISTINCT(audit_Id), audit_date FROM iso_audits WHERE prospect_Id = :prospect ORDER BY audit_date DESC");
        $q->bindValue(':prospect', $prospectId);
        $q->execute();
        $jsonCode = json_encode($q->fetchAll(PDO::FETCH_ASSOC));
        return $jsonCode;
    }
    public function getDate4Audit($id) {
        $db = $this->dbConnect();
        $q = $db->prepare("SELECT audit_date FROM `iso_audits` WHERE audit_id = :id LIMIT 0,1");
        $q->bindValue(':id', $id);
        $q->execute();
        $jsonCode = json_encode($q->fetchAll(PDO::FETCH_ASSOC));
        return $jsonCode;
    }
}