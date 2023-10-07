-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2022 at 12:25 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_quantity` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `product_id`, `product_quantity`, `created_at`, `updated_at`) VALUES
(27, '1', '1', '1', '2022-11-12 05:59:02', '2022-11-12 05:59:02');

-- --------------------------------------------------------

--
-- Table structure for table `devicecategory`
--

CREATE TABLE `devicecategory` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `popular` tinyint(4) DEFAULT NULL,
  `image` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `devicecategory`
--

INSERT INTO `devicecategory` (`id`, `name`, `description`, `status`, `popular`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Laptops', NULL, 'Active', 0, '1660856181.png', '2022-08-18 15:26:21', '2022-08-18 15:26:21'),
(2, 'Desktops', NULL, 'Active', 0, '1660856198.png', '2022-08-18 15:26:38', '2022-08-18 15:26:38'),
(3, 'Printers', NULL, 'Active', 0, '1660856213.png', '2022-08-18 15:26:53', '2022-08-18 22:54:47'),
(4, 'Mobile Phones', NULL, 'Active', 0, '1660856224.png', '2022-08-18 15:27:04', '2022-08-18 15:27:04');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `migration` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(5, '2022_01_11_053207_create_devicecategory_table', 1),
(6, '2022_01_16_162418_create_products_table', 1),
(7, '2022_01_26_052607_create_cart_table', 1),
(8, '2022_01_31_084314_create_orders_table', 1),
(9, '2022_01_31_085032_create_order_items_table', 1),
(10, '2022_02_07_061413_create_wishlists_table', 1),
(11, '2022_02_10_172319_create_ratings_table', 1),
(12, '2022_02_13_164747_create_reviews_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fname` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_price` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_mode` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_id` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `fname`, `lname`, `email`, `phone`, `address`, `city`, `total_price`, `color`, `payment_mode`, `payment_id`, `status`, `created_at`, `updated_at`) VALUES
(1, '1', 'Seshan', 'Nethmika', 'seshan.nethmike@gmail.com', '0784700850', '2A,temple rd', 'Athurugiriya', '120000', NULL, 'Cash On Delivery', NULL, 1, '2022-08-18 15:48:08', '2022-08-18 15:49:53'),
(2, '1', 'Seshan', 'Nethmika', 'seshan.nethmike@gmail.com', '0784700850', '2A,temple rd', 'Athurugiriya', '115000', NULL, 'Online Payment', 'pay_K7F3Jl5Uc6EXf4', 0, '2022-08-18 15:48:49', '2022-08-18 15:48:49'),
(3, '1', 'Seshan', 'Nethmika', 'seshan.nethmike@gmail.com', '0784700850', '2A,temple rd', 'Athurugiriya', '120000', NULL, 'Cash On Delivery', NULL, 1, '2022-08-18 23:41:50', '2022-08-19 12:05:32'),
(4, '1', 'Seshan', 'Nethmika', 'seshan.nethmike@gmail.com', '0784700850', '2A,temple rd', 'Athurugiriya', '120000', NULL, 'Cash On Delivery', NULL, 0, '2022-08-20 07:49:41', '2022-08-20 07:49:41'),
(5, '1', 'Seshan', 'Nethmika', 'seshan.nethmike@gmail.com', '0784700850', '2A,temple rd', 'Athurugiriya', '0', NULL, 'Cash On Delivery', NULL, 0, '2022-08-20 07:51:13', '2022-08-20 07:51:13'),
(6, '1', 'Seshan', 'Nethmika', 'seshan.nethmike@gmail.com', '0784700850', '2A,temple rd', 'Athurugiriya', '115000', NULL, 'Cash On Delivery', NULL, 0, '2022-08-20 07:55:00', '2022-08-20 07:55:00'),
(7, '1', 'Seshan', 'Nethmika', 'seshan.nethmike@gmail.com', '0784700850', '2A,temple rd', 'Athurugiriya', '120000', NULL, 'Online Payment', 'pay_K7uPMCANkRQpIi', 0, '2022-08-20 08:16:07', '2022-08-20 08:16:07'),
(8, '1', 'Seshan', 'Nethmika', 'seshan.nethmike@gmail.com', '0784700850', '2A,temple rd', 'Athurugiriya', '115000', NULL, 'Online Payment', 'pay_K7xcKPze61Lpo5', 0, '2022-08-20 11:24:29', '2022-08-20 11:24:29'),
(9, '1', 'Seshan', 'Nethmika', 'seshan.nethmike@gmail.com', '0784700850', '2A,temple rd', 'Athurugiriya', '159999', NULL, 'Online Payment', 'pay_K7xf6nDCZbgWeP', 0, '2022-08-20 11:27:15', '2022-08-20 11:27:15'),
(10, '2', 'captain', 'cool', 'kingcoolsn@gmail.com', '0784700850', '2A,temple rd', 'kottawa', '115000', NULL, 'Online Payment', 'pay_K7zuV9MUjLwlDm', 0, '2022-08-20 13:39:04', '2022-08-20 13:39:04'),
(11, '2', 'captain', 'cool', 'kingcoolsn@gmail.com', '0784700850', '2A,temple rd', 'kottawa', '115000', NULL, 'Online Payment', 'pay_K806Tb6RruXM4h', 0, '2022-08-20 13:50:23', '2022-08-20 13:50:23'),
(12, '2', 'captain', 'cool', 'kingcoolsn@gmail.com', '0784700850', '2A,temple rd', 'kottawa', '120000', NULL, 'Online Payment', 'pay_K80AVQbsiv9dMd', 0, '2022-08-20 13:54:17', '2022-08-20 13:54:17'),
(13, '2', 'captain', 'cool', 'kingcoolsn@gmail.com', '0784700850', '2A,temple rd', 'kottawa', '115000', NULL, 'Online Payment', 'pay_K80BqtCJ8Pl0bb', 0, '2022-08-20 13:55:33', '2022-08-20 13:55:33'),
(14, '1', 'Seshan', 'Nethmika', 'seshan.nethmike@gmail.com', '0784700850', '2A,temple rd', 'Athurugiriya', '115000', NULL, 'Cash On Delivery', NULL, 0, '2022-08-21 02:06:45', '2022-08-21 02:06:45'),
(15, '1', 'Seshan', 'Nethmika', 'seshan.nethmike@gmail.com', '0784700850', '2A,temple rd', 'Athurugiriya', '115000', NULL, 'Cash On Delivery', NULL, 1, '2022-08-21 02:15:05', '2022-08-21 12:49:39'),
(16, '2', 'captain', 'cool', 'kingcoolsn@gmail.com', '0784700850', '2A,temple rd', 'kottawa', '115000', NULL, 'Cash On Delivery', NULL, 0, '2022-08-21 02:18:15', '2022-08-21 02:18:15'),
(17, '2', 'captain', 'cool', 'kingcoolsn@gmail.com', '0784700850', '2A,temple rd', 'kottawa', '115000', NULL, 'Cash On Delivery', NULL, 1, '2022-08-21 12:51:16', '2022-08-21 12:52:01'),
(18, '1', 'Seshan', 'Nethmika', 'seshan.nethmike@gmail.com', '0784700850', '2A,temple rd', 'Athurugiriya', '115000', NULL, 'Cash On Delivery', NULL, 0, '2022-08-22 00:12:35', '2022-08-22 00:12:35'),
(19, '1', 'Seshan', 'Nethmika', 'seshan.nethmike@gmail.com', '0784700850', '2A,temple rd', 'Athurugiriya', '115000', NULL, 'Online Payment', 'pay_K8ZGranyTled5j', 1, '2022-08-22 00:14:30', '2022-08-22 00:16:24'),
(20, '1', 'Seshan', 'Nethmika', 'seshan.nethmike@gmail.com', '0784700850', '2A,temple rd', 'Athurugiriya', '120000', NULL, 'Cash On Delivery', NULL, 1, '2022-08-22 22:48:33', '2022-08-22 22:49:31'),
(21, '1', 'Seshan', 'Nethmika', 'seshan.nethmike@gmail.com', '0784700850', '2A,temple rd', 'Athurugiriya', '120000', NULL, 'Online Payment', 'pay_KHlUrH4ToWdTTb', 0, '2022-09-14 06:03:05', '2022-09-14 06:03:05'),
(22, '1', 'Seshan', 'Nethmika', 'seshan.nethmike@gmail.com', '0784700850', '2A,temple rd', 'Athurugiriya', '120000', NULL, 'Cash On Delivery', NULL, 1, '2022-09-14 06:05:04', '2022-09-14 06:07:04'),
(23, '1', 'Seshan', 'Nethmika', 'seshan.nethmike@gmail.com', '0784700850', '2A,temple rd', 'Athurugiriya', '0', NULL, 'Cash On Delivery', NULL, 0, '2022-09-14 06:05:08', '2022-09-14 06:05:08'),
(24, '1', 'Seshan', 'Nethmika', 'seshan.nethmike@gmail.com', '0784700850', '2A,temple rd', 'Athurugiriya', '115000', 'Black', 'Cash On Delivery', NULL, 1, '2022-09-15 11:18:19', '2022-10-22 00:50:01'),
(25, '1', 'Seshan', 'Nethmika', 'seshan.nethmike@gmail.com', '0784700850', '2A,temple rd', 'Athurugiriya', '120000', NULL, 'Cash On Delivery', NULL, 0, '2022-10-23 23:40:50', '2022-10-23 23:40:50'),
(26, '1', 'Seshan', 'Nethmika', 'seshan.nethmike@gmail.com', '0784700850', '2A,temple rd', 'Athurugiriya', '120000', NULL, 'Online Payment', 'pay_KXUOXflfglgJvF', 0, '2022-10-23 23:43:22', '2022-10-23 23:43:22'),
(27, '1', 'Seshan', 'Nethmika', 'seshan.nethmike@gmail.com', '0784700850', '2A,temple rd', 'Athurugiriya', '120000', NULL, 'Cash On Delivery', NULL, 0, '2022-11-11 03:40:18', '2022-11-11 03:40:18');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `quantity`, `price`, `created_at`, `updated_at`) VALUES
(1, '1', '1', '1', '120000', '2022-08-18 15:48:08', '2022-08-18 15:48:08'),
(2, '2', '2', '1', '115000', '2022-08-18 15:48:49', '2022-08-18 15:48:49'),
(3, '3', '1', '1', '120000', '2022-08-18 23:41:50', '2022-08-18 23:41:50'),
(4, '4', '1', '1', '120000', '2022-08-20 07:49:41', '2022-08-20 07:49:41'),
(5, '6', '2', '1', '115000', '2022-08-20 07:55:00', '2022-08-20 07:55:00'),
(6, '7', '1', '1', '120000', '2022-08-20 08:16:07', '2022-08-20 08:16:07'),
(7, '8', '2', '1', '115000', '2022-08-20 11:24:29', '2022-08-20 11:24:29'),
(8, '9', '3', '1', '159999', '2022-08-20 11:27:15', '2022-08-20 11:27:15'),
(9, '10', '2', '1', '115000', '2022-08-20 13:39:04', '2022-08-20 13:39:04'),
(10, '11', '2', '1', '115000', '2022-08-20 13:50:23', '2022-08-20 13:50:23'),
(11, '12', '1', '1', '120000', '2022-08-20 13:54:17', '2022-08-20 13:54:17'),
(12, '13', '2', '1', '115000', '2022-08-20 13:55:33', '2022-08-20 13:55:33'),
(13, '14', '2', '1', '115000', '2022-08-21 02:06:45', '2022-08-21 02:06:45'),
(14, '15', '2', '1', '115000', '2022-08-21 02:15:05', '2022-08-21 02:15:05'),
(15, '16', '2', '1', '115000', '2022-08-21 02:18:15', '2022-08-21 02:18:15'),
(16, '17', '2', '1', '115000', '2022-08-21 12:51:16', '2022-08-21 12:51:16'),
(17, '18', '2', '1', '115000', '2022-08-22 00:12:35', '2022-08-22 00:12:35'),
(18, '19', '2', '1', '115000', '2022-08-22 00:14:30', '2022-08-22 00:14:30'),
(19, '20', '1', '1', '120000', '2022-08-22 22:48:33', '2022-08-22 22:48:33'),
(20, '21', '1', '1', '120000', '2022-09-14 06:03:05', '2022-09-14 06:03:05'),
(21, '22', '1', '1', '120000', '2022-09-14 06:05:04', '2022-09-14 06:05:04'),
(22, '24', '2', '1', '115000', '2022-09-15 11:18:19', '2022-09-15 11:18:19'),
(23, '25', '1', '1', '120000', '2022-10-23 23:40:50', '2022-10-23 23:40:50'),
(24, '26', '1', '1', '120000', '2022-10-23 23:43:22', '2022-10-23 23:43:22'),
(25, '27', '1', '1', '120000', '2022-11-11 03:40:18', '2022-11-11 03:40:18');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('seshan.nethmike@gmail.com', '$2y$10$CYP14.0GLeZA5u4p1z8KN.h36RlpeNgDl1kQhbqSkReH9G4a0YYl.', '2022-08-22 22:49:55');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) NOT NULL,
  `brand_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `original_price` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `offer` tinyint(4) DEFAULT NULL,
  `selling_price` bigint(20) NOT NULL,
  `image` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trending` tinyint(4) DEFAULT NULL,
  `ram` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `processor` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `storage` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` tinyint(4) DEFAULT NULL,
  `ports` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `graphic` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `display` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chipset` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `memory_slots` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `operating_system` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other_info` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `brand_name`, `model_name`, `description`, `original_price`, `offer`, `selling_price`, `image`, `quantity`, `status`, `trending`, `ram`, `processor`, `storage`, `type`, `ports`, `graphic`, `display`, `color`, `chipset`, `memory_slots`, `operating_system`, `other_info`, `created_at`, `updated_at`) VALUES
(1, 1, 'Acer', 'Aspire 5', NULL, '16000', 0, 120000, '1660856441.png', '4', NULL, 1, '8GB', 'Intel core i5', NULL, 0, NULL, 'NVIDIA® GeForce® RTX2050.1', '15\'\' FHD NanoEdge display', 'cilver', NULL, NULL, 'Windows 10 Home - Acer recommends Windows 10 Pro for business, Free Upgrade to Windows', NULL, '2022-08-18 15:30:41', '2022-11-11 03:40:18'),
(2, 1, 'Asus', 'Vivobook Pro', NULL, '130000', 1, 115000, '1660856494.png', '7', NULL, 0, '8GB', 'Intel core i5', NULL, 0, NULL, 'NVIDIA® GeForce® MX350', '14\'\' FHD NanoEdge display', 'black', NULL, NULL, 'Windows 10 Home - ASUS recommends Windows 10 Pro for business, Free Upgrade to Windows', NULL, '2022-08-18 15:31:34', '2022-09-15 11:18:19'),
(3, 2, 'Asus', 'gaming', NULL, '190000', NULL, 159999, '1660856608.png', '9', NULL, 1, '8GB', 'Intel core i7', '1TB HDD+128GB SSD', 1, NULL, 'RTX 3060 8GB', NULL, NULL, NULL, NULL, 'Windows 10 Home - ASUS recommends Windows 10 Pro for business, Free Upgrade to Windows', NULL, '2022-08-18 15:33:28', '2022-08-20 11:27:15'),
(4, 2, 'MSI', 'Peo series', NULL, '120000', NULL, 100000, '1660856742.png', '10', NULL, 0, '8GB', 'Intel core i3', '1TB HDD+128GB SSD', 0, NULL, 'Gtx 960 2GB', NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-18 15:35:42', '2022-08-18 21:57:19'),
(5, 4, 'Samsung', 's20+', 'Available. Released 2020, March 06', '145000', NULL, 125000, '1660856841.png', '10', NULL, 1, '8GB', NULL, NULL, 0, NULL, NULL, NULL, 'cilver', NULL, NULL, NULL, 'Fingerprint (under display, ultrasonic), accelerometer, gyro, proximity, compass, barometer', '2022-08-18 15:37:21', '2022-08-18 22:08:56'),
(6, 3, 'Canon', 'MAXIFY GX5070', 'ISO standard print speed (A4): up to 24.0 ipm black / 15.5 ipm colour', '25000', 0, 20000, '1660856995.jpg', '0', NULL, 1, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Wireless, Wired LAN, Mopria, AirPrint, Direct Wireless', '2022-08-18 15:39:55', '2022-08-18 22:54:58');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stars_rated` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_review` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'profile.png',
  `role_as` tinyint(4) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `lname`, `phone`, `address`, `city`, `image`, `role_as`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Seshan', 'seshan.nethmike@gmail.com', '2022-08-18 14:26:20', '$2y$10$C3n0lbuIcdqZ8DDqzR/.WO2JMPa5VMj3VyOdWJmkXcIH9hxWZeqfC', 'Nethmika', '0784700850', '2A,temple rd', 'Athurugiriya', '1660858094.p1.jpg', 1, 'q6elIygODNUstCVPGV9gIbgzZ8png3dKr8T1sXmn53rqeUqF1mh7lLccLJdJ', '2022-08-18 14:26:07', '2022-08-20 07:16:58'),
(2, 'cool', 'kingcoolsn@gmail.com', '2022-09-14 05:55:54', '$2y$10$JQlLhD9Lv/SBOM0CKwvfHO2icjipgPNMemi3xyUtPyQFULv2K1Twa', NULL, NULL, NULL, NULL, 'profile.png', 0, 'WayjNgAOFJOkXXTJkrzfnigwHHZEnq6Wxgxd4THs1vYIFdr3TArpLEMCvBMa', '2022-09-14 05:55:21', '2022-11-08 08:37:30');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wishlists`
--

INSERT INTO `wishlists` (`id`, `user_id`, `product_id`, `created_at`, `updated_at`) VALUES
(1, '1', '1', '2022-08-18 15:47:57', '2022-08-18 15:47:57'),
(2, '1', '1', '2022-10-22 00:47:55', '2022-10-22 00:47:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `devicecategory`
--
ALTER TABLE `devicecategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `devicecategory`
--
ALTER TABLE `devicecategory`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
