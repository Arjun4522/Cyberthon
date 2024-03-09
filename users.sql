-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2024 at 11:12 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tenmacrhctf`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Sl No.` int(100) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `pass` varchar(10) NOT NULL,
  `score` varchar(9999) NOT NULL,
  `rank` int(100) NOT NULL,
  `ctf1` varchar(1) NOT NULL,
  `ctf2` varchar(255) NOT NULL,
  `ctf3` varchar(22) NOT NULL,
  `ctf4` varchar(22) NOT NULL,
  `ctf5` varchar(22) NOT NULL,
  `ctf6` varchar(22) NOT NULL,
  `ctf7` varchar(22) NOT NULL,
  `ctf8` varchar(22) NOT NULL,
  `ctf9` varchar(22) NOT NULL,
  `ctf10` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Sl No.`, `uname`, `mail`, `pass`, `score`, `rank`, `ctf1`, `ctf2`, `ctf3`, `ctf4`, `ctf5`, `ctf6`, `ctf7`, `ctf8`, `ctf9`, `ctf10`) VALUES
(1, 'ROOT', 'root@test.com', 'ROOT1234', '9999', 0, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Sl No.`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Sl No.` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
