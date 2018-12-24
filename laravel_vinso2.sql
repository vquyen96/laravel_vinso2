-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2018 at 08:59 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_vinso2`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `img` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `content`, `img`, `created_at`, `updated_at`) VALUES
(1, 'WELCOME TO VINSO 1', '<div class=\"\">\r\n<div>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</div>\r\n\r\n<div class=\"welcomeItemTitle\">Unordered &amp; Ordered Lists</div>\r\n\r\n<div class=\"list_vinso\">\r\n<div class=\"list_vinso_item\">\r\n<div class=\"list_vinso_item_icon\"><img alt=\"\" src=\"images/icon.png\" /></div>\r\n\r\n<div class=\"list_vinso_item_content\">Online Courses with full discount systems.</div>\r\n</div>\r\n\r\n<div class=\"list_vinso_item\">\r\n<div class=\"list_vinso_item_icon\"><img alt=\"\" src=\"images/icon.png\" /></div>\r\n\r\n<div class=\"list_vinso_item_content\">Online Courses with full discount systems.</div>\r\n</div>\r\n\r\n<div class=\"list_vinso_item\">\r\n<div class=\"list_vinso_item_icon\"><img alt=\"\" src=\"images/icon.png\" /></div>\r\n\r\n<div class=\"list_vinso_item_content\">Online Courses with full discount systems.</div>\r\n</div>\r\n</div>\r\n</div>', 'img_2018-12-24_1545630005.png', '2018-12-24 05:40:06', '2018-12-24 06:34:03'),
(2, 'SKILL', '<p>Professional Certificate Courses (Online)</p>\r\n\r\n<ul>\r\n	<li>Online certificates can be obtained in a range of specialized areas.</li>\r\n	<li>Online diplomas are awarded for one to two years of study with LMS.</li>\r\n	<li>Online associate degrees usually take approximately two years then.</li>\r\n	<li>Online certificates can be obtained in a range of specialized areas.</li>\r\n	<li>Online diplomas are awarded for one to two years of study with LMS.</li>\r\n</ul>', 'img_2018-12-24_1545632882.png', '2018-12-24 05:43:15', '2018-12-24 06:28:01'),
(3, 'TRAINING', '<p>Professional Certificate Courses (Online)</p>\r\n\r\n<ul>\r\n	<li>Onlineqqq certificates can be obtained in a range of specialized areas.</li>\r\n	<li>qqqq diplomas are awarded for one to two years of study with LMS.</li>\r\n	<li>Online associate degrees usually take approximately two years then.</li>\r\n	<li>qq certificates can be obtained in a range of specialized areas.</li>\r\n	<li>Online diplomas are awarded for one to two years of study with LMS.</li>\r\n</ul>', 'img_2018-12-24_1545632864.png', '2018-12-24 06:26:31', '2018-12-24 06:27:44');

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` tinyint(4) NOT NULL,
  `group_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `group_id_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `site` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `username`, `email`, `img`, `fullname`, `password`, `phone`, `level`, `group_id`, `group_id_en`, `site`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(60, 'admin', NULL, '', 'spadmin', '$2y$10$Xvk5NXjagEqvi0nCqRaeCOp5PE3Yzco0os8DNYQSIjV0gnXisD8uG', '', 1, NULL, '0', 1, 0, NULL, '2018-12-24 06:16:31', '2018-12-24 06:16:31'),
(61, 'admin@cphonevn.com', 'email@email.com', '', 'Chưa có', '$2y$10$dlkpUt8GmM573BbfBejQUO5SxckvaL.AxcZ5XvTQAINiRwKSTT4Ny', '19001001', 4, NULL, '0', 1, 1, NULL, '2018-12-24 07:50:00', '2018-12-24 07:50:00'),
(62, '11111111', 'email@email.com', '', 'Chưa có', '$2y$10$syqyGVqLee31CxrZBg0Ccubq3j5adKIlzpjPreZCWPRMtcKgBBi16', '19001001', 2, '0', '0', 1, 1, NULL, '2018-12-24 07:51:42', '2018-12-24 07:51:42');

-- --------------------------------------------------------

--
-- Table structure for table `adverts`
--

CREATE TABLE `adverts` (
  `ad_id` int(10) UNSIGNED NOT NULL,
  `ad_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ad_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ad_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ad_content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ad_width` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ad_height` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ad_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `ad_view` int(11) NOT NULL DEFAULT '0',
  `ad_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `advert_contacts`
--

CREATE TABLE `advert_contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `advert_orders`
--

CREATE TABLE `advert_orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `no` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `advert_top`
--

CREATE TABLE `advert_top` (
  `adt_id` int(10) UNSIGNED NOT NULL,
  `adt_gr_id` int(10) UNSIGNED NOT NULL,
  `adt_ad_id` int(10) UNSIGNED NOT NULL,
  `adt_location` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `certifications`
--

CREATE TABLE `certifications` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `certifications`
--

INSERT INTO `certifications` (`id`, `title`, `img`, `created_at`, `updated_at`) VALUES
(2, 'Youtube Certified', 'img_2018-12-24_1545634296.png', '2018-12-24 06:51:36', '2018-12-24 07:00:32'),
(3, 'Microsoft Certified', 'img_2018-12-24_1545634316.png', '2018-12-24 06:51:56', '2018-12-24 07:00:45'),
(4, 'Google Certified', 'img_2018-12-24_1545634429.png', '2018-12-24 06:53:49', '2018-12-24 07:00:22');

-- --------------------------------------------------------

--
-- Table structure for table `comment_vn`
--

CREATE TABLE `comment_vn` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT '0',
  `idnew` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `groupid` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `email` varchar(250) CHARACTER SET utf8mb4 DEFAULT NULL,
  `fullname` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `content` varchar(1000) CHARACTER SET utf8mb4 DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  `userid` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `IP` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `emagazines`
--

CREATE TABLE `emagazines` (
  `e_id` int(10) UNSIGNED NOT NULL,
  `e_title` varchar(255) NOT NULL,
  `e_slug` varchar(255) DEFAULT NULL,
  `e_img` varchar(255) NOT NULL,
  `e_summary` varchar(255) NOT NULL,
  `e_title_meta` varchar(255) NOT NULL,
  `e_keyword_meta` varchar(255) DEFAULT NULL,
  `e_folder` varchar(255) DEFAULT NULL,
  `e_detail` varchar(255) NOT NULL,
  `e_view` int(11) NOT NULL DEFAULT '0',
  `e_acc_id` int(10) UNSIGNED NOT NULL,
  `e_hot` tinyint(4) NOT NULL DEFAULT '1',
  `e_status` tinyint(4) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `group_en`
--

CREATE TABLE `group_en` (
  `id` int(11) NOT NULL,
  `parentid` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `summary` varchar(2000) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `idx` int(11) DEFAULT NULL,
  `kind` int(11) DEFAULT NULL,
  `inquiry` int(11) DEFAULT NULL,
  `home` int(11) DEFAULT NULL,
  `members` int(11) DEFAULT NULL,
  `fimages` varchar(255) DEFAULT NULL,
  `keywords` varchar(250) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL,
  `titlemeta` varchar(250) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `shortlink` varchar(100) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `home_index` tinyint(6) DEFAULT NULL,
  `type` tinyint(6) DEFAULT NULL,
  `out_link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `group_news_en`
--

CREATE TABLE `group_news_en` (
  `group_vn_id` int(11) NOT NULL,
  `news_vn_id` int(11) NOT NULL,
  `hot` tinyint(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `group_news_vn`
--

CREATE TABLE `group_news_vn` (
  `group_vn_id` int(11) NOT NULL,
  `news_vn_id` int(11) NOT NULL,
  `hot` tinyint(6) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `group_news_vn`
--

INSERT INTO `group_news_vn` (`group_vn_id`, `news_vn_id`, `hot`) VALUES
(1, 9, 1),
(1, 10, 1),
(1, 11, 1),
(1, 12, 1),
(1, 13, 1),
(1, 14, 1),
(2, 1, 0),
(2, 2, 0),
(2, 3, 1),
(2, 4, 1),
(2, 5, 1),
(3, 6, 1),
(3, 7, 1),
(3, 8, 1),
(4, 15, 0);

-- --------------------------------------------------------

--
-- Table structure for table `group_video_en`
--

CREATE TABLE `group_video_en` (
  `group_vn_id` int(11) NOT NULL,
  `video_vn_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `group_video_vn`
--

CREATE TABLE `group_video_vn` (
  `group_vn_id` int(11) NOT NULL,
  `video_vn_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `group_vn`
--

CREATE TABLE `group_vn` (
  `id` int(11) NOT NULL,
  `parentid` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `summary` varchar(2000) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `idx` int(11) DEFAULT NULL,
  `kind` int(11) DEFAULT NULL,
  `inquiry` int(11) DEFAULT NULL,
  `home` int(11) DEFAULT NULL,
  `members` int(11) DEFAULT NULL,
  `fimages` varchar(255) DEFAULT NULL,
  `keywords` varchar(250) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL,
  `titlemeta` varchar(250) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `shortlink` varchar(100) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `home_index` tinyint(6) DEFAULT NULL,
  `type` tinyint(6) DEFAULT '0',
  `out_link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `group_vn`
--

INSERT INTO `group_vn` (`id`, `parentid`, `title`, `link`, `summary`, `status`, `idx`, `kind`, `inquiry`, `home`, `members`, `fimages`, `keywords`, `description`, `titlemeta`, `created`, `shortlink`, `avatar`, `slug`, `created_at`, `updated_at`, `order`, `home_index`, `type`, `out_link`) VALUES
(1, '0', 'News', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'news', 1545547921, 1545548086, NULL, 0, 0, NULL),
(2, '0', 'Qualiti', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'qualiti', 1545548093, 1545548093, NULL, 0, 0, NULL),
(3, '0', 'Recruiting', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'recruiting', 1545602358, 1545602358, NULL, 1, 0, NULL),
(4, '0', 'Document', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'document', 1545636200, 1545636200, NULL, 1, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `logfilevideo_en`
--

CREATE TABLE `logfilevideo_en` (
  `ID` int(11) NOT NULL,
  `LogId` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `userId` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `TrangthaiID` int(11) DEFAULT NULL,
  `GhiChu` varchar(500) CHARACTER SET utf8mb4 DEFAULT NULL,
  `groupid` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `url_video` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `logfilevideo_vn`
--

CREATE TABLE `logfilevideo_vn` (
  `ID` int(11) NOT NULL,
  `LogId` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `userId` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `TrangthaiID` int(11) DEFAULT NULL,
  `GhiChu` varchar(500) CHARACTER SET utf8mb4 DEFAULT NULL,
  `groupid` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `url_video` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `logfile_en`
--

CREATE TABLE `logfile_en` (
  `ID` int(11) NOT NULL,
  `LogId` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `userId` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Ngaythang` datetime DEFAULT NULL,
  `TrangthaiID` int(11) DEFAULT NULL,
  `GhiChu` varchar(500) CHARACTER SET utf8mb4 DEFAULT NULL,
  `groupid` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `noidung` longtext,
  `created_at` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `comment` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `logfile_vn`
--

CREATE TABLE `logfile_vn` (
  `ID` int(11) NOT NULL,
  `LogId` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `userId` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Ngaythang` datetime DEFAULT NULL,
  `TrangthaiID` int(11) DEFAULT NULL,
  `GhiChu` varchar(500) CHARACTER SET utf8mb4 DEFAULT NULL,
  `groupid` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `noidung` longtext,
  `created_at` int(11) DEFAULT NULL,
  `title` text,
  `comment` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `logfile_vn`
--

INSERT INTO `logfile_vn` (`ID`, `LogId`, `userId`, `Ngaythang`, `TrangthaiID`, `GhiChu`, `groupid`, `noidung`, `created_at`, `title`, `comment`) VALUES
(1, '1', '1', NULL, 1, 'Tạo mới,đăng ngay', '1', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<br />\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<br />\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<br />\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<br />\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<br />\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<br />\r\n&nbsp;</p>', 1545548018, 'Precision Engineering', NULL),
(2, '1', '1', NULL, 1, 'Chỉnh sửa,đăng ngay', '1', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<br />\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<br />\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<br />\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<br />\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<br />\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<br />\r\n&nbsp;</p>', 1545553688, 'Precision Engineering', NULL),
(3, '2', '1', NULL, 1, 'Tạo mới,đăng ngay', '2', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>', 1545553764, 'Project Management', NULL),
(4, '3', '1', NULL, 1, 'Tạo mới,đăng ngay', '2', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>', 1545553800, 'Materials', NULL),
(5, '4', '1', NULL, 1, 'Tạo mới,đăng ngay', '2', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>', 1545553850, 'Rapid Manufacture', NULL),
(6, '4', '1', NULL, 1, 'Chỉnh sửa,đăng ngay', '2', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>', 1545553864, 'Rapid Manufacture', NULL),
(7, '4', '1', NULL, 1, 'Chỉnh sửa,đăng ngay', '2', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>', 1545555086, 'Rapid Manufacture', NULL),
(8, '4', '1', NULL, 1, 'Chỉnh sửa,đăng ngay', '2', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>', 1545556349, 'Rapid Manufacture', NULL),
(9, '3', '1', NULL, 1, 'Chỉnh sửa,đăng ngay', '2', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>', 1545556374, 'Materials', NULL),
(10, '5', '1', NULL, 1, 'Tạo mới,đăng ngay', '2', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s,</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s,</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s,</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s,</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s,</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s,</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s,</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s,</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s,</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s,</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s,</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s,</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s,</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s,</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s,</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s,</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s,</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s,</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s,</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s,</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s,</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s,</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s,</p>', 1545570912, 'ENGINEERING PARTS', NULL),
(11, '1', '1', NULL, 1, 'Chỉnh sửa,đăng ngay', '2', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<br />\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<br />\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<br />\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<br />\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<br />\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<br />\r\n&nbsp;</p>', 1545570925, 'Precision Engineering', NULL),
(12, '6', '1', NULL, 1, 'Tạo mới,đăng ngay', '3', '<p>Nội dung b&agrave;i viếtCNC Turner / Setter / OperatorCNC Turner / Setter / OperatorCNC Turner / Setter / Operator</p>', 1545604456, 'CNC Turner / Setter / Operator', NULL),
(13, '7', '1', NULL, 1, 'Tạo mới,đăng ngay', '3', '<p>Nội dung b&agrave;</p>\r\n\r\n<p>CNC Miller Programmer / Setter / Opearator</p>\r\n\r\n<p>CNC Miller Programmer / Setter / Opearator</p>\r\n\r\n<p>CNC Miller Programmer / Setter / Opearator</p>\r\n\r\n<p>CNC Miller Programmer / Setter / Opearator</p>\r\n\r\n<p>i viết</p>', 1545604477, 'CNC Miller Programmer / Setter / Opearator', NULL),
(14, '8', '1', NULL, 1, 'Tạo mới,đăng ngay', '3', '<p>Nội dung b&agrave;i</p>\r\n\r\n<p>Planning Administrator</p>\r\n\r\n<p>Planning Administrator</p>\r\n\r\n<p>Planning Administrator</p>\r\n\r\n<p>Planning Administrator</p>', 1545604502, 'Planning Administrator', NULL),
(15, '9', '60', NULL, 1, 'Tạo mới,đăng ngay', '1', '<p>Nội dung b&agrave;i viết</p>', 1545636254, 'Metallurgical', NULL),
(16, '10', '60', NULL, 1, 'Tạo mới,đăng ngay', '1', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s</p>', 1545636557, 'Metallurgical', NULL),
(17, '11', '60', NULL, 1, 'Tạo mới,đăng ngay', '1', '<p>Nội dung b&agrave;i viết</p>', 1545636602, 'Metallurgical', NULL),
(18, '11', '60', NULL, 0, 'Gỡ xuống', '1', NULL, 1545636796, 'Metallurgical', NULL),
(19, '11', '60', NULL, 1, 'Đăng lên', '1', NULL, 1545636798, 'Metallurgical', NULL),
(20, '11', '60', NULL, 1, 'Chỉnh sửa,đăng ngay', '1', '<p>Nội dung b&agrave;i viết</p>', 1545636815, 'Metallurgical', NULL),
(21, '12', '60', NULL, 1, 'Tạo mới,đăng ngay', '1', '<p>Nội dung b&agrave;i viết</p>', 1545637045, 'Metallurgical', NULL),
(22, '13', '60', NULL, 1, 'Tạo mới,đăng ngay', '1', '<p>Nội dung b&agrave;i viết</p>', 1545637057, 'Metallurgical', NULL),
(23, '14', '60', NULL, 1, 'Tạo mới,đăng ngay', '1', '<p>Nội dung b&agrave;i viết</p>', 1545637071, 'Metallurgical', NULL),
(24, '15', '60', NULL, 1, 'Tạo mới,đăng ngay', '4', '<p>Nội dung b&agrave;i viết</p>', 1545638158, 'Test111', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `l_cities`
--

CREATE TABLE `l_cities` (
  `matp` varchar(5) CHARACTER SET utf8 NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `type` varchar(30) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `l_districts`
--

CREATE TABLE `l_districts` (
  `maqh` varchar(5) CHARACTER SET utf8 NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `type` varchar(30) CHARACTER SET utf8 NOT NULL,
  `matp` varchar(5) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `l_wards`
--

CREATE TABLE `l_wards` (
  `xaid` varchar(5) CHARACTER SET utf8 NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `type` varchar(30) CHARACTER SET utf8 NOT NULL,
  `maqh` varchar(5) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `magazine_en`
--

CREATE TABLE `magazine_en` (
  `id` int(11) NOT NULL,
  `title` text,
  `slide_show` text,
  `status` tinyint(6) DEFAULT '1',
  `created_at` int(11) DEFAULT NULL,
  `groupid` int(11) DEFAULT NULL,
  `slug` text,
  `seo` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `magazine_news`
--

CREATE TABLE `magazine_news` (
  `m_id` int(10) UNSIGNED NOT NULL,
  `m_title` varchar(255) NOT NULL,
  `m_slug` varchar(255) NOT NULL,
  `m_img` varchar(255) NOT NULL,
  `m_acc_id` int(10) UNSIGNED NOT NULL,
  `m_hot` tinyint(4) NOT NULL,
  `m_status` tinyint(4) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `magazine_vn`
--

CREATE TABLE `magazine_vn` (
  `id` int(11) NOT NULL,
  `title` text,
  `slide_show` text,
  `status` tinyint(6) DEFAULT '1',
  `created_at` int(11) DEFAULT NULL,
  `groupid` int(11) DEFAULT NULL,
  `slug` text,
  `seo` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `menu_top_vn`
--

CREATE TABLE `menu_top_vn` (
  `id` int(11) NOT NULL,
  `group_id` int(11) DEFAULT NULL,
  `order` tinyint(6) DEFAULT NULL COMMENT 'vị trí để sắp xếp'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `menu_video`
--

CREATE TABLE `menu_video` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `seo` text,
  `icon` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT '1000'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2018_12_24_070316_create_abouts_table', 1),
(2, '2018_12_24_070537_create_certifications_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news_en`
--

CREATE TABLE `news_en` (
  `id` int(11) NOT NULL,
  `title` varchar(511) CHARACTER SET utf8mb4 DEFAULT NULL,
  `groupid` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `fimage` varchar(511) CHARACTER SET utf8mb4 DEFAULT NULL,
  `summary` varchar(3000) CHARACTER SET utf8mb4 DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `userid` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `approved_id` int(11) DEFAULT NULL,
  `approved_at` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  `share` int(11) DEFAULT '0',
  `kind` int(11) DEFAULT '0',
  `keyword_meta` varchar(250) CHARACTER SET utf8mb4 DEFAULT NULL,
  `description_meta` varchar(250) CHARACTER SET utf8mb4 DEFAULT NULL,
  `ncount` int(11) DEFAULT '0',
  `titlephu` varchar(511) CHARACTER SET utf8mb4 DEFAULT NULL,
  `soanhtrongbai` int(11) DEFAULT NULL,
  `loaitinbai` int(11) DEFAULT NULL,
  `dinhmucanh` int(11) DEFAULT NULL,
  `dinhmuctin` int(11) DEFAULT NULL,
  `tacgia` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nguontin` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Ghichu` varchar(500) CHARACTER SET utf8mb4 DEFAULT NULL,
  `hothome` int(11) DEFAULT '0',
  `hotgroup` int(11) DEFAULT '0',
  `loaiview` int(11) DEFAULT NULL,
  `url_nguon` varchar(250) CHARACTER SET utf8mb4 DEFAULT NULL,
  `titlemeta` varchar(250) CHARACTER SET utf8mb4 DEFAULT NULL,
  `idlienket` varchar(250) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nConnect` varchar(511) CHARACTER SET utf8mb4 DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `idsukien` int(11) DEFAULT '0',
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `slug` text,
  `release_time` int(11) DEFAULT NULL,
  `hot_main` tinyint(6) DEFAULT NULL,
  `hot_item` tinyint(6) DEFAULT NULL,
  `hot_tiny` tinyint(4) DEFAULT '0',
  `order_main` int(11) DEFAULT NULL,
  `order_item` int(11) DEFAULT NULL,
  `relate` varchar(255) DEFAULT NULL,
  `view` int(11) DEFAULT NULL,
  `return_num` tinyint(4) DEFAULT '0',
  `time_hot_main` int(11) DEFAULT '0',
  `time_hot_item` int(11) DEFAULT '0',
  `time_hot_tiny` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `news_vn`
--

CREATE TABLE `news_vn` (
  `id` int(11) NOT NULL,
  `title` varchar(511) CHARACTER SET utf8mb4 DEFAULT NULL,
  `groupid` int(50) DEFAULT NULL,
  `fimage` varchar(511) CHARACTER SET utf8mb4 DEFAULT NULL,
  `summary` varchar(3000) CHARACTER SET utf8mb4 DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `userid` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `approved_id` int(11) DEFAULT NULL,
  `approved_at` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  `share` int(11) DEFAULT '0',
  `kind` int(11) DEFAULT '0',
  `keyword_meta` varchar(250) CHARACTER SET utf8mb4 DEFAULT NULL,
  `description_meta` varchar(250) CHARACTER SET utf8mb4 DEFAULT NULL,
  `ncount` int(11) DEFAULT '0',
  `titlephu` varchar(511) CHARACTER SET utf8mb4 DEFAULT NULL,
  `soanhtrongbai` int(11) DEFAULT NULL,
  `loaitinbai` int(11) DEFAULT '1' COMMENT '1 : tổng hợp, 2 : tự viết , 3: Tin biên tập, 4: tin copy',
  `dinhmucanh` int(11) DEFAULT NULL COMMENT '1: tổng hợp\r\n2: tự viết',
  `dinhmuctin` int(11) DEFAULT NULL,
  `tacgia` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nguontin` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Ghichu` varchar(500) CHARACTER SET utf8mb4 DEFAULT NULL,
  `hothome` int(11) DEFAULT '0',
  `hotgroup` int(11) DEFAULT '0',
  `loaiview` int(11) DEFAULT NULL,
  `url_nguon` varchar(250) CHARACTER SET utf8mb4 DEFAULT NULL,
  `titlemeta` varchar(250) CHARACTER SET utf8mb4 DEFAULT NULL,
  `idlienket` varchar(250) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nConnect` varchar(511) CHARACTER SET utf8mb4 DEFAULT '',
  `updatetime` datetime DEFAULT NULL,
  `idsukien` int(11) DEFAULT '0',
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `slug` text,
  `release_time` int(11) DEFAULT NULL,
  `hot_main` tinyint(6) DEFAULT '0',
  `hot_item` tinyint(6) DEFAULT '0',
  `hot_tiny` tinyint(4) DEFAULT '0',
  `order_main` int(11) DEFAULT NULL,
  `order_item` int(11) DEFAULT NULL,
  `relate` varchar(255) DEFAULT NULL,
  `view` int(11) DEFAULT NULL,
  `return_num` tinyint(4) DEFAULT '0',
  `time_hot_main` int(11) DEFAULT '0',
  `time_hot_item` int(11) DEFAULT '0',
  `time_hot_tiny` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news_vn`
--

INSERT INTO `news_vn` (`id`, `title`, `groupid`, `fimage`, `summary`, `created`, `userid`, `approved_id`, `approved_at`, `status`, `share`, `kind`, `keyword_meta`, `description_meta`, `ncount`, `titlephu`, `soanhtrongbai`, `loaitinbai`, `dinhmucanh`, `dinhmuctin`, `tacgia`, `nguontin`, `Ghichu`, `hothome`, `hotgroup`, `loaiview`, `url_nguon`, `titlemeta`, `idlienket`, `nConnect`, `updatetime`, `idsukien`, `created_at`, `updated_at`, `slug`, `release_time`, `hot_main`, `hot_item`, `hot_tiny`, `order_main`, `order_item`, `relate`, `view`, `return_num`, `time_hot_main`, `time_hot_item`, `time_hot_tiny`) VALUES
(1, 'Precision Engineering', 2, 'img_2018-12-23_1545548017.png', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', NULL, '1', 1, 1545570925, 1, 0, 0, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, '', NULL, 0, 1545548018, 1545570925, 'precision-engineering', 1545547920, 1, 0, 0, 2, NULL, NULL, NULL, 0, 1552752925, 0, 0),
(2, 'Project Management', 2, 'img_2018-12-23_1545553763.png', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', NULL, '1', 1, 1545553764, 1, 0, 0, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, '', NULL, 0, 1545553764, 1545553763, 'project-management', 1545553680, 1, 0, 0, 3, NULL, NULL, NULL, 0, 2147483647, 0, 0),
(3, 'Materials', 2, 'img_2018-12-23_1545553801.png', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', NULL, '1', 1, 1545556374, 1, 0, 0, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, '', NULL, 0, 1545553800, 1545556374, 'materials', 1545553740, 1, 1, 0, 4, 2, NULL, NULL, 0, 1556352774, 2147483647, 0),
(4, 'Rapid Manufacture', 2, 'img_2018-12-23_1545553851.png', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', NULL, '1', 1, 1545556349, 1, 0, 0, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, '', NULL, 0, 1545553850, 1545556349, 'rapid-manufacture', 1545553800, 1, 1, 0, 5, 1, NULL, NULL, 0, 2147483549, 2147483647, 0),
(5, 'ENGINEERING PARTS', 2, 'img_2018-12-23_1545570912.png', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,', NULL, '1', 1, 1545570912, 1, 0, 0, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, '', NULL, 0, 1545570912, 1545570911, 'engineering-parts', 1545570240, 1, 1, 0, 1, 1, NULL, NULL, 0, 2147483647, 2147483647, 0),
(6, 'CNC Turner / Setter / Operator', 3, NULL, 'CNC Turner / Setter / OperatorCNC Turner / Setter / OperatorCNC Turner / Setter / Operator', NULL, '1', 1, 1545604456, 1, 0, 0, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, '', NULL, 0, 1545604456, 1545604456, 'cnc-turner-setter-operator', 1545604380, 0, 1, 0, NULL, 1, NULL, NULL, 0, 0, 1545777180, 0),
(7, 'CNC Miller Programmer / Setter / Opearator', 3, NULL, 'CNC Miller Programmer / Setter / Opearator\r\nCNC Miller Programmer / Setter / Opearator\r\nCNC Miller Programmer / Setter / Opearator\r\nCNC Miller Programmer / Setter / Opearator', NULL, '1', 1, 1545604477, 1, 0, 0, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, '', NULL, 0, 1545604477, 1545604477, 'cnc-miller-programmer-setter-opearator', 1545604440, 0, 1, 0, NULL, 2, NULL, NULL, 0, 0, 1545777240, 0),
(8, 'Planning Administrator', 3, NULL, 'Planning Administrator\r\nPlanning Administrator\r\nPlanning Administrator\r\nPlanning Administrator', NULL, '1', 1, 1545604502, 1, 0, 0, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, '', NULL, 0, 1545604502, 1545604502, 'planning-administrator', 1545604440, 0, 1, 0, NULL, 3, NULL, NULL, 0, 0, 1545777240, 0),
(9, 'Metallurgical', 1, 'img_2018-12-24_1545636253.png', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', NULL, '60', 60, 1545636254, 1, 0, 0, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, '', NULL, 0, 1545636254, 1545636253, 'metallurgical', 1545636180, 0, 1, 0, 1, 1, NULL, NULL, 0, 1552836180, 2147483647, 0),
(10, 'Metallurgical', 1, 'img_2018-12-24_1545636557.png', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', NULL, '60', 60, 1545636557, 1, 0, 0, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, '', NULL, 0, 1545636557, 1545636556, 'metallurgical', 1545636480, 0, 1, 0, 1, 1, NULL, NULL, 0, 1617636480, 2147483647, 0),
(11, 'Metallurgical', 1, 'img_2018-12-24_1545636815.png', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', NULL, '60', 60, 1545636815, 1, 0, 0, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, '', NULL, 0, 1545636602, 1545636815, 'metallurgical', 1545636540, 0, 1, 0, 1, 1, NULL, NULL, 0, 1545809615, 1545809615, 0),
(12, 'Metallurgical', 1, 'img_2018-12-24_1545637045.png', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', NULL, '60', 60, 1545637045, 1, 0, 0, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, '', NULL, 0, 1545637045, 1545637045, 'metallurgical', 1545636900, 0, 1, 0, 1, 1, NULL, NULL, 0, 1553636100, 2147483647, 0),
(13, 'Metallurgical', 1, 'img_2018-12-24_1545637057.png', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', NULL, '60', 60, 1545637057, 1, 0, 0, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, '', NULL, 0, 1545637057, 1545637057, 'metallurgical', 1545636900, 0, 1, 0, 1, 1, NULL, NULL, 0, 1545809700, 1545809700, 0),
(14, 'Metallurgical', 1, 'img_2018-12-24_1545637071.png', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', NULL, '60', 60, 1545637071, 1, 0, 0, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, '', NULL, 0, 1545637071, 1545637070, 'metallurgical', 1545636900, 0, 1, 0, 1, 1, NULL, NULL, 0, 2147483647, 2147483647, 0),
(15, 'Test111', 4, 'img_2018-12-24_1545638157.png', NULL, NULL, '60', 60, 1545638158, 1, 0, 0, NULL, NULL, 0, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, '', NULL, 0, 1545638158, 1545638157, 'test111', 1545638100, 0, 0, 0, NULL, NULL, NULL, NULL, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `new_news_vn`
--

CREATE TABLE `new_news_vn` (
  `id` int(11) NOT NULL,
  `news_id` int(11) NOT NULL,
  `order` int(11) DEFAULT NULL,
  `status` tinyint(6) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text,
  `payload` text NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `video_en`
--

CREATE TABLE `video_en` (
  `id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 NOT NULL DEFAULT '',
  `filename` varchar(500) CHARACTER SET utf8mb4 NOT NULL DEFAULT '',
  `summary` varchar(500) CHARACTER SET utf8mb4 NOT NULL DEFAULT '',
  `status` int(11) DEFAULT '0',
  `filenameimg` varchar(500) CHARACTER SET utf8mb4 NOT NULL DEFAULT '',
  `datetime` datetime DEFAULT NULL,
  `idx` int(11) DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `noibat` int(11) NOT NULL DEFAULT '0',
  `groupid` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `keyword` varchar(250) CHARACTER SET utf8mb4 DEFAULT NULL,
  `description` varchar(250) CHARACTER SET utf8mb4 DEFAULT NULL,
  `seo_title` varchar(250) CHARACTER SET utf8mb4 DEFAULT NULL,
  `viewer` int(11) DEFAULT '0',
  `release_time` int(11) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `type_link` tinyint(6) DEFAULT NULL COMMENT '1: từ máy\r\n2:youtube',
  `slug` text,
  `userId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `video_vn`
--

CREATE TABLE `video_vn` (
  `id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 NOT NULL DEFAULT '',
  `url_video` varchar(500) CHARACTER SET utf8mb4 NOT NULL DEFAULT '',
  `summary` varchar(500) CHARACTER SET utf8mb4 NOT NULL DEFAULT '',
  `status` int(11) DEFAULT '0',
  `filenameimg` varchar(500) CHARACTER SET utf8mb4 NOT NULL DEFAULT '',
  `datetime` datetime DEFAULT NULL,
  `idx` int(11) DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `noibat` int(11) NOT NULL DEFAULT '0',
  `groupid` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_latvian_ci DEFAULT NULL,
  `keywords` varchar(250) CHARACTER SET utf8mb4 DEFAULT NULL,
  `description` varchar(250) CHARACTER SET utf8mb4 DEFAULT NULL,
  `seo_title` varchar(250) CHARACTER SET utf8mb4 DEFAULT NULL,
  `viewer` int(11) DEFAULT '0',
  `release_time` int(11) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `type_link` tinyint(6) DEFAULT NULL COMMENT '1: từ máy\r\n2:youtube',
  `slug` text,
  `userId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `web_info`
--

CREATE TABLE `web_info` (
  `id` int(11) NOT NULL,
  `key` varchar(255) DEFAULT NULL,
  `value` varchar(255) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `web_info_en`
--

CREATE TABLE `web_info_en` (
  `id` int(11) NOT NULL,
  `info` text,
  `updated_at` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `web_info_vn`
--

CREATE TABLE `web_info_vn` (
  `id` int(11) NOT NULL,
  `info` text,
  `updated_at` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `web_info_vn`
--

INSERT INTO `web_info_vn` (`id`, `info`, `updated_at`, `user_id`) VALUES
(1, '{\"title_web\":\"Vinso\",\"home1\":\"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,\",\"home2\":\"Case Studies\",\"home3\":\"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s\",\"footer_contact0\":\"Contact Details\",\"footer_contact1\":\"No. 1 Le Thanh Tong, May To Ward, Ngo Quyen Dist. Hai Phong\",\"footer_contact2\":\"Tel: (+84) 326 483 884\",\"footer_contact3\":\"Fax: (+84) 326 483 884\",\"footer_contact4\":\"E-mail: info@vinso.vn\",\"foter_mid_title\":\"Our Services\",\"foter_mid_1\":\"Quality\",\"foter_mid_1_link\":null,\"foter_mid_2\":\"Working for shearline\",\"foter_mid_2_link\":null,\"foter_mid_3\":\"Design for manufacture\",\"foter_mid_3_link\":null,\"foter_mid_4\":\"Plant list\",\"foter_mid_4_link\":null,\"footer_recruit_title\":\"Recruiting\",\"footer_bot_1\":\"Copyright \\u00a9 2018 Design By Bach Khoa Plus - All rights reserved\",\"footer_bot_2\":\"Stay Connected\",\"link_fb\":\"fb.com\",\"link_gg\":\"fb.com\",\"link_youtube\":\"fb.com\",\"link_twitter\":\"fb.com\",\"contact_address\":\"No. 1 Le Thanh Tong, May To Ward, Ngo Quyen Dist. Hai Phong\",\"contact_phone\":\"( 84 ) 326 483 884\",\"contact_skype\":\"Tran Anh Design\",\"contact_email\":\"karin.design.dev@gmail.com\",\"contact_web\":\"vinso.vn\",\"mapx\":\"21.0056947\",\"mapy\":\"105.8027139\"}', 1545635571, 60);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adverts`
--
ALTER TABLE `adverts`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `advert_contacts`
--
ALTER TABLE `advert_contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `advert_orders`
--
ALTER TABLE `advert_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `advert_top`
--
ALTER TABLE `advert_top`
  ADD PRIMARY KEY (`adt_id`),
  ADD KEY `advert_top_adt_gr_id_foreign` (`adt_gr_id`),
  ADD KEY `advert_top_adt_ad_id_foreign` (`adt_ad_id`);

--
-- Indexes for table `certifications`
--
ALTER TABLE `certifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment_vn`
--
ALTER TABLE `comment_vn`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emagazines`
--
ALTER TABLE `emagazines`
  ADD PRIMARY KEY (`e_id`),
  ADD KEY `emagazines_e_acc_id_foreign` (`e_acc_id`);

--
-- Indexes for table `group_en`
--
ALTER TABLE `group_en`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `group_news_en`
--
ALTER TABLE `group_news_en`
  ADD PRIMARY KEY (`group_vn_id`,`news_vn_id`),
  ADD KEY `group_vn_id` (`group_vn_id`),
  ADD KEY `news` (`news_vn_id`);

--
-- Indexes for table `group_news_vn`
--
ALTER TABLE `group_news_vn`
  ADD PRIMARY KEY (`group_vn_id`,`news_vn_id`),
  ADD KEY `group_vn_id` (`group_vn_id`),
  ADD KEY `news` (`news_vn_id`);

--
-- Indexes for table `group_video_en`
--
ALTER TABLE `group_video_en`
  ADD PRIMARY KEY (`group_vn_id`,`video_vn_id`);

--
-- Indexes for table `group_video_vn`
--
ALTER TABLE `group_video_vn`
  ADD PRIMARY KEY (`group_vn_id`,`video_vn_id`);

--
-- Indexes for table `group_vn`
--
ALTER TABLE `group_vn`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `logfilevideo_en`
--
ALTER TABLE `logfilevideo_en`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `logfilevideo_vn`
--
ALTER TABLE `logfilevideo_vn`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `logfile_en`
--
ALTER TABLE `logfile_en`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `logfile_vn`
--
ALTER TABLE `logfile_vn`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `l_cities`
--
ALTER TABLE `l_cities`
  ADD PRIMARY KEY (`matp`);

--
-- Indexes for table `l_districts`
--
ALTER TABLE `l_districts`
  ADD PRIMARY KEY (`maqh`);

--
-- Indexes for table `l_wards`
--
ALTER TABLE `l_wards`
  ADD PRIMARY KEY (`xaid`);

--
-- Indexes for table `magazine_en`
--
ALTER TABLE `magazine_en`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `magazine_news`
--
ALTER TABLE `magazine_news`
  ADD PRIMARY KEY (`m_id`),
  ADD KEY `magazine_news_m_acc_id_foreign` (`m_acc_id`);

--
-- Indexes for table `magazine_vn`
--
ALTER TABLE `magazine_vn`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_top_vn`
--
ALTER TABLE `menu_top_vn`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu-top` (`group_id`);

--
-- Indexes for table `menu_video`
--
ALTER TABLE `menu_video`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_en`
--
ALTER TABLE `news_en`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_vn`
--
ALTER TABLE `news_vn`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `new_news_vn`
--
ALTER TABLE `new_news_vn`
  ADD PRIMARY KEY (`id`),
  ADD KEY `new_news` (`news_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD UNIQUE KEY `sessions_id_unique` (`id`);

--
-- Indexes for table `video_en`
--
ALTER TABLE `video_en`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video_vn`
--
ALTER TABLE `video_vn`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `web_info`
--
ALTER TABLE `web_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `web_info_en`
--
ALTER TABLE `web_info_en`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `web_info_vn`
--
ALTER TABLE `web_info_vn`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `adverts`
--
ALTER TABLE `adverts`
  MODIFY `ad_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `advert_contacts`
--
ALTER TABLE `advert_contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `advert_orders`
--
ALTER TABLE `advert_orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `advert_top`
--
ALTER TABLE `advert_top`
  MODIFY `adt_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `certifications`
--
ALTER TABLE `certifications`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comment_vn`
--
ALTER TABLE `comment_vn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emagazines`
--
ALTER TABLE `emagazines`
  MODIFY `e_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `group_en`
--
ALTER TABLE `group_en`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `group_vn`
--
ALTER TABLE `group_vn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `logfilevideo_en`
--
ALTER TABLE `logfilevideo_en`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logfilevideo_vn`
--
ALTER TABLE `logfilevideo_vn`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logfile_en`
--
ALTER TABLE `logfile_en`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logfile_vn`
--
ALTER TABLE `logfile_vn`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `magazine_en`
--
ALTER TABLE `magazine_en`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `magazine_news`
--
ALTER TABLE `magazine_news`
  MODIFY `m_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `magazine_vn`
--
ALTER TABLE `magazine_vn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu_video`
--
ALTER TABLE `menu_video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `news_en`
--
ALTER TABLE `news_en`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news_vn`
--
ALTER TABLE `news_vn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `new_news_vn`
--
ALTER TABLE `new_news_vn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `video_en`
--
ALTER TABLE `video_en`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `video_vn`
--
ALTER TABLE `video_vn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `web_info_en`
--
ALTER TABLE `web_info_en`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `web_info_vn`
--
ALTER TABLE `web_info_vn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `emagazines`
--
ALTER TABLE `emagazines`
  ADD CONSTRAINT `emagazines_e_acc_id_foreign` FOREIGN KEY (`e_acc_id`) REFERENCES `accounts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `group_news_vn`
--
ALTER TABLE `group_news_vn`
  ADD CONSTRAINT `news` FOREIGN KEY (`news_vn_id`) REFERENCES `news_vn` (`id`);

--
-- Constraints for table `magazine_news`
--
ALTER TABLE `magazine_news`
  ADD CONSTRAINT `magazine_news_m_acc_id_foreign` FOREIGN KEY (`m_acc_id`) REFERENCES `accounts` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
