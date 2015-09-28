-- phpMyAdmin SQL Dump
-- version 4.5.0
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 28, 2015 at 12:38 AM
-- Server version: 10.0.21-MariaDB-log
-- PHP Version: 5.6.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_task4`
--
DROP DATABASE `db_task4`;
CREATE DATABASE IF NOT EXISTS `db_task4` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `db_task4`;

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

DROP TABLE IF EXISTS `notes`;
CREATE TABLE `notes` (
  `id` int(11) NOT NULL,
  `user` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `user`, `title`, `content`) VALUES
(1, 'admin', 'Test Note Admin 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(3, 'rizkidoank', 'Test Note User 1', 'ini udah diedit'),
(4, 'rizkidoank', 'Test Note User 2', 'Donec id dapibus dui, at tincidunt quam. Morbi eget ipsum pretium, gravida diam in, auctor tortor. Morbi ac sagittis erat, mollis tempus metus. Donec scelerisque leo metus, at vestibulum felis interdum et. Nunc et augue dignissim, tempor dui sit amet, ullamcorper ex. Etiam eu porta risus. Nam efficitur risus ex, non consequat odio ultrices sit amet. Sed ac mollis est. '),
(5, 'admin', 'Test Note Admin 2', 'Integer blandit ex tellus, a lacinia lectus volutpat vel. Proin pulvinar faucibus odio. Phasellus ut augue nec augue aliquam blandit ac sit amet enim. Duis eleifend ultricies interdum. Vestibulum venenatis sapien et lacus rutrum, ac condimentum ex venenatis. Vestibulum ultricies magna quis orci fermentum elementum. Integer lacinia, mauris vel varius fringilla, purus ante lacinia leo, sed tristique elit nisi sit amet lorem. Aliquam fringilla nisl nisi, eu lobortis orci bibendum sed. Mauris nec leo lacinia, vestibulum risus sed, iaculis ligula. ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` char(32) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `place_of_birth` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_of_birth` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `name`, `email`, `place_of_birth`, `date_of_birth`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator', 'admin@gmail.com', 'Kab. Cianjur', '1994-07-11'),
('rizkidoank', '464a59a510e7af71e421f0b29fdc43e4', 'Rizki', 'rizki.doank94@gmail.com', 'Kab. Cianjur', '1994-07-11'),
('user01', 'b75705d7e35e7014521a46b532236ec3', 'User01', 'user01@gmail.com', 'Kodya Jakarta Selatan', '1993-10-02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
