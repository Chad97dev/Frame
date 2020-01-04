-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 01 juil. 2019 à 06:34
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `frame`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `login` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `role` varchar(30) DEFAULT NULL,
  `attachement` varchar(40) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `nom`, `prenom`, `role`, `attachement`, `created_at`, `updated_at`) VALUES
(1, 'ludwig', '0b9c2625dc21ef05f6ad4ddf47c5f203837aa32c', 'Henni', 'Carlos', 'Chomeur', NULL, '2019-06-11 00:00:00', '2019-06-19 00:00:00'),
(22, 'Roro', 'toto', 'Lukaku', 'Romelu', 'BU', NULL, '2019-06-21 00:00:00', '2019-06-09 00:00:00'),
(26, 'riri', 'toto', 'MATHEY', 'Pierre', 'Secut', NULL, '2019-06-20 00:00:00', '2019-06-26 00:00:00'),
(27, 'bibi', 'toto', 'Petit', 'Emmanuel', 'Nain', NULL, '2019-06-20 00:00:00', '2019-06-20 00:00:00'),
(32, 'chad', '0b9c2625dc21ef05f6ad4ddf47c5f203837aa32c', 'ANM', 'Chad', 'admin', NULL, '2019-06-26 00:00:00', '2019-06-26 00:00:00'),
(33, 'Thanos', '0b9c2625dc21ef05f6ad4ddf47c5f203837aa32c', 'MATHEY', 'Thanos Pierre', 'Super Vilain', NULL, '2019-06-26 00:00:00', '2019-06-26 00:00:00'),
(34, 'DB', '0b9c2625dc21ef05f6ad4ddf47c5f203837aa32c', 'Brogniart', 'Denis', 'Presentateur', NULL, '2019-06-27 00:00:00', '2019-06-27 00:00:00'),
(35, 'Hellobrow', '0b9c2625dc21ef05f6ad4ddf47c5f203837aa32c', 'Hello', 'Brow', NULL, NULL, '2019-06-28 00:00:00', '2019-06-28 00:00:00'),
(36, 'test', '0b9c2625dc21ef05f6ad4ddf47c5f203837aa32c', 'Test', 'testeuh', NULL, NULL, '2019-06-28 00:00:00', '2019-06-28 00:00:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
