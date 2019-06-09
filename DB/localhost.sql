-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th6 08, 2019 lúc 09:43 AM
-- Phiên bản máy phục vụ: 5.7.26-cll-lve
-- Phiên bản PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `icvnelaw_388ic.vn`
--
CREATE DATABASE IF NOT EXISTS `icvnelaw_388ic.vn` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `icvnelaw_388ic.vn`;

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
(2, 'Cơ khí', 'co-khi', '2019-06-03 00:06:42'),
(3, 'Lập trình viên', 'lap-trinh-vien', '2019-06-08 01:06:47');

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
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `job`
--

INSERT INTO `job` (`id`, `title`, `slug`, `description`, `right`, `number`, `experience`, `degree`, `sex`, `deadline`, `job_requirements`, `request_profile`, `contact`, `phone`, `money`, `career`, `vacancies`, `image`, `created_at`) VALUES
(1, 'Chuyên viên kinh doanh', 'chuyen-vien-kinh-doanh', '<p>- Ti&ecirc;́p c&acirc;̣n, h&ocirc;̃ trợ các khách hàng/doanh nghi&ecirc;̣p l&ecirc;n k&ecirc;́ hoạch các chương trình đào tạo phù hợp với mục ti&ecirc;u, y&ecirc;u c&acirc;̀u đặc thù ri&ecirc;̀n của từng khách hàng/doanh nghi&ecirc;̣p<br />\r\n- Đại di&ecirc;̣n c&ocirc;ng ty Quản lý, gặp gỡ, tư v&acirc;́n các chương trình đào tạo phù hợp với y&ecirc;u c&acirc;̀u, nhu c&acirc;̀u của khách hàng<br />\r\n- Phối hợp với ph&ograve;ng gi&aacute;o vụ, với hội đồng chuy&ecirc;n gia l&ecirc;n chương tr&igrave;nh đ&agrave;o tạo, sửa đổi, điều chỉnh cho ph&ugrave; hợp với mục ti&ecirc;u của DN , đ&oacute;ng g&oacute;p v&agrave;o sự ph&aacute;t triển của doanh nghiệp<br />\r\n- Phát tri&ecirc;̉n mở r&ocirc;̣ng m&ocirc;́i quan h&ecirc;̣ với khách hàng<br />\r\n- Tham gia vào các c&ocirc;ng vi&ecirc;̣c đàm phán, ký k&ecirc;́t hợp đ&ocirc;̀ng<br />\r\n- Ph&ocirc;́i hợp với các b&ocirc;̣ ph&acirc;̣n li&ecirc;n quan trong quá trình thực hi&ecirc;̣n hợp đ&ocirc;̀ng<br />\r\n- Hoàn thành chỉ tieey kinh doanh</p>', '<p>- MỨC LƯƠNG HẤP DẪN: LƯƠNG CB + PHỤ CẤP + HOA HỒNG (10%) + THƯỞNG<br />\r\n- Tổng thu nhập từ 15.000.000 &ndash; 20.000.000 VND/th&aacute;ng.<br />\r\n- Lương cơ bản: 5.000.000 &ndash; 7.000.000/th&aacute;ng (t&ugrave;y năng lực)<br />\r\n- C&oacute; cơ hội thăng tiến l&agrave;m trưởng nh&oacute;m, l&agrave;m trưởng ph&ograve;ng, l&agrave;m quản l&yacute;...<br />\r\n- Thưởng n&oacute;ng hấp dẫn h&agrave;ng th&aacute;ng<br />\r\n- Chế độ&nbsp;<a href=\"http://mywork.com.vn/tuyen-dung/3/bao-hiem.html\">bảo hiểm</a>&nbsp;đảm bảo theo qui định<br />\r\n- Được tham gia c&aacute;c kh&oacute;a đ&agrave;o tạo v&agrave; ph&aacute;t triển nghiệp vụ chuy&ecirc;n nghiệp về telesales, C&aacute;ch thức t&igrave;m kiếm kh&aacute;ch h&agrave;ng, kỹ năng&nbsp;<a href=\"http://mywork.com.vn/tuyen-dung/63/tu-van.html\">tư vấn</a>&nbsp;do KASH&nbsp;<a href=\"http://mywork.com.vn/tuyen-dung/90/ngos-to-chuc.html\">tổ chức</a><br />\r\n- Tiếp x&uacute;c l&agrave;m việc với c&aacute;c Doanh nh&acirc;n th&agrave;nh đạt.<br />\r\n- Được tham dự c&aacute;c kh&oacute;a học v&agrave; c&aacute;c buổi chia sẻ của những chuy&ecirc;n gia h&agrave;ng đầu Việt Nam<br />\r\n- X&eacute;t tăng lương 2 lần trong năm<br />\r\n- Tăng lương đột xuất khi đạt th&agrave;nh t&iacute;ch tốt, ho&agrave;n th&agrave;nh c&ocirc;ng việc được giao.<br />\r\n- Chế độ ph&uacute;c lợi: hiếu, hỉ, sinh nhật, nghỉ m&aacute;t, kh&aacute;m sức khỏe, &hellip;</p>', '2', 'banam', 'caodang', 'name', '2019-06-20', '<p>- Nam/Nữ tốt nghiệp đại học, cao đẳng, trung cấp :<br />\r\n- Giong n&oacute;i dễ nghe, kh&ocirc;ng ngọng, &acirc;m điệu r&otilde; rang<br />\r\n- T&aacute;c phong chuy&ecirc;n nghiệp, nhiệt t&igrave;nh, c&oacute; tr&aacute;ch nhiệm với c&ocirc;ng việc<br />\r\n- C&oacute; laptop c&aacute; nh&acirc;n<br />\r\n- Chưa c&oacute; kinh nghiệm được đ&agrave;o tạo<br />\r\n- Ưu Ti&ecirc;n C&oacute; kinh nghiệm l&agrave;m việc từ 6 th&aacute;ng - 1 năm trở l&ecirc;n (To&agrave;n thời gian) ở c&aacute;c lĩnh vực Telesales v&agrave;&nbsp;<a href=\"http://mywork.com.vn/tuyen-dung/57/dich-vu.html\">Dịch vụ</a>&nbsp;kh&aacute;ch h&agrave;ng</p>', '<p>- Đơn xin việc.<br />\r\n- Sơ yếu l&yacute; lịch.<br />\r\n- Hộ khẩu, chứng minh nh&acirc;n d&acirc;n v&agrave; giấy kh&aacute;m sức khỏe.<br />\r\n- C&aacute;c bằng cấp c&oacute; li&ecirc;n quan.<br />\r\nC&ocirc;ng ty CP đ&acirc;̀u tư và đào tạo Kash Vi&ecirc;̣t Nam<br />\r\nĐịa chỉ: S&ocirc;́ 57A ngõ 358 Bùi Xương Trạch, Thanh Xu&acirc;n, Hà N&ocirc;̣i</p>', 'Thái Ngọc', '0933411292', '>20trieu', 'co-khi', 'IT', 'https://388ic.vn/storage/uploads/995182-logo.jpg', '2019-06-06 05:38:53'),
(2, 'Trưởng Phòng Kinh Doanh BĐS Đất Nền - Thu Nhập Siêu Khủng', 'truong-phong-kinh-doanh-bds-dat-nen-thu-nhap-sieu-khung', '<p>- Lập kế hoạch kinh doanh cho từng thời điểm của từng dự &aacute;n.<br />\r\n- Hỗ trợ nh&acirc;n vi&ecirc;n kinh doanh thực hiện c&ocirc;ng việc đạt hiệu quả tốt nhất.<br />\r\n- Hỗ trợ&nbsp;<a href=\"http://mywork.com.vn/tuyen-dung/63/tu-van.html\">tư vấn</a>&nbsp;- đ&agrave;m ph&aacute;n v&agrave; chốt hợp đồng với kh&aacute;ch h&agrave;ng.<br />\r\n- Kiểm so&aacute;t qu&aacute; tr&igrave;nh thanh to&aacute;n của kh&aacute;ch h&agrave;ng với c&ocirc;ng ty<br />\r\n- Đ&agrave;o tạo huấn luyện nh&acirc;n vi&ecirc;n kinh doanh am hiểu c&aacute;c sản phẩm của c&ocirc;ng ty.<br />\r\n- Đ&ocirc;n đốc nh&acirc;n vi&ecirc;n thực hiện c&ocirc;ng t&aacute;c b&aacute;n h&agrave;ng đạt hiệu quả theo kế hoạch c&ocirc;ng ty đề ra.<br />\r\n- Chịu tr&aacute;ch nhiệm trước Ban Gi&aacute;m Đốc về hiệu quả kinh doanh của to&agrave;n ph&ograve;ng.</p>', '<p>- ĐƯỢC C&Ocirc;NG TY HỖ TRỢ ĐỘI NGŨ SALE CHẤT LƯỢNG.<br />\r\n- Lương cơ bản 15 - 50 triệu/ th&aacute;ng + Phụ cấp cơm trưa.<br />\r\n- Ch&iacute;nh s&aacute;ch hoa hồng hấp dẫn, cạnh tranh, gia tăng theo doanh thu thực đạt.<br />\r\n- Thưởng n&oacute;ng theo dự &aacute;n v&agrave; Thưởng theo th&aacute;ng, qu&yacute;, năm.<br />\r\n- Hưởng đầy đủ quyền lợi BHXH, BHYT, BHTN theo luật lao động VN.<br />\r\n- Du lịch định kỳ trong v&agrave; ngo&agrave;i nước 3-4 lần / năm; C&aacute;c hoạt động d&atilde; ngoại;&nbsp;<a href=\"http://mywork.com.vn/tuyen-dung/90/ngos-to-chuc.html\">Tổ chức</a>&nbsp;sinh nhật cho c&aacute;n bộ-nh&acirc;n vi&ecirc;n, tiệc c&ocirc;ng ty&nbsp;<br />\r\n- Nhiều cơ hội thăng tiến do C&ocirc;ng ty đang tr&ecirc;n đ&agrave; định hướng ph&aacute;t triển.</p>', '1', 'chuacokinhnghiem', 'laodongphothong', 'name', '2019-06-30', '<p>- Độ tuổi: 23 &ndash; 32 tuổi.&nbsp;<br />\r\n- Giới t&iacute;nh: Nam / Nữ (Ưu ti&ecirc;n c&oacute; ngoại h&igrave;nh).<br />\r\n- Đam m&ecirc; c&ocirc;ng việc kinh doanh trong lĩnh vực bất động sản,<br />\r\n- C&oacute; Kinh nghiệm l&agrave;m việc: &Iacute;t nhất 2 năm trong lĩnh vực bất động sản v&agrave; 1 năm kinh nghiệm quản l&iacute; nh&acirc;n vi&ecirc;n kinh doanh.<br />\r\n- Khả năng lập kế hoạch v&agrave; triển khai kế hoạch hiệu quả<br />\r\n- Khả năng quản l&yacute; huấn luyện đ&agrave;o tạo nh&acirc;n vi&ecirc;n mới trong qu&aacute; tr&igrave;nh l&agrave;m việc.<br />\r\n- Nhanh nhạy, giao tiếp tốt v&agrave; c&oacute; khả năng chịu &aacute;p lực c&ocirc;ng việc cao</p>', '<p>- Đơn xin việc. - Sơ yếu l&yacute; lịch. - Hộ khẩu, chứng minh nh&acirc;n d&acirc;n v&agrave; giấy kh&aacute;m sức khỏe. - C&aacute;c bằng cấp c&oacute; li&ecirc;n quan.</p>', 'Thái Ngọc', '0933411292', '1-3trieu', 'ke-toan', 'IT', 'https://388ic.vn/storage/uploads/550117-doanhnghiep.jpg', '2019-06-06 05:39:03'),
(3, 'Kỹ Sư Kỹ Thuật', 'ky-su-ky-thuat', '<p>Tuyển dụng&nbsp;5 vị tr&iacute;:<br />\r\n- Kỹ sư M&aacute;y v&agrave; Thiết bị&nbsp;Nhiệt Lạnh<br />\r\n- Kỹ sư Điện Lạnh<br />\r\n- Kỹ sư Cấp tho&aacute;t nước<br />\r\n- Kỹ sư Hệ thống Điện<br />\r\n- Kỹ sư kinh tế x&acirc;y dựng</p>', '<p>- Lương th&aacute;ng thỏa thuận t&ugrave;y theo tr&igrave;nh độ, năng lực v&agrave; vị tr&iacute; l&agrave;m việc của người lao động.<br />\r\n- Đạt y&ecirc;u cầu sau khi thử việc được k&yacute; HĐLĐ d&agrave;i hạn, đ&oacute;ng BHXH, BHYT, BHTN theo qui định của Nh&agrave; nước.</p>', '10', 'duoimotnam', 'daihoc', 'name', '2019-12-06', '<p>- Tốt nghiệp loại kh&aacute; trở l&ecirc;n (Ưu ti&ecirc;n người c&oacute; kinh nghiệm)<br />\r\n- Sử dụng th&agrave;nh thạo c&aacute;c phần mềm AutoCad, Word, Exel, Tiếng Anh chuy&ecirc;n ng&agrave;nh đọc hiểu.&nbsp;<br />\r\n- C&oacute; tr&aacute;ch nhiệm v&agrave; chủ động trong c&ocirc;ng việc.&nbsp;<br />\r\n- C&oacute; khả năng l&agrave;m việc độc lập v&agrave; l&agrave;m việc nh&oacute;m một c&aacute;ch hiệu quả.&nbsp;<br />\r\n- C&oacute; kỹ năng ph&acirc;n t&iacute;ch v&agrave; tổng hợp th&ocirc;ng tin. C&oacute; khả năng bao qu&aacute;t c&ocirc;ng việc.&nbsp;</p>', '<p>- Đơn xin việc. - Sơ yếu l&yacute; lịch. - Hộ khẩu, chứng minh nh&acirc;n d&acirc;n v&agrave; giấy kh&aacute;m sức khỏe. - C&aacute;c bằng cấp c&oacute; li&ecirc;n quan.</p>', 'Nguyễn Văn Đức', '0988773322', '5-7trieu', 'lap-trinh-vien', 'Nhân viên-6', 'https://388ic.vn/storage/uploads/516111-61795532_348137439238779_5454460551541293056_n.png', '2019-06-08 01:01:35');

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
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `view` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id`, `name`, `slug`, `summary`, `content`, `image`, `view`, `status`, `created_at`, `updated_at`) VALUES
(17, 'Cận cảnh kho pha chế xăng giả của đại gia Trịnh Sướng', 'can-canh-kho-pha-che-xang-gia-cua-dai-gia-trinh-suong', '<p><strong>200 trinh s&aacute;t mất gần một năm b&iacute; mật theo d&otilde;i c&aacute;c kho pha chế xăng giả tại nhiều tỉnh th&agrave;nh của đại gia Trịnh Sướng v&agrave; đồng phạm.</strong></p>', '<table align=\"center\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"Can canh kho pha che xang gia cua dai gia Trinh Suong hinh anh 1 \" src=\"https://znews-photo.zadn.vn/w1024/Uploaded/nugzrd/2019_06_07/H10_zing.jpg\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Chuy&ecirc;n &aacute;n sản xuất, ti&ecirc;u thụ xăng giả li&ecirc;n quan đại gia Trịnh Sướng khởi ph&aacute;t đầu năm 2018 khi C&ocirc;ng an Đắk N&ocirc;ng x&aacute;c định một &ocirc;t&ocirc; bị ch&aacute;y do sử dụng xăng k&eacute;m chất lượng. Ngo&agrave;i khởi tố 9 bị can, c&ocirc;ng an tỉnh đ&atilde; b&aacute;o c&aacute;o Bộ C&ocirc;ng an lập chuy&ecirc;n &aacute;n đấu tranh.</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table align=\"center\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"Can canh kho pha che xang gia cua dai gia Trinh Suong hinh anh 2 \" src=\"https://znews-photo.zadn.vn/w1024/Uploaded/nugzrd/2019_06_07/H16_zing_1.jpg\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Đại t&aacute; L&ecirc; Vinh Quy, Ph&oacute; gi&aacute;m đốc C&ocirc;ng an tỉnh Đắk N&ocirc;ng, cho biết đường d&acirc;y sản xuất xăng giả đ&atilde; hoạt động trong thời gian d&agrave;i v&agrave; hết sức tinh vi. &quot;Quy m&ocirc; v&agrave; số lượng cơ sở để sản xuất xăng giả được đặt ở nhiều tỉnh, th&agrave;nh n&ecirc;n việc điều tra, ph&aacute; &aacute;n gặp kh&ocirc;ng &iacute;t kh&oacute; khăn&quot;, &ocirc;ng n&oacute;i.</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table align=\"center\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"Can canh kho pha che xang gia cua dai gia Trinh Suong hinh anh 3 \" src=\"https://znews-photo.zadn.vn/w1024/Uploaded/nugzrd/2019_06_07/H9_zing.jpg\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>&ldquo;C&aacute;c doanh nghiệp ban đầu pha trộn xăng giả ngay tại cửa h&agrave;ng. Tuy nhi&ecirc;n, sau khi nghi ngờ bị theo d&otilde;i, nh&oacute;m n&agrave;y đ&atilde; pha trộn tại c&aacute;c kho h&agrave;ng, t&agrave;u biển được cảnh giới cẩn trọng, người lạ kh&ocirc;ng thể lại gần&rdquo;, đại t&aacute; Quy n&oacute;i.</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table align=\"center\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"Can canh kho pha che xang gia cua dai gia Trinh Suong hinh anh 4 \" src=\"https://znews-photo.zadn.vn/w1024/Uploaded/nugzrd/2019_06_07/H1_zing_1.jpg\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Lực lượng trinh s&aacute;t li&ecirc;n tục phải thay đổi. 200 c&aacute;n bộ, chiến sĩ được&nbsp;C&ocirc;ng an tỉnh Đắk N&ocirc;ng huy động tham gia mật phục trong gần một năm tại nhiều tỉnh miền T&acirc;y như: Cần Thơ, Hậu Giang, S&oacute;c Trăng v&agrave; TP.HCM.</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table align=\"center\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"Can canh kho pha che xang gia cua dai gia Trinh Suong hinh anh 5 \" src=\"https://znews-photo.zadn.vn/w1024/Uploaded/nugzrd/2019_06_07/_zing.jpg\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Tại thời điểm kh&aacute;m x&eacute;t kho xăng của nghi can Trịnh Sướng, c&ocirc;ng an thu giữ nhiều loại xăng giả chuẩn bị đưa ra thị trường ti&ecirc;u thụ. Đồng thời thu giữ c&aacute;c h&oacute;a chất, dung m&ocirc;i để sản xuất xăng giả.</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table align=\"center\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"Can canh kho pha che xang gia cua dai gia Trinh Suong hinh anh 6 \" src=\"https://znews-photo.zadn.vn/w1024/Uploaded/nugzrd/2019_06_07/H2_zing_1_1.jpg\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Đồng loạt kh&aacute;m x&eacute;t 6 địa điểm ở TP.HCM, Cần Thơ, Hậu Giang v&agrave; S&oacute;c Trăng, c&ocirc;ng an thu giữ hơn 3 triệu l&iacute;t dung dịch c&aacute;c loại (gồm 2 triệu l&iacute;t hỗn hợp pha chế xăng giả; 430.000 l&iacute;t dung m&ocirc;i chưa pha...), 3 t&agrave;u thủy, 6 xe bồn v&agrave; 50 kg chất tạo m&agrave;u.</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table align=\"center\">\r\n	<tbody>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Qua điều tra, c&ocirc;ng an x&aacute;c định phương thức hoạt động của c&aacute;c doanh nghiệp n&agrave;y l&agrave; mua dung m&ocirc;i chưng cất từ dầu mỏ c&oacute; chỉ số RON 60-87, sau đ&oacute; pha với xăng A95 với tỷ lệ 30-50% c&ugrave;ng chất tạo m&agrave;u để th&agrave;nh xăng RON A92 giả.</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table align=\"center\">\r\n	<tbody>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Theo kết quả điều tra ban đầu, từ ng&agrave;y 1/1/2017 đến khi bị bắt, trung b&igrave;nh mỗi th&aacute;ng nh&oacute;m n&agrave;y đưa ra thị trường tr&ecirc;n 6 triệu l&iacute;t xăng giả, tương đương 174 triệu l&iacute;t trong hơn 2 năm, thu lợi bất ch&iacute;nh ước t&iacute;nh h&agrave;ng ngh&igrave;n tỷ đồng.</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table align=\"center\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"Can canh kho pha che xang gia cua dai gia Trinh Suong hinh anh 1 \" src=\"https://znews-photo.zadn.vn/w1024/Uploaded/nugzrd/2019_06_07/H10_zing.jpg\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Tuy nhi&ecirc;n, bước đầu c&aacute;c bị can chỉ thừa nhận b&aacute;n ra thị trường 19,5 triệu l&iacute;t xăng giả, thu lợi khoảng&nbsp;135 tỷ đồng. Vụ &aacute;n đang được điều tra mở rộng.</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table align=\"center\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"Can canh kho pha che xang gia cua dai gia Trinh Suong hinh anh 11 \" src=\"https://znews-photo.zadn.vn/w1024/Uploaded/nugzrd/2019_06_07/H8_zing.jpg\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Đến nay, C&ocirc;ng an tỉnh Đắk N&ocirc;ng đ&atilde; khởi tố 23 bị can trong vụ &aacute;n. Trong ảnh l&agrave; bị can Trịnh Sướng đ&atilde; bị khởi tố, bắt tạm giam ng&agrave;y 5/6.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 'https://388ic.vn/storage/uploads/635965-n.jpg', '0', 0, '2019-06-07 11:06:13', '2019-05-25 04:30:02'),
(18, 'Cá sấu tấn công tăng 20 lần - nạn nhân giấu giếm vì quá xấu hổ', 'ca-sau-tan-cong-tang-20-lan-nan-nhan-giau-giem-vi-qua-xau-ho', '<p>Thờ phượng v&agrave; t&ocirc;n s&ugrave;ng c&aacute; sấu, người d&acirc;n Đ&ocirc;ng Timor kh&ocirc;ng tin ch&uacute;ng đứng sau c&aacute;c vụ tấn c&ocirc;ng chết người đang gia tăng d&ugrave; thường xuy&ecirc;n đối mặt nguy cơ bị c&aacute; sấu đoạt mạng.</p>', '<p><img alt=\"Ca sau tan cong tang 20 lan - nan nhan giau giem vi qua xau ho hinh anh 2 \" src=\"https://znews-photo.zadn.vn/w1024/Uploaded/lce_vjrcc/2019_06_07/ca_sau_2.jpg\" /></p>\r\n\r\n<table align=\"center\">\r\n	<tbody>\r\n		<tr>\r\n			<td>Một tấm biển bằng tiếng Tetum cảnh b&aacute;o về nguy cơ c&aacute; sấu.&nbsp;C&aacute;c cuộc tấn c&ocirc;ng c&aacute; sấu ở đ&acirc;y đ&atilde; tăng gấp 20 lần trong thập kỷ qua, với số lượng &iacute;t nhất một người chết mỗi th&aacute;ng tại một quốc gia c&oacute; 1,2 triệu người.</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table align=\"center\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"Ca sau tan cong tang 20 lan - nan nhan giau giem vi qua xau ho hinh anh 3 \" src=\"https://znews-photo.zadn.vn/w1024/Uploaded/lce_vjrcc/2019_06_07/ca_sau_3.jpg\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Người d&acirc;n địa phương thường xuy&ecirc;n lấy nước, giặt giũ v&agrave; tắm tr&ecirc;n s&ocirc;ng. Điều đ&oacute; khiến nguy cơ bị c&aacute; sấu tấn c&ocirc;ng lớn hơn. Đối tượng c&oacute; nguy cơ cao nhất từ c&aacute; sấu l&agrave; những người sống b&ecirc;n bờ s&ocirc;ng của v&ocirc; số con s&ocirc;ng của h&ograve;n đảo n&agrave;y hoặc dọc theo bờ biển. Người Đ&ocirc;ng Timor gọi c&aacute; sấu l&agrave; &quot;abo&quot;, trong tiếng Tetum c&oacute; nghĩa l&agrave; &ocirc;ng b&agrave;. Giết ch&uacute;ng l&agrave; điều cấm kỵ về mặt văn h&oacute;a v&agrave; cũng l&agrave; h&agrave;nh động bất hợp ph&aacute;p.</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table align=\"center\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"Ca sau tan cong tang 20 lan - nan nhan giau giem vi qua xau ho hinh anh 4 \" src=\"https://znews-photo.zadn.vn/w1024/Uploaded/lce_vjrcc/2019_06_07/ca_sau_4.jpg\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Tượng c&aacute; sấu đặc trưng trong một ng&ocirc;i đền C&ocirc;ng gi&aacute;o ở ngoại &ocirc; Lospalos.&nbsp;Người d&acirc;n Đ&ocirc;ng Timor, c&ograve;n được gọi l&agrave; Timor-Leste, trong nhiều thế kỷ đ&atilde; t&ocirc;n k&iacute;nh v&agrave; thậm ch&iacute; t&ocirc;n s&ugrave;ng c&aacute; sấu.</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 'https://388ic.vn/storage/uploads/187497-ca_sau_1.jpg', '0', 0, '2019-06-07 12:06:30', NULL);

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

INSERT INTO `project` (`id`, `name`, `slug`, `content`, `image1`, `image2`, `image3`, `image4`, `status`, `created_at`) VALUES
(2, 'Khay cáp & cáp hoạt động', 'khay-cap-cap-hoat-dong', '<p>Thực hiện v&agrave; quản l&yacute; c&aacute;c chiến dịch quảng c&aacute;o trực tuyến<br />\r\n- Theo d&otilde;i v&agrave; tối ưu hiệu quả quảng c&aacute;o, tối ưu gi&aacute; v&agrave; tỉ lệ chuyển đổi<br />\r\n- R&agrave; so&aacute;t v&agrave; thay đổi để ph&ugrave; hợp với y&ecirc;u cầu từng chiến dịch<br />\r\n- Thực hiện b&aacute;o c&aacute;o đ&aacute;nh gi&aacute; hiệu quả c&aacute;c chiến dịch truyền th&ocirc;ng k&ecirc;nh Digital sử dụng c&aacute;c c&ocirc;ng cụ đo lường. Đề xuất phương &aacute;n cải thiện/đổi mới tr&igrave;nh L&atilde;nh đạo.<br />\r\n- Nghi&ecirc;n cứu, cập nhật c&aacute;c t&iacute;nh năng, thủ thuật mới nhất từ facebook, google, c&aacute;c h&igrave;nh thức quảng c&aacute;o online mới&hellip;<br />\r\n- L&agrave;m việc với c&aacute;c ads network<br />\r\n- Quản trị website, fanpage, youtube,&hellip; về th&ocirc;ng tin v&agrave; h&igrave;nh ảnh, đảm bảo độ ổn định cho c&aacute;c k&ecirc;nh n&agrave;y<br />\r\n- Nắm r&otilde; quy định&nbsp;<a href=\"http://mywork.com.vn/tuyen-dung/71/ky-thuat.html\">kỹ thuật</a>&nbsp;của từng k&ecirc;nh digital để tối ưu h&oacute;a nội dung, h&igrave;nh ảnh v&agrave; chất lượng quảng c&aacute;o.<br />\r\n- Ph&aacute;t triển c&aacute;c k&ecirc;nh quảng c&aacute;o mới tr&ecirc;n nền tảng digital</p>', 'https://388ic.vn/storage/uploads/562363-cable1.png', 'https://388ic.vn/storage/uploads/121872-cable2.png', 'https://388ic.vn/storage/uploads/876891-cable3.png', 'https://388ic.vn/storage/uploads/868120-cable4.png', 'dathicong', '2019-06-07 10:06:20'),
(4, 'Kéo cáp', 'keo-cap', '<p>Tiếp nhận th&ocirc;ng tin kh&aacute;ch h&agrave;ng<br />\r\nKhảo s&aacute;t, tư vấn kh&aacute;ch h&agrave;ng (Địa h&igrave;nh thi c&ocirc;ng, chủng loại c&aacute;p: c&aacute;p 4 fo, c&aacute;p 8 fo &hellip;)<br />\r\nB&aacute;o gi&aacute; kh&aacute;ch h&agrave;ng&nbsp;<br />\r\nCử c&ocirc;ng nh&acirc;n, kỹ thuật vi&ecirc;n qua c&ocirc;ng trường thi c&ocirc;ng<br />\r\nĐo kiểm th&ocirc;ng quang, t&iacute;n hiệu quang<br />\r\nNghiệm thu hệ thống v&agrave; xuất h&oacute;a đơn.</p>', 'https://388ic.vn/storage/uploads/372271-cable5.png', 'https://388ic.vn/storage/uploads/606196-cable6.png', 'https://388ic.vn/storage/uploads/602494-cable7.png', 'https://388ic.vn/storage/uploads/464954-cable8.png', 'dangthicong', '2019-06-07 10:06:46'),
(5, 'Lắp đặt thiết bị', 'lap-dat-thiet-bi', '<p>Thiết bị lắp đặt v&agrave;o c&ocirc;ng tr&igrave;nh gồm thiết bị c&ocirc;ng tr&igrave;nh v&agrave; thiết bị c&ocirc;ng nghệ. Thiết bị c&ocirc;ng tr&igrave;nh l&agrave; thiết bị được lắp đặt v&agrave;o c&ocirc;ng tr&igrave;nh x&acirc;y dựng theo thiết kế x&acirc;y dựng. Thiết bị c&ocirc;ng nghệ l&agrave; thiết bị nằm trong d&acirc;y chuyền c&ocirc;ng nghệ được lắp đặt v&agrave;o c&ocirc;ng tr&igrave;nh x&acirc;y dựng theo thiết kế c&ocirc;ng nghệ.</p>', 'https://388ic.vn/storage/uploads/182647-Equipment1.png', 'https://388ic.vn/storage/uploads/363247-Equipment2.png', 'https://388ic.vn/storage/uploads/500343-Equipment3.png', 'https://388ic.vn/storage/uploads/663061-Equipment4.png', 'dathicong', '2019-06-07 10:06:16'),
(6, 'Hỗ trợ chế tạo', 'ho-tro-che-tao', '<p>Thiết bị lắp đặt v&agrave;o c&ocirc;ng tr&igrave;nh gồm thiết bị c&ocirc;ng tr&igrave;nh v&agrave; thiết bị c&ocirc;ng nghệ. Thiết bị c&ocirc;ng tr&igrave;nh l&agrave; thiết bị được lắp đặt v&agrave;o c&ocirc;ng tr&igrave;nh x&acirc;y dựng theo thiết kế x&acirc;y dựng. Thiết bị c&ocirc;ng nghệ l&agrave; thiết bị nằm trong d&acirc;y chuyền c&ocirc;ng nghệ được lắp đặt v&agrave;o c&ocirc;ng tr&igrave;nh x&acirc;y dựng theo thiết kế c&ocirc;ng nghệ.</p>', 'https://388ic.vn/storage/uploads/567982-Support1.png', 'https://388ic.vn/storage/uploads/346987-Support2.png', 'https://388ic.vn/storage/uploads/310121-Support3.png', 'https://388ic.vn/storage/uploads/914750-Support4.png', 'dathicong', '2019-06-07 11:06:43');

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
(3, 'Thái Ngọc', 'tranthaingoc0147@gmail.com', NULL, NULL, '[\"supperadmin\",\"admin\",\"user\"]', NULL, NULL, '$2y$10$rdjf/RoPzSO2XUED8YQ1ruLIBZbc4dGsimIxIeXqs18BvxHBqPrQi', 'smERf82mBs2mATZL9LosW7iNlWntmrrpXD4qxsJ6BoZbGGbpyd0ZbmUfUUSM', '2019-05-31 19:32:48', '2019-05-31 19:33:08'),
(4, 'user1', 'user1@gmail.com', '0933411292', 'bà rịa vũng tàu', '[\"user\"]', NULL, NULL, '$2y$10$zF8PXHrcT5iR3XEpUvvHbOMb1VqmqUGw.WYay2q0xyLeMTSBv4Ele', 'FNiMAbXZp7KrSo6UI1oodlVxqpnp3NLuHJOn4VFzvOte80o5SdPYGxmLLxbk', '2019-06-05 07:06:28', '2019-06-05 07:06:28');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `career`
--
ALTER TABLE `career`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `configuration`
--
ALTER TABLE `configuration`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `job`
--
ALTER TABLE `job`
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
-- AUTO_INCREMENT cho bảng `career`
--
ALTER TABLE `career`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `configuration`
--
ALTER TABLE `configuration`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `job`
--
ALTER TABLE `job`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
