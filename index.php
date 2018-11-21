<?php
    error_reporting(E_ALL); 
    ini_set("display_errors", 1);
    session_start();
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
                updAudit($_POST['auditId'], $_POST['prospectId'], $_POST['auditDate'], $_POST['questionId'], $_POST['questionValue']);
            } elseif($_GET['action'] == 'getNotes4Graphe') {
                getNotes4Graphe($_GET['auditId'], $_GET['prospectId']);
            /* === ------------------------------------ === **
            **                 LOGIN: ACTION                **
            ** === ------------------------------------ === */
            } elseif($_GET['action'] == 'connexion') {
                if(!empty($_POST['pseudo']) && !empty($_POST['pwd'])) {
                    getCompte($_POST['pseudo'], $_POST['pwd']);
                } else {
                    throw new Exception(json_encode(array('error' => "act001",
                        'msg' => "Toutes les infos nécéssaires n'ont pas été renseignées",
                        'type' => "action", 
                        'name' => "connexion", 
                        'script' => "index.php", 
                        'explanation' => "erreur dans le paramétrage du script")));
                }
            } elseif($_GET['action'] == 'generateAudit') {
                if(isset($_GET['auditId']) && isset($_GET['prospectId'])) {
                    generateAudit($_GET['auditId'], $_GET['prospectId'], $_POST['image']);
                } else {
                    throw new Exception(json_encode(array('error' => "act002",
                        'msg' => "Toutes les infos nécéssaires n'ont pas été renseignées",
                        'type' => "action", 
                        'name' => "generateAudit", 
                        'script' => "index.php", 
                        'explanation' => "erreur dans le paramétrage du script")));
                }
            } elseif($_GET['action'] == 'mailContact') {
                if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['subject']) && !empty($_POST['message'])) {
                    mailContact($_POST['name'], $_POST['email'], $_POST['subject'], $_POST['message'], $_POST['origin']);
                } else {
                    throw new Exception(json_encode(array('error' => "act003",
                        'msg' => "Toutes les infos nécéssaires n'ont pas été renseignées",
                        'type' => "action", 
                        'name' => "mailContact", 
                        'script' => "index.php", 
                        'explanation' => "erreur dans le paramétrage du script")));
                }
            } elseif($_GET['action'] == 'mailBooklet') {
                if(!empty($_GET['id'])) {
                    if(!empty($_POST['name'.$_GET['id']]) && !empty($_POST['email'.$_GET['id']]) && !empty($_POST['booklet'.$_GET['id']])) {
                        mailBooklet($_POST['name'.$_GET['id']], $_POST['email'.$_GET['id']], $_POST['booklet'.$_GET['id']]);
                    } else {
                        throw new Exception(json_encode(array('error' => "act005",
                        'msg' => "Toutes les infos nécéssaires n'ont pas été renseignées",
                        'type' => "action", 
                        'name' => "mailBooklet", 
                        'script' => "index.php", 
                        'explanation' => "erreur dans le paramétrage du script"))); 
                    }
                } else {
                    throw new Exception(json_encode(array('error' => "act004",
                        'msg' => "Toutes les infos nécéssaires n'ont pas été renseignées",
                        'type' => "action", 
                        'name' => "mailBooklet", 
                        'script' => "index.php", 
                        'explanation' => "aucune brochure n'a été selectionnée")));
                }
            } elseif($_GET['action'] == 'deconnexion') {
                deconnexion();
            }
        } else {
            home();
        }
    } catch(Exception $e) {
        $errorMessage = $e->getMessage();
        getError($errorMessage);
    }