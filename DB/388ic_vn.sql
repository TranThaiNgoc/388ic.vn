-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2019 at 05:25 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `388ic.vn`
--

-- --------------------------------------------------------

--
-- Table structure for table `career`
--

CREATE TABLE `career` (
  `id` int(10) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `career`
--

INSERT INTO `career` (`id`, `name`, `slug`, `created_at`) VALUES
(1, 'Kế toán', 'ke-toan', '2019-06-03 00:06:49'),
(2, 'Cơ khí', 'co-khi', '2019-06-03 00:06:42');

-- --------------------------------------------------------

--
-- Table structure for table `configuration`
--

CREATE TABLE `configuration` (
  `id` int(10) NOT NULL,
  `logo_website` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `banner` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `configuration`
--

INSERT INTO `configuration` (`id`, `logo_website`, `banner`, `created_at`) VALUES
(1, 'https://388ic.vn/storage/uploads/155414-logo.jpg', 'https://388ic.vn/storage/uploads/738891-z1378426370986_9140a3b1e8caf43d5d64bc9aa7b6c68f.jpg', '2019-06-05 13:06:33');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `id` int(10) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `right` text COLLATE utf8_unicode_ci,
  `number` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `experience` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `degree` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sex` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deadline` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `job_requirements` text COLLATE utf8_unicode_ci,
  `request_profile` text COLLATE utf8_unicode_ci,
  `contact` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `money` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `career` text COLLATE utf8_unicode_ci,
  `vacancies` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`id`, `title`, `description`, `right`, `number`, `experience`, `degree`, `sex`, `deadline`, `job_requirements`, `request_profile`, `contact`, `phone`, `money`, `career`, `vacancies`, `created_at`) VALUES
(1, 'Chuyên viên kinh doanh', '<p>- Ti&ecirc;́p c&acirc;̣n, h&ocirc;̃ trợ các khách hàng/doanh nghi&ecirc;̣p l&ecirc;n k&ecirc;́ hoạch các chương trình đào tạo phù hợp với mục ti&ecirc;u, y&ecirc;u c&acirc;̀u đặc thù ri&ecirc;̀n của từng khách hàng/doanh nghi&ecirc;̣p<br />\r\n- Đại di&ecirc;̣n c&ocirc;ng ty Quản lý, gặp gỡ, tư v&acirc;́n các chương trình đào tạo phù hợp với y&ecirc;u c&acirc;̀u, nhu c&acirc;̀u của khách hàng<br />\r\n- Phối hợp với ph&ograve;ng gi&aacute;o vụ, với hội đồng chuy&ecirc;n gia l&ecirc;n chương tr&igrave;nh đ&agrave;o tạo, sửa đổi, điều chỉnh cho ph&ugrave; hợp với mục ti&ecirc;u của DN , đ&oacute;ng g&oacute;p v&agrave;o sự ph&aacute;t triển của doanh nghiệp<br />\r\n- Phát tri&ecirc;̉n mở r&ocirc;̣ng m&ocirc;́i quan h&ecirc;̣ với khách hàng<br />\r\n- Tham gia vào các c&ocirc;ng vi&ecirc;̣c đàm phán, ký k&ecirc;́t hợp đ&ocirc;̀ng<br />\r\n- Ph&ocirc;́i hợp với các b&ocirc;̣ ph&acirc;̣n li&ecirc;n quan trong quá trình thực hi&ecirc;̣n hợp đ&ocirc;̀ng<br />\r\n- Hoàn thành chỉ tieey kinh doanh</p>', '<p>- MỨC LƯƠNG HẤP DẪN: LƯƠNG CB + PHỤ CẤP + HOA HỒNG (10%) + THƯỞNG<br />\r\n- Tổng thu nhập từ 15.000.000 &ndash; 20.000.000 VND/th&aacute;ng.<br />\r\n- Lương cơ bản: 5.000.000 &ndash; 7.000.000/th&aacute;ng (t&ugrave;y năng lực)<br />\r\n- C&oacute; cơ hội thăng tiến l&agrave;m trưởng nh&oacute;m, l&agrave;m trưởng ph&ograve;ng, l&agrave;m quản l&yacute;...<br />\r\n- Thưởng n&oacute;ng hấp dẫn h&agrave;ng th&aacute;ng<br />\r\n- Chế độ&nbsp;<a href=\"http://mywork.com.vn/tuyen-dung/3/bao-hiem.html\">bảo hiểm</a>&nbsp;đảm bảo theo qui định<br />\r\n- Được tham gia c&aacute;c kh&oacute;a đ&agrave;o tạo v&agrave; ph&aacute;t triển nghiệp vụ chuy&ecirc;n nghiệp về telesales, C&aacute;ch thức t&igrave;m kiếm kh&aacute;ch h&agrave;ng, kỹ năng&nbsp;<a href=\"http://mywork.com.vn/tuyen-dung/63/tu-van.html\">tư vấn</a>&nbsp;do KASH&nbsp;<a href=\"http://mywork.com.vn/tuyen-dung/90/ngos-to-chuc.html\">tổ chức</a><br />\r\n- Tiếp x&uacute;c l&agrave;m việc với c&aacute;c Doanh nh&acirc;n th&agrave;nh đạt.<br />\r\n- Được tham dự c&aacute;c kh&oacute;a học v&agrave; c&aacute;c buổi chia sẻ của những chuy&ecirc;n gia h&agrave;ng đầu Việt Nam<br />\r\n- X&eacute;t tăng lương 2 lần trong năm<br />\r\n- Tăng lương đột xuất khi đạt th&agrave;nh t&iacute;ch tốt, ho&agrave;n th&agrave;nh c&ocirc;ng việc được giao.<br />\r\n- Chế độ ph&uacute;c lợi: hiếu, hỉ, sinh nhật, nghỉ m&aacute;t, kh&aacute;m sức khỏe, &hellip;</p>', '2', 'banam', 'caodang', 'name', '2019-06-20', '<p>- Nam/Nữ tốt nghiệp đại học, cao đẳng, trung cấp :<br />\r\n- Giong n&oacute;i dễ nghe, kh&ocirc;ng ngọng, &acirc;m điệu r&otilde; rang<br />\r\n- T&aacute;c phong chuy&ecirc;n nghiệp, nhiệt t&igrave;nh, c&oacute; tr&aacute;ch nhiệm với c&ocirc;ng việc<br />\r\n- C&oacute; laptop c&aacute; nh&acirc;n<br />\r\n- Chưa c&oacute; kinh nghiệm được đ&agrave;o tạo<br />\r\n- Ưu Ti&ecirc;n C&oacute; kinh nghiệm l&agrave;m việc từ 6 th&aacute;ng - 1 năm trở l&ecirc;n (To&agrave;n thời gian) ở c&aacute;c lĩnh vực Telesales v&agrave;&nbsp;<a href=\"http://mywork.com.vn/tuyen-dung/57/dich-vu.html\">Dịch vụ</a>&nbsp;kh&aacute;ch h&agrave;ng</p>', '<p>- Đơn xin việc.<br />\r\n- Sơ yếu l&yacute; lịch.<br />\r\n- Hộ khẩu, chứng minh nh&acirc;n d&acirc;n v&agrave; giấy kh&aacute;m sức khỏe.<br />\r\n- C&aacute;c bằng cấp c&oacute; li&ecirc;n quan.<br />\r\nC&ocirc;ng ty CP đ&acirc;̀u tư và đào tạo Kash Vi&ecirc;̣t Nam<br />\r\nĐịa chỉ: S&ocirc;́ 57A ngõ 358 Bùi Xương Trạch, Thanh Xu&acirc;n, Hà N&ocirc;̣i</p>', 'Thái Ngọc', '0933411292', '>20trieu', 'co-khi', 'IT', '2019-06-03 19:59:09');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) NOT NULL,
  `name` text COLLATE utf8_unicode_ci,
  `slug` text COLLATE utf8_unicode_ci,
  `summary` text COLLATE utf8_unicode_ci,
  `content` text COLLATE utf8_unicode_ci,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `view` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `name`, `slug`, `summary`, `content`, `image`, `type`, `view`, `status`, `created_at`, `updated_at`) VALUES
(17, 'Trần Thái Ngọc', 'tran-thai-ngoc', '<p>Trần Th&aacute;i Ngọcaa<img alt=\"\" src=\"https://388.com/storage/uploads/images/seo.jpg\" style=\"height:131px; width:600px\" /></p>', '<p>Trần Th&aacute;i Ngọcaa</p>', 'https://388ic.vn/storage/uploads/856323-51193541_245430953041908_3504454152577089536_n.jpg', 'topbaiviethay', '0', 0, '2019-06-04 19:06:09', '2019-05-25 04:30:02'),
(19, 'Trần Thái Ngọc', 'tran-thai-ngoc', '<p>askjdaskjdhashkj</p>', '<p>askjdaskjdhashkj</p>', 'https://388ic.vn/storage/uploads/832018-62067447_126694318534119_8958386182622806016_n (2).jpg', 'topbaiviethay', '0', 0, '2019-06-05 14:06:55', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('user1@gmail.com', '$2y$10$Z63m5mWaX2o9REyXue6KB.JxPjcWaLVzE1bkyJIRGlflBp7bjQ0YO', '2019-05-09 07:47:29'),
('ngoctt@vutatech.vn', '$2y$10$FcC6yYcMEtKWOyAZSBR3n.2k35tncWjVxNbHyg7VijZPVz/mtGj0u', '2019-05-09 08:53:28');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(10) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci,
  `image1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image4` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `name`, `slug`, `content`, `image1`, `image2`, `image3`, `image4`, `created_at`) VALUES
(1, 'Thái Ngọc', NULL, '<p>Quản trị dự &aacute;n c&ocirc;ng nghệ th&ocirc;ng tin&nbsp;Quản trị dự &aacute;n c&ocirc;ng nghệ th&ocirc;ng tin</p>', 'https://388ic.vn/storage/uploads/972413-b0feffd14c44478fc3bff0a5b35da742.jpg', NULL, NULL, NULL, '2019-06-05 14:06:26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `roles` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT '[]',
  `type` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `address`, `roles`, `type`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Thái Ngọc', 'tranthaingoc0147@gmail.com', NULL, NULL, '[\"supperadmin\",\"admin\",\"user\"]', NULL, NULL, '$2y$10$rdjf/RoPzSO2XUED8YQ1ruLIBZbc4dGsimIxIeXqs18BvxHBqPrQi', 'PC7SotHqbIjA3fENEopa29KW64iRqiaKXmi3L29FyIHH5vy9tUKvs1OqMmqQ', '2019-05-31 19:32:48', '2019-05-31 19:33:08'),
(4, 'user1', 'user1@gmail.com', '0933411292', 'bà rịa vũng tàu', '[\"user\"]', NULL, NULL, '$2y$10$zF8PXHrcT5iR3XEpUvvHbOMb1VqmqUGw.WYay2q0xyLeMTSBv4Ele', 'FNiMAbXZp7KrSo6UI1oodlVxqpnp3NLuHJOn4VFzvOte80o5SdPYGxmLLxbk', '2019-06-05 07:06:28', '2019-06-05 07:06:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `career`
--
ALTER TABLE `career`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `configuration`
--
ALTER TABLE `configuration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `career`
--
ALTER TABLE `career`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `configuration`
--
ALTER TABLE `configuration`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
