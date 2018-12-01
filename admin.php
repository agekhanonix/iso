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
                frequentation();
            } elseif($_GET['action'] == 'getAllProspects') {
                getAllProspects();
            }
        } else {
            frequentation();
        }
    } catch(Exception $e) {
        $errorMessage = $e->getMessage();
        getError($errorMessage);
    }