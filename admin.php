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
            /* === ------------------------------------- === **
            **              FREQUENTATION: ACTION            **
            ** === ------------------------------------- === */
            } elseif($_GET['action'] == 'frequentation') {
                if(isset($_SESSION['Id']) && ($_SESSION['level'] > 3)) {
                    frequentation();
                } else {
                    header('Location: index.php?action=home');
                }
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
                        'script' => "index.php", 
                        'explanation' => "erreur dans le paramétrage du script")));
                }
            } elseif($_GET['action'] == 'admin') {
                admin();
            }
        } else {
            admin();
        }
    } catch(Exception $e) {
        $errorMessage = $e->getMessage();
        getError($errorMessage);
    }