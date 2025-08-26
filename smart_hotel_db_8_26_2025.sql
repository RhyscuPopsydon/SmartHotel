-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 26, 2025 at 05:00 AM
-- Server version: 8.4.3
-- PHP Version: 8.3.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smart_hotel_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000001_create_cache_table', 1),
(2, '0001_01_01_000002_create_jobs_table', 1),
(3, '2025_08_25_093105_create_sessions_table', 1),
(4, '2025_08_25_182802_create_rooms_table', 1),
(5, '2025_08_25_184314_create_rooms_table_if_not_exists', 2);

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` bigint UNSIGNED NOT NULL,
  `room_number` int NOT NULL,
  `status` enum('vacant','occupied') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'vacant',
  `classification` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `room_number`, `status`, `classification`, `description`, `created_at`, `updated_at`) VALUES
(1, 101, 'occupied', 'Normal', 'A comfortable room with all the essentials, perfect for a good night’s rest without breaking the budget.', NULL, NULL),
(2, 102, 'vacant', 'Normal', 'A comfortable room with all the essentials, perfect for a good night’s rest without breaking the budget.', NULL, NULL),
(3, 103, 'vacant', 'Normal', 'A comfortable room with all the essentials, perfect for a good night’s rest without breaking the budget.', NULL, NULL),
(4, 104, 'vacant', 'Normal', 'A comfortable room with all the essentials, perfect for a good night’s rest without breaking the budget.', NULL, NULL),
(5, 105, 'vacant', 'Normal', 'A comfortable room with all the essentials, perfect for a good night’s rest without breaking the budget.', NULL, NULL),
(6, 106, 'vacant', 'Normal', 'A comfortable room with all the essentials, perfect for a good night’s rest without breaking the budget.', NULL, NULL),
(7, 107, 'vacant', 'Normal', 'A comfortable room with all the essentials, perfect for a good night’s rest without breaking the budget.', NULL, NULL),
(8, 108, 'vacant', 'Normal', 'A comfortable room with all the essentials, perfect for a good night’s rest without breaking the budget.', NULL, NULL),
(9, 109, 'vacant', 'Normal', 'A comfortable room with all the essentials, perfect for a good night’s rest without breaking the budget.', NULL, NULL),
(10, 110, 'vacant', 'Normal', 'A comfortable room with all the essentials, perfect for a good night’s rest without breaking the budget.', NULL, NULL),
(11, 111, 'vacant', 'Normal', 'A comfortable room with all the essentials, perfect for a good night’s rest without breaking the budget.', NULL, NULL),
(12, 112, 'vacant', 'Normal', 'A comfortable room with all the essentials, perfect for a good night’s rest without breaking the budget.', NULL, NULL),
(13, 113, 'vacant', 'Normal', 'A comfortable room with all the essentials, perfect for a good night’s rest without breaking the budget.', NULL, NULL),
(14, 114, 'vacant', 'Normal', 'A comfortable room with all the essentials, perfect for a good night’s rest without breaking the budget.', NULL, NULL),
(15, 115, 'vacant', 'Normal', 'A comfortable room with all the essentials, perfect for a good night’s rest without breaking the budget.', NULL, NULL),
(16, 116, 'vacant', 'Normal', 'A comfortable room with all the essentials, perfect for a good night’s rest without breaking the budget.', NULL, NULL),
(17, 117, 'vacant', 'Normal', 'A comfortable room with all the essentials, perfect for a good night’s rest without breaking the budget.', NULL, NULL),
(18, 118, 'vacant', 'Normal', 'A comfortable room with all the essentials, perfect for a good night’s rest without breaking the budget.', NULL, NULL),
(19, 119, 'vacant', 'Normal', 'A comfortable room with all the essentials, perfect for a good night’s rest without breaking the budget.', NULL, NULL),
(20, 120, 'vacant', 'Normal', 'A comfortable room with all the essentials, perfect for a good night’s rest without breaking the budget.', NULL, NULL),
(21, 201, 'vacant', 'Deluxe', 'Enjoy comfort and style in this deluxe room, offering extra space and upgraded amenities for a relaxing stay.', NULL, NULL),
(22, 202, 'vacant', 'Deluxe', 'Enjoy comfort and style in this deluxe room, offering extra space and upgraded amenities for a relaxing stay.', NULL, NULL),
(23, 203, 'vacant', 'Deluxe', 'Enjoy comfort and style in this deluxe room, offering extra space and upgraded amenities for a relaxing stay.', NULL, NULL),
(24, 204, 'vacant', 'Deluxe', 'Enjoy comfort and style in this deluxe room, offering extra space and upgraded amenities for a relaxing stay.', NULL, NULL),
(25, 205, 'vacant', 'Deluxe', 'Enjoy comfort and style in this deluxe room, offering extra space and upgraded amenities for a relaxing stay.', NULL, NULL),
(26, 206, 'vacant', 'Deluxe', 'Enjoy comfort and style in this deluxe room, offering extra space and upgraded amenities for a relaxing stay.', NULL, NULL),
(27, 207, 'vacant', 'Deluxe', 'Enjoy comfort and style in this deluxe room, offering extra space and upgraded amenities for a relaxing stay.', NULL, NULL),
(28, 208, 'vacant', 'Deluxe', 'Enjoy comfort and style in this deluxe room, offering extra space and upgraded amenities for a relaxing stay.', NULL, NULL),
(29, 209, 'vacant', 'Deluxe', 'Enjoy comfort and style in this deluxe room, offering extra space and upgraded amenities for a relaxing stay.', NULL, NULL),
(30, 210, 'vacant', 'Deluxe', 'Enjoy comfort and style in this deluxe room, offering extra space and upgraded amenities for a relaxing stay.', NULL, NULL),
(31, 211, 'vacant', 'Deluxe', 'Enjoy comfort and style in this deluxe room, offering extra space and upgraded amenities for a relaxing stay.', NULL, NULL),
(32, 212, 'vacant', 'Deluxe', 'Enjoy comfort and style in this deluxe room, offering extra space and upgraded amenities for a relaxing stay.', NULL, NULL),
(33, 213, 'vacant', 'Deluxe', 'Enjoy comfort and style in this deluxe room, offering extra space and upgraded amenities for a relaxing stay.', NULL, NULL),
(34, 214, 'vacant', 'Deluxe', 'Enjoy comfort and style in this deluxe room, offering extra space and upgraded amenities for a relaxing stay.', NULL, NULL),
(35, 215, 'vacant', 'Deluxe', 'Enjoy comfort and style in this deluxe room, offering extra space and upgraded amenities for a relaxing stay.', NULL, NULL),
(36, 301, 'vacant', 'VIP Suite', 'Experience top-class luxury in our VIP suite, where elegance meets comfort with premium services at your fingertips.', NULL, NULL),
(37, 302, 'vacant', 'VIP Suite', 'Experience top-class luxury in our VIP suite, where elegance meets comfort with premium services at your fingertips.', NULL, NULL),
(38, 303, 'vacant', 'VIP Suite', 'Experience top-class luxury in our VIP suite, where elegance meets comfort with premium services at your fingertips.', NULL, NULL),
(39, 304, 'vacant', 'VIP Suite', 'Experience top-class luxury in our VIP suite, where elegance meets comfort with premium services at your fingertips.', NULL, NULL),
(40, 305, 'vacant', 'VIP Suite', 'Experience top-class luxury in our VIP suite, where elegance meets comfort with premium services at your fingertips.', NULL, NULL),
(41, 306, 'vacant', 'VIP Suite', 'Experience top-class luxury in our VIP suite, where elegance meets comfort with premium services at your fingertips.', NULL, NULL),
(42, 307, 'vacant', 'VIP Suite', 'Experience top-class luxury in our VIP suite, where elegance meets comfort with premium services at your fingertips.', NULL, NULL),
(43, 308, 'vacant', 'VIP Suite', 'Experience top-class luxury in our VIP suite, where elegance meets comfort with premium services at your fingertips.', NULL, NULL),
(44, 309, 'vacant', 'VIP Suite', 'Experience top-class luxury in our VIP suite, where elegance meets comfort with premium services at your fingertips.', NULL, NULL),
(45, 310, 'vacant', 'VIP Suite', 'Experience top-class luxury in our VIP suite, where elegance meets comfort with premium services at your fingertips.', NULL, NULL),
(46, 401, 'vacant', 'Executive Suite', 'Perfect for business travelers, our Executive Suite provides a balance of productivity and relaxation.', NULL, NULL),
(47, 402, 'vacant', 'Executive Suite', 'Perfect for business travelers, our Executive Suite provides a balance of productivity and relaxation.', NULL, NULL),
(48, 501, 'vacant', 'Presidential Suite', 'The crown jewel of our hotel — a spacious suite with unmatched luxury, panoramic views, and personalized services.', NULL, NULL),
(49, 601, 'vacant', 'Honeymoon Suite', 'Celebrate love in our Honeymoon Suite, designed to create unforgettable memories with romantic ambiance and luxurious touches.', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('1lTs6QJ0RpwzXAbvpIQ7nGQavuQxtIDQdq6xF9Ah', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', 'YTozOntzOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czozMToiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2Rhc2hib2FyZCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NjoiX3Rva2VuIjtzOjQwOiJpb3YzcU8xWndFWjN2WU1YNXg5Q0QzMWQ2eGJZbGtpWW9mZ2NoOGJSIjt9', 1756174478),
('NPdhZLmiVA3tzCa7LozlXA07SdKp1cLv6e6WSx7A', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiNUNMcEVIQXNBYUt4RDFCa0pPdkpRWUN6bTNSeEs4eGphQ2JCMUhwWiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9yb29tcyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NzoidXNlcl9pZCI7aToyMDI1MTAwMTtzOjk6InVzZXJfbmFtZSI7czoxOToiRXJvbm4gR3l2ZXIgQ2FpbnRveSI7czo0OiJyb2xlIjtzOjU6Imd1ZXN0Ijt9', 1756148522);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact_number` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('guest','receptionist','admin') NOT NULL DEFAULT 'guest',
  `date_created` datetime DEFAULT CURRENT_TIMESTAMP,
  `date_updated` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `contact_number`, `password`, `role`, `date_created`, `date_updated`) VALUES
(20251001, 'Eronn Gyver Caintoy', 'eronngyver@gmail.com', '09155879213', '$2y$12$PnUxhed4nEDcic.IxjMNJ.i2dWAc49vI4NPX9Q9djprjU/4/RpLAC', 'guest', '2025-08-25 18:37:42', '2025-08-25 18:37:42');

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
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `rooms_room_number_unique` (`room_number`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20251002;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
