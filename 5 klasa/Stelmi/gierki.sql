-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Lis 20, 2024 at 02:43 PM
-- Wersja serwera: 10.4.32-MariaDB
-- Wersja PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gierki`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `gry`
--

CREATE TABLE `gry` (
  `id` int(11) NOT NULL,
  `Tytul` varchar(255) DEFAULT NULL,
  `Gatunek` varchar(255) DEFAULT NULL,
  `Rok_Produkcji` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gry`
--

INSERT INTO `gry` (`id`, `Tytul`, `Gatunek`, `Rok_Produkcji`) VALUES
(1, 'The Legend of Zelda: Breath of the Wild', 'Akcja, Przygodowa', 2017),
(2, 'The Witcher 3: Wild Hunt', 'RPG, Akcja', 2015),
(3, 'Red Dead Redemption 2', 'Akcja, Przygoda', 2018),
(4, 'Grand Theft Auto V', 'Akcja, Open World', 2013),
(5, 'Minecraft', 'Sandbox, Przygodowa', 2011),
(6, 'Dark Souls III', 'RPG, Akcja', 2016),
(7, 'God of War', 'Akcja, Przygodowa', 2018),
(8, 'Horizon Zero Dawn', 'RPG, Akcja', 2017),
(9, 'Overwatch', 'FPS', 2016),
(10, 'Super Mario Odyssey', 'Platformowa, Przygodowa', 2017),
(11, 'Bloodborne', 'RPG, Akcja', 2015),
(12, 'Half-Life 2', 'FPS, Akcja', 2004),
(13, 'DOOM Eternal', 'FPS, Akcja', 2020),
(14, 'Fortnite', 'Battle Royale', 2017),
(15, 'Battlefield 1', 'FPS, Akcja', 2016),
(16, 'The Elder Scrolls V: Skyrim', 'RPG, Akcja', 2011),
(17, 'Persona 5', 'RPG', 2016),
(18, 'Metal Gear Solid V: The Phantom Pain', 'Akcja, Stealth', 2015),
(19, 'Uncharted 4: A Thief\'s End', 'Akcja, Przygodowa', 2016),
(20, 'Cyberpunk 2077', 'RPG, Akcja', 2020),
(21, 'The Last of Us Part II', 'Akcja, Przygodowa', 2020),
(22, 'Sekiro: Shadows Die Twice', 'Akcja, RPG', 2019),
(23, 'Spiderman', 'Akcja, Przygodowa', 2018),
(24, 'Assassin\'s Creed Valhalla', 'Akcja, RPG', 2020),
(25, 'Fallout 4', 'RPG, Akcja', 2015),
(26, 'Rocket League', 'Sportowa', 2015),
(27, 'Star Wars: Jedi Fallen Order', 'Akcja, RPG', 2019),
(28, 'Kingdom Hearts III', 'RPG', 2019),
(29, 'Dying Light', 'RPG, Akcja', 2015),
(30, 'Borderlands 3', 'FPS, RPG', 2019),
(31, 'Tomb Raider', 'Akcja, Przygodowa', 2013),
(32, 'Dead Redemption', 'Akcja, Open World', 2010),
(33, 'Gears of War 4', 'FPS, Akcja', 2016),
(34, 'Diablo III', 'RPG, Akcja', 2012),
(35, 'FIFA 23', 'Sportowa', 2023),
(36, 'NBA 2K24', 'Sportowa', 2023),
(37, 'Call of Duty: Modern Warfare II', 'FPS', 2022),
(38, 'League of Legends', 'MOBA', 2009),
(39, 'World of Warcraft', 'MMORPG', 2004),
(40, 'Pokémon Sword and Shield', 'RPG', 2019),
(41, 'The Sims 4', 'Symulacja', 2014),
(42, 'Starcraft II', 'RTS', 2010),
(43, 'Animal Crossing: New Horizons', 'Symulacja', 2020),
(44, 'Cuphead', 'Platformowa, Akcja', 2017),
(45, 'Super Smash Bros. Ultimate', 'Bijatyka', 2018),
(46, 'Gran Turismo 7', 'Symulacja, Wyścigi', 2022),
(47, 'Halo Infinite', 'FPS, Akcja', 2021),
(48, 'The Binding of Isaac: Rebirth', 'Roguelike', 2014),
(49, 'Dark Souls', 'RPG, Akcja', 2011),
(50, 'Red Dead Redemption', 'Akcja, Open World', 2010),
(51, 'Hitman 3', 'Stealth, Akcja', 2021),
(52, 'Dragon Age: Inquisition', 'RPG', 2014),
(53, 'GTA: San Andreas', 'Akcja, Open World', 2004),
(54, 'No Man\'s Sky', 'Sandbox, RPG', 2016),
(55, 'Need for Speed Heat', 'Wyścigi', 2019),
(56, 'Mortal Kombat 11', 'Bijatyka', 2019),
(57, 'Rocket League', 'Sportowa', 2015),
(58, 'Worms Battlegrounds', 'Strategia', 2014),
(59, 'Monster Hunter: World', 'RPG, Akcja', 2018),
(60, 'Celeste', 'Platformowa', 2018),
(61, 'Battlefield V', 'FPS, Akcja', 2018),
(62, 'The Division 2', 'Strzelanka, MMO', 2019),
(63, 'Tetris Effect', 'Logiczna', 2018),
(64, 'Street Fighter V', 'Bijatyka', 2016),
(65, 'Castlevania: Lords of Shadow', 'Akcja, Przygodowa', 2010),
(66, 'Watch Dogs 2', 'Akcja, Open World', 2016),
(67, 'Tales of Arise', 'RPG', 2021),
(68, 'Persona 4 Golden', 'RPG', 2012),
(69, 'Bayonetta 2', 'Akcja', 2014),
(70, 'Super Mario Maker 2', 'Platformowa', 2019),
(71, 'Injustice 2', 'Bijatyka', 2017),
(72, 'Apex Legends', 'Battle Royale', 2019),
(73, 'Doom (2016)', 'FPS, Akcja', 2016),
(74, 'F1 2020', 'Wyścigi', 2020),
(75, 'Pillars of Eternity II: Deadfire', 'RPG', 2018),
(76, 'XCOM 2', 'Strategia', 2016),
(77, 'Battlefront II', 'FPS, Akcja', 2017),
(78, 'Bloodstained: Ritual of the Night', 'Akcja, Platformowa', 2019),
(79, 'Celeste', 'Platformowa', 2018),
(80, 'Hollow Knight', 'Platformowa, Metroidvania', 2017),
(81, 'The Outer Worlds', 'RPG', 2019),
(82, 'A Plague Tale: Innocence', 'Akcja, Przygodowa', 2019),
(83, 'Kingdom Come: Deliverance', 'RPG, Akcja', 2018),
(84, 'Farming Simulator 19', 'Symulacja', 2019),
(85, 'F1 2023', 'Wyścigi', 2023),
(86, 'NBA 2K23', 'Sportowa', 2022),
(87, 'Vampire: The Masquerade - Bloodlines 2', 'RPG, Akcja', 2024),
(88, 'Shenmue III', 'RPG, Akcja', 2019),
(89, 'Final Fantasy VII Remake', 'RPG', 2020),
(90, 'Resident Evil Village', 'Survival Horror', 2021),
(91, 'Far Cry 5', 'FPS, Akcja', 2018),
(92, 'Subnautica', 'Survival, Akcja', 2018);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `szczegóły`
--

CREATE TABLE `szczegóły` (
  `id` int(11) NOT NULL,
  `Tytul` varchar(255) DEFAULT NULL,
  `Wymagania_Wiekowe` varchar(10) DEFAULT NULL,
  `Ilość_Graczy` varchar(50) DEFAULT NULL,
  `Platforma` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `szczegóły`
--

INSERT INTO `szczegóły` (`id`, `Tytul`, `Wymagania_Wiekowe`, `Ilość_Graczy`, `Platforma`) VALUES
(1, 'The Legend of Zelda: Breath of the Wild', 'E', '1', 'Switch'),
(2, 'The Witcher 3: Wild Hunt', 'M', '1', 'PC, PS4, Xbox One, Switch'),
(3, 'Red Dead Redemption 2', 'M', '1', 'PS4, Xbox One, PC'),
(4, 'Grand Theft Auto V', 'M', '1-30', 'PS4, Xbox One, PC'),
(5, 'Minecraft', 'E', '1-4', 'PC, PS4, Xbox One, Switch'),
(6, 'Dark Souls III', 'M', '1', 'PS4, Xbox One, PC'),
(7, 'God of War', 'M', '1', 'PS4, PC'),
(8, 'Horizon Zero Dawn', 'M', '1', 'PS4, PC'),
(9, 'Overwatch', 'T', '1-6', 'PC, PS4, Xbox One, Switch'),
(10, 'Super Mario Odyssey', 'E', '1-2', 'Switch'),
(11, 'Bloodborne', 'M', '1', 'PS4'),
(12, 'Half-Life 2', 'M', '1', 'PC'),
(13, 'DOOM Eternal', 'M', '1', 'PC, PS4, Xbox One, Switch'),
(14, 'Fortnite', 'T', '1-100', 'PC, PS4, Xbox One, Switch'),
(15, 'Battlefield 1', 'M', '1-64', 'PC, PS4, Xbox One'),
(16, 'The Elder Scrolls V: Skyrim', 'M', '1', 'PC, PS4, Xbox One, Switch'),
(17, 'Persona 5', 'T', '1', 'PS4'),
(18, 'Metal Gear Solid V: The Phantom Pain', 'M', '1', 'PS4, Xbox One, PC'),
(19, 'Uncharted 4: A Thief\'s End', 'T', '1', 'PS4'),
(20, 'Cyberpunk 2077', 'M', '1', 'PC, PS4, Xbox One'),
(21, 'The Last of Us Part II', 'M', '1', 'PS4'),
(22, 'Sekiro: Shadows Die Twice', 'M', '1', 'PS4, Xbox One, PC'),
(23, 'Spiderman', 'T', '1', 'PS4'),
(24, 'Assassin\'s Creed Valhalla', 'M', '1', 'PS4, Xbox One, PC'),
(25, 'Fallout 4', 'M', '1', 'PC, PS4, Xbox One'),
(26, 'Rocket League', 'E', '1-4', 'PC, PS4, Xbox One, Switch'),
(27, 'Star Wars: Jedi Fallen Order', 'T', '1', 'PS4, Xbox One, PC'),
(28, 'Kingdom Hearts III', 'E', '1', 'PS4, Xbox One, Switch'),
(29, 'Dying Light', 'M', '1-4', 'PS4, Xbox One, PC'),
(30, 'Borderlands 3', 'M', '1-4', 'PC, PS4, Xbox One'),
(31, 'Tomb Raider', 'T', '1', 'PC, PS4, Xbox One'),
(32, 'Dead Redemption', 'M', '1', 'PS3, Xbox 360, PC'),
(33, 'Gears of War 4', 'M', '1-2', 'Xbox One, PC'),
(34, 'Diablo III', 'M', '1-4', 'PC, PS4, Xbox One, Switch'),
(35, 'FIFA 23', 'E', '1-22', 'PC, PS4, PS5, Xbox One, Switch'),
(36, 'NBA 2K24', 'E', '1-10', 'PC, PS4, PS5, Xbox One, Switch'),
(37, 'Call of Duty: Modern Warfare II', 'M', '1-64', 'PC, PS4, PS5, Xbox One, Xbox Series X/S'),
(38, 'League of Legends', 'T', '1-10', 'PC'),
(39, 'World of Warcraft', 'T', '1-1000', 'PC'),
(40, 'Pokémon Sword and Shield', 'E', '1-2', 'Switch'),
(41, 'The Sims 4', 'T', '1', 'PC, PS4, Xbox One'),
(42, 'Starcraft II', 'M', '1-8', 'PC'),
(43, 'Animal Crossing: New Horizons', 'E', '1-8', 'Switch'),
(44, 'Cuphead', 'E', '1-2', 'PC, PS4, Switch'),
(45, 'Super Smash Bros. Ultimate', 'E', '1-8', 'Switch'),
(46, 'Gran Turismo 7', 'E', '1-20', 'PS5'),
(47, 'Halo Infinite', 'M', '1-32', 'PC, Xbox One, Xbox Series X/S'),
(48, 'The Binding of Isaac: Rebirth', 'M', '1', 'PC, PS4, Switch'),
(49, 'Dark Souls', 'M', '1', 'PS3, Xbox 360, PC'),
(50, 'Red Dead Redemption', 'M', '1', 'PS3, Xbox 360, PC'),
(51, 'Hitman 3', 'M', '1', 'PC, PS4, Xbox One'),
(52, 'Dragon Age: Inquisition', 'M', '1', 'PC, PS4, Xbox One'),
(53, 'GTA: San Andreas', 'M', '1', 'PS2, Xbox, PC'),
(54, 'No Man\'s Sky', 'T', '1-4', 'PC, PS4, Xbox One, Switch'),
(55, 'Need for Speed Heat', 'T', '1-8', 'PC, PS4, Xbox One'),
(56, 'Mortal Kombat 11', 'M', '1-2', 'PC, PS4, Xbox One, Switch'),
(57, 'Rocket League', 'E', '1-4', 'PC, PS4, Xbox One, Switch'),
(58, 'Worms Battlegrounds', 'T', '1-4', 'PC, PS4, Xbox One'),
(59, 'Monster Hunter: World', 'M', '1-4', 'PS4, Xbox One, PC'),
(60, 'Celeste', 'E', '1', 'PC, PS4, Xbox One, Switch'),
(61, 'Battlefield V', 'M', '1-64', 'PC, PS4, Xbox One'),
(62, 'The Division 2', 'M', '1-8', 'PC, PS4, Xbox One'),
(63, 'Tetris Effect', 'E', '1', 'PC, PS4'),
(64, 'Street Fighter V', 'T', '1-2', 'PC, PS4'),
(65, 'Castlevania: Lords of Shadow', 'M', '1', 'PS3, Xbox 360'),
(66, 'Watch Dogs 2', 'M', '1', 'PC, PS4, Xbox One'),
(67, 'Tales of Arise', 'M', '1', 'PS4, Xbox One, PC'),
(68, 'Persona 4 Golden', 'T', '1', 'PS Vita, PC'),
(69, 'Bayonetta 2', 'M', '1', 'Wii U, Switch'),
(70, 'Super Mario Maker 2', 'E', '1-4', 'Switch'),
(71, 'Injustice 2', 'T', '1-2', 'PS4, Xbox One, PC'),
(72, 'Apex Legends', 'T', '1-60', 'PC, PS4, Xbox One, Switch'),
(73, 'Doom (2016)', 'M', '1', 'PC, PS4, Xbox One'),
(74, 'F1 2020', 'E', '1-22', 'PC, PS4, Xbox One'),
(75, 'Pillars of Eternity II: Deadfire', 'M', '1', 'PC, PS4, Xbox One'),
(76, 'XCOM 2', 'M', '1', 'PC, PS4, Xbox One'),
(77, 'Battlefront II', 'M', '1-40', 'PC, PS4, Xbox One'),
(78, 'Bloodstained: Ritual of the Night', 'M', '1', 'PC, PS4, Xbox One, Switch'),
(79, 'Celeste', 'E', '1', 'PC, PS4, Xbox One, Switch'),
(80, 'Hollow Knight', 'E', '1', 'PC, PS4, Switch'),
(81, 'The Outer Worlds', 'M', '1', 'PC, PS4, Xbox One, Switch'),
(82, 'A Plague Tale: Innocence', 'M', '1', 'PC, PS4, Xbox One'),
(83, 'Kingdom Come: Deliverance', 'M', '1', 'PC, PS4, Xbox One'),
(84, 'Farming Simulator 19', 'E', '1-16', 'PC, PS4, Xbox One, Switch'),
(85, 'F1 2023', 'E', '1-22', 'PC, PS4, PS5, Xbox One, Xbox Series X/S'),
(86, 'NBA 2K23', 'E', '1-10', 'PC, PS4, PS5, Xbox One, Switch'),
(87, 'Vampire: The Masquerade - Bloodlines 2', 'M', '1', 'PC, PS5, Xbox Series X/S'),
(88, 'Shenmue III', 'M', '1', 'PC, PS4'),
(89, 'Final Fantasy VII Remake', 'M', '1', 'PS4'),
(90, 'Resident Evil Village', 'M', '1', 'PC, PS4, PS5, Xbox One, Xbox Series X/S'),
(91, 'Far Cry 5', 'M', '1-4', 'PC, PS4, Xbox One'),
(92, 'Subnautica', 'E', '1', 'PC, PS4, Xbox One, Switch'),
(93, 'test', 'test', 'test', 'test');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `twórcy`
--

CREATE TABLE `twórcy` (
  `id` int(11) NOT NULL,
  `Tytul` varchar(255) DEFAULT NULL,
  `Twórca` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `twórcy`
--

INSERT INTO `twórcy` (`id`, `Tytul`, `Twórca`) VALUES
(1, 'The Legend of Zelda: Breath of the Wild', 'Nintendo'),
(2, 'The Witcher 3: Wild Hunt', 'CD Projekt Red'),
(3, 'Red Dead Redemption 2', 'Rockstar Games'),
(4, 'Grand Theft Auto V', 'Rockstar Games'),
(5, 'Minecraft', 'Mojang Studios'),
(6, 'Dark Souls III', 'FromSoftware'),
(7, 'God of War', 'Santa Monica Studio'),
(8, 'Horizon Zero Dawn', 'Guerrilla Games'),
(9, 'Overwatch', 'Blizzard Entertainment'),
(10, 'Super Mario Odyssey', 'Nintendo'),
(11, 'Bloodborne', 'FromSoftware'),
(12, 'Half-Life 2', 'Valve'),
(13, 'DOOM Eternal', 'id Software'),
(14, 'Fortnite', 'Epic Games'),
(15, 'Battlefield 1', 'DICE'),
(16, 'The Elder Scrolls V: Skyrim', 'Bethesda Game Studios'),
(17, 'Persona 5', 'Atlus'),
(18, 'Metal Gear Solid V: The Phantom Pain', 'Kojima Productions'),
(19, 'Uncharted 4: A Thief\'s End', 'Naughty Dog'),
(20, 'Cyberpunk 2077', 'CD Projekt Red'),
(21, 'The Last of Us Part II', 'Naughty Dog'),
(22, 'Sekiro: Shadows Die Twice', 'FromSoftware'),
(23, 'Spiderman', 'Insomniac Games'),
(24, 'Assassin\'s Creed Valhalla', 'Ubisoft'),
(25, 'Fallout 4', 'Bethesda Game Studios'),
(26, 'Rocket League', 'Psyonix'),
(27, 'Star Wars: Jedi Fallen Order', 'Respawn Entertainment'),
(28, 'Kingdom Hearts III', 'Square Enix'),
(29, 'Dying Light', 'Techland'),
(30, 'Borderlands 3', 'Gearbox Software'),
(31, 'Tomb Raider', 'Crystal Dynamics'),
(32, 'Dead Redemption', 'Rockstar Games'),
(33, 'Gears of War 4', 'The Coalition'),
(34, 'Diablo III', 'Blizzard Entertainment'),
(35, 'FIFA 23', 'EA Sports'),
(36, 'NBA 2K24', 'Visual Concepts'),
(37, 'Call of Duty: Modern Warfare II', 'Infinity Ward'),
(38, 'League of Legends', 'Riot Games'),
(39, 'World of Warcraft', 'Blizzard Entertainment'),
(40, 'Pokémon Sword and Shield', 'Game Freak'),
(41, 'The Sims 4', 'Maxis'),
(42, 'Starcraft II', 'Blizzard Entertainment'),
(43, 'Animal Crossing: New Horizons', 'Nintendo'),
(44, 'Cuphead', 'Studio MDHR'),
(45, 'Super Smash Bros. Ultimate', 'Nintendo'),
(46, 'Gran Turismo 7', 'Polyphony Digital'),
(47, 'Halo Infinite', '343 Industries'),
(48, 'The Binding of Isaac: Rebirth', 'Edmund McMillen'),
(49, 'Dark Souls', 'FromSoftware'),
(50, 'Red Dead Redemption', 'Rockstar Games'),
(51, 'Hitman 3', 'IO Interactive'),
(52, 'Dragon Age: Inquisition', 'BioWare'),
(53, 'GTA: San Andreas', 'Rockstar North'),
(54, 'No Man\'s Sky', 'Hello Games'),
(55, 'Need for Speed Heat', 'Ghost Games'),
(56, 'Mortal Kombat 11', 'NetherRealm Studios'),
(57, 'Rocket League', 'Psyonix'),
(58, 'Worms Battlegrounds', 'Team17'),
(59, 'Monster Hunter: World', 'Capcom'),
(60, 'Celeste', 'Maddy Makes Games'),
(61, 'Battlefield V', 'DICE'),
(62, 'The Division 2', 'Massive Entertainment'),
(63, 'Tetris Effect', 'Monstars Inc.'),
(64, 'Street Fighter V', 'Capcom'),
(65, 'Castlevania: Lords of Shadow', 'MercurySteam'),
(66, 'Watch Dogs 2', 'Ubisoft Montreal'),
(67, 'Tales of Arise', 'Bandai Namco Entertainment'),
(68, 'Persona 4 Golden', 'Atlus'),
(69, 'Bayonetta 2', 'PlatinumGames'),
(70, 'Super Mario Maker 2', 'Nintendo'),
(71, 'Injustice 2', 'NetherRealm Studios'),
(72, 'Apex Legends', 'Respawn Entertainment'),
(73, 'Doom (2016)', 'id Software'),
(74, 'F1 2020', 'Codemasters'),
(75, 'Pillars of Eternity II: Deadfire', 'Obsidian Entertainment'),
(76, 'XCOM 2', 'Firaxis Games'),
(77, 'Battlefront II', 'EA DICE'),
(78, 'Bloodstained: Ritual of the Night', 'ArtPlay'),
(79, 'Celeste', 'Maddy Makes Games'),
(80, 'Hollow Knight', 'Team Cherry'),
(81, 'The Outer Worlds', 'Obsidian Entertainment'),
(82, 'A Plague Tale: Innocence', 'Asobo Studio'),
(83, 'Kingdom Come: Deliverance', 'Warhorse Studios'),
(84, 'Farming Simulator 19', 'Giants Software'),
(85, 'F1 2023', 'Codemasters'),
(86, 'NBA 2K23', 'Visual Concepts'),
(87, 'Vampire: The Masquerade - Bloodlines 2', 'Hardsuit Labs'),
(88, 'Shenmue III', 'YS Net'),
(89, 'Final Fantasy VII Remake', 'Square Enix'),
(90, 'Resident Evil Village', 'Capcom'),
(91, 'Far Cry 5', 'Ubisoft Montreal'),
(92, 'Subnautica', 'Unknown Worlds Entertainment'),
(93, 'Goacik', 'Szadi'),
(94, 'essunia', 'grisza');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `gry`
--
ALTER TABLE `gry`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `szczegóły`
--
ALTER TABLE `szczegóły`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `twórcy`
--
ALTER TABLE `twórcy`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gry`
--
ALTER TABLE `gry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `szczegóły`
--
ALTER TABLE `szczegóły`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `twórcy`
--
ALTER TABLE `twórcy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
