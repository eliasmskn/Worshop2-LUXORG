-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  localhost
-- Généré le :  Mar 04 Avril 2017 à 14:36
-- Version du serveur :  5.6.35
-- Version de PHP :  7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `LuxOrg`
--

-- --------------------------------------------------------

--
-- Structure de la table `Alarme`
--

CREATE TABLE `Alarme` (
  `id_Alarme` int(3) NOT NULL,
  `id_user` int(3) NOT NULL,
  `jour` enum('lundi','mardi','mercredi','jeudi','vendredi','samedi','dimanche') DEFAULT NULL,
  `heure` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Objet_Connectes`
--

CREATE TABLE `Objet_Connectes` (
  `id_obj` int(3) NOT NULL,
  `libelle` varchar(55) NOT NULL,
  `code` varchar(55) NOT NULL,
  `id_user` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Tache`
--

CREATE TABLE `Tache` (
  `id_Tache` int(3) NOT NULL,
  `id_objet` int(3) NOT NULL,
  `id_user` int(3) NOT NULL,
  `numero_tache` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id_utilisateur` int(3) NOT NULL,
  `nom` varchar(55) NOT NULL,
  `prenom` varchar(55) NOT NULL,
  `Adresse` varchar(55) NOT NULL,
  `code_postal` varchar(5) NOT NULL,
  `telephone` int(10) UNSIGNED ZEROFILL NOT NULL,
  `mail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `Alarme`
--
ALTER TABLE `Alarme`
  ADD PRIMARY KEY (`id_Alarme`),
  ADD KEY `FK_Alarme_Utilisateur` (`id_user`);

--
-- Index pour la table `Objet_Connectes`
--
ALTER TABLE `Objet_Connectes`
  ADD PRIMARY KEY (`id_obj`),
  ADD KEY `FK_Objet_Utilisateur` (`id_user`);

--
-- Index pour la table `Tache`
--
ALTER TABLE `Tache`
  ADD PRIMARY KEY (`id_Tache`),
  ADD KEY `FK_Tache_Utilisateur` (`id_user`),
  ADD KEY `FK_Tache_Objet` (`id_objet`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id_utilisateur`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `Alarme`
--
ALTER TABLE `Alarme`
  MODIFY `id_Alarme` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `Objet_Connectes`
--
ALTER TABLE `Objet_Connectes`
  MODIFY `id_obj` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `Tache`
--
ALTER TABLE `Tache`
  MODIFY `id_Tache` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id_utilisateur` int(3) NOT NULL AUTO_INCREMENT;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `Alarme`
--
ALTER TABLE `Alarme`
  ADD CONSTRAINT `FK_Alarme_Utilisateur` FOREIGN KEY (`id_user`) REFERENCES `utilisateur` (`id_utilisateur`);

--
-- Contraintes pour la table `Objet_Connectes`
--
ALTER TABLE `Objet_Connectes`
  ADD CONSTRAINT `FK_Objet_Utilisateur` FOREIGN KEY (`id_user`) REFERENCES `utilisateur` (`id_utilisateur`);

--
-- Contraintes pour la table `Tache`
--
ALTER TABLE `Tache`
  ADD CONSTRAINT `FK_Tache_Objet` FOREIGN KEY (`id_objet`) REFERENCES `Objet_Connectes` (`id_obj`),
  ADD CONSTRAINT `FK_Tache_Utilisateur` FOREIGN KEY (`id_user`) REFERENCES `utilisateur` (`id_utilisateur`);
