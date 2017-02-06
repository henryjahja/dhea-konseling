-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 09, 2013 at 01:50 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `konseling`
--

-- --------------------------------------------------------

--
-- Table structure for table `forum`
--

CREATE TABLE IF NOT EXISTS `forum` (
  `ForumID` int(4) NOT NULL AUTO_INCREMENT,
  `Titre` varchar(250) NOT NULL,
  PRIMARY KEY (`ForumID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `forum`
--

INSERT INTO `forum` (`ForumID`, `Titre`) VALUES
(1, 'NCO SERVICES FORUM GENERAL'),
(2, 'NCO FACILITIES FORUM GENERAL'),
(3, 'FORUM POUR LES COMMERCIALS');

-- --------------------------------------------------------

--
-- Table structure for table `forum_answer`
--

CREATE TABLE IF NOT EXISTS `forum_answer` (
  `question_id` int(4) NOT NULL DEFAULT '0',
  `a_id` int(4) NOT NULL DEFAULT '0',
  `a_name` varchar(65) NOT NULL DEFAULT '',
  `a_email` varchar(65) NOT NULL DEFAULT '',
  `a_answer` longtext NOT NULL,
  `a_datetime` varchar(25) NOT NULL DEFAULT '',
  KEY `a_id` (`a_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forum_answer`
--

INSERT INTO `forum_answer` (`question_id`, `a_id`, `a_name`, `a_email`, `a_answer`, `a_datetime`) VALUES
(1, 1, 'Dhea', 'dhea@gmail.com', 'amacaci', '07/01/13 10:09:04');

-- --------------------------------------------------------

--
-- Table structure for table `forum_question`
--

CREATE TABLE IF NOT EXISTS `forum_question` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `topic` varchar(255) NOT NULL DEFAULT '',
  `detail` longtext NOT NULL,
  `name` varchar(65) NOT NULL DEFAULT '',
  `email` varchar(65) NOT NULL DEFAULT '',
  `datetime` varchar(25) NOT NULL DEFAULT '',
  `view` int(4) NOT NULL DEFAULT '0',
  `reply` int(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `forum_question`
--

INSERT INTO `forum_question` (`id`, `topic`, `detail`, `name`, `email`, `datetime`, `view`, `reply`) VALUES
(1, 'galau', 'aku galau banget nich', 'henry', 'henry@gmail.com', '07/01/13 09:57:09', 6, 1),
(2, 'g4l4u', 'buahaahha', 'Dhea', 'dhea@gmail.com', '07/01/13 09:57:54', 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `konselor`
--

CREATE TABLE IF NOT EXISTS `konselor` (
  `Id_Konselor` varchar(15) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Pendidikan` varchar(20) NOT NULL,
  `Kategori_Pakar` varchar(15) NOT NULL,
  `Tgl_Lahir` date NOT NULL,
  `Alamat` varchar(40) NOT NULL,
  `Telepon` varchar(15) NOT NULL,
  `Foto` varchar(15) NOT NULL,
  UNIQUE KEY `Id_Konselor` (`Id_Konselor`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konselor`
--


-- --------------------------------------------------------

--
-- Table structure for table `reponses`
--

CREATE TABLE IF NOT EXISTS `reponses` (
  `ReponseID` int(4) NOT NULL AUTO_INCREMENT,
  `SubjectID` int(4) NOT NULL,
  `Subject` varchar(200) NOT NULL,
  `Texte` text NOT NULL,
  `Datum` date NOT NULL,
  `User` varchar(4) NOT NULL,
  PRIMARY KEY (`ReponseID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `reponses`
--

INSERT INTO `reponses` (`ReponseID`, `SubjectID`, `Subject`, `Texte`, `Datum`, `User`) VALUES
(4, 2, 'RE:Bienvenu', 'Bienvenu su le discussion NCO SERVISES', '0000-00-00', 'AJH'),
(9, 3, 'RE RE:Test de integralité', '<p>sdsqd sqdsq dsq sqds suqdhsq udqsudy usqduy squdy qsdsuqydu sqduyu sqdsqsqdusyd usudy usudqyu suqydu sqydu sqdsq</p>', '2010-05-21', 'AJH'),
(6, 3, 'RE:Test de integralité', '<p>dfdsds&nbsp; df dfdsfdsf dfdsfd fhfudhf dshf dsjhf dshf dhf dhfd h ddfhdsuhf dh fhdsuhfu hudshfu uhdusfdsufd ufudsufh dsfdf</p>', '2010-05-21', 'AJH'),
(10, 1, 'RE:Bienvenu', 'qsw<x<', '2010-05-21', 'AJH');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE IF NOT EXISTS `subjects` (
  `SubjectID` int(4) NOT NULL AUTO_INCREMENT,
  `ForumID` int(4) NOT NULL,
  `Subject` varchar(200) NOT NULL,
  `Texte` text NOT NULL,
  `User` varchar(4) NOT NULL,
  `Datum` date NOT NULL,
  PRIMARY KEY (`SubjectID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`SubjectID`, `ForumID`, `Subject`, `Texte`, `User`, `Datum`) VALUES
(1, 1, 'Bienvenu', 'Bienvenu su le discussion NCO FACILITIES', 'AJH', '2010-05-21'),
(2, 2, 'Bienvenu', 'Bienvenu su le discussion NCO SERVISES', 'AJH', '2010-05-21'),
(3, 2, 'Test de integralité', '<p><em><strong>Ca march ou sa marche pas</strong></em></p>', 'AJH', '2010-05-21'),
(4, 3, 'Test', 'Test', 'AJH', '2010-05-21');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `USER_ID` varchar(255) DEFAULT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Surname` varchar(255) DEFAULT NULL,
  `gsm` varchar(255) DEFAULT NULL,
  `Mail` varchar(255) DEFAULT NULL,
  `Username` varchar(255) DEFAULT NULL,
  `Pass` varchar(255) DEFAULT NULL,
  `Groupe` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`USER_ID`, `Name`, `Surname`, `gsm`, `Mail`, `Username`, `Pass`, `Groupe`) VALUES
('4', 'Admin', 'Admin', '06 20 23 70 01', NULL, 'admin', 'pass', 'user');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
