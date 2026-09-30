-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2026 at 04:14 PM
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
-- Database: `it0049_tfa3_pos`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `full_name`, `email`, `phone`, `created_at`) VALUES
(1, 'Stark Tony', 'tony.stark@test.com', '0917-123-4567', '2026-09-21 07:43:44'),
(2, 'Bruce Wayne', 'bruce.wayne@test.com', '0918-234-5678', '2026-09-21 07:43:44'),
(3, 'Hermione Granger', 'hermione.granger@test.com', '0919-345-6789', '2026-09-21 07:43:44'),
(4, 'Katniss Everdeen', 'katniss.everdeen@test.com', '0920-456-7890', '2026-09-21 07:43:44'),
(5, 'Jack Sparrow', 'jack.sparrow@test.com', '0921-567-8901', '2026-09-21 07:43:44'),
(6, 'Test user', 'test@gmail.com', '09362885720', '2026-09-30 12:56:59'),
(7, 'new customer', 'newcustomer@gmail.com', '0912243755', '2026-09-30 14:07:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `full_name`, `avatar`, `created_at`) VALUES
(1, 'peter.parker', 'Peter Parker', '1790776567_eb803b8db5f62fac6d01.jpg', '2026-09-21 07:44:51'),
(2, 'steve.rogers', 'Steve Rogers', '1790777595_b1f6ed2481999c888ae6.jpg', '2026-09-21 07:44:51'),
(3, 'natasha.romanoff', 'Natasha Romanoff', NULL, '2026-09-21 07:44:51'),
(4, 'clark.kent', 'Clark Kent', NULL, '2026-09-21 07:44:51'),
(5, 'diana.prince', 'Diana Prince', NULL, '2026-09-21 07:44:51'),
(6, 'whoistheuser', 'who is the user', NULL, '2026-09-30 13:23:25'),
(7, 'newuser', 'new user', NULL, '2026-09-30 14:09:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
