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
('gvg', 'lebg', '2015-03-18', 2, 0, 0),
('mozart', 'vagina', '2015-03-18', 3, 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
