-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 02, 2019 at 10:40 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `events`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_photo`) VALUES
(6, 'Business', '../../resource/eventCategoryImages/business.jpg'),
(7, 'Parties', '../../resource/eventCategoryImages/parties.jpg'),
(8, 'Classes', '../../resource/eventCategoryImages/Classes.jpg'),
(9, 'Sports', '../../resource/eventCategoryImages/Sport.jpg'),
(11, 'Food', '../../resource/eventCategoryImages/Food.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `eventss`
--

CREATE TABLE `eventss` (
  `event_id` bigint(20) NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `event_date` varchar(255) NOT NULL,
  `event_cost` bigint(255) NOT NULL,
  `event_description` text NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `event_photo` varchar(255) NOT NULL,
  `latitude` varchar(255) NOT NULL,
  `longitude` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eventss`
--

INSERT INTO `eventss` (`event_id`, `event_name`, `event_date`, `event_cost`, `event_description`, `category_name`, `event_photo`, `latitude`, `longitude`) VALUES
(7, 'Music Event Name', '2000-02-02', 1212, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eum voluptate aliquid, delectus aliquam ex nobis aut dolorum quo ipsa, fugit quibusdam libero ducimus perspiciatis nam nisi veritatis beatae laudantium consequuntur, iure accusamus odio rerum! Eligendi expedita nesciunt voluptas impedit, eum fugiat fuga animi necessitatibus accusantium molestias veniam voluptatibus et illum quas sapiente voluptatum nemo minima saepe illo rem libero numquam voluptate? Ratione culpa quaerat, eos ipsa minus optio aliquid maxime.', 'Music', '../../resource/eventImages/music.jpg', '', ''),
(8, 'Art Image Name', '2000-01-04', 13223, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eum voluptate aliquid, delectus aliquam ex nobis aut dolorum quo ipsa, fugit quibusdam libero ducimus perspiciatis nam nisi veritatis beatae laudantium consequuntur, iure accusamus odio rerum! Eligendi expedita nesciunt voluptas impedit, eum fugiat fuga animi necessitatibus accusantium molestias veniam voluptatibus et illum quas sapiente voluptatum nemo minima saepe illo rem libero numquam voluptate? Ratione culpa quaerat, eos ipsa minus optio aliquid maxime.', 'Art', '../../resource/eventImages/art.jpg', '', ''),
(9, 'Business Event Name', '3000-04-05', 3432, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab aperiam expedita dolor harum quod similique velit nesciunt provident ex enim quasi modi fugiat, doloremque corporis quia molestias fuga alias at! Quod magnam mollitia nesciunt, at illo dignissimos hic minima culpa aspernatur numquam sed totam praesentium ipsa cum saepe corrupti temporibus nulla unde quaerat fuga cupiditate, id natus iure quis. Enim fugit reprehenderit laboriosam non minima doloribus. Sunt qui fugiat rem!', 'Business', '../../resource/eventImages/business.jpg', '', ''),
(10, 'Parties Event Name', '4000-04-04', 3214, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab aperiam expedita dolor harum quod similique velit nesciunt provident ex enim quasi modi fugiat, doloremque corporis quia molestias fuga alias at! Quod magnam mollitia nesciunt, at illo dignissimos hic minima culpa aspernatur numquam sed totam praesentium ipsa cum saepe corrupti temporibus nulla unde quaerat fuga cupiditate, id natus iure quis. Enim fugit reprehenderit laboriosam non minima doloribus. Sunt qui fugiat rem!', 'Parties', '../../resource/eventImages/parties.jpg', '', ''),
(11, 'Classes', '4444-04-05', 32323, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab aperiam expedita dolor harum quod similique velit nesciunt provident ex enim quasi modi fugiat, doloremque corporis quia molestias fuga alias at! Quod magnam mollitia nesciunt, at illo dignissimos hic minima culpa aspernatur numquam sed totam praesentium ipsa cum saepe corrupti temporibus nulla unde quaerat fuga cupiditate, id natus iure quis. Enim fugit reprehenderit laboriosam non minima doloribus. Sunt qui fugiat rem!', 'Classes', '../../resource/eventImages/Classes.jpg', '', ''),
(12, 'Sports Event Name', '8000-08-08', 32323, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab aperiam expedita dolor harum quod similique velit nesciunt provident ex enim quasi modi fugiat, doloremque corporis quia molestias fuga alias at! Quod magnam mollitia nesciunt, at illo dignissimos hic minima culpa aspernatur numquam sed totam praesentium ipsa cum saepe corrupti temporibus nulla unde quaerat fuga cupiditate, id natus iure quis. Enim fugit reprehenderit laboriosam non minima doloribus. Sunt qui fugiat rem!', 'Sports', '../../resource/eventImages/Sport.jpg', '', ''),
(15, 'FOOD NAME', '2000-03-25', 2323, 'SDGDFGDF', 'Food', '../../resource/eventImages/Classes.jpg', '31.262243899999998', '75.7027212');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `photo_id` bigint(20) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`photo_id`, `photo`) VALUES
(2, '../../resource/eventImages/Sport.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `registredEvent`
--

CREATE TABLE `registredEvent` (
  `id` bigint(20) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` bigint(255) NOT NULL,
  `profession` varchar(255) NOT NULL,
  `organization` varchar(255) NOT NULL,
  `event_cost` bigint(255) NOT NULL,
  `event_id` bigint(255) NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registredEvent`
--

INSERT INTO `registredEvent` (`id`, `full_name`, `email`, `phone_number`, `profession`, `organization`, `event_cost`, `event_id`, `event_name`, `category_name`) VALUES
(1, 'shubham', 'jiopaamom@gmail.com', 8790475455, '', 'hal', 0, 0, '', ''),
(2, 'shubham', 'xsxz@gmail.com', 8790475455, '', 'hal', 0, 1, 'Event_Name', 'Category_Name'),
(3, 'Mohit', 'mohit@gmail.com', 8790475455, '', 'LPU', 0, 15, 'FOOD NAME', 'Food'),
(4, 'Sam', 'sam@gmail.com', 8790475455, '', 'lpu', 2323, 15, 'FOOD NAME', 'Food'),
(5, 'ram', 'ram@gmail.com', 989999999999, '', 'dasklb', 2323, 15, 'FOOD NAME', 'Food'),
(6, 'rohit', 'rohit@gmail.com', 8790475455, 'developer', 'mit', 2323, 15, 'FOOD NAME', 'Food'),
(7, 'hal', 'hal@gmail.com', 9346576070, 'hal', 'hal', 1212, 7, 'Music Event Name', 'Music');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `eventss`
--
ALTER TABLE `eventss`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`photo_id`);

--
-- Indexes for table `registredEvent`
--
ALTER TABLE `registredEvent`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `eventss`
--
ALTER TABLE `eventss`
  MODIFY `event_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `photo_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `registredEvent`
--
ALTER TABLE `registredEvent`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
