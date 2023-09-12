-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 26, 2023 at 12:26 PM
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
-- Database: `shedless`
--

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
CREATE TABLE IF NOT EXISTS `staff` (
  `staffId` int NOT NULL AUTO_INCREMENT,
  `firstname` varchar(25) DEFAULT NULL,
  `lastname` varchar(25) DEFAULT NULL,
  `addr` varchar(20) DEFAULT NULL,
  `phoneno` varchar(12) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `region` varchar(15) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  PRIMARY KEY (`staffId`)
) ENGINE=InnoDB AUTO_INCREMENT=90 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staffId`, `firstname`, `lastname`, `addr`, `phoneno`, `email`, `gender`, `region`, `dob`) VALUES
(35, 'KAGIMU', 'FRANCIS', 'Kikoni', '0752222174', 'carlsimon@gmail.com', 'MALE', 'NAKAWA', '2002-10-16'),
(37, 'MUGABI', 'JOSEPH', 'KITEZI', '0701404698', 'mugabijoseph@gmail.com', 'MALE', 'KAWEMPE', '2001-01-11'),
(39, 'ALI', 'HUSSEIN', 'MUBENDE', '0701303687', 'alihussein21@gmail.com', 'MALE', 'MAKINDYE', '1997-07-25'),
(40, 'SADAM', 'ALIPA', 'KITGUM', '0701202298', 'sadamalipa@gmail.com', 'MALE', 'CENTRAL', '1995-02-18'),
(41, 'KIWEEWA', 'ABUBAKAR', 'LIRA', '0759940970', 'kiweewaabubakar@gmail.com', 'MALE', 'NAKAWA', '2000-03-03'),
(42, 'SEBAKIJJE', 'JOHN', 'MASAKA', '0752222170', 'sebakijejohn@gmail.com', 'MALE', 'MAKINDYE', '2004-12-29'),
(43, 'NAKIBOGO', 'MARIAM', 'KAMPALA', '0701404690', 'nmaraiam@gmail.com', 'FEMALE', 'NAKAWA', '2004-12-31'),
(44, 'MAGERO', 'JOSHUA', 'KALAGI', '0701404670', 'mjosh@gmail.com', 'MALE', 'NAKAWA', '2004-12-28'),
(45, 'KINTU', 'BATWA', 'KAMPALA', '0752222178', 'kbatwa@gmail.com', 'MALE', 'KAWEMPE', '2004-12-31'),
(46, 'SSUNA', 'HASSAN', 'MASAKA', '0708053640', 'shassan@gmail.com', 'MALE', 'MAKINDYE', '2004-12-29'),
(47, 'KAGIKO', 'SAMUEL', 'KITGUM', '0752222179', 'ksam@gmail.com', 'MALE', 'NAKAWA', '2004-12-30'),
(48, 'KIGONGO', 'AZIZ', 'KIKONI', '0778543970', 'kaziz@gmail.com', 'MALE', 'CENTRAL', '2004-12-27'),
(49, 'NAKATUDDE', 'RUTH', 'KAMPALA', '0778543972', 'nakiruth@gmail.com', 'MALE', 'CENTRAL', '2004-12-31'),
(50, 'KATUMBA', 'ADAM', 'KITEZI', '0708053649', 'katuadam@gmail.com', 'MALE', 'RUBAGA', '2004-12-30'),
(51, 'NAKALEMA', 'PEACE', 'MASAKA', '0708053645', 'npeace@gmail.com', 'MALE', 'MAKINDYE', '2004-10-07'),
(52, 'NANTUMBE', 'TERRY', 'KAMPALA', '0701303680', 'natumbe444@gmail.com', 'FEMALE', 'RUBAGA', '2004-11-30'),
(53, 'SEKI', 'JUMA', 'KITGUM', '0701303689', 'seki234@gmail.com', 'MALE', 'KAWEMPE', '2004-12-23'),
(54, 'MANSOOR', 'HEEDA', 'KIKONI', '0778543970', 'mansoor2212@gmail.com', 'MALE', 'NAKAWA', '2004-12-28'),
(55, 'NABUKENYA', 'REMA', 'MAKERERE', '0752222170', 'nabuke323@gmail.com', 'MALE', 'CENTRAL', '2004-12-23'),
(56, 'KIJJO', 'COSMAS', 'MASAKA', '0752222172', 'kijjocosmas@gmail.com', 'MALE', 'KAWEMPE', '2004-12-17'),
(57, 'NANA', 'ABANA', 'MASAKA', '0759940970', 'nana213@gmail.com', 'FEMALE', 'KAWEMPE', '2003-03-07'),
(58, 'BUKOMA', 'JOESEPH', 'KAMPALA', '0759940990', 'bjose21@gmail.com', 'MALE', 'CENTRAL', '2004-12-31'),
(59, 'MUGABI', 'FRANCIS', 'KAMPALA', '0778543979', 'mfrancis1@gmail.com', 'MALE', 'KAWEMPE', '2004-12-28'),
(60, 'DUNCANN', 'WAGWAN', 'MASAKA', '0752222178', 'duncannwagawan@gmail.com', 'MALE', 'CENTRAL', '2004-12-31'),
(61, 'NAKIBONEKA', 'SARAH', 'KAMPALA', '0752222167', 'nakibonekasarah21@gmail.com', 'MALE', 'KAWEMPE', '2004-12-31'),
(62, 'SILLAH', 'QUEEN', 'KITEZI', '0701404634', 'sillah323@gmail.com', 'FEMALE', 'NAKAWA', '2004-12-28'),
(63, 'GIVEN', 'RATIB', 'KITEZI', '0778543972', 'given143@gmail.com', 'MALE', 'CENTRAL', '2004-12-23'),
(64, 'NANTEGE', 'SUU', 'KITGUM', '0778543945', 'suu2334@gmail.com', 'MALE', 'RUBAGA', '2004-12-11'),
(65, 'BALIKU', 'JOHN', 'KIKONI', '0701404689', 'baliku2521@gmail.com', 'MALE', 'CENTRAL', '2004-11-20'),
(66, 'KOBU', 'COMFORT', 'MASAKA', '0778543990', 'kobusinguzi21@gmail.com', 'MALE', 'CENTRAL', '2004-12-23'),
(67, 'NAKIGIZO', 'SARAH', 'KITGUM', '0778543974', 'sarah221@gmail.com', 'FEMALE', 'NAKAWA', '1996-06-21'),
(68, 'DUNCANN', 'DEE', 'KAMPALA', '0752222145', 'dedee21@gmail.com', 'MALE', 'KAWEMPE', '2004-12-29'),
(69, 'KEMIRA', 'IRA', 'KITEZI', '0701404676', 'kemira2234@gmail.com', 'MALE', 'KAWEMPE', '2004-12-30'),
(70, 'JAU', 'KITTY', 'WAKISO', '0778543900', 'jaukitty1@gmail.com', 'MALE', 'CENTRAL', '2004-12-27'),
(71, 'NAMAYINJA', 'JAUHARA', 'MASAKA', '0759940909', 'namayinja324@gmail.com', 'FEMALE', 'KAWEMPE', '2004-12-29'),
(72, 'NAJJINGO', 'SERA', 'KAMPALA', '0752222109', 'najjingo24@gmail.com', 'FEMALE', 'CENTRAL', '2004-12-31'),
(73, 'NAKIBO', 'NEEKA', 'KAMPALA', '0752222189', 'nakibo221@gmail.com', 'FEMALE', 'MAKINDYE', '2004-12-30'),
(74, 'NALUKWATA', 'REHEMA', 'KAMPALA', '0772588222', 'bettynakabuye@gmail.com', 'FEMALE', 'KAWEMPE', '1970-08-30'),
(75, 'KIGONGO', 'VINCENT', 'MAKERERE', '0752222156', 'kigongo345@gmail.com', 'MALE', 'RUBAGA', '2004-12-30'),
(76, 'OLA', 'AMBU', 'KITGUM', '0778543909', 'ola143@gmail.com', 'MALE', 'RUBAGA', '2004-12-15'),
(77, 'BIRUNGI', 'HOPE', 'KAMPALA', '0759940945', 'hope345@gmail.com', 'FEMALE', 'RUBAGA', '2004-12-28'),
(78, 'ATIM', 'ASHLEY', 'KAMPALA', '0701404689', 'ashash@gmail.com', 'FEMALE', 'RUBAGA', '2004-12-30'),
(79, 'NANKUNDA', 'AGNES', 'KAMPALA', '0752222100', 'agnes143@gmail.com', 'FEMALE', 'RUBAGA', '2004-12-31'),
(80, 'NANKUNDA', 'AGNES', 'KAMPALA', '0752222100', 'agnes143@gmail.com', 'FEMALE', 'RUBAGA', '2004-12-31'),
(81, 'FETA', 'JOEL', 'KAMPALA', '0752222156', 'fjoel21@gmail.com', 'MALE', 'CENTRAL', '2004-12-30'),
(82, 'ALEX', 'ALEC', 'MASAKA', '0752222198', 'alex21@gmail.com', 'MALE', 'RUBAGA', '2004-12-02'),
(83, 'MAGEZI', 'ERU', 'KTINTALE', '0759940965', 'magezi@gmail.com', 'MALE', 'MAKINDYE', '1980-12-12'),
(84, 'BWITIRE', 'ALBERT', 'Makerere', '0756875234', 'balbert@gmail.com', 'MALE', 'MAKINDYE', '1985-05-23'),
(85, 'YANU', 'MEDHI', 'KITENDE', '0786554124', 'yanumedhi@gmail.com', 'MALE', 'MAKINDYE', '1997-03-04'),
(86, 'HOKOMORA', 'EDWARD', 'KOLOLO', '0789554234', 'hokomora@gmail.com', 'MALE', 'MAKINDYE', '1972-09-09'),
(87, 'MULONDO', 'EDWARD', 'KOLOLO', '0789554298', 'mulondo@gmail.com', 'MALE', 'NAKAWA', '1972-09-09'),
(88, 'TAYEBWA', 'JOHN', 'BWEBAJJA', '0786543217', 'tayebwa@gmail.com', 'MALE', 'NAKAWA', '1979-12-12'),
(89, 'NABAGABO', 'DOREEN', 'KITANTE', '0752222555', 'doreen21@gmail.com', 'FEMALE', 'MAKINDYE', '1956-01-06');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `firstName` varchar(50) DEFAULT NULL,
  `lastName` varchar(50) DEFAULT NULL,
  `userName` varchar(50) DEFAULT NULL,
  `contact` varchar(50) DEFAULT NULL,
  `meterNumber` varchar(12) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `village` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`meterNumber`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`firstName`, `lastName`, `userName`, `contact`, `meterNumber`, `password`, `village`, `email`) VALUES
('Duncan', 'Smith', 'Uncle D', '0752222174', '0293832', '12345', NULL, 'duncansmth143@gmail.com'),
('Carl', 'Simon', 'Carlos ', '0778543972', '04278925377', '12345', NULL, 'carlsimon@gmail.com'),
('Jojo', 'Charles', 'MugJoe', '0708053646', '55555', '6891', NULL, 'jojo@gmail.com'),
('nakiboneka', 'sarah', 'SARAH21', '0759940977', '9876', 'SARAH21', NULL, 'nakibonekasarah21@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
