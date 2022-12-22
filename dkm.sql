-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2021 at 10:41 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dkm`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `App_ID` int(11) NOT NULL,
  `App_Name` varchar(50) NOT NULL,
  `App_Law_ID` int(11) NOT NULL,
  `App_Date` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`App_ID`, `App_Name`, `App_Law_ID`, `App_Date`, `status`) VALUES
(1, 'Vishal', 1, '2022-07-26 12:25:00', 0),
(2, 'Hussian', 2, '2019-07-16 12:25:00', 2),
(3, 'Testing12', 2, '2021-07-30 10:23:35', 1);

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `Book_ID` int(11) NOT NULL,
  `Law_ID` int(11) NOT NULL,
  `User_ID` int(11) NOT NULL,
  `requirements` text NOT NULL,
  `Book_Date` timestamp NULL DEFAULT NULL,
  `Book_Status` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`Book_ID`, `Law_ID`, `User_ID`, `requirements`, `Book_Date`, `Book_Status`, `created_at`) VALUES
(3, 7, 22, 'wqe', '2021-08-31 19:37:00', 2, '2021-08-02 19:38:45'),
(4, 1, 22, 'qweqw', '2021-08-02 20:02:00', 1, '2021-08-02 20:02:20');

-- --------------------------------------------------------

--
-- Table structure for table `help`
--

CREATE TABLE `help` (
  `Help_ID` int(11) NOT NULL,
  `Help_Name` varchar(50) NOT NULL,
  `Help_Email` varchar(50) NOT NULL,
  `Help_Subject` varchar(50) NOT NULL,
  `Help_Message` varchar(100) NOT NULL,
  `Help_Status` tinyint(5) NOT NULL DEFAULT 0 COMMENT '0 means Pending 1 Means Working on it 2 Means Done'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `help`
--

INSERT INTO `help` (`Help_ID`, `Help_Name`, `Help_Email`, `Help_Subject`, `Help_Message`, `Help_Status`) VALUES
(1, 'Test', 'setay58230@obxstorm.com', 'test', 'testtg gfb fgtbrtfbrdb rfbsrttbstgbrrtbrttr', 0),
(2, 'Test', 'setay58230@obxstorm.com', 'test', 'testtg gfb fgtbrtfbrdb rfbsrttbstgbrrtbrttr', 0),
(3, 'Tesdt', 'dsetay58230@obxstorm.com', 'testd', 'testtg gfb fgtbrtecxfbrdb rfbsrttbstgbrrtbrttr', 0),
(4, 'Tesdt', 'ddsetay58230@obxstorm.com', 'testdcedqec', 'testtg gfb dwc ecefgtbrtecxfbrdb rfbsrttbstgbrrtbrttr', 0),
(5, 'Tesdt', 'ddsetay58230@obxstorm.com', 'testdcedqec', 'testtg gfb dwc ecefgtbrtecxfbrdb rfbsrttbstgbrrtbrttr', 0),
(6, 'f dsdf fd', 'setay58230@obxstorm.com', 'vf dve e', 'f evfrerervrevrfeveverre', 0),
(7, 'f dsdf fd', 'setay58230@obxstorm.com', 'vf dve e', 'f evfrerervrevrfeveverre', 0),
(8, 'f dsdf fd', 'setay58230@obxstorm.com', 'vf dve e', 'f evfrerervrevrfeveverre', 0),
(9, 'f dsdf fd', 'setay58230@obxstorm.com', 'vf dve e', 'f evfrerervrevrfeveverre', 0),
(10, 'f dsdf fd', 'setay58230@obxstorm.com', 'vf dve e', 'f evfrerervrevrfeveverre', 0),
(11, 'f dsdf fd', 'setay58230@obxstorm.com', 'vf dve e', 'f evfrerervrevrfeveverre', 0);

-- --------------------------------------------------------

--
-- Table structure for table `lawyers`
--

CREATE TABLE `lawyers` (
  `Law_ID` int(11) NOT NULL,
  `Law_DP` varchar(255) NOT NULL COMMENT 'Lawyer Profile picture',
  `Law_Name` varchar(50) NOT NULL,
  `Law_CNIC` varchar(20) NOT NULL,
  `Law_DOB` date NOT NULL,
  `Law_Pro` varchar(50) NOT NULL COMMENT 'Lawyers profession',
  `Law_Loc` varchar(255) NOT NULL COMMENT 'Lawyers Office Location',
  `Law_Con` varchar(20) NOT NULL COMMENT 'lawyers contact number',
  `Law_Email` varchar(35) NOT NULL COMMENT 'lawyers email',
  `Password` varchar(50) NOT NULL,
  `Law_CNIC_F` varchar(255) NOT NULL COMMENT 'Lawyer CNIC Front',
  `Law_CNIC_B` varchar(255) NOT NULL COMMENT 'Lawyer CNIC back',
  `Fees` int(5) NOT NULL,
  `Law_Date` date NOT NULL DEFAULT current_timestamp() COMMENT 'Lawyers Date of join',
  `code` mediumint(50) NOT NULL,
  `Code_Status` text NOT NULL,
  `Role` int(11) NOT NULL DEFAULT 0 COMMENT '0 for lwyers 1 for admins'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lawyers`
--

INSERT INTO `lawyers` (`Law_ID`, `Law_DP`, `Law_Name`, `Law_CNIC`, `Law_DOB`, `Law_Pro`, `Law_Loc`, `Law_Con`, `Law_Email`, `Password`, `Law_CNIC_F`, `Law_CNIC_B`, `Fees`, `Law_Date`, `code`, `Code_Status`, `Role`) VALUES
(1, 'D:\\Work\\xampp\\htdocs\\projet2\\img\\team-1.jpg', 'Vishal Kumar ad', '61101-9063070-1', '1991-07-10', 'Civil Lawyer', 'Usa', '033034655332', 'v2k4562000@gmail.com', 'password', '', '', 90, '2014-07-04', 0, '', 0),
(2, 'D:\\Work\\xampp\\htdocs\\projet2\\img\\team-2.jpg', 'Vishal Kumar ad', '34202-4898111-1', '1995-07-13', 'Ciriminal Lawyer', 'Usa', '033034655332', 'vk54562000@gmail.com', 'password', '', '', 80, '2014-07-24', 0, '', 0),
(3, 'pexels-snapwire-618613.jpg', 'Vishal Kumar ad', '4141462622229', '1612-08-15', 'Hacking', 'Usa', '033034655332', 'vk64562000@gmail.com', 'password', 'pexels-snapwire-618613.jpg', 'pexels-snapwire-618613.jpg', 70, '0000-00-00', 186166, '', 0),
(4, '1.png', 'Vishal Kumar ad', '544345', '2021-07-29', 'fdjdsufyn', 'Usa', '033034655332', 'vk44562000@gmail.com', 'password', '2.png', '3.png', 110, '0000-00-00', 771162, '', 0),
(5, '', 'Vishal Kumar ad', '', '2001-10-30', 'Admin', 'Usa', '033034655332', 'vk456662000@gmail.com', 'password', '', '', 0, '2021-07-31', 0, '', 1),
(7, '', '123qew', '234234', '0000-00-00', '11', 'Thailand', '033034655332', 'vk4562000@gmail.com', 'password', '', '', 0, '2021-08-02', 0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `law_types`
--

CREATE TABLE `law_types` (
  `id` int(11) NOT NULL,
  `Type_Name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `law_types`
--

INSERT INTO `law_types` (`id`, `Type_Name`) VALUES
(1, 'Intellectual Property (IP)'),
(2, 'Family Lawyer'),
(3, 'Intellectual Property (IP) '),
(4, 'Family Lawyers'),
(5, 'Estate Planning '),
(6, 'Personal Injury '),
(7, 'Malpractice'),
(8, 'Business '),
(9, 'Labor'),
(10, 'Tax '),
(11, 'Bankruptcy'),
(12, 'Immigration'),
(13, 'Real Estate'),
(14, 'Constitutional'),
(15, 'Environmental'),
(16, 'Civil Litigation'),
(17, 'Criminal Defense');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `News_ID` int(11) NOT NULL,
  `News_Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`News_ID`, `News_Email`) VALUES
(6, 'setay58230@obxstorm.com'),
(7, 'setay58230@obxstorm.com'),
(8, ''),
(9, ''),
(10, ''),
(11, ''),
(12, ''),
(13, ''),
(14, ''),
(15, ''),
(16, ''),
(17, ''),
(18, ''),
(19, ''),
(20, ''),
(21, ''),
(22, ''),
(23, ''),
(24, ''),
(25, ''),
(26, ''),
(27, ''),
(28, ''),
(29, ''),
(30, ''),
(31, ''),
(32, ''),
(33, ''),
(34, ''),
(35, ''),
(36, ''),
(37, ''),
(38, ''),
(39, ''),
(40, ''),
(41, ''),
(42, ''),
(43, ''),
(44, ''),
(45, ''),
(46, ''),
(47, ''),
(48, ''),
(49, ''),
(50, ''),
(51, ''),
(52, ''),
(53, ''),
(54, ''),
(55, ''),
(56, ''),
(57, ''),
(58, ''),
(59, ''),
(60, ''),
(61, ''),
(62, ''),
(63, '');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `Not_ID` int(11) NOT NULL,
  `Message` text NOT NULL,
  `is_read` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `User_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `sub_News` int(11) NOT NULL DEFAULT 1 COMMENT 'Subscribed To News Letter 1=yes 0=no',
  `code` mediumint(50) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `Name`, `Username`, `Email`, `Password`, `sub_News`, `code`, `status`) VALUES
(1, 'sdcsddcds', 'dsccdcdds', 'pifob11300@seek4wap.com', '$2y$10$JXjUL2PcNI/8sMH7LXRtx.YktqdHgHzVyDqYkkgjzc4', 1, 0, ''),
(6, 'wfefreferf', 'test', 'jitices491@w3boats.comd', '123456', 1, 0, ''),
(7, 'wfw', 'Vishal', 'Vishal@vishal.com', '$2y$10$1PkETA1UWudLRkblcbwJpeJSFssVQrWZWpZeQSDI3iB', 1, 0, ''),
(8, '', 'Admin', 'jitices491@w3boats.com', '$2y$10$CFyCSVM.Q8.COPmm7chy5.W7Z5HhYo2wR.kcu./cgFo', 1, 192185, ''),
(18, 'cdsdec', 'dcsdcsdcsdc', '23e@ed.uym', '$2y$10$0ELK02fghl6uB7dufJOC0.Xaa9BY1x87sw/xNkUiW5c', 1, 0, ''),
(19, '', 'ttest', '', '$2y$10$wevIVEPE.KywNvi09ZMKVeNpGdQAZY5gdDqbApphMKH', 1, 0, ''),
(22, 'Test Sir', 'Testingg', 'setay58230@obxstorm.com', '123456', 1, 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`App_ID`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`Book_ID`);

--
-- Indexes for table `help`
--
ALTER TABLE `help`
  ADD PRIMARY KEY (`Help_ID`);

--
-- Indexes for table `lawyers`
--
ALTER TABLE `lawyers`
  ADD PRIMARY KEY (`Law_ID`),
  ADD UNIQUE KEY `Law_CNIC` (`Law_CNIC`);

--
-- Indexes for table `law_types`
--
ALTER TABLE `law_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`News_ID`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`Not_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Username` (`Username`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `App_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `Book_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `help`
--
ALTER TABLE `help`
  MODIFY `Help_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `lawyers`
--
ALTER TABLE `lawyers`
  MODIFY `Law_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `law_types`
--
ALTER TABLE `law_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `News_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `Not_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
