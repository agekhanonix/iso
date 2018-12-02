<?php ob_start(); ?>
    
    <ol class="breadcrumb row" id="sitemap">
        <li><a href="index.php?action=home">Accueil</a></li>
        <li class="active">Administration</li>
    </ol>
    <div class="content">
<?php if(isset($_SESSION['Id'])) { ?>
     OK   
<?php } else {
    include_once('connexion.php');  
} ?>
<?php $content = ob_get_clean(); ?>
<?php require('template/templ-adm.php'); ?>