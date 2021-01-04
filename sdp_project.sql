-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2021 at 07:08 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sdp_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `discharge`
--

CREATE TABLE `discharge` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `patientName` varchar(255) NOT NULL,
  `patientType` varchar(255) NOT NULL,
  `patientAddress` text NOT NULL,
  `cabinNo` varchar(255) NOT NULL,
  `admissionDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `dischargeDate` datetime NOT NULL,
  `reference` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `discharge`
--

INSERT INTO `discharge` (`id`, `patient_id`, `patientName`, `patientType`, `patientAddress`, `cabinNo`, `admissionDate`, `dischargeDate`, `reference`) VALUES
(5, 5, 'Md. Abu Younus', 'emergency', 'Patiya', 'B-210', '2021-01-03 18:05:17', '2021-01-10 00:00:00', 'Dr. Ahsan');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(11) NOT NULL,
  `doctorName` varchar(255) NOT NULL,
  `doctorType` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `roomNo` varchar(255) NOT NULL,
  `mobileNo` varchar(255) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `doctorName`, `doctorType`, `address`, `roomNo`, `mobileNo`, `image`) VALUES
(5, 'Dr. Munna', 'Cardiologist', 'Patiya', 'B-Block-112', '01647447774', 'pexels-photo-1919236.jpeg'),
(11, 'Dr. Younus', 'Neurologist', 'Chattogram', 'A-Block-113', '01747363806', 'pexels-photo-263210.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` int(11) NOT NULL,
  `patientName` varchar(255) NOT NULL,
  `patientType` varchar(255) NOT NULL,
  `patientAddress` varchar(255) NOT NULL,
  `cabinNo` varchar(255) NOT NULL,
  `admissionDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `reference` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `patientName`, `patientType`, `patientAddress`, `cabinNo`, `admissionDate`, `reference`) VALUES
(5, 'Md. Abu Younus', 'emergency', 'Patiya', 'B-210', '2021-01-02 18:00:00', 'Dr. Ahsan'),
(6, 'Md. Abu Younus', 'emergency', 'Patiya', 'B-210', '2021-01-02 18:00:00', 'Dr. Ahsan');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirmPassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstName`, `lastName`, `email`, `password`, `confirmPassword`) VALUES
(1, 'Abu', 'Younus', 'munnapatiya@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `discharge`
--
ALTER TABLE `discharge`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `discharge`
--
ALTER TABLE `discharge`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
