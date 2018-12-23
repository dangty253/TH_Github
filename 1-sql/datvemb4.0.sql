-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 22, 2018 at 09:24 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datvemb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Ten` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `SoDienThoai` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `Password`, `Ten`, `SoDienThoai`, `Email`) VALUES
('admin', 'e10adc3949ba59abbe56e057f20f883e', 'Lâm', '0777974675', 'mhlam300597@gmail.com'),
('lam', 'e10adc3949ba59abbe56e057f20f883e', 'Tý', '0359720087', 'dangty253@gamil.com'),
('trang', 'e10adc3949ba59abbe56e057f20f883e', 'trang', '45531546', 'trang@gamil.com');

-- --------------------------------------------------------

--
-- Table structure for table `chuyenbay`
--

DROP TABLE IF EXISTS `chuyenbay`;
CREATE TABLE IF NOT EXISTS `chuyenbay` (
  `MaChuyenBay` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `GioKhoiHanh` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `GioHaCanh` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `MaTuyenBay` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `MaMayBay` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `NgayKhoiHanh` date NOT NULL,
  `ThoiGianBay` char(5) COLLATE utf8_unicode_ci NOT NULL DEFAULT '5',
  PRIMARY KEY (`MaChuyenBay`),
  KEY `MaMayBay` (`MaMayBay`),
  KEY `fk_ChuyenBay_TuyenBay_1` (`MaTuyenBay`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chuyenbay`
--

INSERT INTO `chuyenbay` (`MaChuyenBay`, `GioKhoiHanh`, `GioHaCanh`, `MaTuyenBay`, `MaMayBay`, `NgayKhoiHanh`, `ThoiGianBay`) VALUES
('CXRDAD1020181224', '10:00', '11:05', 'CXRDAD', 'JSTL01', '2018-12-24', '1h5m'),
('CXRDAD1020181225', '10:00', '11:05', 'CXRDAD', 'JSTL01', '2018-12-25', '1h5m'),
('CXRDAD1020181226', '10:00', '11:05', 'CXRDAD', 'JSTL01', '2018-12-26', '1h5m'),
('CXRDAD1920181224', '19:00', '20:05', 'CXRDAD', 'VNAL01', '2018-12-24', '1h5m'),
('CXRDAD1920181225', '19:00', '20:05', 'CXRDAD', 'VNAL01', '2018-12-25', '1h5m'),
('CXRDAD1920181226', '19:00', '20:05', 'CXRDAD', 'VNAL01', '2018-12-26', '1h5m'),
('CXRHAN0720181224', '07:00', '08:50', 'CXRHAN', 'JSTL01', '2018-12-24', '1h50m'),
('CXRHAN0720181225', '07:00', '08:50', 'CXRHAN', 'JSTL01', '2018-12-25', '1h50m'),
('CXRHAN0720181226', '07:00', '08:50', 'CXRHAN', 'JSTL01', '2018-12-26', '1h50m'),
('CXRHAN2220181224', '22:00', '23:50', 'CXRHAN', 'VNAL01', '2018-12-24', '1h50m'),
('CXRHAN2220181225', '22:00', '23:50', 'CXRHAN', 'VNAL01', '2018-12-25', '1h50m'),
('CXRHAN2220181226', '22:00', '23:50', 'CXRHAN', 'VNAL01', '2018-12-26', '1h50m'),
('CXRSGN1020181224', '10:00', '11:10', 'CXRSGN', 'JSTL01', '2018-12-24', '1h10m'),
('CXRSGN1020181225', '10:00', '11:10', 'CXRSGN', 'JSTL01', '2018-12-25', '1h10m'),
('CXRSGN1020181226', '10:00', '11:10', 'CXRSGN', 'JSTL01', '2018-12-26', '1h10m'),
('CXRSGN1920181224', '19:00', '20:10', 'CXRSGN', 'VNAL01', '2018-12-24', '1h10m'),
('CXRSGN1920181225', '19:00', '20:10', 'CXRSGN', 'VNAL01', '2018-12-25', '1h10m'),
('CXRSGN1920181226', '19:00', '20:10', 'CXRSGN', 'VNAL01', '2018-12-26', '1h10m'),
('DADCXR0720181224', '07:00', '08:05', 'DADCXR', 'JSTL01', '2018-12-24', '1h5m'),
('DADCXR0720181225', '07:00', '08:05', 'DADCXR', 'JSTL01', '2018-12-25', '1h5m'),
('DADCXR0720181226', '07:00', '08:05', 'DADCXR', 'JSTL01', '2018-12-26', '1h5m'),
('DADCXR2220181224', '22:00', '23:05', 'DADCXR', 'VNAL01', '2018-12-24', '1h5m'),
('DADCXR2220181225', '22:00', '23:05', 'DADCXR', 'VNAL01', '2018-12-25', '1h5m'),
('DADCXR2220181226', '22:00', '23:05', 'DADCXR', 'VNAL01', '2018-12-26', '1h5m'),
('DADHAN1020181224', '10:00', '11:20', 'DADHAN', 'JSTL01', '2018-12-24', '1h20m'),
('DADHAN1020181225', '10:00', '11:20', 'DADHAN', 'JSTL01', '2018-12-25', '1h20m'),
('DADHAN1020181226', '10:00', '11:20', 'DADHAN', 'JSTL01', '2018-12-26', '1h20m'),
('DADHAN1920181224', '19:00', '20:20', 'DADHAN', 'VNAL01', '2018-12-24', '1h20m'),
('DADHAN1920181225', '19:00', '20:20', 'DADHAN', 'VNAL01', '2018-12-25', '1h20m'),
('DADHAN1920181226', '19:00', '20:20', 'DADHAN', 'VNAL01', '2018-12-26', '1h20m'),
('DADSGN1020181224', '10:00', '11:20', 'DADSGN', 'JSTL01', '2018-12-24', '1h20m'),
('DADSGN1020181225', '10:00', '11:20', 'DADSGN', 'JSTL01', '2018-12-25', '1h20m'),
('DADSGN1020181226', '10:00', '11:20', 'DADSGN', 'JSTL01', '2018-12-26', '1h20m'),
('DADSGN1920181224', '19:00', '20:20', 'DADSGN', 'VNAL01', '2018-12-24', '1h20m'),
('DADSGN1920181225', '19:00', '20:20', 'DADSGN', 'VNAL01', '2018-12-25', '1h20m'),
('DADSGN1920181226', '19:00', '20:20', 'DADSGN', 'VNAL01', '2018-12-26', '1h20m'),
('DLAHAN1020181224', '10:00', '11:50', 'DLAHAN', 'JSTL01', '2018-12-24', '1h50m'),
('DLAHAN1020181225', '10:00', '11:50', 'DLAHAN', 'JSTL01', '2018-12-25', '1h50m'),
('DLAHAN1020181226', '10:00', '11:50', 'DLAHAN', 'JSTL01', '2018-12-26', '1h50m'),
('DLAHAN1920181224', '19:00', '20:50', 'DLAHAN', 'VNAL01', '2018-12-24', '1h50m'),
('DLAHAN1920181225', '19:00', '20:50', 'DLAHAN', 'VNAL01', '2018-12-25', '1h50m'),
('DLAHAN1920181226', '19:00', '20:50', 'DLAHAN', 'VNAL01', '2018-12-26', '1h50m'),
('DLASGN1020181224', '10:00', '10:55', 'DLASGN', 'JSTL01', '2018-12-24', '55m'),
('DLASGN1020181225', '10:00', '10:55', 'DLASGN', 'JSTL01', '2018-12-25', '55m'),
('DLASGN1020181226', '10:00', '10:55', 'DLASGN', 'JSTL01', '2018-12-26', '55m'),
('DLASGN1920181224', '19:00', '19:55', 'DLASGN', 'VNAL01', '2018-12-24', '55m'),
('DLASGN1920181225', '19:00', '19:55', 'DLASGN', 'VNAL01', '2018-12-25', '55m'),
('DLASGN1920181226', '19:00', '19:55', 'DLASGN', 'VNAL01', '2018-12-26', '55m'),
('HANCXR1020181224', '10:00', '11:50', 'HANCXR', 'JSTL01', '2018-12-24', '1h50m'),
('HANCXR1020181225', '10:00', '11:50', 'HANCXR', 'JSTL01', '2018-12-25', '1h50m'),
('HANCXR1020181226', '10:00', '11:50', 'HANCXR', 'JSTL01', '2018-12-26', '1h50m'),
('HANCXR1920181224', '19:00', '20:50', 'HANCXR', 'VNAL01', '2018-12-24', '1h50m'),
('HANCXR1920181225', '19:00', '20:50', 'HANCXR', 'VNAL01', '2018-12-25', '1h50m'),
('HANCXR1920181226', '19:00', '20:50', 'HANCXR', 'VNAL01', '2018-12-26', '1h50m'),
('HANDAD0720181224', '07:00', '08:20', 'HANDAD', 'JSTL01', '2018-12-24', '1h20m'),
('HANDAD0720181225', '07:00', '08:20', 'HANDAD', 'JSTL01', '2018-12-25', '1h20m'),
('HANDAD0720181226', '07:00', '08:20', 'HANDAD', 'JSTL01', '2018-12-26', '1h20m'),
('HANDAD2220181224', '22:00', '23:20', 'HANDAD', 'VNAL01', '2018-12-24', '1h20m'),
('HANDAD2220181225', '22:00', '23:20', 'HANDAD', 'VNAL01', '2018-12-25', '1h20m'),
('HANDAD2220181226', '22:00', '23:20', 'HANDAD', 'VNAL01', '2018-12-26', '1h20m'),
('HANDLA0720181224', '07:00', '08:50', 'HANDLA', 'JSTL01', '2018-12-24', '1h50m'),
('HANDLA0720181225', '07:00', '08:50', 'HANDLA', 'JSTL01', '2018-12-25', '1h50m'),
('HANDLA0720181226', '07:00', '08:50', 'HANDLA', 'JSTL01', '2018-12-26', '1h50m'),
('HANDLA2220181224', '22:00', '23:50', 'HANDLA', 'VNAL01', '2018-12-24', '1h50m'),
('HANDLA2220181225', '22:00', '23:50', 'HANDLA', 'VNAL01', '2018-12-25', '1h50m'),
('HANDLA2220181226', '22:00', '23:50', 'HANDLA', 'VNAL01', '2018-12-26', '1h50m'),
('HANPQC0720181224', '07:00', '09:05', 'HANPQC', 'JSTL01', '2018-12-24', '2h05m'),
('HANPQC0720181225', '07:00', '09:05', 'HANPQC', 'JSTL01', '2018-12-25', '2h05m'),
('HANPQC0720181226', '07:00', '09:05', 'HANPQC', 'JSTL01', '2018-12-26', '2h05m'),
('HANPQC2220181224', '22:00', '00:05', 'HANPQC', 'VNAL01', '2018-12-24', '2h05m'),
('HANPQC2220181225', '22:00', '00:05', 'HANPQC', 'VNAL01', '2018-12-25', '2h05m'),
('HANPQC2220181226', '22:00', '00:05', 'HANPQC', 'VNAL01', '2018-12-26', '2h05m'),
('HANSGN0720181224', '07:00', '09:10', 'HANSGN', 'JSTL01', '2018-12-24', '2h10m'),
('HANSGN0720181225', '07:00', '09:10', 'HANSGN', 'JSTL01', '2018-12-25', '2h10m'),
('HANSGN0720181226', '07:00', '09:10', 'HANSGN', 'JSTL01', '2018-12-26', '2h10m'),
('HANSGN2220181224', '22:00', '00:10', 'HANSGN', 'VNAL01', '2018-12-24', '2h10m'),
('HANSGN2220181225', '22:00', '00:10', 'HANSGN', 'VNAL01', '2018-12-25', '2h10m'),
('HANSGN2220181226', '22:00', '00:10', 'HANSGN', 'VNAL01', '2018-12-26', '2h10m'),
('PQCHAN1020181224', '10:00', '12:05', 'PQCHAN', 'JSTL01', '2018-12-24', '2h05m'),
('PQCHAN1020181225', '10:00', '12:05', 'PQCHAN', 'JSTL01', '2018-12-25', '2h05m'),
('PQCHAN1020181226', '10:00', '12:05', 'PQCHAN', 'JSTL01', '2018-12-26', '2h05m'),
('PQCHAN1920181224', '19:00', '21:05', 'PQCHAN', 'VNAL01', '2018-12-24', '2h05m'),
('PQCHAN1920181225', '19:00', '21:05', 'PQCHAN', 'VNAL01', '2018-12-25', '2h05m'),
('PQCHAN1920181226', '19:00', '21:05', 'PQCHAN', 'VNAL01', '2018-12-26', '2h05m'),
('PQCSGN1020181224', '10:00', '11:05', 'PQCSGN', 'JSTL01', '2018-12-24', '1h5m'),
('PQCSGN1020181225', '10:00', '11:05', 'PQCSGN', 'JSTL01', '2018-12-25', '1h5m'),
('PQCSGN1020181226', '10:00', '11:05', 'PQCSGN', 'JSTL01', '2018-12-26', '1h5m'),
('PQCSGN1920181224', '19:00', '20:05', 'PQCSGN', 'VNAL01', '2018-12-24', '1h5m'),
('PQCSGN1920181225', '19:00', '20:05', 'PQCSGN', 'VNAL01', '2018-12-25', '1h5m'),
('PQCSGN1920181226', '19:00', '20:05', 'PQCSGN', 'VNAL01', '2018-12-26', '1h5m'),
('SGNCXR0720181224', '07:00', '08:10', 'SGNCXR', 'JSTL01', '2018-12-24', '1h10m'),
('SGNCXR0720181225', '07:00', '08:10', 'SGNCXR', 'JSTL01', '2018-12-25', '1h10m'),
('SGNCXR0720181226', '07:00', '08:10', 'SGNCXR', 'JSTL01', '2018-12-26', '1h10m'),
('SGNCXR2220181224', '22:00', '23:10', 'SGNCXR', 'VNAL01', '2018-12-24', '1h10m'),
('SGNCXR2220181225', '22:00', '23:10', 'SGNCXR', 'VNAL01', '2018-12-25', '1h10m'),
('SGNCXR2220181226', '22:00', '23:10', 'SGNCXR', 'VNAL01', '2018-12-26', '1h10m'),
('SGNDAD0720181224', '07:00', '08:20', 'SGNDAD', 'JSTL01', '2018-12-24', '1h20m'),
('SGNDAD0720181225', '07:00', '08:20', 'SGNDAD', 'JSTL01', '2018-12-25', '1h20m'),
('SGNDAD0720181226', '07:00', '08:20', 'SGNDAD', 'JSTL01', '2018-12-26', '1h20m'),
('SGNDAD2220181224', '22:00', '23:20', 'SGNDAD', 'VNAL01', '2018-12-24', '1h20m'),
('SGNDAD2220181225', '22:00', '23:20', 'SGNDAD', 'VNAL01', '2018-12-25', '1h20m'),
('SGNDAD2220181226', '22:00', '23:20', 'SGNDAD', 'VNAL01', '2018-12-26', '1h20m'),
('SGNDLA0720181224', '07:00', '07:55', 'SGNDLA', 'JSTL01', '2018-12-24', '55m'),
('SGNDLA0720181225', '07:00', '07:55', 'SGNDLA', 'JSTL01', '2018-12-25', '55m'),
('SGNDLA0720181226', '07:00', '07:55', 'SGNDLA', 'JSTL01', '2018-12-26', '55m'),
('SGNDLA2220181224', '22:00', '22:55', 'SGNDLA', 'VNAL01', '2018-12-24', '55m'),
('SGNDLA2220181225', '22:00', '22:55', 'SGNDLA', 'VNAL01', '2018-12-25', '55m'),
('SGNDLA2220181226', '22:00', '22:55', 'SGNDLA', 'VNAL01', '2018-12-26', '55m'),
('SGNHAN1020181224', '10:00', '12:10', 'SGNHAN', 'JSTL01', '2018-12-24', '2h10m'),
('SGNHAN1020181225', '10:00', '12:10', 'SGNHAN', 'JSTL01', '2018-12-25', '2h10m'),
('SGNHAN1020181226', '10:00', '12:10', 'SGNHAN', 'JSTL01', '2018-12-26', '2h10m'),
('SGNHAN1920181224', '19:00', '21:10', 'SGNHAN', 'VNAL01', '2018-12-24', '2h10m'),
('SGNHAN1920181225', '19:00', '21:10', 'SGNHAN', 'VNAL01', '2018-12-25', '2h10m'),
('SGNHAN1920181226', '19:00', '21:10', 'SGNHAN', 'VNAL01', '2018-12-26', '2h10m'),
('SGNPQC0720181224', '07:00', '08:05', 'SGNPQC', 'JSTL01', '2018-12-24', '1h5m'),
('SGNPQC0720181225', '07:00', '08:05', 'SGNPQC', 'JSTL01', '2018-12-25', '1h5m'),
('SGNPQC0720181226', '07:00', '08:05', 'SGNPQC', 'JSTL01', '2018-12-26', '1h5m'),
('SGNPQC2220181224', '22:00', '23:05', 'SGNPQC', 'VNAL01', '2018-12-24', '1h5m'),
('SGNPQC2220181225', '22:00', '23:05', 'SGNPQC', 'VNAL01', '2018-12-25', '1h5m'),
('SGNPQC2220181226', '22:00', '23:05', 'SGNPQC', 'VNAL01', '2018-12-26', '1h5m');

-- --------------------------------------------------------

--
-- Table structure for table `ghe`
--

DROP TABLE IF EXISTS `ghe`;
CREATE TABLE IF NOT EXISTS `ghe` (
  `MaMayBay` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `MaHangGhe` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ViTri` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  KEY `fk_Ghe_MayBay_1` (`MaMayBay`),
  KEY `fk_Ghe_HangGhe_1` (`MaHangGhe`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ghe`
--

INSERT INTO `ghe` (`MaMayBay`, `MaHangGhe`, `ViTri`) VALUES
('VIJL01', 'Eco', '01A'),
('VIJL01', 'Eco', '01B'),
('VIJL01', 'Eco', '01C'),
('VIJL01', 'Eco', '01D'),
('VIJL01', 'Eco', '01E'),
('VIJL01', 'Eco', '01F'),
('VIJL01', 'Eco', '02D'),
('VIJL01', 'Eco', '02E'),
('VIJL01', 'Eco', '02F'),
('VIJL02', 'Eco', '01A'),
('VIJL02', 'Eco', '01B'),
('VIJL02', 'Eco', '01C'),
('VIJL02', 'Eco', '01D'),
('VIJL02', 'Eco', '01E'),
('VIJL02', 'Eco', '01F'),
('VIJL02', 'Eco', '02D'),
('VIJL02', 'Eco', '02E'),
('VIJL02', 'Eco', '02F'),
('VIJL03', 'Eco', '01A'),
('VIJL03', 'Eco', '01B'),
('VIJL03', 'Eco', '01C'),
('VIJL03', 'Eco', '01D'),
('VIJL03', 'Eco', '01E'),
('VIJL03', 'Eco', '01F'),
('VIJL03', 'Eco', '02D'),
('VIJL03', 'Eco', '02E'),
('VIJL03', 'Eco', '02F'),
('VIJL04', 'Eco', '01A'),
('VIJL04', 'Eco', '01B'),
('VIJL04', 'Eco', '01C'),
('VIJL04', 'Eco', '01D'),
('VIJL04', 'Eco', '01E'),
('VIJL04', 'Eco', '01F'),
('VIJL04', 'Eco', '02D'),
('VIJL04', 'Eco', '02E'),
('VIJL04', 'Eco', '02F'),
('VNAL01', 'Eco', '01A'),
('VNAL01', 'Eco', '01B'),
('VNAL01', 'Eco', '01C'),
('VNAL01', 'Eco', '01D'),
('VNAL01', 'Eco', '01E'),
('VNAL01', 'Eco', '01F'),
('VNAL01', 'Eco', '02D'),
('VNAL01', 'Eco', '02E'),
('VNAL01', 'Eco', '02F'),
('VNAL02', 'Eco', '01A'),
('VNAL02', 'Eco', '01B'),
('VNAL02', 'Eco', '01C'),
('VNAL02', 'Eco', '01D'),
('VNAL02', 'Eco', '01E'),
('VNAL02', 'Eco', '01F'),
('VNAL02', 'Eco', '02D'),
('VNAL02', 'Eco', '02E'),
('VNAL02', 'Eco', '02F'),
('VNAL03', 'Eco', '01A'),
('VNAL03', 'Eco', '01B'),
('VNAL03', 'Eco', '01C'),
('VNAL03', 'Eco', '01D'),
('VNAL03', 'Eco', '01E'),
('VNAL03', 'Eco', '01F'),
('VNAL03', 'Eco', '02D'),
('VNAL03', 'Eco', '02E'),
('VNAL03', 'Eco', '02F'),
('VNAL04', 'Eco', '01A'),
('VNAL04', 'Eco', '01B'),
('VNAL04', 'Eco', '01C'),
('VNAL04', 'Eco', '01D'),
('VNAL04', 'Eco', '01E'),
('VNAL04', 'Eco', '01F'),
('VNAL04', 'Eco', '02D'),
('VNAL04', 'Eco', '02E'),
('VNAL04', 'Eco', '02F'),
('VNAB01', 'Bus', '01A'),
('VNAB01', 'Bus', '01B'),
('VNAB01', 'Bus', '01C'),
('VNAB01', 'Bus', '01D'),
('VNAB01', 'Eco', '02A'),
('VNAB01', 'Eco', '02B'),
('VNAB01', 'Eco', '02C'),
('VNAB01', 'Eco', '02D'),
('VNAB01', 'Eco', '02E'),
('VNAB01', 'Eco', '02F'),
('VNAB02', 'Bus', '01A'),
('VNAB02', 'Bus', '01B'),
('VNAB02', 'Bus', '01C'),
('VNAB02', 'Bus', '01D'),
('VNAB02', 'Eco', '02A'),
('VNAB02', 'Eco', '02B'),
('VNAB02', 'Eco', '02C'),
('VNAB02', 'Eco', '02D'),
('VNAB02', 'Eco', '02E'),
('VNAB02', 'Eco', '02F');

-- --------------------------------------------------------

--
-- Table structure for table `giave`
--

DROP TABLE IF EXISTS `giave`;
CREATE TABLE IF NOT EXISTS `giave` (
  `MaChuyenBay` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `MaHangGhe` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `GiaVe` int(11) DEFAULT NULL,
  KEY `fk_GiaVe_HangGhe_1` (`MaHangGhe`),
  KEY `fk_GiaVe_ChuyenBay_1` (`MaChuyenBay`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `giave`
--

INSERT INTO `giave` (`MaChuyenBay`, `MaHangGhe`, `GiaVe`) VALUES
('DLASGN1020181224', 'Eco', 1556000),
('DLASGN1920181224', 'Eco', 1776000),
('SGNDLA0720181224', 'Eco', 1596000),
('SGNDLA2220181224', 'Eco', 1126000),
('DLAHAN1020181224', 'Eco', 1446000),
('DLAHAN1920181224', 'Eco', 1856000),
('HANDLA0720181224', 'Eco', 1956000),
('HANDLA2220181224', 'Eco', 1156000),
('HANCXR1020181224', 'Eco', 1776000),
('HANCXR1920181224', 'Eco', 1251000),
('CXRHAN0720181224', 'Eco', 1887000),
('CXRHAN2220181224', 'Eco', 1445000),
('PQCHAN1020181224', 'Eco', 1260000),
('PQCHAN1920181224', 'Eco', 1332000),
('HANPQC0720181224', 'Eco', 1150000),
('HANPQC2220181224', 'Eco', 1240000),
('DADHAN1020181224', 'Eco', 1778000),
('DADHAN1920181224', 'Eco', 1195000),
('HANDAD0720181224', 'Eco', 1995000),
('HANDAD2220181224', 'Eco', 1258000),
('SGNHAN1020181224', 'Eco', 1365000),
('SGNHAN1920181224', 'Eco', 1268000),
('HANSGN0720181224', 'Eco', 1125000),
('HANSGN2220181224', 'Eco', 1475000),
('DADSGN1020181224', 'Eco', 1778000),
('DADSGN1920181224', 'Eco', 1884000),
('SGNDAD0720181224', 'Eco', 1998000),
('SGNDAD2220181224', 'Eco', 1996000),
('CXRSGN1020181224', 'Eco', 1369000),
('CXRSGN1920181224', 'Eco', 1214000),
('SGNCXR0720181224', 'Eco', 1147000),
('SGNCXR2220181224', 'Eco', 1456000),
('PQCSGN1020181224', 'Eco', 1635000),
('PQCSGN1920181224', 'Eco', 1325000),
('SGNPQC0720181224', 'Eco', 1328000),
('SGNPQC2220181224', 'Eco', 1225000),
('CXRDAD1020181224', 'Eco', 1115000),
('CXRDAD1920181224', 'Eco', 1669000),
('DADCXR0720181224', 'Eco', 1587000),
('DADCXR2220181224', 'Eco', 1587000),
('DLASGN1020181225', 'Eco', 1458000),
('DLASGN1920181225', 'Eco', 1254000),
('SGNDLA0720181225', 'Eco', 1147000),
('SGNDLA2220181225', 'Eco', 1236000),
('DLAHAN1020181225', 'Eco', 1485000),
('DLAHAN1920181225', 'Eco', 1147000),
('HANDLA0720181225', 'Eco', 1269000),
('HANDLA2220181225', 'Eco', 1365000),
('HANCXR1020181225', 'Eco', 1458000),
('HANCXR1920181225', 'Eco', 1125000),
('CXRHAN0720181225', 'Eco', 1458000),
('CXRHAN2220181225', 'Eco', 1369000),
('PQCHAN1020181225', 'Eco', 1485000),
('PQCHAN1920181225', 'Eco', 1759000),
('HANPQC0720181225', 'Eco', 1447000),
('HANPQC2220181225', 'Eco', 1992000),
('DADHAN1020181225', 'Eco', 1259000),
('DADHAN1920181225', 'Eco', 1685000),
('HANDAD0720181225', 'Eco', 1258000),
('HANDAD2220181225', 'Eco', 1369000),
('SGNHAN1020181225', 'Eco', 1448000),
('SGNHAN1920181225', 'Eco', 1336000),
('HANSGN0720181225', 'Eco', 1129000),
('HANSGN2220181225', 'Eco', 1564000),
('DADSGN1020181225', 'Eco', 1558000),
('DADSGN1920181225', 'Eco', 1136000),
('SGNDAD0720181225', 'Eco', 1996000),
('SGNDAD2220181225', 'Eco', 1338000),
('CXRSGN1020181225', 'Eco', 1856000),
('CXRSGN1920181225', 'Eco', 1252000),
('SGNCXR0720181225', 'Eco', 1989000),
('SGNCXR2220181225', 'Eco', 1789000),
('PQCSGN1020181225', 'Eco', 1858000),
('PQCSGN1920181225', 'Eco', 1269000),
('SGNPQC0720181225', 'Eco', 1752000),
('SGNPQC2220181225', 'Eco', 1854000),
('CXRDAD1020181225', 'Eco', 1856000),
('CXRDAD1920181225', 'Eco', 1596000),
('DADCXR0720181225', 'Eco', 1589000),
('DADCXR2220181225', 'Eco', 1789000),
('DLASGN1020181226', 'Eco', 1852000),
('DLASGN1920181226', 'Eco', 1851000),
('SGNDLA0720181226', 'Eco', 1256000),
('SGNDLA2220181226', 'Eco', 1965000),
('DLAHAN1020181226', 'Eco', 1954000),
('DLAHAN1920181226', 'Eco', 1961000),
('HANDLA0720181226', 'Eco', 1589000),
('HANDLA2220181226', 'Eco', 1589000),
('HANCXR1020181226', 'Eco', 1885000),
('HANCXR1920181226', 'Eco', 1962000),
('CXRHAN0720181226', 'Eco', 1289000),
('CXRHAN2220181226', 'Eco', 1789000),
('PQCHAN1020181226', 'Eco', 1952000),
('PQCHAN1920181226', 'Eco', 1862000),
('HANPQC0720181226', 'Eco', 1842000),
('HANPQC2220181226', 'Eco', 1874000),
('DADHAN1020181226', 'Eco', 1515000),
('DADHAN1920181226', 'Eco', 1558000),
('HANDAD0720181226', 'Eco', 1962000),
('HANDAD2220181226', 'Eco', 1632000),
('SGNHAN1020181226', 'Eco', 1660000),
('SGNHAN1920181226', 'Eco', 1669000),
('HANSGN0720181226', 'Eco', 1997000),
('HANSGN2220181226', 'Eco', 1547000),
('DADSGN1020181226', 'Eco', 1555000),
('DADSGN1920181226', 'Eco', 1446000),
('SGNDAD0720181226', 'Eco', 1566000),
('SGNDAD2220181226', 'Eco', 1556000),
('CXRSGN1020181226', 'Eco', 1669000),
('CXRSGN1920181226', 'Eco', 1442000),
('SGNCXR0720181226', 'Eco', 1447000),
('SGNCXR2220181226', 'Eco', 1885000),
('PQCSGN1020181226', 'Eco', 1874000),
('PQCSGN1920181226', 'Eco', 1689000),
('SGNPQC0720181226', 'Eco', 1745000),
('SGNPQC2220181226', 'Eco', 1485000),
('CXRDAD1020181226', 'Eco', 1358000),
('CXRDAD1920181226', 'Eco', 1332000),
('DADCXR0720181226', 'Eco', 1396000),
('DADCXR2220181226', 'Eco', 1333000),
('DLASGN1020181224', 'Bus', 2556000),
('DLASGN1920181224', 'Bus', 2776000),
('SGNDLA0720181224', 'Bus', 2596000),
('SGNDLA2220181224', 'Bus', 2126000),
('DLAHAN1020181224', 'Bus', 2446000),
('DLAHAN1920181224', 'Bus', 2856000),
('HANDLA0720181224', 'Bus', 2956000),
('HANDLA2220181224', 'Bus', 2156000),
('HANCXR1020181224', 'Bus', 2776000),
('HANCXR1920181224', 'Bus', 2251000),
('CXRHAN0720181224', 'Bus', 2887000),
('CXRHAN2220181224', 'Bus', 2445000),
('PQCHAN1020181224', 'Bus', 2260000),
('PQCHAN1920181224', 'Bus', 2332000),
('HANPQC0720181224', 'Bus', 2150000),
('HANPQC2220181224', 'Bus', 2240000),
('DADHAN1020181224', 'Bus', 2778000),
('DADHAN1920181224', 'Bus', 2195000),
('HANDAD0720181224', 'Bus', 2995000),
('HANDAD2220181224', 'Bus', 2258000),
('SGNHAN1020181224', 'Bus', 2365000),
('SGNHAN1920181224', 'Bus', 2268000),
('HANSGN0720181224', 'Bus', 2125000),
('HANSGN2220181224', 'Bus', 2475000),
('DADSGN1020181224', 'Bus', 2778000),
('DADSGN1920181224', 'Bus', 2884000),
('SGNDAD0720181224', 'Bus', 2998000),
('SGNDAD2220181224', 'Bus', 2996000),
('CXRSGN1020181224', 'Bus', 2369000),
('CXRSGN1920181224', 'Bus', 2214000),
('SGNCXR0720181224', 'Bus', 2147000),
('SGNCXR2220181224', 'Bus', 2456000),
('PQCSGN1020181224', 'Bus', 2635000),
('PQCSGN1920181224', 'Bus', 2325000),
('SGNPQC0720181224', 'Bus', 2328000),
('SGNPQC2220181224', 'Bus', 2225000),
('CXRDAD1020181224', 'Bus', 2115000),
('CXRDAD1920181224', 'Bus', 2669000),
('DADCXR0720181224', 'Bus', 2587000),
('DADCXR2220181224', 'Bus', 2587000),
('DLASGN1020181225', 'Bus', 2458000),
('DLASGN1920181225', 'Bus', 2254000),
('SGNDLA0720181225', 'Bus', 2147000),
('SGNDLA2220181225', 'Bus', 2236000),
('DLAHAN1020181225', 'Bus', 2485000),
('DLAHAN1920181225', 'Bus', 2147000),
('HANDLA0720181225', 'Bus', 2269000),
('HANDLA2220181225', 'Bus', 2365000),
('HANCXR1020181225', 'Bus', 2458000),
('HANCXR1920181225', 'Bus', 2125000),
('CXRHAN0720181225', 'Bus', 2458000),
('CXRHAN2220181225', 'Bus', 2369000),
('PQCHAN1020181225', 'Bus', 2485000),
('PQCHAN1920181225', 'Bus', 2759000),
('HANPQC0720181225', 'Bus', 2447000),
('HANPQC2220181225', 'Bus', 2992000),
('DADHAN1020181225', 'Bus', 2259000),
('DADHAN1920181225', 'Bus', 2685000),
('HANDAD0720181225', 'Bus', 2258000),
('HANDAD2220181225', 'Bus', 2369000),
('SGNHAN1020181225', 'Bus', 2448000),
('SGNHAN1920181225', 'Bus', 2336000),
('HANSGN0720181225', 'Bus', 2129000),
('HANSGN2220181225', 'Bus', 2564000),
('DADSGN1020181225', 'Bus', 2558000),
('DADSGN1920181225', 'Bus', 2136000),
('SGNDAD0720181225', 'Bus', 2996000),
('SGNDAD2220181225', 'Bus', 2338000),
('CXRSGN1020181225', 'Bus', 2856000),
('CXRSGN1920181225', 'Bus', 2252000),
('SGNCXR0720181225', 'Bus', 2989000),
('SGNCXR2220181225', 'Bus', 2789000),
('PQCSGN1020181225', 'Bus', 2858000),
('PQCSGN1920181225', 'Bus', 2269000),
('SGNPQC0720181225', 'Bus', 2752000),
('SGNPQC2220181225', 'Bus', 2854000),
('CXRDAD1020181225', 'Bus', 2856000),
('CXRDAD1920181225', 'Bus', 2596000),
('DADCXR0720181225', 'Bus', 2589000),
('DADCXR2220181225', 'Bus', 2789000),
('DLASGN1020181226', 'Bus', 2852000),
('DLASGN1920181226', 'Bus', 2851000),
('SGNDLA0720181226', 'Bus', 2256000),
('SGNDLA2220181226', 'Bus', 2965000),
('DLAHAN1020181226', 'Bus', 2954000),
('DLAHAN1920181226', 'Bus', 2961000),
('HANDLA0720181226', 'Bus', 2589000),
('HANDLA2220181226', 'Bus', 2589000),
('HANCXR1020181226', 'Bus', 2885000),
('HANCXR1920181226', 'Bus', 2962000),
('CXRHAN0720181226', 'Bus', 2289000),
('CXRHAN2220181226', 'Bus', 2789000),
('PQCHAN1020181226', 'Bus', 2952000),
('PQCHAN1920181226', 'Bus', 2862000),
('HANPQC0720181226', 'Bus', 2842000),
('HANPQC2220181226', 'Bus', 2874000),
('DADHAN1020181226', 'Bus', 2515000),
('DADHAN1920181226', 'Bus', 2558000),
('HANDAD0720181226', 'Bus', 2962000),
('HANDAD2220181226', 'Bus', 2632000),
('SGNHAN1020181226', 'Bus', 2660000),
('SGNHAN1920181226', 'Bus', 2669000),
('HANSGN0720181226', 'Bus', 2997000),
('HANSGN2220181226', 'Bus', 2547000),
('DADSGN1020181226', 'Bus', 2555000),
('DADSGN1920181226', 'Bus', 2446000),
('SGNDAD0720181226', 'Bus', 2566000),
('SGNDAD2220181226', 'Bus', 2556000),
('CXRSGN1020181226', 'Bus', 2669000),
('CXRSGN1920181226', 'Bus', 2442000),
('SGNCXR0720181226', 'Bus', 2447000),
('SGNCXR2220181226', 'Bus', 2885000),
('PQCSGN1020181226', 'Bus', 2874000),
('PQCSGN1920181226', 'Bus', 2689000),
('SGNPQC0720181226', 'Bus', 2745000),
('SGNPQC2220181226', 'Bus', 2485000),
('CXRDAD1020181226', 'Bus', 2358000),
('CXRDAD1920181226', 'Bus', 2332000),
('DADCXR0720181226', 'Bus', 2396000),
('DADCXR2220181226', 'Bus', 2333000);

-- --------------------------------------------------------

--
-- Table structure for table `hangghe`
--

DROP TABLE IF EXISTS `hangghe`;
CREATE TABLE IF NOT EXISTS `hangghe` (
  `MaHangGhe` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `TenHangGhe` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`MaHangGhe`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hangghe`
--

INSERT INTO `hangghe` (`MaHangGhe`, `TenHangGhe`) VALUES
('Bus', 'business'),
('Eco', 'Economy'),
('Fcl', 'First class'),
('Pcl', 'Premium class');

-- --------------------------------------------------------

--
-- Table structure for table `hangmaybay`
--

DROP TABLE IF EXISTS `hangmaybay`;
CREATE TABLE IF NOT EXISTS `hangmaybay` (
  `MaHangMayBay` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `TenHangMayBay` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`MaHangMayBay`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hangmaybay`
--

INSERT INTO `hangmaybay` (`MaHangMayBay`, `TenHangMayBay`) VALUES
('JST', 'Jet Star'),
('VIJ', 'Vietjet'),
('VNA', 'Vietnam Airline');

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

DROP TABLE IF EXISTS `khachhang`;
CREATE TABLE IF NOT EXISTS `khachhang` (
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `HoTen` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DiaChi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `SoDienThoai` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`username`, `Password`, `HoTen`, `DiaChi`, `SoDienThoai`, `Email`) VALUES
('dangty', 'e10adc3949ba59abbe56e057f20f883e', 'Nguyễn Đăng Tý', 'Q4', '0359720087', 'DANGTY253@GMAIL.COM'),
('huynhlam', '4cafa8bcb4dafd5fdb1309005ba8cc45', 'Huỳnh Lâm', 'Q4', '45531546', 'LAM@GMAIL.COM'),
('trangpham', '4cafa8bcb4dafd5fdb1309005ba8cc45', 'PHẠM TRANG', 'q1', '45531546', 'TRANG@GAMIL.COM');

-- --------------------------------------------------------

--
-- Table structure for table `maybay`
--

DROP TABLE IF EXISTS `maybay`;
CREATE TABLE IF NOT EXISTS `maybay` (
  `MaMayBay` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `MaHangMayBay` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`MaMayBay`),
  KEY `fk_MayBay_HangMayBay_1` (`MaHangMayBay`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `maybay`
--

INSERT INTO `maybay` (`MaMayBay`, `MaHangMayBay`) VALUES
('JSTL01', 'JST'),
('JSTL02', 'JST'),
('JSTL03', 'JST'),
('JSTL04', 'JST'),
('VIJL01', 'VIJ'),
('VIJL02', 'VIJ'),
('VIJL03', 'VIJ'),
('VIJL04', 'VIJ'),
('VNAB01', 'VNA'),
('VNAB02', 'VNA'),
('VNAL01', 'VNA'),
('VNAL02', 'VNA'),
('VNAL03', 'VNA'),
('VNAL04', 'VNA');

-- --------------------------------------------------------

--
-- Table structure for table `phieudat`
--

DROP TABLE IF EXISTS `phieudat`;
CREATE TABLE IF NOT EXISTS `phieudat` (
  `MaPhieuDat` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TenKhachHang` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `NgayDat` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  `SoDienThoai` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `info` bit(1) NOT NULL,
  `ThanhTien` bigint(20) NOT NULL,
  PRIMARY KEY (`MaPhieuDat`),
  KEY `fk_PhieuDat_KhachHang_1` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `phieudat`
--

INSERT INTO `phieudat` (`MaPhieuDat`, `username`, `TenKhachHang`, `NgayDat`, `SoDienThoai`, `info`, `ThanhTien`) VALUES
('1544624754_sdgsd', NULL, 'srgsdg sdgsd', '2018-12-12 14:25:57', 'sdgsd', b'0', 2712000),
('1544847845_', NULL, ' ', '2018-12-15 04:24:09', '', b'0', 1156000),
('1544848261_35435sdgsd', NULL, 'Trịnh Trân', '2018-12-15 04:31:40', '35435sdgsd', b'0', 4823600),
('1544890073_sà', NULL, 'sà sà', '2018-12-15 16:09:00', 'sà', b'0', 1156000),
('1545513744_0359720087', NULL, 'Nguyễn Đăng Tý', '2018-12-22 21:22:52', '0359720087', b'0', 1887000);

-- --------------------------------------------------------

--
-- Table structure for table `sanbay`
--

DROP TABLE IF EXISTS `sanbay`;
CREATE TABLE IF NOT EXISTS `sanbay` (
  `MaSanBay` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `TenSanBay` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `TenTinhThanh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`MaSanBay`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sanbay`
--

INSERT INTO `sanbay` (`MaSanBay`, `TenSanBay`, `TenTinhThanh`) VALUES
('CXR', 'Cam Ranh', 'Nha Trang'),
('DAD', 'Đà Nẵng', 'Đà Nẵng'),
('DLA', 'Liên Khương', 'Đà Lạt'),
('HAN', 'Nội Bài', 'Hà Nội'),
('PQC', 'Phú Quốc', 'Phú Quốc'),
('sdg', 'sdg', 'dsg'),
('SGN', 'Tân Sơn Nhất', 'Hồ Chí Minh');

-- --------------------------------------------------------

--
-- Table structure for table `thanhtoan`
--

DROP TABLE IF EXISTS `thanhtoan`;
CREATE TABLE IF NOT EXISTS `thanhtoan` (
  `MaThanhToan` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ThoiGian` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  `HinhThuc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `MaPhieuDat` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`MaThanhToan`),
  KEY `fk_ThanhToan_PhieuDat_1` (`MaPhieuDat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tuyenbay`
--

DROP TABLE IF EXISTS `tuyenbay`;
CREATE TABLE IF NOT EXISTS `tuyenbay` (
  `MaTuyenBay` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `MaSanBayDi` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `MaSanBayDen` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`MaTuyenBay`),
  KEY `fk_TuyenBay_SanBay_1` (`MaSanBayDi`),
  KEY `fk_TuyenBay_SanBay_2` (`MaSanBayDen`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tuyenbay`
--

INSERT INTO `tuyenbay` (`MaTuyenBay`, `MaSanBayDi`, `MaSanBayDen`) VALUES
('CXRDAD', 'CXR', 'DAD'),
('CXRHAN', 'CXR', 'HAN'),
('CXRSGN', 'CXR', 'SGN'),
('DADCXR', 'DAD', 'CXR'),
('DADHAN', 'DAD', 'HAN'),
('DADSGN', 'DAD', 'SGN'),
('DLAHAN', 'DLA', 'HAN'),
('DLASGN', 'DLA', 'SGN'),
('HANCXR', 'HAN', 'CXR'),
('HANDAD', 'HAN', 'DAD'),
('HANDLA', 'HAN', 'DLA'),
('HANPQC', 'HAN', 'PQC'),
('HANSGN', 'HAN', 'SGN'),
('PQCHAN', 'PQC', 'HAN'),
('PQCSGN', 'PQC', 'SGN'),
('SGNCXR', 'SGN', 'CXR'),
('SGNDAD', 'SGN', 'DAD'),
('SGNDLA', 'SGN', 'DLA'),
('SGNHAN', 'SGN', 'HAN'),
('SGNPQC', 'SGN', 'PQC');

-- --------------------------------------------------------

--
-- Table structure for table `ve`
--

DROP TABLE IF EXISTS `ve`;
CREATE TABLE IF NOT EXISTS `ve` (
  `MaVe` bigint(20) NOT NULL AUTO_INCREMENT,
  `MaPhieuDat` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `MaChuyenBay` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `TenHanhKhach` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `NgaySinh` date NOT NULL,
  `DanhXung` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `LoaiVe` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`MaVe`),
  KEY `fk_Ve_ChuyenBay_1` (`MaChuyenBay`),
  KEY `fk_Ve_PhieuDat_1` (`MaPhieuDat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chuyenbay`
--
ALTER TABLE `chuyenbay`
  ADD CONSTRAINT `fk_ChuyenBay_MayBay` FOREIGN KEY (`MaMayBay`) REFERENCES `maybay` (`MaMayBay`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_ChuyenBay_TuyenBay_1` FOREIGN KEY (`MaTuyenBay`) REFERENCES `tuyenbay` (`MaTuyenBay`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ghe`
--
ALTER TABLE `ghe`
  ADD CONSTRAINT `fk_Ghe_HangGhe_1` FOREIGN KEY (`MaHangGhe`) REFERENCES `hangghe` (`MaHangGhe`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_Ghe_MayBay_1` FOREIGN KEY (`MaMayBay`) REFERENCES `maybay` (`MaMayBay`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `giave`
--
ALTER TABLE `giave`
  ADD CONSTRAINT `fk_GiaVe_ChuyenBay_1` FOREIGN KEY (`MaChuyenBay`) REFERENCES `chuyenbay` (`MaChuyenBay`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_GiaVe_HangGhe_1` FOREIGN KEY (`MaHangGhe`) REFERENCES `hangghe` (`MaHangGhe`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `maybay`
--
ALTER TABLE `maybay`
  ADD CONSTRAINT `fk_MayBay_HangMayBay_1` FOREIGN KEY (`MaHangMayBay`) REFERENCES `hangmaybay` (`MaHangMayBay`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `phieudat`
--
ALTER TABLE `phieudat`
  ADD CONSTRAINT `fk_PhieuDat_KhachHang_1` FOREIGN KEY (`username`) REFERENCES `khachhang` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `thanhtoan`
--
ALTER TABLE `thanhtoan`
  ADD CONSTRAINT `fk_ThanhToan_PhieuDat_1` FOREIGN KEY (`MaPhieuDat`) REFERENCES `phieudat` (`MaPhieuDat`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tuyenbay`
--
ALTER TABLE `tuyenbay`
  ADD CONSTRAINT `fk_TuyenBay_SanBay_1` FOREIGN KEY (`MaSanBayDi`) REFERENCES `sanbay` (`MaSanBay`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_TuyenBay_SanBay_2` FOREIGN KEY (`MaSanBayDen`) REFERENCES `sanbay` (`MaSanBay`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ve`
--
ALTER TABLE `ve`
  ADD CONSTRAINT `fk_Ve_ChuyenBay_1` FOREIGN KEY (`MaChuyenBay`) REFERENCES `chuyenbay` (`MaChuyenBay`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_Ve_PhieuDat_1` FOREIGN KEY (`MaPhieuDat`) REFERENCES `phieudat` (`MaPhieuDat`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
