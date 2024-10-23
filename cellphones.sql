-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 23, 2024 lúc 09:27 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `cellphones`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `accessory`
--

CREATE TABLE `accessory` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `accessory`
--

INSERT INTO `accessory` (`id`, `name`, `img`, `created_at`, `updated_at`) VALUES
(1, 'Phụ kiện Apple', 'MV7N2.webp', NULL, NULL),
(2, 'Cáp, sạc', 'CAPSAC.png', NULL, NULL),
(3, 'Pin sạc dự phòng', 'PINDUPHONG.png', NULL, NULL),
(4, 'Ốp lưng - Bao da', 'OPLUNG.png', NULL, NULL),
(5, 'Dán màn hình', 'DANMANHINH.png', NULL, NULL),
(6, 'Thẻ nhớ, USB', 'USB.png', NULL, NULL),
(7, 'Gaming Gear, Playstation', 'PLAYSTATION.png', NULL, NULL),
(8, 'Sim 4G', 'SIM4G.png', NULL, NULL),
(9, 'Thiết bị mạng', 'WIFI.png', NULL, NULL),
(10, 'Camera', 'CAMERA.png', NULL, NULL),
(11, 'Gimbal', 'GIMBAL.png', NULL, NULL),
(12, 'Flycam', 'FLYCAM.png', NULL, NULL),
(13, 'Máy ảnh', 'MAYANH.png', NULL, NULL),
(14, 'Chuột, bàn phím', 'BANPHIM.png', NULL, NULL),
(15, 'Balo, túi xách', 'BALO.png', NULL, NULL),
(16, 'Hub chuyển đổi', 'HUB.png', NULL, NULL),
(17, 'Phụ kiện điện thoại', 'PHUKIENDT.png', NULL, NULL),
(18, 'Phụ kiện laptop', 'PHUKIENLAPTOP.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `branches`
--

CREATE TABLE `branches` (
  `id` bigint(20) NOT NULL,
  `branch_name` varchar(255) NOT NULL,
  `type_product_id` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `branches`
--

INSERT INTO `branches` (`id`, `branch_name`, `type_product_id`, `created_at`, `updated_at`) VALUES
(1, 'iPhone', 1, NULL, NULL),
(2, 'Samsung', 1, NULL, NULL),
(3, 'Xiaomi', 1, NULL, NULL),
(4, 'OPPO', 1, NULL, NULL),
(5, 'Realme', 1, NULL, NULL),
(6, 'Vivo', 1, NULL, NULL),
(7, 'TECNO', 1, NULL, NULL),
(8, 'Infinix', 1, NULL, NULL),
(9, 'Nokia', 1, NULL, NULL),
(10, 'Nubia', 1, NULL, NULL),
(11, 'OnePlus', 1, NULL, NULL),
(12, 'Masstel', 1, NULL, NULL),
(13, 'Sony', 1, NULL, NULL),
(14, 'Itel', 1, NULL, NULL),
(15, 'Mac', 2, NULL, NULL),
(16, 'ASUS', 2, NULL, NULL),
(17, 'Lenovo', 2, NULL, NULL),
(18, 'Dell', 2, NULL, NULL),
(19, 'HP', 2, NULL, NULL),
(20, 'Acer', 2, NULL, NULL),
(21, 'LG', 2, NULL, NULL),
(22, 'Huawei', 2, NULL, NULL),
(23, 'MSI', 2, NULL, NULL),
(24, 'Gigabyte', 2, NULL, NULL),
(25, 'Vaio', 2, NULL, NULL),
(26, 'Microsoft', 2, NULL, NULL),
(27, 'Masstel', 2, NULL, NULL),
(28, 'ASUS', 7, NULL, NULL),
(29, 'Samsung', 7, NULL, NULL),
(30, 'Dell', 7, NULL, NULL),
(31, 'LG', 7, NULL, NULL),
(32, 'MSI', 7, NULL, NULL),
(33, 'Acer', 7, NULL, NULL),
(34, 'Xiaomi', 7, NULL, NULL),
(35, 'ViewSonic', 7, NULL, NULL),
(36, 'Philips', 7, NULL, NULL),
(37, 'AOC', 7, NULL, NULL),
(38, 'Dahua', 7, NULL, NULL),
(39, 'Apple ', 3, NULL, NULL),
(40, 'JBL', 3, NULL, NULL),
(41, 'Marshall', 3, NULL, NULL),
(42, 'Sony', 3, NULL, NULL),
(43, 'Soundpeats', 3, NULL, NULL),
(44, 'Xiaomi', 3, NULL, NULL),
(45, 'Samsung', 3, NULL, NULL),
(46, 'Sennheiser', 3, NULL, NULL),
(47, 'Beats', 3, NULL, NULL),
(48, 'ASUS', 3, NULL, NULL),
(49, 'Soul', 3, NULL, NULL),
(50, 'Huawei', 3, NULL, NULL),
(51, 'Edifier', 3, NULL, NULL),
(52, 'Apple Watch ', 4, NULL, NULL),
(53, 'Samsung ', 4, NULL, NULL),
(54, 'Xiaomi', 4, NULL, NULL),
(55, 'Huawei', 4, NULL, NULL),
(56, 'Coros', 4, NULL, NULL),
(57, 'Garmin', 4, NULL, NULL),
(58, 'Kieslect', 4, NULL, NULL),
(59, 'Amazfit', 4, NULL, NULL),
(60, 'Black Shark', 4, NULL, NULL),
(61, 'Mibro', 4, NULL, NULL),
(62, 'Masstel', 4, NULL, NULL),
(63, 'Haylou', 4, NULL, NULL),
(64, 'Kospet', 4, NULL, NULL),
(65, 'Nồi chiên không dầu', 5, NULL, NULL),
(66, 'máy rửa bát', 5, NULL, NULL),
(67, 'Lò vi sóng', 5, NULL, NULL),
(68, 'Nồi cơm điện', 5, NULL, NULL),
(69, 'Máy xay sinh tố', 5, NULL, NULL),
(70, 'Máy ép trái cây', 5, NULL, NULL),
(71, 'Máy làm sữa hạt', 5, NULL, NULL),
(72, 'Bếp điện', 5, NULL, NULL),
(73, 'Ấm siêu tốc', 5, NULL, NULL),
(74, 'Nồi áp suất', 5, NULL, NULL),
(75, 'Nồi nấu chậm', 5, NULL, NULL),
(76, 'Máy ép chập ', 5, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `buy_with_products`
--

CREATE TABLE `buy_with_products` (
  `product_key` bigint(20) NOT NULL,
  `buy_with_id` bigint(20) NOT NULL,
  `buy_with_price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `buy_with_products`
--

INSERT INTO `buy_with_products` (`product_key`, `buy_with_id`, `buy_with_price`, `created_at`, `updated_at`) VALUES
(72, 71, 200000, NULL, NULL),
(72, 73, 200000, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `item_lists` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) NOT NULL,
  `city_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cities`
--

INSERT INTO `cities` (`id`, `city_name`, `created_at`, `updated_at`) VALUES
(1, 'Hồ Chí Minh', NULL, NULL),
(2, 'Hà Nội', NULL, NULL),
(3, 'An Giang', NULL, NULL),
(4, 'Bà Rịa - Vũng Tàu', NULL, NULL),
(5, 'Bạc Liêu', NULL, NULL),
(6, 'Bắc Kạn', NULL, NULL),
(7, 'Bắc Giang', NULL, NULL),
(8, 'Bắc Ninh', NULL, NULL),
(9, 'Bến Tre', NULL, NULL),
(10, 'Bình Dương', NULL, NULL),
(11, 'Bình Định', NULL, NULL),
(12, 'Bình Phước', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `color_products`
--

CREATE TABLE `color_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img_color_product` varchar(255) NOT NULL,
  `name_color` varchar(255) NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `color_products`
--

INSERT INTO `color_products` (`id`, `img_color_product`, `name_color`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 'text_ng_n_21__3_51.webp', '', 73, NULL, NULL),
(2, 'text_ng_n_25__3_3.webp', '', 73, NULL, NULL),
(3, '2apple-watch-se-2023-40mm-vien-nhom-day-silicone-xanh-den-2_1.webp', '', 71, NULL, NULL),
(4, 'apple-watch-se-2023-40mm-vien-nhom-day-silicone-trang-starlight-1_1.webp', '', 71, NULL, NULL),
(5, 'mt3q3ref_vw_34fr_watch-case-44-aluminum-silver-nc-se_vw_34fr_watch-face-44-aluminum-silver-se_vw_34fr_1.webp', '', 71, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `component_pcs`
--

CREATE TABLE `component_pcs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `component_pcs`
--

INSERT INTO `component_pcs` (`id`, `name`, `img`, `created_at`, `updated_at`) VALUES
(1, 'PC ráp sẵn CellphoneS', 'PC.webp', NULL, NULL),
(2, 'CPU', 'cpu.webp', NULL, NULL),
(3, 'Mainboard', 'mainboard.webp', NULL, NULL),
(4, 'RAM', 'ram.webp', NULL, NULL),
(5, 'Ổ cứng', 'ssd.webp', NULL, NULL),
(6, 'Card màn hình', 'cardmh.webp', NULL, NULL),
(7, 'Nguồn máy tính', 'nguonpc.webp', NULL, NULL),
(8, 'Tản nhiệt', 'tan_nhiet.webp', NULL, NULL),
(9, 'Case máy tính', 'case_pc.webp', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `detail_image_products`
--

CREATE TABLE `detail_image_products` (
  `id` bigint(20) NOT NULL,
  `detail_img` varchar(100) NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `detail_image_products`
--

INSERT INTO `detail_image_products` (`id`, `detail_img`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 'xiaomi_14t_2_.webp', 72, NULL, NULL),
(2, 'xiaomi_14t.webp', 72, NULL, NULL),
(3, 'xiaomi_14t_1_.webp', 72, NULL, NULL),
(4, 'xiaomi_14t_13_.webp', 72, NULL, NULL),
(5, 'xiaomi_14t_14_.webp', 72, NULL, NULL),
(6, 'xiaomi_14t_15_.webp', 72, NULL, NULL),
(7, 'xiaomi_14t_17_.webp', 72, NULL, NULL),
(8, 'xiaomi_14t_16_.webp', 72, NULL, NULL),
(9, 'xiaomi_14t_18_.webp', 72, NULL, NULL),
(10, 'xiaomi_14t_11_.webp', 72, NULL, NULL),
(11, 'xiaomi_14t_10_.webp', 72, NULL, NULL),
(12, 'xiaomi_14t_9_.webp', 72, NULL, NULL),
(13, 'xiaomi_14t_8_.webp', 72, NULL, NULL),
(14, 'xiaomi_14t_5_.webp', 72, NULL, NULL),
(15, 'xiaomi_14t_4_.webp', 72, NULL, NULL),
(16, 'xiaomi_14t_3_.webp', 72, NULL, NULL),
(17, 'xiaomi_14t_7_.webp', 72, NULL, NULL),
(18, 'xiaomi_14t_6_.webp', 72, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `districts`
--

CREATE TABLE `districts` (
  `id` bigint(20) NOT NULL,
  `district_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `city_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `districts`
--

INSERT INTO `districts` (`id`, `district_name`, `created_at`, `updated_at`, `city_id`) VALUES
(1, 'Quận Tân Phú', NULL, NULL, 1),
(2, 'Quận 1', NULL, NULL, 1),
(3, 'Quận 2', NULL, NULL, 1),
(4, 'Quận 3', NULL, NULL, 1),
(5, 'Quận 4', NULL, NULL, 1),
(6, 'Quận 5', NULL, NULL, 1),
(7, 'Quận 6', NULL, NULL, 1),
(8, 'Quận 7', NULL, NULL, 1),
(9, 'Quận 8', NULL, NULL, 1),
(10, 'Quận 9', NULL, NULL, 1),
(11, 'Quận 10', NULL, NULL, 1),
(12, 'Quận 11', NULL, NULL, 1),
(13, 'Quận 12', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `item_lists`
--

CREATE TABLE `item_lists` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `item_lists`
--

INSERT INTO `item_lists` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'phụ kiện', NULL, NULL),
(2, 'linh kiện máy tính', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_08_26_002213_create_category_table', 1),
(5, '2024_09_07_093406_create_accessory_table', 1),
(6, '2024_09_27_085548_create_item_lists_table', 1),
(7, '2024_09_27_090426_create_products_table', 1),
(8, '2024_09_27_110107_create_mobile_branches_table', 2),
(9, '2024_09_28_073839_create_type_products_table', 3),
(10, '2024_09_28_090710_rename_mobile_branches_to_branches', 4),
(11, '2024_10_01_122023_create_component_pcs_table', 5),
(12, '2024_10_01_130230_create_used_goods_table', 6),
(13, '2024_10_01_140120_create_slider_sales_table', 7),
(14, '2024_10_01_152019_create_new_teches_table', 8),
(15, '2024_10_06_103857_add_column_to_products', 9),
(16, '2024_10_06_105055_add_column_to_products', 10),
(17, '2024_10_08_125835_rename_column_in_products', 11),
(18, '2024_10_08_134207_add_column_to_products', 12),
(19, '2024_10_13_112215_create_buy_with_products_table', 13),
(20, '2024_10_13_113500_remane_column_in_buy_with_products', 14),
(21, '2024_10_14_093942_create_buy_with_products_table', 15),
(22, '2024_10_14_100447_create_detail_image_products_table', 16),
(23, '2024_10_14_124826_create_stores_table', 17),
(24, '2024_10_14_130759_create_cities_table', 18),
(25, '2024_10_14_130946_create_districts_table', 18),
(26, '2024_10_14_131353_change_column_type_in_stores', 19),
(27, '2024_10_14_132942_create_stores_table', 20),
(28, '2024_10_14_134852_create_stores_table', 21),
(29, '2024_10_15_112401_create_ware_houses_table', 22),
(30, '2024_10_15_114623_add_new_column_in_stores', 23),
(31, '2024_10_17_095256_create_color_products_table', 24),
(32, '2024_10_23_134816_add_column_to_color_products', 25);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `new_teches`
--

CREATE TABLE `new_teches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `new_teches`
--

INSERT INTO `new_teches` (`id`, `title`, `img`, `created_at`, `updated_at`) VALUES
(1, 'Điểm danh loạt smartphone ra mắt trong tháng 10/2024: Xiaomi 15, OnePlus 13, OPPO Find X8 và còn gì nữa?', 'smartphone-ra-mat-thang-10.webp', NULL, NULL),
(2, 'Đánh giá pin iPhone 16 Pro: Cải thiện thời lượng pin tốt hơn nhiều so với đời trước!', 'danh-gia-pin-iphone-16-pro-cover-1.webp', NULL, NULL),
(3, 'Hé lộ ngày phát hành của Galaxy Fold6 Special Edition', 'Galaxy-Z-Fold6--Special-Edition-cover.webp', NULL, NULL),
(4, 'OPPO Find X8 được tiết lộ thêm nhiều thông tin thú vị trước thềm ra mắt', 'oppo-find-x8-info-truoc-them-ra-mat-1.webp', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `product_id` bigint(20) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `img` varchar(100) NOT NULL,
  `discount` int(11) DEFAULT NULL,
  `hot` tinyint(1) NOT NULL,
  `new` tinyint(1) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `branch_id` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `price`, `img`, `discount`, `hot`, `new`, `slug`, `branch_id`, `created_at`, `updated_at`) VALUES
(1, 'iPhone 16 Pro Max 256GB', 34990000, 'iphone-16-pro-max.webp', NULL, 1, 1, 'iphone-16-pro-max-256gb', 1, NULL, NULL),
(2, 'iPhone 16 128GB', 22990000, 'iphone-16-1.webp', 10, 0, 0, 'iphone-16-128gb', 1, NULL, NULL),
(3, 'Samsung Galaxy S24 Ultra 12GB 256GB', 33990000, 'ss-s24-ultra-xam-222.webp', NULL, 1, 1, 'samsung-galaxy-s24-ultra-12gb-256gb', 2, NULL, NULL),
(4, 'iPhone 16 Pro 128GB', 28990000, 'iphone-16-pro_1.webp', 10, 0, 0, 'iphone-16-pro-128gb', 1, NULL, NULL),
(5, 'iPhone 15 Pro Max 256GB', 3499000, 'iphone-15-pro-max_3.webp', 10, 1, 0, 'iphone-15-pro-max-256gb', 1, NULL, NULL),
(6, 'Samsung Galaxy Z Fold6', 43990000, 'samsung-galaxy-z-fold-6-xanh-5.webp', 10, 1, 1, 'samsung-galaxy-z-fold6', 2, NULL, NULL),
(7, 'iPhone 13 Pro 128GB', 17290000, 'iphone-13_2_.webp', NULL, 1, 0, 'iphone-13-pro-128gb', 1, NULL, NULL),
(8, 'iPhone 15 128GB', 22990000, 'iphone-15-plus_1_.webp', 10, 1, 0, 'iphone-15-128gb', 1, NULL, NULL),
(9, 'iPhone 14 Pro Max 128GB', 29990000, 'iphone-14-pro_2__5.webp', 10, 1, 0, 'iphone-14-pro-max-128gb', 1, NULL, NULL),
(10, 'Samsung Galaxy A15 LTE8GB 128GB', 4990000, 'galaxy-a15-xanh-01.webp', 10, 0, 0, 'samsung-galaxy-a15-lte8gb-128gb', 2, NULL, NULL),
(11, 'iPhone 15 Pro 128GB', 28990000, 'iphone-15-pro-max_3.webp', 10, 0, 0, 'iphone-15-pro-128gb', 1, NULL, NULL),
(12, 'iPhone 15 Plus 128GB', 25990000, 'iphone-15-plus_1__1.webp', 10, 0, 0, 'iphone-15-plus-128gb', 1, NULL, NULL),
(13, 'Samsung Galaxy S23 Ultra 12 Gb 512GB', 36990000, 'samsung-s23-ulatra_2_.webp', 10, 0, 0, 'samsung-galaxy-s23-ultra-12-gb-512gb', 2, NULL, NULL),
(14, 'Xiaomi POCO X6 Pro 5G 8GB 256GB', 9900000, 't_i_xu_ng_22__6.webp', 10, 0, 0, 'xiaomi-poco-x6-pro-5g-8gb-256gb', 3, NULL, NULL),
(15, 'Samsung Galaxy Z Flip6', 28990000, 'samsung-galaxy-z-flip-6-xanh-duong-6_2.webp', 10, 0, 0, 'samsung-galaxy-z-flip6', 2, NULL, NULL),
(16, 'Xiaomi Redmi Note 13(6GB 128GB)', 4890000, 'xiaomi-redmi-note-13_1__1_1.webp', 10, 0, 0, 'xiaomi-redmi-note-136gb-128gb', 3, NULL, NULL),
(17, 'Samsung Galaxy S23 8GB 128GB', 22990000, 'samsung-s23_1.webp', 10, 0, 0, 'samsung-galaxy-s23-8gb-128gb', 2, NULL, NULL),
(18, 'Xiaomi Redmi 14C', 3290000, 'xiaomi_redmi_14c_5_.webp', 0, 0, 0, 'xiaomi-redmi-14c', 3, NULL, NULL),
(19, 'OPPO A3 (6Gb 128GB)', 4990000, 'text_ng_n_7__2_102.webp', 10, 0, 0, 'oppo-a3-6gb-128gb', 4, NULL, NULL),
(20, 'Laptop ASUS TUF Gaming A14 FA401-RG061WS ', 46990000, 'text_d_i_1__3_4.webp', NULL, 0, 0, 'laptop-asus-tuf-gaming-a14-fa401-rg061ws', 16, NULL, NULL),
(21, 'Laptop Dell Inspiron 153520', 16490000, 'text_d_i_2__2_4.webp', 10, 0, 0, 'laptop-dell-inspiron-153520', 18, NULL, NULL),
(22, 'Apple MacBook Air M1 256GB 2020 ', 18190000, 'macbook_5_1.webp', NULL, 0, 0, 'apple-macbook-air-m1-256gb-2020', 15, NULL, NULL),
(23, 'Apple MacBook Air M2 2022 8GB 256Gb', 24090000, 'macbook_1__1_8.webp', 10, 0, 0, 'apple-macbook-air-m2-2022-8gb-256gb', 15, NULL, NULL),
(24, 'Laptop Dell Inspiron 153520 6R6NK', 13490000, 'text_ng_n_7__2_79.webp', 10, 0, 0, 'laptop-dell-inspiron-153520-6r6nk', 18, NULL, NULL),
(25, 'Laptop Gaming Acer Nitro 5 Tiger AN515-58-50D2', 22990000, 'text_d_i_5_3.webp', NULL, 0, 0, 'laptop-gaming-acer-nitro-5-tiger-an515-58-50d2', 20, NULL, NULL),
(26, 'Laptop HP Pavilion 15-EG3111TU 8U6L8PA', 17690000, 'text_ng_n_10__4_41.webp', 10, 0, 0, 'laptop-hp-pavilion-15-eg3111tu-8u6l8pa', 19, NULL, NULL),
(27, 'Laptop Lenovo ideapad Slim 5 14IAH8 83BF002NVN', 15890000, 'text_ng_n_8__1_91.webp', 10, 0, 0, 'laptop-lenovo-ideapad-slim-5-14iah8-83bf002nvn', 17, NULL, NULL),
(28, 'Laptop ASUS VivoBook Go 14 E1404FA-NK177W', 12490000, 'text_ng_n_-_2023-06-08t005130.908.webp', 10, 0, 0, 'laptop-asus-vivobook-go-14-e1404fa-nk177w', 16, NULL, NULL),
(29, 'Laptop Dell Inspiron 15 3520-5124BLK GJ8W7', 13990000, 'text_ng_n_7__2_79_1.webp', 10, 0, 0, 'laptop-dell-inspiron-15-3520-5124blk-gj8w7', 18, NULL, NULL),
(30, 'Laptop LENOVO LOQ 15IAX983GS001RVN', 21290000, 'group_509_9__1.webp', 10, 0, 0, 'laptop-lenovo-loq-15iax983gs001rvn', 17, NULL, NULL),
(31, 'MacBook Air M3 13 inch 2024 8GB-256GB', 26890000, 'macbook_2__5.webp', 10, 0, 0, 'macbook-air-m3-13-inch-2024-8gb-256gb', 15, NULL, NULL),
(32, 'Laptop Dell Vostro 3520 F0V0VI3', 9690000, 'laptop-dell-vostro-3520-f0v0vi3-thumbnails.webp', 10, 0, 0, 'laptop-dell-vostro-3520-f0v0vi3', 18, NULL, NULL),
(33, 'Laptop ASUS Vivobook 14 OLED A1405ZA-KM263W', 18490000, 'text_ng_n_15__7_59.webp', 10, 0, 0, 'laptop-asus-vivobook-14-oled-a1405za-km263w', 16, NULL, NULL),
(34, 'Laptop ASUS TUF Gaming F15FX507ZC4-HN074W', 18990000, 'group_509_4__1.webp', 10, 0, 0, 'laptop-asus-tuf-gaming-f15fx507zc4-hn074w', 16, NULL, NULL),
(35, 'Laptop Gaming Acer nitro 5 tiger AN515 58 52SP', 19490000, 'group_509_1__1.webp', 10, 0, 0, 'laptop-gaming-acer-nitro-5-tiger-an515-58-52sp', 20, NULL, NULL),
(36, 'Laptop ASUS Vivobook 14 OLED A1405ZA-KM264W', 16490000, 'text_ng_n_1__5_13.webp', NULL, 0, 0, 'laptop-asus-vivobook-14-oled-a1405za-km264w', 16, NULL, NULL),
(37, 'Laptop Lenovo LOQ 15IAX9 83GS001SVN', 19290000, 'group_509_5__1.webp', 10, 0, 0, 'laptop-lenovo-loq-15iax9-83gs001svn', 17, NULL, NULL),
(38, 'Laptop Lenovo IdeaPad Slim 3 14IAH8 83 EQ009VN', 15290000, 'text_ng_n_22__2_7.webp', 10, 0, 0, 'laptop-lenovo-ideapad-slim-3-14iah8-83-eq009vn', 17, NULL, NULL),
(39, 'Laptop Acer Gaming Aspire 7 A175-76-53PJ', 14490000, 'group_509_11__1.webp', 10, 0, 0, 'laptop-acer-gaming-aspire-7-a175-76-53pj', 20, NULL, NULL),
(40, 'Màn hình Monitor Xiaomi 27 inch A27i ELA5345EU', 2990000, 'man-hinh-xiaomi-a27i-ela5345eu-27-inch.webp', 10, 0, 0, 'man-hinh-monitor-xiaomi-27-inch-a27i-ela5345eu', 34, NULL, NULL),
(41, 'Màn hình Sasmung Gamning Odyssey G5 34 inch', 12990000, 'man-hinh-samsung-gaming-odyssey-g5-lc34g55twwexxv-34-inch.webp', 10, 0, 0, 'man-hinh-sasmung-gamning-odyssey-g5-34-inch', 29, NULL, NULL),
(42, 'Màn hình MSI Pro MP245V 23.8 inch', 2490000, 'frame_195_10_.webp', 10, 0, 0, 'man-hinh-msi-pro-mp245v-238-inch', 32, NULL, NULL),
(43, 'Màn hình LG UltraWide 29WQ600 29 inch', 6490000, 'group_258_5.webp', 10, 0, 0, 'man-hinh-lg-ultrawide-29wq600-29-inch', 31, NULL, NULL),
(44, 'Màn hình Gaming ViewSonic VX2479 HD PRO 180HZ 24 inch', 3990000, 'group_180_1__1_1.webp', 10, 0, 0, 'man-hinh-gaming-viewsonic-vx2479-hd-pro-180hz-24-inch', 35, NULL, NULL),
(45, 'Màn hình Gaming ASUS TUF VG249Q3A 24 inch', 3990000, 'man-hinh-gaming-asus-tuf-vg249q3a-24-inch.webp', NULL, 0, 0, 'man-hinh-gaming-asus-tuf-vg249q3a-24-inch', 28, NULL, NULL),
(46, 'Màn hình Samsung LS24C330GAEXXV 24 inch', 2990000, 'man-hinh-samsung-ls24c330gaexxv-24-inch.webp', 10, 0, 0, 'man-hinh-samsung-ls24c330gaexxv-24-inch', 29, NULL, NULL),
(47, 'Màn hình Dahua LM22-A200Y 22 inch', 1990000, 'group_177_1_.webp', 10, 0, 0, 'man-hinh-dahua-lm22-a200y-22-inch', 38, NULL, NULL),
(48, 'Màn hình Gaming E-DRAEGM25F100 25 inch', 3290000, 'man-hinh-e-dra-egm25f100-25-inch-spa.webp', 10, 0, 0, 'man-hinh-gaming-e-draegm25f100-25-inch', 38, NULL, NULL),
(49, 'PC CPS Gaming G01 i3 12100F/16GB-256GB/GTX 1650', 15290000, 'pc-cps-gaming-g1.webp', 29, 0, 0, 'pc-cps-gaming-g01-i3-12100f16gb-256gbgtx-1650', 30, NULL, NULL),
(50, 'Tai nghe Bluetooth Apple AriPods 4', 3490000, 'airpods-4-1.webp', NULL, 0, 0, 'tai-nghe-bluetooth-apple-aripods-4', 39, NULL, NULL),
(51, 'Tai nghe Bluetooth True Wireless HUAWEI FreeClip', 4990000, 'tai-nghe-khong-day-huawei-freeclip-000.webp', 30, 0, 0, 'tai-nghe-bluetooth-true-wireless-huawei-freeclip', 50, NULL, NULL),
(52, 'Tai nghe Bluetooth Apple AirPods Pro 2 2023 USB-C', 6190000, 'apple-airpods-pro-2-usb-c_1.webp', 6, 0, 0, 'tai-nghe-bluetooth-apple-airpods-pro-2-2023-usb-c', 39, NULL, NULL),
(53, 'Tai nghe Bluetooth Apple AirPods 3 2022 sạc có dây', 4490000, 'group_170_1_1.webp', 9, 0, 0, 'tai-nghe-bluetooth-apple-airpods-3-2022-sac-co-day', 39, NULL, NULL),
(54, 'Tai nghe Bluetooth Apple AirPods 2', 3990000, 'group_169_2.webp', 25, 0, 0, 'tai-nghe-bluetooth-apple-airpods-2', 39, NULL, NULL),
(55, 'Tai nghe Bluetooth Apple AirPods 3 MagSafe', 4790000, 'group_170_9.webp', 2, 0, 0, 'tai-nghe-bluetooth-apple-airpods-3-magsafe', 39, NULL, NULL),
(56, 'Loa Bluetooth JBL Partybox 710', 21900000, 'group_154_6.webp', 5, 0, 0, 'loa-bluetooth-jbl-partybox-710', 40, NULL, NULL),
(57, 'Tai nghe Bluetooth Apple AirPods Pro 2022', 6190000, 'group_111_5_.webp', 14, 0, 0, 'tai-nghe-bluetooth-apple-airpods-pro-2022', 39, NULL, NULL),
(58, 'Tai nghe Bluetooth chụo tai Sony WH-CH520', 1290000, 'tai-nghe-chup-tai-sony-wh-ch520-trang.webp', 16, 0, 0, 'tai-nghe-bluetooth-chuo-tai-sony-wh-ch520', 42, NULL, NULL),
(59, 'Tai nghe Bluetooth chụo tai Sony WH-1000xm5', 7990000, 'group_172_2.webp', 19, 0, 0, 'tai-nghe-bluetooth-chuo-tai-sony-wh-1000xm5', 42, NULL, NULL),
(60, 'Tai nghe Bluetooth True Wireless Samsung Galaxy Buds2 Pro', 4990000, 'samsung-galaxy-buds-2-pro-00.webp', 40, 0, 0, 'tai-nghe-bluetooth-true-wireless-samsung-galaxy-buds2-pro', 45, NULL, NULL),
(61, 'Apple Watch Series 10 42mm (GPS) Viền Nhôm Dây cao su Size S/M', 10990000, 'apple_lte_3__1_5.webp', NULL, 0, 0, 'apple-watch-series-10-42mm-gps-vien-nhom-day-cao-su-size-sm', 52, NULL, NULL),
(62, 'Đồng hồ thông minh Black Shark GT3', 990000, 'dong-ho-thong-minh-black-shark-gt3_1_.webp', 10, 0, 0, 'dong-ho-thong-minh-black-shark-gt3', 60, NULL, NULL),
(63, 'Đồng hồ thông minh Huawei Watch Fit 3', 2990000, 'huawei_1__1_2.webp', NULL, 0, 0, 'dong-ho-thong-minh-huawei-watch-fit-3', 55, NULL, NULL),
(64, 'Đồng hồ thông minh Samsung galaxy Watch Ultra', 16990000, 'group_565_4__1.webp', NULL, 0, 0, 'dong-ho-thong-minh-samsung-galaxy-watch-ultra', 53, NULL, NULL),
(65, 'Vòng đeo tay thông minh Xiaomi Mi Band 9', 990000, 'vong-deo-tay-thong-minh-xiaomi-mi-band-9_2__1_1.webp', NULL, 0, 0, 'vong-deo-tay-thong-minh-xiaomi-mi-band-9', 54, NULL, NULL),
(66, 'Đồng hồ thông minh trẻ em Myalo K74', 2490000, 'my_alo_k64.webp', 16, 0, 0, 'dong-ho-thong-minh-tre-em-myalo-k74', 61, NULL, NULL),
(67, 'Đồng hồ thông minh Huawei Watch GT4 dây da', 6490000, 'huawei_3__1_1.webp', 26, 0, 0, 'dong-ho-thong-minh-huawei-watch-gt4-day-da', 55, NULL, NULL),
(68, 'Đồng hồ Samsung Galaxy Fit 3', 1390000, 'samsung_3.webp', NULL, 0, 0, 'dong-ho-samsung-galaxy-fit-3', 53, NULL, NULL),
(69, 'Đồng hồ thông minh Black Shark GS3', 1990000, 'dong-ho-thong-minh-black-shark-gs3_2_.webp', 15, 0, 0, 'dong-ho-thong-minh-black-shark-gs3', 60, NULL, NULL),
(70, 'Đồng hồ thông minh Huawei Watch GT5', 0, 'smart_band_1__1.webp', NULL, 0, 0, 'dong-ho-thong-minh-huawei-watch-gt5', 55, NULL, NULL),
(71, 'Apple Watch SE 2 2023 40mm (GPS) viền nhôm', 6390000, 'apple-watch-se-2023-40mm.webp', 8, 0, 0, 'apple-watch-se-2-2023-40mm-gps-vien-nhom', 52, NULL, NULL),
(72, 'Xiaomi 14T', 13990000, 'xiaomi_14t_2_.webp', NULL, 0, 1, 'xiaomi-14t', 3, NULL, NULL),
(73, 'Đồng hồ thông minh Xiaomi Redmi Watch 5 Lite', 1290000, 'group_574_1_.webp', 10, 0, 0, 'dong-ho-thong-minh-xiaomi-redmi-watch-5-lite', 54, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slider_sales`
--

CREATE TABLE `slider_sales` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `slider_sales`
--

INSERT INTO `slider_sales` (`id`, `img`, `created_at`, `updated_at`) VALUES
(1, 'b2s-2024-slide-full-deal.webp', NULL, NULL),
(2, 'b2s-2024-slide-laptop.webp', NULL, NULL),
(3, 'b2s-2024-slide-macbook.webp', NULL, NULL),
(4, 'b2s-2024-slide-samsung.webp', NULL, NULL),
(5, 'b2s-ipad-update-new-25-06.webp', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `stores`
--

CREATE TABLE `stores` (
  `store_id` bigint(20) NOT NULL,
  `district_id` bigint(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `hot_line` varchar(12) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `stores`
--

INSERT INTO `stores` (`store_id`, `district_id`, `address`, `hot_line`, `created_at`, `updated_at`) VALUES
(1, 1, '474 đường Đ.Lê Trọng Tấn,Sơn Kỳ,Q.Tân Phú', '02871083355', NULL, NULL),
(2, 3, '139 Trần Não, P. Bình An,Quận 2', '02871000132', NULL, NULL),
(7, 2, '159 Nguyễn Thị Minh Khai, P.Phú Thuận, Quận 1', '02871066159', NULL, NULL),
(8, 2, '220 Trần Quang Khải, P.Tân Định, Quận 1', '02871000218', NULL, NULL),
(9, 2, '55B Trần Quang Khải, P.Tân Định, Quận 1', '02871083355', NULL, NULL),
(10, 2, '134 Nguyễn Thái Học, P.Phạm Ngũ Lão, Quận 1', '02871000132', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `test`
--

CREATE TABLE `test` (
  `id` bigint(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `type` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `type_products`
--

CREATE TABLE `type_products` (
  `id` bigint(20) NOT NULL,
  `type_product_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `type_products`
--

INSERT INTO `type_products` (`id`, `type_product_name`, `created_at`, `updated_at`) VALUES
(1, 'Điện thoại, Table', NULL, NULL),
(2, 'Laptop', NULL, NULL),
(3, 'Âm thanh', NULL, NULL),
(4, 'Đồng hồ, Camera', NULL, NULL),
(5, 'Đồ gia dụng', NULL, NULL),
(6, 'Phụ kiện', NULL, NULL),
(7, 'PC,Màn hình,Máy tính', NULL, NULL),
(8, 'Tivi', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `used_goods`
--

CREATE TABLE `used_goods` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `used_goods`
--

INSERT INTO `used_goods` (`id`, `name`, `img`, `created_at`, `updated_at`) VALUES
(1, 'Điện thoại cũ', 'dtcu.webp', NULL, NULL),
(2, 'Máy tính bảng cũ', 'mtpcu.webp', NULL, NULL),
(3, 'Mac cũ', 'maccu.webp', NULL, NULL),
(4, 'Laptop cũ', 'laptopcu.webp', NULL, NULL),
(5, 'Tai nghe cũ', 'tainghecu.webp', NULL, NULL),
(6, 'Loa cũ', 'loacu.webp', NULL, NULL),
(7, 'Đồng hồ thông minh cũ', 'watchcu.webp', NULL, NULL),
(8, 'Đồ gia dụng cũ', 'dogiadungcu.webp', NULL, NULL),
(9, 'Phụ kiện cũ', 'phukiencu.webp', NULL, NULL),
(10, 'Màn hình cũ', 'manhinhcu.webp', NULL, NULL),
(11, 'Tivi cũ', 'tivicu.webp', NULL, NULL),
(12, 'Cáp sạc cũ', 'capsaccu.webp', NULL, NULL),
(13, 'Pin dự phòng cũ', 'pincu.webp', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ware_houses`
--

CREATE TABLE `ware_houses` (
  `warehouse_store_id` bigint(20) NOT NULL,
  `warehouse_product_id` bigint(20) NOT NULL,
  `warehouse_product_quantity` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ware_houses`
--

INSERT INTO `ware_houses` (`warehouse_store_id`, `warehouse_product_id`, `warehouse_product_quantity`, `created_at`, `updated_at`) VALUES
(1, 72, 10, NULL, NULL),
(2, 72, 12, NULL, NULL),
(7, 72, 1, NULL, NULL),
(8, 72, 2, NULL, NULL),
(9, 72, 2, NULL, NULL),
(10, 72, 2, NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `accessory`
--
ALTER TABLE `accessory`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_type_product` (`type_product_id`);

--
-- Chỉ mục cho bảng `buy_with_products`
--
ALTER TABLE `buy_with_products`
  ADD PRIMARY KEY (`product_key`,`buy_with_id`),
  ADD KEY `FK_buy_with_products_id` (`buy_with_id`);

--
-- Chỉ mục cho bảng `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Chỉ mục cho bảng `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_item_lists` (`item_lists`);

--
-- Chỉ mục cho bảng `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `color_products`
--
ALTER TABLE `color_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `color_products_product_id_foreign` (`product_id`);

--
-- Chỉ mục cho bảng `component_pcs`
--
ALTER TABLE `component_pcs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `detail_image_products`
--
ALTER TABLE `detail_image_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detail_image_products_product_id_foreign` (`product_id`);

--
-- Chỉ mục cho bảng `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_city` (`city_id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `item_lists`
--
ALTER TABLE `item_lists`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Chỉ mục cho bảng `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `new_teches`
--
ALTER TABLE `new_teches`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `fk_branches` (`branch_id`);

--
-- Chỉ mục cho bảng `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Chỉ mục cho bảng `slider_sales`
--
ALTER TABLE `slider_sales`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `stores`
--
ALTER TABLE `stores`
  ADD PRIMARY KEY (`store_id`),
  ADD KEY `stores_district_id_foreign` (`district_id`);

--
-- Chỉ mục cho bảng `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `type_products`
--
ALTER TABLE `type_products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `used_goods`
--
ALTER TABLE `used_goods`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Chỉ mục cho bảng `ware_houses`
--
ALTER TABLE `ware_houses`
  ADD PRIMARY KEY (`warehouse_store_id`,`warehouse_product_id`),
  ADD KEY `ware_houses_warehouse_product_id_foreign` (`warehouse_product_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `accessory`
--
ALTER TABLE `accessory`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `branches`
--
ALTER TABLE `branches`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `color_products`
--
ALTER TABLE `color_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `component_pcs`
--
ALTER TABLE `component_pcs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `detail_image_products`
--
ALTER TABLE `detail_image_products`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `districts`
--
ALTER TABLE `districts`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `item_lists`
--
ALTER TABLE `item_lists`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `new_teches`
--
ALTER TABLE `new_teches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `product_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT cho bảng `slider_sales`
--
ALTER TABLE `slider_sales`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `stores`
--
ALTER TABLE `stores`
  MODIFY `store_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `test`
--
ALTER TABLE `test`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `type_products`
--
ALTER TABLE `type_products`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `used_goods`
--
ALTER TABLE `used_goods`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `branches`
--
ALTER TABLE `branches`
  ADD CONSTRAINT `fk_type_product` FOREIGN KEY (`type_product_id`) REFERENCES `type_products` (`id`);

--
-- Các ràng buộc cho bảng `buy_with_products`
--
ALTER TABLE `buy_with_products`
  ADD CONSTRAINT `FK_buy_with_products` FOREIGN KEY (`product_key`) REFERENCES `products` (`product_id`),
  ADD CONSTRAINT `FK_buy_with_products_id` FOREIGN KEY (`buy_with_id`) REFERENCES `products` (`product_id`);

--
-- Các ràng buộc cho bảng `category`
--
ALTER TABLE `category`
  ADD CONSTRAINT `fk_item_lists` FOREIGN KEY (`item_lists`) REFERENCES `item_lists` (`id`);

--
-- Các ràng buộc cho bảng `color_products`
--
ALTER TABLE `color_products`
  ADD CONSTRAINT `color_products_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `detail_image_products`
--
ALTER TABLE `detail_image_products`
  ADD CONSTRAINT `detail_image_products_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `districts`
--
ALTER TABLE `districts`
  ADD CONSTRAINT `fk_city` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`);

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_branches` FOREIGN KEY (`branch_id`) REFERENCES `branches` (`id`);

--
-- Các ràng buộc cho bảng `stores`
--
ALTER TABLE `stores`
  ADD CONSTRAINT `stores_district_id_foreign` FOREIGN KEY (`district_id`) REFERENCES `districts` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `ware_houses`
--
ALTER TABLE `ware_houses`
  ADD CONSTRAINT `ware_houses_warehouse_product_id_foreign` FOREIGN KEY (`warehouse_product_id`) REFERENCES `products` (`product_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `ware_houses_warehouse_store_id_foreign` FOREIGN KEY (`warehouse_store_id`) REFERENCES `stores` (`store_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
