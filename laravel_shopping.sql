-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th12 14, 2020 lúc 05:15 PM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `laravel_shopping`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `parent_id`, `slug`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Điện thoại', 0, 'dien-thoai', '2020-12-10 07:36:02', '2020-12-10 07:36:02', NULL),
(2, 'Laptop', 0, 'laptop', '2020-12-10 07:36:09', '2020-12-10 07:36:09', NULL),
(3, 'Phụ kiện', 0, 'phu-kien', '2020-12-10 07:36:17', '2020-12-10 07:36:17', NULL),
(4, 'Iphone', 1, 'iphone', '2020-12-10 07:37:32', '2020-12-10 07:37:32', NULL),
(5, 'Samsung', 1, 'samsung', '2020-12-10 07:37:41', '2020-12-10 07:37:41', NULL),
(6, 'Oppo', 1, 'oppo', '2020-12-10 07:37:49', '2020-12-10 07:37:49', NULL),
(7, 'Xiaomi', 1, 'xiaomi', '2020-12-10 07:37:59', '2020-12-10 07:37:59', NULL),
(8, 'Realme', 1, 'realme', '2020-12-10 07:38:09', '2020-12-10 07:38:09', NULL),
(9, 'Tai nghe', 0, 'tai-nghe', '2020-12-12 05:59:51', '2020-12-12 05:59:51', NULL),
(10, 'iphone12serie', 4, 'iphone12serie', '2020-12-13 08:00:47', '2020-12-13 08:00:47', NULL),
(11, 'Học tập - Văn phòng', 2, 'hoc-tap-van-phong', '2020-12-13 10:31:51', '2020-12-13 10:31:51', NULL),
(12, 'Đồ họa - Kỹ thuật', 2, 'do-hoa-ky-thuat', '2020-12-13 10:32:14', '2020-12-13 10:32:14', NULL),
(13, 'Laptop  Gamming', 2, 'laptop-gamming', '2020-12-13 10:32:38', '2020-12-13 10:32:50', NULL),
(14, 'Cao cấp - Sang trọng', 2, 'cao-cap-sang-trong', '2020-12-13 10:33:07', '2020-12-13 10:33:07', NULL),
(15, 'Huawei', 1, 'huawei', '2020-12-13 18:46:49', '2020-12-13 18:46:49', NULL),
(16, 'Lenovo', 11, 'lenovo', '2020-12-13 22:04:29', '2020-12-13 22:44:15', '2020-12-13 22:44:15');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `menus`
--

INSERT INTO `menus` (`id`, `name`, `parent_id`, `created_at`, `updated_at`, `slug`, `deleted_at`) VALUES
(1, 'Menu 1', 0, NULL, '2020-12-09 07:00:04', '', '2020-12-09 07:00:04'),
(2, 'Menu 2', 0, NULL, '2020-11-12 05:22:00', '', '2020-11-12 05:22:00'),
(3, 'Menu 3', 0, NULL, '2020-12-09 06:59:41', '', '2020-12-09 06:59:41'),
(4, 'Menu 1.1', 1, NULL, '2020-12-09 07:00:06', 'menu-11', '2020-12-09 07:00:06'),
(5, 'Menu 1.1.1', 4, NULL, '2020-11-04 01:19:12', '', '2020-11-04 01:19:12'),
(6, 'Menu 2.1', 2, NULL, '2020-12-09 07:00:08', '', '2020-12-09 07:00:08'),
(8, 'Menu 3.1', 3, '2020-09-23 20:05:20', '2020-11-12 17:38:08', '', '2020-11-12 17:38:08'),
(9, 'Menu 2.2', 2, '2020-09-23 20:07:41', '2020-12-09 07:00:08', '', '2020-12-09 07:00:08'),
(10, 'menu 4', 0, '2020-09-23 23:17:50', '2020-11-04 01:19:09', 'menu-4', '2020-11-04 01:19:09'),
(11, 'Apple', 0, '2020-12-09 06:59:58', '2020-12-09 07:00:13', 'apple', '2020-12-09 07:00:13'),
(12, 'menu 1', 0, '2020-12-09 07:00:23', '2020-12-09 07:00:23', 'menu-1', NULL),
(13, 'menu 1.1', 12, '2020-12-09 07:00:33', '2020-12-09 07:00:33', 'menu-11', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_08_26_070623_create_categories_table', 1),
(5, '2020_09_23_092848_add_colume_deleted_at_table_categories', 2),
(6, '2020_09_23_171647_create_menus_table', 3),
(7, '2020_09_24_061145_add_colume_slug_to_table_menus', 4),
(8, '2020_11_04_075110_add_colume_soft_delete_to_menus_table', 5),
(13, '2020_11_05_104245_create_products_table', 6),
(14, '2020_11_05_104559_create_product_images_table', 6),
(15, '2020_11_05_104742_create_tags_table', 6),
(16, '2020_11_05_110617_create_product_tags_table', 6),
(17, '2020_11_09_122807_add_colume_product_image_path_to_table_products', 7),
(18, '2020_11_09_131618_add_colume_image_name_to_table_product_images', 8),
(19, '2020_11_12_130742_add_colume_deleted_at_product', 9),
(20, '2020_11_14_035115_create_sliders_table', 10),
(21, '2020_11_14_041529_add_colume_description_table_slider', 11),
(22, '2020_11_14_041919_add_colume_description_table_slider', 12),
(23, '2020_11_15_042658_create_settings_table', 13),
(24, '2020_11_16_083120_add_colume_type_to_table_settings', 14),
(25, '2020_12_08_120451_create_roles_table', 15),
(26, '2020_12_08_120518_create_permissions_table', 15),
(27, '2020_12_08_120757_create_table_user_role', 15),
(28, '2020_12_08_121012_create_table_permission_role', 15),
(29, '2020_12_09_034153_add_parentid_table_permission', 16),
(30, '2020_12_09_070418_add_colume_key_code_permission_table', 17),
(31, '2020_12_12_131029_add_table_trademarks', 18),
(32, '2020_12_12_131430_add_colume_trademark_id_table_product', 19);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `key_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `created_at`, `updated_at`, `parent_id`, `key_code`) VALUES
(1, 'category', 'category', '2020-12-09 06:42:03', '2020-12-09 06:42:03', 0, ''),
(2, 'list category', 'list category', '2020-12-09 06:42:03', '2020-12-09 06:42:03', 1, 'list_category'),
(3, 'add category', 'add category', '2020-12-09 06:42:03', '2020-12-09 06:42:03', 1, 'add_category'),
(4, 'edit category', 'edit category', '2020-12-09 06:42:03', '2020-12-09 06:42:03', 1, 'edit_category'),
(5, 'delete category', 'delete category', '2020-12-09 06:42:03', '2020-12-09 06:42:03', 1, 'delete_category'),
(6, 'product', 'product', '2020-12-09 06:42:18', '2020-12-09 06:42:18', 0, ''),
(7, 'list product', 'list product', '2020-12-09 06:42:18', '2020-12-09 06:42:18', 6, 'list_product'),
(8, 'add product', 'add product', '2020-12-09 06:42:18', '2020-12-09 06:42:18', 6, 'add_product'),
(9, 'edit product', 'edit product', '2020-12-09 06:42:18', '2020-12-09 06:42:18', 6, 'edit_product'),
(10, 'delete product', 'delete product', '2020-12-09 06:42:18', '2020-12-09 06:42:18', 6, 'delete_product'),
(11, 'menu', 'menu', '2020-12-09 06:42:29', '2020-12-09 06:42:29', 0, ''),
(12, 'list menu', 'list menu', '2020-12-09 06:42:29', '2020-12-09 06:42:29', 11, 'list_menu'),
(13, 'add menu', 'add menu', '2020-12-09 06:42:29', '2020-12-09 06:42:29', 11, 'add_menu'),
(14, 'edit menu', 'edit menu', '2020-12-09 06:42:29', '2020-12-09 06:42:29', 11, 'edit_menu'),
(15, 'delete menu', 'delete menu', '2020-12-09 06:42:29', '2020-12-09 06:42:29', 11, 'delete_menu'),
(16, 'slider', 'slider', '2020-12-09 06:42:32', '2020-12-09 06:42:32', 0, ''),
(17, 'list slider', 'list slider', '2020-12-09 06:42:32', '2020-12-09 06:42:32', 16, 'list_slider'),
(18, 'add slider', 'add slider', '2020-12-09 06:42:32', '2020-12-09 06:42:32', 16, 'add_slider'),
(19, 'edit slider', 'edit slider', '2020-12-09 06:42:32', '2020-12-09 06:42:32', 16, 'edit_slider'),
(20, 'delete slider', 'delete slider', '2020-12-09 06:42:32', '2020-12-09 06:42:32', 16, 'delete_slider'),
(21, 'setting', 'setting', '2020-12-09 06:42:36', '2020-12-09 06:42:36', 0, ''),
(22, 'list setting', 'list setting', '2020-12-09 06:42:36', '2020-12-09 06:42:36', 21, 'list_setting'),
(23, 'add setting', 'add setting', '2020-12-09 06:42:36', '2020-12-09 06:42:36', 21, 'add_setting'),
(24, 'edit setting', 'edit setting', '2020-12-09 06:42:36', '2020-12-09 06:42:36', 21, 'edit_setting'),
(25, 'delete setting', 'delete setting', '2020-12-09 06:42:36', '2020-12-09 06:42:36', 21, 'delete_setting'),
(26, 'user', 'user', '2020-12-09 06:42:39', '2020-12-09 06:42:39', 0, ''),
(27, 'list user', 'list user', '2020-12-09 06:42:39', '2020-12-09 06:42:39', 26, 'list_user'),
(28, 'add user', 'add user', '2020-12-09 06:42:39', '2020-12-09 06:42:39', 26, 'add_user'),
(29, 'edit user', 'edit user', '2020-12-09 06:42:39', '2020-12-09 06:42:39', 26, 'edit_user'),
(30, 'delete user', 'delete user', '2020-12-09 06:42:39', '2020-12-09 06:42:39', 26, 'delete_user'),
(31, 'role', 'role', '2020-12-09 06:42:42', '2020-12-09 06:42:42', 0, ''),
(32, 'list role', 'list role', '2020-12-09 06:42:42', '2020-12-09 06:42:42', 31, 'list_role'),
(33, 'add role', 'add role', '2020-12-09 06:42:42', '2020-12-09 06:42:42', 31, 'add_role'),
(34, 'edit role', 'edit role', '2020-12-09 06:42:42', '2020-12-09 06:42:42', 31, 'edit_role'),
(35, 'delete role', 'delete role', '2020-12-09 06:42:42', '2020-12-09 06:42:42', 31, 'delete_role'),
(36, 'trademark', 'trademark', '2020-12-12 06:48:21', '2020-12-12 06:48:21', 0, ''),
(37, 'list trademark', 'list trademark', '2020-12-12 06:48:21', '2020-12-12 06:48:21', 36, 'list_trademark'),
(38, 'add trademark', 'add trademark', '2020-12-12 06:48:21', '2020-12-12 06:48:21', 36, 'add_trademark'),
(39, 'edit trademark', 'edit trademark', '2020-12-12 06:48:21', '2020-12-12 06:48:21', 36, 'edit_trademark'),
(40, 'delete trademark', 'delete trademark', '2020-12-12 06:48:21', '2020-12-12 06:48:21', 36, 'delete_trademark');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `permission_role`
--

CREATE TABLE `permission_role` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `permission_role`
--

INSERT INTO `permission_role` (`id`, `role_id`, `permission_id`, `created_at`, `updated_at`) VALUES
(3, 1, 12, NULL, NULL),
(4, 1, 17, NULL, NULL),
(5, 1, 22, NULL, NULL),
(6, 1, 27, NULL, NULL),
(7, 1, 28, NULL, NULL),
(8, 1, 29, NULL, NULL),
(9, 1, 30, NULL, NULL),
(10, 2, 2, NULL, NULL),
(11, 2, 3, NULL, NULL),
(12, 2, 4, NULL, NULL),
(13, 2, 5, NULL, NULL),
(30, 3, 2, NULL, NULL),
(31, 3, 3, NULL, NULL),
(32, 3, 4, NULL, NULL),
(33, 3, 5, NULL, NULL),
(34, 3, 7, NULL, NULL),
(35, 3, 8, NULL, NULL),
(36, 3, 9, NULL, NULL),
(37, 3, 10, NULL, NULL),
(38, 3, 12, NULL, NULL),
(39, 3, 13, NULL, NULL),
(40, 3, 14, NULL, NULL),
(41, 3, 15, NULL, NULL),
(42, 3, 17, NULL, NULL),
(43, 3, 18, NULL, NULL),
(44, 3, 19, NULL, NULL),
(45, 3, 20, NULL, NULL),
(46, 3, 22, NULL, NULL),
(47, 3, 23, NULL, NULL),
(48, 3, 24, NULL, NULL),
(49, 3, 25, NULL, NULL),
(54, 3, 27, NULL, NULL),
(55, 3, 28, NULL, NULL),
(56, 3, 29, NULL, NULL),
(57, 3, 30, NULL, NULL),
(58, 2, 12, NULL, NULL),
(59, 2, 13, NULL, NULL),
(60, 2, 14, NULL, NULL),
(61, 2, 15, NULL, NULL),
(62, 3, 32, NULL, NULL),
(63, 3, 33, NULL, NULL),
(64, 3, 34, NULL, NULL),
(65, 3, 35, NULL, NULL),
(69, 1, 32, NULL, NULL),
(73, 1, 7, NULL, NULL),
(75, 2, 32, NULL, NULL),
(76, 2, 33, NULL, NULL),
(77, 2, 34, NULL, NULL),
(78, 2, 35, NULL, NULL),
(79, 1, 33, NULL, NULL),
(80, 1, 34, NULL, NULL),
(81, 1, 35, NULL, NULL),
(82, 1, 2, NULL, NULL),
(84, 1, 4, NULL, NULL),
(85, 1, 5, NULL, NULL),
(87, 1, 9, NULL, NULL),
(88, 1, 10, NULL, NULL),
(90, 1, 14, NULL, NULL),
(91, 1, 15, NULL, NULL),
(92, 1, 18, NULL, NULL),
(93, 1, 19, NULL, NULL),
(94, 1, 20, NULL, NULL),
(95, 1, 23, NULL, NULL),
(96, 1, 24, NULL, NULL),
(97, 1, 25, NULL, NULL),
(98, 1, 3, NULL, NULL),
(99, 1, 8, NULL, NULL),
(100, 1, 13, NULL, NULL),
(101, 1, 37, NULL, NULL),
(102, 1, 38, NULL, NULL),
(103, 1, 39, NULL, NULL),
(104, 1, 40, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `product_image_path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `trademark_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `desc`, `price`, `slug`, `product_image`, `content`, `user_id`, `category_id`, `created_at`, `updated_at`, `product_image_path`, `deleted_at`, `trademark_id`) VALUES
(1, 'iPhone 12 mini 64GB', 'Điện thoại iPhone 12 mini 64GB', '20990000', 'iphone-12-mini-64gb', 'iphone-12-xanh-duong-new-600x600-200x200.jpg', '<h3>Thiết kế sang trọng, cao cấp</h3>\r\n\r\n<p>Điểm nhấn đầu ti&ecirc;n phải kể đến ở d&ograve;ng m&aacute;y n&agrave;y ch&iacute;nh l&agrave; viền m&aacute;y kh&ocirc;ng c&ograve;n được thiết kế bo cong c&aacute;c cạnh, m&agrave; thay v&agrave;o đ&oacute; l&agrave; phần cạnh m&aacute;y được v&aacute;t phẳng v&ocirc; c&ugrave;ng mạnh mẽ v&agrave; c&aacute; t&iacute;nh.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/225380/iphone-12-mini-064320-074300.jpg\" onclick=\"return false;\"><img alt=\"iPhone 12 Mini 64 GB | Thiết kế sang trọng, tỉ mỉ\" src=\"https://cdn.tgdd.vn/Products/Images/42/225380/iphone-12-mini-064320-074300.jpg\" /></a></p>\r\n\r\n<p>Lần đầu ti&ecirc;n&nbsp;<a href=\"https://www.thegioididong.com/apple\" target=\"_blank\">Apple</a>&nbsp;sử dụng khung nh&ocirc;m cao cấp trong ng&agrave;nh h&agrave;ng kh&ocirc;ng vũ trụ tr&ecirc;n iPhone 12 Mini đem đến cho người d&ugrave;ng thiết kế cứng c&aacute;p nhưng trọng lượng kh&ocirc;ng qu&aacute; nặng.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/225380/iphone-12-mini-065020-075027.jpg\" onclick=\"return false;\"><img alt=\"iPhone 12 Mini 64GB | Khung nhôm cao cấp từ ngành hàng không\" src=\"https://cdn.tgdd.vn/Products/Images/42/225380/iphone-12-mini-065020-075027.jpg\" /></a></p>\r\n\r\n<p>M&aacute;y nổi bật với hệ thống camera h&igrave;nh vu&ocirc;ng độc đ&aacute;o, kết hợp c&ugrave;ng mặt lưng bằng k&iacute;nh b&oacute;ng bẩy cho cảm gi&aacute;c cầm nắm v&ocirc; c&ugrave;ng th&iacute;ch.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/225380/iphone-12-mini-064320-074303.jpg\" onclick=\"return false;\"><img alt=\"iPhone 12 Mini 64GB | Mặt lưng bóng bẩy, nhiều màu sắc chọn lựa\" src=\"https://cdn.tgdd.vn/Products/Images/42/225380/iphone-12-mini-064320-074303.jpg\" /></a></p>\r\n\r\n<p>Ngo&agrave;i ra, iPhone 12 Mini cũng đem tới cho người d&ugrave;ng nhiều m&agrave;u sắc cho bạn tha hồ lựa chọn. Đặc biệt, Apple vừa bổ sung m&agrave;u xanh dương vốn tươi tắn nhẹ nh&agrave;ng nổi bật để l&ocirc;i k&eacute;o sự ch&uacute; &yacute;, l&agrave; một sự lựa chọn mới mẻ ấn tượng ngay từ c&aacute;i nh&igrave;n đầu ti&ecirc;n.&nbsp;</p>\r\n\r\n<h3>M&agrave;n h&igrave;nh OLED Super Retina XDR si&ecirc;u sắc n&eacute;t</h3>\r\n\r\n<p>Ph&iacute;a trước vẫn l&agrave; m&agrave;n h&igrave;nh kiểu d&aacute;ng tai thỏ quen thuộc, với phần viền m&agrave;n h&igrave;nh được tinh gọn hơn một c&aacute;ch đ&aacute;ng kể mang đến cảm gi&aacute;c m&agrave;n h&igrave;nh lớn hơn d&ugrave; iPhone 12 Mini c&oacute; k&iacute;ch cỡ m&agrave;n h&igrave;nh chỉ 5.4 inch.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/225380/iphone-12-mini-064220-074238.jpg\" onclick=\"return false;\"><img alt=\"iPhone 12 Mini 64GB | Màn hình tinh gọn kiểu dáng tai thỏ quen thuộc\" src=\"https://cdn.tgdd.vn/Products/Images/42/225380/iphone-12-mini-064220-074238.jpg\" /></a></p>\r\n\r\n<p>M&agrave;n h&igrave;nh k&iacute;ch cỡ 5.4 inch l&agrave; điểm thuận lợi bởi m&aacute;y kh&aacute; nhỏ gọn, c&oacute; thể dễ d&agrave;ng đặt trong t&uacute;i &aacute;o, quần hơn so với 6.1 inch tr&ecirc;n điện thoại&nbsp;<a href=\"https://www.thegioididong.com/dtdd/iphone-12-pro\" target=\"_blank\">iPhone 12 Pro</a>&nbsp;hay 6.7 inch tr&ecirc;n&nbsp;<a href=\"https://www.thegioididong.com/dtdd/iphone-12-pro-max\" target=\"_blank\">iPhone 12 Pro Max</a>.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/225380/iphone-12-mini-064220-074218.jpg\" onclick=\"return false;\"><img alt=\"iPhone 12 Mini 64GB | Màn hình OLED Super Retina XDR tràn viền độ phân giải 1080 x 2340 Pixels\" src=\"https://cdn.tgdd.vn/Products/Images/42/225380/iphone-12-mini-064220-074218.jpg\" /></a></p>\r\n\r\n<p>M&agrave;n h&igrave;nh của iPhone 12 Mini sử dụng tấm OLED Super Retina XDR tr&agrave;n viền c&oacute; độ ph&acirc;n giải Full HD+ (1080 x 2340 Pixels), từng chi tiết chuyển động tr&ecirc;n m&agrave;n h&igrave;nh đều hiện l&ecirc;n r&otilde; n&eacute;t, tươi s&aacute;ng v&agrave; kh&ocirc;ng gặp phải t&igrave;nh trạng nh&ograve;e m&agrave;u sắc được thể hiện trọn vẹn hơn bao giờ hết.</p>\r\n\r\n<p>Hơn nữa, Apple c&ograve;n trang bị mặt k&iacute;nh Ceramic Shield vật liệu kết hợp giữa thủy tinh v&agrave; gốm cao cấp với khả năng chịu va đập gấp 4 lần so với c&aacute;c đời trước, bảo vệ m&aacute;y một c&aacute;ch tối đa, c&ugrave;ng với đ&oacute; l&agrave; khả năng&nbsp;<a href=\"https://www.thegioididong.com/dtdd-chong-nuoc-bui\" target=\"_blank\">kh&aacute;ng nước</a>&nbsp;chuẩn IP68.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/225380/iphone-12-mini-064220-074255.jpg\" onclick=\"return false;\"><img alt=\"iPhone 12 Mini 64GB | Hỗ trợ khả năng kháng nước chuẩn IP68\" src=\"https://cdn.tgdd.vn/Products/Images/42/225380/iphone-12-mini-064220-074255.jpg\" /></a></p>\r\n\r\n<h3>Camera k&eacute;p th&aacute;ch thức mọi giới hạn ban đ&ecirc;m</h3>\r\n\r\n<p>Camera của điện thoại iPhone 12 Mini với camera k&eacute;p 12 MP nhờ đ&oacute; h&igrave;nh ảnh sẽ được ghi lại một c&aacute;ch ch&acirc;n thực, r&otilde; n&eacute;t. Camera ch&iacute;nh 12 MP với khẩu độ lớn f/1.6 gi&uacute;p tăng 27% khả năng thu s&aacute;ng. V&igrave; vậy, ngay cả trong b&oacute;ng tối, h&igrave;nh chụp, video của bạn vẫn cho độ chi tiết v&agrave; m&agrave;u sắc tuyệt vời.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/225380/iphone-12-mini-064220-074251.jpg\" onclick=\"return false;\"><img alt=\"iPhone 12 Mini 64GB | Camera chụp đêm rõ nét, màu sắc tuyệt vời\" src=\"https://cdn.tgdd.vn/Products/Images/42/225380/iphone-12-mini-064220-074251.jpg\" /></a></p>\r\n\r\n<p>Đồng thời, bạn c&ograve;n c&oacute; thể quay video chất lượng 4K HDR c&ugrave;ng c&ocirc;ng nghệ Dolby Vision tr&ecirc;n iPhone 12 Mini với chất lượng, m&agrave;u sắc v&agrave; chi tiết được thể hiện trọn vẹn hơn bao giờ hết.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/225380/iphone-12-mini-064220-074230.jpg\" onclick=\"return false;\"><img alt=\"iPhone 12 Mini 64GB | Quay video chất lượng 4K HDR cùng công nghệ Dolby Vision\" src=\"https://cdn.tgdd.vn/Products/Images/42/225380/iphone-12-mini-064220-074230.jpg\" /></a></p>\r\n\r\n<p>Ở ph&acirc;̀n notch mặt trước của điện thoại iPhone 12 còn có camera selfie đ&ocirc;̣ ph&acirc;n giải 12 MP. Tương tự như&nbsp;<a href=\"https://www.thegioididong.com/dtdd/iphone-11\">iPhone 11</a>, camera selfie của&nbsp;<a href=\"https://www.thegioididong.com/dtdd-apple-iphone\" target=\"_blank\">iPhone</a>&nbsp;có th&ecirc;m tính năng gyro-EIS và cảm bi&ecirc;́n đo chi&ecirc;̀u s&acirc;u sinh trắc học SL 3D hi&ecirc;̣n đại, mang đ&ecirc;́n ch&acirc;́t lượng hình ảnh rõ nét v&agrave; hoàn mỹ.</p>\r\n\r\n<h3>Vi xử l&yacute; Apple A14 khẳng định sức mạnh dẫn đầu</h3>\r\n\r\n<p>iPhone 12 Mini cũng tương tự c&aacute;c phi&ecirc;n bản iPhone 12 kh&aacute;c khi m&aacute;y được trang bị con chip Apple A14 cho khả năng xử l&yacute; nhanh ch&oacute;ng mượt m&agrave;.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/225380/iphone-12-mini-064220-074243.jpg\" onclick=\"return false;\"><img alt=\"iPhone 12 Mini 64GB | Chíp xử lí A14 mượt mà\" src=\"https://cdn.tgdd.vn/Products/Images/42/225380/iphone-12-mini-064220-074243.jpg\" /></a></p>\r\n\r\n<p>A14 Bionic l&agrave; chip xử l&yacute; được sản xuất tr&ecirc;n quy tr&igrave;nh 5 nm, cung cấp tốc độ tải nhanh hơn, khả năng học hỏi AI th&ocirc;ng minh hơn sẵn s&agrave;ng phục vụ người d&ugrave;ng trong nhiều năm tới.</p>\r\n\r\n<p>iPhone 12 Mini được trang bị dung lượng&nbsp;<a href=\"https://www.thegioididong.com/dtdd-ram-4-den-6gb\" target=\"_blank\">RAM 4 GB</a>&nbsp;v&agrave;<a href=\"https://www.thegioididong.com/dtdd-rom-32-den-64gb\" target=\"_blank\">&nbsp;bộ nhớ trong 64 GB</a>&nbsp;đủ khả năng để người d&ugrave;ng lưu trữ thả ga v&agrave; tốc độ giải quyết thao t&aacute;c nhanh ch&oacute;ng.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/225380/iphone-12-mini-064220-074234.jpg\" onclick=\"return false;\"><img alt=\"iPhone 12 Mini 64GB | RAM 4 GB và bộ nhớ trong 64 GB\" src=\"https://cdn.tgdd.vn/Products/Images/42/225380/iphone-12-mini-064220-074234.jpg\" /></a></p>\r\n\r\n<p>Đặc biệt, iPhone 12 Mini ch&iacute;nh l&agrave; thế hệ iPhone đầu ti&ecirc;n trang bị 5G. Giờ đ&acirc;y, những bộ phim chất lượng cao hay c&aacute;c ứng dụng nặng bạn y&ecirc;u th&iacute;ch sẽ được tải xong trong chớp mắt.</p>\r\n\r\n<p>Việc gửi c&aacute;c tệp lớn, đăng tải h&igrave;nh ảnh, livestream hay ph&aacute;t trực tiếp video chất lượng cao được ho&agrave;n th&agrave;nh nhanh v&agrave; tiện lợi hơn bao giờ hết.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/225380/iphone-12-mini-064320-074325.jpg\" onclick=\"return false;\"><img alt=\"iPhone 12 Mini 64GB | Thế hệ iPhone đầu tiên trang bị 5G\" src=\"https://cdn.tgdd.vn/Products/Images/42/225380/iphone-12-mini-064320-074325.jpg\" /></a></p>\r\n\r\n<p>Ngo&agrave;i ra, Apple đ&atilde; ph&aacute;t triển chế độ Smart Data, c&oacute; chức năng chuyển đổi qua lại giữa 4G v&agrave; 5G khi chạy c&aacute;c ứng dụng nhằm tiết kiệm pin cho m&aacute;y một c&aacute;ch tối đa, n&acirc;ng cao trải nghiệm sử dụng m&aacute;y cho người d&ugrave;ng.</p>\r\n\r\n<h3>Hỗ trợ sạc nhanh 20 W</h3>\r\n\r\n<p>Chiếc điện thoại iPhone 12 Mini n&agrave;y c&oacute; dung lượng pin tuy kh&ocirc;ng thuộc h&agrave;ng &ldquo;khủng&rdquo; nhưng vẫn cho thời lượng sử dụng l&ecirc;n đến 50 giờ nghe nhạc.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/225380/iphone-12-mini-064320-074308.jpg\" onclick=\"return false;\"><img alt=\"iPhone 12 Mini 64GB | Pin tương đối hời lượng sử dụng lên đến 17 giờ xem video, 50 giờ nghe nhạc\" src=\"https://cdn.tgdd.vn/Products/Images/42/225380/iphone-12-mini-064320-074308.jpg\" /></a></p>\r\n\r\n<p>Ngo&agrave;i ra, iPhone 12 Mini c&ograve;n được trang bị t&iacute;nh năng&nbsp;<a href=\"https://www.thegioididong.com/dtdd-sac-pin-nhanh\" target=\"_blank\">sạc pin nhanh</a>&nbsp;20 W, người d&ugrave;ng c&oacute; thể nhanh ch&oacute;ng sạc đầy chiếc điện thoại của m&igrave;nh, để tiếp tục c&ocirc;ng việc m&agrave; kh&ocirc;ng bị gi&aacute;n đoạn qu&aacute; l&acirc;u.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/225380/iphone-12-mini-064220-074247.jpg\" onclick=\"return false;\"><img alt=\"iPhone 12 Mini 64GB | Trang bị tính năng sạc pin nhanh 20 W\" src=\"https://cdn.tgdd.vn/Products/Images/42/225380/iphone-12-mini-064220-074247.jpg\" /></a></p>\r\n\r\n<p>Với sạc nhanh 20 W, bạn sẽ c&oacute; ngay 50% pin chỉ trong 30 phút sạc. iPhone 12 Series cũng c&oacute; th&ecirc;m t&iacute;nh năng&nbsp;<a href=\"https://www.thegioididong.com/dtdd-sac-khong-day\" target=\"_blank\">sạc kh&ocirc;ng d&acirc;y</a>&nbsp;Qi v&agrave; MagSafe, cho trải nghiệm sạc kh&ocirc;ng d&acirc;y cực kỳ hữu ích v&agrave; tiện lợi.</p>\r\n\r\n<p>T&oacute;m lại, iPhone 12 phi&ecirc;n bản mini l&agrave; một trong những phi&ecirc;n bản điện thoại si&ecirc;u phẩm của Apple với nhiều đột ph&aacute; về c&ocirc;ng nghệ cũng như hiệu năng hứa hẹn sẽ l&agrave; mẫu điện thoại th&agrave;nh c&ocirc;ng nhất của Apple trong năm 2020.</p>', 1, 10, '2020-12-10 09:05:56', '2020-12-13 08:11:00', '/storage/product/S6XKSnANLhiLmw6Sw6Ph.jpg', NULL, 1),
(2, 'iPhone 12 Pro Max 512GB', 'Điện thoại iPhone 12 Pro Max 512GB', '42990000', 'iphone-12-pro-max-512gb', 'iphone-11-pro-max-512gb-gold-600x600.jpg', '<h3><a href=\"https://www.thegioididong.com/dtdd/iphone-12-pro-max-512gb\" target=\"_blank\">iPhone 12 Pro Max 512GB</a>&nbsp;- đẳng cấp từ t&ecirc;n gọi đến từng chi tiết. Ngay từ khi chỉ l&agrave; tin đồn th&igrave; chiếc&nbsp;<a href=\"https://www.thegioididong.com/dtdd\" target=\"_blank\">smartphone</a>&nbsp;n&agrave;y đ&atilde; l&agrave;m đứng ngồi kh&ocirc;ng y&ecirc;n bao &ldquo;fan cứng&rdquo; nh&agrave;&nbsp;<a href=\"https://www.thegioididong.com/apple\" target=\"_blank\">Apple</a>, với những n&acirc;ng cấp v&ocirc; c&ugrave;ng nổi bật hứa hẹn sẽ mang đến những trải nghiệm tốt nhất về mọi mặt m&agrave; chưa một chiếc&nbsp;<a href=\"https://www.thegioididong.com/dtdd-apple-iphone\" target=\"_blank\">iPhone</a>&nbsp;tiền nhiệm n&agrave;o c&oacute; được.</h3>\r\n\r\n<h3>Thu h&uacute;t từ c&aacute;i nh&igrave;n đầu ti&ecirc;n</h3>\r\n\r\n<p>Quay trở lại đầy ho&agrave;i niệm với thiết kế phẳng, vu&ocirc;ng vức tương tự&nbsp;<a href=\"https://www.thegioididong.com/dtdd/iphone-4-8gb\" target=\"_blank\">iPhone 4</a>&nbsp;nhưng kh&ocirc;ng hề cho cảm gi&aacute;c lỗi thời m&agrave; ho&agrave;n to&agrave;n sang trọng với thiết kế tinh tế v&agrave; được cấu tạo từ những vật liệu cao cấp hơn.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/228744/iphone-12-pro-max-512gb-045620-025601.jpg\" onclick=\"return false;\"><img alt=\"Trở lại kiểu thiết kế vuông vức từng có trên iPhone 4 | iPhone 12 Pro Max\" src=\"https://cdn.tgdd.vn/Products/Images/42/228744/iphone-12-pro-max-512gb-045620-025601.jpg\" /></a></p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/dtdd/iphone-12-pro-max\" target=\"_blank\">iPhone 12 Pro Max</a>&nbsp;được chế t&aacute;c từ mặt k&iacute;nh cường lực Ceramic Shield c&oacute; độ bền gấp 4 lần iPhone tiền nhiệm, phần khung cấu tạo từ th&eacute;p kh&ocirc;ng gỉ cực kỳ chắc chắn. Mang lại khả năng chống trầy, chống va đập tốt hơn.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/228744/iphone-12-pro-max-512gb-122620-042638.jpg\" onclick=\"return false;\"><img alt=\"Mặt kính Ceramic Shield | iPhone 12 Pro Max\" src=\"https://cdn.tgdd.vn/Products/Images/42/228744/iphone-12-pro-max-512gb-122620-042638.jpg\" /></a></p>\r\n\r\n<p>Xem th&ecirc;m:&nbsp;<a href=\"https://www.thegioididong.com/hoi-dap/mat-kinh-ceramic-shield-tren-iphone-12-la-gi-co-xin-so-nhu-1298900\" target=\"_blank\">Mặt k&iacute;nh Ceramic Shield tr&ecirc;n iPhone l&agrave; g&igrave;? C&oacute; xịn s&ograve; như quảng c&aacute;o?</a></p>\r\n\r\n<h3>Super Retina XDR - mang đến trải nghiệm m&agrave;n h&igrave;nh ch&acirc;n thực</h3>\r\n\r\n<p>Sau những ph&agrave;n n&agrave;n về phần viền m&agrave;n h&igrave;nh của&nbsp;<a href=\"https://www.thegioididong.com/dtdd/iphone-11\" target=\"_blank\">iPhone 11</a>&nbsp;series th&igrave; nay chiếc iPhone 12 Pro Max 512GB đ&atilde; được cải thiện triệt để với k&iacute;ch thước m&agrave;n h&igrave;nh 6.7 inch, tỉ lệ m&agrave;n h&igrave;nh so với th&acirc;n m&aacute;y tương đương 87.4% tăng tối đa diện t&iacute;ch hiển thị.</p>\r\n\r\n<p>C&ocirc;ng nghệ m&agrave;n h&igrave;nh Super Retina XDR mang đến trải nghiệm m&agrave;n h&igrave;nh ch&acirc;n thực từng chi tiết. Nhờ t&iacute;nh năng True Tone tự động điều chỉnh cho độ ch&iacute;nh x&aacute;c m&agrave;u sắc cao, &aacute;nh s&aacute;ng h&agrave;i h&ograve;a.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/228744/iphone-12-pro-max-512gb-122720-042755.jpg\" onclick=\"return false;\"><img alt=\"Công nghệ màn hình Super Retina XDR OLED mang đến trải nghiệm hoàn hảo | iPhone 12 Pro Max\" src=\"https://cdn.tgdd.vn/Products/Images/42/228744/iphone-12-pro-max-512gb-122720-042755.jpg\" /></a></p>\r\n\r\n<p>Độ s&aacute;ng tối đa l&ecirc;n đến 1200 nits (HDR), hỗ trợ HDR 10, dải m&agrave;u P3 chuẩn điện ảnh đảm bảo đ&acirc;y l&agrave; c&ocirc;ng nghệ m&agrave;n h&igrave;nh tốt nhất từ trước đến nay của nh&agrave; Apple, đ&aacute;p ứng nhu cầu giải tr&iacute; ng&agrave;y c&agrave;ng thiết yếu của người d&ugrave;ng smartphone.</p>\r\n\r\n<h3>Hệ thống camera được n&acirc;ng cấp mạnh mẽ</h3>\r\n\r\n<p>iPhone 12 Pro Max được trang bị bộ 3 camera chuy&ecirc;n nghiệp với độ ph&acirc;n giải đều bằng 12 MP, trong đ&oacute; gồm một cảm biến ch&iacute;nh l&agrave;&nbsp;<a href=\"https://www.thegioididong.com/dtdd-camera-goc-rong\" target=\"_blank\">camera g&oacute;c rộng</a>, một camera g&oacute;c si&ecirc;u rộng 120 độ v&agrave; một camera chụp x&oacute;a ph&ocirc;ng. Ngo&agrave;i ra, 12 Pro Max c&ograve;n hỗ trợ một cảm biến LiDAR gi&uacute;p việc lấy n&eacute;t trong điều kiện thiếu s&aacute;ng nhanh hơn gấp 6 lần.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/228744/iphone-12-pro-max-512gb-040920-030921.jpg\" onclick=\"return false;\"><img alt=\"Bộ 3 camera chất lượng | iPhone 12 Pro Max\" src=\"https://cdn.tgdd.vn/Products/Images/42/228744/iphone-12-pro-max-512gb-040920-030921.jpg\" /></a></p>\r\n\r\n<p>iPhone 12 Pro Max c&oacute; cảm biến lớn hơn gi&uacute;p thu s&aacute;ng tốt hơn 27% v&agrave; c&oacute; c&ocirc;ng nghệ chống rung ti&ecirc;n tiến. Dựa v&agrave;o c&aacute;c yếu tố tr&ecirc;n, iPhone 12 Pro Max c&oacute; thể chụp những bức ảnh chất lượng, đầy m&agrave;u sắc, đủ chi tiết, d&ugrave; trong m&ocirc;i trường thiếu s&aacute;ng.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/228744/iphone-12-pro-max-512gb-045920-025933.jpg\" onclick=\"return false;\"><img alt=\"Cụm camera chụp ảnh sắc nét, chi tiết | iPhone 12 Pro Max\" src=\"https://cdn.tgdd.vn/Products/Images/42/228744/iphone-12-pro-max-512gb-045920-025933.jpg\" /></a></p>\r\n\r\n<p>Tất cả mang đến những thước ảnh tự nhi&ecirc;n ho&agrave;n hảo như c&aacute;i nh&igrave;n trực tiếp từ đ&ocirc;i mắt của bạn.</p>\r\n\r\n<p>Camera trước cũng c&oacute; độ ph&acirc;n giải 12 MP hỗ trợ đầy đủ c&aacute;c t&iacute;nh năng như chế độ chụp ch&acirc;n dung với hiệu ứng bokeh, Memoji, Night Mode, Deep Fusion,.. v&agrave; c&ograve;n nhiều t&iacute;nh năng kh&aacute;c.</p>\r\n\r\n<p>Cảm biến LiDAR đo đạc v&agrave; qu&eacute;t hiển thị sơ đồ 3D, l&agrave; một ưu điểm lớn cho người d&ugrave;ng l&agrave; &ldquo;d&acirc;n&rdquo; thiết kế.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/228744/iphone-12-pro-max-512gb-040720-030754.jpg\" onclick=\"return false;\"><img alt=\"Cảm biến LiDAR quét chính xác | iPhone 12 Pro Max\" src=\"https://cdn.tgdd.vn/Products/Images/42/228744/iphone-12-pro-max-512gb-040720-030754.jpg\" /></a></p>\r\n\r\n<h3>Chuẩn kết nối 5G - nhanh hơn, th&ocirc;ng minh hơn</h3>\r\n\r\n<p>Cuối c&ugrave;ng th&igrave; nh&agrave; T&aacute;o cũng đ&atilde; đưa c&ocirc;ng nghệ 5G v&agrave;o iPhone 12 series, b&ecirc;n cạnh tốc độ thực th&igrave; những &iacute;ch lợi kh&aacute;c của 5G sẽ l&agrave; độ trễ thấp v&agrave; c&ocirc;ng suất lớn hơn.</p>\r\n\r\n<p>C&ocirc;ng nghệ n&agrave;y sẽ gi&uacute;p người d&ugrave;ng sử dụng c&aacute;c trải nghiệm giải tr&iacute; ổn định, tải phim chất lượng cao v&ocirc; c&ugrave;ng nhanh ch&oacute;ng. Với 5G, ch&uacute;ng ta c&oacute; thể tải một bộ phim chỉ trong v&ograve;ng v&agrave;i gi&acirc;y.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/228744/iphone-12-pro-max-512gb-041020-031059.jpg\" onclick=\"return false;\"><img alt=\"Tốc độ 5G siêu nhanh | iPhone 12 Pro Max\" src=\"https://cdn.tgdd.vn/Products/Images/42/228744/iphone-12-pro-max-512gb-041020-031059.jpg\" /></a></p>\r\n\r\n<p>Apple cho biết h&atilde;ng đ&atilde; ph&aacute;t triển được một số c&ocirc;ng nghệ nhằm giảm việc ti&ecirc;u hao pin của iPhone khi sử dụng dữ liệu, bao gồm chế độ Dữ liệu Th&ocirc;ng minh (Smart Data Mode), cho ph&eacute;p c&aacute;c ứng dụng chỉ sử dụng mạng 5G khi thực sự cần.</p>\r\n\r\n<h3>Apple A14 Bionic - Hiệu năng mạnh mẽ h&agrave;ng đầu</h3>\r\n\r\n<p>L&agrave; phi&ecirc;n bản cao cấp nhất của iPhone 12 series cấu h&igrave;nh của m&aacute;y sẽ kh&ocirc;ng l&agrave;m bạn thất vọng đ&acirc;u. iPhone 12 Pro Max sử dụng CPU Apple A14 Bionic, đ&acirc;y l&agrave; thế hệ chip đầu ti&ecirc;n của Apple được sản xuất tr&ecirc;n tiến tr&igrave;nh 5 nm.</p>\r\n\r\n<p>Theo Apple th&igrave; h&atilde;ng đ&atilde; tăng th&ecirc;m 40% trăm b&oacute;ng b&aacute;n dẫn gi&uacute;p tăng tốc độ đồng thời tăng hiệu suất để c&oacute; tuổi thọ pin tốt hơn thế hệ&nbsp;trước,&nbsp;Machine Learning được tăng l&ecirc;n gấp 10 lần, qua đ&oacute; cải thiện h&igrave;nh ảnh trong từng cảnh phim hay đồ họa gaming.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/228744/iphone-12-pro-max-512gb-041820-031813.jpg\" onclick=\"return false;\"><img alt=\"Chip A14 Bionic mạnh mẽ hàng đầu | iPhone 12 Pro Max\" src=\"https://cdn.tgdd.vn/Products/Images/42/228744/iphone-12-pro-max-512gb-041820-031813.jpg\" /></a></p>\r\n\r\n<p>Xem th&ecirc;m:&nbsp;<a href=\"https://www.thegioididong.com/hoi-dap/tim-hieu-chip-xu-ly-apple-a14-bionic-hieu-nang-manh-den-1302095\" target=\"_blank\">T&igrave;m hiểu chip xử l&yacute; Apple A14 Bionic. Hiệu năng mạnh đến mức n&agrave;o?</a></p>\r\n\r\n<p>Đ&acirc;y sẽ l&agrave; một trong những n&acirc;ng cấp mang lại &yacute; nghĩa lớn cho Siri, c&aacute;c c&ocirc;ng cụ dịch. V&igrave; Apple xử l&yacute; phần lớn c&aacute;c dữ liệu ngay tr&ecirc;n m&aacute;y chứ kh&ocirc;ng sử dụng m&aacute;y chủ, điều n&agrave;y gi&uacute;p tăng t&iacute;nh ri&ecirc;ng tư, tăng tốc độ xử l&yacute; do loại bỏ được độ trễ khi tương t&aacute;c với m&aacute;y chủ.</p>\r\n\r\n<p>Với&nbsp;<a href=\"https://www.thegioididong.com/dtdd-rom-512gb-tro-len\" target=\"_blank\">bộ nhớ trong 512 GB</a>, gi&uacute;p nhu cầu lưu trữ ảnh, video, ứng dụng&hellip; tr&ecirc;n m&aacute;y chưa bao giờ l&agrave; vấn đề nan giải.</p>\r\n\r\n<h3>Hỗ trợ c&ocirc;ng nghệ sạc kh&ocirc;ng d&acirc;y MagSafe</h3>\r\n\r\n<p>iPhone 12 Pro Max c&oacute; dung lượng pin 3687 mAh, hỗ trợ&nbsp;<a href=\"https://www.thegioididong.com/dtdd-sac-pin-nhanh\" target=\"_blank\">sạc pin nhanh</a>&nbsp;qua c&aacute;p c&ocirc;ng suất 20 W c&oacute; thể sạc từ 0 - 50% trong khoảng 30 ph&uacute;t, khi bạn sạc bằng sạc kh&ocirc;ng d&acirc;y MagSafe th&igrave; m&aacute;y hỗ trợ sạc đến 15 W, sạc với chuẩn Qi th&igrave; hỗ trợ đến 7.5 W.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/228744/iphone-12-pro-max-512gb-041920-031904.jpg\" onclick=\"return false;\"><img alt=\"Sạc không dây MagSafe tiện lợi | iPhone 12 Pro Max\" src=\"https://cdn.tgdd.vn/Products/Images/42/228744/iphone-12-pro-max-512gb-041920-031904.jpg\" /></a></p>\r\n\r\n<p>Xem th&ecirc;m:&nbsp;<a href=\"https://www.thegioididong.com/hoi-dap/cong-nghe-magsafe-magsafe-2-la-gi-co-tren-thiet-bi-nao-cua-1241888\" target=\"_blank\">MagSafe tr&ecirc;n iPhone 12 l&agrave; g&igrave;? D&ugrave;ng để l&agrave;m g&igrave; tr&ecirc;n c&aacute;c thiết bị Apple?</a></p>\r\n\r\n<p>Theo như Apple c&ocirc;ng bố th&igrave; phi&ecirc;n bản Pro Max c&oacute; thể ph&aacute;t video offline khoảng 20 tiếng, ph&aacute;t nhạc khoảng 80 tiếng.</p>\r\n\r\n<p>iPhone 12 Pro Max 512GB một sản phẩm c&oacute; những t&iacute;nh năng hiện đại nhất từ trước đến nay của nh&agrave; Apple. C&oacute; m&agrave;n h&igrave;nh Super Retina XDR OLED si&ecirc;u &quot;m&aacute;t mắt&quot;, hệ thống camera si&ecirc;u khủng cho đến hiệu năng v&ocirc; c&ugrave;ng mạnh mẽ từ A14 Bionic. Hứa hẹn sẽ mang lại trải nghiệm tốt nhất cho người sử dụng, n&acirc;ng tầm đẳng cấp v&agrave; sự thời thượng của chủ nh&acirc;n sở hữu n&oacute;.</p>', 1, 10, '2020-12-10 09:07:28', '2020-12-13 08:10:45', '/storage/product/JQUij8Jso54Wh4LtM8ku.jpg', NULL, 1),
(3, 'iPhone 12 256GB', 'Điện thoại iPhone 12 256GB', '27990000', 'iphone-12-256gb', 'iphone-12-trang-new-600x600-600x600.jpg', '<h3><a href=\"https://www.thegioididong.com/dtdd/iphone-12-256gb\" target=\"_blank\">iPhone 12 256 GB</a>&nbsp;được Apple cho ra mắt đ&atilde; đem đến l&agrave;n s&oacute;ng mạnh mẽ đối với những ai y&ecirc;u c&ocirc;ng nghệ n&oacute;i chung v&agrave; &ldquo;fan h&acirc;m mộ&rdquo; trung th&agrave;nh của&nbsp;<a href=\"https://www.thegioididong.com/dtdd-apple-iphone\" target=\"_blank\">iPhone</a>&nbsp;n&oacute;i ri&ecirc;ng, với con chip mạnh, dung lượng lưu trữ lớn c&ugrave;ng thiết kế to&agrave;n diện v&agrave; khả năng hiển thị h&igrave;nh ảnh xuất sắc.</h3>\r\n\r\n<h3>Thiết kế ho&agrave;n thiện đến từng chi tiết</h3>\r\n\r\n<p>M&agrave;n h&igrave;nh&nbsp;<a href=\"https://dienmayxanh.com/kinh-nghiem-hay/tim-hieu-cong-nghe-man-hinh-super-retina-xdr-tren-1214864\" target=\"_blank\">Super Retina XDR</a>&nbsp;6.1 inch sắc n&eacute;t, m&agrave;u sắc sống động, đem đến những h&igrave;nh ảnh chi tiết, sắc n&eacute;t v&agrave; ch&acirc;n thật.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/228737/iphone-12-256gb-273920-083915.jpg\" onclick=\"return false;\"><img alt=\"Màn hình chuẩn Super Rentina XDR | iPhone 12 256 GB\" src=\"https://cdn.tgdd.vn/Products/Images/42/228737/iphone-12-256gb-273920-083915.jpg\" /></a></p>\r\n\r\n<p>Ho&agrave;n thiện bằng khung nh&ocirc;m t&aacute;i chế, th&acirc;n thiện với m&ocirc;i trường, c&aacute;c g&oacute;c cạnh vu&ocirc;ng vức, &iacute;t bo tr&ograve;n, iPhone 12 c&oacute; k&iacute;ch thước nhỏ hơn so với iPhone 11 nhưng tạo cảm gi&aacute;c cứng c&aacute;p v&agrave; mạnh mẽ hơn.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/228737/iphone-12-256gb-274020-084011.jpg\" onclick=\"return false;\"><img alt=\"Các góc cạnh trông vuông vức, cứng cáp hơn | iPhone 12 256 GB\" src=\"https://cdn.tgdd.vn/Products/Images/42/228737/iphone-12-256gb-274020-084011.jpg\" /></a></p>\r\n\r\n<p>iPhone 12 sử dụng c&ocirc;ng nghệ k&iacute;nh cường lực mới, lần đầu được giới thiệu bởi Apple với t&ecirc;n gọi Ceramic Shield. Nhờ việc đưa c&aacute;c tinh thể sứ nano v&agrave;o cấu tr&uacute;c b&ecirc;n trong, qua đ&oacute; giảm thiểu t&aacute;c động của việc rơi vỡ gấp 4 lần, n&acirc;ng cao độ bền của thiết bị.</p>\r\n\r\n<p>B&ecirc;n cạnh đ&oacute;, Apple c&ograve;n &aacute;p dụng quy tr&igrave;nh trao đổi ion k&eacute;p v&agrave;o mặt sau của điện thoại gi&uacute;p tăng cường khả năng chống xước.</p>\r\n\r\n<p>Thỏa th&iacute;ch lựa chọn m&agrave;u sắc c&aacute; t&iacute;nh ri&ecirc;ng cũng như sở th&iacute;ch của bạn với 5 gam m&agrave;u năng động v&agrave; thời thượng.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/228737/iphone-12-256gb-274120-084113.jpg\" onclick=\"return false;\"><img alt=\"Nhiều màu sắc cho bạn sự lựa chọn phù hợp | iPhone 12 256 GB\" src=\"https://cdn.tgdd.vn/Products/Images/42/228737/iphone-12-256gb-274120-084113.jpg\" /></a></p>\r\n\r\n<h3>Trang bị chipset mạnh mẽ nhất 2020</h3>\r\n\r\n<p>iPhone 12 được trang bị con chip A14 Bionic sở hữu tốc độ xử l&yacute; l&ecirc;n đến 3.1 GHz, sản xuất tr&ecirc;n tiến tr&igrave;nh 5 nm, CPU gồm 6 nh&acirc;n, với 4 nh&acirc;n tiết kiệm pin v&agrave; 2 nh&acirc;n mạnh, n&acirc;ng cao hiệu suất xử l&yacute; đồng thời duy tr&igrave; hoạt động trong thời gian d&agrave;i.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/228737/iphone-12-256gb-275020-085029.jpg\" onclick=\"return false;\"><img alt=\"Trang bị chipset mạnh nhất A14 Bionic | iPhone 12 256 GB\" src=\"https://cdn.tgdd.vn/Products/Images/42/228737/iphone-12-256gb-275020-085029.jpg\" /></a></p>\r\n\r\n<p>Kh&ocirc;ng thể kh&ocirc;ng nhắc đến dung lượng bộ nhớ trong l&ecirc;n đến 256 GB, c&ugrave;ng khả năng mở rộng th&ecirc;m 2 TB tr&ecirc;n iCloud, ph&aacute; vỡ mọi r&agrave;o cản về lưu trữ dữ liệu trong thế giới&nbsp;<a href=\"https://www.thegioididong.com/dtdd\" target=\"_blank\">smartphone</a>.</p>\r\n\r\n<p>Việc chụp ảnh camera v&agrave; chơi game sẽ được n&acirc;ng l&ecirc;n tầm cao mới, với hiệu suất xử l&yacute; h&igrave;nh ảnh hơn 80% so với phi&ecirc;n bản tiền nhiệm. B&ecirc;n cạnh đ&oacute;, nhờ bộ vi xử l&yacute; khủng n&agrave;y, cho ph&eacute;p thực hiện 11 ng&agrave;n tỷ ph&eacute;p t&iacute;nh trong mỗi gi&acirc;y, mang đến trải nghiệm mượt m&agrave;, kh&ocirc;ng giật lag với hầu hết hoạt động của người d&ugrave;ng.</p>\r\n\r\n<h3>Ph&aacute; vỡ kh&aacute;i niệm camera tr&ecirc;n smartphone</h3>\r\n\r\n<p>Thế hệ iPhone 2020 mới nhất trang bị hệ thống camera k&eacute;p ở mặt sau, khả năng chụp ảnh được cải thiện đ&aacute;ng kể nhờ bộ vi xử l&yacute; A14 Bionic, b&ecirc;n cạnh việc mở rộng khẩu độ gi&uacute;p cảm biến thu được lượng &aacute;nh s&aacute;ng nhiều hơn 27%, mang lại những khung h&igrave;nh xuất sắc, chuẩn m&agrave;u tr&ecirc;n từng khoảnh khắc cuộc sống.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/228737/iphone-12-256gb-274120-084141.jpg\" onclick=\"return false;\"><img alt=\"Hệ thống camera sau | iPhone 12 256 GB\" src=\"https://cdn.tgdd.vn/Products/Images/42/228737/iphone-12-256gb-274120-084141.jpg\" /></a></p>\r\n\r\n<p>C&ocirc;ng nghệ Smart HDR 3 hỗ trợ nhận diện khung cảnh, vật thể, gi&uacute;p điều chỉnh c&acirc;n bằng m&agrave;u sắc, độ tương phản, kết cấu v&agrave; độ b&atilde;o h&ograve;a trong mọi bức ảnh, t&iacute;ch hợp th&ecirc;m chế độ Deep Fusion gi&uacute;p ph&acirc;n t&iacute;ch nhiều độ phơi s&aacute;ng nhằm tối đa h&oacute;a chi tiết h&igrave;nh ảnh.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/228737/iphone-12-256gb-274220-084202.jpg\" onclick=\"return false;\"><img alt=\"Hỗ trợ công nghệ HDR 3 cho hình ảnh chi tiết hơn | iPhone 12 256 GB\" src=\"https://cdn.tgdd.vn/Products/Images/42/228737/iphone-12-256gb-274220-084202.jpg\" /></a></p>\r\n\r\n<p>Chế độ ch&acirc;n dung với khả năng kiểm so&aacute;t độ s&acirc;u v&agrave; hiệu ứng bokeh n&acirc;ng cao, l&agrave;m mờ hậu cảnh một c&aacute;ch nghệ thuật để dồn hết sự tập trung v&agrave;o đối tượng.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/228737/iphone-12-256gb-274220-084212.jpg\" onclick=\"return false;\"><img alt=\"Khả năng chụp chân dung ấn tượng | iPhone 12 256 GB\" src=\"https://cdn.tgdd.vn/Products/Images/42/228737/iphone-12-256gb-274220-084212.jpg\" /></a></p>\r\n\r\n<p>Ngo&agrave;i ra, bức ảnh sẽ c&agrave;ng tuyệt hơn khi chọn một trong s&aacute;u hiệu ứng &aacute;nh s&aacute;ng: High-Key Like Mono, Natural Light, Studio Light,&hellip; dễ d&agrave;ng tạo n&ecirc;n những bức h&igrave;nh chuẩn nghệ thuật, khẳng định chất ri&ecirc;ng của bản th&acirc;n.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/228737/iphone-12-256gb-274220-084225.jpg\" onclick=\"return false;\"><img alt=\"Chụp ảnh đầy ấn tượng khi có nhiều hiệu ứng ánh sáng | iPhone 12 256 GB\" src=\"https://cdn.tgdd.vn/Products/Images/42/228737/iphone-12-256gb-274220-084225.jpg\" /></a></p>\r\n\r\n<h3>Mẫu iPhone đầu ti&ecirc;n được trang bị 5G</h3>\r\n\r\n<p>Được cho l&agrave; t&iacute;nh năng phổ biến tr&ecirc;n c&aacute;c điện thoại Android h&agrave;ng đầu, th&igrave; nay, 5G lần đầu ti&ecirc;n xuất hiện tr&ecirc;n iPhone. Apple đ&atilde; x&aacute;c nhận c&ocirc;ng nghệ 5G n&agrave;y c&oacute; thể hoạt động với tất cả c&aacute;c nh&agrave; mạng tr&ecirc;n thế giới.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/228737/iphone-12-256gb-274220-084247.jpg\" onclick=\"return false;\"><img alt=\"5G cho tốc độ load cực nhanh | iPhone 12 256 GB\" src=\"https://cdn.tgdd.vn/Products/Images/42/228737/iphone-12-256gb-274220-084247.jpg\" /></a></p>\r\n\r\n<p><br />\r\nVới chế độ Điều chỉnh dữ liệu th&ocirc;ng minh, khi tốc độ 5G kh&ocirc;ng cần thiết, m&aacute;y sẽ tự động sử dụng 4G LTE để tiết kiệm pin v&agrave; ngược lại để đảm bảo tốc độ kết nối nhanh nhất.</p>\r\n\r\n<h3>Thời lượng pin đủ d&ugrave;ng</h3>\r\n\r\n<p>Apple tuy&ecirc;n bố pin của iPhone 12 c&oacute; thể k&eacute;o d&agrave;i 16 tiếng ph&aacute;t ph&aacute;t lại video. C&ocirc;ng nghệ Magsafe mới, hỗ trợ sạc kh&ocirc;ng d&acirc;y c&oacute; c&ocirc;ng suất 15 W.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/228737/iphone-12-256gb-274320-084304.jpg\" onclick=\"return false;\"><img alt=\"Hỗ trợ nhiều công nghệ sạc | iPhone 12 256 GB\" src=\"https://cdn.tgdd.vn/Products/Images/42/228737/iphone-12-256gb-274320-084304.jpg\" /></a></p>\r\n\r\n<p>T&iacute;nh năng sạc nhanh c&oacute; sẵn tr&ecirc;n điện thoại c&oacute; thể gi&uacute;p pin từ 0 đến 50% trong nửa giờ, nhưng bạn sẽ cần mua một bộ sạc 20 W ri&ecirc;ng để c&oacute; thể c&oacute; được t&iacute;nh năng đ&oacute;.</p>\r\n\r\n<p>Nh&igrave;n chung, iPhone 12 256 GB sở hữu một thiết kế cao cấp, sang trọng, h&uacute;t mắt, với bộ vi xử l&yacute; mạnh h&agrave;ng đầu thế giới, camera với nhiều t&iacute;nh năng, tối ưu h&oacute;a h&igrave;nh ảnh, thỏa sức s&aacute;ng tạo v&agrave; tận hưởng những hiệu năng cực khủng đến từ thế hệ iPhone mới nhất 2020 của Apple.</p>', 1, 10, '2020-12-10 09:10:00', '2020-12-13 08:10:29', '/storage/product/jvcnjuNDp6KJzgfUcTzM.jpg', NULL, 1),
(4, 'Samsung Galaxy M51', 'Điện thoại Samsung Galaxy M51', '8990000', 'samsung-galaxy-m51', 'samsung-galaxy-m51-trang-new-600x600-600x600.jpg', '<h2>Đặc điểm nổi bật của Samsung Galaxy M51</h2>\r\n\r\n<p><img src=\"https://cdn.tgdd.vn/Products/Images/42/217536/Slider/-samsung-galaxy-m51-thumbvideo.jpg\" style=\"height:auto; margin:0px; width:780px\" /><img src=\"https://www.thegioididong.com/Content/desktop/images/V4/icon-yt.png\" style=\"height:auto; margin:auto; width:auto\" /></p>\r\n\r\n<p>Bộ sản phẩm chuẩn: Hộp, Sạc, S&aacute;ch hướng dẫn, C&aacute;p, C&acirc;y lấy sim</p>\r\n\r\n<h2><a href=\"https://www.thegioididong.com/dtdd-samsung\" target=\"_blank\">Samsung</a>&nbsp;lại tiếp tục cho ra mắt chiếc smartphone mới thuộc thế hệ&nbsp;<a href=\"https://www.thegioididong.com/dtdd-samsung-galaxy-m\" target=\"_blank\">Galaxy M</a>&nbsp;với t&ecirc;n gọi l&agrave;&nbsp;<a href=\"https://www.thegioididong.com/dtdd/samsung-galaxy-m51\">Samsung&nbsp;Galaxy M51</a>. Thiết kế mới n&agrave;y tuy nằm trong ph&acirc;n kh&uacute;c tầm trung nhưng được Samsung n&acirc;ng cấp v&agrave; cải tiến với camera g&oacute;c si&ecirc;u rộng, dung lượng pin si&ecirc;u khủng c&ugrave;ng vẻ ngo&agrave;i sang trọng v&agrave; thời thượng.</h2>\r\n\r\n<h3>Thiết kế hiện đại v&agrave; đẳng cấp.</h3>\r\n\r\n<p>Ấn tượng ban đầu với&nbsp;<a href=\"https://www.thegioididong.com/dtdd-tu-6-inch\" target=\"_blank\">m&agrave;n h&igrave;nh</a>&nbsp;của Galaxy M51 l&agrave; kiểu m&agrave;n h&igrave;nh Infinity-O rộng 6.7 inch. Kiểu thiết kế n&agrave;y đưa camera selfie thu gọn hơn chỉ bằng một h&igrave;nh tr&ograve;n nhỏ c&ugrave;ng thiết kế&nbsp;<a href=\"https://www.thegioididong.com/dtdd-man-hinh-tran-vien\" target=\"_blank\">m&agrave;n h&igrave;nh tr&agrave;n viền</a>&nbsp;l&agrave;m tăng khả năng hiển thị h&igrave;nh ảnh hơn.</p>\r\n\r\n<p>Ngo&agrave;i ra, m&aacute;y c&ograve;n sở hữu c&ocirc;ng nghệ m&agrave;n h&igrave;nh Super AMOLED Plus&nbsp;mang đến chất lượng hiển thị sắc n&eacute;t, h&igrave;nh ảnh tươi tắn cho bạn tận hưởng c&aacute;c chương tr&igrave;nh giải tr&iacute; hấp dẫn, thưởng thức c&aacute;c bộ phim bom tấn, chơi những tựa game y&ecirc;u th&iacute;ch v&ocirc; c&ugrave;ng bắt mắt.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/217536/samsung-galaxy-m51-274020-094023.jpg\" onclick=\"return false;\"><img alt=\"Sở hữu màn hình tràn viền với độ phân giải cao | Samsung Galaxy M51\" src=\"https://cdn.tgdd.vn/Products/Images/42/217536/samsung-galaxy-m51-274020-094023.jpg\" style=\"height:auto; margin:10px auto\" /></a></p>\r\n\r\n<p>Mặt lưng của m&aacute;y được thiết kế m&agrave;u gradient, chất liệu vỏ l&agrave;m bằng nhựa n&ecirc;n m&aacute;y rất nhẹ chỉ c&oacute; trọng lượng 213 g v&agrave; với độ mỏng 9.5 mm. B&ecirc;n cạnh đ&oacute;, c&aacute;c cạnh của m&aacute;y bo cong &ocirc;m s&aacute;t phần khung viền mang lại cảm gi&aacute;c vừa chắc chắn m&agrave; rất nhẹ nh&agrave;ng khi cầm nắm tr&ecirc;n tay.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/217536/samsung-galaxy-m51-274020-094029.jpg\" onclick=\"return false;\"><img alt=\"Thiết kê mặt lưng bóng bẩy, sang trọng | Galaxy M51\" src=\"https://cdn.tgdd.vn/Products/Images/42/217536/samsung-galaxy-m51-274020-094029.jpg\" style=\"height:auto; margin:10px auto\" /></a></p>\r\n\r\n<h3>Camera đột ph&aacute; th&aacute;ch thức mọi g&oacute;c độ</h3>\r\n\r\n<p>Tuy l&agrave; chiếc điện thoại nằm trong ph&acirc;n kh&uacute;c tầm trung nhưng lại sở hữu tới 4 camera sau với độ ph&acirc;n giải cực k&igrave; ấn tượng. Camera cảm biến ch&iacute;nh với độ ph&acirc;n giải l&ecirc;n đến 64 MP mang đến những bức ảnh cực kỳ r&otilde; n&eacute;t ngay cả trong điều kiện thiếu s&aacute;ng.&nbsp;</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/217536/samsung-galaxy-m51-274020-094041.jpg\" onclick=\"return false;\"><img alt=\"Sở hữu 4 camera sau với độ phân giải cực kì ấn tượng | Samsung Galaxy M51\" src=\"https://cdn.tgdd.vn/Products/Images/42/217536/samsung-galaxy-m51-274020-094041.jpg\" style=\"height:auto; margin:10px auto\" /></a></p>\r\n\r\n<p>Kế đến l&agrave;&nbsp;<a href=\"https://www.thegioididong.com/dtdd-camera-goc-rong\" target=\"_blank\">camera g&oacute;c si&ecirc;u rộng</a>&nbsp;(Ultra wide) với độ ph&acirc;n giải 12 MP kết hợp c&ugrave;ng camera ch&iacute;nh 64 MP cho khả năng chụp bao qu&aacute;t l&ecirc;n tới 123 độ, h&igrave;nh ảnh sắc n&eacute;t. Những khung cảnh n&uacute;i rừng h&ugrave;ng vĩ giờ đ&acirc;y c&oacute; thể g&oacute;i gọn trong chiếc camera của Samsung Galaxy M51.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/217536/samsung-galaxy-m51-272420-102407.jpg\" onclick=\"return false;\"><img alt=\"Ảnh chụp góc siêu rộng từ camera | Samsung Galaxy M51\" src=\"https://cdn.tgdd.vn/Products/Images/42/217536/samsung-galaxy-m51-272420-102407.jpg\" style=\"height:auto; margin:10px auto\" /></a></p>\r\n\r\n<p>B&ecirc;n cạnh những bức ảnh g&oacute;c rộng, m&aacute;y c&ograve;n c&oacute; khả năng chụp cận cảnh với những chi tiết nhỏ v&agrave; hỗ trợ&nbsp;<a href=\"https://www.thegioididong.com/dtdd-camera-xoa-phong\" target=\"_blank\">xo&aacute; ph&ocirc;ng</a>&nbsp;lấy độ s&acirc;u trường ảnh với hai camera bao gồm&nbsp;<a href=\"https://www.thegioididong.com/dtdd-camera-macro\" target=\"_blank\">camera macro</a>&nbsp;chụp cận cảnh với độ ph&acirc;n giải l&agrave; 5 MP v&agrave;&nbsp;camera đo chiều s&acirc;u c&oacute; độ ph&acirc;n giải 5 MP.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/217536/samsung-galaxy-m51-272420-102412.jpg\" onclick=\"return false;\"><img alt=\"Ảnh chụp cận cảnh macro từ camera | Samsung Galaxy M51\" src=\"https://cdn.tgdd.vn/Products/Images/42/217536/samsung-galaxy-m51-272420-102412.jpg\" style=\"height:auto; margin:10px auto\" /></a></p>\r\n\r\n<p>Ngo&agrave;i việc mang đến những bức ảnh đầy ấn tượng, bộ tứ camera của Galaxy M51 cũng mang đến chất lượng quay video 4K cực k&igrave; sắc n&eacute;t, m&agrave;u sắc sống động sẽ lưu giữ được những khoảnh khắc kỉ niệm đ&aacute;ng nhớ.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/217536/samsung-galaxy-m51-800-533-7.jpg\" onclick=\"return false;\"><img alt=\"Chất lượng quay video 4K cực kì sắc nét từ camera | Samsung Galaxy M51\" src=\"https://cdn.tgdd.vn/Products/Images/42/217536/samsung-galaxy-m51-800-533-7.jpg\" style=\"height:auto; margin:10px auto\" /></a></p>\r\n\r\n<p>Camera selfie của Galaxy M51 cũng kh&ocirc;ng k&eacute;m phần chất lượng khi sở hữu độ ph&acirc;n giải tới 32 MP, với t&iacute;nh năng chụp ảnh HDR, tự l&agrave;m đẹp khu&ocirc;n mặt gi&uacute;p những bức ảnh ch&acirc;n dung hoặc những tấm ảnh chụp ngo&agrave;i trời cho chất lượng tốt hơn, r&otilde; n&eacute;t hơn gi&uacute;p bạn tự tin toả s&aacute;ng trong mọi khung h&igrave;nh.</p>\r\n\r\n<p>Ngo&agrave;i ra t&iacute;nh năng lựa chọn g&oacute;c selfie th&ocirc;ng minh, m&aacute;y sẽ tự động chuyển sang chế độ chụp g&oacute;c rộng khi selfie với nh&oacute;m bạn mang mọi người gắn kết với nhau hơn qua từng khoảnh khắc selfie.&nbsp;Về khả năng quay video, camera selfie c&ograve;n c&oacute; khả năng quay video cho chất lượng h&igrave;nh ảnh Full HD.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/217536/samsung-galaxy-m51-800-533-8.jpg\" onclick=\"return false;\"><img alt=\"Camera selfie với độ phân giải lên đến 32 MP | Samsung Galaxy M51\" src=\"https://cdn.tgdd.vn/Products/Images/42/217536/samsung-galaxy-m51-800-533-8.jpg\" style=\"height:auto; margin:10px auto\" /></a></p>\r\n\r\n<h3>Pin si&ecirc;u khủng, sử dụng thoải m&aacute;i cả ng&agrave;y lẫn đ&ecirc;m</h3>\r\n\r\n<p>Được n&acirc;ng cấp vi&ecirc;n pin khủng l&ecirc;n đến 7000 mAh xứng đ&aacute;ng l&agrave; chiếc&nbsp;<a href=\"https://www.thegioididong.com/dtdd-pin-khung\" target=\"_blank\">điện thoại pin tr&acirc;u</a>&nbsp;nhất trong ph&acirc;n kh&uacute;c&nbsp;<a href=\"https://www.thegioididong.com/dtdd?p=tu-4-7-trieu\" target=\"_blank\">điện thoại tầm trung</a>&nbsp;mang đến cho bạn cả ng&agrave;y d&agrave;i sử dụng kết hợp c&ocirc;ng nghệ&nbsp;<a href=\"https://www.thegioididong.com/dtdd-sac-pin-nhanh\" target=\"_blank\">sạc pin nhanh</a>&nbsp;25 W gi&uacute;p bạn nạp lại pin cho m&aacute;y rất nhanh v&agrave; hiệu quả.</p>\r\n\r\n<p>Với lượng pin được sạc đầy 100% bạn sẽ c&oacute; thể đ&agrave;m thoại li&ecirc;n tục 64 giờ, sử dụng internet, xem video l&ecirc;n đến 24 giờ hoặc nghe nhạc li&ecirc;n tục trong khoảng 182 giờ. Giờ đ&acirc;y, bạn sẽ kh&ocirc;ng phải lo lắng về việc sạc pin trước hay mang theo cục sạc dự ph&ograve;ng khi rời khỏi nh&agrave;.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/217536/samsung-galaxy-m51-800-533-9.jpg\" onclick=\"return false;\"><img alt=\"Dung lượng pin khủng cùng công nghệ sạc nhanh | Samsung Galaxy M51\" src=\"https://cdn.tgdd.vn/Products/Images/42/217536/samsung-galaxy-m51-800-533-9.jpg\" style=\"height:auto; margin:10px auto\" /></a></p>\r\n\r\n<p>Tuyệt vời hơn, Galaxy M51 c&ograve;n c&oacute; t&iacute;nh năng reverse charging, nghĩa l&agrave; Galaxy M51 cũng c&oacute; thể biến th&agrave;nh một cục sạc dự ph&ograve;ng đa năng nếu như một chiếc điện thoại kh&aacute;c của bạn cần được sạc pin.&nbsp;</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/217536/samsung-galaxy-m51-800-533-10.jpg\" onclick=\"return false;\"><img alt=\"Tính năng reverse charging mới | Samsung Galaxy M51\" src=\"https://cdn.tgdd.vn/Products/Images/42/217536/samsung-galaxy-m51-800-533-10.jpg\" style=\"height:auto; margin:10px auto\" /></a></p>\r\n\r\n<h3>Hiệu năng mạnh mẽ vượt trội</h3>\r\n\r\n<p>Galaxy M51 sở hữu con chip&nbsp;<a href=\"https://www.thegioididong.com/hoi-dap/tim-hieu-chip-qualcomm-snapdragon-730-1174819\" target=\"_blank\">Snapdragon 730 8 nh&acirc;n của Qualcomm</a>&nbsp;với&nbsp;<a href=\"https://www.thegioididong.com/dtdd-ram-8gb-tro-len\" target=\"_blank\">RAM&nbsp;8 GB</a>, tốc độ xử l&yacute; l&ecirc;n tới 2.2 GHz gi&uacute;p bạn tiết kiệm điện năng cho m&aacute;y đồng thời tăng tốc độ phản hồi cho bạn trải nghiệm mượt m&agrave; hơn khi d&ugrave;ng nhiều t&aacute;c vụ c&ugrave;ng l&uacute;c.</p>\r\n\r\n<p>Samsung Galaxy M51&nbsp;c&ograve;n sở hữu bộ nhớ trong với&nbsp;<a href=\"https://www.thegioididong.com/dtdd-rom-128-den-256gb\" target=\"_blank\">dung lượng 128 GB</a>,&nbsp;cho kh&ocirc;ng gian lưu trữ rộng lớn hơn, thoải m&aacute;i hơn khi lưu phim ảnh, video, game...</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/217536/samsung-galaxy-m51-271120-101154.jpg\" onclick=\"return false;\"><img alt=\"Sở hữu con chip Snapdragon 730 8 nhân | Samsung Galaxy M51\" src=\"https://cdn.tgdd.vn/Products/Images/42/217536/samsung-galaxy-m51-271120-101154.jpg\" style=\"height:auto; margin:10px auto\" /></a></p>\r\n\r\n<p>Chip đồ hoạ Adreno 618 gi&uacute;p&nbsp;<a href=\"https://www.thegioididong.com/dtdd-choi-game\" target=\"_blank\">điện thoại chơi game</a>&nbsp;th&ecirc;m t&iacute;nh ch&acirc;n thực với đồ họa phong ph&uacute; hơn, xử l&yacute; chất lượng h&igrave;nh ảnh v&agrave; chơi tr&ograve; chơi HDR với nhiều sắc th&aacute;i m&agrave;u.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/217536/samsung-galaxy-m51-274020-094053.jpg\" onclick=\"return false;\"><img alt=\"Hỗ trợ thẻ nhớ ngoài | Samsung Galaxy M51\" src=\"https://cdn.tgdd.vn/Products/Images/42/217536/samsung-galaxy-m51-274020-094053.jpg\" style=\"height:auto; margin:10px auto\" /></a></p>\r\n\r\n<h3>Linh hoạt hơn với hai hệ thống bảo mật</h3>\r\n\r\n<p>Bạn c&oacute; thể ho&agrave;n to&agrave;n an t&acirc;m khi sử dụng Samsung Galaxy M51 bởi chiếc điện thoại n&agrave;y được trang bị đến 2 hệ thống bảo mật bao gồm&nbsp;<a href=\"https://www.thegioididong.com/dtdd-bao-mat-van-tay\" target=\"_blank\">bảo mật v&acirc;n tay</a>&nbsp;được đặt b&ecirc;n khung viền của m&aacute;y v&agrave; t&iacute;nh năng&nbsp;<a href=\"https://www.thegioididong.com/dtdd-bao-mat-khuon-mat\" target=\"_blank\">bảo mật khu&ocirc;n mặt</a>. Với 2 hệ thống bảo mật được t&iacute;ch hợp trong c&ugrave;ng một chiếc điện thoại, bạn sẽ linh động được c&aacute;ch mở kho&aacute; hơn.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/217536/samsung-galaxy-m51-274120-094105.jpg\" onclick=\"return false;\"><img alt=\"Tích hợp bảo mật vân tay cạnh viền | Samsung Galaxy M51\" src=\"https://cdn.tgdd.vn/Products/Images/42/217536/samsung-galaxy-m51-274120-094105.jpg\" style=\"height:auto; margin:10px auto\" /></a></p>\r\n\r\n<p>Nh&igrave;n tổng thể, Samsung Galaxy M51 c&oacute; mức gi&aacute; hợp l&yacute; c&ograve;n được sở hữu những t&iacute;nh năng hiện đại về thiết kế đồng thời nổi bật về chất lượng chắc chắn sẽ kh&ocirc;ng l&agrave;m thất vọng người d&ugrave;ng y&ecirc;u c&ocirc;ng nghệ khi lựa chọn Galaxy M5</p>', 1, 5, '2020-12-12 01:05:30', '2020-12-12 01:05:30', '/storage/product/4n17IGueBgh9vt2qOpMf.jpg', NULL, 3);
INSERT INTO `products` (`id`, `name`, `desc`, `price`, `slug`, `product_image`, `content`, `user_id`, `category_id`, `created_at`, `updated_at`, `product_image_path`, `deleted_at`, `trademark_id`) VALUES
(5, 'Điện thoại OPPO A93', 'Điện thoại OPPO A93', '7190000', 'dien-thoai-oppo-a93', 'oppo-a93-trang-14-200x200.jpg', '<h3>Th&aacute;ng 9/2020,&nbsp;<a href=\"https://www.thegioididong.com/dtdd-oppo\" target=\"_blank\">OPPO</a>&nbsp;tiếp tục cho ra mắt d&ograve;ng sản phẩm thuộc ph&acirc;n kh&uacute;c&nbsp;<a href=\"https://www.thegioididong.com/dtdd?p=tu-4-7-trieu\" target=\"_blank\">điện thoại tầm trung</a>&nbsp;được xem l&agrave; tiếp nối từ&nbsp;<a href=\"https://www.thegioididong.com/dtdd/oppo-a92\" target=\"_blank\">OPPO A92</a>&nbsp;với nhiều điểm được n&acirc;ng cấp như hiệu năng, hệ thống camera c&ugrave;ng khả năng sạc nhanh 18W với t&ecirc;n gọi&nbsp;<a href=\"https://www.thegioididong.com/dtdd/oppo-a93\" target=\"_blank\">OPPO A93</a>.</h3>\r\n\r\n<h3>Hiệu năng vượt trội c&ugrave;ng với Helio P95</h3>\r\n\r\n<p>OPPO A93 được trang bị chipset MediaTek Helio P95 tốc độ CPU đạt 2.2 GHz với sức mạnh như thế n&agrave;y th&igrave; A93 sẽ kh&ocirc;ng l&agrave;m bạn thất vọng khi c&oacute; thể hoạt động tốt với nhiều ứng dụng nặng hay thao t&aacute;c cuộn trang đều diễn ra trơn tru cảm gi&aacute;c như kh&ocirc;ng c&oacute; độ trễ.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/229056/oppo-a93-270620-100612.jpg\" onclick=\"return false;\"><img alt=\"Vi xử lý Helio P95 | OPPO A93\" src=\"https://cdn.tgdd.vn/Products/Images/42/229056/oppo-a93-270620-100612.jpg\" style=\"height:auto; margin:10px auto\" /></a></p>\r\n\r\n<p>Ấn tượng hơn khi bộ nhớ RAM đến 8 GB gi&uacute;p m&aacute;y c&oacute; thể thao t&aacute;c tr&ecirc;n nhiều ứng dụng c&ugrave;ng l&uacute;c m&agrave; kh&ocirc;ng c&oacute; hiện tượng&nbsp;giật lag n&acirc;ng cao trải nghiệm người d&ugrave;ng.</p>\r\n\r\n<p>Đo tr&ecirc;n Antutu th&igrave; OPPO A93&nbsp;đạt 201.029 điểm, con số kh&aacute; cao&nbsp;đảm bảo mọi hoạt&nbsp;động&nbsp;đều mượt m&agrave; v&agrave; gi&uacute;p&nbsp;<a href=\"https://www.thegioididong.com/dtdd-choi-game\" target=\"_blank\">điện thoại chơi game</a>&nbsp;đồ hoạ nặng như Li&ecirc;n Qu&acirc;n cũng kh&ocirc;ng th&agrave;nh vấn&nbsp;đề.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/229056/oppo-a93-012520-042549.jpg\" onclick=\"return false;\"><img alt=\"Điểm số đo trên Antutu | OPPO A93\" src=\"https://cdn.tgdd.vn/Products/Images/42/229056/oppo-a93-012520-042549.jpg\" style=\"height:auto; margin:10px auto\" /></a></p>\r\n\r\n<p>V&agrave; c&oacute; bộ nhớ trong 128 GB thoải m&aacute;i lưu trữ mọi dữ liệu, nếu chưa đủ th&igrave; m&aacute;y vẫn hỗ trợ thẻ nhớ ngo&agrave;i MicroSD tối đa 256 GB cho bạn th&ecirc;m nhiều kh&ocirc;ng gian lưu trữ hơn.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/229056/oppo-a93-270620-100617.jpg\" onclick=\"return false;\"><img alt=\"Hỗ trợ thẻ nhớ ngoài tối đa 256 GB | OPPO A93\" src=\"https://cdn.tgdd.vn/Products/Images/42/229056/oppo-a93-270620-100617.jpg\" style=\"height:auto; margin:10px auto\" /></a></p>\r\n\r\n<p>Mặc kh&aacute;c, OPPO A93 được c&agrave;i đặt sẵn hệ điều h&agrave;nh Android 10 tr&ecirc;n giao diện Color OS 7.2 với những t&iacute;nh năng th&ocirc;ng minh chắc chắn sẽ rất th&uacute; vị.</p>\r\n\r\n<p>B&ecirc;n cạnh đ&oacute;, m&aacute;y t&iacute;ch hợp HyperEngine c&ocirc;ng nghệ d&agrave;nh cho tr&ograve; chơi gi&uacute;p bạn n&acirc;ng cao trải nghiệm chơi th&ocirc;ng qua chất lượng h&igrave;nh ảnh bắt mắt, di chuyển mượt m&agrave; nhất trong bất kỳ thế giới trực tuyến n&agrave;o như Li&ecirc;n Qu&acirc;n Mobile.</p>\r\n\r\n<h3>Cụm camera selfie t&iacute;ch hợp AI</h3>\r\n\r\n<p>OPPO A93 c&oacute; 4 camera sau được xếp đối xứng nhau trong module h&igrave;nh vu&ocirc;ng v&agrave; thanh đ&egrave;n flash LED. Camera ch&iacute;nh c&oacute; độ ph&acirc;n giải 48 MP, camera g&oacute;c si&ecirc;u rộng 8 MP, mono đơn sắc&nbsp;v&agrave; mono ch&acirc;n dung lần lượt đều bằng 2 MP.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/229056/oppo-a93-270620-100622.jpg\" onclick=\"return false;\"><img alt=\"Cụm 4 camera với cảm biến chính 48 MP | OPPO A93\" src=\"https://cdn.tgdd.vn/Products/Images/42/229056/oppo-a93-270620-100622.jpg\" style=\"height:auto; margin:10px auto\" /></a></p>\r\n\r\n<p>Với hệ thống camera n&agrave;y m&aacute;y c&ograve;n trang bị c&ocirc;ng nghệ Super Night sẽ gi&uacute;p ảnh của bạn sắc n&eacute;t hơn trong điều kiện thiếu s&aacute;ng, c&ugrave;ng khả năng xo&aacute; ph&ocirc;ng tạo hiệu ứng ph&ocirc;ng m&agrave;u kh&aacute;c biệt cho bức ảnh trở n&ecirc;n độc lạ v&agrave; đẹp xuất sắc như trong studio.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img src=\"https://cdn.tgdd.vn/Products/Images/42/229056/oppo-a93-012520-042556.jpg\" style=\"height:auto; margin:10px auto\" />Ảnh chụp tr&ecirc;n OPPO A93</p>\r\n\r\n<p><img src=\"https://cdn.tgdd.vn/Products/Images/42/229056/oppo-a93-012620-042603.jpg\" style=\"height:auto; margin:10px auto\" />Ảnh chụp tr&ecirc;n OPPO A93</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Khả năng quay video 4K với tốc độ khung h&igrave;nh l&agrave; 30 fps cho bạn ghi lại những khoảnh khắc thường ng&agrave;y trong cuộc sống với chất lượng mượt m&agrave; v&agrave; xem rất đ&atilde; mắt.</p>\r\n\r\n<p>Camera selfie k&eacute;p với cảm biến ch&iacute;nh l&agrave; 16 MP v&agrave; cảm biến đo độ s&acirc;u 2 MP. Việc kết hợp c&ocirc;ng nghệ l&agrave;m đẹp AI đem đến những bức ảnh selfie đẹp mắt trong thật tự nhi&ecirc;n v&agrave; khả năng xo&aacute; ph&ocirc;ng l&agrave;m nổi bật chủ thể.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/229056/oppo-a93-1.jpg\" onclick=\"return false;\"><img alt=\"Camera selfie kép hỗ trợ tính năng làm đẹp AI, xóa phông | OPPO A93\" src=\"https://cdn.tgdd.vn/Products/Images/42/229056/oppo-a93-1.jpg\" style=\"height:auto; margin:10px auto\" /></a></p>\r\n\r\n<h3>Thiết kế cảm hứng, khơi nguồn s&aacute;ng tạo</h3>\r\n\r\n<p>OPPO A93 c&oacute; thiết kế v&ocirc; c&ugrave;ng nhỏ gọn mỏng 7.48 mm v&agrave; nặng chỉ 164 g cho cảm gi&aacute;c cầm nắm nhẹ nh&agrave;ng, thoải m&aacute;i trong qu&aacute; tr&igrave;nh sử dụng.&nbsp;</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/229056/oppo-a93-270620-100645.jpg\" onclick=\"return false;\"><img alt=\"Thiết kế nhỏ gọn, cầm nắm dễ dạng | OPPO A93\" src=\"https://cdn.tgdd.vn/Products/Images/42/229056/oppo-a93-270620-100645.jpg\" style=\"height:auto; margin:10px auto\" /></a></p>\r\n\r\n<p>C&aacute;c cạnh được bo tr&ograve;n cho cảm gi&aacute;c mềm mại, từng chi tiết đều được chăm ch&uacute;t cho thấy sản phẩm c&oacute; chất lượng đ&aacute;ng được tin cậy. Từ đường v&acirc;n tr&ecirc;n mặt lưng trải d&agrave;i từ camera mang đến một ngoại h&igrave;nh v&ocirc; c&ugrave;ng bắt mắt lại&nbsp;vừa nổi bật.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/229056/oppo-a93-270720-100701.jpg\" onclick=\"return false;\"><img alt=\"Thiết kế bo tròn tạo cảm giác mềm mại | OPPO A93\" src=\"https://cdn.tgdd.vn/Products/Images/42/229056/oppo-a93-270720-100701.jpg\" style=\"height:auto; margin:10px auto\" /></a></p>\r\n\r\n<p>M&aacute;y c&oacute; thiết kế nguy&ecirc;n khối v&agrave; mặt lưng sử dụng chất liệu thuỷ tinh hữu cơ cho độ bền cao cũng như được phủ một lớp m&agrave;ng b&oacute;ng gi&uacute;p chống b&aacute;m v&acirc;n tay, hạn chế bụi bẩn v&agrave; mồ h&ocirc;i.</p>\r\n\r\n<p>Mặt trước đ&atilde; được OPPO trang bị k&iacute;nh cường lực&nbsp;<a href=\"https://www.thegioididong.com/hoi-dap/tim-hieu-kinh-cuong-luc-smartphone-corning-gorilla-glass-3-1288806\" target=\"_blank\">Gorilla Glass 3+</a>&nbsp;tăng th&ecirc;m phần cứng c&aacute;p cho m&aacute;y cũng như hạn chế mọi sự trầy xước v&agrave; va đập.&nbsp;</p>\r\n\r\n<h3>M&agrave;n h&igrave;nh sống động, sắc n&eacute;t</h3>\r\n\r\n<p>OPPO A93 c&oacute; k&iacute;ch thước 6.43 inch v&agrave; c&oacute; độ ph&acirc;n giải Full HD+ (1080 x 2400 Pixels). M&aacute;y sử dụng tấm nền&nbsp;<a href=\"https://www.thegioididong.com/hoi-dap/man-hinh-amoled-la-gi-905766\" target=\"_blank\">AMOLED</a>&nbsp;việc xem phim hay chơi game đều sẽ mang đến chất lượng hiển thị sắc n&eacute;t, m&agrave;u sắc tươi tắn, h&igrave;nh ảnh chi tiết hơn.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/229056/oppo-a93-270620-100637.jpg\" onclick=\"return false;\"><img alt=\"Màn hình sống động, sắc nét | OPPO  A93\" src=\"https://cdn.tgdd.vn/Products/Images/42/229056/oppo-a93-270620-100637.jpg\" style=\"height:auto; margin:10px auto\" /></a></p>\r\n\r\n<h3>Khả năng sạc nhanh 18W</h3>\r\n\r\n<p>OPPO A93 sở hữu vi&ecirc;n pin c&oacute; dung lượng lớn 4000 mAh qu&aacute; đủ cho bạn khoảng 1 ng&agrave;y d&agrave;i sử dụng hoặc 2 ng&agrave;y t&ugrave;y theo nhu cầu sử dụng. Hơn nữa, m&aacute;y được hỗ trợ sạc nhanh l&ecirc;n đến 18W th&ocirc;ng qua cổng sạc Type-C gi&uacute;p sạc nhanh thiết bị chỉ trong thời gian ngắn.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/229056/oppo-a93-270620-100632.jpg\" onclick=\"return false;\"><img alt=\"Khả năng sạc nhanh 30W | OPPO A93\" src=\"https://cdn.tgdd.vn/Products/Images/42/229056/oppo-a93-270620-100632.jpg\" style=\"height:auto; margin:10px auto\" /></a></p>\r\n\r\n<p>Ngo&agrave;i ra, m&aacute;y vẫn hỗ trợ t&iacute;nh năng&nbsp;<a href=\"https://www.thegioididong.com/dtdd-bao-mat-van-tay\" target=\"_blank\">bảo mật v&acirc;n tay</a>&nbsp;v&agrave;&nbsp;<a href=\"https://www.thegioididong.com/dtdd-bao-mat-khuon-mat\" target=\"_blank\">bảo mật khu&ocirc;n mặt</a>&nbsp;gi&uacute;p bạn mở kho&aacute; thiết bị nhanh ch&oacute;ng hơn trong mọi trường hợp.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/229056/oppo-a93-270620-100656.jpg\" onclick=\"return false;\"><img alt=\"Cảm biến vân tay dưới màn hình | OPPO A93\" src=\"https://cdn.tgdd.vn/Products/Images/42/229056/oppo-a93-270620-100656.jpg\" style=\"height:auto; margin:10px auto\" /></a></p>\r\n\r\n<p>Nếu bạn&nbsp;đang cần một chiếc&nbsp;<a href=\"https://www.thegioididong.com/dtdd-pin-khung\" target=\"_blank\">điện thoại pin tr&acirc;u</a>&nbsp;đi k&egrave;m với nhiều&nbsp;đặc&nbsp;điểm nổi bật như hiệu năng vượt trội, camera chuy&ecirc;n nghiệp nhiều t&iacute;nh năng c&ugrave;ng với sạc nhanh th&igrave;&nbsp;đ&acirc;y sẽ l&agrave; sản phẩm tầm trung ho&agrave;n hảo mang&nbsp;đến những trải ngiệm tuyệt vời&nbsp;đến người d&ugrave;ng.</p>', 1, 6, '2020-12-12 01:08:09', '2020-12-12 01:08:09', '/storage/product/ILKDVgf6bC3ZzIDqOOQo.jpg', NULL, 5),
(6, 'Realme C17', 'Điện thoại Realme C17', '4990000', 'realme-c17', 'realme-c17.jpg', '<h2>Đặc điểm nổi bật của Realme C17</h2>\r\n\r\n<p><img src=\"https://cdn.tgdd.vn/Products/Images/42/227681/Slider/vi-vn-realme-c17-slider-fix-1.jpg\" style=\"height:auto; margin:0px; width:780px\" /></p>\r\n\r\n<p>Bộ sản phẩm chuẩn: Hộp, Sạc, S&aacute;ch hướng dẫn, C&aacute;p, C&acirc;y lấy sim, Ốp lưng</p>\r\n\r\n<h3>Nh&agrave; sản xuất&nbsp;<a href=\"https://www.thegioididong.com/dtdd-realme\" target=\"_blank\">Realme</a>&nbsp;vừa mới tr&igrave;nh l&agrave;ng chiếc điện thoại&nbsp;<a href=\"https://www.thegioididong.com/dtdd/realme-c17\" target=\"_blank\">Realme C17</a>&nbsp;hứa hẹn sẽ đem đến cho người d&ugrave;ng những cải thiện tối ưu nhất về chất lượng lẫn thiết kế b&ecirc;n ngo&agrave;i.</h3>\r\n\r\n<h3>Mở m&agrave;n trở lại với diện mạo bắt mắt</h3>\r\n\r\n<p>Chạy theo xu thế thiết kế nguy&ecirc;n khối rắn chắc, kh&ocirc;ng k&eacute;m phần tinh tế v&agrave; gọn nhẹ với trọng lượng chỉ 188 g. Bao gồm 2 bản m&agrave;u ch&iacute;nh: Lake Green v&agrave; Navy Blue tươi s&aacute;ng, thanh lịch.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/227681/realme-c17.jpg\" onclick=\"return false;\"><img alt=\" Realme C17  | Thiết kế mặt lưng \" src=\"https://cdn.tgdd.vn/Products/Images/42/227681/realme-c17.jpg\" style=\"height:auto; margin:10px auto\" /></a></p>\r\n\r\n<p>C&ocirc;ng nghệ&nbsp;<a href=\"https://www.thegioididong.com/hoi-dap/man-hinh-ips-lcd-la-gi-905752\" target=\"_blank\">m&agrave;n h&igrave;nh IPS LCD</a>&nbsp;cung cấp giao diện m&agrave;u sắc đa dạng, g&oacute;c nh&igrave;n rộng, cho ph&eacute;p người d&ugrave;ng trải nghiệm được hết chất lượng h&igrave;nh ảnh m&agrave; kh&ocirc;ng nhất thiết phải ngồi trực diện.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/227681/realme-c17-033520-073529.jpg\" onclick=\"return false;\"><img alt=\"Realme C17 | Thiết kế nguyên khối tinh tế, chắc chắn\" src=\"https://cdn.tgdd.vn/Products/Images/42/227681/realme-c17-033520-073529.jpg\" style=\"height:auto; margin:10px auto\" /></a></p>\r\n\r\n<p>Mặt k&iacute;nh cường lực&nbsp;<a href=\"https://www.thegioididong.com/hoi-dap/tim-hieu-ve-cac-mat-kinh-cuong-luc-gorilla-glass-1172198#glass1\" target=\"_blank\">Corning Gorilla Glass</a>&nbsp;bảo vệ tối ưu m&agrave;n h&igrave;nh, chống va đập, trầy xước từ những t&aacute;c động b&ecirc;n ngo&agrave;i.</p>\r\n\r\n<h3>Camera chất lượng tha hồ chụp ảnh</h3>\r\n\r\n<p>Cụm camera mặt lưng sau khi được n&acirc;ng cấp so với phi&ecirc;n bản cũ th&igrave; nay camera ch&iacute;nh đ&atilde; c&oacute; độ ph&acirc;n giải 13 MP, camera phụ g&oacute;c si&ecirc;u rộng 8 MP, một ống k&iacute;nh macro 2 MP v&agrave; một camera đen trắng 2 MP.&nbsp;</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/227681/realme-c17-033520-073513.jpg\" onclick=\"return false;\"><img alt=\"Realme C17 | Cụm 4 camera sau\" src=\"https://cdn.tgdd.vn/Products/Images/42/227681/realme-c17-033520-073513.jpg\" style=\"height:auto; margin:10px auto\" /></a></p>\r\n\r\n<p>Camera trước c&oacute; độ ph&acirc;n giải 8 MP, hỗ trợ&nbsp;<a href=\"https://www.thegioididong.com/hoi-dap/cac-chuan-quay-phim-tren-dien-thoai-tablet-pho-bi-1174134#fullhd\" target=\"_blank\">quay video Full HD</a>&nbsp;v&agrave; video call th&ocirc;ng qua ứng dụng.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/227681/realme-c17-033520-073506.jpg\" onclick=\"return false;\"><img alt=\"Realme C17 | Camera trước nốt ruồi độ phân giải 8 MP\" src=\"https://cdn.tgdd.vn/Products/Images/42/227681/realme-c17-033520-073506.jpg\" style=\"height:auto; margin:10px auto\" /></a></p>\r\n\r\n<h3>Hệ điều h&agrave;nh c&oacute; nhiều cải tiến hấp dẫn mọi t&iacute;n đồ game thủ</h3>\r\n\r\n<p>Realme C17 được trang bị chipset Snapdragon 460 thế hệ mới gi&uacute;p m&aacute;y hoạt động ổn định hơn, từ đ&oacute; mọi trải nghiệm của người d&ugrave;ng đều được cải thiện một c&aacute;ch r&otilde; rệt tr&ecirc;n smartphone gi&aacute; rẻ.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/227681/realme-c17-02.jpg\" onclick=\"return false;\"><img alt=\"Realme C17 | Sử dụng chipset Snapdragon 460\" src=\"https://cdn.tgdd.vn/Products/Images/42/227681/realme-c17-02.jpg\" style=\"height:auto; margin:10px auto\" /></a></p>\r\n\r\n<p>Sử dụng&nbsp;<a href=\"https://www.thegioididong.com/hoi-dap/android-10-android-q-la-gi-co-gi-moi-1237224\" target=\"_blank\">Android 10</a>&nbsp;với nhiều t&iacute;nh năng bổ trợ như: Giao diện được c&aacute; nh&acirc;n h&oacute;a, tăng cường bảo mật v&agrave; ri&ecirc;ng tư, mở kh&oacute;a bằng v&acirc;n tay,&hellip;</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/227681/realme-c17-033520-073544.jpg\" onclick=\"return false;\"><img alt=\"Realme C17 | Chạy nền Android 10 tăng cường bảo mật, mở khóa vân tay\" src=\"https://cdn.tgdd.vn/Products/Images/42/227681/realme-c17-033520-073544.jpg\" style=\"height:auto; margin:10px auto\" /></a></p>\r\n\r\n<p>Đặc biệt,&nbsp;<a href=\"https://www.thegioididong.com/hoi-dap/tim-hieu-chip-qualcomm-snapdragon-665-1177729\" target=\"_blank\">chipset GPU Adreno 610</a>&nbsp;tập trung xử l&iacute; h&igrave;nh ảnh v&agrave; đồ họa ch&acirc;n thực, sắc n&eacute;t hơn khi người d&ugrave;ng chơi game.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/227681/realme-c17-033520-073558.jpg\" onclick=\"return false;\"><img alt=\"Realme C17 | Chipset GPU Adreno 610, xử lí hình ảnh, chơi game mượt mà\" src=\"https://cdn.tgdd.vn/Products/Images/42/227681/realme-c17-033520-073558.jpg\" style=\"height:auto; margin:10px auto\" /></a></p>\r\n\r\n<p>Trang bị RAM 6 GB gi&uacute;p m&aacute;y khả năng đa nhiệm tốt hơn, &iacute;t giật lag v&agrave; bộ nhớ trong 128 GB hỗ trợ th&ecirc;m 256 GB qua thẻ nhớ ngo&agrave;i, cho bạn thỏa th&iacute;ch lưu trữ mọi dữ liệu.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/227681/realme-c17-01.jpg\" onclick=\"return false;\"><img alt=\"Realme C17 | Hỗ trợ thẻ nhớ ngoài\" src=\"https://cdn.tgdd.vn/Products/Images/42/227681/realme-c17-01.jpg\" style=\"height:auto; margin:10px auto\" /></a></p>\r\n\r\n<h3>Dung lượng pin lớn nay c&ograve;n th&ecirc;m Type - C sạc nhanh</h3>\r\n\r\n<p>Với thời lượng pin chuẩn 5000 mAh c&oacute; th&ecirc;m hỗ trợ&nbsp;<a href=\"https://www.thegioididong.com/dtdd-sac-pin-nhanh\" target=\"_blank\">sạc pin nhanh</a>&nbsp;cho người d&ugrave;ng thoải m&aacute;i sử dụng điện thoại cả ng&agrave;y d&agrave;i.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/227681/realme-c17-033520-073551.jpg\" onclick=\"return false;\"><img alt=\"Realme C17 | Pin chuẩn Li-po 5000 mAh có thêm hỗ trợ Type - C sạc nhanh\" src=\"https://cdn.tgdd.vn/Products/Images/42/227681/realme-c17-033520-073551.jpg\" style=\"height:auto; margin:10px auto\" /></a></p>\r\n\r\n<p>T&iacute;nh năng đa dạng, c&ugrave;ng hiệu năng mượt m&agrave; l&agrave; những g&igrave; Realme C17 hướng tới mọi đối tượng người d&ugrave;ng tầm trung với mức gi&aacute; v&ocirc; c&ugrave;ng thu h&uacute;t.</p>', 1, 8, '2020-12-12 01:10:41', '2020-12-12 08:04:19', '/storage/product/4CQRky1jda5JyilljIPi.jpg', NULL, 4),
(7, 'OPPO A93', 'Điện thoại OPPO A93', '7190000', 'oppo-a93', 'oppo-a93-den-14-200x200.jpg', '<h2>Đặc điểm nổi bật của OPPO A93</h2>\r\n\r\n<p><img src=\"https://cdn.tgdd.vn/Products/Images/42/229056/Slider/-oppo-a93-thumbvideo.jpg\" style=\"height:auto; margin:0px; width:780px\" /><img src=\"https://www.thegioididong.com/Content/desktop/images/V4/icon-yt.png\" style=\"height:auto; margin:auto; width:auto\" /></p>\r\n\r\n<p>Bộ sản phẩm chuẩn: Hộp, Sạc, Tai nghe, S&aacute;ch hướng dẫn, C&aacute;p, C&acirc;y lấy sim, Ốp lưng</p>\r\n\r\n<h3>Th&aacute;ng 9/2020,&nbsp;<a href=\"https://www.thegioididong.com/dtdd-oppo\" target=\"_blank\">OPPO</a>&nbsp;tiếp tục cho ra mắt d&ograve;ng sản phẩm thuộc ph&acirc;n kh&uacute;c&nbsp;<a href=\"https://www.thegioididong.com/dtdd?p=tu-4-7-trieu\" target=\"_blank\">điện thoại tầm trung</a>&nbsp;được xem l&agrave; tiếp nối từ&nbsp;<a href=\"https://www.thegioididong.com/dtdd/oppo-a92\" target=\"_blank\">OPPO A92</a>&nbsp;với nhiều điểm được n&acirc;ng cấp như hiệu năng, hệ thống camera c&ugrave;ng khả năng sạc nhanh 18W với t&ecirc;n gọi&nbsp;<a href=\"https://www.thegioididong.com/dtdd/oppo-a93\" target=\"_blank\">OPPO A93</a>.</h3>\r\n\r\n<h3>Hiệu năng vượt trội c&ugrave;ng với Helio P95</h3>\r\n\r\n<p>OPPO A93 được trang bị chipset MediaTek Helio P95 tốc độ CPU đạt 2.2 GHz với sức mạnh như thế n&agrave;y th&igrave; A93 sẽ kh&ocirc;ng l&agrave;m bạn thất vọng khi c&oacute; thể hoạt động tốt với nhiều ứng dụng nặng hay thao t&aacute;c cuộn trang đều diễn ra trơn tru cảm gi&aacute;c như kh&ocirc;ng c&oacute; độ trễ.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/229056/oppo-a93-270620-100612.jpg\" onclick=\"return false;\"><img alt=\"Vi xử lý Helio P95 | OPPO A93\" src=\"https://cdn.tgdd.vn/Products/Images/42/229056/oppo-a93-270620-100612.jpg\" style=\"height:auto; margin:10px auto\" /></a></p>\r\n\r\n<p>Ấn tượng hơn khi bộ nhớ RAM đến 8 GB gi&uacute;p m&aacute;y c&oacute; thể thao t&aacute;c tr&ecirc;n nhiều ứng dụng c&ugrave;ng l&uacute;c m&agrave; kh&ocirc;ng c&oacute; hiện tượng&nbsp;giật lag n&acirc;ng cao trải nghiệm người d&ugrave;ng.</p>\r\n\r\n<p>Đo tr&ecirc;n Antutu th&igrave; OPPO A93&nbsp;đạt 201.029 điểm, con số kh&aacute; cao&nbsp;đảm bảo mọi hoạt&nbsp;động&nbsp;đều mượt m&agrave; v&agrave; gi&uacute;p&nbsp;<a href=\"https://www.thegioididong.com/dtdd-choi-game\" target=\"_blank\">điện thoại chơi game</a>&nbsp;đồ hoạ nặng như Li&ecirc;n Qu&acirc;n cũng kh&ocirc;ng th&agrave;nh vấn&nbsp;đề.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/229056/oppo-a93-012520-042549.jpg\" onclick=\"return false;\"><img alt=\"Điểm số đo trên Antutu | OPPO A93\" src=\"https://cdn.tgdd.vn/Products/Images/42/229056/oppo-a93-012520-042549.jpg\" style=\"height:auto; margin:10px auto\" /></a></p>\r\n\r\n<p>V&agrave; c&oacute; bộ nhớ trong 128 GB thoải m&aacute;i lưu trữ mọi dữ liệu, nếu chưa đủ th&igrave; m&aacute;y vẫn hỗ trợ thẻ nhớ ngo&agrave;i MicroSD tối đa 256 GB cho bạn th&ecirc;m nhiều kh&ocirc;ng gian lưu trữ hơn.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/229056/oppo-a93-270620-100617.jpg\" onclick=\"return false;\"><img alt=\"Hỗ trợ thẻ nhớ ngoài tối đa 256 GB | OPPO A93\" src=\"https://cdn.tgdd.vn/Products/Images/42/229056/oppo-a93-270620-100617.jpg\" style=\"height:auto; margin:10px auto\" /></a></p>\r\n\r\n<p>Mặc kh&aacute;c, OPPO A93 được c&agrave;i đặt sẵn hệ điều h&agrave;nh Android 10 tr&ecirc;n giao diện Color OS 7.2 với những t&iacute;nh năng th&ocirc;ng minh chắc chắn sẽ rất th&uacute; vị.</p>\r\n\r\n<p>B&ecirc;n cạnh đ&oacute;, m&aacute;y t&iacute;ch hợp HyperEngine c&ocirc;ng nghệ d&agrave;nh cho tr&ograve; chơi gi&uacute;p bạn n&acirc;ng cao trải nghiệm chơi th&ocirc;ng qua chất lượng h&igrave;nh ảnh bắt mắt, di chuyển mượt m&agrave; nhất trong bất kỳ thế giới trực tuyến n&agrave;o như Li&ecirc;n Qu&acirc;n Mobile.</p>\r\n\r\n<h3>Cụm camera selfie t&iacute;ch hợp AI</h3>\r\n\r\n<p>OPPO A93 c&oacute; 4 camera sau được xếp đối xứng nhau trong module h&igrave;nh vu&ocirc;ng v&agrave; thanh đ&egrave;n flash LED. Camera ch&iacute;nh c&oacute; độ ph&acirc;n giải 48 MP, camera g&oacute;c si&ecirc;u rộng 8 MP, mono đơn sắc&nbsp;v&agrave; mono ch&acirc;n dung lần lượt đều bằng 2 MP.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/229056/oppo-a93-270620-100622.jpg\" onclick=\"return false;\"><img alt=\"Cụm 4 camera với cảm biến chính 48 MP | OPPO A93\" src=\"https://cdn.tgdd.vn/Products/Images/42/229056/oppo-a93-270620-100622.jpg\" style=\"height:auto; margin:10px auto\" /></a></p>\r\n\r\n<p>Với hệ thống camera n&agrave;y m&aacute;y c&ograve;n trang bị c&ocirc;ng nghệ Super Night sẽ gi&uacute;p ảnh của bạn sắc n&eacute;t hơn trong điều kiện thiếu s&aacute;ng, c&ugrave;ng khả năng xo&aacute; ph&ocirc;ng tạo hiệu ứng ph&ocirc;ng m&agrave;u kh&aacute;c biệt cho bức ảnh trở n&ecirc;n độc lạ v&agrave; đẹp xuất sắc như trong studio.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img src=\"https://cdn.tgdd.vn/Products/Images/42/229056/oppo-a93-012520-042556.jpg\" style=\"height:auto; margin:10px auto\" />Ảnh chụp tr&ecirc;n OPPO A93</p>\r\n\r\n<p><img src=\"https://cdn.tgdd.vn/Products/Images/42/229056/oppo-a93-012620-042603.jpg\" style=\"height:auto; margin:10px auto\" />Ảnh chụp tr&ecirc;n OPPO A93</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Khả năng quay video 4K với tốc độ khung h&igrave;nh l&agrave; 30 fps cho bạn ghi lại những khoảnh khắc thường ng&agrave;y trong cuộc sống với chất lượng mượt m&agrave; v&agrave; xem rất đ&atilde; mắt.</p>\r\n\r\n<p>Camera selfie k&eacute;p với cảm biến ch&iacute;nh l&agrave; 16 MP v&agrave; cảm biến đo độ s&acirc;u 2 MP. Việc kết hợp c&ocirc;ng nghệ l&agrave;m đẹp AI đem đến những bức ảnh selfie đẹp mắt trong thật tự nhi&ecirc;n v&agrave; khả năng xo&aacute; ph&ocirc;ng l&agrave;m nổi bật chủ thể.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/229056/oppo-a93-1.jpg\" onclick=\"return false;\"><img alt=\"Camera selfie kép hỗ trợ tính năng làm đẹp AI, xóa phông | OPPO A93\" src=\"https://cdn.tgdd.vn/Products/Images/42/229056/oppo-a93-1.jpg\" style=\"height:auto; margin:10px auto\" /></a></p>\r\n\r\n<h3>Thiết kế cảm hứng, khơi nguồn s&aacute;ng tạo</h3>\r\n\r\n<p>OPPO A93 c&oacute; thiết kế v&ocirc; c&ugrave;ng nhỏ gọn mỏng 7.48 mm v&agrave; nặng chỉ 164 g cho cảm gi&aacute;c cầm nắm nhẹ nh&agrave;ng, thoải m&aacute;i trong qu&aacute; tr&igrave;nh sử dụng.&nbsp;</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/229056/oppo-a93-270620-100645.jpg\" onclick=\"return false;\"><img alt=\"Thiết kế nhỏ gọn, cầm nắm dễ dạng | OPPO A93\" src=\"https://cdn.tgdd.vn/Products/Images/42/229056/oppo-a93-270620-100645.jpg\" style=\"height:auto; margin:10px auto\" /></a></p>\r\n\r\n<p>C&aacute;c cạnh được bo tr&ograve;n cho cảm gi&aacute;c mềm mại, từng chi tiết đều được chăm ch&uacute;t cho thấy sản phẩm c&oacute; chất lượng đ&aacute;ng được tin cậy. Từ đường v&acirc;n tr&ecirc;n mặt lưng trải d&agrave;i từ camera mang đến một ngoại h&igrave;nh v&ocirc; c&ugrave;ng bắt mắt lại&nbsp;vừa nổi bật.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/229056/oppo-a93-270720-100701.jpg\" onclick=\"return false;\"><img alt=\"Thiết kế bo tròn tạo cảm giác mềm mại | OPPO A93\" src=\"https://cdn.tgdd.vn/Products/Images/42/229056/oppo-a93-270720-100701.jpg\" style=\"height:auto; margin:10px auto\" /></a></p>\r\n\r\n<p>M&aacute;y c&oacute; thiết kế nguy&ecirc;n khối v&agrave; mặt lưng sử dụng chất liệu thuỷ tinh hữu cơ cho độ bền cao cũng như được phủ một lớp m&agrave;ng b&oacute;ng gi&uacute;p chống b&aacute;m v&acirc;n tay, hạn chế bụi bẩn v&agrave; mồ h&ocirc;i.</p>\r\n\r\n<p>Mặt trước đ&atilde; được OPPO trang bị k&iacute;nh cường lực&nbsp;<a href=\"https://www.thegioididong.com/hoi-dap/tim-hieu-kinh-cuong-luc-smartphone-corning-gorilla-glass-3-1288806\" target=\"_blank\">Gorilla Glass 3+</a>&nbsp;tăng th&ecirc;m phần cứng c&aacute;p cho m&aacute;y cũng như hạn chế mọi sự trầy xước v&agrave; va đập.&nbsp;</p>\r\n\r\n<h3>M&agrave;n h&igrave;nh sống động, sắc n&eacute;t</h3>\r\n\r\n<p>OPPO A93 c&oacute; k&iacute;ch thước 6.43 inch v&agrave; c&oacute; độ ph&acirc;n giải Full HD+ (1080 x 2400 Pixels). M&aacute;y sử dụng tấm nền&nbsp;<a href=\"https://www.thegioididong.com/hoi-dap/man-hinh-amoled-la-gi-905766\" target=\"_blank\">AMOLED</a>&nbsp;việc xem phim hay chơi game đều sẽ mang đến chất lượng hiển thị sắc n&eacute;t, m&agrave;u sắc tươi tắn, h&igrave;nh ảnh chi tiết hơn.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/229056/oppo-a93-270620-100637.jpg\" onclick=\"return false;\"><img alt=\"Màn hình sống động, sắc nét | OPPO  A93\" src=\"https://cdn.tgdd.vn/Products/Images/42/229056/oppo-a93-270620-100637.jpg\" style=\"height:auto; margin:10px auto\" /></a></p>\r\n\r\n<h3>Khả năng sạc nhanh 18W</h3>\r\n\r\n<p>OPPO A93 sở hữu vi&ecirc;n pin c&oacute; dung lượng lớn 4000 mAh qu&aacute; đủ cho bạn khoảng 1 ng&agrave;y d&agrave;i sử dụng hoặc 2 ng&agrave;y t&ugrave;y theo nhu cầu sử dụng. Hơn nữa, m&aacute;y được hỗ trợ sạc nhanh l&ecirc;n đến 18W th&ocirc;ng qua cổng sạc Type-C gi&uacute;p sạc nhanh thiết bị chỉ trong thời gian ngắn.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/229056/oppo-a93-270620-100632.jpg\" onclick=\"return false;\"><img alt=\"Khả năng sạc nhanh 30W | OPPO A93\" src=\"https://cdn.tgdd.vn/Products/Images/42/229056/oppo-a93-270620-100632.jpg\" style=\"height:auto; margin:10px auto\" /></a></p>\r\n\r\n<p>Ngo&agrave;i ra, m&aacute;y vẫn hỗ trợ t&iacute;nh năng&nbsp;<a href=\"https://www.thegioididong.com/dtdd-bao-mat-van-tay\" target=\"_blank\">bảo mật v&acirc;n tay</a>&nbsp;v&agrave;&nbsp;<a href=\"https://www.thegioididong.com/dtdd-bao-mat-khuon-mat\" target=\"_blank\">bảo mật khu&ocirc;n mặt</a>&nbsp;gi&uacute;p bạn mở kho&aacute; thiết bị nhanh ch&oacute;ng hơn trong mọi trường hợp.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/229056/oppo-a93-270620-100656.jpg\" onclick=\"return false;\"><img alt=\"Cảm biến vân tay dưới màn hình | OPPO A93\" src=\"https://cdn.tgdd.vn/Products/Images/42/229056/oppo-a93-270620-100656.jpg\" style=\"height:auto; margin:10px auto\" /></a></p>\r\n\r\n<p>Nếu bạn&nbsp;đang cần một chiếc&nbsp;<a href=\"https://www.thegioididong.com/dtdd-pin-khung\" target=\"_blank\">điện thoại pin tr&acirc;u</a>&nbsp;đi k&egrave;m với nhiều&nbsp;đặc&nbsp;điểm nổi bật như hiệu năng vượt trội, camera chuy&ecirc;n nghiệp nhiều t&iacute;nh năng c&ugrave;ng với sạc nhanh th&igrave;&nbsp;đ&acirc;y sẽ l&agrave; sản phẩm tầm trung ho&agrave;n hảo mang&nbsp;đến những trải ngiệm tuyệt vời&nbsp;đến người d&ugrave;ng.</p>', 1, 6, '2020-12-13 06:37:45', '2020-12-13 22:46:13', '/storage/product/FNsMXM6ZxEyInwTKVK37.jpg', NULL, 6),
(8, 'xcv', 'zxcv', '5454543', 'xcv', 'ghe-3.jpg', '<p>sdfsadf</p>', 1, 10, '2020-12-13 08:03:49', '2020-12-13 10:20:59', '/storage/product/Xv4hHoaA4qkiCmfwNIyI.jpg', '2020-12-13 10:20:59', 1),
(9, 'Huawei Nova 7i', 'Điện thoại Huawei Nova 7i', '6990000', 'huawei-nova-7i', 'huawei-nova-7i-pink-600x600-1-600x600.jpg', '<h2>Đặc điểm nổi bật của Huawei Nova 7i (Nền tảng Huawei Mobile Service)</h2>\r\n\r\n<p><img src=\"https://cdn.tgdd.vn/Products/Images/42/218363/Slider/-huawei-nova-7i-thumbvideo.jpg\" /><img src=\"https://www.thegioididong.com/Content/desktop/images/V4/icon-yt.png\" /></p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/hoi-dap/tim-hieu-cong-cu-tim-kiem-petal-search-cua-huawei-1278627\" target=\"_blank\">T&igrave;m hiểu th&ecirc;m</a></p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/hoi-dap/tim-hieu-chip-hisilicon-kirin-810-1176275\" target=\"_blank\">T&igrave;m hiểu th&ecirc;m</a></p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/hoi-dap/giao-dien-nguoi-dung-emui-10-tu-huawei-co-gi-dac-biet-1236333\" target=\"_blank\">T&igrave;m hiểu th&ecirc;m</a></p>\r\n\r\n<p>Bộ sản phẩm chuẩn: Hộp, Sạc, Tai nghe, S&aacute;ch hướng dẫn, C&aacute;p, C&acirc;y lấy sim, Miếng d&aacute;n m&agrave;n h&igrave;nh, Nắp lưng</p>\r\n\r\n<h2>Sau th&agrave;nh c&ocirc;ng d&ograve;ng sản phẩm Nova 3i, Nova 5i,&nbsp;<a href=\"https://www.thegioididong.com/dtdd-huawei\" target=\"_blank\">Huawei</a>&nbsp;tiếp tục cho ra mắt người kế nhiệm mang t&ecirc;n&nbsp;<a href=\"https://www.thegioididong.com/dtdd/huawei-nova-7i\" target=\"_blank\">Huawei Nova 7i</a>&nbsp;với nhiều đột ph&aacute; về cấu h&igrave;nh, thiết kế v&agrave; camera. Đi k&egrave;m với gi&aacute; th&agrave;nh phải chăng, thiết bi hứa hẹn tạo n&ecirc;n cơn sốt&nbsp;<a href=\"https://www.thegioididong.com/dtdd\" target=\"_blank\">điện thoại</a>&nbsp;cho năm 2020.</h2>\r\n\r\n<p><strong>Sản phẩm chạy hệ điều h&agrave;nh Android tr&ecirc;n nền tảng Huawei Mobile Service:</strong><br />\r\n- Kh&ocirc;ng c&oacute; CH Play, tải ứng dụng tr&ecirc;n cửa h&agrave;ng Huawei AppGallery.<br />\r\n- Kh&ocirc;ng c&oacute; sẵn c&aacute;c ứng dụng / game sử dụng dịch vụ, t&agrave;i khoản Google như: Google Maps, Google Drive, Gmail, Grab,...<br />\r\n- C&aacute;c ứng dụng kh&ocirc;ng c&oacute; tr&ecirc;n Huawei AppGallery, kh&aacute;ch h&agrave;ng c&oacute; thể t&igrave;m tải qua&nbsp;kho ứng dụng của b&ecirc;n thứ 3&nbsp;như: Aurora Store, APK Pure,...<br />\r\n(Lưu &yacute; lựa chọn ứng dụng từ nh&agrave; ph&aacute;t h&agrave;nh uy t&iacute;n để đảm bảo t&iacute;nh bảo mật)<br />\r\n-&nbsp;<a href=\"https://www.thegioididong.com/tin-tuc/huong-dan-cai-dat-ung-dung-cho-huawei-mate-30-pro-ma-khong-can-tai-ch-play-store-1236086\" target=\"_blank\">Hướng dẫn c&agrave;i đặt ứng dụng cho smartphone Huawei m&agrave; kh&ocirc;ng cần tải CH Play Store</a>.</p>\r\n\r\n<h3>Thiết kế tr&agrave;n viền, m&agrave;u sắc hiện đại</h3>\r\n\r\n<p><a href=\"https://www.thegioididong.com/dtdd?p=tu-4-7-trieu\" target=\"_blank\">Điện thoại tầm trung</a>&nbsp;Huawei Nova 7i được trang bị m&agrave;n h&igrave;nh k&iacute;ch thước 6.4 inch độ ph&acirc;n giải Full HD+ với điểm nhấn ch&iacute;nh l&agrave; m&agrave;n h&igrave;nh kho&eacute;t lỗ nằm b&ecirc;n tr&aacute;i để đặt camera trước.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/218363/huawei-nova-7i-tgdd3-5.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại Huawei Nova 7i | Thiết kế màn hình\" src=\"https://cdn.tgdd.vn/Products/Images/42/218363/huawei-nova-7i-tgdd3-5.jpg\" /></a></p>\r\n\r\n<p>M&agrave;n h&igrave;nh của Huawei Nova 7i sử dụng tấm nền&nbsp;<a href=\"https://www.thegioididong.com/hoi-dap/tim-hieu-ve-man-hinh-ltps-lcd-1172755\" target=\"_blank\">LTPS LCD</a>&nbsp;với ưu điểm g&oacute;c nh&igrave;n rộng, độ s&aacute;ng cao. H&igrave;nh ảnh tr&ecirc;n m&agrave;n h&igrave;nh được t&aacute;i hiện r&otilde; n&eacute;t v&agrave; tươi tắn. Phần viền m&agrave;n h&igrave;nh được l&agrave;m cong 2.5D cho cảm gi&aacute;c hiện đại, sang trọng.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/218363/huawei-nova-7i-tgdd6-3.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại Huawei Nova 7i | Thiết kế cạnh trái\" src=\"https://cdn.tgdd.vn/Products/Images/42/218363/huawei-nova-7i-tgdd6-3.jpg\" /></a></p>\r\n\r\n<p>Mẫu smartphone Huawei được thiết kế nổi bật với hiệu ứng chuyển m&agrave;u gradient được xử l&yacute; một c&aacute;ch tinh tế, cạnh sau cũng được vuốt cong nhẹ để m&aacute;y dễ cầm nắm v&agrave; thanh tho&aacute;t hơn.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/218363/huawei-nova-7i-tgdd4-5.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại Huawei Nova 7i | Thiết kế mặt lưng\" src=\"https://cdn.tgdd.vn/Products/Images/42/218363/huawei-nova-7i-tgdd4-5.jpg\" /></a></p>\r\n\r\n<p>Thay v&igrave; đặt&nbsp;<a href=\"https://www.thegioididong.com/dtdd-bao-mat-van-tay\" target=\"_blank\">cảm biến v&acirc;n tay</a>&nbsp;trong m&agrave;n h&igrave;nh, Huawei chỉ được trang bị với cảm biến v&acirc;n tay t&iacute;ch hợp n&uacute;t nguồn ở cạnh b&ecirc;n, b&ugrave; lại lại cho tốc độ nhận diện nhanh v&agrave; ch&iacute;nh x&aacute;c hơn.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/218363/huawei-nova-7i-tgdd2-5.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại Huawei Nova 7i | Cảm biến vân tay\" src=\"https://cdn.tgdd.vn/Products/Images/42/218363/huawei-nova-7i-tgdd2-5.jpg\" /></a></p>\r\n\r\n<h3>Hiệu năng chiến game tốt, mượt m&agrave; trong mọi t&aacute;c vụ</h3>\r\n\r\n<p>Huawei Nova 7i được trang bị con chip kh&aacute; mạnh l&agrave; Kirin 810 8 nh&acirc;n, được sản xuất tr&ecirc;n tiến tr&igrave;nh 7 nm hiện đại, đi k&egrave;m l&agrave; dung lượng RAM 8 GB. Combo n&agrave;y mang lại điểm số đi hiệu năng Antutu kh&aacute; ấn tượng với hơn 300 ng&agrave;n điểm.</p>\r\n\r\n<p>Cấu h&igrave;nh n&agrave;y gi&uacute;p&nbsp;<a href=\"https://www.thegioididong.com/dtdd-choi-game\" target=\"_blank\">điện thoại chơi game</a>&nbsp;tốt ổn định tr&ecirc;n c&aacute;c tựa game hot hiện nay như Li&ecirc;n Qu&acirc;n, PUBG, Asphalt 9,... một c&aacute;ch mượt m&agrave;, &iacute;t gặp t&igrave;nh trạng đứng hoặc lag khi chơi. Thiết bị sở hữu bộ nhớ trong 128 GB thoải m&aacute;i lưu tr&igrave;nh h&igrave;nh ảnh, video, hay c&agrave;i đặt c&aacute;c ứng dụng giải tr&iacute; khi cần.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/218363/huawei-nova-7i-tgdd.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại Huawei Nova 7i | Điểm hiệu năng Antutu\" src=\"https://cdn.tgdd.vn/Products/Images/42/218363/huawei-nova-7i-tgdd.jpg\" /></a></p>\r\n\r\n<h3>T&iacute;nh năng Petal Search, hỗ trợ người d&ugrave;ng tối đa trong việc t&igrave;m kiếm ứng dụng</h3>\r\n\r\n<p>Với giao diện trực quan dễ sử dụng, c&ocirc;ng cụ Petal Search được ph&aacute;t triển bởi Huawei cho ph&eacute;p người d&ugrave;ng ngo&agrave;i việc t&igrave;m kiếm ứng dụng th&igrave; c&ograve;n c&oacute; thể t&igrave;m kiếm được th&ocirc;ng tin. Bằng c&aacute;ch tổng hợp dữ liệu từ nhiều nguồn trang kh&aacute;c nhau.</p>\r\n\r\n<p>C&aacute;c ứng dụng của Google cũng c&oacute; thể tải v&agrave; sử dụng được ổn định như:&nbsp;Chrome, Google Dịch hay Google Maps,...</p>\r\n\r\n<p>Xem th&ecirc;m:&nbsp;<a href=\"https://www.thegioididong.com/hoi-dap/tim-hieu-cong-cu-tim-kiem-petal-search-cua-huawei-1278627\" target=\"_blank\">T&igrave;m hiểu c&ocirc;ng cụ t&igrave;m kiếm Petal Search ph&aacute;t triển bởi Huawei</a></p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/218363/huawei-nova-7i-tgdd9-2.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại Huawei Nova 7i | Tính năng Petal Search\" src=\"https://cdn.tgdd.vn/Products/Images/42/218363/huawei-nova-7i-tgdd9-2.jpg\" /></a></p>\r\n\r\n<p>Nova 7i được cũng được c&agrave;i đặt sẵn hệ điều h&agrave;nh Android 10 mới nhất t&ugrave;y biến tr&ecirc;n giao diện EMUI 10, đ&aacute;ng tiếc Huawei Nova 7i sẽ thiếu vắng c&aacute;c dịch vụ của Google như Play Store, YouTube... thay v&agrave;o đ&oacute; l&agrave; c&aacute;c dịch vụ tương tự từ Huawei.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/218363/huawei-nova-7i-tgdd1.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại Huawei Nova 7i | Huawei App Gallery\" src=\"https://cdn.tgdd.vn/Products/Images/42/218363/huawei-nova-7i-tgdd1.jpg\" /></a></p>\r\n\r\n<p>B&ugrave; lại kho dữ liệu Huawei AppGallery vẫn kh&aacute; đầy đủ c&aacute;c ứng dụng phổ biến như: Zalo, Viber, Zing Mp3, NhacCuaTui, CốcCốc Browser,... hoặc người d&ugrave;ng c&oacute; thể lựa chọn nhiều nguồn ứng dụng kh&aacute;c để tải về.</p>\r\n\r\n<p>Xem th&ecirc;m:&nbsp;<a href=\"https://www.thegioididong.com/tin-tuc/huong-dan-cai-dat-ung-dung-cho-huawei-mate-30-pro-ma-khong-can-tai-ch-play-store-1236086\" target=\"_blank\">Hướng dẫn c&agrave;i đặt ứng dụng cho điện thoại Huawei m&agrave; kh&ocirc;ng cần tải CH Play Store</a></p>\r\n\r\n<h3>4 camera thời thượng, camera ch&iacute;nh 48 MP</h3>\r\n\r\n<p>Huawei Nova 7i sở hữu cụm 4 camera trong đ&oacute; bao gồm camera ch&iacute;nh 48 MP, camera g&oacute;c si&ecirc;u rộng 8 MP, camera đo độ s&acirc;u ảnh 2 MP v&agrave; camera chụp cận cảnh macro 2 MP. Cả 4 camera được thiết kế th&agrave;nh cụm vu&ocirc;ng nằm ở g&oacute;c tr&ecirc;n b&ecirc;n tr&aacute;i mặt lưng.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/218363/huawei-nova-7i-tgdd5-3.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại Huawei Nova 7i | Camera sau\" src=\"https://cdn.tgdd.vn/Products/Images/42/218363/huawei-nova-7i-tgdd5-3.jpg\" /></a></p>\r\n\r\n<p>Camera của m&aacute;y được t&iacute;ch hợp đầy đủ c&aacute;c t&iacute;nh năng&nbsp;<a href=\"https://www.thegioididong.com/dtdd-camera-goc-rong\" target=\"_blank\">g&oacute;c rộng</a>,&nbsp;<a href=\"https://www.thegioididong.com/dtdd-camera-xoa-phong\" target=\"_blank\">x&oacute;a ph&ocirc;ng</a>, HDR,... đ&aacute;p ứng tốt nhu cầu chụp ảnh của đa số người d&ugrave;ng.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img src=\"https://cdn.tgdd.vn/Products/Images/42/218363/huawei-nova-7i-252920-082952.jpg\" />Ảnh chụp tr&ecirc;n Huawei Nova 7i</p>\r\n\r\n<p><img src=\"https://cdn.tgdd.vn/Products/Images/42/218363/huawei-nova-7i-252920-082944.jpg\" />Ảnh chụp tr&ecirc;n Huawei Nova 7i</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Chất lượng ảnh chụp của Huawei Nova 7i c&oacute; chất lượng tốt, m&agrave;u sắc tươi tắn, độ tương phản v&agrave; chi tiết cao.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img src=\"https://cdn.tgdd.vn/Products/Images/42/218363/huawei-nova-7i-tgdd3-4.jpg\" />Ảnh chụp g&oacute;c si&ecirc;u rộng tr&ecirc;n Huawei Nova 7i</p>\r\n\r\n<p><img src=\"https://cdn.tgdd.vn/Products/Images/42/218363/huawei-nova-7i-tgdd6-2.jpg\" />Ảnh chụp g&oacute;c thường tr&ecirc;n Huawei Nova 7i</p>\r\n\r\n<p><img src=\"https://cdn.tgdd.vn/Products/Images/42/218363/huawei-nova-7i-tgdd5-2.jpg\" />Ảnh chụp zoom 2x tr&ecirc;n Huawei Nova 7i</p>\r\n\r\n<p><img src=\"https://cdn.tgdd.vn/Products/Images/42/218363/huawei-nova-7i-tgdd2-4.jpg\" />Ảnh chụp&nbsp;zoom 6x&nbsp;tr&ecirc;n Huawei Nova 7i</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>T&iacute;nh năng chụp ảnh macro si&ecirc;u cận thời thượng cũng được trang bị tr&ecirc;n Huawei Nova 7i với điểm nhấn chụp ảnh sắc n&eacute;t với độ chi tiết cao mang tới cho người d&ugrave;ng trải nghiệm chụp ảnh ho&agrave;n to&agrave;n mới.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img src=\"https://cdn.tgdd.vn/Products/Images/42/218363/huawei-nova-7i-tgdd3-1.jpg\" />Ảnh chụp từ camera sau tr&ecirc;n Huawei Nova 7i</p>\r\n\r\n<p><img src=\"https://cdn.tgdd.vn/Products/Images/42/218363/huawei-nova-7i-tgdd4-1.jpg\" />Ảnh chụp từ camera sau tr&ecirc;n Huawei Nova 7i</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Camera trước của m&aacute;y c&oacute; độ ph&acirc;n giải 16 MP t&iacute;ch hợp c&ocirc;ng nghệ AI hứa hẹn mang đến những tấm h&igrave;nh selfie sắc n&eacute;t c&ugrave;ng nhiều hiệu ứng VR sticker độc đ&aacute;o.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img src=\"https://cdn.tgdd.vn/Products/Images/42/218363/huawei-nova-7i-tgdd2-1.jpg\" />Ảnh chụp selfie bằng camera trước tr&ecirc;n Huawei Nova 7i</p>\r\n\r\n<p><img src=\"https://cdn.tgdd.vn/Products/Images/42/218363/huawei-nova-7i-tgdd1-1.jpg\" />Ảnh chụp selfie bằng camera trước tr&ecirc;n Huawei Nova 7i</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>Pin d&ugrave;ng l&acirc;u, hỗ trợ sạc nhanh</h3>\r\n\r\n<p>Huawei Nova 7i mang trong m&igrave;nh vi&ecirc;n&nbsp;<a href=\"https://www.thegioididong.com/dtdd?f=pin-khung-3000-mah\" target=\"_blank\">pin lớn</a>&nbsp;<strong>4.200 mAh</strong>&nbsp;c&oacute; hỗ trợ c&ocirc;ng nghệ&nbsp;<a href=\"https://www.thegioididong.com/dtdd-sac-pin-nhanh\" target=\"_blank\">sạc si&ecirc;u nhanh</a>&nbsp;cho khả năng sạc 70% pin trong thời gian 30 ph&uacute;t (theo Huawei c&ocirc;ng bố).</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/218363/huawei-nova-7i-tgdd7-2.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại Huawei Nova 7i | Thời lượng pin tốt\" src=\"https://cdn.tgdd.vn/Products/Images/42/218363/huawei-nova-7i-tgdd7-2.jpg\" /></a></p>\r\n\r\n<p>Ngo&agrave;i ra m&aacute;y c&ograve;n hỗ trợ Bluetooth 5.0, jack tai nghe 3.5 mm, thẻ nhớ ngo&agrave;i MicroSD,... với nhiều t&iacute;nh năng vui nhộn, th&uacute; vị.</p>', 1, 15, '2020-12-13 18:48:58', '2020-12-13 18:48:58', '/storage/product/byzpKzZYDLYvRxweANnv.jpg', NULL, 2),
(10, 'Lenovo IdeaPad Slim 3 15IIL05 i3 1005G1/4GB/512GB/Win10 (81WE003RVN)', 'Laptop Lenovo IdeaPad Slim 3 15IIL05 i3 1005G1/4GB/512GB/Win10 (81WE003RVN)', '12990000', 'lenovo-ideapad-slim-3-15iil05-i3-1005g14gb512gbwin10-81we003rvn', 'lenovo-ideapad-3-15iil05-i3-81we003rvn-211520-101539-600x600.jpg', '<h2><a href=\"https://www.thegioididong.com/laptop/lenovo-ideapad-3-15iil05-i3-81we003rvn\" target=\"_blank\">Laptop Lenovo IdeaPad 3 15IIL05&nbsp;</a>l&agrave; sản phẩm hướng đến người d&ugrave;ng văn ph&ograve;ng, học sinh sinh vi&ecirc;n, xử l&yacute; ổn định c&aacute;c t&aacute;c vụ cơ bản hằng ng&agrave;y.</h2>\r\n\r\n<h3>Thiết kế sang trọng, cầm nhẹ tay</h3>\r\n\r\n<p><a href=\"https://www.thegioididong.com/laptop-lenovo-ideapad\" target=\"_blank\">Lenovo IdeaPad&nbsp;</a>3 c&oacute; mặt lưng xước dọc, logo khắc kim loại ở mặt lưng tạo n&ecirc;n vẻ cao cấp hơn so với c&aacute;c sản phẩm trước. Trọng lượng m&aacute;y&nbsp;<strong>1.85 kg</strong>&nbsp;cầm nhẹ tay cũng như thoải m&aacute;i cho v&agrave;o balo mang đi học hằng ng&agrave;y.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/44/223534/lenovo-ideapad-3-15iil05-i3-81we003rvn-kg-1.jpg\" onclick=\"return false;\"><img alt=\"Laptop Lenovo IdeaPad 3 15IIL05 gọn nhẹ, sang trọng\" src=\"https://cdn.tgdd.vn/Products/Images/44/223534/lenovo-ideapad-3-15iil05-i3-81we003rvn-kg-1.jpg\" style=\"height:auto; margin:10px auto\" /></a></p>\r\n\r\n<p>Bản lề gập mở&nbsp;<strong>180 độ&nbsp;</strong>gi&uacute;p bạn tương t&aacute;c với m&agrave;n h&igrave;nh nhiều g&oacute;c độ hơn cũng như tăng tuổi thọ cho m&aacute;y khi bạn lỡ tay mở m&agrave;n h&igrave;nh mạnh th&igrave; cũng kh&ocirc;ng bị g&atilde;y bản lề.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/44/223534/lenovo-ideapad-3-15iil05-i3-81we003rvn-180-do%CC%A3%CC%82-1.jpg\" onclick=\"return false;\"><img alt=\"Laptop Lenovo IdeaPad 3 15IIL05 bản lề linh hoạt\" src=\"https://cdn.tgdd.vn/Products/Images/44/223534/lenovo-ideapad-3-15iil05-i3-81we003rvn-180-do%CC%A3%CC%82-1.jpg\" style=\"height:auto; margin:10px auto\" /></a></p>\r\n\r\n<p>B&agrave;n ph&iacute;m c&oacute; cụm ph&iacute;m số dễ d&agrave;ng sử dụng cho việc nhập liệu, h&agrave;nh tr&igrave;nh ph&iacute;m tốt, c&oacute; độ nảy v&agrave; n&uacute;t bấm to n&ecirc;n việc bấm cũng dễ d&agrave;ng hơn.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/44/223534/lenovo-ideapad-3-15iil05-i3-81we003rvn-bp-so%CC%82%CC%81-1.jpg\" onclick=\"return false;\"><img alt=\"Laptop Lenovo IdeaPad 3 15IIL05 dễ dàng nhập liệu\" src=\"https://cdn.tgdd.vn/Products/Images/44/223534/lenovo-ideapad-3-15iil05-i3-81we003rvn-bp-so%CC%82%CC%81-1.jpg\" style=\"height:auto; margin:10px auto\" /></a></p>\r\n\r\n<h3>Hiệu năng vừa đủ cho c&ocirc;ng việc văn ph&ograve;ng</h3>\r\n\r\n<p>M&aacute;y trang bị chip Intel&nbsp;<a href=\"https://www.thegioididong.com/laptop?g=core-i3\" target=\"_blank\"><strong>Core i3</strong></a>&nbsp;thế hệ 10,&nbsp;<strong>Ram&nbsp;<a href=\"https://www.thegioididong.com/laptop?g=4-gb\" target=\"_blank\">4 GB</a></strong>&nbsp;cho ph&eacute;p bạn mở 2 3 ứng dụng c&ugrave;ng l&uacute;c m&agrave; m&aacute;y vẫn hoạt động tốt như soạn thảo tr&ecirc;n Word, nghe nhạc, chỉnh sửa h&igrave;nh ảnh,...</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/44/223534/lenovo-ideapad-3-15iil05-i3-81we003rvn-i5.jpg\" onclick=\"return false;\"><img alt=\"Laptop Lenovo IdeaPad 3 15IIL05 cấu hình vừa đủ dùng\" src=\"https://cdn.tgdd.vn/Products/Images/44/223534/lenovo-ideapad-3-15iil05-i3-81we003rvn-i5.jpg\" style=\"height:auto; margin:10px auto\" /></a></p>\r\n\r\n<h3>M&agrave;n h&igrave;nh rộng, viền m&aacute;y mỏng</h3>\r\n\r\n<p>Laptop Lenovo c&oacute; m&agrave;n h&igrave;nh&nbsp;<strong><a href=\"https://www.thegioididong.com/laptop-tren-15-inch\">15.6 inch</a></strong>, độ ph&acirc;n giải&nbsp;<strong>Full HD</strong>&nbsp;hiển thị sắc n&eacute;t mọi h&igrave;nh ảnh. Tấm nền TN v&agrave; c&ocirc;ng nghệ chống ch&oacute;i cho ph&eacute;p bạn sử dụng m&aacute;y ở nơi c&oacute; &aacute;nh s&aacute;ng mạnh m&agrave; kh&ocirc;ng bị ch&oacute;i.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/44/223534/lenovo-ideapad-3-15iil05-i3-81we003rvn-inch-1.jpg\" onclick=\"return false;\"><img alt=\"Laptop Lenovo IdeaPad 3 15IIL05 màn hình rộng rãi\" src=\"https://cdn.tgdd.vn/Products/Images/44/223534/lenovo-ideapad-3-15iil05-i3-81we003rvn-inch-1.jpg\" style=\"height:auto; margin:10px auto\" /></a></p>\r\n\r\n<p>Ph&iacute;a tr&ecirc;n viền m&agrave;n h&igrave;nh c&oacute; c&ocirc;ng tắt kh&oacute;a webcam khi kh&ocirc;ng sử dụng, đ&acirc;y l&agrave; c&ocirc;ng tắc độc quyền của nh&agrave; Lenovo gi&uacute;p bạn tr&aacute;nh bị đ&aacute;nh cắp th&ocirc;ng tin c&aacute; nh&acirc;n m&agrave; kh&ocirc;ng phải d&aacute;n sticker.&nbsp;</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/44/223534/lenovo-ideapad-3-15iil05-i3-81we003rvn-ma%CC%80n-tra%CC%A3%CC%82p.jpg\" onclick=\"return false;\"><img alt=\"Laptop Lenovo IdeaPad 3 15IIL05 có khóa camera an toàn\" src=\"https://cdn.tgdd.vn/Products/Images/44/223534/lenovo-ideapad-3-15iil05-i3-81we003rvn-ma%CC%80n-tra%CC%A3%CC%82p.jpg\" style=\"height:auto; margin:10px auto\" /></a></p>\r\n\r\n<p>Với c&aacute;c thao t&aacute;c lướt web, xem phim, soạn văn bản,... th&igrave; m&aacute;y hoạt động li&ecirc;n tục khoảng&nbsp; đến 4 giờ, đủ để bạn tham gia 1 buổi học hay buổi l&agrave;m việc hiệu quả.</p>\r\n\r\n<p>Laptop Lenovo IdeaPad 3 15IIL05 c&oacute; cấu h&igrave;nh vừa đủ d&ugrave;ng văn ph&ograve;ng, thiết kế đẹp mắt lại cầm nhẹ tay ph&ugrave; hợp với c&aacute;c bạn học sinh sinh vi&ecirc;n hay d&acirc;n văn ph&ograve;ng</p>', 1, 11, '2020-12-13 22:04:12', '2020-12-14 07:52:20', '/storage/product/y5IffSFf2kBhEqJg76bD.jpg', NULL, 7);
INSERT INTO `products` (`id`, `name`, `desc`, `price`, `slug`, `product_image`, `content`, `user_id`, `category_id`, `created_at`, `updated_at`, `product_image_path`, `deleted_at`, `trademark_id`) VALUES
(11, 'Lenovo IdeaPad Flex 5 14IIL i5 1035G1/8GB/512GB/Touch/Win10 (81X1001UVN)', 'Laptop Lenovo IdeaPad Flex 5 14IIL i5 1035G1/8GB/512GB/Touch/Win10 (81X1001UVN)', '18990000', 'lenovo-ideapad-flex-5-14iil-i5-1035g18gb512gbtouchwin10-81x1001uvn', 'lenovo-ideapad-flex-5-14iil-i5-81x1001uvn-ssd-i5-223538-600x600.jpg', '<h2>M&agrave;n h&igrave;nh đẹp, &acirc;m thanh sống động, thiết kế lật xoay linh hoạt c&ugrave;ng cấu h&igrave;nh mạnh mẽ đ&atilde; hội tụ trong <a href=\"https://www.thegioididong.com/laptop/lenovo-ideapad-flex-5-14iil-i5-81x1001uvn\" target=\"_blank\">Lenovo IdeaPad Flex 5 14IIL</a>, một m&aacute;y t&iacute;nh x&aacute;ch tay 2 trong 1 gi&uacute;p n&acirc;ng cao trải nghiệm của bạn hơn nữa đối với c&aacute;c hoạt động sử dụng m&aacute;y t&iacute;nh hằng ng&agrave;y.</h2>\r\n\r\n<h3>Hiệu suất cao với bộ xử l&yacute; Intel Core i5 Gen 10</h3>\r\n\r\n<p>Nhờ bộ xử l&yacute; Intel <a href=\"https://www.thegioididong.com/laptop?g=core-i5\" target=\"_blank\"><strong>Core i5</strong></a> thế hệ 10 vừa được ra mắt cuối năm 2019 v&agrave; ổ cứng <strong><a href=\"https://www.thegioididong.com/laptop-lenovo-o-cung-ssd\" target=\"_blank\">SSD</a> 512 GB</strong> nhanh ch&oacute;ng, bạn sẽ tận hưởng thời gian khởi động nhanh như chớp v&agrave; sự phản hồi ngay tức khắc của những c&uacute; click chuột.&nbsp;</p>\r\n\r\n<p>Xem th&ecirc;m:&nbsp;<a href=\"https://www.thegioididong.com/hoi-dap/tim-hieu-ve-vi-xu-ly-intel-core-the-he-10-1212148\" target=\"_blank\">T&igrave;m hiểu về CPU Intel Gen 10</a></p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/44/223538/lenovo-ideapad-flex-5-14iil-i5-81x1001uvn-ssd-i5.jpg\" onclick=\"return false;\"><img alt=\"Lenovo IdeaPad Flex 5 14IIL | Core i5 Gen 10\" src=\"https://cdn.tgdd.vn/Products/Images/44/223538/lenovo-ideapad-flex-5-14iil-i5-81x1001uvn-ssd-i5.jpg\" /></a></p>\r\n\r\n<p>Bộ nhớ <a href=\"https://www.thegioididong.com/laptop?g=8-gb\" target=\"_blank\"><strong>RAM 8 GB</strong></a> cho ph&eacute;p bạn sử dụng nhiều ứng dụng c&ugrave;ng l&uacute;c, đa t&aacute;c vụ với c&aacute;c chương tr&igrave;nh v&agrave; tệp hơn m&agrave; m&aacute;y kh&ocirc;ng bị chậm hay giật lag.&nbsp;</p>\r\n\r\n<p>Với cấu h&igrave;nh n&agrave;y, bạn dễ d&agrave;ng thiết kế n&ecirc;n những trang đồ hoạ 2D với phần mềm Photoshop, Ai,...</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/44/223538/lenovo-ideapad-flex-5-14iil-i5-81x1001uvn-ssd.jpg\" onclick=\"return false;\"><img alt=\"Lenovo IdeaPad Flex 5 14IIL | SSD 512 GB\" src=\"https://cdn.tgdd.vn/Products/Images/44/223538/lenovo-ideapad-flex-5-14iil-i5-81x1001uvn-ssd.jpg\" /></a></p>\r\n\r\n<h3>Bảo mật an to&agrave;n&nbsp;</h3>\r\n\r\n<p>Đăng nhập v&agrave;o Flex 5 của bạn ngay lập tức v&agrave; an to&agrave;n bằng cảm biến v&acirc;n tay với sự hỗ trợ của Windows Hello, sự đăng nhập th&ocirc;ng minh n&agrave;y khiến mật khẩu trở th&agrave;nh sự bất tiện khi phải nhập đi nhập lại d&ograve;ng mật khẩu để mở m&aacute;y khi cần l&agrave;m việc.</p>\r\n\r\n<p>Ngo&agrave;i ra, bạn c&ograve;n c&oacute; thể mua h&agrave;ng an to&agrave;n tại c&aacute;c trang web, ứng dụng chỉ bằng một c&uacute; chạm ng&oacute;n tay.&nbsp;</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/44/223538/lenovo-ideapad-flex-5-14iil-i5-81x1001uvn-vântay.jpg\" onclick=\"return false;\"><img alt=\"Lenovo IdeaPad Flex 5 14IIL | Bảo mật an toàn với cảm biến vân tay \" src=\"https://cdn.tgdd.vn/Products/Images/44/223538/lenovo-ideapad-flex-5-14iil-i5-81x1001uvn-vântay.jpg\" /></a></p>\r\n\r\n<h3>Kiểu d&aacute;ng đẹp, gọn nhẹ&nbsp;</h3>\r\n\r\n<p>Khi cần di chuyển, <a href=\"https://www.thegioididong.com/laptop-lenovo\" target=\"_blank\">Lenovo</a> IdeaPad Flex 5 14IIL nhỏ b&eacute; vừa đủ để cất v&agrave;o t&uacute;i v&agrave; đồng h&agrave;nh c&ugrave;ng bạn. Với c&acirc;n nặng <strong>1.5 kg</strong>, n&oacute; dễ d&agrave;ng c&ugrave;ng bạn đi bất cứ đ&acirc;u.</p>\r\n\r\n<p>Được ho&agrave;n thiện bằng nh&ocirc;m b&oacute;ng bẩy, <a href=\"https://www.thegioididong.com/laptop\" target=\"_blank\">laptop</a> Flex 5 tự h&agrave;o với c&aacute;c cạnh v&aacute;t được cắt ch&iacute;nh x&aacute;c được thiết kế cho một c&aacute;i nh&igrave;n sạch sẽ v&agrave; hiện đại.&nbsp;</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/44/223538/lenovo-ideapad-flex-5-14iil-i5-81x1001uvn-thiếtkế.jpg\" onclick=\"return false;\"><img alt=\"Lenovo IdeaPad Flex 5 14IIL | Kiểu dáng đẹp, gọn nhẹ \" src=\"https://cdn.tgdd.vn/Products/Images/44/223538/lenovo-ideapad-flex-5-14iil-i5-81x1001uvn-thiếtkế.jpg\" /></a></p>\r\n\r\n<h3>Linh hoạt với bản lề <a href=\"https://www.thegioididong.com/laptop-lenovo-man-hinh-gap-360-do\" target=\"_blank\">360 độ&nbsp;</a></h3>\r\n\r\n<p>Kh&ocirc;ng chỉ l&agrave; một <a href=\"https://www.thegioididong.com/laptop\" target=\"_blank\">m&aacute;y t&iacute;nh x&aacute;ch tay</a> truyền thống, Flex 5 với thiết kế bản lề 360 cứng c&aacute;p dễ d&agrave;ng chuyển sang chế độ m&aacute;y t&iacute;nh bảng để bạn check mail, chơi game giải tr&iacute; hoặc tr&igrave;nh chiếu MV ca nhạc ở chế độ lều.</p>\r\n\r\n<p>Với sự linh hoạt n&agrave;y, bạn sẽ lu&ocirc;n cảm thấy thoải m&aacute;i trong mọi t&aacute;c vụ.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/44/223538/lenovo-ideapad-flex-5-14iil-i5-81x1001uvn-bảnlề.jpg\" onclick=\"return false;\"><img alt=\"Lenovo IdeaPad Flex 5 14IIL | Máy tính xách tay 2 trong 1 \" src=\"https://cdn.tgdd.vn/Products/Images/44/223538/lenovo-ideapad-flex-5-14iil-i5-81x1001uvn-bảnlề.jpg\" /></a></p>\r\n\r\n<h3>H&igrave;nh ảnh r&otilde; r&agrave;ng, bắt mắt</h3>\r\n\r\n<p>Với cạnh viền hẹp, m&agrave;n h&igrave;nh cảm ứng <a href=\"https://www.thegioididong.com/laptop-14-inch\" target=\"_blank\"><strong>14 inch</strong></a> độ ph&acirc;n giải <strong>Full HD</strong> c&ugrave;ng tấm nền TN, bạn c&oacute; thể xem phim, lướt web m&agrave; chất lượng hiển thị kh&ocirc;ng bị thuy&ecirc;n giảm.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/laptop-lenovo-ideapad\" target=\"_blank\">Lenovo IdeaPad</a> Flex 5 14IIL sẽ rất l&iacute; tưởng khi được sử dụng trong l&agrave;m việc nh&oacute;m, chia sẻ t&agrave;i liệu, trao đổi t&agrave;i nguy&ecirc;n th&ocirc;ng tin hay xem phim tr&ecirc;n Netflix với bạn b&egrave;.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/44/223538/lenovo-ideapad-flex-5-14iil-i5-81x1001uvn-mànhình.jpg\" onclick=\"return false;\"><img alt=\"Lenovo IdeaPad Flex 5 14IIL | Màn hình cảm ứng 14 inch \" src=\"https://cdn.tgdd.vn/Products/Images/44/223538/lenovo-ideapad-flex-5-14iil-i5-81x1001uvn-mànhình.jpg\" /></a></p>\r\n\r\n<h3>Sống động với c&ocirc;ng nghệ Dolby Audio</h3>\r\n\r\n<p>Đắm ch&igrave;m trong playlist y&ecirc;u th&iacute;ch với loa <a href=\"https://www.thegioididong.com/hoi-dap/tim-hieu-ve-cong-nghe-dolby-audio-premium-1017812\" target=\"_blank\">Dolby Audio</a>. Nhờ v&agrave;o khả năng tạo n&ecirc;n hiệu ứng &acirc;m thanh v&ograve;m ti&ecirc;n tiến, Flex 5 mang đến chất lượng &acirc;m thanh to hơn, r&otilde; hơn m&agrave; kh&ocirc;ng bị m&eacute;o hay r&egrave;, đảm bảo &acirc;m thanh của bạn sẽ ổn định cho d&ugrave; bạn sử dụng Youtube hay c&aacute;c phần mềm học Tiếng Anh.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/44/223538/lenovo-ideapad-flex-5-14iil-i5-81x1001uvn-âmthanh.jpg\" onclick=\"return false;\"><img alt=\"Lenovo IdeaPad Flex 5 14IIL | Sống động với công nghệ Dolby Audio\" src=\"https://cdn.tgdd.vn/Products/Images/44/223538/lenovo-ideapad-flex-5-14iil-i5-81x1001uvn-âmthanh.jpg\" /></a></p>\r\n\r\n<p>Khởi động nhanh ch&oacute;ng, nhẹ nhưng cứng c&aacute;p, đa năng, tuyệt vời v&agrave; thoải m&aacute;i,... l&agrave; những mĩ từ d&agrave;nh ri&ecirc;ng cho Lenovo IdeaPad Flex 5 14IIL. Chiếc m&aacute;y t&iacute;nh 2 trong 1 n&agrave;y c&oacute; tất cả c&aacute;c t&iacute;nh năng th&ocirc;ng minh m&agrave; bạn đang t&igrave;m kiếm chỉ với một mức gi&aacute; rất phải chăng.</p>', 1, 11, '2020-12-13 22:51:29', '2020-12-13 22:51:29', '/storage/product/WzUq1O9i1uipNsERoQGQ.jpg', NULL, 7);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image_path` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_images`
--

INSERT INTO `product_images` (`id`, `image_path`, `product_id`, `created_at`, `updated_at`, `image_name`) VALUES
(10, '/storage/product/fxnHdKkhasCbMvkSM69r.jpg', 1, '2020-12-10 09:05:56', '2020-12-10 09:05:56', 'iphone-12-mini-white-1200jpg-org.jpg'),
(11, '/storage/product/b6AnZ8JNs3COgeBOZDLL.jpg', 1, '2020-12-10 09:05:56', '2020-12-10 09:05:56', 'iphone-12-mini-red-1200jpg-org.jpg'),
(12, '/storage/product/xPJlW8F6UCeXmpJ0UDIB.jpg', 1, '2020-12-10 09:05:56', '2020-12-10 09:05:56', 'iphone-12-mini-green-1200jpg-org.jpg'),
(14, '/storage/product/ezwtzgPzYinPDJ5dlYdk.jpg', 2, '2020-12-10 09:07:28', '2020-12-10 09:07:28', 'iphone-12-pro-max-xam-new-600x600-200x200.jpg'),
(15, '/storage/product/gFwHGwp8UBPFm5uiSj0B.jpg', 2, '2020-12-10 09:07:28', '2020-12-10 09:07:28', 'iphone-12-pro-max-vang-new-600x600-600x600.jpg'),
(16, '/storage/product/iORqamsCB67epRBo5aqc.jpg', 2, '2020-12-10 09:07:28', '2020-12-10 09:07:28', 'iphone-12-pro-max-vang-new-600x600-200x200.jpg'),
(17, '/storage/product/sqcTpTVA5vVM5EEumtLh.jpg', 2, '2020-12-10 09:07:28', '2020-12-10 09:07:28', 'iphone-12-pro-max-trang-bac-600x600-200x200.jpg'),
(18, '/storage/product/Wv2s7GNE3NMJHc3UzwMA.jpg', 3, '2020-12-10 09:10:00', '2020-12-10 09:10:00', 'iphone-12-xanh-duong-new-600x600-200x200.jpg'),
(19, '/storage/product/HMXqXbvwJ4NCKe4XGQza.jpg', 3, '2020-12-10 09:10:00', '2020-12-10 09:10:00', 'iphone-12-trang-new-600x600-600x600.jpg'),
(20, '/storage/product/xbJyCv4U7PR0t1PZpEjE.jpg', 3, '2020-12-10 09:10:00', '2020-12-10 09:10:00', 'iphone-12-do-new-600x600-200x200.jpg'),
(21, '/storage/product/PztiQPBOyzSxNTWlkrNC.jpg', 3, '2020-12-10 09:10:00', '2020-12-10 09:10:00', 'iphone-12-den-new-600x600-200x200.jpg'),
(22, '/storage/product/t5pASFGRXjmkFyu4x4Xo.jpg', 4, '2020-12-12 01:05:30', '2020-12-12 01:05:30', 'samsung-galaxy-m51-den-new-600x600-200x200.jpg'),
(23, '/storage/product/LKtM7hAg9MI0AKN69fBq.jpg', 4, '2020-12-12 01:05:30', '2020-12-12 01:05:30', 'samsung-galaxy-m51-trang-new-600x600-200x200.jpg'),
(24, '/storage/product/UNZ4esMTXvOELYqd9sSx.jpg', 5, '2020-12-12 01:08:09', '2020-12-12 01:08:09', 'oppo-a93-den-14-200x200.jpg'),
(25, '/storage/product/5MZD81LDf1rETU5v4Rpn.jpg', 5, '2020-12-12 01:08:09', '2020-12-12 01:08:09', 'oppo-a93-trang-14-200x200.jpg'),
(26, '/storage/product/k7SoogJpk323ctBHckDV.jpg', 6, '2020-12-12 01:10:41', '2020-12-12 01:10:41', 'realme-c17-blue-600x600-1-200x200.jpg'),
(27, '/storage/product/TQPtsT1MLzLMBq2b1YuX.jpg', 6, '2020-12-12 01:10:41', '2020-12-12 01:10:41', 'realme-c17-green-600x600-1-200x200.jpg'),
(28, '/storage/product/s7zNQzY7BJz5OFtIU0Cs.jpg', 7, '2020-12-13 06:37:45', '2020-12-13 06:37:45', 'oppo-a93-den-14-200x200.jpg'),
(29, '/storage/product/8o4hKALYf4lWismJIQNF.jpg', 7, '2020-12-13 06:37:45', '2020-12-13 06:37:45', 'oppo-a93-trang-14-200x200.jpg'),
(30, '/storage/product/QMD4KpCulkCwqF7LZKkt.jpg', 7, '2020-12-13 06:37:45', '2020-12-13 06:37:45', 'oppo-a93-trang-14-600x600.jpg'),
(32, '/storage/product/XpS4B3LM10WMjZGXPolP.jpg', 9, '2020-12-13 18:48:58', '2020-12-13 18:48:58', 'huawei-nova-7i-green-600x600-1-200x200.jpg'),
(33, '/storage/product/gEoIA7B3hZeBGCdSLbhx.jpg', 9, '2020-12-13 18:48:58', '2020-12-13 18:48:58', 'huawei-nova-7i-pink-600x600-1-200x200.jpg'),
(34, '/storage/product/BNTELuemJAAT6FZwLvWA.jpg', 9, '2020-12-13 18:48:58', '2020-12-13 18:48:58', 'huawei-nova-7i-pink-600x600-1-600x600.jpg'),
(35, '/storage/product/DZfNCB9wFsvcIkjKYRHI.jpg', 10, '2020-12-13 22:04:12', '2020-12-13 22:04:12', 'lenovo-ideapad-3-15iil05-i3-81we003rvn-1-180x125.jpg'),
(36, '/storage/product/TxJ7tjtueGdJeHcd6LI1.jpg', 10, '2020-12-13 22:04:12', '2020-12-13 22:04:12', 'lenovo-ideapad-3-15iil05-i3-81we003rvn-211520-101539-600x600.jpg'),
(37, '/storage/product/x0XeJnzj2mXy65A1guEu.jpg', 11, '2020-12-13 22:51:29', '2020-12-13 22:51:29', 'lenovo-ideapad-flex-5-14iil-i5-81x1001uvn-1-180x125.jpg'),
(38, '/storage/product/9FMhtv8t642qDlTko0dY.jpg', 11, '2020-12-13 22:51:29', '2020-12-13 22:51:29', 'lenovo-ideapad-flex-5-14iil-i5-81x1001uvn-ssd-i5-223538-600x600.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_tags`
--

CREATE TABLE `product_tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_tags`
--

INSERT INTO `product_tags` (`id`, `product_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(5, 1, 1, NULL, NULL),
(6, 1, 2, NULL, NULL),
(7, 2, 1, NULL, NULL),
(8, 2, 2, NULL, NULL),
(9, 3, 1, NULL, NULL),
(10, 3, 2, NULL, NULL),
(11, 4, 1, NULL, NULL),
(12, 4, 3, NULL, NULL),
(13, 5, 1, NULL, NULL),
(14, 5, 3, NULL, NULL),
(15, 6, 1, NULL, NULL),
(16, 6, 4, NULL, NULL),
(17, 7, 1, NULL, NULL),
(18, 7, 5, NULL, NULL),
(20, 9, 1, NULL, NULL),
(21, 9, 6, NULL, NULL),
(22, 10, 7, NULL, NULL),
(23, 10, 8, NULL, NULL),
(24, 10, 9, NULL, NULL),
(25, 11, 7, NULL, NULL),
(26, 11, 8, NULL, NULL),
(27, 11, 9, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Quản trị viên', '2020-12-09 00:46:13', '2020-12-09 00:46:13'),
(2, 'editor', 'Người soạn thảo nội dung', '2020-12-09 00:47:17', '2020-12-09 00:47:17'),
(3, 'developer', 'Người phát triển hệ thống', '2020-12-09 00:48:38', '2020-12-09 01:21:20'),
(4, 'guest', 'Khách', '2020-12-11 07:53:30', '2020-12-11 07:53:30');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role_user`
--

CREATE TABLE `role_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `role_user`
--

INSERT INTO `role_user` (`id`, `user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(6, 1, 1, NULL, NULL),
(8, 6, 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `config_key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `config_value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `settings`
--

INSERT INTO `settings` (`id`, `config_key`, `config_value`, `created_at`, `updated_at`, `type`) VALUES
(5, 'adsf', 'adf', '2020-11-16 02:07:10', '2020-11-16 02:07:10', 'text');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sliders`
--

INSERT INTO `sliders` (`id`, `name`, `description`, `slider_image`, `created_at`, `updated_at`) VALUES
(3, 'slider1', 'slider1', '/storage/slider/y8IdkfFUo2UwI2Yv45XK.jpg', '2020-12-11 23:33:07', '2020-12-11 23:33:07'),
(4, 'slider2', 'slider2', '/storage/slider/YgHBh9dwcIgOk6RB2OHY.jpg', '2020-12-11 23:35:54', '2020-12-11 23:35:54'),
(5, 'slider3', 'slider3', '/storage/slider/0Qhs0XMUEKdY1pP1mCtN.jpg', '2020-12-11 23:37:54', '2020-12-12 21:41:53');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tags`
--

INSERT INTO `tags` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'điện thoại', '2020-12-10 09:05:56', '2020-12-10 09:05:56'),
(2, 'iphone', '2020-12-10 09:05:56', '2020-12-10 09:05:56'),
(3, 'samsung', '2020-12-12 01:05:30', '2020-12-12 01:05:30'),
(4, 'realme', '2020-12-12 01:10:41', '2020-12-12 01:10:41'),
(5, 'oppo', '2020-12-13 06:37:45', '2020-12-13 06:37:45'),
(6, 'huawei', '2020-12-13 18:48:58', '2020-12-13 18:48:58'),
(7, 'laptop', '2020-12-13 22:04:12', '2020-12-13 22:04:12'),
(8, 'lenovo', '2020-12-13 22:04:12', '2020-12-13 22:04:12'),
(9, 'ideapad', '2020-12-13 22:04:12', '2020-12-13 22:04:12');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `trademarks`
--

CREATE TABLE `trademarks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `trademarks`
--

INSERT INTO `trademarks` (`id`, `name`, `code`, `logo`, `created_at`, `updated_at`) VALUES
(1, 'Apple', 'apple', '/storage/trademark/YHkOb6NtiaA4cr1VRKlH.', '2020-12-12 07:07:05', '2020-12-12 07:19:18'),
(2, 'Huawei', 'huawei', '/storage/trademark/MQi7aMz0HfdhV04Qe8bH.jpg', '2020-12-12 07:19:37', '2020-12-12 07:19:37'),
(3, 'Samsung', 'samsung', '/storage/trademark/5iSySOADlVENrSYS0b1B.jpeg', '2020-12-12 07:19:50', '2020-12-12 07:19:50'),
(4, 'Realme', 'realme', '/storage/trademark/y1VvI8F9bcbjryUuIr7z.jpg', '2020-12-12 07:20:04', '2020-12-12 07:20:04'),
(6, 'Oppo', 'oppo', '/storage/trademark/hg39uTkXulfRLBqZjxxv.png', '2020-12-12 07:32:59', '2020-12-12 07:32:59'),
(7, 'Lenovo', 'lenovo', '/storage/trademark/K4YXMgAIjbbQ29SMHr1J.png', '2020-12-13 22:32:33', '2020-12-13 22:32:33');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Đồng Quang Linh', 'quanglinhit19@gmail.com', NULL, '$2y$10$5zwayGwvwdZ6GwXLZl9ireZtoOJeIcab3TmgMks1oZ0SC8wxXGMoW', 'bDPH8L2obvxONe4HakmJNRC8do4G3ZVW9OcPZntUrZoLkV8EiDuUyVopScfP', '2020-12-08 09:35:19', '2020-12-08 09:35:19'),
(2, 'Phạm Thanh Nhàn', 'thanhnhan21@gmail.com', NULL, '$2y$10$N7WpK.rw7OrHkepHvDWrEe9y98pBLhvpGnwcV00.Ifzw/ENmWGPCm', NULL, '2020-12-08 09:35:40', '2020-12-08 09:35:40'),
(6, 'Nguyễn Văn Khách', 'khach@gmail.com', NULL, '$2y$10$fjxNpAYrHcT2UdssikwK7OoixLwtJtMCskovMQaTahuYhw7KbQeVO', 'wDeIKG43xVpgv1Dn5KGWClRWGEvI552IW0VXycEunhE1GncKOVklFlegLk2L', '2020-12-11 07:54:10', '2020-12-11 07:54:10');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product_tags`
--
ALTER TABLE `product_tags`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `trademarks`
--
ALTER TABLE `trademarks`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT cho bảng `permission_role`
--
ALTER TABLE `permission_role`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT cho bảng `product_tags`
--
ALTER TABLE `product_tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `trademarks`
--
ALTER TABLE `trademarks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
