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
            } elseif($_GET['action'] == 'getCreations') {
                getCreations();
            } elseif($_GET['action'] == 'addService') {
                if(!empty($_POST['title']) && !empty($_POST['description'])) {
                    if(is_uploaded_file($_FILES['image']['tmp_name']) && is_uploaded_file($_FILES['booklet']['tmp_name'])) {
                        $upload_file_image = $_FILES['image']['name'];
                        $upload_file_booklet = $_FILES['booklet']['name'];
                        if(($_FILES['image']['size'] < 1000000) && ($_FILES['booklet']['size'] < 1000000)) {
                           $destImage = 'public/images/services/' . $upload_file_image;
                           $destBooklet = "divers/brochures/" . $upload_file_booklet;
                           if(move_uploaded_file($_FILES['image']['tmp_name'], $destImage) && move_uploaded_file($_FILES['booklet']['tmp_name'], $destBooklet)) {
                                addService($upload_file_image, $_POST['title'], strip_tags($_POST['description']), $upload_file_booklet);
                           }  
                        } else {
                            throw new Exception(json_encode(array('error' => "act005",
                            'msg' => "Une erreur s'est produite durant le chargement des fichiers",
                            'type' => "action", 
                            'name' => "addService", 
                            'script' => "admin.php", 
                            'explanation' => "L'un des fichiers a une taille trop importante")));
                        }
                    } else {
                        throw new Exception(json_encode(array('error' => "act004",
                        'msg' => "Une erreur s'est produite durant le chargement des fichiers",
                        'type' => "action", 
                        'name' => "addService", 
                        'script' => "admin.php", 
                        'explanation' => "Une erreur s'est produite lors du chargement des fichiers")));
                     }
                } else {
                    throw new Exception(json_encode(array('error' => "act003",
                        'msg' => "Toutes les infos nécéssaires n'ont pas été renseignées",
                        'type' => "action", 
                        'name' => "addService", 
                        'script' => "admin.php", 
                        'explanation' => "erreur dans le paramétrage du script")));
                }
            } elseif($_GET['action'] == 'publish') {
                if(isset($_GET['id']) && isset($_GET['val'])) {
                    publish($_GET['id'], $_GET['val']);
                } else {
                    throw new Exception(json_encode(array('error' => "act006",
                        'msg' => "Toutes les infos nécéssaires n'ont pas été renseignées",
                        'type' => "action", 
                        'name' => "publish", 
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