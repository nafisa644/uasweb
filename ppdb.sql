-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2024 at 10:11 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `no` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jeniskelamin` enum('Laki-Laki','Perempuan','','') NOT NULL,
  `ttl` date NOT NULL,
  `jumblahsaudara` int(11) NOT NULL,
  `asalsekolah` text NOT NULL,
  `namaayah` varchar(100) NOT NULL,
  `namaibu` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `notelp` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`no`, `nama`, `jeniskelamin`, `ttl`, `jumblahsaudara`, `asalsekolah`, `namaayah`, `namaibu`, `alamat`, `notelp`) VALUES
(2, 'monyet', 'Laki-Laki', '2024-06-03', 8, 'sdn ', 'ahmad', 'nurul', 'bantur', 2147483647),
(3, 'sapi', 'Perempuan', '0000-00-00', 1, 'sdn 01', 'risky', 'amel', 'krs', 2147483647),
(4, 'Fatin', 'Laki-Laki', '0000-00-00', 6, 'sdn 01', 'risky', 'nurul', 'krs', 2147483647),
(5, 'Fatin', 'Laki-Laki', '0000-00-00', 6, 'sdn 01', 'risky', 'nurul', 'krs', 2147483647),
(7, 'kambing', 'Laki-Laki', '0000-00-00', 8, 'sdn 01', 'ahmad', 'kambing', 'krs', 2147483647),
(8, 'Fatin', 'Perempuan', '0000-00-00', 1, 'kandang', 'jerapa', 'nurul', 'hutan', 1234567890),
(10, 'kelinci', 'Perempuan', '0000-00-00', 6, 'kandang', 'jerapa', 'kambing', 'hutan', 2147483647),
(11, 'Mentok', 'Laki-Laki', '0000-00-00', 8, 'sdn ', 'risky', 'amel', 'bantur', 2147483647),
(17, 'nafis', 'Laki-Laki', '0000-00-00', 9, 'min 08', 'ahmad', 'kangguru', 'bantur', 2147483647),
(19, 'ular', 'Laki-Laki', '0000-00-00', 6, 'sdn5', 'sapi', 'kambing', 'bantur', 87654321),
(20, '', 'Laki-Laki', '0000-00-00', 0, '', '', '', '', 0),
(21, '', 'Laki-Laki', '0000-00-00', 0, '', '', '', '', 0),
(22, '', 'Laki-Laki', '0000-00-00', 0, '', '', '', '', 0),
(23, '', 'Laki-Laki', '0000-00-00', 0, '', '', '', '', 0),
(24, '', 'Laki-Laki', '0000-00-00', 0, '', '', '', '', 0),
(25, '', 'Laki-Laki', '0000-00-00', 0, '', '', '', '', 0),
(26, '', 'Laki-Laki', '0000-00-00', 0, '', '', '', '', 0),
(27, '', 'Laki-Laki', '0000-00-00', 0, '', '', '', '', 0),
(28, '', 'Laki-Laki', '0000-00-00', 0, '', '', '', '', 0),
(29, '', 'Laki-Laki', '0000-00-00', 0, '', '', '', '', 0),
(30, 'landak', 'Perempuan', '2024-06-18', 7, 'min 08', 'risky', 'amel', 'hutan', 654321),
(31, '', 'Laki-Laki', '0000-00-00', 0, '', '', '', '', 0),
(32, '', 'Laki-Laki', '0000-00-00', 0, '', '', '', '', 0),
(33, '', 'Laki-Laki', '0000-00-00', 0, '', '', '', '', 0),
(34, '', 'Laki-Laki', '0000-00-00', 0, '', '', '', '', 0),
(35, '', 'Laki-Laki', '0000-00-00', 0, '', '', '', '', 0),
(36, '', 'Laki-Laki', '0000-00-00', 0, '', '', '', '', 0),
(37, '', 'Laki-Laki', '0000-00-00', 0, '', '', '', '', 0),
(38, '', 'Laki-Laki', '0000-00-00', 0, '', '', '', '', 0),
(39, '', 'Laki-Laki', '0000-00-00', 0, '', '', '', '', 0),
(40, '', 'Laki-Laki', '0000-00-00', 0, '', '', '', '', 0),
(41, '', 'Laki-Laki', '0000-00-00', 0, '', '', '', '', 0),
(42, '', 'Laki-Laki', '0000-00-00', 0, '', '', '', '', 0),
(43, '', 'Laki-Laki', '0000-00-00', 0, '', '', '', '', 0),
(44, '', 'Laki-Laki', '0000-00-00', 0, '', '', '', '', 0),
(45, '', 'Laki-Laki', '0000-00-00', 0, '', '', '', '', 0),
(46, '', 'Laki-Laki', '0000-00-00', 0, '', '', '', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
