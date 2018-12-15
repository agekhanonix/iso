<?php ob_start(); ?>
    
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php?action=home">Accueil</a></li>
        <li class="breadcrumb-item active" aria-current="page"><a href="admin.php?action=admin">Administration des prospects</a></li>
    </ol>
    <div class="content">
<?php if(isset($_SESSION['Id']) AND $_SESSION['level'] > 3) { ?>
        <div class="container-fluid">
            <section class="row">
                <aside class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h6 class="text-uppercase text-center thead">comptes</h6>
                        </div>
                        <div class="panel-body">
                            <table class="table">
                                <thead>
                                    <tr class="thead"><th class="text-center"><span class="color-lightblue">#</span></th><th><span class="color-lightblue">Compte</span></th><th><span class="color-lightblue">Société</span></th><th class="text-center">&nbsp;</th></tr>
                                </thead>
                                <tbody>
<?php foreach($prospects as $prospect) { 
    if($prospect->Registred == 0) {
        $icon ='fa-eye glyph-green';
        $val = 1;
    } else {
        $icon = 'fa-eye-slash glyph-red';
        $val = 0;
    }
?>
    <tr><td class="text-center"><?= $prospect->Id ?></td><td><?= $prospect->Pseudo ?></td><td><?= $prospect->Society ?></td><td class="text-center"><a href="admin.php?action=revoke&id=<?= $prospect->Id ?>&val=<?= $val ?>"><i class="far <?= $icon ?>"</i></a></td></tr>           
<?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </aside>
                <aside class="col-lg-7 col-md-7 col-sm-6 col-xs-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h6 class="text-uppercase text-center thead">informations détaillées prospects</h6>
                        </div>
                        <div class="panel-body">
                            <table class="table">
                                <thead>
                                    <tr class="thead"><th class="text-center"><span class="color-lightblue">#</span></th><th class="text-center"><span class="color-lightblue">société</span></th><th class="text-center"><span class="color-lightblue">correspondant</span></th><th><span class="color-lightblue">audit</span></th></tr>
                                </thead>
                                <tbody>
<?php foreach($prospects as $prospect) { ?>
    <tr><td class="text-center"><?= $prospect->Id ?></td><td class="text-nowrap" data-toggle="modal" data-target="#det<?= $prospect->Id ?>"><?= $prospect->Society ?></td><td class="text-nowrap" data-toggle="modal" data-target="#det<?= $prospect->Id ?>"><?= $prospect->FirstName ?> <?= $prospect->LastName ?></td>
<?php if($prospect->Quests > 0) { ?>
    <td class="text-center" data-toggle="modal" data-target="#info<?= $prospect->Audit ?>"><span class="badge badge-primary color-black"><?= $prospect->Quests ?> <i class="far fa-question-circle"></i></span></td></tr>    
<?php } else { ?>   
    <td class="text-center"><span class="badge badge-primary color-black"><?= $prospect->Quests ?> <i class="far fa-question-circle"></i></span></td></tr>
<?php }} ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </aside>
<?php foreach($prospects as $prospect) { ?>
    <!-- Modal -->
    <div class="modal fade" id="det<?= $prospect->Id ?>" tabindex="-1" role="dialog" aria-labelledby="det<?= $prospect->Id ?>Title" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="det<?= $prospect->Id ?>Title"><?= $prospect->Society ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <ul class="list-group">
                        <li class="list-group-item"><span class="text-modal"><strong>Correspondant : </strong><?= $prospect->FirstName ?> <?= $prospect->LastName ?></span></li>
                        <li class="list-group-item"><span class="text-modal"><strong>Adresse : </strong><?= $prospect->StreetNum ?> <?= $prospect->Addr1 ?> - <?= $prospect->PostalCode ?> <?= $prospect->City ?></span></li>
                        <li class="list-group-item"><span class="text-modal"><strong>Latitude : </strong><?= $prospect->Lat ?> - <strong>Longitude : </strong><?= $prospect->Lng ?></span></li>
                        <li class="list-group-item"><span class="text-modal"><strong>Téléphone : </strong><?= $prospect->Phone ?></span></li>
                        <li class="list-group-item"><span class="text-modal"><strong>Mobile : </strong><?= $prospect->Mobile ?></span>/li>
                        <li class="list-group-item"><span class="text-modal"><strong>Courriel : </strong><?= $prospect->Email ?></span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<?php foreach($array as $row) { ?>
    <div class="modal fade" id="info<?= $row['Audit_Id'] ?>" tabindex="-1" role="dialog" arial-labelledby="info<?= $row['Audit_Id'] ?>Title" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="info<?= $row['Audit_Id'] ?>Title">Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table>
                        <thead>
                            <tr><th>#</th><th>Ratio</th><th>Score</th><th>Préconisation</th></tr>
                        </thead>
                        <tbody>
<?php for($i=1; $i<=10; $i++) {
    if(isset($row[$i])) {
        if($row[$i]['Score'] < 30) $preco = "<span class='color-danger'>L'implémentation est primordiale.</span>";
        if($row[$i]['Score'] >= 30 && $row[$i]['Score'] < 50) $preco = "<span class='color-lightdanger'>L'implémentation est urgente.</span>";
        if($row[$i]['Score'] >= 50 && $row[$i]['Score'] < 60) $preco = "<span class='color-warning'>L'implémentation est à améliorer.</span>";
        if($row[$i]['Score'] >= 60) $preco = "<span class='color-green'>L'implémentation est satisfaisante</span>"; ?>
        <tr><td><?= arab2rom($i) ?></td><td><?= $row[$i]['Notes'] ?> / <?= $row[$i]['Quests'] ?></td><td><?= number_format($row[$i]['Score'],2, ',', ' ') ?></td><td class="text-nowrap"><?= $preco ?></td></tr>
    <?php } else { ?>
        <tr><td><?= arab2rom($i) ?></td><td> ... </td><td> ... </td><td><span class="color-danger">L'implémentation de ce chapitre est primordiale.</span></td></tr>
    <?php }} ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
            </section><br/>
            <section class="row" id="map">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h6 class="text-uppercase text-center thead">localisation</h6>
                </div>  
                <aside class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="text-uppercase text-center thead">filtrage des audits</h6>
                            <div class="form-check form-check-radio">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="select" value="1">Tous 
                                    <span class="form-check-sign"></span>
                                </label>
                            </div>
                            <div class="form-check form-check-radio">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="select" value="2">Sans réponses 
                                    <span class="form-check-sign"></span>
                                </label>
                            </div>
                            <div class="form-check form-check-radio">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="select" value="3">% traités
                                    <span class="form-check-sign"></span>
                                </label>
                            </div>
                            <div class="form-check form-check-radio">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="select" value="4">Réalisés à 100% 
                                    <span class="form-check-sign"></span>
                                </label>
                            </div>
                        </div>
                        <button type="button" class="btn btn-warning" id="filter"><i class="fas fa-filter"></i> Filtrer</button>
                    </div>
                </aside>
                <article class="col-lg-9 col-md-9 col-sm-6 col-xs-12">
                    <div id="google-map" style="height: 400px;"></div><!--Google map-->
                </article>
            </section><br/>
            <section class="row" id="services">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h6 class="text-uppercase text-center thead">création & gestion des services</h6>
                </div>
                <article class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h6 class="text-uppercase text-center thead">création de services</h6>
                        </div>
                        <div class="panel-body">
                            <div class="card">
                                <div class="card-body">
                                    <form action="admin.php?action=addService" method="post" accept-charset="utf-8" name="form-login" role="form" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-lg-1 col-md-1 col-sm-2 col-xs-6">
                                                <label><i class="fas fa-images" title="L'image représentant le service"></i></label>
                                            </div>
                                            <div class="col-lg-11 col-md-11 col-sm-10 col-xs-6">
                                                <input type="file" class="form-control" id="image" name="image" placeholder="Iconographie" accept="image/png, image/jpeg" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-1 col-md-1 col-sm-2 col-xs-6">
                                                <label><i class="fas fa-leaf" title="Le titre du service"></i></label>
                                            </div>
                                            <div class="col-lg-11 col-md-11 col-sm-10 col-xs-6">
                                                <input type="text" class="form-control" id="title" name="title" placeholder="Le titre du service" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-1 col-md-1 col-sm-2 col-xs-6">
                                                <label><i class="far fa-edit" title="La description du service"></i></label>
                                            </div>
                                            <div class="col-lg-11 col-md-11 col-sm-10 col-xs-6">
                                                <textarea class="form-control" id="editable" name="description"></textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-1 col-md-1 col-sm-2 col-xs-6">
                                                <label><i class="fas fa-file-pdf" title="La brochure explicative du service"></i></label>
                                            </div>
                                            <div class="col-lg-11 col-md-11 col-sm-10 col-xs-6">
                                                <input type="file" class="form-control" id="booklet" name="booklet" placeholder="La brochure explicative" accept=".pdf" required>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-warning"><i class="far fa-share-square"></i> Envoyer</button>
                                    </form>
                                </div>      
                            </div>
                        </div>
                    </div>
                </article>
                <article class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h6 class="text-uppercase text-center thead">gestion des services</h6>
                        </div>
                        <div class="panel-body">
                            <table class="table">
                                <thead>
                                    <tr class="thead"><th class="text-center"><span class="color-lightblue">#</span></th><th><span class="color-lightblue">Nom du service</span></th><th class="text-center">&nbsp;</th></tr>
                                </thead>
                                <tbody>
<?php foreach($services as $service) {
    if($service->service_Publish == 0) {
        $icon ='fa-eye-slash glyph-red';
        $val = 1;
    } else {
        $icon = 'fa-eye glyph-green';
        $val = 0;
    } ?>
    <tr><td><?= $service->service_Id ?></td><td class="text-uppercase thin"><?= $service->service_Title ?></td><td class="text-center"><a href="admin.php?action=publish&id=<?= $service->service_Id ?>&val=<?= $val ?>"><i class="far <?= $icon ?>"</i></a></td></tr>   
<?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div> 
                </article>
            </section><br/>
            <section class="row" id="frequentation">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h6 class="text-uppercase text-center thead">créations de nouveaux comptes sur les 12 derniers mois.</h6>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <canvas id="volumetrie" height="90px"></canvas>
                </div>   
        </div>    
<?php } else {
    include_once('connexion.php');  
} ?>
    </div>
    <!-- ======          Objects Library           ====== -->
    <script src="public/js/objects/gmap.js"></script>
    <script src="public/js/objects/infobubble.js"></script>
    <script src="public/js/objects/marker.js"></script>
    <!-- ###           JAVASCRIPT / CUSTOM JS         ### -->
    <script src="public/js/plugins/Chart.bundle.min.js"></script>
    <script src="public/js/frequentation.js"></script>
    <script src="public/js/volumetrie.js"></script>
    <!-- ======        Google Map API Call         ====== -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCXB6yLq41R_CSfl2saDa1pqqOutPwVNnI&callback=initMap" async defer></script>
<?php $content = ob_get_clean(); ?>
<?php require('template/templ-adm.php'); ?>