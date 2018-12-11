-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Hôte : *******
-- Généré le :  Dim 21 oct. 2018 à 11:21
-- Version du serveur :  5.6.39-log
-- Version de PHP :  7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `agekhanokcroot`
--

--
-- Structure de la table `iso_chapters`
--

DROP TABLE IF EXISTS `iso_chapters`;
CREATE TABLE `iso_chapters` (
  `chapter_Id` int(11) NOT NULL,
  `chapter_Libelle` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour la table `iso_chapters`
--
ALTER TABLE `iso_chapters`
  ADD PRIMARY KEY (`chapter_Id`);
--
-- Chargement de la table
--
INSERT INTO `iso_chapters` (`chapter_Id`, `chapter_Libelle`) VALUES
 (1, "politique de sécurité informatique"),
 (2, "organisation de la sécurité informatique"),
 (3, "classification et controle des actifs"),
 (4, "sécurité liee au personnel"),
 (5, "sécurité physique et sécurité de l'environnement"),
 (6, "sécurité de l'exploitation et des reseaux"),
 (7, "controle d'accès logiques"),
 (8, "développement et maintenance de logiciels"),
 (9, "continuité d'activité"),
 (10, "conformites");

--
-- Structure de la table `iso_subChapters`
--
DROP TABLE IF EXISTS `iso_subChapters`;
CREATE TABLE `iso_subChapters` (
  `subChapter_Id` int(11) NOT NULL,
  `subChapter_Libelle` varchar(75) NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour la table `iso_subChapters`
--
ALTER TABLE `iso_subChapters`
  ADD PRIMARY KEY (`subChapter_Id`);
--
-- Chargement de la table
--
INSERT INTO `iso_subChapters` (`subChapter_Id`, `subChapter_Libelle`) VALUES
 (3, "responsabilité vis a vis des actifs de l'organisme"),
 (4, "la surveillance de l'information dans votre organisme comprend"),
 (5, "sécurité lors du recrutement et de la definition des postes"),
 (6, "formation des utilisateurs"),
 (7, "reaction face aux incidents et aux defauts de fonctionnement de sécurité"),
 (8, "zones securisees"),
 (9, "sécurité du materiel informatique"),
 (10, "controles generaux"),
 (11, "procedures et responsabilités operationnelles"),
 (12, "planification et recette des systèmes"),
 (13, "protection contre les logiciels malveillants"),
 (14, "exploitation courante"),
 (15, "administration du reseau"),
 (16, "manipulation des supports informatiques"),
 (17, "echanges d'informations et de logiciels"),
 (18, "exigence economique pour le controle d'accès"),
 (19, "gestion des accès de la part des utilisateurs"),
 (20, "responsabilités des utilisateurs"),
 (21, "controle d'accès au reseau"),
 (22, "controle d'accès aux systèmes d'exploitation"),
 (23, "surveillance de l'accès et surveillance de l'utilisation du système"),
 (24, "informatique nomade et teletravail"),
 (25, "exigences de sécurité des systèmes (infrastructures, developpement d'applications, de progiciels"),
 (26, "controles cryptographiques"),
 (27, "sécurité des dossiers systèmes"),
 (28, "sécurité des procedes de devellopement et de support"),
 (29, "aspects de la continuitéd'activite"),
 (30, "conformitéaux exigences legales"),
 (31, "revues de conformitéde sécurité et de conformitétechnique"),
 (32, "audits de sécurité");

--
-- Structure de la table `iso_preambles`
--
DROP TABLE IF EXISTS `iso_preambles`;
CREATE TABLE `iso_preambles` (
  `preamble_Id` int(11) NOT NULL,
  `preamble_Libelle` TEXT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour la table `iso_subChapters`
--
ALTER TABLE `iso_preambles`
  ADD PRIMARY KEY (`preamble_Id`);
--
-- Chargement de la table
--
INSERT INTO `iso_preambles` (`preamble_Id`, `preamble_Libelle`) VALUES 
(1, "La politique actuelles de sécurité informatique de votre organisme"),
(2, "Lors de l'analyse, l'evaluation, et le deploiement de la politique de sécurité, votre société"),
(3, "Les regles de sécurité informatique de votre organisme sont confortees par :"),
(4, "L'accès par des sous-traitants a votre système informatique est verifie dans votre organisme par :"),
(5, "Les prestataires d'infogerance sont controlles par :"),
(6, "Votre organisme prend en charge les prinvipaux actifs de technologie de l'informatique et de la communication"),
(7, "Votre organisme a defini la politique et les procedures qui precisent"),
(8, "Un programme de formation sur la sécurité de l'information est en place dans l'organisme pour :"),
(9, "En reaction a un incident ou a un defaut de fonctionnement de sécurité, un processus formel existe dans votre organisme qui :"),
(10, "Les installations et equipements informatiques sont correctement securises par :"),
(11, "Le materiel informatique est correctement securise par :"),
(12, "Votre organisme empeche la compromission (violation de la politique de sécurité d'un système pouvant entrainer ou non la revelation, la falsification,la destruction ou la perte d'informations sensibles), ou le vol d'informations ainsi que d'equipement de traitement de l'information en exigeant :"),
(13, "Votre organisme garant le fonctionnement correcte et securise des technologies de l'informations en securisant :"),
(14, "Votre organisme reduit le risque que les performances des systèmes d'informations pricipaux se degradent en utilisant :"),
(15, "Votre organisme protege l'integrité et la sécurité des logiciels et informations critiques par :"),
(16, "Votre organisme maintient l'integrité et la disponibilité des services essentiels et de traitement de l'information et de communication par :"),
(17, "Votre organisme garantit la protection des reseaux de telecommunication et l'infrastructure de support par :"),
(18, "Pour empecher les dommages de capitaux et l'interruption d'activite, les medias de votre organisme devraient etre verifie et physiquement proteges par :"),
(19, "Votre organisme empeche la perte, la modification, ou le mauvais usage des echanges d'information entre les organismes en utilisant de facon appropriee :"),
(20, "Votre organisme verifie l'accès aux informations sensibles de l'entreprise par :"),
(21, "Votre organisme empeche l'accès non autorise aux systèmes informatiques par :"),
(22, "Pour empecher l'accès illicite par des utilisateurs non autorises, votre organisme exige des utilisateurs :"),
(23, "La protection des services accessibles par le reseau de l'entreprise est renforcee par :"),
(24, "Tout accès aux ressources informatiques est limitépar des controle du système d'exploitation qui verifie :"),
(25, "Tous les accès et toutes les utilisations des systèmes informatiques sont surveilles pour détecter des activités illicites par :"),
(26, "Votre organisme a défini et mis en oeuvre une politique et des procédures documentées de sécurité de l'information pour verifier :"),
(27, "Votre organisme indique des exigences et des mesures de sécurité qui :"),
(28, "Votre organisme emploie des systèmes de cryptographie ainsi que des techniques pour proteger la confidentialité, l'authenticitéou l'integrité de l'onformation :"),
(29, "Les fichiers systèmes sont securiseacute;s pendant les projets informatiques et les activites de support par :"),
(30, "Afin de reduire au minimum la corruption des systèmes d'information, votre organisme verifie la mise en oeuvre des eveolution par :"),
(31, "Votre organisme a mis en oeuvre un preocessus de gestion de la continuitéd'activitéqui :"),
(32, "Votre organisme a mis en oeuvre des normes et des procedures pour garantir la conformitéaux exigences legales qui adressent specifiquement :"),
(33, "Des procédures de conformitésont en place qui exigent :"),
(34, "Des procédures d'audit sont en place qui exigent :");

--
-- Structure de la table `iso_questions`
--
DROP TABLE IF EXISTS `iso_questions`;
CREATE TABLE `iso_questions` (
  `question_Id` int(11) NOT NULL,
  `question_ChapterId` int(11) NOT NULL,
  `question_predecessorId` VARCHAR(8) NOT NULL,
  `question_Value` int(11) NOT NULL,
  `question_Libelle` TEXT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour la table `iso_questions`
--
ALTER TABLE `iso_questions`
  ADD PRIMARY KEY (`question_Id`),
  ADD KEY(`question_ChapterId`);
--
-- Chargement de la table
--
INSERT INTO `iso_questions` (`question_Id`, `question_ChapterId`, `question_predecessorId`, `question_Value`, `question_Libelle`) VALUES
 (1,1,'0.1',    6, "Définit les objectifs de sécurité de l'information et explique son importance pour votre société"),
 (2,1,'0.0',    6, "Est soutenue par la Direction générale<br><i><small>(par exemple : une note de service)</small></i>"),
 (3,1,'0.0',    6, "A défini les principales responsabilités du personnel vis a vis de la sécurité"),
 (4,1,'0.0',    6, "Fait la liaison avec d'autres documents traitant de la sécurité tels que la charte d'utilisation des nouvelles technologies de l'information, les procedures de support"),
 (5,1,'0.2',    6, "A défini un propriétaire d'actif pour assurer la sécurité de chaque actif principal"),
 (6,1,'0.0',    6, "A mis en oeuvre une revue de cette politique par les propriétaires d'actifs, des juristes, la DSI, la direction du personnel"),
 (7,2,'0.3',    4, "La mise en oeuvre d'un comité de sécurité informatique qui definit les grandes ligne pour des activites des strategies de sécurité.<br/>Ce comite inclut typiquement le responsable de la sécurité informatique, la DSI, les representants des principales entites, les auditeurs internes, la Direction du personnel."),
 (8,2,'0.0',    4, "La nomination d'un representant de la sécurité informatique dans chaque entite, filiale ou division"),
 (9,2,'0.0',    4, "Une definition claire des taches, roles specifiques, affectation des responsables de la sécurité informatique"),
 (10,2,'0.0',   4, "Le conseil de la sécurité informatique (pour l'avis d'experts) ou de coordinateurs<br/><i><small>(pour partager et coordonner la connaissance de la sécurité de l'organisme</small></i>"),
 (11,2,'0.0',   4, "L'identification de points de contact pour obtenir un support en cas d'incident de sécurité ainsi qu'une assistance et un conseil sur les contraintes legales, les normes specifiques liees au metier"),
 (12,2,'0.0',   4, "Une revue independante et pertinente de la mise en oeuvre de la politique de sécurité informatique de l'organisme"),
 (13,2,'0.0',   4, "Une revue des risques et une validation formelle de la part de la direction lors de l'utilisation ou du deploiement de nouvelles technologies informatiques (NTIC)"),
 (14,2,'0.4',   6, "La présentation des règles de sécurité de l'organisme et des obligations des tiers vis a vis des ces regles <i><small>(sous-traitant ou autre)</small></i>"),
 (15,2,'0.0',   2, "La presentation aux sous-traitants de la politique de classification de l'information et les procedures associees aux données sensibles et/ou confidentielles"),
 (16,2,'0.5',   6, "La communication des exigences de sécurité et son suivi pour proteger le patrimoine informationnel de l'entreprise"),
 (17,2,'0.0',   2, "La formation des prestataires de services d'infogerance a leurs responsabilités vis a vis de la sécurité informatique, des technologies utilisees par votre entreprise.<br/>Leurs responsabilités quant a des infractions de sécurité ou pour leur manque de vigilance, le cas echeant, devront etre clairement definies."),
 (18,3,'3.6',   3, "La définition d'un propriétaire pour chaque actif principal et la mise en oeuvre d'un tracabilitéde cet actif<br/><i><small>(non seulement par un inventaire physique des materiels mais egalement en identifiant les actifs principaux d'information qui sont detenu par l'organisme et leur valeur pour celui-ci)</small></i>"),
 (19,3,'4.0',   6, "Des procédures simples et efficaces qui indiquent le degre de protection pour chaque type d'actif d'information, <i><small>.ex:(Confidentialité = 1,2,3 ou 4 - Integrité = 1,2,3 ou 4 - Disponibilité = 1,2,3 ou 4)</small></i>"),
 (20,3,'0.0',   6, "Des procedures d'identification <i><small>(notamment etiquetage)</small></i> et de manipulation des medias physiques <i><small>(notamment en ce qui concerne les moyens de transport utilises, leur destruction, ...)</small></i>"),
 (21,4,'5.7',   4, "Les rôles et responsabilités vis a vis de la sécurité de l'information dans les descrriptions des fonction de l'organisme <i><small>(avec des exigences specifiques de sécurité pour les personnels de la Direction des Systèmes d'Informations)</small></i>"),
 (22,4,'0.0',   6, "Que les candidatures donnent lieu a verification pour s'assurer que leurs diplomes et les experiences sont reels et exactes"),
 (23,4,'0.0',   6, "Que tous les employés doivent signer un accord de confidentialité vis a vis de l'information <i><small>(ou clause de non divulgation)</small></i> et qu'ils comprennent leurs reponsabilites vis a vis du traitement de l'information."),
 (24,4,'6.8',   6, "Former le personnel aux procedures et a la politique de sécurité de l'information <i><small>(avec une verification des acquis)</small></i>"),
 (25,4,'0.0',   4, "Informer le personnel sur leurs responsabilité légales vis a vis de la sécurité ainsi que les sanctions encourues en cas de fraude."),
 (26,4,'0.0',   4, "Utiliser correctement les technologies de l'information <i><small>(bonnes pratiques sur l'utilisation d'Internet, de l'Intranet, courriels ...etc.)</small></i>"),
 (27,4,'7.9',   4, "Explique au personnel la conduite a tenir en cas d'incident de sécurité <i><small>(qui contacter, quelles information a transmettre, que faire en cas d'infection virale ...etc.)</small></i>"),
 (28,4,'0.0',   2, "Explique au personnel la methode appropriee pour conserver les preuves necessaire pour d'eventuelles investigations légales en cas d'attaque externe ou interne."),
 (29,4,'0.0',   6, "Sanctionne les employés qui ont violé les procédures et/ou les politiques de sécurité <i><small>(en liaison avec les sanctions prevues au reglement interieur)</small></i>"),
 (30,5,'8.10',  6, "L'établissement et la surveillance d'un perimêtre physique adéquat <i><small>(definition d'un ou plusieurs perimetres sensibles pour la sécurité)</small></i>"),
 (31,5,'0.0',   6, "L'enregistrement des visiteurs a l'accueil et la surveillance physique des visiteurs dans les locaux <i><small>(y compris personnel technique, liveur ...)</small></i> particulierement dans les zones sensibles."),
 (32,5,'0.0',   4, "La prise de precautions <i><small>(y compris le choix d'emplacement des locaux)</small></i> pour diminuer les risques lies aux catastrophes naturelles ou a ceux d'origine humaine"),
 (33,5,'0.0',   4, "Une surveillance adéquate du personnel ou des tiers travaillant dans les secteurs sensibles"),
 (34,5,'0.0',   4, "La verification des zones de livraison et de déchargement, si possible en isolant les equipemnts de traitement de l'information"),
 (35,5,'0.0',   6, "La surveillance des equipements informatiques vis a vis des pannes de courant et autres anomalies électriques <i><small>(baisses de tensions de courte duree, surtensions)</small></i>."),
 (36,5,'9.11',  4, "La mise en oeuvre de protection du cablage réseau et de l'alimentation électrique contre l'interception de données ou les incidents"),
 (37,5,'0.0',   6, "L'entretien correct du materiel informatique pour assurer sa disponibilité et son integrité, notamment par la surveillance d'indicateurs critiques <i><small>(erreurs d'IO ...etc.)"),
 (38,5,'0.0',   6, "La mise en oeuvre de dispositifs de destruction physique des matériels de stockage contenant des données sensibles ou l'ecrasement complet des données sensibles lors de la mise au rebut des ces materiels de stockage"),
 (39,5,'10.12', 2, "Une politique de rangement de bureau pour les documents classés et les supports de stockage amovibles, une politique d'utilisation d'ecrans de veille avec mots de passe"),
 (40,5,'0.0',   4, "Une politique de sortie de materiel informatique en dehors des locaux <i><small>(ordinateurs portables, materiels de demonstrations)</small></i> avec autorisation formelles, et un enregistrement des entrees-sortis des materiels"),
 (41,6,'11.13', 6, "Une documentation des procedures d'exploitation comprenant l'execution des traitements informatiques, les sauvegardes, la gestion des anomalies, le support aisi que les procedures de reprise"),
 (42,6,'0.0',   6, "Une procedure de gestion des évolutions des traitements <i><small>(sécurisation notamment des fonctions de livraison et de mise en production)</small></i>"),
 (43,6,'0.0',   4, "Une procédure de gestion des incidents de sécurité <i><small>(identification, classification, traçabilité)</small></i>"),
 (44,6,'0.0',   6, "Une politique pragmatique de séparation des tâches <i><small>(par exemple: entre le développement et l'exploitation)</small></i>"),
 (45,6,'12.14', 6, "Une planification de la capacité des systèmes à partir de projections d'activité qui couvre le réseau de télécommunication, les espaces de stockage, la puissance des processeurs et autres goulets d'étranglement techniques potentiels"),
 (46,6,'13.15', 6, "L'existence d'une procédure officielle de contrôle de conformité des logiciels avant leur utilisation <i><small>(notamment risques liés a l'achat de logiciels sur Internet)</small></i> et d'une procédure de vérification des logiciels <i><small>(absence d'espiogiciels, chevaux de Troie)</small></i>"),
 (47,6,'0.0',   4, "La définition d'accords <i><small>(conventions d'échanges)</small></i> pour le transfert de fichiers et de logiciels depuis/vers chacun des tiers."),
 (48,6,'0.0',   6, "L'installation et mise à jour très régulière d'un logiciel antivirus <i><small>(signature et moteur)</small></i> et passage régulier d'un &quot;scan&quot; antivirus sur l'ensemble des fichiers informatiques."),
 (49,6,'0.0',   6, "L'examen antivirus de tous les fichiers, pièces-jointes de courrier électronique ou téléchargement d'origine incertaine avant leur utilisation."),
 (50,6,'14.16', 6, "La mise en oeuvre d'un plan de sauvegarde et de reprise documenté pour l'ensemble des applications"),
 (51,6,'0.0',   6, "L'enregistrement <i><small>(main courante, ...) de l'ensemble des travaux des opérateurs"),
 (52,6,'0.0',   6, "Un enregistrement systématique des anomalies du réseau et des systèmes"),
 (53,6,'15.17', 6, "La mise en oeuvre de contrôles spécifiques pour sauvegarder la confidentialité et l'intégrité des données sensibles passant par les réseaux publics <i><small>(techniques de scellement ou de cryptage des fichiers)</small></i>"),
 (54,6,'0.0',   4, "La séparation, quand elle est possible, de la responsabilité opérationnelle des réseaux et des activités informatiques"),
 (55,6,'16.18', 6, "Des procédures pour contrôler les médias d'ordinateurs amovibles tels que CDs, disques durs externes, clefs USB ..."),
 (56,6,'0.0',   6, "Le stockage sécurisé de la documentation du système informatique"),
 (57,6,'17.19', 4, "Des contrats <i><small>(ou conventions d'échange)</small></i> entre les organismes pour l'échange d'informations avec des tiers"),
 (58,6,'0.0',   4, "Des précautions particulières de sécurité pour le commerce électronique <i><small>(cryptage, authentification forte)</small></i>"),
 (59,6,'0.0',   4, "Des précautions de sécurité pour le commerce électronique, notamment vis à vis de leur valeur légale, de risque d'envoi à de mauvaises adresses, de cryptage des fichiers sensibles."),
 (60,6,'0.0',   4, "Des précautions de sécurité <i><small>(confidentialité)</small></i> pour des systèmes bureautiques tels que la messagerie vocale, les communications mobiles, les télécopieurs, les photocopieurs."),
 (61,6,'0.0',   6, "Des précautions de sécurité pour les systèmes disponibles auprès du public tels que les serveurs web <i><small>(validation formelle des informations avant leur diffusion)</small></i>"),
 (62,7,'18.20', 2, "La mise en oeuvre d'une politique cohérente de contrôle des accès aux applications mobiles"),
 (63,7,'0.0',   4, "L'organisation de contrôles des règles éditées pour chaque application sensible"),
 (64,7,'19.21', 4, "L'utilisation d'une procédure formelle d'enregistrement <i><small>(et de désenregistrement)</small></i> d'utilisateur avant d'accorder des droits d'accès au système informatique, un processus d'attribution des droits d'accès aux applications <i><small>(après validation de la hièrarchie)</small></i> et la mise en oeuvre de contrôles réguliers <i><small>(semestriels)</small></i> des droits alloués à chaque utilisateur"),
 (65,7,'0.0',   4, "La vérification de l'attribution de mot de passe par un processus formel <i><small>(avec utilisation d'un mot de passe temporaire à changer à la première connexion)</small></i> et sécurisé <i><small>(envoi du mot de passe à l'utilisateur par un moyen sûr)</small></i>"),
 (66,7,'20.22', 6, "Qu'ils suivent les bonnes pratiques en matière de sécurité dans le choix et l'utilisation des mots de passe <i><small>(procédure fournie)</small></i>"),
 (67,7,'0.0',   6, "Qu'ils garantissent que le matériel informatique sans surveillance <i><small>(serveur local, poste en accès libre)</small></i> dispose des mécanismes de protection appropriés <i><small>(ex: écran de veille automatique sur temporisation et/ou deconnexion en fin de sessio.)</small></i>"),
 (68,7,'21.23', 6, "L'authentification renforcée pour les accès à distance des utilisateurs <i><small>(retro-appel, mot de passe à usage unique)</small></i>"),
 (69,7,'0.0',   6, "L'éxigence de mecanisme d'authentification <i><small>(et pas seulement identification)</small></i> pour les connexions automatiques au réseau, ainsi que lors des connexions entre ordinateurs."),
 (70,7,'22.24', 2, "L'authenfication des connexions en utilisant l'identification de terminal <i><small>(adresse MAC)</small></i> quand il est important de garantir que les ouvertures de session ne se produisent que depuis des endroits et/ou des ordinateurs, ou des terminaux spécifiques"),
 (71,7,'0.0',   6, "La présence d'un identifiant pour chaque utilisateur déclaré et que cet identifiant ne permette pas d'indication de privilèges de l'utilisateur <i><small>(responsable, informaticien ...)</small></i>"),
 (72,7,'0.0',   6, "L'utilisation d'un système efficace de gestion des mots de passe qui garantit des mots de passe de qualité et une validation de la solidité de ces mots de passe"),
 (73,7,'0.0',   4, "La limitation de temps de connexion et la gestion de tranches horaires pour l'accès aux applications sensibles"),
 (74,7,'23.25', 4, "L'enregistrement de tous les évènements de sécurité pertinents dans les listes d'audit"),
 (75,7,'0.0',   6, "L'organisation d'analyses régulières des listes d'audit sécurité par un processus efficace <i><small>(interne ou externe à l'entreprise)</small></i>"),
 (76,7,'0.0',   6, "La documentation et la mise en oeuvre de moyens légaux pour surveiller l'utilisation des nouvelles technologies de l'information par le personnel"),
 (77,7,'0.0',   4, "L'utilisation d'un système sécurisé de synchronisation des horloges systèmes"),
 (78,7,'24.26', 4, "L'utilisation de tous les équipements informatiques nomades <i><small>(ordinateurs portables,PDA,téléphones mobiles ...)</small></i> comprenant la protection physique, les contrôles d'accès, les techniques cryptographiques, les sauvegardes, et la protections contre les virus."),
 (79,7,'0.0',   6, "L'organisation des activités de télétravail <i><small>(temporaire ou permanent)</small></i>: sécurisation des postes à distance, des communications, de la gestion des sauvegardes"),
 (80,8,'25.27', 4, "Sont corrélés à la valeur <i><small>(économique, légale)</small></i> des actifs d'information impliqués"),
 (81,8,'0.0',   4, "Mettent en oeuvre un processus d'évaluation et de maitrîse des risques pour déterminer les contrôles adéquats à développer ou mettre en oeuvre"),
 (82,8,'26.28', 4, "En appliquant les signatures électroniques à toute forme de document légal ou contractuel qui est traité électroniquement"),
 (83,8,'0.0',   6, "En mettant en oeuvre un système pour la gestion des clefs cryptographiques <i><small>(par exemple ICP)</small></i>"),
 (84,8,'27.29', 4, "La vérification des bibliothèques de source de programme dans le procédé de développement pour en limiter les risques d'altération"),
 (85,8,'28.30', 6, "L'utilisation de contrôles d'accès pour limiter le mouvement des programmes et des données entre les environnements de développement et de production"),
 (86,8,'0.0',   4, "La mise en oeuvre systématique de test de non régression quand une évolution dans une fonction <i><small>(version d'OS, du SGBDR, ...)</small></i> se produit pour garantir qu'il n'y a aucun impact défavorable sur son fonctionnement ou sa sécurité"),
 (87,8,'0.0',   4, "La conduite de revue de code sur les traitements les plus critiques de l'application <i><small>(calcul sur données financières, gestion des stocks, ...)</small></i>"),
 (88,9,'29.31', 6, "A défini un plan de continuation d'activité <i><small>(PCA)</small></i> complet, documenté, à jour et révisé régulièrement"),
 (89,9,'0.0',   4, "Exige l'accomplissement d'une analyse d'impact sur l'activité de l'entreprise qui identifie les évènementset leurs risques associés"),
 (90,9,'0.0',   4, "Définit un ordre de priotité de redémarage des processus métiers et des fonctions de support <i><small>(comptabilité ...)</small></i> y compris les systèmes informatiques et les systèmes associés"),
 (91,9,'0.0',   6, "Garantit que le plan de continuité d'activité est régulièrement testé en utilisant des techniques efficaces pour s'assurer que le plan est applicable"),
 (92,10,'30.32',6, "La protection et la confidentialité des données personnelles <i><small>(déclaration CNIL pour les traitements, sites WEB, applications décisionnelles)</small></i>"),
 (93,10,'0.0',  4, "La bonne utilisation des technologies de l'information par le personnel <i><small>(ex: la mise en oeuvre d'une charte d'utilisation des technologies de l'information ou d'un intranet)</small></i>"),
 (94,10,'0.0',  4, "La vérification de l'utilisation dans l'entreprise de la cryptographie <i><small>(pour son utilisation, son importation, son exportation)</small></i> vis a vis des textes légaux"),
 (95,10,'31.33',6, "La mise en oeuvre de méthodes d'auto évaluations par le management intermédiaire pour garantir que leur secteurs/domaines d'activité sont conformes à la politique et aux normes de sécurité de la scociété"),
 (96,10,'0.0',  4, "Un audit technique de securité des systèmes informatiques par des experts indépendants pour vérifier leur niveau de conformité, soit avec des standards, soit vis à vis de bonnes pratiques"),
 (97,10,'32.34',4, "Une revue annuelle des systemes d'informations opérationnels pour réduire le risque d'interruption de l'activité de l'entreprise"),
 (98,10,'0.0',  4, "Un accès contrôlé et sécurisé aux outils et aux résultats des audits de securité pour en empêcher un usage détourné");

--
-- Structure de la table `iso_audits`
--
DROP TABLE IF EXISTS `iso_audits`;
CREATE TABLE `iso_audits` (
    `audit_Id` VARCHAR(10) NOT NULL,
    `client_Id` int(11) NOT NULL,
    `audit_date` DATETIME,
    `Q1.1` DECIMAL(4,2),
    `Q2.1` DECIMAL(4,2),
    `Q3.1` DECIMAL(4,2),
    `Q4.1` DECIMAL(4,2),
    `Q5.1` DECIMAL(4,2),
    `Q6.1` DECIMAL(4,2),
    `Q7.2` DECIMAL(4,2),
    `Q8.2` DECIMAL(4,2),
    `Q9.2` DECIMAL(4,2),
    `Q10.2` DECIMAL(4,2),
    `Q11.2` DECIMAL(4,2),
    `Q12.2` DECIMAL(4,2),
    `Q13.2` DECIMAL(4,2),
    `Q14.2` DECIMAL(4,2),
    `Q15.2` DECIMAL(4,2),
    `Q16.2` DECIMAL(4,2),
    `Q17.2` DECIMAL(4,2),
    `Q18.3` DECIMAL(4,2),
    `Q19.3` DECIMAL(4,2),
    `Q20.3` DECIMAL(4,2),
    `Q21.4` DECIMAL(4,2),
    `Q22.4` DECIMAL(4,2),
    `Q23.4` DECIMAL(4,2),
    `Q24.4` DECIMAL(4,2),
    `Q25.4` DECIMAL(4,2),
    `Q26.4` DECIMAL(4,2),
    `Q27.4` DECIMAL(4,2),
    `Q28.4` DECIMAL(4,2),
    `Q29.4` DECIMAL(4,2),
    `Q30.5` DECIMAL(4,2),
    `Q31.5` DECIMAL(4,2),
    `Q32.5` DECIMAL(4,2),
    `Q33.5` DECIMAL(4,2),
    `Q34.5` DECIMAL(4,2),
    `Q35.5` DECIMAL(4,2),
    `Q36.5` DECIMAL(4,2),
    `Q37.5` DECIMAL(4,2),
    `Q38.5` DECIMAL(4,2),
    `Q39.5` DECIMAL(4,2),
    `Q40.5` DECIMAL(4,2),
    `Q41.6` DECIMAL(4,2),
    `Q42.6` DECIMAL(4,2),
    `Q43.6` DECIMAL(4,2),
    `Q44.6` DECIMAL(4,2),
    `Q45.6` DECIMAL(4,2),
    `Q46.6` DECIMAL(4,2),
    `Q47.6` DECIMAL(4,2),
    `Q48.6` DECIMAL(4,2),
    `Q49.6` DECIMAL(4,2),
    `Q50.5` DECIMAL(4,2),
    `Q51.6` DECIMAL(4,2),
    `Q52.6` DECIMAL(4,2),
    `Q53.6` DECIMAL(4,2),
    `Q54.6` DECIMAL(4,2),
    `Q55.6` DECIMAL(4,2),
    `Q56.6` DECIMAL(4,2),
    `Q57.6` DECIMAL(4,2),
    `Q58.6` DECIMAL(4,2),
    `Q59.6` DECIMAL(4,2),
    `Q60.5` DECIMAL(4,2),
    `Q61.6` DECIMAL(4,2),
    `Q62.7` DECIMAL(4,2),
    `Q63.7` DECIMAL(4,2),
    `Q64.7` DECIMAL(4,2),
    `Q65.7` DECIMAL(4,2),
    `Q66.7` DECIMAL(4,2),
    `Q67.7` DECIMAL(4,2),
    `Q68.7` DECIMAL(4,2),
    `Q69.7` DECIMAL(4,2),
    `Q70.7` DECIMAL(4,2),
    `Q71.7` DECIMAL(4,2),
    `Q72.7` DECIMAL(4,2),
    `Q73.7` DECIMAL(4,2),
    `Q74.7` DECIMAL(4,2),
    `Q75.7` DECIMAL(4,2),
    `Q76.7` DECIMAL(4,2),
    `Q77.7` DECIMAL(4,2),
    `Q78.7` DECIMAL(4,2),
    `Q79.7` DECIMAL(4,2),
    `Q80.8` DECIMAL(4,2),
    `Q81.8` DECIMAL(4,2),
    `Q82.8` DECIMAL(4,2),
    `Q83.8` DECIMAL(4,2),
    `Q84.8` DECIMAL(4,2),
    `Q85.8` DECIMAL(4,2),
    `Q86.8` DECIMAL(4,2),
    `Q87.8` DECIMAL(4,2),
    `Q88.9` DECIMAL(4,2),
    `Q89.9` DECIMAL(4,2),
    `Q90.9` DECIMAL(4,2),
    `Q91.9` DECIMAL(4,2),
    `Q92.10` DECIMAL(4,2),
    `Q93.10` DECIMAL(4,2),
    `Q94.10` DECIMAL(4,2),
    `Q95.10` DECIMAL(4,2),
    `Q96.10` DECIMAL(4,2),
    `Q97.10` DECIMAL(4,2),
    `Q98.10` DECIMAL(4,2)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
--
-- Index pour la table `iso_audits`
--
ALTER TABLE `iso_audits`
  ADD PRIMARY KEY (`audit_Id`),
  ADD KEY(`client_Id`);

--
-- Structure de la table `iso_clients`
--
DROP TABLE IF EXISTS `iso_clients`;
CREATE TABLE `iso_clients` (
  `client_Id` int(11) NOT NULL,
  `client_Pseudo` varchar(30) NOT NULL,
  `client_LastName` varchar(50) NOT NULL,
  `client_FirstName` varchar(50) NOT NULL,
  `client_StreetNum` varchar(5),
  `client_Addr1` varchar(75),
  `client_Addr2` varchar(75),
  `client_Addr3` varchar(75),
  `client_PostalCode` varchar(5),
  `client_Phone` varchar(15),
  `client_Mobile` varchar(15),
  `client_Pwd` varchar(250) NOT NULL,
  `client_Email` varchar(250) NULL,
  `client_Msn` varchar(250) NULL,
  `client_Url` varchar(100) NULL,
  `client_Localisation` varchar(100) NULL,
  `client_Registred` int(11) DEFAULT '0',
  `client_Level` tinyint(4) DEFAULT '2',
  `client_CreationDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
--
-- Index pour la table `iso_clients`
--
ALTER TABLE `iso_clients`
  ADD PRIMARY KEY (`client_Id`),
  ADD KEY(`client_Pseudo`);
--
-- AUTO_INCREMENT pour la table `iso_clientss`
--
ALTER TABLE `iso_clients`
  MODIFY `client_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
--
-- Chargement des donnees de la table `iso_clients`
--
INSERT INTO `iso_clients` (`client_Id`, `client_Pseudo`, `client_LastName`, `client_FirstName`, `client_Pwd`, `client_Email`, `client_Msn`, `client_Url`, `client_Localisation`, `client_Registred`, `client_Level`, `client_CreationDate`) VALUES
(1, 'revoke', 'REVOKE', 'Cpte', '6a899d79ada8beff57053f23813006b701a52428b1ded94f39a500c2ee6534ae5bbfd3fee31758f31ae7df1e4627fef1f8b4fe7fd6b3387441b703e09d54ad6d', 'revoke@agekhanonix.fr', '', '', '', 1, 2, '2018-09-25 18:53:24'),
(2, 'guest', 'GUEST', 'Cpte', 'dea2478a47f4836dd4dfbfab75352dbdb138aa9b20e7a590215e2d0bea7ec01ed0ba47b180ba9d836d38f31d967f1e115c224703e397640ae18e2a9c708cade9', 'guest@agekhanonix.fr', '', '', '', 0, 2, '2018-09-25 18:52:44'),
(3, 'admin', 'ADMIN', 'Cpte', 'c8adf9b094b98ae51db8d7d585a530887bd16eb7eff3a6fc1e9a5975ddace3a6e1beb8617f3f19ca244112ed5b40149d1b8c7c20066f9b1e20c66c26c565e65a', 'admin@agekhanonix.fr', '', '', '', 0, 4, '2018-09-25 18:51:58');

--
-- Structure de la table `iso_visits`
--
DROP TABLE IF EXISTS `iso_visits`;
CREATE TABLE `iso_visits` (
  `visit_Id` int(11) NOT NULL,
  `client_Id` int(11) NOT NULL,
  `remote_Addr` varchar(15) NOT NULL,
  `visit_Date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour la table `iso_visits`
--
ALTER TABLE `iso_visits`
  ADD PRIMARY KEY (`visit_Id`);
--
-- AUTO_INCREMENT pour la table `iso_visits`
--
ALTER TABLE `iso_visits`
  MODIFY `visit_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;COMMIT;