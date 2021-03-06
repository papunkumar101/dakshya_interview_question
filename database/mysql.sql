-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 06, 2021 at 07:40 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--

--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ad_id` int(11) NOT NULL,
  `ad_uid` varchar(100) DEFAULT NULL,
  `ad_pass` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ad_id`, `ad_uid`, `ad_pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `a_id` int(11) NOT NULL,
  `u_id` varchar(100) NOT NULL,
  `day` varchar(11) DEFAULT NULL,
  `in_time` text DEFAULT NULL,
  `out_time` text DEFAULT NULL,
  `date` text DEFAULT NULL,
  `update_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`a_id`, `u_id`, `day`, `in_time`, `out_time`, `date`, `update_time`) VALUES
(1, 'papu', 'monday', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '2021-03-05 10:48:27'),
(2, 'papu', 'Friday', '10:56:32 AM', '', '05/March/2021', '2021-03-05 10:56:32'),
(3, '', '', '', '10:57:57 AM', '', '2021-03-05 10:57:57'),
(4, 'rakhi', 'Friday', '11:10:09 AM', '11:10:42 AM', '05/March/2021', '2021-03-05 11:10:42'),
(5, 'papu', 'Saturday', '11:25:20 AM', '11:26:35 AM', '06/March/2021', '2021-03-06 05:56:35');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `e_id` int(11) NOT NULL,
  `e_name` varchar(255) DEFAULT NULL,
  `e_phone` text DEFAULT NULL,
  `e_uid` varchar(100) NOT NULL,
  `e_pass` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`e_id`, `e_name`, `e_phone`, `e_uid`, `e_pass`) VALUES
(1, 'papun g', '2147483647', 'papu', '12'),
(3, 'rahul', '2147483647', 'rahul', '123'),
(4, 'rakhi', '2147483647', 'rakhi', '1'),
(5, 'syam', '1487387857', 'syam', '123'),
(7, 'rozy', '1232452', 'rozy', '1'),
(8, 'rohit', '1735653', 'rohit', '123'),
(9, 'rohit', '1735653', 'rohit', '123'),
(10, 'rozy', '1393783861', 'rozy', '123'),
(12, 'ragini', '7393783861', 'ragini', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`a_id`),
  ADD KEY `u_id` (`u_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD UNIQUE KEY `e_id` (`e_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `e_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
