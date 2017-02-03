-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 14 Juillet 2016 à 22:55
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `baras`
--

DELIMITER $$
--
-- Procédures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `HABILITATION`(  IN vprofil INT  ,  IN vecran INT  ,  IN vajout INT  ,  IN vmodif INT  ,  IN vsupprim INT  ,  IN vimprim INT  ,  IN vrech INT  ,  IN vimport INT  ,  IN vexport INT ,  IN vdroit INT )
BEGIN
 IF EXISTS (SELECT *  FROM droit WHERE IDPROFIL = vprofil AND IDECRAN = vecran )  THEN
   
        Update droit  Set 
               AJOUT=vajout,
               MODIF=vmodif,
               SUPP =vsupprim,
               IMPRIM=vimprim,
               RECH =vrech ,
               IMPORTER=vimport,
               EXPORTER =vexport,
               DROIT=vdroit;
       
     ELSE
     insert into droit(IDECRAN,AJOUT, MODIF,SUPP ,IMPRIM ,RECH ,IMPORTER,EXPORTER,DROIT ) VALUES(vecran,vajoutT,vmodif,vsupprim,vimprimM,vrech ,vimport,vexport,vdroit);
    
    end if ;

END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `annonce`
--

CREATE TABLE IF NOT EXISTS `annonce` (
  `idAnnonce` int(11) NOT NULL AUTO_INCREMENT,
  `titreAnnonce` varchar(70) NOT NULL,
  `descAnnonce` varchar(300) NOT NULL,
  `cat` varchar(200) NOT NULL,
  `type_annonce` varchar(100) NOT NULL,
  `cahier_charge` varchar(150) NOT NULL,
  `budjet` int(100) NOT NULL,
  `image` varchar(150) NOT NULL,
  `date_post` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idAnnonce`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `annonce`
--

INSERT INTO `annonce` (`idAnnonce`, `titreAnnonce`, `descAnnonce`, `cat`, `type_annonce`, `cahier_charge`, `budjet`, `image`, `date_post`) VALUES
(1, 'barashap', 'site de recherche d''emploi apide', '0', 'Projet concret a realiser rapidement', '', 250000, 'ajax011.png', '2016-07-10 21:43:31'),
(2, 'suaman', 'ite web et mobile qui servira a reunir tous ceux qui veulent collouer des appartements', '0', 'Simple demande d''information', '', 3000000, '', '2016-07-10 21:43:31'),
(3, 'suaman2', 'ite web et mobile qui servira a reunir tous ceux qui veulent collouer des appartements', '0', 'Simple demande d''information', '', 3000000, '', '2016-07-10 21:43:31'),
(4, 'test3', 'gfjgfjfvvb', '0', 'Demande de prix pour etablir un budget', '', 214500, '', '2016-07-10 21:43:31'),
(5, 'enchere', 'blabla blabe effdff', '0', 'Demande de prix pour etablir un budget', '', 1547212, '', '2016-07-10 21:43:31');

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE IF NOT EXISTS `categorie` (
  `idCat` int(11) NOT NULL AUTO_INCREMENT,
  `nomCat` varchar(30) NOT NULL,
  PRIMARY KEY (`idCat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `idUser` int(11) NOT NULL AUTO_INCREMENT,
  `nomUser` varchar(70) NOT NULL,
  `adresseUser` varchar(30) DEFAULT NULL,
  `emailUser` varchar(40) NOT NULL,
  `user_password` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `pseudo` varchar(50) NOT NULL,
  `sexe` varchar(10) NOT NULL,
  PRIMARY KEY (`idUser`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`idUser`, `nomUser`, `adresseUser`, `emailUser`, `user_password`, `contact`, `pseudo`, `sexe`) VALUES
(1, 'brago', NULL, 'brago19@yahoo.fr', 'brago', '', '', ''),
(2, 'test', NULL, 'test', 'test', 'test', 'test', 'MASCULIN');

-- --------------------------------------------------------

--
-- Structure de la table `usercontacter`
--

CREATE TABLE IF NOT EXISTS `usercontacter` (
  `idUc` int(11) NOT NULL AUTO_INCREMENT,
  `nomUc` varchar(30) NOT NULL,
  `tel` varchar(10) NOT NULL,
  PRIMARY KEY (`idUc`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
