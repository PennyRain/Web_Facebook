-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 09, 2022 lúc 04:51 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_facebook`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baiviet`
--

CREATE TABLE `baiviet` (
  `id_status` int(11) NOT NULL,
  `id_nguoidung` int(11) NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `coment`
--

CREATE TABLE `coment` (
  `id_status` int(11) NOT NULL,
  `id_nguoidung` int(11) NOT NULL,
  `nd_coment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhom`
--

CREATE TABLE `nhom` (
  `id_nhom` int(11) NOT NULL,
  `founder` int(11) NOT NULL,
  `group_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `privacy` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `page`
--

CREATE TABLE `page` (
  `id_page` int(11) NOT NULL,
  `nguoitaotrang` int(11) NOT NULL,
  `name_page` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mota` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `soluong_thich`
--

CREATE TABLE `soluong_thich` (
  `id_status` int(11) NOT NULL,
  `soluong` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thanhvien`
--

CREATE TABLE `thanhvien` (
  `id_nhom` int(11) NOT NULL,
  `id_thanhvien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firts_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` enum('female','male','other','') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `token` varchar(11) NOT NULL,
  `tokenExpire` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `firts_name`, `last_name`, `email`, `password`, `gender`, `created_at`, `token`, `tokenExpire`) VALUES
(13, 'Phạm Ngọc', 'Duy', 'bboyphamduy1@gmail.com', '890b463661f73f66b19246c704dcf031', 'male', '2022-01-09 03:07:47', 'usp84ekab7', '2022-01-09 10:12:47'),
(14, 'Trần Chí', 'Tuấn', 'ongtrumdianguc@gmail.com', 'e60e09f552ffc09b951b8d9174cad325', 'female', '2022-01-09 04:40:29', '', '0000-00-00 00:00:00'),
(15, 'Đỗ Hải', 'Triều', 'chomalay1@gmail.com', '8889230b1ff8c11e005f1c3543497996', 'other', '2022-01-09 04:41:45', '', '0000-00-00 00:00:00'),
(16, 'Nguyễn Văn', 'An', 'nguyenvanan@gmail.com', 'b2271c2631e7e643d4d5880e75e9fef5', 'female', '2022-01-09 04:43:11', '', '0000-00-00 00:00:00'),
(17, 'Bùi Thế', 'Dũng', 'buithedung@gmail.com', '6568c16034227f1a28b4c882685ba85e', 'male', '2022-01-09 04:43:44', '', '0000-00-00 00:00:00'),
(18, 'Nguyễn Văn', 'Lương', 'nguyenvanluong@gmail.com', '582126d5c3491d1bfbfe518e65c8db4b', 'other', '2022-01-09 04:44:22', '', '0000-00-00 00:00:00'),
(19, 'Mạc Long', 'Vũ', 'maclongvu@gmail.com', '087fc7efd6800090d3e9d91b65c596c6', 'female', '2022-01-09 04:45:03', '', '0000-00-00 00:00:00'),
(20, 'Ngô Ngọc', 'Vũ', 'ngongocvu@gmail.com', 'd34e2c1cc1a2deb0af4ecc06b1c15ea5', 'male', '2022-01-09 04:45:37', '', '0000-00-00 00:00:00'),
(21, 'Nguyễn Văn', 'Đức', 'nguyenvanduc@gmail.com', '5b7e51a3bc0ace19fb78401d8c0a29bf', 'other', '2022-01-09 04:47:09', '', '0000-00-00 00:00:00'),
(22, 'Trần Đăng', 'Khoa', 'trandangkhoa@gmail.com', '5a2db01c21bd00e5b422749a6cfe4043', 'female', '2022-01-09 04:47:43', '', '0000-00-00 00:00:00'),
(23, 'Nguyễn Văn', 'Hưng', 'nguyenvanhung@gmail.com', 'eb60a17160c0ccbf6d21860ab4ec4dc9', 'male', '2022-01-09 04:48:25', '', '0000-00-00 00:00:00');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  ADD PRIMARY KEY (`id_status`),
  ADD UNIQUE KEY `id_nguoidung` (`id_nguoidung`);

--
-- Chỉ mục cho bảng `coment`
--
ALTER TABLE `coment`
  ADD PRIMARY KEY (`id_status`),
  ADD UNIQUE KEY `id_nguoidung` (`id_nguoidung`);

--
-- Chỉ mục cho bảng `nhom`
--
ALTER TABLE `nhom`
  ADD PRIMARY KEY (`id_nhom`,`founder`),
  ADD KEY `founder` (`founder`);

--
-- Chỉ mục cho bảng `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id_page`),
  ADD UNIQUE KEY `nguoitaotrang` (`nguoitaotrang`);

--
-- Chỉ mục cho bảng `soluong_thich`
--
ALTER TABLE `soluong_thich`
  ADD PRIMARY KEY (`id_status`),
  ADD UNIQUE KEY `soluong` (`soluong`);

--
-- Chỉ mục cho bảng `thanhvien`
--
ALTER TABLE `thanhvien`
  ADD PRIMARY KEY (`id_nhom`),
  ADD UNIQUE KEY `id_thanhvien` (`id_thanhvien`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `nhom`
--
ALTER TABLE `nhom`
  MODIFY `id_nhom` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `page`
--
ALTER TABLE `page`
  MODIFY `id_page` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `soluong_thich`
--
ALTER TABLE `soluong_thich`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  ADD CONSTRAINT `baiviet_ibfk_1` FOREIGN KEY (`id_nguoidung`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `coment`
--
ALTER TABLE `coment`
  ADD CONSTRAINT `coment_ibfk_1` FOREIGN KEY (`id_status`) REFERENCES `baiviet` (`id_status`),
  ADD CONSTRAINT `coment_ibfk_2` FOREIGN KEY (`id_nguoidung`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `nhom`
--
ALTER TABLE `nhom`
  ADD CONSTRAINT `nhom_ibfk_1` FOREIGN KEY (`founder`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `page`
--
ALTER TABLE `page`
  ADD CONSTRAINT `page_ibfk_1` FOREIGN KEY (`nguoitaotrang`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `soluong_thich`
--
ALTER TABLE `soluong_thich`
  ADD CONSTRAINT `soluong_thich_ibfk_1` FOREIGN KEY (`id_status`) REFERENCES `baiviet` (`id_status`);

--
-- Các ràng buộc cho bảng `thanhvien`
--
ALTER TABLE `thanhvien`
  ADD CONSTRAINT `thanhvien_ibfk_1` FOREIGN KEY (`id_thanhvien`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `thanhvien_ibfk_2` FOREIGN KEY (`id_nhom`) REFERENCES `nhom` (`id_nhom`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
