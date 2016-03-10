-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 01 Mars 2016 à 17:21
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `vayaterra`
--

-- --------------------------------------------------------

--
-- Structure de la table `spip_test`
--

CREATE TABLE IF NOT EXISTS `spip_test` (
  `id_test` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `prenom` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id_test`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Contenu de la table `spip_test`
--

INSERT INTO `spip_test` (`id_test`, `nom`, `prenom`, `date`) VALUES
(1, 'test 1', 'dgfgdfgdfg', '0000-00-00'),
(2, 'test 2', 'dfgdfgdfg', '0000-00-00'),
(3, 'test 3 ', '333333333333333333333333333333', '0000-00-00'),
(4, 'test 4 ', '44444444444444444', '0000-00-00'),
(5, 'test 5 ', '5555555', '0000-00-00'),
(6, 'test 6 ', '666666666666', '0000-00-00'),
(7, 'test 7', '77777777', '0000-00-00'),
(8, 'test 8 ', '8888888', '0000-00-00'),
(9, 'test 9 ', '99999999', '0000-00-00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
