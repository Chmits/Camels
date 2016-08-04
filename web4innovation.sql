-- phpMyAdmin SQL Dump
-- version 4.6.0
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Jeu 04 Août 2016 à 09:55
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
  `description` text NOT NULL,
  `website` varchar(255) NOT NULL,
  `telephone` varchar(50) NOT NULL,
  `adresse` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `t_association_sw`
--

INSERT INTO `t_association_sw` (`id_association`, `title`, `logo`, `description`, `website`, `telephone`, `adresse`) VALUES
(1, 'ARDIA', '../resources/images/logos/ARDIA.png', 'ARDIA est une société de Services et de Conseil en Ingénierie implantée au Technopôle Ghazala depuis 2005, filiale du groupe mondial d’origine française ACTIA Group.\r\n\r\nAvec plus de 20 filiales implantées dans 15 pays, ACTIA Group est le spécialiste des équipements électroniques à haute valeur ajoutée destinées aux marchés des véhicules roulants et des télécommunications.\r\n\r\nARDIA a une forte expérience des projets menés dans un contexte international. \r\n\r\nNous connaissons et appliquons les standards qualité requis par les plus grands donneurs d’ordre.\r\n\r\nDepuis sa création ARDIA accompagne ses clients dans le développement et l’intégration de l’électronique embarquée communicante et des logiciels ou progiciels liés.\r\n\r\nARDIA a développé un réel savoir-faire pour : \r\n\r\nLe développement de logiciels embarqués ou PC\r\nLes études mécaniques et électroniques\r\nLes tests et la validation des systèmes complexes\r\nDes services concernant les équipements\r\nAvec une forte culture d’engagement, nous assurons à nos clients la réactivité et l’efficacité opérationnelle de modèles de collaboration adaptés, flexibles et évolutifs.\r\n\r\nARDIA emploie aujourd\'hui plus de 230 salariés,\r\n\r\nARDIA a mis en œuvre un Système Qualité performant et en perpétuelle amélioration, mais aussi des méthodologies et des expertises prouvées de gestion de projets issues de bonnes pratiques et des meilleurs standards de l’industrie logicielle.\r\n\r\nARDIA est certifiée ISO 9001 version 2008 pour l’ensemble de ses activités de Conception, Développement, Test et validation, d’outils de diagnostic, de systèmes mécaniques, d’outillage de production pour application automobile, de support industriel et Test de qualification. \r\n\r\nAccréditée ISO 17025  version  2005 depuis 2013 pour son laboratoire de qualification thermomécanique.\r\n\r\nARDIA est en cours de certification CMMI et ISO 27001', 'http://www.ardia.com.tn/', '+21671546456', 'Technopôle El Ghazala - Zone \r\nIndustrielle Chotrana 2, lot AFI N°9 - BP99, Cebalat Ben Ammar 2088'),
(2, 'VERMEG', '../resources/images/logos/vermeg.png', 'At Vermeg, we deliver trusted financial software that allows our clients to focus on their core competencies without worrying about their IT solutions.\r\nWe are the partner of choice of financial institutions all over Europe and beyond.\r\n\r\nPassionate about asset servicing, portfolio management, private banking and life & health insurance, we are the partner of choice of European bankers and insurers. Multi-local, we are committed to delivering effective solutions, on time and on budget, for each market we operate in. With the peace of mind of our clients and the respect of our employees at the heart of our strategy, we bring to this market not only our expertise but also a refreshing touch of humanity and humility.', 'https://www.vermeg.com/', '+21671458796', 'Technopole el ghazela');

-- --------------------------------------------------------

--
-- Structure de la table `t_association_tun`
--

CREATE TABLE `t_association_tun` (
  `id_association_tun` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `website` varchar(50) NOT NULL,
  `school` varchar(255) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `adresse` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `t_condidature`
--

CREATE TABLE `t_condidature` (
  `id_application` int(255) NOT NULL,
  `id_project` int(255) NOT NULL,
  `id_team` int(50) NOT NULL,
  `name_team` varchar(50) NOT NULL,
  `cv` varchar(255) NOT NULL,
  `cover_letter` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `t_etudiant`
--

CREATE TABLE `t_etudiant` (
  `id_student` int(50) NOT NULL,
  `id_association_tun` int(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `school` varchar(255) NOT NULL,
  `junior` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `t_login`
--

CREATE TABLE `t_login` (
  `id_login` int(50) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(50) NOT NULL,
  `id_assoc_sw` int(11) DEFAULT NULL,
  `id_etudiant` int(11) DEFAULT NULL,
  `id_assoc_tun` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `t_login`
--

INSERT INTO `t_login` (`id_login`, `username`, `password`, `role`, `id_assoc_sw`, `id_etudiant`, `id_assoc_tun`) VALUES
(4, 'ardia', '144a9188ac142a6d20b211b4221f674f', 'association', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `t_project`
--

CREATE TABLE `t_project` (
  `id_project` int(255) NOT NULL,
  `id_association_sw` int(255) NOT NULL,
  `id_team` int(50) DEFAULT NULL,
  `budget` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `resume` varchar(255) NOT NULL,
  `document` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `t_project`
--

INSERT INTO `t_project` (`id_project`, `id_association_sw`, `id_team`, `budget`, `title`, `resume`, `document`, `status`) VALUES
(1, 1, NULL, 1900, 'Consultant Pilotage Recette et Intégration\r\n', 'Mission:\r\nAccompagnement de la recette d’intégration des solution partenaire (PPC - Uprgade de version BO)', '../resources/document/ch1.pdf', 'soumis'),
(2, 1, NULL, 800, 'Optimisation site web seo ', 'Bonjour, nous sommes à la recherche d\'un prestataire pour mettre à jour notre site web sous joomla...', '../resources/document/ch2.pdf', 'soumis'),
(3, 2, NULL, 2100, 'Modules spécifiques prestashop', 'Site presta actuel en version 1.5 Dev en cours vers 1.6 Modules spécifiques à développer pour le 5 septembre 2016 = 4 - un module "paiement direct" pour contourner les problèmes de paypal et autres bugs CB ...', '../resources/document/doc3.pdf', 'soumis'),
(4, 1, NULL, 700, 'Move! createur d\'événement sportif', 'L\'application comprendra une plateforme d\'inscription et une interaction entre contact. Elle aura besoin d\'utiliser la caméra du smartphone de l\'utilisateur...', '../resources/document/doc4.pdf', 'affected'),
(5, 1, NULL, 1600, 'Création d\'un petit site internet', 'Bonjour, dans le cadre de la mise en place d\'un concours vidéo, nous recherchons un dev ou une équipe de dev capable de mettre en place un petit site (quasi site vitrine) où l\'architecture, le design ...', '../resources/dcument/doc4.pdf', 'progress');

-- --------------------------------------------------------

--
-- Structure de la table `t_team`
--

CREATE TABLE `t_team` (
  `id_team` int(50) NOT NULL,
  `name_team` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `number_team` int(50) NOT NULL,
  `cover_letter` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `t_team_etudiant`
--

CREATE TABLE `t_team_etudiant` (
  `id_team` int(50) NOT NULL,
  `id_etudiant` int(50) NOT NULL
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
-- Index pour la table `t_association_tun`
--
ALTER TABLE `t_association_tun`
  ADD PRIMARY KEY (`id_association_tun`);

--
-- Index pour la table `t_condidature`
--
ALTER TABLE `t_condidature`
  ADD PRIMARY KEY (`id_application`),
  ADD UNIQUE KEY `id_project_3` (`id_project`),
  ADD KEY `id_project` (`id_project`),
  ADD KEY `id_project_2` (`id_project`),
  ADD KEY `id_team` (`id_team`);

--
-- Index pour la table `t_etudiant`
--
ALTER TABLE `t_etudiant`
  ADD PRIMARY KEY (`id_student`),
  ADD KEY `id_association_tun` (`id_association_tun`);

--
-- Index pour la table `t_login`
--
ALTER TABLE `t_login`
  ADD PRIMARY KEY (`id_login`),
  ADD KEY `id_assoc_sw` (`id_assoc_sw`),
  ADD KEY `id_etudiant` (`id_etudiant`),
  ADD KEY `id_assoc_tun` (`id_assoc_tun`),
  ADD KEY `id_assoc_sw_2` (`id_assoc_sw`);

--
-- Index pour la table `t_project`
--
ALTER TABLE `t_project`
  ADD PRIMARY KEY (`id_project`),
  ADD KEY `id_association_sw` (`id_association_sw`),
  ADD KEY `id_team` (`id_team`);

--
-- Index pour la table `t_team`
--
ALTER TABLE `t_team`
  ADD PRIMARY KEY (`id_team`);

--
-- Index pour la table `t_team_etudiant`
--
ALTER TABLE `t_team_etudiant`
  ADD KEY `id_team` (`id_team`),
  ADD KEY `id_etudiant` (`id_etudiant`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `t_association_sw`
--
ALTER TABLE `t_association_sw`
  MODIFY `id_association` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `t_association_tun`
--
ALTER TABLE `t_association_tun`
  MODIFY `id_association_tun` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `t_condidature`
--
ALTER TABLE `t_condidature`
  MODIFY `id_application` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `t_etudiant`
--
ALTER TABLE `t_etudiant`
  MODIFY `id_student` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `t_login`
--
ALTER TABLE `t_login`
  MODIFY `id_login` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `t_project`
--
ALTER TABLE `t_project`
  MODIFY `id_project` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `t_team`
--
ALTER TABLE `t_team`
  MODIFY `id_team` int(50) NOT NULL AUTO_INCREMENT;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `t_condidature`
--
ALTER TABLE `t_condidature`
  ADD CONSTRAINT `t_condidature_ibfk_1` FOREIGN KEY (`id_project`) REFERENCES `t_project` (`id_project`),
  ADD CONSTRAINT `t_condidature_ibfk_2` FOREIGN KEY (`id_team`) REFERENCES `t_team` (`id_team`);

--
-- Contraintes pour la table `t_etudiant`
--
ALTER TABLE `t_etudiant`
  ADD CONSTRAINT `t_etudiant_ibfk_1` FOREIGN KEY (`id_association_tun`) REFERENCES `t_association_tun` (`id_association_tun`);

--
-- Contraintes pour la table `t_login`
--
ALTER TABLE `t_login`
  ADD CONSTRAINT `t_login_ibfk_1` FOREIGN KEY (`id_assoc_sw`) REFERENCES `t_association_sw` (`id_association`),
  ADD CONSTRAINT `t_login_ibfk_2` FOREIGN KEY (`id_etudiant`) REFERENCES `t_etudiant` (`id_student`),
  ADD CONSTRAINT `t_login_ibfk_3` FOREIGN KEY (`id_assoc_tun`) REFERENCES `t_association_tun` (`id_association_tun`);

--
-- Contraintes pour la table `t_project`
--
ALTER TABLE `t_project`
  ADD CONSTRAINT `t_project_ibfk_1` FOREIGN KEY (`id_association_sw`) REFERENCES `t_association_sw` (`id_association`),
  ADD CONSTRAINT `t_project_ibfk_2` FOREIGN KEY (`id_team`) REFERENCES `t_team` (`id_team`) ON DELETE CASCADE;

--
-- Contraintes pour la table `t_team_etudiant`
--
ALTER TABLE `t_team_etudiant`
  ADD CONSTRAINT `t_team_etudiant_ibfk_1` FOREIGN KEY (`id_team`) REFERENCES `t_team` (`id_team`),
  ADD CONSTRAINT `t_team_etudiant_ibfk_2` FOREIGN KEY (`id_etudiant`) REFERENCES `t_etudiant` (`id_student`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
