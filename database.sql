-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 28 Sep 2015 pada 18.08
-- Versi Server: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `raitask4`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `todo`
--

CREATE TABLE IF NOT EXISTS `todo` (
`id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `task` varchar(100) NOT NULL,
  `dates` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `todo`
--

INSERT INTO `todo` (`id`, `userid`, `task`, `dates`, `time`) VALUES
(4, 4, 'asdasfas', '0000-00-00', '01:01:14'),
(5, 4, 'asdasdasd', '0000-00-00', '01:01:14'),
(6, 4, 'asdasdasd', '2015-09-22', '01:01:14'),
(7, 4, 'asd', '0000-00-00', '01:01:14'),
(8, 4, 'qwe', '0000-00-00', '01:01:19'),
(9, 4, 'sdafca', '0000-00-00', '01:01:16'),
(10, 4, 'zzzz', '0000-00-00', '01:01:10'),
(11, 4, 'zxcvb', '0000-00-00', '01:01:00'),
(12, 4, 'jkl', '0000-00-00', '01:01:15'),
(13, 4, 'cvb', '0000-00-00', '01:01:04'),
(14, 4, 'asfas', '2015-09-10', '11:30:34'),
(15, 4, 'asda', '2015-09-16', '01:01:03'),
(16, 4, 'wer', '2015-10-10', '01:01:04'),
(17, 4, 'asd', '2015-09-03', '04:04:00'),
(18, 5, 'rty', '2015-09-12', '03:03:00'),
(19, 5, 'kjl', '2015-09-23', '14:02:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(9) NOT NULL,
  `username` varchar(65) NOT NULL,
  `password` varchar(150) NOT NULL,
  `name` varchar(65) NOT NULL,
  `email` varchar(65) NOT NULL,
  `level` varchar(5) NOT NULL,
  `birth_place` varchar(65) NOT NULL,
  `birth_date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `name`, `email`, `level`, `birth_place`, `birth_date`) VALUES
(3, 'tes1', 'tes1', 'tes1', 'tes1@tes1.tes1', 'admin', 'jawa barat - bandung', '0000-00-00'),
(4, 'tes2', 'tes2', 'tes2', 'tes2@tes2.tes2', 'user', 'jawa barat - bandung', '0000-00-00'),
(5, 'tes3', 'tes3', 'asd', 'asd@asas', 'user', 'sulawesi selatan - pare pare', '0000-00-00'),
(6, 'tes4', 'tes4', 'tes4', 'tes4@asd.as', 'user', 'jawa barat - bandung', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `todo`
--
ALTER TABLE `todo`
 ADD PRIMARY KEY (`id`), ADD KEY `userid` (`userid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `username` (`username`), ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `todo`
--
ALTER TABLE `todo`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(9) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `todo`
--
ALTER TABLE `todo`
ADD CONSTRAINT `usertodo` FOREIGN KEY (`userid`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
