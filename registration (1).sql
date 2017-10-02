-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2017 at 06:02 PM
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
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `ID` int(255) NOT NULL,
  `studentname` varchar(200) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `mothername` varchar(200) NOT NULL,
  `guardianname` varchar(200) NOT NULL,
  `guardianrelation` varchar(100) NOT NULL,
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

INSERT INTO `registration` (`ID`, `studentname`, `gender`, `mothername`, `guardianname`, `guardianrelation`, `guardiantell`, `guardianoccupation`, `pob`, `address`, `dob`, `phone`, `level`, `classname`, `section`, `branch`, `nationality`, `registrationdate`, `image`) VALUES
(1, 'MOHAMED', 'Male', 'Faadumo', '', 'Father', 0, '', '', '', '0000-00-00', 0, 'Necessary', 'Kindergartner', 'A', 'Nawawi', 'somali', '0000-00-00', ''),
(2, 'said', 'Male', 'Maryama', 'faarax', 'Mother', 0, '', '', '', '0000-00-00', 0, 'Kindergartner', 'Kindergartner', 'A', 'Nawawi', '', '0000-00-00', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
