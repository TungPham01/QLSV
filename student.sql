-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 03, 2021 lúc 03:20 AM
-- Phiên bản máy phục vụ: 10.4.17-MariaDB
-- Phiên bản PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `php_basic`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `student`
--

CREATE TABLE `student` (
  `id` int(10) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone_number` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `student`
--

INSERT INTO `student` (`id`, `fullname`, `password`, `phone_number`, `email`, `username`) VALUES
(27, 'pikuqeje@mailinator.com', 'pikuqeje@mailinator.com', 'pikuqeje@mailinator.com', 'pikuqeje@mailinator.com', 'tung'),
(29, 'PHAM DUY TUNG', '123456', '+1 (476) 786-2354', 'phamduytung11@gmail.com', 'DUYTUNG'),
(31, 'Imelda Gillespie', 'Pa$$w0rd!', '+1 (983) 891-5074', 'vimig@mailinator.com', 'cimiselare'),
(32, 'Igor Robertson', 'Pa$$w0rd!', '+1 (948) 825-1524', 'gegavati@mailinator.com', 'zapysom'),
(34, 'Igor Robertson', '333', '+1 (948) 825-1524', 'gegavati@mailinator.com', 'zapysom'),
(35, 'pham duy tung', '123', '123456789', 'tungithumg@gmail.com', 'phamduytung'),
(36, 'pham duy tung', '123', '123456789', 'tungithumg@gmail.com', 'phamduytung');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `student`
--
ALTER TABLE `student`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
