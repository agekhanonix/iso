<?php ob_start(); ?>
    <ol class="breadcrumb row" id="sitemap">
        <li><a href="index.php?action=home">Accueil</a></li>
        <li class="active">Audit en ligne</li>
    </ol>
    <div class="content">
<?php if(isset($_SESSION['Id'])) { ?>
        <div id="tabs-chapter"></div>
        <div class="row">
            <div id="chapter" class="col-lg-8 col-md-6 col-sm-12 col-xs-12">
<?php foreach($chapters as $chapter) { ?>
    <section class="chapter col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <dl>
            <dt class="chapter-title">
                CHAP.&nbsp;<?= arab2rom($chapter->chapter_Id) ?>&nbsp;&nbsp;<?= mb_strtoupper($chapter->chapter_Libelle) ?>
            </dt>
            <dd>
<?php foreach($questions as $question) { ?>
    <?php if($question->question_ChapterId == $chapter->chapter_Id) {
        $before = explode('.', $question->question_predecessorId);
        if($before[0] <> 0) {
            for($i=0; $i<count($subChapters); $i++) {
                if($subChapters[$i]->subChapter_Id == $before[0]) { ?>
                    <p class="subchapter"><?= $subChapters[$i]->subChapter_Libelle ?></p>
                <?php }
            }
        }
        if($before[1] <> 0) {
            for($i=0; $i<count($preambles); $i++) {
                if($preambles[$i]->preamble_Id == $before[1]) { ?>
                    <p class="preamble"><?= $preambles[$i]->preamble_Libelle ?></p>
                <?php }
            }
        }?>
        <fieldset class="fieldset-border">
            <legend class="fieldset-border"><span class="question"><?= $question->question_Id ?></span> <?= $question->question_Libelle ?></legend>
            <div class="row">
                <div class="form-check form-check-inline col-lg-2 col-md-4 col-sm-6 col-xs-12">   
                    <label class="form-check-label" alt="Mis en oeuvre" title="Mis en oeuvre.">Mis en oeuvre</label>
                    <input class="form-check-input" type="radio" name="opt<?= $question->question_Id ?>" value="<?= ($question->question_Value * 1) ?>">
                </div>
                <div class="form-check form-check-inline col-lg-2 col-md-4 col-sm-6 col-xs-12">
                    <label class="form-check-label" alt="Partiellement mis en oeuvre" title="Partiellement mis en oeuvre.">% Mis en oeuvre</label>
                    <input class="form-check-input" type="radio" name="opt<?= $question->question_Id ?>"value="<?= ($question->question_Value * 0.5) ?>">
                </div>
                <div class="form-check form-check-inline col-lg-2 col-md-4 col-sm-6 col-xs-12">
                    <label class="form-check-label" alt="Planifié." title="Planifié.">Planifié</label>
                    <input class="form-check-input" type="radio" name="opt<?= $question->question_Id ?>"value="<?= ($question->question_Value * 0.25) ?>">
                </div>
                <div class="form-check form-check-inline col-lg-2 col-md-4 col-sm-6 col-xs-12">
                    <label class="form-check-label" alt="Non planifié." title="Non planifié.">Non planifié</label>
                    <input class="form-check-input" type="radio" name="opt<?= $question->question_Id ?>"value="<?= ($question->question_Value * 0.125) ?>">
                </div>
                <div class="form-check form-check-inline col-lg-2 col-md-4 col-sm-6 col-xs-12">
                    <label class="form-check-label" alt="Non concerné." title="Non concerné.">Non concerné</label>
                    <input class="form-check-input" type="radio" name="opt<?= $question->question_Id ?>"value="<?= ($question->question_Value * 1) ?>">
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
                    <input type="button" class="btn btn-quest btn-sm" onclick="updAudit('49aec5f6dc',2,'20181103061500', <?= $question->question_Id ?>)" value="Enregistrer"/>
                </div>
            </div>
        </fieldset>

    <?php }
    } ?>
            </dd>
        </dl>
    </section>           
<?php } ?>
        </div>
    <section class="graphe col-lg-4 col-md-6 col-sm-12 col-xs-12">
        <canvas id="myChart" width="400" height="400"></canvas>
    </section> 
</div>
<script src="public/js/gestShowChapters.js"></script>
<script src="public/js/showNotes4Graphe.js"></script>
<script type="text/javascript">window.onload = showNotes4Graphe('49aec5f6dc', 2);</script>
<?php } else { ?>
    <div class="panel panel-primary connexion">
        <div class="panel-heading">
            <h1 class="text-center">Page de connexion</h1>
            <h2 class="text-center">Pour faire un audit de sécurité en ligne de sa structure il faut se connecter ou bien créer un compte</h2>
        </div>
        <div class="panel-body">
        <div class="row">
        <section class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="panel panel-info connexion">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <img src="public/images/reseaux.png" alt="" class="img-thumbnail">
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                            <form class="form-horizontal" action="index.php?action=registring" method="post" accept-charset="utf-8" name="form-login" role="form">
                                <div class="form-group">
                                    <div class="col=lg-8 col-md-8 col-sm-6 col-xs-12">
                                        <input name="prospect_Pseudo" placeholder="Identifiant" class="form-control" type="text" required/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col=lg-8 col-md-8 col-sm-6 col-xs-12">
                                        <input name="prospect_FirstName" placeholder="Prénom" class="form-control" type="text" required/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col=lg-8 col-md-8 col-sm-6 col-xs-12">
                                        <input name="prospect_LastName" placeholder="Nom de famille" class="form-control" type="text" required/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col=lg-8 col-md-8 col-sm-6 col-xs-12">
                                        <input name="prospect_StreetNum" placeholder="N° de rue" class="form-control" type="text" required/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col=lg-8 col-md-8 col-sm-6 col-xs-12">
                                        <input name="prospect_Addr1" placeholder="Nom de la rue" class="form-control" type="text" required/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col=lg-8 col-md-8 col-sm-6 col-xs-12">
                                        <input name="prospect_Addr2" placeholder="Complément d'adresse" class="form-control" type="text" required/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col=lg-8 col-md-8 col-sm-6 col-xs-12">
                                        <input name="prospect_City" placeholder="Ville" class="form-control" type="text" required/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col=lg-8 col-md-8 col-sm-6 col-xs-12">
                                        <input name="prospect_PostalCode" placeholder="Code postal" class="form-control" type="text" required/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col=lg-8 col-md-8 col-sm-6 col-xs-12">
                                        <input name="prospect_Phone" placeholder="Téléphone fixe" class="form-control" type="text"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col=lg-8 col-md-8 col-sm-6 col-xs-12">
                                        <input name="prospect_Mobile" placeholder="Mobile" class="form-control" type="text"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col=lg-8 col-md-8 col-sm-6 col-xs-12">
                                        <input name="prospect_Email" placeholder="john.doe@ltd.com" class="form-control" type="email" required/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col=lg-8 col-md-8 col-sm-6 col-xs-12">
                                        <input name="prospect_Pwd" placeholder="Mot de passe" class="form-control" type="password" required/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col=lg-8 col-md-8 col-sm-6 col-xs-12">
                                        <input name="prospect_Confirm" placeholder="Confirmation" class="form-control" type="password" required/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col=lg-8 col-md-8 col-sm-6 col-xs-12">
                                        <button class="btn btn-default" type="submit">
                                            <span class="glyphicon glyphicon-ok btn-icon" aria-hidden="true"></span>S'enregistrer
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <section class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="panel panel-info connexion">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                            <form class="form-horizontal" action="index.php?action=connexion" method="post" accept-charset="utf-8" name="form-login" role="form">
                                <div class="form-group">
                                    <div class="col=lg-8 col-md-8 col-sm-6 col-xs-12">
                                        <input name="pseudo" placeholder="Identifiant" class="form-control" type="text" id="UserUsername"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col=lg-8 col-md-8 col-sm-6 col-xs-12">
                                        <input name="pwd" placeholder="Mot de passe" class="form-control" type="password" id="UserPassword"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col=lg-8 col-md-8 col-sm-6 col-xs-12">
                                        <button class="btn btn-default" type="submit">
                                            <span class="glyphicon glyphicon-ok btn-icon" aria-hidden="true"></span>Se connecter
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <img src="public/images/serveurs.png" alt="" class="img-thumbnail">
                        </div>
                        <section class="graphe col-lg-offset-2 col-lg-8 col-md-8 col-sm-8 col-xs-8">
                            <canvas id="myGraph" width="200" height="200"></canvas>
                        </section> 
                    </div>
                </div>
            </section>      
        </div>
    </div>
    <script src="public/js/Graphe.js"></script>  
<?php } ?>
<?php $content = ob_get_clean(); ?>
<?php require('template/template.php'); ?>