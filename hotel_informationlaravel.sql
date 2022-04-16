-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2020 at 05:17 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel_informationlaravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `created_at`, `update_at`) VALUES
(1, 'admin', 'admin@admin.com', '$2y$10$LdHbhqs0iFpCy/O6z1.Kf.N7YntSbWE5PafeiCgAOK0xzVONPpguO', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'yasmine', 'yasmine@admin.com', '$2y$10$u9xtxOQv14JEQA6vSq.KF.5yZt9bjNzV1qQUl2vAK1UDovbNcbvvC', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Yasmine', 'yasmine@mail.com', 'hello', 'welcome', '2020-12-13 16:15:35', '2020-12-13 16:15:35');

-- --------------------------------------------------------

--
-- Table structure for table `descriptions`
--

CREATE TABLE `descriptions` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `descriptions`
--

INSERT INTO `descriptions` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'About Us', 'Tired of your daily routine? Seeking for a place to stay and rest with your family? You are in the right place! Our spa resort and hotel provides luxury and historic accommodations for travelers. It combines modern style and amenities with traditional values. All rooms are equipped with air conditioners and LCD TVs. Free WI-FI service is available throughout the territory of the hotel. Our restaurant food and meals from world cuisines unite people connecting history and traditions. Experience our warm hospitality, high quality of service and exceptional comfort! Make a reservation for your dream vacation today! .', '2020-12-10 09:07:00', '2020-12-10 09:07:00');

-- --------------------------------------------------------

--
-- Table structure for table `homes`
--

CREATE TABLE `homes` (
  `id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL,
  `click` varchar(255) DEFAULT '',
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `homes`
--

INSERT INTO `homes` (`id`, `photo`, `text`, `click`, `updated_at`, `created_at`) VALUES
(1, 'Hotel_1607590250.jpg', 'Rooms', 'Click To Show Rooms.', '2020-12-10 08:50:51', '2020-12-10 08:50:51'),
(2, 'Hotel_1607590287.jpg', 'Rooms', 'Click To Show Rooms.', '2020-12-10 08:51:27', '2020-12-10 08:51:27'),
(3, 'Hotel_1607590302.jpg', 'Rooms', 'Click To Show Rooms.', '2020-12-10 08:51:42', '2020-12-10 08:51:42'),
(4, 'Hotel_1607590326.jpg', 'Swimming Pool', NULL, '2020-12-10 08:52:06', '2020-12-10 08:52:06'),
(5, 'Hotel_1607590351.jpg', 'Swimming Pool', NULL, '2020-12-10 08:52:31', '2020-12-10 08:52:31'),
(6, 'Hotel_1607590367.jpeg', 'Looby', NULL, '2020-12-10 08:52:47', '2020-12-10 08:52:47'),
(7, 'Hotel_1607590378.jpeg', 'Looby', NULL, '2020-12-10 08:52:58', '2020-12-10 08:52:58'),
(8, 'Hotel_1607590426.jpg', 'Restaurant', NULL, '2020-12-10 08:53:46', '2020-12-10 08:53:46'),
(9, 'Hotel_1607590434.jpeg', 'Restaurant', NULL, '2020-12-10 08:53:54', '2020-12-10 08:53:54');

-- --------------------------------------------------------

--
-- Table structure for table `infodetails`
--

CREATE TABLE `infodetails` (
  `id` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `infodetails`
--

INSERT INTO `infodetails` (`id`, `address`, `email`, `website`, `phone`, `created_at`, `updated_at`) VALUES
(2, '88 Street,City,County,Post Number', 'info@RoyalHotel.com', 'RoyalHotel.com', '01122277555', '2020-12-12 23:36:30', '2020-12-12 23:47:23');

-- --------------------------------------------------------

--
-- Table structure for table `registrations`
--

CREATE TABLE `registrations` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `RoomType` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `numberofguests` int(11) NOT NULL,
  `checkin` date DEFAULT NULL,
  `checkout` date DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `registrations`
--

INSERT INTO `registrations` (`id`, `name`, `password`, `RoomType`, `email`, `numberofguests`, `checkin`, `checkout`, `created_at`, `updated_at`) VALUES
(1, 'Yasmine Mohamed', '$2y$10$KMDBzB77RLKOOzbCQ5X.Xe/y.vxvr2InkokPpgAVMrvOvQ0YuoAi6', 'Double Room', 'yasmine@mail.com', 2, '2020-12-30', '2021-01-12', '2020-12-13 16:16:32', '2020-12-13 16:16:32');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `RoomType` varchar(255) NOT NULL,
  `facilities` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `photo`, `price`, `RoomType`, `facilities`, `created_at`, `updated_at`) VALUES
(1, 'Hotel_1607736384.jpg', 2000, 'Single Room', 'No Facilities', '2020-12-12 01:26:24', '2020-12-12 01:26:24'),
(2, 'Hotel_1607736454.jpg', 1000, 'Double Room', 'There are Facilities', '2020-12-12 01:27:34', '2020-12-12 01:27:34'),
(3, 'Hotel_1607736473.jpg', 800, 'Triple Room', 'No Facilities', '2020-12-12 01:27:53', '2020-12-12 01:27:53'),
(4, 'Hotel_1607736517.jpg', 3000, 'Studio', 'There are Facilities', '2020-12-12 01:28:37', '2020-12-12 01:28:37'),
(5, 'Hotel_1607736535.jpg', 4000, 'Suite', 'There are Facilities', '2020-12-12 01:28:55', '2020-12-12 01:28:55'),
(6, 'Hotel_1607736566.jpg', 5000, 'Apartement', 'There are Facilities', '2020-12-12 01:29:26', '2020-12-12 01:29:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `descriptions`
--
ALTER TABLE `descriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homes`
--
ALTER TABLE `homes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `infodetails`
--
ALTER TABLE `infodetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registrations`
--
ALTER TABLE `registrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `descriptions`
--
ALTER TABLE `descriptions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `homes`
--
ALTER TABLE `homes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `infodetails`
--
ALTER TABLE `infodetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `registrations`
--
ALTER TABLE `registrations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
