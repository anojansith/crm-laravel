-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2017 at 08:31 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crm`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` int(10) UNSIGNED NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_of_activity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `outcome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sales_person_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `company_name`, `date`, `type_of_activity`, `outcome`, `sales_person_name`, `created_at`, `updated_at`) VALUES
(3, 'mana', '12/02/2013', 'hhhhjhj', 'jhjhjhj', 'hjhjhj', '2017-04-12 18:30:00', '2017-04-17 09:20:20'),
(4, 'jjhj', '12/02/2013', 'hhhhjhj', 'jhjhjhj', 'hjhjhj', '2017-04-12 18:30:00', '2017-04-16 18:30:00'),
(5, 'jjhj', '12/02/2013', 'hhhhjhj', 'jhjhjhj', 'hjhjhj', '2017-04-12 18:30:00', '2017-04-16 18:30:00'),
(8, 'mnnnn', '2017-04-19', 'meeting', 'dhdsds', 'dsdsd', '2017-04-17 09:44:04', '2017-04-17 12:33:27'),
(9, 'Krishan', '2017-04-18', 'email', 'Dontknow', 'Mathuran', '2017-04-17 09:51:02', '2017-04-17 09:51:02'),
(10, 'Abelsoft (pvt) Ltd', '2017-04-18', 'call', 'Pending', 'Kumar', '2017-04-17 12:46:32', '2017-04-17 12:46:44');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `contact_number`, `created_at`, `updated_at`) VALUES
(3, 'Mathoosan', 'smathusan@yahoo.com', '0119292929', '2017-04-17 03:38:57', '2017-04-17 03:38:57'),
(5, 'hjhjhjhhh', 'sith.suhee.9', '01192929', '2017-04-17 04:12:57', '2017-04-17 04:12:57'),
(6, 'gghggh', 'sithanojan@yahoo.com', '01192982882', '2017-04-17 09:15:36', '2017-04-17 09:15:36'),
(7, 'hghghghg', 'hghhghg@yahoo.com', '01192982882', '2017-04-17 09:15:46', '2017-04-17 09:15:46'),
(8, 'hghggg', 'sithamparapillaisuheepan@yahoo.com', '0119882882', '2017-04-17 09:15:54', '2017-04-17 09:15:54'),
(9, 'Modern', 'hghghg@yahoo.com', 'hggh', '2017-04-17 09:40:53', '2017-04-17 09:40:53'),
(10, 'fdfdfd', 'fdff@yahoo.com', 'ddsds', '2017-04-17 09:46:53', '2017-04-17 09:46:53'),
(11, 'kjj', 'jjhj@yahoo.com', '01192982828', '2017-04-17 09:47:47', '2017-04-17 09:47:47'),
(12, 'MilanSoft (pvt) Ltd', 'sithanojan@yahoo.com', '0755554715', '2017-04-17 12:43:15', '2017-04-17 12:44:15');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(10) UNSIGNED NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `business_registration_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `company_name`, `address`, `business_registration_number`, `website`, `created_at`, `updated_at`) VALUES
(1, 'WebNatics', 'Webnatics Lanka (Pvt) Ltd. \r\n20, Nelson Place \r\nColombo 00600, Sri Lanka \r\n', '20302', 'www.webnatics.biz', '2017-04-15 18:30:00', '2017-04-16 18:30:00'),
(2, 'WebNatics', 'Webnatics Lanka (Pvt) Ltd. \r\n20, Nelson Place \r\nColombo 00600, Sri Lanka \r\n', '20302', 'www.webnatics.biz', '2017-04-15 18:30:00', '2017-04-16 18:30:00'),
(8, 'mofo', 'hhhh', 'hhhh', 'hhh', '2017-04-17 06:27:29', '2017-04-17 06:27:29'),
(9, 'hjhjhjhj', 'hjhjhj', 'hjhjhj', 'hjhjhj', '2017-04-17 06:29:43', '2017-04-17 06:29:43'),
(10, 'iiuiuiu', 'iuiuiuiuiu', 'iuiuiu', 'iuiuiu', '2017-04-17 06:31:35', '2017-04-17 06:31:35'),
(11, 'huyuyu', 'yuyuyu', 'yuyuyu', 'yuyuyu', '2017-04-17 06:35:49', '2017-04-17 06:35:49'),
(12, 'hjhjhj', 'hjhjhjhj', 'hjhjhj', 'hjhjhj', '2017-04-17 06:39:45', '2017-04-17 06:39:45'),
(13, 'hhjhj', 'hjhjhj', 'hjhjhj', 'hjhjhj', '2017-04-17 06:42:32', '2017-04-17 06:42:32'),
(14, 'hjhhhhj', 'hjhjhjhj', 'hhjhjhjhj', 'hjhjhjhj', '2017-04-17 06:45:01', '2017-04-17 06:45:01'),
(15, 'hjhjhhjh', 'hjhjhj', 'hjhjhjhj', 'hjhjhj', '2017-04-17 06:47:38', '2017-04-17 06:47:38'),
(16, 'iiii', 'iiiinhh', 'jhjj', 'hjhjhjhj', '2017-04-17 06:57:06', '2017-04-17 06:57:06'),
(17, 'hhg', 'hghghghg', 'hghghghg', 'hghghhg', '2017-04-17 07:15:13', '2017-04-17 07:15:13'),
(18, 'hhhhhjj', 'jhhjhjhj', 'hjhjhjhj', 'hjhjhj', '2017-04-17 07:16:52', '2017-04-17 07:16:52'),
(19, 'hjhjhj', 'hjhjhj', 'hjhjhjhj', 'hjhjh', '2017-04-17 07:19:08', '2017-04-17 07:19:08'),
(20, 'ghghghgh', 'ghhgghgh', 'hghgg', 'ghghgg', '2017-04-17 07:19:58', '2017-04-17 07:19:58'),
(21, 'uuiuiiu', 'iuuiiu', 'iuiuiuiu', 'iuiuiuiu', '2017-04-17 07:20:56', '2017-04-17 07:20:56'),
(22, 'hhhjhjhj', 'hjhjhjhj', 'hjhjhjhj', 'hjhj', '2017-04-17 07:21:41', '2017-04-17 07:21:41'),
(23, 'hjhjhj', 'hjhjhjhj', 'hjhjhjhj', 'hjhjhj', '2017-04-17 07:21:51', '2017-04-17 07:21:51'),
(24, 'hjhjhjhjhj', 'hjhjhjhjhj', 'hjhjhjhj', 'hjhjjh', '2017-04-17 07:23:45', '2017-04-17 07:23:45'),
(25, 'hjhjhj', 'hjhjhjhgg', 'hgghg', 'hghghghg', '2017-04-17 07:27:09', '2017-04-17 07:27:09'),
(26, 'huhgh', 'hghggh', 'hghghghg', 'hghghg', '2017-04-17 07:29:28', '2017-04-17 07:29:28'),
(27, 'hhhhjhj', 'jggjggggh', 'hghghghghg', 'hghghg', '2017-04-17 07:30:46', '2017-04-17 07:30:46'),
(28, 'hjhjhhjhjhjhjhj', 'hjhjhjhjhj', 'hjhjhjhjj', 'hjhjhjhj', '2017-04-17 07:33:10', '2017-04-17 07:33:10'),
(29, 'hjhjhjhhj', 'hjhjhjhjhj', 'hjhjhjhjhj', 'hjhjhjhj', '2017-04-17 07:33:37', '2017-04-17 07:33:37'),
(30, 'gggg', 'ghgggh', 'ghhghg', 'hghghg', '2017-04-17 07:36:36', '2017-04-17 07:36:36'),
(31, 'Anoajn', 'shshgshg', 'hgshgshg', 'hghgshgs', '2017-04-17 08:32:36', '2017-04-17 08:32:36'),
(32, 'hjhjhjhj', 'hjhjhj', 'hjhjhj', 'hjhjhj', '2017-04-17 08:34:43', '2017-04-17 08:34:43'),
(33, 'Abelsoft', 'Wellawatte', '0191929', 'www.google.com', '2017-04-17 10:06:58', '2017-04-17 10:06:58'),
(35, 'Webnatics', 'Webnatics Lanka (Pvt) Ltd.  20, Nelson Place  Colombo 00600, Sri Lanka', '7878', 'www,webnatics.biz', '2017-04-17 11:56:33', '2017-04-17 12:00:44');

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
(1, '2017_04_17_025856_create_customer_table', 1),
(2, '2017_04_17_031723_create_contacts_table', 2),
(3, '2017_04_17_032023_create_activities_table', 3),
(4, '2017_04_17_095724_create_activity_table', 4),
(5, '2017_04_17_100305_create_activities_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
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
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
