-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 17, 2024 at 08:08 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `swushsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_faculty`
--

CREATE TABLE `tbl_faculty` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `faculty_role` varchar(50) NOT NULL,
  `FT/PT` varchar(50) NOT NULL,
  `preffered_subject` varchar(100) NOT NULL,
  `preffered_strand` varchar(100) NOT NULL,
  `required_hours` int(11) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(50) NOT NULL,
  `zip` varchar(10) NOT NULL,
  `profile_pic` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rooms`
--

CREATE TABLE `tbl_rooms` (
  `id` int(11) NOT NULL,
  `room_code` varchar(50) NOT NULL,
  `room_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_schoolyear`
--

CREATE TABLE `tbl_schoolyear` (
  `id` int(11) NOT NULL,
  `schoolyear_name` varchar(255) NOT NULL,
  `schoolyear_start_date` date NOT NULL,
  `schoolyear_end_date` date NOT NULL,
  `1stsem_start_date` date NOT NULL,
  `1stsem_end_date` date NOT NULL,
  `2ndsem_start_date` date NOT NULL,
  `2ndsem_end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_strand`
--

CREATE TABLE `tbl_strand` (
  `id` int(11) NOT NULL,
  `strand_name` varchar(50) NOT NULL,
  `strand_code` varchar(50) NOT NULL,
  `class_size` int(5) NOT NULL,
  `strand_specialization` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subjects`
--

CREATE TABLE `tbl_subjects` (
  `id` int(11) NOT NULL,
  `subject_code` varchar(50) NOT NULL,
  `subject_desc` varchar(50) NOT NULL,
  `credited_units` int(10) NOT NULL,
  `lec/lab` varchar(50) NOT NULL,
  `grade_level` varchar(50) NOT NULL,
  `strand` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `password` char(255) NOT NULL DEFAULT 'swuphinmashs',
  `role` varchar(20) NOT NULL,
  `contact_number` varchar(11) NOT NULL,
  `status` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `username`, `first_name`, `last_name`, `password`, `role`, `contact_number`, `status`) VALUES
(1, 'kurt1', 'kurt', 'imperial', 'swuphinmashs', 'superAdmin', '0', 0),
(6, 'sampleusername', 'sample', 'sample', '$2y$10$uncXGQq/zlToPa0PtuyTc.kfX7H3O3GQntn5WoWS5X/S35WYGCKJ.', 'admin', '09683171436', 0),
(10, 'superadmin', 'kurt pogi', 'imperial', '$2y$10$pXHx0RUZ3oLVBUo69xX.9.AuHudbILJxQNvcsNyaG4DOEVNrIhu1C', 'superAdmin', '1', 0),
(12, 'teacher', 'kurt pogi 3', 'imperial', '$2y$10$gMy5PI4lWAmeR9Faip.3Tu06Pmt149PnB8T7/8stJisD7KS3o4VLi', 'teacher', '1', 0),
(13, 'coordinator', 'kurt pogi 4', 'imperial', '$2y$10$Zsmo.VdpuwxksVEtBwGYieLrKJmgkbNSGb7u31J1aqrXOCYPUkvoK', 'coordinator', '1', 0),
(18, 'admin', 'admin', 'imperial', '$2y$10$rfC.x6LIsuoG1aqO/mk4TeVIowBd6i8hKZcrHEqTWhMMwxDeIrGcS', 'admin', '94898945', 1),
(19, 'admin§', 'kurt', 'pogi', '$2y$10$UdZjwp0hL0TAVrV1PH4GZeyTnlTXDfbC12r4zScILbYDTyri7G/Se', 'admin', '234324', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_faculty`
--
ALTER TABLE `tbl_faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_rooms`
--
ALTER TABLE `tbl_rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_schoolyear`
--
ALTER TABLE `tbl_schoolyear`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_strand`
--
ALTER TABLE `tbl_strand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_subjects`
--
ALTER TABLE `tbl_subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_faculty`
--
ALTER TABLE `tbl_faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_rooms`
--
ALTER TABLE `tbl_rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_schoolyear`
--
ALTER TABLE `tbl_schoolyear`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_strand`
--
ALTER TABLE `tbl_strand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_subjects`
--
ALTER TABLE `tbl_subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
