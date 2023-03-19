-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1:4401
-- Timp de generare: mart. 15, 2023 la 10:37 AM
-- Versiune server: 10.4.27-MariaDB
-- Versiune PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Bază de date: `pretestare`
--

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `articole`
--

CREATE TABLE `articole` (
  `id` int(11) NOT NULL,
  `titlu` varchar(100) NOT NULL,
  `descriere` varchar(300) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Eliminarea datelor din tabel `articole`
--

INSERT INTO `articole` (`id`, `titlu`, `descriere`, `image`) VALUES
(1, 'Dezvoltarea lectiei', 'Este dezvoltarea unei clase de eșantion de o oră de nivel înalt sau a unui training de grup, bazat pe experiențe internaționale, desfășurat cu metode interactive avansate.', 'f1.png'),
(2, 'Lecție video', 'Un videoclip cu o durată de până la 7 minute și un volum de cel mult 300 mb, care explică o prezentare a unei lecții sau o experiență metodică inovatoare personală care luminează metodele interactive în clasă sau activități extracurriculare. Nu contează pe ce dispozitiv a fost făcut videoclipul.', 'f2.png'),
(3, 'Magazin Online', 'Manuale educaționale metodice; scrisoare de recomandare; brosurile sunt trimise in format pdf.\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n', '1678827151.png'),
(4, 'e-Commerce', 'Un magazin universal pentru toate gusturile', '1678827944.jpg'),
(21, 'Portfolio', 'Este o descriere a experienteie manifestate prin exmple, lucrari si studii aprofundate', '1678872488.jpg');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `lucrari`
--

CREATE TABLE `lucrari` (
  `id` int(11) NOT NULL,
  `denumire` varchar(70) NOT NULL,
  `locatie` varchar(60) NOT NULL,
  `image` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Eliminarea datelor din tabel `lucrari`
--

INSERT INTO `lucrari` (`id`, `denumire`, `locatie`, `image`) VALUES
(1, 'Online magazin', 'Chisinau, Moldova', 'work1.png'),
(2, 'Landing Page', 'str. Ion Creanga, Botanica, Chsinau', 'work2.png'),
(3, 'Blog', 'str. Chisinaului, Balti, Moldova', 'work3.png');

--
-- Indexuri pentru tabele eliminate
--

--
-- Indexuri pentru tabele `articole`
--
ALTER TABLE `articole`
  ADD PRIMARY KEY (`id`);

--
-- Indexuri pentru tabele `lucrari`
--
ALTER TABLE `lucrari`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pentru tabele eliminate
--

--
-- AUTO_INCREMENT pentru tabele `articole`
--
ALTER TABLE `articole`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pentru tabele `lucrari`
--
ALTER TABLE `lucrari`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
