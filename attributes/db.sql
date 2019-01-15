-- --------------------------------------------------------
-- Host:                         127.0.0.1
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
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumpen data van tabel zaalhetlokaal.aanvulling: ~11 rows (ongeveer)
/*!40000 ALTER TABLE `aanvulling` DISABLE KEYS */;
INSERT INTO `aanvulling` (`id`, `aanvulling`, `arragement`, `prijs`) VALUES
	(1, 'club barbecue', 4, 15.34),
	(2, 'party barbecue', 4, 26.50),
	(3, 'club barbecue luxe', 4, 33.50),
	(4, 'Buffet', 1, 24.50),
	(5, 'Hollands stampppot buffet', 1, 24.50),
	(6, 'italiaans buffet', 1, 24.50),
	(7, 'Feestavond arrangement', 1, 24.50),
	(8, 'dessert buffet ', 1, 12.50),
	(9, 'ijscokar ', 1, 6.50),
	(10, 'kookworkshop ', 6, 75.00),
	(11, 'koffietafel royal', 5, 17.50);
/*!40000 ALTER TABLE `aanvulling` ENABLE KEYS */;

-- Structuur van  tabel zaalhetlokaal.aanvulling_reservering wordt geschreven
CREATE TABLE IF NOT EXISTS `aanvulling_reservering` (
  `aanvulling_id` int(11) DEFAULT NULL,
  `reservering_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumpen data van tabel zaalhetlokaal.aanvulling_reservering: ~23 rows (ongeveer)
/*!40000 ALTER TABLE `aanvulling_reservering` DISABLE KEYS */;
INSERT INTO `aanvulling_reservering` (`aanvulling_id`, `reservering_id`) VALUES
	(7, 148),
	(8, 148),
	(9, 148),
	(6, 149),
	(8, 149),
	(4, 150),
	(8, 150),
	(4, 151),
	(8, 151),
	(4, 152),
	(8, 152),
	(4, 153),
	(8, 153),
	(9, 153),
	(4, 154),
	(8, 154),
	(9, 154),
	(4, 155),
	(8, 155),
	(9, 155),
	(7, 156),
	(8, 156),
	(9, 156);
/*!40000 ALTER TABLE `aanvulling_reservering` ENABLE KEYS */;

-- Structuur van  tabel zaalhetlokaal.persoon wordt geschreven
CREATE TABLE IF NOT EXISTS `persoon` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `naam` varchar(50) COLLATE utf8_unicode_ci DEFAULT '0',
  `achternaam` varchar(50) COLLATE utf8_unicode_ci DEFAULT '0',
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT '0',
  `tel` int(11) DEFAULT '0',
  `aangemaakt` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=138 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumpen data van tabel zaalhetlokaal.persoon: ~9 rows (ongeveer)
/*!40000 ALTER TABLE `persoon` DISABLE KEYS */;
INSERT INTO `persoon` (`id`, `naam`, `achternaam`, `email`, `tel`, `aangemaakt`) VALUES
	(129, 'Mickey', 'Mouse', '0', 0, '2019-01-14 16:10:05'),
	(130, 'minnie', 'Mouse', '0', 0, '2019-01-14 16:20:21'),
	(131, 'Mickey', 'Mouse', '0', 0, '2019-01-14 16:24:22'),
	(132, 'Mickey', 'Mouse', '0', 0, '2019-01-14 16:25:57'),
	(133, 'Mickey', 'Mouse', '0', 0, '2019-01-14 16:26:21'),
	(134, 'Mickey', 'Mouse', '0', 0, '2019-01-14 16:26:44'),
	(135, 'Mickey', 'Mouse', '0', 0, '2019-01-14 16:30:40'),
	(136, 'Mickey', 'Mouse', '0', 0, '2019-01-14 16:31:20'),
	(137, 'Mickey', 'Mouse', '0', 0, '2019-01-14 16:33:53');
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
) ENGINE=InnoDB AUTO_INCREMENT=157 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumpen data van tabel zaalhetlokaal.reservering: ~9 rows (ongeveer)
/*!40000 ALTER TABLE `reservering` DISABLE KEYS */;
INSERT INTO `reservering` (`id`, `aangemaakt`, `dagdeelm`, `dagdeelo`, `dagdeela`, `accepted`, `personen`, `dag`, `arragement`, `persoon_id`) VALUES
	(148, '2019-01-14 16:10:05', 1, 1, 1, 0, 45, '2019-01-31', 'buffet', 129),
	(149, '2019-01-14 16:20:21', 0, 0, 1, 0, 119, '2019-01-15', 'buffet', 130),
	(150, '2019-01-14 16:24:22', 1, 0, 0, 0, 45, '2019-01-04', 'buffet', 131),
	(151, '2019-01-14 16:25:57', 1, 0, 0, 0, 45, '2019-01-04', 'buffet', 132),
	(152, '2019-01-14 16:26:21', 1, 0, 0, 0, 45, '2019-01-04', 'buffet', 133),
	(153, '2019-01-14 16:26:44', 1, 0, 0, 0, 34, '2019-01-18', 'buffet', 134),
	(154, '2019-01-14 16:30:40', 1, 0, 0, 0, 34, '2019-01-18', 'buffet', 135),
	(155, '2019-01-14 16:31:20', 1, 0, 0, 0, 34, '2019-01-18', 'buffet', 136),
	(156, '2019-01-14 16:33:53', 1, 1, 1, 0, 45, '2019-01-31', 'buffet', 137);
/*!40000 ALTER TABLE `reservering` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
