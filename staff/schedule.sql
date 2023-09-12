-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 25, 2023 at 06:09 PM
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
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `scheduleId` int NOT NULL,
  `week` varchar(30) DEFAULT NULL,
  `village` varchar(15) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `starttime` varchar(30) DEFAULT NULL,
  `endtime` varchar(30) DEFAULT NULL,
  `reason` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`scheduleId`, `week`, `village`, `date`, `starttime`, `endtime`, `reason`) VALUES
(1, '2023-07-25 15:59:42.989 Week 0', 'village', '2023-07-06', '2023-07-11T15:59', '2023-07-25T17:01', 'Maintenance'),
(2, '2023-07-25 16:06:34.607 Week 0', 'village', '2023-06-30', '2023-07-12T05:07', '2023-07-25T18:08', 'Maintenance'),
(3, '2023-07-25 16:29:22.616 Week 0', 'opt a', '2023-06-30', '2023-07-12T05:07', '2023-07-25T18:08', 'Maintenance'),
(4, '2023-07-25 16:30:11.808 Week 0', 'opt b', '2023-07-14', '2023-07-19T05:30', '2023-07-20T16:29', 'Maintenance'),
(5, '2023-07-25 16:30:22.094 Week 0', 'opt b', '2023-07-14', '2023-07-19T05:30', '2023-07-20T16:29', 'Maintenance'),
(6, '2023-07-25 16:33:54.481 Week 0', 'opt b', '2023-07-14', '2023-07-19T05:30', '2023-07-20T16:29', 'Maintenance'),
(7, '2023-07-25 16:34:53.259 Week 0', 'opt a', '2023-07-14', '2023-07-05T05:36', '2023-07-13T19:37', 'Heavy traffic'),
(8, '2023-07-25 16:35:21.688 Week 0', 'opt a', '2023-07-14', '2023-07-05T05:36', '2023-07-13T19:37', 'Heavy traffic'),
(9, '2023-07-25 16:40:18.374 Week 0', 'opt a', '2023-07-14', '2023-07-05T05:36', '2023-07-13T19:37', 'Heavy traffic'),
(10, '2023-07-25 16:40:55.147 Week 0', 'opt a', '2023-07-06', '2023-07-28T16:40', '2023-07-29T16:40', 'Chooose a reason'),
(11, '2023-07-25 16:43:13.992 Week 0', 'opt b', '2023-07-14', '2023-07-13T16:43', '2023-07-14T16:43', 'Chooose a reason'),
(12, '2023-07-25 16:45:32.878 Week 0', 'opt a', '2023-07-06', '2023-07-28T16:40', '2023-07-29T16:40', 'Chooose a reason'),
(13, '2023-07-25 16:45:36.961 Week 0', 'opt a', '2023-07-06', '2023-07-28T16:40', '2023-07-29T16:40', 'Chooose a reason'),
(14, '2023-07-25 17:03:15.028 Week 0', 'village', '2023-07-05', '2023-07-11T17:01', '2023-07-14T07:03', 'Maintenance'),
(15, '2023-07-25 17:04:53.114 Week 0', 'village', '2023-07-11', '2023-07-04T07:06', '2023-07-06T07:06', 'Maintenance'),
(16, '', 'village', '2023-07-11', '2023-07-04T07:06', '2023-07-06T07:06', 'Maintenance'),
(17, '', 'village', '2023-07-11', '2023-07-04T07:06', '2023-07-06T07:06', 'Maintenance'),
(18, '', 'village', '2023-07-11', '2023-07-04T07:06', '2023-07-06T07:06', 'Maintenance'),
(19, '', 'village', '2023-07-11', '2023-07-04T07:06', '2023-07-06T07:06', 'Maintenance'),
(20, 'week3', 'village', '2023-07-05', '2023-07-12T19:36', '2023-07-13T08:37', 'heavytraffic');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`scheduleId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `scheduleId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
