-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Czas generowania: 22 Lis 2020, 19:31
-- Wersja serwera: 10.4.14-MariaDB
-- Wersja PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `sklep`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `address`
--

CREATE TABLE `address` (
  `id_address` int(11) NOT NULL,
  `city` varchar(40) DEFAULT NULL,
  `town` varchar(40) DEFAULT NULL,
  `voivodeship` varchar(40) DEFAULT NULL,
  `district` varchar(40) DEFAULT NULL,
  `postcode` varchar(6) DEFAULT NULL,
  `street` varchar(40) DEFAULT NULL,
  `number_house` int(11) DEFAULT NULL,
  `number_local` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `address`
--

INSERT INTO `address` (`id_address`, `city`, `town`, `voivodeship`, `district`, `postcode`, `street`, `number_house`, `number_local`) VALUES
(1, 'Siedlce', 'Siedlce', 'Mazowieckie', NULL, '08-110', 'Dreszera', 11, 22);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `category`
--

CREATE TABLE `category` (
  `id_category` int(11) NOT NULL,
  `name_category` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `category`
--

INSERT INTO `category` (`id_category`, `name_category`) VALUES
(3, 'router'),
(4, 'switch');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `clients`
--

CREATE TABLE `clients` (
  `id_client` int(11) NOT NULL,
  `id_address` int(11) NOT NULL,
  `login` varchar(100) DEFAULT NULL,
  `password` varchar(500) DEFAULT NULL,
  `name_business` varchar(60) DEFAULT NULL,
  `regon` varchar(14) DEFAULT NULL,
  `nip` varchar(10) DEFAULT NULL,
  `surname` varchar(40) DEFAULT NULL,
  `names` varchar(100) DEFAULT NULL,
  `type_clients` varchar(20) DEFAULT NULL,
  `phone` varchar(11) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `founder` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `clients`
--

INSERT INTO `clients` (`id_client`, `id_address`, `login`, `password`, `name_business`, `regon`, `nip`, `surname`, `names`, `type_clients`, `phone`, `avatar`, `founder`) VALUES
(6, 1, 'lukaszw1212', '$2y$10$pQNuMbvdGI3fAPj2KfJOZeF3W4YHj/8tO1YuCqTH7sae.f8EXZEWO', NULL, NULL, NULL, 'Waszczuk', 'Łukasz', NULL, NULL, NULL, 'Router');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `gallery`
--

CREATE TABLE `gallery` (
  `id_picture` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `name_jpg` mediumblob DEFAULT NULL,
  `date_added` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ordering`
--

CREATE TABLE `ordering` (
  `id_ordering` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `date_placing_order` date DEFAULT NULL,
  `date_accept_order` date DEFAULT NULL,
  `paid` varchar(45) DEFAULT NULL,
  `data_sending` date DEFAULT NULL,
  `realised` tinyint(1) DEFAULT NULL,
  `date_realised` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ordering_products`
--

CREATE TABLE `ordering_products` (
  `id_ordering_products` int(11) NOT NULL,
  `id_ordering` int(11) NOT NULL,
  `id_products` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `producents`
--

CREATE TABLE `producents` (
  `id_producent` int(11) NOT NULL,
  `name_producent` varchar(70) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `producents`
--

INSERT INTO `producents` (`id_producent`, `name_producent`) VALUES
(1, 'Lenovo'),
(3, 'Huawei');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `products`
--

CREATE TABLE `products` (
  `id_product` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  `name_product` varchar(60) DEFAULT NULL,
  `type` varchar(40) DEFAULT NULL,
  `version` varchar(45) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `photo` mediumblob DEFAULT NULL,
  `price_netto` double UNSIGNED DEFAULT NULL,
  `price_brutto` double UNSIGNED DEFAULT NULL,
  `percent_vat` double UNSIGNED DEFAULT NULL,
  `id_producents` int(11) NOT NULL,
  `founder` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `products`
--

INSERT INTO `products` (`id_product`, `id_category`, `name_product`, `type`, `version`, `description`, `photo`, `price_netto`, `price_brutto`, `percent_vat`, `id_producents`, `founder`) VALUES
(5, 3, 'Router', 'V4', '5.90', 'Fajny Router', 0x6b7369617a6b692e6a7067, 400, 500, 1, 3, 'lukaszw1212');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `specimen`
--

CREATE TABLE `specimen` (
  `id_specimen` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `code_product` int(11) DEFAULT NULL,
  `price_netto` double UNSIGNED DEFAULT NULL,
  `price_brutto` double UNSIGNED DEFAULT NULL,
  `percent_vat` double UNSIGNED DEFAULT NULL,
  `date_buying` date DEFAULT NULL,
  `date_selling` date DEFAULT NULL,
  `bool_sell` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `workers`
--

CREATE TABLE `workers` (
  `id_worker` int(11) NOT NULL,
  `id_adress` int(11) NOT NULL,
  `login` varchar(30) DEFAULT NULL,
  `password` varchar(40) DEFAULT NULL,
  `surname` varchar(40) DEFAULT NULL,
  `names` varchar(100) DEFAULT NULL,
  `permissions` varchar(200) DEFAULT NULL,
  `account_active` date DEFAULT NULL,
  `date_employment` date DEFAULT NULL,
  `date_exemption` date DEFAULT NULL,
  `phone` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id_address`);

--
-- Indeksy dla tabeli `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

--
-- Indeksy dla tabeli `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id_client`),
  ADD KEY `clients1` (`id_address`);

--
-- Indeksy dla tabeli `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id_picture`),
  ADD KEY `gallery` (`id_product`);

--
-- Indeksy dla tabeli `ordering`
--
ALTER TABLE `ordering`
  ADD PRIMARY KEY (`id_ordering`),
  ADD KEY `ordering1` (`id_client`);

--
-- Indeksy dla tabeli `ordering_products`
--
ALTER TABLE `ordering_products`
  ADD PRIMARY KEY (`id_ordering_products`),
  ADD KEY `ordering_products2` (`id_products`);

--
-- Indeksy dla tabeli `producents`
--
ALTER TABLE `producents`
  ADD PRIMARY KEY (`id_producent`);

--
-- Indeksy dla tabeli `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `products1` (`id_category`),
  ADD KEY `products2` (`id_producents`);

--
-- Indeksy dla tabeli `specimen`
--
ALTER TABLE `specimen`
  ADD PRIMARY KEY (`id_specimen`),
  ADD KEY `specimen1` (`id_product`);

--
-- Indeksy dla tabeli `workers`
--
ALTER TABLE `workers`
  ADD PRIMARY KEY (`id_worker`),
  ADD KEY `workers1` (`id_adress`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `address`
--
ALTER TABLE `address`
  MODIFY `id_address` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT dla tabeli `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT dla tabeli `clients`
--
ALTER TABLE `clients`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT dla tabeli `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id_picture` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `ordering`
--
ALTER TABLE `ordering`
  MODIFY `id_ordering` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `ordering_products`
--
ALTER TABLE `ordering_products`
  MODIFY `id_ordering_products` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `producents`
--
ALTER TABLE `producents`
  MODIFY `id_producent` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT dla tabeli `products`
--
ALTER TABLE `products`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT dla tabeli `specimen`
--
ALTER TABLE `specimen`
  MODIFY `id_specimen` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `workers`
--
ALTER TABLE `workers`
  MODIFY `id_worker` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `clients`
--
ALTER TABLE `clients`
  ADD CONSTRAINT `clients1` FOREIGN KEY (`id_address`) REFERENCES `address` (`id_address`) ON DELETE CASCADE;

--
-- Ograniczenia dla tabeli `gallery`
--
ALTER TABLE `gallery`
  ADD CONSTRAINT `gallery` FOREIGN KEY (`id_product`) REFERENCES `products` (`id_product`) ON DELETE CASCADE;

--
-- Ograniczenia dla tabeli `ordering`
--
ALTER TABLE `ordering`
  ADD CONSTRAINT `ordering1` FOREIGN KEY (`id_client`) REFERENCES `clients` (`id_client`) ON DELETE CASCADE;

--
-- Ograniczenia dla tabeli `ordering_products`
--
ALTER TABLE `ordering_products`
  ADD CONSTRAINT `ordering_products1` FOREIGN KEY (`id_ordering_products`) REFERENCES `ordering` (`id_ordering`) ON DELETE CASCADE,
  ADD CONSTRAINT `ordering_products2` FOREIGN KEY (`id_products`) REFERENCES `products` (`id_product`) ON DELETE CASCADE;

--
-- Ograniczenia dla tabeli `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products1` FOREIGN KEY (`id_category`) REFERENCES `category` (`id_category`) ON DELETE CASCADE,
  ADD CONSTRAINT `products2` FOREIGN KEY (`id_producents`) REFERENCES `producents` (`id_producent`) ON DELETE CASCADE;

--
-- Ograniczenia dla tabeli `specimen`
--
ALTER TABLE `specimen`
  ADD CONSTRAINT `specimen1` FOREIGN KEY (`id_product`) REFERENCES `products` (`id_product`) ON DELETE CASCADE;

--
-- Ograniczenia dla tabeli `workers`
--
ALTER TABLE `workers`
  ADD CONSTRAINT `workers1` FOREIGN KEY (`id_adress`) REFERENCES `address` (`id_address`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
