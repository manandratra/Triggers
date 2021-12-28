-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 28 déc. 2021 à 10:25
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `trigger`
--

-- --------------------------------------------------------

--
-- Structure de la table `audit_vendeurs`
--

CREATE TABLE `audit_vendeurs` (
  `id` int(11) NOT NULL,
  `quand` date DEFAULT NULL,
  `qui` varchar(40) DEFAULT NULL,
  `quoi` varchar(10) DEFAULT NULL,
  `nouveau_salaire` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `audit_vendeurs`
--

INSERT INTO `audit_vendeurs` (`id`, `quand`, `qui`, `quoi`, `nouveau_salaire`) VALUES
(10, '2021-12-28', 'mlkmljhfs', 'update', 20054656),
(12, '2021-12-28', 'Manandratra', 'update', 20000001),
(13, '2021-12-28', 'Manandratra', 'update', 20000002),
(14, '2021-12-28', 'Manandratra', 'Apres upda', 20111112),
(15, '2021-12-28', 'lkjgf', 'Avant upda', 20),
(16, '2021-12-28', 'lkjgf', 'Apres upda', 200000);

-- --------------------------------------------------------

--
-- Structure de la table `recettes_jour`
--

CREATE TABLE `recettes_jour` (
  `rc_date` date NOT NULL DEFAULT current_timestamp(),
  `rc_montant` decimal(12,2) DEFAULT 0.00,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `recettes_jour`
--

INSERT INTO `recettes_jour` (`rc_date`, `rc_montant`, `id`) VALUES
('2021-12-27', '80000.00', 20050);

-- --------------------------------------------------------

--
-- Structure de la table `recettes_mois`
--

CREATE TABLE `recettes_mois` (
  `rc_year` int(11) NOT NULL,
  `rc_month` int(11) NOT NULL,
  `rc_montant` decimal(10,0) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `recettes_mois`
--

INSERT INTO `recettes_mois` (`rc_year`, `rc_month`, `rc_montant`, `id`) VALUES
(2021, 12, '40000', 1),
(2021, 12, '80000', 6),
(2021, 12, '80000', 15);

-- --------------------------------------------------------

--
-- Structure de la table `recettes_vendeurs`
--

CREATE TABLE `recettes_vendeurs` (
  `vd_id` int(11) NOT NULL,
  `rc_date` date NOT NULL DEFAULT current_timestamp(),
  `rc_montant` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `recettes_vendeurs`
--

INSERT INTO `recettes_vendeurs` (`vd_id`, `rc_date`, `rc_montant`) VALUES
(1, '2021-12-27', '40000'),
(2, '2021-12-27', '40000');

--
-- Déclencheurs `recettes_vendeurs`
--
DELIMITER $$
CREATE TRIGGER `Insert_recettes_j` AFTER INSERT ON `recettes_vendeurs` FOR EACH ROW INSERT INTO recettes_jour VALUES(CURRENT_TIMESTAMP(), (SELECT SUM(rc_montant) FROM recettes_vendeurs), '')
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `delete_recette_j` AFTER DELETE ON `recettes_vendeurs` FOR EACH ROW INSERT INTO recettes_jour VALUES(CURRENT_TIMESTAMP(), (SELECT SUM(rc_montant) FROM recettes_vendeurs), '')
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `delete_recette_m` AFTER DELETE ON `recettes_vendeurs` FOR EACH ROW INSERT INTO recettes_mois VALUES(YEAR(CURRENT_TIMESTAMP()), MONTH(CURRENT_TIMESTAMP()), (SELECT SUM(rc_montant) FROM recettes_vendeurs), (SELECT vd_id FROM recettes_vendeurs)) ORDER BY vd_id
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `delete_recette_vendeur_m` AFTER DELETE ON `recettes_vendeurs` FOR EACH ROW INSERT INTO recettes_vendeur_mois VALUES(YEAR(CURRENT_TIMESTAMP()), MONTH(CURRENT_TIMESTAMP()), (SELECT vd_id FROM recettes_vendeurs WHERE rc_date=rc_date AND vd_id=vd_id), (SELECT SUM(rc_montant) FROM recettes_vendeurs))
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `insert_recettes_m` AFTER INSERT ON `recettes_vendeurs` FOR EACH ROW INSERT INTO recettes_mois VALUES(YEAR(CURRENT_TIMESTAMP()), MONTH(CURRENT_TIMESTAMP()), (SELECT SUM(rc_montant) FROM recettes_vendeurs), '')
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `insert_recettes_vendeur_m` AFTER INSERT ON `recettes_vendeurs` FOR EACH ROW INSERT INTO recettes_vendeur_mois VALUES(YEAR(CURRENT_TIMESTAMP()), MONTH(CURRENT_TIMESTAMP()), (SELECT vd_id FROM recettes_vendeurs WHERE rc_date=NEW.rc_date AND vd_id=NEW.vd_id), (SELECT SUM(rc_montant) FROM recettes_vendeurs))
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_recette_j` AFTER UPDATE ON `recettes_vendeurs` FOR EACH ROW INSERT INTO recettes_jour VALUES(CURRENT_TIMESTAMP(), (SELECT SUM(rc_montant) FROM recettes_vendeurs), '')
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_recette_m` AFTER UPDATE ON `recettes_vendeurs` FOR EACH ROW INSERT INTO recettes_mois VALUES(YEAR(CURRENT_TIMESTAMP()), MONTH(CURRENT_TIMESTAMP()), (SELECT SUM(rc_montant) FROM recettes_vendeurs), '')
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_recette_vandeur_m` AFTER UPDATE ON `recettes_vendeurs` FOR EACH ROW INSERT INTO recettes_vendeur_mois VALUES(YEAR(CURRENT_TIMESTAMP()), MONTH(CURRENT_TIMESTAMP()), (SELECT vd_id FROM recettes_vendeurs WHERE rc_date=NEW.rc_date AND vd_id=NEW.vd_id), (SELECT SUM(rc_montant) FROM recettes_vendeurs))
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `recettes_vendeur_mois`
--

CREATE TABLE `recettes_vendeur_mois` (
  `rc_year` int(11) NOT NULL,
  `rc_month` int(11) NOT NULL,
  `vd_id` int(11) NOT NULL,
  `rc_montant` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `recettes_vendeur_mois`
--

INSERT INTO `recettes_vendeur_mois` (`rc_year`, `rc_month`, `vd_id`, `rc_montant`) VALUES
(2021, 12, 2, '80000');

-- --------------------------------------------------------

--
-- Structure de la table `vendeurs`
--

CREATE TABLE `vendeurs` (
  `vd_id` int(11) NOT NULL,
  `vd_name` text NOT NULL,
  `salaire` int(11) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `vendeurs`
--

INSERT INTO `vendeurs` (`vd_id`, `vd_name`, `salaire`, `password`) VALUES
(1, 'Manandratra', 20111112, ''),
(2, 'mlkmljhfs', 20000000, ''),
(10, 'lkjgf', 200000, ''),
(11, 'lkjhhjkj', 2, '');

--
-- Déclencheurs `vendeurs`
--
DELIMITER $$
CREATE TRIGGER `audit_vendeur` BEFORE UPDATE ON `vendeurs` FOR EACH ROW INSERT into audit_vendeurs VALUES("",CURRENT_TIMESTAMP(),(SELECT vd_name FROM vendeurs WHERE vd_name=new.vd_name),"Avant update",(SELECT salaire FROM vendeurs WHERE vd_name=new.vd_name))
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `audit_vendeur_apres` AFTER UPDATE ON `vendeurs` FOR EACH ROW INSERT into audit_vendeurs VALUES("",CURRENT_TIMESTAMP(),(SELECT vd_name FROM vendeurs WHERE vd_name=new.vd_name),"Apres update",(SELECT salaire FROM vendeurs WHERE vd_name=new.vd_name))
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `insert_audit` AFTER INSERT ON `vendeurs` FOR EACH ROW INSERT INTO audit_vendeurs VALUES("", CURRENT_TIMESTAMP(), (SELECT vd_name FROM vendeurs WHERE vd_name=new.vd_name), "insert", (SELECT salaire FROM vendeurs WHERE vd_name=new.vd_name))
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `vendeurs(triggers)_uggroups`
--

CREATE TABLE `vendeurs(triggers)_uggroups` (
  `GroupID` int(11) NOT NULL,
  `Label` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `vendeurs(triggers)_ugmembers`
--

CREATE TABLE `vendeurs(triggers)_ugmembers` (
  `UserName` varchar(300) NOT NULL,
  `GroupID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `vendeurs(triggers)_ugmembers`
--

INSERT INTO `vendeurs(triggers)_ugmembers` (`UserName`, `GroupID`) VALUES
('admin', -1);

-- --------------------------------------------------------

--
-- Structure de la table `vendeurs(triggers)_ugrights`
--

CREATE TABLE `vendeurs(triggers)_ugrights` (
  `TableName` varchar(300) NOT NULL,
  `GroupID` int(11) NOT NULL,
  `AccessMask` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `vendeurs(triggers)_ugrights`
--

INSERT INTO `vendeurs(triggers)_ugrights` (`TableName`, `GroupID`, `AccessMask`) VALUES
('admin_members', -1, 'ADESPIM'),
('admin_rights', -1, 'ADESPIM'),
('admin_users', -1, 'ADESPIM'),
('audit_vendeurs', -1, 'ADESPIM'),
('Dashboard', -1, 'ADESPIM'),
('recettes_jour', -2, 'S'),
('recettes_jour', -1, 'ADESPIM'),
('recettes_mois', -2, 'S'),
('recettes_mois', -1, 'ADESPIM'),
('recettes_vendeurs', -2, 'AEDS'),
('recettes_vendeurs', -1, 'ADESPIM'),
('recettes_vendeur_mois', -2, 'S'),
('recettes_vendeur_mois', -1, 'ADESPIM'),
('recettes_vendeur_mois Chart', -2, 'S'),
('recettes_vendeur_mois Chart', -1, 'ADESPIM'),
('vendeurs', -3, 'S'),
('vendeurs', -2, 'S'),
('vendeurs', -1, 'ADESPIM'),
('vendeurs(triggers)_users', -1, 'ADESPIM');

-- --------------------------------------------------------

--
-- Structure de la table `vendeurs(triggers)_users`
--

CREATE TABLE `vendeurs(triggers)_users` (
  `ID` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `groupid` varchar(255) DEFAULT NULL,
  `active` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `vendeurs(triggers)_users`
--

INSERT INTO `vendeurs(triggers)_users` (`ID`, `username`, `password`, `email`, `fullname`, `groupid`, `active`) VALUES
(1, 'admin', 'admin', 'admin@mail.com', 'admin', NULL, 1),
(2, 'user', 'user', 'username@mail.com', 'username', NULL, 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `audit_vendeurs`
--
ALTER TABLE `audit_vendeurs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `recettes_jour`
--
ALTER TABLE `recettes_jour`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `recettes_mois`
--
ALTER TABLE `recettes_mois`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `recettes_vendeurs`
--
ALTER TABLE `recettes_vendeurs`
  ADD PRIMARY KEY (`vd_id`,`rc_date`);

--
-- Index pour la table `recettes_vendeur_mois`
--
ALTER TABLE `recettes_vendeur_mois`
  ADD PRIMARY KEY (`rc_year`,`rc_month`,`vd_id`),
  ADD KEY `vd` (`vd_id`);

--
-- Index pour la table `vendeurs`
--
ALTER TABLE `vendeurs`
  ADD PRIMARY KEY (`vd_id`);

--
-- Index pour la table `vendeurs(triggers)_uggroups`
--
ALTER TABLE `vendeurs(triggers)_uggroups`
  ADD PRIMARY KEY (`GroupID`);

--
-- Index pour la table `vendeurs(triggers)_ugmembers`
--
ALTER TABLE `vendeurs(triggers)_ugmembers`
  ADD PRIMARY KEY (`UserName`(50),`GroupID`);

--
-- Index pour la table `vendeurs(triggers)_ugrights`
--
ALTER TABLE `vendeurs(triggers)_ugrights`
  ADD PRIMARY KEY (`TableName`(50),`GroupID`);

--
-- Index pour la table `vendeurs(triggers)_users`
--
ALTER TABLE `vendeurs(triggers)_users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `audit_vendeurs`
--
ALTER TABLE `audit_vendeurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `recettes_jour`
--
ALTER TABLE `recettes_jour`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20051;

--
-- AUTO_INCREMENT pour la table `recettes_mois`
--
ALTER TABLE `recettes_mois`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `vendeurs`
--
ALTER TABLE `vendeurs`
  MODIFY `vd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `vendeurs(triggers)_uggroups`
--
ALTER TABLE `vendeurs(triggers)_uggroups`
  MODIFY `GroupID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `vendeurs(triggers)_users`
--
ALTER TABLE `vendeurs(triggers)_users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `recettes_vendeurs`
--
ALTER TABLE `recettes_vendeurs`
  ADD CONSTRAINT `vendeur` FOREIGN KEY (`vd_id`) REFERENCES `vendeurs` (`vd_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
