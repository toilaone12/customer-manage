-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 17, 2024 lúc 04:52 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 7.4.29

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
-- Cấu trúc bảng cho bảng `payment`
--

CREATE TABLE `payment` (
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
-- Đang đổ dữ liệu cho bảng `payment`
--

INSERT INTO `payment` (`maHSTT`, `loaiHS`, `ngayLap`, `noiDung`, `canCu`, `soTien`, `thoiHanThanhToan`, `hinhThucThanhToan`, `maHD`, `created_at`, `updated_at`) VALUES
(1, 'a', '2024-04-17', 'a', 'a', 33, '2024-04-18', 'a', 1, '2024-04-16 16:25:28', '2024-04-16 16:25:28'),
(2, 'ac', '2024-04-18', 'ac', 'ac', 33, '2024-04-26', 'ac', 1, '2024-04-16 16:25:51', '2024-04-16 16:25:51'),
(3, 'ád', '2024-04-17', '1', 'a', 333333312, '2024-04-18', 'a', 1, '2024-04-16 16:51:07', '2024-04-16 16:51:07'),
(5, 'aádasd', '2024-04-18', 'a', 'a', 333123, '2024-04-18', 'a', 1, '2024-04-17 08:41:34', '2024-04-17 08:41:34');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`maHSTT`),
  ADD KEY `maHD` (`maHD`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `payment`
--
ALTER TABLE `payment`
  MODIFY `maHSTT` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
