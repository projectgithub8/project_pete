-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 11 พ.ค. 2020 เมื่อ 05:00 PM
-- เวอร์ชันของเซิร์ฟเวอร์: 10.4.11-MariaDB
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
-- Database: `its`
--

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `course`
--

CREATE TABLE `course` (
  `d_id` int(30) NOT NULL,
  `id_sub` int(11) NOT NULL,
  `d_id2` varchar(30) NOT NULL,
  `d_name` varchar(120) NOT NULL,
  `d_eng` varchar(120) NOT NULL,
  `d_credit` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- dump ตาราง `course`
--

INSERT INTO `course` (`d_id`, `id_sub`, `d_id2`, `d_name`, `d_eng`, `d_credit`) VALUES
(43, 3, '400-11-01', 'คณิตศาสตร์ในชีวิตประจำวัน', 'Mathematics in Everyday Life', '3(3-0-6)'),
(44, 3, '400-11-02', 'กระบวนการคิดทางคณิตศาสตร์', 'Mathematical Process', '3(3-0-6)'),
(45, 4, '400-12-01', 'วิทยาศาสตร์เพื่อคุณภาพชีวิต', 'Science for Quality of Life', '3(3-0-6)'),
(46, 4, '400-12-02', 'สิ่งแวดล้อม เทคโนโลยี และการดำรงชีวิต', 'Environment, Technology and Living', '3(3-0-6)'),
(47, 5, '400-13-01', 'เทคโนโลยีสารสนเทศบูรณาการ', 'Integrated Information Technology', '3(2-2-5)'),
(48, 6, '401-11-01', 'การออกกำลังกายเพื่อสุขภาพ', 'Exercises for Health', '1(0-2-1)'),
(50, 7, '406-12-01', 'นันทนาการเพื่อพัฒนาคุณภาพชีวิต', 'Recreation for Development Quality of Life', '1(0-2-1)'),
(51, 7, '406-12-02', 'นันทนาการ', 'Recreation', '1(0-2-1)'),
(52, 7, '406-12-03', 'นันทนาการกลางแจ้ง', 'Outdoor Recreation', '1(0-2-1)'),
(53, 7, '406-12-04', 'กิจกรรม', 'Activities', '1(0-2-1)'),
(54, 3, '401-11-01', 'เทคโนโลยีคอมพิวเตอร์และการซ่อมบำรุงอุปกรณ์ทางเทคโนโลยีสารสนเทศ', 'Recreation', '1(0-2-1)');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `course_assessment`
--

CREATE TABLE `course_assessment` (
  `asm_id` int(11) NOT NULL,
  `std_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `group_sub`
--

CREATE TABLE `group_sub` (
  `id_sub` int(60) NOT NULL,
  `name_sub` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- dump ตาราง `group_sub`
--

INSERT INTO `group_sub` (`id_sub`, `name_sub`) VALUES
(3, 'กลุ่มวิชาคณิตศาสตร์'),
(4, 'กลุ่มวิชาวิทยาศาสตร์'),
(5, 'กลุ่มวิชาวิทยาการคอมพิวเตอร์'),
(6, 'กลุ่มวิชาพลศึกษา'),
(7, 'กลุ่มวิชานันทนาการ');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `standard`
--

CREATE TABLE `standard` (
  `id` int(10) NOT NULL,
  `standard_id` int(5) NOT NULL,
  `standard_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- dump ตาราง `standard`
--

INSERT INTO `standard` (`id`, `standard_id`, `standard_name`) VALUES
(1, 11, 'ด้านคุณธรรม จริยธรรม'),
(2, 21, 'ด้านความรู้'),
(3, 31, 'ด้านปัญญา'),
(4, 41, 'ด้านความสัมพันธ์ระหว่างบุคคลและความรับผิดชอบ'),
(5, 51, 'ด้านทักษะการวิเคราะห์เชิงตัวเลข การสื่อสาร และการใช้เทคโนโลยีสารสนเทศ'),
(11, 11, 'xz');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `standard_2`
--

CREATE TABLE `standard_2` (
  `std_id` int(10) NOT NULL,
  `id` int(10) NOT NULL,
  `id_small` int(10) NOT NULL,
  `std_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- dump ตาราง `standard_2`
--

INSERT INTO `standard_2` (`std_id`, `id`, `id_small`, `std_name`) VALUES
(4, 1, 110, 'มีความซื่อสัตย์ สุจริต มีวินัย อดกลั้น รับผิดชอบต่อหน้าที่และสังคม'),
(5, 1, 120, 'มีการดำเนินชีวิตตามหลักปรัชญาเศรษฐกิจพอเพียง'),
(6, 1, 130, 'มีการให้เกียรติผู้อื่น สุภาพ อ่อนน้อม ถ่อมตน รู้จักกาลเทศะ'),
(7, 1, 140, 'มีจิตสานึกในการอนุรักษ์วัฒนธรรมและภูมิปัญญาไทย'),
(8, 2, 210, 'มีโลกทัศน์และความรอบรู้ในศาสตร์ที่เป็นพื้นฐานของชีวิต'),
(10, 2, 220, 'สามารถนำความรู้ ความเข้าใจมาปรับใช้ในชีวิตประจำวันและการแข่งขันได้อย่างเป็นธรรม เหมาะสมกับสถานการณ์'),
(11, 2, 230, 'เข้าใจและเห็นคุณค่าของตนเอง ผู้อื่น สังคม ตลอดจนศิลปะ วัฒนธรรม ธรรมชาติและสิ่งแวดล้อม'),
(12, 3, 310, 'มีทักษะการแสวงหาความรู้ตลอดชีวิต เพื่อพัฒนาตนเองอย่างต่อเนื่อง'),
(13, 3, 320, 'มีวิจารณญาณในการนำความรู้ไปใช้ดำเนินชีวิตได้อย่างเหมาะสมกับสถานการณ์'),
(14, 3, 330, 'มีความคิดริเริ่มสร้างสรรค์'),
(15, 3, 340, 'สามารถคิดวิเคราะห์อย่างมีระบบและเชื่อมโยงกระบวนการคิดแบบต่างๆเพื่อแก้ไขปัญหา'),
(16, 4, 410, 'มีจิตสาธารณะ เห็นแก่ประโยชน์ส่วนรวมและเห็นอกเห็นใจผู้อื่น'),
(17, 0, 420, 'มีภาวะผู้นำและผู้ตามที่ดี สามารถทำงานร่วมกับผู้อื่นได้'),
(18, 4, 430, 'สามารถดำเนินชีวิตอย่างมีความสุขในสังคมพหุวัฒนธรรม'),
(19, 5, 510, 'สามารถวิเคราะห์ สังเคราะห์ เหมาะสมและประเมินค่าสารสนเทศอย่าง'),
(20, 5, 520, 'สามารถใช้เทคโนโลยีสารสนเทศในการสื่อสาร สืบค้นข้อมูล รวบรวม วิเคราะห์และนำเสนออย่างมีประสิทธิภาพ'),
(21, 1, 1100, 'มีการดำเนินชีวิตตามหลักปรัชญาเศรษฐกิจพอเพียง'),
(22, 1, 0, ''),
(23, 1, 2, 'ffff');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `course_assessment`
--
ALTER TABLE `course_assessment`
  ADD PRIMARY KEY (`asm_id`);

--
-- Indexes for table `group_sub`
--
ALTER TABLE `group_sub`
  ADD PRIMARY KEY (`id_sub`);

--
-- Indexes for table `standard`
--
ALTER TABLE `standard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `standard_2`
--
ALTER TABLE `standard_2`
  ADD PRIMARY KEY (`std_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `d_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `group_sub`
--
ALTER TABLE `group_sub`
  MODIFY `id_sub` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `standard`
--
ALTER TABLE `standard`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `standard_2`
--
ALTER TABLE `standard_2`
  MODIFY `std_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
