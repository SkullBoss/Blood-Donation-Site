-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2018 at 03:06 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blooddonation`
--

-- --------------------------------------------------------

--
-- Table structure for table `donordb`
--

CREATE TABLE `donordb` (
  `Name` varchar(50) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Age` int(2) NOT NULL,
  `Mobile` int(10) NOT NULL,
  `Blood Group` varchar(2) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donordb`
--

INSERT INTO `donordb` (`Name`, `Gender`, `Age`, `Mobile`, `Blood Group`, `Email`, `Password`) VALUES
('Guru', 'female', 29, 99897642, 'B-', 'guru@gmail.com', 'asdff'),
('Jam', 'male', 32, 936729292, 'B+', 'jam@gmail.com', 'shsfq'),
('samess', 'male', 11, 9863455, 'A+', 'sam@gm.com', '1233'),
('sita', 'female', 11, 98722, 'B-', 'siat1@gmail.com', '123'),
('sadsd', 'female', 22, 332123, 'A+', 'siat@gm.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donordb`
--
ALTER TABLE `donordb`
  ADD UNIQUE KEY `Email` (`Email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
