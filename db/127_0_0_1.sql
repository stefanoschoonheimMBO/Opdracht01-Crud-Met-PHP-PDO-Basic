-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 24 nov 2022 om 16:21
-- Serverversie: 5.7.31
-- PHP-versie: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Php-pdo-crud-2209b`
--
CREATE DATABASE IF NOT EXISTS `Php-pdo-crud-2209b` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `Php-pdo-crud-2209b`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `Persoon`
--

DROP TABLE IF EXISTS `Persoon`;
CREATE TABLE IF NOT EXISTS `Persoon` (
  `Id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Voornaam` varchar(255) NOT NULL,
  `Tussenvoegsel` varchar(20) DEFAULT NULL,
  `Achternaam` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `Persoon`
--

INSERT INTO `Persoon` (`Id`, `Voornaam`, `Tussenvoegsel`, `Achternaam`) VALUES
(1, 'Arjan', 'de', 'Ruijter'),
(2, 'Pieter', NULL, 'Boomstra'),
(3, 'Harry', 'de', 'Boer'),
(4, 'Bert', 'van den', 'Akker'),
(5, 'Jason', '', 'Strikland'),
(13, 'Allard', '', 'Wijmenga'),
(14, 'Bert', 'van der ', 'Linden'),
(15, 'Bert', 'van der ', 'Linden'),
(16, 'q', 'q', 'q'),
(17, 'Arjan', 'de', 'Ruijter'),
(18, 'Test', 'ter', 'DeTest'),
(19, 'Barry', 'van', 'Deelen'),
(20, 'Gerrit', 'de', 'Boer'),
(21, 'Test', 'de', 'Tester123456');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
