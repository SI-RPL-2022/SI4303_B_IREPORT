-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3344
-- Generation Time: May 24, 2022 at 01:43 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ireport`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul_berita` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subjudul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
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
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `vote` int(11) DEFAULT NULL,
  `status_pengiriman` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kategori_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id`, `judul`, `alamat`, `foto`, `keterangan`, `vote`, `status_pengiriman`, `kategori`, `kategori_id`, `created_at`, `updated_at`, `tanggal`) VALUES
(1, NULL, 'Mojokerto Kabupaten', '1650266653.jpg', 'Parahhh beut nihh genangan airnya, keknya gorong\"nya harus dibersihin', NULL, NULL, 'Jalan Raya', NULL, NULL, '2022-04-18 00:24:13', '2022-03-19'),
(5, NULL, 'Mojokerto Barat', '1649154674.jpg', 'Bolongannya dalem bgt nihh, bisa\" bikin kecelakaan yg parah', NULL, NULL, 'Trotoar', NULL, NULL, '2022-04-05 03:31:14', '2022-03-31'),
(7, NULL, 'Mojokerto Kota', '1649220024.jpg', 'Segera perbaiki dong pak hehe', NULL, NULL, 'Jalan Raya', NULL, NULL, '2022-04-05 21:40:24', '2022-04-03'),
(10, NULL, 'pusat mojokerto', '1650255347.jpg', 'lampu jalannya mo roboh', NULL, NULL, 'Penerangan jalan', NULL, '2022-04-05 03:27:55', '2022-04-17 21:15:47', '2022-04-05'),
(11, NULL, 'Kab. Mojokerto', '1650244880.jpg', 'Banyak bolongan jalannya', NULL, NULL, 'Jalan Raya', NULL, '2022-04-17 18:21:20', '2022-04-17 18:21:20', '2022-04-18');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2022_04_01_012655_create_profile_table', 1),
(5, '2022_04_01_013405_create_berita_table', 2),
(6, '2022_04_01_013548_create_kategori_table', 3),
(7, '2022_04_01_013643_create_laporan_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tempatLahir` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggalLahir` date DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `point` int(11) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `nama`, `alamat`, `tempatLahir`, `tanggalLahir`, `foto`, `point`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'basmalah', '123', 'p', '2022-04-07', 'C:\\Users\\Alaric\\AppData\\Local\\Temp\\php753D.tmp', 0, 10, '2022-04-06 16:44:08', '2022-04-06 16:44:08'),
(2, 'p', 'pp', 'pppp', '2022-04-07', 'D:\\DataWinAlaric\\Document\\TelU\\Semester 6\\RPL Capstone Project\\Tubes\\coding_\\IREPORT\\public\\image\\1649290057.jpg', 0, 15, '2022-04-06 17:07:37', '2022-04-06 17:07:37'),
(3, 'Hamba Allah', 'Dunia juga', 'Dunia', '2022-04-08', '1649587442.png', 0, 16, '2022-04-08 03:39:04', '2022-04-10 03:44:02'),
(4, 'Testing', 'Bogor', 'Jogja', '2021-12-31', 'D:\\DataWinAlaric\\Document\\TelU\\Semester 6\\RPL Capstone Project\\Tubes\\coding_\\IREPORT\\public\\image\\1650238971.jpg', 0, 17, '2022-04-17 16:42:51', '2022-04-17 16:42:51'),
(6, 'Raafi', 'Mengger Hilir', 'Padang', '2001-01-01', '1650266591.jpg', 0, 19, '2022-04-17 17:19:30', '2022-04-18 00:23:11'),
(7, 'Hanafi', 'Palem resident', 'Batam', '2022-04-01', 'noPP.jpg', 0, 20, '2022-04-18 00:26:03', '2022-04-18 00:26:03');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(5, 'aaa', 'a@gmail.com', NULL, '$2y$10$oMQlYy.u2U4PKWKeCY/A.uP9eXc0mMxRfAUsSR/HsP3WTB.Foplyq', NULL, '2022-04-05 21:32:46', '2022-04-05 21:32:46'),
(10, 'bismillah', 'bis@mail.com', NULL, '$2y$10$MOxoLckPK2/Y3fAr04FIruqdTaIr30JAWbr77J1pXlHjgHtmy9LfG', NULL, '2022-04-06 16:44:08', '2022-04-06 16:44:08'),
(11, 'qqq', 'q@mail.com', NULL, '$2y$10$.yTPlqPl6z3EkcquI.6i6eE2txmlF1jet5qTYhBv/DJMLEx2qwWPW', NULL, '2022-04-06 16:49:27', '2022-04-06 16:49:27'),
(14, 'sss', 's@mail', NULL, '$2y$10$spXc3DPwOp5rL0uj6jGa7u/odtWW2KnSUmjk6cgXfen2nnpDKH0h.', NULL, '2022-04-06 17:05:16', '2022-04-06 17:05:16'),
(15, 'ppp', 'p@mail.com', NULL, '$2y$10$6/ifGYuluOA2SNFBFHbgseVE.aJ6M8TM6PwC55UQhTg6loDekcn5K', NULL, '2022-04-06 17:07:37', '2022-04-06 17:07:37'),
(16, 'ccc', 'c@mail.com', NULL, '$2y$10$ZeOQePLJ7NN89SbOqIkTiOWi61D.Jw19O2dAzG1/MyFczJcN17ekW', NULL, '2022-04-08 03:39:04', '2022-04-08 03:39:04'),
(17, 'Tes 123', 'tes@mail.com', NULL, '$2y$10$yIVbdXMH5/BzAQj9vmNLVe09c6csIaId6oWBKLUlva0OUBN43m5Ki', NULL, '2022-04-17 16:42:51', '2022-04-17 16:42:51'),
(19, 'www', 'w@mail.com', NULL, '$2y$10$8JmrTmveGuizgDf2LB9SZ.XnajZMKtLC0RymtVlzq42.J80EjNT1u', NULL, '2022-04-17 17:19:30', '2022-04-17 17:19:30'),
(20, 'Hanafi Muamar', 'hanafi@gmail.com', NULL, '$2y$10$RXK493z646T/rte.m.Jn0esgN3.JzsiEdvYaSs.J2TsPKTaPFwEM2', NULL, '2022-04-18 00:26:03', '2022-04-18 00:26:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`),
  ADD KEY `berita_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `laporan_kategori_id_foreign` (`kategori_id`);

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
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profile_user_id_foreign` (`user_id`);

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
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `berita`
--
ALTER TABLE `berita`
  ADD CONSTRAINT `berita_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `laporan`
--
ALTER TABLE `laporan`
  ADD CONSTRAINT `laporan_kategori_id_foreign` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id`);

--
-- Constraints for table `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `profile_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
