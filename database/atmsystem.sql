-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2024 at 10:47 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atmsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `atmsys`
--

CREATE TABLE `atmsys` (
  `id` int(11) NOT NULL,
  `accnum` int(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `balance` int(15) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `atmsys`
--

INSERT INTO `atmsys` (`id`, `accnum`, `username`, `email`, `password`, `balance`, `date`) VALUES
(1, 1362169, 'Mohsin Khan', 'zainofficial139@gmail.com', '6345a8a1d2d04d5e9f0b3fea202bbfb2', 300, '2024-07-12 11:32:45'),
(2, 1271011, 'Robert', 'mykhan@gmail.com', '6345a8a1d2d04d5e9f0b3fea202bbfb2', 8300, '2024-07-12 11:37:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `atmsys`
--
ALTER TABLE `atmsys`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `atmsys`
--
ALTER TABLE `atmsys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
