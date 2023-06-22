-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2023 at 07:17 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin123'),
('admin', 'admin123'),
('sai', 'sai123'),
('tej', 'tej123'),
('admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `name` varchar(200) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `studphone` varchar(100) NOT NULL,
  `parentphone` varchar(100) NOT NULL,
  `address` varchar(500) NOT NULL,
  `usn` varchar(100) NOT NULL,
  `sslcmarks` int(50) NOT NULL,
  `pumarks` int(50) NOT NULL,
  `one` int(100) NOT NULL,
  `two` int(100) NOT NULL,
  `three` int(100) NOT NULL,
  `four` int(100) NOT NULL,
  `five` int(100) NOT NULL,
  `six` int(100) NOT NULL,
  `seven` int(100) NOT NULL,
  `eight` int(100) NOT NULL,
  `achievement` varchar(1000) NOT NULL,
  `skill` varchar(1000) NOT NULL,
  `extra` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`name`, `fname`, `mname`, `dob`, `gender`, `email`, `studphone`, `parentphone`, `address`, `usn`, `sslcmarks`, `pumarks`, `one`, `two`, `three`, `four`, `five`, `six`, `seven`, `eight`, `achievement`, `skill`, `extra`) VALUES
('', '', '', '0000-00-00', 'none', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', ''),
('jai', 'raj', 'rani', '2002-01-01', 'Male', 'jai@gmail.com', '8275155004', '9405833975', 'Mumbai', '2JI21CS100', 80, 75, 0, 0, 8, 8, 0, 0, 0, 0, 'Gold Medal in University', 'Full stack developer', 'Carrom, Chess, Badminton'),
('Tejas', 'arun', 'manisha', '2001-09-02', 'none', 'tejgurav123@gmail.com', '6363179019', '8275155003', 'Tudaye, Maharashtra', '2JI21CS400', 96, 95, 0, 0, 8, 9, 0, 0, 0, 0, '25kg Dumbell In Gymm', 'Web Development', 'Cricket, Volleyball'),
('Sainath', 'M', 'Belagavi', '2002-03-01', 'Male', 'belagavisainath1@gmail.com', '7411493711', '8105481571', 'Belgaum', '2JI21CS402', 75, 80, 0, 0, 8, 8, 0, 0, 0, 0, 'gold medal', 'singing', 'boxing'),
('Shahist', 'G', 'J', '2002-03-03', 'Male', 'S@mail.com', '9035192900', '9845175263', 'Angol', '2JI21CS404', 78, 80, 0, 0, 8, 8, 0, 0, 0, 0, 'Gold Medal in University', 'SInging', 'Reels making');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`usn`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
