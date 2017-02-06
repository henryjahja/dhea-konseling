-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2013 at 04:49 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `konseling`
--

-- --------------------------------------------------------

--
-- Table structure for table `konselor`
--

CREATE TABLE IF NOT EXISTS `konselor` (
  `id` int(11) NOT NULL,
  `username` int(11) NOT NULL,
  `password` int(11) NOT NULL,
  `nama` int(11) NOT NULL,
  `email` int(11) NOT NULL,
  `bidang` int(11) NOT NULL,
  `foto` int(11) NOT NULL,
  `ym` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `tgl_lahir` varchar(20) DEFAULT NULL,
  `fakultas` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `foto` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama`, `email`, `tgl_lahir`, `fakultas`, `status`, `foto`) VALUES
(1, 'a', 'a', 'Henry Jahja', 'henryjahja@gmail.com', '', 'Ilmu Komputer', 'Admin', 'ganteng.jpg'),
(2, 'b', 'b', 'Annisa Dewanti', 'nnisadhe@gmail.com', '31 - 12 - 2001', 'Psikologi Binatang', 'user', 'foto.jpg'),
(3, 'x', 'x', 'Handsome', 'handsome@whatever.com', '2013-01-01', 'Fisioterapi', 'user', 'tampan.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
