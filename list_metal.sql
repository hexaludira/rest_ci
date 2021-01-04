-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2021 at 09:10 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `list_metal`
--

-- --------------------------------------------------------

--
-- Table structure for table `metal_problem`
--

CREATE TABLE `metal_problem` (
  `id` int(11) NOT NULL,
  `date` varchar(25) NOT NULL,
  `detail` varchar(60) NOT NULL,
  `location` varchar(10) NOT NULL,
  `status` varchar(25) NOT NULL,
  `remark` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `metal_problem`
--

INSERT INTO `metal_problem` (`id`, `date`, `detail`, `location`, `status`, `remark`) VALUES
(1, '10 Agustus 2019', 'LP layar hang', 'Cell A07', 'Dalam perbaikan', 'Kirim vendor'),
(2, '15 September 2019', 'Baterai LP habis', 'Cell A01', 'Selesai diperbaiki', '-');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `metal_problem`
--
ALTER TABLE `metal_problem`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `metal_problem`
--
ALTER TABLE `metal_problem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
