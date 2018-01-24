-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 19 Oca 2018, 21:46:06
-- Sunucu sürümü: 5.7.19
-- PHP Sürümü: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `dak`
--
CREATE DATABASE IF NOT EXISTS `dak` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `dak`;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `esya`
--

DROP TABLE IF EXISTS `esya`;
CREATE TABLE IF NOT EXISTS `esya` (
  `esya_kodu` int(5) NOT NULL AUTO_INCREMENT,
  `esya_adi` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `konum` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adet` int(5) NOT NULL,
  `marka` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `durum` int(1) NOT NULL,
  PRIMARY KEY (`esya_kodu`)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uyeler`
--

DROP TABLE IF EXISTS `uyeler`;
CREATE TABLE IF NOT EXISTS `uyeler` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `kullanici` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sifre` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
