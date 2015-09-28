-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2015 at 01:10 AM
-- Server version: 5.6.11
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `wikifiesto`
--
CREATE DATABASE IF NOT EXISTS `wikifiesto` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `wikifiesto`;



-- --------------------------------------------------------

--
-- Table structure for table `wikilogin`
--

CREATE TABLE IF NOT EXISTS `wikilogin` (
  `idlogin` int(4) NOT NULL AUTO_INCREMENT,
  `wikiuser` varchar(40) NOT NULL,
  `wikipass` varchar(20) NOT NULL,
  PRIMARY KEY (`idlogin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `wikilogin`
--

INSERT INTO `wikilogin` (`idlogin`, `wikiuser`, `wikipass`) VALUES
(1, 'opal', '1103120146');

-- --------------------------------------------------------

--
-- Table structure for table `wikilogin2`
--

CREATE TABLE IF NOT EXISTS `wikilogin2` (
  `idadmin` int(4) NOT NULL AUTO_INCREMENT,
  `username2` varchar(20) NOT NULL,
  `password2` varchar(20) NOT NULL,
  `name2` varchar(30) NOT NULL,
  `email2` varchar(30) NOT NULL,
  `placebirth` varchar(30) NOT NULL,
  `datebirth` varchar(30) NOT NULL,
  PRIMARY KEY (`idadmin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `wikilogin2`
--

INSERT INTO `wikilogin2` (`idadmin`, `username2`, `password2`, `name2`, `email2`, `placebirth`, `datebirth`) VALUES
(1, 'nofalmade', '1103120146', 'sang made naufal', 'nofalmade@gmail.com', 'jakarta', '28 agustus 1994');

-- --------------------------------------------------------


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
