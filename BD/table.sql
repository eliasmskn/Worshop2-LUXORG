-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 06 Avril 2017 à 16:12
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `luxorg`
--

-- --------------------------------------------------------

--
-- Structure de la table `alarme`
--

CREATE TABLE IF NOT EXISTS `alarme` (
  `id_Alarme` int(3) NOT NULL AUTO_INCREMENT,
  `id_user` int(3) NOT NULL,
  `jour` enum('lundi','mardi','mercredi','jeudi','vendredi','samedi','dimanche') DEFAULT NULL,
  `heure` time NOT NULL,
  PRIMARY KEY (`id_Alarme`),
  KEY `FK_Alarme_Utilisateur` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE IF NOT EXISTS `commentaire` (
  `id_commentaire` int(3) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `commentaire` longtext NOT NULL,
  PRIMARY KEY (`id_commentaire`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `objet_connectes`
--

CREATE TABLE IF NOT EXISTS `objet_connectes` (
  `id_obj` int(3) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(55) NOT NULL,
  `code` varchar(55) NOT NULL,
  `id_user` int(3) NOT NULL,
  PRIMARY KEY (`id_obj`),
  KEY `FK_Objet_Utilisateur` (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `objet_connectes`
--

INSERT INTO `objet_connectes` (`id_obj`, `libelle`, `code`, `id_user`) VALUES
(1, 'rien', 'XXXX', 1);

-- --------------------------------------------------------

--
-- Structure de la table `tache`
--

CREATE TABLE IF NOT EXISTS `tache` (
  `id_Tache` int(3) NOT NULL AUTO_INCREMENT,
  `id_user` int(3) NOT NULL,
  `id_objet` int(3) NOT NULL,
  `numero_tache` varchar(30) NOT NULL,
  `duree` time NOT NULL,
  `libelle` varchar(255) NOT NULL,
  PRIMARY KEY (`id_Tache`),
  KEY `FK_Tache_Utilisateur` (`id_user`),
  KEY `FK_Tache_Objet_Connectes` (`id_objet`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id_utilisateur` int(3) NOT NULL AUTO_INCREMENT,
  `nom` varchar(55) NOT NULL,
  `prenom` varchar(55) NOT NULL,
  `Adresse` varchar(55) NOT NULL,
  `code_postal` varchar(5) NOT NULL,
  `telephone` int(10) unsigned zerofill NOT NULL,
  `mail` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  PRIMARY KEY (`id_utilisateur`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_utilisateur`, `nom`, `prenom`, `Adresse`, `code_postal`, `telephone`, `mail`, `mdp`) VALUES
(1, 'Amaskane', 'Elias', '63 rue des cloys', '75018', 0652790471, 'elias.amaskane@gmail.com', 'rootst'),
(2, 'Yagoubi', 'Ma├»ssane', '8 avenue de la république', '75011', 0611667629, 'maissane.y@gmail.com', 'rootst'),
(3, 'Meite ', 'Massoma', '17 Rue de toulouse', '75019', 0620915317, 'meite.massoma@gmail.com', 'rootst'),
(4, 'Jouanny', 'Jerome', '70 rue marius aufan ', '92333', 0625007104, 'jouanny.jerome@gmail.Com', 'rootst');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `alarme`
--
ALTER TABLE `alarme`
  ADD CONSTRAINT `FK_Alarme_Utilisateur` FOREIGN KEY (`id_user`) REFERENCES `utilisateur` (`id_utilisateur`);

--
-- Contraintes pour la table `objet_connectes`
--
ALTER TABLE `objet_connectes`
  ADD CONSTRAINT `FK_Objet_Utilisateur` FOREIGN KEY (`id_user`) REFERENCES `utilisateur` (`id_utilisateur`);

--
-- Contraintes pour la table `tache`
--
ALTER TABLE `tache`
  ADD CONSTRAINT `FK_Tache_Objet_Connectes` FOREIGN KEY (`id_objet`) REFERENCES `objet_connectes` (`id_obj`),
  ADD CONSTRAINT `FK_Tache_Utilisateur` FOREIGN KEY (`id_user`) REFERENCES `utilisateur` (`id_utilisateur`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
