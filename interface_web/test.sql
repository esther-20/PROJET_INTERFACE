-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : Dim 10 mai 2020 à 18:27
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `test`
--

-- --------------------------------------------------------

--
-- Structure de la table `consulter`
--

CREATE TABLE `consulter` (
  `Id_consul` int(11) NOT NULL,
  `Id_util` int(11) NOT NULL,
  `Id_hist` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `fiche`
--

CREATE TABLE `fiche` (
  `Id_fich` int(11) NOT NULL,
  `Nom_fich` varchar(30) CHARACTER SET utf8 NOT NULL,
  `Descrip` varchar(30) CHARACTER SET utf8 NOT NULL,
  `Quantite` varchar(25) CHARACTER SET utf8 NOT NULL,
  `Unite` varchar(25) CHARACTER SET utf8 NOT NULL,
  `Code_equip` varchar(25) CHARACTER SET utf8 NOT NULL,
  `Date` varchar(20) CHARACTER SET utf8 NOT NULL,
  `Num_devis` varchar(25) CHARACTER SET utf8 NOT NULL,
  `titr_proj` varchar(30) CHARACTER SET utf8 NOT NULL,
  `Id_typ_fich` int(11) NOT NULL,
  `Id_util` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `historique`
--

CREATE TABLE `historique` (
  `Id_hist` int(11) NOT NULL,
  `Evmnt_hist` varchar(30) NOT NULL,
  `Dat_heur_hist` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `projet`
--

CREATE TABLE `projet` (
  `Id_proj` int(11) NOT NULL,
  `Nom_proj` varchar(30) CHARACTER SET utf8 NOT NULL,
  `date_proj` varchar(20) CHARACTER SET utf8 NOT NULL,
  `Id_util` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `projet`
--

INSERT INTO `projet` (`Id_proj`, `Nom_proj`, `date_proj`, `Id_util`) VALUES
(1, 'operation clean', '10/12/12', 2);

-- --------------------------------------------------------

--
-- Structure de la table `type_fiche`
--

CREATE TABLE `type_fiche` (
  `Id_typ_fich` int(11) NOT NULL,
  `Lib_typ_fich` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `type_utilisateur`
--

CREATE TABLE `type_utilisateur` (
  `Id_typ_util` int(11) NOT NULL,
  `Lib_typ_util` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `type_utilisateur`
--

INSERT INTO `type_utilisateur` (`Id_typ_util`, `Lib_typ_util`) VALUES
(1, 'administrateur'),
(2, 'utilisateur');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `Id_util` int(11) NOT NULL,
  `Nom_util` varchar(30) NOT NULL,
  `Prenom_util` varchar(50) NOT NULL,
  `Adresse_util` varchar(30) NOT NULL,
  `Tel_util` varchar(20) NOT NULL,
  `Email_util` varchar(50) NOT NULL,
  `Mot_pass_utill` varchar(30) NOT NULL,
  `Id_typ_util` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`Id_util`, `Nom_util`, `Prenom_util`, `Adresse_util`, `Tel_util`, `Email_util`, `Mot_pass_utill`, `Id_typ_util`) VALUES
(2, 'brindou', 'junior', 'yop', '79843757', '225juniorbrindou@gmail.com', '99tomates.', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `consulter`
--
ALTER TABLE `consulter`
  ADD PRIMARY KEY (`Id_consul`),
  ADD KEY `FK_consul_util` (`Id_util`),
  ADD KEY `FK_consul_hist` (`Id_hist`);

--
-- Index pour la table `fiche`
--
ALTER TABLE `fiche`
  ADD PRIMARY KEY (`Id_fich`),
  ADD KEY `FK_typ_fich_fiche` (`Id_typ_fich`),
  ADD KEY `FK__util_fiche` (`Id_util`);

--
-- Index pour la table `historique`
--
ALTER TABLE `historique`
  ADD PRIMARY KEY (`Id_hist`);

--
-- Index pour la table `projet`
--
ALTER TABLE `projet`
  ADD PRIMARY KEY (`Id_proj`),
  ADD KEY `FK_proj_util` (`Id_util`);

--
-- Index pour la table `type_fiche`
--
ALTER TABLE `type_fiche`
  ADD PRIMARY KEY (`Id_typ_fich`);

--
-- Index pour la table `type_utilisateur`
--
ALTER TABLE `type_utilisateur`
  ADD PRIMARY KEY (`Id_typ_util`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`Id_util`),
  ADD KEY `FK_util_typ_util` (`Id_typ_util`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `consulter`
--
ALTER TABLE `consulter`
  MODIFY `Id_consul` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `fiche`
--
ALTER TABLE `fiche`
  MODIFY `Id_fich` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `historique`
--
ALTER TABLE `historique`
  MODIFY `Id_hist` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `projet`
--
ALTER TABLE `projet`
  MODIFY `Id_proj` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `type_fiche`
--
ALTER TABLE `type_fiche`
  MODIFY `Id_typ_fich` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `type_utilisateur`
--
ALTER TABLE `type_utilisateur`
  MODIFY `Id_typ_util` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `Id_util` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `consulter`
--
ALTER TABLE `consulter`
  ADD CONSTRAINT `FK_consul_hist` FOREIGN KEY (`Id_hist`) REFERENCES `historique` (`Id_hist`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_consul_util` FOREIGN KEY (`Id_util`) REFERENCES `utilisateur` (`Id_util`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `fiche`
--
ALTER TABLE `fiche`
  ADD CONSTRAINT `FK__util_fiche` FOREIGN KEY (`Id_util`) REFERENCES `utilisateur` (`Id_util`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_typ_fich_fiche` FOREIGN KEY (`Id_typ_fich`) REFERENCES `type_fiche` (`Id_typ_fich`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `projet`
--
ALTER TABLE `projet`
  ADD CONSTRAINT `FK_proj_util` FOREIGN KEY (`Id_util`) REFERENCES `utilisateur` (`Id_util`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD CONSTRAINT `FK_util_typ_util` FOREIGN KEY (`Id_typ_util`) REFERENCES `type_utilisateur` (`Id_typ_util`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
