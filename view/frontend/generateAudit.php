<style type="text/css">
    table {width:  100%;}
    th {text-align: center;}
    td{text-align: left;}
    td.right{text-align: right;}
    td.left {text-align: left;}
    td.center{text-align: center;}
    td.border {border-left: 1px dotted #90007a;border-bottom: 1px solid #90007a;border-right: 2px solid #90007a;}
    td.border-bottom {border-bottom: dotted 1px #3d424d;}
    td.top {vertical-align: top;}
    .w100 {width: 100%;}
    .w80 {width: 80%;}
    .w70 {width: 70%;}
    .w60 {width: 60%;}
    .w50 {width: 50%;}
    .w40 {width: 40%;}
    .w30 {width: 30%;}
    .w20 {width: 20%;}
    .w15 {width: 15%;}
    .w10 {width: 10%;}
    .h70 {height: 70%;}
    .h3 {height: 3%;}
    .h1 {height: 1%;}
    .XX-thin {font-size: 0.2rem; font-style: italic;}
    .X-thin {font-size: 0.5rem;}
    .thin {font-size: 0.8rem;}
    .thick {font-size: 1.3rem; text-transform: uppercase; text-shadow: 1px 2px 0 rgba(0,0,0,0.4),
        -1px -2px 0 rgba(255,255,255,1);color: #90007a;}
    .blue {background: #ffcef8;}
    .margin {padding-left: 20px; padding-right: 10px;}
    .li {list-style-type: disc;}
</style>
<?php
    $moyens = array(52, 43, 44, 44, 63, 58, 56, 43, 41, 47);
    $explanations = array("En France 2/3 des entreprises n'ont pas défini de politique de sécurité (source: CLUSIF 2003). Elles ne sont que 1/3 à ne pas l'avoir fait aux USA.",
        "44% des entreprises françaises ont, au moins, une personne chargée de la sécutié informatique. C'est souvent un spécialiste technique qui a une vision plutôt techno-centrique du sujet.",
        "La démarche d'identification des actifs d'information, des risques associés n'est encore diffusée que dans les grandes entreprises. C'est pourtant la base d'une démarche sécurité.",
        "C'est un sujet peu abordé en France (alors qu'au moins 85% des attaques viennent de l'intérieur de l'entreprise), sauf sous le biais de sessions de sensibilisation, dont l'efficacité reste à démontrer",
        "C'est évidemment le sujet de la sécurité le mieux traité, car domaine plus technique qu'organisationnel et pris en compte depuis l'ouverture des premiers systèmes centraux.",
        "Ce domaine est généralement au coeur des préoccupation de l'homme sécurité. Avec l'ouverture des réseaux aux clients et aux fournisseurs, la signature électronnique est promise à un bel avenir",
        "Si évidemment il s'agit là d'une brique de base de la sécurité, organiser la revue des autorisations et complèter les mots de passe par un moyen d'authentification plus solide est très souvent utile.",
        "Domaine complexe, notamment lors de l'utilisation de progiciels (ERP, ...). A traiter lors de la mise en oeuvre d'@commerce ou en cas de dévellopement spécifiques sur le coeur de métier.",
        "plus de 70% des entreprises n'ont pas ou ne remettent pas à jour un plan de continuité d'activité.<br>Pourtant il peut impliquer (ou non) la survie de l'entreprise en cas de sinistre majeur.",
        "Entre CNIL, DCSSSI, code pénal, ... les entreprises seraient avisées de mieux se protéger personnellement et de mettre en place une charte de sécurité (ou d'utilisation des TIC)."
    );
    for($i=0; $i<count($chapters); $i++) {
        $scores[$chapters[$i]->chapter_Id]['Id'] = $chapters[$i]->chapter_Id;
        $scores[$chapters[$i]->chapter_Id]['Libelle'] = $chapters[$i]->chapter_Libelle;
        $scores[$chapters[$i]->chapter_Id]['score'] = 0;
        $scores[$chapters[$i]->chapter_Id]['moyen'] = $moyens[$chapters[$i]->chapter_Id - 1];
        $scores[$chapters[$i]->chapter_Id]['explanation'] = $explanations[$chapters[$i]->chapter_Id - 1];
    }
    foreach($notes as $note) {
        $scores[$note->chapter_Id]['score'] = $note->note;
    }
?>
<page class="page">
    <div class="center-text"><img src="public/images/logo.png"></div>
    <table>
        <col class="w40 top">
        <col class="w20">
        <col class="w40 top">
        <tr>
            <td>Monsieur Thierry CHARPENTIER<br/>
                <strong>SARL TH.CHARPENTIER</strong><br/>
                28,Rue plaine des Gardes<br/>
                FR10300 - SAINTE-SAVINE<br/>
                <i class="glyphicon glyphicon-phone">&nbsp;+33(0).25.74.50.73</i>
            </td>
            <td>&nbsp;</td>
            <td>&agrave; Madame / Monsieur <?= $_SESSION['LastName'] ?> <?= $_SESSION['FirstName'] ?><br>
                <strong><? $_SESSION['Society'] ?></strong><br>
                <?= $_SESSION['StreetNum'] ?>,<?= $_SESSION['Addr1'] ?><br/>
                <?= $_SESSION['Addr2'] ?><br/>
                <?= $_SESSION['PostalCode'] ?> <?= $_SESSION['City'] ?>
            </td>
        </tr>
    </table>
    <table><col class="w100 h1"><tr><td>&nbsp;</td></tr></table>
    <table>
        <col class="w60">
        <col class="w40 thin">
        <tr>
            <td>&nbsp;</td>
            <td>Sainte-Savine le <?= date("dmY à H:i:s") ?>,</td>
        </tr>
    </table>
    <table><col class="w100 h1"><tr><td>&nbsp;</td></tr></table>
    <table>
        <col class="w100 thick border">
        <tr>
            <td>OBJET : Rapport de l'audit r&eacute;f&eacute;renc&eacute; sous le n.&deg; <i><?= $_GET['auditId'] ?></i></td>
        </tr>
    </table>
    <table><col class="w100 h1"><tr><td>&nbsp;</td></tr></table>
    <table>
        <col class="w20 h70 blue">
        <col class="w80 margin top">
        <tr>
            <td rowspan="2">
                <table>
                    <col class="w15 margin">
                    <tr><td><img src="public/images/services/INTRUSION.png" width="25%"></td></tr>
                    <tr><td><img src="public/images/services/CORRECTIFS.png" width="25%"></td></tr>
                    <tr><td><img src="public/images/services/FORMATION.png" width="25%"></td></tr>
                    <tr><td><img src="public/images/services/INFOGERANCE.png" width="25%"></td></tr>
                    <tr><td><img src="public/images/services/VIRUS.png" width="25%"></td></tr>
                </table>
            </td>
            <td>Apr&egrave;s traitement des r&eacute;ponses que vous avez bien voulu apporter au questionnaire n&deg;<?= $_GET['auditId'] ?>, 
                nous avons plaisir &agrave; vous adresser le rapport d'audit aff&eacute;rent accompagn&eacute; de nos recommandations 
                d'actions.<br/><br/>
                Pour mémoire cet audit a pour valeur intrinsèque la qualité des réponses que vous avez pu y apporter,
                il est issu de la norme ISO 17799, elle même issue de la norme britannique BS 7799.<br/><br/>
                La norme 17799 fournit ainsi un canevas permettant d'identifier et de mettre en oeuvre des solutions pour les risques suivants :
                <ul>
                    <li class="li thin margin">Politique de sécurité (Security Policy) : rédiger et faire connaître la politique de l'entreprise en matière de sécurité,</li>
                    <li class="li thin margin">Organisation de la sécurité (Security Organisation) : Définition des rôles et des responsabilités. Mise sous contrôle des partenaires et de l'activité externalisée,</li>
                    <li class="li thin margin">Classification des biens et contrôle (Asset Classification and Control) : Etat des lieux des biens de l'entreprise et définition de leur criticité et du risque associé,</li>
                    <li class="li thin margin">Sécurité du personnel (Personnel Security) : Embauche, formation et sensibilisation à la sécurité,</li>
                    <li class="li thin margin">Sécurité physique et environnementale (Physical and Environmental Security); Périmètre de sécurité, état des lieux des équipements de sécurité,</li>
                    <li class="li thin margin">Management des communications / Opérations (Comm / Ops Management) : Procédures en cas d'accident, plan de reprise, définition des niveaux de service et des temps de reprise, protection contre les malwares, etc.</li>
                    <li class="li thin margin">Contrôle d'accès (Access Control) : Mise en place de contrôles d'accès à différents niveaux (systèmes, réseaux, bâtiments, etc.),</li>
                    <li class="li thin margin">Développement et maintenance des systèmes (System Development and Maintenance) : prise en compte des notions de sécurité dans les systèmes de la conception à la maintenance,</li>
                    <li class="li thin margin">Planification de la continuité de l'entreprise (Business Continuity Planning) : Définitions des besoins en matière de disponibilité, des temps de reprise et mise en place d'exercices de secours,</li>
                    <li class="li thin margin">Conformité (Compliance) : Respect des droits d'auteur, de la législation et de la politique règlementaire de l'entreprise.</li>
                </ul>
                Nous restons bien entendu à votre entière disposition afin de collaborer avec-vous à la réussite de votre projet de sécurisation de votre infrastucture informatique<br/><br/>
                Veuillez touver ici Madame / Monsieur <?= $_SESSION['FirstName'] ?> <?= $_SESSION['LastName'] ?> l'expression de nos courtoises salutations.<br/><br/>
                Vous en souhaitant bonne r&eacute;ception.
            </td>
        </tr>
        <tr>
            <td>
                <table>
                    <col class="w50">
                    <col class="w30">
                    <tr>
                        <td rowspan="2">&nbsp;</td>
                        <td><strong>Thierry CHARPENTIER</strong></td>
                    </tr>
                    <tr>
                        <td><img src="public/images/signature.png"></td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <table><col class="w100 h1"><tr><td>&nbsp;</td></tr></table>
    <table>
        <col class="w20" style="font-size: 10px;">
        <col class="w30" style="font-size: 10px;">
        <col class="w30" style="font-size: 10px;">
        <col class="w20" style="font-size: 10px;">
        <tr>
            <td>SARL TH.CHARPENTIER</td>
            <td>SIRET : 123456789012345</td>
            <td>CNIL : 1234567890</td>
            <td>Le : <?= date("d/m/Y") ?></td>
        </tr>
    </table>
</page>
<page>
    <table>
        <col class="w30 left" style="font-size: 10px;">
        <col class="w60 center" style="font-size: 10px;">
        <col class="w10 right" style="font-size: 10px;">
        <tr>
            <td>(c) 2018 - SARL TH.CHARPENTIER </td>
            <td>Audit : <?= $_GET['auditId'] ?> édité le <?= date("d/m/Y à H:i:s") ?></td>
            <td>Page 1/2</td>
        </tr>
    </table>
    <table><col class="w100 h1"><tr><td>&nbsp;</td></tr></table>
    <table>
        <col class="w40 top">
        <col class="w60">
        <tr>
            <th>COMPARATIF PAR SECTEURS D'ACTIVITES</th>
            <th>RADAR</th>
        </tr>
        <tr>
            <td>
                <table>
                    <col class="w70" style="font-size: 10px;">
                    <col class="w20 right" style="font-size: 10px;">
                    <tr><th>Secteurs</th><th>Note globale</th></tr>
                    <tr><td>Administration</td><td>43,80%</td></tr>
                    <tr><td>Banque et assurance</td><td>57,20%</td></tr>
                    <tr><td>Commerce</td><td>47,40%</td></tr>
                    <tr><td>Communication</td><td>49,90%</td></tr>
                    <tr><td>Industrie</td><td>48,30%</td></tr>
                    <tr><td>Sante</td><td>44,40%</td></tr>
                    <tr><td>Services</td><td>55,20%</td></tr>
                    <tr><td>Moy. Générale</td><td>52,00%</td></tr>
                    <tr><td>Votre organisme</td><td><?= number_format(floatval($globalNote[0]->note), 2, ',', ' ') ?>%</td></tr>
                    <tr><td colspan="2">&nbsp;</td></tr>
                    <tr><td colspan="2" style="text-align: center"><img src="public/images/bar-graph.png"></td></tr>
                    <tr><td colspan="2">&nbsp;</td></tr>
                    <tr><td colspan="2" class="h1">&nbsp;</td></tr>
                    <tr><td colspan="2" style="text-align: center"><img src="public/images/PDCA_Cycle.png"></td></tr>
                </table>
            </td>
            <td><img src="public/images/uploads/<?= $auditId ?>.png" width="40%"><br/>
            Référence de l'audit : <?= $auditId ?></td>
        </tr>
    </table>
    <table><col class="w100 h1"><tr><td>&nbsp;</td></tr></table>
    <table>
        <col class="w100 center thick">
        <tr>
            <td>recommandations d'actions</td>
        </tr>
    </table>
    <table><col class="w100 h1"><tr><td>&nbsp;</td></tr></table>
    <table>
        <col class="w40 thin top border-bottom">
        <col class="w60 thin top border-bottom">
<?php for($i=1; $i<=10; $i++) { ?>
        <tr>
            <td><?= arab2rom($i) ?> - <?= mb_strtoupper($scores[$i]['Libelle']) ?></td>
<?php if($scores[$i]['score'] < 30) {
    $recommandation = "Ce chapître de la sécurité est à implémenter de manière urgente.";
} elseif($scores[$i]['score'] >= 30 && $scores[$i]['score'] < 50) {
    $recommandation = "Ce chapître de la sécurité est à implémenter de façon prioritaire.";
} elseif($scores[$i]['score'] >= 50 && $scores[$i]['score'] < 60) {
    $recommandation = "L'implémentation de ce chapître de la sécurité est à améliorer.";
} elseif($scores[$i]['score'] >= 60) {
    $recommandation = "L'implémentation de ce chapître de la sécurité est satisfaisante.";
} ?>
            <td><?= $recommandation ?></td>
        </tr>
<?php } ?>
    </table>
</page>
<page orientation="landscape" format="A4">
    <table>
        <col class="w30 left" style="font-size: 10px;">
        <col class="w60 center" style="font-size: 10px;">
        <col class="w10 right" style="font-size: 10px;">
        <tr>
            <td>(c) 2018 - SARL TH.CHARPENTIER </td>
            <td>Audit : <?= $_GET['auditId'] ?> édité le <?= date("d/m/Y à H:i:s") ?></td>
            <td>Page 2/2</td>
        </tr>
    </table>
    <table><col class="w100 h1"><tr><td>&nbsp;</td></tr></table>
    <table>
        <col class="w100 center thick">
        <tr>
            <td>synthèse de l'évaluation</td>
        </tr>
    </table>
    <table>
        <col class="w20 thin top border-bottom">
        <col class="w10 thin center top border-bottom">
        <col class="w10 thin center top border-bottom">
        <col class="w10 thin center top border-bottom">
        <col class="w50 XX-thin top border-bottom" >
        <tr>
            <th>&nbsp;</th>
            <th>Votre score</th>
            <th>Score moyen</th>
            <th>Objectif</th>
            <th>&nbsp;</th>
        </tr>
<?php for($i=1; $i<=10; $i++) { ?>
        <tr>
            <td><?= arab2rom($i) ?> - <?= mb_strtoupper($scores[$i]['Libelle']) ?></td>
            <td><?= number_format(floatval($scores[$i]['score']), 2, ',', ' ') ?>%</td>
            <td><?= number_format(floatval($scores[$i]['moyen']), 2, ',', ' ') ?>%</td>
            <td><?= number_format(60, 2, ',', ' ') ?>%</td>
            <td><?= $scores[$i]['explanation'] ?></td>
        </tr>
<?php } ?>
    </table>
</page>


                    
