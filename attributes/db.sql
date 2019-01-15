-- --------------------------------------------------------
-- Host:                         localhost
-- Server versie:                5.7.19 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Versie:              9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Databasestructuur van zaalhetlokaal wordt geschreven
CREATE DATABASE IF NOT EXISTS `zaalhetlokaal` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;
USE `zaalhetlokaal`;

-- Structuur van  tabel zaalhetlokaal.aanvulling wordt geschreven
CREATE TABLE IF NOT EXISTS `aanvulling` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `aanvulling` text COLLATE utf8_unicode_ci,
  `arragement` int(11) DEFAULT NULL,
  `prijs` decimal(10,2) DEFAULT NULL,
  `pakket` int(11) DEFAULT '0',
  `groep` varchar(50) COLLATE utf8_unicode_ci DEFAULT 'nvt',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumpen data van tabel zaalhetlokaal.aanvulling: ~44 rows (ongeveer)
/*!40000 ALTER TABLE `aanvulling` DISABLE KEYS */;
INSERT INTO `aanvulling` (`id`, `aanvulling`, `arragement`, `prijs`, `pakket`, `groep`) VALUES
	(1, 'club barbecue', 4, 15.34, 0, 'nvt'),
	(2, 'party barbecue', 4, 26.50, 0, 'nvt'),
	(3, 'club barbecue luxe', 4, 33.50, 0, 'nvt'),
	(4, 'Buffet', 1, 24.50, 0, 'buffet'),
	(5, 'Hollands stampppot buffet', 1, 24.50, 0, 'buffet_stampot'),
	(6, 'italiaans buffet', 1, 24.50, 0, 'buffet_italiaans'),
	(7, 'Feestavond arrangement', 1, 24.50, 0, 'buffet_feestavond'),
	(8, 'dessert buffet ', 1, 12.50, 1, 'buffet_extra'),
	(9, 'ijscokar ', 1, 6.50, 1, 'buffet_extra'),
	(10, 'kookworkshop ', 6, 75.00, 0, 'nvt'),
	(11, 'koffietafel royal', 5, 17.50, 0, 'nvt'),
	(12, 'carpaccio van tonijn', 1, 3.25, 1, 'vis'),
	(13, 'gerookte zalm', 1, 3.00, 1, 'vis'),
	(14, 'gerookte laks', 1, 3.25, 1, 'vis'),
	(15, 'gerookte paling', 1, 4.00, 1, 'vis'),
	(16, 'gerookte forel', 1, 2.75, 1, 'vis'),
	(17, 'zoute haring', 1, 2.25, 1, 'vis'),
	(18, 'vispate', 1, 2.50, 1, 'vis'),
	(19, 'mosseltjes, garnalen, inktvis in tomaat-knoflooksaus', 1, 2.75, 1, 'vis'),
	(20, 'gebakken scampi\'s in knoflooksaus', 1, 2.75, 1, 'vis'),
	(21, 'gebakken mosselen met ui en paprika', 1, 2.75, 1, 'vis'),
	(22, 'kibbeling met remouladesaus', 1, 2.75, 1, 'vis'),
	(23, 'gepocheerde zalm in witte wijnsaus', 1, 3.50, 1, 'vis'),
	(24, 'Ardennen ham met meloen', 1, 2.75, 1, 'vlees'),
	(25, 'carpaccio van rundvlees', 1, 3.25, 1, 'vlees'),
	(26, 'diverse soorten Franse en Hollandse kaas', 1, 3.00, 1, 'vlees'),
	(27, 'warme beenham met mosterd-honingsaus', 1, 4.00, 1, 'vlees'),
	(28, 'gemarineerde drumsticks', 1, 2.25, 1, 'vlees'),
	(29, 'stoofschotel lamsvlees', 1, 2.50, 1, 'vlees'),
	(30, 'kip in kerriesaus', 1, 2.50, 1, 'vlees'),
	(31, 'gehaktballetjes in pindasaus', 1, 2.25, 1, 'vlees'),
	(32, 'warme rollade, gebakken uien, paprika', 1, 2.25, 1, 'vlees'),
	(33, 'shoarma met knoflooksaus', 1, 2.25, 1, 'vlees'),
	(34, 'Javaanse sate in satesaus', 1, 2.75, 1, 'vlees'),
	(35, 'aardappelsalade', 1, 2.25, 1, 'groen'),
	(36, 'pastasalade met tomaat, parmazaan en olijven', 1, 2.75, 1, 'groen'),
	(37, 'slamix met spekjes, pijnboom pitten en French dressing', 1, 2.50, 1, 'groen'),
	(38, 'groente lasanga', 1, 3.75, 1, 'groen'),
	(39, 'gebakken champignons', 1, 2.25, 1, 'groen'),
	(40, 'witte rijst', 1, 1.75, 1, 'groen'),
	(41, 'risotto', 1, 2.00, 1, 'groen'),
	(42, 'pommes gratin', 1, 2.00, 1, 'groen'),
	(43, 'frites of aardappelkroketjes', 1, 2.00, 1, 'groen'),
	(44, 'groente garnituur', 1, 2.00, 1, 'groen');
/*!40000 ALTER TABLE `aanvulling` ENABLE KEYS */;

-- Structuur van  tabel zaalhetlokaal.aanvulling_reservering wordt geschreven
CREATE TABLE IF NOT EXISTS `aanvulling_reservering` (
  `aanvulling_id` int(11) DEFAULT NULL,
  `reservering_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumpen data van tabel zaalhetlokaal.aanvulling_reservering: ~34 rows (ongeveer)
/*!40000 ALTER TABLE `aanvulling_reservering` DISABLE KEYS */;
INSERT INTO `aanvulling_reservering` (`aanvulling_id`, `reservering_id`) VALUES
	(4, 157),
	(8, 157),
	(4, 158),
	(8, 158),
	(4, 159),
	(8, 159),
	(4, 160),
	(8, 160),
	(18, 160),
	(19, 160),
	(22, 160),
	(4, 161),
	(8, 161),
	(18, 161),
	(19, 161),
	(22, 161),
	(5, 162),
	(8, 162),
	(9, 162),
	(15, 162),
	(16, 162),
	(17, 162),
	(19, 162),
	(20, 162),
	(21, 162),
	(0, 163),
	(0, 164),
	(0, 165),
	(0, 166),
	(0, 167),
	(0, 168),
	(4, 169),
	(8, 169),
	(22, 169);
/*!40000 ALTER TABLE `aanvulling_reservering` ENABLE KEYS */;

-- Structuur van  tabel zaalhetlokaal.adminor wordt geschreven
CREATE TABLE IF NOT EXISTS `adminor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `password` text COLLATE utf8_unicode_ci,
  `username` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumpen data van tabel zaalhetlokaal.adminor: ~4 rows (ongeveer)
/*!40000 ALTER TABLE `adminor` DISABLE KEYS */;
INSERT INTO `adminor` (`id`, `password`, `username`) VALUES
	(2, '$2y$10$MzfBJO8CMD.GmzcVbvYH3eodkMqjEbHfoBgxu3GEIIWWfHh7Rgoju', 'tim'),
	(3, '$2y$10$.T3lJAAt8oc3yEbSs4kG6.CD0f8RC7yttGmaj53Yn/DKna/26BGo2', 'tim2'),
	(4, '$2y$10$XhkQw4G4wNBz9/smuj8IOekYyvnIbzQmrhm0PrW2sWidsXpoMG52m', 'tim'),
	(5, '$2y$10$gzkGB5.6HsCsL53ud2TZdemtmg7WEQ1KgSIsXhj3wied6zNuIc7Pe', 'tim');
/*!40000 ALTER TABLE `adminor` ENABLE KEYS */;

-- Structuur van  tabel zaalhetlokaal.persoon wordt geschreven
CREATE TABLE IF NOT EXISTS `persoon` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `naam` varchar(50) COLLATE utf8_unicode_ci DEFAULT '0',
  `achternaam` varchar(50) COLLATE utf8_unicode_ci DEFAULT '0',
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT '0',
  `tel` int(11) DEFAULT '0',
  `aangemaakt` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=151 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumpen data van tabel zaalhetlokaal.persoon: ~13 rows (ongeveer)
/*!40000 ALTER TABLE `persoon` DISABLE KEYS */;
INSERT INTO `persoon` (`id`, `naam`, `achternaam`, `email`, `tel`, `aangemaakt`) VALUES
	(138, 'Mickey', 'Mouse', '0', 0, '2019-01-15 19:08:31'),
	(139, 'Mickey', 'Mouse', '0', 0, '2019-01-15 19:25:39'),
	(140, 'Mickey', 'Mouse', '0', 0, '2019-01-15 19:26:05'),
	(141, 'Mickey', 'Mouse', '0', 0, '2019-01-15 19:27:00'),
	(142, 'Mickey', 'Mouse', '0', 0, '2019-01-15 19:28:28'),
	(143, 'Mickey', 'Mouse', '0', 0, '2019-01-15 21:18:56'),
	(144, 'Mickey', 'Mouse', '0', 0, '2019-01-15 21:24:05'),
	(145, 'Mickey', 'Mouse', '0', 0, '2019-01-15 21:25:10'),
	(146, 'Mickey', 'Mouse', '0', 0, '2019-01-15 21:25:40'),
	(147, 'Mickey', 'Mouse', '0', 0, '2019-01-15 21:26:12'),
	(148, 'Mickey', 'Mouse', '0', 0, '2019-01-15 21:27:09'),
	(149, 'Mickey', 'Mouse', '0', 0, '2019-01-15 21:27:42'),
	(150, 'tim', 'Mouse', '0', 0, '2019-01-15 21:28:30');
/*!40000 ALTER TABLE `persoon` ENABLE KEYS */;

-- Structuur van  tabel zaalhetlokaal.reservering wordt geschreven
CREATE TABLE IF NOT EXISTS `reservering` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `aangemaakt` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `dagdeelm` tinyint(1) DEFAULT NULL,
  `dagdeelo` tinyint(1) DEFAULT NULL,
  `dagdeela` tinyint(1) DEFAULT NULL,
  `accepted` tinyint(1) DEFAULT '0',
  `personen` int(11) DEFAULT NULL,
  `dag` date DEFAULT NULL,
  `arragement` text COLLATE utf8_unicode_ci,
  `persoon_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=170 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumpen data van tabel zaalhetlokaal.reservering: ~13 rows (ongeveer)
/*!40000 ALTER TABLE `reservering` DISABLE KEYS */;
INSERT INTO `reservering` (`id`, `aangemaakt`, `dagdeelm`, `dagdeelo`, `dagdeela`, `accepted`, `personen`, `dag`, `arragement`, `persoon_id`) VALUES
	(157, '2019-01-15 19:08:31', 1, 0, 0, 0, 12, '2019-01-17', 'buffet', 138),
	(158, '2019-01-15 19:25:39', 1, 0, 0, 0, 28, '2019-01-17', 'buffet', 139),
	(159, '2019-01-15 19:26:05', 1, 0, 0, 0, 28, '2019-01-17', 'buffet', 140),
	(160, '2019-01-15 19:27:00', 1, 0, 0, 0, 28, '2019-01-17', 'buffet', 141),
	(161, '2019-01-15 19:28:28', 1, 0, 0, 0, 28, '2019-01-17', 'buffet', 142),
	(162, '2019-01-15 21:18:56', 1, 1, 1, 0, 23, '2019-01-16', 'buffet', 143),
	(163, '2019-01-15 21:24:05', 1, 0, 0, 0, 45, '2019-01-16', 'bbq', 144),
	(164, '2019-01-15 21:25:10', 1, 0, 0, 0, 45, '2019-01-16', 'bbq', 145),
	(165, '2019-01-15 21:25:40', 1, 0, 0, 0, 45, '2019-01-16', 'bbq', 146),
	(166, '2019-01-15 21:26:12', 1, 0, 0, 0, 45, '2019-01-16', 'bbq', 147),
	(167, '2019-01-15 21:27:09', 1, 0, 0, 0, 45, '2019-01-16', 'bbq', 148),
	(168, '2019-01-15 21:27:42', 1, 0, 0, 0, 45, '2019-01-16', 'bbq', 149),
	(169, '2019-01-15 21:28:30', 1, 0, 0, 0, 56, '2019-01-25', 'buffet', 150);
/*!40000 ALTER TABLE `reservering` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
