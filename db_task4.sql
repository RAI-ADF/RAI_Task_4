-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2015 at 06:01 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_task4`
--
CREATE DATABASE IF NOT EXISTS `db_task4` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_task4`;

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE IF NOT EXISTS `data` (
  `name` varchar(30) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`name`, `deskripsi`) VALUES
('rian', 'mahasiswa telkom'),
('doni', ''),
('doni', ''),
('doni', 'main dota terus'),
('doni', 'main dota terus yaa');

-- --------------------------------------------------------

--
-- Table structure for table `registrasi`
--

CREATE TABLE IF NOT EXISTS `registrasi` (
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `password2` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `place` varchar(30) NOT NULL,
  `date` varchar(15) NOT NULL,
  `leveluser` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registrasi`
--

INSERT INTO `registrasi` (`username`, `password`, `password2`, `email`, `name`, `place`, `date`, `leveluser`) VALUES
('a', 'a', 'a', 'a@a', 'a', '', '', 'admin'),
('rian', '123', '123', 'npdrd@gmail.com', 'rian', 'Jawa Tengah', 'Klaten', ''),
('rian', '123', '123', 'npdrd@yahoo.com', 'rian', 'Jawa Tengah', 'Klaten', 'user'),
('rian', '123', '123', 'n@gmail.com', 'rian', '', '', 'user'),
('npdrd', '123', '123', '1@gmail.com', 'rian', '', '09/01/2015', 'user'),
('npdrd', '123', '123', '1@gmail.com', 'rian', '', '09/01/2015', 'user'),
('npdrdesn', '123', '123', 'esb@gmail.com', 'esn', 'Kota Tangerang', '09/02/2015', 'user');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
