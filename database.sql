
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2015 at 06:10 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rai2`
--

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` text NOT NULL,
  `provinsi` varchar(20) NOT NULL,
  `kota` varchar(20) NOT NULL,
  `tanggal` text NOT NULL,
  `gender` enum('L','P') NOT NULL DEFAULT 'L',
  `level` enum('1','2') NOT NULL DEFAULT '1',
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`username`, `password`, `name`, `email`, `provinsi`, `kota`, `tanggal`, `gender`, `level`) VALUES
('', '123', '123123', '', '', '', '', 'L', '1'),
('112233', '112233', '112233', '112233@gmail.com', 'JawaTengah', 'Magelang', '09/25/2015', 'L', '1'),
('admin', 'admin', 'admin', 'admin@gmail.com', 'JawaTimur', 'Blitar', '09/22/2015', 'L', '1'),
('coba', 'coba', 'coba', 'coba@gmail.com', 'JawaBarat', 'Bandung', '09/10/2015', 'P', '1'),
('nonieck', 'nonieck', 'nonieck', 'nonieck@gmail.com', 'JawaBarat', 'Bandung', '0000-00-00', 'L', '1'),
('siapa', 'siapapas1', 'siapanama', 'siapaemil@gmail.com', 'JawaBarat', 'Bandung', '09/09/2015', 'L', '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
