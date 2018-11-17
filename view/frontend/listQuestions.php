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
                    <input class="form-check-input" 
                        type="radio" name="opt<?= $question->question_Id ?>" 
                        value="<?= ($question->question_Value * 1) ?>"
                        onclick="updAudit('49aec5f6dc', 2, '20181103061500',<?= $question->question_Id ?>)">
                </div>
                <div class="form-check form-check-inline col-lg-2 col-md-4 col-sm-6 col-xs-12">
                    <label class="form-check-label" alt="Partiellement mis en oeuvre" title="Partiellement mis en oeuvre.">% Mis en oeuvre</label>
                    <input class="form-check-input" 
                        type="radio" name="opt<?= $question->question_Id ?>"
                        value="<?= ($question->question_Value * 0.5) ?>"
                        onclick="updAudit('49aec5f6dc', 2, '20181103061500',<?= $question->question_Id ?>)">
                </div>
                <div class="form-check form-check-inline col-lg-2 col-md-4 col-sm-6 col-xs-12">
                    <label class="form-check-label" alt="Planifié." title="Planifié.">Planifié</label>
                    <input class="form-check-input" 
                        type="radio" name="opt<?= $question->question_Id ?>"
                        value="<?= ($question->question_Value * 0.25) ?>"
                        onclick="updAudit('49aec5f6dc', 2, '20181103061500',<?= $question->question_Id ?>)">
                </div>
                <div class="form-check form-check-inline col-lg-2 col-md-4 col-sm-6 col-xs-12">
                    <label class="form-check-label" alt="Non planifié." title="Non planifié.">Non planifié</label>
                    <input class="form-check-input" 
                        type="radio" name="opt<?= $question->question_Id ?>"
                        value="0"
                        onclick="updAudit('49aec5f6dc', 2, '20181103061500',<?= $question->question_Id ?>)">
                </div>
                <div class="form-check form-check-inline col-lg-2 col-md-4 col-sm-6 col-xs-12">
                    <label class="form-check-label" alt="Non concerné." title="Non concerné.">Non concerné</label>
                    <input class="form-check-input" 
                        type="radio" name="opt<?= $question->question_Id ?>"
                        value="-1"
                        onclick="updAudit('49aec5f6dc', 2, '20181103061500',<?= $question->question_Id ?>)">
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
        <form method="post" action="index.php?action=generateAudit&auditId=49aec5f6dc&prospectId=2" onsubmit="prepareImg();">
            <input id="image" name="image" type="hidden" value="">
            <button class="btn btn-default" type="submit">
                <span class="far fa-file-pdf btn-icon" aria-hidden="true"></span>Generer le rapport d'audit : 49aec5f6dc
            </button>&nbsp;
<?php if(isset($_GET['pdf'])) { ?>
        <a href="view/reportings/<?= $_GET['pdf'] ?>.pdf"><img src="public/images/pdf.png" alt="download audit"></a>
<?php } ?>
        </form>
    </section> 
</div>
<script src="public/js/gestShowChapters.js"></script>
<script src="public/js/showNotes4Graphe.js"></script>
<script type="text/javascript">window.onload = showNotes4Graphe('49aec5f6dc', 2);</script>
<?php } else {
    include_once('connexion.html');  
} ?>
<?php $content = ob_get_clean(); ?>
<?php require('template/template.php'); ?>