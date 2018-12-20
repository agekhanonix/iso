<?php
    $IsoLoader = new SplClassLoader('Common', 'model');
    $IsoLoader->register();
    
    function getError($error) {
        $err = json_decode($error);
        require('view/error.php');
    }
    function deconnexion() {
        session_destroy();
        header('Location: index.php?action=home');
    }
    function getAllProspects() {
        $prospectManager = new Common\ProspectsManager();
        $affectedLines = $prospectManager->getAllProspects();
    }
    function admin() {
        $prospectManager = new Common\ProspectsManager();
        $serviceManager = new Common\ServicesManager();
        $auditManager = new Common\AuditsManager();
        $prospects = json_decode($prospectManager->getAllProspects($js=false));
        $services = json_decode($serviceManager->getAllServices());
        $infos = json_decode($auditManager->getAuditInfos($js=false));
        $array = array();
        foreach($infos as $info){
            $array[$info->audit_Id]['Audit_Id'] = $info->audit_Id;
            $array[$info->audit_Id][$info->chapter_Id]['Score'] = $info->Score;
            $array[$info->audit_Id][$info->chapter_Id]['Notes'] = $info->Notes;
            $array[$info->audit_Id][$info->chapter_Id]['Quests'] = $info->Quests;
        }
        require('view/backend/admin.php');
    }
    function getProspect($pseudo, $pwd) {
        $prospectManager = new Common\ProspectsManager();
        $prospect = $prospectManager->getProspect($pseudo, $pwd);
        if($prospect !== null) {
            $_SESSION['Id'] = $prospect['prospect_Id'];
            $_SESSION['Pseudo'] = $prospect['prospect_Pseudo'];
            $_SESSION['Society'] = $prospect['prospect_Society'];
            $_SESSION['LastName'] = $prospect['prospect_LastName'];
            $_SESSION['FirstName'] = $prospect['prospect_FirstName'];
            $_SESSION['StreetNum'] = $prospect['prospect_StreetNum'];
            $_SESSION['Addr1'] = $prospect['prospect_Addr1'];
            $_SESSION['Addr2'] = $prospect['prospect_Addr2'];
            $_SESSION['City'] = $prospect['prospect_City'];
            $_SESSION['PostalCode'] = $prospect['prospect_PostalCode'];
            $_SESSION['Phone'] = $prospect['prospect_Phone'];
            $_SESSION['Mobile'] = $prospect['prospect_Mobile'];
            $_SESSION['Email'] = $prospect['prospect_Email'];
            $_SESSION['Msn'] = $prospect['prospect_Msn'];
            $_SESSION['Url'] = $prospect['prospect_Url'];
            $_SESSION['Localisation'] = $prospect['prospect_Localisation'];
            $_SESSION['level'] = $prospect['prospect_Level'];
            header('Location: admin.php?action=admin');
        } else {
            throw new \Exception(json_encode(array('error' => "qry001",
                'msg' => "Le compte n'a pas été trouvé",
                'type' => "request", 
                'name' => "getProspect", 
                'script' => "controller/backend.php", 
                'explanation' => "erreur SQL || inexistance du compte")));
        }
    }
    function revoke($id, $val) {
        $prospectManager = new Common\ProspectsManager();
        $auditManager = new Common\AuditsManager();
        $serviceManager = new Common\ServicesManager();
        $affectedLines = $prospectManager->revokeProspect($id, $val);
        $prospects = json_decode($prospectManager->getAllProspects($js=false));
        $services = json_decode($serviceManager->getAllServices());
        $infos = json_decode($auditManager->getAuditInfos($js=false));
        $array = array();
        foreach($infos as $info){
            $array[$info->audit_Id]['Audit_Id'] = $info->audit_Id;
            $array[$info->audit_Id][$info->chapter_Id]['Score'] = $info->Score;
            $array[$info->audit_Id][$info->chapter_Id]['Notes'] = $info->Notes;
            $array[$info->audit_Id][$info->chapter_Id]['Quests'] = $info->Quests;
        }
        require('view/backend/admin.php');
    }
    function getCreations() {
        $prospectManager = new Common\ProspectsManager();
        $affectedLines = $prospectManager->getCreations();
    }
    function addService($image, $title, $description, $booklet) {
        $serviceManager = new Common\ServicesManager();
        $prospectManager = new Common\ProspectsManager();
        $auditManager = new Common\AuditsManager();
        $affectedLines = $serviceManager->addService($image, $title, $description, $booklet);
        $prospects = json_decode($prospectManager->getAllProspects($js=false));
        $services = json_decode($serviceManager->getAllServices());
        $infos = json_decode($auditManager->getAuditInfos($js=false));
        $array = array();
        foreach($infos as $info){
            $array[$info->audit_Id]['Audit_Id'] = $info->audit_Id;
            $array[$info->audit_Id][$info->chapter_Id]['Score'] = $info->Score;
            $array[$info->audit_Id][$info->chapter_Id]['Notes'] = $info->Notes;
            $array[$info->audit_Id][$info->chapter_Id]['Quests'] = $info->Quests;
        }
        require('view/backend/admin.php');
    }
    function publish($id, $val) {
        $prospectManager = new Common\ProspectsManager();
        $auditManager = new Common\AuditsManager();
        $serviceManager = new Common\ServicesManager();
        $affectedLines = $serviceManager->publishService($id, $val);
        $prospects = json_decode($prospectManager->getAllProspects($js=false));
        $services = json_decode($serviceManager->getAllServices());
        $infos = json_decode($auditManager->getAuditInfos($js=false));
        $array = array();
        foreach($infos as $info){
            $array[$info->audit_Id]['Audit_Id'] = $info->audit_Id;
            $array[$info->audit_Id][$info->chapter_Id]['Score'] = $info->Score;
            $array[$info->audit_Id][$info->chapter_Id]['Notes'] = $info->Notes;
            $array[$info->audit_Id][$info->chapter_Id]['Quests'] = $info->Quests;
        }
        require('view/backend/admin.php');
    }