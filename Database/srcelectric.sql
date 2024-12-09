-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2024 at 01:16 PM
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
-- Database: `srcelectric`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(191) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('9a502b3f2097bec9f353c5e93afc413a:timer', 'i:1726833888;', 1726833888),
('9a502b3f2097bec9f353c5e93afc413a', 'i:1;', 1726833888);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(191) NOT NULL,
  `owner` varchar(191) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(191) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(72, '0001_01_01_000001_create_cache_table', 10),
(73, '0001_01_01_000002_create_jobs_table', 10),
(74, '2024_08_23_012203_add_two_factor_columns_to_users_table', 10),
(75, '2024_08_23_012243_create_personal_access_tokens_table', 10),
(76, '2024_09_02_070851_create_products_table', 10),
(22, '2024_08_27_104632_create_products_table', 1),
(23, '2024_08_31_051610_create_testing_types_table', 1),
(24, '2024_08_31_052044_create_testing_details_table', 1),
(25, '2024_09_01_140240_create_testing_types_table', 2),
(26, '2024_09_01_144408_create_testing_types_table', 3),
(77, '2024_09_04_232744_create_testing_types_table', 10),
(36, '2024_09_02_071929_create_testing_types_table', 7),
(29, '2024_09_02_164439_create_testing_details_table', 6),
(78, '2024_09_05_061700_create_testingdetails_table', 10),
(71, '0001_01_01_000000_create_users_table', 10),
(70, '2024_09_07_072519_create_testing_details_table', 9),
(79, '2024_09_08_131835_create_testing_details_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Trackingid` varchar(191) NOT NULL,
  `ProductName` varchar(30) NOT NULL,
  `ProductDescription` varchar(1000) NOT NULL,
  `ProductImage` varchar(500) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `Trackingid`, `ProductName`, `ProductDescription`, `ProductImage`, `created_at`, `updated_at`) VALUES
(2, '014897094464', 'Liquid Handling', 'Liquid Handling', '1725794054Liquid Handling System 1.jpg', NULL, '2024-09-12 02:53:31'),
(8, '015334950214', 'Microscope', 'Microscope 1', '1726221080Microscope 1.jpg', NULL, NULL),
(11, '013432240232', 'Chamber', 'Chamber', '1726405024Enviromental Chamber 1.jpg', NULL, NULL),
(12, '015202447647', 'DAQ system', 'DAQ system testing', '1726833891DAQ System 1.webp', NULL, NULL),
(13, '012973579476', 'Fire Alarm System', 'Fire Alarm System test', '1726834345Fire Alarm System 1.jpg', NULL, NULL),
(14, '5931266954', 'Data Loggers', 'Data Loggers test', '1726837487Data Loggers 1.webp', NULL, NULL),
(15, '6505871371', 'Enviromental Chamber', 'Enviromental Chamber test', '1726838147Enviromental Chamber 1.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(191) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('rwFthqpxvajrrpYX0eyyeoP0PRGJKjbZBk5Tg3ft', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiWHBXdERNYmJsUFI4TTd3TUZEOUYxcGpXbWpvQVpydEYzdlIwT1NVZyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kYXNoYm9hcmQiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEyJEJQRklTdVBjR3NZbzdxbnB2ZTdZVWUyWEIzSk5OVUVoZkJmckxyOGNEZHoxb3hJNks0dDFHIjt9', 1726838805);

-- --------------------------------------------------------

--
-- Table structure for table `testing_details`
--

CREATE TABLE `testing_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `trackingid` varchar(191) NOT NULL,
  `userid` int(10) UNSIGNED NOT NULL,
  `productid` int(10) UNSIGNED NOT NULL,
  `testingtypeid` int(10) UNSIGNED NOT NULL,
  `status` varchar(191) NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testing_details`
--

INSERT INTO `testing_details` (`id`, `trackingid`, `userid`, `productid`, `testingtypeid`, `status`, `created_at`, `updated_at`) VALUES
(19, '1655484687167', 3, 8, 1, 'Reject', '2024-09-13 08:44:29', '2024-09-13 08:45:32'),
(17, '1636301255617', 3, 2, 2, 'Approve', '2024-09-13 08:28:20', '2024-09-13 08:29:09'),
(23, '1627228254150', 3, 11, 2, 'pending', '2024-09-17 15:04:17', '2024-09-17 15:04:17'),
(24, '224040842403', 3, 12, 4, 'Reject', '2024-09-20 20:02:24', '2024-09-20 20:02:32'),
(25, '451210057757', 3, 14, 4, 'pending', '2024-09-20 20:06:56', '2024-09-20 20:06:56'),
(26, '523493746992', 3, 13, 5, 'Reject', '2024-09-20 20:19:07', '2024-09-20 20:19:50'),
(27, '557357730710', 3, 13, 2, 'Approve', '2024-09-20 20:19:41', '2024-09-20 20:19:49');

-- --------------------------------------------------------

--
-- Table structure for table `testing_types`
--

CREATE TABLE `testing_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `TestingTypes` varchar(50) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `TestingTypeImages` varchar(500) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testing_types`
--

INSERT INTO `testing_types` (`id`, `TestingTypes`, `Description`, `TestingTypeImages`, `created_at`, `updated_at`) VALUES
(2, 'Failure Analysis', 'Failure Analysis', '1725795152Failure Analysis.jpg', NULL, '2024-09-12 10:26:48'),
(4, 'compliance Testing', 'compliance Test', '1726834200Compliance Testing.jpg', NULL, NULL),
(5, 'Relaibility Testing', 'Relaibility Test', '1726838300Relaibility Testing.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `role` varchar(191) NOT NULL,
  `status` varchar(191) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `role`, `status`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Laboratory', 'Lab@gmail.com', NULL, '$2y$12$BPFISuPcGsYo7qnpve7YUe2XB3JNNUEhfBfrLr8cDdz1oxI6K4t1G', NULL, NULL, NULL, 'Admin', 'Active', NULL, NULL, NULL, '2024-09-08 06:06:39', '2024-09-08 06:06:39'),
(3, 'Maryam', 'maryam@gmail.com', NULL, '$2y$12$TG6kpbwNTZFcmK3KE/G14Owk1DFtztZ6uc.HJeYqUB6SdU6wBknm6', NULL, NULL, NULL, 'User', 'Active', NULL, NULL, NULL, '2024-09-13 00:12:14', '2024-09-13 00:12:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `testing_details`
--
ALTER TABLE `testing_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `testing_details_userid_foreign` (`userid`),
  ADD KEY `testing_details_productid_foreign` (`productid`),
  ADD KEY `testing_details_testingtypeid_foreign` (`testingtypeid`);

--
-- Indexes for table `testing_types`
--
ALTER TABLE `testing_types`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `testing_details`
--
ALTER TABLE `testing_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `testing_types`
--
ALTER TABLE `testing_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
