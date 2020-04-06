-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 07, 2020 at 05:38 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `CDC`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `at_id` int(11) NOT NULL,
  `value` varchar(50) NOT NULL,
  `mem_id` int(11) NOT NULL,
  `date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`at_id`, `value`, `mem_id`, `date`) VALUES
(1, 'Present', 1, '08-01-20'),
(2, 'Present', 2, '08-01-20'),
(3, 'Absent', 3, '08-01-20'),
(4, 'Present', 1, '09-01-20'),
(5, 'Present', 2, '09-01-20'),
(6, 'Absent', 3, '09-01-20'),
(7, 'Present', 1, '10-01-20'),
(8, 'Present', 4, '10-01-20'),
(9, 'Absent', 5, '10-01-20'),
(10, 'Absent', 6, '10-01-20'),
(11, 'Present', 7, '10-01-20'),
(12, 'Present', 8, '10-01-20'),
(13, 'Absent', 9, '10-01-20'),
(14, 'Present', 5, '13-01-20'),
(15, 'Present', 7, '13-01-20'),
(16, 'Absent', 8, '13-01-20'),
(17, 'Present', 9, '13-01-20'),
(18, 'Present', 5, '25-01-20'),
(19, 'Present', 7, '25-01-20'),
(20, 'Absent', 8, '25-01-20'),
(21, 'Present', 9, '25-01-20');

-- --------------------------------------------------------

--
-- Table structure for table `auth`
--

CREATE TABLE `auth` (
  `id` int(5) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `auth`
--

INSERT INTO `auth` (`id`, `username`, `password`) VALUES
(1, 'admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `eventregistration`
--

CREATE TABLE `eventregistration` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `college` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `eventregistration`
--

INSERT INTO `eventregistration` (`id`, `name`, `college`, `email`, `phone`) VALUES
(1, 'Abbas', 'CAHCET', 'mohammedabbas120116@gmail.com', '7708469998'),
(2, 'Abbas', 'CAHCET', 'mohammedabbas120116@gmail.com', '7708469998'),
(5, 'Fazil', 'CAHCET', 'abc@gmail.com', '78909876');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `text` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image`, `text`) VALUES
(1, 'IMG_20180715_061834_HDR~01.jpg', 'TEST');

-- --------------------------------------------------------

--
-- Table structure for table `mem`
--

CREATE TABLE `mem` (
  `mem_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `roll` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mem`
--

INSERT INTO `mem` (`mem_id`, `name`, `roll`, `email`) VALUES
(5, 'Aftab Alam', '18604', 'abc@gmail.com'),
(7, 'Abbas', '18601', 'fireloopdevelopers@gmail.com'),
(8, 'Abbas', '18604', 'mohammedabbas120116@gmail.com'),
(9, 'Abbas', '18601', 'fireloopdevelopers@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`at_id`);

--
-- Indexes for table `auth`
--
ALTER TABLE `auth`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eventregistration`
--
ALTER TABLE `eventregistration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mem`
--
ALTER TABLE `mem`
  ADD PRIMARY KEY (`mem_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `at_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `auth`
--
ALTER TABLE `auth`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `eventregistration`
--
ALTER TABLE `eventregistration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `mem`
--
ALTER TABLE `mem`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
