-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 31 Mar 2020, 16:17
-- Wersja serwera: 10.4.11-MariaDB
-- Wersja PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `projekt`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `fiszki`
--

CREATE TABLE `fiszki` (
  `id_fiszki` int(10) NOT NULL,
  `tekst` varchar(50) NOT NULL,
  `tlumaczenie` varchar(50) NOT NULL,
  `id_zestawu` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `fiszki`
--

INSERT INTO `fiszki` (`id_fiszki`, `tekst`, `tlumaczenie`, `id_zestawu`) VALUES
(79, 'jeden', 'one', 30),
(80, 'dwa', 'two', 30),
(81, 'trzy', 'three', 30),
(82, 'jeden', 'ein', 31),
(83, 'dwa', 'zwei', 31),
(84, 'trzy', 'drei', 31),
(85, 'jeden', 'uno', 32),
(86, 'dwa', 'dos', 32),
(87, 'trzy', 'tres', 32),
(88, 'dom', 'home', 33),
(89, 'kuchnia', 'kitchen', 33),
(90, 'auto', 'car', 33),
(91, 'dom', 'Haus', 34),
(92, 'auto', 'Auto', 34),
(93, 'kuchnia', 'kuche', 34),
(94, 'jedzenie', 'comida', 35),
(95, 'widelec', 'tenedor', 35),
(96, 'jablko', 'manzana', 35),
(97, 'jedzenie', 'cibo', 36),
(98, 'makaron', 'pasta', 36),
(99, 'mieso', 'carne', 36),
(100, 'auto', 'car', 37),
(101, 'ciezarowka', 'truck', 37),
(102, 'kolo', 'wheel', 37),
(103, 'jeden', 'uno', 38),
(104, 'dwa', 'due', 38),
(105, 'trzy', 'tre', 38);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `jezyki`
--

CREATE TABLE `jezyki` (
  `id_jezyk` int(10) NOT NULL,
  `jezyk` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `jezyki`
--

INSERT INTO `jezyki` (`id_jezyk`, `jezyk`) VALUES
(1, 'Angielski'),
(2, 'Niemiecki'),
(3, 'Hiszpanski'),
(4, 'Wloski');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `klasy`
--

CREATE TABLE `klasy` (
  `id_klasy` int(10) NOT NULL,
  `symbol_klasy` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `klasy`
--

INSERT INTO `klasy` (`id_klasy`, `symbol_klasy`) VALUES
(1, '1D'),
(2, '1A'),
(3, '1C'),
(4, '4D'),
(5, '4A'),
(6, '4B'),
(7, '4C'),
(8, '4E');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `statusy`
--

CREATE TABLE `statusy` (
  `ID_statusu` int(10) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `statusy`
--

INSERT INTO `statusy` (`ID_statusu`, `status`) VALUES
(1, 'Aktywny'),
(2, 'Nieaktywny');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy`
--

CREATE TABLE `uzytkownicy` (
  `login` varchar(30) NOT NULL,
  `haslo` text NOT NULL,
  `imie` varchar(20) NOT NULL,
  `nazwisko` varchar(20) NOT NULL,
  `nauczyciel` tinyint(1) NOT NULL,
  `id_klasa` int(10) DEFAULT NULL,
  `ID_statusu` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`login`, `haslo`, `imie`, `nazwisko`, `nauczyciel`, `id_klasa`, `ID_statusu`) VALUES
('admin', '$argon2id$v=19$m=65536,t=4,p=1$dW91dzZOV2pYV3F1Q3dRSQ$wVd17oZfy5Z1OitUeIbrngH7xfRcIqL4CGOHpPSjdXM', 'Jakub', 'Mleczak', 1, 1, 1),
('admin2', '$argon2id$v=19$m=65536,t=4,p=1$TDdoaWxuVTB6LzBjVVN2Qw$1fiYp4S8+c3nf+R/+8CIa9Vy/9FQJpGM0XqluYRqODk', 'Jakub', 'Mleczak', 1, 1, 2),
('Jakub', '$argon2id$v=19$m=65536,t=4,p=1$Zks2WFIueEFzeE13emFnag$RxH7LHsa8rVP+DX6tBEQkn2Jk4J8vefWAnN9u5fIErY', 'Mleczak', 'Jakub', 0, 4, 1),
('nieadmin', '$argon2id$v=19$m=65536,t=4,p=1$T056WTlEdlVIdC9PNE5oeQ$jz9EGYNoya/Rr9xwXirMFJSsDuuDP5sKERrkvsXK8nA', 'Norbert', 'Bujny', 0, 1, 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zestawy`
--

CREATE TABLE `zestawy` (
  `id_zestawu` int(10) NOT NULL,
  `id_jezyk` int(10) NOT NULL,
  `nazwa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `zestawy`
--

INSERT INTO `zestawy` (`id_zestawu`, `id_jezyk`, `nazwa`) VALUES
(30, 1, 'Liczby'),
(31, 2, 'Liczby'),
(32, 3, 'Liczby'),
(33, 1, 'Dom'),
(34, 2, 'Dom'),
(35, 3, 'Jedzenie'),
(36, 4, 'Jedzenie'),
(37, 1, 'Auta'),
(38, 4, 'Liczby');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zestawydlaklasy`
--

CREATE TABLE `zestawydlaklasy` (
  `id_klasy` int(10) NOT NULL,
  `id_zestawu` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `fiszki`
--
ALTER TABLE `fiszki`
  ADD PRIMARY KEY (`id_fiszki`),
  ADD KEY `id_zestawu` (`id_zestawu`);

--
-- Indeksy dla tabeli `jezyki`
--
ALTER TABLE `jezyki`
  ADD PRIMARY KEY (`id_jezyk`);

--
-- Indeksy dla tabeli `klasy`
--
ALTER TABLE `klasy`
  ADD PRIMARY KEY (`id_klasy`);

--
-- Indeksy dla tabeli `statusy`
--
ALTER TABLE `statusy`
  ADD PRIMARY KEY (`ID_statusu`);

--
-- Indeksy dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD PRIMARY KEY (`login`),
  ADD KEY `Uzytkownicy_fk0` (`id_klasa`),
  ADD KEY `Uzytkownicy_fk1` (`ID_statusu`);

--
-- Indeksy dla tabeli `zestawy`
--
ALTER TABLE `zestawy`
  ADD PRIMARY KEY (`id_zestawu`),
  ADD KEY `Zestawy_fk0` (`id_jezyk`);

--
-- Indeksy dla tabeli `zestawydlaklasy`
--
ALTER TABLE `zestawydlaklasy`
  ADD PRIMARY KEY (`id_klasy`,`id_zestawu`),
  ADD KEY `ZestawyDlaKlasy_fk1` (`id_zestawu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `fiszki`
--
ALTER TABLE `fiszki`
  MODIFY `id_fiszki` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT dla tabeli `zestawy`
--
ALTER TABLE `zestawy`
  MODIFY `id_zestawu` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `fiszki`
--
ALTER TABLE `fiszki`
  ADD CONSTRAINT `fiszki_ibfk_1` FOREIGN KEY (`id_zestawu`) REFERENCES `zestawy` (`id_zestawu`);

--
-- Ograniczenia dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD CONSTRAINT `Uzytkownicy_fk0` FOREIGN KEY (`id_klasa`) REFERENCES `klasy` (`id_klasy`),
  ADD CONSTRAINT `statusy` FOREIGN KEY (`ID_statusu`) REFERENCES `statusy` (`ID_statusu`);

--
-- Ograniczenia dla tabeli `zestawy`
--
ALTER TABLE `zestawy`
  ADD CONSTRAINT `Zestawy_fk0` FOREIGN KEY (`id_jezyk`) REFERENCES `jezyki` (`id_jezyk`);

--
-- Ograniczenia dla tabeli `zestawydlaklasy`
--
ALTER TABLE `zestawydlaklasy`
  ADD CONSTRAINT `ZestawyDlaKlasy_fk0` FOREIGN KEY (`id_klasy`) REFERENCES `klasy` (`id_klasy`),
  ADD CONSTRAINT `asd` FOREIGN KEY (`id_zestawu`) REFERENCES `zestawy` (`id_zestawu`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
