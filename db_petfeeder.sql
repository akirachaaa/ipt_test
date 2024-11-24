-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2024 at 06:12 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_petfeeder`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bowl_status`
--

CREATE TABLE `tbl_bowl_status` (
  `bowl_id` int(11) NOT NULL,
  `notif_date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `bowl_status` varchar(50) NOT NULL,
  `bowl_weight` float NOT NULL,
  `bowl_msg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_bowl_status`
--

INSERT INTO `tbl_bowl_status` (`bowl_id`, `notif_date`, `bowl_status`, `bowl_weight`, `bowl_msg`) VALUES
(1, '2024-11-22 09:21:14', 'full', 362, 'Food bowl full. Activation failed.'),
(2, '2024-11-22 09:21:16', 'full', 408, 'Food bowl full. Activation failed.'),
(3, '2024-11-22 09:21:19', 'full', 589, 'Food bowl full. Activation failed.'),
(4, '2024-11-22 09:21:21', 'unchanged', 498, 'No significant weight change.'),
(5, '2024-11-22 09:21:24', 'full', 544, 'Food bowl full. Activation failed.'),
(6, '2024-11-22 09:21:29', 'unchanged', 498, 'No significant weight change.'),
(7, '2024-11-22 09:21:31', 'full', 544, 'Food bowl full. Activation failed.'),
(8, '2024-11-22 09:21:36', 'unchanged', 498, 'No significant weight change.'),
(9, '2024-11-22 09:21:40', 'unchanged', 362, 'No significant weight change.'),
(10, '2024-11-22 09:21:43', 'full', 408, 'Food bowl full. Activation failed.'),
(11, '2024-11-22 09:21:45', 'unchanged', 136, 'No significant weight change.'),
(12, '2024-11-22 09:21:48', 'empty', 0, 'Food dispensed.'),
(13, '2024-11-22 09:32:14', 'full', 362, 'Food bowl full. Activation failed.'),
(14, '2024-11-22 09:32:16', 'full', 498, 'Food bowl full. Activation failed.'),
(15, '2024-11-22 09:32:19', 'unchanged', 0, 'No significant weight change.'),
(16, '2024-11-22 09:32:48', 'full', 589, 'Food bowl full. Activation failed.'),
(17, '2024-11-22 09:32:56', 'unchanged', 0, 'No significant weight change.'),
(18, '2024-11-22 09:36:10', '', 90, ''),
(19, '2024-11-22 09:36:16', 'full', 589, 'Food bowl full. Activation failed.'),
(20, '2024-11-22 09:36:18', 'unchanged', 0, 'No significant weight change.'),
(21, '2024-11-22 09:36:29', '', 45, ''),
(22, '2024-11-22 09:36:32', '', 181, ''),
(23, '2024-11-22 09:36:34', 'unchanged', 0, 'No significant weight change.'),
(24, '2024-11-22 09:39:30', '', 226, ''),
(25, '2024-11-22 09:39:32', 'full', 362, 'Food bowl full. Activation failed.'),
(26, '2024-11-22 09:39:37', 'unchanged', 0, 'No significant weight change.'),
(27, '2024-11-22 09:39:40', '', 272, ''),
(28, '2024-11-22 09:39:42', 'unchanged', 0, 'No significant weight change.'),
(29, '2024-11-22 09:42:08', '', 181, ''),
(30, '2024-11-22 09:42:11', '', 226, ''),
(31, '2024-11-22 09:42:16', '', 272, ''),
(32, '2024-11-22 09:42:24', 'unchanged', 136, 'No significant weight change.'),
(33, '2024-11-22 09:42:27', '', 181, ''),
(34, '2024-11-22 09:42:32', 'unchanged', 90, 'No significant weight change.'),
(35, '2024-11-22 09:42:34', '', 226, ''),
(36, '2024-11-22 09:42:37', '', 272, ''),
(37, '2024-11-22 09:42:39', '', 317, ''),
(38, '2024-11-22 09:42:42', 'unchanged', 272, 'No significant weight change.'),
(39, '2024-11-22 09:42:44', '', 317, ''),
(40, '2024-11-22 09:42:49', 'unchanged', 136, 'No significant weight change.'),
(41, '2024-11-22 09:42:52', 'empty', 0, 'Food dispensed.'),
(42, '2024-11-22 09:45:52', '', 317, ''),
(43, '2024-11-22 09:45:54', '', 362, ''),
(44, '2024-11-22 09:45:57', 'unchanged', 317, 'No significant weight change.'),
(45, '2024-11-22 09:46:08', '', 362, ''),
(46, '2024-11-22 09:46:11', 'unchanged', 317, 'No significant weight change.'),
(47, '2024-11-22 09:46:17', '', 362, ''),
(48, '2024-11-22 09:46:20', 'empty', 0, 'Food dispensed.'),
(49, '2024-11-22 09:46:27', '', 272, ''),
(50, '2024-11-22 09:46:30', '', 317, ''),
(51, '2024-11-22 09:46:34', '', 362, ''),
(52, '2024-11-22 09:46:37', 'unchanged', 45, 'No significant weight change.'),
(53, '2024-11-22 09:46:44', 'empty', 0, 'Food dispensed.'),
(54, '2024-11-22 09:49:00', 'full', 136, 'Food bowl full. Activation failed.'),
(55, '2024-11-22 09:49:14', 'unchanged', 90, 'No significant weight change.'),
(56, '2024-11-22 09:49:17', 'unchanged', 45, 'No significant weight change.'),
(57, '2024-11-22 09:49:20', 'empty', 0, 'Food dispensed.'),
(58, '2024-11-22 09:49:25', '', 90, ''),
(59, '2024-11-22 09:49:28', 'unchanged', 45, 'No significant weight change.'),
(60, '2024-11-22 09:49:34', 'empty', 0, 'Food dispensed.'),
(61, '2024-11-22 09:49:44', '', 45, ''),
(62, '2024-11-22 09:49:47', 'empty', 0, 'Food dispensed.'),
(63, '2024-11-22 09:49:52', 'full', 226, 'Food bowl full. Activation failed.'),
(64, '2024-11-22 09:49:54', 'full', 362, 'Food bowl full. Activation failed.'),
(65, '2024-11-22 09:49:57', 'empty', 0, 'Food dispensed.'),
(66, '2024-11-22 09:53:14', '', 90, ''),
(67, '2024-11-22 09:53:17', 'empty', 0, 'Food dispensed.'),
(68, '2024-11-22 09:54:24', 'unchanged', -816, 'No significant weight change.'),
(69, '2024-11-22 09:54:27', '', 0, ''),
(70, '2024-11-22 10:08:17', 'full', 2358, 'Food bowl full. Activation failed.'),
(71, '2024-11-22 10:09:08', 'unchanged', -2358, 'No significant weight change.'),
(72, '2024-11-22 10:09:10', 'full', 2539, 'Food bowl full. Activation failed.'),
(73, '2024-11-22 10:09:18', 'unchanged', -816, 'No significant weight change.'),
(74, '2024-11-22 10:09:22', 'full', 2358, 'Food bowl full. Activation failed.'),
(75, '2024-11-22 10:09:26', 'unchanged', -2947, 'No significant weight change.'),
(76, '2024-11-22 10:09:29', 'unchanged', -11292, 'No significant weight change.'),
(77, '2024-11-22 10:09:32', '', -5215, ''),
(78, '2024-11-22 10:09:37', '', -4036, ''),
(79, '2024-11-22 10:09:42', 'full', 2494, 'Food bowl full. Activation failed.'),
(80, '2024-11-22 10:09:45', 'unchanged', 2358, 'No significant weight change.'),
(81, '2024-11-22 10:16:46', 'full', 1541, 'Food bowl full. Activation failed.'),
(82, '2024-11-22 10:18:30', 'full', 1814, 'Food bowl full. Activation failed.'),
(83, '2024-11-22 10:18:38', 'unchanged', 1541, 'No significant weight change.'),
(84, '2024-11-22 10:18:44', 'full', 1678, 'Food bowl full. Activation failed.'),
(85, '2024-11-22 10:18:48', 'full', 1768, 'Food bowl full. Activation failed.'),
(86, '2024-11-22 10:18:51', 'unchanged', 1541, 'No significant weight change.'),
(87, '2024-11-22 10:19:06', 'full', 2585, 'Food bowl full. Activation failed.'),
(88, '2024-11-22 10:19:11', 'unchanged', 1541, 'No significant weight change.'),
(89, '2024-11-22 10:21:36', '', 45, ''),
(90, '2024-11-22 10:21:39', 'empty', 0, 'Food dispensed.'),
(91, '2024-11-22 10:21:55', 'full', 181, 'Food bowl full. Activation failed.'),
(92, '2024-11-22 10:21:57', 'unchanged', 136, 'No significant weight change.'),
(93, '2024-11-22 10:22:00', 'full', 181, 'Food bowl full. Activation failed.'),
(94, '2024-11-22 10:22:03', 'empty', 0, 'Food dispensed.'),
(95, '2024-11-22 10:22:10', '', 45, ''),
(96, '2024-11-22 10:22:13', 'full', 272, 'Food bowl full. Activation failed.'),
(97, '2024-11-22 10:22:15', 'unchanged', 226, 'No significant weight change.'),
(98, '2024-11-22 10:22:18', 'empty', 0, 'Food dispensed.'),
(99, '2024-11-22 10:28:41', 'full', 408, 'Food bowl full. Activation failed.'),
(100, '2024-11-22 10:28:43', 'empty', 0, 'Food dispensed.'),
(101, '2024-11-22 10:35:13', '', 90, ''),
(102, '2024-11-22 10:35:16', 'full', 226, 'Food bowl full. Activation failed.'),
(103, '2024-11-22 10:35:18', 'empty', 0, 'Food dispensed.'),
(104, '2024-11-22 10:35:44', 'full', 226, 'Food bowl full. Activation failed.'),
(105, '2024-11-22 10:35:46', 'unchanged', 136, 'No significant weight change.'),
(106, '2024-11-22 10:35:49', 'empty', 0, 'Food dispensed.'),
(107, '2024-11-22 10:42:42', '', 90, ''),
(108, '2024-11-22 10:42:45', 'unchanged', -6893, 'No significant weight change.'),
(109, '2024-11-22 10:42:47', '', -1451, ''),
(110, '2024-11-22 10:42:51', 'unchanged', -4852, 'No significant weight change.'),
(111, '2024-11-22 10:42:54', '', -1315, ''),
(112, '2024-11-22 10:42:56', 'unchanged', -4716, 'No significant weight change.'),
(113, '2024-11-22 10:42:59', 'unchanged', -10340, 'No significant weight change.'),
(114, '2024-11-22 10:43:01', 'unchanged', -14512, 'No significant weight change.'),
(115, '2024-11-22 15:20:38', 'unchanged', -3764, 'No significant weight change.'),
(116, '2024-11-22 15:20:45', '', 0, ''),
(117, '2024-11-22 15:21:33', 'unchanged', -1133, 'No significant weight change.'),
(118, '2024-11-22 15:23:16', 'unchanged', -11156, 'No significant weight change.'),
(119, '2024-11-22 15:23:20', 'full', 2403, 'Food bowl full. Activation failed.'),
(120, '2024-11-22 15:23:23', 'empty', 634, 'Food dispensed.'),
(121, '2024-11-22 15:23:27', 'empty', 408, 'Food dispensed.'),
(122, '2024-11-22 15:23:29', 'unchanged', 0, 'No significant weight change.'),
(123, '2024-11-22 15:23:32', 'full', 317, 'Food bowl full. Activation failed.'),
(124, '2024-11-22 15:23:34', 'full', 498, 'Food bowl full. Activation failed.'),
(125, '2024-11-22 15:23:37', 'full', 634, 'Food bowl full. Activation failed.'),
(126, '2024-11-22 15:23:40', 'empty', 362, 'Food dispensed.'),
(128, '2024-11-24 01:30:00', '[full]', 256, 'bowl full'),
(129, '2024-11-24 02:15:09', 'No significant change', 90, 'Pet has eaten from food bowl.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_schedules`
--

CREATE TABLE `tbl_schedules` (
  `schedule_id` int(11) NOT NULL,
  `schedule_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_schedules`
--

INSERT INTO `tbl_schedules` (`schedule_id`, `schedule_time`) VALUES
(21, '12:00:00'),
(23, '15:23:00'),
(24, '04:02:00'),
(26, '18:31:00'),
(28, '01:00:00'),
(29, '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `username`, `password`, `email`) VALUES
(1, 'gelgbrl', 'admin123', 'gelaigab31@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_bowl_status`
--
ALTER TABLE `tbl_bowl_status`
  ADD PRIMARY KEY (`bowl_id`);

--
-- Indexes for table `tbl_schedules`
--
ALTER TABLE `tbl_schedules`
  ADD PRIMARY KEY (`schedule_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_bowl_status`
--
ALTER TABLE `tbl_bowl_status`
  MODIFY `bowl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- AUTO_INCREMENT for table `tbl_schedules`
--
ALTER TABLE `tbl_schedules`
  MODIFY `schedule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
