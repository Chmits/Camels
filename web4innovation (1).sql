-- phpMyAdmin SQL Dump
-- version 4.6.0
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mer 03 Août 2016 à 01:17
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
(3, 'Junior Entreprise Geneve', '\\Camels\\htdocs\\Camels\\resources\\images\\logos\\JEG_logo.jpg', 'La Junior Entreprise Genève est une association d’étudiants de l’Université de Genève qui a pour objectif premier la familiarisation des étudiants avec la vie d’entreprise. \r\nFondée en 1986, notre structure fonctionne aujourd’hui comme une PME. Ses membres sont affectés au sein de divers départements dans lesquels ils développent leurs connaissances et créativités.\r\nLa Junior Entreprise Genève vous permet de bénéficier de son réseau professionnel en garantissant une approche novatrice à tous vos projets. Nos juniors entrepreneurs vous assurent ainsi un travail de qualité aux meilleurs prix sur le marché.', 'http://www.jeg.ch/', '+ 41 22 379 88 14 ', 'Uni-Mail, Bd du Pont-d’Arve 40, 1205 Genève'),
(4, 'Haut ecole de gestion de geneve', 'Camels\\htdocs\\Camels\\resources\\images\\logos\\logo.png', 'Fondée en 1985, La Junior Entreprise de la faculté des HEC Lausanne est une association gérée par des étudiants, qui propose ses services aux entreprises.', 'http://jehec.ch/', '+41 21 692 33 33', 'Université de Lausanne – Bâtiment Internef (276.2)\r\nCH-1015 Dorigny');

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

--
-- Contenu de la table `t_condidature`
--

INSERT INTO `t_condidature` (`id_application`, `id_project`, `id_team`, `name_team`, `cv`, `cover_letter`) VALUES
(2, 4, 1, 'Camels', 'Camels\\htdocs\\Camels\\resources\\images\\CV\\cv.txt', 'Camels\\htdocs\\Camels\\resources\\images\\Coverletter\\letter.txt'),
(3, 5, 1, 'Camels', 'Camels\\htdocs\\Camels\\resources\\images\\CV\\cv.txt', 'Camels\\resources\\images\\Coverletter\\lettre.txt');

-- --------------------------------------------------------

--
-- Structure de la table `t_etudiant`
--

CREATE TABLE `t_etudiant` (
  `id_student` int(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `school` varchar(255) NOT NULL,
  `junior` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `t_etudiant`
--

INSERT INTO `t_etudiant` (`id_student`, `first_name`, `last_name`, `email`, `phone`, `school`, `junior`) VALUES
(1, 'Kochti', 'Aymen', 'kochti.aymen.ing@gmail.com', '+21690039941', 'ENISO', 'ENISO'),
(2, 'Benhamed', 'shamedine', 'shamesddine.benhamed@ensi-uma.tn', '24240393', 'ensi', 'ensi'),
(3, 'Tayehi', 'Mouné', 'tayehi.mouné@gmail.com', '+21620121212', 'ensi', 'ensi'),
(4, 'Saidi', 'Bacem', 'saidi.bacem@gmail.com', '+21650000000', 'ensi', 'ensi');

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

--
-- Contenu de la table `t_login`
--

INSERT INTO `t_login` (`id_login`, `username`, `password`, `role`) VALUES
(3, 'camels', '144a9188ac142a6d20b211b4221f674f', 'association');

-- --------------------------------------------------------

--
-- Structure de la table `t_project`
--

CREATE TABLE `t_project` (
  `id_project` int(255) NOT NULL,
  `id_association_sw` int(255) NOT NULL,
  `id_team` int(50) NOT NULL,
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
(4, 3, 1, 20, 'web4innovation', 'dévéloppement d\'une plateforme', '\\Camels\\resources\\images\\Cahier_charge', 'soumis'),
(5, 3, 1, 40, 'SiteWeb', 'developpement d\'un site web pour l\'entreprise TES.', 'Camels\\htdocs\\Camels\\resources\\images\\Cahier_charge_TES', 'soumis'),
(6, 3, 1, 40, 'Android', 'Developpement d\'une application android pour la societe TES', 'Camels\\resources\\images\\Cahier_charge\\Cahier_charge_TES_android.txt', 'soumis'),
(7, 4, 1, 15, 'web', 'ajouter d\'une portail pour la societe XX.', 'Camels\\htdocs\\Camels\\resources\\images\\Cahier_charge\\XX.txt', 'soumis');

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

--
-- Contenu de la table `t_team`
--

INSERT INTO `t_team` (`id_team`, `name_team`, `contact`, `number_team`, `cover_letter`) VALUES
(1, 'Camels', 'kochti.aymen.ing@gmail.com', 4, 'Camels\\htdocs\\Camels\\resources\\images\\lettre.text');

-- --------------------------------------------------------

--
-- Structure de la table `t_team_etudiant`
--

CREATE TABLE `t_team_etudiant` (
  `id_team` int(50) NOT NULL,
  `id_etudiant` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `t_team_etudiant`
--

INSERT INTO `t_team_etudiant` (`id_team`, `id_etudiant`) VALUES
(1, 1);

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
  ADD KEY `id_project_2` (`id_project`),
  ADD KEY `id_team` (`id_team`);

--
-- Index pour la table `t_etudiant`
--
ALTER TABLE `t_etudiant`
  ADD PRIMARY KEY (`id_student`);

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
  MODIFY `id_association` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `t_condidature`
--
ALTER TABLE `t_condidature`
  MODIFY `id_application` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `t_etudiant`
--
ALTER TABLE `t_etudiant`
  MODIFY `id_student` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `t_login`
--
ALTER TABLE `t_login`
  MODIFY `id_login` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `t_project`
--
ALTER TABLE `t_project`
  MODIFY `id_project` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `t_team`
--
ALTER TABLE `t_team`
  MODIFY `id_team` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
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
-- Contraintes pour la table `t_project`
--
ALTER TABLE `t_project`
  ADD CONSTRAINT `t_project_ibfk_2` FOREIGN KEY (`id_team`) REFERENCES `t_team` (`id_team`),
  ADD CONSTRAINT `t_project_ibfk_1` FOREIGN KEY (`id_association_sw`) REFERENCES `t_association_sw` (`id_association`);

--
-- Contraintes pour la table `t_team_etudiant`
--
ALTER TABLE `t_team_etudiant`
  ADD CONSTRAINT `t_team_etudiant_ibfk_1` FOREIGN KEY (`id_team`) REFERENCES `t_team` (`id_team`),
  ADD CONSTRAINT `t_team_etudiant_ibfk_2` FOREIGN KEY (`id_etudiant`) REFERENCES `t_etudiant` (`id_student`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
