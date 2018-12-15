<?php ob_start(); ?>
    <ol class="breadcrumb row">
    <li><a href="index.php?action=home">Accueil</a></li>
    <li><a href="#">Auditer sa structure</a></li>
    <li class="active">Choix de l'audit</li>
</ol>
<div class="content">
<?php if(isset($_SESSION['Id'])) { ?>  
    <section class="row frequentation">
        <form action="index.php?action=auditChoice" method="post">
            <fieldset class="fieldset-border">
                <legend class="fieldset-border">Faire un choix</legend>
                <div class="input-group input-group-sm">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="radio" name="choice" value="new">
                            <span><i class="far fa-chart-bar glyph blue"></i> Créer un nouvel audit</span>
                        </div>
                    </div>
                </div>
<?php foreach($audits as $audit) { ?> 
                <div class="input-group input-group-sm">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="radio" name="choice" value=<?= $audit->audit_Id ?>>
                            <span><i class="fas fa-chart-pie glyph orange"></i> du <?= substr($audit->audit_date,6,2).'/'.substr($audit->audit_date,4,2).'/'.substr($audit->audit_date,0,4).' à '.substr($audit->audit_date,8,2).':'.substr($audit->audit_date,10,2).':'.substr($audit->audit_date,12,2) ?></span>
                        </div>
                    </div>
                </div>
<?php } ?>               
                <div class="input-group input-group-sm">
                    <div class="input-group-prepend">
                        <button class="btn btn-default" type="submit" id="filter">Envoyer</button>
                    </div>
                </div>
            <form>
        </fieldset>
    </section> 
</div><!-- END (content) -->
<?php } else {
    include_once('connexion.php');  
} ?>
<?php $content = ob_get_clean(); ?>
<?php require('template/template.php');