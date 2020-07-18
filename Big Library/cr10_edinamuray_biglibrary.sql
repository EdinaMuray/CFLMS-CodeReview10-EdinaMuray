-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 18. Jul 2020 um 15:20
-- Server-Version: 10.4.13-MariaDB
-- PHP-Version: 7.3.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Datenbank: `cr10_edinamuray_biglibrary`
--
CREATE DATABASE IF NOT EXISTS `cr10_edinamuray_biglibrary` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cr10_edinamuray_biglibrary`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `media`
--

CREATE TABLE `media` (
  `ID_Media` int(55) NOT NULL,
  `Cover` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `FirstName` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `LastName` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Title` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `ISBN` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Short_Description` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Type` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Status` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Publisher` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Adress` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Size` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Publish_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `media`
--

INSERT INTO `media` (`ID_Media`, `Cover`, `FirstName`, `LastName`, `Title`, `ISBN`, `Short_Description`, `Type`, `Status`, `Publisher`, `Adress`, `Size`, `Publish_Date`) VALUES
(1, 'https://www.skipprichard.com/wp-content/uploads/2014/12/9781477847824.jpg', 'Big', 'Dreamer', 'Rocky', 'ISBN-1234567', 'Fight or die, ture story of life', 'DVD', 'available', 'Hell Good', 'Norvegen 1234 Hellway 77', 'Small', '2020-01-01'),
(2, 'https://www.skipprichard.com/wp-content/uploads/2014/12/9780544262003.jpg', 'Oceans', 'Eleven', 'Snowden', 'ISBN-5432567', 'Where is the truth? Are we all tracked?', 'Book', 'available', 'Hi5', 'Estonia 9123 Tonkastreet 3', 'Small', '2020-01-02'),
(3, 'https://jlongroadmedia.files.wordpress.com/2013/12/catchingfire.jpg', 'Edward', 'Deale', 'White Lady', 'ISBN-5934267', 'Are you enough clean for that?', 'CD', 'available', 'Family Friends', 'Sweden 4567 Svenstreet 2', 'Medium', '2020-01-03'),
(4, 'https://www.skipprichard.com/wp-content/uploads/2014/12/9780062024350.jpg', 'Tom', 'Smith', 'Cars', 'ISBN-3234267', 'Drive till total car or maybe but not', 'DVD', 'reserved', 'Family Friends', 'Sweden 4567 Svenstreet 2', 'Medium', '2020-01-04'),
(5, 'https://www.skipprichard.com/wp-content/uploads/2014/12/9780802122551.jpg', 'Lisa', 'Kingsley', 'Gardena', 'ISBN-3276267', 'If you want a garden...', 'Book', 'reserved', 'White Snoow', 'Norveg 8912 Feestreet 1', 'Medium', '2020-01-05'),
(6, 'https://www.skipprichard.com/wp-content/uploads/2014/12/9781594631573.jpg', 'Richard', 'Boyle', 'Mustangs', 'ISBN-3276437', 'Free like the wind run in the middle of nowehere', 'CD', 'available', 'Neverland', 'Argentina 3456 Icestreet 9', 'Medium', '2020-01-06'),
(7, 'https://www.skipprichard.com/wp-content/uploads/2014/12/9780803737396.jpg', 'Elisabeth', 'Thorton', 'Internet Security', 'ISBN-3546437', 'After to read this book your life will change', 'Book', 'available', 'Publisher Big', 'USA 7891 Bossstreet 8', 'Big', '2020-01-07'),
(8, 'https://www.skipprichard.com/wp-content/uploads/2014/12/9781416994152.jpg', 'James', 'Deane', 'Lifeartist', 'ISBN-3541637', 'Life big questions, with answers!!', 'DVD', 'available', 'Shark', 'Mexico 2345 Oceanstreet 7', 'Big', '2020-01-08'),
(9, 'https://www.skipprichard.com/wp-content/uploads/2014/12/9781433533389.jpg', 'Black', 'Follow', 'Philiosophy', 'ISBN-3431637', 'Why we live, and what is life?', 'CD', 'reserved', 'Space', 'Russia 6789 Windstreet 6', 'Big', '2020-01-09'),
(10, 'https://www.skipprichard.com/wp-content/uploads/2014/12/9781426213687.jpg', 'Eva', 'Quinsy', 'Essential guide -42', 'ISBN-347347', 'Yes, the answer is always 42. Or not?!', 'Book', 'reserved', 'Space', 'Russia 6789 Windstreet 6', 'Big', '2020-01-10'),
(14, 'https://ermiliablog.files.wordpress.com/2012/09/sunsetkisses-copy.jpg', 'tody', 'denver', 'big bang', 'ISBN-4567654', 'what happened with loop?', 'CD', 'reserved', 'Goth', 'Vinestreet 7', 'Small', '2020-04-07');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`ID_Media`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `media`
--
ALTER TABLE `media`
  MODIFY `ID_Media` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;
