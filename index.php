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
                if(isset($_GET['a']) && isset($_GET['q']) && filter_var($_GET['q'], FILTER_VALIDATE_INT, 
                    array('options' => array('min_range' => 1, 'max_range' => 98))) && isset($_POST['opt'.$_GET['q']]) && isset($_GET['c'])) {
                    updAudit($_GET['a'], $_GET['c'], $_GET['q'], $_POST['opt'.$_GET['q']]);
                } else {
                    throw new Exception(json_encode(array('error' => "act001",
                        'msg' => "Toutes les infos nécéssaires n'ont pas été renseignées",
                        'type' => "action", 
                        'name' => "updAudit", 
                        'script' => "index.php", 
                        'explanation' => "erreur dans le paramétrage du script",
                        'usage' => 'updAudit([a],[q])'))
                    );
                }
            }
        } else {
            home();
        }
    } catch(Exception $e) {
        $errorMessage = $e->getMessage();
        getError($errorMessage);
    }