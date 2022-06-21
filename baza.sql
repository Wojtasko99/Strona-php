-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 18 Sty 2022, 15:05
-- Wersja serwera: 10.4.19-MariaDB
-- Wersja PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `baza`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ankieta`
--

CREATE TABLE `ankieta` (
  `ID` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `ocena` int(1) NOT NULL,
  `komentarz` varchar(255) NOT NULL,
  `filmy_prop` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `ankieta`
--

INSERT INTO `ankieta` (`ID`, `email`, `ocena`, `komentarz`, `filmy_prop`) VALUES
(2, 'damianero90@gmail.com', 1, 'Dodajcie mozliwosc zmiany avataru', 'Blyatman');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `filmy`
--

CREATE TABLE `filmy` (
  `ID` int(255) NOT NULL,
  `Tytul` varchar(50) NOT NULL,
  `Rok_produkcji` int(4) NOT NULL,
  `Rezyser` varchar(99) NOT NULL,
  `Ocena` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `filmy`
--

INSERT INTO `filmy` (`ID`, `Tytul`, `Rok_produkcji`, `Rezyser`, `Ocena`) VALUES
(1, 'Zielona mila', 1999, 'Frank Darabont', 8.6),
(2, 'Skazani na Shawshank', 1994, 'Frank Darabont', 8.8),
(3, 'Forest Gump', 1994, 'Robert Zemeckis', 8.5),
(4, 'Leon zawodowiec', 1994, 'Luc Besson', 8.1),
(5, 'Requiem dla snu', 2000, 'Darren Aronofsky', 7.8),
(6, 'Matrix', 1999, 'Lilly Wachowski', 7.6),
(7, 'Milczenie owiec', 1991, 'Jonathan Demme', 8.2),
(8, 'Gladiator', 2000, 'Ridley Scott', 8.1),
(9, 'Avatar', 2009, 'James Cameron', 7.4),
(10, 'Shrek', 2001, 'Adrew Adamson', 7.8),
(11, 'Szeregowiec Ryan', 1998, 'Steven Spielberg', 8.1),
(12, 'Podziemny krąg', 1999, 'David Fincher', 8.3),
(13, 'Pulp Fiction', 1994, 'Quentin Tarantino', 8.4),
(14, 'Titanic', 1997, 'James Cameron', 7.3),
(15, 'Nietykalni', 2011, 'Olivier Nakache', 8.7),
(16, 'Ojciec chrzestny', 1972, 'Francis Ford Coppola', 8.6),
(17, 'Szósty zmysł', 1999, 'M. Night Shyamalan', 7.8),
(18, 'Incepcja', 2010, 'Christopher Nolan', 8.3),
(19, 'Siedem', 1995, 'David Fincher', 8.3),
(20, 'Wyspa tajemnic', 2010, 'Martin Scorsese', 8.2);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy`
--

CREATE TABLE `uzytkownicy` (
  `id` int(10) NOT NULL,
  `login` varchar(255) NOT NULL,
  `haslo` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`id`, `login`, `haslo`, `email`) VALUES
(48, 'Damian123', '$2y$10$Z.oUzUNwCI/VeDpr22iGte1uDDODwRPVT4ZFNGa.DkXXQGEEboWrC', 'damianero90@gmail.com'),
(49, 'Damian12', '$2y$10$tjgvS61wfjkOySYjFZzxHepBX5poRYo18mSnDznPMUadvW6cY3WuO', 'damianero90@gmail.com'),
(50, 'Czekoko123', '$2y$10$Z7S3ZQVDGG4CscLRCZBYbO29s/7wl3cvVnh4/GnpxWzy.GxCGbEW2', 'damianero90@gmail.com'),
(51, 'Dasdas123', '$2y$10$oqe2ANI/F0wnjXM7h5UTnOIykDjMtKdx7A8vb1DLe7cTiCYkogGJC', 'damianero90@gmail.com'),
(52, 'Admin123', '$2y$10$O7owVFyUbJ5aBXN2zVmsyOLgPnPk5j.yYxaAzM4a6GQ10nNLvwqMW', 'admin@admin.pl');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `ankieta`
--
ALTER TABLE `ankieta`
  ADD PRIMARY KEY (`ID`);

--
-- Indeksy dla tabeli `filmy`
--
ALTER TABLE `filmy`
  ADD PRIMARY KEY (`ID`);

--
-- Indeksy dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `ankieta`
--
ALTER TABLE `ankieta`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT dla tabeli `filmy`
--
ALTER TABLE `filmy`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
