-- phpMyAdmin SQL Dump
-- version 4.6.0
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Dim 31 Juillet 2016 à 13:27
-- Version du serveur :  5.5.50-0ubuntu0.14.04.1
-- Version de PHP :  7.0.9-1+deb.sury.org~trusty+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `web4innovation`
--

-- --------------------------------------------------------

--
-- Structure de la table `t_association_sw`
--

CREATE TABLE `t_association_sw` (
  `id_association` int(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `telephone` int(50) NOT NULL,
  `adresse` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `t_condidature`
--

CREATE TABLE `t_condidature` (
  `id_application` int(255) NOT NULL,
  `id_project` int(255) NOT NULL,
  `first_name_condidat` varchar(50) NOT NULL,
  `last_name_condidat` varchar(50) NOT NULL,
  `cv` varchar(255) NOT NULL,
  `cover_letter` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `t_login`
--

CREATE TABLE `t_login` (
  `id_login` int(50) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `t_project`
--

CREATE TABLE `t_project` (
  `id_project` int(255) NOT NULL,
  `id_association_sw` int(255) NOT NULL,
  `budget` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `resume` varchar(255) NOT NULL,
  `document` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `t_association_sw`
--
ALTER TABLE `t_association_sw`
  ADD PRIMARY KEY (`id_association`),
  ADD UNIQUE KEY `title` (`title`);

--
-- Index pour la table `t_condidature`
--
ALTER TABLE `t_condidature`
  ADD PRIMARY KEY (`id_application`),
  ADD UNIQUE KEY `id_project_3` (`id_project`),
  ADD KEY `id_project` (`id_project`),
  ADD KEY `id_project_2` (`id_project`);

--
-- Index pour la table `t_login`
--
ALTER TABLE `t_login`
  ADD PRIMARY KEY (`id_login`);

--
-- Index pour la table `t_project`
--
ALTER TABLE `t_project`
  ADD PRIMARY KEY (`id_project`),
  ADD UNIQUE KEY `id_association_sw` (`id_association_sw`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `t_association_sw`
--
ALTER TABLE `t_association_sw`
  MODIFY `id_association` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `t_condidature`
--
ALTER TABLE `t_condidature`
  MODIFY `id_application` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `t_login`
--
ALTER TABLE `t_login`
  MODIFY `id_login` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `t_project`
--
ALTER TABLE `t_project`
  MODIFY `id_project` int(255) NOT NULL AUTO_INCREMENT;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `t_condidature`
--
ALTER TABLE `t_condidature`
  ADD CONSTRAINT `t_condidature_ibfk_1` FOREIGN KEY (`id_project`) REFERENCES `t_project` (`id_project`);

--
-- Contraintes pour la table `t_project`
--
ALTER TABLE `t_project`
  ADD CONSTRAINT `t_project_ibfk_1` FOREIGN KEY (`id_association_sw`) REFERENCES `t_association_sw` (`id_association`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
