-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 09, 2021 at 12:44 PM
-- Server version: 10.3.31-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qualitydnalabcom_qualitydnalab`
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
  `status` int(11) NOT NULL DEFAULT 0,
  `result` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dna_samples`
--

INSERT INTO `dna_samples` (`id`, `owner_id`, `bird_id`, `specie`, `type`, `status`, `result`, `created_at`, `updated_at`) VALUES
(1, '1', '199', 'FISHER / BLUE /INO', 'Feather', 1, 'Male', '2021-10-05 21:48:55', '2021-10-05 22:04:40'),
(2, '1', '106', 'FISHER / BLUE /INO', 'Feather', 1, 'Fe-Male', '2021-10-05 21:48:55', '2021-10-05 22:05:02'),
(3, '2', 'AB-183', 'ALBINO RED EYE', 'Feather', 1, 'Fe-Male', '2021-10-05 21:50:48', '2021-10-05 22:05:16'),
(4, '2', 'AB-024', 'ALBINO RED EYE', 'Feather', 1, 'Fe-Male', '2021-10-05 21:50:48', '2021-10-05 22:06:03'),
(5, '3', 'AB-29', 'ALBINO BLACK EYE/ INO', 'Feather', 1, 'Fe-Male', '2021-10-05 22:00:51', '2021-10-05 22:06:46'),
(6, '3', 'AB-68', 'ALBINO BLACK EYE/ INO', 'Feather', 1, 'Fe-Male', '2021-10-05 22:00:51', '2021-10-05 22:06:59'),
(7, '4', 'AB-15', 'ALBINO BLACK EYE/ INO', 'Feather', 1, 'Fe-Male', '2021-10-05 22:02:04', '2021-10-05 22:07:14'),
(8, '5', 'AB-53', 'ALBINO RED EYE', 'Feather', 1, 'Fe-Male', '2021-10-05 22:03:15', '2021-10-05 22:07:32'),
(9, '6', 'AB-80', 'DECINO', 'Feather', 1, 'Fe-Male', '2021-10-05 22:04:04', '2021-10-05 22:07:50'),
(10, '7', 'YNB-07', 'ALBINO RED EYE', 'Feather', 1, 'Fe-Male', '2021-10-06 03:17:33', '2021-10-06 03:21:08'),
(11, '7', 'AB-170', 'PARBLUE/INO', 'Feather', 1, 'Fe-Male', '2021-10-06 03:17:33', '2021-10-06 03:21:22'),
(12, '7', 'FARM-364', 'ALBINO RED EYE', 'Feather', 1, 'Fe-Male', '2021-10-06 03:17:33', '2021-10-06 03:21:40'),
(13, '7', 'YNB-0710', 'PARBLUE/INO', 'Feather', 1, 'Fe-Male', '2021-10-06 03:17:33', '2021-10-06 03:21:57'),
(14, '7', 'AB-134', 'ALBINO RED EYE', 'Feather', 1, 'Fe-Male', '2021-10-06 03:17:33', '2021-10-06 03:22:11'),
(15, '7', 'AB-063', 'PARBLUE/INO', 'Feather', 1, 'Fe-Male', '2021-10-06 03:17:33', '2021-10-06 03:23:00'),
(16, '7', 'AB-263', 'BLUE FISHERY', 'Feather', 1, 'Fe-Male', '2021-10-06 03:17:34', '2021-10-06 03:23:11'),
(17, '7', 'AB-075', 'ALBINO RED EYE', 'Feather', 1, 'Fe-Male', '2021-10-06 03:17:34', '2021-10-06 03:25:32'),
(18, '7', 'AB-075', 'ALBINO RED EYE', 'Feather', 1, 'Fe-Male', '2021-10-06 03:17:34', '2021-10-06 03:20:38'),
(19, '7', 'YNB-582', 'BLUE FISHERI', 'Feather', 1, 'Fe-Male', '2021-10-06 03:17:34', '2021-10-06 03:19:19'),
(20, '7', 'AB-89', 'PARBLUE/INO', 'Feather', 1, 'Male', '2021-10-06 03:17:34', '2021-10-06 03:19:45'),
(21, '7', 'AB-023', 'PESTELINO', 'Feather', 1, 'Male', '2021-10-06 03:17:34', '2021-10-06 03:20:10'),
(22, '8', 'AB-46', 'CRUSTED DOVE', 'Feather', 1, 'Male', '2021-10-06 03:26:44', '2021-10-06 03:27:00'),
(23, '9', 'AB-043', 'ALBINO RED EYE', 'Feather', 1, 'Fe-Male', '2021-10-06 03:32:43', '2021-10-06 03:35:09'),
(24, '9', 'AB-016', 'PARBLUE/INO', 'Feather', 1, 'Male', '2021-10-06 03:32:43', '2021-10-06 03:35:33'),
(25, '10', 'AB-084', 'GREEN OPALINE EUWING', 'Feather', 1, 'Male', '2021-10-06 08:21:51', '2021-10-06 08:22:48'),
(26, '10', 'AAB-48', 'GREEN OPALINE EUWING', 'Feather', 1, 'Fe-Male', '2021-10-06 08:21:51', '2021-10-06 08:23:04'),
(27, '10', 'AB-043', 'GREEN OPALINE EUWING', 'Feather', 1, 'Fe-Male', '2021-10-06 08:21:51', '2021-10-06 08:23:20'),
(28, '10', 'DW-14-17', 'GREEN OPALINE EUWING', 'Feather', 1, 'Fe-Male', '2021-10-06 08:21:51', '2021-10-06 08:23:39'),
(29, '10', 'GC09-115', 'GREEN OPALINE EUWING', 'Feather', 1, 'Fe-Male', '2021-10-06 08:21:51', '2021-10-06 08:24:02'),
(30, '10', 'HM-88', 'GREEN OPALINE EUWING', 'Feather', 1, 'Male', '2021-10-06 08:21:51', '2021-10-06 08:24:15'),
(31, '10', 'AB-46 B-16', 'GREEN OPALINE EUWING', 'Feather', 1, 'Male', '2021-10-06 08:21:51', '2021-10-06 08:24:28'),
(32, '10', 'XMR 02-33', 'GREEN OPALINE EUWING', 'Feather', 1, 'Fe-Male', '2021-10-06 08:21:51', '2021-10-06 08:24:43'),
(33, '10', 'AB-020', 'GREEN OPALINE EUWING', 'Feather', 1, 'Male', '2021-10-06 08:21:51', '2021-10-06 08:24:55'),
(34, '10', 'AAB-14', 'GREEN OPALINE EUWING', 'Feather', 1, 'Fe-Male', '2021-10-06 08:21:52', '2021-10-06 08:25:09'),
(35, '10', 'AAB-85', 'GREEN OPALINE EUWING', 'Feather', 1, 'Fe-Male', '2021-10-06 08:21:52', '2021-10-06 08:25:23'),
(36, '10', 'AB-167', 'GREEN OPALINE EUWING', 'Feather', 1, 'Male', '2021-10-06 08:21:52', '2021-10-06 08:25:37'),
(37, '10', 'AB-145', 'GREEN OPALINE EUWING', 'Feather', 1, 'Male', '2021-10-06 08:21:52', '2021-10-06 08:25:53'),
(38, '10', 'LW-13-904', 'GREEN OPALINE EUWING', 'Feather', 1, 'Fe-Male', '2021-10-06 08:21:52', '2021-10-06 08:26:03'),
(39, '10', 'AAB-84', 'GREEN OPALINE EUWING', 'Feather', 1, 'Male', '2021-10-06 08:21:52', '2021-10-06 08:26:14'),
(40, '10', 'HG-13-168', 'PESTEL OPALINE EUWING', 'Feather', 1, 'Fe-Male', '2021-10-06 08:21:52', '2021-10-06 08:26:27'),
(41, '10', 'AB-087', 'GREEN OPALINE EUWING /PALE', 'Feather', 1, 'Male', '2021-10-06 08:21:52', '2021-10-06 08:26:39'),
(42, '10', 'AB-163', 'VOILET OPALINE EUWING', 'Feather', 1, 'Fe-Male', '2021-10-06 08:21:52', '2021-10-06 08:26:53'),
(43, '10', 'AB-071', 'VOILET GREEN OPALINE EUWING', 'Feather', 1, 'Male', '2021-10-06 08:21:52', '2021-10-06 08:27:08'),
(44, '10', 'AAB-25', 'PIED OPALINE', 'Feather', 1, 'Male', '2021-10-06 08:21:52', '2021-10-06 08:27:18'),
(45, '10', 'AB-094', 'BLUE EUWING OPALINE', 'Feather', 1, 'Fe-Male', '2021-10-06 08:21:52', '2021-10-06 08:27:32'),
(46, '10', 'AB-040', 'BLUE EUWING OPALINE', 'Feather', 1, 'Fe-Male', '2021-10-06 08:21:52', '2021-10-06 08:27:43'),
(47, '11', 'RU-23', 'SUNCONURE', 'Feather', 1, 'Male', '2021-10-06 09:58:45', '2021-10-06 09:59:01'),
(50, '12', 'AB-185', 'PARBLUE', 'Feather', 1, 'Fe-Male', '2021-10-06 20:59:44', '2021-10-06 21:00:57'),
(51, '12', 'AB-167', 'PARBLUE', 'Feather', 1, 'Male', '2021-10-06 20:59:44', '2021-10-06 21:01:55'),
(52, '12', 'AB-170', 'PARBLUE', 'Feather', 1, 'Fe-Male', '2021-10-06 20:59:44', '2021-10-06 21:02:48'),
(53, '12', 'AB-159', 'PARBLUE', 'Feather', 1, 'Fe-Male', '2021-10-06 20:59:44', '2021-10-06 21:03:23'),
(54, '12', 'AB-166', 'PARBLUE', 'Feather', 1, 'Male', '2021-10-06 20:59:44', '2021-10-06 21:03:53'),
(55, '12', 'AB-115', 'PARBLUE', 'Feather', 1, 'Male', '2021-10-06 20:59:44', '2021-10-06 21:04:19'),
(56, '12', 'DW-14-04', 'PARBLUE', 'Feather', 1, 'Fe-Male', '2021-10-06 20:59:44', '2021-10-06 21:04:50'),
(57, '12', 'AB-127', 'PARBLUE', 'Feather', 1, 'Male', '2021-10-06 20:59:44', '2021-10-06 21:05:35'),
(60, '12', 'AB-181', 'PARBLUE', 'Feather', 1, 'Fe-Male', '2021-10-06 20:59:45', '2021-10-06 21:07:00'),
(169, '19', 'AB-185', 'PARBLUE', 'Feather', 1, 'Fe-Male', '2021-10-06 20:59:54', '2021-10-07 03:44:11'),
(184, '20', 'NON-RING', 'BLUE FISHERY', 'Feather', 1, 'Male', '2021-10-07 02:56:34', '2021-10-07 03:18:32'),
(185, '20', 'AB-197', 'ALBINO RED EYE', 'Feather', 1, 'Male', '2021-10-07 02:56:34', '2021-10-07 03:16:32'),
(186, '20', 'AB-141', 'ALBINO RED EYE', 'Feather', 1, 'Fe-Male', '2021-10-07 02:56:35', '2021-10-07 03:16:09'),
(187, '20', 'AB-116', 'ALBINO RED EYE', 'Feather', 1, 'Fe-Male', '2021-10-07 02:56:35', '2021-10-07 03:15:14'),
(188, '20', 'SILVER-RING', 'ALBINO RED EYE', 'Feather', 1, 'Male', '2021-10-07 02:56:35', '2021-10-07 03:14:23'),
(189, '20', 'AB-077', 'ALBINO RED EYE', 'Feather', 1, 'Fe-Male', '2021-10-07 02:56:35', '2021-10-07 03:13:59'),
(190, '20', 'AB-008', 'PERSNALTA VOILET PARBLUE/INO', 'Feather', 1, 'Male', '2021-10-07 02:56:35', '2021-10-07 03:12:32'),
(191, '20', '0RANGE-COLOUR-RING', 'PARBLUE/INO', 'Feather', 1, 'Fe-Male', '2021-10-07 02:56:35', '2021-10-07 03:11:58'),
(192, '20', 'KIA-22', 'ALBINO RED EYE', 'Feather', 1, 'Fe-Male', '2021-10-07 02:56:35', '2021-10-07 03:11:31'),
(193, '20', 'NON-RING-', 'ALBINO RED EYE', 'Feather', 1, 'Fe-Male', '2021-10-07 02:56:35', '2021-10-07 03:10:17'),
(194, '20', 'NON-RING', 'PESTELINO PARBLUE', 'Feather', 1, 'Fe-Male', '2021-10-07 02:56:36', '2021-10-07 03:08:54'),
(195, '21', 'AB', 'ALBINO RED EYE', 'Feather', 1, 'Fe-Male', '2021-10-07 03:20:48', '2021-10-07 03:21:23'),
(196, '22', 'AB-21', 'C.T BLUE RING NECK', 'Feather', 1, 'Fe-Male', '2021-10-07 09:57:48', '2021-10-08 10:58:58'),
(197, '22', 'AB-31', 'C.T BLUE RING NECK', 'Feather', 1, 'Fe-Male', '2021-10-07 09:57:48', '2021-10-08 10:59:15'),
(198, '22', 'WC-109', 'PARBLUE', 'Feather', 1, 'Fe-Male', '2021-10-07 09:57:48', '2021-10-08 10:59:51'),
(199, '22', 'AB-116', 'PARBLUE', 'Feather', 1, 'Male', '2021-10-07 09:57:48', '2021-10-08 11:00:12'),
(200, '22', 'AB-171', 'PARBLUE', 'Feather', 1, 'Male', '2021-10-07 09:57:48', '2021-10-08 11:00:33'),
(201, '22', 'HH-0126', 'PARBLUE', 'Feather', 1, 'Male', '2021-10-07 09:57:48', '2021-10-08 11:01:15'),
(202, '22', 'AB-122', 'PARBLUE', 'Feather', 1, 'Male', '2021-10-07 09:57:48', '2021-10-08 11:01:57'),
(203, '22', 'AB-102', 'PARBLUE', 'Feather', 1, 'Male', '2021-10-07 09:57:48', '2021-10-08 11:02:17'),
(204, '23', '33', 'ALBINO RED EYE', 'Feather', 1, 'Fe-Male', '2021-10-07 10:06:44', '2021-10-08 11:02:48'),
(205, '23', '25', 'PARBLUE POSSIBLE /INO', 'Feather', 1, 'Fe-Male', '2021-10-07 10:06:44', '2021-10-08 11:03:03'),
(206, '24', 'AB-039', 'ALBINO RED EYE', 'Feather', 1, 'Fe-Male', '2021-10-07 10:10:35', '2021-10-07 10:11:24'),
(207, '24', '191', 'ALBINO RED EYE', 'Feather', 1, 'Fe-Male', '2021-10-07 10:10:35', '2021-10-07 10:11:05'),
(208, '25', '16', 'GREEN OPALINE', 'Feather', 1, 'Male', '2021-10-07 10:17:07', '2021-10-07 10:19:00'),
(209, '25', 'NON-RING', 'PARBLUE', 'Feather', 1, 'Male', '2021-10-07 10:17:07', '2021-10-07 10:18:24'),
(210, '26', 'NON-RING', 'RAW PARROT', 'Feather', 1, 'Fe-Male', '2021-10-07 10:20:39', '2021-10-07 10:21:16'),
(211, '27', '08', 'GREY PARROT', 'Feather', 1, 'Male', '2021-10-07 10:23:05', '2021-10-07 10:23:30'),
(212, '28', 'VIP-02', 'ALBINO RED EYE', 'Feather', 1, 'Fe-Male', '2021-10-07 10:32:11', '2021-10-07 10:32:35'),
(213, '29', 'AB-174', 'ALBINO RED EYE', 'Feather', 1, 'Male', '2021-10-07 10:36:46', '2021-10-07 10:39:44'),
(214, '29', 'AB-114', 'ALBINO RED EYE', 'Feather', 1, 'Fe-Male', '2021-10-07 10:36:46', '2021-10-07 10:38:45'),
(215, '29', 'AB-054', 'ALBINO RED EYE', 'Feather', 1, 'Fe-Male', '2021-10-07 10:36:46', '2021-10-07 10:38:23'),
(216, '30', 'FA-15', 'PESTELINO', 'Feather', 1, 'Male', '2021-10-07 10:50:36', '2021-10-07 11:00:41'),
(217, '30', 'SU-39', 'DECINO', 'Feather', 1, 'Male', '2021-10-07 10:50:36', '2021-10-07 10:58:41'),
(218, '30', 'AB-050', 'ALBINO RED EYE', 'Feather', 1, 'Male', '2021-10-07 10:50:36', '2021-10-07 10:58:03'),
(219, '30', '007', 'DECINO', 'Feather', 1, 'Fe-Male', '2021-10-07 10:50:37', '2021-10-07 10:56:39'),
(220, '30', 'AB-113', 'ALBINO RED EYE', 'Feather', 1, 'Male', '2021-10-07 10:50:37', '2021-10-07 10:56:07'),
(221, '30', 'HA-04', 'DD-PARBLUE', 'Feather', 1, 'Fe-Male', '2021-10-07 10:50:37', '2021-10-07 10:55:39'),
(222, '30', 'AB-158', 'ALBINO RED EYE', 'Feather', 1, 'Fe-Male', '2021-10-07 10:50:37', '2021-10-07 10:54:40'),
(223, '30', 'AAB-26', 'CREMINO', 'Feather', 1, 'Male', '2021-10-07 10:50:37', '2021-10-07 10:54:22'),
(224, '30', 'AB-02', 'DECINO', 'Feather', 1, 'Male', '2021-10-07 10:50:37', '2021-10-07 10:53:19'),
(225, '30', 'MUZAMIL-600', 'PESTELINO', 'Feather', 1, 'Fe-Male', '2021-10-07 10:50:37', '2021-10-07 10:52:22'),
(226, '30', 'AB-001', 'ALBINO RED EYE', 'Feather', 1, 'Fe-Male', '2021-10-07 10:50:37', '2021-10-07 10:51:41'),
(227, '30', 'AB-156', 'ALBINO RED EYE', 'Feather', 1, 'Male', '2021-10-07 10:50:37', '2021-10-07 10:51:06'),
(228, '31', '11', 'PARBLUE EUWING OPALINE', 'Feather', 1, 'Fe-Male', '2021-10-07 11:11:09', '2021-10-07 11:13:35'),
(229, '31', 'NON-RING', 'LUTINO PERSNALTA', 'Feather', 1, 'Male', '2021-10-07 11:11:11', '2021-10-07 11:13:10'),
(230, '31', '06', 'GREEN OPALINE', 'Feather', 1, 'Male', '2021-10-07 11:11:11', '2021-10-07 11:12:42'),
(231, '31', '02', 'PARBLUE/INO', 'Feather', 1, 'Fe-Male', '2021-10-07 11:11:11', '2021-10-07 11:12:22'),
(232, '31', 'BA-2', 'BLUE FISHERY MISTEY', 'Feather', 1, 'Male', '2021-10-07 11:11:11', '2021-10-07 11:12:01'),
(233, '32', '76-A', 'GREEN OPALINE/BLUE', 'Feather', 1, 'Fe-Male', '2021-10-07 11:17:05', '2021-10-07 11:19:07'),
(234, '32', '74-A', 'GREEN OPLAINE/BLUE', 'Feather', 1, 'Fe-Male', '2021-10-07 11:17:06', '2021-10-07 11:18:12'),
(235, '33', '60', 'YELLOW RING NECK', 'Feather', 1, 'Fe-Male', '2021-10-07 11:31:38', '2021-10-07 11:32:12'),
(236, '33', '08', 'YELLOW RING NECK', 'Feather', 1, 'Fe-Male', '2021-10-07 11:31:38', '2021-10-07 11:31:57'),
(237, '34', 'AAB-89', 'ALBINO RED EYE', 'Feather', 1, 'Fe-Male', '2021-10-07 11:35:31', '2021-10-07 11:36:09'),
(238, '34', 'AB-130', 'ALBINO BLACK EYE/ INO', 'Feather', 1, 'Male', '2021-10-07 11:35:31', '2021-10-07 11:35:56'),
(239, '35', 'AB-75', 'RAW PARROT', 'Feather', 1, 'Fe-Male', '2021-10-07 11:39:52', '2021-10-07 11:40:09'),
(240, '36', 'AB-95', 'YELLOW SIDED CONURE', 'Feather', 1, 'Male', '2021-10-07 11:55:09', '2021-10-07 12:05:08'),
(241, '36', 'AB-85', 'YELLOW SIDED CONURE', 'Feather', 1, 'Fe-Male', '2021-10-07 11:55:09', '2021-10-07 12:03:42'),
(242, '36', 'AB-89', 'YELLOW SIDED CONURE', 'Feather', 1, 'Fe-Male', '2021-10-07 11:55:09', '2021-10-07 12:02:54'),
(243, '36', 'SI-86', 'YELLOW SIDED CONURE', 'Feather', 1, 'Male', '2021-10-07 11:55:09', '2021-10-07 12:02:29'),
(244, '36', 'AB-12-A', 'YELLOW SIDED CONURE', 'Feather', 1, 'Fe-Male', '2021-10-07 11:55:09', '2021-10-07 12:02:07'),
(245, '36', 'AAB-58', 'YELLOW SIDED CONURE', 'Feather', 1, 'Male', '2021-10-07 11:55:09', '2021-10-07 12:01:39'),
(246, '36', 'AB-56', 'YELLOW SIDED CONURE', 'Feather', 1, 'Fe-Male', '2021-10-07 11:55:09', '2021-10-07 12:00:47'),
(247, '36', 'AB-92', 'YELLOW SIDED CONURE', 'Feather', 1, 'Fe-Male', '2021-10-07 11:55:09', '2021-10-07 11:59:34'),
(248, '36', 'AB-86', 'YELLOW SIDED CONURE', 'Feather', 1, 'Male', '2021-10-07 11:55:09', '2021-10-07 11:59:08'),
(249, '36', 'AB-28', 'YELLOW SIDED CONURE', 'Feather', 1, 'Male', '2021-10-07 11:55:09', '2021-10-07 11:58:51'),
(250, '36', 'MIAN-AVIARY-414', 'YELLOW SIDED CONURE', 'Feather', 1, 'Fe-Male', '2021-10-07 11:55:09', '2021-10-07 11:58:26'),
(251, '36', 'AB-100', 'YELLOW SIDED CONURE', 'Feather', 1, 'Male', '2021-10-07 11:55:09', '2021-10-07 11:57:23'),
(252, '36', 'AB-02', 'YELLOW SIDED CONURE', 'Feather', 1, 'Fe-Male', '2021-10-07 11:55:09', '2021-10-07 11:56:59'),
(253, '36', 'AB-98', 'YELLOW SIDED CONURE', 'Feather', 1, 'Male', '2021-10-07 11:55:09', '2021-10-07 11:56:40'),
(254, '36', 'AB-24', 'YELLOW SIDED CONURE', 'Feather', 1, 'Male', '2021-10-07 11:55:09', '2021-10-07 11:55:55'),
(255, '36', 'IS-7', 'YELLOW SIDED CONURE', 'Feather', 1, 'Fe-Male', '2021-10-07 11:55:09', '2021-10-07 11:55:33'),
(256, '37', 'AB-23', 'WHITE RING NECK', 'Feather', 1, 'Fe-Male', '2021-10-07 12:13:29', '2021-10-07 12:14:18'),
(257, '37', '77-39', 'SUNCONURE', 'Feather', 1, 'Fe-Male', '2021-10-07 12:13:29', '2021-10-07 12:13:54'),
(258, '38', 'AB-53', 'PINEAPPLE CONURE', 'Feather', 1, 'Fe-Male', '2021-10-07 12:20:04', '2021-10-07 12:25:46'),
(259, '38', 'AB-37', 'SUNCONURE', 'Feather', 1, 'Fe-Male', '2021-10-07 12:20:05', '2021-10-07 12:25:24'),
(260, '38', 'AB-48', 'SUNCONURE', 'Feather', 1, 'Male', '2021-10-07 12:20:05', '2021-10-07 12:24:40'),
(261, '38', 'AB-21', 'GREEN CHEEK CONURE', 'Feather', 1, 'Rejected', '2021-10-07 12:20:05', '2021-10-07 12:24:22'),
(262, '39', 'AB-53', 'PINEAPPLE CONURE', 'Feather', 1, 'Fe-Male', '2021-10-07 12:20:06', '2021-10-07 12:22:10'),
(263, '39', 'AB-37', 'SUNCONURE', 'Feather', 1, 'Fe-Male', '2021-10-07 12:20:06', '2021-10-07 12:21:38'),
(264, '39', 'AB-48', 'SUNCONURE', 'Feather', 1, 'Male', '2021-10-07 12:20:07', '2021-10-07 12:21:14'),
(265, '39', 'AB-21', 'GREEN CHEEK CONURE', 'Feather', 1, 'Rejected', '2021-10-07 12:20:07', '2021-10-07 12:20:51'),
(266, '40', 'WM-08-52', 'G.PALE FELLOW', 'Feather', 1, 'Fe-Male', '2021-10-07 12:41:32', '2021-10-07 12:46:56'),
(267, '40', 'WM-08-155', 'G.PALE FELLOW', 'Feather', 1, 'Fe-Male', '2021-10-07 12:41:33', '2021-10-07 12:46:39'),
(268, '40', 'BV-02-8192', 'DILUTE OPALINE', 'Feather', 1, 'Fe-Male', '2021-10-07 12:41:34', '2021-10-07 12:46:07'),
(269, '40', 'AAB-44', 'PESTELINO', 'Feather', 1, 'Male', '2021-10-07 12:41:36', '2021-10-07 12:45:42'),
(270, '40', 'GC-09-113', 'VOILET DILUTE', 'Feather', 1, 'Fe-Male', '2021-10-07 12:41:36', '2021-10-07 12:45:18'),
(271, '40', 'AAB-64', 'PALE FELLOW', 'Feather', 1, 'Male', '2021-10-07 12:41:37', '2021-10-07 12:44:51'),
(272, '40', 'AAB-71', 'PARBLUE EUWING', 'Feather', 1, 'Male', '2021-10-07 12:41:39', '2021-10-07 12:44:28'),
(273, '40', 'AAB-88', 'CREMINO', 'Feather', 1, 'Fe-Male', '2021-10-07 12:41:39', '2021-10-07 12:43:36'),
(274, '40', 'HG-13', 'G.DILUTE OPALINE', 'Feather', 1, 'Fe-Male', '2021-10-07 12:41:41', '2021-10-07 12:43:05'),
(275, '40', 'AB-32', 'C.T BLUE RING NECK', 'Feather', 1, 'Male', '2021-10-07 12:41:43', '2021-10-07 12:42:30'),
(276, '40', 'DW-1401', 'PARBLUE EUWING OPALINE', 'Feather', 1, 'Male', '2021-10-07 12:41:43', '2021-10-07 12:42:09'),
(693, '57', 'JC-16-B-381', 'VOILET PARBLUE', 'Feather', 1, 'Fe-Male', '2021-10-07 13:13:17', '2021-10-07 13:37:05'),
(694, '57', 'AAB-23', 'VOILET PARBLUE', 'Feather', 1, 'Fe-Male', '2021-10-07 13:13:17', '2021-10-07 13:36:25'),
(695, '57', 'AAB-13', 'VOILET PARBLUE', 'Feather', 1, 'Male', '2021-10-07 13:13:17', '2021-10-07 13:35:29'),
(696, '57', 'RS-434', 'VOILET PARBLUE', 'Feather', 1, 'Fe-Male', '2021-10-07 13:13:18', '2021-10-07 13:35:03'),
(697, '57', 'AAB-54', 'VOILET PARBLUE', 'Feather', 1, 'Male', '2021-10-07 13:13:18', '2021-10-07 13:34:38'),
(698, '57', 'DL-113', 'VOILET PARBLUE', 'Feather', 1, 'Fe-Male', '2021-10-07 13:13:18', '2021-10-07 13:33:33'),
(699, '57', 'AAB-07', 'VOILET PARBLUE', 'Feather', 1, 'Male', '2021-10-07 13:13:18', '2021-10-07 13:33:12'),
(700, '57', 'XMR-02-19', 'VOILET PARBLUE', 'Feather', 1, 'Fe-Male', '2021-10-07 13:13:18', '2021-10-07 13:32:55'),
(701, '57', 'HG-1392', 'VOILET PARBLUE', 'Feather', 1, 'Fe-Male', '2021-10-07 13:13:18', '2021-10-07 13:32:17'),
(702, '57', 'AAB-46', 'VOILET PARBLUE', 'Feather', 1, 'Fe-Male', '2021-10-07 13:13:18', '2021-10-07 13:31:53'),
(703, '57', 'AAB-76', 'VOILET PARBLUE', 'Feather', 1, 'Fe-Male', '2021-10-07 13:13:19', '2021-10-07 13:31:33'),
(704, '57', 'AAB-49', 'VOILET PARBLUE', 'Feather', 1, 'Male', '2021-10-07 13:13:19', '2021-10-07 13:31:11'),
(705, '57', 'AAB-28', 'VOILET PARBLUE', 'Feather', 1, 'Male', '2021-10-07 13:13:19', '2021-10-07 13:30:47'),
(706, '57', 'AAB-39', 'VOILET PARBLUE', 'Feather', 1, 'Fe-Male', '2021-10-07 13:13:19', '2021-10-07 13:30:17'),
(707, '57', 'AAB-34', 'VOILET PARBLUE', 'Feather', 1, 'Fe-Male', '2021-10-07 13:13:19', '2021-10-07 13:29:57'),
(708, '57', 'JN-12-B-356', 'VOILET EUWING PARBLUE', 'Feather', 1, 'Male', '2021-10-07 13:13:20', '2021-10-07 13:29:35'),
(709, '57', 'AAB-81', 'VOILET EUWING PARBLUE', 'Feather', 1, 'Fe-Male', '2021-10-07 13:13:20', '2021-10-07 13:29:16'),
(710, '57', 'LV-10-158', 'PIED VOILET PARBLUE', 'Feather', 1, 'Male', '2021-10-07 13:13:20', '2021-10-07 13:28:37'),
(711, '57', 'GC-09-105', 'DILUTE MOUVE PARBLUE', 'Feather', 1, 'Male', '2021-10-07 13:13:21', '2021-10-07 13:28:13'),
(712, '57', 'GC-09-109', 'DILUTE MOUVE PARBLUE', 'Feather', 1, 'Male', '2021-10-07 13:13:21', '2021-10-07 13:27:50'),
(713, '57', 'AAB-62', 'DILUTE PARBLUE', 'Feather', 1, 'Male', '2021-10-07 13:13:21', '2021-10-07 13:27:23'),
(714, '57', 'AAB-56', 'BLUE OPALINE', 'Feather', 1, 'Male', '2021-10-07 13:13:22', '2021-10-07 13:26:19'),
(715, '57', 'AAB-65', 'DILUTE GREEN OPALINE', 'Feather', 1, 'Male', '2021-10-07 13:13:22', '2021-10-07 13:25:49'),
(716, '57', 'AAB-05', 'PARBLUE EDGE', 'Feather', 1, 'Fe-Male', '2021-10-07 13:13:22', '2021-10-07 13:25:31'),
(717, '57', 'AAB-20', 'PESTELINO', 'Feather', 1, 'Male', '2021-10-07 13:13:22', '2021-10-07 13:24:50'),
(718, '57', 'AAB-09', 'COBALT OPALINE', 'Feather', 1, 'Male', '2021-10-07 13:13:22', '2021-10-07 13:24:20'),
(719, '58', 'AB-08', 'YELLOW RING NECK', 'Feather', 1, 'Fe-Male', '2021-10-08 12:55:44', '2021-10-08 12:59:05'),
(720, '58', 'AB-22', 'YELLOW RING NECK', 'Feather', 1, 'Fe-Male', '2021-10-08 12:55:44', '2021-10-08 12:59:44'),
(721, '58', 'AB-31', 'YELLOW RING NECK', 'Feather', 1, 'Male', '2021-10-08 12:55:44', '2021-10-08 13:00:09'),
(722, '58', 'AB-28', 'YELLOW RING NECK', 'Feather', 1, 'Male', '2021-10-08 12:55:44', '2021-10-08 13:00:33'),
(723, '58', 'AB-32', 'YELLOW RING NECK', 'Feather', 1, 'Fe-Male', '2021-10-08 12:55:44', '2021-10-08 13:00:56'),
(724, '59', 'AB-164', 'ALBINO RED EYE', 'Feather', 1, 'Male', '2021-10-09 07:29:57', '2021-10-09 07:30:15'),
(725, '60', 'AB-137', 'ALBINO RED EYE', 'Feather', 1, 'Male', '2021-10-09 08:23:59', '2021-10-09 08:49:12'),
(726, '60', 'AB-172', 'ALBINO RED EYE', 'Feather', 1, 'Male', '2021-10-09 08:23:59', '2021-10-09 08:49:00'),
(729, '62', 'AB-071', 'ALBINO RED EYE', 'Feather', 1, 'Male', '2021-10-09 14:14:46', '2021-10-09 14:15:26'),
(730, '62', 'M-11-03', 'PARBLUE/INO', 'Feather', 1, 'Male', '2021-10-09 14:14:46', '2021-10-09 14:15:14'),
(731, '63', 'AB-032', 'PESTELINO', 'Feather', 1, 'Male', '2021-10-09 14:31:32', '2021-10-09 14:33:40'),
(732, '63', 'AB-091', 'ALBINO RED EYE', 'Feather', 1, 'Male', '2021-10-09 14:31:32', '2021-10-09 14:33:23'),
(733, '63', 'DAR-28', 'ALBINO RED EYE', 'Feather', 1, 'Male', '2021-10-09 14:31:32', '2021-10-09 14:32:29'),
(734, '64', 'AB-600', 'ALBINO RED EYE', 'Feather', 1, 'Male', '2021-10-09 14:41:43', '2021-10-09 14:43:18'),
(735, '64', 'AB-113', 'ALBINO RED EYE', 'Feather', 1, 'Fe-Male', '2021-10-09 14:41:43', '2021-10-09 14:42:51'),
(736, '64', 'AB-099', 'ALBINO RED EYE', 'Feather', 1, 'Fe-Male', '2021-10-09 14:41:43', '2021-10-09 14:42:32'),
(737, '64', 'AB-140', 'ALBINO RED EYE', 'Feather', 1, 'Male', '2021-10-09 14:41:43', '2021-10-09 14:42:05'),
(738, '65', 'AB-164', 'ALBINO RED EYE', 'Feather', 1, 'Male', '2021-10-09 14:49:56', '2021-10-09 14:50:17'),
(739, '66', '092', 'PARBLUE PALE FELLOW', 'Feather', 1, 'Male', '2021-10-09 14:51:35', '2021-10-09 14:51:56'),
(740, '67', 'B-61', 'GREEN OPALINE EUWING', 'Feather', 1, 'Male', '2021-10-09 14:53:59', '2021-10-09 14:54:47'),
(741, '68', 'AB-178', 'PALE OPALINE', 'Feather', 1, 'Male', '2021-10-09 15:00:37', '2021-10-09 15:00:57'),
(742, '69', 'KJB-20', 'ALBINO RED EYE', 'Feather', 1, 'Fe-Male', '2021-10-09 15:21:26', '2021-10-09 15:23:10'),
(743, '69', 'PEER-GI-80', 'VOILET PARBLUE', 'Feather', 1, 'Fe-Male', '2021-10-09 15:21:26', '2021-10-09 15:23:25'),
(744, '69', 'AB-132', 'ALBINO RED EYE', 'Feather', 1, 'Male', '2021-10-09 15:21:26', '2021-10-09 15:22:32'),
(745, '69', 'AAB-22', 'ALBINO RED EYE', 'Feather', 1, 'Male', '2021-10-09 15:21:26', '2021-10-09 15:22:14'),
(746, '69', 'KM-93', 'PARBLUE EUWING ', 'Feather', 1, 'Male', '2021-10-09 15:21:26', '2021-10-09 15:21:57'),
(747, '70', '7', 'PARBLUE/INO', 'Feather', 1, 'Fe-Male', '2021-10-09 15:31:16', '2021-10-09 15:49:00'),
(748, '70', '97-KK-77', 'PARBLUE/INO', 'Feather', 1, 'Rejected', '2021-10-09 15:31:16', '2021-10-09 15:46:43'),
(749, '70', '14', 'PARBLUE EUWING/INO', 'Feather', 1, 'Male', '2021-10-09 15:31:16', '2021-10-09 15:46:22'),
(750, '71', 'G-03-189', 'PARBLUE MASK', 'Feather', 1, 'Male', '2021-10-09 16:24:21', '2021-10-09 16:35:31'),
(751, '71', 'HG-13-B-48', 'VOILET PARBLUE MASK', 'Feather', 1, 'Male', '2021-10-09 16:24:21', '2021-10-09 16:32:03'),
(752, '71', 'AB-161', 'PARBLUE EUWING ', 'Feather', 1, 'Male', '2021-10-09 16:24:21', '2021-10-09 16:31:54'),
(753, '71', 'AB-125', 'PARBLUE OPALINE', 'Feather', 1, 'Male', '2021-10-09 16:24:21', '2021-10-09 16:31:24'),
(754, '71', 'AB-075', 'BLUE EUWING', 'Feather', 1, 'Male', '2021-10-09 16:24:21', '2021-10-09 16:31:09'),
(755, '71', 'RG-04-B-129', 'VOILET PARBLUE MASK', 'Feather', 1, 'Male', '2021-10-09 16:24:21', '2021-10-09 16:30:50'),
(756, '71', 'AB-165', 'PARBLUE MASK', 'Feather', 1, 'Male', '2021-10-09 16:24:21', '2021-10-09 16:29:40'),
(757, '71', 'HZ-04-188', 'PARBLUE MASK', 'Feather', 1, 'Fe-Male', '2021-10-09 16:24:21', '2021-10-09 16:29:13'),
(758, '71', 'R002-B-78', 'PARBLUE MASK', 'Feather', 1, 'Fe-Male', '2021-10-09 16:24:21', '2021-10-09 16:28:56'),
(759, '71', 'AB-156', 'VOILET EUWING ', 'Feather', 1, 'Male', '2021-10-09 16:24:21', '2021-10-09 16:28:10'),
(760, '71', 'XMR-02-61', 'MOUVE EUWING', 'Feather', 1, 'Fe-Male', '2021-10-09 16:24:21', '2021-10-09 16:27:39'),
(761, '71', 'AB-192', 'BLUE EUWING ', 'Feather', 1, 'Male', '2021-10-09 16:24:21', '2021-10-09 16:26:19'),
(762, '72', 'AAB-53', 'CREMINO', 'Feather', 0, NULL, '2021-10-09 16:42:31', '2021-10-09 16:42:31');

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
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `owners`
--

INSERT INTO `owners` (`id`, `owner_name`, `owner_phone`, `quality`, `quantity`, `payment_status`, `amount`, `extra_amount`, `discount`, `total`, `created_at`) VALUES
(1, 'ALI RAZA', '03015468360', '0', '2', 'Cash', '1000', '', '0', '1200', '2021-10-05 21:48:54'),
(2, 'M.FAHAD(F.A AVIARY)', '03234636300', '0', '2', 'Cash', '1000', '', '0', '1200', '2021-10-05 21:50:48'),
(3, 'KAMRAN BHATTI', '03004124971', '0', '2', 'Cash', '1000', '', '0', '1200', '2021-10-05 22:00:51'),
(4, 'KAMRAN BHATTI', '03004124971', '0', '1', 'Cash', '1000', '', '', '1000', '2021-10-05 22:02:04'),
(5, 'SHAMAZ J.Z AVIARY', '03094480061', '0', '1', 'Cash', '1000', '', '', '1000', '2021-10-05 22:03:15'),
(6, 'UMAIR', '03234119301', '0', '1', 'Cash', '1000', '', '0', '600', '2021-10-05 22:04:04'),
(7, 'AHSAN', '03214682070', '0', '12', 'Cash', '1000', '', '0', '7200', '2021-10-06 03:17:33'),
(8, 'JAMIL HUSSAIN', '03200496280', '0', '1', 'Cash', '1000', '', '', '1000', '2021-10-06 03:26:44'),
(9, 'SOHAIL', '03245283018', '0', '2', 'Cash', '1000', '', '0', '1200', '2021-10-06 03:32:43'),
(10, 'RAHEEM BAIG', '03214714444', '0', '22', 'Cash', '1000', '', '0', '13200', '2021-10-06 08:21:51'),
(11, 'KASHIF', '03004594624', '0', '1', 'Cash', '1000', '', '', '1000', '2021-10-06 09:58:45'),
(12, 'younas', '03214106033', '0', '9', 'Cash', '1000', '', '0', '8000', '2021-10-06 20:59:44'),
(19, 'younas', '03214106033', '0', '1', 'Cash', '1000', '', '0', '-1000', '2021-10-06 20:59:54'),
(20, 'ADREES', '03369975134', '0', '11', 'Cash', '1000', '', '0', '11000', '2021-10-07 02:56:34'),
(21, 'ADREES', '03369975134', '0', '1', 'Cash', '1000', '', '0', '1000', '2021-10-07 03:20:48'),
(22, 'younas', '03214106033', '0', '8', 'Cash', '600', '', '0', '4800', '2021-10-07 09:57:47'),
(23, 'M.ADEEL MUGHAL', '03002078605', '0', '2', 'Cash', '600', '', '0', '1200', '2021-10-07 10:06:44'),
(24, 'JAVEED', '03014931013', '1', '2', 'Cash', '600', '', '0', '1200', '2021-10-07 10:10:35'),
(25, 'SAJID', '03211676097', '1', '2', 'Cash', '600', '', '0', '1200', '2021-10-07 10:17:07'),
(26, 'HAIDER', '03009487858', '1', '1', 'Cash', '600', '', '0', '600', '2021-10-07 10:20:39'),
(27, 'AHSAN DAR', '03234353707', '1', '1', 'Cash', '600', '', '0', '600', '2021-10-07 10:23:05'),
(28, 'MABASHAL', '03094331200', '1', '1', 'Cash', '600', '', '0', '600', '2021-10-07 10:32:11'),
(29, 'IMRAN ALI', '03053777722', '0', '3', 'Cash', '600', '', '0', '1800', '2021-10-07 10:36:46'),
(30, 'G.BIRDS', '03214742225', '1', '12', 'Cash', '600', '', '0', '7200', '2021-10-07 10:50:36'),
(31, 'SOHAIB', '03087883386', '0', '5', 'Cash', '600', '', '0', '3000', '2021-10-07 11:11:09'),
(32, 'SOHAIL', '03245283018', '1', '2', 'Cash', '600', '', '0', '1200', '2021-10-07 11:17:05'),
(33, 'USMAN', '03214085945', '0', '2', 'Cash', '600', '', '0', '1200', '2021-10-07 11:31:38'),
(34, 'IMRAN BAIG', '03214584644', '1', '2', 'Cash', '600', '', '0', '1200', '2021-10-07 11:35:31'),
(35, 'IMRAN', '03226200005', '0', '1', 'Cash', '600', '', '0', '600', '2021-10-07 11:39:51'),
(36, 'AMIR QAMAR', '03098387890', '0', '16', 'Cash', '600', '', '0', '9600', '2021-10-07 11:55:08'),
(37, 'AHMED', '03228084509', '0', '2', 'Cash', '600', '', '0', '1200', '2021-10-07 12:13:29'),
(38, 'MUSTAFA', '03014747648', '0', '4', 'Cash', '600', '', '0', '2400', '2021-10-07 12:20:03'),
(39, 'MUSTAFA', '03014747648', '0', '4', 'Cash', '600', '', '0', '2400', '2021-10-07 12:20:06'),
(40, 'KAZIM SHAH ', '03214064046', '0', '11', 'Cash', '600', '', '0', '6600', '2021-10-07 12:41:31'),
(57, 'KAZIM SHAH ', '03214064046', '0', '26', 'Cash', '600', '', '0', '15600', '2021-10-07 13:13:17'),
(58, 'HAROON IFTIKHAR', '03008811120', '0', '5', 'Cash', '600', '', '0', '3000', '2021-10-08 12:55:43'),
(59, 'AFZAL', '03004247895', '1', '1', 'Cash', '600', '', '0', '600', '2021-10-09 07:29:57'),
(60, 'FAISAL', '03214410228', '1', '2', 'Cash', '600', '', '0', '1200', '2021-10-09 08:23:59'),
(62, 'FAISAL', '03244100462', '0', '2', 'Cash', '600', '', '0', '1200', '2021-10-09 14:14:46'),
(63, 'KHURRAM ', '03214181711', '0', '3', 'Cash', '600', '', '0', '1800', '2021-10-09 14:31:32'),
(64, 'KHAWAR SAGHEER', '03334973931', '0', '4', 'Cash', '600', '', '0', '2400', '2021-10-09 14:41:42'),
(65, 'AFZAL', '03004247895', '1', '1', 'Cash', '600', '', '0', '600', '2021-10-09 14:49:56'),
(66, 'ALI', '03227284380', '1', '1', 'Cash', '600', '', '0', '600', '2021-10-09 14:51:35'),
(67, 'MOGHIS', '03328003114', '0', '1', 'Cash', '600', '', '', '600', '2021-10-09 14:53:59'),
(68, 'SHEHZAD ', '03337081720', '0', '1', 'Cash', '600', '', '0', '600', '2021-10-09 15:00:37'),
(69, 'CH.MAQSOOD', '03218127517', '0', '5', 'Cash', '600', '', '0', '3000', '2021-10-09 15:21:26'),
(70, 'M.AFZAL', '03245741174', '0', '3', 'Cash', '600', '', '0', '1800', '2021-10-09 15:31:16'),
(71, 'KAZIM SHAH ', '03214064046', '0', '12', 'Cash', '600', '', '0', '7200', '2021-10-09 16:24:21'),
(72, 'AFZAL', '03004247895', '0', '1', 'Cash', '600', '', '', '600', '2021-10-09 16:42:31');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `quality_a` varchar(100) NOT NULL DEFAULT '0',
  `quality_b` varchar(100) NOT NULL DEFAULT '0',
  `lab_no` varchar(100) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `quality_a`, `quality_b`, `lab_no`) VALUES
(1, '600', '600', '11-322-1');

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
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dna_samples`
--
ALTER TABLE `dna_samples`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=763;

--
-- AUTO_INCREMENT for table `login_details`
--
ALTER TABLE `login_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `owners`
--
ALTER TABLE `owners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
