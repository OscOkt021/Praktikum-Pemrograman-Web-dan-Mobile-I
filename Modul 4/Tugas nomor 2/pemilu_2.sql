-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2021 at 05:08 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pemilu_2`
--

-- --------------------------------------------------------

--
-- Table structure for table `suara`
--

CREATE TABLE `suara` (
  `id_suara` int(11) NOT NULL,
  `id_pemilih` int(11) NOT NULL,
  `pilihan` int(11) NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suara`
--

INSERT INTO `suara` (`id_suara`, `id_pemilih`, `pilihan`, `waktu`) VALUES
(8, 7, 0, '2021-04-24 20:06:16'),
(9, 1, 5, '2021-04-24 20:06:24'),
(10, 2, 2, '2021-04-24 20:06:34'),
(11, 3, 3, '2021-04-24 20:32:09'),
(12, 4, 2, '2021-04-24 20:55:56'),
(13, 5, 1, '2021-04-24 21:19:01'),
(14, 6, 5, '2021-04-24 21:23:39'),
(15, 8, 4, '2021-04-24 22:01:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `suara`
--
ALTER TABLE `suara`
  ADD PRIMARY KEY (`id_suara`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `suara`
--
ALTER TABLE `suara`
  MODIFY `id_suara` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
