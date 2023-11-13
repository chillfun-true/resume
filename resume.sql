-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 12, 2023 at 03:52 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resume`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

DROP TABLE IF EXISTS `about`;
CREATE TABLE IF NOT EXISTS `about` (
  `nama_depan` varchar(8) NOT NULL,
  `nama_belakang` varchar(8) NOT NULL,
  `kota` varchar(20) NOT NULL,
  `no_wa` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `keterangan` varchar(2000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`nama_depan`, `nama_belakang`, `kota`, `no_wa`, `email`, `keterangan`) VALUES
('iqbal', 'Jaffan', 'Sidoarjo', '6285808330370', 'jaffaniqbal@gmail.com', 'I am experienced in leveraging agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition.');

-- --------------------------------------------------------

--
-- Table structure for table `awards`
--

DROP TABLE IF EXISTS `awards`;
CREATE TABLE IF NOT EXISTS `awards` (
  `idawards` int(11) NOT NULL AUTO_INCREMENT,
  `awards` varchar(200) NOT NULL,
  PRIMARY KEY (`idawards`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `awards`
--

INSERT INTO `awards` (`idawards`, `awards`) VALUES
(1, 'Juara 1 Robotik entrylevel-robotask');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

DROP TABLE IF EXISTS `education`;
CREATE TABLE IF NOT EXISTS `education` (
  `idsekolah` int(11) NOT NULL AUTO_INCREMENT,
  `Sekolah` varchar(200) NOT NULL,
  `Jurusan` varchar(200) NOT NULL,
  `Tanggal` varchar(200) NOT NULL,
  PRIMARY KEY (`idsekolah`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`idsekolah`, `Sekolah`, `Jurusan`, `Tanggal`) VALUES
(1, 'SMAN 4 SIDOARJO', 'Computer Science - Web Development Track', 'August 2021 - May 2023');

-- --------------------------------------------------------

--
-- Table structure for table `skill`
--

DROP TABLE IF EXISTS `skill`;
CREATE TABLE IF NOT EXISTS `skill` (
  `idbahasa` int(11) NOT NULL AUTO_INCREMENT,
  `bahasa` varchar(200) NOT NULL,
  PRIMARY KEY (`idbahasa`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skill`
--

INSERT INTO `skill` (`idbahasa`, `bahasa`) VALUES
(1, 'CSS'),
(2, 'C++'),
(3, 'HTML5'),
(4, 'PHP');

-- --------------------------------------------------------

--
-- Table structure for table `social_media`
--

DROP TABLE IF EXISTS `social_media`;
CREATE TABLE IF NOT EXISTS `social_media` (
  `Youtube` varchar(2000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `social_media`
--

INSERT INTO `social_media` (`Youtube`) VALUES
('https://youtube.com');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `iduser` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `userpass` varchar(100) NOT NULL,
  `userrole` varchar(20) NOT NULL,
  `aktif` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`iduser`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`iduser`, `username`, `userpass`, `userrole`, `aktif`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'superadmin', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
