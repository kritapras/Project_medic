-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 23, 2017 at 08:14 PM
-- Server version: 5.5.54-0+deb8u1
-- PHP Version: 5.6.30-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `medicine`
--

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE IF NOT EXISTS `medicine` (
  `No` int(3) NOT NULL,
  `List` text COLLATE utf8_bin NOT NULL,
  `Properties` varchar(300) COLLATE utf8_bin NOT NULL,
  `Howto` varchar(300) COLLATE utf8_bin NOT NULL,
  `warning` varchar(300) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`No`, `List`, `Properties`, `Howto`, `warning`) VALUES
(1, 'แอสไพริน', 'บรรเทาปวด ลดไข้', ' รับประทานทุกๆ 4-6 ชั่วโมง เมื่อมีอาการ ไม่ควรรับประทานเกินวันละ 5 ครั้ง ผู้ใหญ่ รับประทานครั้งละ 1-2 เม็ด	', ''),
(2, 'พาราเซตามอล', 'บรรเทาปวด ลดไข้', '4-6 ชั่วโมง เมื่อมีอาการ ไม่ควรรับประทานเกินวันละ 4 ครั้งผู้ใหญ่ รับประทานครั้งละ 1-2 เม็ด', ''),
(3, 'คลอร์เฟนิรามีน', 'แก้แพ้ลดน้ำมูก', 'รับประทานทุก 4-6 ชั่วโมง เมื่อมีอาการผู้ใหญ่ รับประทานครั้งละ 1-2 เม็ด ไม่ควรรับประทานเกินวันละ 12 เม็ด', ''),
(4, 'ไดเมนไฮดริเนท', 'แก้เมารถ เมาเรือ', 'ผู้ใหญ่รับประทานครั้งละ 1 เม็ด ก่อนออกเดินทางอย่างน้อย 30 นาที', ''),
(5, 'ยาแก้ไอน้ำดำ', 'ลดอาการไอ แก้ไอ ทำให้ชุ่มคอ', 'ผู้ใหญ่รับประทานครั้งละ 1-2 ช้อนชา หรือจิบบ่อยๆ เด็ก อายุ 6-15 ปี ครั้งละ 14 ช้อนชา วันละ 3 ครั้ง', 'ห้ามใช้ยานี้ในเด็กที่อายุต่ำกว่า 1 ปี และในคนชรา ห้ามใช้ติดต่อกันเกิน 3 วัน โปรดเขย่าขวดก่อนดื่ม'),
(6, 'ยาดมแก้วิงเวียน', 'แก้วิงเวียน แก้คัดจมูก', 'ใช้เมื่อเกิดอาการวิงเวียนหรือคัดจมูก		', ''),
(7, 'เยนเชี่ยนไวโอเลต', 'รักษาลิ้นเป็นฝ้า', 'ใช้สำลีชุบยาทาตามบริเวณที่เป็น วันละ 2-3 ครั้ง', ''),
(8, 'ยาธาตุน้ำแดง', 'แก้ปวดท้องเนื่องจากจุกเสียด ท้องขึ้น ท้องเฟ้อ และช่งยเจริญอาหาร', 'รับประทานครั้งละ 1 ช้อนโต๊ะ ก่อนอาหารวันละ 3 ครั้ง เด็กลดขนาดตามส่วน', ''),
(9, 'ผงน้ำตาลเกลือแร่', 'แก้ท้องเสีย', 'เทผงยาทั้งซองละลายในน้ำสะอาด เช่น น้ำต้มสุกที่เย็นแล้ว ประมาณ 250 มิลลิลิตร (1 แก้ว) ให้ดื่มมากๆ เมื่อเริ่มมีอาการท้องร่วง', ''),
(10, 'ยาระบาย ฟารัฟฟิน', 'ใช้รับประทานเป็นยาระบายท้อง แก้ท้องผูก', 'ขนาดรับประทาน ผู้ใหญ่ครั้งละ 1-2 ช็อนโต๊ะ ก่อนนอนหรือตื่นนอนเช้า', 'ถ้าเกิดอาการปวดท้องอย่างรุนแรง หรือคลื่นไส้อาเจียน ห้ามใช้ยานี้ โปรดเขย่าขวดก่อนดื่ม'),
(11, 'เบนดาโซล', 'ถ่ายพยาธิตัวกลม', 'รับประทานครั้งละ 1 เม็ด หลังอาหารเย็นเพียงครั้งเดียว	', ''),
(12, 'ยาหม่องชนิดขี้ผึ้ง', 'บรรเทาอาการปวดกล้ามเนื้อ แมลงกัดต่อย', 'ใช้ทาบริเวณที่ปวด บวม อักเสบ เมื่อยกล้ามเนื้อ หรือถูกแมลงกัดต่อย', ''),
(13, 'ยาหยอดตาซัลฟาเซตาไมด์', 'หยอดตารักษาตาแดง ตาอักเสบ ตาเจ็บ', 'ใช้หยอดตาครั้งละ 1-2 หยด วันละ 3-4 ครั้ง	', 'ใช้ภายนอก ห้ามรับประทาน'),
(14, 'คาลาไมน์', 'แก้ผดผื่นคัน', 'เขย่าขวดก่อนใช้ยา ใช้ยาบริเวณที่เป็น', 'ยาภายนอกห้ามรับประทาน'),
(15, 'ทิงเจอร์ไอโอดีน', 'รักษาแผล', 'ใช้สำลีสะอาดชุบยาทาที่แผล		', ''),
(16, 'เอทธิลแอลกอฮอล์', 'ฆ่าเชื้อโรค ล้างมือ', 'ใช้ล้างเครื่องมือ ทำความสะอาดบาดแผล เพื่อฆ่าฌชื้อโรคที่ผิวหนัง โดยใช้สำลีชุบน้ำยาเช็ดลาดแผล', 'ใช้ภายนอก ห้ามรับประทาน'),
(17, 'วิตามินซี ', 'บำรุงร่างกาย', 'รับประทานวันละ 1 ครั้งผู้ใหญ่ รับประทานครั้งละ 2 เม็ด', ''),
(18, 'ยาขับลม', 'ใช้บรรเทาอาการท้องขึ้น ท้องอืด ท้องเฟ้อ และขับลมในกระเพาะอาหาร', 'รับประทานวันละ 3-4 ครั้งผู้ใหญ่ รับประทานครั้งละ 1-2 ช้อนโต๊ะ', 'เขย่าขวดก่อนใช้ยา'),
(19, 'ยาเม็ดลดกรดอะลูมินา – แมกนีเซีย', 'ลดกรดในกระเพาะอาหาร', 'รับประทานก่อนอาหาร 30 นาที หรือหลังอาหาร 1 ชั่วโมง หรือเมื่อมีอาการ ผู้ใหญ่ รับประทานครั้งละ 1-4 เม็ด', ''),
(20, 'ยาล้างตาโบริค', 'สำหรับล้างตา เพื่อช่วยรักษาตา ตาอักเสบต่างๆ', 'ใช้ล้างตา วันละ 2-3 ครั้ง		', 'ยาภายนอก ห้ามรับประทาน');

-- --------------------------------------------------------

--
-- Table structure for table `medicine_status`
--

CREATE TABLE IF NOT EXISTS `medicine_status` (
`id` int(2) NOT NULL,
  `title` varchar(20) NOT NULL,
  `status` int(6) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=100 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `medicine_status`
--

INSERT INTO `medicine_status` (`id`, `title`, `status`) VALUES
(24, 'med1_count', 291),
(25, 'med2_count', 444),
(27, 'med1_take_count', 1),
(28, 'med2_take_count', 1),
(29, 'med3_take_count', 1),
(30, 'med1_take_before', 1),
(31, 'med2_take_before', 1),
(32, 'med3_take_before', 1),
(33, 'med1_meal_mor', 1),
(34, 'med2_meal_mor', 1),
(35, 'med3_meal_mor', 1),
(36, 'med1_meal_atn', 1),
(37, 'med2_meal_atn', 1),
(38, 'med3_meal_atn', 1),
(39, 'med1_meal_evn', 1),
(40, 'med2_meal_evn', 1),
(41, 'med3_meal_evn', 1),
(42, 'med1_meal_nig', 1),
(43, 'med2_meal_nig', 1),
(44, 'med3_meal_nig', 1),
(45, 'med1_sol', 0),
(46, 'med2_sol', 0),
(47, 'med3_sol', 0),
(48, 'takenow', 1),
(49, 'med3_count', 50),
(99, 'med3_count', 50);

-- --------------------------------------------------------

--
-- Table structure for table `rfid`
--

CREATE TABLE IF NOT EXISTS `rfid` (
  `status` int(3) NOT NULL,
  `rfid` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rfid`
--

INSERT INTO `rfid` (`status`, `rfid`) VALUES
(1, 10),
(2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `timeedit`
--

CREATE TABLE IF NOT EXISTS `timeedit` (
  `title` varchar(10) NOT NULL,
  `timeedit` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `timeedit`
--

INSERT INTO `timeedit` (`title`, `timeedit`) VALUES
('med1_edit', '2017-05-23 11:21:31'),
('med2_edit', '2017-05-23 11:21:35'),
('med3_edit', '2017-05-23 11:21:38'),
('time_edit', '2017-05-23 12:20:19');

-- --------------------------------------------------------

--
-- Table structure for table `timetake`
--

CREATE TABLE IF NOT EXISTS `timetake` (
  `period` text NOT NULL,
  `timeeat` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `timetake`
--

INSERT INTO `timetake` (`period`, `timeeat`) VALUES
('morning', '19:50:00'),
('afternoon', '19:28:00'),
('evening', '19:31:00'),
('night', '19:42:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `medicine_status`
--
ALTER TABLE `medicine_status`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `medicine_status`
--
ALTER TABLE `medicine_status`
MODIFY `id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=100;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
