-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2024 at 11:51 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `enterprinor`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `email` varchar(230) NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`) VALUES
(1, 'akash', 'admin@admin.com', 'a1102957491b9ce5441e111f7725f2fd0201bc32465e2536e5182d1c5e3f6b0965355c09f2c8b9111ab6d18a73b75f0f3a06e788bd2a6dff4ddc7c4da6ada603');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `mid` varchar(230) NOT NULL,
  `rating` varchar(230) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `mid`, `rating`) VALUES
(1, 'shraddhawarhade941@gmail.com', '3'),
(2, 'shraddhawarhade941@gmail.com', '5'),
(3, 'shraddhawarhade941@gmail.com', '5'),
(4, 'shraddhawarhade941@gmail.com', '5');

-- --------------------------------------------------------

--
-- Table structure for table `mentor`
--

CREATE TABLE `mentor` (
  `id` int(10) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` text NOT NULL,
  `field_of_expertise` varchar(230) NOT NULL,
  `password` varchar(400) NOT NULL,
  `meetlink` varchar(890) NOT NULL,
  `status` varchar(230) NOT NULL DEFAULT 'approved',
  `rating` varchar(230) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mentor`
--

INSERT INTO `mentor` (`id`, `name`, `email`, `mobile`, `field_of_expertise`, `password`, `meetlink`, `status`, `rating`) VALUES
(4, 'sushil Mohad', 'mohadsushil5@gmail.com', '09518933742', 'IT', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2', '', 'approved', '3'),
(6, 'Shraddha dilip warhade', 'shraddhawarhade941@gmail.com', '09665085360', 'Finance', '3043aa4a83b0934982956a90828140cb834869135b5f294938865de12e036de440a330e1e8529bec15ddd59f18d1161a97bfec110d2622680f2c714a737d7061', 'https://meet.google.com/dhd-cozg-hpu', 'approved', '4.5'),
(8, 'nidhi', 'n@gmail.com', '12131431', 'IT', 'dd742b6818f1b2e6ea5cf9014431efeadd76fc713f81579ff6d95260a5a7152789359640b3b7084612b6ab6d2c789584a817e7b44ce17053fc7d7ea9cf4a2a72', 'https://meet.google.com/ksf-rbfb-tmd', 'approved', '0');

-- --------------------------------------------------------

--
-- Table structure for table `pitcher`
--

CREATE TABLE `pitcher` (
  `id` int(11) NOT NULL,
  `name` varchar(230) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(230) NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pitcher`
--

INSERT INTO `pitcher` (`id`, `name`, `email`, `mobile`, `password`) VALUES
(7, 'pranil', 'pranil@gmail.com', '1234567890', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2'),
(8, 'pranav', 'pranav@gmail.com', '1234567890', '7acd7a439ac593f76fdf6a3eb927953253b195ec50a3df3445f9148faeeea99f0039f1d5af0ddfac68e4abc85922147acca22833d8db2198f4d02a2284a2d5cf'),
(9, 'Pranil Fulkar', 'pranil@gmail.com', '123456', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2');

-- --------------------------------------------------------

--
-- Table structure for table `pitches`
--

CREATE TABLE `pitches` (
  `id` int(10) NOT NULL,
  `name` text NOT NULL,
  `desc` text NOT NULL,
  `fund` int(13) NOT NULL,
  `area` text NOT NULL,
  `video` varchar(255) NOT NULL,
  `uid` varchar(230) NOT NULL,
  `date_time` datetime DEFAULT CURRENT_TIMESTAMP,
  `approving_mentor_id` varchar(400) DEFAULT NULL,
  `approval_status` varchar(230) DEFAULT 'not_approved',
  `approving_mentor_name` text,
  `meetlink` varchar(890) NOT NULL,
  `meetdate` varchar(230) NOT NULL,
  `meettime` varchar(230) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pitches`
--

INSERT INTO `pitches` (`id`, `name`, `desc`, `fund`, `area`, `video`, `uid`, `date_time`, `approving_mentor_id`, `approval_status`, `approving_mentor_name`, `meetlink`, `meetdate`, `meettime`) VALUES
(6, 'trail name edit', 'trail description edit', 3000, 'IT', 'https://youtu.be/zWh3CShX_do?si=LYAXUDK3n_O1aHQS', 'pranil@gmail.com', '2024-03-28 12:05:56', NULL, 'booked', 'shraddhawarhade941@gmail.com', 'https://meet.google.com/dhd-cozg-hpu', '2024-03-28', '19:20'),
(7, 'burger', 'burgir', 20000, 'Food', 'https://www.youtube.com/watch?v=RJfqzUWZ0Bw', 'pranil@gmail.com', '2024-03-28 14:01:32', NULL, 'approved', 'n@gmail.com', 'https://meet.google.com/ksf-rbfb-tmd', '2024-03-28', '15:26');

-- --------------------------------------------------------

--
-- Table structure for table `requestcall`
--

CREATE TABLE `requestcall` (
  `id` int(11) NOT NULL,
  `uid` varchar(230) NOT NULL,
  `mid` varchar(230) NOT NULL,
  `stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(230) NOT NULL DEFAULT 'requested',
  `phone` varchar(230) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requestcall`
--

INSERT INTO `requestcall` (`id`, `uid`, `mid`, `stamp`, `status`, `phone`) VALUES
(1, 'pranil@gmail.com', '4', '2024-03-28 06:57:34', 'requested', ''),
(2, 'pranil@gmail.com', '6', '2024-03-28 07:46:56', 'requested', ''),
(3, 'pranil@gmail.com', '7', '2024-03-28 08:20:07', 'requested', ''),
(4, 'pranil@gmail.com', '6', '2024-03-28 08:21:29', 'requested', ''),
(5, 'pranil@gmail.com', '6', '2024-03-28 08:32:18', 'requested', ''),
(6, 'pranil@gmail.com', '7', '2024-03-28 08:32:58', 'requested', ''),
(7, 'pranil@gmail.com', '4', '2024-03-28 08:53:30', 'requested', ''),
(8, 'pranil@gmail.com', '4', '2024-03-28 09:04:59', 'requested', ''),
(9, 'pranil@gmail.com', '8', '2024-03-28 09:53:23', 'requested', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mentor`
--
ALTER TABLE `mentor`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `pitcher`
--
ALTER TABLE `pitcher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pitches`
--
ALTER TABLE `pitches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requestcall`
--
ALTER TABLE `requestcall`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mentor`
--
ALTER TABLE `mentor`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pitcher`
--
ALTER TABLE `pitcher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pitches`
--
ALTER TABLE `pitches`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `requestcall`
--
ALTER TABLE `requestcall`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
