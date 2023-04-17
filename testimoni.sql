-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2023 at 06:45 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testimoni`
--

-- --------------------------------------------------------

--
-- Table structure for table `oreo`
--

CREATE TABLE `oreo` (
  `id` int(11) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Tanggal` date DEFAULT NULL,
  `Rasa_id` int(11) DEFAULT NULL,
  `Kualitas` varchar(50) DEFAULT NULL,
  `Screenshot` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `oreo`
--

INSERT INTO `oreo` (`id`, `Nama`, `Tanggal`, `Rasa_id`, `Kualitas`, `Screenshot`) VALUES
(1, 'rais_soko', '2022-07-08', 2, NULL, 'rais.png'),
(2, 'wiwin_zuni', '2022-07-27', 1, 'ok', 'wiwin.png'),
(3, 'pietro_boselli', '2023-02-01', 2, NULL, 'pietro.png'),
(4, 'alfarezellkids', '2022-07-26', 1, 'bagus', 'alfa.png'),
(5, 'panorama27', '2022-08-08', 1, 'baik', 'pano.png');

-- --------------------------------------------------------

--
-- Table structure for table `rasa`
--

CREATE TABLE `rasa` (
  `id` int(11) NOT NULL,
  `Rasa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rasa`
--

INSERT INTO `rasa` (`id`, `Rasa`) VALUES
(1, 'Enak'),
(2, 'TIdak Enak'),
(3, 'Biasa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `oreo`
--
ALTER TABLE `oreo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Rasa_id` (`Rasa_id`);

--
-- Indexes for table `rasa`
--
ALTER TABLE `rasa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `oreo`
--
ALTER TABLE `oreo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `rasa`
--
ALTER TABLE `rasa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `oreo`
--
ALTER TABLE `oreo`
  ADD CONSTRAINT `oreo_ibfk_1` FOREIGN KEY (`Rasa_id`) REFERENCES `rasa` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
