-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2017 at 10:31 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portal_oto_mientay`
--

-- --------------------------------------------------------

--
-- Table structure for table `hangxes`
--

CREATE TABLE `hangxes` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hangxes`
--

INSERT INTO `hangxes` (`id`, `name`, `alias`, `image`, `state`, `created_at`, `updated_at`) VALUES
(3, 'Civis1', 'civis', 'https://scontent.fsgn5-4.fna.fbcdn.net/v/t1.0-9/20479892_1557260964325006_1022192096669167408_n.jpg?oh=813a459f2165c93a74822916a580dcd0&oe=59FE28BC', 1, '2017-08-02 23:49:04', '2017-08-02 23:49:04'),
(4, 'Civis13', 'civis13', 'https://scontent.fsgn5-4.fna.fbcdn.net/v/t1.0-9/20479892_1557260964325006_1022192096669167408_n.jpg?oh=813a459f2165c93a74822916a580dcd0&oe=59FE28BC', 3, '2017-08-03 01:12:35', '2017-08-03 01:12:35'),
(5, 'Honda', 'honda', '4.PNG', 1, '2017-08-03 07:31:34', '2017-08-03 08:27:31');

-- --------------------------------------------------------

--
-- Table structure for table `loaixes`
--

CREATE TABLE `loaixes` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loaixes`
--

INSERT INTO `loaixes` (`id`, `name`, `alias`, `state`, `created_at`, `updated_at`) VALUES
(1, 'Ford', 'ford2', 2, NULL, '2017-08-03 01:39:23'),
(2, 'Ford2', 'fords2', 1, '2017-08-03 01:38:25', '2017-08-03 01:38:25'),
(4, 'Ford5', 'ford', 4, '2017-08-03 01:40:00', '2017-08-03 01:40:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(8, '2014_10_12_000000_create_users_table', 1),
(9, '2014_10_12_100000_create_password_resets_table', 1),
(10, '2017_07_25_125651_create_hangxes_table', 1),
(11, '2017_07_25_125733_create_loaixes_table', 1),
(12, '2017_07_25_130731_create_xes_table', 1),
(13, '2017_07_25_130936_create_xe__trangbis_table', 1),
(14, '2017_07_25_130956_create_trangbixes_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `trangbixes`
--

CREATE TABLE `trangbixes` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_xe_trangbi` int(10) UNSIGNED NOT NULL,
  `tbx_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trangbixes`
--

INSERT INTO `trangbixes` (`id`, `id_xe_trangbi`, `tbx_name`, `created_at`, `updated_at`) VALUES
(1, 1, 'lót', '2017-08-03 04:13:54', '2017-08-03 04:21:02'),
(3, 1, 'bô', '2017-08-03 04:21:54', '2017-08-03 04:21:54');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `xes`
--

CREATE TABLE `xes` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_hangxes` int(10) UNSIGNED NOT NULL,
  `id_loaixes` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nguongoc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gia_niem_yet` int(11) NOT NULL,
  `gia_dam_phan` int(11) NOT NULL,
  `dongco` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `congsuat` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `xes`
--

INSERT INTO `xes` (`id`, `id_hangxes`, `id_loaixes`, `name`, `alias`, `image`, `nguongoc`, `gia_niem_yet`, `gia_dam_phan`, `dongco`, `congsuat`, `created_at`, `updated_at`) VALUES
(2, 3, 1, 'Altis 1.8AT', 'Altis 1.8AT', '5.PNG', 'VN', 123, 12, '22', 14, '2017-08-03 02:30:38', '2017-08-03 16:39:58'),
(4, 5, 1, 'ceaaa', 'acsss', 'demo.PNG', 'VN', 12, 11, '11', 11, '2017-08-03 08:29:31', '2017-08-03 10:30:22'),
(5, 4, 2, 'adasd', 'civis3', '3.PNG', 'VN', 123, 1, '12', 12, '2017-08-03 10:28:02', '2017-08-03 10:28:02'),
(6, 4, 1, 'Civis11', '1', 'sss.PNG', 'viêt nam', 14, 12, '12', 12, '2017-08-03 10:28:47', '2017-08-03 10:29:56');

-- --------------------------------------------------------

--
-- Table structure for table `xe_trangbis`
--

CREATE TABLE `xe_trangbis` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_xes` int(10) UNSIGNED NOT NULL,
  `value` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `xe_trangbis`
--

INSERT INTO `xe_trangbis` (`id`, `id_xes`, `value`, `created_at`, `updated_at`) VALUES
(1, 2, 2, '2017-08-03 03:33:38', '2017-08-03 03:33:38'),
(3, 2, 3, '2017-08-03 03:44:36', '2017-08-03 03:50:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hangxes`
--
ALTER TABLE `hangxes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loaixes`
--
ALTER TABLE `loaixes`
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
-- Indexes for table `trangbixes`
--
ALTER TABLE `trangbixes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `trangbixes_id_xe_trangbi_foreign` (`id_xe_trangbi`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `xes`
--
ALTER TABLE `xes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `xes_id_hangxes_foreign` (`id_hangxes`),
  ADD KEY `xes_id_loaixes_foreign` (`id_loaixes`);

--
-- Indexes for table `xe_trangbis`
--
ALTER TABLE `xe_trangbis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `xe_trangbis_id_xes_foreign` (`id_xes`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hangxes`
--
ALTER TABLE `hangxes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `loaixes`
--
ALTER TABLE `loaixes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `trangbixes`
--
ALTER TABLE `trangbixes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `xes`
--
ALTER TABLE `xes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `xe_trangbis`
--
ALTER TABLE `xe_trangbis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `trangbixes`
--
ALTER TABLE `trangbixes`
  ADD CONSTRAINT `trangbixes_id_xe_trangbi_foreign` FOREIGN KEY (`id_xe_trangbi`) REFERENCES `xe_trangbis` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `xes`
--
ALTER TABLE `xes`
  ADD CONSTRAINT `xes_id_hangxes_foreign` FOREIGN KEY (`id_hangxes`) REFERENCES `hangxes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `xes_id_loaixes_foreign` FOREIGN KEY (`id_loaixes`) REFERENCES `loaixes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `xe_trangbis`
--
ALTER TABLE `xe_trangbis`
  ADD CONSTRAINT `xe_trangbis_id_xes_foreign` FOREIGN KEY (`id_xes`) REFERENCES `xes` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
