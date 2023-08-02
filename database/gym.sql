-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2023 at 05:43 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gym`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `UserId` bigint(20) UNSIGNED NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Phone` int(11) DEFAULT NULL,
  `Workout_plan` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `UserId`, `Name`, `Phone`, `Workout_plan`, `created_at`, `updated_at`) VALUES
(1, 2, 'Mary', 799656817, 'Body toning', '2023-03-14 11:35:36', '2023-03-14 11:35:36'),
(2, 3, 'Andrew Muriithi', 799656817, 'Body toning', '2023-03-14 12:33:58', '2023-03-14 12:33:58'),
(3, 4, 'Caroline', 706234592, 'Yoga and strength', '2023-04-11 05:02:41', '2023-04-11 05:02:41');

-- --------------------------------------------------------

--
-- Table structure for table `equipment`
--

CREATE TABLE `equipment` (
  `id` int(10) UNSIGNED NOT NULL,
  `Name` varchar(35) NOT NULL,
  `Use` varchar(35) NOT NULL,
  `Weight` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `Price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(14, '2014_10_12_000000_create_users_table', 1),
(15, '2014_10_12_100000_create_password_resets_table', 1),
(16, '2019_08_19_000000_create_failed_jobs_table', 1),
(17, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(18, '2022_06_15_054150_create_clients_table', 1),
(19, '2022_06_16_054034_create_trainers_table', 1),
(20, '2022_06_16_054127_create_programs_table', 1),
(21, '2022_06_16_054204_create_sessions_table', 1),
(22, '2022_06_16_054215_create_equipment_table', 1),
(23, '2022_08_04_041625_add_date_to_sessions_table', 1),
(24, '2022_08_04_045845_add_price_to_equipment_table', 1),
(25, '2022_08_10_063632_add_status_to_sessions_table', 1),
(26, '2022_08_11_134323_add_attendance_to_sessions_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE `programs` (
  `id` int(10) UNSIGNED NOT NULL,
  `Name` varchar(65) NOT NULL,
  `Day` varchar(65) NOT NULL,
  `Duration` varchar(50) NOT NULL,
  `TrainerId` int(10) UNSIGNED NOT NULL,
  `Price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`id`, `Name`, `Day`, `Duration`, `TrainerId`, `Price`, `created_at`, `updated_at`) VALUES
(1, 'Cardio', 'Monday', '45', 1, 3500, NULL, NULL),
(2, 'Heavy lifting', 'Wednesday', '60', 1, 1200, '2023-03-14 12:31:41', '2023-03-14 12:31:41'),
(5, 'zumba', 'Tuesday', '88', 1, 6500, '2023-04-11 06:10:01', '2023-04-11 06:10:01');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` int(10) UNSIGNED NOT NULL,
  `ProgramId` int(10) UNSIGNED NOT NULL,
  `ClientId` int(10) UNSIGNED NOT NULL,
  `TrainerId` int(10) UNSIGNED NOT NULL,
  `Duration` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `Date` varchar(65) NOT NULL,
  `Status` varchar(50) NOT NULL DEFAULT 'Pending',
  `Attendance` varchar(50) NOT NULL DEFAULT 'Absent'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `ProgramId`, `ClientId`, `TrainerId`, `Duration`, `created_at`, `updated_at`, `Date`, `Status`, `Attendance`) VALUES
(1, 1, 1, 1, '45', '2023-03-14 11:43:49', '2023-03-14 12:10:24', '2023-03-23', 'Approved', 'Present'),
(2, 1, 1, 1, '45', '2023-03-14 11:44:24', '2023-03-14 12:39:25', '2023-03-16', 'Pending', 'Present'),
(3, 2, 2, 1, '60', '2023-03-14 12:34:39', '2023-03-14 12:34:39', '2023-03-18', 'Pending', 'Absent'),
(4, 2, 1, 1, '45', '2023-03-24 12:12:02', '2023-03-24 12:12:02', '2023-03-25', 'Pending', 'Absent'),
(5, 1, 2, 1, '60', '2023-03-24 12:14:33', '2023-03-24 12:14:33', '2023-03-26', 'Pending', 'Absent'),
(6, 2, 2, 1, '45', '2023-03-24 12:14:57', '2023-03-24 12:18:24', '2023-03-27', 'Approved', 'Absent'),
(7, 1, 3, 1, '60', '2023-04-11 05:03:49', '2023-04-11 05:05:25', '2023-04-14', 'Approved', 'Present'),
(8, 5, 3, 2, '88', '2023-04-12 12:28:47', '2023-04-12 12:28:47', '2023-04-14', 'Pending', 'Absent');

-- --------------------------------------------------------

--
-- Table structure for table `trainers`
--

CREATE TABLE `trainers` (
  `id` int(10) UNSIGNED NOT NULL,
  `UserId` bigint(20) UNSIGNED NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Phone` int(11) NOT NULL,
  `Sector` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trainers`
--

INSERT INTO `trainers` (`id`, `UserId`, `Name`, `Phone`, `Sector`, `created_at`, `updated_at`) VALUES
(1, 1, 'Trainer George', 254785324, 'Cardio', NULL, NULL),
(2, 5, 'Trainer Timothy', 254785328, 'Cardio and yoga', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `type` tinyint(4) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Trainer George', 'trainer@gmail.com', NULL, '$2y$10$KDdbuZhPNy3Brx95y2LJg.y.ZpFPHmmIjjUgAKrwx55p/XqJ09336', 1, NULL, NULL, NULL),
(2, 'Client', 'client@gmail.com', NULL, '$2y$10$3LXUUnCRdjG4aZog4pA7fe/qjf15d5QyTwDwhRFhSBYncFlJQVrcy', 0, NULL, '2023-03-14 11:35:36', '2023-03-14 11:35:36'),
(3, 'Andrew Muriithi', 'andymush@gmail.com', NULL, '$2y$10$53xIV5azX4OKwIuEF4RQU.g/2tnkOU1DYKmD/CYmzMD4wkR/kP/PK', 0, NULL, '2023-03-14 12:33:57', '2023-03-14 12:33:57'),
(4, 'Caroline', 'mathini@gmail.com', NULL, '$2y$10$3SJrQ/I5dGozr89l1msMoOzLGW2mV2RNy4C1khKGSA8Apsz2Urkjq', 0, NULL, '2023-04-11 05:02:41', '2023-04-11 05:02:41'),
(5, 'Trainer Timothy', 'timothy@gmail.com', NULL, '$2y$10$crxwN8BM5mFE9u/ewcFekuUyDbwx/ZSKP4ekquiKiCgXy/d1CAX5u', 1, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `clients_userid_foreign` (`UserId`);

--
-- Indexes for table `equipment`
--
ALTER TABLE `equipment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `programs_trainerid_foreign` (`TrainerId`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_programid_foreign` (`ProgramId`),
  ADD KEY `sessions_clientid_foreign` (`ClientId`),
  ADD KEY `sessions_trainerid_foreign` (`TrainerId`);

--
-- Indexes for table `trainers`
--
ALTER TABLE `trainers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `trainers_userid_foreign` (`UserId`);

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
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `equipment`
--
ALTER TABLE `equipment`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sessions`
--
ALTER TABLE `sessions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `trainers`
--
ALTER TABLE `trainers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `clients`
--
ALTER TABLE `clients`
  ADD CONSTRAINT `clients_userid_foreign` FOREIGN KEY (`UserId`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `programs`
--
ALTER TABLE `programs`
  ADD CONSTRAINT `programs_trainerid_foreign` FOREIGN KEY (`TrainerId`) REFERENCES `trainers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sessions`
--
ALTER TABLE `sessions`
  ADD CONSTRAINT `sessions_clientid_foreign` FOREIGN KEY (`ClientId`) REFERENCES `clients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sessions_programid_foreign` FOREIGN KEY (`ProgramId`) REFERENCES `programs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sessions_trainerid_foreign` FOREIGN KEY (`TrainerId`) REFERENCES `trainers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `trainers`
--
ALTER TABLE `trainers`
  ADD CONSTRAINT `trainers_userid_foreign` FOREIGN KEY (`UserId`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
