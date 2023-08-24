-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 24 août 2023 à 14:59
-- Version du serveur : 10.4.25-MariaDB
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `amenage_ta_grotte`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

CREATE TABLE `administrateur` (
  `id_admin` int(11) NOT NULL,
  `nom` varchar(75) DEFAULT NULL,
  `prenom` varchar(75) DEFAULT NULL,
  `mail` varchar(100) DEFAULT NULL,
  `mdp` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `administrateur`
--

INSERT INTO `administrateur` (`id_admin`, `nom`, `prenom`, `mail`, `mdp`) VALUES
(1, 'Angenard', 'Élodie', 'aelodie@mail.com', '$2y$10$.oGKujRiNX3L4FGSAMv.relUu/LpEGFDRBE6rU5Z0SIYDWsibnNYe'),
(2, 'Morisset', 'Madeline', 'mmadeline@mail.com', '$2y$10$8YuATo9wYBzW/lgYx.2ILeJ/pXQQDCdnHx87ZRCstXYVZBtNz22vC'),
(3, 'Guimard', 'Vanessa', 'gvanessa@mail.com', '$2y$10$1uLZHwB/czzk4lSXOx2dSeLRJqSF284TvKP7bgSqAFor6vNuzEIdO');

-- --------------------------------------------------------

--
-- Structure de la table `article_blog`
--

CREATE TABLE `article_blog` (
  `id_article` int(11) NOT NULL,
  `date_article` date DEFAULT NULL,
  `titre` varchar(200) DEFAULT NULL,
  `texte` text DEFAULT NULL,
  `id_admin` int(11) NOT NULL,
  `id_categorie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `article_blog`
--

INSERT INTO `article_blog` (`id_article`, `date_article`, `titre`, `texte`, `id_admin`, `id_categorie`) VALUES
(3, '2023-08-23', 'Pourquoi choisir de vivre dans une grotte ?', '<div class=\"OutlineElement Ltr SCXW45827835 BCX0\">\r\n<p class=\"Paragraph SCXW45827835 BCX0\"><span style=\"color: rgb(0, 0, 0);\"><span class=\"TextRun SCXW45827835 BCX0\" lang=\"FR-FR\" xml:lang=\"FR-FR\" data-contrast=\"auto\"><span class=\"NormalTextRun SCXW45827835 BCX0\">C&rsquo;est la canicule et tu n&rsquo;en peux plus de d&eacute;gouliner de sueur ?</span></span><span class=\"EOP SCXW45827835 BCX0\" data-ccp-props=\"{\">&nbsp;</span></span></p>\r\n</div>\r\n<div class=\"OutlineElement Ltr SCXW45827835 BCX0\">\r\n<p class=\"Paragraph SCXW45827835 BCX0\"><span style=\"color: rgb(0, 0, 0);\"><span class=\"TextRun SCXW45827835 BCX0\" lang=\"FR-FR\" xml:lang=\"FR-FR\" data-contrast=\"auto\"><span class=\"NormalTextRun SCXW45827835 BCX0\">Dans une grotte, la temp&eacute;rature est stable toute l&rsquo;ann&eacute;e ! Oubli&eacute;e la canicule ! Oubli&eacute;s les tas de linges inutilis&eacute;s la moiti&eacute; de l&rsquo;ann&eacute;e dans les armoires !</span></span><span class=\"EOP SCXW45827835 BCX0\" data-ccp-props=\"{\">&nbsp;</span></span></p>\r\n</div>\r\n<div class=\"OutlineElement Ltr SCXW45827835 BCX0\">\r\n<p class=\"Paragraph SCXW45827835 BCX0\"><span class=\"EOP SCXW45827835 BCX0\" style=\"color: rgb(0, 0, 0);\" data-ccp-props=\"{\">&nbsp;</span></p>\r\n</div>\r\n<div class=\"OutlineElement Ltr SCXW45827835 BCX0\">\r\n<p class=\"Paragraph SCXW45827835 BCX0\"><span style=\"color: rgb(0, 0, 0);\"><span class=\"TextRun SCXW45827835 BCX0\" lang=\"FR-FR\" xml:lang=\"FR-FR\" data-contrast=\"auto\"><span class=\"NormalTextRun SCXW45827835 BCX0\">Tu as la m&ecirc;me maison que ton voisin dans un lotissement surpeupl&eacute; et tu n&rsquo;en peux plus ?</span></span><span class=\"EOP SCXW45827835 BCX0\" data-ccp-props=\"{\">&nbsp;</span></span></p>\r\n</div>\r\n<div class=\"OutlineElement Ltr SCXW45827835 BCX0\">\r\n<p class=\"Paragraph SCXW45827835 BCX0\"><span style=\"color: rgb(0, 0, 0);\"><span class=\"TextRun SCXW45827835 BCX0\" lang=\"FR-FR\" xml:lang=\"FR-FR\" data-contrast=\"auto\"><span class=\"NormalTextRun SCXW45827835 BCX0\">Aucune grotte ne ressemble &agrave; une autre ! Tu pourras am&eacute;nager ta grotte &agrave; ton image, co</span><span class=\"NormalTextRun SCXW45827835 BCX0\">mme il te pla&icirc;t, et personne n&rsquo;aura la m&ecirc;me !</span></span><span class=\"EOP SCXW45827835 BCX0\" data-ccp-props=\"{\">&nbsp;</span></span></p>\r\n</div>\r\n<div class=\"OutlineElement Ltr SCXW45827835 BCX0\">\r\n<p class=\"Paragraph SCXW45827835 BCX0\"><span class=\"EOP SCXW45827835 BCX0\" style=\"color: rgb(0, 0, 0);\" data-ccp-props=\"{\">&nbsp;</span></p>\r\n</div>\r\n<div class=\"OutlineElement Ltr SCXW45827835 BCX0\">\r\n<p class=\"Paragraph SCXW45827835 BCX0\"><span style=\"color: rgb(0, 0, 0);\"><span class=\"TextRun SCXW45827835 BCX0\" lang=\"FR-FR\" xml:lang=\"FR-FR\" data-contrast=\"auto\"><span class=\"NormalTextRun SCXW45827835 BCX0\">Les gens t&rsquo;&eacute;nervent et tu r&ecirc;ves d&rsquo;un endroit au calme </span><span class=\"NormalTextRun SCXW45827835 BCX0\">rien qu&rsquo;&agrave; toi </span><span class=\"NormalTextRun SCXW45827835 BCX0\">?</span></span><span class=\"EOP SCXW45827835 BCX0\" data-ccp-props=\"{\">&nbsp;</span></span></p>\r\n</div>\r\n<div class=\"OutlineElement Ltr SCXW45827835 BCX0\">\r\n<p class=\"Paragraph SCXW45827835 BCX0\"><span style=\"color: rgb(0, 0, 0);\"><span class=\"TextRun SCXW45827835 BCX0\" lang=\"FR-FR\" xml:lang=\"FR-FR\" data-contrast=\"auto\"><span class=\"NormalTextRun SCXW45827835 BCX0\">Au fond de ta grotte, personne ne pensera &agrave; venir t&rsquo;emb&ecirc;ter. </span><span class=\"NormalTextRun SCXW45827835 BCX0\">Parfait pour les agoraphobes. Et si vraiment tu as un doute, am&eacute;nage un</span><span class=\"NormalTextRun SCXW45827835 BCX0\">e tani&egrave;re d&rsquo;ours &agrave; l&rsquo;entr&eacute;e de ta grotte : un trompe-l\'&oelig;il id&eacute;al !</span></span><span class=\"EOP SCXW45827835 BCX0\" data-ccp-props=\"{\">&nbsp;</span></span></p>\r\n</div>\r\n<div class=\"OutlineElement Ltr SCXW45827835 BCX0\">\r\n<p class=\"Paragraph SCXW45827835 BCX0\"><span class=\"EOP SCXW45827835 BCX0\" style=\"color: rgb(0, 0, 0);\" data-ccp-props=\"{\">&nbsp;</span></p>\r\n</div>\r\n<div class=\"OutlineElement Ltr SCXW45827835 BCX0\">\r\n<p class=\"Paragraph SCXW45827835 BCX0\"><span style=\"color: rgb(0, 0, 0);\"><span class=\"TextRun SCXW45827835 BCX0\" lang=\"FR-FR\" xml:lang=\"FR-FR\" data-contrast=\"auto\"><span class=\"NormalTextRun SCXW45827835 BCX0\">Bref, une grotte est l&rsquo;endroit id&eacute;al pour vivre :</span></span><span class=\"EOP SCXW45827835 BCX0\" data-ccp-props=\"{\">&nbsp;</span></span></p>\r\n</div>\r\n<div class=\"SCXW45827835 BCX0\">\r\n<div class=\"ListContainerWrapper SCXW45827835 BCX0\">\r\n<ul class=\"BulletListStyle1 SCXW45827835 BCX0\" role=\"list\">\r\n<li class=\"OutlineElement Ltr SCXW45827835 BCX0\" style=\"color: rgb(0, 0, 0);\" role=\"listitem\" data-leveltext=\"-\" data-font=\"Calibri\" data-listid=\"5\" data-list-defn-props=\"{\" aria-setsize=\"-1\" data-aria-posinset=\"1\" data-aria-level=\"1\">\r\n<p class=\"Paragraph SCXW45827835 BCX0\"><span style=\"color: rgb(0, 0, 0);\"><span class=\"TextRun SCXW45827835 BCX0\" lang=\"FR-FR\" xml:lang=\"FR-FR\" data-contrast=\"auto\"><span class=\"NormalTextRun SCXW45827835 BCX0\">Au frais toute l&rsquo;ann&eacute;e</span></span><span class=\"EOP SCXW45827835 BCX0\" data-ccp-props=\"{\">&nbsp;</span></span></p>\r\n</li>\r\n<li class=\"OutlineElement Ltr SCXW45827835 BCX0\" style=\"color: rgb(0, 0, 0);\" role=\"listitem\" data-leveltext=\"-\" data-font=\"Calibri\" data-listid=\"5\" data-list-defn-props=\"{\" aria-setsize=\"-1\" data-aria-posinset=\"2\" data-aria-level=\"1\">\r\n<p class=\"Paragraph SCXW45827835 BCX0\"><span style=\"color: rgb(0, 0, 0);\"><span class=\"TextRun SCXW45827835 BCX0\" lang=\"FR-FR\" xml:lang=\"FR-FR\" data-contrast=\"auto\"><span class=\"NormalTextRun SCXW45827835 BCX0\">Dans un logement personnalis&eacute;</span></span><span class=\"EOP SCXW45827835 BCX0\" data-ccp-props=\"{\">&nbsp;</span></span></p>\r\n</li>\r\n<li class=\"OutlineElement Ltr SCXW45827835 BCX0\" style=\"color: rgb(0, 0, 0);\" role=\"listitem\" data-leveltext=\"-\" data-font=\"Calibri\" data-listid=\"5\" data-list-defn-props=\"{\" aria-setsize=\"-1\" data-aria-posinset=\"3\" data-aria-level=\"1\">\r\n<p class=\"Paragraph SCXW45827835 BCX0\"><span style=\"color: rgb(0, 0, 0);\"><span class=\"TextRun SCXW45827835 BCX0\" lang=\"FR-FR\" xml:lang=\"FR-FR\" data-contrast=\"auto\"><span class=\"NormalTextRun SCXW45827835 BCX0\">Seul, seul, seul</span></span><span class=\"EOP SCXW45827835 BCX0\" data-ccp-props=\"{\">&nbsp;</span></span></p>\r\n</li>\r\n</ul>\r\n</div>\r\n<div class=\"OutlineElement Ltr SCXW45827835 BCX0\">\r\n<p class=\"Paragraph SCXW45827835 BCX0\"><span style=\"color: rgb(0, 0, 0);\"><span class=\"TextRun SCXW45827835 BCX0\" lang=\"FR-FR\" xml:lang=\"FR-FR\" data-contrast=\"auto\"><span class=\"NormalTextRun SCXW45827835 BCX0\">Et b&eacute;n&eacute;ficier d&rsquo;un paysage exceptionnel au pied du lit !&nbsp;</span></span><span class=\"EOP SCXW45827835 BCX0\" data-ccp-props=\"{\">&nbsp;</span></span></p>\r\n</div>\r\n</div>', 3, 18),
(4, '2023-08-23', 'Pourquoi ne pas choisir de vivre dans une grotte ?', '<div class=\"OutlineElement Ltr SCXW81423932 BCX0\">\r\n<p class=\"Paragraph SCXW81423932 BCX0\"><span class=\"TextRun SCXW81423932 BCX0\" lang=\"FR-FR\" xml:lang=\"FR-FR\" data-contrast=\"auto\"><span class=\"NormalTextRun SCXW81423932 BCX0\">Ici, nous sommes &agrave; fond pour l&rsquo;id&eacute;e de vivre dans une grotte. Mais il faut bien admettre qu&rsquo;il existe quelques raisons pour ne pas le faire...</span></span><span class=\"EOP SCXW81423932 BCX0\" data-ccp-props=\"{&quot;201341983&quot;:0,&quot;335559739&quot;:160,&quot;335559740&quot;:259}\">&nbsp;</span></p>\r\n</div>\r\n<div class=\"OutlineElement Ltr SCXW81423932 BCX0\">\r\n<p class=\"Paragraph SCXW81423932 BCX0\"><span class=\"TextRun SCXW81423932 BCX0\" lang=\"FR-FR\" xml:lang=\"FR-FR\" data-contrast=\"auto\"><span class=\"NormalTextRun SCXW81423932 BCX0\">Si </span><span class=\"NormalTextRun SCXW81423932 BCX0\">tu </span><span class=\"NormalTextRun SCXW81423932 BCX0\">es du genre &agrave; toujours vouloir agrandir </span><span class=\"NormalTextRun SCXW81423932 BCX0\">ton</span><span class=\"NormalTextRun SCXW81423932 BCX0\"> espace de vie par exemple : pass</span><span class=\"NormalTextRun SCXW81423932 BCX0\">e ton chemin. Une grotte n&rsquo;est pas extensible, &agrave; moins de vouloir prendre le risque d&rsquo;un &eacute;boulement. Il faut bien ch</span><span class=\"NormalTextRun SCXW81423932 BCX0\">oisir sa grotte d&egrave;s le d&eacute;part.</span></span><span class=\"EOP SCXW81423932 BCX0\" data-ccp-props=\"{&quot;201341983&quot;:0,&quot;335559739&quot;:160,&quot;335559740&quot;:259}\">&nbsp;</span></p>\r\n</div>\r\n<div class=\"OutlineElement Ltr SCXW81423932 BCX0\">\r\n<p class=\"Paragraph SCXW81423932 BCX0\"><span class=\"TextRun SCXW81423932 BCX0\" lang=\"FR-FR\" xml:lang=\"FR-FR\" data-contrast=\"auto\"><span class=\"NormalTextRun SCXW81423932 BCX0\">De m&ecirc;me, si tu es claustrophobe, oublie.</span><span class=\"NormalTextRun SCXW81423932 BCX0\"> Les ouvertures sont rares dans une grotte. Pas impossibles, mais dans l&rsquo;ensemble, les pi&egrave;ces sont plut&ocirc;t ferm&eacute;</span><span class=\"NormalTextRun SCXW81423932 BCX0\">es.</span></span><span class=\"EOP SCXW81423932 BCX0\" data-ccp-props=\"{&quot;201341983&quot;:0,&quot;335559739&quot;:160,&quot;335559740&quot;:259}\">&nbsp;</span></p>\r\n</div>\r\n<div class=\"OutlineElement Ltr SCXW81423932 BCX0\">\r\n<p class=\"Paragraph SCXW81423932 BCX0\"><span class=\"TextRun SCXW81423932 BCX0\" lang=\"FR-FR\" xml:lang=\"FR-FR\" data-contrast=\"auto\"><span class=\"NormalTextRun SCXW81423932 BCX0\">Il faut avoir aussi &agrave; l&rsquo;esprit que, d&eacute;coulant de ce que nous avons dit plus t&ocirc;t, les pi&egrave;ces sont plut&ocirc;t sombres</span><span class=\"NormalTextRun SCXW81423932 BCX0\">. Donc les vampires seront contents mais pas </span><span class=\"NormalTextRun SCXW81423932 BCX0\">les plantes vertes !</span></span><span class=\"EOP SCXW81423932 BCX0\" data-ccp-props=\"{&quot;201341983&quot;:0,&quot;335559739&quot;:160,&quot;335559740&quot;:259}\">&nbsp;</span></p>\r\n</div>\r\n<div class=\"OutlineElement Ltr SCXW81423932 BCX0\">\r\n<p class=\"Paragraph SCXW81423932 BCX0\"><span class=\"TextRun SCXW81423932 BCX0\" lang=\"FR-FR\" xml:lang=\"FR-FR\" data-contrast=\"auto\"><span class=\"NormalTextRun SCXW81423932 BCX0\">Enfin, certaines grottes, particuli&egrave;rement sur les c&ocirc;tes, sont inondables. Surveille les mar&eacute;es </span><span class=\"NormalTextRun SCXW81423932 BCX0\">hautes et les </span><span class=\"NormalTextRun SCXW81423932 BCX0\">pluies abondantes !&nbsp;</span></span><span class=\"EOP SCXW81423932 BCX0\" data-ccp-props=\"{&quot;201341983&quot;:0,&quot;335559739&quot;:160,&quot;335559740&quot;:259}\">&nbsp;</span></p>\r\n</div>\r\n<div class=\"OutlineElement Ltr SCXW81423932 BCX0\">\r\n<p class=\"Paragraph SCXW81423932 BCX0\"><span class=\"EOP SCXW81423932 BCX0\" data-ccp-props=\"{&quot;201341983&quot;:0,&quot;335559739&quot;:160,&quot;335559740&quot;:259}\">&nbsp;</span></p>\r\n</div>\r\n<div class=\"OutlineElement Ltr SCXW81423932 BCX0\">\r\n<p class=\"Paragraph SCXW81423932 BCX0\"><span class=\"TextRun SCXW81423932 BCX0\" lang=\"FR-FR\" xml:lang=\"FR-FR\" data-contrast=\"auto\"><span class=\"NormalTextRun SCXW81423932 BCX0\">Bref, vivre dans une grotte n&rsquo;est pas fait pour toi si :</span></span><span class=\"EOP SCXW81423932 BCX0\" data-ccp-props=\"{&quot;201341983&quot;:0,&quot;335559739&quot;:160,&quot;335559740&quot;:259}\">&nbsp;</span></p>\r\n</div>\r\n<div class=\"SCXW81423932 BCX0\">\r\n<div class=\"ListContainerWrapper SCXW81423932 BCX0\">\r\n<ul class=\"BulletListStyle1 SCXW81423932 BCX0\" role=\"list\">\r\n<li class=\"OutlineElement Ltr SCXW81423932 BCX0\" role=\"listitem\" data-leveltext=\"-\" data-font=\"Calibri\" data-listid=\"6\" data-list-defn-props=\"{&quot;335552541&quot;:1,&quot;335559684&quot;:-2,&quot;335559685&quot;:720,&quot;335559991&quot;:360,&quot;469769226&quot;:&quot;Calibri&quot;,&quot;469769242&quot;:[8226],&quot;469777803&quot;:&quot;left&quot;,&quot;469777804&quot;:&quot;-&quot;,&quot;469777815&quot;:&quot;hybridMultilevel&quot;}\" aria-setsize=\"-1\" data-aria-posinset=\"1\" data-aria-level=\"1\">\r\n<p class=\"Paragraph SCXW81423932 BCX0\"><span class=\"TextRun SCXW81423932 BCX0\" lang=\"FR-FR\" xml:lang=\"FR-FR\" data-contrast=\"auto\"><span class=\"NormalTextRun SCXW81423932 BCX0\">Tu veux vivre dans l&rsquo;espace modulable</span></span><span class=\"EOP SCXW81423932 BCX0\" data-ccp-props=\"{&quot;201341983&quot;:0,&quot;335559739&quot;:160,&quot;335559740&quot;:259}\">&nbsp;</span></p>\r\n</li>\r\n<li class=\"OutlineElement Ltr SCXW81423932 BCX0\" role=\"listitem\" data-leveltext=\"-\" data-font=\"Calibri\" data-listid=\"6\" data-list-defn-props=\"{&quot;335552541&quot;:1,&quot;335559684&quot;:-2,&quot;335559685&quot;:720,&quot;335559991&quot;:360,&quot;469769226&quot;:&quot;Calibri&quot;,&quot;469769242&quot;:[8226],&quot;469777803&quot;:&quot;left&quot;,&quot;469777804&quot;:&quot;-&quot;,&quot;469777815&quot;:&quot;hybridMultilevel&quot;}\" aria-setsize=\"-1\" data-aria-posinset=\"2\" data-aria-level=\"1\">\r\n<p class=\"Paragraph SCXW81423932 BCX0\"><span class=\"TextRun SCXW81423932 BCX0\" lang=\"FR-FR\" xml:lang=\"FR-FR\" data-contrast=\"auto\"><span class=\"NormalTextRun SCXW81423932 BCX0\">Tu es </span><span class=\"NormalTextRun SCXW81423932 BCX0\">claustrophobe</span></span><span class=\"EOP SCXW81423932 BCX0\" data-ccp-props=\"{&quot;201341983&quot;:0,&quot;335559739&quot;:160,&quot;335559740&quot;:259}\">&nbsp;</span></p>\r\n</li>\r\n<li class=\"OutlineElement Ltr SCXW81423932 BCX0\" role=\"listitem\" data-leveltext=\"-\" data-font=\"Calibri\" data-listid=\"6\" data-list-defn-props=\"{&quot;335552541&quot;:1,&quot;335559684&quot;:-2,&quot;335559685&quot;:720,&quot;335559991&quot;:360,&quot;469769226&quot;:&quot;Calibri&quot;,&quot;469769242&quot;:[8226],&quot;469777803&quot;:&quot;left&quot;,&quot;469777804&quot;:&quot;-&quot;,&quot;469777815&quot;:&quot;hybridMultilevel&quot;}\" aria-setsize=\"-1\" data-aria-posinset=\"3\" data-aria-level=\"1\">\r\n<p class=\"Paragraph SCXW81423932 BCX0\"><span class=\"TextRun SCXW81423932 BCX0\" lang=\"FR-FR\" xml:lang=\"FR-FR\" data-contrast=\"auto\"><span class=\"NormalTextRun SCXW81423932 BCX0\">Tu as besoin de beaucoup de lumi&egrave;re</span></span><span class=\"EOP SCXW81423932 BCX0\" data-ccp-props=\"{&quot;201341983&quot;:0,&quot;335559739&quot;:160,&quot;335559740&quot;:259}\">&nbsp;</span></p>\r\n</li>\r\n</ul>\r\n</div>\r\n<div class=\"OutlineElement Ltr SCXW81423932 BCX0\">\r\n<p class=\"Paragraph SCXW81423932 BCX0\"><span class=\"TextRun SCXW81423932 BCX0\" lang=\"FR-FR\" xml:lang=\"FR-FR\" data-contrast=\"auto\"><span class=\"NormalTextRun SCXW81423932 BCX0\">Et si tu n&rsquo;es pas d&eacute;brouillard !</span></span><span class=\"EOP SCXW81423932 BCX0\" data-ccp-props=\"{&quot;201341983&quot;:0,&quot;335559685&quot;:0,&quot;335559739&quot;:160,&quot;335559740&quot;:259}\">&nbsp;</span></p>\r\n</div>\r\n</div>', 1, 18);

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id_categorie` int(11) NOT NULL,
  `categorie` varchar(100) DEFAULT NULL,
  `media` varchar(255) DEFAULT NULL,
  `id_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id_categorie`, `categorie`, `media`, `id_admin`) VALUES
(18, 'Avantages/ Inconvénients', 'card_avantages_inconvénients.png', 3),
(19, 'Bien choisir sa grotte', 'card_bien_choisir.jpg', 3),
(20, 'Habitat/ aménagement', 'card_habitat_amenagement_pexels-nadin-sh-17848606.jpg', 3),
(21, 'Apprendre à être un bon grottier', 'card_être un bon grottier_pexels-ricky-esquivel-2986508.jpg', 3),
(22, 'Matériel nécessaire', 'card_materiel_diy-932183_1280.jpg', 3),
(23, 'Électricité', 'card_electricite_lightning-2568381_1280.jpg', 3),
(24, 'Potager', 'card_potager_pexels-kampus-production-7658822.jpg', 3),
(25, 'Protection', 'card_protection_pexels-pixabay-274886.jpg', 3),
(26, 'Loisirs', 'card_loisirs_pexels-andrew-shelley-8454450.jpg', 3);

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `id_commentaire` int(11) NOT NULL,
  `date_commentaire` date DEFAULT NULL,
  `nom` varchar(75) DEFAULT NULL,
  `mail` varchar(100) DEFAULT NULL,
  `commentaire` varchar(800) DEFAULT NULL,
  `id_article` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `commentaire`
--

INSERT INTO `commentaire` (`id_commentaire`, `date_commentaire`, `nom`, `mail`, `commentaire`, `id_article`) VALUES
(4, '2023-08-24', 'Emma', 'emma@mail.com', 'Super, ça donne envie d\'y aller, je vais y penser sérieusement !!!', 3),
(5, '2023-08-24', 'Philippe', 'phi@mail.com', 'Cet article tombe bien, j\'allais justement m\'y mettre !', 3),
(6, '2023-08-24', 'Soso', 'sophie@mail.com', 'Vous m\'avez convaincu, ce n\'est pas pour moi :(', 4);

-- --------------------------------------------------------

--
-- Structure de la table `media`
--

CREATE TABLE `media` (
  `id_media` int(11) NOT NULL,
  `media` varchar(100) DEFAULT NULL,
  `id_admin` int(11) NOT NULL,
  `id_article` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `media`
--

INSERT INTO `media` (`id_media`, `media`, `id_admin`, `id_article`) VALUES
(1, 'avantages.jpg', 1, 3),
(2, 'inconvénients.png', 1, 4);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `administrateur`
--
ALTER TABLE `administrateur`
  ADD PRIMARY KEY (`id_admin`);

--
-- Index pour la table `article_blog`
--
ALTER TABLE `article_blog`
  ADD PRIMARY KEY (`id_article`),
  ADD KEY `id_admin` (`id_admin`),
  ADD KEY `id_categorie` (`id_categorie`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id_categorie`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`id_commentaire`),
  ADD KEY `id_article` (`id_article`);

--
-- Index pour la table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id_media`),
  ADD KEY `id_admin` (`id_admin`),
  ADD KEY `id_article` (`id_article`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `administrateur`
--
ALTER TABLE `administrateur`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `article_blog`
--
ALTER TABLE `article_blog`
  MODIFY `id_article` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id_categorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT pour la table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `id_commentaire` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `media`
--
ALTER TABLE `media`
  MODIFY `id_media` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `article_blog`
--
ALTER TABLE `article_blog`
  ADD CONSTRAINT `article_blog_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `administrateur` (`id_admin`),
  ADD CONSTRAINT `article_blog_ibfk_2` FOREIGN KEY (`id_categorie`) REFERENCES `categorie` (`id_categorie`);

--
-- Contraintes pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD CONSTRAINT `categorie_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `administrateur` (`id_admin`);

--
-- Contraintes pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD CONSTRAINT `commentaire_ibfk_1` FOREIGN KEY (`id_article`) REFERENCES `article_blog` (`id_article`);

--
-- Contraintes pour la table `media`
--
ALTER TABLE `media`
  ADD CONSTRAINT `media_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `administrateur` (`id_admin`),
  ADD CONSTRAINT `media_ibfk_2` FOREIGN KEY (`id_article`) REFERENCES `article_blog` (`id_article`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
