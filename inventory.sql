-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 11, 2021 at 09:59 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `emp_id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(32) COLLATE utf8_persian_ci NOT NULL,
  `lastname` varchar(32) COLLATE utf8_persian_ci NOT NULL,
  `fathername` varchar(32) COLLATE utf8_persian_ci NOT NULL,
  `emp_job` varchar(32) COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`emp_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `firstname`, `lastname`, `fathername`, `emp_job`) VALUES
(1, 'نبی', 'صفری', 'محمد علی', 'مدیر1'),
(2, 'عبدالرحمن', 'آرمان', 'محمد حسین', 'مدیر'),
(3, 'متین', 'اجملی', 'اجمل', 'کارمند اداری'),
(4, 'احمد علی', 'احمی', 'محمد', 'کارمند اداری');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

DROP TABLE IF EXISTS `item`;
CREATE TABLE IF NOT EXISTS `item` (
  `item_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_name` varchar(64) COLLATE utf8_persian_ci NOT NULL,
  `item_price` int(11) NOT NULL,
  `item_date` date NOT NULL,
  `emp_id` int(11) NOT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`item_id`, `item_name`, `item_price`, `item_date`, `emp_id`) VALUES
(1, 'کمپیوتر', 2000, '2021-02-09', 1),
(2, 'میز', 100, '2021-02-09', 2),
(3, 'چوکی', 2017, '2000-02-00', 1),
(4, 'چوکی', 2017, '2000-02-00', 1),
(5, 'چوکی', 2017, '2000-02-00', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
