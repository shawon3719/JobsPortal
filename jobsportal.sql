-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2019 at 11:29 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobsportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `experience` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `title`, `location`, `country`, `description`, `slug`, `salary`, `experience`, `created_at`, `updated_at`) VALUES
(1, 'PHP Developer', 'Dhaka', '', 'PHP DeveloperPHP DeveloperPHP DeveloperPHP Developer', 't-d', '15000', 'N/A', '2019-11-22 16:19:41', '2019-11-22 16:19:41'),
(3, 'Laravel Developer', 'Dhaka', '', 'Laravel DeveloperLaravel DeveloperLaravel DeveloperLaravel DeveloperLaravel DeveloperLaravel DeveloperLaravel DeveloperLaravel DeveloperLaravel DeveloperLaravel DeveloperLaravel Developer', 'l-d', '25000', 'N/A', '2019-11-23 09:08:43', '2019-11-23 09:08:43'),
(4, 'Front End Design', 'Dhaka', 'Bangladesh', 'Front End DesignFront End DesignFront End DesignFront End DesignFront End DesignFront End Design', 'front-end-design', '12000', 'N/A', '2019-11-23 23:21:12', '2019-11-24 00:36:10'),
(5, '.NET Develper', 'Chittagong', 'Bangladesh', '.NET Develper.NET Develper.NET Develper.NET Develper', 'net-develper', '21000', '0-1 year', '2019-11-24 00:37:12', '2019-11-24 00:37:12');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_11_22_083539_create_categories_table', 1),
(5, '2019_11_22_083734_create_companies_table', 1),
(7, '2019_11_22_083854_create_admins_table', 1),
(11, '2014_10_12_000000_create_users_table', 3),
(12, '2019_11_22_083812_create_jobs_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('shawon3719@diu.edu.bd', '$2y$10$J58gkPur4pKqVrPqG1U8heHhC7lRUt/pC8YXoC4vfClqrW4rL7E8K', '2019-11-23 23:49:01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cv` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 0 COMMENT '0=Inactive|1=Active|2=Ban',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `cv`, `email`, `email_verified_at`, `password`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Masudul Hasan', 'Shawon', NULL, 'shawon3719@diu.edu.bd', NULL, '$2y$10$puEg37b5xnA8O1nFrRhYcerq2ttlnX1o34n1rBaVrsiSTqA.jdvwa', 0, NULL, '2019-11-22 08:22:27', '2019-11-22 08:22:27'),
(4, 'Masudul', 'Hasan', NULL, 'shawon3719.ju@gmail.com', NULL, '$2y$10$mw9TG8b7jfDsmYNIyEowNu7NlQ99FACYMAcNipt2l4g2xvSZ8BRHu', 0, NULL, '2019-11-22 08:28:38', '2019-11-22 08:28:38'),
(5, 'Masudul', 'Hasan', NULL, 'shawon3719.jum@gmail.com', NULL, '$2y$10$Zg3y34lGukrOBje/nVzviu/tVAunCE0YSfCG1ont1UtCk/1QmCHx2', 0, NULL, '2019-11-22 08:34:28', '2019-11-22 08:34:28'),
(6, 'Masudul', 'Hasan', NULL, 'shawon3719.jnu@gmail.com', NULL, '$2y$10$BQKny97Vw0.LxKw07.EGEuKWrrWWwrbATWS7hdOszilQBNCdh4T3e', 0, NULL, '2019-11-22 08:35:58', '2019-11-22 08:35:58'),
(7, 'kjasndjk', 'nnsabdmsa', NULL, 'nasdsa@gmail.com', NULL, '$2y$10$HFhGhi/zMM0jEQBKORajeO7ZIgfuyn66MJTJj4VYZ5buwIm6eY772', 0, NULL, '2019-11-22 08:46:12', '2019-11-22 08:46:12'),
(8, 'nsdfd', 'mnsnd', NULL, 'abcd@gmail.com', NULL, '$2y$10$xQ37bTrWljqtdvU0xE7ha.YNO56yog03EhYnWF1YA.Kpg82qLZ5LS', 0, NULL, '2019-11-22 08:52:52', '2019-11-22 08:52:52'),
(9, 'nsdfd', 'mnsnd', NULL, 'abcde@gmail.com', NULL, '$2y$10$nrxhYpGNrlJYemp683d3IemPl0AihlGnClZEnmd4MHMAmrRXCPTXq', 0, 'LxycmbuMIYSn9DhTzcnLZpG4TQKiCqtqYuVoVecK4aFHGmuy5P', '2019-11-22 08:59:10', '2019-11-22 08:59:10'),
(10, 'nsdfd', 'mnsnd', NULL, 'mhshawon.ju@gmail.com', NULL, '$2y$10$h5ubuJG299a9JSIYvIBbhuSPTyLly5tlFh5QmyRWO.wUGQp8gO9vq', 0, '8skS3p8vANxX7JCLD5baTD3q9ih6X5EdmR80gZdakwezo2VJm4', '2019-11-22 09:00:15', '2019-11-22 09:00:15'),
(14, 'Masudul Hasan', 'Shawon', 'C:\\xampp\\tmp\\phpBEC6.tmp', 'shawon3719@gmail.com', NULL, '$2y$10$PF11DCfHTmnBIvL0.8oeKeruyDIlOn9rIOYoiiSPgmSwasErTA2A2', 1, NULL, '2019-11-23 02:39:46', '2019-11-24 00:39:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
