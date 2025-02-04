-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 04, 2025 at 11:42 AM
-- Server version: 8.0.41-0ubuntu0.22.04.1
-- PHP Version: 8.3.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `expertsrcm`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` bigint UNSIGNED NOT NULL,
  `patient_id` bigint UNSIGNED NOT NULL,
  `office_id` bigint UNSIGNED NOT NULL,
  `provider_id` bigint UNSIGNED NOT NULL,
  `appt_date` date NOT NULL,
  `appt_time` time NOT NULL,
  `created_by` bigint UNSIGNED NOT NULL,
  `updated_by` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `csvs`
--

CREATE TABLE `csvs` (
  `id` bigint UNSIGNED NOT NULL,
  `full_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `insurance_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subscriber_id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider_full_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `billing_date` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prcode` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tooth` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `surface` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quadrant` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cost` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `csvs`
--

INSERT INTO `csvs` (`id`, `full_name`, `dob`, `insurance_name`, `subscriber_id`, `provider_full_name`, `billing_date`, `prcode`, `tooth`, `surface`, `quadrant`, `cost`, `created_at`, `updated_at`) VALUES
(1, 'Kafle, Sushil', '1979-12-05', 'Principal Financial Group', '927757423', 'Bhawna Gupta', '2024-12-31', 'D1110', NULL, NULL, NULL, '$150.00 ', '2025-01-20 03:29:25', '2025-01-20 03:29:25'),
(2, 'Kafle, Sushil', '1979-12-05', 'Principal Financial Group', '927757423', 'Bhawna Gupta', '2024-12-31', 'D0120', NULL, NULL, NULL, '$41.00 ', '2025-01-20 03:29:25', '2025-01-20 03:29:25'),
(3, 'Martin, Jaida', '2000-10-03', 'Guardian', 'UAL669722', 'Bhawna Gupta', '2024-12-31', 'D1206', NULL, NULL, NULL, '$41.00 ', '2025-01-20 03:29:25', '2025-01-20 03:29:25'),
(4, 'Martin, Jaida', '2000-10-03', 'Guardian', 'UAL669722', 'Bhawna Gupta', '2024-12-31', 'D0230', NULL, NULL, NULL, '$18.00 ', '2025-01-20 03:29:25', '2025-01-20 03:29:25'),
(5, 'Martin, Jaida', '2000-10-03', 'Guardian', 'UAL669722', 'Bhawna Gupta', '2024-12-31', 'D0220', NULL, NULL, NULL, '$27.00 ', '2025-01-20 03:29:25', '2025-01-20 03:29:25'),
(6, 'Martin, Jaida', '2000-10-03', 'Guardian', 'UAL669722', 'Bhawna Gupta', '2024-12-31', 'D0274', NULL, NULL, NULL, '$54.00 ', '2025-01-20 03:29:25', '2025-01-20 03:29:25'),
(7, 'Martin, Jaida', '2000-10-03', 'Guardian', 'UAL669722', 'Bhawna Gupta', '2024-12-31', 'D1110', NULL, NULL, NULL, '$83.00 ', '2025-01-20 03:29:25', '2025-01-20 03:29:25'),
(8, 'Martin, Jaida', '2000-10-03', 'Guardian', 'UAL669722', 'Bhawna Gupta', '2024-12-31', 'D0120', NULL, NULL, NULL, '$41.00 ', '2025-01-20 03:29:25', '2025-01-20 03:29:25'),
(9, 'Shankar, Anil', '1967-08-19', 'Delta Dental of Ca', '91419403', 'Bhawna Gupta', '2024-12-31', 'D0230', NULL, NULL, NULL, '$15.00 ', '2025-01-20 03:29:25', '2025-01-20 03:29:25'),
(10, 'Shankar, Anil', '1967-08-19', 'Delta Dental of Ca', '91419403', 'Bhawna Gupta', '2024-12-31', 'D0220', NULL, NULL, NULL, '$20.00 ', '2025-01-20 03:29:25', '2025-01-20 03:29:25'),
(11, 'Shankar, Anil', '1967-08-19', 'Delta Dental of Ca', '91419403', 'Bhawna Gupta', '2024-12-31', 'D0274', NULL, NULL, NULL, '$42.00 ', '2025-01-20 03:29:25', '2025-01-20 03:29:25'),
(12, 'Shankar, Anil', '1967-08-19', 'Delta Dental of Ca', '91419403', 'Bhawna Gupta', '2024-12-31', 'D1110', NULL, NULL, NULL, '$81.00 ', '2025-01-20 03:29:25', '2025-01-20 03:29:25'),
(13, 'Shankar, Anil', '1967-08-19', 'Delta Dental of Ca', '91419403', 'Bhawna Gupta', '2024-12-31', 'D0120', NULL, NULL, NULL, '$32.00 ', '2025-01-20 03:29:25', '2025-01-20 03:29:25'),
(14, 'Nguyen, Lorie', '1984-10-23', 'Metlife', '621582176', 'Bhawna Gupta', '2024-12-31', 'D1110', NULL, NULL, NULL, '$83.00 ', '2025-01-20 03:29:25', '2025-01-20 03:29:25'),
(15, 'Nguyen, Lorie', '1984-10-23', 'Metlife', '621582176', 'Bhawna Gupta', '2024-12-31', 'D0210', NULL, NULL, NULL, '$112.00 ', '2025-01-20 03:29:25', '2025-01-20 03:29:25'),
(16, 'Nguyen, Lorie', '1984-10-23', 'Metlife', '621582176', 'Bhawna Gupta', '2024-12-31', 'D0150', NULL, NULL, NULL, '$67.00 ', '2025-01-20 03:29:25', '2025-01-20 03:29:25'),
(17, 'Rodriguez, juan', '1993-03-14', 'Delta Dental of CA', '122794000000', 'Bhawna Gupta', '2024-12-31', 'D0230', NULL, NULL, NULL, '$14.00 ', '2025-01-20 03:29:25', '2025-01-20 03:29:25'),
(18, 'Rodriguez, juan', '1993-03-14', 'Delta Dental of CA', '122794000000', 'Bhawna Gupta', '2024-12-31', 'D0220', NULL, NULL, NULL, '$19.00 ', '2025-01-20 03:29:25', '2025-01-20 03:29:25'),
(19, 'Rodriguez, juan', '1993-03-14', 'Delta Dental of CA', '122794000000', 'Bhawna Gupta', '2024-12-31', 'D0274', NULL, NULL, NULL, '$40.00 ', '2025-01-20 03:29:25', '2025-01-20 03:29:25'),
(20, 'Rodriguez, juan', '1993-03-14', 'Delta Dental of CA', '122794000000', 'Bhawna Gupta', '2024-12-31', 'D1206', NULL, NULL, NULL, '$33.00 ', '2025-01-20 03:29:25', '2025-01-20 03:29:25'),
(21, 'Rodriguez, juan', '1993-03-14', 'Delta Dental of CA', '122794000000', 'Bhawna Gupta', '2024-12-31', 'D1110', NULL, NULL, NULL, '$77.00 ', '2025-01-20 03:29:25', '2025-01-20 03:29:25'),
(22, 'Rodriguez, juan', '1993-03-14', 'Delta Dental of CA', '122794000000', 'Bhawna Gupta', '2024-12-31', 'D0150', NULL, NULL, NULL, '$44.00 ', '2025-01-20 03:29:25', '2025-01-20 03:29:25'),
(23, 'Alcantar, Guadalupe Yasmin', '1997-10-07', 'Aflac Insurance Co.', '610-02-2876', 'Bhawna Gupta', '2024-12-31', 'D2392', '12', 'OD', NULL, '$157.00 ', '2025-01-20 03:29:25', '2025-01-20 03:29:25'),
(24, 'Shankar, Raushal', '2000-03-23', 'Delta Dental of Ca', '91419403', 'Bhawna Gupta', '2024-12-31', 'D1110', NULL, NULL, NULL, '$81.00 ', '2025-01-20 03:29:25', '2025-01-20 03:29:25'),
(25, 'Shankar, Raushal', '2000-03-23', 'Delta Dental of Ca', '91419403', 'Bhawna Gupta', '2024-12-31', 'D0220', NULL, NULL, NULL, '$19.00 ', '2025-01-20 03:29:25', '2025-01-20 03:29:25'),
(26, 'Shankar, Raushal', '2000-03-23', 'Delta Dental of Ca', '91419403', 'Bhawna Gupta', '2024-12-31', 'D0220', NULL, NULL, NULL, '$19.00 ', '2025-01-20 03:29:25', '2025-01-20 03:29:25'),
(27, 'Shankar, Raushal', '2000-03-23', 'Delta Dental of Ca', '91419403', 'Bhawna Gupta', '2024-12-31', 'D0274', NULL, NULL, NULL, '$40.00 ', '2025-01-20 03:29:25', '2025-01-20 03:29:25'),
(28, 'Shankar, Raushal', '2000-03-23', 'Delta Dental of Ca', '91419403', 'Bhawna Gupta', '2024-12-31', 'D0120', NULL, NULL, NULL, '$32.00 ', '2025-01-20 03:29:25', '2025-01-20 03:29:25'),
(29, 'Balaoro, Rouel', '2004-02-11', 'Delta Dental', '118861000000', 'Ayoub Al Alousi', '2025-01-02', 'D0120', NULL, NULL, NULL, '$32.00 ', '2025-01-20 03:29:25', '2025-01-20 03:29:25'),
(30, 'Balaoro, Rouel', '2004-02-11', 'Delta Dental', '118861000000', 'Ayoub Al Alousi', '2025-01-02', 'D0274', NULL, NULL, NULL, '$40.00 ', '2025-01-20 03:29:25', '2025-01-20 03:29:25'),
(31, 'Balaoro, Rouel', '2004-02-11', 'Delta Dental', '118861000000', 'Ayoub Al Alousi', '2025-01-02', 'D1206', NULL, NULL, NULL, '$33.00 ', '2025-01-20 03:29:25', '2025-01-20 03:29:25'),
(32, 'Balaoro, Rouel', '2004-02-11', 'Delta Dental', '118861000000', 'Ayoub Al Alousi', '2025-01-02', 'D0230', NULL, NULL, NULL, '$14.00 ', '2025-01-20 03:29:25', '2025-01-20 03:29:25'),
(33, 'Balaoro, Rouel', '2004-02-11', 'Delta Dental', '118861000000', 'Ayoub Al Alousi', '2025-01-02', 'D0220', NULL, NULL, NULL, '$19.00 ', '2025-01-20 03:29:25', '2025-01-20 03:29:25'),
(34, 'Balaoro, Rouel', '2004-02-11', 'Delta Dental', '118861000000', 'Ayoub Al Alousi', '2025-01-02', 'D1110', NULL, NULL, NULL, '$81.00 ', '2025-01-20 03:29:25', '2025-01-20 03:29:25'),
(35, 'Milanes, Jennielyn', '1997-01-14', 'Delta Dental of Ca.', '621-94-6246', 'Ayoub Al Alousi', '2025-01-02', 'D0230', NULL, NULL, NULL, '$15.00 ', '2025-01-20 03:29:25', '2025-01-20 03:29:25'),
(36, 'Milanes, Jennielyn', '1997-01-14', 'Delta Dental of Ca.', '621-94-6246', 'Ayoub Al Alousi', '2025-01-02', 'D0220', NULL, NULL, NULL, '$20.00 ', '2025-01-20 03:29:25', '2025-01-20 03:29:25'),
(37, 'Milanes, Jennielyn', '1997-01-14', 'Delta Dental of Ca.', '621-94-6246', 'Ayoub Al Alousi', '2025-01-02', 'D0274', NULL, NULL, NULL, '$42.00 ', '2025-01-20 03:29:25', '2025-01-20 03:29:25'),
(38, 'Milanes, Jennielyn', '1997-01-14', 'Delta Dental of Ca.', '621-94-6246', 'Ayoub Al Alousi', '2025-01-02', 'D7953', '16', NULL, NULL, '$400.00 ', '2025-01-20 03:29:25', '2025-01-20 03:29:25'),
(39, 'Milanes, Jennielyn', '1997-01-14', 'Delta Dental of Ca.', '621-94-6246', 'Ayoub Al Alousi', '2025-01-02', 'D1206', NULL, NULL, NULL, '$30.00 ', '2025-01-20 03:29:25', '2025-01-20 03:29:25'),
(40, 'Milanes, Jennielyn', '1997-01-14', 'Delta Dental of Ca.', '621-94-6246', 'Ayoub Al Alousi', '2025-01-02', 'D7210', '16', NULL, NULL, '$183.00 ', '2025-01-20 03:29:25', '2025-01-20 03:29:25'),
(41, 'Milanes, Jennielyn', '1997-01-14', 'Delta Dental of Ca.', '621-94-6246', 'Ayoub Al Alousi', '2025-01-02', 'D0120', NULL, NULL, NULL, '$32.00 ', '2025-01-20 03:29:25', '2025-01-20 03:29:25'),
(42, 'Milanes, Jennielyn', '1997-01-14', 'Delta Dental of Ca.', '621-94-6246', 'Ayoub Al Alousi', '2025-01-02', 'D1110', NULL, NULL, NULL, '$81.00 ', '2025-01-20 03:29:25', '2025-01-20 03:29:25'),
(43, 'Deshpande, Ruhi', '2018-02-27', 'Guardian', '947591564', 'Ayoub Al Alousi', '2025-01-02', 'D0230', NULL, NULL, NULL, '$18.00 ', '2025-01-20 03:29:25', '2025-01-20 03:29:25'),
(44, 'Deshpande, Ruhi', '2018-02-27', 'Guardian', '947591564', 'Ayoub Al Alousi', '2025-01-02', 'D0230', NULL, NULL, NULL, '$18.00 ', '2025-01-20 03:29:25', '2025-01-20 03:29:25'),
(45, 'Deshpande, Ruhi', '2018-02-27', 'Guardian', '947591564', 'Ayoub Al Alousi', '2025-01-02', 'D0220', NULL, NULL, NULL, '$27.00 ', '2025-01-20 03:29:25', '2025-01-20 03:29:25'),
(46, 'Deshpande, Ruhi', '2018-02-27', 'Guardian', '947591564', 'Ayoub Al Alousi', '2025-01-02', 'D0274', NULL, NULL, NULL, '$54.00 ', '2025-01-20 03:29:25', '2025-01-20 03:29:25'),
(47, 'Deshpande, Ruhi', '2018-02-27', 'Guardian', '947591564', 'Ayoub Al Alousi', '2025-01-02', 'D1206', NULL, NULL, NULL, '$41.00 ', '2025-01-20 03:29:25', '2025-01-20 03:29:25'),
(48, 'Deshpande, Ruhi', '2018-02-27', 'Guardian', '947591564', 'Ayoub Al Alousi', '2025-01-02', 'D1110', NULL, NULL, NULL, '$83.00 ', '2025-01-20 03:29:25', '2025-01-20 03:29:25'),
(49, 'Deshpande, Ruhi', '2018-02-27', 'Guardian', '947591564', 'Ayoub Al Alousi', '2025-01-02', 'D0120', NULL, NULL, NULL, '$41.00 ', '2025-01-20 03:29:25', '2025-01-20 03:29:25'),
(50, 'Bautista, Eryn Kristianne', '2005-06-20', 'Delta Dental of Ca', '118990000000', 'Ayoub Al Alousi', '2025-01-02', 'D0230', NULL, NULL, NULL, '$14.00 ', '2025-01-20 03:29:25', '2025-01-20 03:29:25'),
(51, 'Bautista, Eryn Kristianne', '2005-06-20', 'Delta Dental of Ca', '118990000000', 'Ayoub Al Alousi', '2025-01-02', 'D1206', NULL, NULL, NULL, '$33.00 ', '2025-01-20 03:29:25', '2025-01-20 03:29:25'),
(52, 'Bautista, Eryn Kristianne', '2005-06-20', 'Delta Dental of Ca', '118990000000', 'Ayoub Al Alousi', '2025-01-02', 'D0120', NULL, NULL, NULL, '$32.00 ', '2025-01-20 03:29:25', '2025-01-20 03:29:25'),
(53, 'Bautista, Eryn Kristianne', '2005-06-20', 'Delta Dental of Ca', '118990000000', 'Ayoub Al Alousi', '2025-01-02', 'D0274', NULL, NULL, NULL, '$40.00 ', '2025-01-20 03:29:25', '2025-01-20 03:29:25'),
(54, 'Bautista, Eryn Kristianne', '2005-06-20', 'Delta Dental of Ca', '118990000000', 'Ayoub Al Alousi', '2025-01-02', 'D0220', NULL, NULL, NULL, '$19.00 ', '2025-01-20 03:29:25', '2025-01-20 03:29:25'),
(55, 'Bautista, Eryn Kristianne', '2005-06-20', 'Delta Dental of Ca', '118990000000', 'Ayoub Al Alousi', '2025-01-02', 'D1110', NULL, NULL, NULL, '$81.00 ', '2025-01-20 03:29:25', '2025-01-20 03:29:25'),
(56, 'Ramil, Mary Jane', '1969-08-25', 'Delta Dental Ca', '123287000000', 'Bhawna Gupta', '2024-12-31', 'D2391', '30', 'B', NULL, '$118.00 ', '2025-01-20 03:29:25', '2025-01-20 03:29:25'),
(57, 'Ramil, Mary Jane', '1969-08-25', 'Delta Dental Ca', '123287000000', 'Bhawna Gupta', '2024-12-31', 'D2391', '29', 'O', NULL, '$118.00 ', '2025-01-20 03:29:25', '2025-01-20 03:29:25'),
(58, 'Ramil, Mary Jane', '1969-08-25', 'Delta Dental Ca', '123287000000', 'Bhawna Gupta', '2024-12-31', 'D2391', '28', 'O', NULL, '$118.00 ', '2025-01-20 03:29:25', '2025-01-20 03:29:25'),
(59, 'Ramil, Mary Jane', '1969-08-25', 'Delta Dental Ca', '123287000000', 'Bhawna Gupta', '2024-12-31', 'D2391', '21', 'B', NULL, '$118.00 ', '2025-01-20 03:29:25', '2025-01-20 03:29:25');

-- --------------------------------------------------------

--
-- Table structure for table `eligibilities`
--

CREATE TABLE `eligibilities` (
  `id` bigint UNSIGNED NOT NULL,
  `patient_id` bigint UNSIGNED NOT NULL,
  `policy_holder_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_holder_dob` date DEFAULT NULL,
  `insurance_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `network_status` tinyint(1) DEFAULT '0',
  `member_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `group_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `group_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `effective_date` date DEFAULT NULL,
  `claims_filing_limit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `life_time` tinyint(1) DEFAULT '0',
  `waiting_period` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `missing_tooth_clause` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ortho_maximum` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ortho_remaining_maximum` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ortho_age_limit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `annual_maximum` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remaining_maximum` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `plan_year` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deductible_individual` json DEFAULT NULL,
  `deductible_family` json DEFAULT NULL,
  `deductible_ortho` json DEFAULT NULL,
  `deductible_remain_individual` json DEFAULT NULL,
  `deductible_remain_family` json DEFAULT NULL,
  `deductible_remain_ortho` json DEFAULT NULL,
  `deductible_applies_to` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `preventive_waived` enum('Yes','No') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Yes',
  `exam_data` json DEFAULT NULL,
  `fluoride_sealants_data` json DEFAULT NULL,
  `required_preauth` json DEFAULT NULL,
  `coverage_data` json DEFAULT NULL,
  `diagnostic_xray` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `preventive` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `oral_facial_images` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `basic_restorative` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `major_restorative_d2950` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `major_restorative_d2740` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `endo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `perio_d4341` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `perio_d4346` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `perio_d4381` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `oral_surgery` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bonegraft` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prostho` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `implants` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ortho` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nightguard` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extraction` enum('Yes','No') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Yes',
  `crown` enum('yes','no') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'yes',
  `rct` enum('yes','no') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'yes',
  `periodontal` enum('yes','no') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'yes',
  `denture` enum('yes','no') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'yes',
  `exam_codes` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cleaning_codes` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `xray_codes` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `verified_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `insurance_rep_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `insurance_reference_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `additional_notes` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `eligibilities`
--

INSERT INTO `eligibilities` (`id`, `patient_id`, `policy_holder_name`, `policy_holder_dob`, `insurance_name`, `network_status`, `member_id`, `group_name`, `group_number`, `effective_date`, `claims_filing_limit`, `life_time`, `waiting_period`, `missing_tooth_clause`, `ortho_maximum`, `ortho_remaining_maximum`, `ortho_age_limit`, `annual_maximum`, `remaining_maximum`, `plan_year`, `deductible_individual`, `deductible_family`, `deductible_ortho`, `deductible_remain_individual`, `deductible_remain_family`, `deductible_remain_ortho`, `deductible_applies_to`, `preventive_waived`, `exam_data`, `fluoride_sealants_data`, `required_preauth`, `coverage_data`, `diagnostic_xray`, `preventive`, `oral_facial_images`, `basic_restorative`, `major_restorative_d2950`, `major_restorative_d2740`, `endo`, `perio_d4341`, `perio_d4346`, `perio_d4381`, `oral_surgery`, `bonegraft`, `prostho`, `implants`, `ortho`, `nightguard`, `extraction`, `crown`, `rct`, `periodontal`, `denture`, `exam_codes`, `cleaning_codes`, `xray_codes`, `date`, `verified_by`, `insurance_rep_name`, `insurance_reference_number`, `additional_notes`, `created_at`, `updated_at`) VALUES
(1, 1, 'Policy Holder Name', '2025-01-01', 'TEST INS', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '\"\\\"1\\\"\"', '\"\\\"2\\\"\"', '\"\\\"3\\\"\"', '\"\\\"4\\\"\"', '\"\\\"5\\\"\"', '\"\\\"6\\\"\"', NULL, 'No', '\"null\"', '\"null\"', '\"null\"', '\"null\"', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Yes', 'yes', 'yes', 'yes', 'yes', NULL, NULL, NULL, '2025-02-03 10:08:45', 'samir', NULL, NULL, NULL, '2025-02-03 04:38:45', '2025-02-03 04:38:45'),
(2, 2, 'Policy holder name', '2014-10-10', 'TEST INS.', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '\"\\\"ind\\\"\"', '\"\\\"fam\\\"\"', '\"\\\"orh\\\"\"', '\"\\\"ind rem\\\"\"', '\"\\\"fam rem\\\"\"', '\"\\\"otho rem\\\"\"', NULL, 'Yes', '\"{\\\"periodic_exam\\\":{\\\"frequency\\\":\\\"Periodic Exam - D0120 f\\\",\\\"history\\\":\\\"Periodic Exam - D0120\\\\tHistory\\\"},\\\"comp_exam\\\":{\\\"frequency\\\":\\\"D0150 frequency\\\",\\\"history\\\":\\\"D0150 history\\\"},\\\"consultation\\\":{\\\"frequency\\\":\\\"9310 f\\\",\\\"history\\\":\\\"9310 h\\\"},\\\"fac_photographic\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"prophy\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"bw\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"fmx_pano\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"crowns\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"dentures\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"nightguard\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"perio_srp\\\":{\\\"frequency\\\":\\\"4341 f\\\",\\\"history\\\":\\\"4341h\\\"},\\\"perio_maintenance\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"d4381\\\":{\\\"frequency\\\":\\\"D4381F\\\",\\\"history\\\":\\\"D4381H\\\"}}\"', '\"{\\\"D1208_D1206\\\":{\\\"frequency\\\":\\\"d1208 d1206 f\\\",\\\"history\\\":\\\"d1208 d1206 history\\\",\\\"age_limit\\\":\\\"d1208 d1206  aL\\\"},\\\"D1351\\\":{\\\"frequency\\\":\\\"D1351 F\\\",\\\"history\\\":\\\"D1351 H\\\",\\\"age_limit\\\":\\\"D1351 A\\\"}}\"', '\"null\"', '\"null\"', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Yes', 'yes', 'yes', 'yes', 'yes', NULL, NULL, NULL, '2025-02-04 07:28:46', 'samir', NULL, NULL, NULL, '2025-02-04 01:58:46', '2025-02-04 01:58:46'),
(3, 3, NULL, NULL, 'TEST INS', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Yes', '\"{\\\"periodic_exam\\\":{\\\"frequency\\\":\\\"Periodic Exam - D0120 f\\\",\\\"history\\\":\\\"Periodic Exam - D0120\\\\tHistory\\\"},\\\"comp_exam\\\":{\\\"frequency\\\":\\\"D0150 frequency\\\",\\\"history\\\":\\\"D0150 history\\\"},\\\"consultation\\\":{\\\"frequency\\\":\\\"9310 f\\\",\\\"history\\\":\\\"9310 h\\\"},\\\"fac_photographic\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"prophy\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"bw\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"fmx_pano\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"crowns\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"dentures\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"nightguard\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"perio_srp\\\":{\\\"frequency\\\":\\\"4341 f\\\",\\\"history\\\":\\\"4341h\\\"},\\\"perio_maintenance\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"d4381\\\":{\\\"frequency\\\":\\\"D4381F\\\",\\\"history\\\":\\\"D4381H\\\"}}\"', '\"null\"', '\"null\"', '\"null\"', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Yes', 'yes', 'yes', 'yes', 'yes', NULL, NULL, NULL, '2025-02-04 08:49:23', 'samir', NULL, NULL, NULL, '2025-02-04 03:19:23', '2025-02-04 03:19:23'),
(4, 2, 'Policy holder name', NULL, 'TEST INS.', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Yes', '\"{\\\"periodic_exam\\\":{\\\"frequency\\\":\\\"Periodic Exam - D0120 f\\\",\\\"history\\\":\\\"Periodic Exam - D0120\\\\tHistory\\\"},\\\"comp_exam\\\":{\\\"frequency\\\":\\\"D0150 frequency\\\",\\\"history\\\":\\\"D0150 history\\\"},\\\"consultation\\\":{\\\"frequency\\\":\\\"9310 f\\\",\\\"history\\\":\\\"9310 h\\\"},\\\"fac_photographic\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"prophy\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"bw\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"fmx_pano\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"crowns\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"dentures\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"nightguard\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"perio_srp\\\":{\\\"frequency\\\":\\\"4341 f\\\",\\\"history\\\":\\\"4341h\\\"},\\\"perio_maintenance\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"d4381\\\":{\\\"frequency\\\":\\\"D4381F\\\",\\\"history\\\":\\\"D4381H\\\"}}\"', '\"null\"', '\"null\"', '\"null\"', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Yes', 'yes', 'yes', 'yes', 'yes', NULL, NULL, NULL, '2025-02-04 10:15:56', 'samir', NULL, NULL, NULL, '2025-02-04 04:45:56', '2025-02-04 04:45:56'),
(5, 2, 'Policy holder name', NULL, 'TEST INS.', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Yes', '\"{\\\"periodic_exam\\\":{\\\"frequency\\\":\\\"Periodic Exam - D0120 f\\\",\\\"history\\\":\\\"Periodic Exam - D0120\\\\tHistory\\\"},\\\"comp_exam\\\":{\\\"frequency\\\":\\\"D0150 frequency\\\",\\\"history\\\":\\\"D0150 history\\\"},\\\"consultation\\\":{\\\"frequency\\\":\\\"9310 f\\\",\\\"history\\\":\\\"9310 h\\\"},\\\"fac_photographic\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"prophy\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"bw\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"fmx_pano\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"crowns\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"dentures\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"nightguard\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"perio_srp\\\":{\\\"frequency\\\":\\\"4341 f\\\",\\\"history\\\":\\\"4341h\\\"},\\\"perio_maintenance\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"d4381\\\":{\\\"frequency\\\":\\\"D4381F\\\",\\\"history\\\":\\\"D4381H\\\"}}\"', '\"{\\\"D1208_D1206\\\":{\\\"frequency\\\":\\\"d1208 d1206 f\\\",\\\"history\\\":\\\"d1208 d1206 history\\\",\\\"age_limit\\\":\\\"d1208 d1206  aL\\\"},\\\"D1351\\\":{\\\"frequency\\\":\\\"D1351 F\\\",\\\"history\\\":\\\"D1351 H\\\",\\\"age_limit\\\":\\\"D1351 A\\\"}}\"', '\"null\"', '\"null\"', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Yes', 'yes', 'yes', 'yes', 'yes', NULL, NULL, NULL, '2025-02-04 11:01:45', 'samir', NULL, NULL, NULL, '2025-02-04 05:31:45', '2025-02-04 05:31:45');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `insurances`
--

CREATE TABLE `insurances` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_ext` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fax` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fax_ext` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zipcode` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` bigint UNSIGNED DEFAULT NULL,
  `updated_by` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `insurances`
--

INSERT INTO `insurances` (`id`, `name`, `phone`, `phone_ext`, `fax`, `fax_ext`, `website`, `email`, `address1`, `address2`, `city`, `state`, `zipcode`, `country`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'TEST INS', '9898183457', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '382418', NULL, 1, 1, '2025-01-17 04:36:34', '2025-01-17 04:39:31'),
(2, 'test ins 2', '8160107108', NULL, NULL, NULL, 'http://www.ins.com', 'testins@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2025-01-17 04:40:36', '2025-01-17 04:40:36'),
(3, 'Principal Financial Group', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-01-20 05:53:35', '2025-01-20 05:53:35'),
(4, 'Guardian', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2025-01-20 05:56:25', '2025-01-20 05:56:25'),
(5, 'Delta Dental of Ca', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2025-01-20 05:56:25', '2025-01-20 05:56:25'),
(6, 'Metlife', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2025-01-20 05:56:25', '2025-01-20 05:56:25'),
(7, 'Aflac Insurance Co.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2025-01-20 05:56:25', '2025-01-20 05:56:25'),
(8, 'Delta Dental', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2025-01-20 05:56:25', '2025-01-20 05:56:25'),
(9, 'Delta Dental of Ca.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2025-01-20 05:56:25', '2025-01-20 05:56:25'),
(10, 'Delta Dental Ca', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2025-01-20 05:56:25', '2025-01-20 05:56:25');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2025_01_13_065633_create_offices_table', 1),
(6, '2025_01_14_045831_create_offices_table', 2),
(7, '2025_01_17_095315_create_insurances_table', 3),
(8, '2025_01_17_151344_create_csv_table', 4),
(9, '2025_01_18_181645_create_patients_table', 4),
(10, '2025_01_18_182834_create_providers_table', 4),
(11, '2025_01_20_111313_create_procedures_table', 5),
(12, '2025_01_23_105404_create_appointments_table', 6),
(13, '2025_01_23_141850_create_temp_eligibility_patients_table', 7),
(15, '2025_01_26_091504_create_eligibilities_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `offices`
--

CREATE TABLE `offices` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_ext` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fax` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fax_ext` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zipcode` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `npi` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tin` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `taxonomy_number` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` bigint UNSIGNED DEFAULT NULL,
  `updated_by` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `offices`
--

INSERT INTO `offices` (`id`, `name`, `phone`, `phone_ext`, `fax`, `fax_ext`, `website`, `email`, `address1`, `address2`, `city`, `state`, `zipcode`, `country`, `npi`, `tin`, `taxonomy_number`, `logo`, `photo`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'TEST', '+918160107108', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2025-01-17 03:10:46', '2025-01-17 03:48:45'),
(2, 'TEST 2', '9898183457', '123234', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2025-01-17 03:24:54', '2025-01-17 03:50:38');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` bigint UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `middle_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `age` int DEFAULT NULL,
  `gender` enum('male','female','other') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cell_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `responsible_party` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `primary_dentist` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fee_schedule` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `preferred_clinic` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` bigint UNSIGNED DEFAULT NULL,
  `updated_by` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `first_name`, `middle_name`, `last_name`, `dob`, `age`, `gender`, `email`, `cell_phone`, `responsible_party`, `primary_dentist`, `fee_schedule`, `preferred_clinic`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Sushil', '', 'Kafle', '1979-12-05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-01-20 05:53:35', '2025-01-20 05:53:35'),
(2, 'Jaida', '', 'Martin', '2000-10-03', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-01-20 05:56:25', '2025-01-20 05:56:25'),
(3, 'Anil', '', 'Shankar', '1967-08-19', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-01-20 05:56:25', '2025-01-20 05:56:25'),
(4, 'Lorie', '', 'Nguyen', '1984-10-23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-01-20 05:56:25', '2025-01-20 05:56:25'),
(5, 'juan', '', 'Rodriguez', '1993-03-14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-01-20 05:56:25', '2025-01-20 05:56:25'),
(6, 'Guadalupe', 'Yasmin', 'Alcantar', '1997-10-07', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-01-20 05:56:25', '2025-01-20 05:56:25'),
(7, 'Raushal', '', 'Shankar', '2000-03-23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-01-20 05:56:25', '2025-01-20 05:56:25'),
(8, 'Rouel', '', 'Balaoro', '2004-02-11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-01-20 05:56:25', '2025-01-20 05:56:25'),
(9, 'Jennielyn', '', 'Milanes', '1997-01-14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-01-20 05:56:25', '2025-01-20 05:56:25'),
(10, 'Ruhi', '', 'Deshpande', '2018-02-27', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-01-20 05:56:25', '2025-01-20 05:56:25'),
(11, 'Eryn', 'Kristianne', 'Bautista', '2005-06-20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-01-20 05:56:25', '2025-01-20 05:56:25'),
(12, 'Mary', 'Jane', 'Ramil', '1969-08-25', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-01-20 05:56:25', '2025-01-20 05:56:25');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `procedures`
--

CREATE TABLE `procedures` (
  `id` bigint UNSIGNED NOT NULL,
  `patient_id` bigint UNSIGNED NOT NULL,
  `insurance_id` bigint UNSIGNED NOT NULL,
  `provider_id` bigint UNSIGNED NOT NULL,
  `dos` date NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tooth` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `surface` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quadrant` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` decimal(10,2) NOT NULL,
  `created_by` bigint UNSIGNED NOT NULL,
  `updated_by` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `procedures`
--

INSERT INTO `procedures` (`id`, `patient_id`, `insurance_id`, `provider_id`, `dos`, `code`, `tooth`, `surface`, `quadrant`, `amount`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 1, '2024-12-31', NULL, NULL, NULL, NULL, '150.00', 1, NULL, '2025-01-20 05:56:25', '2025-01-20 05:56:25'),
(2, 1, 3, 1, '2024-12-31', NULL, NULL, NULL, NULL, '41.00', 1, NULL, '2025-01-20 05:56:25', '2025-01-20 05:56:25'),
(3, 2, 4, 1, '2024-12-31', NULL, NULL, NULL, NULL, '41.00', 1, NULL, '2025-01-20 05:56:25', '2025-01-20 05:56:25'),
(4, 2, 4, 1, '2024-12-31', NULL, NULL, NULL, NULL, '18.00', 1, NULL, '2025-01-20 05:56:25', '2025-01-20 05:56:25'),
(5, 2, 4, 1, '2024-12-31', NULL, NULL, NULL, NULL, '27.00', 1, NULL, '2025-01-20 05:56:25', '2025-01-20 05:56:25'),
(6, 2, 4, 1, '2024-12-31', NULL, NULL, NULL, NULL, '54.00', 1, NULL, '2025-01-20 05:56:25', '2025-01-20 05:56:25'),
(7, 2, 4, 1, '2024-12-31', NULL, NULL, NULL, NULL, '83.00', 1, NULL, '2025-01-20 05:56:25', '2025-01-20 05:56:25'),
(8, 2, 4, 1, '2024-12-31', NULL, NULL, NULL, NULL, '41.00', 1, NULL, '2025-01-20 05:56:25', '2025-01-20 05:56:25'),
(9, 3, 5, 1, '2024-12-31', NULL, NULL, NULL, NULL, '15.00', 1, NULL, '2025-01-20 05:56:25', '2025-01-20 05:56:25'),
(10, 3, 5, 1, '2024-12-31', NULL, NULL, NULL, NULL, '20.00', 1, NULL, '2025-01-20 05:56:25', '2025-01-20 05:56:25'),
(11, 3, 5, 1, '2024-12-31', NULL, NULL, NULL, NULL, '42.00', 1, NULL, '2025-01-20 05:56:25', '2025-01-20 05:56:25'),
(12, 3, 5, 1, '2024-12-31', NULL, NULL, NULL, NULL, '81.00', 1, NULL, '2025-01-20 05:56:25', '2025-01-20 05:56:25'),
(13, 3, 5, 1, '2024-12-31', NULL, NULL, NULL, NULL, '32.00', 1, NULL, '2025-01-20 05:56:25', '2025-01-20 05:56:25'),
(14, 4, 6, 1, '2024-12-31', NULL, NULL, NULL, NULL, '83.00', 1, NULL, '2025-01-20 05:56:25', '2025-01-20 05:56:25'),
(15, 4, 6, 1, '2024-12-31', NULL, NULL, NULL, NULL, '112.00', 1, NULL, '2025-01-20 05:56:25', '2025-01-20 05:56:25'),
(16, 4, 6, 1, '2024-12-31', NULL, NULL, NULL, NULL, '67.00', 1, NULL, '2025-01-20 05:56:25', '2025-01-20 05:56:25'),
(17, 5, 5, 1, '2024-12-31', NULL, NULL, NULL, NULL, '14.00', 1, NULL, '2025-01-20 05:56:25', '2025-01-20 05:56:25'),
(18, 5, 5, 1, '2024-12-31', NULL, NULL, NULL, NULL, '19.00', 1, NULL, '2025-01-20 05:56:25', '2025-01-20 05:56:25'),
(19, 5, 5, 1, '2024-12-31', NULL, NULL, NULL, NULL, '40.00', 1, NULL, '2025-01-20 05:56:25', '2025-01-20 05:56:25'),
(20, 5, 5, 1, '2024-12-31', NULL, NULL, NULL, NULL, '33.00', 1, NULL, '2025-01-20 05:56:25', '2025-01-20 05:56:25'),
(21, 5, 5, 1, '2024-12-31', NULL, NULL, NULL, NULL, '77.00', 1, NULL, '2025-01-20 05:56:25', '2025-01-20 05:56:25'),
(22, 5, 5, 1, '2024-12-31', NULL, NULL, NULL, NULL, '44.00', 1, NULL, '2025-01-20 05:56:25', '2025-01-20 05:56:25'),
(23, 6, 7, 1, '2024-12-31', NULL, '12', 'OD', NULL, '157.00', 1, NULL, '2025-01-20 05:56:25', '2025-01-20 05:56:25'),
(24, 7, 5, 1, '2024-12-31', NULL, NULL, NULL, NULL, '81.00', 1, NULL, '2025-01-20 05:56:25', '2025-01-20 05:56:25'),
(25, 7, 5, 1, '2024-12-31', NULL, NULL, NULL, NULL, '19.00', 1, NULL, '2025-01-20 05:56:25', '2025-01-20 05:56:25'),
(26, 7, 5, 1, '2024-12-31', NULL, NULL, NULL, NULL, '19.00', 1, NULL, '2025-01-20 05:56:25', '2025-01-20 05:56:25'),
(27, 7, 5, 1, '2024-12-31', NULL, NULL, NULL, NULL, '40.00', 1, NULL, '2025-01-20 05:56:25', '2025-01-20 05:56:25'),
(28, 7, 5, 1, '2024-12-31', NULL, NULL, NULL, NULL, '32.00', 1, NULL, '2025-01-20 05:56:25', '2025-01-20 05:56:25'),
(29, 8, 8, 2, '2025-01-02', NULL, NULL, NULL, NULL, '32.00', 1, NULL, '2025-01-20 05:56:25', '2025-01-20 05:56:25'),
(30, 8, 8, 2, '2025-01-02', NULL, NULL, NULL, NULL, '40.00', 1, NULL, '2025-01-20 05:56:25', '2025-01-20 05:56:25'),
(31, 8, 8, 2, '2025-01-02', NULL, NULL, NULL, NULL, '33.00', 1, NULL, '2025-01-20 05:56:25', '2025-01-20 05:56:25'),
(32, 8, 8, 2, '2025-01-02', NULL, NULL, NULL, NULL, '14.00', 1, NULL, '2025-01-20 05:56:25', '2025-01-20 05:56:25'),
(33, 8, 8, 2, '2025-01-02', NULL, NULL, NULL, NULL, '19.00', 1, NULL, '2025-01-20 05:56:25', '2025-01-20 05:56:25'),
(34, 8, 8, 2, '2025-01-02', NULL, NULL, NULL, NULL, '81.00', 1, NULL, '2025-01-20 05:56:25', '2025-01-20 05:56:25'),
(35, 9, 9, 2, '2025-01-02', NULL, NULL, NULL, NULL, '15.00', 1, NULL, '2025-01-20 05:56:25', '2025-01-20 05:56:25'),
(36, 9, 9, 2, '2025-01-02', NULL, NULL, NULL, NULL, '20.00', 1, NULL, '2025-01-20 05:56:25', '2025-01-20 05:56:25'),
(37, 9, 9, 2, '2025-01-02', NULL, NULL, NULL, NULL, '42.00', 1, NULL, '2025-01-20 05:56:25', '2025-01-20 05:56:25'),
(38, 9, 9, 2, '2025-01-02', NULL, '16', NULL, NULL, '400.00', 1, NULL, '2025-01-20 05:56:25', '2025-01-20 05:56:25'),
(39, 9, 9, 2, '2025-01-02', NULL, NULL, NULL, NULL, '30.00', 1, NULL, '2025-01-20 05:56:25', '2025-01-20 05:56:25'),
(40, 9, 9, 2, '2025-01-02', NULL, '16', NULL, NULL, '183.00', 1, NULL, '2025-01-20 05:56:25', '2025-01-20 05:56:25'),
(41, 9, 9, 2, '2025-01-02', NULL, NULL, NULL, NULL, '32.00', 1, NULL, '2025-01-20 05:56:25', '2025-01-20 05:56:25'),
(42, 9, 9, 2, '2025-01-02', NULL, NULL, NULL, NULL, '81.00', 1, NULL, '2025-01-20 05:56:25', '2025-01-20 05:56:25'),
(43, 10, 4, 2, '2025-01-02', NULL, NULL, NULL, NULL, '18.00', 1, NULL, '2025-01-20 05:56:25', '2025-01-20 05:56:25'),
(44, 10, 4, 2, '2025-01-02', NULL, NULL, NULL, NULL, '18.00', 1, NULL, '2025-01-20 05:56:25', '2025-01-20 05:56:25'),
(45, 10, 4, 2, '2025-01-02', NULL, NULL, NULL, NULL, '27.00', 1, NULL, '2025-01-20 05:56:25', '2025-01-20 05:56:25'),
(46, 10, 4, 2, '2025-01-02', NULL, NULL, NULL, NULL, '54.00', 1, NULL, '2025-01-20 05:56:25', '2025-01-20 05:56:25'),
(47, 10, 4, 2, '2025-01-02', NULL, NULL, NULL, NULL, '41.00', 1, NULL, '2025-01-20 05:56:25', '2025-01-20 05:56:25'),
(48, 10, 4, 2, '2025-01-02', NULL, NULL, NULL, NULL, '83.00', 1, NULL, '2025-01-20 05:56:25', '2025-01-20 05:56:25'),
(49, 10, 4, 2, '2025-01-02', NULL, NULL, NULL, NULL, '41.00', 1, NULL, '2025-01-20 05:56:25', '2025-01-20 05:56:25'),
(50, 11, 5, 2, '2025-01-02', NULL, NULL, NULL, NULL, '14.00', 1, NULL, '2025-01-20 05:56:25', '2025-01-20 05:56:25'),
(51, 11, 5, 2, '2025-01-02', NULL, NULL, NULL, NULL, '33.00', 1, NULL, '2025-01-20 05:56:25', '2025-01-20 05:56:25'),
(52, 11, 5, 2, '2025-01-02', NULL, NULL, NULL, NULL, '32.00', 1, NULL, '2025-01-20 05:56:25', '2025-01-20 05:56:25'),
(53, 11, 5, 2, '2025-01-02', NULL, NULL, NULL, NULL, '40.00', 1, NULL, '2025-01-20 05:56:25', '2025-01-20 05:56:25'),
(54, 11, 5, 2, '2025-01-02', NULL, NULL, NULL, NULL, '19.00', 1, NULL, '2025-01-20 05:56:25', '2025-01-20 05:56:25'),
(55, 11, 5, 2, '2025-01-02', NULL, NULL, NULL, NULL, '81.00', 1, NULL, '2025-01-20 05:56:25', '2025-01-20 05:56:25'),
(56, 12, 10, 1, '2024-12-31', NULL, '30', 'B', NULL, '118.00', 1, NULL, '2025-01-20 05:56:25', '2025-01-20 05:56:25'),
(57, 12, 10, 1, '2024-12-31', NULL, '29', 'O', NULL, '118.00', 1, NULL, '2025-01-20 05:56:25', '2025-01-20 05:56:25'),
(58, 12, 10, 1, '2024-12-31', NULL, '28', 'O', NULL, '118.00', 1, NULL, '2025-01-20 05:56:25', '2025-01-20 05:56:25'),
(59, 12, 10, 1, '2024-12-31', NULL, '21', 'B', NULL, '118.00', 1, NULL, '2025-01-20 05:56:25', '2025-01-20 05:56:25');

-- --------------------------------------------------------

--
-- Table structure for table `providers`
--

CREATE TABLE `providers` (
  `id` bigint UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `middle_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date DEFAULT NULL,
  `age` int DEFAULT NULL,
  `gender` enum('male','female','other') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cell_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` bigint UNSIGNED DEFAULT NULL,
  `updated_by` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `providers`
--

INSERT INTO `providers` (`id`, `first_name`, `middle_name`, `last_name`, `dob`, `age`, `gender`, `email`, `cell_phone`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Bhawna', NULL, 'Gupta', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-01-20 05:53:35', '2025-01-20 05:53:35'),
(2, 'Ayoub', NULL, 'Al Alousi', NULL, NULL, NULL, NULL, NULL, 1, NULL, '2025-01-20 05:56:25', '2025-01-20 05:56:25');

-- --------------------------------------------------------

--
-- Table structure for table `temp_eligibility_patients`
--

CREATE TABLE `temp_eligibility_patients` (
  `id` bigint UNSIGNED NOT NULL,
  `appt_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `appt_time` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `full_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_birth` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hoh_full_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prim_subscriber` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prim_carrier_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prim_subscriber_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sec_carrier_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sec_subscriber_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `clinic` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'samir', 'samir@gmail.com', NULL, '$2y$12$6vxwUyLOc3iJELWgmeE5oew3MNzvuo/ApUSxmGfxh6zJb8rEcbhu6', NULL, '2025-01-13 00:45:18', '2025-01-13 00:45:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `appointments_patient_id_foreign` (`patient_id`),
  ADD KEY `appointments_office_id_foreign` (`office_id`),
  ADD KEY `appointments_provider_id_foreign` (`provider_id`),
  ADD KEY `appointments_created_by_foreign` (`created_by`),
  ADD KEY `appointments_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `csvs`
--
ALTER TABLE `csvs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eligibilities`
--
ALTER TABLE `eligibilities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `eligibilities_patient_id_foreign` (`patient_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `insurances`
--
ALTER TABLE `insurances`
  ADD PRIMARY KEY (`id`),
  ADD KEY `insurances_created_by_foreign` (`created_by`),
  ADD KEY `insurances_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offices`
--
ALTER TABLE `offices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `offices_created_by_foreign` (`created_by`),
  ADD KEY `offices_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patients_created_by_foreign` (`created_by`),
  ADD KEY `patients_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `procedures`
--
ALTER TABLE `procedures`
  ADD PRIMARY KEY (`id`),
  ADD KEY `procedures_patient_id_foreign` (`patient_id`),
  ADD KEY `procedures_insurance_id_foreign` (`insurance_id`),
  ADD KEY `procedures_provider_id_foreign` (`provider_id`),
  ADD KEY `procedures_created_by_foreign` (`created_by`),
  ADD KEY `procedures_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `providers`
--
ALTER TABLE `providers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `providers_created_by_foreign` (`created_by`),
  ADD KEY `providers_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `temp_eligibility_patients`
--
ALTER TABLE `temp_eligibility_patients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `csvs`
--
ALTER TABLE `csvs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `eligibilities`
--
ALTER TABLE `eligibilities`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `insurances`
--
ALTER TABLE `insurances`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `offices`
--
ALTER TABLE `offices`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `procedures`
--
ALTER TABLE `procedures`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `providers`
--
ALTER TABLE `providers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `temp_eligibility_patients`
--
ALTER TABLE `temp_eligibility_patients`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `appointments_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `appointments_office_id_foreign` FOREIGN KEY (`office_id`) REFERENCES `offices` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `appointments_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `appointments_provider_id_foreign` FOREIGN KEY (`provider_id`) REFERENCES `providers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `appointments_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `eligibilities`
--
ALTER TABLE `eligibilities`
  ADD CONSTRAINT `eligibilities_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `insurances`
--
ALTER TABLE `insurances`
  ADD CONSTRAINT `insurances_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `insurances_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `offices`
--
ALTER TABLE `offices`
  ADD CONSTRAINT `offices_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `offices_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `patients`
--
ALTER TABLE `patients`
  ADD CONSTRAINT `patients_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `patients_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `procedures`
--
ALTER TABLE `procedures`
  ADD CONSTRAINT `procedures_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `procedures_insurance_id_foreign` FOREIGN KEY (`insurance_id`) REFERENCES `insurances` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `procedures_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `procedures_provider_id_foreign` FOREIGN KEY (`provider_id`) REFERENCES `providers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `procedures_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `providers`
--
ALTER TABLE `providers`
  ADD CONSTRAINT `providers_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `providers_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
