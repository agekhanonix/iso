<?php ob_start(); ?> 
    <ol class="breadcrumb row" id="sitemap">
        <li><a href="index.php?action=home">Accueil</a></li>
        <li class="active">Audit en ligne</li>
    </ol>
    <div class="content">

<?php include_once('connexion.php'); ?>
</div>
<?php $content = ob_get_clean(); ?>
<?php require('template/template.php'); ?>