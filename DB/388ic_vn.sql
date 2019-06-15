-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 14, 2019 lúc 10:11 AM
-- Phiên bản máy phục vụ: 10.1.38-MariaDB
-- Phiên bản PHP: 7.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `388ic.vn`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `about_company`
--

CREATE TABLE `about_company` (
  `id` int(10) NOT NULL,
  `content` text COLLATE utf8_unicode_ci,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image_organization` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image_site_organization` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content_en` text COLLATE utf8_unicode_ci,
  `image_organization_en` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image_site_organization_en` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `about_company`
--

INSERT INTO `about_company` (`id`, `content`, `image`, `image_organization`, `image_site_organization`, `content_en`, `image_organization_en`, `image_site_organization_en`, `created_at`) VALUES
(1, '<table cellspacing=\"0\" style=\"width:331pt\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"height:15.0pt; vertical-align:middle; white-space:normal; width:48pt\">T&ecirc;n đầy đủ</td>\r\n			<td style=\"height:15.0pt; vertical-align:middle; white-space:normal; width:283pt\"><strong>C&ocirc;ng ty Cổ phần Đầu tư v&agrave; x&acirc;y lắp 388 - 388IC</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"height:15.0pt; vertical-align:middle; white-space:nowrap\">T&ecirc;n giao dịch</td>\r\n			<td style=\"height:15.0pt; vertical-align:middle; white-space:normal; width:283pt\"><strong>388 INVESTMENT &amp; CONSTRUCTION JOINT STOCK COMPANY&nbsp;</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"height:15.0pt; vertical-align:middle; white-space:normal; width:48pt\">T&ecirc;n viết tắt</td>\r\n			<td style=\"height:15.0pt; vertical-align:middle; white-space:normal; width:283pt\"><strong>388IC</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"height:21.0pt; vertical-align:middle; white-space:normal; width:48pt\">Vốn điều lệ</td>\r\n			<td style=\"height:21.0pt; vertical-align:middle; white-space:normal; width:283pt\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"height:15.0pt; vertical-align:middle; white-space:normal; width:48pt\">M&atilde; số thuế</td>\r\n			<td style=\"height:15.0pt; text-align:left; vertical-align:middle; white-space:normal; width:283pt\">0201147210</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"height:21.0pt; vertical-align:middle; white-space:normal; width:48pt\">Trụ sở ch&iacute;nh</td>\r\n			<td style=\"height:21.0pt; vertical-align:middle; white-space:nowrap\">20A Phạm Văn Dinh, Phường Thắng Nhất, TP Vũng T&agrave;u, Tỉnh B&agrave; Rịa Vũng T&agrave;u, Việt Nam</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"height:15.0pt; vertical-align:middle; white-space:normal; width:48pt\">Điện thoại</td>\r\n			<td style=\"height:15.0pt; vertical-align:middle; white-space:normal; width:283pt\">0909 090 922</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"height:14.4pt; vertical-align:middle; white-space:normal; width:48pt\">Website</td>\r\n			<td style=\"height:14.4pt; vertical-align:middle; white-space:normal; width:283pt\">388ic.vn&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Email: admin@388ic.vn</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 'https://388ic.vn/storage/uploads/371476-logo.jpg', 'https://388ic.vn/storage/uploads/249799-183-722f32fd7a987e09f69956511f62b79b.jpg', 'https://388ic.vn/storage/uploads/367481-183-722f32fd7a987e09f69956511f62b79b.jpg', '<p>ti&ecirc;́ng anh</p>', 'https://388ic.vn/storage/uploads/978762-183-722f32fd7a987e09f69956511f62b79b.jpg', 'https://388ic.vn/storage/uploads/79804-183-722f32fd7a987e09f69956511f62b79b.jpg', '2019-06-14 01:21:41');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `about_content`
--

CREATE TABLE `about_content` (
  `id` int(10) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci,
  `name_en` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content_en` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `about_content`
--

INSERT INTO `about_content` (`id`, `name`, `slug`, `content`, `name_en`, `content_en`, `created_at`) VALUES
(1, 'Tầm nhìn sứ mệnh', 'tam-nhin-su-menh', '<p>Ch&uacute;ng t&ocirc;i đặt ra quyết t&acirc;m trở th&agrave;nh đối t&aacute;c tin cậy v&agrave; l&acirc;u d&agrave;i với mọi đối t&aacute;c trong v&agrave; ngo&agrave;i nước th&ocirc;ng qua việc th&uacute;c đẩy triển vọng v&agrave; gi&agrave;nh được niềm tin của kh&aacute;ch h&agrave;ng</p>', 'Tầm nhìn sứ mệnh tiếng anh', '<p>Ch&uacute;ng t&ocirc;i đặt ra quyết t&acirc;m trở th&agrave;nh đối t&aacute;c tin cậy v&agrave; l&acirc;u d&agrave;i với mọi đối t&aacute;c trong v&agrave; ngo&agrave;i nước th&ocirc;ng qua việc th&uacute;c đẩy triển vọng v&agrave; gi&agrave;nh được niềm tin của kh&aacute;ch h&agrave;ng ti&ecirc;́ng anh</p>', '2019-06-13 15:01:08'),
(2, 'Chiến lược phát triển', 'chien-luoc-phat-trien', '<p>Để đảm bảo v&agrave; cải thiện chất lượng c&ocirc;ng tr&igrave;nh, ch&uacute;ng t&ocirc;i lu&ocirc;n t&ocirc;i lu&ocirc;n đưa ra c&aacute;c phương &aacute;n tốt nhất để đ&aacute;p ứng c&aacute;c y&ecirc;u cầu của kh&aacute;ch h&agrave;ng, để duy tr&igrave; uy t&iacute;n tr&ecirc;n thị trường trong nước v&agrave; nước ngo&agrave;i</p>', 'chiến lược phát triển tiếng anh', '<p>chi&ecirc;́n lược phát tri&ecirc;̉n ti&ecirc;́ng anh</p>', '2019-06-13 15:08:32'),
(3, 'Lĩnh vực kinh doanh', 'linh-vuc-kinh-doanh', '<p><strong>388IC l&agrave; nh&agrave; thầu chuy&ecirc;n nghiệp cung cấp c&aacute;c dịch vụ:</strong></p>\r\n\r\n<p>-Cơ kh&iacute;<br />\r\n-Kỹ thuật điện<br />\r\n-Hệ thống nước<br />\r\n-IT/Data<br />\r\n-Chiếu s&aacute;ng trong nh&agrave; &ndash; ngo&agrave;i trời<br />\r\n-Hệ thống chống s&eacute;t<br />\r\n-Hệ thống an ninh camera theo d&otilde;i<br />\r\n-Hệ thống ph&ograve;ng ch&aacute;y chữa ch&aacute;y</p>', 'lĩnh vực kinh doanh tiếng anh', '<p>lĩnh vực kinh doanh ti&ecirc;́ng anh</p>', '2019-06-13 15:12:09');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `about_image`
--

CREATE TABLE `about_image` (
  `id` int(10) NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `about_image`
--

INSERT INTO `about_image` (`id`, `image`, `created_at`) VALUES
(3, 'https://388ic.vn/storage/uploads/816985-gallery1.png', '2019-06-11 10:15:36');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `career`
--

CREATE TABLE `career` (
  `id` int(10) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `career`
--

INSERT INTO `career` (`id`, `name`, `slug`, `created_at`) VALUES
(1, 'Kế toán', 'ke-toan', '2019-06-03 00:06:49'),
(2, 'Cơ khí', 'co-khi', '2019-06-03 00:06:42');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `certificate`
--

CREATE TABLE `certificate` (
  `id` int(10) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `certificate`
--

INSERT INTO `certificate` (`id`, `name`, `slug`, `content`, `created_at`) VALUES
(2, 'iso', 'iso', '<p><img src=\"https://388ic.vn/storage/uploads/images/123.png\" style=\"height:960px; width:679px\" /></p>', '2019-06-13 04:11:46'),
(3, 'OHSAS', 'ohsas', '<p><img src=\"https://388ic.vn/storage/uploads/images/ohsas.png\" style=\"height:960px; width:678px\" /></p>', '2019-06-13 04:12:01');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `configuration`
--

CREATE TABLE `configuration` (
  `id` int(10) NOT NULL,
  `logo_website` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `banner` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `configuration`
--

INSERT INTO `configuration` (`id`, `logo_website`, `banner`, `created_at`) VALUES
(1, 'https://388ic.vn/storage/uploads/155414-logo.jpg', 'https://388ic.vn/storage/uploads/738891-z1378426370986_9140a3b1e8caf43d5d64bc9aa7b6c68f.jpg', '2019-06-05 13:06:33');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `feedback`
--

CREATE TABLE `feedback` (
  `id` int(10) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci,
  `status` int(1) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `phone`, `content`, `status`, `created_at`) VALUES
(2, 'Thái Ngọc', 'tranthaingoc0147@gmail.com', '0899784382', 'test lần 3', 1, '2019-06-12 07:24:45');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `image_partner`
--

CREATE TABLE `image_partner` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `image_partner`
--

INSERT INTO `image_partner` (`id`, `name`, `image`, `created_at`) VALUES
(1, 'test', 'https://388ic.vn/storage/uploads/384505-logo1.png', '2019-06-13 01:39:46'),
(2, 'r', 'https://388ic.vn/storage/uploads/732237-logo4.png', '2019-06-13 01:40:39'),
(3, 'das', 'https://388ic.vn/storage/uploads/32339-logo5.png', '2019-06-13 01:40:44'),
(4, 'dsadas', 'https://388ic.vn/storage/uploads/164008-logo6.png', '2019-06-13 01:40:47'),
(5, 'dasdas', 'https://388ic.vn/storage/uploads/129750-logo7.png', '2019-06-13 01:40:51'),
(6, 'dsafasga', 'https://388ic.vn/storage/uploads/61257-logo8.png', '2019-06-13 01:40:55');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `job`
--

CREATE TABLE `job` (
  `id` int(10) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` text COLLATE utf8_unicode_ci,
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
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title_en` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description_en` text COLLATE utf8_unicode_ci,
  `right_en` text COLLATE utf8_unicode_ci,
  `job_requirements_en` text COLLATE utf8_unicode_ci,
  `experience_en` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `degree_en` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sex_en` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `request_profile_en` text COLLATE utf8_unicode_ci,
  `career_en` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `location_en` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `job`
--

INSERT INTO `job` (`id`, `title`, `slug`, `description`, `right`, `number`, `experience`, `degree`, `sex`, `deadline`, `job_requirements`, `request_profile`, `contact`, `phone`, `money`, `career`, `vacancies`, `image`, `title_en`, `description_en`, `right_en`, `job_requirements_en`, `experience_en`, `degree_en`, `sex_en`, `request_profile_en`, `career_en`, `location_en`, `created_at`) VALUES
(1, 'Chuyên viên kinh doanh', 'chuyen-vien-kinh-doanh', '<p>- Ti&ecirc;́p c&acirc;̣n, h&ocirc;̃ trợ các khách hàng/doanh nghi&ecirc;̣p l&ecirc;n k&ecirc;́ hoạch các chương trình đào tạo phù hợp với mục ti&ecirc;u, y&ecirc;u c&acirc;̀u đặc thù ri&ecirc;̀n của từng khách hàng/doanh nghi&ecirc;̣p<br />\r\n- Đại di&ecirc;̣n c&ocirc;ng ty Quản lý, gặp gỡ, tư v&acirc;́n các chương trình đào tạo phù hợp với y&ecirc;u c&acirc;̀u, nhu c&acirc;̀u của khách hàng<br />\r\n- Phối hợp với ph&ograve;ng gi&aacute;o vụ, với hội đồng chuy&ecirc;n gia l&ecirc;n chương tr&igrave;nh đ&agrave;o tạo, sửa đổi, điều chỉnh cho ph&ugrave; hợp với mục ti&ecirc;u của DN , đ&oacute;ng g&oacute;p v&agrave;o sự ph&aacute;t triển của doanh nghiệp<br />\r\n- Phát tri&ecirc;̉n mở r&ocirc;̣ng m&ocirc;́i quan h&ecirc;̣ với khách hàng<br />\r\n- Tham gia vào các c&ocirc;ng vi&ecirc;̣c đàm phán, ký k&ecirc;́t hợp đ&ocirc;̀ng<br />\r\n- Ph&ocirc;́i hợp với các b&ocirc;̣ ph&acirc;̣n li&ecirc;n quan trong quá trình thực hi&ecirc;̣n hợp đ&ocirc;̀ng<br />\r\n- Hoàn thành chỉ tieey kinh doanh</p>', '<p>- MỨC LƯƠNG HẤP DẪN: LƯƠNG CB + PHỤ CẤP + HOA HỒNG (10%) + THƯỞNG<br />\r\n- Tổng thu nhập từ 15.000.000 &ndash; 20.000.000 VND/th&aacute;ng.<br />\r\n- Lương cơ bản: 5.000.000 &ndash; 7.000.000/th&aacute;ng (t&ugrave;y năng lực)<br />\r\n- C&oacute; cơ hội thăng tiến l&agrave;m trưởng nh&oacute;m, l&agrave;m trưởng ph&ograve;ng, l&agrave;m quản l&yacute;...<br />\r\n- Thưởng n&oacute;ng hấp dẫn h&agrave;ng th&aacute;ng<br />\r\n- Chế độ&nbsp;<a href=\"http://mywork.com.vn/tuyen-dung/3/bao-hiem.html\">bảo hiểm</a>&nbsp;đảm bảo theo qui định<br />\r\n- Được tham gia c&aacute;c kh&oacute;a đ&agrave;o tạo v&agrave; ph&aacute;t triển nghiệp vụ chuy&ecirc;n nghiệp về telesales, C&aacute;ch thức t&igrave;m kiếm kh&aacute;ch h&agrave;ng, kỹ năng&nbsp;<a href=\"http://mywork.com.vn/tuyen-dung/63/tu-van.html\">tư vấn</a>&nbsp;do KASH&nbsp;<a href=\"http://mywork.com.vn/tuyen-dung/90/ngos-to-chuc.html\">tổ chức</a><br />\r\n- Tiếp x&uacute;c l&agrave;m việc với c&aacute;c Doanh nh&acirc;n th&agrave;nh đạt.<br />\r\n- Được tham dự c&aacute;c kh&oacute;a học v&agrave; c&aacute;c buổi chia sẻ của những chuy&ecirc;n gia h&agrave;ng đầu Việt Nam<br />\r\n- X&eacute;t tăng lương 2 lần trong năm<br />\r\n- Tăng lương đột xuất khi đạt th&agrave;nh t&iacute;ch tốt, ho&agrave;n th&agrave;nh c&ocirc;ng việc được giao.<br />\r\n- Chế độ ph&uacute;c lợi: hiếu, hỉ, sinh nhật, nghỉ m&aacute;t, kh&aacute;m sức khỏe, &hellip;</p>', '2', 'banam', 'caodang', 'name', '2019-06-20', '<p>- Nam/Nữ tốt nghiệp đại học, cao đẳng, trung cấp :<br />\r\n- Giong n&oacute;i dễ nghe, kh&ocirc;ng ngọng, &acirc;m điệu r&otilde; rang<br />\r\n- T&aacute;c phong chuy&ecirc;n nghiệp, nhiệt t&igrave;nh, c&oacute; tr&aacute;ch nhiệm với c&ocirc;ng việc<br />\r\n- C&oacute; laptop c&aacute; nh&acirc;n<br />\r\n- Chưa c&oacute; kinh nghiệm được đ&agrave;o tạo<br />\r\n- Ưu Ti&ecirc;n C&oacute; kinh nghiệm l&agrave;m việc từ 6 th&aacute;ng - 1 năm trở l&ecirc;n (To&agrave;n thời gian) ở c&aacute;c lĩnh vực Telesales v&agrave;&nbsp;<a href=\"http://mywork.com.vn/tuyen-dung/57/dich-vu.html\">Dịch vụ</a>&nbsp;kh&aacute;ch h&agrave;ng</p>', '<p>- Đơn xin việc.<br />\r\n- Sơ yếu l&yacute; lịch.<br />\r\n- Hộ khẩu, chứng minh nh&acirc;n d&acirc;n v&agrave; giấy kh&aacute;m sức khỏe.<br />\r\n- C&aacute;c bằng cấp c&oacute; li&ecirc;n quan.<br />\r\nC&ocirc;ng ty CP đ&acirc;̀u tư và đào tạo Kash Vi&ecirc;̣t Nam<br />\r\nĐịa chỉ: S&ocirc;́ 57A ngõ 358 Bùi Xương Trạch, Thanh Xu&acirc;n, Hà N&ocirc;̣i</p>', 'Thái Ngọc', '0933411292', '>20trieu', 'co-khi', 'IT', 'https://388ic.vn/storage/uploads/995182-logo.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-06-06 05:38:53'),
(2, 'Trưởng Phòng Kinh Doanh BĐS Đất Nền - Thu Nhập Siêu Khủng', 'truong-phong-kinh-doanh-bds-dat-nen-thu-nhap-sieu-khung', '<p>- Lập kế hoạch kinh doanh cho từng thời điểm của từng dự &aacute;n.<br />\r\n- Hỗ trợ nh&acirc;n vi&ecirc;n kinh doanh thực hiện c&ocirc;ng việc đạt hiệu quả tốt nhất.<br />\r\n- Hỗ trợ&nbsp;<a href=\"http://mywork.com.vn/tuyen-dung/63/tu-van.html\">tư vấn</a>&nbsp;- đ&agrave;m ph&aacute;n v&agrave; chốt hợp đồng với kh&aacute;ch h&agrave;ng.<br />\r\n- Kiểm so&aacute;t qu&aacute; tr&igrave;nh thanh to&aacute;n của kh&aacute;ch h&agrave;ng với c&ocirc;ng ty<br />\r\n- Đ&agrave;o tạo huấn luyện nh&acirc;n vi&ecirc;n kinh doanh am hiểu c&aacute;c sản phẩm của c&ocirc;ng ty.<br />\r\n- Đ&ocirc;n đốc nh&acirc;n vi&ecirc;n thực hiện c&ocirc;ng t&aacute;c b&aacute;n h&agrave;ng đạt hiệu quả theo kế hoạch c&ocirc;ng ty đề ra.<br />\r\n- Chịu tr&aacute;ch nhiệm trước Ban Gi&aacute;m Đốc về hiệu quả kinh doanh của to&agrave;n ph&ograve;ng.</p>', '<p>- ĐƯỢC C&Ocirc;NG TY HỖ TRỢ ĐỘI NGŨ SALE CHẤT LƯỢNG.<br />\r\n- Lương cơ bản 15 - 50 triệu/ th&aacute;ng + Phụ cấp cơm trưa.<br />\r\n- Ch&iacute;nh s&aacute;ch hoa hồng hấp dẫn, cạnh tranh, gia tăng theo doanh thu thực đạt.<br />\r\n- Thưởng n&oacute;ng theo dự &aacute;n v&agrave; Thưởng theo th&aacute;ng, qu&yacute;, năm.<br />\r\n- Hưởng đầy đủ quyền lợi BHXH, BHYT, BHTN theo luật lao động VN.<br />\r\n- Du lịch định kỳ trong v&agrave; ngo&agrave;i nước 3-4 lần / năm; C&aacute;c hoạt động d&atilde; ngoại;&nbsp;<a href=\"http://mywork.com.vn/tuyen-dung/90/ngos-to-chuc.html\">Tổ chức</a>&nbsp;sinh nhật cho c&aacute;n bộ-nh&acirc;n vi&ecirc;n, tiệc c&ocirc;ng ty&nbsp;<br />\r\n- Nhiều cơ hội thăng tiến do C&ocirc;ng ty đang tr&ecirc;n đ&agrave; định hướng ph&aacute;t triển.</p>', '1', 'chuacokinhnghiem', 'laodongphothong', 'name', '2019-06-30', '<p>- Độ tuổi: 23 &ndash; 32 tuổi.&nbsp;<br />\r\n- Giới t&iacute;nh: Nam / Nữ (Ưu ti&ecirc;n c&oacute; ngoại h&igrave;nh).<br />\r\n- Đam m&ecirc; c&ocirc;ng việc kinh doanh trong lĩnh vực bất động sản,<br />\r\n- C&oacute; Kinh nghiệm l&agrave;m việc: &Iacute;t nhất 2 năm trong lĩnh vực bất động sản v&agrave; 1 năm kinh nghiệm quản l&iacute; nh&acirc;n vi&ecirc;n kinh doanh.<br />\r\n- Khả năng lập kế hoạch v&agrave; triển khai kế hoạch hiệu quả<br />\r\n- Khả năng quản l&yacute; huấn luyện đ&agrave;o tạo nh&acirc;n vi&ecirc;n mới trong qu&aacute; tr&igrave;nh l&agrave;m việc.<br />\r\n- Nhanh nhạy, giao tiếp tốt v&agrave; c&oacute; khả năng chịu &aacute;p lực c&ocirc;ng việc cao</p>', '<p>- Đơn xin việc. - Sơ yếu l&yacute; lịch. - Hộ khẩu, chứng minh nh&acirc;n d&acirc;n v&agrave; giấy kh&aacute;m sức khỏe. - C&aacute;c bằng cấp c&oacute; li&ecirc;n quan.</p>', 'Thái Ngọc', '0933411292', '1-3trieu', 'ke-toan', 'IT', 'https://388ic.vn/storage/uploads/550117-doanhnghiep.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-06-06 05:39:03'),
(3, 'Lập Trình Viên Việt', 'lap-trinh-vien-viet', '<p>Ti&ecirc;́ng Vi&ecirc;̣t</p>', '<p>Ti&ecirc;́ng Vi&ecirc;̣t</p>', '1', 'bonnam', 'daihoc', 'name', '2019-06-21', '<p>Ti&ecirc;́ng Vi&ecirc;̣t</p>', '<p>- Đơn xin việc. - Sơ yếu l&yacute; lịch. - Hộ khẩu, chứng minh nh&acirc;n d&acirc;n v&agrave; giấy kh&aacute;m sức khỏe. - C&aacute;c bằng cấp c&oacute; li&ecirc;n quan.</p>', 'Thái Ngọc', '899784383', '10-15trieu', 'ke-toan', 'IT', 'https://388ic.vn/storage/uploads/925947-183-722f32fd7a987e09f69956511f62b79b.jpg', 'Lập Trình Viên Englishs', '<p>Englishs</p>', '<p>English</p>', '<p>English</p>', '4_year', 'intermediate', 'male', '<p>- Đơn xin việc. - Sơ yếu l&yacute; lịch. - Hộ khẩu, chứng minh nh&acirc;n d&acirc;n v&agrave; giấy kh&aacute;m sức khỏe. - C&aacute;c bằng cấp c&oacute; li&ecirc;n quan.s</p>', NULL, NULL, '2019-06-13 13:04:44');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `manager`
--

CREATE TABLE `manager` (
  `id` int(10) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ordernum` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `media`
--

CREATE TABLE `media` (
  `media_id` bigint(20) UNSIGNED NOT NULL,
  `media_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `media_extension` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `media_width` double DEFAULT '0',
  `media_height` double DEFAULT '0',
  `media_style` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `media_size` double NOT NULL DEFAULT '0',
  `mime_type` varchar(170) COLLATE utf8mb4_unicode_ci NOT NULL,
  `media_type` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `media_source` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `media_url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `media_alt` text COLLATE utf8mb4_unicode_ci,
  `media_description` text COLLATE utf8mb4_unicode_ci,
  `media_path` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `media_location` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `media_folder` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `media_author` bigint(20) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL
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

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id` int(10) NOT NULL,
  `name` text COLLATE utf8_unicode_ci,
  `slug` text COLLATE utf8_unicode_ci,
  `summary` text COLLATE utf8_unicode_ci,
  `content` text COLLATE utf8_unicode_ci,
  `name_en` text COLLATE utf8_unicode_ci,
  `summary_en` text COLLATE utf8_unicode_ci,
  `content_en` text COLLATE utf8_unicode_ci,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `view` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id`, `name`, `slug`, `summary`, `content`, `name_en`, `summary_en`, `content_en`, `image`, `view`, `status`, `created_at`, `updated_at`) VALUES
(17, 'Trần Thái Ngọc', 'tran-thai-ngoc', '<p><strong>Nếu bạn đang t&igrave;m kiếm một chai nước hoa c&oacute; thể song h&agrave;nh với m&igrave;nh trong cả những ng&agrave;y h&egrave; oi ả lẫn những ng&agrave;y đ&ocirc;ng lạnh gi&aacute; th&igrave; đ&acirc;y thực sự</strong></p>', '<p><strong>Nếu bạn đang t&igrave;m kiếm một chai nước hoa c&oacute; thể song h&agrave;nh với m&igrave;nh trong cả những ng&agrave;y h&egrave; oi ả lẫn những ng&agrave;y đ&ocirc;ng lạnh gi&aacute; th&igrave; đ&acirc;y thực sự l&agrave; những gợi &yacute; đ&aacute;ng tham khảo.</strong></p>\r\n\r\n<p>Đa phần c&aacute;c t&iacute;n đồ nước hoa đều c&oacute; th&oacute;i quen chọn m&ugrave;i hương theo m&ugrave;a: m&ugrave;i nhẹ nh&agrave;ng, tươi m&aacute;t cho xu&acirc;n v&agrave; hạ; m&ugrave;i trầm đậm, ấm &aacute;p cho thu v&agrave; đ&ocirc;ng. Tuy nhi&ecirc;n, cũng c&oacute; kh&ocirc;ng &iacute;t người chẳng m&agrave;ng bận t&acirc;m đến quy tắc n&agrave;y; phần v&igrave; họ th&iacute;ch một m&ugrave;i hương đến độ c&oacute; thể d&ugrave;ng n&oacute; quanh năm suốt th&aacute;ng, phần v&igrave; m&ugrave;i hương đ&oacute; c&oacute; khả năng biến chuyển ho&agrave; hợp với từng m&ugrave;a. Mới đ&acirc;y, c&aacute;c bi&ecirc;n tập vi&ecirc;n s&agrave;nh điệu của chuy&ecirc;n trang thời trang đ&igrave;nh đ&aacute;m Refinery29 đ&atilde; chia sẻ về những m&ugrave;i nước hoa &quot;tủ&quot; m&agrave; họ đ&atilde; v&agrave; đang diện suốt cả 4 m&ugrave;a m&agrave; kh&ocirc;ng ch&aacute;n. Nếu bạn đang t&igrave;m kiếm một chai nước hoa c&oacute; thể song h&agrave;nh với m&igrave;nh trong cả những ng&agrave;y h&egrave; oi ả lẫn những ng&agrave;y đ&ocirc;ng lạnh gi&aacute; th&igrave; đ&acirc;y thực sự l&agrave; những gợi &yacute; đ&aacute;ng tham khảo.</p>\r\n\r\n<p><strong>Tom Ford Shanghai Lily (5,3 triệu VNĐ/50ml)</strong><img alt=\"\" src=\"https://388ic.vn/storage/uploads/images/seo.jpg\" style=\"height:350px; width:1600px\" /></p>', NULL, NULL, NULL, 'https://388ic.vn/storage/uploads/856323-51193541_245430953041908_3504454152577089536_n.jpg', '0', 0, '2019-06-06 09:06:41', '2019-05-25 04:30:02'),
(18, 'Chứng khoán chiều 14/5: Thị trường Việt Nam sáng nhất khu vực, ROS biến động hơn 12%', 'chung-khoan-chieu-145-thi-truong-viet-nam-sang-nhat-khu-vuc-ros-bien-dong-hon-12', '<p>Trong khi một loạt c&aacute;c chỉ số ch&acirc;u &Aacute; c&ograve;n giảm điểm như NIKKEI 225 (-0,59%), Shanghai (-0,7%), HSI (-1,51%), tại thị trường Việt Nam, <a href=\"http://bizlive.vn/tags/vn-index.html\">VN-Index</a> thậm ch&iacute; c&ograve;n tăng 0,71% l&ecirc;n 965,34 điểm, mức tăng t&iacute;ch cực nhất so với phần c&ograve;n lại trong ng&agrave;y h&ocirc;m nay.</p>', '<p>Trong khi một loạt c&aacute;c chỉ số ch&acirc;u &Aacute; c&ograve;n giảm điểm như NIKKEI 225 (-0,59%), Shanghai (-0,7%), HSI (-1,51%), tại thị trường Việt Nam, VN-Index thậm ch&iacute; c&ograve;n tăng 0,71% l&ecirc;n 965,34 điểm, mức tăng t&iacute;ch cực nhất so với phần c&ograve;n lại trong ng&agrave;y h&ocirc;m nay.</p>', 'Stock on May 14: Vietnam market is the brightest in the region, ROS fluctuates more than 12%s', '<p>While a series of Asian indices declined, such as NIKKEI 225 (-0.59%), Shanghai (-0.7%), HSI (-1.51%), in Vietnam market, VN-Index even increased by 0.71% to 965.34 points, the most positive increase compared to the rest today.s</p>', '<p>While a series of Asian indices declined, such as NIKKEI 225 (-0.59%), Shanghai (-0.7%), HSI (-1.51%), in Vietnam market, VN-Index even increased by 0.71% to 965.34 points, the most positive increase compared to the rest today.s</p>', 'https://388ic.vn/storage/uploads/687221-183-722f32fd7a987e09f69956511f62b79b.jpg', '0', 0, '2019-06-13 10:06:36', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('user1@gmail.com', '$2y$10$Z63m5mWaX2o9REyXue6KB.JxPjcWaLVzE1bkyJIRGlflBp7bjQ0YO', '2019-05-09 07:47:29'),
('ngoctt@vutatech.vn', '$2y$10$FcC6yYcMEtKWOyAZSBR3n.2k35tncWjVxNbHyg7VijZPVz/mtGj0u', '2019-05-09 08:53:28');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `project`
--

CREATE TABLE `project` (
  `id` int(10) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci,
  `name_en` text COLLATE utf8_unicode_ci,
  `content_en` text COLLATE utf8_unicode_ci,
  `image1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image4` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `project`
--

INSERT INTO `project` (`id`, `name`, `slug`, `content`, `name_en`, `content_en`, `image1`, `image2`, `image3`, `image4`, `status`, `created_at`) VALUES
(2, 'ngoc c', 'ngoc-c', '<p>Thực hiện v&agrave; quản l&yacute; c&aacute;c chiến dịch quảng c&aacute;o trực tuyến<br />\r\n- Theo d&otilde;i v&agrave; tối ưu hiệu quả quảng c&aacute;o, tối ưu gi&aacute; v&agrave; tỉ lệ chuyển đổi<br />\r\n- R&agrave; so&aacute;t v&agrave; thay đổi để ph&ugrave; hợp với y&ecirc;u cầu từng chiến dịch<br />\r\n- Thực hiện b&aacute;o c&aacute;o đ&aacute;nh gi&aacute; hiệu quả c&aacute;c chiến dịch truyền th&ocirc;ng k&ecirc;nh Digital sử dụng c&aacute;c c&ocirc;ng cụ đo lường. Đề xuất phương &aacute;n cải thiện/đổi mới tr&igrave;nh L&atilde;nh đạo.<br />\r\n- Nghi&ecirc;n cứu, cập nhật c&aacute;c t&iacute;nh năng, thủ thuật mới nhất từ facebook, google, c&aacute;c h&igrave;nh thức quảng c&aacute;o online mới&hellip;<br />\r\n- L&agrave;m việc với c&aacute;c ads network<br />\r\n- Quản trị website, fanpage, youtube,&hellip; về th&ocirc;ng tin v&agrave; h&igrave;nh ảnh, đảm bảo độ ổn định cho c&aacute;c k&ecirc;nh n&agrave;y<br />\r\n- Nắm r&otilde; quy định&nbsp;<a href=\"http://mywork.com.vn/tuyen-dung/71/ky-thuat.html\">kỹ thuật</a>&nbsp;của từng k&ecirc;nh digital để tối ưu h&oacute;a nội dung, h&igrave;nh ảnh v&agrave; chất lượng quảng c&aacute;o.<br />\r\n- Ph&aacute;t triển c&aacute;c k&ecirc;nh quảng c&aacute;o mới tr&ecirc;n nền tảng digital</p>', 'ngoc c', '<p>sadsad</p>', 'https://388ic.vn/storage/uploads/299004-about4.png', 'https://388ic.vn/storage/uploads/518907-gallery2.png', 'https://388ic.vn/storage/uploads/224949-gallery5.png', 'https://388ic.vn/storage/uploads/641534-gallery6.png', 'dathicong', '2019-06-13 16:06:05'),
(4, 'ngoc', 'ngoc', '<p>hasgda</p>', NULL, NULL, 'https://388ic.vn/storage/uploads/189894-gallery4.png', NULL, NULL, NULL, 'dangthicong', '2019-06-06 09:06:20'),
(5, 'Thái Ngọc', 'thai-ngoc', '<p>g</p>', NULL, NULL, 'https://388ic.vn/storage/uploads/20803-183-722f32fd7a987e09f69956511f62b79b.jpg', NULL, NULL, NULL, 'dathicong', '2019-06-10 08:06:08'),
(6, 'tests', 'tests', '<p>thái ngọcs</p>', 'namea', '<p>last namea</p>', 'https://388ic.vn/storage/uploads/623911-183-722f32fd7a987e09f69956511f62b79b.jpg', NULL, NULL, NULL, 'dathicong', '2019-06-13 11:06:28');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
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
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `address`, `roles`, `type`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Thái Ngọc', 'tranthaingoc0147@gmail.com', NULL, NULL, '[\"supperadmin\",\"admin\",\"user\"]', NULL, NULL, '$2y$10$rdjf/RoPzSO2XUED8YQ1ruLIBZbc4dGsimIxIeXqs18BvxHBqPrQi', 'PC7SotHqbIjA3fENEopa29KW64iRqiaKXmi3L29FyIHH5vy9tUKvs1OqMmqQ', '2019-05-31 19:32:48', '2019-05-31 19:33:08'),
(4, 'user1', 'user1@gmail.com', '0933411292', 'bà rịa vũng tàu', '[\"user\"]', NULL, NULL, '$2y$10$zF8PXHrcT5iR3XEpUvvHbOMb1VqmqUGw.WYay2q0xyLeMTSBv4Ele', 'FNiMAbXZp7KrSo6UI1oodlVxqpnp3NLuHJOn4VFzvOte80o5SdPYGxmLLxbk', '2019-06-05 07:06:28', '2019-06-05 07:06:28');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `about_company`
--
ALTER TABLE `about_company`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `about_content`
--
ALTER TABLE `about_content`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `about_image`
--
ALTER TABLE `about_image`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `career`
--
ALTER TABLE `career`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `certificate`
--
ALTER TABLE `certificate`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `configuration`
--
ALTER TABLE `configuration`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `image_partner`
--
ALTER TABLE `image_partner`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`media_id`),
  ADD UNIQUE KEY `media_id` (`media_id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `about_company`
--
ALTER TABLE `about_company`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `about_content`
--
ALTER TABLE `about_content`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `about_image`
--
ALTER TABLE `about_image`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `career`
--
ALTER TABLE `career`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `certificate`
--
ALTER TABLE `certificate`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `configuration`
--
ALTER TABLE `configuration`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `image_partner`
--
ALTER TABLE `image_partner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `job`
--
ALTER TABLE `job`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `manager`
--
ALTER TABLE `manager`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `media`
--
ALTER TABLE `media`
  MODIFY `media_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `project`
--
ALTER TABLE `project`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
