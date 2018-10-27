<?php
    // Chargement des classes
    
    function getError($error) {
        $err = json_decode($error);
        require('view/error.php');
    }
    function polities() {
        require('view/frontend/polities.php');
    }
    function home() {
        require('view/frontend/home.php');
    }