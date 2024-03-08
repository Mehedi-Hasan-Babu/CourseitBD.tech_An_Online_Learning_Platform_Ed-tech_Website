-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2024 at 01:14 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `courseitbd`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'iam_me', 'mehedi.010501@gmail.com', '1234'),
(4, ' i_am_me', 'mehedi.010501@gmail.com', '3456'),
(5, 'iam_me', 'mehedi.010501@gmail.com', '1234'),
(13, 'User1', 'u1@gmail.com', '1234'),
(14, 'user2', 'u2@gmail.com', '1234'),
(15, 'u3', 'u3@gmail.com', '1234'),
(16, 'Riyad', 'riyad@gmail.com', '12345'),
(17, 'Sajid', 'sajid@gmail.com', '1234'),
(18, '0000', '0000@0000', '0000'),
(19, 'Babu', 'babu@gmail.com', '1234'),
(20, 'mehedi.010501@gmail.com', 'mehedi.010501@gmail.com', '1234'),
(21, 'iam_me', 'mehedi.010501@gmail.com', '1234'),
(22, 'iam_me', 'mehedi.010501@gmail.com', '1234'),
(23, '0000', '000@gmail.com', '000'),
(24, 'iam_me', 'mehedi.010501@gmail.com', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
