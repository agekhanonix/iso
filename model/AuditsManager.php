<?php

class AuditsManager extends Manager {
    public function updAudit($auditId, $question, $clientId, $val) {
        $db = $this->dbConnect();
        $q = $db->prepare("UPDATE iso_audits SET " . "Q" . $question . " = :val WHERE audit_Id = :auditId AND client_Id = :clientId");
        $q->bindValue(':auditId', $auditId);
        $q->bindValue(':clientId', $clientId);
        $q->bindValue(':val', $val);
        $affectedLines = $q->execute();
        return $affectedLines;
    }   
}