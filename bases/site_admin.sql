-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 24 Mars 2015 à 08:47
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `site admin`
--

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'gère les id news',
  `titre` varchar(20) NOT NULL,
  `description` varchar(250) DEFAULT 'Il n''y a pas de description',
  `dte` date DEFAULT NULL COMMENT 'gère la date des news',
  `chemin` varchar(255) DEFAULT NULL COMMENT 'gère les fichiers',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='sert à créer une news' AUTO_INCREMENT=12 ;

--
-- Contenu de la table `news`
--

INSERT INTO `news` (`id`, `titre`, `description`, `dte`, `chemin`) VALUES
(1, 'Création du site', 'Mise en marche du système de news.', '2015-02-19', NULL),
(2, 'Seconde news du site', 'lol', '2015-02-05', NULL),
(3, 'Troisième news', 'troisième description', '2015-02-05', NULL),
(6, 'ffdg', 'sfdgs', '2015-02-05', NULL),
(7, 'Hello the world', 'lol', '2015-02-12', NULL),
(8, 'Hello the world', 'lol', '2015-02-12', NULL),
(9, 'yd', '', '2015-02-13', NULL),
(10, 'qzef', 'zqef', '2015-02-13', NULL),
(11, 'Test du ckeditor', '<p style="text-align: center;"><strong>Bienvenue &agrave; vous</strong></p>\r\n\r\n<p>ce site sert au tp <strong><u>SI6</u></strong></p>\r\n\r\n<p><span style="font-size:16px">le ckeditor est tr&egrave;s complet</span></p>\r\n', '2015-03-19', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `presse`
--

CREATE TABLE IF NOT EXISTS `presse` (
  `idarticle` int(11) NOT NULL AUTO_INCREMENT,
  `nomarticle` varchar(25) NOT NULL,
  `descriptionarticle` varchar(250) NOT NULL,
  `dtearticle` date DEFAULT NULL,
  `corpsarticle` mediumtext CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`idarticle`),
  UNIQUE KEY `idarticle` (`idarticle`),
  UNIQUE KEY `nomarticle` (`nomarticle`),
  FULLTEXT KEY `corpsarticle` (`corpsarticle`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `presse`
--

INSERT INTO `presse` (`idarticle`, `nomarticle`, `descriptionarticle`, `dtearticle`, `corpsarticle`) VALUES
(4, 'qerttrgerthftyujgyukffujd', 'rqregqergqertg', '2015-03-19', '<p>qerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdy</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>qerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdy</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>qerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdy</p>\r\n\r\n<p>qerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdy</p>\r\n\r\n<p>qerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdyqerttrgerthftyujgyukffujdy</p>\r\n');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `login` varchar(15) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL COMMENT 'les logins des comptes',
  `pwd` varchar(15) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL COMMENT 'les pwd des comptes',
  `dteinscription` date DEFAULT NULL COMMENT 'date des inscriptions',
  `iduser` int(11) NOT NULL AUTO_INCREMENT,
  `statut` tinyint(1) NOT NULL DEFAULT '0',
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`iduser`),
  UNIQUE KEY `iduser` (`login`),
  UNIQUE KEY `iduser_2` (`iduser`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='gère les users' AUTO_INCREMENT=4 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`login`, `pwd`, `dteinscription`, `iduser`, `statut`, `admin`) VALUES
('raptor', 'jesus', '0006-06-06', 1, 1, 1),
('mozart', 'vagina', '2015-03-18', 3, 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
