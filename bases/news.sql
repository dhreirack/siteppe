-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 20 Mars 2015 à 10:34
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `si6`
--

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'gère les id news',
  `titre` varchar(25) NOT NULL,
  `description` varchar(350) DEFAULT 'Il n''y a pas de description',
  `dte` date DEFAULT NULL COMMENT 'gère la date des news',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='sert à créer une news' AUTO_INCREMENT=14 ;

--
-- Contenu de la table `news`
--

INSERT INTO `news` (`id`, `titre`, `description`, `dte`) VALUES
(2, 'Seconde news du site', 'lol', '2015-02-05'),
(3, 'Troisième news', 'troisième description', '2015-02-05'),
(6, 'ffdg', 'sfdgs', '2015-02-05'),
(7, 'Hello the world', 'lol', '2015-02-12'),
(8, 'Hello the world', 'lol', '2015-02-12'),
(9, 'yd', '', '2015-02-13'),
(10, 'qzef', 'zqef', '2015-02-13'),
(11, 'Test du ckeditor', '<p style="text-align: center;"><strong>Bienvenue &agrave; vous</strong></p>\r\n\r\n<p>ce site sert au tp <strong><u>SI6</u></strong></p>\r\n\r\n<p><span style="font-size:16px">le ckeditor est tr&egrave;s complet</span></p>\r\n', '2015-03-19');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
