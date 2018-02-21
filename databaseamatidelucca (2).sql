-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Feb 21, 2018 alle 12:02
-- Versione del server: 10.1.30-MariaDB
-- Versione PHP: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `databaseamatidelucca`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `registro`
--

CREATE TABLE `registro` (
  `Id` int(11) NOT NULL,
  `Nome` varchar(40) COLLATE ascii_bin NOT NULL,
  `Cognome` varchar(40) COLLATE ascii_bin NOT NULL,
  `Email` varchar(40) COLLATE ascii_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii COLLATE=ascii_bin;

--
-- Dump dei dati per la tabella `registro`
--

INSERT INTO `registro` (`Id`, `Nome`, `Cognome`, `Email`) VALUES
(31, 'Alvise', 'Amati', 'alvise199999@gmail.com'),
(32, 'Fabio Mathias', 'Cejka', 'cejka@gmail.com'),
(33, 'Manuel', 'Delucca', 'delli2000@gmail.com'),
(34, 'delli', 'ciao', 'alvise199999@gmail.com');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `registro`
--
ALTER TABLE `registro`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
