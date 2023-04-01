-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2023 at 08:28 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penyu`
--

-- --------------------------------------------------------

--
-- Table structure for table `paket_wisatas`
--

CREATE TABLE `paket_wisatas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `paket` varchar(255) NOT NULL,
  `wisata` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `paket_wisatas`
--

INSERT INTO `paket_wisatas` (`id`, `paket`, `wisata`, `harga`, `created_at`, `updated_at`) VALUES
(1, 'Paket 1', 'Wisata Baleendah', '300000', NULL, NULL),
(2, 'Paket 2', 'Wisata Gunung Kidul', '2000000', NULL, NULL),
(3, 'Paket 3', 'Wisata Penyu', '400000', '2023-04-01 10:10:39', '2023-04-01 10:10:39'),
(4, 'Paket 4', 'Wisata Ke Kontrakan', '1000', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `paket_wisatas`
--
ALTER TABLE `paket_wisatas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `paket_wisatas`
--
ALTER TABLE `paket_wisatas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
