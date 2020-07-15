-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2020 at 03:39 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas`
--

-- --------------------------------------------------------

--
-- Table structure for table `list`
--

CREATE TABLE `list` (
  `ID_Game` int(11) NOT NULL,
  `Nama_Game` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Jenis_Game` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Price` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `list`
--

INSERT INTO `list` (`ID_Game`, `Nama_Game`, `Jenis_Game`, `Price`) VALUES
(101, 'Fate Grand Order', 'Mobile', '500.000'),
(121, 'Arknights', 'Mobile', '200.000'),
(135, 'Point Blank', 'PC', '400.000'),
(221, 'RF Onling', 'PC', '1.500.000'),
(341, 'Granblue Fantasy', 'Mobile', '600.000'),
(374, 'Granblue Fantasy', 'Mobile', '150.000'),
(474, 'Granblue Fantasy', 'Mobile', '1.150.000'),
(479, 'Fate Grand Order', 'Mobile', '2.500.000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `list`
--
ALTER TABLE `list`
  ADD PRIMARY KEY (`ID_Game`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `list`
--
ALTER TABLE `list`
  MODIFY `ID_Game` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=480;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
