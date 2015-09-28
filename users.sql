-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 28 Sep 2015 pada 13.10
-- Versi Server: 5.5.27
-- Versi PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `people`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `city` varchar(50) NOT NULL,
  `region` varchar(50) NOT NULL,
  `UserLevel` int(11) NOT NULL DEFAULT '0',
  `Regdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `fname`, `lname`, `email`, `dob`, `city`, `region`, `UserLevel`, `Regdate`) VALUES
(1, 'puji', 'puji', 'puji', 'puji', 'puji@puji.puji', '1994-12-06', 'Kepri', 'Batam 2', 0, '0000-00-00 00:00:00'),
(2, 'admin', 'admin', 'admin', 'admin', 'admin@admin.admin', '2015-09-24', 'Bangka', 'Belitung', 1, '0000-00-00 00:00:00'),
(6, 'test', 'test', 'test', 'test', 'test@test.test', '2015-09-23', '', '', 0, '0000-00-00 00:00:00'),
(42, 'kalidirtatamara', '2323', 'Khalid', 'Irta Tamara', 'crabzbookz@yahoo.com', '2009-09-09', 'Jawa Barat', 'Surabaya', 0, '2015-09-26 19:31:43');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
