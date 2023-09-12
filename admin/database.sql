-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 24, 2023 at 01:08 PM
-- Server version: 8.0.33-0ubuntu0.22.04.2
-- PHP Version: 8.1.2-1ubuntu2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staffId` int NOT NULL,
  `firstname` varchar(25) DEFAULT NULL,
  `lastname` varchar(25) DEFAULT NULL,
  `addr` varchar(20) DEFAULT NULL,
  `phoneno` varchar(12) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `region` varchar(15) DEFAULT NULL,
  `dob` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staffId`, `firstname`, `lastname`, `addr`, `phoneno`, `email`, `gender`, `region`, `dob`) VALUES
(2, 'NAKINTU', 'HELLEN', 'MAKINDYE', '209876', 'nakintu@gmail.com', 'FEMALE', 'kikoni', '2023-07-04'),
(3, 'SSEBAKIDDE', 'NICO', 'KOLOLO', '0701768987', 'SSEBA@gmail.com', 'MALE', 'MAKERERE', '2023-07-20'),
(4, 'NAKANJAKO', 'TEMS', 'RUSSIA', '0789765430', 'ssuunafran@gmail.com', 'FEMALE', 'nakulabye', '2023-07-25'),
(6, 'ASHEME', 'LISA', 'FORTPORTAL', '209876', 'ssuunafran@gmail.com', 'FEMALE', 'kikoni', '2023-07-05'),
(7, 'SSUUNA', 'FRANCIS', 'MAKINDYE', '0789765430', 'ssuunafran@gmail.com', 'MALE', 'kikoni', '2023-06-27'),
(10, 'DEO', 'FRANCIS', 'MAKINDYE', '209876', 'ssuunafran@gmail.com', 'FEMALE', 'kikoni', '2023-07-25'),
(11, 'SSUUNA', 'FRANCIS', 'FORTPORTAL', '0789765430', 'ssuunafran@gmail.com', 'MALE', 'makindye', '2023-07-18'),
(12, 'yy', 'FRANCIS', 'FORTPORTAL', '0789765430', 'ssuunafran@gmail.com', 'MALE', 'kikoni', '2023-07-18'),
(13, 'mirembe', 'FRANCIS', 'FORTPORTAL', '0789765430', 'ssuunafran@gmail.com', 'MALE', 'rubaga', '2023-07-19'),
(16, 'kintu', 'FRANCIS', 'MAKINDYE', '0789765430', 'ssuunafran@gmail.com', 'MALE', 'makindye', '2023-07-25'),
(17, 'SSUUNA', 'FRANCIS', 'MAKINDYE', '0789765430', 'ssuunafran@gmail.com', 'MALE', 'RUBAGA', '2023-07-19'),
(18, 'SSUUNAm', 'FRANCIS', 'MAKINDYE', '0789765430', 'ssuunafran@gmail.com', 'MALE', 'NAKULABYE', '2023-07-26'),
(19, 'SSUUNA', 'FRANCIS', 'MAKINDYE', '0789765430', 'ssuunafran@gmail.com', 'MALE', 'MAKINDYE', '2023-07-26'),
(20, 'SSUUNA', 'FRANCIS', 'MAKINDYE', '0789765430', 'ssuunafran@gmail.com', 'MALE', 'MAKINDYE', '2023-07-26'),
(22, 'SSUUNA', 'FRANCIS', 'MAKINDYE', '0789765430', 'ssuunafran@gmail.com', 'MALE', 'RUBAGA', '2023-07-26'),
(23, 'SSUUNA', 'FRANCIS', 'MAKINDYE', '0789765430', 'ssuunafran@gmail.com', 'MALE', 'KIKONI', '2023-07-26'),
(24, 'kiu', 'FRANCIS', 'MAKINDYE', '0789765430', 'ssuunafran@gmail.com', 'FEMALE', 'RUBAGA', '2023-08-30'),
(25, 'NAKATO', 'FLORA', 'USA', '070380855', 'ddjdjnd@gmail.com', 'FEMALE', 'MAKINDYE', '2023-07-18'),
(26, 'SSUUNA', 'FRANCIS', 'FORTPORTAL', '0789765430', 'ssuunafran@gmail.com', 'MALE', 'MAKINDYE', '2023-07-24'),
(29, 'SSUUNA', 'FRANCIS', 'kiruhura', '0789765430', 'ssuunafran@gmail.com', 'MALE', 'KIKONI', '2023-07-10'),
(31, 'SSUUNA', 'FRANCIS', 'kiruhura', '0789765430', 'ssuunafran@gmail.com', 'MALE', 'MAKERERE', '2023-07-18'),
(32, 'SSUUNA', 'FRANCIS', 'FORTPORTAL', '0789765430', 'ssuunafran@gmail.com', 'MALE', 'RUBAGA', '2023-06-28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staffId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staffId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

