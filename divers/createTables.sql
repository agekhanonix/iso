-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Hôte : agekhanokcroot.mysql.db
-- Généré le :  lun. 17 déc. 2018 à 12:31
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

-- --------------------------------------------------------

--
-- Structure de la table `iso_audits`
--

CREATE TABLE `iso_audits` (
  `audit_Id` varchar(10) NOT NULL,
  `prospect_Id` int(11) NOT NULL,
  `audit_date` varchar(14) NOT NULL,
  `question_Id` int(11) NOT NULL,
  `question_Value` decimal(4,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `iso_audits`
--

INSERT INTO `iso_audits` (`audit_Id`, `prospect_Id`, `audit_date`, `question_Id`, `question_Value`) VALUES
('49aec5f6dc', 112, '20181103061500', 1, '6.00'),
('49aec5f6dc', 112, '20181103061500', 2, '0.00'),
('49aec5f6dc', 112, '20181103061500', 3, '0.00'),
('49aec5f6dc', 112, '20181103061500', 4, '-1.00'),
('49aec5f6dc', 112, '20181103061500', 5, '6.00'),
('49aec5f6dc', 112, '20181103061500', 6, '0.00'),
('49aec5f6dc', 112, '20181103061500', 7, '0.50'),
('49aec5f6dc', 112, '20181103061500', 8, '0.50'),
('49aec5f6dc', 112, '20181103061500', 9, '0.50'),
('49aec5f6dc', 112, '20181103061500', 10, '0.50'),
('49aec5f6dc', 112, '20181103061500', 11, '0.50'),
('49aec5f6dc', 112, '20181103061500', 12, '0.50'),
('49aec5f6dc', 112, '20181103061500', 13, '0.50'),
('49aec5f6dc', 112, '20181103061500', 14, '0.75'),
('49aec5f6dc', 112, '20181103061500', 15, '0.25'),
('49aec5f6dc', 112, '20181103061500', 16, '0.75'),
('49aec5f6dc', 112, '20181103061500', 17, '0.25'),
('49aec5f6dc', 112, '20181103061500', 18, '0.38'),
('49aec5f6dc', 112, '20181103061500', 19, '6.00'),
('49aec5f6dc', 112, '20181103061500', 21, '4.00'),
('49aec5f6dc', 112, '20181103061500', 22, '6.00'),
('49aec5f6dc', 112, '20181103061500', 30, '6.00'),
('49aec5f6dc', 112, '20181103061500', 31, '6.00'),
('49aec5f6dc', 112, '20181103061500', 32, '4.00'),
('49aec5f6dc', 112, '20181103061500', 33, '4.00'),
('49aec5f6dc', 112, '20181103061500', 34, '4.00'),
('49aec5f6dc', 112, '20181103061500', 35, '6.00'),
('49aec5f6dc', 112, '20181103061500', 36, '4.00'),
('49aec5f6dc', 112, '20181103061500', 37, '6.00'),
('49aec5f6dc', 112, '20181103061500', 38, '6.00'),
('49aec5f6dc', 112, '20181103061500', 39, '2.00'),
('49aec5f6dc', 112, '20181103061500', 40, '4.00'),
('49aec5f6dc', 112, '20181103061500', 41, '6.00'),
('49aec5f6dc', 112, '20181103061500', 42, '3.00'),
('49aec5f6dc', 112, '20181103061500', 43, '1.00'),
('49aec5f6dc', 112, '20181103061500', 44, '0.00'),
('49aec5f6dc', 112, '20181103061500', 45, '1.50'),
('49aec5f6dc', 112, '20181103061500', 46, '1.50'),
('49aec5f6dc', 112, '20181103061500', 47, '4.00'),
('49aec5f6dc', 112, '20181103061500', 48, '6.00'),
('49aec5f6dc', 112, '20181103061500', 49, '6.00'),
('49aec5f6dc', 112, '20181103061500', 50, '6.00'),
('49aec5f6dc', 112, '20181103061500', 51, '6.00'),
('49aec5f6dc', 112, '20181103061500', 52, '6.00'),
('49aec5f6dc', 112, '20181103061500', 53, '6.00'),
('49aec5f6dc', 112, '20181103061500', 54, '4.00'),
('49aec5f6dc', 112, '20181103061500', 55, '6.00'),
('49aec5f6dc', 112, '20181103061500', 56, '6.00'),
('49aec5f6dc', 112, '20181103061500', 57, '4.00'),
('49aec5f6dc', 112, '20181103061500', 58, '4.00'),
('49aec5f6dc', 112, '20181103061500', 59, '4.00'),
('49aec5f6dc', 112, '20181103061500', 60, '4.00'),
('49aec5f6dc', 112, '20181103061500', 61, '6.00'),
('49aec5f6dc', 112, '20181103061500', 62, '2.00'),
('49aec5f6dc', 112, '20181103061500', 63, '4.00'),
('49aec5f6dc', 112, '20181103061500', 64, '4.00'),
('49aec5f6dc', 112, '20181103061500', 65, '4.00'),
('49aec5f6dc', 112, '20181103061500', 66, '6.00'),
('49aec5f6dc', 112, '20181103061500', 67, '6.00'),
('49aec5f6dc', 112, '20181103061500', 68, '6.00'),
('49aec5f6dc', 112, '20181103061500', 69, '6.00'),
('49aec5f6dc', 112, '20181103061500', 70, '2.00'),
('49aec5f6dc', 112, '20181103061500', 71, '6.00'),
('49aec5f6dc', 112, '20181103061500', 72, '6.00'),
('49aec5f6dc', 112, '20181103061500', 73, '4.00'),
('49aec5f6dc', 112, '20181103061500', 74, '4.00'),
('49aec5f6dc', 112, '20181103061500', 75, '6.00'),
('49aec5f6dc', 112, '20181103061500', 76, '6.00'),
('49aec5f6dc', 112, '20181103061500', 77, '4.00'),
('49aec5f6dc', 112, '20181103061500', 80, '4.00'),
('49aec5f6dc', 112, '20181103061500', 88, '6.00'),
('49aec5f6dc', 112, '20181103061500', 92, '6.00'),
('49aec5f6dc', 112, '20181103061500', 93, '4.00'),
('49aec5f6dc', 112, '20181103061500', 94, '4.00'),
('55aed5f7db', 112, '20181206094500', 1, '6.00'),
('Y2thZWmRaJ', 112, '20181215053047', 1, '6.00'),
('ZGZha2iTaJ', 113, '20181215055133', 1, '6.00');

-- --------------------------------------------------------

--
-- Structure de la table `iso_chapters`
--

CREATE TABLE `iso_chapters` (
  `chapter_Id` int(11) NOT NULL,
  `chapter_Libelle` varchar(75) NOT NULL,
  `chapter_Value` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `iso_chapters`
--

INSERT INTO `iso_chapters` (`chapter_Id`, `chapter_Libelle`, `chapter_Value`) VALUES
(1, 'politique de sécurité informatique', 36),
(2, 'organisation de la sécurité informatique', 44),
(3, 'classification et contrôle des actifs', 15),
(4, 'sécurité liée au personnel', 42),
(5, 'sécurité physique et sécurité de l\'environnement', 52),
(6, 'sécurité de l\'exploitation et des réseaux', 112),
(7, 'contrôle d\'accès logiques', 86),
(8, 'développement et maintenance de logiciels', 40),
(9, 'continuité d\'activité', 20),
(10, 'conformités', 32);

-- --------------------------------------------------------

--
-- Structure de la table `iso_chapters_questions`
--

CREATE TABLE `iso_chapters_questions` (
  `chapter_Id` int(11) NOT NULL,
  `question_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `iso_chapters_questions`
--

INSERT INTO `iso_chapters_questions` (`chapter_Id`, `question_Id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(2, 7),
(2, 8),
(2, 9),
(2, 10),
(2, 11),
(2, 12),
(2, 13),
(2, 14),
(2, 15),
(2, 16),
(2, 17),
(3, 18),
(3, 19),
(3, 20),
(4, 21),
(4, 22),
(4, 23),
(4, 24),
(4, 25),
(4, 26),
(4, 27),
(4, 28),
(4, 29),
(5, 30),
(5, 31),
(5, 32),
(5, 33),
(5, 34),
(5, 35),
(5, 36),
(5, 37),
(5, 38),
(5, 39),
(5, 40),
(6, 41),
(6, 42),
(6, 43),
(6, 44),
(6, 45),
(6, 46),
(6, 47),
(6, 48),
(6, 49),
(6, 50),
(6, 51),
(6, 52),
(6, 53),
(6, 54),
(6, 55),
(6, 56),
(6, 57),
(6, 58),
(6, 59),
(6, 60),
(6, 61),
(7, 62),
(7, 63),
(7, 64),
(7, 65),
(7, 66),
(7, 67),
(7, 68),
(7, 69),
(7, 70),
(7, 71),
(7, 72),
(7, 73),
(7, 74),
(7, 75),
(7, 76),
(7, 77),
(7, 78),
(7, 79),
(8, 80),
(8, 81),
(8, 82),
(8, 83),
(8, 84),
(8, 85),
(8, 86),
(8, 87),
(8, 88),
(9, 89),
(9, 90),
(9, 91),
(9, 92),
(10, 93),
(10, 94),
(10, 95),
(10, 96),
(10, 97),
(10, 98);

-- --------------------------------------------------------

--
-- Structure de la table `iso_preambles`
--

CREATE TABLE `iso_preambles` (
  `preamble_Id` int(11) NOT NULL,
  `preamble_Libelle` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `iso_preambles`
--

INSERT INTO `iso_preambles` (`preamble_Id`, `preamble_Libelle`) VALUES
(1, 'La politique actuelle de sécurité informatique de votre organisme'),
(2, 'Lors de l\'analyse, l\'évaluation, et le déploiement de la politique de sécurité, votre société'),
(3, 'Les règles de sécurité informatique de votre organisme sont confortées par :'),
(4, 'L\'accès par des sous-traitants à votre système informatique est verifié dans votre organisme par :'),
(5, 'Les prestataires d\'infogérance sont controllés par :'),
(6, 'Votre organisme prend en charge les principaux actifs de technologie de l\'informatique et de la communication'),
(7, 'Votre organisme a défini la politique et les procédures qui précisent'),
(8, 'Un programme de formation sur la sécurité de l\'information est en place dans l\'organisme pour :'),
(9, 'En réaction à un incident ou à un défaut de fonctionnement de sécurité, un processus formel existe dans votre organisme qui :'),
(10, 'Les installations et équipements informatiques sont correctement sécurisés par :'),
(11, 'Le matériel informatique est correctement sécurisé par :'),
(12, 'Votre organisme empêche la compromission (violation de la politique de sécurité d\'un système pouvant entrainer ou non la révélation, la falsification,la destruction ou la perte d\'informations sensibles), ou le vol d\'informations ainsi que d\'équipement de traitement de l\'information en exigeant :'),
(13, 'Votre organisme garanti le fonctionnement correct et sécurisé des technologies de l\'information en sécurisant :'),
(14, 'Votre organisme réduit le risque que les performances des systèmes d\'informations principaux se degradent en utilisant :'),
(15, 'Votre organisme protège l\'intégrité et la sécurité des logiciels et informations critiques par :'),
(16, 'Votre organisme maintient l\'intégrité et la disponibilité des services essentiels et de traitement de l\'information et de communication par :'),
(17, 'Votre organisme garantit la protection des réseaux de télécommunication et l\'infrastructure de support par :'),
(18, 'Pour empêcher les dommages de capitaux et l\'interruption d\'activité, les médias de votre organisme devraient être vérifié et physiquement protégés par :'),
(19, 'Votre organisme empêche la perte, la modification, ou le mauvais usage des echanges d\'informations entre les organismes en utilisant de facon appropriée :'),
(20, 'Votre organisme verifie l\'accès aux informations sensibles de l\'entreprise par :'),
(21, 'Votre organisme empêche l\'accès non autorisé aux systèmes informatiques par :'),
(22, 'Pour empêcher l\'accès illicite par des utilisateurs non autorisés, votre organisme exige des utilisateurs :'),
(23, 'La protection des services accessibles par le réseau de l\'entreprise est renforcée par :'),
(24, 'Tout accès aux ressources informatiques est limitée par des contrôle du système d\'exploitation qui vérifie :'),
(25, 'Tous les accès et toutes les utilisations des systèmes informatiques sont surveillés pour détecter des activités illicites par :'),
(26, 'Votre organisme a défini et mis en oeuvre une politique et des procédures documentées de sécurité de l\'information pour vérifier :'),
(27, 'Votre organisme indique des exigences et des mesures de sécurité qui :'),
(28, 'Votre organisme emploie des systèmes de cryptographie ainsi que des techniques pour proteger la confidentialité, l\'authenticité ou l\'intégrité de l\'information :'),
(29, 'Les fichiers systèmes sont sécurisés pendant les projets informatiques et les activités de support par :'),
(30, 'Afin de réduire au minimum la corruption des systèmes d\'informations, votre organisme vérifie la mise en oeuvre des évolutions par :'),
(31, 'Votre organisme a mis en oeuvre un preocessus de gestion de la continuitéd\'activitéqui :'),
(32, 'Votre organisme a mis en oeuvre des normes et des procédures pour garantir la conformité aux exigences légales qui adressent specifiquement :'),
(33, 'Des procédures de conformité sont en place qui exigent :'),
(34, 'Des procédures d\'audit sont en place qui exigent :');

-- --------------------------------------------------------

--
-- Structure de la table `iso_prospects`
--

CREATE TABLE `iso_prospects` (
  `prospect_Id` int(11) NOT NULL,
  `prospect_Pseudo` varchar(30) NOT NULL,
  `prospect_Society` varchar(50) DEFAULT NULL,
  `prospect_LastName` varchar(50) NOT NULL,
  `prospect_FirstName` varchar(50) NOT NULL,
  `prospect_StreetNum` varchar(5) NOT NULL,
  `prospect_Addr1` varchar(75) NOT NULL,
  `prospect_Addr2` varchar(75) DEFAULT NULL,
  `prospect_City` varchar(75) NOT NULL,
  `prospect_PostalCode` varchar(5) NOT NULL,
  `prospect_Phone` varchar(15) DEFAULT NULL,
  `prospect_Mobile` varchar(15) DEFAULT NULL,
  `prospect_Pwd` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `prospect_Email` varchar(250) DEFAULT NULL,
  `prospect_Msn` varchar(250) DEFAULT NULL,
  `prospect_Url` varchar(100) DEFAULT NULL,
  `prospect_Localisation` varchar(100) DEFAULT NULL,
  `prospect_Registred` int(11) DEFAULT '0',
  `prospect_Level` tinyint(4) DEFAULT '2',
  `prospect_CreationDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `iso_prospects`
--

INSERT INTO `iso_prospects` (`prospect_Id`, `prospect_Pseudo`, `prospect_Society`, `prospect_LastName`, `prospect_FirstName`, `prospect_StreetNum`, `prospect_Addr1`, `prospect_Addr2`, `prospect_City`, `prospect_PostalCode`, `prospect_Phone`, `prospect_Mobile`, `prospect_Pwd`, `prospect_Email`, `prospect_Msn`, `prospect_Url`, `prospect_Localisation`, `prospect_Registred`, `prospect_Level`, `prospect_CreationDate`) VALUES
(1, 'revoke', NULL, 'REVOKE', 'Cpte', '', '', NULL, '', '', NULL, NULL, '$2y$10$PGH15INfWV5ySHY7uKlvXuvPagOqr0UJy3DJ5Iu6KayKreOhPOE5e', 'revoke@agekhanonix.fr', '', '', '', 1, 2, '2018-09-25 18:53:24'),
(2, 'guest', 'SYSTEMTECH', 'GUEST', 'Cpte', '32', 'rue des Pommiers', NULL, 'SAINT PARRES LES VAUDES', '10260', '0325745073', '0651143924', '$2y$10$GL.u9Uori5O6JTR0QspBDuI3oR5fII.1JGsqN04CWUpBktoVnTOnO', 'thierry.charpentier.ct@gmail.com', '', '', '', 0, 2, '2018-09-25 18:52:44'),
(3, 'admin', NULL, 'ADMIN', 'Cpte', '', '', NULL, '', '', NULL, NULL, '$2y$10$qTsXTNno9NVQ/6ZHy46SauzvnjyEf2oURaVolcn3LQjALlT4R1OhG', 'admin@agekhanonix.fr', '', '', '', 0, 4, '2018-09-25 18:51:58'),
(111, 'cthierry', 'TH.CHARPENTIER', 'Charpentier', 'Thierry', '28', 'rue plaine des gardes', '', 'SAINTE SAVINE', '10300', '0325745073', '0651143924', '$2y$10$S4e0JobQN7C6s61WSbQAMeZ3DVvSAz7YGI542lUKJO/D9L/FHaHEG', 'thierry.charpentier.ct@gmail.com', NULL, NULL, '48.2901696;4.0410646', 0, 2, '2017-12-25 17:41:45'),
(112, 'djean', 'GL Info', 'DUPONT', 'Jean', '1', 'boulevard Charles Baltet', '', 'TROYES', '10000', '0325745073', '0651143924', '$2y$10$EHaevs1a.5ElYx5s7xENkOumtlOs9J3pPDdW/535XjBglKOLtb2NG', 'thierry.charpentier.ct@gmail.com', NULL, NULL, '48.290529;4.0709741', 0, 2, '2018-09-25 18:02:33'),
(113, 'talain', 'Maison CAFFET', 'TERIEUR', 'Alain', '13 bi', 'rue Claude Huez', '', 'TROYES', '10000', '0325745073', '0651143924', '$2y$10$YjxVXA.orrDdZIOQASWxiuVzjRQqVR5lKCvFTM7ZTJbQrqu/Jsh9q', 'thierry.charpentier.ct@gmail.com', NULL, NULL, '48.2984501;4.0746268', 0, 2, '2018-10-22 18:06:34'),
(114, 'talex', 'OPTIC 2000', 'TERIEUR', 'Alex', '28 ru', 'CENTRE COMMERCIAL LECLERC', 'LA BELLE IDEE', 'ROMILLY SUR SEINE', '10100', '0325745073', '0651143924', '$2y$10$i4TWWfcoV0VUtcRRMcsk0uTv/X70YG2zjcb996MmzGI4YiawBzTm2', 'thierry.charpentier.ct@gmail.com', NULL, NULL, '48.5047417;3.7665242', 0, 2, '2018-11-22 18:08:41'),
(115, 'csimon', 'OPTICAL CENTER', 'CUSSONEY', 'Simon', '129', 'avenue DIDEROT', '', 'ROMILLY SUR SEINE', '10100', '0325745073', '0651143924', '$2y$10$lIY2BjwXlqdlgU8hXldlsOwU1KjCkdOYWV5Uo/t0G84JdoP.PZfEO', 'thierry.charpentier.ct@gmail.com', NULL, NULL, '48.5092233;3.7153986', 0, 2, '2018-11-22 18:11:13'),
(116, 'ltorey', 'WEB AGENCY', 'TOREY', 'Laure', '28', 'avenue General leclerc', '', 'SAINTE SAVINE', '10300', '0325745073', '0651143924', '$2y$10$k7Q0Wz5v9fDXTdDCwccGDu7Y8HzxLajnNC7FPG9yvFp.lJkp8EN3q', 'thierry.charpentier.ct@gmail.com', NULL, NULL, '48.2925232;4.042834', 0, 2, '2018-12-03 13:58:33');

-- --------------------------------------------------------

--
-- Structure de la table `iso_questions`
--

CREATE TABLE `iso_questions` (
  `question_Id` int(11) NOT NULL,
  `question_ChapterId` int(11) NOT NULL,
  `question_predecessorId` varchar(8) NOT NULL,
  `question_Value` int(11) NOT NULL,
  `question_Libelle` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `iso_questions`
--

INSERT INTO `iso_questions` (`question_Id`, `question_ChapterId`, `question_predecessorId`, `question_Value`, `question_Libelle`) VALUES
(1, 1, '0.1', 6, 'Défini les objectifs de sécurité de l\'information et explique son importance pour votre société'),
(2, 1, '0.0', 6, 'Est soutenue par la Direction Générale <i><small>(par exemple : une note de service)</small></i>'),
(3, 1, '0.0', 6, 'A défini les principales responsabilités du personnel vis à vis de la sécurité'),
(4, 1, '0.0', 6, 'Fait la liaison avec d\'autres documents traitant de la sécurité tels que la charte d\'utilisation des nouvelles technologies de l\'information, les procédures de support'),
(5, 1, '0.2', 6, 'A défini un propriétaire d\'actif pour assurer la sécurité de chaque actif principal'),
(6, 1, '0.0', 6, 'A mis en oeuvre une revue de cette politique par les propriétaires d\'actifs, des juristes, la DSI, la direction du personnel'),
(7, 2, '0.3', 4, 'La mise en oeuvre d\'un comité de sécurité informatique qui définit les grandes lignes pour des activités des stratégies de sécurité.<br/>Ce comité inclut typiquement le responsable de la sécurité informatique, la DSI, les répresentants des principales entités, les auditeurs internes, la Direction du personnel.'),
(8, 2, '0.0', 4, 'La nomination d\'un représentant de la sécurité informatique dans chaque entité, filiale ou division'),
(9, 2, '0.0', 4, 'Une définition claire des tâches, rôles spécifiques, affectation des responsables de la sécurité informatique'),
(10, 2, '0.0', 4, 'Le conseil de la sécurité informatique <i><small>(pour l\'avis d\'experts)</small></i> ou de coordinateurs <i><small>(pour partager et coordonner la connaissance de la sécurité de l\'organisme</small></i>'),
(11, 2, '0.0', 4, 'L\'identification de points de contact pour obtenir un support en cas d\'incident de sécurité ainsi qu\'une assistance et un conseil sur les contraintes légales, les normes spécifiques liées au métier'),
(12, 2, '0.0', 4, 'Une revue indépendante et pertinente de la mise en oeuvre de la politique de sécurité informatique de l\'organisme'),
(13, 2, '0.0', 4, 'Une revue des risques et une validation formelle de la part de la direction lors de l\'utilisation ou du déploiement de nouvelles technologies informatiques (NTIC)'),
(14, 2, '0.4', 6, 'La présentation des règles de sécurité de l\'organisme et des obligations des tiers vis à vis de ces règles <i><small>(sous-traitant ou autre)</small></i>'),
(15, 2, '0.0', 2, 'La présentation aux sous-traitants de la politique de classification de l\'information et les procédures associées aux données sensibles et/ou confidentielles'),
(16, 2, '0.5', 6, 'La communication des exigences de sécurité et son suivi pour protèger le patrimoine informationnel de l\'entreprise'),
(17, 2, '0.0', 2, 'La formation des prestataires de services d\'infogérance à leurs responsabilités vis à vis de la sécurité informatique, des technologies utilisées par votre entreprise.<br/>Leurs responsabilités quant à des infractions de sécurité ou pour leur manque de vigilance, le cas échéant, devront être clairement définies.'),
(18, 3, '3.6', 3, 'La définition d\'un propriétaire pour chaque actif principal et la mise en oeuvre d\'une traçabilité de cet actif <i><small>(non seulement par un inventaire physique des matériels mais également en identifiant les actifs principaux d\'information qui sont détenu par l\'organisme et leur valeur pour celui-ci)</small></i>'),
(19, 3, '4.0', 6, 'Des procédures simples et efficaces qui indiquent le degré de protection pour chaque type d\'actif d\'information, <i><small>.ex:(Confidentialité = 1,2,3 ou 4 - Intégrité = 1,2,3 ou 4 - Disponibilité = 1,2,3 ou 4)</small></i>'),
(20, 3, '0.0', 6, 'Des procédures d\'identification <i><small>(notamment étiquetage)</small></i> et de manipulation des médias physiques <i><small>(notamment en ce qui concerne les moyens de transport utilisés, leur destruction, ...)</small></i>'),
(21, 4, '5.7', 4, 'Les rôles et responsabilités vis à vis de la sécurité de l\'information dans les descriptions des fonctions de l\'organisme <i><small>(avec des exigences specifiques de sécurité pour les personnels de la Direction des Systèmes d\'Informations)</small></i>'),
(22, 4, '0.0', 6, 'Que les candidatures donnent lieu à verification pour s\'assurer que leurs diplômes et les expériences sont réels et exacts'),
(23, 4, '0.0', 6, 'Que tous les employés doivent signer un accord de confidentialité vis à vis de l\'information <i><small>(ou clause de non divulgation)</small></i> et qu\'ils comprennent leurs reponsabilités vis à vis du traitement de l\'information.'),
(24, 4, '6.8', 6, 'Former le personnel aux procédures et à la politique de sécurité de l\'information <i><small>(avec une vérification des acquis)</small></i>'),
(25, 4, '0.0', 4, 'Informer le personnel sur leurs responsabilité légales vis à vis de la sécurité ainsi que les sanctions encourues en cas de fraude.'),
(26, 4, '0.0', 4, 'Utiliser correctement les technologies de l\'information <i><small>(bonnes pratiques sur l\'utilisation d\'Internet, de l\'Intranet, courriels ...etc.)</small></i>'),
(27, 4, '7.9', 4, 'Explique au personnel la conduite à tenir en cas d\'incident de sécurité <i><small>(qui contacter, quelles informations à transmettre, que faire en cas d\'infection virale ...etc.)</small></i>'),
(28, 4, '0.0', 2, 'Explique au personnel la methode appropriee pour conserver les preuves necessaire pour d\'eventuelles investigations légales en cas d\'attaque externe ou interne.'),
(29, 4, '0.0', 6, 'Sanctionne les employés qui ont violé les procédures et/ou les politiques de sécurité <i><small>(en liaison avec les sanctions prévues au reglement interieur)</small></i>'),
(30, 5, '8.10', 6, 'L\'établissement et la surveillance d\'un perimêtre physique adéquat <i><small>(définition d\'un ou plusieurs périmêtres sensibles pour la sécurité)</small></i>'),
(31, 5, '0.0', 6, 'L\'enregistrement des visiteurs à l\'accueil et la surveillance physique des visiteurs dans les locaux <i><small>(y compris personnel technique, liveur ...)</small></i> particulierement dans les zones sensibles.'),
(32, 5, '0.0', 4, 'La prise de précautions <i><small>(y compris le choix d\'emplacement des locaux)</small></i> pour diminuer les risques liés aux catastrophes naturelles ou à ceux d\'origine humaine'),
(33, 5, '0.0', 4, 'Une surveillance adéquate du personnel ou des tiers travaillant dans les secteurs sensibles'),
(34, 5, '0.0', 4, 'La vérification des zones de livraison et de déchargement, si possible en isolant les équipements de traitement de l\'information'),
(35, 5, '0.0', 6, 'La surveillance des équipements informatiques vis à vis des pannes de courant et autres anomalies électriques <i><small>(baisses de tensions de courte duree, surtensions)</small></i>.'),
(36, 5, '9.11', 4, 'La mise en oeuvre de protection du câblage réseau et de l\'alimentation électrique contre l\'interception de données ou les incidents'),
(37, 5, '0.0', 6, 'L\'entretien correct du matériel informatique pour assurer sa disponibilité et son intégrité, notamment par la surveillance d\'indicateurs critiques <i><small>(erreurs d\'IO ...etc.)</small></i>'),
(38, 5, '0.0', 6, 'La mise en oeuvre de dispositifs de destruction physique des matériels de stockage contenant des données sensibles ou l\'écrasement complet des données sensibles lors de la mise au rebut des ces materiels de stockage'),
(39, 5, '10.12', 2, 'Une politique de rangement de bureau pour les documents classés et les supports de stockage amovibles, une politique d\'utilisation d\'ecrans de veille avec mots de passe'),
(40, 5, '0.0', 4, 'Une politique de sortie de matériel informatique en dehors des locaux <i><small>(ordinateurs portables, matériels de démonstrations)</small></i> avec autorisation formelles, et un enregistrement des entrees-sortis des materiels'),
(41, 6, '11.13', 6, 'Une documentation des procédures d\'exploitation comprenant l\'execution des traitements informatiques, les sauvegardes, la gestion des anomalies, le support aisi que les procédures de reprise'),
(42, 6, '0.0', 6, 'Une procédure de gestion des évolutions des traitements <i><small>(sécurisation notamment des fonctions de livraison et de mise en production)</small></i>'),
(43, 6, '0.0', 4, 'Une procédure de gestion des incidents de sécurité <i><small>(identification, classification, traçabilité)</small></i>'),
(44, 6, '0.0', 6, 'Une politique pragmatique de séparation des tâches <i><small>(par exemple: entre le développement et l\'exploitation)</small></i>'),
(45, 6, '12.14', 6, 'Une planification de la capacité des systèmes à partir de projections d\'activité qui couvre le réseau de télécommunication, les espaces de stockage, la puissance des processeurs et autres goulets d\'étranglement techniques potentiels'),
(46, 6, '13.15', 6, 'L\'existence d\'une procédure officielle de contrôle de conformité des logiciels avant leur utilisation <i><small>(notamment risques liés a l\'achat de logiciels sur Internet)</small></i> et d\'une procédure de vérification des logiciels <i><small>(absence d\'espiogiciels, chevaux de Troie)</small></i>'),
(47, 6, '0.0', 4, 'La définition d\'accords <i><small>(conventions d\'échanges)</small></i> pour le transfert de fichiers et de logiciels depuis/vers chacun des tiers.'),
(48, 6, '0.0', 6, 'L\'installation et mise à jour très régulière d\'un logiciel antivirus <i><small>(signature et moteur)</small></i> et passage régulier d\'un &quot;scan&quot; antivirus sur l\'ensemble des fichiers informatiques.'),
(49, 6, '0.0', 6, 'L\'examen antivirus de tous les fichiers, pièces-jointes de courrier électronique ou téléchargement d\'origine incertaine avant leur utilisation.'),
(50, 6, '14.16', 6, 'La mise en oeuvre d\'un plan de sauvegarde et de reprise documenté pour l\'ensemble des applications'),
(51, 6, '0.0', 6, 'L\'enregistrement <i><small>(main courante, ...)</small></i> de l\'ensemble des travaux des opérateurs'),
(52, 6, '0.0', 6, 'Un enregistrement systématique des anomalies du réseau et des systèmes'),
(53, 6, '15.17', 6, 'La mise en oeuvre de contrôles spécifiques pour sauvegarder la confidentialité et l\'intégrité des données sensibles passant par les réseaux publics <i><small>(techniques de scellement ou de cryptage des fichiers)</small></i>'),
(54, 6, '0.0', 4, 'La séparation, quand elle est possible, de la responsabilité opérationnelle des réseaux et des activités informatiques'),
(55, 6, '16.18', 6, 'Des procédures pour contrôler les médias d\'ordinateurs amovibles tels que CDs, disques durs externes, clefs USB ...'),
(56, 6, '0.0', 6, 'Le stockage sécurisé de la documentation du système informatique'),
(57, 6, '17.19', 4, 'Des contrats <i><small>(ou conventions d\'échange)</small></i> entre les organismes pour l\'échange d\'informations avec des tiers'),
(58, 6, '0.0', 4, 'Des précautions particulières de sécurité pour le commerce électronique <i><small>(cryptage, authentification forte)</small></i>'),
(59, 6, '0.0', 4, 'Des précautions de sécurité pour le commerce électronique, notamment vis à vis de leur valeur légale, de risque d\'envoi à de mauvaises adresses, de cryptage des fichiers sensibles.'),
(60, 6, '0.0', 4, 'Des précautions de sécurité <i><small>(confidentialité)</small></i> pour des systèmes bureautiques tels que la messagerie vocale, les communications mobiles, les télécopieurs, les photocopieurs.'),
(61, 6, '0.0', 6, 'Des précautions de sécurité pour les systèmes disponibles auprès du public tels que les serveurs web <i><small>(validation formelle des informations avant leur diffusion)</small></i>'),
(62, 7, '18.20', 2, 'La mise en oeuvre d\'une politique cohérente de contrôle des accès aux applications mobiles'),
(63, 7, '0.0', 4, 'L\'organisation de contrôles des règles éditées pour chaque application sensible'),
(64, 7, '19.21', 4, 'L\'utilisation d\'une procédure formelle d\'enregistrement <i><small>(et de désenregistrement)</small></i> d\'utilisateur avant d\'accorder des droits d\'accès au système informatique, un processus d\'attribution des droits d\'accès aux applications <i><small>(après validation de la hièrarchie)</small></i> et la mise en oeuvre de contrôles réguliers <i><small>(semestriels)</small></i> des droits alloués à chaque utilisateur'),
(65, 7, '0.0', 4, 'La vérification de l\'attribution de mot de passe par un processus formel <i><small>(avec utilisation d\'un mot de passe temporaire à changer à la première connexion)</small></i> et sécurisé <i><small>(envoi du mot de passe à l\'utilisateur par un moyen sûr)</small></i>'),
(66, 7, '20.22', 6, 'Qu\'ils suivent les bonnes pratiques en matière de sécurité dans le choix et l\'utilisation des mots de passe <i><small>(procédure fournie)</small></i>'),
(67, 7, '0.0', 6, 'Qu\'ils garantissent que le matériel informatique sans surveillance <i><small>(serveur local, poste en accès libre)</small></i> dispose des mécanismes de protection appropriés <i><small>(ex: écran de veille automatique sur temporisation et/ou deconnexion en fin de sessio.)</small></i>'),
(68, 7, '21.23', 6, 'L\'authentification renforcée pour les accès à distance des utilisateurs <i><small>(retro-appel, mot de passe à usage unique)</small></i>'),
(69, 7, '0.0', 6, 'L\'éxigence de mecanisme d\'authentification <i><small>(et pas seulement identification)</small></i> pour les connexions automatiques au réseau, ainsi que lors des connexions entre ordinateurs.'),
(70, 7, '22.24', 2, 'L\'authenfication des connexions en utilisant l\'identification de terminal <i><small>(adresse MAC)</small></i> quand il est important de garantir que les ouvertures de session ne se produisent que depuis des endroits et/ou des ordinateurs, ou des terminaux spécifiques'),
(71, 7, '0.0', 6, 'La présence d\'un identifiant pour chaque utilisateur déclaré et que cet identifiant ne permette pas d\'indication de privilèges de l\'utilisateur <i><small>(responsable, informaticien ...)</small></i>'),
(72, 7, '0.0', 6, 'L\'utilisation d\'un système efficace de gestion des mots de passe qui garantit des mots de passe de qualité et une validation de la solidité de ces mots de passe'),
(73, 7, '0.0', 4, 'La limitation de temps de connexion et la gestion de tranches horaires pour l\'accès aux applications sensibles'),
(74, 7, '23.25', 4, 'L\'enregistrement de tous les évènements de sécurité pertinents dans les listes d\'audit'),
(75, 7, '0.0', 6, 'L\'organisation d\'analyses régulières des listes d\'audit sécurité par un processus efficace <i><small>(interne ou externe à l\'entreprise)</small></i>'),
(76, 7, '0.0', 6, 'La documentation et la mise en oeuvre de moyens légaux pour surveiller l\'utilisation des nouvelles technologies de l\'information par le personnel'),
(77, 7, '0.0', 4, 'L\'utilisation d\'un système sécurisé de synchronisation des horloges systèmes'),
(78, 7, '24.26', 4, 'L\'utilisation de tous les équipements informatiques nomades <i><small>(ordinateurs portables,PDA,téléphones mobiles ...)</small></i> comprenant la protection physique, les contrôles d\'accès, les techniques cryptographiques, les sauvegardes, et la protections contre les virus.'),
(79, 7, '0.0', 6, 'L\'organisation des activités de télétravail <i><small>(temporaire ou permanent)</small></i>: sécurisation des postes à distance, des communications, de la gestion des sauvegardes'),
(80, 8, '25.27', 4, 'Sont corrélés à la valeur <i><small>(économique, légale)</small></i> des actifs d\'information impliqués'),
(81, 8, '0.0', 4, 'Mettent en oeuvre un processus d\'évaluation et de maitrîse des risques pour déterminer les contrôles adéquats à développer ou mettre en oeuvre'),
(82, 8, '26.28', 4, 'En appliquant les signatures électroniques à toute forme de document légal ou contractuel qui est traité électroniquement'),
(83, 8, '0.0', 6, 'En mettant en oeuvre un système pour la gestion des clefs cryptographiques <i><small>(par exemple ICP)</small></i>'),
(84, 8, '27.29', 4, 'La vérification des bibliothèques de source de programme dans le procédé de développement pour en limiter les risques d\'altération'),
(85, 8, '28.30', 6, 'L\'utilisation de contrôles d\'accès pour limiter le mouvement des programmes et des données entre les environnements de développement et de production'),
(86, 8, '0.0', 4, 'La mise en oeuvre systématique de test de non régression quand une évolution dans une fonction <i><small>(version d\'OS, du SGBDR, ...)</small></i> se produit pour garantir qu\'il n\'y a aucun impact défavorable sur son fonctionnement ou sa sécurité'),
(87, 8, '0.0', 4, 'La conduite de revue de code sur les traitements les plus critiques de l\'application <i><small>(calcul sur données financières, gestion des stocks, ...)</small></i>'),
(88, 9, '29.31', 6, 'A défini un plan de continuation d\'activité <i><small>(PCA)</small></i> complet, documenté, à jour et révisé régulièrement'),
(89, 9, '0.0', 4, 'Exige l\'accomplissement d\'une analyse d\'impact sur l\'activité de l\'entreprise qui identifie les évènementset leurs risques associés'),
(90, 9, '0.0', 4, 'Définit un ordre de priotité de redémarage des processus métiers et des fonctions de support <i><small>(comptabilité ...)</small></i> y compris les systèmes informatiques et les systèmes associés'),
(91, 9, '0.0', 6, 'Garantit que le plan de continuité d\'activité est régulièrement testé en utilisant des techniques efficaces pour s\'assurer que le plan est applicable'),
(92, 10, '30.32', 6, 'La protection et la confidentialité des données personnelles <i><small>(déclaration CNIL pour les traitements, sites WEB, applications décisionnelles)</small></i>'),
(93, 10, '0.0', 4, 'La bonne utilisation des technologies de l\'information par le personnel <i><small>(ex: la mise en oeuvre d\'une charte d\'utilisation des technologies de l\'information ou d\'un intranet)</small></i>'),
(94, 10, '0.0', 4, 'La vérification de l\'utilisation dans l\'entreprise de la cryptographie <i><small>(pour son utilisation, son importation, son exportation)</small></i> vis à vis des textes légaux'),
(95, 10, '31.33', 6, 'La mise en oeuvre de méthodes d\'auto évaluations par le management intermédiaire pour garantir que leur secteurs/domaines d\'activité sont conformes à la politique et aux normes de sécurité de la scociété'),
(96, 10, '0.0', 4, 'Un audit technique de securité des systèmes informatiques par des experts indépendants pour vérifier leur niveau de conformité, soit avec des standards, soit vis à vis de bonnes pratiques'),
(97, 10, '32.34', 4, 'Une revue annuelle des systèmes d\'informations opérationnels pour réduire le risque d\'interruption de l\'activité de l\'entreprise'),
(98, 10, '0.0', 4, 'Un accès contrôlé et sécurisé aux outils et aux résultats des audits de securité pour en empêcher un usage détourné');

-- --------------------------------------------------------

--
-- Structure de la table `iso_services`
--

CREATE TABLE `iso_services` (
  `service_Id` int(11) NOT NULL,
  `service_Img` varchar(25) DEFAULT NULL,
  `service_Title` varchar(75) NOT NULL,
  `service_Description` text NOT NULL,
  `service_Publish` int(11) DEFAULT '0',
  `service_Booklet` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `iso_services`
--

INSERT INTO `iso_services` (`service_Id`, `service_Img`, `service_Title`, `service_Description`, `service_Publish`, `service_Booklet`) VALUES
(1, 'INFOGERANCE.png', 'l\'offre infogérance', 'Nous gérons pour vous l\'intégralité de votre parc informatique<br>De la maintenace du matériel jusqu\'à l\'assistance aux utilisateurs, nous prenons en charge, pour vous, la gestion de votre parc informatique', 1, 'offre-infogerance.pdf'),
(2, 'FORMATION.png', 'formation de vos employés', 'Nous sensibilisons vos employés à la sécurité informatique via des ateliers réguliers, ainsi que des lettres d\'informations sur les bonnes pratiques à observer', 1, 'offre-formation.pdf'),
(3, 'INTRUSION.png', 'tests d\'intrusions annuels et mensuels', 'audit complet de votre réseau. <br>Nous mettons les mesures de sécurité de votre entreprise à l’épreuve afin de mettre ses vulnérabilités en évidence.', 1, 'offre-testdintrusion.pdf'),
(4, 'IR.png', 'réponse a incident en cas d\'attaque informatique', 'En dépit de toutes les précautions, il est toujours possible qu’un employé exécute une pièce jointe malveillante sans le savoir et répande ainsi un virus inconnu dans toute votre entreprise.<br>Les premières heures sont vitales afin d’endiguer le problème. Grâce au Plan de Continuité d’Activité que nous aurons établi, la pérennité de votre entreprise n’est pas menacée mais il reste nécessaire d’éradiquer la menace avant de pouvoir restaurer les données touchées par le logiciel malveillant ou le pirate.<br/>Lors d’une intervention suite à incident, nous isolons rapidement les machines touchées avant d’analyser la charge infectieuse afin de déterminer les actions à entreprendre. Ensuite, une fois l’attaque stoppée, nous remettons les machines en service et enfin, nous réfléchissons à un plan d’action afin d’empêcher la réussite d’une attaque similaire à l’avenir.', 1, 'offre-reponse-a-incident.pdf'),
(5, 'PCA.png', 'mise en place d\'un plan de continuité d\'activité en cas d\'attaque', 'Le point primordial concernant la sécurité informatique de votre entreprise est de garantir sa survie en cas de sinistre. La plupart des entreprises ont prévu un plan d’action en cas d’incendie par exemple, mais sont-elles préparées en cas d’attaque informatique ?', 1, 'offre-pca.pdf'),
(6, 'VIRUS.png', 'PROTECTION CONTRE LES RANSOMWARE, VIRUS ET MALWARE', 'La SARL TH.CHARPENTIER, à sélectionné et packagé toute une panoplie de logiciels de défense afin de permettre un déploiement et une configuration homogène sur votre parc informatique.<br>Notre solution, toujours à jour, vous protège donc contre toutes ces menaces.<br>Nous adaptons toutes nos solutions à votre métier et à vos besoins.', 1, 'offre-protection-contre-les-virus.pdf');

-- --------------------------------------------------------

--
-- Structure de la table `iso_subChapters`
--

CREATE TABLE `iso_subChapters` (
  `subChapter_Id` int(11) NOT NULL,
  `subChapter_Libelle` varchar(75) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `iso_subChapters`
--

INSERT INTO `iso_subChapters` (`subChapter_Id`, `subChapter_Libelle`) VALUES
(3, 'responsabilité vis à vis des actifs de l\'organisme'),
(4, 'la surveillance de l\'information dans votre organisme comprend'),
(5, 'sécurité lors du recrutement et de la définition des postes'),
(6, 'formation des utilisateurs'),
(7, 'réaction face aux incidents et aux défauts de fonctionnement de sécurité'),
(8, 'zones sécurisées'),
(9, 'sécurité du matériel informatique'),
(10, 'controles généraux'),
(11, 'procédures et responsabilités opérationnelles'),
(12, 'planification et recette des systèmes'),
(13, 'protection contre les logiciels malveillants'),
(14, 'exploitation courante'),
(15, 'administration du réseau'),
(16, 'manipulation des supports informatiques'),
(17, 'échanges d\'informations et de logiciels'),
(18, 'exigence économique pour le controle d\'accès'),
(19, 'gestion des accès de la part des utilisateurs'),
(20, 'responsabilités des utilisateurs'),
(21, 'contrôle d\'accès au réseau'),
(22, 'contrôle d\'accès aux systèmes d\'exploitation'),
(23, 'surveillance de l\'accès et surveillance de l\'utilisation du système'),
(24, 'informatique nomade et télétravail'),
(25, 'exigences de sécurité des systèmes (infrastructures, développement d\'applic'),
(26, 'controles cryptographiques'),
(27, 'sécurité des dossiers systèmes'),
(28, 'sécurité des procédés de développement et de support'),
(29, 'aspects de la continuité d\'activité'),
(30, 'conformité aux exigences légales'),
(31, 'revues de conformité de sécurité et de conformité technique'),
(32, 'audits de sécurité');

-- --------------------------------------------------------

--
-- Structure de la table `iso_visits`
--

CREATE TABLE `iso_visits` (
  `visit_Id` int(11) NOT NULL,
  `prospect_Id` int(11) NOT NULL,
  `remote_Addr` varchar(15) NOT NULL,
  `visit_Date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `noteByAudit_vw`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `noteByAudit_vw` (
`question_Id` int(11)
,`chapter_Id` int(11)
,`Audit_Id` varchar(10)
,`Note` decimal(34,2)
);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `prospects_vw`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `prospects_vw` (
`Id` int(11)
,`Audit` varchar(10)
,`Quests` decimal(23,0)
,`Society` varchar(50)
,`LastName` varchar(50)
,`FirstName` varchar(50)
,`StreetNum` varchar(5)
,`Addr1` varchar(75)
,`Addr2` varchar(75)
,`City` varchar(75)
,`PostalCode` varchar(5)
,`Phone` varchar(15)
,`Mobile` varchar(15)
,`Email` varchar(250)
,`Lat` varchar(100)
,`Lng` varchar(100)
,`Type` int(0)
,`audit_Id` varchar(10)
,`prospect_Registred` int(11)
,`Pseudo` varchar(30)
);

-- --------------------------------------------------------

--
-- Structure de la vue `iso_prospects_vw`
--
DROP VIEW IF EXISTS `iso_prospects_vw`;

CREATE VIEW iso_prospects_vw AS 
SELECT T1.prospect_Id AS Id, T1.audit_Id AS Audit, COUNT(T1.question_Id) AS Quests,T2.prospect_Society AS Society, T2.prospect_LastName AS LastName, T2.prospect_FirstName AS FirstName, T2.prospect_StreetNum AS StreetNum, T2.prospect_Addr1 AS Addr1, T2.prospect_Addr2 AS Addr2, T2.prospect_City AS City, T2.prospect_PostalCode AS PostalCode, T2.prospect_Phone AS Phone, T2.prospect_Mobile AS Mobile, T2.prospect_Email, SUBSTRING_INDEX(T2.prospect_Localisation,';',1) AS Lat, SUBSTRING_INDEX(T2.prospect_Localisation,';',-1) AS Lng,
T2.prospect_Pseudo AS Pseudo,
T2.prospect_Registred AS Registred,
CASE 
	WHEN COUNT(T1.question_Id) < 30 THEN 1
    WHEN (COUNT(T1.question_Id) >= 30 AND COUNT(T1.question_Id) < 50) THEN 2
    WHEN (COUNT(T1.question_Id) >= 50 AND COUNT(T1.question_Id) < 75) THEN 3
    WHEN (COUNT(T1.question_Id) >= 70 AND COUNT(T1.question_Id) < 99) THEN 4
    WHEN COUNT(T1.question_Id) = 100 THEN 5
END AS Type
FROM iso_audits AS T1 
	INNER JOIN iso_prospects AS T2 ON T1.prospect_Id = T2.prospect_Id
GROUP BY T1.audit_Id
UNION 
SELECT T3.prospect_Id,'' AS Audit, 0 AS Quests,T3.prospect_Society AS Society, T3.prospect_LastName AS LastName, T3.prospect_FirstName AS FirstName, T3.prospect_StreetNum AS StreetNum, T3.prospect_Addr1 AS Addr1, T3.prospect_Addr2 AS Addr2, T3.prospect_City AS City, T3.prospect_PostalCode AS PostalCode, T3.prospect_Phone AS Phone, T3.prospect_Mobile AS Mobile, T3.prospect_Email, SUBSTRING_INDEX(T3.prospect_Localisation,';',1) AS Lat, SUBSTRING_INDEX(T3.prospect_Localisation,';',-1) AS Lng,
T3.prospect_Pseudo AS Pseudo,
T3.prospect_Registred AS Registred,
1 AS Type
FROM iso_prospects AS T3
WHERE T3.prospect_Id > 111 AND T3.prospect_Id NOT IN (SELECT T4.prospect_Id AS Id 
FROM iso_audits AS T4 
	INNER JOIN iso_prospects AS T5 ON T4.prospect_Id = T5.prospect_Id)

-- --------------------------------------------------------

--
-- Structure de la vue `noteByAudit_vw`
--
DROP TABLE IF EXISTS `noteByAudit_vw`;

CREATE ALGORITHM=UNDEFINED DEFINER=`agekhanokcroot`@`%` SQL SECURITY DEFINER VIEW `noteByAudit_vw`  AS  select distinct `T2`.`question_Id` AS `question_Id`,`T5`.`chapter_Id` AS `chapter_Id`,`T2`.`audit_Id` AS `Audit_Id`,sum((case `T2`.`question_Value` when '-1' then `T4`.`question_Value` else `T2`.`question_Value` end)) AS `Note` from ((((`iso_prospects` `T1` left join `iso_audits` `T2` on((`T1`.`prospect_Id` = `T2`.`prospect_Id`))) left join `iso_chapters_questions` `T3` on((`T2`.`question_Id` = `T3`.`question_Id`))) left join `iso_questions` `T4` on((`T3`.`chapter_Id` = `T4`.`question_ChapterId`))) left join `iso_chapters` `T5` on((`T3`.`chapter_Id` = `T5`.`chapter_Id`))) where (`T1`.`prospect_Id` > 111) group by `T1`.`prospect_Id`,`T2`.`audit_Id`,`T5`.`chapter_Id`,`T2`.`question_Id` ;

-- --------------------------------------------------------

--
-- Structure de la vue `prospects_vw`
--
DROP TABLE IF EXISTS `prospects_vw`;

CREATE ALGORITHM=UNDEFINED DEFINER=`agekhanokcroot`@`%` SQL SECURITY DEFINER VIEW `prospects_vw`  AS  select `T1`.`prospect_Id` AS `Id`,`T2`.`audit_Id` AS `Audit`,sum((case when `T2`.`audit_Id` then 1 else 0 end)) AS `Quests`,`T1`.`prospect_Society` AS `Society`,`T1`.`prospect_LastName` AS `LastName`,`T1`.`prospect_FirstName` AS `FirstName`,`T1`.`prospect_StreetNum` AS `StreetNum`,`T1`.`prospect_Addr1` AS `Addr1`,`T1`.`prospect_Addr2` AS `Addr2`,`T1`.`prospect_City` AS `City`,`T1`.`prospect_PostalCode` AS `PostalCode`,`T1`.`prospect_Phone` AS `Phone`,`T1`.`prospect_Mobile` AS `Mobile`,`T1`.`prospect_Email` AS `Email`,substring_index(`T1`.`prospect_Localisation`,';',1) AS `Lat`,substring_index(`T1`.`prospect_Localisation`,';',-(1)) AS `Lng`,(case when (sum((case when `T2`.`audit_Id` then 1 else 0 end)) = 0) then 1 when ((sum((case when `T2`.`audit_Id` then 1 else 0 end)) > 0) and (sum((case when `T2`.`audit_Id` then 1 else 0 end)) < 50)) then 2 when ((sum((case when `T2`.`audit_Id` then 1 else 0 end)) >= 50) and (sum((case when `T2`.`audit_Id` then 1 else 0 end)) < 75)) then 3 when ((sum((case when `T2`.`audit_Id` then 1 else 0 end)) >= 75) and (sum((case when `T2`.`audit_Id` then 1 else 0 end)) < 98)) then 4 when (sum((case when `T2`.`audit_Id` then 1 else 0 end)) = 98) then 5 end) AS `Type`,`T2`.`audit_Id` AS `audit_Id`,`T1`.`prospect_Registred` AS `prospect_Registred`,`T1`.`prospect_Pseudo` AS `Pseudo` from (`iso_prospects` `T1` left join `iso_audits` `T2` on((`T1`.`prospect_Id` = `T2`.`prospect_Id`))) where (`T1`.`prospect_Id` > 111) group by `T1`.`prospect_Id`,`T2`.`audit_Id` order by `T1`.`prospect_Id`,`T2`.`audit_Id`,`Quests` desc ;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `iso_audits`
--
ALTER TABLE `iso_audits`
  ADD PRIMARY KEY (`audit_Id`,`prospect_Id`,`question_Id`);

--
-- Index pour la table `iso_chapters`
--
ALTER TABLE `iso_chapters`
  ADD PRIMARY KEY (`chapter_Id`);

--
-- Index pour la table `iso_chapters_questions`
--
ALTER TABLE `iso_chapters_questions`
  ADD PRIMARY KEY (`chapter_Id`,`question_Id`);

--
-- Index pour la table `iso_preambles`
--
ALTER TABLE `iso_preambles`
  ADD PRIMARY KEY (`preamble_Id`);

--
-- Index pour la table `iso_prospects`
--
ALTER TABLE `iso_prospects`
  ADD PRIMARY KEY (`prospect_Id`),
  ADD KEY `prospect_Pseudo` (`prospect_Pseudo`);

--
-- Index pour la table `iso_questions`
--
ALTER TABLE `iso_questions`
  ADD PRIMARY KEY (`question_Id`),
  ADD KEY `question_ChapterId` (`question_ChapterId`);

--
-- Index pour la table `iso_services`
--
ALTER TABLE `iso_services`
  ADD PRIMARY KEY (`service_Id`);

--
-- Index pour la table `iso_subChapters`
--
ALTER TABLE `iso_subChapters`
  ADD PRIMARY KEY (`subChapter_Id`);

--
-- Index pour la table `iso_visits`
--
ALTER TABLE `iso_visits`
  ADD PRIMARY KEY (`visit_Id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `iso_prospects`
--
ALTER TABLE `iso_prospects`
  MODIFY `prospect_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;
--
-- AUTO_INCREMENT pour la table `iso_services`
--
ALTER TABLE `iso_services`
  MODIFY `service_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `iso_visits`
--
ALTER TABLE `iso_visits`
  MODIFY `visit_Id` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
