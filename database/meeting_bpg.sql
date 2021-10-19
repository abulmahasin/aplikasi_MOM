-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2021 at 05:43 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `meeting_bpg`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_meeting`
--

CREATE TABLE `tb_meeting` (
  `id_meeting` int(11) NOT NULL,
  `tanggal_sistem` date NOT NULL DEFAULT current_timestamp(),
  `judul_meeting` varchar(200) NOT NULL,
  `tanggal` date NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_meeting`
--

INSERT INTO `tb_meeting` (`id_meeting`, `tanggal_sistem`, `judul_meeting`, `tanggal`, `isi`) VALUES
(56, '2021-09-23', 'Meeting dengan pak lurah', '2021-09-24', '<p>&nbsp;</p>\r\n\r\n<table align=\"center\" border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:500px\" summary=\"ytyty\">\r\n	<caption>&nbsp;</caption>\r\n	<tbody>\r\n		<tr>\r\n			<td>jbjkbkjbk</td>\r\n			<td>bjbkjbjkbjkbjkbjkbkb</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n'),
(57, '2021-09-23', 'RAPAT DENGAN PETINGGI NEGARA DAN JAJARANNYA MEMBAHAS KUACI', '2021-09-23', '<p>JAKARTA 17 AGUSTUS 1945 sevdsfvjhjhj</p>\r\n\r\n<p>PEMBUKAANdsdf gfghffvdfdsfvvf sdfgsdfg</p>\r\n\r\n<p>BAHWA SESUNGGUHNYA KEasdMERDEKAANsDcasda ITU HAK SEGALA BANGSA , DAN OLEH SEBAB ITYU MAKAASDFASDFdczxczxcvzxcvxcv</p>\r\n\r\n<p>&nbsp;HGJGJHGJHG kjjkbjkjbkdfvdfvdfv</p>\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_meeting`
--
ALTER TABLE `tb_meeting`
  ADD PRIMARY KEY (`id_meeting`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_meeting`
--
ALTER TABLE `tb_meeting`
  MODIFY `id_meeting` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
