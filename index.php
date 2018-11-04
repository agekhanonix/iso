<?php
    error_reporting(E_ALL); 
    ini_set("display_errors", 1);
    require('config/config.php');
    require('controller/frontend.php');
    require('libs/functions/library.php'); 
    try {
        if(isset($_GET['action'])) {
            /* === ------------------------------------ === **
            **                   HOME PAGE                  **
            ** === ------------------------------------ === */
            if($_GET['action'] == 'home') {
                home();
            } elseif($_GET['action'] == 'polities') {
                polities();
            /* === ------------------------------------ === **
            **                 NAVIGATION BAR               **
            ** === ------------------------------------ === */
            } elseif($_GET['action'] == 'audit') {
                audit();
            } elseif($_GET['action'] == 'listChapters') {
                listChapters();
            /* === ------------------------------------ === **
            **                    VARIOUS                   **
            ** === ------------------------------------ === */
            } elseif($_GET['action'] == 'updAudit') {
                updAudit($_POST['auditId'], $_POST['clientId'], $_POST['auditDate'], $_POST['questionId'], $_POST['questionValue']);
            } elseif($_GET['action'] == 'getNotes') {
                getNotes($_GET['auditId'], $_GET['clientId']);
            }
        } else {
            home();
        }
    } catch(Exception $e) {
        $errorMessage = $e->getMessage();
        getError($errorMessage);
    }