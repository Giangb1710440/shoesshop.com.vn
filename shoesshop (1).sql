-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 19, 2021 lúc 12:49 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shoesshop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categorys`
--

CREATE TABLE `categorys` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categorys`
--

INSERT INTO `categorys` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(20, 'Sneaker', '2021-08-18 04:36:31', '2021-08-18 04:36:31'),
(21, 'Sport', '2021-08-18 07:19:59', '2021-08-18 07:19:59'),
(22, 'Running', '2021-09-02 07:33:55', '2021-09-02 07:33:55');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `detail_products`
--

CREATE TABLE `detail_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `size` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `detail_products`
--

INSERT INTO `detail_products` (`id`, `product_id`, `size`, `qty`, `created_at`, `updated_at`) VALUES
(13, 7, 38, 10, '2021-10-09 02:24:57', '2021-10-09 02:24:57'),
(14, 7, 39, 10, '2021-10-09 02:26:18', '2021-10-09 02:26:18'),
(15, 7, 40, 10, '2021-10-09 03:20:33', '2021-10-09 03:20:33'),
(17, 10, 38, 10, '2021-10-09 03:32:50', '2021-10-09 03:32:50'),
(18, 10, 39, 10, '2021-10-09 03:32:55', '2021-10-09 03:32:55'),
(19, 10, 40, 10, '2021-10-09 03:33:03', '2021-10-09 03:33:03'),
(20, 11, 39, 10, '2021-10-09 03:51:39', '2021-10-09 03:51:39'),
(21, 11, 40, 10, '2021-10-09 03:51:45', '2021-10-09 03:51:45'),
(22, 11, 41, 10, '2021-10-09 03:51:50', '2021-10-09 03:51:50'),
(23, 12, 40, 10, '2021-10-09 03:56:00', '2021-10-09 03:56:00'),
(24, 12, 41, 20, '2021-10-09 03:56:04', '2021-10-09 03:56:04'),
(25, 12, 42, 20, '2021-10-09 03:56:10', '2021-10-09 03:56:10'),
(26, 13, 39, 10, '2021-10-09 04:03:24', '2021-10-09 04:03:24'),
(27, 13, 40, 20, '2021-10-09 04:03:28', '2021-10-09 04:03:28'),
(28, 13, 41, 20, '2021-10-09 04:03:33', '2021-10-09 04:03:33'),
(29, 14, 39, 10, '2021-10-09 04:37:37', '2021-10-09 04:37:37'),
(30, 14, 40, 20, '2021-10-09 04:37:42', '2021-10-09 04:37:42'),
(31, 14, 41, 20, '2021-10-09 04:37:47', '2021-10-09 04:37:47'),
(32, 15, 38, 10, '2021-10-09 04:38:18', '2021-10-09 04:38:18'),
(33, 15, 39, 20, '2021-10-09 04:38:22', '2021-10-09 04:38:22'),
(34, 15, 40, 10, '2021-10-09 04:38:32', '2021-10-09 04:38:32'),
(35, 16, 38, 10, '2021-10-09 04:52:17', '2021-10-09 04:52:17'),
(36, 16, 39, 20, '2021-10-09 04:52:21', '2021-10-09 04:52:21'),
(37, 16, 40, 15, '2021-10-09 04:52:28', '2021-10-09 04:52:28'),
(38, 17, 39, 10, '2021-10-09 04:52:59', '2021-10-09 04:52:59'),
(39, 17, 40, 20, '2021-10-09 04:53:06', '2021-10-09 04:53:06'),
(40, 17, 41, 10, '2021-10-09 04:53:13', '2021-10-09 04:53:13'),
(41, 7, 38, 15, '2021-10-19 03:27:14', '2021-10-19 03:27:14'),
(42, 17, 41, 12, '2021-10-19 03:28:15', '2021-10-19 03:28:15'),
(43, 17, 40, 12, '2021-10-19 03:36:30', '2021-10-19 03:36:30');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
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
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2021_08_13_161330_create_role_accesss_table', 1),
(4, '2021_08_17_033411_create_category', 1),
(5, '2021_08_17_034909_create_suppliers_table', 1),
(6, '2021_08_17_034942_create_products_table', 1),
(7, '2021_08_17_035012_create_users_table', 1),
(8, '2021_08_17_035205_create_orders_table', 1),
(10, '2021_08_17_035256_create_order_details_table', 1),
(11, '2021_08_17_044307_create_product_supplier_table', 1),
(13, '2021_09_03_104537_create_detail_products_table', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `order_status` int(11) NOT NULL,
  `order_amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `order_status`, `order_amount`, `total_price`, `created_at`, `updated_at`) VALUES
(2, 3, 2, '1', '800000', '2021-09-23 20:10:08', '2021-09-23 20:10:08'),
(3, 3, 3, '1', '800000', '2021-09-23 20:51:39', '2021-09-23 20:51:39'),
(4, 1, 2, '4', '4800000', '2021-10-17 19:05:43', '2021-10-17 19:05:43'),
(5, 1, 0, '2', '2000000', '2021-10-17 19:06:48', '2021-10-17 19:06:48'),
(6, 2, 0, '3', '4200000', '2021-10-17 19:33:51', '2021-10-17 19:33:51'),
(9, 2, 0, '1', '7400000', '2021-10-19 03:24:43', '2021-10-19 03:24:43'),
(10, 2, 0, '3', '4000000', '2021-10-19 03:25:33', '2021-10-19 03:25:33');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_details`
--

CREATE TABLE `order_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `quality` int(11) NOT NULL,
  `unit_price` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `quality`, `unit_price`, `created_at`, `updated_at`) VALUES
(2, 2, 7, 1, 800000, '2021-09-23 20:10:09', '2021-09-23 20:10:09'),
(3, 3, 7, 1, 800000, '2021-09-23 20:51:39', '2021-09-23 20:51:39'),
(4, 4, 11, 4, 1200000, '2021-10-17 19:05:43', '2021-10-17 19:05:43'),
(5, 5, 10, 2, 1000000, '2021-10-17 19:06:48', '2021-10-17 19:06:48'),
(6, 6, 10, 2, 1000000, '2021-10-17 19:33:51', '2021-10-17 19:33:51'),
(7, 6, 14, 1, 2200000, '2021-10-17 19:33:51', '2021-10-17 19:33:51'),
(12, 9, 10, 3, 1000000, '2021-10-19 03:24:43', '2021-10-19 03:24:43'),
(13, 9, 14, 2, 2200000, '2021-10-19 03:24:43', '2021-10-19 03:24:43'),
(14, 10, 10, 2, 2000000, '2021-10-19 03:25:33', '2021-10-19 03:25:33'),
(15, 10, 12, 1, 2000000, '2021-10-19 03:25:33', '2021-10-19 03:25:33');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` bigint(20) NOT NULL,
  `product_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_discribe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_discount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `category_id`, `product_name`, `product_price`, `product_image`, `product_discribe`, `product_discount`, `created_at`, `updated_at`) VALUES
(7, 22, 'SONIC PHANTASMS02', 900000, '[\"running-shoes.png\"]', 'Sản phẩm này may bằng vải công nghệ Primegreen, thuộc dòng chất liệu tái chế hiệu năng cao. Thân giày chứa 50% thành phần tái chế. Không sử dụng polyester nguyên sinh.', '0', '2021-09-02 07:41:43', '2021-10-17 19:22:18'),
(10, 22, 'SONIC 4 GORE-TEX', 1000000, '[\"run1.png\"]', 'Sản phẩm này may bằng vải công nghệ Primegreen, thuộc dòng chất liệu tái chế hiệu năng cao. Thân giày chứa 50% thành phần tái chế. Không sử dụng polyester nguyên sinh.', '0', '2021-10-09 03:17:21', '2021-10-09 03:17:21'),
(11, 22, 'SONIC 4 Balance', 1200000, '[\"run2.png\"]', 'Sản phẩm này may bằng vải công nghệ Primegreen, thuộc dòng chất liệu tái chế hiệu năng cao. Thân giày chứa 50% thành phần tái chế. Không sử dụng polyester nguyên sinh.', '0', '2021-10-09 03:51:21', '2021-10-09 03:51:21'),
(12, 20, 'XA COVER', 2000000, '[\"snaker1.png\"]', 'Sản phẩm này may bằng vải công nghệ Primegreen, thuộc dòng chất liệu tái chế hiệu năng cao. Thân giày chứa 50% thành phần tái chế. Không sử dụng polyester nguyên sinh.', '0', '2021-10-09 03:55:47', '2021-10-09 03:55:47'),
(13, 20, 'XA PRO 3D', 2000000, '[\"sneaker2.png\"]', 'Sản phẩm này may bằng vải công nghệ Primegreen, thuộc dòng chất liệu tái chế hiệu năng cao. Thân giày chứa 50% thành phần tái chế. Không sử dụng polyester nguyên sinh.', '0', '2021-10-09 04:02:25', '2021-10-09 04:02:25'),
(14, 20, 'X-MISSION 3', 2200000, '[\"sneaker3.png\"]', 'Sản phẩm này may bằng vải công nghệ Primegreen, thuộc dòng chất liệu tái chế hiệu năng cao. Thân giày chứa 50% thành phần tái chế. Không sử dụng polyester nguyên sinh.', '0', '2021-10-09 04:05:39', '2021-10-09 04:05:39'),
(15, 21, 'S/LAB SENSE 8', 900000, '[\"sport1.png\"]', 'Sản phẩm này may bằng vải công nghệ Primegreen, thuộc dòng chất liệu tái chế hiệu năng cao. Thân giày chứa 50% thành phần tái chế. Không sử dụng polyester nguyên sinh.', '0', '2021-10-09 04:07:47', '2021-10-09 04:07:47'),
(16, 20, 'SENSE FEEL 2', 2000000, '[\"sport2.png\"]', 'Sản phẩm này may bằng vải công nghệ Primegreen, thuộc dòng chất liệu tái chế hiệu năng cao. Thân giày chứa 50% thành phần tái chế. Không sử dụng polyester nguyên sinh.', '0', '2021-10-09 04:43:47', '2021-10-09 04:43:47'),
(17, 21, 'SPEEDCROSS 4 GORE', 1800000, '[\"sport3.png\"]', 'Sản phẩm này may bằng vải công nghệ Primegreen, thuộc dòng chất liệu tái chế hiệu năng cao. Thân giày chứa 50% thành phần tái chế. Không sử dụng polyester nguyên sinh.', '0', '2021-10-09 04:52:05', '2021-10-09 04:52:05');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_suppliers`
--

CREATE TABLE `product_suppliers` (
  `id` int(10) UNSIGNED NOT NULL,
  `supplier_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role_accesss`
--

CREATE TABLE `role_accesss` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_discribe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `role_accesss`
--

INSERT INTO `role_accesss` (`id`, `role_name`, `role_discribe`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Quyền Admin', NULL, NULL),
(2, 'Nhân viên', 'Quyền nhân viên', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `suppliers`
--

CREATE TABLE `suppliers` (
  `id` int(10) UNSIGNED NOT NULL,
  `supplier_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `supplier_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `supplier_discribe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `suppliers`
--

INSERT INTO `suppliers` (`id`, `supplier_name`, `supplier_address`, `supplier_discribe`, `created_at`, `updated_at`) VALUES
(1, 'Adidas', 'Quận 1, Tp Hồ Chí Minh', 'sneaker', '2021-08-18 05:37:27', '2021-08-18 05:37:27');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sex` int(11) NOT NULL,
  `birthday` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `username`, `email`, `email_verified_at`, `password`, `address`, `phone`, `sex`, `birthday`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'Hà Giang', 'giang1133', 'giang@gmail.com', NULL, '$2y$10$FOAbGI/ViMkWM4gLfuhj9eUCxoeaDXLZPiVDvaZUhDNfL2G7tqkXS', '3/2 ninh kieu can tho', '0939337416', 0, '1999-09-13', NULL, '2021-08-16 22:26:52', '2021-08-16 22:26:52'),
(2, 2, 'phan phu thuan', 'thuanbede', 'thuan@gmail.com', NULL, '$2y$10$UrGukaR76GrlFWrV5d5Yoew/krd9vMWC.7l6RKs5a7UrbkvASuG3S', '3/2 ninh kieu can tho', '0939337416', 0, '2021-08-28', NULL, '2021-08-16 22:27:31', '2021-08-16 22:27:31'),
(3, 2, 'Hà Giang', 'giang1133', 'giang123@gmail.com', NULL, '$2y$10$WUEiUcUrF4.v2O3oj/dExeNBqKI6K9Rx7sxzpM5WPwRm2vWbx6tQe', '3/2 ninh kieu can tho', '000939337416', 0, '2021-08-26', NULL, '2021-08-18 05:13:03', '2021-09-24 07:28:15');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categorys`
--
ALTER TABLE `categorys`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `detail_products`
--
ALTER TABLE `detail_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detail_products_product_id_foreign` (`product_id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_details_order_id_foreign` (`order_id`),
  ADD KEY `order_details_product_id_foreign` (`product_id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Chỉ mục cho bảng `product_suppliers`
--
ALTER TABLE `product_suppliers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_suppliers_supplier_id_foreign` (`supplier_id`),
  ADD KEY `product_suppliers_product_id_foreign` (`product_id`);

--
-- Chỉ mục cho bảng `role_accesss`
--
ALTER TABLE `role_accesss`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categorys`
--
ALTER TABLE `categorys`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `detail_products`
--
ALTER TABLE `detail_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `product_suppliers`
--
ALTER TABLE `product_suppliers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `role_accesss`
--
ALTER TABLE `role_accesss`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `detail_products`
--
ALTER TABLE `detail_products`
  ADD CONSTRAINT `detail_products_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_details_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categorys` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `product_suppliers`
--
ALTER TABLE `product_suppliers`
  ADD CONSTRAINT `product_suppliers_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_suppliers_supplier_id_foreign` FOREIGN KEY (`supplier_id`) REFERENCES `suppliers` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `role_accesss` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
