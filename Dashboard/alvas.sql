-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2021 at 05:10 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alvas`
--

-- --------------------------------------------------------

--
-- Table structure for table `setiamarks`
--

CREATE TABLE `setiamarks` (
  `name` varchar(50) NOT NULL,
  `sub_id` varchar(10) NOT NULL,
  `1a` varchar(10) NOT NULL,
  `1b` varchar(10) NOT NULL,
  `1c` varchar(10) NOT NULL,
  `2a` varchar(10) NOT NULL,
  `2b` varchar(10) NOT NULL,
  `2c` varchar(10) NOT NULL,
  `3a` varchar(10) NOT NULL,
  `3b` varchar(10) NOT NULL,
  `3c` varchar(10) NOT NULL,
  `4a` varchar(10) NOT NULL,
  `4b` varchar(10) NOT NULL,
  `4c` varchar(10) NOT NULL,
  `total` int(10) NOT NULL,
  `USN` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `setiamarks`
--

INSERT INTO `setiamarks` (`name`, `sub_id`, `1a`, `1b`, `1c`, `2a`, `2b`, `2c`, `3a`, `3b`, `3c`, `4a`, `4b`, `4c`, `total`, `USN`) VALUES
('rohan', '17CS71', 'NA', '7', 'NA', '1', 'NA', 'NA', '5', '4', 'NA', '3', '3', 'NA', 15, '4AL17CS077');

-- --------------------------------------------------------

--
-- Table structure for table `setiamaxmarks`
--

CREATE TABLE `setiamaxmarks` (
  `sub_id` varchar(10) NOT NULL,
  `1a` varchar(10) NOT NULL,
  `1b` varchar(10) NOT NULL,
  `1c` varchar(10) NOT NULL,
  `1al` varchar(10) NOT NULL,
  `1bl` varchar(10) NOT NULL,
  `1cl` varchar(10) NOT NULL,
  `1ac` varchar(10) NOT NULL,
  `1bc` varchar(10) NOT NULL,
  `1cc` varchar(10) NOT NULL,
  `2a` varchar(10) NOT NULL,
  `2b` varchar(10) NOT NULL,
  `2c` varchar(10) NOT NULL,
  `2al` varchar(10) NOT NULL,
  `2bl` varchar(10) NOT NULL,
  `2cl` varchar(10) NOT NULL,
  `2ac` varchar(10) NOT NULL,
  `2bc` varchar(10) NOT NULL,
  `2cc` varchar(10) NOT NULL,
  `3a` varchar(10) NOT NULL,
  `3b` varchar(10) NOT NULL,
  `3c` varchar(10) NOT NULL,
  `3al` varchar(10) NOT NULL,
  `3bl` varchar(10) NOT NULL,
  `3cl` varchar(10) NOT NULL,
  `3ac` varchar(10) NOT NULL,
  `3bc` varchar(10) NOT NULL,
  `3cc` varchar(10) NOT NULL,
  `4a` varchar(10) NOT NULL,
  `4b` varchar(10) NOT NULL,
  `4c` varchar(10) NOT NULL,
  `4al` varchar(10) NOT NULL,
  `4bl` varchar(10) NOT NULL,
  `4cl` varchar(10) NOT NULL,
  `4ac` varchar(10) NOT NULL,
  `4bc` varchar(10) NOT NULL,
  `4cc` varchar(10) NOT NULL,
  `total` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `setiamaxmarks`
--

INSERT INTO `setiamaxmarks` (`sub_id`, `1a`, `1b`, `1c`, `1al`, `1bl`, `1cl`, `1ac`, `1bc`, `1cc`, `2a`, `2b`, `2c`, `2al`, `2bl`, `2cl`, `2ac`, `2bc`, `2cc`, `3a`, `3b`, `3c`, `3al`, `3bl`, `3cl`, `3ac`, `3bc`, `3cc`, `4a`, `4b`, `4c`, `4al`, `4bl`, `4cl`, `4ac`, `4bc`, `4cc`, `total`) VALUES
('17CS71', '8', '7', 'NA', '1', '1', 'NA', '1', '1', 'NA', '8', '7', 'NA', '3', '3', 'NA', '1', '3', 'NA', '8', '7', 'NA', '2', '2', 'NA', '2', '2', 'NA', '8', '7', 'NA', '1', '3', 'NA', '2', '4', 'NA', 30);

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `name` varchar(20) NOT NULL,
  `CA` int(10) DEFAULT 0,
  `AP` int(10) DEFAULT 0,
  `05_02` int(10) DEFAULT 1,
  `06_02` int(10) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`name`, `CA`, `AP`, `05_02`, `06_02`) VALUES
('NAME', 2, 100, 1, 1),
('rohan', 2, 100, 1, 1),
('rachana', 2, 100, 1, 1),
('spoorti', 2, 100, 1, 1),
('atish', 2, 100, 1, 1),
('NOSP', 2, 100, 1, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
