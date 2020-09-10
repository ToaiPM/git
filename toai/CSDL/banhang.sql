-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th9 10, 2020 lúc 06:36 AM
-- Phiên bản máy phục vụ: 10.4.10-MariaDB
-- Phiên bản PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `banhang`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hangsx`
--

DROP TABLE IF EXISTS `hangsx`;
CREATE TABLE IF NOT EXISTS `hangsx` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `TenHangSX` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hangsx`
--

INSERT INTO `hangsx` (`id`, `TenHangSX`, `created_at`, `updated_at`) VALUES
(1, 'Apple', '2020-09-06 23:45:36', '2020-09-06 23:59:44'),
(3, 'SamSung', '2020-09-06 23:59:24', '2020-09-06 23:59:24'),
(5, 'OPPO', '2020-09-06 23:59:54', '2020-09-06 23:59:54');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hedieuhanh`
--

DROP TABLE IF EXISTS `hedieuhanh`;
CREATE TABLE IF NOT EXISTS `hedieuhanh` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `TenHDH` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hedieuhanh`
--

INSERT INTO `hedieuhanh` (`id`, `TenHDH`, `created_at`, `updated_at`) VALUES
(1, 'IOS', '2020-09-07 00:48:33', '2020-09-07 00:48:33'),
(2, 'Android', '2020-09-07 00:48:47', '2020-09-07 00:48:47'),
(3, 'Window phone', '2020-09-07 00:49:04', '2020-09-07 00:49:04');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisp`
--

DROP TABLE IF EXISTS `loaisp`;
CREATE TABLE IF NOT EXISTS `loaisp` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `TenLoaiSP` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaisp`
--

INSERT INTO `loaisp` (`id`, `TenLoaiSP`, `created_at`, `updated_at`) VALUES
(4, 'Laptop', '2020-09-06 23:48:59', '2020-09-06 23:48:59'),
(5, 'Máy tính bảng', '2020-09-06 23:52:52', '2020-09-07 09:12:22'),
(8, 'Điện thoại', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2020_09_05_102212_create_loaisp_create', 1),
(4, '2020_09_05_102806_create_hangsx_create', 1),
(5, '2020_09_05_103113_create_hedieuhanh_create', 1),
(6, '2020_09_08_085251_create_sanpham_table', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

DROP TABLE IF EXISTS `sanpham`;
CREATE TABLE IF NOT EXISTS `sanpham` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `TenSP` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `HinhAnh` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `GiaBan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MoTa` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `TinhTrang` int(11) NOT NULL DEFAULT 1,
  `LuotXem` int(11) NOT NULL DEFAULT 0,
  `loaisp_id` int(10) UNSIGNED NOT NULL,
  `hedieuhanh_id` int(10) UNSIGNED NOT NULL,
  `hangsx_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `sanpham_loaisp_id_foreign` (`loaisp_id`),
  KEY `sanpham_hedieuhanh_id_foreign` (`hedieuhanh_id`),
  KEY `sanpham_hangsx_id_foreign` (`hangsx_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `TenSP`, `HinhAnh`, `GiaBan`, `MoTa`, `TinhTrang`, `LuotXem`, `loaisp_id`, `hedieuhanh_id`, `hangsx_id`, `created_at`, `updated_at`) VALUES
(4, 'Samsung galaxy node 7', '6.jpg', '11590000', 'Dòng sản phẩm cao cấp đến từ Samsung', 1, 0, 8, 2, 3, NULL, NULL),
(5, 'iPhone 6s', '12.jpg', '12000000', 'Dòng sản phẩm đến từ Apple', 1, 0, 8, 1, 1, NULL, NULL),
(6, 'Oppo neo 9', '4.jpg', '3590000', 'Dòng điện thoại giá rẻ, phân khúc tầm trung, đến từ OPPO', 1, 0, 8, 2, 5, '2020-09-09 00:20:51', '2020-09-09 00:20:51');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permission` int(11) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 0,
  `phone` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Chưa cập nhật',
  `country` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Chưa cập nhật',
  `state` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Chưa cập nhật',
  `company` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Chưa cập nhật',
  `info` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Chưa cập nhật',
  `address` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Chưa cập nhật',
  `card_type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Chưa cập nhật',
  `card_number` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Chưa cập nhật',
  `card_SC` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Chưa cập nhật',
  `card_month` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Chưa cập nhật',
  `card_year` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Chưa cập nhật',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_phone_unique` (`phone`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `permission`, `status`, `phone`, `country`, `state`, `company`, `info`, `address`, `card_type`, `card_number`, `card_SC`, `card_month`, `card_year`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Nguyễn Tấn Toại', 'nttoai89@gmail.com', NULL, '$2y$10$hxHOo/PWFYq8nq8zC0tsjuIyhtlFekvptPb7L5h6su22zmv0CEIRm', 1, 0, '0985956340', 'Chưa cập nhật', 'Chưa cập nhật', 'Chưa cập nhật', 'Chưa cập nhật', 'Chưa cập nhật', 'Chưa cập nhật', 'Chưa cập nhật', 'Chưa cập nhật', 'Chưa cập nhật', 'Chưa cập nhật', NULL, '2020-09-06 23:19:15', '2020-09-09 10:38:35'),
(2, 'Nguyễn Văn Chương', 'nvc89@gmail.com', NULL, '$2y$10$Z6ywMGBwgbaGX/tPBs28LOgTd/EyNucJ3NBJmLErAhLWyl7vm5gCG', 0, 0, '0123456879', 'Chưa cập nhật', 'Chưa cập nhật', 'Chưa cập nhật', 'Chưa cập nhật', 'Long Xuyên, An Giang', 'Chưa cập nhật', 'Chưa cập nhật', 'Chưa cập nhật', 'Chưa cập nhật', 'Chưa cập nhật', NULL, '2020-09-06 23:21:32', '2020-09-08 20:10:41'),
(5, 'Đỗ Trần hà Giang', 'dthg89@gmail.com', NULL, '$2y$10$V3z1sqCGcBX9cW4TXRF9Deaam60rpKitAt7cotLaOX1YS36cYk1Qi', 0, 1, '0135687895', 'Việt Nam', 'An Giang', 'Chưa cập nhật', 'Chưa cập nhật', 'Mỹ Xuyên, Long Xuyên, An Giang', 'Chưa cập nhật', 'Chưa cập nhật', 'Chưa cập nhật', 'Chưa cập nhật', 'Chưa cập nhật', NULL, '2020-09-07 08:43:51', '2020-09-08 20:02:43'),
(6, 'Nguyễn Thị Ánh Tuyết', 'ntat97@gmail.com', NULL, '$2y$10$wehVML6Y/XvIvJ2uLdp/Zu0epyRJDupUpMPfAl0FPDVReuJjKLmPu', 0, 0, '0235695635', 'Việt Nam', 'An Giang', 'Chưa cập nhật', 'Chưa cập nhật', 'Chưa cập nhật', 'Chưa cập nhật', 'Chưa cập nhật', 'Chưa cập nhật', 'Chưa cập nhật', 'Chưa cập nhật', NULL, '2020-09-08 20:00:53', '2020-09-08 20:02:28');

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_hangsx_id_foreign` FOREIGN KEY (`hangsx_id`) REFERENCES `hangsx` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `sanpham_hedieuhanh_id_foreign` FOREIGN KEY (`hedieuhanh_id`) REFERENCES `hedieuhanh` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `sanpham_loaisp_id_foreign` FOREIGN KEY (`loaisp_id`) REFERENCES `loaisp` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
