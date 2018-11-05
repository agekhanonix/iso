<?php
    require_once("libs/class/SplModelLoader.php");
    require_once("libs/class/SplClassLoader.php");

    SplModelLoader::register();                     // Loading of the Models Managers
    SplClassLoader::register();                     // Loading of the class
    function audit() {
        $chapterManager = new ChaptersManager();
        $questionManager = new QuestionsManager();
        $chapters = json_decode($chapterManager->listChapters());
        if($chapters === false) {
            throw new Exception(json_encode(array('error' => "qry001",
                'msg' => "La liste des chapitres n'a pas été obtenue ",
                'type' => "request", 
                'name' => "listChapters", 
                'script' => "controller/frontend.php", 
                'explanation' => "erreur SQL")));
        } else {
            $questions = json_decode($questionManager->listQuestions());
            $subChapters = json_decode($questionManager->listSubchapters());
            $preambles = json_decode($questionManager->listPreambles());
            require('view/frontend/listQuestions.php');
        }
    }
    function listChapters() {
        $chapterManager = new ChaptersManager();
        $chapters = json_decode($chapterManager->listChapters());
    }
    function updAudit($auditId, $prospectId, $auditDate, $questionId, $questionValue) {
        $auditManager = new AuditsManager();
        $affectedLines = $auditManager->updAudit($auditId, $prospectId, $auditDate, $questionId, $questionValue);
    }
    function getError($error) {
        $err = json_decode($error);
        require('view/error.php');
    }
    function polities() {
        require('view/frontend/polities.php');
    }
    function home() {
        $serviceManager = new ServicesManager();
        $services = json_decode($serviceManager->getServices());
        require('view/frontend/home.php');
    }
    function getNotes4Graphe($auditId, $prospectId) {
        $auditManager = new AuditsManager();
        $affectedLines = $auditManager->getNotes4Graphe($auditId, $prospectId);
    }
    function getCompte($pseudo, $pwd) {
        $prospectManager = new ProspectsManager();
        $prospect = json_decode($prospectManager->getCompte($pseudo, $pwd));
        if(count($prospect) >= 0) {
            $_SESSION['Id'] = $prospect[0]->prospect_Id;
            $_SESSION['Pseudo'] = $prospect[0]->prospect_Pseudo;
            $_SESSION['LastName'] = $prospect[0]->prospect_LastName;
            $_SESSION['FirstName'] = $prospect[0]->prospect_FirstName;
            $_SESSION['StreetNum'] = $prospect[0]->prospect_StreetNum;
            $_SESSION['Addr1'] = $prospect[0]->prospect_Addr1;
            $_SESSION['Addr2'] = $prospect[0]->prospect_Addr2;
            $_SESSION['Addr3'] = $prospect[0]->prospect_Addr3;
            $_SESSION['PostalCode'] = $prospect[0]->prospect_PostalCode;
            $_SESSION['Phone'] = $prospect[0]->prospect_Phone;
            $_SESSION['Mobile'] = $prospect[0]->prospect_Mobile;
            $_SESSION['Email'] = $prospect[0]->prospect_Email;
            $_SESSION['Msn'] = $prospect[0]->prospect_Msn;
            $_SESSION['Url'] = $prospect[0]->prospect_Url;
            $_SESSION['Localisation'] = $prospect[0]->prospect_Localisation;
            $_SESSION['level'] = $prospect[0]->prospect_Level;
            header('Location: index.php?action=home');
        } else {
            throw new Exception(json_encode(array('error' => "qry002",
                'msg' => "Le compte n'a pas été trouvé",
                'type' => "request", 
                'name' => "getCompte", 
                'script' => "controller/frontend.php", 
                'explanation' => "erreur SQL || inexistance du compte")));
        }
    }
    function deconnexion() {
        session_destroy();
        header('Location: index.php?action=home');
    }