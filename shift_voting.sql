-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2022 at 09:15 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shift voting`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admins`
--

CREATE TABLE `tbl_admins` (
  `id` int(10) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admins`
--

INSERT INTO `tbl_admins` (`id`, `full_name`, `username`, `password`) VALUES
(3, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_entrepreneurship`
--

CREATE TABLE `tbl_entrepreneurship` (
  `id` int(10) UNSIGNED NOT NULL,
  `contestant_image` varchar(255) NOT NULL,
  `contestant_name` varchar(255) NOT NULL,
  `votes` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_entrepreneurship`
--

INSERT INTO `tbl_entrepreneurship` (`id`, `contestant_image`, `contestant_name`, `votes`) VALUES
(1, 'contestant_image-3970.png', 'Daniel', 25),
(2, 'contestant_image-2069.png', 'Gabriel', 25),
(3, 'contestant_image-6231.jpg', 'Hadizah', 25),
(4, 'contestant_image-8963.png', 'Moses', 25),
(5, 'contestant_image-2857.png', 'Samuel', 25),
(6, 'contestant_image-4834.png', 'Solomon', 25),
(7, 'contestant_image-7314.png', 'Vitalis', 25);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_music`
--

CREATE TABLE `tbl_music` (
  `id` int(10) UNSIGNED NOT NULL,
  `contestant_image` varchar(255) NOT NULL,
  `contestant_name` varchar(255) NOT NULL,
  `votes` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_music`
--

INSERT INTO `tbl_music` (`id`, `contestant_image`, `contestant_name`, `votes`) VALUES
(3, 'contestant_image-8019.png', 'Adunni', 25),
(4, 'contestant_image-7146.png', 'Anita', 25),
(5, 'contestant_image-4883.png', 'Elizabeth', 25),
(6, 'contestant_image-9371.png', 'Faith', 25),
(7, 'contestant_image-1700.png', 'Favour', 25),
(8, 'contestant_image-3175.png', 'Gloria', 25),
(9, 'contestant_image-294.png', 'Paulina', 25);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_speaking`
--

CREATE TABLE `tbl_speaking` (
  `id` int(10) NOT NULL,
  `contestant_image` varchar(255) NOT NULL,
  `contestant_name` varchar(255) NOT NULL,
  `votes` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_speaking`
--

INSERT INTO `tbl_speaking` (`id`, `contestant_image`, `contestant_name`, `votes`) VALUES
(1, 'contestant_image-1252.png', 'Chineye', 25),
(2, 'contestant_image-2533.png', 'Daniel', 25),
(3, 'contestant_image-2003.png', 'Destiny', 25),
(4, 'contestant_image-5146.png', 'Dumebi', 25),
(5, 'contestant_image-9899.png', 'Kate', 25),
(6, 'contestant_image-3390.png', 'Omoniyi', 25),
(7, 'contestant_image-1699.png', 'Roseline', 25);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admins`
--
ALTER TABLE `tbl_admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_entrepreneurship`
--
ALTER TABLE `tbl_entrepreneurship`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_music`
--
ALTER TABLE `tbl_music`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_speaking`
--
ALTER TABLE `tbl_speaking`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admins`
--
ALTER TABLE `tbl_admins`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_entrepreneurship`
--
ALTER TABLE `tbl_entrepreneurship`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_music`
--
ALTER TABLE `tbl_music`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_speaking`
--
ALTER TABLE `tbl_speaking`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
