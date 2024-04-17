-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 17, 2024 lúc 11:13 AM
-- Phiên bản máy phục vụ: 10.4.25-MariaDB
-- Phiên bản PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `customer_manage`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `maTK` int(10) UNSIGNED NOT NULL,
  `hoTen` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenDangNhap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matKhau` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`maTK`, `hoTen`, `tenDangNhap`, `matKhau`, `created_at`, `updated_at`) VALUES
(1, 'Thảo', 'thao', 'e10adc3949ba59abbe56e057f20f883e', '2024-04-16 17:17:22', '2024-04-16 17:17:12');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contract`
--

CREATE TABLE `contract` (
  `maHD` int(11) NOT NULL,
  `tenHD` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngayLap` date NOT NULL,
  `dieuKhoan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `maBG` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `contract`
--

INSERT INTO `contract` (`maHD`, `tenHD`, `ngayLap`, `dieuKhoan`, `maBG`, `created_at`, `updated_at`) VALUES
(1, 'a', '2024-04-19', 'a', 1, '2024-04-16 15:49:56', '2024-04-16 15:49:56'),
(3, 'ca', '2024-04-17', 'ádasd', 4, '2024-04-17 08:51:52', '2024-04-17 08:52:16');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `maKH` int(11) NOT NULL,
  `tenKH` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phanLoai` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diaChi` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soDienThoai` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maSoThue` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nguoiLienHe` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `moTa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `yeuCau` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customer`
--

INSERT INTO `customer` (`maKH`, `tenKH`, `phanLoai`, `diaChi`, `soDienThoai`, `email`, `maSoThue`, `nguoiLienHe`, `moTa`, `yeuCau`, `created_at`, `updated_at`) VALUES
(1, 'a', 'a', 'a', '0387221331', 'baooson3005@gmail.com', 'a', 'a', 'a', 'a', '2024-04-15 17:10:08', '2024-04-15 17:10:08'),
(5, 'b', 'b', 'HN', '0381123111', 'admin@gmail.com', '1', '1', '1', '1', '2024-04-17 08:30:07', '2024-04-17 08:30:07');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2024_04_15_232605_create_customer', 1),
(5, '2024_04_16_181753_create_quote', 2),
(6, '2024_04_16_222900_create_profile', 3),
(7, '2024_04_16_222951_create_contract', 3),
(8, '2024_04_17_000701_create_admin', 4);

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
-- Cấu trúc bảng cho bảng `profile`
--

CREATE TABLE `profile` (
  `maHSTT` int(10) UNSIGNED NOT NULL,
  `loaiHS` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngayLap` date NOT NULL,
  `noiDung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `canCu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soTien` double NOT NULL,
  `thoiHanThanhToan` date NOT NULL,
  `hinhThucThanhToan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maHD` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `profile`
--

INSERT INTO `profile` (`maHSTT`, `loaiHS`, `ngayLap`, `noiDung`, `canCu`, `soTien`, `thoiHanThanhToan`, `hinhThucThanhToan`, `maHD`, `created_at`, `updated_at`) VALUES
(1, 'a', '2024-04-17', 'a', 'a', 33, '2024-04-18', 'a', 1, '2024-04-16 16:25:28', '2024-04-16 16:25:28'),
(2, 'ac', '2024-04-18', 'ac', 'ac', 33, '2024-04-26', 'ac', 1, '2024-04-16 16:25:51', '2024-04-16 16:25:51'),
(3, 'ád', '2024-04-17', '1', 'a', 333333312, '2024-04-18', 'a', 1, '2024-04-16 16:51:07', '2024-04-16 16:51:07'),
(5, 'aádasd', '2024-04-18', 'a', 'a', 333123, '2024-04-18', 'a', 1, '2024-04-17 08:41:34', '2024-04-17 08:41:34');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quote`
--

CREATE TABLE `quote` (
  `maBG` int(11) NOT NULL,
  `tenBG` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mucTieu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phamViApDung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngayLap` date NOT NULL,
  `thoiHanApDung` date NOT NULL,
  `phuLuc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `maKH` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `quote`
--

INSERT INTO `quote` (`maBG`, `tenBG`, `mucTieu`, `phamViApDung`, `ngayLap`, `thoiHanApDung`, `phuLuc`, `maKH`, `created_at`, `updated_at`) VALUES
(1, 'a', 'a', '1', '2024-04-16', '2024-04-18', 'a', 5, '2024-04-16 11:42:18', '2024-04-17 08:30:30'),
(4, 'a1', '2', '2', '2024-04-17', '2024-04-19', 'a', 1, '2024-04-17 08:31:27', '2024-04-17 08:31:27');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`maTK`);

--
-- Chỉ mục cho bảng `contract`
--
ALTER TABLE `contract`
  ADD PRIMARY KEY (`maHD`),
  ADD KEY `maBG` (`maBG`);

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`maKH`);

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
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`maHSTT`),
  ADD KEY `maHD` (`maHD`);

--
-- Chỉ mục cho bảng `quote`
--
ALTER TABLE `quote`
  ADD PRIMARY KEY (`maBG`),
  ADD KEY `maKH` (`maKH`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `maTK` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `contract`
--
ALTER TABLE `contract`
  MODIFY `maHD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `customer`
--
ALTER TABLE `customer`
  MODIFY `maKH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `profile`
--
ALTER TABLE `profile`
  MODIFY `maHSTT` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `quote`
--
ALTER TABLE `quote`
  MODIFY `maBG` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
