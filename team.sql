-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2024 at 05:53 PM
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
-- Database: `team`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `Id` int(11) NOT NULL,
  `appoint_date` datetime NOT NULL,
  `client_id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `attend_time` time NOT NULL,
  `attend_expect_time` time NOT NULL,
  `end_time` time NOT NULL,
  `price_expected` decimal(10,0) DEFAULT NULL,
  `price_full` decimal(10,0) DEFAULT NULL,
  `price_discount` decimal(10,0) DEFAULT NULL,
  `payment_price` decimal(10,0) DEFAULT NULL,
  `appoint_cancel` int(11) DEFAULT NULL,
  `appoint_cancel_reason` longtext DEFAULT NULL,
  `status` int(11) NOT NULL,
  `note` text NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`Id`, `appoint_date`, `client_id`, `emp_id`, `attend_time`, `attend_expect_time`, `end_time`, `price_expected`, `price_full`, `price_discount`, `payment_price`, `appoint_cancel`, `appoint_cancel_reason`, `status`, `note`, `create_date`) VALUES
(1, '2024-07-28 22:37:49', 1, 1, '08:37:49', '09:37:49', '11:37:49', 700, 600, 100, 500, NULL, NULL, 1, '', '2024-07-28 20:42:31');

-- --------------------------------------------------------

--
-- Table structure for table `blog_category`
--

CREATE TABLE `blog_category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(300) NOT NULL,
  `slug` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog_category`
--

INSERT INTO `blog_category` (`id`, `category_name`, `slug`) VALUES
(1, 'Advertisement', 'advertisement'),
(2, 'Web', 'web');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(191) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('noyonahmed492@gmail.com|127.0.0.1', 'i:1;', 1725462995),
('noyonahmed492@gmail.com|127.0.0.1:timer', 'i:1725462995;', 1725462995);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(191) NOT NULL,
  `owner` varchar(191) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `call_to_action`
--

CREATE TABLE `call_to_action` (
  `id` int(11) NOT NULL,
  `titile` varchar(300) NOT NULL,
  `btn_text` varchar(300) NOT NULL,
  `btn_url` varchar(300) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `Id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL DEFAULT 'Full name',
  `email` varchar(100) NOT NULL,
  `cell` varchar(25) NOT NULL,
  `voter_id_no` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `photo` text NOT NULL,
  `grade_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `note` text NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`Id`, `full_name`, `email`, `cell`, `voter_id_no`, `address`, `photo`, `grade_id`, `status`, `note`, `create_date`) VALUES
(1, 'Rob', 'jamanclient@gmail.com', '01966966966', '6565876987009', 'Khulna', '\"\"', 4, 1, 'Hadi is a bad boy', '2024-07-28 20:30:33'),
(2, 'Mr H M ERSHAAD', 'jannat@gmail.com', '01966966966', '6565876987009', 'Khulna', '\"\"', 5, 1, 'copy Client', '2024-07-28 20:31:38'),
(3, 'Jannatul ', 'jannat@gmail.com', '01966966966', '6565876987009', 'Khulna', '\"\"', 3, 1, 'copy Client', '2024-07-28 20:31:38'),
(4, 'Abdul', 'jamanclient@gmail.com', '01966966966', '6565876987009', 'Khulna', '\"\"', 2, 1, 'Hadi is a bad boy', '2024-07-28 20:30:33');

-- --------------------------------------------------------

--
-- Table structure for table `counter`
--

CREATE TABLE `counter` (
  `id` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  `subject` varchar(300) NOT NULL,
  `icon` text NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `Id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL DEFAULT 'Full name',
  `email` varchar(100) NOT NULL,
  `cell` varchar(25) NOT NULL DEFAULT '""',
  `voter_id_no` varchar(50) NOT NULL DEFAULT '""',
  `address` text NOT NULL DEFAULT '""',
  `photo` text NOT NULL DEFAULT '""',
  `grade_id` int(11) NOT NULL DEFAULT 1,
  `status` int(11) NOT NULL DEFAULT 1,
  `note` text NOT NULL DEFAULT '""',
  `create_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`Id`, `full_name`, `email`, `cell`, `voter_id_no`, `address`, `photo`, `grade_id`, `status`, `note`, `create_date`) VALUES
(9, 'hadijaman', 'zuxepyd@mailinator.com', '01746686868', '\"\"', '\"\"', '\"\"', 1, 1, '\"\"', '2024-08-06 17:08:41'),
(10, 'hadijaman', 'zuxepyd@mailinator.com', '01746686868', '\"\"', '\"\"', '\"\"', 1, 1, '\"\"', '2024-08-06 17:10:30'),
(11, 'hadijaman', 'zuxepyd@mailinator.com', '01746686868', '\"\"', '\"\"', '\"\"', 1, 1, '\"\"', '2024-08-06 17:10:47');

-- --------------------------------------------------------

--
-- Table structure for table `expertise`
--

CREATE TABLE `expertise` (
  `id` int(11) NOT NULL,
  `skill_year` varchar(300) NOT NULL,
  `discription` varchar(300) NOT NULL,
  `designation` varchar(300) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `expertise`
--

INSERT INTO `expertise` (`id`, `skill_year`, `discription`, `designation`, `create_date`, `update_date`) VALUES
(1, '2017 - Present', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum recusandae, cupiditate ullam dolor ratione repellendus.aliquid repudiandae saepe!.', 'UX Developer', '2024-08-10 17:55:42', '2024-08-10 17:55:42'),
(2, '2017 - Present', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum recusandae, cupiditate ullam dolor ratione repellendus.aliquid repudiandae saepe!.', 'laravel  Developer', '2024-08-10 17:55:42', '2024-08-10 17:55:42');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `grade`
--

CREATE TABLE `grade` (
  `Id` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `basic` decimal(10,0) NOT NULL,
  `status` int(11) DEFAULT 0,
  `note` text CHARACTER SET utf16 COLLATE utf16_general_ci NOT NULL DEFAULT ' \ 0 "  "',
  `userBy` int(11) NOT NULL DEFAULT 0,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `grade`
--

INSERT INTO `grade` (`Id`, `name`, `basic`, `status`, `note`, `userBy`, `create_date`) VALUES
(2, 'Doctor', 50000, 0, '', 1, '2024-07-28 20:21:14'),
(3, 'Update Admin', 40000, 0, '', 1, '2024-07-28 20:22:06'),
(4, 'Doctor Head', 70000, 0, '', 1, '2024-07-28 20:21:14'),
(7, 'CEO', 500000, 0, '\"\"', 0, '2024-08-03 17:15:38'),
(8, 'md', 12000, 0, '\"\"', 0, '2024-08-03 17:49:53'),
(9, 'admin', 122000, 0, '\"\"', 0, '2024-08-06 16:54:18'),
(10, 'mental', 3000, 0, '\"\"', 0, '2024-08-06 16:57:50'),
(11, 'mental', 3000, 0, '\"\"', 0, '2024-08-06 16:58:20');

-- --------------------------------------------------------

--
-- Table structure for table `hero`
--

CREATE TABLE `hero` (
  `id` int(11) NOT NULL,
  `hello_text` varchar(300) NOT NULL,
  `user_name` varchar(300) NOT NULL,
  `designation` text NOT NULL,
  `button_text` varchar(300) NOT NULL,
  `button_url` varchar(300) NOT NULL,
  `image` varchar(300) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hero`
--

INSERT INTO `hero` (`id`, `hello_text`, `user_name`, `designation`, `button_text`, `button_url`, `image`, `create_date`, `update_date`) VALUES
(1, 'hi', 'noyn', 'lara', 'f', 'h', 'heroPic/Screenshot (2).png', '2024-09-04 15:45:05', '2024-09-04 15:45:05');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
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
-- Table structure for table `personal_infos`
--

CREATE TABLE `personal_infos` (
  `id` int(11) NOT NULL,
  `titile` varchar(300) NOT NULL,
  `birth_date` text NOT NULL,
  `email` varchar(300) NOT NULL,
  `phone` text NOT NULL,
  `skype_username` varchar(300) NOT NULL,
  `address` text NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `person_about`
--

CREATE TABLE `person_about` (
  `id` int(11) NOT NULL,
  `main_titile` varchar(300) NOT NULL,
  `sub_titile` varchar(300) NOT NULL,
  `discription` varchar(300) NOT NULL,
  `btn_text` varchar(300) NOT NULL,
  `btn_urlo` text NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_category`
--

CREATE TABLE `portfolio_category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(300) NOT NULL,
  `slug` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `portfolio_category`
--

INSERT INTO `portfolio_category` (`id`, `category_name`, `slug`) VALUES
(1, 'Advertisement', 'advertisement'),
(2, 'Web', 'web');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `project_title` varchar(300) NOT NULL,
  `project_des` text NOT NULL,
  `project_image` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `cat_id`, `project_title`, `project_des`, `project_image`) VALUES
(1, 1, 'Ecommerce', 'This is my first ecommerce website', 'https://ecommerce.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pricing`
--

CREATE TABLE `pricing` (
  `id` int(11) NOT NULL,
  `package_name` varchar(300) NOT NULL,
  `pacakge_price` int(11) NOT NULL,
  `package_feature` text NOT NULL,
  `user` varchar(300) NOT NULL,
  `button_text` varchar(300) NOT NULL,
  `button_url` varchar(300) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `resume_education`
--

CREATE TABLE `resume_education` (
  `id` int(11) NOT NULL,
  `skill_year` varchar(300) NOT NULL,
  `discription` varchar(300) NOT NULL,
  `designation` text NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `resume_education`
--

INSERT INTO `resume_education` (`id`, `skill_year`, `discription`, `designation`, `create_date`, `update_date`) VALUES
(1, 'nn', 'ab', 'la', '2024-09-04 15:51:07', '2024-09-04 15:51:07');

-- --------------------------------------------------------

--
-- Table structure for table `resume_expertise`
--

CREATE TABLE `resume_expertise` (
  `id` int(11) NOT NULL,
  `skill_year` varchar(300) NOT NULL,
  `discription` varchar(300) NOT NULL,
  `designation` text NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `resume_expertise`
--

INSERT INTO `resume_expertise` (`id`, `skill_year`, `discription`, `designation`, `create_date`, `update_date`) VALUES
(1, 'e', 'e', 'e', '2024-09-04 15:48:38', '2024-09-04 15:48:38');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `Id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `time_start` datetime NOT NULL,
  `time_end` datetime NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `note` text NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`Id`, `emp_id`, `time_start`, `time_end`, `status`, `note`, `create_date`) VALUES
(1, 1, '2024-07-31 08:34:48', '2024-08-02 13:34:48', 1, '', '2024-07-28 20:37:26');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `titile` varchar(300) NOT NULL,
  `discription` text NOT NULL,
  `icon` text NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('7ezqoc3aZpdmwNpCBPlDB7Xr1j3Vp1r3FEU2coEj', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiU1FFWFk1MHdJUDRIejQxczdoZzhwQ01IQ2FCVVN0cnc4a1ZxRUlVSCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9teWRhc2hib2FyZCI7fXM6MzoidXJsIjthOjE6e3M6ODoiaW50ZW5kZWQiO3M6MzM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9teWRhc2hib2FyZCI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjI7fQ==', 1725465131);

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `skill_name` varchar(300) NOT NULL,
  `skill_persentense` varchar(300) NOT NULL,
  `create_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `cell` varchar(191) NOT NULL,
  `image` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `cell`, `image`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'noyon', '', '', 'noyonahmed492@gmail.com', NULL, '$2y$12$PmgDrolaE91kaPd2QN0EEOR4e3l1rcT5crryCBs64vL35kAiavLd2', NULL, '2024-09-04 09:23:38', '2024-09-04 09:23:38'),
(2, 'alim', '01797445516', 'userPic/Screenshot (3).png', 'noyonali@gmail.com', NULL, '$2y$12$JkgFzv.BaBZ5NZ2cBOGrxeqP.AeZBKfUYqCry3ooHRunJZ2Wj2rVG', NULL, '2024-09-04 09:37:54', '2024-09-04 09:37:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `blog_category`
--
ALTER TABLE `blog_category`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `call_to_action`
--
ALTER TABLE `call_to_action`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `counter`
--
ALTER TABLE `counter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `expertise`
--
ALTER TABLE `expertise`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `grade`
--
ALTER TABLE `grade`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `hero`
--
ALTER TABLE `hero`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `resume_education`
--
ALTER TABLE `resume_education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resume_expertise`
--
ALTER TABLE `resume_expertise`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `hero`
--
ALTER TABLE `hero`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `resume_education`
--
ALTER TABLE `resume_education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `resume_expertise`
--
ALTER TABLE `resume_expertise`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
