-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  Dim 14 jan. 2018 à 14:30
-- Version du serveur :  5.6.35
-- Version de PHP :  7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `bts`
--

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id_utilisateur` int(11) NOT NULL,
  `pseudo` varchar(30) NOT NULL,
  `mdp` varchar(30) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `tel` varchar(10) NOT NULL,
  `favoris` varchar(50) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `sexe` enum('m','f') NOT NULL DEFAULT 'm',
  `dateNaissance` date NOT NULL,
  `bio` text NOT NULL,
  `villes` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_utilisateur`, `pseudo`, `mdp`, `mail`, `nom`, `prenom`, `tel`, `favoris`, `photo`, `sexe`, `dateNaissance`, `bio`, `villes`) VALUES
(1, 'admin', 'admin', 'admin@test.fr', '', '', '', '', '', 'm', '0000-00-00', '', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id_utilisateur`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;