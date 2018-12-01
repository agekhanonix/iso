<?php ob_start(); ?>
    <ol class="breadcrumb row">
    <li><a href="index.php?action=home">Accueil</a></li>
    <li><a href="#">Administration</a></li>
    <li><a href="#">Des prospects</a></li>
    <li class="active">Fréquentation</li>
</ol>
<div class="content">
    <header class="page-header">
        <h4>Frequentation</h4>
    </header>    
    <section class="row frequentation">
        <aside class="col-lg-2 col-md-3 col-sm-6 col-xs-12">
            <fieldset class="fieldset-border">
                <legend class="fieldset-border">Filtrage</legend>
                <div class="input-group input-group-sm">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="radio" name="select" value="1">
                            <span>Tous</span>
                        </div>
                    </div>
                </div>
                <div class="input-group input-group-sm">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="radio" name="select" value="2">
                            <span>Sans réponses</span>
                        </div>
                    </div>
                </div>
                <div class="input-group input-group-sm">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="radio" name="select" value="3">
                            <span>Partiellements traités</span>
                        </div>
                    </div>
                </div>
                <div class="input-group input-group-sm">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="radio" name="select" value="4">
                            <span>Réalisés à 100%</span>
                        </div>
                    </div>
                </div>
                <div class="input-group input-group-sm">
                    <div class="input-group-prepend">
                        <button class="btn btn-default" type="button" id="filter">Filtrer</button>
                    </div>
                </div>
            </fieldset>
        </aside>
        <article class="col-lg-10 col-md-9 col-sm-6 col-xs-12">
            <div id="google-map" style="height: 400px;"></div><!--Google map-->
        </article>
    </section> 
</div><!-- END (content) -->
<!-- ======          Objects Library           ====== -->
<script src="public/js/objects/gmap.js"></script>
<script src="public/js/objects/marker.js"></script>
<!-- ###           JAVASCRIPT / CUSTOM JS         ### -->
<script src="public/js/frequentation.js"></script>  <!-- Main program -->
<!-- ======        Google Map API Call         ====== -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCXB6yLq41R_CSfl2saDa1pqqOutPwVNnI&callback=initMap" async defer></script>
<?php $content = ob_get_clean(); ?>
<?php require('template/templ-adm.php');