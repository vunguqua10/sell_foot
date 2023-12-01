-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th12 01, 2023 lúc 06:27 AM
-- Phiên bản máy phục vụ: 8.0.31
-- Phiên bản PHP: 8.1.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `laravel`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `billing_addresses`
--

DROP TABLE IF EXISTS `billing_addresses`;
CREATE TABLE IF NOT EXISTS `billing_addresses` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_price` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `billing_addresses`
--

INSERT INTO `billing_addresses` (`id`, `user_id`, `first_name`, `last_name`, `username`, `email`, `address`, `address2`, `country`, `state`, `zip`, `total_price`, `created_at`, `updated_at`) VALUES
(1, 1, 'Vũ', 'Nguyễn Thành', 'â', 'thanhvu08103@gmail.com', 'aa', 'aa', 'United States', 'California', '2323', '19950.00', '2023-11-28 21:28:17', '2023-11-28 21:28:17'),
(2, 0, 'Vũ', 'Nguyễn Thành', 'aaa', 'thanhvu08103@gmail.com', 'aa', 'aa', 'United States', 'California', '2323', '19950.00', '2023-11-28 21:28:36', '2023-11-28 21:28:36'),
(3, 0, 'Vũ', 'Nguyễn Thành', 'aaaaaaaaa', 'thanhvu08103@gmail.com', 'aa', 'aa', 'United States', 'California', '2323', '19950.00', '2023-11-28 21:29:30', '2023-11-28 21:29:30'),
(4, 0, 'Vũ', 'Nguyễn Thành', 'aaaaa', 'thanhvu08103@gmail.com', 'aa', 'aa', 'United States', 'California', '2323', '49950.00', '2023-11-28 21:31:09', '2023-11-28 21:31:09'),
(5, 0, 'Vũ', 'Nguyễn Thành', 'aaaaa', 'thanhvu08103@gmail.com', 'aa', 'aa', 'United States', 'California', '2323', '49950.00', '2023-11-28 21:31:27', '2023-11-28 21:31:27'),
(6, 0, 'Vũ', 'Nguyễn Thành', 'aadsffdfdsfsd', 'thanhvu08103@gmail.com', 'aafdsfdfds', 'aa', 'United States', 'California', '2323', '79950.00', '2023-11-28 21:40:04', '2023-11-28 21:40:04'),
(7, 0, 'Vũ', 'Nguyễn Thành', 'aaaaa', 'thanhvu08103@gmail.com', 'aa', 'aa', 'United States', 'California', '2323', '19950.00', '2023-11-28 22:05:52', '2023-11-28 22:05:52'),
(8, 0, 'Vũ', 'Nguyễn Thành', '21211tt1217', 'thanhvu08103@gmail.com', 'aa', 'aa', 'United States', 'California', '2323', '224950.00', '2023-11-28 23:22:20', '2023-11-28 23:22:20'),
(9, 0, 'Vũ', 'Nguyễn Thành', 'aaa', 'thanhvu08103@gmail.com', 'aa', 'aa', 'United States', 'California', '2323', '159950.00', '2023-11-28 23:28:38', '2023-11-28 23:28:38'),
(10, 0, 'Vũ', 'Nguyễn Thành', 'aadsffdfdsfsd', 'thanhvu08103@gmail.com', 'aa', 'aa', 'United States', 'California', '2323', '229950.00', '2023-11-28 23:29:41', '2023-11-28 23:29:41'),
(11, 0, 'Vũ', 'Nguyễn Thành', '21211tt1217', 'thanhvu08103@gmail.com', 'aa', 'aa', 'United States', 'California', '2323', '309950.00', '2023-11-28 23:36:31', '2023-11-28 23:36:31'),
(12, 0, 'Vũ', 'Nguyễn Thành', '232asas', 'thanhvu08103@gmail.com', 'aa', 'aa', 'United States', 'California', '2323', '379950.00', '2023-11-28 23:37:59', '2023-11-28 23:37:59'),
(13, 0, 'Vũ', 'Nguyễn Thành', '21211tt12172323232', 'thanhvu08103@gmail.com', 'aa', 'aa', 'United States', 'California', '2323', '379950.00', '2023-11-28 23:39:30', '2023-11-28 23:39:30'),
(14, 0, 'Vũ', 'Nguyễn Thành', 'htrong2003', 'thanhvu08103@gmail.com', 'aa', 'aa', 'United States', 'California', '2323', '29950.00', '2023-11-29 01:39:01', '2023-11-29 01:39:01'),
(15, 0, 'Vũ', 'Nguyễn Thành', 'admin', 'thanhvu08103@gmail.com', 'aa', 'aa', 'United States', 'California', '1111', '59950.00', '2023-11-29 01:48:13', '2023-11-29 01:48:13'),
(16, 0, 'Vũ', 'Nguyễn Thành', 'test1', 'thanhvu08103@gmail.com', 'aa', 'aa', 'United States', 'California', '2323', '64950.00', '2023-11-29 01:56:43', '2023-11-29 01:56:43'),
(17, 0, 'Vũ', 'Nguyễn Thành', '21211tt1217123123213', 'thanhvu08103@gmail.com', 'aa', 'aa', 'United States', 'California', '2323', '19950.00', '2023-11-29 03:10:19', '2023-11-29 03:10:19'),
(18, 0, 'Vũ', 'Nguyễn Thành', 'sadsdadsada', 'thanhvu08103@gmail.com', 'aa', 'aa', 'United States', 'California', '2323', '64950.00', '2023-11-29 03:53:38', '2023-11-29 03:53:38'),
(19, 0, 'Vũdsd', 'Nguyễn Thành', 'iudsrzmej@triots.com132', 'admin@gmail.com', 'aa', 'aa', 'United States', 'California', '2323', '124950.00', '2023-11-29 03:55:50', '2023-11-29 03:55:50'),
(20, 0, 'Vũ', 'Nguyễn Thành', 'sgdhf', 'thanhvu08103@gmail.com', 'aa', 'aa', 'United States', 'California', '2323', '189950.00', '2023-11-29 04:00:58', '2023-11-29 04:00:58'),
(21, 0, 'Vũ', 'Nguyễn Thành', 'ẻtertret', 'thanhvu08103@gmail.com', 'aa', 'aa', 'United States', 'California', '2323', '219950.00', '2023-11-29 04:02:06', '2023-11-29 04:02:06'),
(22, 0, 'Vũ', 'Nguyễn Thành', 'iudsrzmej@triots.comqeeqweqweq', 'thanhvu08103@gmail.com', 'aa', 'aa', 'United States', 'California', '2323', '239950.00', '2023-11-29 04:21:11', '2023-11-29 04:21:11'),
(23, 0, 'Vũ', 'Nguyễn Thành', 'br', 'thanhvu08103@gmail.com', 'aaaaaaaaa', 'aaa', 'United States', 'California', '2323', '304950.00', '2023-11-29 04:28:36', '2023-11-29 04:28:36'),
(24, 0, 'Vũ', 'Nguyễn Thành', 'aa', 'thanhvu08103@gmail.com', 'âsasasasas', NULL, 'Choose...', 'California', '2222', '214950.00', '2023-11-29 04:31:44', '2023-11-29 04:31:44'),
(25, 0, 'Vũ', 'Nguyễn Thành', 'aaaaa', 'thanhvu08103@gmail.com', 'aa', 'aa', 'United States', 'California', '2323', '-50.00', '2023-11-29 04:47:33', '2023-11-29 04:47:33'),
(26, 0, 'Vũ', 'Nguyễn Thành', 'aaa', 'thanhvu08103@gmail.com', 'aa', 'aa', 'United States', 'California', '2323', '-50.00', '2023-11-29 04:50:51', '2023-11-29 04:50:51'),
(27, 0, 'Vũ', 'Nguyễn Thành', 'aaa', 'thanhvu08103@gmail.com', 'aa', 'aa', 'United States', 'California', '2323', '-50.00', '2023-11-29 04:54:11', '2023-11-29 04:54:11'),
(28, 0, 'Vũ', 'Nguyễn Thành', 'aqwqw', 'thanhvu08103@gmail.com', 'aa', 'aa', 'United States', 'California', '2323', '-50.00', '2023-11-29 04:55:58', '2023-11-29 04:55:58'),
(29, 0, 'Vũ', 'Nguyễn Thành', 'aaa', 'thanhvu08103@gmail.com', 'aa', 'aa', 'United States', 'California', '2323', '-50.00', '2023-11-29 04:59:53', '2023-11-29 04:59:53'),
(30, 0, 'Vũ', 'Nguyễn Thành', 'aa', 'thanhvu08103@gmail.com', 'aa', 'aa', 'United States', 'California', '2323', '-50.00', '2023-11-29 05:16:43', '2023-11-29 05:16:43'),
(31, 0, 'Vũ', 'Nguyễn Thành', 'aaaaewe', 'thanhvu08103@gmail.com', 'aa', 'aa', 'United States', 'California', '2323', '64950.00', '2023-11-29 07:49:41', '2023-11-29 07:49:41'),
(32, 0, 'Vũ', 'Nguyễn Thành', 'aaa', 'thanhvu08103@gmail.com', 'aa', 'aa', 'United States', 'California', '2323', '84950.00', '2023-11-29 07:51:38', '2023-11-29 07:51:38'),
(33, 0, 'Vũ', 'Nguyễn Thành', 'aaaa', 'thanhvu08103@gmail.com', 'aa', 'aa', 'United States', 'California', '2323', '234950.00', '2023-11-29 07:53:13', '2023-11-29 07:53:13'),
(34, 0, 'Vũ', 'Nguyễn Thành', 'aaaaa', 'thanhvu08103@gmail.com', 'aa', 'aa', 'United States', 'California', '2323', '254950.00', '2023-11-29 07:54:20', '2023-11-29 07:54:20'),
(35, 0, 'Vũ', 'Nguyễn Thành', 'aaa', 'thanhvu08103@gmail.com', 'aa', 'aa', 'United States', 'California', '2323', '64950.00', '2023-11-29 07:58:07', '2023-11-29 07:58:07'),
(36, 0, 'Vũ', 'Nguyễn Thành', 'aaaqwwe', 'thanhvu08103@gmail.com', 'aa', 'aa', 'United States', 'California', '2323', '29950.00', '2023-11-29 07:59:56', '2023-11-29 07:59:56'),
(37, 0, 'Vũ', 'Nguyễn Thành', 'âsas33', 'thanhvu08103@gmail.com', 'aa', 'aa', 'United States', 'California', '2323', '29950.00', '2023-11-29 08:02:28', '2023-11-29 08:02:28'),
(38, 0, 'Vũcvcvc', 'Nguyễn Thành', 'vcvcvc', 'thanhvu08103@gmail.com', 'aa', 'aa', 'United States', 'California', '2323', '99950.00', '2023-11-29 08:04:41', '2023-11-29 08:04:41'),
(39, 0, 'Vũ', 'Nguyễn Thành', 'aas32', 'thanhvu08103@gmail.com', 'aa', 'aa', 'United States', 'California', '2323', '99950.00', '2023-11-29 08:05:33', '2023-11-29 08:05:33'),
(40, 0, 'Vũ', 'Nguyễn Thành', 'ewewewew', 'thanhvu08103@gmail.com', 'aa', 'aa', 'United States', 'California', '2323', '164950.00', '2023-11-29 08:13:22', '2023-11-29 08:13:22'),
(41, 0, 'Vũ', 'Nguyễn Thành', 'hdhds', 'thanhvu08103@gmail.com', 'aa', 'aa', 'United States', 'California', '2323', '29950.00', '2023-11-29 09:13:03', '2023-11-29 09:13:03'),
(42, 0, 'Vũ', 'Nguyễn Thành', 'adasas', 'thanhvu08103@gmail.com', 'aa', 'aa', 'United States', 'California', '2323', '94950.00', '2023-11-29 09:20:16', '2023-11-29 09:20:16'),
(43, 0, 'Vũ', 'Nguyễn Thành', '21211tt1217', 'thanhvu08103@gmail.com', 'aa', 'aa', 'United States', 'California', '2323', '64950.00', '2023-11-29 09:23:36', '2023-11-29 09:23:36'),
(44, 0, 'Vũ', 'Nguyễn Thành', 'ssa', 'thanhvu08103@gmail.com', 'aa', 'aa', 'United States', 'California', '2323', '64950.00', '2023-11-29 09:29:07', '2023-11-29 09:29:07'),
(45, 0, 'Vũ', 'Nguyễn Thành', 'aatest', 'thanhvu08103@gmail.com', 'aa', 'aa', 'United States', 'California', '2323', '64950.00', '2023-11-29 09:44:41', '2023-11-29 09:44:41'),
(46, 0, 'Vũ', 'Nguyễn Thành', 'asasas', 'thanhvu08103@gmail.com', 'aa', 'aa', 'United States', 'California', '2323', '64950.00', '2023-11-29 09:45:57', '2023-11-29 09:45:57'),
(47, 0, 'Vũ', 'Nguyễn Thành', 'asss', 'thanhvu08103@gmail.com', 'aa', 'aa', 'United States', 'California', '2323', '29950.00', '2023-11-29 09:47:50', '2023-11-29 09:47:50'),
(48, 0, 'Vũ', 'Nguyễn Thành', 'dsdsdsds', 'thanhvu08103@gmail.com', 'aa', 'aa', 'United States', 'California', '2323', '19950.00', '2023-11-29 10:00:29', '2023-11-29 10:00:29'),
(49, 0, 'Vũ', 'Nguyễn Thành', 'ggg', 'thanhvu08103@gmail.com', 'aa', 'aa', 'United States', 'California', '2323', '19950.00', '2023-11-29 10:01:32', '2023-11-29 10:01:32'),
(50, 0, 'Vũ', 'Nguyễn Thành', 'aa', 'thanhvu08103@gmail.com', 'aa', 'aa', 'United States', 'California', '2323', '19950.00', '2023-11-29 10:19:17', '2023-11-29 10:19:17'),
(51, 0, 'Vũ', 'Nguyễn Thành', 'aaa', 'thanhvu08103@gmail.com', 'aa', 'aa', 'United States', 'California', '2323', '64950.00', '2023-11-29 10:20:08', '2023-11-29 10:20:08'),
(52, 0, 'Vũ', 'Nguyễn Thành', 'vbcn', 'thanhvu08103@gmail.com', 'aa', 'aa', 'United States', 'California', '2323', '64950.00', '2023-11-29 10:28:59', '2023-11-29 10:28:59'),
(53, 0, 'Vũ', 'Nguyễn Thành', 'aet3', 'thanhvu08103@gmail.com', 'aa', 'aa', 'United States', 'California', '2323', '64950.00', '2023-11-29 10:30:55', '2023-11-29 10:30:55'),
(54, 0, 'Vũ', 'Nguyễn Thành', 'vccvcv', 'thanhvu08103@gmail.com', 'aa', 'aa', 'United States', 'California', '2323', '64950.00', '2023-11-29 10:39:23', '2023-11-29 10:39:23'),
(55, 0, 'Vũ', 'Nguyễn Thành', 'aaaaaaaawee3', 'thanhvu08103@gmail.com', 'aa', 'aa', 'United States', 'California', '2323', '29950.00', '2023-11-29 10:48:59', '2023-11-29 10:48:59'),
(56, 0, 'Vũ', 'Nguyễn Thành', 'aaacv', 'thanhvu08103@gmail.com', 'aa', 'aa', 'United States', 'California', '2323', '29950.00', '2023-11-29 10:50:29', '2023-11-29 10:50:29'),
(57, 0, 'Vũ', 'Nguyễn Thành', 'ass', 'thanhvu08103@gmail.com', 'aa', 'aa', 'United States', 'California', '2323', '-50.00', '2023-11-29 10:52:30', '2023-11-29 10:52:30'),
(58, 0, 'Vũ', 'Nguyễn Thành', 'aaa', 'thanhvu08103@gmail.com', 'aa', 'aa', 'United States', 'California', '2323', '-50.00', '2023-11-29 10:53:44', '2023-11-29 10:53:44'),
(59, 0, 'Vũ', 'Nguyễn Thành', '3232sds', 'thanhvu08103@gmail.com', 'aa', 'aa', 'United States', 'California', '2323', '-50.00', '2023-11-29 10:55:01', '2023-11-29 10:55:01'),
(60, 0, 'Vũ', 'Nguyễn Thành', 'aaaae', 'thanhvu08103@gmail.com', 'aa', 'aa', 'United States', 'California', '2323', '-50.00', '2023-11-29 10:55:58', '2023-11-29 10:55:58'),
(61, 0, 'Vũ', 'Nguyễn Thành', 'aaaa', 'thanhvu08103@gmail.com', 'aa', 'aa', 'United States', 'California', '2323', '-50.00', '2023-11-29 10:57:11', '2023-11-29 10:57:11'),
(62, 0, 'Vũ', 'Nguyễn Thành', 'adsadasd', 'thanhvu08103@gmail.com', 'aa', 'aa', 'United States', 'California', '2323', '-50.00', '2023-11-29 10:58:09', '2023-11-29 10:58:09'),
(63, 0, 'Vũ', 'Nguyễn Thành', 'sdsdsds', 'thanhvu08103@gmail.com', 'aa', 'aa', 'United States', 'California', '2323', '-50.00', '2023-11-29 11:00:43', '2023-11-29 11:00:43'),
(64, 0, 'Vũ', 'Nguyễn Thành', 'adsdsad', 'thanhvu08103@gmail.com', 'aa', 'aa', 'United States', 'California', '2323', '-50.00', '2023-11-29 11:03:02', '2023-11-29 11:03:02'),
(65, 0, 'Vũ', 'Nguyễn Thành', 'smhm', 'thanhvu08103@gmail.com', 'aa', 'aa', 'United States', 'California', '2323', '-50.00', '2023-11-29 11:09:12', '2023-11-29 11:09:12'),
(66, 0, 'Vũ', 'Nguyễn Thành', 'aaa', 'thanhvu08103@gmail.com', 'aa', 'aa', 'United States', 'California', '2323', '29950.00', '2023-11-29 20:36:33', '2023-11-29 20:36:33'),
(67, 1, 'Vũ', 'Nguyễn Thành', 'aaa', 'thanhvu08103@gmail.com', 'aa', 'aa', 'United States', 'California', '2323', '49950.00', '2023-11-29 21:00:11', '2023-11-29 21:00:11'),
(68, 1, 'Vũ nè', 'Nguyễn Thành', 'Thanh Vu', 'thanhvu08103@gmail.com', '585', 'aa', 'United States', 'California', '2323', '79950.00', '2023-11-29 21:52:48', '2023-11-29 21:52:48'),
(69, 1, 'rrtt', 'ty', 'tryt', 'thanhvu08103@gmail.com', 'Linh Chiểu,Thủ Đức', 'ghjhj', 'United States', 'California', '5568', '179950.00', '2023-11-29 23:52:53', '2023-11-29 23:52:53');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `carts`
--

DROP TABLE IF EXISTS `carts`;
CREATE TABLE IF NOT EXISTS `carts` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_user` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `carts`
--

INSERT INTO `carts` (`id`, `id_user`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart_details`
--

DROP TABLE IF EXISTS `cart_details`;
CREATE TABLE IF NOT EXISTS `cart_details` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_user` bigint UNSIGNED DEFAULT NULL,
  `id_product` int NOT NULL,
  `quantity` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cart_details`
--

INSERT INTO `cart_details` (`id`, `id_user`, `id_product`, `quantity`, `created_at`, `updated_at`) VALUES
(19, 2, 4, 1, '2023-11-07 07:19:12', '2023-11-07 07:19:12'),
(80, 1, 4, 2, '2023-11-29 20:33:27', '2023-11-29 21:52:08'),
(81, 1, 1, 1, '2023-11-29 20:59:54', '2023-11-29 20:59:54');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `cate_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `cate_name`, `created_at`, `updated_at`) VALUES
(1, 'Bánh', '2023-11-07 03:35:15', '2023-11-08 05:31:01'),
(2, 'Kem', '2023-11-07 03:45:36', '2023-11-07 03:45:36'),
(3, 'Trái cây', '2023-11-08 11:49:37', '2023-11-08 11:49:37'),
(4, 'Thịt', '2023-11-08 11:49:44', '2023-11-08 11:49:44');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact_us`
--

DROP TABLE IF EXISTS `contact_us`;
CREATE TABLE IF NOT EXISTS `contact_us` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(6, 'cccc', 'con@gmail.com', 'a', 'dfssdfsdf', '2023-11-29 11:50:17', '2023-11-29 11:50:17'),
(7, 'duong', 'duong@gmail.com', 'a', 'concac', '2023-11-29 11:53:30', '2023-11-29 11:53:30');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(5, '2014_10_12_000000_create_users_table', 1),
(6, '2014_10_12_100000_create_password_resets_table', 1),
(7, '2019_08_19_000000_create_failed_jobs_table', 1),
(8, '2023_05_12_081810_create_product_table', 1),
(9, '2023_05_13_030823_create_table_category_table', 1),
(10, '2023_05_14_084002_create_cart_table', 2),
(11, '2019_12_14_000001_create_personal_access_tokens_table', 3),
(12, '2023_05_14_084059_create_cart_detail_table', 4),
(13, '2023_05_13_121121_create_voucher_table', 5),
(14, '2023_05_14_084329_create_wishlist_table', 6),
(15, '2023_05_14_084409_create_wishlist_detail_table', 6),
(16, '2023_11_16_070235_create_order_table', 7),
(17, '2023_11_11_063453_create_address_user_table', 8),
(18, '2023_11_28_184055_create_billing_addresses_table', 9),
(19, '2023_11_30_025251_create_payment_history_table', 10),
(20, '2023_11_28_183831_create_billing_address_table', 11);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order`
--

DROP TABLE IF EXISTS `order`;
CREATE TABLE IF NOT EXISTS `order` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `order_user_id_foreign` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order`
--

INSERT INTO `order` (`id`, `user_id`, `created_at`, `updated_at`, `email`, `status`) VALUES
(1, 1, NULL, NULL, 'thanhvu08103@gmail.com', 0),
(2, 2, NULL, NULL, 'nhh14082002@gmail.com', 1),
(3, 3, NULL, NULL, 'nhh14082002@gmail.com', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `payment_history`
--

DROP TABLE IF EXISTS `payment_history`;
CREATE TABLE IF NOT EXISTS `payment_history` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint UNSIGNED NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_amount` decimal(10,2) NOT NULL,
  `payment_method` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=80 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `payment_history`
--

INSERT INTO `payment_history` (`id`, `user_id`, `username`, `payment_amount`, `payment_method`, `payment_date`, `created_at`, `updated_at`) VALUES
(1, 1, 'aaa', '49950.00', 'COD', '2023-11-29 21:00:11', '2023-11-29 21:43:05', '2023-11-29 21:43:05'),
(2, 1, 'aaa', '49950.00', 'COD', '2023-11-29 21:00:11', '2023-11-29 21:43:57', '2023-11-29 21:43:57'),
(3, 1, 'aaa', '49950.00', 'COD', '2023-11-29 21:00:11', '2023-11-29 21:44:18', '2023-11-29 21:44:18'),
(4, 1, 'aaa', '49950.00', 'COD', '2023-11-29 21:00:11', '2023-11-29 21:45:23', '2023-11-29 21:45:23'),
(5, 1, 'aaa', '49950.00', 'COD', '2023-11-29 21:00:11', '2023-11-29 21:45:57', '2023-11-29 21:45:57'),
(6, 1, 'aaa', '49950.00', 'COD', '2023-11-29 21:00:11', '2023-11-29 21:46:18', '2023-11-29 21:46:18'),
(7, 1, 'â', '19950.00', 'COD', '2023-11-28 21:28:17', '2023-11-29 21:48:05', '2023-11-29 21:48:05'),
(8, 1, 'aaa', '49950.00', 'COD', '2023-11-29 21:00:11', '2023-11-29 21:48:05', '2023-11-29 21:48:05'),
(9, 1, 'â', '19950.00', 'COD', '2023-11-28 21:28:17', '2023-11-29 21:51:08', '2023-11-29 21:51:08'),
(10, 1, 'aaa', '49950.00', 'COD', '2023-11-29 21:00:11', '2023-11-29 21:51:08', '2023-11-29 21:51:08'),
(11, 1, 'â', '19950.00', 'COD', '2023-11-28 21:28:17', '2023-11-29 21:51:59', '2023-11-29 21:51:59'),
(12, 1, 'aaa', '49950.00', 'COD', '2023-11-29 21:00:11', '2023-11-29 21:51:59', '2023-11-29 21:51:59'),
(13, 1, 'â', '19950.00', 'COD', '2023-11-28 21:28:17', '2023-11-29 21:53:04', '2023-11-29 21:53:04'),
(14, 1, 'aaa', '49950.00', 'COD', '2023-11-29 21:00:11', '2023-11-29 21:53:04', '2023-11-29 21:53:04'),
(15, 1, 'Thanh Vu', '79950.00', 'COD', '2023-11-29 21:52:48', '2023-11-29 21:53:04', '2023-11-29 21:53:04'),
(16, 1, 'â', '19950.00', 'COD', '2023-11-28 21:28:17', '2023-11-29 21:56:23', '2023-11-29 21:56:23'),
(17, 1, 'aaa', '49950.00', 'COD', '2023-11-29 21:00:11', '2023-11-29 21:56:23', '2023-11-29 21:56:23'),
(18, 1, 'Thanh Vu', '79950.00', 'COD', '2023-11-29 21:52:48', '2023-11-29 21:56:23', '2023-11-29 21:56:23'),
(19, 1, 'â', '19950.00', 'COD', '2023-11-28 21:28:17', '2023-11-29 21:58:49', '2023-11-29 21:58:49'),
(20, 1, 'aaa', '49950.00', 'COD', '2023-11-29 21:00:11', '2023-11-29 21:58:49', '2023-11-29 21:58:49'),
(21, 1, 'Thanh Vu', '79950.00', 'COD', '2023-11-29 21:52:48', '2023-11-29 21:58:49', '2023-11-29 21:58:49'),
(22, 1, 'â', '19950.00', 'COD', '2023-11-28 21:28:17', '2023-11-29 21:59:15', '2023-11-29 21:59:15'),
(23, 1, 'aaa', '49950.00', 'COD', '2023-11-29 21:00:11', '2023-11-29 21:59:15', '2023-11-29 21:59:15'),
(24, 1, 'Thanh Vu', '79950.00', 'COD', '2023-11-29 21:52:48', '2023-11-29 21:59:15', '2023-11-29 21:59:15'),
(25, 1, 'â', '19950.00', 'COD', '2023-11-28 21:28:17', '2023-11-29 21:59:49', '2023-11-29 21:59:49'),
(26, 1, 'aaa', '49950.00', 'COD', '2023-11-29 21:00:11', '2023-11-29 21:59:49', '2023-11-29 21:59:49'),
(27, 1, 'Thanh Vu', '79950.00', 'COD', '2023-11-29 21:52:48', '2023-11-29 21:59:49', '2023-11-29 21:59:49'),
(28, 1, 'â', '19950.00', 'COD', '2023-11-28 21:28:17', '2023-11-29 21:59:55', '2023-11-29 21:59:55'),
(29, 1, 'aaa', '49950.00', 'COD', '2023-11-29 21:00:11', '2023-11-29 21:59:55', '2023-11-29 21:59:55'),
(30, 1, 'Thanh Vu', '79950.00', 'COD', '2023-11-29 21:52:48', '2023-11-29 21:59:55', '2023-11-29 21:59:55'),
(31, 1, 'â', '19950.00', 'COD', '2023-11-28 21:28:17', '2023-11-29 21:59:57', '2023-11-29 21:59:57'),
(32, 1, 'aaa', '49950.00', 'COD', '2023-11-29 21:00:11', '2023-11-29 21:59:57', '2023-11-29 21:59:57'),
(33, 1, 'Thanh Vu', '79950.00', 'COD', '2023-11-29 21:52:48', '2023-11-29 21:59:57', '2023-11-29 21:59:57'),
(34, 1, 'â', '19950.00', 'COD', '2023-11-28 21:28:17', '2023-11-29 22:00:46', '2023-11-29 22:00:46'),
(35, 1, 'aaa', '49950.00', 'COD', '2023-11-29 21:00:11', '2023-11-29 22:00:46', '2023-11-29 22:00:46'),
(36, 1, 'Thanh Vu', '79950.00', 'COD', '2023-11-29 21:52:48', '2023-11-29 22:00:46', '2023-11-29 22:00:46'),
(37, 1, 'â', '19950.00', 'COD', '2023-11-28 21:28:17', '2023-11-29 22:02:49', '2023-11-29 22:02:49'),
(38, 1, 'aaa', '49950.00', 'COD', '2023-11-29 21:00:11', '2023-11-29 22:02:49', '2023-11-29 22:02:49'),
(39, 1, 'Thanh Vu', '79950.00', 'COD', '2023-11-29 21:52:48', '2023-11-29 22:02:49', '2023-11-29 22:02:49'),
(40, 1, 'â', '19950.00', 'COD', '2023-11-28 21:28:17', '2023-11-29 22:02:54', '2023-11-29 22:02:54'),
(41, 1, 'aaa', '49950.00', 'COD', '2023-11-29 21:00:11', '2023-11-29 22:02:54', '2023-11-29 22:02:54'),
(42, 1, 'Thanh Vu', '79950.00', 'COD', '2023-11-29 21:52:48', '2023-11-29 22:02:54', '2023-11-29 22:02:54'),
(43, 1, 'â', '19950.00', 'COD', '2023-11-28 21:28:17', '2023-11-29 22:02:56', '2023-11-29 22:02:56'),
(44, 1, 'aaa', '49950.00', 'COD', '2023-11-29 21:00:11', '2023-11-29 22:02:56', '2023-11-29 22:02:56'),
(45, 1, 'Thanh Vu', '79950.00', 'COD', '2023-11-29 21:52:48', '2023-11-29 22:02:56', '2023-11-29 22:02:56'),
(46, 1, 'â', '19950.00', 'COD', '2023-11-28 21:28:17', '2023-11-29 22:02:58', '2023-11-29 22:02:58'),
(47, 1, 'aaa', '49950.00', 'COD', '2023-11-29 21:00:11', '2023-11-29 22:02:58', '2023-11-29 22:02:58'),
(48, 1, 'Thanh Vu', '79950.00', 'COD', '2023-11-29 21:52:48', '2023-11-29 22:02:58', '2023-11-29 22:02:58'),
(49, 1, 'â', '19950.00', 'COD', '2023-11-28 21:28:17', '2023-11-29 22:03:05', '2023-11-29 22:03:05'),
(50, 1, 'aaa', '49950.00', 'COD', '2023-11-29 21:00:11', '2023-11-29 22:03:05', '2023-11-29 22:03:05'),
(51, 1, 'Thanh Vu', '79950.00', 'COD', '2023-11-29 21:52:48', '2023-11-29 22:03:05', '2023-11-29 22:03:05'),
(52, 1, 'â', '19950.00', 'COD', '2023-11-28 21:28:17', '2023-11-29 22:03:08', '2023-11-29 22:03:08'),
(53, 1, 'aaa', '49950.00', 'COD', '2023-11-29 21:00:11', '2023-11-29 22:03:08', '2023-11-29 22:03:08'),
(54, 1, 'Thanh Vu', '79950.00', 'COD', '2023-11-29 21:52:48', '2023-11-29 22:03:08', '2023-11-29 22:03:08'),
(55, 1, 'â', '19950.00', 'COD', '2023-11-28 21:28:17', '2023-11-29 22:03:15', '2023-11-29 22:03:15'),
(56, 1, 'aaa', '49950.00', 'COD', '2023-11-29 21:00:11', '2023-11-29 22:03:15', '2023-11-29 22:03:15'),
(57, 1, 'Thanh Vu', '79950.00', 'COD', '2023-11-29 21:52:48', '2023-11-29 22:03:15', '2023-11-29 22:03:15'),
(58, 1, 'â', '19950.00', 'COD', '2023-11-28 21:28:17', '2023-11-29 22:03:59', '2023-11-29 22:03:59'),
(59, 1, 'aaa', '49950.00', 'COD', '2023-11-29 21:00:11', '2023-11-29 22:03:59', '2023-11-29 22:03:59'),
(60, 1, 'Thanh Vu', '79950.00', 'COD', '2023-11-29 21:52:48', '2023-11-29 22:03:59', '2023-11-29 22:03:59'),
(61, 1, 'â', '19950.00', 'COD', '2023-11-28 21:28:17', '2023-11-29 22:04:09', '2023-11-29 22:04:09'),
(62, 1, 'aaa', '49950.00', 'COD', '2023-11-29 21:00:11', '2023-11-29 22:04:09', '2023-11-29 22:04:09'),
(63, 1, 'Thanh Vu', '79950.00', 'COD', '2023-11-29 21:52:48', '2023-11-29 22:04:09', '2023-11-29 22:04:09'),
(64, 1, 'â', '19950.00', 'COD', '2023-11-28 21:28:17', '2023-11-29 22:04:25', '2023-11-29 22:04:25'),
(65, 1, 'aaa', '49950.00', 'COD', '2023-11-29 21:00:11', '2023-11-29 22:04:25', '2023-11-29 22:04:25'),
(66, 1, 'Thanh Vu', '79950.00', 'COD', '2023-11-29 21:52:48', '2023-11-29 22:04:25', '2023-11-29 22:04:25'),
(67, 1, 'â', '19950.00', 'COD', '2023-11-28 21:28:17', '2023-11-29 22:05:22', '2023-11-29 22:05:22'),
(68, 1, 'aaa', '49950.00', 'COD', '2023-11-29 21:00:11', '2023-11-29 22:05:22', '2023-11-29 22:05:22'),
(69, 1, 'Thanh Vu', '79950.00', 'COD', '2023-11-29 21:52:48', '2023-11-29 22:05:22', '2023-11-29 22:05:22'),
(70, 1, 'â', '19950.00', 'COD', '2023-11-28 21:28:17', '2023-11-29 22:06:11', '2023-11-29 22:06:11'),
(71, 1, 'aaa', '49950.00', 'COD', '2023-11-29 21:00:11', '2023-11-29 22:06:11', '2023-11-29 22:06:11'),
(72, 1, 'Thanh Vu', '79950.00', 'COD', '2023-11-29 21:52:48', '2023-11-29 22:06:11', '2023-11-29 22:06:11'),
(73, 1, 'â', '19950.00', 'COD', '2023-11-28 21:28:17', '2023-11-29 22:06:13', '2023-11-29 22:06:13'),
(74, 1, 'aaa', '49950.00', 'COD', '2023-11-29 21:00:11', '2023-11-29 22:06:13', '2023-11-29 22:06:13'),
(75, 1, 'Thanh Vu', '79950.00', 'COD', '2023-11-29 21:52:48', '2023-11-29 22:06:13', '2023-11-29 22:06:13'),
(76, 1, 'â', '19950.00', 'COD', '2023-11-28 21:28:17', '2023-11-29 23:57:42', '2023-11-29 23:57:42'),
(77, 1, 'aaa', '49950.00', 'COD', '2023-11-29 21:00:11', '2023-11-29 23:57:42', '2023-11-29 23:57:42'),
(78, 1, 'Thanh Vu', '79950.00', 'COD', '2023-11-29 21:52:48', '2023-11-29 23:57:42', '2023-11-29 23:57:42'),
(79, 1, 'tryt', '179950.00', 'COD', '2023-11-29 23:52:53', '2023-11-29 23:57:42', '2023-11-29 23:57:42');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int NOT NULL,
  `instock` int NOT NULL,
  `sold` int NOT NULL,
  `id_category` bigint UNSIGNED DEFAULT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `product_views` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `products_ibfk_1` (`id_category`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `instock`, `sold`, `id_category`, `photo`, `created_at`, `updated_at`, `product_views`) VALUES
(1, 'Bánh bao', 'Bánh bao đã hiện diện trong cuộc sống của người Việt từ rất lâu và trở thành món ăn thân thuộc mỗi khi bụng đói. Đặc biệt, bánh bao nhân thịt là món khoái khẩu của hầu hết mọi người, từ trẻ em cho đến người lớn tuổi hay những bạn trẻ.', 20000, 200, 100, 1, 'banhbao.jpg', NULL, NULL, 11),
(2, 'Bánh cuốn', 'Bánh của Việt Nam', 20000, 209, 10, 1, 'banhcuon.jpg', NULL, NULL, NULL),
(3, 'Kem chocolate', 'kem ngon', 20000, 100, 5, 2, 'kemsocola.jpg', NULL, NULL, 4),
(4, 'Kem dâu', 'kem dâuuuuu', 30000, 200, 100, 2, 'kemdau.jpg', NULL, NULL, 8),
(5, 'Thịt nguội', 'Thịt nguội hay còn được gọi là thịt Dăm Bông (Thịt nguội tiếng anh được gọi là “Ham” và thịt nguội tiếng Pháp là “Jambon”). Mặc dù món ăn có nguồn gốc từ các nước Châu Âu, nhưng hiện nay rất được ưa chuộng tại Việt Nam. Dễ dàng tìm thấy thịt nguội trong món bánh mì thịt nguội mà chúng ta ăn thường ngày', 70000, 200, 50, 4, 'thitnguoi.jpg\r\n', NULL, NULL, 7),
(6, 'Thịt ba chỉ', 'Thịt ba chỉ là khúc thịt lợn được nhiều người ưa chuộng bởi có tỷ lệ mỡ nạc hài hòa và dễ chế biến thành nhiều món ăn ngon khác nhau như rim, nướng, kho, luộc, hầm hay hun khói, thịt quay...', 160000, 50, 10, 4, 'thitbachi.jpg', NULL, NULL, 6),
(7, 'Việt Quất', 'Việt quất là một loại cây bụi có hoa, quả mọng màu xanh tím. Trái việt quất thường rất nhỏ, khi chưa chín sẽ có màu xanh lục rồi dần chuyển sang tím và xanh khi chín tới. Có hai loại phổ biến nhất gồm: Quả việt quất Highbush: Loại được trồng nhiều tại Mỹ. Quả việt quất Lowbush: Loại nhỏ hơn và giàu chất chống oxy hóa hơn.', 150000, 40, 5, 3, 'vietquat.jpg', NULL, NULL, NULL),
(8, 'Dâu tằm', 'Quả dâu tằm đen hoặc đỏ là loại trái cây thuộc họ quả mọng, được yêu thích bởi vị chua ngọt cũng như giàu các vitamin, khoáng chất.', 65000, 50, 500, 3, 'dautam.jpg', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'htrong2003', 'thanhvu08103@gmail.com', NULL, '$2y$10$pm7pcp.FbJW8jZFADuh.WeydImRMP1JsPY1wjzxLmO4XLUVTge3m6', NULL, '2023-11-04 03:24:55', '2023-11-29 04:00:58'),
(2, 'honghao123', 'nhh14082002@gmail.com', NULL, '$2y$10$oYeabSPykh3Eha6miaZ3dOxLDYw3Ytg1mDNWW8ZMYi5YoP/ahGHbS', NULL, '2023-11-07 07:17:40', '2023-11-07 07:17:40'),
(3, 'vu', 'vu@gmail.com', '2023-11-30 04:49:39', '$2y$10$Wv38ounOjAwgtnXA6G73WOUG9PpDeig16HwVru1/Cuj.F8QKgiNou', NULL, '2023-11-30 04:49:39', '2023-11-30 04:49:39');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vouchers`
--

DROP TABLE IF EXISTS `vouchers`;
CREATE TABLE IF NOT EXISTS `vouchers` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `code_voucher` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `createddate` date NOT NULL,
  `expireddate` date NOT NULL,
  `reduce` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `vouchers`
--

INSERT INTO `vouchers` (`id`, `code_voucher`, `createddate`, `expireddate`, `reduce`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2023-11-05', '2023-11-10', 10, NULL, NULL),
(3, 'user', '2023-11-09', '2023-11-13', 20, '2023-11-08 11:02:52', '2023-11-08 11:02:52');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `wishlists`
--

DROP TABLE IF EXISTS `wishlists`;
CREATE TABLE IF NOT EXISTS `wishlists` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_user` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `wishlist_details`
--

DROP TABLE IF EXISTS `wishlist_details`;
CREATE TABLE IF NOT EXISTS `wishlist_details` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_user` int NOT NULL,
  `id_product` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `cart_details`
--
ALTER TABLE `cart_details`
  ADD CONSTRAINT `cart_details_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
