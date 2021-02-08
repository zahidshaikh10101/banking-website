-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2021 at 06:25 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `ID` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `sno` int(3) NOT NULL,
  `sender` text NOT NULL,
  `receiver` text NOT NULL,
  `balance` int(8) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`sno`, `sender`, `receiver`, `balance`, `datetime`) VALUES
(1, 'Raj Patel', 'Naman Ojha', 1000, '2021-02-05 16:41:03'),
(2, 'Kabir Singh', 'Ali Patel', 15000, '2021-02-05 16:42:07'),
(3, 'Raj Patel', 'Jash Shah', 21000, '2021-02-05 16:48:28'),
(4, 'Rohan Kapoor', 'Ajay Ahuja', 20000, '2021-02-05 17:07:14'),
(5, 'Naman Ojha', 'Raj Patel', 30000, '2021-02-07 01:12:20'),
(6, 'Ajay Ahuja', 'Rohan Kapoor', 12000, '2021-02-07 01:26:59'),
(7, 'Raj Patel', 'Rohan Kapoor', 58000, '2021-02-07 01:32:39'),
(8, 'Yash Shah', 'Rohan Kapoor', 5000, '2021-02-07 22:50:52');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `city` varchar(8) NOT NULL,
  `balance` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `city`, `balance`) VALUES
(1, 'Rohan Kapoor', 'rohan@gmail.com', 'Mumbai', 94000),
(2, 'Ajay Ahuja', 'ajayahuja@gmail.com', 'Delhi', 63000),
(3, 'Raj Patel', 'raj@gmail.com', 'Kolkata', 0),
(4, 'Anas Pathan', 'anaspathan@gmail.com', 'Mumbai', 62000),
(5, 'Naman Ojha', 'naman@gmail.com', 'Mumbai', 31000),
(6, 'Kabir Singh', 'kabirsingh@gmail.com', 'Delhi', 80000),
(7, 'Jash Shah', 'jash@gmail.com', 'Kolkata', 77000),
(8, 'Ali Patel', 'alipatel@gmail.com', 'Mumbai', 85000),
(9, 'Alex Anthony', 'alexanthony@gmail.com', 'Delhi', 80000),
(10, 'Rajveer Singh', 'singh@gmail.com', 'Delhi', 15000),
(11, 'Rajesh Kumar', 'rajesh1@gmail.com', 'Mumbai', 40000),
(12, 'Hamza Shaikh', 'hamza@gmail.com', 'Kolkata', 73000),
(13, 'Aman Ojha', 'aman@gmail.com', 'Delhi', 39000),
(14, 'Varun Rao', 'rao12@gmail.com', 'Kolkata', 34000),
(15, 'Yash Shah', 'yash1@gmail.com', 'Mumbai', 15000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
