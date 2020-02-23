-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 23 fév. 2020 à 17:53
-- Version du serveur :  5.7.26
-- Version de PHP :  7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `test`
--

-- --------------------------------------------------------

--
-- Structure de la table `migration_versions`
--

DROP TABLE IF EXISTS `migration_versions`;
CREATE TABLE IF NOT EXISTS `migration_versions` (
  `version` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `executed_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migration_versions`
--

INSERT INTO `migration_versions` (`version`, `executed_at`) VALUES
('20200208172508', '2020-02-08 17:27:56');

-- --------------------------------------------------------

--
-- Structure de la table `tri`
--

DROP TABLE IF EXISTS `tri`;
CREATE TABLE IF NOT EXISTS `tri` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `statut` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_publication` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=87 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `tri`
--

INSERT INTO `tri` (`id`, `titre`, `description`, `statut`, `date_publication`) VALUES
(14, 'salon', 'Ranger le canapé', '2', '14/02/2020'),
(15, 'Cuisine', 'Nettoyer la cuisine', '3', '22/02/2020'),
(16, 'Chambre 2', 'Ranger la chambre 2', '1', '14/02/2020'),
(17, 'Chambre 2', 'Ranger la chambre', '1', '14/02/2020'),
(18, 'Chambre 2', 'Ranger la chambre', '1', '17/02/2020'),
(19, 'Chambre 2', 'Ranger la chambre', '1', '18/02/2020'),
(21, 'Chambre 30', 'Ranger la chambre 2', '1', '14/02/2020');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
