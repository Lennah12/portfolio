-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Mar 28, 2024 at 09:27 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `patient database`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin login`
--

CREATE TABLE `admin login` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` varchar(255) NOT NULL,
  `Mothername` varchar(255) NOT NULL,
  `symptoms` varchar(255) NOT NULL,
  `diagnosis` varchar(255) NOT NULL,
  `prescription` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `Mothername`, `symptoms`, `diagnosis`, `prescription`) VALUES
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', 'lenn', 't', 'h', 'y'),
('', 'lenn', 't', 'h', 'y'),
('', 'lenn', 't', 'h', 'y'),
('', 'lenn', 't', 'h', 'y'),
('', 'lenn', 't', 'h', 'y');

-- --------------------------------------------------------

--
-- Table structure for table `mother`
--

CREATE TABLE `mother` (
  `Motherid` int(20) NOT NULL,
  `Mothername` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patient details`
--

CREATE TABLE `patient details` (
  `id` int(20) NOT NULL,
  `Mothername` varchar(255) NOT NULL,
  `phonenumber` bigint(10) NOT NULL,
  `symptoms` varchar(255) NOT NULL,
  ` pregnancynumber` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(255) NOT NULL,
  `Firstname` varchar(255) NOT NULL,
  `Lastname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `Phonenumber` bigint(10) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `password` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `Firstname`, `Lastname`, `username`, `Phonenumber`, `Email`, `password`) VALUES
(0, 'lennah', 'mwelu', 'lennah', 703456773, 'mwelu5@gmail.com', 1234),
(0, 'lennah', 'mwelu', 'lennah', 703456773, 'mwelu5@gmail.com', 1234),
(0, 'lennah', 'mwelu', 'lennah', 703456773, 'mwelu5@gmail.com', 1234),
(0, 'lennah', 'mwelu', 'lennah', 703456773, 'mwelu5@gmail.com', 1234),
(0, '1234', '5678', 'lennah1', 1, 'jaygmail.com', 1234),
(0, 'lennah', 'mwelu', 'lennah1', 703456777, 'mwelu5@gmail.com', 1234),
(0, 'lennah', 'mwelu', 'lennah1', 0, 'mwelu5@gmail.com', 1234),
(0, 'lennah', 'mwelu', 'lennah1', 0, 'mwelu5@gmail.com', 1234),
(0, 'lennah', 'mwelu', 'lennah1', 0, 'mwelu5@gmail.com', 1234),
(0, 'lennah', 'mwelu', 'lennah1', 0, 'mwelu5@gmail.com', 1234),
(0, 'lennah', 'mwelu', 'lennah1', 0, 'mwelu5@gmail.com', 1234),
(0, 'lennah', 'mwelu', 'lennah1', 0, 'mwelu5@gmail.com', 1234),
(0, 'lennah', 'mwelu', 'lennah1', 703456773, 'mwelu5@gmail.com', 1234),
(0, 'lennah', 'mwelu', 'lennah1', 703456773, 'mwelu5@gmail.com', 1234),
(0, 'lennah', 'mwelu', 'lennah1', 703456773, 'mwelu5@gmail.com', 1234),
(0, 'lennah', 'mwel9', 'lennah1', 703456773, 'mwelu5@gmail.com', 1234),
(0, 'lennah', 'mwelu', 'lennah1', 703456773, 'mwelu5@gmail.com', 1234),
(0, 'lennah', 'mwelu', 'lennah1', 703456773, 'mwelu5@gmail.com', 1234),
(0, 'lennah', 'mwelu', 'lennah1', 703456773, 'mwelu5@gmail.com', 1234),
(0, 'lennah', 'mwelu', 'lennah1', 703456773, 'mwelu5@gmail.com', 1234),
(0, 'lennah', 'mwelu', 'lennah1', 703456773, 'mwelu5@gmail.com', 1234),
(0, 'lennah', 'mwelu', 'lennah1', 703456773, 'mwelu5@gmail.com', 1234),
(0, 'lennah', 'mwelu', 'lennah1', 703456773, 'mwelu5@gmail.com', 1234),
(0, 'lennah', 'mwelu', 'lennah1', 703456773, 'mwelu5@gmail.com', 1234),
(0, 'lennah', 'mwelu', 'lennah1', 703456773, 'mwelu5@gmail.com', 1234),
(0, 'lennah', 'mwelu', 'lennah1', 703456773, 'mwelu5@gmail.com', 1234),
(0, '', '', 'lennah1', 2147483647, '@gmail.com', 1234),
(0, 'lennah', 'mwelu', 'lennah1', 703456773, 'mwelu5@gmail.com', 1234),
(0, '', '', 'lennah1', 0, '@gmail.com', 1234),
(0, 'lenn2', 'Lastname', 'lennah1', 0, '@gmail.com', 1234),
(0, 'firstname', 'Lastname', 'lennah1', 703456773, '@gmail.com', 1234),
(0, 'mwe2', 'mwelu', 'lennah1', 703456773, 'mwelu5@gmail.com', 1234);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
