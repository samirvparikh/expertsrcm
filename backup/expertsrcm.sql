-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 19, 2025 at 05:34 PM
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
-- Table structure for table `csvs`
--

DROP TABLE IF EXISTS `csvs`;
CREATE TABLE IF NOT EXISTS `csvs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `full_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `insurance_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subscriber_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider_full_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `billing_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prcode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tooth` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `surface` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quadrant` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cost` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=60 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `csvs`
--

INSERT INTO `csvs` (`id`, `full_name`, `dob`, `insurance_name`, `subscriber_id`, `provider_full_name`, `billing_date`, `prcode`, `tooth`, `surface`, `quadrant`, `cost`, `created_at`, `updated_at`) VALUES
(1, 'Kafle, Sushil', '1979-05-12', 'Principal Financial Group', '927757423', 'Bhawna Gupta', '2024-12-31', 'D1110', NULL, NULL, NULL, '$150.00 ', '2025-01-19 11:53:16', '2025-01-19 11:53:16'),
(2, 'Kafle, Sushil', '1979-05-12', 'Principal Financial Group', '927757423', 'Bhawna Gupta', '2024-12-31', 'D0120', NULL, NULL, NULL, '$41.00 ', '2025-01-19 11:53:16', '2025-01-19 11:53:16'),
(3, 'Martin, Jaida', '2000-03-10', 'Guardian', 'UAL669722', 'Bhawna Gupta', '2024-12-31', 'D1206', NULL, NULL, NULL, '$41.00 ', '2025-01-19 11:53:16', '2025-01-19 11:53:16'),
(4, 'Martin, Jaida', '2000-03-10', 'Guardian', 'UAL669722', 'Bhawna Gupta', '2024-12-31', 'D0230', NULL, NULL, NULL, '$18.00 ', '2025-01-19 11:53:16', '2025-01-19 11:53:16'),
(5, 'Martin, Jaida', '2000-03-10', 'Guardian', 'UAL669722', 'Bhawna Gupta', '2024-12-31', 'D0220', NULL, NULL, NULL, '$27.00 ', '2025-01-19 11:53:16', '2025-01-19 11:53:16'),
(6, 'Martin, Jaida', '2000-03-10', 'Guardian', 'UAL669722', 'Bhawna Gupta', '2024-12-31', 'D0274', NULL, NULL, NULL, '$54.00 ', '2025-01-19 11:53:16', '2025-01-19 11:53:16'),
(7, 'Martin, Jaida', '2000-03-10', 'Guardian', 'UAL669722', 'Bhawna Gupta', '2024-12-31', 'D1110', NULL, NULL, NULL, '$83.00 ', '2025-01-19 11:53:16', '2025-01-19 11:53:16'),
(8, 'Martin, Jaida', '2000-03-10', 'Guardian', 'UAL669722', 'Bhawna Gupta', '2024-12-31', 'D0120', NULL, NULL, NULL, '$41.00 ', '2025-01-19 11:53:16', '2025-01-19 11:53:16'),
(9, 'Shankar, Anil', '1967-08-19', 'Delta Dental of Ca', '91419403', 'Bhawna Gupta', '2024-12-31', 'D0230', NULL, NULL, NULL, '$15.00 ', '2025-01-19 11:53:16', '2025-01-19 11:53:16'),
(10, 'Shankar, Anil', '1967-08-19', 'Delta Dental of Ca', '91419403', 'Bhawna Gupta', '2024-12-31', 'D0220', NULL, NULL, NULL, '$20.00 ', '2025-01-19 11:53:16', '2025-01-19 11:53:16'),
(11, 'Shankar, Anil', '1967-08-19', 'Delta Dental of Ca', '91419403', 'Bhawna Gupta', '2024-12-31', 'D0274', NULL, NULL, NULL, '$42.00 ', '2025-01-19 11:53:16', '2025-01-19 11:53:16'),
(12, 'Shankar, Anil', '1967-08-19', 'Delta Dental of Ca', '91419403', 'Bhawna Gupta', '2024-12-31', 'D1110', NULL, NULL, NULL, '$81.00 ', '2025-01-19 11:53:16', '2025-01-19 11:53:16'),
(13, 'Shankar, Anil', '1967-08-19', 'Delta Dental of Ca', '91419403', 'Bhawna Gupta', '2024-12-31', 'D0120', NULL, NULL, NULL, '$32.00 ', '2025-01-19 11:53:16', '2025-01-19 11:53:16'),
(14, 'Nguyen, Lorie', '1984-10-23', 'Metlife', '621582176', 'Bhawna Gupta', '2024-12-31', 'D1110', NULL, NULL, NULL, '$83.00 ', '2025-01-19 11:53:16', '2025-01-19 11:53:16'),
(15, 'Nguyen, Lorie', '1984-10-23', 'Metlife', '621582176', 'Bhawna Gupta', '2024-12-31', 'D0210', NULL, NULL, NULL, '$112.00 ', '2025-01-19 11:53:16', '2025-01-19 11:53:16'),
(16, 'Nguyen, Lorie', '1984-10-23', 'Metlife', '621582176', 'Bhawna Gupta', '2024-12-31', 'D0150', NULL, NULL, NULL, '$67.00 ', '2025-01-19 11:53:16', '2025-01-19 11:53:16'),
(17, 'Rodriguez, juan', '1993-03-14', 'Delta Dental of CA', '123000000000', 'Bhawna Gupta', '2024-12-31', 'D0230', NULL, NULL, NULL, '$14.00 ', '2025-01-19 11:53:16', '2025-01-19 11:53:16'),
(18, 'Rodriguez, juan', '1993-03-14', 'Delta Dental of CA', '123000000000', 'Bhawna Gupta', '2024-12-31', 'D0220', NULL, NULL, NULL, '$19.00 ', '2025-01-19 11:53:16', '2025-01-19 11:53:16'),
(19, 'Rodriguez, juan', '1993-03-14', 'Delta Dental of CA', '123000000000', 'Bhawna Gupta', '2024-12-31', 'D0274', NULL, NULL, NULL, '$40.00 ', '2025-01-19 11:53:16', '2025-01-19 11:53:16'),
(20, 'Rodriguez, juan', '1993-03-14', 'Delta Dental of CA', '123000000000', 'Bhawna Gupta', '2024-12-31', 'D1206', NULL, NULL, NULL, '$33.00 ', '2025-01-19 11:53:16', '2025-01-19 11:53:16'),
(21, 'Rodriguez, juan', '1993-03-14', 'Delta Dental of CA', '123000000000', 'Bhawna Gupta', '2024-12-31', 'D1110', NULL, NULL, NULL, '$77.00 ', '2025-01-19 11:53:16', '2025-01-19 11:53:16'),
(22, 'Rodriguez, juan', '1993-03-14', 'Delta Dental of CA', '123000000000', 'Bhawna Gupta', '2024-12-31', 'D0150', NULL, NULL, NULL, '$44.00 ', '2025-01-19 11:53:16', '2025-01-19 11:53:16'),
(23, 'Alcantar, Guadalupe Yasmin', '1997-07-10', 'Aflac Insurance Co.', '610-02-2876', 'Bhawna Gupta', '2024-12-31', 'D2392', '12', 'OD', NULL, '$157.00 ', '2025-01-19 11:53:16', '2025-01-19 11:53:16'),
(24, 'Shankar, Raushal', '2000-03-23', 'Delta Dental of Ca', '91419403', 'Bhawna Gupta', '2024-12-31', 'D1110', NULL, NULL, NULL, '$81.00 ', '2025-01-19 11:53:16', '2025-01-19 11:53:16'),
(25, 'Shankar, Raushal', '2000-03-23', 'Delta Dental of Ca', '91419403', 'Bhawna Gupta', '2024-12-31', 'D0220', NULL, NULL, NULL, '$19.00 ', '2025-01-19 11:53:16', '2025-01-19 11:53:16'),
(26, 'Shankar, Raushal', '2000-03-23', 'Delta Dental of Ca', '91419403', 'Bhawna Gupta', '2024-12-31', 'D0220', NULL, NULL, NULL, '$19.00 ', '2025-01-19 11:53:16', '2025-01-19 11:53:16'),
(27, 'Shankar, Raushal', '2000-03-23', 'Delta Dental of Ca', '91419403', 'Bhawna Gupta', '2024-12-31', 'D0274', NULL, NULL, NULL, '$40.00 ', '2025-01-19 11:53:16', '2025-01-19 11:53:16'),
(28, 'Shankar, Raushal', '2000-03-23', 'Delta Dental of Ca', '91419403', 'Bhawna Gupta', '2024-12-31', 'D0120', NULL, NULL, NULL, '$32.00 ', '2025-01-19 11:53:16', '2025-01-19 11:53:16'),
(29, 'Balaoro, Rouel', '2004-11-02', 'Delta Dental', '119000000000', 'Ayoub Al Alousi', '2025-02-01', 'D0120', NULL, NULL, NULL, '$32.00 ', '2025-01-19 11:53:16', '2025-01-19 11:53:16'),
(30, 'Balaoro, Rouel', '2004-11-02', 'Delta Dental', '119000000000', 'Ayoub Al Alousi', '2025-02-01', 'D0274', NULL, NULL, NULL, '$40.00 ', '2025-01-19 11:53:16', '2025-01-19 11:53:16'),
(31, 'Balaoro, Rouel', '2004-11-02', 'Delta Dental', '119000000000', 'Ayoub Al Alousi', '2025-02-01', 'D1206', NULL, NULL, NULL, '$33.00 ', '2025-01-19 11:53:16', '2025-01-19 11:53:16'),
(32, 'Balaoro, Rouel', '2004-11-02', 'Delta Dental', '119000000000', 'Ayoub Al Alousi', '2025-02-01', 'D0230', NULL, NULL, NULL, '$14.00 ', '2025-01-19 11:53:16', '2025-01-19 11:53:16'),
(33, 'Balaoro, Rouel', '2004-11-02', 'Delta Dental', '119000000000', 'Ayoub Al Alousi', '2025-02-01', 'D0220', NULL, NULL, NULL, '$19.00 ', '2025-01-19 11:53:16', '2025-01-19 11:53:16'),
(34, 'Balaoro, Rouel', '2004-11-02', 'Delta Dental', '119000000000', 'Ayoub Al Alousi', '2025-02-01', 'D1110', NULL, NULL, NULL, '$81.00 ', '2025-01-19 11:53:16', '2025-01-19 11:53:16'),
(35, 'Milanes, Jennielyn', '1997-01-14', 'Delta Dental of Ca.', '621-94-6246', 'Ayoub Al Alousi', '2025-02-01', 'D0230', NULL, NULL, NULL, '$15.00 ', '2025-01-19 11:53:16', '2025-01-19 11:53:16'),
(36, 'Milanes, Jennielyn', '1997-01-14', 'Delta Dental of Ca.', '621-94-6246', 'Ayoub Al Alousi', '2025-02-01', 'D0220', NULL, NULL, NULL, '$20.00 ', '2025-01-19 11:53:16', '2025-01-19 11:53:16'),
(37, 'Milanes, Jennielyn', '1997-01-14', 'Delta Dental of Ca.', '621-94-6246', 'Ayoub Al Alousi', '2025-02-01', 'D0274', NULL, NULL, NULL, '$42.00 ', '2025-01-19 11:53:16', '2025-01-19 11:53:16'),
(38, 'Milanes, Jennielyn', '1997-01-14', 'Delta Dental of Ca.', '621-94-6246', 'Ayoub Al Alousi', '2025-02-01', 'D7953', '16', NULL, NULL, '$400.00 ', '2025-01-19 11:53:16', '2025-01-19 11:53:16'),
(39, 'Milanes, Jennielyn', '1997-01-14', 'Delta Dental of Ca.', '621-94-6246', 'Ayoub Al Alousi', '2025-02-01', 'D1206', NULL, NULL, NULL, '$30.00 ', '2025-01-19 11:53:16', '2025-01-19 11:53:16'),
(40, 'Milanes, Jennielyn', '1997-01-14', 'Delta Dental of Ca.', '621-94-6246', 'Ayoub Al Alousi', '2025-02-01', 'D7210', '16', NULL, NULL, '$183.00 ', '2025-01-19 11:53:16', '2025-01-19 11:53:16'),
(41, 'Milanes, Jennielyn', '1997-01-14', 'Delta Dental of Ca.', '621-94-6246', 'Ayoub Al Alousi', '2025-02-01', 'D0120', NULL, NULL, NULL, '$32.00 ', '2025-01-19 11:53:16', '2025-01-19 11:53:16'),
(42, 'Milanes, Jennielyn', '1997-01-14', 'Delta Dental of Ca.', '621-94-6246', 'Ayoub Al Alousi', '2025-02-01', 'D1110', NULL, NULL, NULL, '$81.00 ', '2025-01-19 11:53:16', '2025-01-19 11:53:16'),
(43, 'Deshpande, Ruhi', '2018-02-27', 'Guardian', '947591564', 'Ayoub Al Alousi', '2025-02-01', 'D0230', NULL, NULL, NULL, '$18.00 ', '2025-01-19 11:53:16', '2025-01-19 11:53:16'),
(44, 'Deshpande, Ruhi', '2018-02-27', 'Guardian', '947591564', 'Ayoub Al Alousi', '2025-02-01', 'D0230', NULL, NULL, NULL, '$18.00 ', '2025-01-19 11:53:16', '2025-01-19 11:53:16'),
(45, 'Deshpande, Ruhi', '2018-02-27', 'Guardian', '947591564', 'Ayoub Al Alousi', '2025-02-01', 'D0220', NULL, NULL, NULL, '$27.00 ', '2025-01-19 11:53:16', '2025-01-19 11:53:16'),
(46, 'Deshpande, Ruhi', '2018-02-27', 'Guardian', '947591564', 'Ayoub Al Alousi', '2025-02-01', 'D0274', NULL, NULL, NULL, '$54.00 ', '2025-01-19 11:53:16', '2025-01-19 11:53:16'),
(47, 'Deshpande, Ruhi', '2018-02-27', 'Guardian', '947591564', 'Ayoub Al Alousi', '2025-02-01', 'D1206', NULL, NULL, NULL, '$41.00 ', '2025-01-19 11:53:16', '2025-01-19 11:53:16'),
(48, 'Deshpande, Ruhi', '2018-02-27', 'Guardian', '947591564', 'Ayoub Al Alousi', '2025-02-01', 'D1110', NULL, NULL, NULL, '$83.00 ', '2025-01-19 11:53:16', '2025-01-19 11:53:16'),
(49, 'Deshpande, Ruhi', '2018-02-27', 'Guardian', '947591564', 'Ayoub Al Alousi', '2025-02-01', 'D0120', NULL, NULL, NULL, '$41.00 ', '2025-01-19 11:53:16', '2025-01-19 11:53:16'),
(50, 'Bautista, Eryn Kristianne', '2005-06-20', 'Delta Dental of Ca', '119000000000', 'Ayoub Al Alousi', '2025-02-01', 'D0230', NULL, NULL, NULL, '$14.00 ', '2025-01-19 11:53:16', '2025-01-19 11:53:16'),
(51, 'Bautista, Eryn Kristianne', '2005-06-20', 'Delta Dental of Ca', '119000000000', 'Ayoub Al Alousi', '2025-02-01', 'D1206', NULL, NULL, NULL, '$33.00 ', '2025-01-19 11:53:16', '2025-01-19 11:53:16'),
(52, 'Bautista, Eryn Kristianne', '2005-06-20', 'Delta Dental of Ca', '119000000000', 'Ayoub Al Alousi', '2025-02-01', 'D0120', NULL, NULL, NULL, '$32.00 ', '2025-01-19 11:53:16', '2025-01-19 11:53:16'),
(53, 'Bautista, Eryn Kristianne', '2005-06-20', 'Delta Dental of Ca', '119000000000', 'Ayoub Al Alousi', '2025-02-01', 'D0274', NULL, NULL, NULL, '$40.00 ', '2025-01-19 11:53:16', '2025-01-19 11:53:16'),
(54, 'Bautista, Eryn Kristianne', '2005-06-20', 'Delta Dental of Ca', '119000000000', 'Ayoub Al Alousi', '2025-02-01', 'D0220', NULL, NULL, NULL, '$19.00 ', '2025-01-19 11:53:16', '2025-01-19 11:53:16'),
(55, 'Bautista, Eryn Kristianne', '2005-06-20', 'Delta Dental of Ca', '119000000000', 'Ayoub Al Alousi', '2025-02-01', 'D1110', NULL, NULL, NULL, '$81.00 ', '2025-01-19 11:53:16', '2025-01-19 11:53:16'),
(56, 'Ramil, Mary Jane', '1969-08-25', 'Delta Dental Ca', '123000000000', 'Bhawna Gupta', '2024-12-31', 'D2391', '30', 'B', NULL, '$118.00 ', '2025-01-19 11:53:16', '2025-01-19 11:53:16'),
(57, 'Ramil, Mary Jane', '1969-08-25', 'Delta Dental Ca', '123000000000', 'Bhawna Gupta', '2024-12-31', 'D2391', '29', 'O', NULL, '$118.00 ', '2025-01-19 11:53:16', '2025-01-19 11:53:16'),
(58, 'Ramil, Mary Jane', '1969-08-25', 'Delta Dental Ca', '123000000000', 'Bhawna Gupta', '2024-12-31', 'D2391', '28', 'O', NULL, '$118.00 ', '2025-01-19 11:53:16', '2025-01-19 11:53:16'),
(59, 'Ramil, Mary Jane', '1969-08-25', 'Delta Dental Ca', '123000000000', 'Bhawna Gupta', '2024-12-31', 'D2391', '21', 'B', NULL, '$118.00 ', '2025-01-19 11:53:16', '2025-01-19 11:53:16');

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
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `insurances`
--

INSERT INTO `insurances` (`id`, `name`, `phone`, `phone_ext`, `fax`, `fax_ext`, `website`, `email`, `address1`, `address2`, `city`, `state`, `zipcode`, `country`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Principal Financial Group', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, '2025-01-19 11:53:20', '2025-01-19 11:53:20'),
(2, 'Guardian', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, '2025-01-19 11:55:51', '2025-01-19 11:55:51'),
(3, 'Delta Dental of Ca', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, '2025-01-19 11:55:51', '2025-01-19 11:55:51'),
(4, 'Metlife', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, '2025-01-19 11:55:51', '2025-01-19 11:55:51'),
(5, 'Aflac Insurance Co.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, '2025-01-19 11:55:51', '2025-01-19 11:55:51'),
(6, 'Delta Dental', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, '2025-01-19 11:55:51', '2025-01-19 11:55:51'),
(7, 'Delta Dental of Ca.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, '2025-01-19 11:55:51', '2025-01-19 11:55:51'),
(8, 'Delta Dental Ca', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, '2025-01-19 11:55:51', '2025-01-19 11:55:51');

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
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2025_01_14_045831_create_offices_table', 2),
(7, '2025_01_17_095315_create_insurances_table', 3),
(8, '2025_01_17_151344_create_csv_table', 4),
(9, '2025_01_18_181645_create_patients_table', 5),
(10, '2025_01_18_182834_create_providers_table', 5);

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
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `offices`
--

INSERT INTO `offices` (`id`, `name`, `phone`, `phone_ext`, `fax`, `fax_ext`, `website`, `email`, `address1`, `address2`, `city`, `state`, `zipcode`, `country`, `npi`, `tin`, `taxonomy_number`, `logo`, `photo`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'test', '1234567890', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 2, '2025-01-18 09:06:37', '2025-01-18 09:06:37'),
(2, 'test2', '1234567890', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 2, '2025-01-18 09:06:50', '2025-01-18 09:06:50');

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
  UNIQUE KEY `patients_email_unique` (`email`),
  KEY `patients_created_by_foreign` (`created_by`),
  KEY `patients_updated_by_foreign` (`updated_by`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `first_name`, `middle_name`, `last_name`, `dob`, `age`, `gender`, `email`, `cell_phone`, `responsible_party`, `primary_dentist`, `fee_schedule`, `preferred_clinic`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Sushil', '', 'Kafle', '1979-05-12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-01-19 11:53:20', '2025-01-19 11:53:20'),
(2, 'Jaida', '', 'Martin', '2000-03-10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-01-19 11:55:51', '2025-01-19 11:55:51'),
(3, 'Anil', '', 'Shankar', '1967-08-19', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-01-19 11:55:51', '2025-01-19 11:55:51'),
(4, 'Lorie', '', 'Nguyen', '1984-10-23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-01-19 11:55:51', '2025-01-19 11:55:51'),
(5, 'juan', '', 'Rodriguez', '1993-03-14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-01-19 11:55:51', '2025-01-19 11:55:51'),
(6, 'Guadalupe', 'Yasmin', 'Alcantar', '1997-07-10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-01-19 11:55:51', '2025-01-19 11:55:51'),
(7, 'Raushal', '', 'Shankar', '2000-03-23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-01-19 11:55:51', '2025-01-19 11:55:51'),
(8, 'Rouel', '', 'Balaoro', '2004-11-02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-01-19 11:55:51', '2025-01-19 11:55:51'),
(9, 'Jennielyn', '', 'Milanes', '1997-01-14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-01-19 11:55:51', '2025-01-19 11:55:51'),
(10, 'Ruhi', '', 'Deshpande', '2018-02-27', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-01-19 11:55:51', '2025-01-19 11:55:51'),
(11, 'Eryn', 'Kristianne', 'Bautista', '2005-06-20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-01-19 11:55:51', '2025-01-19 11:55:51'),
(12, 'Mary', 'Jane', 'Ramil', '1969-08-25', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-01-19 11:55:51', '2025-01-19 11:55:51');

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
  UNIQUE KEY `providers_email_unique` (`email`),
  KEY `providers_created_by_foreign` (`created_by`),
  KEY `providers_updated_by_foreign` (`updated_by`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `providers`
--

INSERT INTO `providers` (`id`, `first_name`, `middle_name`, `last_name`, `dob`, `age`, `gender`, `email`, `cell_phone`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Bhawna', NULL, 'Gupta', NULL, NULL, NULL, NULL, NULL, 2, NULL, '2025-01-19 11:55:51', '2025-01-19 11:55:51'),
(2, 'Ayoub', NULL, 'Al Alousi', NULL, NULL, NULL, NULL, NULL, 2, NULL, '2025-01-19 11:55:51', '2025-01-19 11:55:51');

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
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'samir', 'samir@gmail.com', NULL, '$2y$12$He2BzUn1PmXklezrOwF50.3sWJGUdKXu8zziSz8l24tnXVSr2XTzO', NULL, '2025-01-04 01:27:35', '2025-01-12 01:16:41'),
(2, 'admin', 'admin@admin.com', NULL, '$2y$12$fadhCwaXIhygxzbBu5CJ5uD9mt062AnnV084D9tKMQTlElBGLgdmG', NULL, '2025-01-04 06:20:36', '2025-01-13 23:02:51');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
