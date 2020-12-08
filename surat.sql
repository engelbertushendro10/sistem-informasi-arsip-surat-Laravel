-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2020 at 06:28 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `surat`
--

-- --------------------------------------------------------

--
-- Table structure for table `agenda_m`
--

CREATE TABLE `agenda_m` (
  `id` int(11) NOT NULL,
  `nama_surat` varchar(191) NOT NULL,
  `no_surat` int(50) NOT NULL,
  `alamat_surat` text NOT NULL,
  `perihal_surat` varchar(191) NOT NULL,
  `tujuan` varchar(191) NOT NULL,
  `masuk` date DEFAULT NULL,
  `keluar` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agenda_m`
--

INSERT INTO `agenda_m` (`id`, `nama_surat`, `no_surat`, `alamat_surat`, `perihal_surat`, `tujuan`, `masuk`, `keluar`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Surat Dinas', 123456789, 'kakabotek', 'Oenting', 'kepala dinas', '2020-12-04', '2020-12-04', '2020-12-03 17:00:00', NULL, NULL),
(2, 'surat kedua', 1234567891, 'kakabotek', 'jkjkjkkj', 'kepala dinas', '2020-12-04', '2020-12-04', NULL, '2020-12-04 07:51:09', NULL),
(3, 'surat pertama', 89898989, 'kepala desa', '', 'kepala cabang', '2020-12-04', '2020-12-04', NULL, NULL, NULL),
(4, 'surat pertama', 19191991, 'fdfdf', '', 'kepala cabang', '2020-12-04', '2020-12-04', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `disposisis`
--

CREATE TABLE `disposisis` (
  `id` int(10) UNSIGNED NOT NULL,
  `no_disposisi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_agenda` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surat_id` int(10) UNSIGNED NOT NULL,
  `kepada` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggapan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `disposisis`
--

INSERT INTO `disposisis` (`id`, `no_disposisi`, `no_agenda`, `surat_id`, `kepada`, `keterangan`, `tanggapan`, `user_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, '3', '3', 8, 'manager', 'surat masuk', 'ok', 3, '2020-12-03 11:18:43', '2020-12-03 11:19:08', NULL),
(4, '4', '4', 6, 'staff', 'surat untuk staff', 'ok', 3, '2020-12-03 11:20:03', '2020-12-03 11:20:03', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jenis_surats`
--

CREATE TABLE `jenis_surats` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jenis_surats`
--

INSERT INTO `jenis_surats` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Surat Resmi', '2020-10-18 12:05:37', '2020-10-18 12:05:37', NULL),
(2, 'Surat Setengah Resmi', '2020-10-18 12:05:37', '2020-10-18 12:05:37', NULL),
(3, 'Surat Pribadi', '2020-10-18 12:05:37', '2020-10-18 12:05:37', NULL);

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
(3, '2018_02_01_095408_create_surats_table', 1),
(4, '2018_02_01_095643_create_disposisis_table', 1),
(5, '2018_02_01_100439_create_jenis_surats_table', 1),
(6, '2018_02_01_133127_foreign_key_surats', 1),
(7, '2018_02_01_133157_foreign_key_disposisis', 1);

-- --------------------------------------------------------

--
-- Table structure for table `suratkeluars`
--

CREATE TABLE `suratkeluars` (
  `id` int(11) NOT NULL,
  `no_surat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_agenda` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_surat_id` int(10) UNSIGNED NOT NULL,
  `tanggal_kirim` date NOT NULL,
  `tanggal_terima` date DEFAULT NULL,
  `pengirim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `perihal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipe` enum('masuk','keluar') COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `suratkeluars`
--

INSERT INTO `suratkeluars` (`id`, `no_surat`, `no_agenda`, `jenis_surat_id`, `tanggal_kirim`, `tanggal_terima`, `pengirim`, `perihal`, `tipe`, `user_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '12345678910', NULL, 3, '2020-12-03', '2020-12-03', 'KAKABOTEK', 'keluar', 'masuk', 3, '2020-12-02 12:08:30', '2020-12-02 12:29:06', '2020-12-02 12:29:06'),
(2, '9876543121', '1', 2, '2020-12-03', '2020-12-03', 'nadus', 'service', 'masuk', 3, '2020-12-02 12:17:24', '2020-12-02 12:29:01', '2020-12-02 12:29:01'),
(3, '12345678910', '1', 2, '2020-12-03', '2020-12-03', 'KAKABOTEK', 'service', 'masuk', 3, '2020-12-02 12:19:17', '2020-12-02 12:28:55', '2020-12-02 12:28:55'),
(4, '123456789', '1', 2, '2020-12-03', '2020-12-03', 'tino', 'kokong', 'keluar', 3, '2020-12-02 12:22:51', '2020-12-03 07:11:48', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `surats`
--

CREATE TABLE `surats` (
  `id` int(10) UNSIGNED NOT NULL,
  `no_surat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_agenda` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_surat_id` int(10) UNSIGNED NOT NULL,
  `tanggal_kirim` date NOT NULL,
  `tanggal_terima` date DEFAULT NULL,
  `pengirim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `perihal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipe` enum('masuk','keluar') COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `surats`
--

INSERT INTO `surats` (`id`, `no_surat`, `no_agenda`, `jenis_surat_id`, `tanggal_kirim`, `tanggal_terima`, `pengirim`, `perihal`, `tipe`, `user_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(5, '12345678910', '1', 1, '2020-12-03', '2020-12-03', 'tino rajen', 'keluar kota', 'masuk', 3, '2020-12-02 10:56:03', '2020-12-03 04:52:30', NULL),
(6, '161018833', '2', 3, '2020-12-06', '2020-12-05', 'yohanes', 'surat rapat', 'masuk', 3, '2020-12-02 11:06:24', '2020-12-02 11:06:24', NULL),
(7, '1504135', '3', 2, '2020-12-15', '2020-12-16', 'maria agustina', 'surat undangan', 'masuk', 3, '2020-12-02 11:10:05', '2020-12-02 11:10:05', NULL),
(8, '1010101010', '4', 1, '2020-12-08', '2020-12-06', 'sardi jekamun', 'surat', 'masuk', 3, '2020-12-02 11:12:55', '2020-12-03 08:20:34', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` int(20) NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_k` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hak` enum('admin','normal') COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `no_hp`, `alamat`, `jenis_k`, `tgl_lahir`, `hak`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'amelia', 'amelia', '$2y$10$l9szJp1vE/YCncpVjTPUU.wHvV3RQ1w3cELnvEiCcN.WqYVzto.ne', 0, '', '', '', 'normal', 'I3K5b7NaxhG9p0GaLeE9ReAyuHcIDqi0P2LNCqOh7N4h4MYcHlztDinguOyz', '2020-10-18 12:05:37', '2020-11-29 10:16:49', NULL),
(3, 'manager', 'manager', '$2y$10$7isAtkIDV5H47QTvmlcp3ep7Ms4icqUwyXlRDb51847tmOiTJltQC', 0, '', '0', '', 'admin', 'vfRhO0caADLLrSaoA8ucM06JSff9XIreuGUYMdgVLCggLR1NCI35gecAwpcF', '2020-11-06 21:12:29', '2020-11-06 21:12:29', NULL),
(4, 'admin', 'admin', '$2y$10$/wNDLV0FzdqTroTK9QgBz.Xa0mpI6ewGuGbyHnPxufVM72BnBKuBS', 0, '', '0', '', 'admin', NULL, '2020-11-06 21:56:15', '2020-11-06 21:58:28', '2020-11-06 21:58:28'),
(5, 'kadek', 'kadek', '$2y$10$bt1qtw8oifq0ukQB.22gL.49gkoXB7xB2TUX0Lsihs32LLNHToZwO', 0, '', '0', '', 'admin', NULL, '2020-11-29 10:06:58', '2020-11-29 10:17:06', '2020-11-29 10:17:06'),
(6, 'susanti', 'susanti', '$2y$10$ezQDNBTTEBU5Mk0dScSc9.vlgZCNjh9Zk1M70SI8TT9mh3kVcyQbK', 0, '', '0', '', 'admin', NULL, '2020-11-29 10:07:40', '2020-11-29 10:17:18', '2020-11-29 10:17:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agenda_m`
--
ALTER TABLE `agenda_m`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `disposisis`
--
ALTER TABLE `disposisis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `disposisis_surat_id_foreign` (`surat_id`),
  ADD KEY `disposisis_user_id_foreign` (`user_id`);

--
-- Indexes for table `jenis_surats`
--
ALTER TABLE `jenis_surats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suratkeluars`
--
ALTER TABLE `suratkeluars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surats`
--
ALTER TABLE `surats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `surats_jenis_surat_id_foreign` (`jenis_surat_id`),
  ADD KEY `surats_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agenda_m`
--
ALTER TABLE `agenda_m`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `disposisis`
--
ALTER TABLE `disposisis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jenis_surats`
--
ALTER TABLE `jenis_surats`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `suratkeluars`
--
ALTER TABLE `suratkeluars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `surats`
--
ALTER TABLE `surats`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `disposisis`
--
ALTER TABLE `disposisis`
  ADD CONSTRAINT `disposisis_surat_id_foreign` FOREIGN KEY (`surat_id`) REFERENCES `surats` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `disposisis_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `surats`
--
ALTER TABLE `surats`
  ADD CONSTRAINT `surats_jenis_surat_id_foreign` FOREIGN KEY (`jenis_surat_id`) REFERENCES `jenis_surats` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `surats_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
