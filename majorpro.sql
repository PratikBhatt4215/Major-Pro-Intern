-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2021 at 03:46 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `majorproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `majorpro`
--

CREATE TABLE `majorpro` (
  `id` int(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `bookname` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `registration` varchar(255) NOT NULL,
  `borrowdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `majorpro`
--

INSERT INTO `majorpro` (`id`, `user`, `bookname`, `mobile`, `email`, `branch`, `registration`, `borrowdate`) VALUES
(1, 'Pratik Bhatt', 'Desgin And Analysis Of Algo', '07004458803', 'pk4789218@gmail.com', 'CSE', '5848641894', '2021-11-10 16:30:00'),
(2, 'Sanket Bera', 'Mathematics', '7004458803', 'pk4789218@gmail.com', 'CSE', '5159198419841', '2021-11-10 20:36:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `majorpro`
--
ALTER TABLE `majorpro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `majorpro`
--
ALTER TABLE `majorpro`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
