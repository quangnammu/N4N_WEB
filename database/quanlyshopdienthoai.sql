-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 03, 2019 lúc 06:21 AM
-- Phiên bản máy phục vụ: 10.1.33-MariaDB
-- Phiên bản PHP: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quanlyshopdienthoai`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `login`
--

CREATE TABLE `login` (
  `id_user` int(11) NOT NULL,
  `user` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `login`
--

INSERT INTO `login` (`id_user`, `user`, `password`, `email`) VALUES
(1, 'Admin', '123', 'admin@gmail.com'),
(2, 'customer', '123', 'customer@gmai.com'),
(4, 'quangnam', '123', 'quangnammu'),
(5, 'lanh', '123', '1111');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id_Product` int(11) NOT NULL,
  `name_Product` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `company_Product` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `price_Product` int(200) NOT NULL,
  `img` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Screen` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `operating_system` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Rear_camera` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Front_camera` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `CPU` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `RAM` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Internal_memory` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Battery_capacity` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id_Product`, `name_Product`, `company_Product`, `price_Product`, `img`, `Screen`, `operating_system`, `Rear_camera`, `Front_camera`, `CPU`, `RAM`, `Internal_memory`, `Battery_capacity`) VALUES
(2, 'Huawei Mate 20 Pro', 'Huawei', 2000000, 'img/product/Huawei Mate 20 Pro.jpg', 'Super AMOLED 6.2', ' Android 8.0 (Oreo) ', ' 2 camera 12 MP ', ' 8 MP ', ' Exynos 9810 64 bit                           ', ' 6 GB ', ' 128 GB ', ' 3500 mAh'),
(3, 'Huawei Mate 20', 'Huawei', 1599000, 'img/product/Huawei Mate 20.jpg', 'Super AMOLED 6.3\", Quad HD+ (2K+)  ', ' Android 7.1 (Nougat)  ', ' 2 camera 12 MP  ', ' 8 MP  ', ' Exynos 8895 64-bit  ', ' 6 GB  ', ' 64 GB  ', ' 3300 mAh'),
(4, 'Huawei Nova 3', 'Huawei', 9990000, 'img/product/Huawei Nova 3.jpg', 'Super AMOLED 6.21\", Full HD+  ', ' Android 8.1 (Oreo)  ', ' 2 camera 12 MP  ', ' 20 MP  ', ' Snapdragon 845  ', ' 8 GB  ', ' 128 GB  ', ' 3000 mAh'),
(5, 'iPhone Xs 256GB', 'iPhone', 1999990, 'img/product/iPhone Xs 256GB.jpg', 'Super AMOLED 6.4\", Quad HD+ (2K+)  ', ' Android 8.1 (Oreo)  ', ' 2 camera 12 MP  ', ' 8 MP  ', ' Exynos 9810 64 bit  ', ' 8 GB  ', ' 512 GB  ', ' 4000 mAh'),
(6, 'iPhone Xs Max 64GB', 'iPhone', 33900000, 'img/product/iPhone Xs Max 64GB.jpg', 'Super AMOLED 6.4\", Quad HD+ (2K+)  ', ' Android 8.1 (Oreo)  ', ' 2 camera 12 MP  ', ' 8 MP  ', ' Exynos 9810 64 bit  ', ' 6 GB  ', ' 128 GB  ', ' 4000 mAh'),
(7, 'iPhone Xs Max 256GB', 'iPhone', 37900000, 'img/product/iPhone Xs Max 256GB.jpg', 'Super AMOLED 6.2\", Quad HD+ (2K+)  ', ' Android 8.0 (Oreo)  ', ' 2 camera 12 MP  ', ' 8 MP  ', ' Exynos 9810 64 bit  ', ' 6 GB  ', ' 128 GB  ', ' 3500 mAh'),
(8, 'iPhone Xs Max 512GB', 'iPhone', 43900000, 'img/product/iPhone Xs Max 512GB.jpg', 'Super AMOLED 6.3\", Quad HD+ (2K+)  ', ' Android 7.1 (Nougat)  ', ' 2 camera 12 MP  ', ' 8 MP  ', ' Exynos 8895 64-bit  ', ' 6 GB  ', ' 64 GB  ', ' 3300 mAh'),
(10, 'OPPO F9', 'OPPO', 7900000, 'img/product/OPPO F9.jpg', 'Super AMOLED 6.25\", Full HD+  ', ' Android 8.1  ', ' 2 camera 12 MP  ', ' 20 MP  ', ' Snapdragon 845  ', ' 6 GB  ', ' 128 GB  ', ' 3000 mAh'),
(11, 'OPPO Find X', 'OPPO', 20900000, 'img/product/OPPO Find X.jpg', 'Super AMOLED 6.22\", Full HD+  ', ' Android 8.1  ', ' 2 camera 12 MP  ', ' 20 MP  ', ' Snapdragon 845  ', ' 8 GB  ', ' 128 GB  ', ' 3000 mAh'),
(12, 'OPPO R17 Pro', 'OPPO', 16900000, 'img/product/OPPO R17 Pro.jpg', 'Super AMOLED 6.21\", Full HD+  ', ' Android 8.1 (Oreo)  ', ' 2 camera 12 MP  ', ' 20 MP  ', ' Snapdragon 845  ', ' 6 GB  ', ' 128 GB  ', ' 3000 mAh'),
(13, 'Samsung Galaxy Note 8', 'Samsung', 19900000, 'img/product/Samsung Galaxy Note 8.jpg', 'Super AMOLED 6.4\", Quad HD+ (2K+)  ', ' Android 8.1 (Oreo)  ', ' 2 camera 12 MP  ', ' 8 MP  ', ' Exynos 9810 64 bit  ', ' 8 GB  ', ' 512 GB  ', ' 4000 mAh'),
(14, 'Samsung Galaxy Note 9 512GB', 'Samsung', 28900000, 'img/product/Samsung Galaxy Note 9 512GB.jpg', 'Super AMOLED 6.4\", Quad HD+ (2K+)  ', ' Android 8.1 (Oreo)  ', ' 2 camera 12 MP  ', ' 8 MP  ', ' Exynos 9810 64 bit  ', ' 6 GB  ', ' 128 GB  ', ' 4000 mAh'),
(15, 'Samsung Galaxy Note 9', 'Samsung', 22900000, 'img/product/Samsung Galaxy Note 9.jpg', 'Super AMOLED 6.2\", Quad HD+ (2K+)  ', ' Android 8.0 (Oreo)  ', ' 2 camera 12 MP  ', ' 8 MP  ', ' Exynos 9810 64 bit  ', ' 6 GB  ', ' 128 GB  ', ' 3500 mAh'),
(16, 'Samsung Galaxy S9+ 128GB', 'Samsung', 20900000, 'img/product/Samsung Galaxy S9+ 128GB.jpg', 'Super AMOLED 6.3\", Quad HD+ (2K+)  ', ' Android 7.1 (Nougat)  ', ' 2 camera 12 MP  ', ' 8 MP  ', ' Exynos 8895 64-bit  ', ' 6 GB  ', ' 64 GB  ', ' 3300 mAh'),
(17, 'Xiaomi Mi 8 Lite 6GB128GB', 'Xiaomi', 7400000, 'img/product/Xiaomi Mi 8 Lite 6GB128GB.jpg', 'Super AMOLED 6.21\", Full HD+  ', ' Android 8.1 (Oreo)  ', ' 2 camera 12 MP  ', ' 20 MP  ', ' Snapdragon 845  ', ' 8 GB  ', ' 128 GB  ', ' 3000 mAh'),
(18, 'Xiaomi Mi 8 Lite', 'Xiaomi', 6600000, 'img/product/Xiaomi Mi 8 Lite.jpg', 'Super AMOLED 6.25\", Full HD+  ', ' Android 8.1  ', ' 2 camera 12 MP  ', ' 20 MP  ', ' Snapdragon 845  ', ' 6 GB  ', ' 128 GB  ', ' 3000 mAh'),
(19, 'Xiaomi Mi 8 Pro', 'Xiaomi', 14900000, 'img/product/Xiaomi Mi 8 Pro.jpg', 'Super AMOLED 6.22\", Full HD+  ', ' Android 8.1  ', ' 2 camera 12 MP  ', ' 20 MP  ', ' Snapdragon 845  ', ' 8 GB  ', ' 128 GB  ', ' 3000 mAh'),
(20, 'Xiaomi Mi 8', 'Xiaomi', 12900000, 'img/product/Xiaomi Mi 8.jpg', 'Super AMOLED 6.21\", Full HD+  ', ' Android 8.1 (Oreo)  ', ' 2 camera 12 MP  ', ' 20 MP  ', ' Snapdragon 845  ', ' 6 GB  ', ' 128 GB  ', ' 3000 mAh');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_user`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_Product`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `login`
--
ALTER TABLE `login`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id_Product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
