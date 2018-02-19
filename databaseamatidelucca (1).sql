-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Feb 19, 2018 alle 12:17
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
-- Database: `scuolalavoro`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `databaseamatidelucca`
--

CREATE TABLE `databaseamatidelucca` (
  `id` int(11) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `cognome` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `databaseamatidelucca`
--

INSERT INTO `databaseamatidelucca` (`id`, `nome`, `cognome`, `email`) VALUES
(377, 'gtrbtrbty', 'bntynbty', 'ntynty@bg.nh'),
(378, 'nhn', 'hn', 'nh@nh.bg');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `databaseamatidelucca`
--
ALTER TABLE `databaseamatidelucca`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `databaseamatidelucca`
--
ALTER TABLE `databaseamatidelucca`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=379;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
