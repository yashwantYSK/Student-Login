-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 20, 2020 at 04:27 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
('158', 'Yashwant Kumar', '1234');

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
('157', 'Saurav Kumar', '52', '28', '50');

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
('157', 'Saurav Kumar', '79', '82', '82');

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
('157', 'Saurav Kumar', '1234');

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
('15', 'JVS', '1234');

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
('1', '60', '30', '50');

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
('1', '81', '90', '90');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
