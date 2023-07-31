-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 31 juil. 2023 à 09:59
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `location_de_voiture`
--

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(40) NOT NULL,
  `prenom` varchar(40) NOT NULL,
  `codePostal` varchar(10) NOT NULL,
  `localite` varchar(50) NOT NULL,
  `rue` varchar(80) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `telephone` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `locations`
--

DROP TABLE IF EXISTS `locations`;
CREATE TABLE IF NOT EXISTS `locations` (
  `id` int NOT NULL AUTO_INCREMENT,
  `idClient` int NOT NULL,
  `immatriculation` varchar(20) NOT NULL,
  `dateDebut` datetime NOT NULL,
  `dayeFin` datetime NOT NULL,
  `dateRentree` datetime NOT NULL,
  `assurance` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `voitures`
--

DROP TABLE IF EXISTS `voitures`;
CREATE TABLE IF NOT EXISTS `voitures` (
  `id` int NOT NULL AUTO_INCREMENT,
  `immatriculation` varchar(20) NOT NULL,
  `marque` varchar(20) NOT NULL,
  `modele` varchar(20) NOT NULL,
  `cylindree` smallint NOT NULL,
  `dateachat` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `voitures`
--

INSERT INTO `voitures` (`id`, `immatriculation`, `marque`, `modele`, `cylindree`, `dateachat`) VALUES
(1, '45-FGH-XP', 'Renault', 'Twingo', 50, '2023-07-31');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
