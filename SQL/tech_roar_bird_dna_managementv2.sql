-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2021 at 03:17 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `dna`
--

CREATE TABLE `dna` (
  `id` int(11) NOT NULL,
  `owner_name` varchar(225) DEFAULT NULL,
  `owner_phone` varchar(225) DEFAULT NULL,
  `quality` varchar(225) DEFAULT NULL,
  `quantity` varchar(225) DEFAULT NULL,
  `payment_status` varchar(11) DEFAULT NULL,
  `amount` varchar(11) NOT NULL DEFAULT '0',
  `discount` varchar(11) NOT NULL DEFAULT '0',
  `total` varchar(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dna`
--

INSERT INTO `dna` (`id`, `owner_name`, `owner_phone`, `quality`, `quantity`, `payment_status`, `amount`, `discount`, `total`, `created_at`) VALUES
(1, 'Alyssa Rasmussen', '+1 (839) 114-9739', '0', '3', 'Cash', '2000', '840', '1160', '2021-09-24 21:50:58'),
(2, 'Ali', '03134131441', '0', '2', 'Cash', '1000', '10', '990', '2021-09-24 22:30:54');

-- --------------------------------------------------------

--
-- Table structure for table `dna_samples`
--

CREATE TABLE `dna_samples` (
  `id` int(11) NOT NULL,
  `dna_id` varchar(11) NOT NULL DEFAULT '0',
  `bird_id` varchar(250) DEFAULT NULL,
  `specie` varchar(250) DEFAULT NULL,
  `type` varchar(250) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `result` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dna_samples`
--

INSERT INTO `dna_samples` (`id`, `dna_id`, `bird_id`, `specie`, `type`, `status`, `result`, `created_at`, `updated_at`) VALUES
(1, '1', 'Dolore aspernatur te', 'Amet perspiciatis ', 'Magnam dolorem reici', 1, 'Fe-Male', '2021-09-24 21:50:58', '2021-09-24 22:24:43'),
(2, '1', 'Do laudantium quo q', 'Elit aliquip placea', 'Architecto velit dol', 1, 'Fe-Male', '2021-09-24 21:50:58', '2021-09-24 22:24:27'),
(3, '1', 'Proident in dolore ', 'Omnis velit temporib', 'Reprehenderit velit', 1, 'Male', '2021-09-24 21:50:58', '2021-09-24 22:24:06'),
(4, '2', '556', 'hogoromo', 'feather', 1, 'Male', '2021-09-24 22:30:54', '2021-09-25 01:15:12'),
(5, '2', '889', 'cocktail', 'feather', 0, NULL, '2021-09-24 22:30:54', '2021-09-24 22:30:54');

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
  `reset_status` int(11) NOT NULL DEFAULT 0,
  `login_attempts` int(11) NOT NULL DEFAULT 0,
  `ban_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`id`, `name`, `username`, `email`, `password`, `reset_hash`, `reset_status`, `login_attempts`, `ban_time`, `status`, `created_at`) VALUES
(1, 'TheIRF', 'admin', 'themig1122@gmail.com', '21232f297a57a5a743894a0e4a801fc3', NULL, 0, 0, '2021-09-22 14:28:40', 0, '2021-09-14 14:14:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dna`
--
ALTER TABLE `dna`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dna`
--
ALTER TABLE `dna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dna_samples`
--
ALTER TABLE `dna_samples`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `login_details`
--
ALTER TABLE `login_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
