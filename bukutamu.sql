-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 28, 2015 at 07:31 
-- Server version: 5.1.37
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `bukutamu`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_nya`
--

CREATE TABLE IF NOT EXISTS `user_nya` (
  `USER_ID` varchar(50) NOT NULL,
  `name` varchar(30) NOT NULL,
  `Tempat` varchar(30) NOT NULL,
  `tanggal` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `PASS` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_nya`
--

