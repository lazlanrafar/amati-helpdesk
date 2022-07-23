-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2022 at 07:11 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amati`
--

-- --------------------------------------------------------

--
-- Table structure for table `access_points`
--

CREATE TABLE `access_points` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idbrand` bigint(20) UNSIGNED NOT NULL,
  `idlok` bigint(20) UNSIGNED NOT NULL,
  `jenis_ap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_port` int(11) NOT NULL,
  `frekuensi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_inventaris` date NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `access_points`
--

INSERT INTO `access_points` (`id`, `idap`, `idbrand`, `idlok`, `jenis_ap`, `jumlah_port`, `frekuensi`, `tgl_inventaris`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'AP-001/UBINFRA/2022', 1, 1, 'Non Management', 4, '2.4 GHz dan 5 GHz', '2022-07-20', '-', '2022-07-22 20:43:09', '2022-07-22 20:43:09');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_brand` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipe_brand` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_brand` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `nama_brand`, `tipe_brand`, `jenis_brand`, `created_at`, `updated_at`) VALUES
(1, 'Cisco', 'Bisnis 250', 'Access Point', '2022-07-22 20:39:36', '2022-07-22 20:39:36'),
(2, 'Mikrotik', 'HUB', 'Switch', '2022-07-22 20:40:00', '2022-07-22 20:40:00'),
(3, 'HP', '234DS', 'Hardware', '2022-07-22 20:40:17', '2022-07-22 20:40:17');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hardware`
--

CREATE TABLE `hardware` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idhardware` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idbrand` bigint(20) UNSIGNED NOT NULL,
  `idlok` bigint(20) UNSIGNED NOT NULL,
  `jenis_hardware` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `koneksi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ipaddress` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `computer_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sharing` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_inventaris` date NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hardware`
--

INSERT INTO `hardware` (`id`, `idhardware`, `idbrand`, `idlok`, `jenis_hardware`, `koneksi`, `ipaddress`, `computer_name`, `sharing`, `tgl_inventaris`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'HW-001/UBINFRA/2022', 3, 1, 'Scanner', 'LAN', '192.168.1.1', NULL, 'Ya', '2022-07-19', '-', '2022-07-22 20:41:56', '2022-07-22 20:41:56');

-- --------------------------------------------------------

--
-- Table structure for table `histories`
--

CREATE TABLE `histories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uid` bigint(20) UNSIGNED NOT NULL,
  `jenis_history` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idprkt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kerusakan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `perbaikan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `histories`
--

INSERT INTO `histories` (`id`, `uid`, `jenis_history`, `idprkt`, `kerusakan`, `perbaikan`, `tanggal`, `created_at`, `updated_at`) VALUES
(1, 2, 'Perbaikan', 'HW-001/UBINFRA/2022', 'Terbakar', 'Ganti Kabel', '2022-07-23', '2022-07-22 20:53:50', '2022-07-22 20:53:50');

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE `links` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idswitch` bigint(20) UNSIGNED NOT NULL,
  `uid` bigint(20) UNSIGNED NOT NULL,
  `port` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `arah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `links`
--

INSERT INTO `links` (`id`, `idswitch`, `uid`, `port`, `status`, `arah`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 10, 'Downlink', 'Printer', '-', '2022-07-22 20:48:41', '2022-07-22 20:49:20');

-- --------------------------------------------------------

--
-- Table structure for table `lokasis`
--

CREATE TABLE `lokasis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_lokasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sublokasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lokasis`
--

INSERT INTO `lokasis` (`id`, `nama_lokasi`, `unit`, `sublokasi`, `created_at`, `updated_at`) VALUES
(1, 'Kantor Korporat', 'Insfrastruktur', 'Baloi', '2022-07-22 20:40:33', '2022-07-22 22:07:39');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_07_05_123609_create_links_table', 1),
(6, '2022_07_05_124117_create_histories_table', 1),
(7, '2022_07_05_124252_create_brands_table', 1),
(8, '2022_07_05_124414_create_access_points_table', 1),
(9, '2022_07_05_124825_create_hardware_table', 1),
(10, '2022_07_05_125014_create_lokasis_table', 1),
(11, '2022_07_05_125149_create_s_s_i_d_s_table', 1),
(12, '2022_07_05_125324_create_switch_hubs_table', 1);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `switch_hubs`
--

CREATE TABLE `switch_hubs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idswitch` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idbrand` bigint(20) UNSIGNED NOT NULL,
  `idlok` bigint(20) UNSIGNED NOT NULL,
  `jenis_switch` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_port` int(11) NOT NULL,
  `jenis_port` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_inventaris` date NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `switch_hubs`
--

INSERT INTO `switch_hubs` (`id`, `idswitch`, `idbrand`, `idlok`, `jenis_switch`, `jumlah_port`, `jenis_port`, `tgl_inventaris`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'SW-001/UBINFRA/2022', 2, 1, 'Non Management', 10, 'Fast & Gigabit Ethernet', '2022-07-22', '-', '2022-07-22 20:44:46', '2022-07-22 20:44:46');

-- --------------------------------------------------------

--
-- Table structure for table `s_s_i_d_s`
--

CREATE TABLE `s_s_i_d_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idlok` bigint(20) UNSIGNED NOT NULL,
  `nama_ssid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pwd_ssid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_ssid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `s_s_i_d_s`
--

INSERT INTO `s_s_i_d_s` (`id`, `idlok`, `nama_ssid`, `pwd_ssid`, `jenis_ssid`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 1, 'break wifi', 'plnbatam', 'Intranet dan Internet', '-', '2022-07-22 20:45:27', '2022-07-22 20:45:27');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `akses` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `password`, `jabatan`, `akses`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'staff', 'staff@gmail.com', '$2y$10$G51qyZ69lSdk6OghmHk96.Awmepm.h8alq4R/5Oc9KBDSyt9Gxvey', 'staff', 'STAFF', NULL, NULL, '2022-07-22 21:40:33'),
(2, 'Teknisi', 'teknisi@gmail.com', '$2y$10$RmP6Q3yOFBDikpl5t711LOoHeK5LrNR7exGZpxFAaUB/v7kLxRg/.', 'Teknisi', 'TEKNISI', NULL, '2022-07-22 20:38:40', '2022-07-22 20:38:40'),
(3, 'manager', 'manager@gmail.com', '$2y$10$JhzOzyRdc8ytKoJsWrQoy.ns37.p8M2AZ1kw4DjwXL6bF8TNKTxtK', 'manager', 'MANAGER', NULL, '2022-07-22 20:38:56', '2022-07-22 21:25:15'),
(4, 'sdf', 'sdfas@gmail.com', '$2y$10$kI3QxdCvaQzIiqdaPAm..Oaf3UoJDBwqJz9nAms2Wyf6vHJi.Ajqe', 'sdf', 'STAFF', NULL, '2022-07-22 21:32:06', '2022-07-22 21:32:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `access_points`
--
ALTER TABLE `access_points`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idlok` (`idlok`),
  ADD KEY `idbrand` (`idbrand`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `hardware`
--
ALTER TABLE `hardware`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idlok` (`idlok`),
  ADD KEY `idbrand` (`idbrand`);

--
-- Indexes for table `histories`
--
ALTER TABLE `histories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idswitch` (`idswitch`,`uid`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `lokasis`
--
ALTER TABLE `lokasis`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `switch_hubs`
--
ALTER TABLE `switch_hubs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idlok` (`idlok`),
  ADD KEY `idbrand` (`idbrand`);

--
-- Indexes for table `s_s_i_d_s`
--
ALTER TABLE `s_s_i_d_s`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idlok` (`idlok`);

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
-- AUTO_INCREMENT for table `access_points`
--
ALTER TABLE `access_points`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hardware`
--
ALTER TABLE `hardware`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `histories`
--
ALTER TABLE `histories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `links`
--
ALTER TABLE `links`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lokasis`
--
ALTER TABLE `lokasis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `switch_hubs`
--
ALTER TABLE `switch_hubs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `s_s_i_d_s`
--
ALTER TABLE `s_s_i_d_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `access_points`
--
ALTER TABLE `access_points`
  ADD CONSTRAINT `access_points_ibfk_1` FOREIGN KEY (`idlok`) REFERENCES `lokasis` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `access_points_ibfk_2` FOREIGN KEY (`idbrand`) REFERENCES `brands` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hardware`
--
ALTER TABLE `hardware`
  ADD CONSTRAINT `hardware_ibfk_1` FOREIGN KEY (`idlok`) REFERENCES `lokasis` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hardware_ibfk_2` FOREIGN KEY (`idbrand`) REFERENCES `brands` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `histories`
--
ALTER TABLE `histories`
  ADD CONSTRAINT `histories_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `links`
--
ALTER TABLE `links`
  ADD CONSTRAINT `links_ibfk_1` FOREIGN KEY (`idswitch`) REFERENCES `switch_hubs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `links_ibfk_2` FOREIGN KEY (`uid`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `switch_hubs`
--
ALTER TABLE `switch_hubs`
  ADD CONSTRAINT `switch_hubs_ibfk_1` FOREIGN KEY (`idlok`) REFERENCES `lokasis` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `switch_hubs_ibfk_2` FOREIGN KEY (`idbrand`) REFERENCES `brands` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `s_s_i_d_s`
--
ALTER TABLE `s_s_i_d_s`
  ADD CONSTRAINT `s_s_i_d_s_ibfk_1` FOREIGN KEY (`idlok`) REFERENCES `lokasis` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
