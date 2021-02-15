-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2021 at 05:36 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecomerce6`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `description`, `status`, `created_at`, `updated_at`) VALUES
(13, 'Brand', 'This Is Well', 1, '2021-01-27 15:37:10', '2021-01-27 15:37:10'),
(14, 'Library', 'Harmony Library', 1, '2021-02-02 13:27:21', '2021-02-02 13:27:21');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `status`, `created_at`, `updated_at`) VALUES
(12, 'Sports', 'This Is Valid', 1, '2021-01-27 15:36:35', '2021-01-27 15:36:35'),
(13, 'Book', 'This Is Reading', 1, '2021-02-02 13:25:12', '2021-02-02 13:25:12');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `password`, `mobile`, `address`, `created_at`, `updated_at`) VALUES
(3, 'Md Sabbir Hossain', 'sabbirhossain.tct94@gmail.com', '$2y$10$/JyTO.ozb2JMWy9RoWWEXu.8ZzwNUk5FlldgnUpX20mBSBG.rJG7i', '01706785748', 'Mirpur-02, Dhaka', '2021-01-27 23:01:36', '2021-01-27 23:01:36'),
(4, 'Sabbir', 'sabbir29@gmail.com', '$2y$10$o04cKX8XXnKFeLvVg1p.6OAAqnwPWeEznqX1gxn1d.HIHAERCwSrC', '018647446378', 'Dhanmondi-07', '2021-01-28 00:42:34', '2021-01-28 00:42:34'),
(5, 'nxkfvnzfn', 'sabbir29@gmail.com', '$2y$10$y.0Mu2DXwfmWPtdOCrddregYtsW6H6IR9VDzjDfDVELKn9J7KWSUG', '01706735774', 'Division : Rajshahi , Dist:Naogaon , P.S:Badalgachhi , P.o : Newrosulpur , Village: Kartikaher', '2021-02-02 14:35:31', '2021-02-02 14:35:31'),
(6, 'Local Product', 'sabbir29@gmail.com', '$2y$10$54C86v7o70vph6XSKzze.eqIANkgXGqF6sxDqTPwmcQo9viBuexQ6', '75749', 'kafhiuskethg', '2021-02-03 23:29:35', '2021-02-03 23:29:35'),
(7, 'Rockey', 'sabbir20@gmail.com', '$2y$10$B8jdFs5IlKTxnweTELF4/OuL8u47bBc7OD9mIMo3mnrB6K3Z2nXB.', '01706735774', 'dhanmondi-15', '2021-02-05 00:08:55', '2021-02-05 00:08:55');

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
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2020_05_21_100000_create_teams_table', 1),
(7, '2020_05_21_200000_create_team_user_table', 1),
(8, '2021_01_04_091831_create_sessions_table', 1),
(9, '2021_01_05_155904_create_categories_table', 2),
(10, '2021_01_05_161117_create_brands_table', 2),
(11, '2021_01_08_173040_create_products_table', 3),
(12, '2021_01_08_173630_create_sub_images_table', 3),
(13, '2021_01_27_075628_create_customers_table', 4),
(14, '2021_01_27_141625_create_shippings_table', 5),
(15, '2021_01_28_085229_create_orders_table', 6),
(16, '2021_01_28_085559_create_order_details_table', 6),
(17, '2021_01_28_085707_create_payments_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `shipping_id` int(11) NOT NULL,
  `order_total` double(10,2) NOT NULL,
  `order_date` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'Pending',
  `order_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `shipping_id`, `order_total`, `order_date`, `payment_type`, `payment_status`, `order_status`, `created_at`, `updated_at`) VALUES
(1, 7, 23, 160.00, '2021-02-07', 'cash', 'cancel', 'complete', '2021-02-07 13:27:42', '2021-02-13 03:02:26'),
(2, 7, 24, 314.00, '2021-02-08', 'cash', 'pending', 'cancel', '2021-02-08 02:31:53', '2021-02-13 03:01:52');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` double(10,2) NOT NULL,
  `product_qty` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `product_name`, `product_image`, `product_price`, `product_qty`, `created_at`, `updated_at`) VALUES
(1, 1, 17, 'Kids', 'product-images/9781523508143_3D.png', 155.00, 1, '2021-02-07 13:27:42', '2021-02-07 13:27:42'),
(2, 2, 16, 'Chapter Library.', 'product-images/lostbook.jpg', 305.00, 1, '2021-02-08 02:31:53', '2021-02-08 02:31:53');

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
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_amount` int(11) NOT NULL,
  `payment_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `order_id`, `payment_method`, `payment_amount`, `payment_date`, `created_at`, `updated_at`) VALUES
(1, 1, 'cash', 0, '2021-02-07', '2021-02-07 13:27:42', '2021-02-07 13:27:42'),
(2, 2, 'cash', 0, '2021-02-08', '2021-02-08 02:31:53', '2021-02-08 02:31:53');

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(10,2) NOT NULL,
  `stock_amount` int(11) NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `brand_id`, `name`, `code`, `price`, `stock_amount`, `short_description`, `long_description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(14, 11, 12, 'Mi A2', 'P609', 15000.00, 9, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt a nulla quis hendrerit. Praesent rhoncus sem porttitor congue tempor. Sed sit amet eleifend tortor, a tristique nisl. Vivamus vehicula interdum malesuada. Sed quam quam, faucibus vel vestibulum porttitor, sollicitudin pulvinar nulla. Ut ut laoreet mi. Integer efficitur consectetur tellus, tincidunt rhoncus mauris. Nunc quis turpis a neque imperdiet facilisis ac id augue. Vestibulum ipsum neque, efficitur et felis non', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt a nulla quis hendrerit. Praesent rhoncus sem porttitor congue tempor. Sed sit amet eleifend tortor, a tristique nisl. Vivamus vehicula interdum malesuada. Sed quam quam, faucibus vel vestibulum porttitor, sollicitudin pulvinar nulla. Ut ut laoreet mi. Integer efficitur consectetur tellus, tincidunt rhoncus mauris. Nunc quis turpis a neque imperdiet facilisis ac id augue. Vestibulum ipsum neque, efficitur et felis non, dictum tempus sem. Quisque non aliquet ex. Etiam non eros enim. Vivamus tellus ipsum, finibus vitae pulvinar tincidunt, aliquet non mi. Donec quis cursus sem, at accumsan risus.', 'product-images/Xiaomi-Mi-A2-1-526x526.jpg', 1, '2021-01-14 06:21:37', '2021-02-03 23:23:18'),
(15, 12, 13, 'Bat', 'Ba509', 500.00, 0, 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is availableIn publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available', 'product-images/cricket-bat-500x500.jpg', 1, '2021-01-27 15:38:49', '2021-02-06 16:02:26'),
(16, 13, 14, 'Chapter Library.', 'book709', 305.00, 3, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 'product-images/lostbook.jpg', 1, '2021-02-02 13:29:11', '2021-02-08 02:31:53'),
(17, 13, 14, 'Kids', 'kid098', 155.00, 54, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'product-images/9781523508143_3D.png', 1, '2021-02-02 13:31:45', '2021-02-07 13:27:42');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('1gnml76HR7oyz7Azci8IgJbQjs0MH6XqRdQzgoRp', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRmRDNDQ3MWJIWVpwMzd6OFNtOGFOVUNEakV0S2toTHZiWGF2cGIwYiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly9sb2NhbGhvc3QvZWNvbWVyY2U2L3B1YmxpYyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1613315105),
('flZJnfSHxaeFTJIqB3iHvks4s0IT23J9sEsRXKgE', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiSVJYcWg0Tnp3bUxZajJLWHdMTmxMWWVvOFp0N0tHNG44ZjJ6MnY2SiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1613313730),
('Mut3JTUB9jhOBG0GrsOuojf8v1VJWBUkziD8j7Jl', 5, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', 'YTo5OntzOjY6Il90b2tlbiI7czo0MDoiWWdEajg5NzRTRTJQQVBLNm50RU82NnY2Z1NTTEo3aU9MZDNOYWVmRiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDI6Imh0dHA6Ly9sb2NhbGhvc3QvZWNvbWVyY2U2L3B1YmxpYy9jaGVja291dCI7fXM6MzoidXJsIjthOjA6e31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTo1O3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkNzVkRnhKRkJ2R3hCaExpOHYuZG0vZUU0amQyaHk2eEpVbkEvN1lLb0pncmdnU29IU3RWS2UiO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJDc1ZEZ4SkZCdkd4QmhMaTh2LmRtL2VFNGpkMmh5NnhKVW5BLzdZS29KZ3JnZ1NvSFN0VktlIjtzOjExOiJncmFuZF90b3RhbCI7ZDoxNjA7czo0OiJjYXJ0IjthOjE6e3M6NzoiZGVmYXVsdCI7TzoyOToiSWxsdW1pbmF0ZVxTdXBwb3J0XENvbGxlY3Rpb24iOjE6e3M6ODoiACoAaXRlbXMiO2E6MTp7czozMjoiZDFiODA5Y2Q4NTkyZTM2NjViNjcxMTJiYzhmMjY1NGYiO086MzI6Ikdsb3VkZW1hbnNcU2hvcHBpbmdjYXJ0XENhcnRJdGVtIjoxMDp7czo1OiJyb3dJZCI7czozMjoiZDFiODA5Y2Q4NTkyZTM2NjViNjcxMTJiYzhmMjY1NGYiO3M6MjoiaWQiO2k6MTc7czozOiJxdHkiO3M6MToiMSI7czo0OiJuYW1lIjtzOjQ6IktpZHMiO3M6NToicHJpY2UiO2Q6MTU1O3M6Njoid2VpZ2h0IjtkOjA7czo3OiJvcHRpb25zIjtPOjM5OiJHbG91ZGVtYW5zXFNob3BwaW5nY2FydFxDYXJ0SXRlbU9wdGlvbnMiOjE6e3M6ODoiACoAaXRlbXMiO2E6MTp7czo1OiJpbWFnZSI7czozNToicHJvZHVjdC1pbWFnZXMvOTc4MTUyMzUwODE0M18zRC5wbmciO319czo3OiJ0YXhSYXRlIjtpOjIxO3M6NDk6IgBHbG91ZGVtYW5zXFNob3BwaW5nY2FydFxDYXJ0SXRlbQBhc3NvY2lhdGVkTW9kZWwiO047czo0NjoiAEdsb3VkZW1hbnNcU2hvcHBpbmdjYXJ0XENhcnRJdGVtAGRpc2NvdW50UmF0ZSI7aTowO319fX19', 1613235790),
('xmrNwuMjRtLsKSd5AB30xrub898XVgtbCdwgVvtN', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiN0c4aGRVWWd4amhXODFPSHNaWklUWkg5SXo1ZjkzMkxFU3NLendkSiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly9sb2NhbGhvc3QvbmV3c3BvcnRhbDEvcHVibGljIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1613313733);

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

CREATE TABLE `shippings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shippings`
--

INSERT INTO `shippings` (`id`, `name`, `email`, `mobile`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Sabbir', 'sabbir29@gmail.com', '018647446378', 'Dhanmondi-07', '2021-01-28 03:31:29', '2021-01-28 03:31:29'),
(2, 'Sabbir', 'sabbir29@gmail.com', '018647446378', 'Dhanmondi-07', '2021-01-28 03:41:10', '2021-01-28 03:41:10'),
(3, 'Sabbir', 'sabbir29@gmail.com', '018647446378', 'Dhanmondi-07', '2021-01-28 03:42:53', '2021-01-28 03:42:53'),
(4, 'Sabbir', 'sabbir29@gmail.com', '018647446378', 'Dhanmondi-07', '2021-01-28 16:00:19', '2021-01-28 16:00:19'),
(5, 'Sabbir', 'sabbir29@gmail.com', '018647446378', 'Dhanmondi-07', '2021-01-29 00:54:46', '2021-01-29 00:54:46'),
(6, 'Sabbir', 'sabbir29@gmail.com', '018647446378', 'Dhanmondi-07', '2021-01-31 21:35:56', '2021-01-31 21:35:56'),
(7, 'Sabbir', 'sabbir29@gmail.com', '018647446378', 'Dhanmondi-07', '2021-02-02 13:50:25', '2021-02-02 13:50:25'),
(8, 'nxkfvnzfn', 'sabbir29@gmail.com', '01706735774', 'Division : Rajshahi , Dist:Naogaon , P.S:Badalgachhi , P.o : Newrosulpur , Village: Kartikaher', '2021-02-02 14:35:37', '2021-02-02 14:35:37'),
(9, 'nxkfvnzfn', 'sabbir29@gmail.com', '01706735774', 'Division : Rajshahi , Dist:Naogaon , P.S:Badalgachhi , P.o : Newrosulpur , Village: Kartikaher', '2021-02-02 14:43:42', '2021-02-02 14:43:42'),
(10, 'Sabbir', 'sabbir29@gmail.com', '018647446378', 'Dhanmondi-07', '2021-02-02 14:49:34', '2021-02-02 14:49:34'),
(11, 'Sabbir', 'sabbir29@gmail.com', '018647446378', 'Dhanmondi-07', '2021-02-02 15:05:53', '2021-02-02 15:05:53'),
(12, 'Sabbir', 'sabbir29@gmail.com', '018647446378', 'Dhanmondi-07', '2021-02-03 02:02:16', '2021-02-03 02:02:16'),
(13, 'Sabbir', 'sabbir29@gmail.com', '018647446378', 'Dhanmondi-07', '2021-02-03 02:32:49', '2021-02-03 02:32:49'),
(14, 'Sabbir', 'sabbir29@gmail.com', '018647446378', 'Dhanmondi-07', '2021-02-03 23:22:45', '2021-02-03 23:22:45'),
(15, 'Sabbir', 'sabbir29@gmail.com', '018647446378', 'Dhanmondi-07', '2021-02-03 23:24:01', '2021-02-03 23:24:01'),
(16, 'Local Product', 'sabbir29@gmail.com', '75749', 'kafhiuskethg', '2021-02-03 23:29:38', '2021-02-03 23:29:38'),
(17, 'Riyed', 'sabbir29@gmail.com', '75749', 'kafhiuskethg', '2021-02-03 23:47:54', '2021-02-03 23:47:54'),
(18, 'Rockey', 'sabbir20@gmail.com', '01706735774', 'dhanmondi-15', '2021-02-05 00:09:03', '2021-02-05 00:09:03'),
(19, 'Rockey', 'sabbir20@gmail.com', '01706735774', 'dhanmondi-15', '2021-02-06 15:58:39', '2021-02-06 15:58:39'),
(20, 'Rockey', 'sabbir20@gmail.com', '01706735774', 'dhanmondi-15', '2021-02-06 16:00:23', '2021-02-06 16:00:23'),
(21, 'Aunto', 'aunto2@gmail.com', '01987576438', 'Mohammadpour', '2021-02-06 23:03:36', '2021-02-06 23:03:36'),
(22, 'Rockey', 'sabbir20@gmail.com', '01706735774', 'dhanmondi-15', '2021-02-07 16:06:53', '2021-02-07 16:06:53'),
(23, 'Rockey', 'sabbir20@gmail.com', '01706735774', 'dhanmondi-15', '2021-02-07 13:23:03', '2021-02-07 13:23:03'),
(24, 'Rockey', 'sabbir20@gmail.com', '01706735774', 'dhanmondi-15', '2021-02-08 02:31:48', '2021-02-08 02:31:48');

-- --------------------------------------------------------

--
-- Table structure for table `sub_images`
--

CREATE TABLE `sub_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `sub_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_images`
--

INSERT INTO `sub_images` (`id`, `product_id`, `sub_image`, `created_at`, `updated_at`) VALUES
(1, 4, 'product-sub-images/image-analysis.png', '2021-01-10 01:00:30', '2021-01-10 01:00:30'),
(2, 5, 'product-sub-images/tree-736885__340.jpg', '2021-01-10 19:13:48', '2021-01-10 19:13:48'),
(3, 5, 'product-sub-images/visual-reverse-image-search-v2_intro.jpg', '2021-01-10 19:13:48', '2021-01-10 19:13:48'),
(4, 5, 'product-sub-images/wp177271.jpg', '2021-01-10 19:13:48', '2021-01-10 19:13:48'),
(5, 6, 'product-sub-images/tree-736885__340.jpg', '2021-01-11 12:52:13', '2021-01-11 12:52:13'),
(6, 6, 'product-sub-images/visual-reverse-image-search-v2_intro.jpg', '2021-01-11 12:52:13', '2021-01-11 12:52:13'),
(7, 6, 'product-sub-images/wp177271.jpg', '2021-01-11 12:52:13', '2021-01-11 12:52:13'),
(8, 7, 'product-sub-images/download.jpg', '2021-01-11 12:55:49', '2021-01-11 12:55:49'),
(9, 7, 'product-sub-images/image-analysis.png', '2021-01-11 12:55:50', '2021-01-11 12:55:50'),
(10, 7, 'product-sub-images/tree-736885__340.jpg', '2021-01-11 12:55:50', '2021-01-11 12:55:50'),
(11, 8, 'product-sub-images/download.jpg', '2021-01-13 00:28:14', '2021-01-13 00:28:14'),
(12, 8, 'product-sub-images/image-analysis.png', '2021-01-13 00:28:14', '2021-01-13 00:28:14'),
(13, 8, 'product-sub-images/tree-736885__340.jpg', '2021-01-13 00:28:14', '2021-01-13 00:28:14'),
(14, 9, 'product-sub-images/visual-reverse-image-search-v2_intro.jpg', '2021-01-13 00:43:36', '2021-01-13 00:43:36'),
(15, 9, 'product-sub-images/wp177271.jpg', '2021-01-13 00:43:36', '2021-01-13 00:43:36'),
(16, 10, 'product-sub-images/tree-736885__340.jpg', '2021-01-13 02:26:40', '2021-01-13 02:26:40'),
(17, 10, 'product-sub-images/visual-reverse-image-search-v2_intro.jpg', '2021-01-13 02:26:40', '2021-01-13 02:26:40'),
(18, 10, 'product-sub-images/wp177271.jpg', '2021-01-13 02:26:40', '2021-01-13 02:26:40'),
(19, 11, 'product-sub-images/cnp-job-2021.png', '2021-01-13 03:30:08', '2021-01-13 03:30:08'),
(20, 11, 'product-sub-images/download.jpg', '2021-01-13 03:30:08', '2021-01-13 03:30:08'),
(21, 11, 'product-sub-images/image-analysis.png', '2021-01-13 03:30:08', '2021-01-13 03:30:08'),
(22, 12, 'product-sub-images/download.jpg', '2021-01-13 03:46:50', '2021-01-13 03:46:50'),
(23, 13, 'product-sub-images/71JeEP63a0L._UL1500_.jpg', '2021-01-14 03:13:36', '2021-01-14 03:13:36'),
(24, 13, 'product-sub-images/0127053_dhele-dei-t-shirt-for-men_550.jpeg', '2021-01-14 03:13:36', '2021-01-14 03:13:36'),
(25, 13, 'product-sub-images/tshirt-types-252.png', '2021-01-14 03:13:36', '2021-01-14 03:13:36'),
(29, 14, 'product-sub-images/2018021001622521ms4y8d6-500x500.jpg', '2021-01-14 06:22:11', '2021-01-14 06:22:11'),
(30, 14, 'product-sub-images/download (1).jpg', '2021-01-14 06:22:11', '2021-01-14 06:22:11'),
(31, 14, 'product-sub-images/download.jpg', '2021-01-14 06:22:11', '2021-01-14 06:22:11'),
(32, 15, 'product-sub-images/71qjE2I+O7L._SL1500_.jpg', '2021-01-27 15:38:49', '2021-01-27 15:38:49'),
(33, 15, 'product-sub-images/212943_Main_Thumb_0632982.jpg', '2021-01-27 15:38:49', '2021-01-27 15:38:49'),
(34, 15, 'product-sub-images/download.jpg', '2021-01-27 15:38:49', '2021-01-27 15:38:49'),
(35, 16, 'product-sub-images/1DDFE633-2B85-468D-B28D05ADAE7D1AD8_source.jpg', '2021-02-02 13:29:11', '2021-02-02 13:29:11'),
(36, 16, 'product-sub-images/download (1).jpg', '2021-02-02 13:29:11', '2021-02-02 13:29:11'),
(37, 16, 'product-sub-images/images.jpg', '2021-02-02 13:29:11', '2021-02-02 13:29:11'),
(38, 17, 'product-sub-images/Art-Activity-Books-for-Kids-Featured-Image-800x600.jpg', '2021-02-02 13:31:45', '2021-02-02 13:31:45'),
(39, 17, 'product-sub-images/download (1).jpg', '2021-02-02 13:31:45', '2021-02-02 13:31:45'),
(40, 17, 'product-sub-images/images.jpg', '2021-02-02 13:31:45', '2021-02-02 13:31:45');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_team` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `user_id`, `name`, `personal_team`, `created_at`, `updated_at`) VALUES
(1, 1, 'superadmin\'s Team', 1, '2021-01-05 03:10:51', '2021-01-05 03:10:51'),
(2, 2, 'Super\'s Team', 1, '2021-01-05 03:23:18', '2021-01-05 03:23:18'),
(3, 3, 'Super\'s Team', 1, '2021-01-05 03:46:08', '2021-01-05 03:46:08');

-- --------------------------------------------------------

--
-- Table structure for table `team_user`
--

CREATE TABLE `team_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `access_label` tinyint(4) NOT NULL DEFAULT 0,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `access_label`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(3, 'Super Admin', 'super@gmail.com', NULL, '$2y$10$XILRE7ILC5XtyvohbtWUy.zyuNfabnu/7aj.bjHHnSdr3s2/Whn9S', 1, NULL, NULL, NULL, NULL, NULL, '2021-01-05 03:46:08', '2021-01-05 03:46:08'),
(5, 'alik', 'dngjzdvctsf@fndnfv', NULL, '$2y$10$75dFxJFBvGxBhLi8v.dm/eE4jd2hy6xJUnA/7YKoJgrggSoHStVKe', 3, NULL, NULL, NULL, NULL, NULL, '2021-02-13 06:34:36', '2021-02-13 06:34:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
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
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `shippings`
--
ALTER TABLE `shippings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_images`
--
ALTER TABLE `sub_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teams_user_id_index` (`user_id`);

--
-- Indexes for table `team_user`
--
ALTER TABLE `team_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `team_user_team_id_user_id_unique` (`team_id`,`user_id`);

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
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `sub_images`
--
ALTER TABLE `sub_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `team_user`
--
ALTER TABLE `team_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
