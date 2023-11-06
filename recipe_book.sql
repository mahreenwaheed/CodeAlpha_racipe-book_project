-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2023 at 03:40 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `recipe book`
--

-- --------------------------------------------------------

--
-- Table structure for table `addrecipe`
--

CREATE TABLE `addrecipe` (
  `id` int(255) NOT NULL,
  `name` varchar(300) NOT NULL,
  `ingredient` varchar(300) NOT NULL,
  `method` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addrecipe`
--

INSERT INTO `addrecipe` (`id`, `name`, `ingredient`, `method`) VALUES
(1, 'rice', 'onion,tomato', '	\r\nRinse the rice.\r\nUse the right ratio of water.'),
(2, 'chicken', 'onion,tomato,potato,chicken', 'Stir-frying. If you would like to stir-fry chicken, breasts or thigh fillets are the most ideal cuts to use. ...\r\nPan-frying. To pan-fry chicken, the ideal cuts for this are chicken breast, tenderloins or chicken thigh fillets. ...\r\nGrilling/BBQ. ...\r\nBaking/roasting.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addrecipe`
--
ALTER TABLE `addrecipe`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
