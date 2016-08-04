-- phpMyAdmin SQL Dump
-- version 4.6.0
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Ven 29 Juillet 2016 à 07:24
-- Version du serveur :  5.5.50-0ubuntu0.14.04.1
-- Version de PHP :  7.0.9-1+deb.sury.org~trusty+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `web4innov`
--

-- --------------------------------------------------------

--
-- Structure de la table `t_assoc_sw`
--

CREATE TABLE `t_assoc_sw` (
  `id_assoc_sw` int(10) UNSIGNED NOT NULL,
  `nom_assoc` varchar(45) NOT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `description` text,
  `website` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `t_project`
--

CREATE TABLE `t_project` (
  `id_project` int(10) UNSIGNED NOT NULL,
  `id_assoc_sw` int(10) UNSIGNED NOT NULL,
  `title_2` varchar(45) NOT NULL,
  `budget` int(10) UNSIGNED NOT NULL,
  `document` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `t_assoc_sw`
--
ALTER TABLE `t_assoc_sw`
  ADD PRIMARY KEY (`id_assoc_sw`);

--
-- Index pour la table `t_project`
--
ALTER TABLE `t_project`
  ADD PRIMARY KEY (`id_project`),
  ADD KEY `id_assoc_sw` (`id_assoc_sw`),
  ADD KEY `id_assoc_sw_2` (`id_assoc_sw`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `t_assoc_sw`
--
ALTER TABLE `t_assoc_sw`
  MODIFY `id_assoc_sw` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
