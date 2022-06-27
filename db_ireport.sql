-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3344
-- Generation Time: Jun 26, 2022 at 04:51 PM
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
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl` date DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul_berita`, `deskripsi`, `foto`, `sumber`, `tgl`, `user_id`, `created_at`, `updated_at`) VALUES
(4, 'Harap Bersabar! Ruas Jl HR Rasuna Said Jaksel Ini Masih Rusak', 'Jakarta - Badan jalan di Jl HR Rasuna Said ini masih rusak. Terlihat ada lubang di beberapa titik di kawasan dekat proyek LRT di Setiabudi, Kuningan, Jakarta Selatan, ini.\r\nPantauan detikcom di lokasi, Selasa (14/6/2022), pukul 17.04 WIB, jam pulang kantor, pengendara motor tampak menghindari lubang jalan tersebut. Adapun mobil yang melintas kerap memelankan kecepatannya.\r\n\r\nBaca artikel detiknews, \"Harap Bersabar! Ruas Jl HR Rasuna Said Jaksel Ini Masih Rusak\" selengkapnya https://news.detik.com/berita/d-6127074/harap-bersabar-ruas-jl-hr-rasuna-said-jaksel-ini-masih-rusak.\r\n\r\nDownload Apps Detikcom Sekarang https://apps.detik.com/detik/\"\"\"', '1655817590.jpg', 'https://news.detik.com/berita/d-6127074/harap-bersabar-ruas-jl-hr-rasuna-said-jaksel-ini-masih-rusak', '2022-06-14', NULL, NULL, NULL),
(5, 'Kacau! Baru 2 Jam Jalan Dicor Langsung Hancur Diterobos Warga, Netizen Auto-Geram: Giliran Rusak Demo Ngamuk-ngamuk', 'Sebuah unggahan video di Instagram viral. Dalam video itu memperlihatkan sebuah jalan yang disebut baru saja dicor langsung hancur tak berbentuk akibat ulah warga yang nekat menerobos jalanan cor yang masih basah.', '1655817842.jpg', 'https://www.suara.com/news/2022/06/14/085444/kacau-baru-2-jam-jalan-dicor-langsung-hancur-diterobos-warga-netizen-auto-geram-giliran-rusak-demo-ngamuk-ngamuk', '2022-06-14', NULL, NULL, NULL),
(6, 'Jalan Semai Rusak Parah, Warga Desak Pemkot Singkawang Segera Lakukan Perbaikan', 'Kondisi Jalan Semai yang sudah rusak sejak beberapa tahun lalu dan kini keadaannya semakin parah membuat Warga Kelurahan Sungai Garam Hilir, Kecamatan Singkawang Utara, Kota Singkawang, Kalimantan Barat, mendesak agar Pemkot setempat melakukan perbaikan.', '1655817929.jpg', 'https://kalbar.suara.com/read/2022/06/13/231104/jalan-semai-rusak-parah-warga-desak-pemkot-singkawang-segera-lakukan-perbaikan', '2022-06-13', NULL, NULL, NULL),
(7, 'Protes Jalan Rusak, Warga Sumenep Pasang Kotak Amal', 'Jalan yang menghubungkan Desa Duko dengan Desa Rubaru, Kecamatan Rubaru, Kabupaten Sumenep rusak parah. Kondisi itu telah lama berlangsung dan tak kunjung mendapat perbaikan dari pemerintah daerah setempat.', '1655855808.jpg', 'https://jatim.suara.com/read/2022/06/08/225047/protes-jalan-rusak-warga-sumenep-pasang-kotak-amal', '2022-06-08', NULL, NULL, NULL);

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
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id` int(11) UNSIGNED NOT NULL,
  `profil_id` bigint(255) UNSIGNED NOT NULL,
  `laporan_id` bigint(255) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id`, `profil_id`, `laporan_id`, `nama`, `isi`, `foto`, `created_at`, `updated_at`) VALUES
(1, 6, 1, 'msu', 'First', '1656001616.jpg', '2022-06-26 00:29:34', '2022-06-26 00:29:34'),
(2, 6, 1, 'msu', 's simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '1656001616.jpg', '2022-06-26 02:59:28', '2022-06-26 02:59:28'),
(3, 7, 1, 'Hanafi', 'Gelap bgt ngeri dibegal klo lewat situ malem-malem', 'noPP.jpg', '2022-06-26 03:38:41', '2022-06-26 03:38:41'),
(5, 7, 1, 'Hanafi', 'tes lagi', 'noPP.jpg', '2022-06-26 03:41:40', '2022-06-26 07:02:38'),
(6, 14, 1, 'bro', 'Segala sesuatu memiliki kesudahan, yang sudah berakhir biarlah berlalu dan yakinlah semua akan baik-baik saja', '1656254730.jpg', '2022-06-26 07:46:31', '2022-06-26 07:46:31');

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `provinsi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(255) UNSIGNED NOT NULL,
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

INSERT INTO `laporan` (`id`, `provinsi`, `alamat`, `foto`, `keterangan`, `user_id`, `vote`, `status_pengiriman`, `kategori`, `kategori_id`, `created_at`, `updated_at`, `tanggal`) VALUES
(1, 'JAWA TIMUR', 'Mojokerto Kabupaten', '1653806527.jpg', 'Parahhh beut nihh genangan airnya, keknya gorong\"nya harus dibersihin', 17, 2, NULL, 'Penerangan jalan', NULL, NULL, '2022-06-25 23:04:43', '2022-03-19'),
(5, 'JAWA TIMUR', 'Mojokerto Barat', '1655475659.jpg', 'Bolongannya dalem bgt nihh, bisa\" bikin kecelakaan yg parah', 19, 1, NULL, 'Penerangan jalan', NULL, NULL, '2022-06-25 23:05:30', '2022-03-31'),
(7, 'JAWA TIMUR', 'Mojokerto Kota', '1649220024.jpg', 'Segera perbaiki dong pak hehe', 20, 3, NULL, 'Jalan Raya', NULL, NULL, '2022-06-25 23:05:40', '2022-04-03'),
(10, 'JAWA TIMUR', 'pusat mojokerto', '1650255347.jpg', 'lampu jalannya mo roboh', 24, 1, NULL, 'Penerangan jalan', NULL, '2022-04-05 03:27:55', '2022-06-25 23:05:33', '2022-04-05'),
(11, 'JAWA TIMUR', 'Kab. Mojokerto', '1650244880.jpg', 'Banyak bolongan jalannya', 17, 1, NULL, 'Jalan Raya', NULL, '2022-04-17 18:21:20', '2022-06-25 23:05:43', '2022-04-18'),
(13, 'JAWA BARAT', 'Bogor kota', '1653805052.jpg', 'Bolong trotoarnya', 19, 1, NULL, 'Trotoar', NULL, '2022-05-28 23:17:32', '2022-06-25 23:05:47', '2022-05-02');

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
-- Table structure for table `ourteam`
--

CREATE TABLE `ourteam` (
  `id` int(255) UNSIGNED NOT NULL,
  `foto` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `quote` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ourteam`
--

INSERT INTO `ourteam` (`id`, `foto`, `nama`, `quote`) VALUES
(2, '1655787266.jpg', 'Kamilia', 'Istiqomah itu berat, yang ringan mah istirahat'),
(3, '1655789569.png', 'Hanafi Muammar', 'Jika memulai karena Allah, maka jangan menyerah karena manusia'),
(4, '1655808299.jpg', 'Alaric Rasendriya Aniko', 'Sukses bukan dia yang tidak pernah gagal, Tetapi dia yang menggagalkan kegagalan'),
(5, '1655808632.jpg', 'Irfan Arifin', 'Dunia tak lagi sama tak selamanya memihak kita, di saat kita mau berusaha di situlah kebahagiaan akan indah pada waktunya'),
(6, '1655808750.jpg', 'Raafi Asta', 'ingat kata tukang parkir, stangnya jangan dikunci');

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
  `pengajuan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `point` int(11) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `nama`, `alamat`, `tempatLahir`, `tanggalLahir`, `foto`, `pengajuan`, `point`, `user_id`, `created_at`, `updated_at`) VALUES
(4, 'Testing', 'Bogor', 'Jogja', '2021-12-31', '1650266591.jpg', '-', 0, 17, '2022-04-17 16:42:51', '2022-04-17 16:42:51'),
(6, 'msu', 'p', 'qwerty', '2022-06-23', '1656001616.jpg', '', 0, 19, '2022-04-17 17:19:30', '2022-04-18 00:23:11'),
(7, 'Hanafi', 'Palem resident', 'Batam', '2022-04-01', 'noPP.jpg', '-', 0, 20, '2022-04-18 00:26:03', '2022-04-18 00:26:03'),
(14, 'bro', 'bogor', 'bojong', '2022-06-26', '1656254730.jpg', '-', 0, 27, NULL, NULL);

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
  `pengajuan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `pengajuan`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(17, 'Tes 123', 'tes@mail.com', NULL, '$2y$10$yIVbdXMH5/BzAQj9vmNLVe09c6csIaId6oWBKLUlva0OUBN43m5Ki', '0', 1, NULL, '2022-04-17 16:42:51', '2022-04-17 16:42:51'),
(19, 'www', 'w@mail.com', NULL, '$2y$10$8JmrTmveGuizgDf2LB9SZ.XnajZMKtLC0RymtVlzq42.J80EjNT1u', '-', 2, NULL, '2022-04-17 17:19:30', '2022-06-23 09:19:46'),
(20, 'Hanafi Muamar', 'hanafi@gmail.com', NULL, '$2y$10$RXK493z646T/rte.m.Jn0esgN3.JzsiEdvYaSs.J2TsPKTaPFwEM2', '0', 2, NULL, '2022-04-18 00:26:03', '2022-06-23 09:15:11'),
(24, 'Satrio', 'tio@mail.com', NULL, '$2y$10$JwNU354G6UYlBZX204Hjiuc3MeoWyIi8tevRy5FATVmp/P98QmWYi', NULL, 2, NULL, '2022-06-23 23:23:54', '2022-06-23 23:23:54'),
(27, 'bro', 'bro@mail.com', NULL, '$2y$10$9HmlGfro0wgIWXt2MJD./eXL4Sgla6oV95U2z0lv/vDTUJ53g2Xta', NULL, 2, NULL, '2022-06-26 07:45:02', '2022-06-26 07:45:02');

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
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `foreignKey_profil` (`profil_id`),
  ADD KEY `foreignKey_laporan` (`laporan_id`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `laporan_kategori_id_foreign` (`kategori_id`),
  ADD KEY `user_id_foreign` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ourteam`
--
ALTER TABLE `ourteam`
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ourteam`
--
ALTER TABLE `ourteam`
  MODIFY `id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `berita`
--
ALTER TABLE `berita`
  ADD CONSTRAINT `berita_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `foreignKey_laporan` FOREIGN KEY (`laporan_id`) REFERENCES `laporan` (`id`),
  ADD CONSTRAINT `foreignKey_profil` FOREIGN KEY (`profil_id`) REFERENCES `profile` (`id`);

--
-- Constraints for table `laporan`
--
ALTER TABLE `laporan`
  ADD CONSTRAINT `laporan_kategori_id_foreign` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id`),
  ADD CONSTRAINT `user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `profile_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
