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
  `chapter_Libelle` varchar(75) NOT NULL,
  `chapter_Value` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour la table `iso_chapters`
--
ALTER TABLE `iso_chapters`
  ADD PRIMARY KEY (`chapter_Id`);
--
-- Chargement de la table
--
INSERT INTO `iso_chapters` (`chapter_Id`, `chapter_Libelle`, `chapter_Value`) VALUES
 (1, "politique de sécurité informatique", 36),
 (2, "organisation de la sécurité informatique", 44),
 (3, "classification et contrôle des actifs", 15),
 (4, "sécurité liée au personnel", 42),
 (5, "sécurité physique et sécurité de l'environnement", 52),
 (6, "sécurité de l'exploitation et des réseaux", 112),
 (7, "contrôle d'accès logiques", 86),
 (8, "développement et maintenance de logiciels", 40),
 (9, "continuité d'activité", 20),
 (10, "conformités", 32);

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
 (3, "responsabilité vis à vis des actifs de l'organisme"),
 (4, "la surveillance de l'information dans votre organisme comprend"),
 (5, "sécurité lors du recrutement et de la définition des postes"),
 (6, "formation des utilisateurs"),
 (7, "réaction face aux incidents et aux défauts de fonctionnement de sécurité"),
 (8, "zones sécurisées"),
 (9, "sécurité du matériel informatique"),
 (10, "controles généraux"),
 (11, "procédures et responsabilités opérationnelles"),
 (12, "planification et recette des systèmes"),
 (13, "protection contre les logiciels malveillants"),
 (14, "exploitation courante"),
 (15, "administration du réseau"),
 (16, "manipulation des supports informatiques"),
 (17, "échanges d'informations et de logiciels"),
 (18, "exigence économique pour le controle d'accès"),
 (19, "gestion des accès de la part des utilisateurs"),
 (20, "responsabilités des utilisateurs"),
 (21, "contrôle d'accès au réseau"),
 (22, "contrôle d'accès aux systèmes d'exploitation"),
 (23, "surveillance de l'accès et surveillance de l'utilisation du système"),
 (24, "informatique nomade et télétravail"),
 (25, "exigences de sécurité des systèmes (infrastructures, développement d'applications, de progiciels"),
 (26, "controles cryptographiques"),
 (27, "sécurité des dossiers systèmes"),
 (28, "sécurité des procédés de développement et de support"),
 (29, "aspects de la continuité d'activité"),
 (30, "conformité aux exigences légales"),
 (31, "revues de conformité de sécurité et de conformité technique"),
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
(1, "La politique actuelle de sécurité informatique de votre organisme"),
(2, "Lors de l'analyse, l'évaluation, et le déploiement de la politique de sécurité, votre société"),
(3, "Les règles de sécurité informatique de votre organisme sont confortées par :"),
(4, "L'accès par des sous-traitants à votre système informatique est verifié dans votre organisme par :"),
(5, "Les prestataires d'infogérance sont controllés par :"),
(6, "Votre organisme prend en charge les principaux actifs de technologie de l'informatique et de la communication"),
(7, "Votre organisme a défini la politique et les procédures qui précisent"),
(8, "Un programme de formation sur la sécurité de l'information est en place dans l'organisme pour :"),
(9, "En réaction à un incident ou à un défaut de fonctionnement de sécurité, un processus formel existe dans votre organisme qui :"),
(10, "Les installations et équipements informatiques sont correctement sécurisés par :"),
(11, "Le matériel informatique est correctement sécurisé par :"),
(12, "Votre organisme empêche la compromission (violation de la politique de sécurité d'un système pouvant entrainer ou non la révélation, la falsification,la destruction ou la perte d'informations sensibles), ou le vol d'informations ainsi que d'équipement de traitement de l'information en exigeant :"),
(13, "Votre organisme garanti le fonctionnement correct et sécurisé des technologies de l'information en sécurisant :"),
(14, "Votre organisme réduit le risque que les performances des systèmes d'informations principaux se degradent en utilisant :"),
(15, "Votre organisme protège l'intégrité et la sécurité des logiciels et informations critiques par :"),
(16, "Votre organisme maintient l'intégrité et la disponibilité des services essentiels et de traitement de l'information et de communication par :"),
(17, "Votre organisme garantit la protection des réseaux de télécommunication et l'infrastructure de support par :"),
(18, "Pour empêcher les dommages de capitaux et l'interruption d'activité, les médias de votre organisme devraient être vérifié et physiquement protégés par :"),
(19, "Votre organisme empêche la perte, la modification, ou le mauvais usage des echanges d'informations entre les organismes en utilisant de facon appropriée :"),
(20, "Votre organisme verifie l'accès aux informations sensibles de l'entreprise par :"),
(21, "Votre organisme empêche l'accès non autorisé aux systèmes informatiques par :"),
(22, "Pour empêcher l'accès illicite par des utilisateurs non autorisés, votre organisme exige des utilisateurs :"),
(23, "La protection des services accessibles par le réseau de l'entreprise est renforcée par :"),
(24, "Tout accès aux ressources informatiques est limitée par des contrôle du système d'exploitation qui vérifie :"),
(25, "Tous les accès et toutes les utilisations des systèmes informatiques sont surveillés pour détecter des activités illicites par :"),
(26, "Votre organisme a défini et mis en oeuvre une politique et des procédures documentées de sécurité de l'information pour vérifier :"),
(27, "Votre organisme indique des exigences et des mesures de sécurité qui :"),
(28, "Votre organisme emploie des systèmes de cryptographie ainsi que des techniques pour proteger la confidentialité, l'authenticité ou l'intégrité de l'information :"),
(29, "Les fichiers systèmes sont sécurisés pendant les projets informatiques et les activités de support par :"),
(30, "Afin de réduire au minimum la corruption des systèmes d'informations, votre organisme vérifie la mise en oeuvre des évolutions par :"),
(31, "Votre organisme a mis en oeuvre un preocessus de gestion de la continuitéd'activitéqui :"),
(32, "Votre organisme a mis en oeuvre des normes et des procédures pour garantir la conformité aux exigences légales qui adressent specifiquement :"),
(33, "Des procédures de conformité sont en place qui exigent :"),
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
 (1,1,'0.1',    6, "Défini les objectifs de sécurité de l'information et explique son importance pour votre société"),
 (2,1,'0.0',    6, "Est soutenue par la Direction Générale <i><small>(par exemple : une note de service)</small></i>"),
 (3,1,'0.0',    6, "A défini les principales responsabilités du personnel vis à vis de la sécurité"),
 (4,1,'0.0',    6, "Fait la liaison avec d'autres documents traitant de la sécurité tels que la charte d'utilisation des nouvelles technologies de l'information, les procédures de support"),
 (5,1,'0.2',    6, "A défini un propriétaire d'actif pour assurer la sécurité de chaque actif principal"),
 (6,1,'0.0',    6, "A mis en oeuvre une revue de cette politique par les propriétaires d'actifs, des juristes, la DSI, la direction du personnel"),
 (7,2,'0.3',    4, "La mise en oeuvre d'un comité de sécurité informatique qui définit les grandes lignes pour des activités des stratégies de sécurité.<br/>Ce comité inclut typiquement le responsable de la sécurité informatique, la DSI, les répresentants des principales entités, les auditeurs internes, la Direction du personnel."),
 (8,2,'0.0',    4, "La nomination d'un représentant de la sécurité informatique dans chaque entité, filiale ou division"),
 (9,2,'0.0',    4, "Une définition claire des tâches, rôles spécifiques, affectation des responsables de la sécurité informatique"),
 (10,2,'0.0',   4, "Le conseil de la sécurité informatique <i><small>(pour l'avis d'experts)</small></i> ou de coordinateurs <i><small>(pour partager et coordonner la connaissance de la sécurité de l'organisme</small></i>"),
 (11,2,'0.0',   4, "L'identification de points de contact pour obtenir un support en cas d'incident de sécurité ainsi qu'une assistance et un conseil sur les contraintes légales, les normes spécifiques liées au métier"),
 (12,2,'0.0',   4, "Une revue indépendante et pertinente de la mise en oeuvre de la politique de sécurité informatique de l'organisme"),
 (13,2,'0.0',   4, "Une revue des risques et une validation formelle de la part de la direction lors de l'utilisation ou du déploiement de nouvelles technologies informatiques (NTIC)"),
 (14,2,'0.4',   6, "La présentation des règles de sécurité de l'organisme et des obligations des tiers vis à vis de ces règles <i><small>(sous-traitant ou autre)</small></i>"),
 (15,2,'0.0',   2, "La présentation aux sous-traitants de la politique de classification de l'information et les procédures associées aux données sensibles et/ou confidentielles"),
 (16,2,'0.5',   6, "La communication des exigences de sécurité et son suivi pour protèger le patrimoine informationnel de l'entreprise"),
 (17,2,'0.0',   2, "La formation des prestataires de services d'infogérance à leurs responsabilités vis à vis de la sécurité informatique, des technologies utilisées par votre entreprise.<br/>Leurs responsabilités quant à des infractions de sécurité ou pour leur manque de vigilance, le cas échéant, devront être clairement définies."),
 (18,3,'3.6',   3, "La définition d'un propriétaire pour chaque actif principal et la mise en oeuvre d'une traçabilité de cet actif <i><small>(non seulement par un inventaire physique des matériels mais également en identifiant les actifs principaux d'information qui sont détenu par l'organisme et leur valeur pour celui-ci)</small></i>"),
 (19,3,'4.0',   6, "Des procédures simples et efficaces qui indiquent le degré de protection pour chaque type d'actif d'information, <i><small>.ex:(Confidentialité = 1,2,3 ou 4 - Intégrité = 1,2,3 ou 4 - Disponibilité = 1,2,3 ou 4)</small></i>"),
 (20,3,'0.0',   6, "Des procédures d'identification <i><small>(notamment étiquetage)</small></i> et de manipulation des médias physiques <i><small>(notamment en ce qui concerne les moyens de transport utilisés, leur destruction, ...)</small></i>"),
 (21,4,'5.7',   4, "Les rôles et responsabilités vis à vis de la sécurité de l'information dans les descriptions des fonctions de l'organisme <i><small>(avec des exigences specifiques de sécurité pour les personnels de la Direction des Systèmes d'Informations)</small></i>"),
 (22,4,'0.0',   6, "Que les candidatures donnent lieu à verification pour s'assurer que leurs diplômes et les expériences sont réels et exacts"),
 (23,4,'0.0',   6, "Que tous les employés doivent signer un accord de confidentialité vis à vis de l'information <i><small>(ou clause de non divulgation)</small></i> et qu'ils comprennent leurs reponsabilités vis à vis du traitement de l'information."),
 (24,4,'6.8',   6, "Former le personnel aux procédures et à la politique de sécurité de l'information <i><small>(avec une vérification des acquis)</small></i>"),
 (25,4,'0.0',   4, "Informer le personnel sur leurs responsabilité légales vis à vis de la sécurité ainsi que les sanctions encourues en cas de fraude."),
 (26,4,'0.0',   4, "Utiliser correctement les technologies de l'information <i><small>(bonnes pratiques sur l'utilisation d'Internet, de l'Intranet, courriels ...etc.)</small></i>"),
 (27,4,'7.9',   4, "Explique au personnel la conduite à tenir en cas d'incident de sécurité <i><small>(qui contacter, quelles informations à transmettre, que faire en cas d'infection virale ...etc.)</small></i>"),
 (28,4,'0.0',   2, "Explique au personnel la methode appropriee pour conserver les preuves necessaire pour d'eventuelles investigations légales en cas d'attaque externe ou interne."),
 (29,4,'0.0',   6, "Sanctionne les employés qui ont violé les procédures et/ou les politiques de sécurité <i><small>(en liaison avec les sanctions prévues au reglement interieur)</small></i>"),
 (30,5,'8.10',  6, "L'établissement et la surveillance d'un perimêtre physique adéquat <i><small>(définition d'un ou plusieurs périmêtres sensibles pour la sécurité)</small></i>"),
 (31,5,'0.0',   6, "L'enregistrement des visiteurs à l'accueil et la surveillance physique des visiteurs dans les locaux <i><small>(y compris personnel technique, liveur ...)</small></i> particulierement dans les zones sensibles."),
 (32,5,'0.0',   4, "La prise de précautions <i><small>(y compris le choix d'emplacement des locaux)</small></i> pour diminuer les risques liés aux catastrophes naturelles ou à ceux d'origine humaine"),
 (33,5,'0.0',   4, "Une surveillance adéquate du personnel ou des tiers travaillant dans les secteurs sensibles"),
 (34,5,'0.0',   4, "La vérification des zones de livraison et de déchargement, si possible en isolant les équipements de traitement de l'information"),
 (35,5,'0.0',   6, "La surveillance des équipements informatiques vis à vis des pannes de courant et autres anomalies électriques <i><small>(baisses de tensions de courte duree, surtensions)</small></i>."),
 (36,5,'9.11',  4, "La mise en oeuvre de protection du câblage réseau et de l'alimentation électrique contre l'interception de données ou les incidents"),
 (37,5,'0.0',   6, "L'entretien correct du matériel informatique pour assurer sa disponibilité et son intégrité, notamment par la surveillance d'indicateurs critiques <i><small>(erreurs d'IO ...etc.)</small></i>"),
 (38,5,'0.0',   6, "La mise en oeuvre de dispositifs de destruction physique des matériels de stockage contenant des données sensibles ou l'écrasement complet des données sensibles lors de la mise au rebut des ces materiels de stockage"),
 (39,5,'10.12', 2, "Une politique de rangement de bureau pour les documents classés et les supports de stockage amovibles, une politique d'utilisation d'ecrans de veille avec mots de passe"),
 (40,5,'0.0',   4, "Une politique de sortie de matériel informatique en dehors des locaux <i><small>(ordinateurs portables, matériels de démonstrations)</small></i> avec autorisation formelles, et un enregistrement des entrees-sortis des materiels"),
 (41,6,'11.13', 6, "Une documentation des procédures d'exploitation comprenant l'execution des traitements informatiques, les sauvegardes, la gestion des anomalies, le support aisi que les procédures de reprise"),
 (42,6,'0.0',   6, "Une procédure de gestion des évolutions des traitements <i><small>(sécurisation notamment des fonctions de livraison et de mise en production)</small></i>"),
 (43,6,'0.0',   4, "Une procédure de gestion des incidents de sécurité <i><small>(identification, classification, traçabilité)</small></i>"),
 (44,6,'0.0',   6, "Une politique pragmatique de séparation des tâches <i><small>(par exemple: entre le développement et l'exploitation)</small></i>"),
 (45,6,'12.14', 6, "Une planification de la capacité des systèmes à partir de projections d'activité qui couvre le réseau de télécommunication, les espaces de stockage, la puissance des processeurs et autres goulets d'étranglement techniques potentiels"),
 (46,6,'13.15', 6, "L'existence d'une procédure officielle de contrôle de conformité des logiciels avant leur utilisation <i><small>(notamment risques liés a l'achat de logiciels sur Internet)</small></i> et d'une procédure de vérification des logiciels <i><small>(absence d'espiogiciels, chevaux de Troie)</small></i>"),
 (47,6,'0.0',   4, "La définition d'accords <i><small>(conventions d'échanges)</small></i> pour le transfert de fichiers et de logiciels depuis/vers chacun des tiers."),
 (48,6,'0.0',   6, "L'installation et mise à jour très régulière d'un logiciel antivirus <i><small>(signature et moteur)</small></i> et passage régulier d'un &quot;scan&quot; antivirus sur l'ensemble des fichiers informatiques."),
 (49,6,'0.0',   6, "L'examen antivirus de tous les fichiers, pièces-jointes de courrier électronique ou téléchargement d'origine incertaine avant leur utilisation."),
 (50,6,'14.16', 6, "La mise en oeuvre d'un plan de sauvegarde et de reprise documenté pour l'ensemble des applications"),
 (51,6,'0.0',   6, "L'enregistrement <i><small>(main courante, ...)</small></i> de l'ensemble des travaux des opérateurs"),
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
 (94,10,'0.0',  4, "La vérification de l'utilisation dans l'entreprise de la cryptographie <i><small>(pour son utilisation, son importation, son exportation)</small></i> vis à vis des textes légaux"),
 (95,10,'31.33',6, "La mise en oeuvre de méthodes d'auto évaluations par le management intermédiaire pour garantir que leur secteurs/domaines d'activité sont conformes à la politique et aux normes de sécurité de la scociété"),
 (96,10,'0.0',  4, "Un audit technique de securité des systèmes informatiques par des experts indépendants pour vérifier leur niveau de conformité, soit avec des standards, soit vis à vis de bonnes pratiques"),
 (97,10,'32.34',4, "Une revue annuelle des systèmes d'informations opérationnels pour réduire le risque d'interruption de l'activité de l'entreprise"),
 (98,10,'0.0',  4, "Un accès contrôlé et sécurisé aux outils et aux résultats des audits de securité pour en empêcher un usage détourné");

--
-- Structure de la table `iso_audits`
--
DROP TABLE IF EXISTS `iso_audits`;
CREATE TABLE `iso_audits` (
    `audit_Id` VARCHAR(10) NOT NULL,
    `client_Id` int(11) NOT NULL,
    `audit_date` DATETIME,
    `Q1` DECIMAL(4,2),
    `Q2` DECIMAL(4,2),
    `Q3` DECIMAL(4,2),
    `Q4` DECIMAL(4,2),
    `Q5` DECIMAL(4,2),
    `Q6` DECIMAL(4,2),
    `Q7` DECIMAL(4,2),
    `Q8` DECIMAL(4,2),
    `Q9` DECIMAL(4,2),
    `Q10` DECIMAL(4,2),
    `Q11` DECIMAL(4,2),
    `Q12` DECIMAL(4,2),
    `Q13` DECIMAL(4,2),
    `Q14` DECIMAL(4,2),
    `Q15` DECIMAL(4,2),
    `Q16` DECIMAL(4,2),
    `Q17` DECIMAL(4,2),
    `Q18` DECIMAL(4,2),
    `Q19` DECIMAL(4,2),
    `Q20` DECIMAL(4,2),
    `Q21` DECIMAL(4,2),
    `Q22` DECIMAL(4,2),
    `Q23` DECIMAL(4,2),
    `Q24` DECIMAL(4,2),
    `Q25` DECIMAL(4,2),
    `Q26` DECIMAL(4,2),
    `Q27` DECIMAL(4,2),
    `Q28` DECIMAL(4,2),
    `Q29` DECIMAL(4,2),
    `Q30` DECIMAL(4,2),
    `Q31` DECIMAL(4,2),
    `Q32` DECIMAL(4,2),
    `Q33` DECIMAL(4,2),
    `Q34` DECIMAL(4,2),
    `Q35` DECIMAL(4,2),
    `Q36` DECIMAL(4,2),
    `Q37` DECIMAL(4,2),
    `Q38` DECIMAL(4,2),
    `Q39` DECIMAL(4,2),
    `Q40` DECIMAL(4,2),
    `Q41` DECIMAL(4,2),
    `Q42` DECIMAL(4,2),
    `Q43` DECIMAL(4,2),
    `Q44` DECIMAL(4,2),
    `Q45` DECIMAL(4,2),
    `Q46` DECIMAL(4,2),
    `Q47` DECIMAL(4,2),
    `Q48` DECIMAL(4,2),
    `Q49` DECIMAL(4,2),
    `Q50` DECIMAL(4,2),
    `Q51` DECIMAL(4,2),
    `Q52` DECIMAL(4,2),
    `Q53` DECIMAL(4,2),
    `Q54` DECIMAL(4,2),
    `Q55` DECIMAL(4,2),
    `Q56` DECIMAL(4,2),
    `Q57` DECIMAL(4,2),
    `Q58` DECIMAL(4,2),
    `Q59` DECIMAL(4,2),
    `Q60` DECIMAL(4,2),
    `Q61` DECIMAL(4,2),
    `Q62` DECIMAL(4,2),
    `Q63` DECIMAL(4,2),
    `Q64` DECIMAL(4,2),
    `Q65` DECIMAL(4,2),
    `Q66` DECIMAL(4,2),
    `Q67` DECIMAL(4,2),
    `Q68` DECIMAL(4,2),
    `Q69` DECIMAL(4,2),
    `Q70` DECIMAL(4,2),
    `Q71` DECIMAL(4,2),
    `Q72` DECIMAL(4,2),
    `Q73` DECIMAL(4,2),
    `Q74` DECIMAL(4,2),
    `Q75` DECIMAL(4,2),
    `Q76` DECIMAL(4,2),
    `Q77` DECIMAL(4,2),
    `Q78` DECIMAL(4,2),
    `Q79` DECIMAL(4,2),
    `Q80` DECIMAL(4,2),
    `Q81` DECIMAL(4,2),
    `Q82` DECIMAL(4,2),
    `Q83` DECIMAL(4,2),
    `Q84` DECIMAL(4,2),
    `Q85` DECIMAL(4,2),
    `Q86` DECIMAL(4,2),
    `Q87` DECIMAL(4,2),
    `Q88` DECIMAL(4,2),
    `Q89` DECIMAL(4,2),
    `Q90` DECIMAL(4,2),
    `Q91` DECIMAL(4,2),
    `Q92` DECIMAL(4,2),
    `Q93` DECIMAL(4,2),
    `Q94` DECIMAL(4,2),
    `Q95` DECIMAL(4,2),
    `Q96` DECIMAL(4,2),
    `Q97` DECIMAL(4,2),
    `Q98` DECIMAL(4,2)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
--
-- Index pour la table `iso_audits`
--
ALTER TABLE `iso_audits`
  ADD PRIMARY KEY (`audit_Id`),
  ADD KEY(`client_Id`);
-- 
-- Chargement de la table `iso_audits`
INSERT INTO `iso_audits` (`audit_Id`, `client_Id`,`audit_date`) VALUES ('test', 2, NOW());
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

--
-- Structure de la table `iso_services`
--
DROP TABLE IF EXISTS `iso_services`;
CREATE TABLE `iso_services` (
  `service_Id` int(11) NOT NULL,
  `service_Img` varchar(25) NULL,
  `service_Title` varchar(75) NOT NULL,
  `service_Description` TEXT NOT NULL,
  `service_Publish` INT(11) default 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour la table `iso_services`
--
ALTER TABLE `iso_services`
  ADD PRIMARY KEY (`service_Id`);
--
-- AUTO_INCREMENT pour la table `iso_services`
--
ALTER TABLE `iso_services`
  MODIFY `service_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;COMMIT;
-- 
-- Chargement de la table ìso_services`
--
INSERT INTO `iso_services` (`service_Id`, `service_Img`, `service_Title`, `service_Description`, `service_Publish`) VALUES
(1, 'INFOGERANCE.png', "l'offre infogérance", "Nous gérons pour vous l'intégralité de votre parc informatique<br>De la maintenace du matériel jusqu'à l'assistance aux utilisateurs, nous prenons en charge, pour vous, la gestion de votre parc informatique", 1),
(2, 'FORMATION.png', "formation de vos employés", "Nous sensibilisons vos employés à la sécurité informatique via des ateliers réguliers, ainsi que des lettres d'informations sur les bonnes pratiques à observer", 1),
(3, 'INTRUSION.png', "tests d'intrusions annuels et mensuels", "audit complet de votre réseau. <br>Nous mettons les mesures de sécurité de votre entreprise à l’épreuve afin de mettre ses vulnérabilités en évidence.",1),
(4, 'CORRECTIFS.png', "aide à la mise en oeuvre des correctifs", "plus un logiciel vieillit, plus ses vulnérabilités sont exposées. Avec le temps, la découverte, l’exposition et l’exploitation de vulnérabilités sont des phénomènes inéluctables et cumulatifs.<br>C’est la raison d’être des correctifs de sécurité. Notre objectif est donc de vous aider afin de réduire le nombre de failles potentielles, et donc la surface d’attaque, reste en effet l’un des meilleurs moyens pour se protéger contre les intrusions et les cybermenaces.",1),
(5, 'IR.png', "réponse a incident en cas d'attaque informatique", "En dépit de toutes les précautions, il est toujours possible qu’un employé exécute une pièce jointe malveillante sans le savoir et répande ainsi un virus inconnu dans toute votre entreprise.<br>Les premières heures sont vitales afin d’endiguer le problème. Grâce au Plan de Continuité d’Activité que nous aurons établi, la pérennité de votre entreprise n’est pas menacée mais il reste nécessaire d’éradiquer la menace avant de pouvoir restaurer les données touchées par le logiciel malveillant ou le pirate.<br/>Lors d’une intervention suite à incident, nous isolons rapidement les machines touchées avant d’analyser la charge infectieuse afin de déterminer les actions à entreprendre. Ensuite, une fois l’attaque stoppée, nous remettons les machines en service et enfin, nous réfléchissons à un plan d’action afin d’empêcher la réussite d’une attaque similaire à l’avenir.",1),
(6, 'PCA.png', "mise en place d'un plan de continuité d'activité en cas d'attaque", "Le point primordial concernant la sécurité informatique de votre entreprise est de garantir sa survie en cas de sinistre. La plupart des entreprises ont prévu un plan d’action en cas d’incendie par exemple, mais sont-elles préparées en cas d’attaque informatique ?",1),
(7, 'VIRUS.png', "PROTECTION CONTRE LES RANSOMWARE, VIRUS ET MALWARE", "La SARL TH.CHARPENTIER, à sélectionné et packagé toute une panoplie de logiciels de défense afin de permettre un déploiement et une configuration homogène sur votre parc informatique.<br>Notre solution, toujours à jour, vous protège donc contre toutes ces menaces.<br>Nous adaptons toutes nos solutions à votre métier et à vos besoins.",1);