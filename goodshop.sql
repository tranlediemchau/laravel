-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2016 at 08:57 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `goodshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(10) NOT NULL,
  `name` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `date` timestamp NULL DEFAULT NULL,
  `comment` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `date`, `comment`) VALUES
(4, 'u', '2015-12-27 01:10:06', 'san pham khong duoc dep '),
(4, 'test', '2015-12-29 12:37:06', 'dsssss'),
(28, 'tranlediemchau', '2016-01-04 23:19:45', 'hihihihii');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2015_12_06_074631_insertCol_tldChau', 1),
('2015_12_06_075158_insertCol_tldChau', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personals`
--

CREATE TABLE IF NOT EXISTS `personals` (
`id` int(10) unsigned NOT NULL,
  `fullname` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phonenumber` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `jop` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `personals`
--

INSERT INTO `personals` (`id`, `fullname`, `address`, `phonenumber`, `jop`, `date`) VALUES
(2, 'Nguyễn Thị Mỹ Hằng', 'Q11. TpHCM', '3427687', 'Nhân viên văn phòng', '2015-12-27 18:39:14'),
(3, 'Trần Văn A', 'Q11. TpHCM', '3427687', 'Kỹ sư', '2015-12-26 18:12:48'),
(4, 'Trần Thành ', 'Q11. TpHCM', '3427687', 'Kỹ sư', '2015-12-30 11:08:10'),
(37, 'chau ', 'tphcm', '56', 'sv', '2015-12-27 14:07:42'),
(48, 'x', 'x', 'x', 'x', '2015-12-29 11:43:24'),
(49, 'Trần Lệ Diểm Châu', 'tphcm', '345678', 'Sinh Viên', '2016-01-03 23:24:30'),
(50, '324234', '32432423423', '4234234234', '2342342342', '2016-01-04 21:13:15'),
(55, '234234', '2234234', '234234234', '2423423424', '2016-01-04 21:39:10'),
(56, 'hh', 'hh', 'ttt', 'sv', '2016-01-04 23:16:25');

-- --------------------------------------------------------

--
-- Table structure for table `producers`
--

CREATE TABLE IF NOT EXISTS `producers` (
  `id` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `producers`
--

INSERT INTO `producers` (`id`, `name`, `address`) VALUES
('NSX0001', 'Adidas', 'Số 106/8-10 Bàu Cát, P. 12, Q. Tân Bình, HCM'),
('NSX0002', 'Fashion', 'Văn phòng: 662/4 Sư Vạn Hạnh (nối dài), P. 12, Q. 10, Tp. Hồ Chí Minh (TPHCM)'),
('NSX0003', 'Pitit', '8/12 Núi Thành, Phường 13, Quận Tân Bình, Tp. Hồ Chí Minh (TPHCM)'),
('NSX0004', 'Nike', 'Số 80, Đường Nguyễn Phong Sắc, P. Dịch Vọng, Q. Cầu Giấy, Hà Nội');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
`id` int(11) NOT NULL,
  `name` varchar(45) CHARACTER SET utf8mb4 DEFAULT NULL,
  `price1` decimal(10,3) DEFAULT NULL,
  `images_url` varchar(45) CHARACTER SET utf8mb4 DEFAULT NULL,
  `price2` decimal(10,3) DEFAULT NULL,
  `discription` text COLLATE utf8_unicode_ci,
  `thumb1` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `thumb2` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `thumb3` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `type` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `producer` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `countaccess` int(11) DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price1`, `images_url`, `price2`, `discription`, `thumb1`, `thumb2`, `thumb3`, `type`, `producer`, `countaccess`) VALUES
(4, 'Áo thun nữ tay dài kẻ sọc', '185.000', 'pic6.jpg', '190.000', 'Thiết kế trẻ trung cùng chất liệu sang trọng mang đến phong cách sang trọng, quyến rũ cho bạn gái.Kiểu dáng thời trang giúp bạn thể hiện gu thời trang đẳng cấp, sang trọng cho bạn gái.Thiết kế cổ trụ, nút bấm tinh tế, Form dài tôn dáng, họa tiết thổ cẩm nổi bật, ấn tượng.Áo dày dặn, đường chỉ may chắc chắn, tinh tế cho bạn gái phong cách hoàn hảo.Chất liệu: Dạ bố dày dặn, bên trong lót lớp dù tạo cảm giác mát mẻ và thoải mái cho người mặc.Size: M, L.Hàng nhập.', 'pic61.jpg', 'pic62.jpg', 'pic63.jpg', 'LH0001', NULL, 20),
(6, 'Giày nhung cao gót sang trọng', '277.000', 'pic5.jpg', '280.000', 'Thiết kế trẻ trung cùng chất liệu sang trọng mang đến phong cách sang trọng, quyến rũ cho bạn gái.Kiểu dáng thời trang giúp bạn thể hiện gu thời trang đẳng cấp, sang trọng cho bạn gái.Thiết kế cổ trụ, nút bấm tinh tế, Form dài tôn dáng, họa tiết thổ cẩm nổi bật, ấn tượng.Áo dày dặn, đường chỉ may chắc chắn, tinh tế cho bạn gái phong cách hoàn hảo.Chất liệu: Dạ bố dày dặn, bên trong lót lớp dù tạo cảm giác mát mẻ và thoải mái cho người mặc.Size: M, L.Hàng nhập.', 'pic51.jpg', 'pic52.jpg', 'pic53.jpg', 'LH0002', NULL, 14),
(19, 'Áo sơ mi nữ Adachi A04', '250.000', 'pic19.jpg', '225.000', '', 'pic191.jpg', 'pic192.jpg', 'pic193.jpg', 'LH0001', 'NSX0001', 2),
(20, 'Váy Đầm Nữ Adachi K02', '165.000', 'pic20.jpg', '155.000', '', 'pic201.jpg', 'pic202.jpg', 'pic203.jpg', 'LH0003', 'NSX0001', 4),
(21, 'Kính mát nữ Exfash EF5750', '156.000', 'pic21.jpg', '130.000', 'ĐẶC ĐIỂM NỔI BẬT\r\n- Xuất xứ: HÀN QUỐC (KOREA)\r\n-Gọng làm bằng vật liệu cao cấp \r\n-Tròng polycarbonat có khả năng: Chống tia cực tím, tia bức xạ, chống UV400\r\n-Thiết kế trẻ trung, thanh lịch và sành điệu.\r\n-Bảo hành chính hãng 3 năm (Hỗ trợ kỹ thuật trọn đời sản phẩm)', 'pic211.jpg', 'pic212.jpg', 'pic213.jpg', 'LH0004', 'NSX0001', 3),
(23, 'Giày Nữ Bulma NK13543', '280.000', 'pic23.jpg', '300.000', '', 'pic231.jpg', 'pic232.jpg', 'pic233.jpg', 'LH0002', 'NSX0001', 6),
(24, 'Giày Nữ Adachi A3683134', '300.000', 'pic24.jpg', '350.000', '', 'pic241.jpg', 'pic242.jpg', 'pic243.jpg', 'LH0002', 'NSX0001', 9),
(25, 'Váy Đầm Nữ Adachi A01341', '170.000', 'pic25.jpg', '200.000', '', 'pic251.jpg', 'pic252.jpg', 'pic253.jpg', 'LH0003', 'NSX0001', 2),
(26, 'Váy Đầm Nữ Adachi J06', '170.000', 'pic26.jpg', '200.000', '', 'pic261.jpg', 'pic262.jpg', 'pic263.jpg', 'LH0003', 'NSX0001', 8),
(27, 'Áo kiểu nữ style lady/ EH34104', '170.000', 'pic27.jpg', '350.000', '', 'pic271.jpg', 'pic272.jpg', 'pic273.jpg', 'LH0001', 'NSX0001', 1),
(28, 'Áo len nữ form dài hoa tuyết/ U341952', '250.000', 'pic28.jpg', '300.000', '', 'pic281.jpg', 'pic282.jpg', 'pic283.jpg', 'LH0001', 'NSX0001', 8);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'Admin'),
(2, 'Nhân Viên'),
(3, 'Khách Hàng');

-- --------------------------------------------------------

--
-- Table structure for table `typemarchandises`
--

CREATE TABLE IF NOT EXISTS `typemarchandises` (
  `id` varchar(45) CHARACTER SET utf8 NOT NULL,
  `name` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `typemarchandises`
--

INSERT INTO `typemarchandises` (`id`, `name`) VALUES
('LH0001', 'Áo'),
('LH0002', 'Giày'),
('LH0003', 'Quần'),
('LH0004', 'Phụ kiện');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `role` int(11) DEFAULT '3'
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(2, 'hang', 'hang@gmail.com', '$2y$10$R/wG8lIn1F.SgCSEHGhsCuZB5kTgP/sh8JsDqhhxs1.CKYs3Mjy6q', 'Z3jGMsZiBJoHOCnN4hptmFeKfgNgJ94w8ENxCDrslr1PnJassknDzCl65J7E', '2015-12-12 14:53:15', '2015-12-12 15:07:57', 2),
(3, 'abc', 'abc@gmail.com', '$2y$10$w9Z1qrwiIsuEamdMCL9KVuBsVEONdPBgyOINAO1S3UE0kqAmrsEgC', 'BTqrazflCuETy8AhXGD8YW8DlaMYb3JsfeKFeANAKM4zxNGOZxEwtpW9CBSI', '2015-12-12 15:22:40', '2015-12-12 15:22:53', 2),
(4, 'thanh', 'thanh@gmail.com', '$2y$10$Nwn74W5xEoRTa/5/eYQY1Oefn0Ct4Afkpo1KR0wiNyIMAJv8WzEtO', 'etq9qWvqWSLwl6j6LoWdzwMMGNJtd3i82zsSgIzd6EklpXkSTBtfu32lP2To', '2015-12-12 15:23:11', '2015-12-30 11:20:45', 2),
(37, 'chau', 'chau@gmail.com', '$2y$10$bgX8pzNMXEH./L4s935isOQ8r2O8Bt1Vfszr79Tn7hcgIozPL17YG', 'qMgBM43tZbULSGkHn0NBpokte90xDzdcLhal6txU', '2015-12-27 20:49:20', '2015-12-27 20:49:20', 1),
(48, 's', 'x@gmail.com', '$2y$10$UkqN5ds2MfLbPEwzys7ecO1rW7oJf1vH9i4zJZxrTDdnkSJlh0saS', '$2y$10$UkqN5ds2MfLbPEwzys7ecO1rW7oJf1vH9i4zJZxrTDdnkSJlh0saS', '2015-12-29 11:43:08', '2015-12-30 11:28:04', 2),
(49, 'tranlediemchau', 'tranlediemchau@gmail.com', '$2y$10$GPQUZkYYAUjPx0PqHP14G.W3sK93aEsrwThjQvDxMG.2SitWR56oC', '02hsOOw0TmuypEX8yL8LBDdLL1kVHTvqdOck6Qkx2rXlJkjaCZc7kgOZHdNX', '2015-12-30 11:24:36', '2016-01-05 00:53:17', 1),
(50, '34234234', '23423423@gmail.com', '$2y$10$TKlx6AiiMnaZkwLso/DE4./zYcjmZR3C.wyfVahPml9OFgdeSzA6W', 'eL2UAWxTMwxLxhM55KmB84aqeJejNx48A5dAKqqA', '2016-01-04 21:13:09', '2016-01-04 21:13:09', 1),
(55, 'test1', 'test1111@gmail.com', '$2y$10$S7GSjJSl2E6kgkrWZ0sGUO5usZeZnt/EJGwApSDDcIU9FxxnJzuyO', '8IgKgD0jYc7inl3oja2JY7Q4HXeZR4vvlInEOK94MoOhzcRG5nmVzQcxLU87', '2016-01-04 21:39:06', '2016-01-04 23:05:30', 3),
(56, 'hhh', 'hhh@gmail.com', '$2y$10$VfSpBA17d4rVLGY2qHKqI.AtcxfbXAStYgp/CKq80.EtZVie6A2kS', 'eL2UAWxTMwxLxhM55KmB84aqeJejNx48A5dAKqqA', '2016-01-04 23:15:59', '2016-01-04 23:15:59', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
 ADD KEY `s_idx` (`name`), ADD KEY `d_idx` (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
 ADD KEY `password_resets_email_index` (`email`), ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `personals`
--
ALTER TABLE `personals`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `producers`
--
ALTER TABLE `producers`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_a_b_idx` (`type`), ADD KEY `pk_product_producer_idx` (`producer`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `typemarchandises`
--
ALTER TABLE `typemarchandises`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_email_unique` (`email`), ADD KEY `pk_a_idx` (`role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `personals`
--
ALTER TABLE `personals`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=57;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=57;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
ADD CONSTRAINT `d` FOREIGN KEY (`id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `personals`
--
ALTER TABLE `personals`
ADD CONSTRAINT `j` FOREIGN KEY (`id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
ADD CONSTRAINT `pk_p_t` FOREIGN KEY (`type`) REFERENCES `typemarchandises` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `pk_product_producer` FOREIGN KEY (`producer`) REFERENCES `producers` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
ADD CONSTRAINT `pk_a` FOREIGN KEY (`role`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
