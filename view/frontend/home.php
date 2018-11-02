<?php ob_start(); ?>
<ol class="breadcrumb row" id="sitemap">
        <li class="active">Accueil</li>
    </ol>
    <div class="content">
        <header class="page-header">
            <h4>Le catalogue de nos services</h4>
        </header>

        <section class="row services">
            <section class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">La SARL TH.CHARPENTIER, soucieuse de vous offrir le meilleur service adapté à vos besoins, décline ses prestations selon trois niveaux.</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><img class="star" src="public/images/services/1star.png" alt="">Service curatif</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                                <img src="public/images/services/curatif.png" alt="1er niveau de service" title="Service 'Standard'">
                                            </div>
                                            <div class="col-lg-8 col-md-6 col-sm-12 col-xs-12">
                                                <p>Aprés que vous ayez détecté un incident sur votre système d'information et établi le diagnostic de premier niveau, nos experts interverviennent dans un délai de 4h <i><small>(G.T.I.)</small></i> suivant votre appel</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><img class="star" src="public/images/services/2stars.png" alt="">Service réactif</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                                <img src="public/images/services/reactif.png" alt="2e niveau de service" title="Service 'Affaires'">
                                            </div>
                                            <div class="col-lg-8 col-md-6 col-sm-12 col-xs-12">
                                                <p>Nos opérateurs prennent en charge la supervision de votre système d'informations, détectent un incident, et aprés avoir établi le diagnostic de 1er niveau, envoient une équipe d'experts qui interviennent et remettent celui-ci en conditions opérationnelles dans un délai de 4h <i><small>(G.T.R.)</small></i> suivant la détection de l'incident</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><img class="star" src="public/images/services/3stars.png" alt="">Service préventif</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                                <img src="public/images/services/preventif.png" alt="3e niveau de service" title="Service 'Club'">
                                            </div>
                                            <div class="col-lg-8 col-md-6 col-sm-12 col-xs-12">
                                                <p>Les ingénieurs de la SARL TH.CHARPENTIER prennent en charge l'infogérance de votre système d'informations. Nous nous engageons sur un taux de disponibilité de 99.98%</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>   
                        </div>
                    </div>
<?php foreach($services as $service) { ?>
    <article data-expand class="card" style="width: 18rem;">
        <span>
            <img class="card-img-top img-thumbnail" src="public/images/services/<?= $service->service_Img ?>" 
            alt=""><br/><? $service->service_Title ?>
        </span>
        <div class="card-body>">
            <h5 class="card-title"><?= $service->service_Title ?></h5>
            <p class="card-text"><?= $service->service_Description ?></p>
            <a href="#" class=" btn btn-default">Être rappellé</a>
    </article>
<?php } ?>
                </div>
            </section>
        </section>
    </div>
<?php $content = ob_get_clean(); ?>
<?php require('template/template.php');