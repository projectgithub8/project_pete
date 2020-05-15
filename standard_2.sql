-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2020 at 05:53 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `standard_2`
--

CREATE TABLE `standard_2` (
  `std_id` int(10) NOT NULL,
  `id` int(10) NOT NULL,
  `id_small` int(10) NOT NULL,
  `std_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `standard_2`
--

INSERT INTO `standard_2` (`std_id`, `id`, `id_small`, `std_name`) VALUES
(29, 1, 110, 'มีความซื่อสัตย์ สุจริต มีวินัย อดกลั้น รับผิดชอบต่อหน้าที่และสังคม'),
(30, 1, 120, 'มีการดำเนินชีวิตตามหลักปรัชญาเศรษฐกิจพอเพียง'),
(31, 1, 130, 'มีการให้เกียรติผู้อื่น สุภาพ อ่อนน้อม ถ่อมตน รู้จักกาลเทศะ'),
(32, 1, 140, 'มีจิตสำนึกในการอนุรักษ์วัฒนธรรมและภูมิปัญญาไทย'),
(33, 2, 210, 'มีโลกทัศน์และความรอบรู้ในศาสตร์ที่เป็นพื้นฐานของชีวิต'),
(34, 2, 220, 'สามารถนำความรู้ ความเข้าใจมาปรับใช้ในชีวิตประจำวันและการแข่งขันได้อย่างเป็นธรรม เหมาะสมกับสถานการณ์'),
(35, 2, 230, 'เข้าใจและเห็นคุณค่าของตนเอง ผู้อื่น สังคม ตลอดจนศิลปะ วัฒนธรรม ธรรมชาติและสิ่งแวดล้อม'),
(36, 3, 310, 'มีทักษะการแสวงหาความรู้ตลอดชีวิต เพื่อพัฒนาตนเองอย่างต่อเนื่อง'),
(37, 3, 320, 'มีวิจารณญาณในการนำความรู้ไปใช้ดำเนินชีวิตได้อย่างเหมาะสมกับสถานการณ์'),
(38, 3, 330, 'มีความคิดริเริ่มสร้างสรรค์'),
(39, 3, 340, 'สามารถคิดวิเคราะห์อย่างมีระบบและเชื่อมโยงกระบวนการคิดแบบต่างๆเพื่อแก้ไขปัญหา'),
(40, 4, 410, 'มีจิตสาธารณะ เห็นแก่ประโยชน์ส่วนรวมและเห็นอกเห็นใจผู้อื่น'),
(41, 4, 420, 'มีภาวะผู้นำและผู้ตามที่ดี สามารถทำงานร่วมกับผู้อื่นได้'),
(42, 4, 430, 'สามารถดำเนินชีวิตอย่างมีความสุขในสังคมพหุวัฒนธรรม'),
(43, 4, 440, 'เป็นพลเมืองที่ดีของสังคมไทยและสังคมโลก'),
(44, 5, 510, 'สามารถวิเคราะห์ สังเคราะห์ เหมาะสมและประเมินค่าสารสนเทศอย่าง'),
(46, 5, 520, 'สามารถใช้เทคโนโลยีสารสนเทศในการสื่อสาร สืบค้นข้อมูล รวบรวม วิเคราะห์และนำเสนออย่างมีประสิทธิภาพ'),
(47, 5, 530, 'ทักษะการวิเคราะห์เชิงตัวเลข เพื่อประยุกต์ใช้และแก้ปัญหาในชีวิตประจำวัน'),
(48, 5, 540, 'ใช้ภาษาสื่อสาร สื่อความหมายได้อย่างมีประสิทธิภาพและสร้างสรรค์');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `standard_2`
--
ALTER TABLE `standard_2`
  ADD PRIMARY KEY (`std_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `standard_2`
--
ALTER TABLE `standard_2`
  MODIFY `std_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
