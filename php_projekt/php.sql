-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 24 Sty 2022, 19:38
-- Wersja serwera: 10.4.22-MariaDB
-- Wersja PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `php`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `haslo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `admin`
--

INSERT INTO `admin` (`id`, `email`, `haslo`) VALUES
(0, 'admin@przychodnia.pl', '$2y$10$FHpxTn2SBloa33nkyRZhQeLUKZcs9CplQ08MT/5eHke6ZTlu5d3X2'),
(1, 'admin2@przychodnia.pl', '$2y$10$FHpxTn2SBloa33nkyRZhQeLUKZcs9CplQ08MT/5eHke6ZTlu5d3X2');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `lekarz`
--

CREATE TABLE `lekarz` (
  `id` int(11) NOT NULL,
  `imie` varchar(40) NOT NULL,
  `nazwisko` varchar(50) NOT NULL,
  `specjalizacja` varchar(50) NOT NULL,
  `numer_tel` int(9) NOT NULL,
  `gabinet` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `lekarz`
--

INSERT INTO `lekarz` (`id`, `imie`, `nazwisko`, `specjalizacja`, `numer_tel`, `gabinet`) VALUES
(2, 'Adam', 'Będkowski', 'Kardiolog', 567891234, 6),
(3, 'Piotr', 'Laryngolog', 'Laryngolog', 123461234, 8),
(4, 'Adam', 'Uszny', 'Laryngolog', 837462546, 9);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `nowa_wizyta`
--

CREATE TABLE `nowa_wizyta` (
  `id` int(11) NOT NULL,
  `id_pacjent` int(11) NOT NULL,
  `specjalizacja` varchar(50) NOT NULL,
  `opis` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pacjent`
--

CREATE TABLE `pacjent` (
  `id` int(11) NOT NULL,
  `imie` varchar(50) NOT NULL,
  `nazwisko` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `haslo` text NOT NULL,
  `pesel` int(11) NOT NULL,
  `data_ur` date NOT NULL,
  `adres` varchar(50) NOT NULL,
  `miasto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `pacjent`
--

INSERT INTO `pacjent` (`id`, `imie`, `nazwisko`, `email`, `haslo`, `pesel`, `data_ur`, `adres`, `miasto`) VALUES
(1, 'Piotr', 'Lekarski', 'pacjent1@email.pl', '$2y$10$RCs77ReWEak32nDIxoW8y.Lp4SR37QkpvDJfZTfifr6y4OwbjJlcq', 2147483647, '2008-07-10', 'Kosciuszki 29 m51', 'Elblag'),
(2, 'Mistrzu', 'Uszny', 'pacjent2@email.pl', '$2y$10$5QQHyewC1TiNxZEppODxveR45Ls9pVZpmD0C8xc8jwhE.0llr9k.i', 2147483647, '1994-06-30', 'Obroncow pokoju 1a', 'Elbląg');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wizyta`
--

CREATE TABLE `wizyta` (
  `id` int(11) NOT NULL,
  `id_lek` int(11) NOT NULL,
  `id_pac` int(11) NOT NULL,
  `data_wiz` datetime NOT NULL,
  `opis` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `wizyta`
--

INSERT INTO `wizyta` (`id`, `id_lek`, `id_pac`, `data_wiz`, `opis`) VALUES
(6, 3, 1, '2022-01-26 12:00:00', 'sd fhdfgjdfgj fdsgjfdgj'),
(7, 2, 1, '2022-01-27 17:00:00', 'dsfhdsfgh jgfdsjgjf'),
(8, 3, 1, '2022-01-10 17:00:00', 'dxghjmdghkj');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `lekarz`
--
ALTER TABLE `lekarz`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `nowa_wizyta`
--
ALTER TABLE `nowa_wizyta`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `pacjent`
--
ALTER TABLE `pacjent`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `wizyta`
--
ALTER TABLE `wizyta`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `lekarz`
--
ALTER TABLE `lekarz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT dla tabeli `nowa_wizyta`
--
ALTER TABLE `nowa_wizyta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT dla tabeli `pacjent`
--
ALTER TABLE `pacjent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `wizyta`
--
ALTER TABLE `wizyta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
