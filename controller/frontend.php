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
    function updAudit($audit, $question, $client, $value) {
        $auditManager = new AuditsManager();
        $affectedLines = $auditManager->updAudit($audit, $question, $client, $value);
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