-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2021 at 04:40 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `genius`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pengarang` varchar(75) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penerbit` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_terbit` date NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rak` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `laci` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `judul`, `kategori`, `gambar`, `pengarang`, `penerbit`, `tgl_terbit`, `deskripsi`, `slug`, `link`, `rak`, `laci`, `created_at`, `updated_at`) VALUES
(1, 'Bridge To Terabithia', 'Romantis', 'bridge to terabithia.jpg-1636115940.jpg', 'Katherine Paterson', 'Gramedia', '2021-11-01', 'Buku ini berisi tentang kisah cinta di Jembatan Terabithia. Dikisahkan seorang gadis bernama Laura dan seorang lelaki bernama Peter sedang kasmaran. Namun, kisah cinta mereka sangat rumit hingga akhirnya mereka dipertemukan kembali di Jembatan Terabithia.', 'bridge-to-terabithia', 'romantis/bridge-to-terabithia', 'B', '11', '2021-11-05 05:39:00', '2021-11-07 13:24:52');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_11_03_075437_create_books_table', 2),
(5, '2021_11_03_091338_create_pinjam_table', 2),
(6, '2021_11_06_103844_create_pinjam_detail_table', 3);

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
-- Table structure for table `pinjam`
--

CREATE TABLE `pinjam` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date DEFAULT NULL,
  `approval` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pinjam`
--

INSERT INTO `pinjam` (`id`, `id_user`, `tgl_pinjam`, `tgl_kembali`, `approval`, `created_at`, `updated_at`) VALUES
(1, '2', '2021-11-07', NULL, 'yes', '2021-11-07 02:11:16', '2021-11-07 17:44:20'),
(3, '2', '2021-11-09', '2021-11-09', 'yes', '2021-11-09 13:50:32', '2021-11-09 13:51:10'),
(4, '3', '2021-11-10', NULL, 'yes', '2021-11-10 01:30:16', '2021-11-10 01:31:26'),
(5, '4', '2021-11-10', '2021-11-10', 'yes', '2021-11-10 03:07:54', '2021-11-10 03:08:26');

-- --------------------------------------------------------

--
-- Table structure for table `pinjam_detail`
--

CREATE TABLE `pinjam_detail` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_pinjam` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_book` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pinjam_detail`
--

INSERT INTO `pinjam_detail` (`id`, `id_user`, `id_pinjam`, `id_book`, `created_at`, `updated_at`) VALUES
(1, '2', '1', '1', '2021-11-07 02:39:06', '2021-11-07 02:39:06'),
(3, '2', '1', '3', '2021-11-07 16:53:43', '2021-11-07 16:53:43'),
(4, '2', '3', '3', '2021-11-09 13:50:42', '2021-11-09 13:50:42'),
(5, '3', '4', '1', '2021-11-10 01:30:25', '2021-11-10 01:30:25'),
(6, '4', '5', '1', '2021-11-10 03:08:00', '2021-11-10 03:08:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member` varchar(6) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_status` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '2',
  `token` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  `phone` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default-profile.png',
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified`, `email_verified_at`, `password`, `member`, `account_status`, `token`, `last_login`, `phone`, `photo`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@genius.com', NULL, NULL, '$2y$10$Df2P7r97BQKMjDHCwOhggOfzA6PDmaGEmYtRQ02Fwfmmioql/Udse', NULL, '1', 'c8fe1wScxeBO8dznsgesORRBD6Qg7GilJCl8Q5tWIe6VqI9T7y', '2021-11-10 03:05:49', NULL, 'default-profile.png', NULL, NULL, '2021-11-10 03:05:49'),
(2, 'Kareena Widagdo', 'widagdo.kareena@gmail.com', NULL, NULL, '$2y$10$8OAmM64ZQxetDFhBpr3cNuAZxDE7EYAzPYMNI376PfetOcFwnn6d6', '632819', '2', 'mzZLlaThlTyRbGzXOOVVJl2eLhWB2dYgTtBjntxQlvNfEJdd39', '2021-11-10 01:26:49', '082242024001', 'default-profile.png', 'Perum GSMT blok 52/13, RT 09/05, Purwokerto Barat', '2021-11-06 17:21:48', '2021-11-10 01:26:49'),
(3, 'Atina Nora Haya', 'atinanhy@gmail.com', NULL, NULL, '$2y$10$lYH7b4TB9HqkkCphVPfvIuGwzLrKksLwwpR9poS/qgQSAjzmUgwkG', '768013', '2', 'm0gOiAmrBVgTIeNeuB1gNYHiPRFpgfHoP8QDu37pJ0JzVaQf6m', '2021-11-10 01:26:19', '081234567890', 'default-profile.png', 'Jekulo, Kudus', '2021-11-10 01:26:04', '2021-11-10 01:26:19'),
(4, 'Kylie', 'kylie@gmail.com', NULL, NULL, '$2y$10$DdyNxJgSZshNaIL2WAfiQery6CI2NqXQabM.I05E.fCsctkMFzqhC', '939744', '2', 'E3WgHSvD2cFr74RQ0Qw9ca8BWnuneDM7DCycT8AqY6oLiFheJw', '2021-11-10 03:05:04', '082212345678', 'default-profile.png', 'Purwokerto', '2021-11-10 03:04:49', '2021-11-10 03:05:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `pinjam`
--
ALTER TABLE `pinjam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pinjam_detail`
--
ALTER TABLE `pinjam_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_token_unique` (`token`),
  ADD UNIQUE KEY `users_member_unique` (`member`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pinjam`
--
ALTER TABLE `pinjam`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pinjam_detail`
--
ALTER TABLE `pinjam_detail`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
