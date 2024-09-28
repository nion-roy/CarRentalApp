-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 28, 2024 at 05:41 PM
-- Server version: 8.0.30
-- PHP Version: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carrentalapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` int NOT NULL,
  `car_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `daily_rent_price` decimal(8,2) NOT NULL,
  `availability` tinyint(1) NOT NULL DEFAULT '1',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `name`, `brand`, `model`, `year`, `car_type`, `daily_rent_price`, `availability`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Toyota Camry', 'Toyota', 'Camry', 2022, 'SUV', 50.00, 1, 'car.png', '2024-09-28 16:46:59', '2024-09-28 16:46:59'),
(2, 'Honda Civic', 'Honda', 'Civic', 2021, 'Sedan', 40.00, 1, 'car.png', '2024-09-28 16:46:59', '2024-09-28 16:46:59'),
(3, 'Ford Mustang', 'Ford', 'Mustang', 2020, 'Coupe', 100.00, 1, 'car.png', '2024-09-28 16:46:59', '2024-09-28 16:46:59'),
(4, 'Chevrolet Malibu', 'Chevrolet', 'Malibu', 2019, 'SUV', 45.00, 1, 'car.png', '2024-09-28 16:46:59', '2024-09-28 16:46:59'),
(5, 'BMW 3 Series', 'BMW', '3 Series', 2021, 'SUV', 80.00, 1, 'car.png', '2024-09-28 16:46:59', '2024-09-28 16:46:59'),
(6, 'Mercedes-Benz C-Class', 'Mercedes-Benz', 'C-Class', 2022, 'Sedan', 90.00, 1, 'car.png', '2024-09-28 16:46:59', '2024-09-28 16:46:59'),
(7, 'Audi A4', 'Audi', 'A4', 2020, 'Sedan', 85.00, 1, 'car.png', '2024-09-28 16:46:59', '2024-09-28 16:46:59'),
(8, 'Nissan Altima', 'Nissan', 'Altima', 2021, 'Sedan', 55.00, 1, 'car.png', '2024-09-28 16:46:59', '2024-09-28 16:46:59'),
(9, 'Tesla Model 3', 'Tesla', 'Model 3', 2022, 'SUV', 120.00, 1, 'car.png', '2024-09-28 16:46:59', '2024-09-28 16:46:59'),
(10, 'Hyundai Elantra', 'Hyundai', 'Elantra', 2020, 'SUV', 40.00, 1, 'car.png', '2024-09-28 16:46:59', '2024-09-28 16:46:59'),
(11, 'Kia Optima', 'Kia', 'Optima', 2021, 'Sedan', 45.00, 1, 'car.png', '2024-09-28 16:46:59', '2024-09-28 16:46:59'),
(12, 'Toyota Corolla', 'Toyota', 'Corolla', 2019, 'Sedan', 35.00, 1, 'car.png', '2024-09-28 16:46:59', '2024-09-28 16:46:59'),
(13, 'Honda Accord', 'Honda', 'Accord', 2022, 'SUV', 50.00, 1, 'car.png', '2024-09-28 16:46:59', '2024-09-28 16:46:59'),
(14, 'Mazda 3', 'Mazda', '3', 2021, 'Sedan', 40.00, 1, 'car.png', '2024-09-28 16:46:59', '2024-09-28 16:46:59'),
(15, 'Volkswagen Passat', 'Volkswagen', 'Passat', 2020, 'Sedan', 50.00, 1, 'car.png', '2024-09-28 16:46:59', '2024-09-28 16:46:59'),
(16, 'Subaru Impreza', 'Subaru', 'Impreza', 2019, 'Sedan', 45.00, 1, 'car.png', '2024-09-28 16:46:59', '2024-09-28 16:46:59'),
(17, 'Jaguar XF', 'Jaguar', 'XF', 2021, 'SUV', 110.00, 1, 'car.png', '2024-09-28 16:46:59', '2024-09-28 16:46:59'),
(18, 'Lexus ES', 'Lexus', 'ES', 2022, 'Sedan', 95.00, 1, 'car.png', '2024-09-28 16:46:59', '2024-09-28 16:46:59'),
(19, 'Acura TLX', 'Acura', 'TLX', 2021, 'Sedan', 85.00, 1, 'car.png', '2024-09-28 16:46:59', '2024-09-28 16:46:59'),
(20, 'Porsche 911', 'Porsche', '911', 2020, 'Coupe', 200.00, 1, 'car.png', '2024-09-28 16:46:59', '2024-09-28 16:46:59');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_09_22_164154_create_cars_table', 1),
(5, '2024_09_22_164202_create_rentals_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rentals`
--

CREATE TABLE `rentals` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `car_id` bigint UNSIGNED NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `total_cost` decimal(8,2) NOT NULL,
  `status` enum('1','2','3') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1' COMMENT '1 = Ongoing, 2 = Completed, 3 = Canceled',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rentals`
--

INSERT INTO `rentals` (`id`, `user_id`, `car_id`, `start_date`, `end_date`, `total_cost`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2024-09-18', '2024-09-23', 250.00, '1', '2024-09-18 16:47:00', '2024-09-23 16:47:00'),
(2, 2, 2, '2024-09-20', '2024-09-24', 160.00, '1', '2024-09-20 16:47:00', '2024-09-24 16:47:00'),
(3, 3, 3, '2024-09-21', '2024-09-27', 600.00, '1', '2024-09-21 16:47:00', '2024-09-27 16:47:00'),
(4, 4, 4, '2024-09-13', '2024-09-15', 90.00, '1', '2024-09-13 16:47:00', '2024-09-15 16:47:00'),
(5, 5, 5, '2024-09-26', '2024-09-28', 160.00, '1', '2024-09-26 16:47:00', '2024-09-28 16:47:00'),
(6, 6, 6, '2024-09-14', '2024-09-19', 450.00, '1', '2024-09-14 16:47:00', '2024-09-19 16:47:00'),
(7, 7, 7, '2024-09-22', '2024-09-25', 255.00, '1', '2024-09-22 16:47:00', '2024-09-25 16:47:00'),
(8, 8, 8, '2024-09-17', '2024-09-21', 200.00, '1', '2024-09-17 16:47:00', '2024-09-21 16:47:00'),
(9, 9, 9, '2024-09-24', '2024-09-26', 240.00, '1', '2024-09-24 16:47:00', '2024-09-26 16:47:00'),
(10, 10, 10, '2024-09-16', '2024-09-22', 360.00, '1', '2024-09-16 16:47:00', '2024-09-22 16:47:00'),
(11, 11, 11, '2024-09-19', '2024-09-25', 210.00, '1', '2024-09-19 16:47:00', '2024-09-25 16:47:00'),
(12, 12, 12, '2024-09-21', '2024-09-26', 290.00, '1', '2024-09-21 16:47:00', '2024-09-26 16:47:00'),
(13, 13, 13, '2024-09-23', '2024-09-27', 185.00, '1', '2024-09-23 16:47:00', '2024-09-27 16:47:00'),
(14, 14, 14, '2024-09-18', '2024-09-24', 275.00, '1', '2024-09-18 16:47:00', '2024-09-24 16:47:00'),
(15, 15, 15, '2024-09-14', '2024-09-19', 220.00, '1', '2024-09-14 16:47:00', '2024-09-19 16:47:00'),
(16, 16, 16, '2024-09-22', '2024-09-26', 320.00, '1', '2024-09-22 16:47:00', '2024-09-26 16:47:00'),
(17, 17, 17, '2024-09-20', '2024-09-23', 195.00, '1', '2024-09-20 16:47:00', '2024-09-23 16:47:00'),
(18, 18, 18, '2024-09-17', '2024-09-21', 300.00, '1', '2024-09-17 16:47:00', '2024-09-21 16:47:00'),
(19, 19, 19, '2024-09-19', '2024-09-24', 225.00, '1', '2024-09-19 16:47:00', '2024-09-24 16:47:00'),
(20, 20, 20, '2024-09-18', '2024-09-25', 420.00, '1', '2024-09-18 16:47:00', '2024-09-25 16:47:00'),
(21, 21, 1, '2024-09-01', '2024-09-04', 150.00, '1', '2024-09-28 16:55:38', '2024-09-28 16:55:51'),
(22, 1, 17, '2024-09-28', '2024-09-30', 220.00, '1', '2024-09-28 17:10:59', '2024-09-28 17:10:59'),
(23, 1, 17, '2024-09-01', '2024-09-02', 110.00, '1', '2024-09-28 17:11:36', '2024-09-28 17:11:36'),
(24, 2, 12, '2024-08-25', '2024-08-30', 175.00, '1', '2024-09-28 17:31:55', '2024-09-28 17:31:55');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('ADg47nbEaIvVAii0nI7AwT5gzEsWjZDBlB93HWTH', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:130.0) Gecko/20100101 Firefox/130.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieXMxOUhEaEczekhEWkNlM2JSem56bjNlWnQ0Y1hnaUtHMkVWZ3pVQSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9jYXJzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1727543290),
('HKxctRXEpg2XWVtqg7oHil9Shzl6rO92sHl0nneF', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:130.0) Gecko/20100101 Firefox/130.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiYmJxeGF0aVY5MFpuRGlsSHFSaU4ybjkzVVFQNVo1TXlHR1B3NE1RbyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9kYXNoYm9hcmQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6NToiYWxlcnQiO2E6MDp7fX0=', 1727544123),
('kJAuqsHSXBCIUEkwdNnoy1nhUWC2vdPM6R2EG5hU', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:130.0) Gecko/20100101 Firefox/130.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiZ0xiZnVKY1IzVlAyTlRvZ1ZLdkRZQ0VwMXVoUlNndzZId01XdkVwbSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9jYXItZGV0YWlscy8xMiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjI7czo1OiJhbGVydCI7YTowOnt9fQ==', 1727544719),
('vNRdVh9B8mA3B3Y90RyxpV8j8Zl3QjfMzSTMfuy8', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:130.0) Gecko/20100101 Firefox/130.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiT3dBZk5YQUk5SzQyblRVQVRPUVYzQm82TXA1YzZyZTdGZmdwbWRBayI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9jYXItZGV0YWlscy8xNiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1727543264);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','customer') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'customer',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `address`, `password`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, NULL, '$2y$12$GmTYT4c2Fcq2qhw.yT3LEu2psfvmtKXC31hVZ3e5.oX3VvLOacEKC', 'admin', '2024-09-28 16:46:53', '2024-09-28 16:46:53'),
(2, 'Customer', 'customer@gmail.com', NULL, NULL, '$2y$12$4I9SpNrpKrJYb.kXVEDQ5umsuYRM1vBI7QoJ7XP8L2eUlr9/f/12e', 'customer', '2024-09-28 16:46:54', '2024-09-28 16:46:54'),
(3, 'John Doe', 'johndoe@gmail.com', NULL, NULL, '$2y$12$rfZSzLYnhSTv5jBqzv.WJu41SF3BgOC.PcIRGB7.ElKjoNNMykRY2', 'customer', '2024-09-28 16:46:54', '2024-09-28 16:46:54'),
(4, 'Jane Smith', 'janesmith@gmail.com', NULL, NULL, '$2y$12$AaBHd5VJl1q606bzKXepV.FFpaL.K/TyiF1zv8qaDGJljdv.hj3TS', 'customer', '2024-09-28 16:46:54', '2024-09-28 16:46:54'),
(5, 'Michael Brown', 'michaelbrown@gmail.com', NULL, NULL, '$2y$12$GG4zQ4kS4szKyKi512dCbOmPDJkSp2eujqV2dcmhbIVs7NVR2Fqcu', 'customer', '2024-09-28 16:46:55', '2024-09-28 16:46:55'),
(6, 'Emily Johnson', 'emilyjohnson@gmail.com', NULL, NULL, '$2y$12$mYXaN7STJ8sYTiCt8e231O6zDffVIZdrmFFBN7.zQrwyVHN0fkvpG', 'customer', '2024-09-28 16:46:55', '2024-09-28 16:46:55'),
(7, 'Chris Williams', 'chriswilliams@gmail.com', NULL, NULL, '$2y$12$mWd/7IrMzdtKxe/dF2tUyOcXNmd/0/5E9/8m6691AQ9BgTFzkjdcS', 'customer', '2024-09-28 16:46:55', '2024-09-28 16:46:55'),
(8, 'Sarah Taylor', 'sarahtaylor@gmail.com', NULL, NULL, '$2y$12$dxZ4k8aOQCUakcjGZykDvOwNwCAyJYhyCQz.CyZ4flrD49unidDye', 'customer', '2024-09-28 16:46:55', '2024-09-28 16:46:55'),
(9, 'David White', 'davidwhite@gmail.com', NULL, NULL, '$2y$12$HO1IVKjiDZUA8M75vJ.gkOe7aFwLHvj8OeJlVzs2UN9a6x3R5gCX6', 'customer', '2024-09-28 16:46:56', '2024-09-28 16:46:56'),
(10, 'Emma Martinez', 'emmamartinez@gmail.com', NULL, NULL, '$2y$12$3UPjt4iEOh4gc/bgXGc2NuvxNt9UVIQBTHCQifNiT2bWZwIe3mTMe', 'customer', '2024-09-28 16:46:56', '2024-09-28 16:46:56'),
(11, 'James Davis', 'jamesdavis@gmail.com', NULL, NULL, '$2y$12$eYXRx3SFXZtjLuzo0fZ0R.l2YW/9yTGDqYzdQPPpQr3TdRFto9tdW', 'customer', '2024-09-28 16:46:56', '2024-09-28 16:46:56'),
(12, 'Olivia Garcia', 'oliviagarcia@gmail.com', NULL, NULL, '$2y$12$TGj90eBmM1G16Qf2MHyIPOvySuYacY9bEIM7x5k8mFWckKIzQclbO', 'customer', '2024-09-28 16:46:56', '2024-09-28 16:46:56'),
(13, 'Daniel Harris', 'danielharris@gmail.com', NULL, NULL, '$2y$12$3MtHuVjkh3p9UceM/KomJeFWDSErmVyWGP4ZJQUhGReTlASmE40V2', 'customer', '2024-09-28 16:46:57', '2024-09-28 16:46:57'),
(14, 'Sophia Clark', 'sophiaclark@gmail.com', NULL, NULL, '$2y$12$2Vnq0Xabkq1Kci6r/z8y.ObqweG9FOZjjSmNXQtmZBAnlhTemiKuC', 'customer', '2024-09-28 16:46:57', '2024-09-28 16:46:57'),
(15, 'Liam Lewis', 'liamlewis@gmail.com', NULL, NULL, '$2y$12$QfnBiSQe6igXbRIlvbTLweWWftxGpoBAOoqAhupBYtq9XIP.5OIia', 'customer', '2024-09-28 16:46:57', '2024-09-28 16:46:57'),
(16, 'Ava Walker', 'avawalker@gmail.com', NULL, NULL, '$2y$12$LPASgE3F8Cwa0xjAirC1MubkAdJKG0kowFTf7YPIUVdXUEHiX2GHu', 'customer', '2024-09-28 16:46:57', '2024-09-28 16:46:57'),
(17, 'Noah Hall', 'noahhall@gmail.com', NULL, NULL, '$2y$12$49eTg0YmeItH2qL26H6vbOSlnG6jXcphqSC2l3Y//3uzaOPfH2psm', 'customer', '2024-09-28 16:46:58', '2024-09-28 16:46:58'),
(18, 'Mia Allen', 'miaallen@gmail.com', NULL, NULL, '$2y$12$3JVYYonn7LMo.Uatzd2jIuhEIhQS.42vQcX5legLf0RLwD29ZGUaO', 'customer', '2024-09-28 16:46:58', '2024-09-28 16:46:58'),
(19, 'Lucas Young', 'lucasyoung@gmail.com', NULL, NULL, '$2y$12$3ImYqpbQiPblQI41NTfnOuAHwKv0nFxoZBJvUmyNoyH0XA762xI/G', 'customer', '2024-09-28 16:46:58', '2024-09-28 16:46:58'),
(20, 'Isabella King', 'isabellaking@gmail.com', NULL, NULL, '$2y$12$r1xMJnfp2E9BgZW5MjQCAebUiBZysa9J1RRkmwO4kPFEM6dUvylXq', 'customer', '2024-09-28 16:46:58', '2024-09-28 16:46:58'),
(21, 'William Scott', 'williamscott@gmail.com', NULL, NULL, '$2y$12$6/kGqBoauf4XBoDTg5C8lOqxyAxQKlBlh1Q2ZIu5kOs7wNcb8lXa.', 'customer', '2024-09-28 16:46:59', '2024-09-28 16:46:59'),
(22, 'Amelia Green', 'ameliagreen@gmail.com', NULL, NULL, '$2y$12$54S9M5fsH/6eyGnEnCo2z./dP7szRY2utNzwGRhYeHT6hZVMd66Ji', 'customer', '2024-09-28 16:46:59', '2024-09-28 16:46:59');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `rentals`
--
ALTER TABLE `rentals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rentals_user_id_foreign` (`user_id`),
  ADD KEY `rentals_car_id_foreign` (`car_id`);

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
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `rentals`
--
ALTER TABLE `rentals`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `rentals`
--
ALTER TABLE `rentals`
  ADD CONSTRAINT `rentals_car_id_foreign` FOREIGN KEY (`car_id`) REFERENCES `cars` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `rentals_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
