-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1
-- Timp de generare: iun. 21, 2021 la 02:13 PM
-- Versiune server: 10.4.19-MariaDB
-- Versiune PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Bază de date: `phpecomerce`
--

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `pdtnonperis`
--

CREATE TABLE `pdtnonperis` (
  `id` int(11) NOT NULL,
  `tipe` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `couleur` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idAuteur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `pdtperis`
--

CREATE TABLE `pdtperis` (
  `id` int(11) NOT NULL,
  `dateExpir` date NOT NULL,
  `poids` double NOT NULL,
  `parfum` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempConserv` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
