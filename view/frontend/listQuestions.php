<?php ob_start(); ?>
    <ol class="breadcrumb row" id="sitemap">
        <li><a href="index.php?action=home">Accueil</a></li>
        <li class="active">Audit en ligne</li>
    </ol>
    <div class="content">
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
            <form class="form-quest row" action="index.php?action=updAudit&a=test&q=<?= $question->question_Id ?>&c=2" method="post">
                <div class="row">    
                    <label class="radio-inline col-lg-1 col-md-1 col-sm-1 col-xs-1" alt="Mis en oeuvre" title="Mis en oeuvre."><input type="radio" name="opt<?= $question->question_Id ?>" value="<?= ($question->question_Value * 1) ?>">M.E.O.</label>
                    <label class="radio-inline col-lg-2 col-md-1 col-sm-1 col-xs-1" alt="Partiellement mis en oeuvre" title="Partiellement mis en oeuvre."><input type="radio" name="opt<?= $question->question_Id ?>"value="<?= ($question->question_Value * 0.5) ?>">% M.E.O.</label>
                    <label class="radio-inline col-lg-2 col-md-2 col-sm-2 col-xs-2" alt="Planifié." title="Planifié."><input type="radio" name="opt<?= $question->question_Id ?>"value="<?= ($question->question_Value * 0.25) ?>">Planifié</label>
                    <label class="radio-inline col-lg-2 col-md-2 col-sm-2 col-xs-2" alt="Non planifié." title="Non planifié."><input type="radio" name="opt<?= $question->question_Id ?>"value="<?= ($question->question_Value * 0.125) ?>">Non plan.</label>
                    <label class="radio-inline col-lg-1 col-md-1 col-sm-1 col-xs-1" alt="Non concerné." title="Non concerné."><input type="radio" name="opt<?= $question->question_Id ?>"value="<?= ($question->question_Value * 1) ?>">N/C</label>
                    <button type="submit" class="btn btn-quest btn-sm col-lg-2 col-md-2 col-sm-3 col-xs-3" onclick="history.go(-1)"> 
                        <span class="glyphicon glyphicon-ok glyph-quest" aria-hidden="true"></span>Enregistrer
                    </button>
                </div>
            </form>
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
<script src="public/js/auditGraphe.js"></script>
<?php $content = ob_get_clean(); ?>
<?php require('template/template.php'); ?>