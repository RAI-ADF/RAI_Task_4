-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 30 Sep 2015 pada 02.21
-- Versi Server: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `double_decker`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `place`
--

CREATE TABLE IF NOT EXISTS `place` (
  `id_place` int(11) NOT NULL,
  `id_parent` int(11) NOT NULL,
  `place_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `place`
--

INSERT INTO `place` (`id_place`, `id_parent`, `place_name`) VALUES
(1, 0, 'Indonesia'),
(2, 1, 'Jawa Barat'),
(3, 1, 'Sulawesi Selatan'),
(4, 1, 'Jawa Timur'),
(5, 1, 'Jawa Tengah'),
(6, 1, 'Sulawesi Tenggara'),
(7, 1, 'Sulawesi Tengah'),
(8, 1, 'Gorontalo'),
(9, 0, 'Thailand'),
(10, 9, 'Bangkok'),
(11, 9, 'Pattaya'),
(12, 9, 'Chiangmai'),
(13, 9, 'Chiangrai'),
(14, 9, 'Phuket'),
(15, 9, 'Hat Yai'),
(16, 9, 'Lampang'),
(17, 0, 'Malaysia'),
(18, 17, 'Kuala Lumpur'),
(19, 17, 'Kuching'),
(20, 17, 'Johor Bahru'),
(21, 17, 'Ipoh'),
(22, 17, 'Petaling Jaya'),
(23, 0, 'Vietnam'),
(24, 23, 'Hanoi'),
(25, 23, 'Dalat'),
(26, 23, 'Ha long'),
(27, 23, 'Pleiku'),
(28, 23, 'Vinh'),
(29, 0, 'Philippines'),
(30, 29, 'Cebu'),
(31, 29, 'Manila'),
(32, 29, 'Davao'),
(33, 29, 'Angeles'),
(34, 29, 'Quezon'),
(35, 29, 'Bacolod'),
(36, 29, 'Makati');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `firstname` varchar(34) NOT NULL,
  `lastname` varchar(38) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(100) NOT NULL,
  `placeofbirth` varchar(100) NOT NULL,
  `dateofbirth` date NOT NULL,
  `gender` varchar(6) NOT NULL,
  `email` varchar(254) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`firstname`, `lastname`, `username`, `password`, `placeofbirth`, `dateofbirth`, `gender`, `email`, `role`) VALUES
('a', 'a', 'a', 'a', '', '2015-09-07', '', 'sgcdga@hds.cc', ''),
('saaa', 'aa', 'aa', 'aa', '', '2015-09-01', '', 'dsah@nom.aa', ''),
('aaa', 'aaa', 'aaa', 'aaa', '', '0000-00-00', '', 'aaa@aaa.com', 'admin'),
('b', 'b', 'b', 'b', '', '2015-09-02', '', 'bbb@ggg.com', ''),
('c', 'c', 'c', 'c', 'Indonesia,Jawa Barat', '2015-09-15', '', 'sdda@fds.com', ''),
('m', 'm', 'm', 'm', 'Malaysia,Kuala Lumpur', '2015-09-02', 'female', 'arida@colornotebook.com', ''),
('n', 'n', 'n', 'n', 'Thailand,Bangkok', '2015-09-01', 'undefi', 'ara@colornotebook.com', ''),
('uuu', 'uuu', 'uuu', 'uuu', '', '0000-00-00', '', 'uuu@gasb.com', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
