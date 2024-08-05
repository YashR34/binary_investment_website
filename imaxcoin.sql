-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 05, 2024 at 10:11 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `imaxcoin`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_fund`
--

CREATE TABLE `add_fund` (
  `id` int(11) NOT NULL,
  `user_id` int(10) NOT NULL,
  `amt` int(10) NOT NULL,
  `a_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `user_id` varchar(10) NOT NULL,
  `password` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user_id`, `password`) VALUES
(1, 'hello', 121212);

-- --------------------------------------------------------

--
-- Table structure for table `direct_income`
--

CREATE TABLE `direct_income` (
  `id` int(11) NOT NULL,
  `user_id` varchar(11) NOT NULL,
  `amount` float NOT NULL,
  `d_date` date NOT NULL,
  `income_by` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `direct_income`
--

INSERT INTO `direct_income` (`id`, `user_id`, `amount`, `d_date`, `income_by`) VALUES
(32, '12345678', 20, '2023-12-21', '21837173'),
(33, '12345678', 20, '2023-12-21', '21837173'),
(34, '12345678', 20, '2023-12-21', '47606588'),
(35, '12345678', 40, '2023-12-21', '66824900'),
(36, '12345678', 40, '2023-12-21', '59081538'),
(37, '21837173', 40, '2023-12-21', '69909619'),
(38, '47606588', 40, '2023-12-21', '83628969'),
(39, '47606588', 40, '2023-12-21', '38501571');

-- --------------------------------------------------------

--
-- Table structure for table `e_wallet_fund`
--

CREATE TABLE `e_wallet_fund` (
  `id` int(11) NOT NULL,
  `user_id` varchar(11) NOT NULL,
  `amout` float NOT NULL,
  `e_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `e_wallet_fund`
--

INSERT INTO `e_wallet_fund` (`id`, `user_id`, `amout`, `e_date`) VALUES
(26, '12345678', 500, '2023-12-21'),
(27, '12345678', 500, '2023-12-21'),
(28, '21837173', 500, '2023-12-21'),
(29, '47606588', 500, '2023-12-21'),
(30, '66824900', 500, '2023-12-21'),
(31, '59081538', 500, '2023-12-21'),
(32, '69909619', 500, '2023-12-21'),
(33, '83628969', 500, '2023-12-21'),
(34, '38501571', 5000, '2023-12-21'),
(35, '12345678', 600, '2023-12-21'),
(36, '12345678', 2000, '2023-12-21');

-- --------------------------------------------------------

--
-- Table structure for table `fund_pay`
--

CREATE TABLE `fund_pay` (
  `id` int(11) NOT NULL,
  `user_id` varchar(11) NOT NULL,
  `paid_by` varchar(11) NOT NULL,
  `amount` float NOT NULL,
  `p_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `imax_price`
--

CREATE TABLE `imax_price` (
  `id` int(11) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `imax_price`
--

INSERT INTO `imax_price` (`id`, `price`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `income_history`
--

CREATE TABLE `income_history` (
  `srno` int(10) NOT NULL,
  `user_id` varchar(25) NOT NULL,
  `amt` float NOT NULL,
  `desp` varchar(100) NOT NULL,
  `cr_dr` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `income_history`
--

INSERT INTO `income_history` (`srno`, `user_id`, `amt`, `desp`, `cr_dr`) VALUES
(460, '12345678', 500, 'Package Purchase', 1),
(461, '12345678', 100, 'Package Purchase', 1),
(462, '12345678', 20, 'Direct Income', 0),
(463, '12345678', 100, 'Package Purchase', 1),
(464, '12345678', 20, 'Direct Income', 0),
(465, '12345678', 100, 'Package Purchase', 1),
(466, '12345678', 20, 'Direct Income', 0),
(467, '12345678', 100, 'Package Purchase', 1),
(468, '12345678', 500, 'Package Purchase', 1),
(469, '21837173', 500, 'Package Purchase', 1),
(470, '47606588', 500, 'Package Purchase', 1),
(471, '66824900', 500, 'Package Purchase', 1),
(472, '59081538', 500, 'Package Purchase', 1),
(473, '69909619', 500, 'Package Purchase', 1),
(474, '83628969', 500, 'Package Purchase', 1),
(475, '38501571', 5000, 'Package Purchase', 1),
(476, '12345678', 100, 'Package Purchase', 1),
(477, '21837173', 100, 'Package Purchase', 1),
(478, '21837173', 20, 'Direct Income', 0),
(479, '21837173', 100, 'Package Purchase', 1),
(480, '21837173', 20, 'Direct Income', 0),
(481, '47606588', 100, 'Package Purchase', 1),
(482, '47606588', 20, 'Direct Income', 0),
(483, '66824900', 200, 'Package Purchase', 1),
(484, '66824900', 40, 'Direct Income', 0),
(485, '59081538', 200, 'Package Purchase', 1),
(486, '59081538', 40, 'Direct Income', 0),
(487, '69909619', 200, 'Package Purchase', 1),
(488, '69909619', 40, 'Direct Income', 0),
(489, '83628969', 200, 'Package Purchase', 1),
(490, '83628969', 40, 'Direct Income', 0),
(491, '38501571', 200, 'Package Purchase', 1),
(492, '38501571', 40, 'Direct Income', 0),
(493, '12345678', 50, 'Matching Income', 0),
(494, '21837173', 20, 'Matching Income', 0),
(495, '12345678', 2, 'Matching Level Income', 0),
(496, '47606588', 20, 'Matching Income', 0),
(497, '12345678', 2, 'Matching Level Income', 0),
(498, '12345678', 0, 'Daily Staking Income', 0),
(499, '21837173', 0, 'Daily Staking Income', 0),
(500, '12345678', 0, 'Staking Level Income Income', 0),
(501, '21837173', 0, 'Daily Staking Income', 0),
(502, '12345678', 0, 'Staking Level Income Income', 0),
(503, '47606588', 0, 'Daily Staking Income', 0),
(504, '12345678', 0, 'Staking Level Income Income', 0),
(505, '66824900', 1, 'Daily Staking Income', 0),
(506, '12345678', 0.1, 'Staking Level Income Income', 0),
(507, '59081538', 1, 'Daily Staking Income', 0),
(508, '12345678', 0.1, 'Staking Level Income Income', 0),
(509, '69909619', 1, 'Daily Staking Income', 0),
(510, '21837173', 0.1, 'Staking Level Income Income', 0),
(511, '12345678', 0.05, 'Staking Level Income Income', 0),
(512, '83628969', 1, 'Daily Staking Income', 0),
(513, '47606588', 0.1, 'Staking Level Income Income', 0),
(514, '12345678', 0.05, 'Staking Level Income Income', 0),
(515, '38501571', 1, 'Daily Staking Income', 0),
(516, '47606588', 0.1, 'Staking Level Income Income', 0),
(517, '12345678', 0.05, 'Staking Level Income Income', 0),
(518, '12345678', 50, 'Package Purchase', 1),
(519, '12345678', 20, 'Package Purchase', 1),
(520, '12345678', 600, 'Package Purchase', 1),
(521, '12345678', 500, 'Package Purchase', 1),
(522, '12345678', 2000, 'Package Purchase', 1),
(523, '12345678', 100, 'Package Purchase', 1),
(524, '12345678', 0, 'Daily Staking Income', 0),
(525, '12345678', 0, 'Daily Staking Income', 0),
(526, '12345678', 3, 'Daily Staking Income', 0),
(527, '12345678', 0.25, 'Daily Staking Income', 0),
(528, '12345678', 0, 'Daily Staking Income', 0),
(529, '21837173', 0, 'Daily Staking Income', 0),
(530, '12345678', 0, 'Staking Level Income Income', 0),
(531, '21837173', 0, 'Daily Staking Income', 0),
(532, '12345678', 0, 'Staking Level Income Income', 0),
(533, '47606588', 0, 'Daily Staking Income', 0),
(534, '12345678', 0, 'Staking Level Income Income', 0),
(535, '66824900', 1, 'Daily Staking Income', 0),
(536, '12345678', 0.1, 'Staking Level Income Income', 0),
(537, '59081538', 1, 'Daily Staking Income', 0),
(538, '12345678', 0.1, 'Staking Level Income Income', 0),
(539, '69909619', 1, 'Daily Staking Income', 0),
(540, '21837173', 0.1, 'Staking Level Income Income', 0),
(541, '12345678', 0.05, 'Staking Level Income Income', 0),
(542, '83628969', 1, 'Daily Staking Income', 0),
(543, '47606588', 0.1, 'Staking Level Income Income', 0),
(544, '12345678', 0.05, 'Staking Level Income Income', 0),
(545, '38501571', 1, 'Daily Staking Income', 0),
(546, '47606588', 0.1, 'Staking Level Income Income', 0),
(547, '12345678', 0.05, 'Staking Level Income Income', 0),
(548, '12345678', 0, 'Daily Staking Income', 0),
(549, '12345678', 0, 'Daily Staking Income', 0),
(550, '12345678', 3, 'Daily Staking Income', 0),
(551, '12345678', 0.25, 'Daily Staking Income', 0);

-- --------------------------------------------------------

--
-- Table structure for table `invest_return`
--

CREATE TABLE `invest_return` (
  `id` int(11) NOT NULL,
  `staking_id` int(11) NOT NULL,
  `user_id` varchar(11) NOT NULL,
  `amount` float NOT NULL,
  `i_date` date NOT NULL,
  `invested_amount` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `invest_return`
--

INSERT INTO `invest_return` (`id`, `staking_id`, `user_id`, `amount`, `i_date`, `invested_amount`) VALUES
(131, 69, '12345678', 0, '2023-12-21', 100),
(132, 70, '21837173', 0, '2023-12-21', 100),
(133, 71, '21837173', 0, '2023-12-21', 100),
(134, 72, '47606588', 0, '2023-12-21', 100),
(135, 73, '66824900', 1, '2023-12-21', 200),
(136, 74, '59081538', 1, '2023-12-21', 200),
(137, 75, '69909619', 1, '2023-12-21', 200),
(138, 76, '83628969', 1, '2023-12-21', 200),
(139, 77, '38501571', 1, '2023-12-21', 200),
(140, 78, '12345678', 0, '2023-12-21', 50),
(141, 79, '12345678', 0, '2023-12-21', 20),
(142, 80, '12345678', 3, '2023-12-21', 500),
(143, 81, '12345678', 0.25, '2023-12-21', 100),
(144, 69, '12345678', 0, '2023-12-22', 100),
(145, 70, '21837173', 0, '2023-12-22', 100),
(146, 71, '21837173', 0, '2023-12-22', 100),
(147, 72, '47606588', 0, '2023-12-22', 100),
(148, 73, '66824900', 1, '2023-12-22', 200),
(149, 74, '59081538', 1, '2023-12-22', 200),
(150, 75, '69909619', 1, '2023-12-22', 200),
(151, 76, '83628969', 1, '2023-12-22', 200),
(152, 77, '38501571', 1, '2023-12-22', 200),
(153, 78, '12345678', 0, '2023-12-22', 50),
(154, 79, '12345678', 0, '2023-12-22', 20),
(155, 80, '12345678', 3, '2023-12-22', 500),
(156, 81, '12345678', 0.25, '2023-12-22', 100);

-- --------------------------------------------------------

--
-- Table structure for table `level_income_history`
--

CREATE TABLE `level_income_history` (
  `id` int(11) NOT NULL,
  `user_id` varchar(11) NOT NULL,
  `amount` float NOT NULL,
  `l_date` date NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `level_income_history`
--

INSERT INTO `level_income_history` (`id`, `user_id`, `amount`, `l_date`, `level`) VALUES
(19, '12345678', 2, '2023-12-21', 2),
(20, '12345678', 2, '2023-12-21', 2);

-- --------------------------------------------------------

--
-- Table structure for table `matching_amount`
--

CREATE TABLE `matching_amount` (
  `id` int(11) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `amount` float NOT NULL,
  `paid_amount` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `matching_amount`
--

INSERT INTO `matching_amount` (`id`, `user_id`, `amount`, `paid_amount`) VALUES
(189, '12345678', 50, 500),
(190, '21837173', 20, 200),
(191, '47606588', 20, 200);

-- --------------------------------------------------------

--
-- Table structure for table `matching_income_history`
--

CREATE TABLE `matching_income_history` (
  `id` int(11) NOT NULL,
  `user_id` int(10) NOT NULL,
  `amt` float NOT NULL,
  `m_date` date NOT NULL,
  `match_amount` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `matching_income_history`
--

INSERT INTO `matching_income_history` (`id`, `user_id`, `amt`, `m_date`, `match_amount`) VALUES
(159, 12345678, 50, '2023-12-21', 500),
(160, 21837173, 20, '2023-12-21', 200),
(161, 47606588, 20, '2023-12-21', 200);

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` int(10) NOT NULL,
  `package_amount` int(10) NOT NULL,
  `daily_amount` float NOT NULL,
  `total_days` int(10) NOT NULL,
  `package_name` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `package_amount`, `daily_amount`, `total_days`, `package_name`) VALUES
(2, 20, 0.1, 400, 'BRONZE'),
(3, 50, 0.25, 400, 'SILVER'),
(4, 100, 0.25, 400, 'PEARL'),
(5, 200, 1, 400, 'GOLD'),
(8, 500, 2.5, 400, 'DAIMOND'),
(9, 1000, 5, 400, 'PRO');

-- --------------------------------------------------------

--
-- Table structure for table `package_details`
--

CREATE TABLE `package_details` (
  `id` int(10) NOT NULL,
  `agent_id` varchar(15) NOT NULL,
  `package_amt` int(10) NOT NULL,
  `package_daily_amt` float NOT NULL,
  `total_days` int(10) NOT NULL,
  `paid_days` int(10) NOT NULL,
  `package_purchase_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `last_payment_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `package_details`
--

INSERT INTO `package_details` (`id`, `agent_id`, `package_amt`, `package_daily_amt`, `total_days`, `paid_days`, `package_purchase_date`, `last_payment_date`) VALUES
(69, '12345678', 100, 0, 400, 9, '2023-12-21 07:05:20', '0000-00-00'),
(70, '21837173', 100, 0, 400, 2, '2023-12-21 07:05:35', '0000-00-00'),
(71, '21837173', 100, 0, 400, 2, '2023-12-21 07:05:36', '0000-00-00'),
(72, '47606588', 100, 0, 400, 1, '2023-12-21 07:06:05', '0000-00-00'),
(73, '66824900', 200, 1, 400, 1, '2023-12-21 07:06:28', '0000-00-00'),
(74, '59081538', 200, 1, 400, 1, '2023-12-21 07:06:51', '0000-00-00'),
(75, '69909619', 200, 1, 400, 1, '2023-12-21 07:09:20', '0000-00-00'),
(76, '83628969', 200, 1, 400, 1, '2023-12-21 07:09:41', '0000-00-00'),
(77, '38501571', 200, 1, 400, 1, '2023-12-21 07:10:10', '0000-00-00'),
(78, '12345678', 50, 0, 400, 9, '2023-12-21 09:44:57', '0000-00-00'),
(79, '12345678', 20, 0, 400, 9, '2023-12-21 09:45:15', '0000-00-00'),
(80, '12345678', 500, 3, 400, 9, '2023-12-21 09:46:54', '0000-00-00'),
(81, '12345678', 100, 0.25, 400, 9, '2023-12-21 09:48:44', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `pair_count`
--

CREATE TABLE `pair_count` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `c_date` date NOT NULL,
  `no_of_pair` int(10) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pair_count`
--

INSERT INTO `pair_count` (`id`, `user_id`, `c_date`, `no_of_pair`, `status`) VALUES
(52, 12345678, '2023-12-21', 3, 0),
(53, 21837173, '2023-12-21', 1, 0),
(54, 47606588, '2023-12-21', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pin`
--

CREATE TABLE `pin` (
  `id` int(11) NOT NULL,
  `pin_value` bigint(10) NOT NULL,
  `allocate_user` int(10) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pin`
--

INSERT INTO `pin` (`id`, `pin_value`, `allocate_user`, `status`) VALUES
(2, 55555, 12345678, 1);

-- --------------------------------------------------------

--
-- Table structure for table `reward_income_history`
--

CREATE TABLE `reward_income_history` (
  `id` int(11) NOT NULL,
  `user_id` varchar(11) NOT NULL,
  `amount` float NOT NULL,
  `no_of_pair` int(11) NOT NULL,
  `no_of_days` int(11) NOT NULL,
  `r_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sponsor_staking_income`
--

CREATE TABLE `sponsor_staking_income` (
  `id` int(11) NOT NULL,
  `user_id` varchar(11) NOT NULL,
  `amount` float NOT NULL,
  `s_date` date NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sponsor_staking_income`
--

INSERT INTO `sponsor_staking_income` (`id`, `user_id`, `amount`, `s_date`, `level`) VALUES
(329, '12345678', 0, '2023-12-21', 0),
(330, '12345678', 0, '2023-12-21', 0),
(331, '12345678', 0, '2023-12-21', 0),
(332, '12345678', 0.1, '2023-12-21', 0),
(333, '12345678', 0.1, '2023-12-21', 0),
(334, '21837173', 0.1, '2023-12-21', 0),
(335, '12345678', 0.05, '2023-12-21', 0),
(336, '47606588', 0.1, '2023-12-21', 0),
(337, '12345678', 0.05, '2023-12-21', 0),
(338, '47606588', 0.1, '2023-12-21', 0),
(339, '12345678', 0.05, '2023-12-21', 0),
(340, '12345678', 0, '2023-12-22', 0),
(341, '12345678', 0, '2023-12-22', 0),
(342, '12345678', 0, '2023-12-22', 0),
(343, '12345678', 0.1, '2023-12-22', 0),
(344, '12345678', 0.1, '2023-12-22', 0),
(345, '21837173', 0.1, '2023-12-22', 0),
(346, '12345678', 0.05, '2023-12-22', 0),
(347, '47606588', 0.1, '2023-12-22', 0),
(348, '12345678', 0.05, '2023-12-22', 0),
(349, '47606588', 0.1, '2023-12-22', 0),
(350, '12345678', 0.05, '2023-12-22', 0);

-- --------------------------------------------------------

--
-- Table structure for table `userinfodata`
--

CREATE TABLE `userinfodata` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(255) NOT NULL,
  `user_id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` int(10) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `position` tinyint(1) NOT NULL DEFAULT 0,
  `sponsor_id` int(10) NOT NULL,
  `wallet` float NOT NULL,
  `e_wallet` float NOT NULL,
  `total_income` float NOT NULL,
  `left_count` int(10) NOT NULL,
  `right_count` int(10) NOT NULL,
  `placement_id` int(10) NOT NULL,
  `left_side` int(10) NOT NULL,
  `right_side` int(10) NOT NULL,
  `dob` date DEFAULT NULL,
  `imax_wallet_add` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `aadhar` varchar(100) NOT NULL,
  `registration_date` datetime DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `ub_status` tinyint(1) NOT NULL DEFAULT 0,
  `invest_amt` int(11) NOT NULL,
  `gender` tinyint(1) NOT NULL DEFAULT 0,
  `date_of_activate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `user_id`, `name`, `password`, `mobile`, `position`, `sponsor_id`, `wallet`, `e_wallet`, `total_income`, `left_count`, `right_count`, `placement_id`, `left_side`, `right_side`, `dob`, `imax_wallet_add`, `address`, `aadhar`, `registration_date`, `status`, `ub_status`, `invest_amt`, `gender`, `date_of_activate`) VALUES
(1, 12345678, 'Yash', 987654, 0, 0, 0, 0, 0, 0, 1, 0, 0, 58270078, 0, '2000-01-01', '9999000077776666', 'Sector-20,Kamre, Ranchi, Jharkhand.', '', '2023-12-18 00:00:00', 0, 0, 0, 0, '0000-00-00 00:00:00'),
(201, 58270078, 'jai sai deepak', 1234, 9876543210, 0, 12345678, 0, 0, 0, 0, 0, 12345678, 0, 0, NULL, '', '', '', '2024-06-11 00:00:00', 0, 0, 0, 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `withdrawal`
--

CREATE TABLE `withdrawal` (
  `id` int(11) NOT NULL,
  `user_id` varchar(25) NOT NULL,
  `amt` int(10) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `request_date` datetime NOT NULL,
  `approve_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_fund`
--
ALTER TABLE `add_fund`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `direct_income`
--
ALTER TABLE `direct_income`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `e_wallet_fund`
--
ALTER TABLE `e_wallet_fund`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fund_pay`
--
ALTER TABLE `fund_pay`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `imax_price`
--
ALTER TABLE `imax_price`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `income_history`
--
ALTER TABLE `income_history`
  ADD PRIMARY KEY (`srno`);

--
-- Indexes for table `invest_return`
--
ALTER TABLE `invest_return`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `level_income_history`
--
ALTER TABLE `level_income_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `matching_amount`
--
ALTER TABLE `matching_amount`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `matching_income_history`
--
ALTER TABLE `matching_income_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package_details`
--
ALTER TABLE `package_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pair_count`
--
ALTER TABLE `pair_count`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pin`
--
ALTER TABLE `pin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reward_income_history`
--
ALTER TABLE `reward_income_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sponsor_staking_income`
--
ALTER TABLE `sponsor_staking_income`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userinfodata`
--
ALTER TABLE `userinfodata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `withdrawal`
--
ALTER TABLE `withdrawal`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_fund`
--
ALTER TABLE `add_fund`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `direct_income`
--
ALTER TABLE `direct_income`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `e_wallet_fund`
--
ALTER TABLE `e_wallet_fund`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `fund_pay`
--
ALTER TABLE `fund_pay`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `imax_price`
--
ALTER TABLE `imax_price`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `income_history`
--
ALTER TABLE `income_history`
  MODIFY `srno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=552;

--
-- AUTO_INCREMENT for table `invest_return`
--
ALTER TABLE `invest_return`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=157;

--
-- AUTO_INCREMENT for table `level_income_history`
--
ALTER TABLE `level_income_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `matching_amount`
--
ALTER TABLE `matching_amount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=192;

--
-- AUTO_INCREMENT for table `matching_income_history`
--
ALTER TABLE `matching_income_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=162;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `package_details`
--
ALTER TABLE `package_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `pair_count`
--
ALTER TABLE `pair_count`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `pin`
--
ALTER TABLE `pin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `reward_income_history`
--
ALTER TABLE `reward_income_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT for table `sponsor_staking_income`
--
ALTER TABLE `sponsor_staking_income`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=351;

--
-- AUTO_INCREMENT for table `userinfodata`
--
ALTER TABLE `userinfodata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202;

--
-- AUTO_INCREMENT for table `withdrawal`
--
ALTER TABLE `withdrawal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
