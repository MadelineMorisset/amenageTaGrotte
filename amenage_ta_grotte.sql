-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 23 août 2023 à 13:44
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.2.0

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id_categorie` int(11) NOT NULL,
  `categorie` varchar(100) DEFAULT NULL,
  `media` varchar(255) DEFAULT NULL,
  `id_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `media`
--

CREATE TABLE `media` (
  `id_media` int(11) NOT NULL,
  `media` varchar(100) DEFAULT NULL,
  `id_admin` int(11) NOT NULL,
  `id_article` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  MODIFY `id_article` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id_categorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT pour la table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `id_commentaire` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `media`
--
ALTER TABLE `media`
  MODIFY `id_media` int(11) NOT NULL AUTO_INCREMENT;

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
