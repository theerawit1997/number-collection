-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 16, 2023 at 07:31 PM
-- Server version: 8.0.17
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
-- Database: `mydata`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(128) NOT NULL,
  `prefix` varchar(255) NOT NULL,
  `fname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `lname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `department` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `position` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `tel` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `prefix`, `fname`, `lname`, `department`, `position`, `tel`) VALUES
(17, 'นาย', 'asd11', 'ddd', 'แผนกผู้ป่วยใน', 'พยาบาล', 123),
(18, 'นาง', 'qe', 'ee', 'แผนกผู้ป่วยใน', 'แพทย์', 13),
(21, 'นาง', 'qwe', 'qwe', 'แผนกผู้ป่วยใน', 'พยาบาล', 1123123),
(22, 'นาง', 'aaaddd', 'asd', 'แผนกผู้ป่วยใน', 'พยาบาล', 13131313),
(23, 'นางสาว', 'a131', 'asdad', 'แผนกผู้ป่วยใน', 'เจ้าหน้าที่', 131313),
(24, 'ไม่กำหนด', 'qq', 'qq', 'ไม่กำหนด', 'ไม่กำหนด', 123123),
(25, 'ไม่กำหนด', 'qeqeqe', 'qeqeqe', 'ไม่กำหนด', 'ไม่กำหนด', 123123),
(27, 'ไม่กำหนด', 'dq', 'dqq', 'ไม่กำหนด', 'ไม่กำหนด', 1),
(28, 'ไม่กำหนด', 'qqddd', 'dd', 'ไม่กำหนด', 'ไม่กำหนด', 123),
(29, 'ไม่กำหนด', 'gqeq', 'gg1', 'ไม่กำหนด', 'ไม่กำหนด', 123123),
(30, 'ไม่กำหนด', 'ggg', 'ggg', 'ไม่กำหนด', 'ไม่กำหนด', 31);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
