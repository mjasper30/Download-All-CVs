-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2023 at 01:53 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uploading_cv`
--

-- --------------------------------------------------------

--
-- Table structure for table `cv_table`
--

CREATE TABLE `cv_table` (
  `id` int(11) NOT NULL,
  `cv_name` varchar(255) NOT NULL,
  `cv_file_path` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cv_table`
--

INSERT INTO `cv_table` (`id`, `cv_name`, `cv_file_path`, `timestamp`) VALUES
(1, 'Testing CV', 'uploads/Abduljarak A4 CV.pdf', '2023-07-25 11:31:53'),
(2, 'Testing 2', 'uploads/inbound5360175832456300555.pdf', '2023-07-25 11:32:58'),
(3, 'test 2', 'uploads/Josell Dela Pena CV.pdf', '2023-07-25 11:34:05'),
(4, 'ms word cv', 'uploads/inbound2086970272503353079.docx', '2023-07-25 11:41:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cv_table`
--
ALTER TABLE `cv_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cv_table`
--
ALTER TABLE `cv_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
