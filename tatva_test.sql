-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2021 at 12:25 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tatva_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `start_date` varchar(255) DEFAULT NULL,
  `end_date` varchar(255) DEFAULT NULL,
  `recurrence_every` varchar(255) DEFAULT NULL,
  `recurrence_calendar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `event_name`, `start_date`, `end_date`, `recurrence_every`, `recurrence_calendar`) VALUES
(3, 'test2', '2021-10-26', '2021-10-28', 'every_third', 'month'),
(4, 'test2', '2021-10-26', '2021-10-16', 'every_third', 'month'),
(5, 'test2', '2021-10-26', '2021-10-16', 'every_third', 'month'),
(6, 'test2', '2021-10-26', '2021-10-16', 'every_third', 'month'),
(7, 'test2', '2021-10-26', '2021-10-16', 'every_third', 'month'),
(8, 'test2', '2021-10-26', '2021-10-16', 'every_third', 'month'),
(9, 'test2', '2021-10-26', '2021-10-16', 'every_third', 'month'),
(10, 'test2', '2021-10-26', '2021-10-16', 'every_third', 'month'),
(11, 'test2', '2021-10-26', '2021-10-16', 'every_third', 'month'),
(12, 'test2', '2021-10-26', '2021-10-16', 'every_third', 'month'),
(13, 'test2', '2021-10-26', '2021-10-16', 'every_third', 'month'),
(18, 'jghhghgg', '2021-10-26', '2021-10-29', 'every_other', 'day'),
(19, 'testing', '2021-10-21', '2021-10-26', 'every_third', 'week');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
