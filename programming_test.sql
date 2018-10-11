-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2018 at 10:56 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `programming_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` int(10) UNSIGNED NOT NULL,
  `city` varchar(50) NOT NULL,
  `St` varchar(50) NOT NULL,
  `NO` varchar(10) NOT NULL,
  `zip` varchar(20) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id`, `city`, `St`, `NO`, `zip`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Tehran', 'amirabad', '35', '1413735585', 15, '2018-10-06 13:27:44', '2018-10-06 13:27:44'),
(2, 'Tehran', 'amirabad', '35', '1413735585', 16, '2018-10-06 13:28:14', '2018-10-06 13:28:14'),
(3, 'Tehran', 'amirabad', '35', '1413735585', 17, '2018-10-06 13:40:36', '2018-10-06 13:40:36'),
(4, 'Tehran', 'amirabad', '35', '1413735585', 18, '2018-10-06 13:41:37', '2018-10-06 13:41:37'),
(7, 'Tehran', 'amirabaddd', '3555', '1413735585', 18, '2018-10-06 13:58:14', '2018-10-06 13:58:14'),
(8, 'Tehran', 'amirabad', '2', '2', 19, '2018-10-06 14:11:06', '2018-10-06 14:11:06'),
(9, 'Tehran', 'amirabad', '35', '1413735585', 20, '2018-10-06 18:11:33', '2018-10-06 18:11:33'),
(10, 'Tehran', 'amirabad', '3555', '2', 21, '2018-10-06 18:31:55', '2018-10-06 18:31:55'),
(11, 'Tehran', 'amirabad', '35', '1413735585', 22, '2018-10-06 18:34:47', '2018-10-06 18:34:47'),
(12, 'Tehran', 'amirabad', '3555', '1413735585', 25, '2018-10-06 19:14:22', '2018-10-06 19:14:22'),
(13, 'Tehran', 'amirabad', '35', '1413735585', 27, '2018-10-07 05:29:25', '2018-10-07 05:29:25'),
(14, 'Tehran', 'amirabad', '35', '1413735585', 29, '2018-10-07 18:36:12', '2018-10-07 18:36:12'),
(15, 'Tehran', 'amirabad', '3555', '1413735585', 30, '2018-10-08 16:13:25', '2018-10-08 16:13:25'),
(16, 'Tehran', 'amirabad', '3555', '2', 31, '2018-10-09 05:33:00', '2018-10-09 05:33:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(40) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `tell` varchar(20) NOT NULL,
  `Acount_owner` varchar(100) NOT NULL,
  `IBAN` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `tell`, `Acount_owner`, `IBAN`, `created_at`, `updated_at`) VALUES
(4, 'Kiana', 'kazerooni', '5555', '', '', '2018-10-06 11:33:50', '2018-10-06 11:33:50'),
(5, 'Kiana', 'kazerooni', '6666', '', '', '2018-10-06 11:37:59', '2018-10-06 11:37:59'),
(6, 'Kiana', 'kazerooni', '11', '', '', '2018-10-06 11:52:11', '2018-10-06 11:52:11'),
(7, 'Kiana', 'kazerooni', 'w', '', '', '2018-10-06 11:52:43', '2018-10-06 11:52:43'),
(8, 'Kiana', 'kazerooni', '2', '', '', '2018-10-06 12:00:35', '2018-10-06 12:00:35'),
(9, 'Kiana', 'kazerooni', 'fff', '', '', '2018-10-06 12:06:58', '2018-10-06 12:06:58'),
(10, 'Kiana', 'kazerooni', '55', '', '', '2018-10-06 12:46:36', '2018-10-06 12:46:36'),
(11, 'Kiana', 'kazerooni', '444', '', '', '2018-10-06 12:52:18', '2018-10-06 12:52:18'),
(12, 'Kiana', 'kazerooni', '1111', '', '', '2018-10-06 12:52:41', '2018-10-06 12:52:41'),
(13, 'Kiana', 'kazerooni', '12', '', '', '2018-10-06 12:57:34', '2018-10-06 12:57:34'),
(14, 'Kiana', 'kazerooni', '021-88787200ff', '', '', '2018-10-06 12:59:28', '2018-10-06 12:59:28'),
(15, 'Kiana', 'kazerooni', '65', '', '', '2018-10-06 13:26:34', '2018-10-06 13:26:34'),
(16, 'Kiana', 'kazerooni', '021-88787200ffmm', '', '', '2018-10-06 13:28:04', '2018-10-06 13:28:04'),
(17, 'Kiana', 'kazerooni', '67', '', '', '2018-10-06 13:40:22', '2018-10-06 13:40:22'),
(18, 'Kiana', 'kazerooni', '1367', '', '', '2018-10-06 13:41:25', '2018-10-06 13:41:25'),
(19, 'Kiana', 'kazerooni', '399', '', '', '2018-10-06 14:10:48', '2018-10-06 14:10:48'),
(20, 'Kiana', 'kazerooni', '1115', '', '', '2018-10-06 18:11:11', '2018-10-06 18:11:11'),
(21, 'mojtaba', 'shiri', '000', 'fd', '3', '2018-10-06 20:02:22', '2018-10-06 18:32:22'),
(22, 'mojtaba', 'shiri', '99', 'fdhh', '88', '2018-10-06 20:05:03', '2018-10-06 18:35:03'),
(24, 'Kiana', 'shiri', '0000', '', '', '2018-10-06 19:08:19', '2018-10-06 19:08:19'),
(25, 'Kiana', 'kazerooni', '4445', '', '', '2018-10-06 19:14:07', '2018-10-06 19:14:07'),
(26, 'Kiana', 'shiri', '000555', '', '', '2018-10-06 19:15:23', '2018-10-06 19:15:23'),
(27, 'Kiana', 'shiri', '021-8878720055', 'fd', '4444', '2018-10-07 07:00:20', '2018-10-07 05:30:20'),
(28, 'Kiana', 'shiri', '32', '', '', '2018-10-07 05:33:01', '2018-10-07 05:33:01'),
(29, 'Kiana', 'shiri', '021-88787200dd', 'dd', 'gg', '2018-10-07 20:13:58', '2018-10-07 18:43:58'),
(30, 'Kiana', 'shiri', '000ff', 'fd', '3', '2018-10-08 18:48:43', '2018-10-08 17:18:43'),
(31, 'Kiana', 'shiri', '000ffss', 'fd', '111', '2018-10-09 07:03:28', '2018-10-09 05:33:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `telephone` (`tell`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `addresses`
--
ALTER TABLE `addresses`
  ADD CONSTRAINT `addresses_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
