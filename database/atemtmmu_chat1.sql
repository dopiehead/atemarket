-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 10, 2023 at 12:36 PM
-- Server version: 10.3.37-MariaDB-log-cll-lve
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atemtmmu_chat1`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(255) NOT NULL,
  `sender_email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `itemid` int(255) NOT NULL,
  `compose` text NOT NULL,
  `receiver_email` varchar(255) NOT NULL,
  `has_read` tinyint(11) NOT NULL,
  `is_sender_deleted` tinyint(11) NOT NULL,
  `is_receiver_deleted` tinyint(11) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `sender_email`, `name`, `subject`, `itemid`, `compose`, `receiver_email`, `has_read`, `is_sender_deleted`, `is_receiver_deleted`, `date`) VALUES
(1, 'ngnimitech@gmail.com', 'doppie_head', 'Hayla rabbits ', 2, 'Hello', 'niyialabi10@yahoo.com', 1, 0, 0, 'Sun, February 05, 2023 2:39PM'),
(2, 'niyialabi10@yahoo.com', 'Neeyo', 'Hayla rabbits ', 2, 'Hi ðŸ‘‹', 'ngnimitech@gmail.com', 0, 0, 0, 'Sun, February 05, 2023 2:43PM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
