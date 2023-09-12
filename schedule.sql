-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 26, 2023 at 12:25 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `schedule`
--

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

DROP TABLE IF EXISTS `location`;
CREATE TABLE IF NOT EXISTS `location` (
  `locationId` int NOT NULL AUTO_INCREMENT,
  `division` varchar(15) DEFAULT NULL,
  `village` varchar(15) DEFAULT NULL,
  `priority` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`locationId`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`locationId`, `division`, `village`, `priority`) VALUES
(1, 'RUBAGA', 'Lungujja', 'level2'),
(2, 'RUBAGA', 'Lubia', 'level2'),
(3, 'RUBAGA', 'Lungujja', 'level2'),
(4, 'RUBAGA', 'Lungujja', 'level2'),
(5, 'NAKAWA', 'Butabika', 'level1'),
(6, 'NAKAWA', 'Mbuya II', 'level2'),
(7, 'RUBAGA', 'Lubia', 'level1'),
(8, 'NAKAWA', 'Luzira', 'level2'),
(9, 'NAKAWA', 'I.T.E.K.', 'level3'),
(10, 'CENTRAL', 'Kagugube', 'level2'),
(11, 'RUBAGA', 'Kabowa', 'level1'),
(12, 'CENTRAL', 'Industrial Area', 'level2'),
(13, 'NAKAWA', 'Banda', 'level2'),
(14, 'NAKAWA', 'Kyambogo', 'level3'),
(15, 'KAWEMPE', 'Makerere Univer', 'level2'),
(16, 'KAWEMPE', 'Kazo Ward', 'level1'),
(17, 'KAWEMPE', 'Mpererwe', 'level3'),
(18, 'CENTRAL', 'Bukasa', 'level3'),
(19, 'CENTRAL', 'Industrial Area', 'level1'),
(20, 'CENTRAL', 'Kagugube', 'level2'),
(21, 'CENTRAL', 'Kisenyi I', 'level3'),
(22, 'CENTRAL', 'Kisenyi II', 'level2'),
(23, 'CENTRAL', 'Nakivubo', 'level2'),
(24, 'CENTRAL', 'Mengo', 'level1'),
(25, 'CENTRAL', 'Kololo', 'level1'),
(26, 'CENTRAL', 'Nakasero', 'level1'),
(27, 'CENTRAL', 'Ssese', 'level3'),
(28, 'NAKAWA', 'Banda', 'level3'),
(29, 'NAKAWA', 'Luzira', 'level2'),
(30, 'NAKAWA', 'Mbuya I', 'level2'),
(31, 'NAKAWA', 'Nabisunsa', 'level1'),
(32, 'NAKAWA', 'Mutungo', 'level1'),
(33, 'NAKAWA', 'Kyanja', 'level2'),
(34, 'NAKAWA', 'Ntinda', 'level2'),
(35, 'NAKAWA', 'Nakawa Institut', 'level1'),
(36, 'KAWEMPE', 'Kikaya', 'level3'),
(37, 'KAWEMPE', 'Makerere I', 'level2'),
(38, 'KAWEMPE', 'Mulago III', 'level1'),
(39, 'KAWEMPE', 'Makerere Univer', 'level1'),
(40, 'KAWEMPE', 'Kanyanya', 'level3'),
(41, 'RUBAGA', 'Lungujja', 'level2'),
(42, 'NAKAWA', 'Mbuya I', 'level2');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

DROP TABLE IF EXISTS `schedule`;
CREATE TABLE IF NOT EXISTS `schedule` (
  `scheduleId` int NOT NULL AUTO_INCREMENT,
  `week` varchar(30) DEFAULT NULL,
  `village` varchar(15) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `starttime` varchar(30) DEFAULT NULL,
  `endtime` varchar(30) DEFAULT NULL,
  `reason` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`scheduleId`)
) ENGINE=InnoDB AUTO_INCREMENT=78 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`scheduleId`, `week`, `village`, `date`, `starttime`, `endtime`, `reason`) VALUES
(42, 'week2', 'Banda', '2023-06-27', '2023-07-01T10:20', '2023-07-06T10:20', 'maintenance'),
(43, 'week2', 'Butabika', '2023-07-29', '2023-07-29T10:35', '2023-07-30T10:35', 'heavytraffic'),
(44, 'week1', 'Kazo Ward', '2023-07-05', '2023-07-29T16:38', '2023-07-30T17:40', 'heavytraffic'),
(45, 'week3', 'Mpererwe', '2023-07-28', '2023-07-28T13:39', '2023-07-30T13:40', 'heavytraffic'),
(46, 'week3', 'Kagugube', '2023-07-07', '2023-06-27T13:53', '2023-07-26T13:54', 'maintenance'),
(47, 'week2', 'Bukasa', '2023-07-11', '2023-07-11T13:55', '2023-07-11T16:58', 'maintenance'),
(48, 'week3', 'Industrial Area', '2023-07-05', '2023-07-05T13:55', '2023-07-05T18:00', 'maintenance'),
(49, 'week3', 'Kagugube', '2023-07-10', '2023-07-10T15:58', '2023-07-10T19:02', 'maintenance'),
(50, 'week3', 'Kisenyi I', '2023-07-28', '2023-07-28T13:56', '2023-07-28T18:01', 'maintenance'),
(51, 'week3', 'Kisenyi II', '2023-07-22', '2023-07-22T13:56', '2023-07-22T18:00', 'maintenance'),
(52, 'week3', 'Nakivubo', '2023-07-16', '2023-07-16T13:57', '2023-07-16T18:01', 'maintenance'),
(53, 'week4', 'Mengo', '2023-07-13', '2023-07-13T15:00', '2023-07-13T17:00', 'maintenance'),
(54, 'week2', 'Nakasero', '2023-07-13', '2023-07-13T13:58', '2023-07-13T17:04', 'maintenance'),
(55, 'week2', 'Ssese', '2023-07-05', '2023-07-05T10:00', '2023-07-05T18:00', 'maintenance'),
(56, 'week3', 'Kololo', '2023-07-14', '2023-07-14T13:59', '2023-07-14T17:04', 'maintenance'),
(57, 'week2', 'Butabika', '2023-07-05', '2023-07-05T15:00', '2023-07-05T18:00', 'maintenance'),
(58, 'week3', 'Ntinda', '2023-07-06', '2023-07-06T14:03', '2023-07-06T20:08', 'maintenance'),
(59, 'week3', 'I.T.E.K.', '2023-07-27', '2023-07-27T14:04', '2023-07-27T20:10', 'maintenance'),
(60, 'week4', 'Kyambogo', '2023-07-04', '2023-07-04T14:04', '2023-07-04T17:10', 'maintenance'),
(62, 'week3', 'Luzira', '2023-07-18', '2023-07-18T14:04', '2023-07-18T18:08', 'maintenance'),
(63, 'week1', 'Kyanja', '2023-07-01', '2023-07-01T14:05', '2023-07-01T20:10', 'maintenance'),
(64, 'week4', 'Nakawa Institut', '2023-07-31', '2023-07-31T14:05', '2023-07-31T20:10', 'maintenance'),
(65, 'week2', 'Nabisunsa', '2023-07-03', '2023-07-03T14:06', '2023-07-03T19:11', 'maintenance'),
(66, 'week3', 'Mutungo', '2023-07-05', '2023-07-05T14:08', '2023-07-05T19:13', 'maintenance'),
(67, 'week3', 'Mbuya I', '2023-07-12', '2023-07-12T10:04', '2023-07-12T16:10', 'heavytraffic'),
(68, 'week2', 'Makerere Univer', '2023-07-12', '2023-07-12T14:12', '2023-07-12T16:14', 'heavytraffic'),
(69, 'week3', 'Kazo Ward', '2023-07-12', '2023-07-12T14:12', '2023-07-12T17:15', 'heavytraffic'),
(70, 'week2', 'Kikaya', '2023-07-11', '2023-07-11T10:02', '2023-07-11T18:18', 'heavytraffic'),
(71, 'week2', 'Makerere I', '2023-07-04', '2023-07-04T14:13', '2023-07-04T18:19', 'heavytraffic'),
(72, 'week4', 'Mulago III', '2023-07-05', '2023-07-05T14:13', '2023-07-05T17:17', 'heavytraffic'),
(73, 'week3', 'Kanyanya', '2023-07-27', '2023-07-27T10:04', '2023-07-27T19:15', 'heavytraffic'),
(74, 'week3', 'Kazo Ward', '2023-07-13', '2023-07-13T14:14', '2023-07-13T19:19', 'heavytraffic'),
(75, 'week3', 'Banda', '2023-07-05', '2023-07-05T14:42', '2023-07-05T18:46', 'heavytraffic'),
(76, 'week3', 'Banda', '2023-07-07', '2023-07-07T14:43', '2023-07-07T18:43', 'heavytraffic'),
(77, 'week2', 'Butabika', '2023-07-05', '2023-07-05T14:43', '2023-07-05T18:43', 'heavytraffic');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
