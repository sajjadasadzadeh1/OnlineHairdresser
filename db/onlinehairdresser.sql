-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2021 at 07:56 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinehairdresser`
--

-- --------------------------------------------------------

--
-- Table structure for table `hairdresser`
--

CREATE TABLE `hairdresser` (
  `Hairdresser_id` int(4) NOT NULL,
  `HairdresserFullName` varchar(150) COLLATE utf8_persian_ci NOT NULL,
  `proficiency_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `hairdresser`
--

INSERT INTO `hairdresser` (`Hairdresser_id`, `HairdresserFullName`, `proficiency_id`) VALUES
(3, 'وحیده رضایی', 1),
(4, 'زهره صمدی', 3),
(5, 'زهرا صابری', 4);

-- --------------------------------------------------------

--
-- Table structure for table `proficiency`
--

CREATE TABLE `proficiency` (
  `proficiency_id` int(4) NOT NULL,
  `proficiencyTitle` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `Cost` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `proficiency`
--

INSERT INTO `proficiency` (`proficiency_id`, `proficiencyTitle`, `Cost`) VALUES
(1, 'اصلاح موی سر ', 90000),
(3, 'آرایش صورت ', 120000),
(4, 'رنگ کردن مو', 45000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment`
--

CREATE TABLE `tbl_comment` (
  `comment_id` int(4) NOT NULL,
  `flname` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `CommentTitle` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `CommentDescription` text COLLATE utf8_persian_ci NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `tbl_comment`
--

INSERT INTO `tbl_comment` (`comment_id`, `flname`, `email`, `CommentTitle`, `CommentDescription`, `status`) VALUES
(1, 'زهرا محمدی', 'zahra123@gmail.com', 'تشکر از آرایشگر', 'ممنون  از بابت خدماتتون. کارتون عالیه', 1),
(2, 'تست', 'test@gmail.com', 'تست ', 'این نوشته تست می باشد', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rezerveinfo`
--

CREATE TABLE `tbl_rezerveinfo` (
  `Reserveinfo_id` int(4) NOT NULL,
  `ReserveDate` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `ReserveTime` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `Hairdresser_id` int(4) NOT NULL,
  `rezerved` int(1) NOT NULL,
  `CustomerFullName` varchar(150) COLLATE utf8_persian_ci NOT NULL,
  `CustomerMobile` varchar(30) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `tbl_rezerveinfo`
--

INSERT INTO `tbl_rezerveinfo` (`Reserveinfo_id`, `ReserveDate`, `ReserveTime`, `Hairdresser_id`, `rezerved`, `CustomerFullName`, `CustomerMobile`) VALUES
(6, '1400/03/13', '12:30', 4, 1, 'راضیه حمیدی', '09142356789'),
(7, '1400/04/26', '16:30', 3, 1, 'حمیده محسنی', '09165438976'),
(8, '1400/04/30', '11:51', 5, 1, 'الهه میرزاده', '09124567895'),
(9, '1400/04/27', '18:35', 4, 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `User_id` int(4) NOT NULL,
  `Username` varchar(40) COLLATE utf8_persian_ci NOT NULL,
  `pass` varchar(30) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`User_id`, `Username`, `pass`) VALUES
(1, 'maryam', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hairdresser`
--
ALTER TABLE `hairdresser`
  ADD PRIMARY KEY (`Hairdresser_id`);

--
-- Indexes for table `proficiency`
--
ALTER TABLE `proficiency`
  ADD PRIMARY KEY (`proficiency_id`);

--
-- Indexes for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `tbl_rezerveinfo`
--
ALTER TABLE `tbl_rezerveinfo`
  ADD PRIMARY KEY (`Reserveinfo_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`User_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hairdresser`
--
ALTER TABLE `hairdresser`
  MODIFY `Hairdresser_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `proficiency`
--
ALTER TABLE `proficiency`
  MODIFY `proficiency_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `comment_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_rezerveinfo`
--
ALTER TABLE `tbl_rezerveinfo`
  MODIFY `Reserveinfo_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `User_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
