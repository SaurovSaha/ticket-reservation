-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2023 at 06:02 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tikibusticketingsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `buses`
--

CREATE TABLE `buses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `buses`
--

INSERT INTO `buses` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Hanif', 'Active', '2023-12-23 04:33:53', '2023-12-23 04:33:53'),
(2, 'Shamoli', 'Active', '2023-12-23 04:42:53', '2023-12-23 04:42:53'),
(3, 'SR', 'Active', '2023-12-23 04:43:19', '2023-12-23 04:43:19');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Dhaka', 'Active', '2023-12-23 08:17:19', '2023-12-23 08:17:19'),
(2, 'Chittagong', 'Active', '2023-12-23 08:30:03', '2023-12-23 08:30:03'),
(3, 'Cumilla', 'Active', '2023-12-23 08:30:18', '2023-12-23 08:30:18'),
(4, 'Cox\'s Bazar', 'Active', '2023-12-23 08:30:39', '2023-12-23 08:30:39');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(30, '2014_10_12_000000_create_users_table', 1),
(31, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(32, '2019_08_19_000000_create_failed_jobs_table', 1),
(33, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(34, '2023_12_21_192817_create_locations_table', 1),
(35, '2023_12_21_192858_create_seat_allocations_table', 1),
(36, '2023_12_23_090710_create_buses_table', 1),
(38, '2023_12_23_162550_create_trips_table', 2),
(39, '2023_12_24_085802_create_seat_alocations_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seat_alocations`
--

CREATE TABLE `seat_alocations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `trip_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `seat_number` int(11) NOT NULL,
  `is_booked` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seat_alocations`
--

INSERT INTO `seat_alocations` (`id`, `trip_id`, `user_id`, `seat_number`, `is_booked`, `created_at`, `updated_at`) VALUES
(1, 4, 1, 1, 1, NULL, '2023-12-24 03:28:10'),
(2, 4, NULL, 2, 1, '2023-12-24 05:13:19', '2023-12-24 05:25:19'),
(4, 4, NULL, 3, 1, '2023-12-24 05:14:40', '2023-12-24 05:27:12'),
(5, 4, NULL, 4, 1, '2023-12-24 05:15:25', '2023-12-24 07:49:48'),
(6, 4, NULL, 5, 1, '2023-12-24 05:27:43', '2023-12-24 07:57:42'),
(7, 4, 1, 6, 1, '2023-12-24 05:27:52', '2023-12-24 08:07:15'),
(8, 4, NULL, 7, 0, '2023-12-24 05:28:01', '2023-12-24 05:28:01'),
(9, 4, NULL, 8, 0, '2023-12-24 05:28:17', '2023-12-24 05:28:17'),
(10, 4, NULL, 9, 0, '2023-12-24 05:28:26', '2023-12-24 05:28:26'),
(11, 4, NULL, 10, 0, '2023-12-24 05:28:35', '2023-12-24 05:28:35'),
(12, 4, NULL, 11, 0, '2023-12-24 05:28:44', '2023-12-24 05:28:44'),
(13, 4, NULL, 12, 0, '2023-12-24 05:28:55', '2023-12-24 05:28:55'),
(14, 4, NULL, 13, 0, '2023-12-24 05:29:09', '2023-12-24 05:29:09'),
(15, 4, 1, 14, 1, '2023-12-24 05:29:17', '2023-12-24 08:19:48'),
(16, 4, 3, 15, 1, '2023-12-24 05:29:26', '2023-12-24 08:20:40'),
(17, 4, 1, 16, 1, '2023-12-24 05:29:33', '2023-12-24 08:07:59'),
(18, 4, NULL, 17, 0, '2023-12-24 05:29:47', '2023-12-24 05:29:47'),
(19, 4, NULL, 18, 0, '2023-12-24 05:29:55', '2023-12-24 05:29:55'),
(20, 4, NULL, 19, 0, '2023-12-24 05:31:47', '2023-12-24 05:31:47'),
(21, 4, NULL, 20, 0, '2023-12-24 05:32:03', '2023-12-24 05:32:03'),
(22, 4, NULL, 21, 0, '2023-12-24 05:32:21', '2023-12-24 05:32:21'),
(23, 4, NULL, 22, 1, '2023-12-24 05:32:30', '2023-12-24 07:45:03'),
(24, 4, NULL, 23, 0, '2023-12-24 05:32:40', '2023-12-24 05:32:40'),
(25, 4, NULL, 24, 0, '2023-12-24 05:32:55', '2023-12-24 05:32:55'),
(26, 4, NULL, 25, 0, '2023-12-24 05:33:11', '2023-12-24 05:33:11'),
(27, 4, NULL, 26, 0, '2023-12-24 05:33:20', '2023-12-24 05:33:20'),
(28, 4, NULL, 27, 0, '2023-12-24 05:33:31', '2023-12-24 05:33:31'),
(29, 4, NULL, 28, 0, '2023-12-24 05:33:45', '2023-12-24 05:33:45'),
(30, 4, NULL, 29, 0, '2023-12-24 05:33:55', '2023-12-24 05:33:55'),
(31, 4, NULL, 30, 1, '2023-12-24 05:34:03', '2023-12-24 07:44:57'),
(32, 4, NULL, 31, 0, '2023-12-24 05:34:15', '2023-12-24 05:34:15'),
(33, 4, NULL, 32, 1, '2023-12-24 05:34:24', '2023-12-24 06:59:07'),
(34, 5, NULL, 1, 0, '2023-12-24 05:34:43', '2023-12-24 05:34:43'),
(35, 5, NULL, 2, 0, '2023-12-24 05:34:50', '2023-12-24 05:34:50'),
(36, 5, NULL, 3, 0, '2023-12-24 05:34:57', '2023-12-24 05:34:57'),
(37, 5, NULL, 4, 1, '2023-12-24 05:35:09', '2023-12-24 05:36:37'),
(38, 5, NULL, 5, 1, '2023-12-24 05:35:16', '2023-12-24 06:59:48'),
(39, 5, NULL, 6, 1, '2023-12-24 05:35:24', '2023-12-24 06:59:20'),
(40, 6, NULL, 1, 0, '2023-12-24 05:35:36', '2023-12-24 05:35:36'),
(41, 6, NULL, 2, 0, '2023-12-24 05:35:45', '2023-12-24 05:35:45'),
(42, 6, NULL, 3, 0, '2023-12-24 05:35:52', '2023-12-24 05:35:52'),
(43, 6, NULL, 4, 0, '2023-12-24 05:36:00', '2023-12-24 05:36:00'),
(44, 6, NULL, 5, 0, '2023-12-24 05:36:07', '2023-12-24 05:36:07'),
(45, 6, NULL, 6, 0, '2023-12-24 05:36:16', '2023-12-24 05:36:16'),
(46, 8, 3, 1, 1, '2023-12-24 08:32:40', '2023-12-24 08:35:16'),
(47, 8, NULL, 2, 0, '2023-12-24 08:32:47', '2023-12-24 08:32:47'),
(48, 8, 3, 3, 1, '2023-12-24 08:32:55', '2023-12-24 08:35:29'),
(49, 8, NULL, 4, 0, '2023-12-24 08:33:03', '2023-12-24 08:33:03'),
(50, 8, NULL, 5, 0, '2023-12-24 08:33:11', '2023-12-24 08:33:11'),
(51, 8, 3, 6, 1, '2023-12-24 08:33:22', '2023-12-24 08:36:43'),
(52, 9, NULL, 1, 0, '2023-12-24 08:33:32', '2023-12-24 08:33:32'),
(53, 9, NULL, 2, 0, '2023-12-24 08:33:40', '2023-12-24 08:33:40'),
(54, 9, NULL, 3, 0, '2023-12-24 08:33:48', '2023-12-24 08:33:48'),
(55, 9, NULL, 4, 0, '2023-12-24 08:34:06', '2023-12-24 08:34:06'),
(56, 9, NULL, 5, 0, '2023-12-24 08:34:15', '2023-12-24 08:34:15');

-- --------------------------------------------------------

--
-- Table structure for table `trips`
--

CREATE TABLE `trips` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `transection_no` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `bus_id` bigint(20) UNSIGNED NOT NULL,
  `location_id_from` bigint(20) UNSIGNED NOT NULL,
  `location_id_to` bigint(20) UNSIGNED NOT NULL,
  `total_seat` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trips`
--

INSERT INTO `trips` (`id`, `transection_no`, `date`, `bus_id`, `location_id_from`, `location_id_to`, `total_seat`, `created_at`, `updated_at`) VALUES
(4, 'TR01', '2023-12-23', 1, 1, 2, 32, '2023-12-23 11:11:07', '2023-12-23 11:11:07'),
(5, 'TR05', '2023-12-23', 2, 1, 4, 32, '2023-12-23 11:38:48', '2023-12-23 11:38:48'),
(6, 'TR06', '2023-12-23', 3, 1, 4, 32, '2023-12-23 11:39:06', '2023-12-23 11:39:06'),
(7, 'TR07', '2023-12-25', 2, 1, 2, 32, '2023-12-24 00:23:12', '2023-12-24 00:23:12'),
(8, 'TR08', '2023-12-25', 1, 1, 4, 32, '2023-12-24 08:32:03', '2023-12-24 08:32:03'),
(9, 'TR09', '2023-12-25', 3, 1, 2, 32, '2023-12-24 08:32:19', '2023-12-24 08:32:19');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `type` int(11) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `mobile`, `address`, `email`, `email_verified_at`, `password`, `type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Saurov Saha', NULL, NULL, 'saurovsaha786@gmail.com', NULL, '$2y$12$nAaYpO8vw9RNnqOItHuDHeoUKfIKhy6MT3NuzMThgxAo7m7.ukDV2', NULL, NULL, '2023-12-23 03:34:00', '2023-12-23 03:34:00'),
(2, 'Akib', NULL, NULL, 'sauorv.unipro@gmail.com', NULL, '$2y$12$CsGWh45lXtcyO0SFKme6j.Gxnv/QLNi/IOK7Ct.gnXVc30DI4v4da', NULL, NULL, '2023-12-24 08:18:28', '2023-12-24 08:18:28'),
(3, 'Rahim', NULL, NULL, 'rahim@gmail.com', NULL, '$2y$12$TkeNdIoKON3/9E4xEUf/kORSJLGb6cakgMif3m2Geu45o6XgYOmoe', NULL, NULL, '2023-12-24 08:19:16', '2023-12-24 08:19:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buses`
--
ALTER TABLE `buses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
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
-- Indexes for table `seat_alocations`
--
ALTER TABLE `seat_alocations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `seat_alocations_trip_id_foreign` (`trip_id`),
  ADD KEY `seat_alocations_user_id_foreign` (`user_id`);

--
-- Indexes for table `trips`
--
ALTER TABLE `trips`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `trips_transection_no_unique` (`transection_no`),
  ADD KEY `trips_bus_id_foreign` (`bus_id`),
  ADD KEY `trips_location_id_from_foreign` (`location_id_from`),
  ADD KEY `trips_location_id_to_foreign` (`location_id_to`);

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
-- AUTO_INCREMENT for table `buses`
--
ALTER TABLE `buses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seat_alocations`
--
ALTER TABLE `seat_alocations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `trips`
--
ALTER TABLE `trips`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `seat_alocations`
--
ALTER TABLE `seat_alocations`
  ADD CONSTRAINT `seat_alocations_trip_id_foreign` FOREIGN KEY (`trip_id`) REFERENCES `trips` (`id`),
  ADD CONSTRAINT `seat_alocations_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `trips`
--
ALTER TABLE `trips`
  ADD CONSTRAINT `trips_bus_id_foreign` FOREIGN KEY (`bus_id`) REFERENCES `buses` (`id`),
  ADD CONSTRAINT `trips_location_id_from_foreign` FOREIGN KEY (`location_id_from`) REFERENCES `locations` (`id`),
  ADD CONSTRAINT `trips_location_id_to_foreign` FOREIGN KEY (`location_id_to`) REFERENCES `locations` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
