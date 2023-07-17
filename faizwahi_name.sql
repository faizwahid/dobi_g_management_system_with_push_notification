-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 27, 2023 at 07:24 AM
-- Server version: 10.4.26-MariaDB-cll-lve
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `faizwahi_name`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `username`, `name`, `address`, `phone`, `password`, `created_at`) VALUES
(1, 'wahid', 'wahid', 'no 14 kmpong berop, 35900 tanjung malim, perak darul ridzuan', '0122345222', '$2y$10$eHFsdxHaUbl72g/ZMaED4OgFQ/a27qecy8XjeknfWswoofuloKlSC', '2022-12-04 01:37:54'),
(2, 'naim', 'naim', 'no 3 taman wangsa, 35900 tanjung malim, perak', '0117865423', '$2y$10$gdVar.2lA8mAX1Zkxtd..OkJdl2JO1U/HGnb5VXRW.DvhviMHr7se', '2022-12-04 19:34:55'),
(3, 'faizfarhan', 'faizfarhan', 'lot 35 , taman bahtera, 35900 tanjung malim, perak', '0126574432', '$2y$10$o4Z8dUwJfcdlpRPlnxW.Wu71U5.u3yRUq5mSGtyPxeParO4Y8rxlC', '2022-12-15 23:30:29'),
(7, 'darwish', 'darwish', 'F14 kampong berop, tanjung malim, perak', '01121510676', '$2y$10$FeXSDiSapOKDyRghNBNKH.ZkrzCrO782q3T8aCkIPCy2anJyGsaKq', '2023-02-17 03:34:38'),
(8, 'hanisdamia', 'Nur Hanis Damia Binti Azmi', 'Maran, Pahang', '01110615853', '$2y$10$06j0hhOlBx88SUnUt2vaYudGGaZpUjUwbrgtCM71nj8rQW4ggGa/O', '2023-02-22 10:15:41');

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `title`, `description`, `created_by`, `created_at`) VALUES
(3, 'What kind of laundry you do not recommend to me send?', 'We don&#39;t recommend you sending in laundry that needs heavy treatment such as:\r\n\r\n1. Urine / Faeces stained laundry\r\n2. Musty (Bau hapak) laundry\r\n3. Shoes', 1, '2022-12-15 21:31:06'),
(5, 'What do I need to do after placing an order?', 'Please prepare your laundry bag, label it with your name & order id for our reference and pass it to our staff at the counter.', 1, '2022-12-15 23:41:44'),
(6, 'Do you provide stain removal service?', 'Our wash does help in removing normal or basic stains easily. However, as of now we have yet to provide heavy stain removal services for cases like:\r\n\r\nHeavy stains, Blood stains, Permanent ink, Cosmetic stains & Chemical stains.', 1, '2023-02-21 21:13:45');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL DEFAULT 'TITLE',
  `body` varchar(255) NOT NULL DEFAULT 'BODY',
  `userid` int(11) DEFAULT NULL,
  `orderid` int(11) DEFAULT NULL,
  `notified` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `title`, `body`, `userid`, `orderid`, `notified`) VALUES
(212, 'Order in queue', 'Your order has been queued. Stay tuned for updates!', 1, 1079, 1),
(213, 'Order Accepted!', 'Your order #1079 has been accepted, please wait while the assigned staff weighs your laundry.', 1, 1079, 1),
(214, 'Order in progress!', 'Our staff is currently washing your  #1079 laundry. Stay tuned for updates!', 1, 1079, 1),
(215, 'Order Completed!', 'Your order #1079 has been completed! Please come to the counter to collect your laundry.', 1, 1079, 1),
(216, 'Order in queue', 'Your order has been queued. Stay tuned for updates!', 1, 1080, 1),
(217, 'Order Accepted!', 'Your order #1080 has been accepted, please wait while the assigned staff weighs your laundry.', 1, 1080, 1),
(218, 'Order in progress!', 'Our staff is currently washing your  #1080 laundry. Stay tuned for updates!', 1, 1080, 1),
(219, 'Order Completed!', 'Your order #1080 has been completed! Please come to the counter to collect your laundry.', 1, 1080, 1),
(220, 'Order in queue', 'Your order has been queued. Stay tuned for updates!', 1, 1081, 1),
(221, 'Order Accepted!', 'Your order #1081 has been accepted, please wait while the assigned staff weighs your laundry.', 1, 1081, 1),
(222, 'Order in progress!', 'Our staff is currently washing your  #1081 laundry. Stay tuned for updates!', 1, 1081, 1),
(223, 'Order Completed!', 'Your order #1081 has been completed! Please come to the counter to collect your laundry.', 1, 1081, 1),
(224, 'Order in queue', 'Your order has been queued. Stay tuned for updates!', 1, 1082, 1),
(225, 'Order Accepted!', 'Your order #1082 has been accepted, please wait while the assigned staff weighs your laundry.', 1, 1082, 1),
(226, 'Order in progress!', 'Our staff is currently washing your  #1082 laundry. Stay tuned for updates!', 1, 1082, 1),
(227, 'Order Completed!', 'Your order #1082 has been completed! Please come to the counter to collect your laundry.', 1, 1082, 1),
(228, 'Order in queue', 'Your order has been queued. Stay tuned for updates!', 1, 1083, 1),
(229, 'Order Accepted!', 'Your order #1083 has been accepted, please wait while the assigned staff weighs your laundry.', 1, 1083, 1),
(230, 'Order Cancelled!', 'Your order #1083 has been cancelled. Reason given by our staff: ', 1, 1083, 1),
(231, 'Order in queue', 'Your order has been queued. Stay tuned for updates!', 1, 1084, 1),
(232, 'Order Cancelled!', 'Your order #1084 has been cancelled. Reason given by our staff: ', 1, 1084, 1),
(233, 'Order Cancelled!', 'Your order #1083 has been cancelled. Reason given by our staff: ', 1, 1083, 1),
(234, 'Order Cancelled!', 'Your order #1083 has been cancelled. Reason given by our staff: ', 1, 1083, 1),
(235, 'Order Cancelled!', 'Your order #1084 has been cancelled. Reason given by our staff: air tiada', 1, 1084, 1),
(236, 'Order in progress!', 'Our staff is currently washing your  #1083 laundry. Stay tuned for updates!', 1, 1083, 1),
(237, 'Order Completed!', 'Your order #1083 has been completed! Please come to the counter to collect your laundry.', 1, 1083, 1),
(238, 'Order Cancelled!', 'Your order #1084 has been cancelled. Reason given by our staff: ', 1, 1084, 1),
(239, 'Order Cancelled!', 'Your order #1084 has been cancelled. Reason given by our staff: ', 1, 1084, 1),
(240, 'Order Cancelled!', 'Your order #1084 has been cancelled. Reason given by our staff: ', 1, 1084, 1),
(241, 'Order Cancelled!', 'Your order #1084 has been cancelled. Reason given by our staff: ', 1, 1084, 1),
(242, 'Order Cancelled!', 'Your order #1084 has been cancelled. Reason given by our staff: ', 1, 1084, 1),
(243, 'Order Cancelled!', 'Your order #1084 has been cancelled. Reason given by our staff: ', 1, 1084, 1),
(244, 'Order Cancelled!', 'Your order #1084 has been cancelled. Reason given by our staff: ', 1, 1084, 1),
(245, 'Order Cancelled!', 'Your order #1084 has been cancelled. Reason given by our staff: Others', 1, 1084, 1),
(246, 'Order Accepted!', 'Your order #1084 has been accepted, please wait while the assigned staff weights your laundry.', 1, 1084, 1),
(247, 'Order Cancelled!', 'Your order #1084 has been cancelled. Reason given by our staff: Others', 1, 1084, 1),
(248, 'Order in queue', 'Your order has been queued. Stay tuned for updates!', 1, 1085, 1),
(249, 'Order Accepted!', 'Your order #1085 has been accepted, please wait while the assigned staff weights your laundry.', 1, 1085, 1),
(250, 'Order in progress!', 'Our staff is currently washing your  #1085 laundry. Stay tuned for updates!', 1, 1085, 1),
(251, 'Order Completed!', 'Your order #1085 has been completed! Please come to the counter to collect your laundry.', 1, 1085, 1),
(252, 'Order in queue', 'Your order has been queued. Stay tuned for updates!', 1, 1086, 1),
(253, 'Order Accepted!', 'Your order #1086 has been accepted, please wait while the assigned staff weights your laundry.', 1, 1086, 1),
(254, 'Order Cancelled!', 'Your order #1086 has been cancelled. Reason given by our staff: air tiada', 1, 1086, 1),
(255, 'Order in queue', 'Your order has been queued. Stay tuned for updates!', 8, 1087, 1),
(256, 'Order Accepted!', 'Your order #1087 has been accepted, please wait while the assigned staff weights your laundry.', 8, 1087, 0),
(257, 'Order in progress!', 'Our staff is currently washing your  #1087 laundry. Stay tuned for updates!', 8, 1087, 0),
(258, 'Order Completed!', 'Your order #1087 has been completed! Please come to the counter to collect your laundry.', 8, 1087, 0),
(259, 'Order in queue', 'Your order has been queued. Stay tuned for updates!', 1, 1088, 1),
(260, 'Order Accepted!', 'Your order #1088 has been accepted, please wait while the assigned staff weights your laundry.', 1, 1088, 1),
(261, 'Order in progress!', 'Our staff is currently washing your  #1088 laundry. Stay tuned for updates!', 1, 1088, 1),
(262, 'Order in queue', 'Your order has been queued. Stay tuned for updates!', 1, 1089, 1),
(263, 'Order Accepted!', 'Your order #1089 has been accepted, please wait while the assigned staff weights your laundry.', 1, 1089, 1),
(264, 'Order in progress!', 'Our staff is currently washing your  #1089 laundry. Stay tuned for updates!', 1, 1089, 1),
(265, 'Order Completed!', 'Your order #1089 has been completed! Please come to the counter to collect your laundry.', 1, 1089, 1),
(266, 'Order in queue', 'Your order has been queued. Stay tuned for updates!', 1, 1090, 1),
(267, 'Order Accepted!', 'Your order #1090 has been accepted, please wait while the assigned staff weights your laundry.', 1, 1090, 1),
(268, 'Order in progress!', 'Our staff is currently washing your  #1090 laundry. Stay tuned for updates!', 1, 1090, 1),
(269, 'Order Completed!', 'Your order #1090 has been completed! Please come to the counter to collect your laundry.', 1, 1090, 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `serviceID` int(11) NOT NULL,
  `weight` double NOT NULL,
  `remark` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `status` varchar(20) NOT NULL,
  `custID` int(11) NOT NULL,
  `staffID` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `cancel_remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `serviceID`, `weight`, `remark`, `price`, `status`, `custID`, `staffID`, `created_at`, `cancel_remarks`) VALUES
(1079, 8, 2.1, 'beg warna unggu', 6.3, 'completed', 1, 2, '2023-02-21 21:06:21', ''),
(1080, 14, 4, 'carpet biru', 16, 'completed', 1, 17, '2023-02-21 21:08:31', ''),
(1081, 16, 6, 'please use more soflan', 15, 'completed', 1, 2, '2023-02-21 21:25:57', ''),
(1082, 8, 2, 'beg kuning diy', 6, 'completed', 1, 2, '2023-02-21 21:36:33', ''),
(1083, 9, 2, 'pink bag', 10, 'completed', 1, 2, '2023-02-22 01:35:44', ''),
(1084, 9, 0, 'beg plastik hitam', 0, 'cancelled', 1, 2, '2023-02-22 03:22:31', 'Others'),
(1085, 11, 2, '2 helai', 20, 'completed', 1, 2, '2023-02-22 05:06:59', ''),
(1086, 14, 0, 'karpet warna pink', 0, 'cancelled', 1, 2, '2023-02-22 09:30:11', 'air tiada'),
(1087, 8, 0.8, 'white shirt', 2.4, 'completed', 8, 2, '2023-02-22 10:16:30', ''),
(1088, 8, 2, 'beg diy kuning', 6, 'processing', 1, 2, '2023-02-22 11:13:23', ''),
(1089, 8, 2.3, 'bag ikea hijau', 6.9, 'completed', 1, 2, '2023-02-22 11:25:18', ''),
(1090, 8, 2.4, 'beg biru', 7.2, 'completed', 1, 2, '2023-02-22 12:08:09', '');

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'admin', 'admin123', '2022-12-02 20:31:49');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` double NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `price`, `created_by`, `created_at`) VALUES
(8, 'wash, dry & fold', 3, 1, '2022-12-03 22:02:44'),
(9, 'wash, dry & iron', 5, 1, '2022-12-03 22:07:10'),
(11, 'dry cleaning', 10, 1, '2022-12-03 22:48:32'),
(14, 'carpet', 4, 1, '2022-12-15 23:08:12'),
(16, 'wash & dry', 2.5, 1, '2023-02-20 18:47:33');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `username`, `password`, `name`, `address`, `phone`, `created_at`, `created_by`) VALUES
(2, 'faizwahid', '$2y$10$DnCZVPcMH1gPm2lcwaBl8.cgyLa/0HyGeH5KV1dYxkZqAHhroEXs6', 'muhammad faiz farhan', 'lot 442, kampung berop, 35900 tanjung malim, perak', '0116975699', '2022-12-03 13:47:58', 1),
(17, 'ahmad2', '$2y$10$v33OIszuhoLokWQM1PDFsO9Lk.hUWy/gFvJNfoDQmUmkdn7V1fJFi', 'ahmad abu', 'no 3, taman bernam, 35900 tanjung malim, perak', '0116975643', '2022-12-15 23:27:37', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=270;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1091;

--
-- AUTO_INCREMENT for table `owner`
--
ALTER TABLE `owner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
