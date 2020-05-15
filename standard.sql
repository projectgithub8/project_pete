-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2020 at 09:33 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `capacity`
--

-- --------------------------------------------------------

--
-- Table structure for table `standard`
--

CREATE TABLE `standard` (
  `id` int(10) NOT NULL,
  `standard_id` int(5) NOT NULL,
  `standard_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `standard`
--

INSERT INTO `standard` (`id`, `standard_id`, `standard_name`) VALUES
(1, 11, 'ด้านคุณธรรม จริยธรรม'),
(2, 21, 'ด้านความรู้'),
(3, 31, 'ด้านปัญญา'),
(4, 41, 'ด้านความสัมพันธ์ระหว่างบุคคลและความรับผิดชอบ'),
(5, 51, 'ด้านทักษะการวิเคราะห์เชิงตัวเลข การสื่อสาร และการใช้เทคโนโลยีสารสนเทศ'),
(11, 11, 'xz');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `standard`
--
ALTER TABLE `standard`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `standard`
--
ALTER TABLE `standard`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
