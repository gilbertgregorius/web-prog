-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 19, 2024 at 04:11 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bem_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tb`
--

DROP TABLE IF EXISTS `admin_tb`;
CREATE TABLE IF NOT EXISTS `admin_tb` (
  `id_admin` int NOT NULL,
  `a_password` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_tb`
--

INSERT INTO `admin_tb` (`id_admin`, `a_password`) VALUES
(1, '1'),
(123456789, 'Qwerty123'),
(210987654, 'SuperSecure'),
(456789012, 'Admin1234'),
(987654321, 'Password123');

-- --------------------------------------------------------

--
-- Table structure for table `calvin_pay`
--

DROP TABLE IF EXISTS `calvin_pay`;
CREATE TABLE IF NOT EXISTS `calvin_pay` (
  `pay_id` int NOT NULL AUTO_INCREMENT,
  `nim` int DEFAULT NULL,
  `balance` float DEFAULT NULL,
  PRIMARY KEY (`pay_id`),
  KEY `nim` (`nim`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `calvin_pay`
--

INSERT INTO `calvin_pay` (`pay_id`, `nim`, `balance`) VALUES
(1, 123456789, 50000),
(2, 210987654, 50000),
(3, 222101862, 50000),
(4, 222102303, 50000),
(5, 456789012, 50000),
(6, 987654321, 50000),
(7, 123456788, 50000),
(8, 7777, -3277000),
(9, 6666, 50000),
(10, 66667, 50000),
(11, 666671, 50000);

-- --------------------------------------------------------

--
-- Table structure for table `item_tb`
--

DROP TABLE IF EXISTS `item_tb`;
CREATE TABLE IF NOT EXISTS `item_tb` (
  `item_id` int NOT NULL,
  `nama_item` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `harga` float DEFAULT NULL,
  `stock` int DEFAULT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `item_tb`
--

INSERT INTO `item_tb` (`item_id`, `nama_item`, `harga`, `stock`) VALUES
(1, 'Pulpen Gel Biru', 4000, 87),
(2, 'Buku Tulis A4 100 Lembar\r\n', 10000, 65),
(3, 'Penggaris Plastik 30cm', 10000, 50),
(4, 'Penghapus 10 CM', 3000, 17),
(5, 'Pensil 2B', 40000, 43),
(6, 'Rautan Pensil', 40000, 43),
(7, 'Tip Ex Cair', 10000, 75),
(8, 'Bolpoin Hitam', 6000, 73);

-- --------------------------------------------------------

--
-- Table structure for table `transaction_tb`
--

DROP TABLE IF EXISTS `transaction_tb`;
CREATE TABLE IF NOT EXISTS `transaction_tb` (
  `transaction_id` int NOT NULL,
  `date` date DEFAULT NULL,
  `nim` int DEFAULT NULL,
  `item_id` int DEFAULT NULL,
  `qty` int DEFAULT NULL,
  PRIMARY KEY (`transaction_id`),
  KEY `item_id` (`item_id`),
  KEY `nim` (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaction_tb`
--

INSERT INTO `transaction_tb` (`transaction_id`, `date`, `nim`, `item_id`, `qty`) VALUES
(1, '2023-05-01', 123456789, 1, 5),
(2, '2023-05-10', 210987654, 3, 2),
(3, '2023-05-15', 222101862, 2, 3),
(4, '2023-05-20', 222102303, 4, 10);

-- --------------------------------------------------------

--
-- Table structure for table `user_tb`
--

DROP TABLE IF EXISTS `user_tb`;
CREATE TABLE IF NOT EXISTS `user_tb` (
  `nim` int NOT NULL,
  `u_password` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_tb`
--

INSERT INTO `user_tb` (`nim`, `u_password`, `nama`) VALUES
(6666, '81dc9bdb52d04dc20036dbd8313ed055', 'Gery Yaa'),
(7777, '81dc9bdb52d04dc20036dbd8313ed055', 'Gery Test 2'),
(66667, '81dc9bdb52d04dc20036dbd8313ed055', 'Gery Yaa'),
(666671, '81dc9bdb52d04dc20036dbd8313ed055', 'Gery Yaa'),
(123456788, '81dc9bdb52d04dc20036dbd8313ed055', 'Gery'),
(123456789, 'User123', 'Steven Johan'),
(210987654, 'SuperUser', 'Susi Prasetyo'),
(222101862, 'Gery99', 'Gery Yulianto'),
(222102303, 'Brian24', 'Jonathan Febrian'),
(456789012, 'Password789', 'Owen Theodore'),
(987654321, 'Qwerty456', 'Andi Wijaya');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `calvin_pay`
--
ALTER TABLE `calvin_pay`
  ADD CONSTRAINT `calvin_pay_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `user_tb` (`nim`);

--
-- Constraints for table `transaction_tb`
--
ALTER TABLE `transaction_tb`
  ADD CONSTRAINT `transaction_tb_ibfk_2` FOREIGN KEY (`nim`) REFERENCES `user_tb` (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
