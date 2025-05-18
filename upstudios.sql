-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 18, 2025 at 01:46 PM
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
-- Database: `upstudios`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `event_type` varchar(50) DEFAULT NULL,
  `event_date` date DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `name`, `email`, `event_type`, `event_date`, `location`, `message`, `created_at`) VALUES
(1, 'DAUDA SALMIN', 'daudasalmin39@gmail.com', 'Official Event', '2025-05-24', 'mbezi, kwa zena', 'in need ur service immediately ', '2025-05-17 13:54:39'),
(2, 'DAUDA SALMIN', 'daudasalmin39@gmail.com', 'Official Event', '2025-05-24', 'mbezi, kwa zena', 'in need ur service immediately ', '2025-05-17 14:40:48'),
(3, 'DAUDA SALMIN', 'daudasalmin39@gmail.com', 'Official Event', '2025-05-24', 'mbezi, kwa zena', 'in need ur service immediately ', '2025-05-17 15:19:34'),
(4, 'DAUDA SALMIN', 'daudasalmin39@gmail.com', 'Official Event', '2025-05-24', 'mbezi, kwa zena', 'in need ur service immediately ', '2025-05-17 15:23:39'),
(5, 'DAUDA SALMIN', 'daudasalmin39@gmail.com', 'Official Event', '2025-05-24', 'mbezi, kwa zena', 'in need ur service immediately ', '2025-05-17 15:23:40'),
(6, 'DAUDA SALMIN', 'daudasalmin39@gmail.com', 'Official Event', '2025-05-24', 'mbezi, kwa zena', 'in need ur service immediately ', '2025-05-17 15:23:42');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `message`, `created_at`) VALUES
(1, 'DAUDA SALMIN', 'daudasalmin39@gmail.com', '12345', '2025-05-16 21:21:44'),
(2, 'IBRA', 'daudasalmin39@gmail.com', 'HI\r\n', '2025-05-17 13:10:16'),
(3, ' SALMIN', 'daudasalmin39@gmail.com', 'vp', '2025-05-17 13:11:13'),
(4, ' SALMIN', 'daudasalmin39@gmail.com', 'vp', '2025-05-17 13:46:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
