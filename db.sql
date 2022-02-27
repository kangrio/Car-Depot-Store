-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 30, 2020 at 01:46 PM
-- Server version: 5.7.30-0ubuntu0.16.04.1
-- PHP Version: 7.2.16-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `b_id` int(5) NOT NULL,
  `user_id` int(5) NOT NULL,
  `carsign` varchar(10) NOT NULL,
  `province` varchar(100) NOT NULL,
  `brand` varchar(25) NOT NULL,
  `model` varchar(50) NOT NULL,
  `bookingtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `checkin` datetime DEFAULT NULL,
  `checkout` datetime DEFAULT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'request'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

-- INSERT INTO `booking` (`b_id`, `user_id`, `carsign`, `province`, `brand`, `model`, `bookingtime`, `checkin`, `checkout`, `status`) VALUES
-- (1, 2, '1กง 1111', 'ตาก', 'Alfa Romeo', '164', '2020-03-04 17:41:14', '2020-03-05 00:41:50', '2020-03-05 00:42:03', 'service'),
-- (2, 2, '1หย 2222', 'นครนายก', 'Aston Martin', 'Lagonda', '2020-03-04 17:42:05', NULL, NULL, 'cancel'),
-- (3, 2, '1กง  7666', 'นราธิวาส', 'Avanti', 'Coupe', '2020-03-04 17:53:59', '2020-03-05 00:56:25', '2020-03-05 00:56:40', 'service'),
-- (4, 3, 'a1 5555', 'ตราด', 'AMC', 'Concord', '2020-03-04 18:22:37', NULL, NULL, 'cancel'),
-- (5, 3, '1หก  7644', 'ชลบุรี', 'AMC', 'Concord', '2020-03-04 18:24:41', NULL, NULL, 'cancel'),
-- (6, 3, '4หห 4554', 'กาญจนบุรี', 'Audi', '200', '2020-03-04 18:26:07', NULL, NULL, 'cancel'),
-- (7, 3, '3ดด  8778', 'ยะลา', 'Chrysler', 'Concorde', '2020-03-04 18:28:54', '2020-03-05 01:33:32', '2020-03-05 15:00:00', 'service'),
-- (8, 3, '3ดด  8778', 'ยะลา', 'Chrysler', 'Concorde', '2020-03-04 18:28:54', '2020-03-05 01:29:12', '2020-03-05 01:31:09', 'service'),
-- (9, 3, 'ff 5857', 'นราธิวาส', 'Daewoo', 'Nubira', '2020-03-05 07:20:21', NULL, NULL, 'request'),
-- (10, 3, '777', 'ตราด', 'Fisker', 'Karma', '2020-03-05 07:20:57', NULL, NULL, 'cancel'),
-- (11, 2, '1หก  7665', 'กระบี่', 'BMW', '318i', '2020-03-05 07:30:18', '2020-05-11 01:03:13', NULL, 'service'),
-- (12, 4, 'gfgc', 'จันทบุรี', 'Audi', 'A4', '2020-07-03 12:46:19', '2020-07-03 19:50:26', '2020-07-03 19:50:34', 'service'),
-- (13, 4, 'hg', 'ชัยนาท', 'BMW', '323ci', '2020-07-08 01:56:25', NULL, NULL, 'cancel');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_username` varchar(20) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_firstname` varchar(50) NOT NULL,
  `user_lastname` varchar(50) NOT NULL,
  `user_adress` varchar(100) NOT NULL,
  `user_phone` char(10) NOT NULL,
  `user_email` varchar(20) NOT NULL,
  `user_level` varchar(20) NOT NULL DEFAULT 'customer',
  `user_birthday` date NOT NULL,
  `user_gender` varchar(10) NOT NULL,
  `user_id_card` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_username`, `user_password`, `user_firstname`, `user_lastname`, `user_adress`, `user_phone`, `user_email`, `user_level`, `user_birthday`, `user_gender`, `user_id_card`) VALUES
(1, 'admin', 'admin', 'admin', 'admin', 'admin', '0000000000', 'admin@admin.com', 'admin', '2020-03-11', 'ชาย', '0000000000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `b_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
