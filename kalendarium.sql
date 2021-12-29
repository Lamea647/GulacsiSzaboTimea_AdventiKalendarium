-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2021. Dec 29. 23:15
-- Kiszolgáló verziója: 10.4.21-MariaDB
-- PHP verzió: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `kalendarium`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `tetelek`
--

CREATE TABLE `tetelek` (
  `id` int(11) NOT NULL,
  `tartalom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- A tábla adatainak kiíratása `tetelek`
--

INSERT INTO `tetelek` (`id`, `tartalom`) VALUES
(1, 'tejcsoki'),
(2, 'étcsoki'),
(3, 'fehércsoki'),
(4, 'gumicukor'),
(5, 'francia drazsé'),
(6, 'dunakavics'),
(7, 'cukorka'),
(8, 'rágó'),
(9, 'mazsola'),
(10, 'mandula'),
(11, 'keksz'),
(12, 'medvecukor'),
(13, 'pillecukor'),
(14, 'aszalt füge'),
(15, 'nyalóka'),
(16, 'nápolyi'),
(17, 'tökmag'),
(18, 'szaloncukor'),
(19, 'tejkaramella'),
(20, 'vajkaramella'),
(21, 'mézeskalács'),
(22, 'télifagyi'),
(23, 'linzer'),
(24, 'isler'),
(25, 'olvadós rágó');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `tetelek`
--
ALTER TABLE `tetelek`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `tetelek`
--
ALTER TABLE `tetelek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
