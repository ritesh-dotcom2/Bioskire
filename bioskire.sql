-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2024 at 07:57 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bioskire`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `username`, `password`, `role`, `email`, `mobile`, `status`) VALUES
(1, 'admin', 'admin', 0, 'avinash@gmail.com', '', 1),
(2, 'vishal', 'vishal', 1, 'vishal@gmail.com', '1234567890', 1),
(5, 'avinash', 'avinash', 1, 'avinash@gmail.com', '1234567890', 1),
(6, 'ritesh', 'ritesh', 1, 'ritesh@mail.com', '6201853770', 1);

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `heading1` varchar(255) NOT NULL,
  `heading2` varchar(255) NOT NULL,
  `btn_txt` varchar(255) DEFAULT NULL,
  `btn_link` varchar(55) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `order_no` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `heading1`, `heading2`, `btn_txt`, `btn_link`, `image`, `order_no`, `status`) VALUES
(7, 'asfasdf', 'asdf', 'asdf', 'asdf', '645264138_IMG_2078.PNG', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `categories` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `categories`, `status`) VALUES
(7, 'Our Products', 1);

-- --------------------------------------------------------

--
-- Table structure for table `color_master`
--

CREATE TABLE `color_master` (
  `id` int(11) NOT NULL,
  `color` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `color_master`
--

INSERT INTO `color_master` (`id`, `color`, `status`) VALUES
(1, 'Red', 1),
(3, 'Black', 1),
(4, 'Pink', 1),
(5, 'Green', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(75) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `comment` text NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `mobile`, `comment`, `added_on`) VALUES
(1, 'Vishal', 'vishal@gmail.com', '1234567890', 'Test Query', '2020-01-14 00:00:00'),
(2, 'vishal@gmail.com', '', '1234567890', 'testing', '2020-01-19 07:59:38'),
(3, 'Vishal', 'vishal@gmail.com', '1234567890', 'testing', '2020-01-19 08:00:09'),
(4, 'test', 'test@gmail.com', '9990413778', 'test', '2020-05-01 09:21:37');

-- --------------------------------------------------------

--
-- Table structure for table `coupon_master`
--

CREATE TABLE `coupon_master` (
  `id` int(11) NOT NULL,
  `coupon_code` varchar(50) NOT NULL,
  `coupon_value` int(11) NOT NULL,
  `coupon_type` varchar(10) NOT NULL,
  `cart_min_value` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `coupon_master`
--

INSERT INTO `coupon_master` (`id`, `coupon_code`, `coupon_value`, `coupon_type`, `cart_min_value`, `status`) VALUES
(1, 'First50', 1000, 'Rupee', 1500, 1),
(2, 'First60', 20, 'Percentage', 1000, 1),
(3, 'avinash', 200, 'Percentage', 3000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `address` varchar(250) NOT NULL,
  `city` varchar(50) NOT NULL,
  `pincode` int(11) NOT NULL,
  `payment_type` varchar(20) NOT NULL,
  `total_price` float NOT NULL,
  `payment_status` varchar(20) NOT NULL,
  `order_status` int(11) NOT NULL,
  `length` float NOT NULL,
  `breadth` float NOT NULL,
  `height` float NOT NULL,
  `weight` float NOT NULL,
  `txnid` varchar(200) NOT NULL,
  `mihpayid` varchar(200) NOT NULL,
  `ship_order_id` int(11) NOT NULL,
  `ship_shipment_id` int(11) NOT NULL,
  `payu_status` varchar(10) NOT NULL,
  `coupon_id` int(11) NOT NULL,
  `coupon_value` varchar(50) NOT NULL,
  `coupon_code` varchar(50) NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `user_id`, `address`, `city`, `pincode`, `payment_type`, `total_price`, `payment_status`, `order_status`, `length`, `breadth`, `height`, `weight`, `txnid`, `mihpayid`, `ship_order_id`, `ship_shipment_id`, `payu_status`, `coupon_id`, `coupon_value`, `coupon_code`, `added_on`) VALUES
(1, 0, '', '', 0, 'payu', 0, 'Success', 5, 0, 0, 0, 0, '', '', 0, 0, '', 0, '', '', '0000-00-00 00:00:00'),
(2, 4, 'SHOP NO. 490, SUMERU KRUPA TRADERS LANE, BESIDE METRO PILLAR 671, KENGERI, MYSORE ROAD, BENGALURU.', 'BENGALURU', 560060, 'instamojo', 1399, 'pending', 1, 0, 0, 0, 0, '5da5a45543f341319765c43f2302e313', '', 0, 0, '', 1, '1000', 'First50', '2024-02-29 11:57:30'),
(3, 4, 'SHOP NO. 490, SUMERU KRUPA TRADERS LANE, BESIDE METRO PILLAR 671, KENGERI, MYSORE ROAD, BENGALURU.', 'BENGALURU', 560060, 'COD', 2399, 'pending', 1, 0, 0, 0, 0, 'b8d49011c794f9268432', '', 0, 0, '', 0, '', '', '2024-02-29 11:57:44'),
(4, 5, 'SHOP NO. 490, SUMERU KRUPA TRADERS LANE, BESIDE METRO PILLAR 671, KENGERI, MYSORE ROAD, BENGALURU.', 'BENGALURU', 560060, 'COD', 2399, 'pending', 1, 0, 0, 0, 0, '31ea3cfd0f6b57c6e4bc', '', 0, 0, '', 0, '', '', '2024-03-15 11:09:58'),
(5, 5, 'SHOP NO. 490, SUMERU KRUPA TRADERS LANE, BESIDE METRO PILLAR 671, KENGERI, MYSORE ROAD, BENGALURU.', 'BENGALURU', 560060, 'instamojo', 5310, 'pending', 1, 0, 0, 0, 0, 'fced6de691dd24b4763e', '', 0, 0, '', 0, '', '', '2024-03-15 11:17:18'),
(6, 5, 'Kali Nagar Road, Ward No. 4,, Dineshpur, Uttarakhand', 'Dineshpur', 263160, 'instamojo', 5310, 'pending', 1, 0, 0, 0, 0, '547e4f6d87fcf941996c', '', 0, 0, '', 0, '', '', '2024-03-15 11:17:28'),
(7, 5, 'SHOP NO. 490, SUMERU KRUPA TRADERS LANE, BESIDE METRO PILLAR 671, KENGERI, MYSORE ROAD, BENGALURU.', 'BENGALURU', 560060, 'COD', 5310, 'pending', 1, 0, 0, 0, 0, 'f6f91fc425e7a58d08a5', '', 0, 0, '', 0, '', '', '2024-03-15 11:18:08'),
(8, 6, 'g65, G-Block, Sector 63,Noida , Uttar Pradesh', 'Noida', 201301, 'COD', 110, 'pending', 1, 0, 0, 0, 0, '1fe9b4905b25a6639a56', '', 0, 0, '', 0, '', '', '2024-03-21 06:00:18'),
(9, 9, 'SHOP NO. 490, SUMERU KRUPA TRADERS LANE, BESIDE METRO PILLAR 671, KENGERI, MYSORE ROAD, BENGALURU.', 'BENGALURU', 560060, 'COD', 230, 'pending', 1, 0, 0, 0, 0, '463c26ba3a8e6cb37afd', '', 0, 0, '', 0, '', '', '2024-04-18 08:38:02'),
(10, 4, '435-2 Kolahapur Maharastra', 'mumbai', 416212, 'instamojo', 300, 'pending', 1, 0, 0, 0, 0, 'bad1501215d24368a697b97e5ca8e1fa', '', 0, 0, '', 0, '', '', '2024-04-19 08:34:22'),
(11, 4, 'SHOP NO. 490, SUMERU KRUPA TRADERS LANE, BESIDE METRO PILLAR 671, KENGERI, MYSORE ROAD, BENGALURU.', 'BENGALURU', 560060, 'COD', 300, 'pending', 1, 0, 0, 0, 0, '6b7c979772cce715ef47', '', 0, 0, '', 0, '', '', '2024-04-19 08:45:59'),
(12, 4, 'SHOP NO. 490, SUMERU KRUPA TRADERS LANE, BESIDE METRO PILLAR 671, KENGERI, MYSORE ROAD, BENGALURU.', 'BENGALURU', 560060, 'COD', 300, 'pending', 1, 0, 0, 0, 0, '7f1579d431ac59257912', '', 0, 0, '', 0, '', '', '2024-04-19 08:46:18'),
(13, 4, 'SHOP NO. 490, SUMERU KRUPA TRADERS LANE, BESIDE METRO PILLAR 671, KENGERI, MYSORE ROAD, BENGALURU.', 'BENGALURU', 560060, 'COD', 300, 'pending', 1, 0, 0, 0, 0, '4a3bd84ef00f7e2e3b96', '', 0, 0, '', 0, '', '', '2024-04-19 08:46:33'),
(14, 4, 'SHOP NO. 490, SUMERU KRUPA TRADERS LANE, BESIDE METRO PILLAR 671, KENGERI, MYSORE ROAD, BENGALURU.', 'BENGALURU', 560060, 'COD', 760, 'pending', 1, 0, 0, 0, 0, '8c40a22a848e0d24b7ae', '', 0, 0, '', 0, '', '', '2024-04-19 08:47:31'),
(15, 4, '435-2 Kolahapur Maharastra', 'mumbai', 416212, 'COD', 760, 'pending', 1, 0, 0, 0, 0, '149e902730544eb025ff', '', 0, 0, '', 0, '', '', '2024-04-19 08:47:59'),
(16, 4, '601, Naxtra Appartment, Swastic Society, Near Hotel Manali, Samala Road, Morbi, Gujarat,', 'Rajkot', 363641, 'COD', 230, 'pending', 1, 0, 0, 0, 0, 'e46124c9c92e4f34fb64', '', 0, 0, '', 0, '', '', '2024-04-19 08:48:40'),
(17, 4, '601, Naxtra Appartment, Swastic Society, Near Hotel Manali, Samala Road, Morbi, Gujarat,', 'Rajkot', 363641, 'COD', 230, 'pending', 1, 0, 0, 0, 0, '2af9f3f47331dcba5153', '', 0, 0, '', 0, '', '', '2024-04-19 08:49:27'),
(18, 4, 'noida', 'Rajkot', 363641, 'COD', 230, 'pending', 1, 0, 0, 0, 0, 'd1e8152dc35fe25ebf68', '', 0, 0, '', 0, '', '', '2024-04-19 08:50:50'),
(19, 4, 'noida', 'Rajkot', 363641, 'COD', 230, 'pending', 1, 0, 0, 0, 0, '5fdd467e2a82362d0b1a', '', 0, 0, '', 0, '', '', '2024-04-19 09:28:36'),
(20, 4, 'SHOP NO. 490, SUMERU KRUPA TRADERS LANE, BESIDE METRO PILLAR 671, KENGERI, MYSORE ROAD, BENGALURU.', 'BENGALURU', 560060, 'COD', 230, 'pending', 1, 0, 0, 0, 0, '519c9cb153e21c447875', '', 0, 0, '', 0, '', '', '2024-04-19 09:30:07'),
(21, 4, 'SHOP NO. 490, SUMERU KRUPA TRADERS LANE, BESIDE METRO PILLAR 671, KENGERI, MYSORE ROAD, BENGALURU.', 'BENGALURU', 560060, 'COD', 230, 'pending', 1, 0, 0, 0, 0, 'fe86a6f8cb704c6ec6ee', '', 0, 0, '', 0, '', '', '2024-04-19 11:42:53'),
(22, 4, 'SHOP NO. 490, SUMERU KRUPA TRADERS LANE, BESIDE METRO PILLAR 671, KENGERI, MYSORE ROAD, BENGALURU.', 'BENGALURU', 560060, 'COD', 230, 'pending', 1, 0, 0, 0, 0, 'fb2470b98fe93a327449', '', 0, 0, '', 0, '', '', '2024-04-19 11:54:56'),
(23, 10, 'noida', 'noida', 201301, 'COD', 52, 'pending', 1, 0, 0, 0, 0, 'acf1332a2a836e034091', '', 0, 0, '', 0, '', '', '2024-05-10 11:33:11');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_attr_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`id`, `order_id`, `product_id`, `product_attr_id`, `qty`, `price`) VALUES
(1, 1, 7, 5, 10, 333),
(2, 2, 5, 0, 1, 2399),
(3, 3, 5, 0, 1, 2399),
(4, 4, 5, 0, 1, 2399),
(5, 5, 9, 0, 3, 650),
(6, 5, 8, 0, 3, 1120),
(7, 6, 9, 0, 3, 650),
(8, 6, 8, 0, 3, 1120),
(9, 7, 9, 0, 3, 650),
(10, 7, 8, 0, 3, 1120),
(11, 8, 32, 0, 1, 110),
(12, 9, 33, 0, 1, 230),
(13, 10, 31, 0, 1, 300),
(14, 11, 31, 0, 1, 300),
(15, 12, 31, 0, 1, 300),
(16, 13, 31, 0, 1, 300),
(17, 14, 31, 0, 1, 300),
(18, 14, 33, 0, 1, 230),
(19, 14, 32, 0, 1, 230),
(20, 15, 31, 0, 1, 300),
(21, 15, 33, 0, 1, 230),
(22, 15, 32, 0, 1, 230),
(23, 16, 32, 0, 1, 230),
(24, 17, 32, 0, 1, 230),
(25, 18, 33, 0, 1, 230),
(26, 19, 33, 0, 1, 230),
(27, 20, 32, 0, 1, 230),
(28, 21, 32, 0, 1, 230),
(29, 22, 32, 0, 1, 230),
(30, 23, 40, 0, 1, 52);

-- --------------------------------------------------------

--
-- Table structure for table `order_status`
--

CREATE TABLE `order_status` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `order_status`
--

INSERT INTO `order_status` (`id`, `name`) VALUES
(1, 'Pending'),
(2, 'Processing'),
(3, 'Shipped'),
(4, 'Canceled'),
(5, 'Complete');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `categories_id` int(11) NOT NULL,
  `sub_categories_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mrp` float NOT NULL,
  `weight` varchar(500) NOT NULL,
  `price` float NOT NULL,
  `qty` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `short_desc` varchar(2000) NOT NULL,
  `description` text NOT NULL,
  `best_seller` int(11) NOT NULL,
  `meta_title` varchar(2000) NOT NULL,
  `meta_desc` varchar(2000) NOT NULL,
  `meta_keyword` varchar(2000) NOT NULL,
  `added_by` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `categories_id`, `sub_categories_id`, `name`, `mrp`, `weight`, `price`, `qty`, `image`, `short_desc`, `description`, `best_seller`, `meta_title`, `meta_desc`, `meta_keyword`, `added_by`, `status`) VALUES
(38, 7, 7, 'Mint Body Wash', 60, '200 ML Flip Top', 56, 10000, '669628029_mint body wash boiskire.jpg', 'Transform your shower into a revitalizing oasis of freshness with BIOSKIRE\'s Mint Body Wash. Elevate your skincare routine with the cooling sensation of mint, and embrace the renewed vitality of your skin with every wash.', 'Experience the invigorating sensation of mint-infused freshness with BIOSKIRE\'s Mint Body Wash. Crafted with care to awaken your senses and rejuvenate your skin, this refreshing body wash is the perfect way to start your day feeling energized and revitalized.\r\n\r\nKey Features:\r\n\r\n1. Cooling Mint Sensation: Infused with cooling mint extracts, our body wash provides an exhilarating burst of freshness that instantly revitalizes your skin and awakens your senses.\r\n2. Gentle Cleansing: Formulated with mild cleansing agents, our body wash effectively removes dirt, sweat, and impurities without stripping the skin of its natural oils, leaving it feeling clean and refreshed.\r\n3. Hydrating Formula: Enriched with nourishing ingredients like hydrating glycerin and soothing aloe vera, our body wash helps to replenish moisture and maintain skin hydration, promoting soft, smooth, and supple skin.\r\n4. Long-lasting Fragrance: Delight your senses with the crisp, refreshing aroma of mint, which lingers on your skin long after you step out of the shower, providing a lasting feeling of freshness and vitality.', 1, 'Mint Body Wash', 'Mint Body Wash', 'Mint Body Wash, Body Wash,Body Clean', 1, 1),
(39, 7, 7, 'Charcoal Body Wash', 60, '200ML Flip Top', 56, 10000, '824097642_Charcoal body wash.jpg', 'Transform your daily shower routine into a luxurious spa-like experience with BIOSKIRE\'s Charcoal Body Wash. Revive your skin and awaken your senses with every wash, and embrace the radiant glow of healthy, detoxified skin.', 'Indulge in the ultimate detox experience for your skin with BIOSKIRE\'s Charcoal Body Wash. Specially formulated to cleanse, purify, and rejuvenate, this luxurious body wash is your ticket to a refreshed and revitalized complexion.\r\n\r\nKey Features:\r\n\r\n1. Activated Charcoal Infusion: Harnessing the purifying power of activated charcoal, our body wash draws out impurities and toxins from deep within the pores, leaving your skin feeling clean and refreshed.\r\n2. Gentle Cleansing: Formulated with gentle yet effective cleansing agents, our body wash effectively removes dirt, oil, and impurities without stripping the skin of its natural moisture.\r\n3. Nourishing Botanicals: Enriched with nourishing botanical extracts, including soothing aloe vera and hydrating coconut oil, our body wash pampers your skin with essential nutrients, promoting a soft, smooth, and radiant complexion.\r\n4. Refreshing Fragrance: Enjoy the invigorating scent of fresh citrus and crisp mint, which lingers on your skin long after you step out of the shower, providing an instant boost of energy and vitality.', 1, 'Charcoal Body Wash', 'Charcoal Body Wash', 'Charcoal Body Wash, Body Wash, Body Cleaner', 1, 1),
(40, 7, 8, 'Anti Hair-Fall Shampoo', 58, '200ML Flip Top', 52, 10000, '680622991_Anti hairfall shampoo bioskire.jpg', 'Transform your hair care routine with BIOSKIRE\'s Anti Hair-Fall Shampoo and rediscover the joy of healthy, vibrant hair. Say goodbye to hair fall worries and hello to stronger, more resilient locks with every wash.', 'Say goodbye to hair fall woes and hello to healthy, luscious locks with BIOSKIRE\'s Anti Hair-Fall Shampoo. Formulated with a potent blend of nourishing ingredients, this revitalizing shampoo is your key to stronger, thicker, and more resilient hair.\r\n\r\nKey Features:\r\n\r\n1. Hair Strengthening Formula: Enriched with vitamins, minerals, and proteins, our shampoo strengthens the hair from root to tip, reducing breakage and minimizing hair fall for healthier-looking strands.\r\n2. Gentle Cleansing: Our gentle yet effective cleansing formula removes impurities, excess oil, and product buildup from the scalp and hair without stripping away natural moisture, leaving your hair clean, soft, and manageable.\r\n3. Hair Nourishment: Infused with nourishing botanical extracts like biotin, keratin, and argan oil, our shampoo nourishes the hair follicles, promoting optimal growth and helping to restore vitality to damaged strands.\r\n4. Reduces Hair Fall: Formulated with ingredients known for their hair-strengthening properties, our shampoo helps to minimize hair fall caused by breakage, environmental stressors, and daily styling, leaving your hair looking fuller and healthier.', 1, 'Anti Hair-Fall Shampoo', 'Anti Hair-Fall Shampoo', 'Anti Hair-Fall Shampoo, Hair fall, hair nourishment', 1, 1),
(41, 7, 9, 'Charcoal Face Wash', 42, '100ML Label Tube', 35, 10000, '777500577_charcoal face wash bioskire.jpg', 'Transform your skincare routine with BIOSKIRE\'s Charcoal Face Wash and discover the power of deep cleansing and detoxification. Reveal clearer, smoother, and more radiant skin with every wash, and embrace the confidence that comes with a revitalized complexion.', 'Experience the deep cleansing power of activated charcoal with BIOSKIRE\'s Charcoal Face Wash. Designed to effectively remove impurities, unclog pores, and reveal clearer, smoother skin, this detoxifying face wash is your key to a refreshed and revitalized complexion.\r\n\r\nKey Features:\r\n\r\n1. Activated Charcoal Cleansing: Infused with activated charcoal, our face wash draws out dirt, oil, and toxins from deep within the pores, leaving your skin feeling clean, detoxified, and refreshed.\r\n2. Gentle Exfoliation: Formulated with gentle exfoliating agents, our face wash helps to slough away dead skin cells and impurities, promoting a smoother, more radiant complexion without stripping the skin of its natural moisture.\r\n3. Pore Minimizing: By effectively removing excess oil and debris from the pores, our face wash helps to minimize the appearance of enlarged pores, leaving your skin looking smoother and more refined.\r\n4. Soothing Botanicals: Enriched with soothing botanical extracts like aloe vera and green tea, our face wash calms and comforts the skin, reducing redness and irritation for a more balanced and comfortable complexion.', 1, 'Charcoal Face Wash', 'Charcoal Face Wash', 'Charcoal Face Wash, face wash , face clean, detox face', 1, 1),
(42, 0, 0, 'sfsdgsdg', 40, '40grm', 45, 22, '988992439_WhatsApp Image 2024-04-29 at 2.22.31 PM (1).jpeg', 'sfg', 'sfdg', 1, 'sdfgsdfg', 'sdf', 'sdf', 1, 1),
(43, 7, 0, 'Anti Dandruff Shampoo', 60, '200ML Flip Top', 52, 10000, '526265658_anti dandruff shampoo bioskire copy (1).jpg', 'Rediscover the freedom to wear dark clothes with confidence and enjoy flake-free hair days with BIOSKIRE\'s Anti-Dandruff Shampoo. Transform your hair care routine and bid farewell to dandruff for good.', 'Banish dandruff and reclaim your confidence with BIOSKIRE\'s Anti-Dandruff Shampoo. Formulated with powerful ingredients, this shampoo effectively targets dandruff at its source, leaving your scalp feeling refreshed and your hair flake-free.\r\n\r\nKey Features:\r\n\r\n1. Dandruff-Fighting Formula: Our shampoo contains active ingredients such as ketoconazole and zinc pyrithione, which combat dandruff-causing fungus and bacteria, effectively reducing flakes and preventing their recurrence.\r\n2. Soothing Relief: Enriched with soothing botanical extracts like tea tree oil and aloe vera, our shampoo calms scalp irritation and inflammation, providing instant relief from itching and discomfort associated with dandruff.\r\n3. Gentle Cleansing: Our gentle yet effective cleansing formula removes excess oil, dirt, and impurities from the scalp and hair without stripping away natural oils, leaving your hair clean, soft, and manageable.\r\n4. Hydration and Nourishment: Infused with hydrating ingredients like vitamin E and almond oil, our shampoo moisturizes and nourishes the scalp, promoting a healthy scalp environment and preventing dryness and flakiness.', 1, 'anti dandruff hair shampoo', 'anti dandruff hair shampoo', 'anti dandruff hair shampoo, shampoo, hair care', 1, 1),
(44, 7, 9, 'Vitamin C Face Serum', 82, '30ML', 75, 10000, '776889607_vitamin c bioSkire 2 (1).jpg', 'Transform your skincare routine with BIOSKIRE\'s Vitamin C Face Serum and unveil a brighter, more youthful complexion. Say hello to radiant, glowing skin and embrace the confidence that comes with a healthy and luminous complexion.', 'Unlock the secret to radiant, youthful-looking skin with BIOSKIRE\'s Vitamin C Face Serum. Formulated with potent antioxidants and nourishing ingredients, this luxurious serum is your ticket to a brighter, smoother, and more youthful complexion.\r\n\r\nKey Features:\r\n\r\n1. Powerful Antioxidant Protection: Infused with vitamin C, a potent antioxidant, our serum helps to neutralize free radicals and protect the skin from environmental damage, promoting a healthier and more youthful complexion.\r\n2. Brightening Formula: Vitamin C works to brighten the skin and even out skin tone, reducing the appearance of dark spots, hyperpigmentation, and discoloration for a more luminous and radiant complexion.\r\n3. Hydrating and Nourishing: Formulated with hyaluronic acid and botanical extracts, our serum deeply hydrates and nourishes the skin, restoring moisture balance and leaving your skin feeling soft, smooth, and supple.\r\n4. Collagen Boosting: Vitamin C stimulates collagen production, helping to improve skin elasticity and firmness, reducing the appearance of fine lines and wrinkles for a smoother and more youthful-looking complexion.', 1, 'vitamin C face serum', 'face serum', 'face serum, vitamin c, face care', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_attributes`
--

CREATE TABLE `product_attributes` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `size_id` int(11) NOT NULL,
  `color_id` int(11) NOT NULL,
  `mrp` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_attributes`
--

INSERT INTO `product_attributes` (`id`, `product_id`, `size_id`, `color_id`, `mrp`, `price`, `qty`) VALUES
(1, 8, 5, 3, 1900, 1120, 10),
(2, 8, 4, 5, 1900, 1120, 8),
(3, 8, 2, 3, 1900, 1120, 9),
(4, 8, 4, 3, 1800, 1050, 4),
(5, 7, 0, 3, 1900, 1350, 10),
(6, 7, 0, 5, 1900, 1350, 8),
(7, 7, 0, 4, 1900, 1350, 6),
(8, 6, 5, 0, 1999, 1500, 10),
(9, 6, 4, 0, 1989, 1490, 9),
(10, 5, 0, 0, 2799, 2399, 10);

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_images` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `product_images`) VALUES
(1, 8, '479197953_526258680_Floral-Print-Polo-T-shirt1.jpg'),
(2, 8, '301120849_309027777_Floral-Print-Polo-T-shirt.jpg'),
(4, 10, '468799004_locate-distributor-v1.jpg'),
(5, 18, '412194892_04.png'),
(6, 18, '149879511_04.png'),
(7, 33, '967221994_IMG_2097.PNG'),
(8, 32, '647166161_IMG_2098.PNG'),
(9, 31, '321203190_IMG_2101.PNG'),
(10, 30, '283313661_IMG_2102.PNG'),
(11, 29, '218283236_IMG_2099.PNG'),
(12, 28, '693638704_IMG_2103.PNG'),
(13, 27, '815385266_IMG_2100.PNG'),
(14, 34, '506840147_IMG_2106.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `product_review`
--

CREATE TABLE `product_review` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `rating` varchar(20) NOT NULL,
  `review` text NOT NULL,
  `status` int(11) NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_review`
--

INSERT INTO `product_review` (`id`, `product_id`, `user_id`, `rating`, `review`, `status`, `added_on`) VALUES
(2, 9, 1, 'Good', 'asAS', 0, '2021-05-05 08:31:39');

-- --------------------------------------------------------

--
-- Table structure for table `shiprocket_token`
--

CREATE TABLE `shiprocket_token` (
  `id` int(11) NOT NULL,
  `token` varchar(500) NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `shiprocket_token`
--

INSERT INTO `shiprocket_token` (`id`, `token`, `added_on`) VALUES
(1, '', '2019-04-09 00:28:23');

-- --------------------------------------------------------

--
-- Table structure for table `size_master`
--

CREATE TABLE `size_master` (
  `id` int(11) NOT NULL,
  `size` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `order_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `size_master`
--

INSERT INTO `size_master` (`id`, `size`, `status`, `order_by`) VALUES
(1, 'X', 1, 3),
(2, 'XL', 1, 4),
(4, 'l', 1, 2),
(5, 'S', 1, 1),
(6, 'XXL', 1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` int(11) NOT NULL,
  `categories_id` int(11) NOT NULL,
  `sub_categories` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `categories_id`, `sub_categories`, `status`) VALUES
(1, 2, 'T-Shirt', 1),
(2, 2, 'Trouser', 1),
(3, 4, 'Shirt', 1),
(4, 6, 'Nature Heal', 0),
(6, 6, 'Skin Care', 0),
(7, 7, 'Body Care', 1),
(8, 7, 'Hair Care', 1),
(9, 7, 'Face care', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `email`, `mobile`, `added_on`) VALUES
(1, 'Vishal Gupta', 'vishal', 'ytlearnwebdevelopment@gmail.com', '1234567890', '2020-05-13 00:00:00'),
(2, 'Amit', 'amit', 'amir@gmail.com', '1234567890', '2020-05-14 00:00:00'),
(3, 'Vishal', '123', 'aa@gmail.com', '9540608104', '2021-04-15 03:32:06'),
(4, 'avinash', 'avinash', 'avinash@gmail.com', '08767656765', '2024-02-29 11:56:42'),
(5, 'avinash', 'avinashnew', 'new@gmail.com', '977997873', '2024-03-15 11:09:25'),
(6, 'ritesh', 'ritesh@123', 'ritesh@mail.com', '6201853770', '2024-03-21 05:58:24'),
(7, 'testing', 'testing@123', 'testing@mail.com', '9991112223', '2024-03-21 07:12:55'),
(8, 'testing2', 'testing2@123', 'testing2@mail.com', '9992223334', '2024-03-21 07:22:10'),
(9, 'avinas', 'avinash', 'anita@gmail.com', '9990056121', '2024-04-18 08:34:18'),
(10, 'testing', 'testing', 'testing75@mail.com', '7777755555', '2024-05-01 10:36:40');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `user_id`, `product_id`, `added_on`) VALUES
(1, 1, 12, '2021-04-08 01:53:31'),
(3, 8, 30, '2024-03-21 09:31:13'),
(4, 8, 31, '2024-03-21 09:31:17'),
(5, 8, 32, '2024-03-21 09:31:19'),
(6, 6, 32, '2024-03-21 09:54:57'),
(7, 6, 22, '2024-03-26 07:01:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `color_master`
--
ALTER TABLE `color_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupon_master`
--
ALTER TABLE `coupon_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_status`
--
ALTER TABLE `order_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_attributes`
--
ALTER TABLE `product_attributes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_review`
--
ALTER TABLE `product_review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shiprocket_token`
--
ALTER TABLE `shiprocket_token`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `size_master`
--
ALTER TABLE `size_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `color_master`
--
ALTER TABLE `color_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `coupon_master`
--
ALTER TABLE `coupon_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `order_status`
--
ALTER TABLE `order_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `product_attributes`
--
ALTER TABLE `product_attributes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `product_review`
--
ALTER TABLE `product_review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `shiprocket_token`
--
ALTER TABLE `shiprocket_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `size_master`
--
ALTER TABLE `size_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
