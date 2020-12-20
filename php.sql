-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2019 at 07:52 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` varchar(1000) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `password` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`) VALUES
('158', 'Yashwant Kumar', 'Yashwant1234#');

-- --------------------------------------------------------

--
-- Table structure for table `attendence`
--

CREATE TABLE `attendence` (
  `id` varchar(1000) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `math` varchar(1000) NOT NULL,
  `physics` varchar(1000) NOT NULL,
  `chemistry` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendence`
--

INSERT INTO `attendence` (`id`, `name`, `math`, `physics`, `chemistry`) VALUES
('1571087018', 'Saswat Kumar', '25', '26', '29'),
('1541012575', 'Subham kumar', '45', '40', '50');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` varchar(1000) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `math` varchar(1000) NOT NULL,
  `physics` varchar(1000) NOT NULL,
  `chemistry` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `name`, `math`, `physics`, `chemistry`) VALUES
('1571087018', 'Saswat Kumar', '87', '66', '55');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` varchar(1000) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `password` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `password`) VALUES
('1571087016', 'Aman Gupta', 'Yashwant@123'),
('1571087018', 'Saswat Kumar', 'Yashwant@123'),
('1541012575', 'Subham kumar', 'Yashwant@123');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` varchar(1000) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `password` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `name`, `password`) VALUES
('1571087013', 'Yashwant Kumar', 'Yashwant@123'),
('1571087014', 'abc', 'Yashwant1234#');

-- --------------------------------------------------------

--
-- Table structure for table `totalclass`
--

CREATE TABLE `totalclass` (
  `id` varchar(100) NOT NULL,
  `math` varchar(1000) NOT NULL,
  `physics` varchar(1000) NOT NULL,
  `chemistry` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `totalclass`
--

INSERT INTO `totalclass` (`id`, `math`, `physics`, `chemistry`) VALUES
('1', '30', '30', '30');

-- --------------------------------------------------------

--
-- Table structure for table `totalmarks`
--

CREATE TABLE `totalmarks` (
  `id` varchar(1000) NOT NULL,
  `math` varchar(1000) NOT NULL,
  `physics` varchar(1000) NOT NULL,
  `chemistry` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `totalmarks`
--

INSERT INTO `totalmarks` (`id`, `math`, `physics`, `chemistry`) VALUES
('1', '100', '80', '80');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
