
<?php if(count($qValues) > 0 ) $notes = array_column($qValues, 'question_Value'); ?>
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
            <input type="hidden" id="auditId" value=<?= $_SESSION['AuditId'] ?>>
            <input type="hidden" id="auditDate" value=<?= $_SESSION['AuditDate'] ?>>
            <input type="hidden" id="sessionId" value=<?= $_SESSION['Id'] ?>>
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
<?php if(count($qValues) > 0 ){$key = array_search($question->question_Id, array_column($qValues, 'question_Id'));} else {$key = null;}
    ?>
        <fieldset class="fieldset-border">
            <legend class="fieldset-border"><span class="question"><?= $question->question_Id ?></span> <?= $question->question_Libelle ?></legend>
            <div class="row">
                <div class="form-check form-check-inline col-lg-2 col-md-4 col-sm-6 col-xs-12">   
                    <label class="form-check-label" alt="Mis en oeuvre" title="Mis en oeuvre.">Mis en oeuvre</label>
<?php if(!is_null($key) && $notes[$key] == $question->question_Value * 1) {$checked = "checked";} else {$checked = "";}?>
                    <input class="form-check-input" 
                        type="radio" name="opt<?= $question->question_Id ?>" 
                        value="<?= ($question->question_Value * 1) ?>"
                        onclick="updAudit(<?= $question->question_Id ?>)" <?= $checked ?>>
                </div>
                <div class="form-check form-check-inline col-lg-2 col-md-4 col-sm-6 col-xs-12">
                    <label class="form-check-label" alt="Partiellement mis en oeuvre" title="Partiellement mis en oeuvre.">% Mis en oeuvre</label>
<?php if(!is_null($key) && $notes[$key] == $question->question_Value * 0.5) {$checked = "checked";} else {$checked = "";}?>
                    <input class="form-check-input" 
                        type="radio" name="opt<?= $question->question_Id ?>"
                        value="<?= ($question->question_Value * 0.5) ?>"
                        onclick="updAudit(<?= $question->question_Id ?>)" <?= $checked ?>>
                </div>
                <div class="form-check form-check-inline col-lg-2 col-md-4 col-sm-6 col-xs-12">
                    <label class="form-check-label" alt="Planifié." title="Planifié.">Planifié</label>
<?php if(!is_null($key) && $notes[$key] == $question->question_Value * 0.25) {$checked = "checked";} else {$checked = "";}?>
                    <input class="form-check-input" 
                        type="radio" name="opt<?= $question->question_Id ?>"
                        value="<?= ($question->question_Value * 0.25) ?>"
                        onclick="updAudit(<?= $question->question_Id ?>)" <?= $checked ?>>
                </div>
                <div class="form-check form-check-inline col-lg-2 col-md-4 col-sm-6 col-xs-12">
                    <label class="form-check-label" alt="Non planifié." title="Non planifié.">Non planifié</label>
<?php if(!is_null($key) && $notes[$key] == 0) {$checked = "checked";} else {$checked = "";}?>
                    <input class="form-check-input" 
                        type="radio" name="opt<?= $question->question_Id ?>"
                        value="0"
                        onclick="updAudit(<?= $question->question_Id ?>)" <?= $checked ?>>
                </div>
                <div class="form-check form-check-inline col-lg-2 col-md-4 col-sm-6 col-xs-12">
                    <label class="form-check-label" alt="Non concerné." title="Non concerné.">Non concerné</label>
<?php if(!is_null($key) && $notes[$key] == $question->question_Value * 0.5) {$checked = " checked";} else {$checked = "";}?>
                    <input class="form-check-input" 
                        type="radio" name="opt<?= $question->question_Id ?>"
                        value="-1"
                        onclick="updAudit(<?= $question->question_Id ?>)" <?= $checked ?>>
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
        <form method="post" action="index.php?action=generateAudit&auditId=<?= $_SESSION['AuditId'] ?>&prospectId=<?= $_SESSION['Id'] ?>" onsubmit="prepareImg();">
            <input id="image" name="image" type="hidden" value="">
            <input id="auditId" name="auditId" type="hidden" value=<?= $_SESSION['AuditId'] ?>>
            <input id="sessionId" name="sessionId" type="hidden" value=<?= $_SESSION['Id'] ?>>
            <button class="btn btn-default" type="submit">
                <span class="far fa-file-pdf btn-icon" aria-hidden="true"></span>Generer le rapport d'audit : <?= $_SESSION['AuditId'] ?>
            </button>&nbsp;
<?php if(isset($_GET['pdf'])) { ?>
        <a href="view/reportings/<?= $_GET['pdf'] ?>.pdf"><img src="public/images/pdf.png" alt="download audit"></a>
<?php } ?>
        </form>
    </section> 
</div>
<script src="public/js/gestShowChapters.js"></script>
<script src="public/js/showNotes4Graphe.js"></script>
<script type="text/javascript">window.onload = showNotes4Graphe();</script>
<?php } else {
    include_once('connexion.php');  
} ?>
<?php $content = ob_get_clean(); ?>
<?php require('template/template.php'); ?>