-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2020 at 09:00 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mobilkamu`
--

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
(14, '2014_10_12_100000_create_password_resets_table', 1),
(15, '2019_08_19_000000_create_failed_jobs_table', 1),
(16, '2019_11_15_045853_create_tbl_users', 1),
(17, '2020_01_11_052458_tbl_brand', 1),
(18, '2020_01_11_054326_create_tbl_brand_table', 2),
(19, '2020_01_11_121917_create_tbl_kendaraan_table', 3),
(20, '2020_01_11_123941_create_tbl_related_image_table', 4),
(21, '2020_01_11_182210_create_tbl_komentar_table', 5);

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
-- Table structure for table `tbl_brand`
--

CREATE TABLE `tbl_brand` (
  `id_brand` bigint(20) UNSIGNED NOT NULL,
  `nama_brand` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_brand` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_brand` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_brand`
--

INSERT INTO `tbl_brand` (`id_brand`, `nama_brand`, `deskripsi_brand`, `status_brand`, `created_at`, `updated_at`) VALUES
(1, 'dd', 'asdd', 0, '2020-01-11 02:15:44', '2020-01-11 02:15:44'),
(2, 'dd', 'asdd', 0, '2020-01-11 02:16:26', '2020-01-11 02:16:26'),
(3, 'dd', 'asdd', 0, '2020-01-11 02:17:03', '2020-01-11 02:17:03'),
(4, 'asdDATSUN', 'DATSUN', 1, NULL, '2020-01-11 00:31:15'),
(5, 'DAIHATSU', 'DAIHATSU', 1, '2020-01-11 02:45:58', '2020-01-11 00:30:58'),
(6, 'CHEVROLET', 'CHEVROLET', 1, '2020-01-11 02:46:45', '2020-01-11 00:30:48'),
(7, 'TOYOTA', 'DESKRIPSI TOYOTA', 1, '2020-01-11 02:47:07', '2020-01-11 04:02:45'),
(8, 'HONDA', 'sd', 1, '2020-01-11 02:47:49', '2020-01-11 04:02:59'),
(9, 'MAZDA', 'MAZDA', 1, '2020-01-11 03:18:42', '2020-01-11 00:32:08');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kendaraan`
--

CREATE TABLE `tbl_kendaraan` (
  `id_kendaraan` bigint(20) UNSIGNED NOT NULL,
  `id_brands` int(11) NOT NULL,
  `nama_mobil` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_mobil` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `variant_mobil` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokasi` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transmission` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bahan_bakar` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `length` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `width` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `height` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wheelbase` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fronttread` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reartread` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `frontsuspension` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rearsuspension` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `frontbrake` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rearbrake` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `steeringgear` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tiressize` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `serialno` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `displacement` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `borexstroke` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maximumoutputpsrpm` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maximumtourquekgrpm` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fuelsystem` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_kendaraan` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_kendaraan`
--

INSERT INTO `tbl_kendaraan` (`id_kendaraan`, `id_brands`, `nama_mobil`, `harga_mobil`, `variant_mobil`, `lokasi`, `transmission`, `bahan_bakar`, `length`, `width`, `height`, `wheelbase`, `fronttread`, `reartread`, `frontsuspension`, `rearsuspension`, `frontbrake`, `rearbrake`, `steeringgear`, `tiressize`, `serialno`, `displacement`, `borexstroke`, `maximumoutputpsrpm`, `maximumtourquekgrpm`, `fuelsystem`, `status_kendaraan`, `created_at`, `updated_at`) VALUES
(1, 6, 'Civic 1', '20000000', '1.5 L E', 'jakarta', 'CVT', 'Bensin', '4501', '2075', '1421', '2700', '0', '0', 'MacPherson Strut', 'Multi-Link', 'Ventilated Disc', 'Disc', '0', '215/50 R17', '0', '1498', '73.0 X 89.5', '173/5500', '220/5500', 'PGM-Fi (Direct Injection)', 1, '2020-01-11 00:42:42', NULL),
(2, 9, 'Civic 2', '200000000', 'Variant Mobil', 'bekasi', 'Transmission', 'Bahan Bakar', '123', 'gugu', 'Height', 'Wheelbase', 'ASD', 'Rear tread', 'Front suspension', 'Rear suspension', 'Front brake', 'Rear brake', 'Steering gear', 'Tires size', '123123', 'Displacement', 'stroke', 'asdasd', 'tourque', 'system', 1, '2020-01-11 00:50:33', NULL),
(3, 8, 'Civic 3', '200000', 'Variant Mobil', 'jakarta', 'Transmission', 'Bahan Bakar', '123', 'gugu', 'Height', 'Wheelbase', 'sdfsdf', 'Rear tread', 'Front suspension', 'Rear suspension', 'Front brake', 'Rear brake', 'Steering gear', 'Tires size', '123123', 'Displacement', 'stroke', 'asdasd', 'tourque', 'system', 1, '2020-01-11 00:53:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_komentar`
--

CREATE TABLE `tbl_komentar` (
  `id_kometar` bigint(20) UNSIGNED NOT NULL,
  `id_kendaraan` int(11) NOT NULL,
  `komentar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_upvote` int(11) DEFAULT 0,
  `total_downvote` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_komentar`
--

INSERT INTO `tbl_komentar` (`id_kometar`, `id_kendaraan`, `komentar`, `total_upvote`, `total_downvote`, `created_at`, `updated_at`) VALUES
(1, 6, 'asdasd', 0, 0, NULL, NULL),
(2, 6, 'asdasd', NULL, NULL, '2020-01-10 23:41:49', NULL),
(3, 6, 'ddd', NULL, NULL, '2020-01-10 23:58:17', NULL),
(4, 6, 'sdsdddd', NULL, NULL, '2020-01-10 23:59:29', NULL),
(5, 6, 'asasdff', NULL, NULL, '2020-01-11 00:00:55', NULL),
(6, 6, 'ddd', 5, 2, '2020-01-11 00:10:18', NULL),
(7, 5, 'ddasd', 1, 1, '2020-01-11 00:29:37', NULL),
(8, 3, 'mantul', 3, 1, '2020-01-11 00:53:43', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_related_image`
--

CREATE TABLE `tbl_related_image` (
  `id_kendaraan` tinyint(4) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `warna` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_related_image`
--

INSERT INTO `tbl_related_image` (`id_kendaraan`, `image`, `warna`, `created_at`, `updated_at`) VALUES
(1, '2020-01-11_19-42-43_Honda+Civic+Crystal+Black+Pearl.png', 'hitam', '2020-01-11 00:42:43', NULL),
(1, '2020-01-11_19-42-43_Honda+Civic+Lunar+Silver+Metallic.png', 'abu-abu', '2020-01-11 00:42:43', NULL),
(1, '2020-01-11_19-42-43_Honda+Civic+Rallye+Red.png', 'merah', '2020-01-11 00:42:43', NULL),
(2, '2020-01-1119-50-34', 'hitam', '2020-01-11 00:50:34', NULL),
(2, '2020-01-1119-50-34', 'abu-abu', '2020-01-11 00:50:34', NULL),
(3, '2020-01-1119-53-225e1a27b264543', 'putih', '2020-01-11 00:53:22', NULL),
(3, '2020-01-1119-53-225e1a27b2650fc', 'hitam', '2020-01-11 00:53:22', NULL),
(3, '2020-01-1119-53-225e1a27b26a641', 'merah', '2020-01-11 00:53:22', NULL),
(3, '2020-01-1119-53-225e1a27b26b1b3', 'abu-abu', '2020-01-11 00:53:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_nama_lengkap` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_email` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_kontak` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
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
-- Indexes for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  ADD PRIMARY KEY (`id_brand`);

--
-- Indexes for table `tbl_kendaraan`
--
ALTER TABLE `tbl_kendaraan`
  ADD PRIMARY KEY (`id_kendaraan`);

--
-- Indexes for table `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  ADD PRIMARY KEY (`id_kometar`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tbl_users_user_email_unique` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  MODIFY `id_brand` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_kendaraan`
--
ALTER TABLE `tbl_kendaraan`
  MODIFY `id_kendaraan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  MODIFY `id_kometar` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
