-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2018 at 04:55 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nic`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `name` varchar(50) NOT NULL,
  `designation` varchar(30) NOT NULL,
  `empcode` varchar(15) NOT NULL,
  `mobileno` bigint(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `division` varchar(30) NOT NULL,
  `location` varchar(20) NOT NULL,
  `ministry` varchar(30) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_category` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`name`, `designation`, `empcode`, `mobileno`, `email`, `division`, `location`, `ministry`, `username`, `password`, `user_category`) VALUES
('Ronald', 'programmer', '123', 8290847009, 'ronaldtony007@gmail.com', '', '', '', 'ronnie', '9d4e1e23bd5b727046a9e3b4b7db57bd8d6ee684', 'Student'),
('Shubhangi Gupta', 'Designer', '1234', 8290847009, 'ronaldtony007@gmail.com', '', '', '', 'shubi', '9d4e1e23bd5b727046a9e3b4b7db57bd8d6ee684', 'Student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
