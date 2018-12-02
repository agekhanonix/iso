<?php
    require_once("libs/class/SplModelLoader.php");
    require_once("libs/class/SplClassLoader.php");
    require_once("libs/class/html2pdf/html2pdf.class.php");

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
    function getProspect($pseudo, $pwd) {
        $prospectManager = new ProspectsManager();
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
    function getAllProspects() {
        $prospectManager = new ProspectsManager();
        $affectedLines = $prospectManager->getAllProspects();
    }
    function addProspect($pseudo, $society, $lastname, $firstname, $streetnum, $addr1, $addr2, $city, $postalcode, $phone, $mobile, $email, $pwd) {
        $prospectManager = new ProspectsManager();
        $affectedLines = $prospectManager->addProspect($pseudo, $society, $lastname, $firstname, $streetnum, $addr1, $addr2, $city, $postalcode, $phone, $mobile, $email, $pwd);
        if($affectedLines === false) {
            throw new Exception(json_encode(array('error' => "qry005",
                'msg' => "Le prospect n'a pas été ajouté",
                'type' => "request", 
                'name' => "addProspect", 
                'script' => "controller/frontend.php", 
                'explanation' => "erreur SQL")));
        } else {
            header('Location: index.php?action=audit');
        }
    }
    function generateAudit($auditId, $prospectId, $img) {
        $img = str_replace('data:image/png;base64,', '', $img);
        $img = str_replace(' ', '+', $img);
        file_put_contents('public/images/uploads/'.$auditId.'.png', base64_decode($img));
        $auditManager = new AuditsManager();
        $chapterManager = new ChaptersManager();
        $notes = json_decode($auditManager->getNotes4Graphe($auditId, $prospectId, false));
        $globalNote = json_decode($auditManager->getGlobalNote4Graphe($auditId, $prospectId, false));
        $chapters = json_decode($chapterManager->listChapters());
        ob_start();
        require_once('view/frontend/generateAudit.php');
        $reporting = ob_get_clean();
        try{
            $html2pdf = new HTML2PDF('P', 'A4', 'fr');
            //$html2pdf->setModeDebug();
            $html2pdf->setDefaultFont("Arial");
            $html2pdf->writeHTML($reporting);
            $html2pdf->Output('view/reportings/'.$auditId.'.pdf', 'F');
        }catch(HTML2PDF_exception $e) {
            echo $e;
            exit;
        }
        //$html2pdf->clean(); 
        header('Location: index.php?action=audit&pdf='.$auditId);
    }
    function mailContact($name, $email, $subject, $message, $origin) {
        $cc = $email;
        $to = 'thierry.charpentier.ct@gmail.com';
        $boundary =  md5(uniqid(microtime(), true));//A single bundary is created
        // Setting headers
        $headers = 'Content-Type: text/html; charset="UTF-8"'."\r\n";
        $headers .= 'From: Contact<contact@thcharpentier.fr>' ."\r\n";
        $headers .= 'Cc: '. $cc . "\r\n";
        // Setting body
        $bName = (isset($_SESSION['Id'])) ? $_SESSION['FirstName'] . ' ' . $_SESSION['LastName'] : $name;
        $bSociety = (isset($_SESSION['Id'])) ? $_SESSION['Society'] : '';
        $bStreetNum = (isset($_SESSION['Id'])) ? $_SESSION['StreetNum'] : '';
        $bAddr1 = (isset($_SESSION['Id'])) ? $_SESSION['Addr1'] : '';
        $bAddr2 = (isset($_SESSION['Id'])) ? $_SESSION['Addr2'] : '';
        $bCp = (isset($_SESSION['Id'])) ? $_SESSION['PostalCode'] : '';
        $bCity = (isset($_SESSION['Id'])) ? $_SESSION['City'] : '';
        $bTelephone = (isset($_SESSION['Id'])) ? $_SESSION['Phone'] : '';
        $bMobile = (isset($_SESSION['Id'])) ? $_SESSION['Mobile'] : '';
        $bEmail = (isset($_SESSION['Id'])) ? $_SESSION['Email'] : $email;
        $body = str_replace(array('{SUBJECT}','{MESSAGE}','{DATE}','{ORIGIN}', '{NAME}', '{SOCIETY}', '{STREETNUM}', '{ADDR1}', '{ADDR2}', '{CP}', '{CITY}', '{TELEPHONE}', '{MOBILE}', '{EMAIL}'),
            array($subject, $message, date("d/m/Y à H:i:s"), $origin, $bName, $bSociety, $bStreetNum, $bAddr1, $bAddr2, $bCp, $bCity, $bTelephone, $bMobile, $bEmail), 
            file_get_contents("view/include/mail-contact.php"));
        $ok = mail($to, $subject, $body, $headers);
        if($ok) {
            header('Location: index.php?action=home'); 
        } else {
            throw new Exception(json_encode(array('error' => "qry003",
                'msg' => "Le courriel n'a pas été envoyé",
                'type' => "...", 
                'name' => "mailContact", 
                'script' => "controller/frontend.php", 
                'explanation' => "Erreur inconnue")));
        }
    }
    function deconnexion() {
        session_destroy();
        header('Location: index.php?action=home');
    }
    function frequentation() {
        require('view/frontend/frequentation.php');
    }
