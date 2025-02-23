-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 23, 2025 at 05:43 PM
-- Server version: 5.7.36
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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

DROP TABLE IF EXISTS `appointments`;
CREATE TABLE IF NOT EXISTS `appointments` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `patient_id` bigint(20) UNSIGNED NOT NULL,
  `office_id` bigint(20) UNSIGNED NOT NULL,
  `provider_id` bigint(20) UNSIGNED NOT NULL,
  `appt_date` date NOT NULL,
  `appt_time` time NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `appointments_patient_id_foreign` (`patient_id`),
  KEY `appointments_office_id_foreign` (`office_id`),
  KEY `appointments_provider_id_foreign` (`provider_id`),
  KEY `appointments_created_by_foreign` (`created_by`),
  KEY `appointments_updated_by_foreign` (`updated_by`)
) ENGINE=MyISAM AUTO_INCREMENT=88 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `patient_id`, `office_id`, `provider_id`, `appt_date`, `appt_time`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, '2025-02-08', '11:00:00', 'active', 2, NULL, '2025-02-12 09:08:28', '2025-02-12 09:08:28'),
(2, 2, 1, 2, '2025-02-08', '15:00:00', 'active', 2, NULL, '2025-02-12 09:08:28', '2025-02-12 09:08:28'),
(3, 3, 1, 2, '2025-02-08', '14:00:00', 'active', 2, NULL, '2025-02-12 09:08:28', '2025-02-12 09:08:28'),
(4, 4, 1, 2, '2025-02-08', '12:00:00', 'active', 2, NULL, '2025-02-12 09:08:28', '2025-02-12 09:08:28'),
(5, 5, 1, 2, '2025-02-08', '09:00:00', 'active', 2, NULL, '2025-02-12 09:08:28', '2025-02-12 09:08:28'),
(6, 6, 1, 2, '2025-02-08', '09:30:00', 'active', 2, NULL, '2025-02-12 09:08:28', '2025-02-12 09:08:28'),
(7, 7, 1, 3, '2025-02-08', '10:20:00', 'active', 2, NULL, '2025-02-12 09:08:28', '2025-02-12 09:08:28'),
(8, 7, 1, 1, '2025-02-08', '09:30:00', 'active', 2, NULL, '2025-02-12 09:08:28', '2025-02-12 09:08:28'),
(9, 8, 1, 1, '2025-02-08', '09:00:00', 'active', 2, NULL, '2025-02-12 09:08:28', '2025-02-12 09:08:28'),
(10, 9, 1, 2, '2025-02-08', '14:00:00', 'active', 2, NULL, '2025-02-12 09:08:28', '2025-02-12 09:08:28'),
(11, 10, 1, 4, '2025-02-08', '11:00:00', 'active', 2, NULL, '2025-02-12 09:08:28', '2025-02-12 09:08:28'),
(12, 11, 1, 1, '2025-02-08', '10:00:00', 'active', 2, NULL, '2025-02-12 09:08:28', '2025-02-12 09:08:28'),
(13, 12, 1, 4, '2025-02-08', '10:20:00', 'active', 2, NULL, '2025-02-12 09:08:28', '2025-02-12 09:08:28'),
(14, 13, 1, 4, '2025-02-08', '09:00:00', 'active', 2, NULL, '2025-02-12 09:08:28', '2025-02-12 09:08:28'),
(15, 14, 1, 4, '2025-02-08', '15:00:00', 'active', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(16, 15, 1, 4, '2025-02-08', '10:00:00', 'active', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(17, 16, 2, 3, '2025-02-08', '15:00:00', 'active', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(18, 17, 2, 4, '2025-02-08', '08:00:00', 'active', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(19, 18, 2, 3, '2025-02-08', '13:40:00', 'active', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(20, 18, 2, 3, '2025-02-08', '14:20:00', 'active', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(21, 18, 2, 3, '2025-02-08', '13:00:00', 'active', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(22, 19, 2, 3, '2025-02-08', '09:00:00', 'active', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(23, 20, 2, 3, '2025-02-08', '11:30:00', 'active', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(24, 20, 2, 3, '2025-02-08', '11:20:00', 'active', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(25, 21, 2, 3, '2025-02-08', '10:50:00', 'active', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(26, 22, 2, 3, '2025-02-08', '10:00:00', 'active', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(27, 23, 2, 4, '2025-02-08', '11:20:00', 'active', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(28, 24, 2, 3, '2025-02-08', '09:50:00', 'active', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(29, 25, 2, 3, '2025-02-08', '09:00:00', 'active', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(30, 26, 2, 3, '2025-02-08', '09:00:00', 'active', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(31, 27, 2, 3, '2025-02-08', '08:00:00', 'active', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(32, 28, 2, 3, '2025-02-08', '08:00:00', 'active', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(33, 28, 2, 4, '2025-02-08', '09:40:00', 'active', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(34, 29, 2, 3, '2025-02-08', '14:10:00', 'active', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(35, 30, 2, 3, '2025-02-08', '10:00:00', 'active', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(36, 31, 2, 4, '2025-02-08', '09:00:00', 'active', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(37, 32, 1, 1, '2025-02-08', '12:00:00', 'active', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(38, 33, 2, 4, '2025-02-08', '14:00:00', 'active', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(39, 34, 1, 3, '2025-02-08', '11:00:00', 'active', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(40, 35, 1, 3, '2025-02-08', '14:30:00', 'active', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(41, 36, 1, 2, '2025-02-08', '11:00:00', 'active', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(42, 37, 1, 3, '2025-02-08', '14:00:00', 'active', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(43, 38, 3, 3, '2025-02-08', '09:00:00', 'active', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(44, 39, 1, 4, '2025-02-08', '09:30:00', 'active', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(45, 40, 1, 4, '2025-02-08', '14:00:00', 'active', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(46, 41, 2, 4, '2025-02-08', '15:00:00', 'active', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(47, 42, 3, 3, '2025-02-08', '13:00:00', 'active', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(48, 43, 2, 3, '2025-02-08', '14:00:00', 'active', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(49, 44, 3, 3, '2025-02-08', '10:00:00', 'active', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(50, 45, 1, 3, '2025-02-08', '09:30:00', 'active', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(51, 46, 1, 2, '2025-02-08', '14:00:00', 'active', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(52, 47, 1, 2, '2025-02-08', '16:30:00', 'active', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(53, 48, 1, 3, '2025-02-08', '11:00:00', 'active', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(54, 49, 2, 3, '2025-02-08', '09:00:00', 'active', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(55, 49, 2, 3, '2025-02-08', '08:30:00', 'active', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(56, 50, 1, 1, '2025-02-08', '09:00:00', 'active', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(57, 51, 1, 3, '2025-02-08', '15:30:00', 'active', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(58, 52, 2, 3, '2025-02-08', '13:00:00', 'active', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(59, 53, 3, 3, '2025-02-08', '16:00:00', 'active', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(60, 54, 2, 3, '2025-02-08', '09:00:00', 'active', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(61, 55, 2, 3, '2025-02-08', '13:00:00', 'active', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(62, 56, 1, 3, '2025-02-08', '10:00:00', 'active', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(63, 57, 1, 3, '2025-02-08', '17:00:00', 'active', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(64, 57, 1, 3, '2025-02-08', '16:00:00', 'active', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(65, 58, 1, 3, '2025-02-08', '12:00:00', 'active', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(66, 59, 2, 4, '2025-02-08', '13:00:00', 'active', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(67, 60, 1, 3, '2025-02-08', '15:00:00', 'active', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(68, 61, 3, 3, '2025-02-08', '11:00:00', 'active', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(69, 62, 1, 3, '2025-02-08', '15:30:00', 'active', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(70, 63, 1, 2, '2025-02-08', '10:30:00', 'active', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(71, 64, 1, 3, '2025-02-08', '10:30:00', 'active', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(72, 65, 2, 3, '2025-02-08', '13:40:00', 'active', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(73, 66, 1, 3, '2025-02-08', '15:00:00', 'active', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(74, 67, 1, 2, '2025-02-08', '12:00:00', 'active', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(75, 68, 1, 2, '2025-02-08', '14:30:00', 'active', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(76, 69, 1, 3, '2025-02-08', '14:00:00', 'active', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(77, 70, 1, 5, '2025-02-08', '14:00:00', 'active', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(78, 70, 1, 2, '2025-02-08', '14:00:00', 'active', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(79, 71, 2, 3, '2025-02-08', '10:00:00', 'active', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(80, 72, 1, 3, '2025-02-08', '11:00:00', 'active', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(81, 73, 1, 3, '2025-02-08', '16:30:00', 'active', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(82, 74, 1, 3, '2025-02-08', '16:00:00', 'active', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(83, 75, 2, 3, '2025-02-08', '11:00:00', 'active', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(84, 76, 1, 2, '2025-02-08', '15:00:00', 'active', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(85, 77, 1, 3, '2025-02-08', '16:30:00', 'active', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(86, 78, 1, 2, '2025-02-08', '15:40:00', 'active', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(87, 79, 1, 3, '2025-02-08', '16:30:00', 'active', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29');

-- --------------------------------------------------------

--
-- Table structure for table `csv`
--

DROP TABLE IF EXISTS `csv`;
CREATE TABLE IF NOT EXISTS `csv` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `fullname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `insurance_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subscriber_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `doctor` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `billing_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `procedure_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tooth` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `surface` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quadrant` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cost` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `eligibilities`
--

DROP TABLE IF EXISTS `eligibilities`;
CREATE TABLE IF NOT EXISTS `eligibilities` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `patient_id` bigint(20) UNSIGNED NOT NULL,
  `insurance_id` bigint(20) UNSIGNED NOT NULL,
  `is_eligible` enum('Yes','No') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'No',
  `policy_holder_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_holder_dob` date DEFAULT NULL,
  `insurance_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `network_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `group_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `group_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `effective_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `claims_filing_limit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `life_time` enum('Yes','No') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Yes',
  `waiting_period` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `waiting_period_remarks` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `missing_tooth_clause` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `missing_tooth_clause_remarks` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ortho_maximum` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ortho_remaining_maximum` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ortho_age_limit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `annual_maximum` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remaining_maximum` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `plan_year` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deductible_applies_to` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `preventive_waived` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deductibles_data` json DEFAULT NULL,
  `exam_data` json DEFAULT NULL,
  `coverage_data` json DEFAULT NULL,
  `required_preauth_xray_data` json DEFAULT NULL,
  `fluoride_sealants_data` json DEFAULT NULL,
  `share_history_data` json DEFAULT NULL,
  `verified_date` date DEFAULT NULL,
  `verified_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `insurance_rep_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `insurance_reference_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `additional_notes` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `eligibilities_patient_id_foreign` (`patient_id`),
  KEY `eligibilities_insurance_id_foreign` (`insurance_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `eligibilities`
--

INSERT INTO `eligibilities` (`id`, `patient_id`, `insurance_id`, `is_eligible`, `policy_holder_name`, `policy_holder_dob`, `insurance_name`, `network_status`, `member_id`, `group_name`, `group_number`, `effective_date`, `end_date`, `claims_filing_limit`, `life_time`, `waiting_period`, `waiting_period_remarks`, `missing_tooth_clause`, `missing_tooth_clause_remarks`, `ortho_maximum`, `ortho_remaining_maximum`, `ortho_age_limit`, `annual_maximum`, `remaining_maximum`, `plan_year`, `deductible_applies_to`, `preventive_waived`, `deductibles_data`, `exam_data`, `coverage_data`, `required_preauth_xray_data`, `fluoride_sealants_data`, `share_history_data`, `verified_date`, `verified_by`, `insurance_rep_name`, `insurance_reference_number`, `additional_notes`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Yes', 'Policy Holder Name', '2010-10-10', 'Anthem Blue Cross', '1', 'Member ID', 'Group Name', '123', '2024-10-10', '2025-10-10', 'Claims Filing Limit', 'Yes', 'No', NULL, 'No', NULL, 'Ortho Maximum', 'Ortho Remaining Maximum', 'Ortho Age Limit', 'Annual Maximum', 'Remaining Maximum', 'Calender Year', 'deductible_applies_to', 'preventive_waived', '\"{\\\"deductibles\\\":{\\\"individual\\\":\\\"Deductibles I\\\",\\\"family\\\":\\\"Deductibles F\\\",\\\"ortho\\\":\\\"Deductibles O\\\"},\\\"deductible_remain\\\":{\\\"individual\\\":\\\"Individual\\\",\\\"family\\\":\\\"Family\\\",\\\"ortho\\\":\\\"Ortho\\\"}}\"', '\"{\\\"periodic_exam\\\":{\\\"frequency\\\":\\\"Periodic Exam - D0120 F\\\",\\\"history\\\":\\\"Periodic Exam - D0120 H\\\"},\\\"comp_exam\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"consultation\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"fac_photographic\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"prophy\\\":{\\\"frequency\\\":\\\"Prophy - D1110, D1120\\\\tf\\\",\\\"history\\\":\\\"Prophy - D1110, D1120\\\\th\\\"},\\\"bw\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"fmx_pano\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"crowns\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"dentures\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"nightguard\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"perio_srp\\\":{\\\"frequency\\\":\\\"Perio SRP - D4341\\\",\\\"history\\\":null},\\\"perio_maintenance\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"d4381\\\":{\\\"frequency\\\":\\\"D4381 F\\\",\\\"history\\\":\\\"D4381 H\\\"}}\"', '\"{\\\"diagnostic_xray\\\":{\\\"coverage\\\":\\\"10\\\",\\\"remarks\\\":\\\"\\\"},\\\"preventive\\\":{\\\"coverage\\\":\\\"20\\\",\\\"remarks\\\":\\\"\\\"},\\\"oral_facial_images\\\":{\\\"coverage\\\":\\\"30\\\",\\\"remarks\\\":\\\"\\\"},\\\"basic_restorative\\\":{\\\"coverage\\\":\\\"40\\\",\\\"remarks\\\":\\\"TEST 40\\\"},\\\"major_restorative_d2950\\\":{\\\"coverage\\\":\\\"50\\\",\\\"remarks\\\":\\\"\\\"},\\\"major_restorative_d2740\\\":{\\\"coverage\\\":\\\"60\\\",\\\"remarks\\\":\\\"TEST 50\\\"},\\\"endo\\\":{\\\"coverage\\\":\\\"70\\\",\\\"remarks\\\":\\\"\\\"},\\\"perio_d4341\\\":{\\\"coverage\\\":\\\"80\\\",\\\"remarks\\\":\\\"\\\"},\\\"perio_d4346\\\":{\\\"coverage\\\":\\\"90\\\",\\\"remarks\\\":\\\"\\\"},\\\"perio_d4381\\\":{\\\"coverage\\\":\\\"10%\\\",\\\"remarks\\\":\\\"\\\"},\\\"oral_surgery\\\":{\\\"coverage\\\":\\\"20%\\\",\\\"remarks\\\":\\\"\\\"},\\\"bonegraft\\\":{\\\"coverage\\\":\\\"30%\\\",\\\"remarks\\\":\\\"\\\"},\\\"prostho\\\":{\\\"coverage\\\":\\\"40%\\\",\\\"remarks\\\":\\\"\\\"},\\\"implants\\\":{\\\"coverage\\\":\\\"50%\\\",\\\"remarks\\\":\\\"\\\"},\\\"ortho\\\":{\\\"coverage\\\":\\\"60%\\\",\\\"remarks\\\":\\\"\\\"},\\\"nightguard\\\":{\\\"coverage\\\":\\\"70%\\\",\\\"remarks\\\":\\\"\\\"}}\"', '\"{\\\"extraction\\\":\\\"Yes\\\",\\\"crown\\\":\\\"No\\\",\\\"rct\\\":\\\"Yes\\\",\\\"periodontal\\\":\\\"No\\\",\\\"denture\\\":\\\"Yes\\\"}\"', '\"{\\\"fluoride\\\":{\\\"frequency\\\":\\\"D1208, D1206 F\\\",\\\"history\\\":\\\"D1208, D1206 H\\\",\\\"age_limit\\\":\\\"D1208, D1206 AL\\\"},\\\"sealant\\\":{\\\"frequency\\\":\\\"Frequency\\\",\\\"history\\\":\\\"History\\\",\\\"age_limit\\\":\\\"Age Limit\\\"}}\"', '\"{\\\"exam_codes\\\":\\\"D0150\\\\/D0120\\\\/D0140\\\\/D9310\\\",\\\"cleaning_codes\\\":\\\"D1110\\\\/D4910\\\",\\\"xray_codes\\\":\\\"D0210\\\\/D0330\\\"}\"', '2025-02-23', 'admin', 'Insurance Rep. Name', 'Insurance Reference Number', 'Additional Notes', '2025-02-23 08:11:06', '2025-02-23 10:47:33');

-- --------------------------------------------------------

--
-- Table structure for table `eligibility_group_number_data`
--

DROP TABLE IF EXISTS `eligibility_group_number_data`;
CREATE TABLE IF NOT EXISTS `eligibility_group_number_data` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `group_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `group_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `exam_data` json DEFAULT NULL,
  `coverage_data` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `eligibility_group_number_data_group_number_unique` (`group_number`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `eligibility_group_number_data`
--

INSERT INTO `eligibility_group_number_data` (`id`, `group_number`, `group_name`, `exam_data`, `coverage_data`, `created_at`, `updated_at`) VALUES
(1, '123', 'Group Name', '\"{\\\"periodic_exam\\\":{\\\"frequency\\\":\\\"Periodic Exam - D0120 F\\\",\\\"history\\\":\\\"Periodic Exam - D0120 H\\\"},\\\"comp_exam\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"consultation\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"fac_photographic\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"prophy\\\":{\\\"frequency\\\":\\\"Prophy - D1110, D1120\\\\tf\\\",\\\"history\\\":\\\"Prophy - D1110, D1120\\\\th\\\"},\\\"bw\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"fmx_pano\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"crowns\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"dentures\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"nightguard\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"perio_srp\\\":{\\\"frequency\\\":\\\"Perio SRP - D4341\\\",\\\"history\\\":null},\\\"perio_maintenance\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"d4381\\\":{\\\"frequency\\\":\\\"D4381 F\\\",\\\"history\\\":\\\"D4381 H\\\"}}\"', '\"{\\\"diagnostic_xray\\\":{\\\"coverage\\\":\\\"10\\\",\\\"remarks\\\":\\\"\\\"},\\\"preventive\\\":{\\\"coverage\\\":\\\"20\\\",\\\"remarks\\\":\\\"\\\"},\\\"oral_facial_images\\\":{\\\"coverage\\\":\\\"30\\\",\\\"remarks\\\":\\\"\\\"},\\\"basic_restorative\\\":{\\\"coverage\\\":\\\"40\\\",\\\"remarks\\\":\\\"TEST 40\\\"},\\\"major_restorative_d2950\\\":{\\\"coverage\\\":\\\"50\\\",\\\"remarks\\\":\\\"\\\"},\\\"major_restorative_d2740\\\":{\\\"coverage\\\":\\\"60\\\",\\\"remarks\\\":\\\"TEST 50\\\"},\\\"endo\\\":{\\\"coverage\\\":\\\"70\\\",\\\"remarks\\\":\\\"\\\"},\\\"perio_d4341\\\":{\\\"coverage\\\":\\\"80\\\",\\\"remarks\\\":\\\"\\\"},\\\"perio_d4346\\\":{\\\"coverage\\\":\\\"90\\\",\\\"remarks\\\":\\\"\\\"},\\\"perio_d4381\\\":{\\\"coverage\\\":\\\"10%\\\",\\\"remarks\\\":\\\"\\\"},\\\"oral_surgery\\\":{\\\"coverage\\\":\\\"20%\\\",\\\"remarks\\\":\\\"\\\"},\\\"bonegraft\\\":{\\\"coverage\\\":\\\"30%\\\",\\\"remarks\\\":\\\"\\\"},\\\"prostho\\\":{\\\"coverage\\\":\\\"40%\\\",\\\"remarks\\\":\\\"\\\"},\\\"implants\\\":{\\\"coverage\\\":\\\"50%\\\",\\\"remarks\\\":\\\"\\\"},\\\"ortho\\\":{\\\"coverage\\\":\\\"60%\\\",\\\"remarks\\\":\\\"\\\"},\\\"nightguard\\\":{\\\"coverage\\\":\\\"70%\\\",\\\"remarks\\\":\\\"\\\"}}\"', '2025-02-22 14:28:23', '2025-02-23 10:47:33');

-- --------------------------------------------------------

--
-- Table structure for table `eligibility_histories`
--

DROP TABLE IF EXISTS `eligibility_histories`;
CREATE TABLE IF NOT EXISTS `eligibility_histories` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `eligibility_id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` bigint(20) UNSIGNED NOT NULL,
  `insurance_id` bigint(20) UNSIGNED NOT NULL,
  `is_eligible` enum('Yes','No') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'No',
  `policy_holder_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_holder_dob` date DEFAULT NULL,
  `insurance_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `network_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `group_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `group_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `effective_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `claims_filing_limit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `life_time` enum('Yes','No') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Yes',
  `waiting_period` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `waiting_period_remarks` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `missing_tooth_clause` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `missing_tooth_clause_remarks` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ortho_maximum` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ortho_remaining_maximum` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ortho_age_limit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `annual_maximum` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remaining_maximum` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `plan_year` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deductible_applies_to` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `preventive_waived` tinyint(1) DEFAULT NULL,
  `deductibles_data` json DEFAULT NULL,
  `exam_data` json DEFAULT NULL,
  `coverage_data` json DEFAULT NULL,
  `required_preauth_xray_data` json DEFAULT NULL,
  `fluoride_sealants_data` json DEFAULT NULL,
  `share_history_data` json DEFAULT NULL,
  `verified_date` date DEFAULT NULL,
  `verified_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `insurance_rep_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `insurance_reference_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `additional_notes` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `eligibility_histories_eligibility_id_foreign` (`eligibility_id`),
  KEY `eligibility_histories_patient_id_foreign` (`patient_id`),
  KEY `eligibility_histories_insurance_id_foreign` (`insurance_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `eligibility_histories`
--

INSERT INTO `eligibility_histories` (`id`, `eligibility_id`, `patient_id`, `insurance_id`, `is_eligible`, `policy_holder_name`, `policy_holder_dob`, `insurance_name`, `network_status`, `member_id`, `group_name`, `group_number`, `effective_date`, `end_date`, `claims_filing_limit`, `life_time`, `waiting_period`, `waiting_period_remarks`, `missing_tooth_clause`, `missing_tooth_clause_remarks`, `ortho_maximum`, `ortho_remaining_maximum`, `ortho_age_limit`, `annual_maximum`, `remaining_maximum`, `plan_year`, `deductible_applies_to`, `preventive_waived`, `deductibles_data`, `exam_data`, `coverage_data`, `required_preauth_xray_data`, `fluoride_sealants_data`, `share_history_data`, `verified_date`, `verified_by`, `insurance_rep_name`, `insurance_reference_number`, `additional_notes`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 'Yes', 'Policy Holder Name', '2010-10-10', 'Anthem Blue Cross', '1', NULL, 'Group Name', '123', NULL, NULL, NULL, 'Yes', 'No', NULL, 'No', NULL, NULL, NULL, NULL, NULL, NULL, 'Calender Year', NULL, 0, '\"{\\\"deductibles\\\":{\\\"individual\\\":null,\\\"family\\\":null,\\\"ortho\\\":null},\\\"deductible_remain\\\":{\\\"individual\\\":null,\\\"family\\\":null,\\\"ortho\\\":null}}\"', '\"{\\\"periodic_exam\\\":{\\\"frequency\\\":\\\"Periodic Exam - D0120 F\\\",\\\"history\\\":null},\\\"comp_exam\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"consultation\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"fac_photographic\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"prophy\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"bw\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"fmx_pano\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"crowns\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"dentures\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"nightguard\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"perio_srp\\\":{\\\"frequency\\\":\\\"Perio SRP - D4341\\\",\\\"history\\\":null},\\\"perio_maintenance\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"d4381\\\":{\\\"frequency\\\":\\\"D4381\\\",\\\"history\\\":null}}\"', '\"{\\\"diagnostic_xray\\\":{\\\"coverage\\\":\\\"10\\\",\\\"remarks\\\":\\\"\\\"},\\\"preventive\\\":{\\\"coverage\\\":\\\"20\\\",\\\"remarks\\\":\\\"\\\"},\\\"oral_facial_images\\\":{\\\"coverage\\\":\\\"30\\\",\\\"remarks\\\":\\\"\\\"},\\\"basic_restorative\\\":{\\\"coverage\\\":\\\"40\\\",\\\"remarks\\\":null},\\\"major_restorative_d2950\\\":{\\\"coverage\\\":\\\"50\\\",\\\"remarks\\\":\\\"\\\"},\\\"major_restorative_d2740\\\":{\\\"coverage\\\":\\\"60\\\",\\\"remarks\\\":null},\\\"endo\\\":{\\\"coverage\\\":\\\"70\\\",\\\"remarks\\\":\\\"\\\"},\\\"perio_d4341\\\":{\\\"coverage\\\":\\\"80\\\",\\\"remarks\\\":\\\"\\\"},\\\"perio_d4346\\\":{\\\"coverage\\\":\\\"90\\\",\\\"remarks\\\":\\\"\\\"},\\\"perio_d4381\\\":{\\\"coverage\\\":\\\"10%\\\",\\\"remarks\\\":\\\"\\\"},\\\"oral_surgery\\\":{\\\"coverage\\\":\\\"20%\\\",\\\"remarks\\\":\\\"\\\"},\\\"bonegraft\\\":{\\\"coverage\\\":\\\"30%\\\",\\\"remarks\\\":\\\"\\\"},\\\"prostho\\\":{\\\"coverage\\\":\\\"40%\\\",\\\"remarks\\\":\\\"\\\"},\\\"implants\\\":{\\\"coverage\\\":\\\"50%\\\",\\\"remarks\\\":\\\"\\\"},\\\"ortho\\\":{\\\"coverage\\\":\\\"60%\\\",\\\"remarks\\\":\\\"\\\"},\\\"nightguard\\\":{\\\"coverage\\\":\\\"70%\\\",\\\"remarks\\\":\\\"\\\"}}\"', '\"{\\\"extraction\\\":\\\"Yes\\\",\\\"crown\\\":\\\"No\\\",\\\"rct\\\":\\\"No\\\",\\\"periodontal\\\":\\\"No\\\",\\\"denture\\\":\\\"Yes\\\"}\"', '\"{\\\"fluoride\\\":{\\\"frequency\\\":null,\\\"history\\\":null,\\\"age_limit\\\":null},\\\"sealant\\\":{\\\"frequency\\\":null,\\\"history\\\":null,\\\"age_limit\\\":null}}\"', '\"{\\\"exam_codes\\\":\\\"D0150\\\\/D0120\\\\/D0140\\\\/D9310\\\",\\\"cleaning_codes\\\":null,\\\"xray_codes\\\":null}\"', '2025-02-23', 'admin', NULL, NULL, NULL, '2025-02-23 08:12:15', '2025-02-23 08:12:15'),
(2, 1, 1, 1, 'Yes', 'Policy Holder Name', '2010-10-10', 'Anthem Blue Cross', '1', NULL, 'Group Name', '123', NULL, NULL, NULL, 'Yes', 'No', NULL, 'No', NULL, NULL, NULL, NULL, NULL, NULL, 'Calender Year', NULL, 0, '\"{\\\"deductibles\\\":{\\\"individual\\\":null,\\\"family\\\":null,\\\"ortho\\\":null},\\\"deductible_remain\\\":{\\\"individual\\\":null,\\\"family\\\":null,\\\"ortho\\\":null}}\"', '\"{\\\"periodic_exam\\\":{\\\"frequency\\\":\\\"Periodic Exam - D0120 F\\\",\\\"history\\\":null},\\\"comp_exam\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"consultation\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"fac_photographic\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"prophy\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"bw\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"fmx_pano\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"crowns\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"dentures\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"nightguard\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"perio_srp\\\":{\\\"frequency\\\":\\\"Perio SRP - D4341\\\",\\\"history\\\":null},\\\"perio_maintenance\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"d4381\\\":{\\\"frequency\\\":\\\"D4381\\\",\\\"history\\\":null}}\"', '\"{\\\"diagnostic_xray\\\":{\\\"coverage\\\":\\\"10\\\",\\\"remarks\\\":\\\"\\\"},\\\"preventive\\\":{\\\"coverage\\\":\\\"20\\\",\\\"remarks\\\":\\\"\\\"},\\\"oral_facial_images\\\":{\\\"coverage\\\":\\\"30\\\",\\\"remarks\\\":\\\"\\\"},\\\"basic_restorative\\\":{\\\"coverage\\\":\\\"40\\\",\\\"remarks\\\":null},\\\"major_restorative_d2950\\\":{\\\"coverage\\\":\\\"50\\\",\\\"remarks\\\":\\\"\\\"},\\\"major_restorative_d2740\\\":{\\\"coverage\\\":\\\"60\\\",\\\"remarks\\\":null},\\\"endo\\\":{\\\"coverage\\\":\\\"70\\\",\\\"remarks\\\":\\\"\\\"},\\\"perio_d4341\\\":{\\\"coverage\\\":\\\"80\\\",\\\"remarks\\\":\\\"\\\"},\\\"perio_d4346\\\":{\\\"coverage\\\":\\\"90\\\",\\\"remarks\\\":\\\"\\\"},\\\"perio_d4381\\\":{\\\"coverage\\\":\\\"10%\\\",\\\"remarks\\\":\\\"\\\"},\\\"oral_surgery\\\":{\\\"coverage\\\":\\\"20%\\\",\\\"remarks\\\":\\\"\\\"},\\\"bonegraft\\\":{\\\"coverage\\\":\\\"30%\\\",\\\"remarks\\\":\\\"\\\"},\\\"prostho\\\":{\\\"coverage\\\":\\\"40%\\\",\\\"remarks\\\":\\\"\\\"},\\\"implants\\\":{\\\"coverage\\\":\\\"50%\\\",\\\"remarks\\\":\\\"\\\"},\\\"ortho\\\":{\\\"coverage\\\":\\\"60%\\\",\\\"remarks\\\":\\\"\\\"},\\\"nightguard\\\":{\\\"coverage\\\":\\\"70%\\\",\\\"remarks\\\":\\\"\\\"}}\"', '\"{\\\"extraction\\\":\\\"Yes\\\",\\\"crown\\\":\\\"No\\\",\\\"rct\\\":\\\"No\\\",\\\"periodontal\\\":\\\"No\\\",\\\"denture\\\":\\\"Yes\\\"}\"', '\"{\\\"fluoride\\\":{\\\"frequency\\\":null,\\\"history\\\":null,\\\"age_limit\\\":null},\\\"sealant\\\":{\\\"frequency\\\":null,\\\"history\\\":null,\\\"age_limit\\\":null}}\"', '\"{\\\"exam_codes\\\":\\\"D0150\\\\/D0120\\\\/D0140\\\\/D9310\\\",\\\"cleaning_codes\\\":\\\"D1110\\\\/D4910\\\",\\\"xray_codes\\\":\\\"D0210\\\\/D0330\\\"}\"', '2025-02-23', 'admin', NULL, NULL, NULL, '2025-02-23 08:13:27', '2025-02-23 08:13:27'),
(3, 1, 1, 1, 'Yes', 'Policy Holder Name', '2010-10-10', 'Anthem Blue Cross', '1', NULL, 'Group Name', '123', NULL, NULL, NULL, 'Yes', 'No', NULL, 'No', NULL, NULL, NULL, NULL, NULL, NULL, 'Calender Year', NULL, 0, '\"{\\\"deductibles\\\":{\\\"individual\\\":null,\\\"family\\\":null,\\\"ortho\\\":null},\\\"deductible_remain\\\":{\\\"individual\\\":null,\\\"family\\\":null,\\\"ortho\\\":null}}\"', '\"{\\\"periodic_exam\\\":{\\\"frequency\\\":\\\"Periodic Exam - D0120 F\\\",\\\"history\\\":null},\\\"comp_exam\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"consultation\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"fac_photographic\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"prophy\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"bw\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"fmx_pano\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"crowns\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"dentures\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"nightguard\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"perio_srp\\\":{\\\"frequency\\\":\\\"Perio SRP - D4341\\\",\\\"history\\\":null},\\\"perio_maintenance\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"d4381\\\":{\\\"frequency\\\":\\\"D4381\\\",\\\"history\\\":null}}\"', '\"{\\\"diagnostic_xray\\\":{\\\"coverage\\\":\\\"10\\\",\\\"remarks\\\":\\\"\\\"},\\\"preventive\\\":{\\\"coverage\\\":\\\"20\\\",\\\"remarks\\\":\\\"\\\"},\\\"oral_facial_images\\\":{\\\"coverage\\\":\\\"30\\\",\\\"remarks\\\":\\\"\\\"},\\\"basic_restorative\\\":{\\\"coverage\\\":\\\"40\\\",\\\"remarks\\\":null},\\\"major_restorative_d2950\\\":{\\\"coverage\\\":\\\"50\\\",\\\"remarks\\\":\\\"\\\"},\\\"major_restorative_d2740\\\":{\\\"coverage\\\":\\\"60\\\",\\\"remarks\\\":null},\\\"endo\\\":{\\\"coverage\\\":\\\"70\\\",\\\"remarks\\\":\\\"\\\"},\\\"perio_d4341\\\":{\\\"coverage\\\":\\\"80\\\",\\\"remarks\\\":\\\"\\\"},\\\"perio_d4346\\\":{\\\"coverage\\\":\\\"90\\\",\\\"remarks\\\":\\\"\\\"},\\\"perio_d4381\\\":{\\\"coverage\\\":\\\"10%\\\",\\\"remarks\\\":\\\"\\\"},\\\"oral_surgery\\\":{\\\"coverage\\\":\\\"20%\\\",\\\"remarks\\\":\\\"\\\"},\\\"bonegraft\\\":{\\\"coverage\\\":\\\"30%\\\",\\\"remarks\\\":\\\"\\\"},\\\"prostho\\\":{\\\"coverage\\\":\\\"40%\\\",\\\"remarks\\\":\\\"\\\"},\\\"implants\\\":{\\\"coverage\\\":\\\"50%\\\",\\\"remarks\\\":\\\"\\\"},\\\"ortho\\\":{\\\"coverage\\\":\\\"60%\\\",\\\"remarks\\\":\\\"\\\"},\\\"nightguard\\\":{\\\"coverage\\\":\\\"70%\\\",\\\"remarks\\\":\\\"\\\"}}\"', '\"{\\\"extraction\\\":\\\"Yes\\\",\\\"crown\\\":\\\"No\\\",\\\"rct\\\":\\\"No\\\",\\\"periodontal\\\":\\\"No\\\",\\\"denture\\\":\\\"Yes\\\"}\"', '\"{\\\"fluoride\\\":{\\\"frequency\\\":null,\\\"history\\\":null,\\\"age_limit\\\":null},\\\"sealant\\\":{\\\"frequency\\\":null,\\\"history\\\":null,\\\"age_limit\\\":null}}\"', '\"{\\\"exam_codes\\\":\\\"D0150\\\\/D0120\\\\/D0140\\\\/D9310\\\",\\\"cleaning_codes\\\":\\\"D1110\\\\/D4910\\\",\\\"xray_codes\\\":\\\"D0210\\\\/D0330\\\"}\"', '2025-02-23', 'admin', NULL, NULL, NULL, '2025-02-23 10:45:41', '2025-02-23 10:45:41'),
(4, 1, 1, 1, 'Yes', 'Policy Holder Name', '2010-10-10', 'Anthem Blue Cross', '1', 'Member ID', 'Group Name', '123', '2024-10-10', '2025-10-10', 'Claims Filing Limit', 'Yes', 'No', NULL, 'No', NULL, 'Ortho Maximum', 'Ortho Remaining Maximum', 'Ortho Age Limit', 'Annual Maximum', 'Remaining Maximum', 'Calender Year', NULL, 0, '\"{\\\"deductibles\\\":{\\\"individual\\\":\\\"Deductibles I\\\",\\\"family\\\":\\\"Deductibles F\\\",\\\"ortho\\\":\\\"Deductibles O\\\"},\\\"deductible_remain\\\":{\\\"individual\\\":\\\"Individual\\\",\\\"family\\\":\\\"Family\\\",\\\"ortho\\\":\\\"Ortho\\\"}}\"', '\"{\\\"periodic_exam\\\":{\\\"frequency\\\":\\\"Periodic Exam - D0120 F\\\",\\\"history\\\":null},\\\"comp_exam\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"consultation\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"fac_photographic\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"prophy\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"bw\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"fmx_pano\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"crowns\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"dentures\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"nightguard\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"perio_srp\\\":{\\\"frequency\\\":\\\"Perio SRP - D4341\\\",\\\"history\\\":null},\\\"perio_maintenance\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"d4381\\\":{\\\"frequency\\\":\\\"D4381\\\",\\\"history\\\":null}}\"', '\"{\\\"diagnostic_xray\\\":{\\\"coverage\\\":\\\"10\\\",\\\"remarks\\\":\\\"\\\"},\\\"preventive\\\":{\\\"coverage\\\":\\\"20\\\",\\\"remarks\\\":\\\"\\\"},\\\"oral_facial_images\\\":{\\\"coverage\\\":\\\"30\\\",\\\"remarks\\\":\\\"\\\"},\\\"basic_restorative\\\":{\\\"coverage\\\":\\\"40\\\",\\\"remarks\\\":null},\\\"major_restorative_d2950\\\":{\\\"coverage\\\":\\\"50\\\",\\\"remarks\\\":\\\"\\\"},\\\"major_restorative_d2740\\\":{\\\"coverage\\\":\\\"60\\\",\\\"remarks\\\":null},\\\"endo\\\":{\\\"coverage\\\":\\\"70\\\",\\\"remarks\\\":\\\"\\\"},\\\"perio_d4341\\\":{\\\"coverage\\\":\\\"80\\\",\\\"remarks\\\":\\\"\\\"},\\\"perio_d4346\\\":{\\\"coverage\\\":\\\"90\\\",\\\"remarks\\\":\\\"\\\"},\\\"perio_d4381\\\":{\\\"coverage\\\":\\\"10%\\\",\\\"remarks\\\":\\\"\\\"},\\\"oral_surgery\\\":{\\\"coverage\\\":\\\"20%\\\",\\\"remarks\\\":\\\"\\\"},\\\"bonegraft\\\":{\\\"coverage\\\":\\\"30%\\\",\\\"remarks\\\":\\\"\\\"},\\\"prostho\\\":{\\\"coverage\\\":\\\"40%\\\",\\\"remarks\\\":\\\"\\\"},\\\"implants\\\":{\\\"coverage\\\":\\\"50%\\\",\\\"remarks\\\":\\\"\\\"},\\\"ortho\\\":{\\\"coverage\\\":\\\"60%\\\",\\\"remarks\\\":\\\"\\\"},\\\"nightguard\\\":{\\\"coverage\\\":\\\"70%\\\",\\\"remarks\\\":\\\"\\\"}}\"', '\"{\\\"extraction\\\":\\\"Yes\\\",\\\"crown\\\":\\\"No\\\",\\\"rct\\\":\\\"No\\\",\\\"periodontal\\\":\\\"No\\\",\\\"denture\\\":\\\"Yes\\\"}\"', '\"{\\\"fluoride\\\":{\\\"frequency\\\":null,\\\"history\\\":null,\\\"age_limit\\\":null},\\\"sealant\\\":{\\\"frequency\\\":null,\\\"history\\\":null,\\\"age_limit\\\":null}}\"', '\"{\\\"exam_codes\\\":\\\"D0150\\\\/D0120\\\\/D0140\\\\/D9310\\\",\\\"cleaning_codes\\\":\\\"D1110\\\\/D4910\\\",\\\"xray_codes\\\":\\\"D0210\\\\/D0330\\\"}\"', '2025-02-23', 'admin', NULL, NULL, NULL, '2025-02-23 10:46:27', '2025-02-23 10:46:27'),
(5, 1, 1, 1, 'Yes', 'Policy Holder Name', '2010-10-10', 'Anthem Blue Cross', '1', 'Member ID', 'Group Name', '123', '2024-10-10', '2025-10-10', 'Claims Filing Limit', 'Yes', 'No', NULL, 'No', NULL, 'Ortho Maximum', 'Ortho Remaining Maximum', 'Ortho Age Limit', 'Annual Maximum', 'Remaining Maximum', 'Calender Year', NULL, 0, '\"{\\\"deductibles\\\":{\\\"individual\\\":\\\"Deductibles I\\\",\\\"family\\\":\\\"Deductibles F\\\",\\\"ortho\\\":\\\"Deductibles O\\\"},\\\"deductible_remain\\\":{\\\"individual\\\":\\\"Individual\\\",\\\"family\\\":\\\"Family\\\",\\\"ortho\\\":\\\"Ortho\\\"}}\"', '\"{\\\"periodic_exam\\\":{\\\"frequency\\\":\\\"Periodic Exam - D0120 F\\\",\\\"history\\\":null},\\\"comp_exam\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"consultation\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"fac_photographic\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"prophy\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"bw\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"fmx_pano\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"crowns\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"dentures\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"nightguard\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"perio_srp\\\":{\\\"frequency\\\":\\\"Perio SRP - D4341\\\",\\\"history\\\":null},\\\"perio_maintenance\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"d4381\\\":{\\\"frequency\\\":\\\"D4381 F\\\",\\\"history\\\":\\\"D4381 H\\\"}}\"', '\"{\\\"diagnostic_xray\\\":{\\\"coverage\\\":\\\"10\\\",\\\"remarks\\\":\\\"\\\"},\\\"preventive\\\":{\\\"coverage\\\":\\\"20\\\",\\\"remarks\\\":\\\"\\\"},\\\"oral_facial_images\\\":{\\\"coverage\\\":\\\"30\\\",\\\"remarks\\\":\\\"\\\"},\\\"basic_restorative\\\":{\\\"coverage\\\":\\\"40\\\",\\\"remarks\\\":\\\"TEST 40\\\"},\\\"major_restorative_d2950\\\":{\\\"coverage\\\":\\\"50\\\",\\\"remarks\\\":\\\"\\\"},\\\"major_restorative_d2740\\\":{\\\"coverage\\\":\\\"60\\\",\\\"remarks\\\":\\\"TEST 50\\\"},\\\"endo\\\":{\\\"coverage\\\":\\\"70\\\",\\\"remarks\\\":\\\"\\\"},\\\"perio_d4341\\\":{\\\"coverage\\\":\\\"80\\\",\\\"remarks\\\":\\\"\\\"},\\\"perio_d4346\\\":{\\\"coverage\\\":\\\"90\\\",\\\"remarks\\\":\\\"\\\"},\\\"perio_d4381\\\":{\\\"coverage\\\":\\\"10%\\\",\\\"remarks\\\":\\\"\\\"},\\\"oral_surgery\\\":{\\\"coverage\\\":\\\"20%\\\",\\\"remarks\\\":\\\"\\\"},\\\"bonegraft\\\":{\\\"coverage\\\":\\\"30%\\\",\\\"remarks\\\":\\\"\\\"},\\\"prostho\\\":{\\\"coverage\\\":\\\"40%\\\",\\\"remarks\\\":\\\"\\\"},\\\"implants\\\":{\\\"coverage\\\":\\\"50%\\\",\\\"remarks\\\":\\\"\\\"},\\\"ortho\\\":{\\\"coverage\\\":\\\"60%\\\",\\\"remarks\\\":\\\"\\\"},\\\"nightguard\\\":{\\\"coverage\\\":\\\"70%\\\",\\\"remarks\\\":\\\"\\\"}}\"', '\"{\\\"extraction\\\":\\\"Yes\\\",\\\"crown\\\":\\\"No\\\",\\\"rct\\\":\\\"No\\\",\\\"periodontal\\\":\\\"No\\\",\\\"denture\\\":\\\"Yes\\\"}\"', '\"{\\\"fluoride\\\":{\\\"frequency\\\":\\\"D1208, D1206 F\\\",\\\"history\\\":\\\"D1208, D1206 H\\\",\\\"age_limit\\\":\\\"D1208, D1206 AL\\\"},\\\"sealant\\\":{\\\"frequency\\\":\\\"Frequency\\\",\\\"history\\\":\\\"History\\\",\\\"age_limit\\\":\\\"Age Limit\\\"}}\"', '\"{\\\"exam_codes\\\":\\\"D0150\\\\/D0120\\\\/D0140\\\\/D9310\\\",\\\"cleaning_codes\\\":\\\"D1110\\\\/D4910\\\",\\\"xray_codes\\\":\\\"D0210\\\\/D0330\\\"}\"', '2025-02-23', 'admin', 'Insurance Rep. Name', 'Insurance Reference Number', 'Additional Notes', '2025-02-23 10:46:41', '2025-02-23 10:46:41'),
(6, 1, 1, 1, 'Yes', 'Policy Holder Name', '2010-10-10', 'Anthem Blue Cross', '1', 'Member ID', 'Group Name', '123', '2024-10-10', '2025-10-10', 'Claims Filing Limit', 'Yes', 'No', NULL, 'No', NULL, 'Ortho Maximum', 'Ortho Remaining Maximum', 'Ortho Age Limit', 'Annual Maximum', 'Remaining Maximum', 'Calender Year', NULL, 0, '\"{\\\"deductibles\\\":{\\\"individual\\\":\\\"Deductibles I\\\",\\\"family\\\":\\\"Deductibles F\\\",\\\"ortho\\\":\\\"Deductibles O\\\"},\\\"deductible_remain\\\":{\\\"individual\\\":\\\"Individual\\\",\\\"family\\\":\\\"Family\\\",\\\"ortho\\\":\\\"Ortho\\\"}}\"', '\"{\\\"periodic_exam\\\":{\\\"frequency\\\":\\\"Periodic Exam - D0120 F\\\",\\\"history\\\":null},\\\"comp_exam\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"consultation\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"fac_photographic\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"prophy\\\":{\\\"frequency\\\":\\\"Prophy - D1110, D1120\\\\tf\\\",\\\"history\\\":\\\"Prophy - D1110, D1120\\\\th\\\"},\\\"bw\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"fmx_pano\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"crowns\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"dentures\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"nightguard\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"perio_srp\\\":{\\\"frequency\\\":\\\"Perio SRP - D4341\\\",\\\"history\\\":null},\\\"perio_maintenance\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"d4381\\\":{\\\"frequency\\\":\\\"D4381 F\\\",\\\"history\\\":\\\"D4381 H\\\"}}\"', '\"{\\\"diagnostic_xray\\\":{\\\"coverage\\\":\\\"10\\\",\\\"remarks\\\":\\\"\\\"},\\\"preventive\\\":{\\\"coverage\\\":\\\"20\\\",\\\"remarks\\\":\\\"\\\"},\\\"oral_facial_images\\\":{\\\"coverage\\\":\\\"30\\\",\\\"remarks\\\":\\\"\\\"},\\\"basic_restorative\\\":{\\\"coverage\\\":\\\"40\\\",\\\"remarks\\\":\\\"TEST 40\\\"},\\\"major_restorative_d2950\\\":{\\\"coverage\\\":\\\"50\\\",\\\"remarks\\\":\\\"\\\"},\\\"major_restorative_d2740\\\":{\\\"coverage\\\":\\\"60\\\",\\\"remarks\\\":\\\"TEST 50\\\"},\\\"endo\\\":{\\\"coverage\\\":\\\"70\\\",\\\"remarks\\\":\\\"\\\"},\\\"perio_d4341\\\":{\\\"coverage\\\":\\\"80\\\",\\\"remarks\\\":\\\"\\\"},\\\"perio_d4346\\\":{\\\"coverage\\\":\\\"90\\\",\\\"remarks\\\":\\\"\\\"},\\\"perio_d4381\\\":{\\\"coverage\\\":\\\"10%\\\",\\\"remarks\\\":\\\"\\\"},\\\"oral_surgery\\\":{\\\"coverage\\\":\\\"20%\\\",\\\"remarks\\\":\\\"\\\"},\\\"bonegraft\\\":{\\\"coverage\\\":\\\"30%\\\",\\\"remarks\\\":\\\"\\\"},\\\"prostho\\\":{\\\"coverage\\\":\\\"40%\\\",\\\"remarks\\\":\\\"\\\"},\\\"implants\\\":{\\\"coverage\\\":\\\"50%\\\",\\\"remarks\\\":\\\"\\\"},\\\"ortho\\\":{\\\"coverage\\\":\\\"60%\\\",\\\"remarks\\\":\\\"\\\"},\\\"nightguard\\\":{\\\"coverage\\\":\\\"70%\\\",\\\"remarks\\\":\\\"\\\"}}\"', '\"{\\\"extraction\\\":\\\"Yes\\\",\\\"crown\\\":\\\"No\\\",\\\"rct\\\":\\\"No\\\",\\\"periodontal\\\":\\\"No\\\",\\\"denture\\\":\\\"Yes\\\"}\"', '\"{\\\"fluoride\\\":{\\\"frequency\\\":\\\"D1208, D1206 F\\\",\\\"history\\\":\\\"D1208, D1206 H\\\",\\\"age_limit\\\":\\\"D1208, D1206 AL\\\"},\\\"sealant\\\":{\\\"frequency\\\":\\\"Frequency\\\",\\\"history\\\":\\\"History\\\",\\\"age_limit\\\":\\\"Age Limit\\\"}}\"', '\"{\\\"exam_codes\\\":\\\"D0150\\\\/D0120\\\\/D0140\\\\/D9310\\\",\\\"cleaning_codes\\\":\\\"D1110\\\\/D4910\\\",\\\"xray_codes\\\":\\\"D0210\\\\/D0330\\\"}\"', '2025-02-23', 'admin', 'Insurance Rep. Name', 'Insurance Reference Number', 'Additional Notes', '2025-02-23 10:46:52', '2025-02-23 10:46:52'),
(7, 1, 1, 1, 'Yes', 'Policy Holder Name', '2010-10-10', 'Anthem Blue Cross', '1', 'Member ID', 'Group Name', '123', '2024-10-10', '2025-10-10', 'Claims Filing Limit', 'Yes', 'No', NULL, 'No', NULL, 'Ortho Maximum', 'Ortho Remaining Maximum', 'Ortho Age Limit', 'Annual Maximum', 'Remaining Maximum', 'Calender Year', NULL, 0, '\"{\\\"deductibles\\\":{\\\"individual\\\":\\\"Deductibles I\\\",\\\"family\\\":\\\"Deductibles F\\\",\\\"ortho\\\":\\\"Deductibles O\\\"},\\\"deductible_remain\\\":{\\\"individual\\\":\\\"Individual\\\",\\\"family\\\":\\\"Family\\\",\\\"ortho\\\":\\\"Ortho\\\"}}\"', '\"{\\\"periodic_exam\\\":{\\\"frequency\\\":\\\"Periodic Exam - D0120 F\\\",\\\"history\\\":null},\\\"comp_exam\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"consultation\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"fac_photographic\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"prophy\\\":{\\\"frequency\\\":\\\"Prophy - D1110, D1120\\\\tf\\\",\\\"history\\\":\\\"Prophy - D1110, D1120\\\\th\\\"},\\\"bw\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"fmx_pano\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"crowns\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"dentures\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"nightguard\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"perio_srp\\\":{\\\"frequency\\\":\\\"Perio SRP - D4341\\\",\\\"history\\\":null},\\\"perio_maintenance\\\":{\\\"frequency\\\":null,\\\"history\\\":null},\\\"d4381\\\":{\\\"frequency\\\":\\\"D4381 F\\\",\\\"history\\\":\\\"D4381 H\\\"}}\"', '\"{\\\"diagnostic_xray\\\":{\\\"coverage\\\":\\\"10\\\",\\\"remarks\\\":\\\"\\\"},\\\"preventive\\\":{\\\"coverage\\\":\\\"20\\\",\\\"remarks\\\":\\\"\\\"},\\\"oral_facial_images\\\":{\\\"coverage\\\":\\\"30\\\",\\\"remarks\\\":\\\"\\\"},\\\"basic_restorative\\\":{\\\"coverage\\\":\\\"40\\\",\\\"remarks\\\":\\\"TEST 40\\\"},\\\"major_restorative_d2950\\\":{\\\"coverage\\\":\\\"50\\\",\\\"remarks\\\":\\\"\\\"},\\\"major_restorative_d2740\\\":{\\\"coverage\\\":\\\"60\\\",\\\"remarks\\\":\\\"TEST 50\\\"},\\\"endo\\\":{\\\"coverage\\\":\\\"70\\\",\\\"remarks\\\":\\\"\\\"},\\\"perio_d4341\\\":{\\\"coverage\\\":\\\"80\\\",\\\"remarks\\\":\\\"\\\"},\\\"perio_d4346\\\":{\\\"coverage\\\":\\\"90\\\",\\\"remarks\\\":\\\"\\\"},\\\"perio_d4381\\\":{\\\"coverage\\\":\\\"10%\\\",\\\"remarks\\\":\\\"\\\"},\\\"oral_surgery\\\":{\\\"coverage\\\":\\\"20%\\\",\\\"remarks\\\":\\\"\\\"},\\\"bonegraft\\\":{\\\"coverage\\\":\\\"30%\\\",\\\"remarks\\\":\\\"\\\"},\\\"prostho\\\":{\\\"coverage\\\":\\\"40%\\\",\\\"remarks\\\":\\\"\\\"},\\\"implants\\\":{\\\"coverage\\\":\\\"50%\\\",\\\"remarks\\\":\\\"\\\"},\\\"ortho\\\":{\\\"coverage\\\":\\\"60%\\\",\\\"remarks\\\":\\\"\\\"},\\\"nightguard\\\":{\\\"coverage\\\":\\\"70%\\\",\\\"remarks\\\":\\\"\\\"}}\"', '\"{\\\"extraction\\\":\\\"Yes\\\",\\\"crown\\\":\\\"No\\\",\\\"rct\\\":\\\"Yes\\\",\\\"periodontal\\\":\\\"No\\\",\\\"denture\\\":\\\"Yes\\\"}\"', '\"{\\\"fluoride\\\":{\\\"frequency\\\":\\\"D1208, D1206 F\\\",\\\"history\\\":\\\"D1208, D1206 H\\\",\\\"age_limit\\\":\\\"D1208, D1206 AL\\\"},\\\"sealant\\\":{\\\"frequency\\\":\\\"Frequency\\\",\\\"history\\\":\\\"History\\\",\\\"age_limit\\\":\\\"Age Limit\\\"}}\"', '\"{\\\"exam_codes\\\":\\\"D0150\\\\/D0120\\\\/D0140\\\\/D9310\\\",\\\"cleaning_codes\\\":\\\"D1110\\\\/D4910\\\",\\\"xray_codes\\\":\\\"D0210\\\\/D0330\\\"}\"', '2025-02-23', 'admin', 'Insurance Rep. Name', 'Insurance Reference Number', 'Additional Notes', '2025-02-23 10:47:33', '2025-02-23 10:47:33');

-- --------------------------------------------------------

--
-- Table structure for table `eligibility_patients`
--

DROP TABLE IF EXISTS `eligibility_patients`;
CREATE TABLE IF NOT EXISTS `eligibility_patients` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `patient_id` bigint(20) UNSIGNED NOT NULL,
  `office_id` bigint(20) UNSIGNED NOT NULL,
  `provider_id` bigint(20) UNSIGNED NOT NULL,
  `primary_insurance_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `secondary_insurance_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `appt_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `appt_time` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prim_subscriber` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prim_carrier_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prim_subscriber_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sec_carrier_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sec_subscriber_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `eligibility_patients_patient_id_foreign` (`patient_id`),
  KEY `eligibility_patients_office_id_foreign` (`office_id`),
  KEY `eligibility_patients_provider_id_foreign` (`provider_id`),
  KEY `eligibility_patients_created_by_foreign` (`created_by`),
  KEY `eligibility_patients_updated_by_foreign` (`updated_by`)
) ENGINE=MyISAM AUTO_INCREMENT=88 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `eligibility_patients`
--

INSERT INTO `eligibility_patients` (`id`, `patient_id`, `office_id`, `provider_id`, `primary_insurance_id`, `secondary_insurance_id`, `appt_date`, `appt_time`, `prim_subscriber`, `prim_carrier_name`, `prim_subscriber_id`, `sec_carrier_name`, `sec_subscriber_id`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, '1', '0', '2025-02-08', '11:00', 'Eric Lawson', 'Anthem Blue Cross', '471M11976', '', '', 2, NULL, '2025-02-12 09:08:28', '2025-02-12 09:08:28'),
(2, 2, 1, 2, '2', '0', '2025-02-08', '15:00', 'Amar Mahendrakar', 'Metlife', '606212284', '', '', 2, NULL, '2025-02-12 09:08:28', '2025-02-12 09:08:28'),
(3, 3, 1, 2, '3', '0', '2025-02-08', '14:00', 'Karla Orantes', 'Delta Dental of Illinois', '8091985104', '', '', 2, NULL, '2025-02-12 09:08:28', '2025-02-12 09:08:28'),
(4, 4, 1, 2, '3', '0', '2025-02-08', '12:00', 'Karla Orantes', 'Delta Dental of Illinois', '8091985104', '', '', 2, NULL, '2025-02-12 09:08:28', '2025-02-12 09:08:28'),
(5, 5, 1, 2, '4', '0', '2025-02-08', '09:00', 'Syryeem Icban', 'Cigna', 'U6987947901', '', '', 2, NULL, '2025-02-12 09:08:28', '2025-02-12 09:08:28'),
(6, 6, 1, 2, '0', '0', '2025-02-08', '09:30', '', '', '', '', '', 2, NULL, '2025-02-12 09:08:28', '2025-02-12 09:08:28'),
(7, 7, 1, 3, '5', '2', '2025-02-08', '10:20', 'Maxim Nikiforov', 'Delta Dental of WA', '964478274', 'Metlife', '604742274', 2, NULL, '2025-02-12 09:08:28', '2025-02-12 09:08:28'),
(8, 7, 1, 1, '5', '2', '2025-02-08', '09:30', 'Maxim Nikiforov', 'Delta Dental of WA', '964478274', 'Metlife', '604742274', 2, NULL, '2025-02-12 09:08:28', '2025-02-12 09:08:28'),
(9, 8, 1, 1, '5', '0', '2025-02-08', '09:00', 'Maxim Nikiforov', 'Delta Dental of WA', '964478274', '', '', 2, NULL, '2025-02-12 09:08:28', '2025-02-12 09:08:28'),
(10, 9, 1, 2, '0', '0', '2025-02-08', '14:00', '', '', '', '', '', 2, NULL, '2025-02-12 09:08:28', '2025-02-12 09:08:28'),
(11, 10, 1, 4, '0', '0', '2025-02-08', '11:00', '', '', '', '', '', 2, NULL, '2025-02-12 09:08:28', '2025-02-12 09:08:28'),
(12, 11, 1, 1, '6', '0', '2025-02-08', '10:00', 'Andrew Estornell', 'Guardian', '947231762', '', '', 2, NULL, '2025-02-12 09:08:28', '2025-02-12 09:08:28'),
(13, 12, 1, 4, '7', '0', '2025-02-08', '10:20', 'SWEATHA PAVAR', 'Delta Dental of California', '1118619062', '', '', 2, NULL, '2025-02-12 09:08:28', '2025-02-12 09:08:28'),
(14, 13, 1, 4, '8', '0', '2025-02-08', '09:00', 'Lucy Huang', 'Delta Dental of CA', '120976000000', '', '', 2, NULL, '2025-02-12 09:08:28', '2025-02-12 09:08:28'),
(15, 14, 1, 4, '7', '0', '2025-02-08', '15:00', 'Lester Dulce', 'Delta Dental of California', '122184000000', '', '', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(16, 15, 1, 4, '0', '0', '2025-02-08', '10:00', '', '', '', '', '', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(17, 16, 2, 3, '0', '0', '2025-02-08', '15:00', '', '', '', '', '', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(18, 17, 2, 4, '0', '0', '2025-02-08', '08:00', '', '', '', '', '', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(19, 18, 2, 3, '9', '0', '2025-02-08', '13:40', 'Shalvin Singh', 'Delta Dental Ca', '225973000000', '', '', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(20, 18, 2, 3, '9', '0', '2025-02-08', '14:20', 'Shalvin Singh', 'Delta Dental Ca', '225973000000', '', '', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(21, 18, 2, 3, '9', '0', '2025-02-08', '13:00', 'Shalvin Singh', 'Delta Dental Ca', '225973000000', '', '', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(22, 19, 2, 3, '10', '0', '2025-02-08', '09:00', 'Erik Laverdure', 'United Healthcare Dental', '988624712', '', '', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(23, 20, 2, 3, '8', '8', '2025-02-08', '11:30', 'Evelyn Bautista', 'Delta Dental of Ca', '118990000000', 'Delta Dental of Ca', '121390000000', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(24, 20, 2, 3, '8', '8', '2025-02-08', '11:20', 'Evelyn Bautista', 'Delta Dental of Ca', '118990000000', 'Delta Dental of Ca', '121390000000', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(25, 21, 2, 3, '11', '0', '2025-02-08', '10:50', 'Antoniette Cuasito', 'Delta Dental', '116168000000', '', '', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(26, 22, 2, 3, '11', '0', '2025-02-08', '10:00', 'Jaime Lovato', 'Delta Dental', '230969000000', '', '', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(27, 23, 2, 4, '8', '8', '2025-02-08', '11:20', 'Evelyn Bautista', 'Delta Dental of Ca', '118990000000', 'Delta Dental of Ca', '121390000000', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(28, 24, 2, 3, '10', '0', '2025-02-08', '09:50', 'Erik Laverdure', 'United Healthcare Dental', '988624712', '', '', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(29, 25, 2, 3, '10', '0', '2025-02-08', '09:00', 'Erik Laverdure', 'United Healthcare Dental', '988624712', '', '', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(30, 26, 2, 3, '11', '0', '2025-02-08', '09:00', 'Vrushali Wankhede', 'Delta Dental', '123667000000', '', '', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(31, 27, 2, 3, '8', '0', '2025-02-08', '08:00', 'Juliyana Regmi', 'Delta Dental of Ca', '111097000000', '', '', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(32, 28, 2, 3, '12', '0', '2025-02-08', '08:00', 'Tony Nguyen', 'Delta Dental of Ca.', '124899000000', '', '', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(33, 28, 2, 4, '12', '0', '2025-02-08', '09:40', 'Tony Nguyen', 'Delta Dental of Ca.', '124899000000', '', '', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(34, 29, 2, 3, '12', '0', '2025-02-08', '14:10', 'Sandeep Sharan', 'Delta Dental of Ca.', '122775000000', '', '', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(35, 30, 2, 3, '4', '0', '2025-02-08', '10:00', 'Daylan Fitzgerald', 'Cigna', '108789044', '', '', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(36, 31, 2, 4, '6', '0', '2025-02-08', '09:00', 'Islambek Nasirov', 'GUARDIAN', '642960031', '', '', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(37, 32, 1, 1, '11', '0', '2025-02-08', '12:00', 'Jenny Kately', 'Delta Dental', '123489000000', '', '', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(38, 33, 2, 4, '0', '0', '2025-02-08', '14:00', '', '', '', '', '', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(39, 34, 1, 3, '2', '0', '2025-02-08', '11:00', 'Chhanda Mahanty', 'Metlife', '130955820', '', '', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(40, 35, 1, 3, '4', '0', '2025-02-08', '14:30', 'zainaba elayaril', 'cigna', 'U9200275301', '', '', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(41, 36, 1, 2, '11', '0', '2025-02-08', '11:00', 'Naomi Holokai', 'Delta Dental', '906946000000', '', '', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(42, 37, 1, 3, '11', '0', '2025-02-08', '14:00', 'Naveena Sura', 'Delta Dental', '123674000000', '', '', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(43, 38, 3, 3, '8', '0', '2025-02-08', '09:00', 'juan faranda', 'Delta Dental of CA', '118793000000', '', '', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(44, 39, 1, 4, '7', '0', '2025-02-08', '09:30', 'Daisy Urias', 'Delta Dental of California', '100873000000', '', '', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(45, 40, 1, 4, '2', '0', '2025-02-08', '14:00', 'Wai Kin Lau', 'Metlife', '912018469', '', '', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(46, 41, 2, 4, '13', '0', '2025-02-08', '15:00', 'Gordon Lee', 'Delta Dental Of Massachussetts', '910900492', '', '', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(47, 42, 3, 3, '0', '0', '2025-02-08', '13:00', '', '', '', '', '', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(48, 43, 2, 3, '14', '0', '2025-02-08', '14:00', 'Irene lin', 'United Concordia', '', '', '', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(49, 44, 3, 3, '0', '0', '2025-02-08', '10:00', '', '', '', '', '', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(50, 45, 1, 3, '0', '0', '2025-02-08', '09:30', '', '', '', '', '', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(51, 46, 1, 2, '15', '0', '2025-02-08', '14:00', 'Jonhan Chen', 'Delta Dental of Washington', '966055683', '', '', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(52, 47, 1, 2, '8', '0', '2025-02-08', '16:30', 'vaibhavi arunkumar solanki', 'Delta Dental of Ca', '125185000000', '', '', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(53, 48, 1, 3, '0', '0', '2025-02-08', '11:00', '', '', '', '', '', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(54, 49, 2, 3, '0', '0', '2025-02-08', '09:00', '', '', '', '', '', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(55, 49, 2, 3, '0', '0', '2025-02-08', '08:30', '', '', '', '', '', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(56, 50, 1, 1, '6', '0', '2025-02-08', '09:00', 'Victoria Gaines', 'Guardian', '623805147', '', '', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(57, 51, 1, 3, '0', '0', '2025-02-08', '15:30', '', '', '', '', '', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(58, 52, 2, 3, '0', '0', '2025-02-08', '13:00', '', '', '', '', '', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(59, 53, 3, 3, '0', '0', '2025-02-08', '16:00', '', '', '', '', '', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(60, 54, 2, 3, '16', '0', '2025-02-08', '09:00', 'Christine Aniciete', 'Delta Care USA', '123682000000', '', '', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(61, 55, 2, 3, '8', '0', '2025-02-08', '13:00', 'abhijith krishnan Thiyata', 'Delta Dental of Ca', '125363000000', '', '', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(62, 56, 1, 3, '0', '0', '2025-02-08', '10:00', '', '', '', '', '', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(63, 57, 1, 3, '0', '0', '2025-02-08', '17:00', '', '', '', '', '', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(64, 57, 1, 3, '0', '0', '2025-02-08', '16:00', '', '', '', '', '', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(65, 58, 1, 3, '0', '0', '2025-02-08', '12:00', '', '', '', '', '', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(66, 59, 2, 4, '0', '0', '2025-02-08', '13:00', '', '', '', '', '', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(67, 60, 1, 3, '0', '0', '2025-02-08', '15:00', '', '', '', '', '', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(68, 61, 3, 3, '0', '0', '2025-02-08', '11:00', '', '', '', '', '', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(69, 62, 1, 3, '0', '0', '2025-02-08', '15:30', '', '', '', '', '', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(70, 63, 1, 2, '8', '0', '2025-02-08', '10:30', 'Abhishek Chauhan', 'Delta Dental of Ca', '', '', '', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(71, 64, 1, 3, '0', '0', '2025-02-08', '10:30', '', '', '', '', '', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(72, 65, 2, 3, '8', '0', '2025-02-08', '13:40', 'abhijith krishnan Thiyata', 'Delta Dental of CA', '', '', '', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(73, 66, 1, 3, '0', '0', '2025-02-08', '15:00', '', '', '', '', '', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(74, 67, 1, 2, '17', '0', '2025-02-08', '12:00', 'BRIDGET EDIRISHINGHE', 'Guardian Dental', 'IUL675358', '', '', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(75, 68, 1, 2, '4', '0', '2025-02-08', '14:30', 'MRUNMAYI PARAG DHARMADHIKARI', 'Cigna', 'U8318583801', '', '', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(76, 69, 1, 3, '5', '0', '2025-02-08', '14:00', 'Katrina Chang', 'Delta Dental of WA', '966214073', '', '', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(77, 70, 1, 5, '18', '0', '2025-02-08', '14:00', 'Arthur Yllan', 'Humana', '124718867', '', '', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(78, 70, 1, 2, '18', '0', '2025-02-08', '14:00', 'Arthur Yllan', 'Humana', '124718867', '', '', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(79, 71, 2, 3, '0', '0', '2025-02-08', '10:00', '', '', '', '', '', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(80, 72, 1, 3, '0', '0', '2025-02-08', '11:00', '', '', '', '', '', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(81, 73, 1, 3, '0', '0', '2025-02-08', '16:30', '', '', '', '', '', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(82, 74, 1, 3, '11', '0', '2025-02-08', '16:00', 'Jessica Enriquez', 'Delta Dental', '120797000000', '', '', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(83, 75, 2, 3, '6', '0', '2025-02-08', '11:00', 'Cheng Lu', 'Guardian', '038-479074', '', '', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(84, 76, 1, 2, '0', '0', '2025-02-08', '15:00', '', '', '', '', '', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(85, 77, 1, 3, '19', '0', '2025-02-08', '16:30', 'RAMAKRISHNA KANNI', 'Delta Dental Of Arkansas', '18029434w', '', '', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(86, 78, 1, 2, '8', '0', '2025-02-08', '15:40', 'Sean Anthony Pierre', 'Delta Dental of Ca', '125589000000', '', '', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(87, 79, 1, 3, '0', '0', '2025-02-08', '16:30', '', '', '', '', '', 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `insurances`
--

DROP TABLE IF EXISTS `insurances`;
CREATE TABLE IF NOT EXISTS `insurances` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
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
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `insurances_created_by_foreign` (`created_by`),
  KEY `insurances_updated_by_foreign` (`updated_by`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `insurances`
--

INSERT INTO `insurances` (`id`, `name`, `phone`, `phone_ext`, `fax`, `fax_ext`, `website`, `email`, `address1`, `address2`, `city`, `state`, `zipcode`, `country`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Anthem Blue Cross', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, '2025-02-12 09:08:28', '2025-02-12 09:08:28'),
(2, 'Metlife', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, '2025-02-12 09:08:28', '2025-02-12 09:08:28'),
(3, 'Delta Dental of Illinois', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, '2025-02-12 09:08:28', '2025-02-12 09:08:28'),
(4, 'Cigna', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, '2025-02-12 09:08:28', '2025-02-12 09:08:28'),
(5, 'Delta Dental of WA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, '2025-02-12 09:08:28', '2025-02-12 09:08:28'),
(6, 'Guardian', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, '2025-02-12 09:08:28', '2025-02-12 09:08:28'),
(7, 'Delta Dental of California', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, '2025-02-12 09:08:28', '2025-02-12 09:08:28'),
(8, 'Delta Dental of CA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, '2025-02-12 09:08:28', '2025-02-12 09:08:28'),
(9, 'Delta Dental Ca', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(10, 'United Healthcare Dental', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(11, 'Delta Dental', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(12, 'Delta Dental of Ca.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(13, 'Delta Dental Of Massachussetts', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(14, 'United Concordia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(15, 'Delta Dental of Washington', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(16, 'Delta Care USA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(17, 'Guardian Dental', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(18, 'Humana', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(19, 'Delta Dental Of Arkansas', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2025_01_14_045831_create_offices_table', 1),
(6, '2025_01_17_095315_create_insurances_table', 1),
(7, '2025_01_17_151344_create_csv_table', 1),
(8, '2025_01_18_181645_create_patients_table', 1),
(9, '2025_01_18_182834_create_providers_table', 1),
(10, '2025_01_20_111313_create_procedures_table', 1),
(11, '2025_01_23_105404_create_appointments_table', 1),
(12, '2025_01_23_141850_create_temp_eligibility_patients_table', 1),
(26, '2025_02_10_065454_create_eligibility_histories_table', 2),
(19, '2025_02_09_120647_create_eligibility_patients_table', 1),
(25, '2025_01_26_091504_create_eligibilities_table', 2),
(22, '2025_02_22_123319_create_eligibility_group_number_data_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `offices`
--

DROP TABLE IF EXISTS `offices`;
CREATE TABLE IF NOT EXISTS `offices` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
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
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `offices_created_by_foreign` (`created_by`),
  KEY `offices_updated_by_foreign` (`updated_by`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `offices`
--

INSERT INTO `offices` (`id`, `name`, `phone`, `phone_ext`, `fax`, `fax_ext`, `website`, `email`, `address1`, `address2`, `city`, `state`, `zipcode`, `country`, `npi`, `tin`, `taxonomy_number`, `logo`, `photo`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Sunnyvale Dental Care', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, '2025-02-12 09:08:28', '2025-02-12 09:08:28'),
(2, 'FAMILY   DENTAL   CENTER', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(3, 'Morgan Hill Dental Studio', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

DROP TABLE IF EXISTS `patients`;
CREATE TABLE IF NOT EXISTS `patients` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `middle_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `age` int(11) DEFAULT NULL,
  `gender` enum('male','female','other') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cell_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `responsible_party` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `primary_dentist` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fee_schedule` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `preferred_clinic` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `patients_created_by_foreign` (`created_by`),
  KEY `patients_updated_by_foreign` (`updated_by`)
) ENGINE=MyISAM AUTO_INCREMENT=80 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `first_name`, `middle_name`, `last_name`, `dob`, `age`, `gender`, `email`, `cell_phone`, `responsible_party`, `primary_dentist`, `fee_schedule`, `preferred_clinic`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Eric', '', 'Lawson', '1955-03-19', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-12 09:08:28', '2025-02-12 09:08:28'),
(2, 'Seema', '', 'Gujjar', '1978-06-19', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-12 09:08:28', '2025-02-12 09:08:28'),
(3, 'Ronald', 'Francisco', 'Hernandez', '1988-01-02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-12 09:08:28', '2025-02-12 09:08:28'),
(4, 'Karla', '', 'Orantes', '1996-06-06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-12 09:08:28', '2025-02-12 09:08:28'),
(5, 'Syryeem', '', 'Icban', '1993-09-26', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-12 09:08:28', '2025-02-12 09:08:28'),
(6, 'Raj', '', 'Kommula', '1997-01-07', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-12 09:08:28', '2025-02-12 09:08:28'),
(7, 'Alina', '', 'Moretti', '1978-05-11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-12 09:08:28', '2025-02-12 09:08:28'),
(8, 'Maxim', '', 'Nikiforov', '1980-07-20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-12 09:08:28', '2025-02-12 09:08:28'),
(9, 'Vasanth', '', 'Jayaraman', '1986-01-15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-12 09:08:28', '2025-02-12 09:08:28'),
(10, 'Jacqueline', '', 'Brown', '1977-12-12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-12 09:08:28', '2025-02-12 09:08:28'),
(11, 'Jinghan', '', 'Yang', '1992-02-25', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-12 09:08:28', '2025-02-12 09:08:28'),
(12, 'Rakendu', '', 'Ruta', '2006-09-15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-12 09:08:28', '2025-02-12 09:08:28'),
(13, 'Lucy', '', 'Huang', '1994-10-17', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-12 09:08:28', '2025-02-12 09:08:28'),
(14, 'Lester', 'Presa', 'Dulce', '1983-12-22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-12 09:08:28', '2025-02-12 09:08:28'),
(15, 'Mercedes', '', 'Silva', '1994-01-08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(16, 'Evelyn', '', 'Riser', '2025-02-12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(17, 'Nicholas', '', 'Guadamuz', '1999-01-19', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(18, 'Ashmika', '', 'Singh', '1983-01-30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(19, 'Kimberly', '', 'Tandoc-Lavendure', '1983-02-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(20, 'Ryan', '', 'Bautista', '2003-11-12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(21, 'Nathan', '', 'Cuasito', '2003-06-29', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(22, 'Jaime', '', 'Lovato', '1982-08-13', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(23, 'Evelyn', '', 'Bautista', '1971-11-25', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(24, 'Lennox', '', 'Laverdure', '2007-01-25', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(25, 'Leone', '', 'Laverdure', '2009-05-16', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(26, 'Vrushali', 'Vinayak', 'Wankhede', '1993-03-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(27, 'Juliyana', '', 'Regmi', '1971-04-14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(28, 'Tony', '', 'Nguyen', '1990-02-10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(29, 'Vashana', '', 'Sharan', '2004-01-26', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(30, 'Daylan', '', 'Fitzgerald', '1990-03-27', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(31, 'Islambek', '', 'Nasirov', '2001-09-26', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(32, 'Jenny', '', 'Kately', '1982-01-16', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(33, 'Kimberly', '', 'Jarquin', '2004-07-25', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(34, 'Chhanda', '', 'Mahanty', '1991-04-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(35, 'Agna', '', 'Mohammed', '2006-02-19', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(36, 'Naomi', '', 'Holokai', '1994-07-06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(37, 'Naveena', '', 'Sura', '1994-07-15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(38, 'Fabiola', '', 'Ruiz Gutierrez', '1986-05-13', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(39, 'Daisy', '', 'Urias', '2009-09-17', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(40, 'Nathan', '', 'Lau', '2009-08-08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(41, 'Gordon', '', 'Lee', '1983-09-26', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(42, 'Ariana', '', 'Cortes', '1993-03-28', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(43, 'Irene', '', 'lin', '1988-12-03', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(44, 'Gretta', '', 'Arias', '1991-11-15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(45, 'Angesom', '', 'Gebremedhin', '1986-01-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(46, 'Jonhan', '', 'Chen', '2002-05-09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(47, 'vaibhavi', 'arunkumar', 'solanki', '1994-04-14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(48, 'Danny', '', 'Sac', '1996-01-19', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(49, 'Carlos', '', 'Colorado', '1983-01-15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(50, 'Victoria', '', 'Gaines', '1990-11-16', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(51, 'Edith', '', 'Amaya', '1962-10-13', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(52, 'Selbi', '', 'Danizem', '1996-06-18', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(53, 'Lilia', '', 'Andrea', '1996-05-05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(54, 'Christine', '', 'Aniciete', '1993-03-18', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(55, 'Banupriya', '', 'Krishnamoorthy', '1994-03-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(56, 'Angeles', '', 'Mondragon', '1981-01-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(57, 'Sai', '', 'Koh', '2025-02-12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(58, 'Kenia', '', 'Rocha', '2025-02-12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(59, 'Noemi', '', 'Barron', '2007-03-02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(60, 'Mela', '', 'M', '2025-12-11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(61, 'Michelle', '', 'Kelly', '1967-05-10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(62, 'Roberto', '', 'Rodriguez', '1978-06-20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(63, 'Natasha', '', 'Sekhon', '1991-03-29', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(64, 'Maria', '', 'Ederisinghe', '2006-10-02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(65, 'abhijith', 'krishnan', 'Thiyata', '1992-12-30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(66, 'Maria', '', 'Barrientos', '1976-06-09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(67, 'MARIA', '', 'EDIRISINGHE', '2006-10-02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(68, 'MRUNMAYI', 'PARAG', 'DHARMADHIKARI', '1997-06-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(69, 'Katrina', '', 'Chang', '1999-07-30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(70, 'Arthur', 'Moosie', 'Yllan', '1980-02-17', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(71, 'Tom', '', 'Cruz', '1955-11-25', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(72, 'Ruma', '', 'Chakraborty', '1967-03-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(73, 'Unita', '', 'Nigam', '1959-08-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(74, 'Jessica', '', 'Enriquez', '1986-07-11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(75, 'Cheng', '', 'Lu', '1988-12-30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(76, 'Daniel', '', 'Gray', '1962-11-03', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(77, 'RAMAKRISHNA', '', 'KANNI', '1982-03-04', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(78, 'Sean', 'Anthony', 'Pierre', '1987-03-31', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29'),
(79, 'John', '', 'Jamison', '1990-10-03', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `procedures`
--

DROP TABLE IF EXISTS `procedures`;
CREATE TABLE IF NOT EXISTS `procedures` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `patient_id` bigint(20) UNSIGNED NOT NULL,
  `insurance_id` bigint(20) UNSIGNED NOT NULL,
  `provider_id` bigint(20) UNSIGNED NOT NULL,
  `dos` date NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tooth` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `surface` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quadrant` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` decimal(10,2) NOT NULL,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `procedures_patient_id_foreign` (`patient_id`),
  KEY `procedures_insurance_id_foreign` (`insurance_id`),
  KEY `procedures_provider_id_foreign` (`provider_id`),
  KEY `procedures_created_by_foreign` (`created_by`),
  KEY `procedures_updated_by_foreign` (`updated_by`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `providers`
--

DROP TABLE IF EXISTS `providers`;
CREATE TABLE IF NOT EXISTS `providers` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `middle_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `gender` enum('male','female','other') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cell_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `providers_created_by_foreign` (`created_by`),
  KEY `providers_updated_by_foreign` (`updated_by`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `providers`
--

INSERT INTO `providers` (`id`, `first_name`, `middle_name`, `last_name`, `dob`, `age`, `gender`, `email`, `cell_phone`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Shun', NULL, 'Chien', NULL, NULL, NULL, NULL, NULL, 2, NULL, '2025-02-12 09:08:28', '2025-02-12 09:08:28'),
(2, 'Jacky', NULL, 'Chen', NULL, NULL, NULL, NULL, NULL, 2, NULL, '2025-02-12 09:08:28', '2025-02-12 09:08:28'),
(3, 'Bhawna', NULL, 'Gupta', NULL, NULL, NULL, NULL, NULL, 2, NULL, '2025-02-12 09:08:28', '2025-02-12 09:08:28'),
(4, 'Sunnyvale', NULL, 'Invisalign', NULL, NULL, NULL, NULL, NULL, 2, NULL, '2025-02-12 09:08:28', '2025-02-12 09:08:28'),
(5, 'Sima', NULL, 'Ghahroodi', NULL, NULL, NULL, NULL, NULL, 2, NULL, '2025-02-12 09:08:29', '2025-02-12 09:08:29');

-- --------------------------------------------------------

--
-- Table structure for table `temp_eligibility_patients`
--

DROP TABLE IF EXISTS `temp_eligibility_patients`;
CREATE TABLE IF NOT EXISTS `temp_eligibility_patients` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `clinic` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `appt_provider` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=121 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `temp_eligibility_patients`
--

INSERT INTO `temp_eligibility_patients` (`id`, `clinic`, `appt_provider`, `appt_date`, `appt_time`, `full_name`, `date_of_birth`, `hoh_full_name`, `prim_subscriber`, `prim_carrier_name`, `prim_subscriber_id`, `sec_carrier_name`, `sec_subscriber_id`, `created_at`, `updated_at`) VALUES
(1, 'Sunnyvale Dental Care', 'Shun Chien', '2025-02-08', '11:00 AM', 'Lawson, Eric', '1955-03-19', NULL, 'Eric Lawson', 'Anthem Blue Cross', '471M11976', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(2, 'Sunnyvale Dental Care', 'Jacky Chen', '2025-02-08', '03:00 PM', 'Gujjar, Seema', '1978-06-19', NULL, 'Amar Mahendrakar', 'Metlife', '606212284', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(3, 'Sunnyvale Dental Care', 'Jacky Chen', '2025-02-08', '02:00 PM', 'Hernandez, Ronald Francisco', '1988-01-02', NULL, 'Karla Orantes', 'Delta Dental of Illinois', '8091985104', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(4, 'Sunnyvale Dental Care', 'Jacky Chen', '2025-02-08', '12:00 PM', 'Orantes, Karla', '1996-06-06', NULL, 'Karla Orantes', 'Delta Dental of Illinois', '8091985104', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(5, 'Sunnyvale Dental Care', 'Jacky Chen', '2025-02-08', '09:00 AM', 'Icban, Syryeem', '1993-09-26', NULL, 'Syryeem Icban', 'Cigna', 'U6987947901', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(6, 'Sunnyvale Dental Care', 'Jacky Chen', '2025-02-08', '09:30 AM', 'Kommula, Raj', '1997-01-07', NULL, '', '', '', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(7, 'Sunnyvale Dental Care', 'Bhawna Gupta', '2025-02-08', '10:20 AM', 'Moretti, Alina', '1978-05-11', NULL, 'Maxim Nikiforov', 'Delta Dental of WA', '964478274', 'Metlife', '604742274', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(8, 'Sunnyvale Dental Care', 'Shun Chien', '2025-02-08', '09:30 AM', 'Moretti, Alina', '1978-05-11', NULL, 'Maxim Nikiforov', 'Delta Dental of WA', '964478274', 'Metlife', '604742274', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(9, 'Sunnyvale Dental Care', 'Shun Chien', '2025-02-08', '09:00 AM', 'Nikiforov, Maxim', '1980-07-20', NULL, 'Maxim Nikiforov', 'Delta Dental of WA', '964478274', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(10, 'Sunnyvale Dental Care', 'Jacky Chen', '2025-02-08', '02:00 PM', 'Jayaraman, Vasanth', '1986-01-15', NULL, '', '', '', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(11, 'Sunnyvale Dental Care', 'Sunnyvale Invisalign', '2025-02-08', '11:00 AM', 'Brown, Jacqueline', '1977-12-12', NULL, '', '', '', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(12, 'Sunnyvale Dental Care', 'Shun Chien', '2025-02-08', '10:00 AM', 'Yang, Jinghan', '1992-02-25', NULL, 'Andrew Estornell', 'Guardian', '947231762', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(13, 'Sunnyvale Dental Care', 'Sunnyvale Invisalign', '2025-02-08', '10:20 AM', 'Ruta, Rakendu', '2006-09-15', NULL, 'SWEATHA PAVAR', 'Delta Dental of California', '1118619062', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(14, 'Sunnyvale Dental Care', 'Sunnyvale Invisalign', '2025-02-08', '09:00 AM', 'Huang, Lucy', '1994-10-17', NULL, 'Lucy Huang', 'Delta Dental of CA', '120976000000', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(15, 'Sunnyvale Dental Care', 'Sunnyvale Invisalign', '2025-02-08', '03:00 PM', 'Dulce, Lester Presa', '1983-12-22', NULL, 'Lester Dulce', 'Delta Dental of California', '122184000000', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(16, 'Sunnyvale Dental Care', 'Sunnyvale Invisalign', '2025-02-08', '10:00 AM', 'Silva, Mercedes', '1994-01-08', NULL, '', '', '', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(17, 'FAMILY   DENTAL   CENTER', 'Bhawna Gupta', '2025-02-08', '03:00 PM', 'Riser, Evelyn', '2025-02-12', NULL, '', '', '', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(18, 'FAMILY   DENTAL   CENTER', 'Sunnyvale Invisalign', '2025-02-08', '08:00 AM', 'Guadamuz, Nicholas', '1999-01-19', NULL, '', '', '', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(19, 'FAMILY   DENTAL   CENTER', 'Bhawna Gupta', '2025-02-08', '01:40 PM', 'Singh, Ashmika', '1983-01-30', NULL, 'Shalvin Singh', 'Delta Dental Ca', '225973000000', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(20, 'FAMILY   DENTAL   CENTER', 'Bhawna Gupta', '2025-02-08', '02:20 PM', 'Singh, Ashmika', '1983-01-30', NULL, 'Shalvin Singh', 'Delta Dental Ca', '225973000000', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(21, 'FAMILY   DENTAL   CENTER', 'Bhawna Gupta', '2025-02-08', '01:00 PM', 'Singh, Ashmika', '1983-01-30', NULL, 'Shalvin Singh', 'Delta Dental Ca', '225973000000', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(22, 'FAMILY   DENTAL   CENTER', 'Bhawna Gupta', '2025-02-08', '09:00 AM', 'Tandoc-Lavendure, Kimberly', '1983-02-01', NULL, 'Erik Laverdure', 'United Healthcare Dental', '988624712', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(23, 'FAMILY   DENTAL   CENTER', 'Bhawna Gupta', '2025-02-08', '11:30 AM', 'Bautista, Ryan', '2003-11-12', NULL, 'Evelyn Bautista', 'Delta Dental of Ca', '118990000000', 'Delta Dental of Ca', '121390000000', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(24, 'FAMILY   DENTAL   CENTER', 'Bhawna Gupta', '2025-02-08', '11:20 AM', 'Bautista, Ryan', '2003-11-12', NULL, 'Evelyn Bautista', 'Delta Dental of Ca', '118990000000', 'Delta Dental of Ca', '121390000000', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(25, 'FAMILY   DENTAL   CENTER', 'Bhawna Gupta', '2025-02-08', '10:50 AM', 'Cuasito, Nathan', '2003-06-29', NULL, 'Antoniette Cuasito', 'Delta Dental', '116168000000', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(26, 'FAMILY   DENTAL   CENTER', 'Bhawna Gupta', '2025-02-08', '10:00 AM', 'Lovato, Jaime', '1982-08-13', NULL, 'Jaime Lovato', 'Delta Dental', '230969000000', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(27, 'FAMILY   DENTAL   CENTER', 'Sunnyvale Invisalign', '2025-02-08', '11:20 AM', 'Bautista, Evelyn', '1971-11-25', NULL, 'Evelyn Bautista', 'Delta Dental of Ca', '118990000000', 'Delta Dental of Ca', '121390000000', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(28, 'FAMILY   DENTAL   CENTER', 'Bhawna Gupta', '2025-02-08', '09:50 AM', 'Laverdure, Lennox', '2007-01-25', NULL, 'Erik Laverdure', 'United Healthcare Dental', '988624712', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(29, 'FAMILY   DENTAL   CENTER', 'Bhawna Gupta', '2025-02-08', '09:00 AM', 'Laverdure, Leone', '2009-05-16', NULL, 'Erik Laverdure', 'United Healthcare Dental', '988624712', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(30, 'FAMILY   DENTAL   CENTER', 'Bhawna Gupta', '2025-02-08', '09:00 AM', 'Wankhede, Vrushali Vinayak', '1993-03-01', NULL, 'Vrushali Wankhede', 'Delta Dental', '123667000000', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(31, 'FAMILY   DENTAL   CENTER', 'Bhawna Gupta', '2025-02-08', '08:00 AM', 'Regmi, Juliyana', '1971-04-14', NULL, 'Juliyana Regmi', 'Delta Dental of Ca', '111097000000', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(32, 'FAMILY   DENTAL   CENTER', 'Bhawna Gupta', '2025-02-08', '08:00 AM', 'Nguyen, Tony', '1990-02-10', NULL, 'Tony Nguyen', 'Delta Dental of Ca.', '124899000000', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(33, 'FAMILY   DENTAL   CENTER', 'Sunnyvale Invisalign', '2025-02-08', '09:40 AM', 'Nguyen, Tony', '1990-02-10', NULL, 'Tony Nguyen', 'Delta Dental of Ca.', '124899000000', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(34, 'FAMILY   DENTAL   CENTER', 'Bhawna Gupta', '2025-02-08', '02:10 PM', 'Sharan, Vashana', '2004-01-26', NULL, 'Sandeep Sharan', 'Delta Dental of Ca.', '122775000000', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(35, 'FAMILY   DENTAL   CENTER', 'Bhawna Gupta', '2025-02-08', '10:00 AM', 'Fitzgerald, Daylan', '1990-03-27', NULL, 'Daylan Fitzgerald', 'Cigna', '108789044', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(36, 'FAMILY   DENTAL   CENTER', 'Sunnyvale Invisalign', '2025-02-08', '09:00 AM', 'Nasirov, Islambek', '2001-09-26', NULL, 'Islambek Nasirov', 'GUARDIAN', '642960031', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(37, 'Sunnyvale Dental Care', 'Shun Chien', '2025-02-08', '12:00 PM', 'Kately, Jenny', '1982-01-16', NULL, 'Jenny Kately', 'Delta Dental', '123489000000', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(38, 'FAMILY   DENTAL   CENTER', 'Sunnyvale Invisalign', '2025-02-08', '02:00 PM', 'Jarquin, Kimberly', '2004-07-25', NULL, '', '', '', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(39, 'Sunnyvale Dental Care', 'Bhawna Gupta', '2025-02-08', '11:00 AM', 'Mahanty, Chhanda', '1991-04-01', NULL, 'Chhanda Mahanty', 'Metlife', '130955820', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(40, 'Sunnyvale Dental Care', 'Bhawna Gupta', '2025-02-08', '02:30 PM', 'Mohammed, Agna', '2006-02-19', NULL, 'zainaba elayaril', 'cigna', 'U9200275301', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(41, 'Sunnyvale Dental Care', 'Jacky Chen', '2025-02-08', '11:00 AM', 'Holokai, Naomi', '1994-07-06', NULL, 'Naomi Holokai', 'Delta Dental', '906946000000', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(42, 'Sunnyvale Dental Care', 'Bhawna Gupta', '2025-02-08', '02:00 PM', 'Sura, Naveena', '1994-07-15', NULL, 'Naveena Sura', 'Delta Dental', '123674000000', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(43, 'Sunnyvale Dental Care', 'Bhawna Gupta', '2025-02-08', '02:00 PM', 'Sura, Naveena', '1994-07-15', NULL, 'Naveena Sura', 'Delta Dental', '123674000000', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(44, 'Morgan Hill Dental Studio', 'Bhawna Gupta', '2025-02-08', '09:00 AM', 'Ruiz Gutierrez, Fabiola', '1986-05-13', NULL, 'juan faranda', 'Delta Dental of CA', '118793000000', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(45, 'Sunnyvale Dental Care', 'Sunnyvale Invisalign', '2025-02-08', '09:30 AM', 'Urias, Daisy', '2009-09-17', NULL, 'Daisy Urias', 'Delta Dental of California', '100873000000', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(46, 'Sunnyvale Dental Care', 'Sunnyvale Invisalign', '2025-02-08', '02:00 PM', 'Lau, Nathan', '2009-08-08', NULL, 'Wai Kin Lau', 'Metlife', '912018469', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(47, 'FAMILY   DENTAL   CENTER', 'Sunnyvale Invisalign', '2025-02-08', '03:00 PM', 'Lee, Gordon', '1983-09-26', NULL, 'Gordon Lee', 'Delta Dental Of Massachussetts', '910900492', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(48, 'Morgan Hill Dental Studio', 'Bhawna Gupta', '2025-02-08', '01:00 PM', 'Cortes, Ariana', '1993-03-28', NULL, '', '', '', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(49, 'FAMILY   DENTAL   CENTER', 'Bhawna Gupta', '2025-02-08', '02:00 PM', 'lin, Irene', '1988-12-03', NULL, 'Irene lin', 'United Concordia', '', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(50, 'Morgan Hill Dental Studio', 'Bhawna Gupta', '2025-02-08', '10:00 AM', 'Arias, Gretta', '1991-11-15', NULL, '', '', '', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(51, 'Sunnyvale Dental Care', 'Bhawna Gupta', '2025-02-08', '09:30 AM', 'Gebremedhin, Angesom', '1986-01-01', NULL, '', '', '', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(52, 'Sunnyvale Dental Care', 'Jacky Chen', '2025-02-08', '02:00 PM', 'Chen, Jonhan', '2002-05-09', NULL, 'Jonhan Chen', 'Delta Dental of Washington', '966055683', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(53, 'Sunnyvale Dental Care', 'Jacky Chen', '2025-02-08', '04:30 PM', 'solanki, vaibhavi arunkumar', '1994-04-14', NULL, 'vaibhavi arunkumar solanki', 'Delta Dental of Ca', '125185000000', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(54, 'Sunnyvale Dental Care', 'Bhawna Gupta', '2025-02-08', '11:00 AM', 'Sac, Danny', '1996-01-19', NULL, '', '', '', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(55, 'FAMILY   DENTAL   CENTER', 'Bhawna Gupta', '2025-02-08', '09:00 AM', 'Colorado, Carlos', '1983-01-15', NULL, '', '', '', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(56, 'FAMILY   DENTAL   CENTER', 'Bhawna Gupta', '2025-02-08', '08:30 AM', 'Colorado, Carlos', '1983-01-15', NULL, '', '', '', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(57, 'Sunnyvale Dental Care', 'Shun Chien', '2025-02-08', '09:00 AM', 'Gaines, Victoria', '1990-11-16', NULL, 'Victoria Gaines', 'Guardian', '623805147', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(58, 'Sunnyvale Dental Care', 'Bhawna Gupta', '2025-02-08', '03:30 PM', 'Amaya, Edith', '1962-10-13', NULL, '', '', '', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(59, 'FAMILY   DENTAL   CENTER', 'Bhawna Gupta', '2025-02-08', '01:00 PM', 'Danizem, Selbi', '1996-06-18', NULL, '', '', '', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(60, 'Morgan Hill Dental Studio', 'Bhawna Gupta', '2025-02-08', '04:00 PM', 'Andrea, Lilia', '1996-05-05', NULL, '', '', '', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(61, 'FAMILY   DENTAL   CENTER', 'Bhawna Gupta', '2025-02-08', '09:00 AM', 'Aniciete, Christine', '1993-03-18', NULL, 'Christine Aniciete', 'Delta Care USA', '123682000000', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(62, 'FAMILY   DENTAL   CENTER', 'Bhawna Gupta', '2025-02-08', '01:00 PM', 'Krishnamoorthy, Banupriya', '1994-03-01', NULL, 'abhijith krishnan Thiyata', 'Delta Dental of Ca', '125363000000', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(63, 'Sunnyvale Dental Care', 'Bhawna Gupta', '2025-02-08', '10:00 AM', 'Mondragon, Angeles', '1981-01-01', NULL, '', '', '', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(64, 'Sunnyvale Dental Care', 'Bhawna Gupta', '2025-02-08', '05:00 PM', 'Koh, Sai', '2025-02-12', NULL, '', '', '', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(65, 'Sunnyvale Dental Care', 'Bhawna Gupta', '2025-02-08', '04:00 PM', 'Koh, Sai', '2025-02-12', NULL, '', '', '', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(66, 'Sunnyvale Dental Care', 'Bhawna Gupta', '2025-02-08', '12:00 PM', 'Rocha, Kenia', '2025-02-12', NULL, '', '', '', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(67, 'FAMILY   DENTAL   CENTER', 'Sunnyvale Invisalign', '2025-02-08', '01:00 PM', 'Barron, Noemi', '2007-03-02', NULL, '', '', '', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(68, 'Sunnyvale Dental Care', 'Bhawna Gupta', '2025-02-08', '03:00 PM', 'M, Mela', '2025-12-11', NULL, '', '', '', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(69, 'Morgan Hill Dental Studio', 'Bhawna Gupta', '2025-02-08', '11:00 AM', 'Kelly, Michelle', '1967-05-10', NULL, '', '', '', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(70, 'Sunnyvale Dental Care', 'Bhawna Gupta', '2025-02-08', '03:30 PM', 'Rodriguez, Roberto', '1978-06-20', NULL, '', '', '', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(71, 'Sunnyvale Dental Care', 'Jacky Chen', '2025-02-08', '10:30 AM', 'Sekhon, Natasha', '1991-03-29', NULL, 'Abhishek Chauhan', 'Delta Dental of Ca', '', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(72, 'Sunnyvale Dental Care', 'Bhawna Gupta', '2025-02-08', '10:30 AM', 'Ederisinghe, Maria', '2006-10-02', NULL, '', '', '', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(73, 'FAMILY   DENTAL   CENTER', 'Bhawna Gupta', '2025-02-08', '01:40 PM', 'Thiyata, abhijith krishnan Srinivasan', '1992-12-30', NULL, 'abhijith krishnan Thiyata', 'Delta Dental of CA', '', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(74, 'Sunnyvale Dental Care', 'Bhawna Gupta', '2025-02-08', '03:00 PM', 'Barrientos, Maria', '1976-06-09', NULL, '', '', '', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(75, 'Sunnyvale Dental Care', 'Jacky Chen', '2025-02-08', '12:00 PM', 'EDIRISINGHE, MARIA', '2006-10-02', NULL, 'BRIDGET EDIRISHINGHE', 'Guardian Dental', 'IUL675358', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(76, 'Sunnyvale Dental Care', 'Jacky Chen', '2025-02-08', '02:30 PM', 'DHARMADHIKARI, MRUNMAYI PARAG', '1997-06-01', NULL, 'MRUNMAYI PARAG DHARMADHIKARI', 'Cigna', 'U8318583801', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(77, 'Sunnyvale Dental Care', 'Bhawna Gupta', '2025-02-08', '02:00 PM', 'Chang, Katrina', '1999-07-30', NULL, 'Katrina Chang', 'Delta Dental of WA', '966214073', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(78, 'Sunnyvale Dental Care', 'Sima Ghahroodi', '2025-02-08', '02:00 PM', 'Yllan, Arthur Moosie', '1980-02-17', NULL, 'Arthur Yllan', 'Humana', '124718867', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(79, 'Sunnyvale Dental Care', 'Jacky Chen', '2025-02-08', '02:00 PM', 'Yllan, Arthur Moosie', '1980-02-17', NULL, 'Arthur Yllan', 'Humana', '124718867', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(80, 'FAMILY   DENTAL   CENTER', 'Bhawna Gupta', '2025-02-08', '10:00 AM', 'Cruz, Tom', '1955-11-25', NULL, '', '', '', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(81, 'Sunnyvale Dental Care', 'Bhawna Gupta', '2025-02-08', '11:00 AM', 'Chakraborty, Ruma', '1967-03-01', NULL, '', '', '', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(82, 'Sunnyvale Dental Care', 'Bhawna Gupta', '2025-02-08', '04:30 PM', 'Nigam, Unita', '1959-08-01', NULL, '', '', '', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(83, 'Sunnyvale Dental Care', 'Bhawna Gupta', '2025-02-08', '04:00 PM', 'Enriquez, Jessica', '1986-07-11', NULL, 'Jessica Enriquez', 'Delta Dental', '120797000000', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(84, 'FAMILY   DENTAL   CENTER', 'Bhawna Gupta', '2025-02-08', '11:00 AM', 'Lu, Cheng', '1988-12-30', NULL, 'Cheng Lu', 'Guardian', '038-479074', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(85, 'Sunnyvale Dental Care', 'Jacky Chen', '2025-02-08', '03:00 PM', 'Gray, Daniel', '1962-11-03', NULL, '', '', '', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(86, 'Sunnyvale Dental Care', 'Bhawna Gupta', '2025-02-08', '04:30 PM', 'KANNI, RAMAKRISHNA', '1982-03-04', NULL, 'RAMAKRISHNA KANNI', 'Delta Dental Of Arkansas', '18029434w', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(87, 'Sunnyvale Dental Care', 'Jacky Chen', '2025-02-08', '03:40 PM', 'Pierre, Sean Anthony', '1987-03-31', NULL, 'Sean Anthony Pierre', 'Delta Dental of Ca', '125589000000', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(88, 'Sunnyvale Dental Care', 'Bhawna Gupta', '2025-02-08', '04:30 PM', 'Jamison, John', '1990-10-03', NULL, '', '', '', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(89, 'Sunnyvale Dental Care', NULL, '2025-02-08', '08:00 AM', '', '2025-02-12', NULL, '', '', '', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(90, 'FAMILY   DENTAL   CENTER', NULL, '2025-02-08', '12:00 PM', '', '2025-02-12', NULL, '', '', '', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(91, 'FAMILY   DENTAL   CENTER', NULL, '2025-02-08', '07:00 AM', '', '2025-02-12', NULL, '', '', '', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(92, 'FAMILY   DENTAL   CENTER', NULL, '2025-02-08', '07:00 AM', '', '2025-02-12', NULL, '', '', '', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(93, 'FAMILY   DENTAL   CENTER', NULL, '2025-02-08', '07:00 AM', '', '2025-02-12', NULL, '', '', '', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(94, 'Sunnyvale Dental Care', NULL, '2025-02-08', '02:00 PM', '', '2025-02-12', NULL, '', '', '', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(95, 'Sunnyvale Dental Care', NULL, '2025-02-08', '08:00 AM', '', '2025-02-12', NULL, '', '', '', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(96, 'Sunnyvale Dental Care', NULL, '2025-02-08', '01:00 PM', '', '2025-02-12', NULL, '', '', '', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(97, 'Sunnyvale Dental Care', NULL, '2025-02-08', '01:00 PM', '', '2025-02-12', NULL, '', '', '', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(98, 'FAMILY   DENTAL   CENTER', NULL, '2025-02-08', '04:00 PM', '', '2025-02-12', NULL, '', '', '', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(99, 'FAMILY   DENTAL   CENTER', NULL, '2025-02-08', '04:00 PM', '', '2025-02-12', NULL, '', '', '', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(100, 'Sunnyvale Dental Care', NULL, '2025-02-08', '09:50 AM', '', '2025-02-12', NULL, '', '', '', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(101, 'FAMILY   DENTAL   CENTER', NULL, '2025-02-08', '11:30 AM', '', '2025-02-12', NULL, '', '', '', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(102, 'FAMILY   DENTAL   CENTER', NULL, '2025-02-08', '12:30 PM', '', '2025-02-12', NULL, '', '', '', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(103, 'FAMILY   DENTAL   CENTER', NULL, '2025-02-08', '12:30 PM', '', '2025-02-12', NULL, '', '', '', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(104, 'Sunnyvale Dental Care', NULL, '2025-02-08', '08:00 AM', '', '2025-02-12', NULL, '', '', '', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(105, 'FAMILY   DENTAL   CENTER', NULL, '2025-02-08', '04:00 PM', '', '2025-02-12', NULL, '', '', '', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(106, 'FAMILY   DENTAL   CENTER', NULL, '2025-02-08', '04:00 PM', '', '2025-02-12', NULL, '', '', '', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(107, 'FAMILY   DENTAL   CENTER', NULL, '2025-02-08', '10:00 AM', '', '2025-02-12', NULL, '', '', '', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(108, 'FAMILY   DENTAL   CENTER', NULL, '2025-02-08', '12:00 PM', '', '2025-02-12', NULL, '', '', '', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(109, 'FAMILY   DENTAL   CENTER', NULL, '2025-02-08', '12:30 PM', '', '2025-02-12', NULL, '', '', '', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(110, 'Morgan Hill Dental Studio', NULL, '2025-02-08', '08:00 AM', '', '2025-02-12', NULL, '', '', '', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(111, 'Morgan Hill Dental Studio', NULL, '2025-02-08', '10:00 AM', '', '2025-02-12', NULL, '', '', '', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(112, 'Morgan Hill Dental Studio', NULL, '2025-02-08', '08:00 AM', '', '2025-02-12', NULL, '', '', '', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(113, 'Morgan Hill Dental Studio', NULL, '2025-02-08', '07:50 AM', '', '2025-02-12', NULL, '', '', '', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(114, 'Sunnyvale Dental Care', NULL, '2025-02-08', '08:00 AM', '', '2025-02-12', NULL, '', '', '', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(115, 'FAMILY   DENTAL   CENTER', NULL, '2025-02-08', '03:40 PM', '', '2025-02-12', NULL, '', '', '', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(116, 'FAMILY   DENTAL   CENTER', NULL, '2025-02-08', '07:00 AM', '', '2025-02-12', NULL, '', '', '', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(117, 'Morgan Hill Dental Studio', NULL, '2025-02-08', '12:00 PM', '', '2025-02-12', NULL, '', '', '', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(118, 'FAMILY   DENTAL   CENTER', NULL, '2025-02-08', '07:00 AM', '', '2025-02-12', NULL, '', '', '', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(119, 'FAMILY   DENTAL   CENTER', NULL, '2025-02-08', '12:30 PM', '', '2025-02-12', NULL, '', '', '', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25'),
(120, 'Sunnyvale Dental Care', NULL, '2025-02-08', '08:00 AM', '', '2025-02-12', NULL, '', '', '', '', '', '2025-02-12 09:08:25', '2025-02-12 09:08:25');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'samir', 'samir@admin.com', NULL, '$2y$12$fadhCwaXIhygxzbBu5CJ5uD9mt062AnnV084D9tKMQTlElBGLgdmG', NULL, '2025-01-04 02:57:35', '2025-01-12 02:46:41'),
(2, 'admin', 'admin@admin.com', NULL, '$2y$12$fadhCwaXIhygxzbBu5CJ5uD9mt062AnnV084D9tKMQTlElBGLgdmG', NULL, '2025-01-04 07:50:36', '2025-02-12 09:19:06'),
(3, 'abhay', 'abhay@admin.com', NULL, '$2y$12$fadhCwaXIhygxzbBu5CJ5uD9mt062AnnV084D9tKMQTlElBGLgdmG', NULL, '2025-02-02 00:39:49', '2025-02-02 00:39:49');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
