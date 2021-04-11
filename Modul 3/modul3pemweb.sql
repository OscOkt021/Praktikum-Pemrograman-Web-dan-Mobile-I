-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2021 at 07:14 AM
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
-- Database: `modul3pemweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `divisi`
--

CREATE TABLE `divisi` (
  `id_divisi` int(3) UNSIGNED ZEROFILL NOT NULL,
  `nama_divisi` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `divisi`
--

INSERT INTO `divisi` (`id_divisi`, `nama_divisi`) VALUES
(001, 'IT'),
(002, 'Public Relation'),
(003, 'Finance'),
(004, 'Business Strategy'),
(005, 'Product Development');

-- --------------------------------------------------------

--
-- Stand-in structure for view `info_karyawan`
-- (See below for the actual view)
--
CREATE TABLE `info_karyawan` (
`nama` varchar(50)
,`divisi` varchar(50)
);

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id_karyawan` int(3) UNSIGNED ZEROFILL NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `divisi` int(3) UNSIGNED ZEROFILL DEFAULT NULL,
  `Tgl_Lahir` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `nama`, `divisi`, `Tgl_Lahir`) VALUES
(001, 'Rick', 001, '1998-12-10'),
(002, 'Roll', 001, '1998-02-22'),
(003, 'Ricitas', 002, '1998-09-30'),
(004, 'Richman', 003, '1992-10-23'),
(005, 'Amin', 003, '1999-11-10'),
(006, 'Elon', 004, '1997-12-12'),
(007, 'Musk', 004, '1997-12-12'),
(008, 'Ricardo', 005, '1992-12-25'),
(009, 'Milos', 005, '1992-12-25'),
(010, 'Herp', 001, '2001-01-01'),
(018, 'Samir', 001, '1998-12-02'),
(019, 'Abdul', 004, '1987-07-14'),
(020, 'Sarukh', 004, '2002-12-11');

-- --------------------------------------------------------

--
-- Structure for view `info_karyawan`
--
DROP TABLE IF EXISTS `info_karyawan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `info_karyawan`  AS  (select `k`.`nama` AS `nama`,`d`.`nama_divisi` AS `divisi` from (`karyawan` `k` join `divisi` `d`) where `k`.`divisi` = `d`.`id_divisi`) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `divisi`
--
ALTER TABLE `divisi`
  ADD PRIMARY KEY (`id_divisi`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_karyawan`),
  ADD KEY `divisi` (`divisi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `divisi`
--
ALTER TABLE `divisi`
  MODIFY `id_divisi` int(3) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id_karyawan` int(3) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD CONSTRAINT `karyawan_ibfk_1` FOREIGN KEY (`divisi`) REFERENCES `divisi` (`id_divisi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
