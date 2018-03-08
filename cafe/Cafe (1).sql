-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 08, 2018 at 02:50 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.1.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Cafe`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `pass` int(11) NOT NULL,
  `user_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `email`, `pass`, `user_name`) VALUES
(1, 'ahmedarkan1@icloud.com', 112233, 'AhmedAdmin'),
(2, 'admin@admin.com', 112233, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tabells`
--

CREATE TABLE `tabells` (
  `id` int(11) NOT NULL,
  `size` int(11) NOT NULL,
  `active` varchar(10) NOT NULL,
  `reservation` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabells`
--

INSERT INTO `tabells` (`id`, `size`, `active`, `reservation`) VALUES
(3, 20, 'ACTIVE', 1),
(4, 30, 'ACTIVE', 1),
(5, 10, 'ACTIVE', 1),
(6, 10, 'ACTIVE', 0),
(8, 12, 'NONE', 0),
(9, 10, 'NONE', 0),
(12, 19, 'ACTIVE', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `pass` text NOT NULL,
  `user_name` text NOT NULL,
  `delete` int(1) DEFAULT NULL,
  `edit` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `pass`, `user_name`, `delete`, `edit`) VALUES
(1, 'ahmedarkan@icloud.com', 'Aa112233', 'ahmed', 1, NULL),
(2, 'ahmedarkan@icloud.co', 'Aa112233', 'ahmed', NULL, NULL),
(3, 'ahmedarkan@icloud.c', 'Aa112233', 'Ali', NULL, NULL),
(4, 'Tanja@Tanja.co', '112233', 'Tanja', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabells`
--
ALTER TABLE `tabells`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tabells`
--
ALTER TABLE `tabells`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
