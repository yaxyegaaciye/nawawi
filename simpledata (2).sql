-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2017 at 01:35 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simpledata`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL,
  `type` enum('Member','Adminstrator') NOT NULL DEFAULT 'Member'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `type`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70', 'Adminstrator'),
(2, 'user', '202cb962ac59075b964b07152d234b70', 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `ID` int(255) NOT NULL,
  `studentname` varchar(200) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `mothername` varchar(200) NOT NULL,
  `guardianname` varchar(200) NOT NULL,
  `guardiantell` int(50) NOT NULL,
  `guardianoccupation` varchar(1000) NOT NULL,
  `pob` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `phone` int(50) NOT NULL,
  `level` varchar(30) NOT NULL,
  `classname` varchar(30) NOT NULL,
  `section` varchar(30) NOT NULL,
  `branch` varchar(30) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `registrationdate` date NOT NULL,
  `image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`ID`, `studentname`, `gender`, `mothername`, `guardianname`, `guardiantell`, `guardianoccupation`, `pob`, `address`, `dob`, `phone`, `level`, `classname`, `section`, `branch`, `nationality`, `registrationdate`, `image`) VALUES
(1, 'Sacid Abdullahi Ali', '', 'Faadumo', 'casho', 909876876, 'Self_worker', 'bosaso', 'laantahawada', '1994-12-31', 90457521, 'Primary', 'Form Four', 'S', 'Ridwaan', 'somali', '2017-09-17', ''),
(2, 'sacido', '', 'Xaliimo ', 'MOHAMOUD ABDI', 907544652, 'work', 'bosaso', 'Ridwaan', '1994-12-30', 907541268, 'Secondary', 'Form Three', 'B', 'Ridwaan', 'somali', '2017-09-17', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
