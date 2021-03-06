-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 05, 2021 lúc 04:57 AM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `elaraveltoco`
--

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
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

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(5, '2014_10_12_000000_create_users_table', 1),
(6, '2014_10_12_100000_create_password_resets_table', 1),
(7, '2019_08_19_000000_create_failed_jobs_table', 1),
(8, '2020_11_09_172006_create_tbl_admin_table', 1),
(9, '2020_11_09_172006_create_tbl_category_product', 2),
(10, '2020_11_12_172006_create_tbl_category_product', 3),
(11, '2020_11_11_172006_create_tbl_category_product', 4),
(12, '2020_11_11_172006_create_tbl_product', 5),
(13, '2020_11_20_074912_create_tbl_customer', 6),
(14, '2020_11_29_140629_tbl_customer', 7),
(15, '2020_11_29_143739_tbl_shipping', 8),
(16, '2020_11_29_163544_tbl_payment', 9),
(17, '2020_11_29_163644_tbl_order', 9),
(18, '2020_11_29_163712_tbl_order_details', 9);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(10) UNSIGNED NOT NULL,
  `admin_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_email`, `admin_password`, `admin_name`, `admin_phone`, `created_at`, `updated_at`) VALUES
(1, 'linh@gmail.com', 'linhlinh', 'Linh', '0346311464', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_category_product`
--

CREATE TABLE `tbl_category_product` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_category_product`
--

INSERT INTO `tbl_category_product` (`category_id`, `category_name`, `meta_keywords`, `category_desc`, `category_status`, `created_at`, `updated_at`) VALUES
(5, 'Trà', 'trà giải nhiệt, trà đặc biệt', 'ờ', 1, NULL, NULL),
(6, 'Đá xay', 'đá xay, đá xay mát lạnh', 'ok', 1, NULL, NULL),
(10, 'Trà sữa', 'trà sữa siêu thơm', 'Ngon', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_coupon`
--

CREATE TABLE `tbl_coupon` (
  `coupon_id` int(11) NOT NULL,
  `coupon_name` varchar(150) NOT NULL,
  `coupon_time` int(50) NOT NULL,
  `coupon_condition` int(11) NOT NULL,
  `coupon_number` int(11) NOT NULL,
  `coupon_code` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_coupon`
--

INSERT INTO `tbl_coupon` (`coupon_id`, `coupon_name`, `coupon_time`, `coupon_condition`, `coupon_number`, `coupon_code`) VALUES
(3, 'Thích thì giảm', 18, 0, 50, 'thichthigiam'),
(4, 'Giảm 30/4', 30, 1, 50000, '3004');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_customers`
--

CREATE TABLE `tbl_customers` (
  `customer_id` int(10) UNSIGNED NOT NULL,
  `customer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_token` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_customers`
--

INSERT INTO `tbl_customers` (`customer_id`, `customer_name`, `customer_email`, `customer_password`, `customer_phone`, `customer_token`, `created_at`, `updated_at`) VALUES
(2, 'linh', 'linh@gmail.com', 'bcd4fbde6d3c14d087b78301a1cd38c1', '0355555555', NULL, NULL, NULL),
(5, 'Linh', '123@gmail.com', '4297f44b13955235245b2497399d7a93', '123123', NULL, NULL, NULL),
(6, 'test', '123@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2345678', NULL, NULL, NULL),
(7, 'Yến Linh', 'linlin@gmail.com', '993f1df9451ccbaab7428f4ed519fd8c', '0366668945', NULL, NULL, NULL),
(8, 'Đỗ Thị Yến Linh', 'dolinh.17.09.99@gmail.com', '9399bc77c46731abbb2bc7091726572d', '0366445692', '2e4LL3mYWc9Ihyx1', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_feeship`
--

CREATE TABLE `tbl_feeship` (
  `fee_id` int(11) NOT NULL,
  `fee_matp` int(10) NOT NULL,
  `fee_maqh` int(10) NOT NULL,
  `fee_xaid` int(10) NOT NULL,
  `fee_feeship` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_feeship`
--

INSERT INTO `tbl_feeship` (`fee_id`, `fee_matp`, `fee_maqh`, `fee_xaid`, `fee_feeship`) VALUES
(1, 74, 718, 25750, '10000'),
(3, 74, 718, 25744, '30000'),
(4, 74, 718, 25741, '35000'),
(5, 74, 718, 25747, '40000'),
(6, 74, 718, 25756, '10000'),
(7, 74, 718, 25759, '30000'),
(8, 74, 718, 25760, '20000'),
(9, 74, 718, 25762, '20000'),
(10, 74, 718, 25763, '15000'),
(11, 74, 718, 25765, '30000'),
(12, 74, 718, 25768, '35000'),
(13, 74, 718, 25771, '25000'),
(14, 74, 718, 25774, '20000');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order`
--

CREATE TABLE `tbl_order` (
  `order_id` int(10) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `shipping_id` int(11) NOT NULL,
  `order_status` int(20) NOT NULL,
  `order_code` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `customer_id`, `shipping_id`, `order_status`, `order_code`, `created_at`, `updated_at`) VALUES
(53, 2, 46, 1, 'bdc5d', '2021-04-29 06:29:46', NULL),
(54, 2, 47, 1, 'ab6b6', '2021-04-29 06:31:24', NULL),
(55, 2, 48, 1, '6a6e9', '2021-04-29 06:31:25', NULL),
(56, 2, 49, 1, '343b0', '2021-04-29 06:31:26', NULL),
(57, 2, 50, 1, 'f7a13', '2021-04-29 06:31:26', NULL),
(58, 2, 51, 1, '21c81', '2021-04-29 06:31:27', NULL),
(59, 2, 52, 1, '1eb17', '2021-04-29 06:32:01', NULL),
(60, 2, 53, 1, 'e4be9', '2021-04-29 06:33:34', NULL),
(61, 2, 54, 1, '1371b', '2021-04-29 06:36:10', NULL),
(62, 2, 55, 1, 'a721b', '2021-04-29 06:42:20', NULL),
(63, 2, 58, 1, '25e71', '2021-05-03 06:47:01', NULL),
(64, 2, 59, 1, 'c0e5a', '2021-05-03 07:03:21', NULL),
(65, 8, 60, 1, 'a371e', '2021-05-03 17:31:49', NULL),
(66, 2, 61, 1, '33fbf', '2021-05-04 13:48:06', NULL),
(67, 2, 64, 1, 'f1ca3', '2021-05-05 02:42:00', NULL),
(68, 2, 65, 1, 'f1ca3', '2021-05-05 02:42:15', NULL),
(69, 2, 66, 1, 'f1ca3', '2021-05-05 02:44:01', NULL),
(70, 2, 67, 1, '60487', '2021-05-05 02:47:06', NULL),
(71, 2, 68, 1, '60487', '2021-05-05 02:47:34', NULL),
(72, 2, 69, 1, '60487', '2021-05-05 02:49:45', NULL),
(73, 2, 70, 1, '60487', '2021-05-05 02:49:49', NULL),
(74, 2, 71, 1, '60487', '2021-05-05 02:49:51', NULL),
(75, 2, 72, 1, '60487', '2021-05-05 02:50:52', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order_details`
--

CREATE TABLE `tbl_order_details` (
  `order_details_id` int(10) UNSIGNED NOT NULL,
  `order_code` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_sales_quantity` int(11) NOT NULL,
  `product_coupon` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_feeship` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_order_details`
--

INSERT INTO `tbl_order_details` (`order_details_id`, `order_code`, `product_id`, `product_name`, `product_price`, `product_sales_quantity`, `product_coupon`, `product_feeship`, `created_at`, `updated_at`) VALUES
(56, 'bdc5d', 33, 'Trà đen', '60000', 1, 'thichthigiam', '25000', NULL, NULL),
(57, 'bdc5d', 15, 'Caramel đá xay', '40000', 1, 'thichthigiam', '25000', NULL, NULL),
(58, 'bdc5d', 14, 'Dâu tằm', '90000', 1, 'thichthigiam', '25000', NULL, NULL),
(59, 'a721b', 15, 'Caramel đá xay', '40000', 1, 'no', '30000', NULL, NULL),
(60, 'a721b', 33, 'Trà đen', '60000', 1, 'no', '30000', NULL, NULL),
(61, '25e71', 33, 'Trà đen', '60000', 1, 'no', '30000', NULL, NULL),
(62, '25e71', 15, 'Caramel đá xay', '40000', 1, 'no', '30000', NULL, NULL),
(63, '25e71', 14, 'Dâu tằm', '90000', 1, 'no', '30000', NULL, NULL),
(64, 'c0e5a', 15, 'Caramel đá xay', '40000', 1, 'no', '25000', NULL, NULL),
(65, 'a371e', 15, 'Caramel đá xay', '40000', 1, 'thichthigiam', '30000', NULL, NULL),
(66, '33fbf', 15, 'Caramel đá xay', '40000', 1, 'thichthigiam', '30000', NULL, NULL),
(67, '33fbf', 14, 'Dâu tằm', '90000', 1, 'thichthigiam', '30000', NULL, NULL),
(68, '33fbf', 33, 'Trà đen', '60000', 1, 'thichthigiam', '30000', NULL, NULL),
(69, 'f1ca3', 15, 'Caramel đá xay', '40000', 1, 'no', '35000', NULL, NULL),
(70, '60487', 33, 'Trà đen', '60000', 1, 'no', '35000', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `category_id`, `product_name`, `product_desc`, `meta_keywords`, `product_price`, `product_image`, `product_status`, `created_at`, `updated_at`) VALUES
(11, 4, 'Trân châu sợi', 'ok', 'trân châu', '10000', 'tcsoi59.jpg', 1, NULL, NULL),
(12, 10, 'Trà sữa trân châu hoàng gia', 'ok', 'trà sữa', '90000', 'Tranchauhg9.jpg', 1, NULL, NULL),
(13, 10, 'Trà sữa trân châu sợi', 'ngon', 'trà sữa', '80000', 'tranchausoi44.jpg', 1, NULL, NULL),
(14, 10, 'Dâu tằm', 'ngon', 'trà', '90000', 'dautam72.jpg', 1, NULL, NULL),
(15, 6, 'Caramel đá xay', 'được', 'đá xay', '40000', 'caramel5.jpg', 1, NULL, NULL),
(33, 5, 'Trà đen', 'ngon nè', 'ngon', '60000', 'blacktea79.jpg', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_quanhuyen`
--

CREATE TABLE `tbl_quanhuyen` (
  `maqh` varchar(5) CHARACTER SET utf8 NOT NULL,
  `name_quanhuyen` varchar(100) CHARACTER SET utf8 NOT NULL,
  `type` varchar(30) CHARACTER SET utf8 NOT NULL,
  `matp` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `tbl_quanhuyen`
--

INSERT INTO `tbl_quanhuyen` (`maqh`, `name_quanhuyen`, `type`, `matp`) VALUES
('718', 'Thành phố Thủ Dầu Một', 'Thành phố', 74);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_rating`
--

CREATE TABLE `tbl_rating` (
  `rating_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_rating`
--

INSERT INTO `tbl_rating` (`rating_id`, `product_id`, `rating`) VALUES
(1, 33, 3),
(2, 33, 5),
(3, 33, 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_shipping`
--

CREATE TABLE `tbl_shipping` (
  `shipping_id` int(10) UNSIGNED NOT NULL,
  `shipping_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `shipping_notes` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_method` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_shipping`
--

INSERT INTO `tbl_shipping` (`shipping_id`, `shipping_name`, `shipping_address`, `shipping_phone`, `shipping_email`, `shipping_notes`, `shipping_method`, `created_at`, `updated_at`) VALUES
(55, 'lll', 'Bình Dương', '0346333333', 'linh@gmail.com', 'ddddd', 0, NULL, NULL),
(56, 'Mẹ', 'Bình Dương', '0000000000000', 'me@gmail.com', '0000000000', 1, NULL, NULL),
(57, 'Mẹ', 'Bình Dương', '0000000000000', 'me@gmail.com', '0000000000', 1, NULL, NULL),
(58, 'Mẹ', 'Không', '000000', 'me@gmail.com', '000000000', 1, NULL, NULL),
(59, 'dddddd', 'ddddđ', 'ddddddd', 'dd@gmail.com', 'dddddd', 1, NULL, NULL),
(60, 'ggg', 'gggggg', 'ggggggg', 'g@gmail.com', 'ggggg', 1, NULL, NULL),
(61, 'kkkkkkk', 'kkkkkkkkkk', 'kkkkkkkk', 'f@gmail.com', 'kkkkkkkk', 0, NULL, NULL),
(62, 'linh', 'lll', 'lllll', 'l@gmail.com', 'lllll', 0, NULL, NULL),
(63, 'linh', 'linh', 'linh', 'l@gmail.com', 'linh', 0, NULL, NULL),
(64, 'linh', 'linh', 'linh', 'l@gmail.com', 'ffffffff', 0, NULL, NULL),
(65, 'linh', 'linh', 'linh', 'l@gmail.com', 'ffffffff', 0, NULL, NULL),
(66, 'linh', 'linh', 'linh', 'l@gmail.com', 'ffffffff', 0, NULL, NULL),
(67, 'pppppp', 'pppppp', '0000000', 'p@gmail.com', 'pppppp', 0, NULL, NULL),
(68, 'pppppp', 'pppppp', '0000000', 'p@gmail.com', 'pppppp', 0, NULL, NULL),
(69, 'pppppp', 'pppppp', '0000000', 'p@gmail.com', 'pppppp', 0, NULL, NULL),
(70, 'pppppp', 'pppppp', '0000000', 'p@gmail.com', 'pppppp', 0, NULL, NULL),
(71, 'pppppp', 'pppppp', '0000000', 'p@gmail.com', 'pppppp', 0, NULL, NULL),
(72, 'pppppp', 'pppppp', '0000000', 'p@gmail.com', 'pppppp', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_slider`
--

CREATE TABLE `tbl_slider` (
  `slider_id` int(11) NOT NULL,
  `slider_name` varchar(255) NOT NULL,
  `slider_status` int(11) NOT NULL,
  `slider_image` varchar(100) NOT NULL,
  `slider_desc` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_slider`
--

INSERT INTO `tbl_slider` (`slider_id`, `slider_name`, `slider_status`, `slider_image`, `slider_desc`) VALUES
(1, 'Trân châu sợi', 1, 'tcsoi5995.jpg', 'Ngon lắm'),
(3, 'trà sữa', 1, 'dautam61.jpg', 'ddđ'),
(4, 'hồng trà', 1, 'hongtra69.jpg', 'ddddd'),
(5, 'fffffffff', 0, 'tranchauduongden69.jpg', 'ffffffff'),
(6, 'ddd', 0, 'TraSua65.png', 'ddddd');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_statistical`
--

CREATE TABLE `tbl_statistical` (
  `id_statistical` int(11) NOT NULL,
  `order_date` varchar(100) NOT NULL,
  `sales` varchar(200) NOT NULL,
  `profit` varchar(200) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_statistical`
--

INSERT INTO `tbl_statistical` (`id_statistical`, `order_date`, `sales`, `profit`, `quantity`, `total_order`) VALUES
(1, '2020-11-08', '20000000', '7000000', 90, 10),
(2, '2020-11-07', '68000000', '9000000', 60, 8),
(3, '2020-11-06', '30000000', '3000000', 45, 7),
(4, '2020-11-05', '45000000', '3800000', 30, 9),
(5, '2020-11-04', '30000000', '1500000', 15, 12),
(6, '2020-11-03', '8000000', '700000', 65, 30),
(7, '2020-11-02', '28000000', '23000000', 32, 20),
(8, '2020-11-01', '25000000', '20000000', 7, 6),
(9, '2020-10-31', '36000000', '28000000', 40, 15),
(10, '2020-10-30', '50000000', '13000000', 89, 19),
(11, '2020-10-29', '20000000', '15000000', 63, 11),
(12, '2020-10-28', '25000000', '16000000', 94, 14),
(13, '2020-10-27', '32000000', '17000000', 16, 10),
(14, '2020-10-26', '33000000', '19000000', 14, 5),
(15, '2020-10-25', '36000000', '18000000', 22, 12),
(16, '2020-10-24', '34000000', '20000000', 33, 20),
(17, '2020-10-23', '25000000', '16000000', 94, 14),
(18, '2020-10-22', '12000000', '7000000', 16, 10),
(19, '2020-10-21', '63000000', '19000000', 14, 5),
(20, '2020-10-20', '66000000', '18000000', 22, 12),
(21, '2020-10-19', '74000000', '20000000', 33, 20),
(22, '2020-10-18', '63000000', '19000000', 14, 5),
(23, '2020-10-17', '66000000', '18000000', 23, 12),
(24, '2020-10-16', '74000000', '20000000', 32, 20),
(25, '2020-10-15', '63000000', '19000000', 14, 5),
(26, '2020-10-14', '66000000', '18000000', 23, 12),
(27, '2020-10-13', '74000000', '20000000', 33, 20),
(28, '2020-10-12', '66000000', '18000000', 23, 12),
(29, '2020-10-11', '74000000', '20000000', 10, 20),
(30, '2020-10-10', '63000000', '19000000', 14, 5),
(31, '2020-10-09', '66000000', '18000000', 23, 12),
(32, '2020-10-08', '74000000', '20000000', 15, 20),
(33, '2020-10-07', '66000000', '18000000', 23, 12),
(34, '2020-10-06', '74000000', '20000000', 30, 22),
(35, '2020-10-05', '66000000', '18000000', 23, 12),
(36, '2020-10-04', '74000000', '20000000', 32, 20),
(37, '2020-10-03', '63000000', '19000000', 14, 5),
(38, '2020-10-02', '66000000', '18000000', 23, 12),
(39, '2020-10-01', '74000000', '20000000', 32, 20),
(40, '2020-09-30', '63000000', '19000000', 14, 5),
(41, '2020-09-29', '66000000', '18000000', 23, 12),
(42, '2020-09-28', '74000000', '20000000', 15, 20),
(43, '2020-09-27', '66000000', '18000000', 23, 12),
(44, '2020-09-26', '74000000', '20000000', 30, 22),
(45, '2020-09-25', '66000000', '18000000', 23, 12),
(46, '2020-09-24', '74000000', '20000000', 32, 20),
(47, '2020-09-23', '63000000', '19000000', 14, 5),
(48, '2020-09-22', '66000000', '18000000', 23, 12),
(49, '2020-09-21', '74000000', '20000000', 32, 20),
(50, '2020-09-20', '63000000', '19000000', 14, 5),
(51, '2020-09-19', '66000000', '18000000', 23, 12),
(52, '2020-09-18', '74000000', '20000000', 15, 20),
(53, '2020-09-17', '66000000', '18000000', 23, 12),
(54, '2020-09-16', '74000000', '20000000', 30, 22),
(55, '2020-09-15', '66000000', '18000000', 23, 12),
(56, '2020-09-14', '74000000', '20000000', 32, 20),
(57, '2020-09-13', '63000000', '19000000', 14, 5),
(58, '2020-09-12', '66000000', '18000000', 23, 12),
(59, '2020-09-11', '74000000', '20000000', 32, 20),
(60, '2020-09-10', '63000000', '19000000', 14, 5),
(61, '2020-09-09', '66000000', '18000000', 23, 12),
(62, '2020-09-08', '74000000', '20000000', 15, 20),
(63, '2020-09-07', '66000000', '18000000', 23, 12),
(64, '2020-09-06', '74000000', '20000000', 30, 22),
(65, '2020-09-05', '66000000', '18000000', 23, 12),
(66, '2020-09-04', '74000000', '20000000', 32, 20),
(67, '2020-09-03', '63000000', '19000000', 14, 5),
(68, '2020-09-02', '66000000', '18000000', 23, 12),
(69, '2020-09-01', '74000000', '20000000', 32, 20);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_tinhthanhpho`
--

CREATE TABLE `tbl_tinhthanhpho` (
  `matp` varchar(5) CHARACTER SET utf8 NOT NULL,
  `name_city` varchar(100) CHARACTER SET utf8 NOT NULL,
  `type` varchar(30) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Đang đổ dữ liệu cho bảng `tbl_tinhthanhpho`
--

INSERT INTO `tbl_tinhthanhpho` (`matp`, `name_city`, `type`) VALUES
('74', 'Tỉnh Bình Dương', 'Tỉnh');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_xaphuongthitran`
--

CREATE TABLE `tbl_xaphuongthitran` (
  `xaid` varchar(5) CHARACTER SET utf8 NOT NULL,
  `name_xaphuong` varchar(100) CHARACTER SET utf8 NOT NULL,
  `type` varchar(30) CHARACTER SET utf8 NOT NULL,
  `maqh` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `tbl_xaphuongthitran`
--

INSERT INTO `tbl_xaphuongthitran` (`xaid`, `name_xaphuong`, `type`, `maqh`) VALUES
('25741', 'Phường Hiệp Thành', 'Phường', 718),
('25744', 'Phường Phú Lợi', 'Phường', 718),
('25747', 'Phường Phú Cường', 'Phường', 718),
('25750', 'Phường Phú Hòa', 'Phường', 718),
('25753', 'Phường Phú Thọ', 'Phường', 718),
('25756', 'Phường Chánh Nghĩa', 'Phường', 718),
('25759', 'Phường Định Hoà', 'Phường', 718),
('25760', 'Phường Hoà Phú', 'Phường', 718),
('25762', 'Phường Phú Mỹ', 'Phường', 718),
('25763', 'Phường Phú Tân', 'Phường', 718),
('25765', 'Phường Tân An', 'Phường', 718),
('25768', 'Phường Hiệp An', 'Phường', 718),
('25771', 'Phường Tương Bình Hiệp', 'Phường', 718),
('25774', 'Phường Chánh Mỹ', 'Phường', 718);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Chỉ mục cho bảng `tbl_category_product`
--
ALTER TABLE `tbl_category_product`
  ADD PRIMARY KEY (`category_id`);

--
-- Chỉ mục cho bảng `tbl_coupon`
--
ALTER TABLE `tbl_coupon`
  ADD PRIMARY KEY (`coupon_id`);

--
-- Chỉ mục cho bảng `tbl_customers`
--
ALTER TABLE `tbl_customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Chỉ mục cho bảng `tbl_feeship`
--
ALTER TABLE `tbl_feeship`
  ADD PRIMARY KEY (`fee_id`);

--
-- Chỉ mục cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Chỉ mục cho bảng `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  ADD PRIMARY KEY (`order_details_id`);

--
-- Chỉ mục cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Chỉ mục cho bảng `tbl_quanhuyen`
--
ALTER TABLE `tbl_quanhuyen`
  ADD PRIMARY KEY (`maqh`);

--
-- Chỉ mục cho bảng `tbl_rating`
--
ALTER TABLE `tbl_rating`
  ADD PRIMARY KEY (`rating_id`);

--
-- Chỉ mục cho bảng `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  ADD PRIMARY KEY (`shipping_id`);

--
-- Chỉ mục cho bảng `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Chỉ mục cho bảng `tbl_statistical`
--
ALTER TABLE `tbl_statistical`
  ADD PRIMARY KEY (`id_statistical`);

--
-- Chỉ mục cho bảng `tbl_tinhthanhpho`
--
ALTER TABLE `tbl_tinhthanhpho`
  ADD PRIMARY KEY (`matp`);

--
-- Chỉ mục cho bảng `tbl_xaphuongthitran`
--
ALTER TABLE `tbl_xaphuongthitran`
  ADD PRIMARY KEY (`xaid`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_category_product`
--
ALTER TABLE `tbl_category_product`
  MODIFY `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `tbl_coupon`
--
ALTER TABLE `tbl_coupon`
  MODIFY `coupon_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tbl_customers`
--
ALTER TABLE `tbl_customers`
  MODIFY `customer_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `tbl_feeship`
--
ALTER TABLE `tbl_feeship`
  MODIFY `fee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT cho bảng `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  MODIFY `order_details_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT cho bảng `tbl_rating`
--
ALTER TABLE `tbl_rating`
  MODIFY `rating_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  MODIFY `shipping_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT cho bảng `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `tbl_statistical`
--
ALTER TABLE `tbl_statistical`
  MODIFY `id_statistical` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
