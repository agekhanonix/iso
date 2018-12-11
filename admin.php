<?php
    error_reporting(E_ALL); 
    ini_set("display_errors", 1);
    session_start();
    require('config/config.php');
    require('controller/backend.php');
    require('libs/functions/library.php'); 
    try {   
        if(isset($_GET['action'])) {
            /* === ------------------------------------ === **
            **                   HOME PAGE                  **
            ** === ------------------------------------ === */
            if($_GET['action'] == 'home') {
                header('Location: index.php?action=home');
            } elseif($_GET['action'] == 'polities') {
                header('Location: index.php?action=polities');
            /* === ------------------------------------- === **
            **              DECONNEXION: ACTION              **
            ** === ------------------------------------- === */
            } elseif($_GET['action'] == 'deconnexion') {
                deconnexion();
            } elseif($_GET['action'] == 'getAllProspects') {
                if(isset($_SESSION['Id']) && ($_SESSION['level'] > 3)) {
                    getAllProspects();
                } else {
                    header('Location: index.php?action=home');
                }
            } elseif($_GET['action'] == 'connexion') {
                if(!empty($_POST['pseudo']) && !empty($_POST['pwd'])) {
                    getProspect($_POST['pseudo'], trim($_POST['pwd']));
                } else {
                    throw new Exception(json_encode(array('error' => "act001",
                        'msg' => "Toutes les infos nécéssaires n'ont pas été renseignées",
                        'type' => "action", 
                        'name' => "connexion", 
                        'script' => "admin.php", 
                        'explanation' => "erreur dans le paramétrage du script")));
                }
            } elseif($_GET['action'] == 'admin') {
                admin();
            } elseif($_GET['action'] == 'revoke') {
                if(isset($_GET['id']) && isset($_GET['val'])) {
                    revoke($_GET['id'], $_GET['val']);
                } else {
                    throw new Exception(json_encode(array('error' => "act002",
                        'msg' => "Toutes les infos nécéssaires n'ont pas été renseignées",
                        'type' => "action", 
                        'name' => "revoke", 
                        'script' => "admin.php", 
                        'explanation' => "erreur dans le paramétrage du script")));
                }
            }

        } else {
            admin();
        }
    } catch(Exception $e) {
        $errorMessage = $e->getMessage();
        getError($errorMessage);
    }