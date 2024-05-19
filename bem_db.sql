-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2024 at 09:44 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

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

CREATE TABLE `admin_tb` (
  `id_admin` int(11) NOT NULL,
  `a_password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_tb`
--

INSERT INTO `admin_tb` (`id_admin`, `a_password`) VALUES
(123456789, 'Qwerty123'),
(210987654, 'SuperSecure'),
(456789012, 'Admin1234'),
(987654321, 'Password123');

-- --------------------------------------------------------

--
-- Table structure for table `calvin_pay`
--

CREATE TABLE `calvin_pay` (
  `pay_id` int(11) NOT NULL,
  `nim` int(11) DEFAULT NULL,
  `balance` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `calvin_pay`
--

INSERT INTO `calvin_pay` (`pay_id`, `nim`, `balance`) VALUES
(1, 123456789, 50000),
(2, 210987654, 50000),
(3, 222101862, 50000),
(4, 222102303, 50000),
(5, 456789012, 50000),
(6, 987654321, 50000);

-- --------------------------------------------------------

--
-- Table structure for table `item_tb`
--

CREATE TABLE `item_tb` (
  `item_id` int(11) NOT NULL,
  `nama_item` varchar(255) DEFAULT NULL,
  `harga` float DEFAULT NULL,
  `stock` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `item_tb`
--

INSERT INTO `item_tb` (`item_id`, `nama_item`, `harga`, `stock`) VALUES
(1, 'Pulpen Gel Hitam', 5000, 100),
(2, 'Buku Tulis A4 100 Lembar', 10000, 75),
(3, 'Penggaris Plastik 30cm', 10000, 50),
(4, 'Pensil 2B', 3000, 200);

-- --------------------------------------------------------

--
-- Table structure for table `transaction_tb`
--

CREATE TABLE `transaction_tb` (
  `transaction_id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `nim` int(11) DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL
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

CREATE TABLE `user_tb` (
  `nim` int(11) NOT NULL,
  `u_password` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_tb`
--

INSERT INTO `user_tb` (`nim`, `u_password`, `nama`) VALUES
(123456789, 'User123', 'Steven Johan'),
(210987654, 'SuperUser', 'Susi Prasetyo'),
(222101862, 'Gery99', 'Gery Yulianto'),
(222102303, 'Brian24', 'Jonathan Febrian'),
(456789012, 'Password789', 'Owen Theodore'),
(987654321, 'Qwerty456', 'Andi Wijaya');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_tb`
--
ALTER TABLE `admin_tb`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `calvin_pay`
--
ALTER TABLE `calvin_pay`
  ADD PRIMARY KEY (`pay_id`),
  ADD KEY `nim` (`nim`);

--
-- Indexes for table `item_tb`
--
ALTER TABLE `item_tb`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `transaction_tb`
--
ALTER TABLE `transaction_tb`
  ADD PRIMARY KEY (`transaction_id`),
  ADD KEY `item_id` (`item_id`),
  ADD KEY `nim` (`nim`);

--
-- Indexes for table `user_tb`
--
ALTER TABLE `user_tb`
  ADD PRIMARY KEY (`nim`);

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
  ADD CONSTRAINT `transaction_tb_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `item_tb` (`item_id`),
  ADD CONSTRAINT `transaction_tb_ibfk_2` FOREIGN KEY (`nim`) REFERENCES `user_tb` (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
