-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 09, 2022 lúc 06:54 AM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `projecttravel`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `UserName` varchar(100) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `updationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `UserName`, `Password`, `updationDate`) VALUES
(1, 'admin', 'admin', '2022-11-20 08:20:21');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblbooking`
--

CREATE TABLE `tblbooking` (
  `BookingId` int(11) NOT NULL,
  `PackageId` int(11) DEFAULT NULL,
  `UserEmail` varchar(100) DEFAULT NULL,
  `FromDate` varchar(100) DEFAULT NULL,
  `ToDate` varchar(100) DEFAULT NULL,
  `Comment` mediumtext CHARACTER SET utf8mb4 DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT current_timestamp(),
  `status` int(11) DEFAULT NULL,
  `CancelledBy` varchar(5) DEFAULT NULL,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `tblbooking`
--

INSERT INTO `tblbooking` (`BookingId`, `PackageId`, `UserEmail`, `FromDate`, `ToDate`, `Comment`, `RegDate`, `status`, `CancelledBy`, `UpdationDate`) VALUES
(1, 27, 'minhson892002@gmail.com\r\n', '2019-4-5', '2019-6-3', 'ok', '2018-12-06 03:57:49', 0, NULL, NULL),
(2, 28, 'minhson892002@gmail.com', '2023-01-01', '2023-01-06', 'asd', '2022-12-06 04:39:47', 0, NULL, NULL),
(3, 29, 'minhson892002@gmail.com', '2023-01-01', '2023-01-06', 'asd', '2023-12-06 04:40:11', 0, NULL, NULL),
(4, 30, 'minhson892002@gmail.com', '2023-01-01', '2023-01-06', 'asd', '2023-12-06 04:40:18', 0, NULL, NULL),
(5, 31, 'minhson892002@gmail.com', '2024-01-01', '2024-01-06', 'asd', '2026-12-06 04:40:37', 0, NULL, NULL),
(6, 32, 'minhson892002@gmail.com', '2024-01-01', '2024-01-06', 'asd', '2024-12-06 04:40:59', 0, NULL, NULL),
(10, 33, 'minhson892002@gmail.com', '2022-02-12', '2022-02-17', 'oke', '2022-12-06 04:42:23', 0, NULL, NULL),
(25, 34, 'minhson892002@gmail.com', '2022-11-16', '2022-11-16', 'sdf', '2019-11-17 09:45:17', 2, 'u', '2022-12-07 15:15:20'),
(26, 35, 'minhson892002@gmail.com', '2022-11-02', '2022-11-15', 'fghfgh', '2022-11-17 09:49:58', 2, 'u', '2022-12-07 15:15:20'),
(27, 36, 'minhson892002@gmail.com', '2018-8-9', '2018-8-22', 'asdf', '2019-12-05 08:44:11', 0, NULL, NULL),
(30, 37, 'minhson892002@gmail.com', '2019-3-4', '2019-5-6', 'adsas', '2019-12-05 08:44:50', 0, NULL, NULL),
(31, 38, 'minhson892002@gmail.com', '2020-3-4', '2020-5-6', 'adsas', '2020-12-05 08:45:14', 0, NULL, '2022-12-07 15:15:20'),
(32, 27, 'minhson892002@gmail.com', '2021-3-4', '2021-5-6', 'adsas', '2020-12-05 08:45:29', 0, NULL, NULL),
(33, 30, 'minhson892002@gmail.com', '2026-3-4', '2026-5-6', 'adsas', '2021-12-05 08:45:40', 2, 'a', '2022-12-09 00:37:22'),
(37, 26, '123@123', '2022-12-15', '2022-12-31', 'asd', '2022-12-07 04:19:31', 2, 'u', '2022-12-07 04:19:43'),
(38, 26, '123@123', '', '', 'x', '2022-12-07 14:38:21', 0, NULL, NULL),
(39, 32, '123@123', '2022-12-09', '2022-12-22', 'ytereyr', '2022-12-09 00:35:01', 2, 'u', '2022-12-09 00:35:35');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblenquiry`
--

CREATE TABLE `tblenquiry` (
  `id` int(11) NOT NULL,
  `FullName` varchar(100) CHARACTER SET utf8mb4 DEFAULT NULL,
  `EmailId` varchar(100) DEFAULT NULL,
  `MobileNumber` char(10) DEFAULT NULL,
  `Subject` varchar(100) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Description` mediumtext CHARACTER SET utf8mb4 DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `Status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `tblenquiry`
--

INSERT INTO `tblenquiry` (`id`, `FullName`, `EmailId`, `MobileNumber`, `Subject`, `Description`, `PostingDate`, `Status`) VALUES
(5, 'sadzxfd', 'sadf@gmail.com', '2345', 'sderfgh', 'dsrefgh', '2022-11-13 18:08:39', 1),
(6, 'bui minh son', 'minhson892002@gmail.com', '0376018919', 'maisndjasfd', 'sadfasdgdsfhsdfh', '2022-11-13 18:09:44', 1),
(7, 'asd', 'asd', 'asd', 'asd', 'asdasfg', '2022-11-17 09:00:52', 1),
(10, 'gfj', 'ghj', 'hf', 'ghj', 'fghj', '2022-12-09 00:33:55', 1),
(11, 'Hai Long', 'honneydoan69@gmail.com', '0854675002', 'ask', 'oke', '2022-12-09 00:44:49', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblissues`
--

CREATE TABLE `tblissues` (
  `id` int(11) NOT NULL,
  `UserEmail` varchar(100) DEFAULT NULL,
  `Issue` varchar(100) DEFAULT NULL,
  `Description` mediumtext CHARACTER SET utf8mb4 DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `AdminRemark` mediumtext CHARACTER SET utf8mb4 DEFAULT NULL,
  `AdminremarkDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `tblissues`
--

INSERT INTO `tblissues` (`id`, `UserEmail`, `Issue`, `Description`, `PostingDate`, `AdminRemark`, `AdminremarkDate`) VALUES
(41, '123@123', 'Booking Issues', 'anh yeu em', '2022-11-21 14:12:15', 'oke em nha', '2022-12-06 10:36:44'),
(42, '123@123', 'Booking Issues', 'fdgdfg', '2022-12-07 14:12:03', NULL, NULL),
(43, '123@123', 'Cancellation', 'ád', '2022-12-07 14:20:10', NULL, NULL),
(44, '123@123', 'Booking Issues', 'dfhg', '2022-12-09 00:35:13', NULL, NULL),
(45, '123@123', 'Booking Issues', 'aaa', '2022-12-09 00:35:50', 'thay', '2022-12-09 00:37:40'),
(46, 'honneydoan69@gmail.com', 'Cancellation', '123', '2022-12-09 00:48:08', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblpages`
--

CREATE TABLE `tblpages` (
  `id` int(11) NOT NULL,
  `type` varchar(255) DEFAULT '',
  `detail` longtext CHARACTER SET utf8mb4 DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `tblpages`
--

INSERT INTO `tblpages` (`id`, `type`, `detail`) VALUES
(1, 'terms', '<p>Website is the final project of the web programming course and class 71DCTT21 and the lecturer is Mr. Pham Duc Anh. Very enthusiastic guide and support teacher</p>'),
(2, 'privacy', '<p>The website is self-coded by the team, so all acts of sharing copy will be copyrighted and illegal</p>'),
(3, 'aboutus', '<p>Technology used: Html, sass, javascript ,php.<br>Libraries: modal, flatpickr, ckeditor5, toastjs, swiperjs,wow js, animate,Morris js.</p><p>Template design: https://www.figma.com/file/IaiBr3OW27LFdUgKlv1YgX/trip-planner?node-id=954%3A40306&amp;t=2orlZavoIdibxS6L-1</p>'),
(11, 'contact', '<p>Facebook: Ms</p><p>Instagram: Ms</p><p>Github: Ms</p>');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbltourpackages`
--

CREATE TABLE `tbltourpackages` (
  `PackageId` int(11) NOT NULL,
  `PackageName` varchar(200) CHARACTER SET utf8mb4 DEFAULT NULL,
  `PackageType` varchar(150) CHARACTER SET utf8mb4 DEFAULT NULL,
  `PackageLocation` varchar(100) CHARACTER SET utf8mb4 DEFAULT NULL,
  `PackagePrice` int(11) DEFAULT NULL,
  `PackageFetures` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `PackageDetails` mediumtext CHARACTER SET utf8mb4 DEFAULT NULL,
  `PackageImage` varchar(100) DEFAULT NULL,
  `Creationdate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `tbltourpackages`
--

INSERT INTO `tbltourpackages` (`PackageId`, `PackageName`, `PackageType`, `PackageLocation`, `PackagePrice`, `PackageFetures`, `PackageDetails`, `PackageImage`, `Creationdate`, `UpdationDate`) VALUES
(26, 'Hang múa', 'Gia Đình', 'Ninh Bình', 20000, 'Khách sạn , tham quan, ăn uống', 'OKELA', 'Ninh-Binh-Hang-Mua.jpg', '2022-11-21 17:25:12', '2022-12-08 16:11:09'),
(27, 'Tam Cốc - Bích Động', 'Family', 'Ninh Bình', 10000, 'ăn uống, nghỉ nghơi, tham quan', 'OKELA', 'TC-BD-NB.jpg', '2022-11-21 17:25:20', '2022-12-06 10:09:56'),
(28, ' Khu du lịch sinh thái Tràng An', 'Friend', 'Ninh Bình', 5000, 'Nghỉ dưỡng', 'OKELA', 'hang-dong-ninh-binh.jpg', '2022-12-06 07:02:27', NULL),
(29, 'Khu du lịch sinh thái Thung Nham', 'Family', 'Ninh Bình', 1000, 'Du Lịch', 'OKALA', 'thung-nham-ninh-binh.jpg', '2022-12-06 07:04:08', NULL),
(30, ' Khu du tích Cố Đô Hoa Lư', 'Couple', 'Ninh Bình', 8000, 'Khám phá', 'OKELA', 'dia-diem-du-lich-ninh-binh-35.jpg', '2022-12-06 07:06:22', NULL),
(31, 'Vườn quốc gia Cúc Phương', 'Couple', 'Ninh Bình', 8900, 'Trải Nghiệm', 'OKELA', 'vuon-quoc-gia-cuc-phuong.jpg', '2022-12-06 07:28:44', NULL),
(32, 'Khu du lịch Đầm Vân Long', 'Couple', 'Ninh Bình', 9000, 'Hotel', 'OKELA', 'dam-van-long.jpg', '2022-12-06 07:37:21', NULL),
(33, 'Khu du lịch Kênh Gà - Vân Trình', 'Couple', 'Ninh Bình', 2432, 'Nghỉ Dưỡng', 'OKELA', 'lang-noi-kenh-ga.jpg', '2022-12-06 07:38:54', NULL),
(34, 'Nhà thơ Phát Diệm', 'Family', 'Ninh Bình', 7892, 'Spa', 'OKELA', 'Nha-tho-phat-diem.jpg', '2022-12-06 07:40:56', NULL),
(35, 'Núi Non Nước', 'Couple', 'Ninh Bình', 12345, 'Happy', 'OKELA', 'chua-non-nuoc-ninh-binh.jpg', '2022-12-06 07:41:37', NULL),
(36, 'Các làng nghề truyền thống', 'Cặp đôi ', 'Ninh Bình', 300, 'Khám Phá', 'OKELA', 'coi-kim-son-ninh-binh.jpg', '2022-12-06 08:00:41', NULL),
(37, 'Biển Kim Sơn - Cồn Nổi', 'Couple', 'Ninh Bình', 1243, '', 'OKELA', 'dia-diem-du-lich-ninh-binh-33.jpg', '2022-12-06 08:04:10', '2022-12-06 10:09:56'),
(38, 'Tuyệt Tình Cốc', 'Couple', 'Ninh Bình', 8902, 'Trải Nghiệm cùng người yêu ', 'Tuyệt Tình Cốc Ninh Bình hay còn có tên gọi khác là động Am Tiên. Cái tên Tuyệt Tình Cốc là do khách du lịch khi tới đây thấy cảnh non xanh hữu tình nên đã ví nơi đây là Tuyệt Tình Cốc. Địa danh nổi tiếng này nằm ở thị xã Trường Yên, huyện Hoa Lư Ninh Bình, thuộc quần thể di tích cố đô Hoa Lư, tiếp giáp với thành Đông của kinh đô Hoa Lư xưa và chỉ cách đền Vua Đinh Tiên Hoàng khoảng 400m, dọc theo hướng Tràng An. Chính vì vậy du lịch Tuyệt Tình Cốc Ninh Bình 2021 bạn có thể dễ dàng kết hợp tham quan các điểm du lịch khác vô cùng thuận tiện.', 'tuyet-tinh-co-ninh-binh.jpg', '2022-12-06 10:13:31', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblusers`
--

CREATE TABLE `tblusers` (
  `id` int(11) NOT NULL,
  `FullName` varchar(100) DEFAULT NULL,
  `MobileNumber` char(10) DEFAULT NULL,
  `EmailId` varchar(70) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `tblusers`
--

INSERT INTO `tblusers` (`id`, `FullName`, `MobileNumber`, `EmailId`, `Password`, `RegDate`, `UpdationDate`) VALUES
(62, 'Bui Minh Son', '99999', '123@123', '123', '2022-11-21 07:41:54', '2022-12-08 15:40:27'),
(89, 'asdf', 'sadf', 'minhson892002@gmail.com', '123', '2022-12-07 14:54:34', NULL),
(91, 'Hai Long', '0854675002', 'honneydoan69@gmail.com', '123', '2022-12-09 00:41:50', NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tblbooking`
--
ALTER TABLE `tblbooking`
  ADD PRIMARY KEY (`BookingId`);

--
-- Chỉ mục cho bảng `tblenquiry`
--
ALTER TABLE `tblenquiry`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tblissues`
--
ALTER TABLE `tblissues`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tblpages`
--
ALTER TABLE `tblpages`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbltourpackages`
--
ALTER TABLE `tbltourpackages`
  ADD PRIMARY KEY (`PackageId`);

--
-- Chỉ mục cho bảng `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `EmailId` (`EmailId`),
  ADD KEY `EmailId_2` (`EmailId`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tblbooking`
--
ALTER TABLE `tblbooking`
  MODIFY `BookingId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT cho bảng `tblenquiry`
--
ALTER TABLE `tblenquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `tblissues`
--
ALTER TABLE `tblissues`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT cho bảng `tblpages`
--
ALTER TABLE `tblpages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `tbltourpackages`
--
ALTER TABLE `tbltourpackages`
  MODIFY `PackageId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT cho bảng `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
