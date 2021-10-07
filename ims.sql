-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2021 at 05:29 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ims`
--

-- --------------------------------------------------------

--
-- Table structure for table `genpurpose`
--

CREATE TABLE `genpurpose` (
  `db_id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `price` int(6) NOT NULL,
  `brand` varchar(32) NOT NULL,
  `name` varchar(32) NOT NULL,
  `licenseduration` int(3) NOT NULL,
  `licensenum` varchar(32) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` enum('A','N/A') NOT NULL DEFAULT 'A',
  `userholding` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `genpurpose`
--

INSERT INTO `genpurpose` (`db_id`, `username`, `price`, `brand`, `name`, `licenseduration`, `licensenum`, `timestamp`, `status`, `userholding`) VALUES
(1, 'admin', 21384, 'Adobe', 'Adobe CC', 1, 'XXXX-XXXX-XXXX-XXXX', '2019-08-23 08:50:29', 'A', ''),
(2, 'admin', 21384, 'Adobe', 'Adobe CC', 1, 'XXXX-XXXX-XXXX-XXXX', '2019-08-23 08:50:29', 'A', ''),
(3, 'admin', 18438, 'Microsoft', 'Office 365', 2, 'XXXX-XXXX-XXXX-XXXX', '2019-08-23 08:54:56', 'A', ''),
(4, 'admin', 18438, 'Microsoft', 'Office 365', 2, 'XXXX-XXXX-XXXX-XXXX', '2019-08-23 08:54:56', 'A', ''),
(5, 'admin', 18438, 'Microsoft', 'Office 365', 2, 'XXXX-XXXX-XXXX-XXXX', '2019-08-23 08:54:56', 'A', ''),
(6, 'admin', 18438, 'Microsoft', 'Office 365', 2, 'XXXX-XXXX-XXXX-XXXX', '2019-08-23 08:54:56', 'A', '');

-- --------------------------------------------------------

--
-- Table structure for table `laptop`
--

CREATE TABLE `laptop` (
  `db_id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `price` int(6) NOT NULL,
  `warranty` int(2) NOT NULL,
  `brand` varchar(16) NOT NULL,
  `name` varchar(16) NOT NULL,
  `screensize` text NOT NULL,
  `screenres` text NOT NULL,
  `model` varchar(64) NOT NULL,
  `serialnum` text NOT NULL,
  `cpu_make` varchar(8) NOT NULL,
  `cpu_model` text NOT NULL,
  `gpu_make` varchar(8) NOT NULL,
  `gpu_model` text NOT NULL,
  `storage_type` varchar(3) NOT NULL,
  `storage_cap` varchar(8) NOT NULL,
  `ram_size` varchar(8) NOT NULL,
  `ram_speed` varchar(12) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` enum('A','N/A') NOT NULL DEFAULT 'A',
  `userholding` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laptop`
--

INSERT INTO `laptop` (`db_id`, `username`, `price`, `warranty`, `brand`, `name`, `screensize`, `screenres`, `model`, `serialnum`, `cpu_make`, `cpu_model`, `gpu_make`, `gpu_model`, `storage_type`, `storage_cap`, `ram_size`, `ram_speed`, `timestamp`, `status`, `userholding`) VALUES
(1, 'user2', 54890, 2, 'Asus', 'Asus ROG', '15.6', '1920 x 1080', 'Zephyrus S GX502GV-AZ035T (Black)', 'XXXX-XXXX-XXXX-XXXX', 'Intel', 'i7-9750H', 'Nvidia', 'GeForce RTX 2060', 'SSD', '512GB', '16GB', 'DDR4 2400MHz', '2019-08-21 09:26:07', 'A', ''),
(2, 'user2', 54990, 3, 'Acer', 'Predator Helios', '15.6', '1920 x 1080', '300-PH315-52-77YG (Black)', 'XXXX-XXXX-XXXX-XXXX', 'Intel', 'i7-9750H', 'Nvidia', 'GeForce RTX 2060', 'SSD', '1TB', '16GB', 'DDR4 2666MHz', '2019-08-21 09:28:19', 'A', ''),
(3, 'user2', 54990, 3, 'Acer', 'Predator Helios', '15.6', '1920 x 1080', '300-PH315-52-77YG (Black)', 'XXXX-XXXX-XXXX-XXXX', 'Intel', 'i7-9750H', 'Nvidia', 'GeForce RTX 2060', 'SSD', '1TB', '16GB', 'DDR4 2666MHz', '2019-08-21 09:28:19', 'A', ''),
(4, 'user2', 52900, 2, 'MSI', 'MSI P65 Creator', '15.6', '1920 x 1080', '9SD-858TH (White)', 'XXXX-XXXX-XXXX-XXXX', 'Intel', 'i7-9750H', 'Nvidia', 'GeForce GTX 1660 Ti Max-Q', 'SSD', '512GB', '16GB', 'DDR4 2666MHz', '2019-08-21 09:37:22', 'A', ''),
(5, 'user2', 37900, 2, 'Dell', 'DELL G3', '15.6', '1920 x 1080', '15 3590-W56605506THW10 (Black)', 'XXXX-XXXX-XXXX-XXXX', 'Intel', 'i7-9750H', 'Nvidia', 'GeForce GTX 1660 Ti Max-Q', 'SSD', '512GB', '8GB', 'DDR4 2400MHz', '2019-08-21 09:39:40', 'A', ''),
(6, 'user2', 118900, 0, 'Microsoft', 'Surface Book 2', '15.6', '3240 x 2160', '15-i7 16GB 1TB (White)', 'XXXX-XXXX-XXXX-XXXX', 'Intel', 'i7-8650U', 'Nvidia', 'GeForce GTX 1060', 'SSD', '1TB', '16GB', 'DDR3 1866MHz', '2019-08-21 09:42:45', 'A', ''),
(7, 'user2', 77990, 3, 'Acer', 'Predator Helios', '17.3', '1920 x 1080', 'Helios 500 PH517-51-R41A (Black)', 'XXXX-XXXX-XXXX-XXXX', 'AMD', 'Ryzen 7 2700', 'AMD', 'Radeon RX Vega 56', 'SSD', '512GB', '16GB', 'DDR4 2666MHz', '2019-08-21 09:45:45', 'A', ''),
(8, 'user2', 46990, 3, 'Lenovo', 'Lenovo Legion', '15.6', '1920 x 1080', 'Y7000-81NS001ETA (Black)', 'XXXX-XXXX-XXXX-XXXX', 'Intel', 'i7-9750H', 'Nvidia', 'GeForce RTX 2060', 'SSD', '512GB', '16GB', 'DDR4 2666MHz', '2019-08-21 09:50:35', 'A', ''),
(9, 'user2', 64900, 2, 'MSI', 'MSI GS65 Stealth', '15.6', '1920 x 1080', '9SE-498TH (Black)', 'XXXX-XXXX-XXXX-XXXX', 'Intel', 'i7-9750H', 'Nvidia', 'GeForce RTX 2060', 'SSD', '1TB', '16GB', 'DDR4 2400MHz', '2019-08-21 09:55:35', 'A', ''),
(10, 'user2', 34900, 2, 'MSI', 'MSI GF63 Thin', '15.6', '1920 x 1080', '9SC-296TH (Black)', 'XXXX-XXXX-XXXX-XXXX', 'Intel', 'i7-9750H', 'Nvidia', 'GeForce GTX 1650 Max-Q', 'SSD', '512GB', '8GB', 'DDR4 2666MHz', '2019-08-21 09:56:56', 'A', ''),
(11, 'user2', 45900, 2, 'HP', 'HP ENVY', '13.3', '1920 x 1080', '13-ah1024TX (Silver)', 'XXXX-XXXX-XXXX-XXXX', 'Intel', 'i7-8565U', 'Nvidia', 'GeForce MX150', 'SSD', '512GB', '16GB', 'DDR4 2133MHz', '2019-08-21 10:01:44', 'A', ''),
(12, 'pound1', 54890, 2, 'Asus', 'Asus ROG', '15.6', '1920 x 1080', 'Zephyrus S GX502GV-AZ035T (Black)', '123456789', 'Intel', 'i7-9750H', 'Nvidia', 'GeForce RTX 2060', 'SSD', '512GB', '16GB', 'DDR4 2400MHz', '2020-04-26 12:27:50', 'A', ''),
(13, 'pound1', 54890, 2, 'Asus', 'Asus ROG', '15.6', '1920 x 1080', 'Zephyrus S GX502GV-AZ035T (Black)', '123456789', 'Intel', 'i7-9750H', 'Nvidia', 'GeForce RTX 2060', 'SSD', '512GB', '16GB', 'DDR4 2400MHz', '2020-04-26 12:27:50', 'A', ''),
(14, 'pound1', 54890, 2, 'Asus', 'Asus ROG', '15.6', '1920 x 1080', 'Zephyrus S GX502GV-AZ035T (Black)', '123456789', 'Intel', 'i7-9750H', 'Nvidia', 'GeForce RTX 2060', 'SSD', '512GB', '16GB', 'DDR4 2400MHz', '2020-04-26 12:27:50', 'A', ''),
(15, 'pound1', 54890, 2, 'Asus', 'Asus ROG', '15.6', '1920 x 1080', 'Zephyrus S GX502GV-AZ035T (Black)', '123456789', 'Intel', 'i7-9750H', 'Nvidia', 'GeForce RTX 2060', 'SSD', '512GB', '16GB', 'DDR4 2400MHz', '2020-04-26 12:27:50', 'A', ''),
(16, 'pound1', 54890, 2, 'Asus', 'Asus ROG', '15.6', '1920 x 1080', 'Zephyrus S GX502GV-AZ035T (Black)', '123456789', 'Intel', 'i7-9750H', 'Nvidia', 'GeForce RTX 2060', 'SSD', '512GB', '16GB', 'DDR4 2400MHz', '2020-04-26 12:27:50', 'A', '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `status` enum('1','10','100') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `email`, `status`) VALUES
(8, 'admin', '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5', 'username@email.com', '100');

-- --------------------------------------------------------

--
-- Table structure for table `mischard`
--

CREATE TABLE `mischard` (
  `db_id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `price` int(6) NOT NULL,
  `warranty` int(2) NOT NULL,
  `brand` varchar(16) NOT NULL,
  `name` varchar(16) NOT NULL,
  `misctype` varchar(16) NOT NULL,
  `model` varchar(64) NOT NULL,
  `serialnum` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` enum('A','N/A') NOT NULL DEFAULT 'A',
  `userholding` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `miscsoft`
--

CREATE TABLE `miscsoft` (
  `db_id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `price` float NOT NULL,
  `brand` varchar(64) NOT NULL,
  `name` varchar(64) NOT NULL,
  `licenseduration` decimal(3,1) NOT NULL,
  `licensenum` varchar(64) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` set('A','N/A') NOT NULL DEFAULT 'A',
  `userholding` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `miscsoft`
--

INSERT INTO `miscsoft` (`db_id`, `username`, `price`, `brand`, `name`, `licenseduration`, `licensenum`, `timestamp`, `status`, `userholding`) VALUES
(1, 'admin', 1935, 'RARlab', 'WinRAR', '1.0', 'XXXX-XXXX-XXXX-XXXX', '2019-08-23 08:52:52', 'A', ''),
(2, 'admin', 1935, 'RARlab', 'WinRAR', '1.0', 'XXXX-XXXX-XXXX-XXXX', '2019-08-23 08:52:52', 'A', ''),
(3, 'admin', 1935, 'RARlab', 'WinRAR', '1.0', 'XXXX-XXXX-XXXX-XXXX', '2019-08-23 08:52:52', 'A', '');

-- --------------------------------------------------------

--
-- Table structure for table `opersystem`
--

CREATE TABLE `opersystem` (
  `db_id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `price` int(6) NOT NULL,
  `brand` varchar(32) NOT NULL,
  `name` varchar(32) NOT NULL,
  `licenseduration` int(3) NOT NULL,
  `licensenum` varchar(32) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` enum('A','N/A') NOT NULL DEFAULT 'A',
  `userholding` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `opersystem`
--

INSERT INTO `opersystem` (`db_id`, `username`, `price`, `brand`, `name`, `licenseduration`, `licensenum`, `timestamp`, `status`, `userholding`) VALUES
(1, 'admin', 28486, 'Microsoft', 'Windows 10 Pro', 2, 'XXXX-XXXX-XXXX-XXXX', '2019-08-23 08:47:30', 'A', ''),
(2, 'admin', 28486, 'Microsoft', 'Windows 10 Pro', 2, 'XXXX-XXXX-XXXX-XXXX', '2019-08-23 08:47:30', 'A', ''),
(3, 'admin', 28486, 'Microsoft', 'Windows 10 Pro', 2, 'XXXX-XXXX-XXXX-XXXX', '2019-08-23 08:47:30', 'A', ''),
(4, 'admin', 28486, 'Microsoft', 'Windows 10 Pro', 2, 'XXXX-XXXX-XXXX-XXXX', '2019-08-23 08:48:39', 'A', ''),
(5, 'admin', 28486, 'Microsoft', 'Windows 10 Pro', 2, 'XXXX-XXXX-XXXX-XXXX', '2019-08-23 08:48:39', 'A', ''),
(6, 'admin', 28486, 'Microsoft', 'Windows 10 Pro', 2, 'XXXX-XXXX-XXXX-XXXX', '2019-08-23 08:48:39', 'A', ''),
(7, 'admin', 614, 'Apple', 'Mac OS X 10.6', 0, 'XXXX-XXXX-XXXX-XXXX', '2019-08-23 08:56:28', 'A', ''),
(8, 'admin', 614, 'Apple', 'Mac OS X 10.6', 0, 'XXXX-XXXX-XXXX-XXXX', '2019-08-23 08:56:28', 'A', '');

-- --------------------------------------------------------

--
-- Table structure for table `pc`
--

CREATE TABLE `pc` (
  `db_id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `price` int(6) NOT NULL,
  `warranty` int(2) NOT NULL,
  `brand` varchar(16) NOT NULL,
  `name` varchar(16) NOT NULL,
  `model` varchar(64) NOT NULL,
  `serialnum` text NOT NULL,
  `cpu_make` varchar(8) NOT NULL,
  `cpu_model` text NOT NULL,
  `gpu_make` varchar(8) NOT NULL,
  `gpu_model` text NOT NULL,
  `storage_type` varchar(16) NOT NULL,
  `storage_cap` varchar(18) NOT NULL,
  `ram_size` varchar(8) NOT NULL,
  `ram_speed` varchar(12) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` enum('A','N/A') NOT NULL DEFAULT 'A',
  `userholding` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pc`
--

INSERT INTO `pc` (`db_id`, `username`, `price`, `warranty`, `brand`, `name`, `model`, `serialnum`, `cpu_make`, `cpu_model`, `gpu_make`, `gpu_model`, `storage_type`, `storage_cap`, `ram_size`, `ram_speed`, `timestamp`, `status`, `userholding`) VALUES
(1, 'user2', 33868, 3, 'sdfghj', 'INTEL NUC 8', 'ENTHUSIAST MINI PC- NUC8I7BEKQA (Black)', 'XXXX-XXXX-XXXX-XXXX', 'Intel', 'Soldered-down BGA', 'Intel', 'Integrated Graphics', '1(SSD) 2(HDD)', '1(512GB) 2(0GB)', '16GB', 'DDR4 2400MHz', '2019-08-21 09:35:19', 'A', ''),
(2, 'user2', 70779, 2, 'Asus', 'ROG Strix GL10', 'GL12CX-DS771 (Black)', 'XXXX-XXXX-XXXX-XXXX', 'Intel', 'i7-9700k', 'Nvidia', 'GeForce RTX 2070', '1(HDD) 2(SSD)', '1(1TB) 2(512GB)', '16GB', 'DDR4 2666MHz', '2019-08-21 10:10:06', 'A', ''),
(3, 'user2', 109463, 2, 'ORIGIN', 'ORIGIN GENESIS', 'ORIGIN GENESIS CUSTOM (Green)', 'XXXX-XXXX-XXXX-XXXX', 'AMD', 'Ryzen 9 3900X', 'AMD', 'RX 5700 XT', '1(SSD) 2(SSD)', '1(250GB) 2(2TB)', '16GB', 'DDR4 3000MHz', '2019-08-21 10:24:37', 'A', ''),
(4, 'user2', 79990, 3, 'MSI', 'MSI Trident X', 'Plus-9SD-071TH/i7-9700K/RTX 2070 (Black)', 'XXXX-XXXX-XXXX-XXXX', 'Intel', 'i7-9700K', 'Nvidia', 'Geforce RTX 2070', '1(HDD) 2(SSD)', '1(1TB) 2(256GB)', '16GB', 'DDR4 3000MHz', '2019-08-21 10:33:03', 'A', '');

-- --------------------------------------------------------

--
-- Table structure for table `utility`
--

CREATE TABLE `utility` (
  `db_id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `price` int(6) NOT NULL,
  `brand` varchar(32) NOT NULL,
  `name` varchar(32) NOT NULL,
  `licenseduration` int(3) NOT NULL,
  `licensenum` varchar(32) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` enum('A','N/A') NOT NULL DEFAULT 'A',
  `userholding` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `genpurpose`
--
ALTER TABLE `genpurpose`
  ADD PRIMARY KEY (`db_id`);

--
-- Indexes for table `laptop`
--
ALTER TABLE `laptop`
  ADD PRIMARY KEY (`db_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `mischard`
--
ALTER TABLE `mischard`
  ADD PRIMARY KEY (`db_id`);

--
-- Indexes for table `miscsoft`
--
ALTER TABLE `miscsoft`
  ADD PRIMARY KEY (`db_id`);

--
-- Indexes for table `opersystem`
--
ALTER TABLE `opersystem`
  ADD PRIMARY KEY (`db_id`);

--
-- Indexes for table `pc`
--
ALTER TABLE `pc`
  ADD PRIMARY KEY (`db_id`);

--
-- Indexes for table `utility`
--
ALTER TABLE `utility`
  ADD PRIMARY KEY (`db_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `genpurpose`
--
ALTER TABLE `genpurpose`
  MODIFY `db_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `laptop`
--
ALTER TABLE `laptop`
  MODIFY `db_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `mischard`
--
ALTER TABLE `mischard`
  MODIFY `db_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `miscsoft`
--
ALTER TABLE `miscsoft`
  MODIFY `db_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `opersystem`
--
ALTER TABLE `opersystem`
  MODIFY `db_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pc`
--
ALTER TABLE `pc`
  MODIFY `db_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `utility`
--
ALTER TABLE `utility`
  MODIFY `db_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
