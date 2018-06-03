-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 23, 2018 at 03:28 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kpiddb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE IF NOT EXISTS `tb_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelanggaran`
--

CREATE TABLE IF NOT EXISTS `tb_pelanggaran` (
  `id_pelanggaran` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_pelanggaran` date NOT NULL,
  `jenis_pelanggaran` varchar(50) NOT NULL,
  `station_tv` varchar(100) DEFAULT NULL,
  `nama_acara` varchar(100) DEFAULT NULL,
  `station_tv1` varchar(100) DEFAULT NULL,
  `nama_iklan` varchar(100) DEFAULT NULL,
  `station_tv2` varchar(100) DEFAULT NULL,
  `pelanggaran` varchar(100) DEFAULT NULL,
  `nama_radio` varchar(100) DEFAULT NULL,
  `acara_radio` varchar(100) DEFAULT NULL,
  `uraian_pelanggaran` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_pelanggaran`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `tb_pelanggaran`
--

INSERT INTO `tb_pelanggaran` (`id_pelanggaran`, `tgl_pelanggaran`, `jenis_pelanggaran`, `station_tv`, `nama_acara`, `station_tv1`, `nama_iklan`, `station_tv2`, `pelanggaran`, `nama_radio`, `acara_radio`, `uraian_pelanggaran`) VALUES
(22, '2018-05-17', 'Iklan', '', '', 'RCTI', 'fdfdfdf', '', '', '', '', 'errer'),
(23, '2018-05-19', 'Acara', 'RCTI', 'jsdhskds1', '', '', '', '', '', '', 'hfhghghf'),
(24, '2018-05-18', 'Acara', 'RCTI', 'fffff', '', '', '', '', '', '', 'sfsfsfsfsfsf');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembinaan`
--

CREATE TABLE IF NOT EXISTS `tb_pembinaan` (
  `id_pembinaan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_program` varchar(50) DEFAULT NULL,
  `jenis_program` varchar(50) DEFAULT NULL,
  `pembinaan` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_pembinaan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tb_pembinaan`
--

INSERT INTO `tb_pembinaan` (`id_pembinaan`, `nama_program`, `jenis_program`, `pembinaan`) VALUES
(1, 'dsdsdsdsdsdsdsd', 'Iklan', 'sdsasdsadasd');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengaduan`
--

CREATE TABLE IF NOT EXISTS `tb_pengaduan` (
  `id_pengaduan` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_pengaduan` date DEFAULT NULL,
  `nama_program` varchar(50) DEFAULT NULL,
  `jenis_program` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_pengaduan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tb_pengaduan`
--

INSERT INTO `tb_pengaduan` (`id_pengaduan`, `tgl_pengaduan`, `nama_program`, `jenis_program`) VALUES
(1, '2018-05-18', 'dsdsddsds', 'Film');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tanggapan`
--

CREATE TABLE IF NOT EXISTS `tb_tanggapan` (
  `id_tanggapan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_program` varchar(50) DEFAULT NULL,
  `jenis_program` varchar(50) DEFAULT NULL,
  `isi` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_tanggapan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tb_tanggapan`
--

INSERT INTO `tb_tanggapan` (`id_tanggapan`, `nama_program`, `jenis_program`, `isi`) VALUES
(1, 'aaaad', 'Film', 'adsdsda');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
