-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2021 at 03:35 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tech_roar_bird_dna_managementv2`
--

-- --------------------------------------------------------

--
-- Table structure for table `dna_samples`
--

CREATE TABLE `dna_samples` (
  `id` int(11) NOT NULL,
  `owner_id` varchar(11) NOT NULL DEFAULT '0',
  `bird_id` varchar(250) DEFAULT NULL,
  `specie` varchar(250) DEFAULT NULL,
  `type` varchar(250) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `result` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE `login_details` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT '',
  `username` varchar(225) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_status` int(11) NOT NULL DEFAULT '0',
  `login_attempts` int(11) NOT NULL DEFAULT '0',
  `ban_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`id`, `name`, `username`, `email`, `password`, `reset_hash`, `reset_status`, `login_attempts`, `ban_time`, `status`, `created_at`) VALUES
(1, 'Admin', 'admin', 'qualitydnalab@gmail.com', '0192023a7bbd73250516f069df18b500', NULL, 0, 0, '2021-10-02 01:35:01', 0, '2021-09-14 09:14:09');

-- --------------------------------------------------------

--
-- Table structure for table `owners`
--

CREATE TABLE `owners` (
  `id` int(11) NOT NULL,
  `owner_name` varchar(225) DEFAULT NULL,
  `owner_phone` varchar(225) DEFAULT NULL,
  `quality` varchar(225) DEFAULT NULL,
  `quantity` varchar(225) DEFAULT NULL,
  `payment_status` varchar(11) DEFAULT NULL,
  `amount` varchar(11) NOT NULL DEFAULT '0',
  `extra_amount` varchar(11) NOT NULL DEFAULT '0',
  `discount` varchar(11) NOT NULL DEFAULT '0',
  `total` varchar(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dna_samples`
--
ALTER TABLE `dna_samples`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_details`
--
ALTER TABLE `login_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `owners`
--
ALTER TABLE `owners`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dna_samples`
--
ALTER TABLE `dna_samples`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login_details`
--
ALTER TABLE `login_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `owners`
--
ALTER TABLE `owners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
