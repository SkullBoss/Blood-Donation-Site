-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2018 at 03:19 PM
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
-- Table structure for table `requestdb`
--

CREATE TABLE `requestdb` (
  `Name` varchar(50) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Age` int(11) NOT NULL,
  `Mobile No` int(11) NOT NULL,
  `Blood Group` varchar(2) NOT NULL,
  `E-Mail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requestdb`
--

INSERT INTO `requestdb` (`Name`, `Gender`, `Age`, `Mobile No`, `Blood Group`, `E-Mail`) VALUES
('qweew', 'male', 12, 542331, 'O+', 'qweee@gm.com'),
('fffff', 'male', 56, 777777, 'A+', 'ttt@gm.com'),
('Ravi', 'male', 19, 98662722, 'A-', 'ravi@gm.com'),
('Smith', 'male', 31, 98976562, 'O-', 'smith@gail.com'),
('Smith', 'male', 31, 98976562, 'O-', 'smith@gail.com'),
('keeene', 'male', 19, 668020262, 'O-', 'keene@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
