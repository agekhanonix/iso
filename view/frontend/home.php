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
            <a href="#" class="btn btn-default" data-toggle="modal" data-target="#booklet-mail<?= $service->service_Id ?>" ><i class="far fa-envelope-open"></i>Recevoir une brochure</a>
    </article>
     <div class="modal fade" id="booklet-mail<?= $service->service_Id ?>" tabindex="-1" role="dialog" aria-labelledby="contact-mailTitle" arria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="glyphicon glyphicon-remove-circle"></i></span> 
                    </button>
                </div>
                <div class="modal-body">
                <form class="form form-horizontal" action="index.php?action=mailBooklet&id=<?= $service->service_Id ?>" method="post">
                    <h3 class="form"><?= $service->service_Title ?></h3>
                    <h4 class="form">Pour recevoir une brochure d'informations</h4>
                    <fieldset class="form">
                        <div class="row">
                            <input type="hidden" name="booklet<?= $service->service_Id ?>" value="<?= $service->service_Booklet ?>">
                            <div class="form-group has-error has-feedback col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <label for="name<?= $service->service_Id ?>" class="col-lg-3 col-md-3 col-sm-3 col-xs-3 control-label">Nom</label>
                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                                    <input type="text" class="form-control" id="name<?= $service->service_Id ?>" name="name<?= $service->service_Id ?>" placeholder="Thierry CHARPENTIER"
<?php if(isset($_SESSION['Id'])) { ?>
    value="<?= $_SESSION['FirstName'] ?> <?= $_SESSION['LastName'] ?>"
<?php } else { ?>
    value=""
<?php } ?>>                                 
                                    <span class="glyphicon glyphicon-warning-sign form-control-feedback"></span>
                                </div>
                            </div>
                        </div>
                      <div class="row">
                            <div class="form-group has-error has-feedback col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <label for="email<?= $service->service_Id ?>" class="col-lg-3 col-md-3 col-sm-3 col-xs-3 control-label">Courriel</label>
                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                                    <input type="text" class="form-control has-error has-feedback" id="email<?= $service->service_Id ?>" name="email<?= $service->service_Id ?>" placeholder="jean.dupont@ltd.com" 
<?php if(isset($_SESSION['Id'])) { ?>
    value="<?= $_SESSION['Email'] ?>"
<?php } else { ?>
    value=""
<?php } ?>>
                                    <span class="glyphicon glyphicon-warning-sign form-control-feedback"></span>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <div class="row">
                        <div class="form-group">
                            <button type="submit" id="submit" class="btn btn-sm btn-default">
                                <span class="glyphicon glyphicon-ok btn-icon" aria-hidden="true"></span>Envoyer
                            </button>
                        </div>
                    </div>
                </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermeture</button>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
                </div>
            </section>
        </section>
    </div>
<?php $content = ob_get_clean(); ?>
<?php require('template/template.php');