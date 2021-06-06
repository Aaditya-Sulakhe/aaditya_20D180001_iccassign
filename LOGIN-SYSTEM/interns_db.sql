-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2021 at 06:54 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `interns_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `internship_1`
--

CREATE TABLE `internship_1` (
  `id` int(255) NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `resume` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `internship_1`
--

INSERT INTO `internship_1` (`id`, `fullName`, `email`, `userName`, `resume`) VALUES
(1, 'Monkey', 'monkey@gmail.com', 'monkey', '4541-CH105Inorg_Tutorial_I_Qs.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `internship_2`
--

CREATE TABLE `internship_2` (
  `id` int(255) NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `resume` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `internship_2`
--

INSERT INTO `internship_2` (`id`, `fullName`, `userName`, `email`, `resume`) VALUES
(1, 'Duck', 'duck', 'duck@gmail.com', '2658-Screenshot (2).png');

-- --------------------------------------------------------

--
-- Table structure for table `internship_3`
--

CREATE TABLE `internship_3` (
  `id` int(255) NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `resume` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `internship_3`
--

INSERT INTO `internship_3` (`id`, `fullName`, `email`, `userName`, `resume`) VALUES
(1, 'Duck', 'duck@gmail.com', 'duck', '1963-Screenshot (7).png'),
(2, 'Monkey', 'monkey@gmail.com', 'monkey', '9248-Lab-2.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullName`, `userName`, `password`, `email`) VALUES
(1, 'Duck', 'duck', '202cb962ac59075b964b07152d234b70', 'duck@gmail.com'),
(2, 'Bear', 'bear', '202cb962ac59075b964b07152d234b70', 'bear@gmail.com'),
(3, 'Lion', 'lion', '202cb962ac59075b964b07152d234b70', 'lion@gmail.com'),
(4, 'Eagle', 'eagle', '202cb962ac59075b964b07152d234b70', 'eagle@gmail.com'),
(5, 'Monkey', 'monkey', '202cb962ac59075b964b07152d234b70', 'monkey@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `internship_1`
--
ALTER TABLE `internship_1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `internship_2`
--
ALTER TABLE `internship_2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `internship_3`
--
ALTER TABLE `internship_3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `internship_1`
--
ALTER TABLE `internship_1`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `internship_2`
--
ALTER TABLE `internship_2`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `internship_3`
--
ALTER TABLE `internship_3`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
