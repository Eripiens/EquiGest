-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 22 jan. 2019 à 19:49
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `equigest`
--

-- --------------------------------------------------------

--
-- Structure de la table `cheval`
--

DROP TABLE IF EXISTS `cheval`;
CREATE TABLE IF NOT EXISTS `cheval` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `nomCourant` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `sire` varchar(255) NOT NULL,
  `robe` varchar(255) NOT NULL,
  `sexe` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `race` varchar(255) NOT NULL,
  `studbook` varchar(255) NOT NULL,
  `pere` varchar(255) NOT NULL,
  `mere` varchar(255) NOT NULL,
  `pereMere` varchar(255) NOT NULL,
  `idEcurie` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `cheval`
--

INSERT INTO `cheval` (`id`, `nomCourant`, `nom`, `sire`, `robe`, `sexe`, `dob`, `race`, `studbook`, `pere`, `mere`, `pereMere`, `idEcurie`) VALUES
(1, 'Tao', 'Tao Piliere', '95 000 000 Z', 'Bai', 'Trotteur Francais', '2019-01-15', 'Trotteur Francais', 'Trotteur Francais', 'Gabor Star', 'Malvana', 'Himo Josselyn', 3),
(2, 'Quick', 'Quick des Gages', '94 000 000 Z', 'Alezan', 'Hongre', '2019-01-21', 'Trotteur Francais', 'Trotteur Francais', 'Grayling', 'Uketty des Gages', 'Le Ham', 3),
(3, 'Tresor', 'Tresor du Gevaudan', '84 000 000 Z', 'Alezan', 'Hongre', '2019-01-08', 'Anglo Arabe', 'Anglo Arabe', 'Laurier de Here', 'Klassfolle', 'Fol Avril', 3),
(4, 'Maloue', 'Maloue', '54 000 000 Z', 'Baie', 'Jument', '2019-01-15', 'Arabe', 'Aucun', 'Inconnu', 'Inconnu', 'Inconnu', 4),
(5, 'Tao', 'Tao Piliere', '07376489B', 'Bai', 'Trotteur Francais', '2007-06-07', 'Trotteur Francais', 'Trotteur Francais', 'Gabor Star', 'Malvana', 'Himo Josselyn', 5),
(6, 'Volu', 'Voluptueuse Micka', ' 09255908E', 'Bai', 'Jument', '2009-04-20', 'Trotteur Francais', 'Trotteur Francais', 'Narvick du Buisson', 'Olympe de Micka', 'Flash de Jiel', 5),
(7, 'Quick', 'Quick des Gages', '04335585G', 'Alezan', 'Hongre', '2004-04-09', 'Trotteur Francais', 'Trotteur Francais', 'Grayling', 'Uketty des Gages', 'Le Ham', 5),
(8, 'Sliders', 'Sliders', '01353552X', 'Noir Pangare', 'Hongre', '2001-04-04', 'Pur Sang Anglais', 'Pur Sang', 'Marathon', 'Assert Baby', 'Assert', 5),
(9, 'Tresor', 'Tresor du Gevaudan', '07389143X', 'Alezan', 'Hongre', '2007-06-16', 'Anglo Arabe', 'Anglo Arabe Sect II', 'Laurier de Here', 'Klassfolle', 'Fol Avril', 5),
(10, 'Miss', 'Miss d\'Alsace', '00150885T', 'Bai', 'Jument', '2000-04-16', 'Trotteur Francais', 'Trotteur Francais', 'Flash de Jiel', 'Elite Farceuse', 'Prince Royal', 5),
(11, 'Fly', 'Fly Away Phoenix', 'Inconnu', 'Noir', 'Hongre', '2016-01-01', 'Inconnu', 'Inconnu', 'Inconnu', 'Inconnu', 'Inconnu', 5);

-- --------------------------------------------------------

--
-- Structure de la table `ecurie`
--

DROP TABLE IF EXISTS `ecurie`;
CREATE TABLE IF NOT EXISTS `ecurie` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `codePostal` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `situation` varchar(255) NOT NULL,
  `idProprietaire` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `ecurie`
--

INSERT INTO `ecurie` (`id`, `nom`, `adresse`, `codePostal`, `ville`, `situation`, `idProprietaire`) VALUES
(2, 'Les Coeurs d\'Or', 'Les Moutats', '03700', 'VIPLAIX', 'Particulier', 2),
(3, 'Les Poneys', '62 rue Machin', '34500', 'NEBIAN', 'Particulier', 3),
(4, 'Les Muscats', 'Les Muscats', '34500', 'NEBIAN', 'Particulier', 3),
(5, 'Les Moutats', 'Les Moutats', '03700', 'VIPLAIX', 'Particulier', 4);

-- --------------------------------------------------------

--
-- Structure de la table `stock`
--

DROP TABLE IF EXISTS `stock`;
CREATE TABLE IF NOT EXISTS `stock` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `prix` int(11) NOT NULL,
  `poids` int(11) NOT NULL,
  `paiement` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `idProprietaire` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `stock`
--

INSERT INTO `stock` (`id`, `libelle`, `type`, `prix`, `poids`, `paiement`, `date`, `idProprietaire`) VALUES
(1, 'Foin mai', 'Fourrage', 150, 500, 'A payer', '2019-05-15', 4),
(2, 'Concentré vieux chevaux', 'Concentre', 300, 100, 'Payé', '2019-01-11', 4),
(3, 'Paille Foucard', 'Paille', 120, 800, 'A payer', '2019-01-14', 4);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `nom`, `prenom`, `username`, `password`, `mail`) VALUES
(4, 'Guy', 'Schwalm', 'Pudepied', '$2y$10$H3k.V9IfG0YfpM1/c2P/E.nU0ZvDi9QOU3KTqd.HWzQ2Yi2wMQ19C', 'pudepied@gmail.com'),
(2, 'Schwalm', 'Léa', 'Eripiens', '$2y$10$02ECRJ2I4IGTEOLlsFb0vOCd/hzM.BnJMyyB.tMOpVx8IDze.2pDu', 'lschwalm@outlook.fr'),
(3, 'Jeudy', 'Catherine', 'Cathy', '$2y$10$SAF7p9TAmkJm.YOVkDEL.eDaHPV3a5A0MwCufhCFNCetV/A/Pr38u', 'cat.jeudy@outlook.fr');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
