SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;


CREATE TABLE IF NOT EXISTS `forum_a` (
  `q_id` int(11) NOT NULL,
  `ans_username` varchar(45) NOT NULL,
  `answer` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `forum_a` (`q_id`, `ans_username`, `answer`, `timestamp`) VALUES
(1, 'a', 'gatau deh ya :(', '2013-01-14 11:13:16'),
(2, 'b', 'aaaaauah', '2013-01-14 11:37:53'),
(1, 'a', 'aayayayaya', '2013-01-14 11:39:05'),
(1, 'a', 'aaaaaaaaaaaa', '2013-01-14 11:45:28'),
(1, 'a', 'aaaaaaaaaaaaaaaaaaaaa', '2013-01-14 11:45:34'),
(2, 'a', 'lol', '2013-01-14 14:31:18');

CREATE TABLE IF NOT EXISTS `forum_q` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `nama_topik` varchar(45) NOT NULL,
  `username` varchar(35) NOT NULL,
  `question` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `replies` int(8) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

INSERT INTO `forum_q` (`id`, `nama_topik`, `username`, `question`, `timestamp`, `replies`) VALUES
(1, 'Aku g4l4u loch', 'a', '4ku gal4u nich, b4ntu1n d0nkz!', '2013-01-14 11:00:52', 0),
(2, 'aku jug4', 'b', 'aku juga loch', '2013-01-14 11:02:36', NULL),
(3, 'rrrr', 'a', 'rrrr', '2013-01-14 11:34:34', NULL),
(4, 'akuaaaa galau', 'a', 'aaaaa', '2013-01-14 11:35:32', NULL);

CREATE TABLE IF NOT EXISTS `konselor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(35) NOT NULL,
  `password` varchar(35) DEFAULT NULL,
  `nama` varchar(35) DEFAULT NULL,
  `email` varchar(35) DEFAULT NULL,
  `bidang` varchar(35) DEFAULT NULL,
  `foto` varchar(35) DEFAULT NULL,
  `ym` varchar(35) DEFAULT NULL,
  `Jadual` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

INSERT INTO `konselor` (`id`, `username`, `password`, `nama`, `email`, `bidang`, `foto`, `ym`, `Jadual`) VALUES
(0, '0', '0', '0', '0', 'pribadi', '0', 'sinta.wati9110', NULL),
(1, 'a', 'a', 'saya', 'saya@gmail.com', 'akademik', 'ganteng.jpg', 'henryjahja', NULL);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

INSERT INTO `user` (`id`, `username`, `password`, `nama`, `email`, `tgl_lahir`, `fakultas`, `status`, `foto`) VALUES
(1, 'a', 'a', 'Henry Jahja x', 'henryjahja@gmail.com', '1991-03-19', 'Psikologi Binatang', 'Admin', '1.jpg'),
(2, 'b', 'b', 'Annisa Dewanti', 'nnisadhe@gmail.com', '2013-01-08', 'Ilmu Komputer', 'user', 'foto.jpg'),
(3, 'x', 'x', 'Handsome', 'handsome@whatever.com', '2013-01-01', 'Fisioterapi', 'user', 'tampan.jpg'),
(5, 'c', 'c', 'c', 'nnisadhe@gmail.com', '1991-09-30', 'Ilmu Komputer', 'user', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
