-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2020 at 11:11 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `midterm871`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_871`
--

CREATE TABLE `book_871` (
  `book_id_871` varchar(10) NOT NULL,
  `book_name_871` varchar(256) NOT NULL,
  `author_871` varchar(256) NOT NULL,
  `publishing_871` varchar(256) NOT NULL,
  `class_id_871` int(3) NOT NULL,
  `images` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book_871`
--

INSERT INTO `book_871` (`book_id_871`, `book_name_871`, `author_871`, `publishing_871`, `class_id_871`, `images`) VALUES
('b001', 'ขนมไทย', 'จริยา เดชกุญชร', 'เพชรการเรือน', 0, 'thai.jpg'),
('b002', 'เกียรติคุณของพระพุทธเจ้า', 'พุทธทาสภิกขุ', 'เอมี่เทรดติ้ง', 100, '159-U0237102-635169176410820000-1.jfif'),
('b003', 'E-commerce ในธุรกิจจริง-เรียนรู้ จากกรณีศึกษาเด่นทั่วโลก', 'ศูนย์พัฒนาพาณิชย์ อิเล็กทรอนิกส์', 'ศูนย์เทคโนโลยีอิเล็กทรอนิกส์และคอมพิวเตอร์แห่งชาติ', 600, '9786167809199l.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `classification_871`
--

CREATE TABLE `classification_871` (
  `class_id_871` varchar(11) NOT NULL,
  `class_name_871` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `classification_871`
--

INSERT INTO `classification_871` (`class_id_871`, `class_name_871`) VALUES
('000', 'เบ็ตเตล็ดหรือความรู้ทั่วไป'),
('100', 'ปรัชญา'),
('200', 'ศาสนา'),
('300', 'สังคมศาสตร์'),
('400', 'ภาษาศาสตร์'),
('500', 'วิทยาศาสตร์'),
('600', 'วิทยาศาสตร์ประยุกต์ หรือเทตโนโลยี');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_871`
--
ALTER TABLE `book_871`
  ADD PRIMARY KEY (`book_id_871`);

--
-- Indexes for table `classification_871`
--
ALTER TABLE `classification_871`
  ADD PRIMARY KEY (`class_id_871`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
