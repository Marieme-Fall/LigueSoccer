-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2019 at 08:29 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bdchampionnat`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrateur`
--

CREATE TABLE IF NOT EXISTS `administrateur` (
`ID_Admin` int(11) NOT NULL,
  `Nom_Admin` varchar(50) NOT NULL,
  `Prenom_Admin` varchar(50) NOT NULL,
  `Username_Admin` varchar(50) NOT NULL,
  `Password_Admin` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `administrateur`
--

INSERT INTO `administrateur` (`ID_Admin`, `Nom_Admin`, `Prenom_Admin`, `Username_Admin`, `Password_Admin`) VALUES
(1, 'Boudiaf', 'Ahmed', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `classement`
--

CREATE TABLE IF NOT EXISTS `classement` (
`ID_Classement` int(11) NOT NULL,
  `ID_Tournois` int(11) NOT NULL,
  `ID_Match` int(11) NOT NULL,
  `ID_Equipe` int(11) NOT NULL,
  `Points_Classement` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `classement`
--

INSERT INTO `classement` (`ID_Classement`, `ID_Tournois`, `ID_Match`, `ID_Equipe`, `Points_Classement`) VALUES
(1, 1, 31, 1, 2),
(2, 1, 31, 1, 2),
(3, 1, 31, 1, 2),
(4, 1, 31, 1, 2),
(5, 1, 31, 1, 2),
(6, 1, 31, 1, 2),
(7, 1, 31, 1, 2),
(8, 1, 31, 1, 2),
(9, 1, 31, 1, 2),
(10, 1, 31, 1, 2),
(11, 1, 31, 1, 2),
(12, 1, 31, 1, 2),
(13, 1, 31, 1, 2),
(14, 1, 31, 1, 2),
(15, 1, 31, 1, 2),
(16, 1, 31, 1, 2),
(17, 1, 31, 1, 2),
(18, 1, 31, 1, 2),
(19, 1, 31, 1, 2),
(20, 1, 31, 1, 2),
(21, 1, 31, 1, 2),
(22, 1, 31, 1, 2),
(23, 1, 31, 1, 2),
(24, 1, 31, 1, 2),
(25, 1, 31, 1, 2),
(26, 1, 31, 1, 2),
(27, 1, 31, 1, 2),
(28, 1, 31, 1, 2),
(29, 1, 31, 1, 2),
(30, 1, 31, 1, 2),
(31, 1, 31, 1, 2),
(32, 1, 31, 1, 2),
(33, 1, 31, 1, 2),
(34, 1, 31, 1, 2),
(35, 1, 31, 1, 2),
(36, 1, 31, 1, 2),
(37, 1, 31, 1, 2),
(38, 1, 31, 1, 2),
(39, 1, 31, 1, 2),
(40, 1, 31, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `equipe`
--

CREATE TABLE IF NOT EXISTS `equipe` (
`ID_Equipe` int(11) NOT NULL,
  `Nom_Equipe` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `equipe`
--

INSERT INTO `equipe` (`ID_Equipe`, `Nom_Equipe`) VALUES
(1, 'equipe1'),
(2, 'equipe2'),
(3, 'equipe3'),
(4, 'equipe4'),
(7, 'equipe Mtl19'),
(8, 'equipe7'),
(9, 'equipe77'),
(11, 'equipe Alger');

-- --------------------------------------------------------

--
-- Table structure for table `match3`
--

CREATE TABLE IF NOT EXISTS `match3` (
`ID_Match` int(11) NOT NULL,
  `Type_Match` varchar(25) NOT NULL,
  `Date_Match` date NOT NULL,
  `ID_Tournois` int(11) NOT NULL,
  `ID_Terrain` int(11) NOT NULL,
  `ID_Equipe` int(11) NOT NULL,
  `ID_Equipe2` int(11) NOT NULL,
  `NbutEq1` int(11) NOT NULL,
  `NbutEq2` int(11) NOT NULL,
  `NbPointsEq1` int(11) NOT NULL,
  `NbPointsEq2` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `match3`
--

INSERT INTO `match3` (`ID_Match`, `Type_Match`, `Date_Match`, `ID_Tournois`, `ID_Terrain`, `ID_Equipe`, `ID_Equipe2`, `NbutEq1`, `NbutEq2`, `NbPointsEq1`, `NbPointsEq2`) VALUES
(25, 'Championnat', '2019-02-06', 1, 1, 1, 2, 2, 0, 3, 0),
(26, 'Championnat', '2019-02-06', 1, 1, 1, 3, 2, 1, 3, 0),
(28, 'Championnat', '2019-02-07', 1, 1, 1, 2, 2, 2, 1, 1),
(30, 'Championnat', '2019-02-15', 1, 1, 1, 8, 1, 2, 0, 3),
(31, 'Championnat', '2019-02-15', 1, 6, 1, 8, 2, 2, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `terrain`
--

CREATE TABLE IF NOT EXISTS `terrain` (
`ID_Terrain` int(11) NOT NULL,
  `Nom_Terrain` varchar(50) NOT NULL,
  `Ville_Terrain` varchar(50) NOT NULL,
  `Type_Terrain` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `terrain`
--

INSERT INTO `terrain` (`ID_Terrain`, `Nom_Terrain`, `Ville_Terrain`, `Type_Terrain`) VALUES
(1, 'Stade Montréal', 'Montréal', 'gazon naturel'),
(2, 'terrain2', 'Alger', 'gazon'),
(3, 'terrain3', 'Alger', 'gason'),
(5, 'Rosemont1', 'Alger', 'gazon'),
(6, 'terrain Alger', 'Alger', 'gazon');

-- --------------------------------------------------------

--
-- Table structure for table `tournois`
--

CREATE TABLE IF NOT EXISTS `tournois` (
`ID_Tournois` int(11) NOT NULL,
  `Nom_Tournois` varchar(50) NOT NULL,
  `DateDebut_Tournois` date NOT NULL,
  `DateFin_Tournois` date NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `tournois`
--

INSERT INTO `tournois` (`ID_Tournois`, `Nom_Tournois`, `DateDebut_Tournois`, `DateFin_Tournois`) VALUES
(1, 'Championat Division Une', '2018-12-25', '2019-09-25'),
(37, 'tournois Alger', '2019-02-15', '2019-02-16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrateur`
--
ALTER TABLE `administrateur`
 ADD PRIMARY KEY (`ID_Admin`);

--
-- Indexes for table `classement`
--
ALTER TABLE `classement`
 ADD PRIMARY KEY (`ID_Classement`), ADD KEY `FK_ID_Equipe` (`ID_Equipe`), ADD KEY `FK_ID_Tournois` (`ID_Tournois`), ADD KEY `ID_Match` (`ID_Match`);

--
-- Indexes for table `equipe`
--
ALTER TABLE `equipe`
 ADD PRIMARY KEY (`ID_Equipe`);

--
-- Indexes for table `match3`
--
ALTER TABLE `match3`
 ADD PRIMARY KEY (`ID_Match`), ADD KEY `ID_Match_Tournois` (`ID_Tournois`), ADD KEY `FK_ID_Match_Terrain` (`ID_Terrain`), ADD KEY `FK_ID_Match_Equipe1` (`ID_Equipe`), ADD KEY `FK_ID_Match_Equipe2` (`ID_Equipe2`);

--
-- Indexes for table `terrain`
--
ALTER TABLE `terrain`
 ADD PRIMARY KEY (`ID_Terrain`);

--
-- Indexes for table `tournois`
--
ALTER TABLE `tournois`
 ADD PRIMARY KEY (`ID_Tournois`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrateur`
--
ALTER TABLE `administrateur`
MODIFY `ID_Admin` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `classement`
--
ALTER TABLE `classement`
MODIFY `ID_Classement` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `equipe`
--
ALTER TABLE `equipe`
MODIFY `ID_Equipe` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `match3`
--
ALTER TABLE `match3`
MODIFY `ID_Match` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `terrain`
--
ALTER TABLE `terrain`
MODIFY `ID_Terrain` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tournois`
--
ALTER TABLE `tournois`
MODIFY `ID_Tournois` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=38;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `classement`
--
ALTER TABLE `classement`
ADD CONSTRAINT `FK_ID_Equipe` FOREIGN KEY (`ID_Equipe`) REFERENCES `equipe` (`ID_Equipe`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `FK_ID_Tournois` FOREIGN KEY (`ID_Tournois`) REFERENCES `tournois` (`ID_Tournois`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `FK_classement_Match3` FOREIGN KEY (`ID_Match`) REFERENCES `match3` (`ID_Match`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `match3`
--
ALTER TABLE `match3`
ADD CONSTRAINT `FK2_ID_Tournois_Match` FOREIGN KEY (`ID_Tournois`) REFERENCES `tournois` (`ID_Tournois`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `FK_ID_EquipeN2_Match2` FOREIGN KEY (`ID_Equipe2`) REFERENCES `equipe` (`ID_Equipe`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `FK_ID_Match1_Equipe1` FOREIGN KEY (`ID_Equipe`) REFERENCES `equipe` (`ID_Equipe`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `match3_ibfk_1` FOREIGN KEY (`ID_Terrain`) REFERENCES `terrain` (`ID_Terrain`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
