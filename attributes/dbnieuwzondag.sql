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
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumpen data van tabel zaalhetlokaal.aanvulling: ~44 rows (ongeveer)
/*!40000 ALTER TABLE `aanvulling` DISABLE KEYS */;
INSERT INTO `aanvulling` (`id`, `aanvulling`, `arragement`, `prijs`, `pakket`, `groep`) VALUES
	(1, 'club barbecue', 4, 23.50, 0, 'nvt'),
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
	(44, 'groente garnituur', 1, 2.00, 1, 'groen'),
	(45, 'High Tea', 8, 21.00, 0, 'nvt'),
	(46, 'koffietafel royal luxe', 5, 19.50, 0, 'nvt'),
	(47, 'koffie, thee', 9, 2.20, 0, 'nvt'),
	(48, 'frisdrank', 9, 2.30, 0, 'nvt'),
	(49, 'vergader arrangement, onbeperkt koffie, thee, water, cake', 9, 6.00, 0, 'nvt'),
	(50, 'broodjes buffet basis', 9, 14.50, 0, 'nvt'),
	(51, 'broodjes buffet luxe', 9, 19.50, 0, 'nvt'),
	(52, 'diverse soorten fruit', 9, 2.00, 0, 'nvt'),
	(53, 'zaalhuur', 9, 175.00, 0, 'nvt'),
	(54, 'geluid, 4 microfoons', 9, 75.00, 0, 'Facilitair'),
	(55, 'beamer met scherm en laptop', 9, 75.00, 0, 'Facilitair'),
	(56, 'flipover', 9, 75.00, 0, 'Facilitair'),
	(57, 'kookworkshop', 10, 70.00, 0, 'nvt');
/*!40000 ALTER TABLE `aanvulling` ENABLE KEYS */;

-- Structuur van  tabel zaalhetlokaal.aanvulling_reservering wordt geschreven
CREATE TABLE IF NOT EXISTS `aanvulling_reservering` (
  `aanvulling_id` int(11) DEFAULT NULL,
  `reservering_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumpen data van tabel zaalhetlokaal.aanvulling_reservering: ~35 rows (ongeveer)
/*!40000 ALTER TABLE `aanvulling_reservering` DISABLE KEYS */;
INSERT INTO `aanvulling_reservering` (`aanvulling_id`, `reservering_id`) VALUES
	(1, 205),
	(47, 205),
	(4, 210),
	(8, 210),
	(14, 210),
	(47, 210);
/*!40000 ALTER TABLE `aanvulling_reservering` ENABLE KEYS */;

-- Structuur van  tabel zaalhetlokaal.adminor wordt geschreven
CREATE TABLE IF NOT EXISTS `adminor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `password` text COLLATE utf8_unicode_ci,
  `username` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumpen data van tabel zaalhetlokaal.adminor: ~7 rows (ongeveer)
/*!40000 ALTER TABLE `adminor` DISABLE KEYS */;
INSERT INTO `adminor` (`id`, `password`, `username`) VALUES
	(2, '$2y$10$MzfBJO8CMD.GmzcVbvYH3eodkMqjEbHfoBgxu3GEIIWWfHh7Rgoju', 'tim'),
	(3, '$2y$10$.T3lJAAt8oc3yEbSs4kG6.CD0f8RC7yttGmaj53Yn/DKna/26BGo2', 'tim2'),
	(4, '$2y$10$XhkQw4G4wNBz9/smuj8IOekYyvnIbzQmrhm0PrW2sWidsXpoMG52m', 'tim'),
	(5, '$2y$10$gzkGB5.6HsCsL53ud2TZdemtmg7WEQ1KgSIsXhj3wied6zNuIc7Pe', 'tim'),
	(6, '$2y$10$8jGGOznT8JmUovYSJVpjmujKPBRCTfYgIBxMcxDJ5J/uXv/w0c3VC', 'tim'),
	(7, '$2y$10$fTEkp.X68Hv1XBQaoDI.HeaFXflEWCjo6N47ovDWMORHbXNJjKEle', 'tim'),
	(8, '$2y$10$o5bPTrFAvR1X2rMtF7Uww.Mg3371A79E8vcJaIex8Fy0CGPDllWjC', 'tim');
/*!40000 ALTER TABLE `adminor` ENABLE KEYS */;

-- Structuur van  tabel zaalhetlokaal.persoon wordt geschreven
CREATE TABLE IF NOT EXISTS `persoon` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `naam` varchar(50) COLLATE utf8_unicode_ci DEFAULT '0',
  `achternaam` varchar(50) COLLATE utf8_unicode_ci DEFAULT '0',
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT '0',
  `tel` varchar(50) COLLATE utf8_unicode_ci DEFAULT '0',
  `aangemaakt` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=192 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumpen data van tabel zaalhetlokaal.persoon: ~8 rows (ongeveer)
/*!40000 ALTER TABLE `persoon` DISABLE KEYS */;
INSERT INTO `persoon` (`id`, `naam`, `achternaam`, `email`, `tel`, `aangemaakt`) VALUES
	(159, 'Mickey', 'Mouse', 'Mouse@disney.com', '0348-402391', '2019-01-19 16:09:57'),
	(160, 'Mickey', 'Mouse', 'Mouse@disney.com', '0348-402391', '2019-01-19 17:58:05'),
	(161, 'Mickey', 'Mouse', 'Mouse@disney.com', '0348-402391', '2019-01-19 17:59:36'),
	(162, 'Mickey', 'Mouse', 'Mouse@disney.com', '0348-402391', '2019-01-19 18:00:53'),
	(163, 'Mickey', 'Mouse', 'Mouse@disney.com', '0348-402391', '2019-01-19 23:35:00'),
	(164, 'Mickey', 'Mouse', 'Mouse@disney.com', '0348-402391', '2019-01-19 23:36:29'),
	(165, 'Mickey', 'Mouse', 'Mouse@disney.com', '0348-402391', '2019-01-19 23:38:06'),
	(166, 'Mickey', 'Mouse', 'Mouse@disney.com', '0348-402391', '2019-01-19 23:38:42'),
	(167, 'Mickey', 'Mouse', 'Mouse@disney.com', '0348-402391', '2019-01-19 23:38:51'),
	(168, 'oke', 'Mouse', 'Mouse@disney.com', '0348-402391', '2019-01-19 23:46:22'),
	(169, 'tim', 'de vos', 'Mouse@disney.com', '0348-402391', '2019-01-20 00:23:04'),
	(170, 'Mickey', 'Mouse', 'Mouse@disney.com', '0348-402391', '2019-01-20 00:51:11'),
	(171, 'Mickey', 'Mouse', 'Mouse@disney.com', '0348-402391', '2019-01-20 14:43:35'),
	(172, 'Mickey', 'Mouse', 'Mouse@disney.com', '0348-402391', '2019-01-20 15:45:44'),
	(173, 'Mickey', 'Mouse', 'Mouse@disney.com', '0348-402391', '2019-01-20 16:00:32'),
	(174, 'Mickey', 'Mouse', 'Mouse@disney.com', '0348-402391', '2019-01-20 17:39:40'),
	(175, 'Mickey', 'Mouse', 'Mouse@disney.com', '0348-402391', '2019-01-20 17:40:34'),
	(176, 'Mickey', 'Mouse', 'Mouse@disney.com', '0348-402391', '2019-01-20 17:41:18'),
	(177, 'Mickey', 'Mouse', 'Mouse@disney.com', '0348-402391', '2019-01-20 17:47:12'),
	(178, 'Mickey', 'Mouse', 'Mouse@disney.com', '0348-402391', '2019-01-20 17:49:59'),
	(179, 'Mickey', 'Mouse', 'Mouse@disney.com', '0348-402391', '2019-01-20 17:51:29'),
	(180, 'Mickey', 'Mouse', 'Mouse@disney.com', '0348-402391', '2019-01-20 17:53:38'),
	(181, 'Mickey', 'Mouse', 'Mouse@disney.com', '0348-402391', '2019-01-20 17:54:02'),
	(182, 'Mickey', 'Mouse', 'Mouse@disney.com', '0348-402391', '2019-01-20 17:55:24'),
	(183, 'Mickey', 'Mouse', 'Mouse@disney.com', '0348-402391', '2019-01-20 17:59:23'),
	(184, 'Mickey', 'Mouse', 'Mouse@disney.com', '0348-402391', '2019-01-20 18:10:03'),
	(185, 'Mickey', 'Mouse', 'Mouse@disney.com', '0348-402391', '2019-01-20 18:32:24'),
	(186, 'Mickey', 'Mouse', 'Mouse@disney.com', '0348-402391', '2019-01-20 18:33:38'),
	(187, 'Mickey', 'Mouse', 'Mouse@disney.com', '0348-402391', '2019-01-20 18:39:34'),
	(188, 'Mickey', 'Mouse', 'Mouse@disney.com', '0348-402391', '2019-01-20 18:57:01'),
	(189, 'Mickey', 'Mouse', 'Mouse@disney.com', '0348-402391', '2019-01-20 19:12:08'),
	(190, 'Mickey', 'Mouse', 'Mouse@disney.com', '0348-402391', '2019-01-20 19:13:10'),
	(191, 't', 'Mouse', 'Mouse@disney.com', '0348-402391', '2019-01-20 20:04:45');
/*!40000 ALTER TABLE `persoon` ENABLE KEYS */;

-- Structuur van  view zaalhetlokaal.resenper wordt geschreven
-- Tijdelijke tabel wordt aangemaakt zodat we geen VIEW afhankelijkheidsfouten krijgen
CREATE TABLE `resenper` (
	`idres` INT(11) NOT NULL,
	`dagdeelm` TINYINT(1) NULL,
	`dagdeelo` TINYINT(1) NULL,
	`dagdeela` TINYINT(1) NULL,
	`accepted` TINYINT(1) NULL,
	`dag` DATE NULL,
	`arragement` TEXT NULL COLLATE 'utf8_unicode_ci',
	`naam` VARCHAR(50) NULL COLLATE 'utf8_unicode_ci',
	`achternaam` VARCHAR(50) NULL COLLATE 'utf8_unicode_ci',
	`email` VARCHAR(50) NULL COLLATE 'utf8_unicode_ci',
	`tel` VARCHAR(50) NULL COLLATE 'utf8_unicode_ci',
	`idper` INT(11) NOT NULL
) ENGINE=MyISAM;

-- Structuur van  view zaalhetlokaal.resenper2 wordt geschreven
-- Tijdelijke tabel wordt aangemaakt zodat we geen VIEW afhankelijkheidsfouten krijgen
CREATE TABLE `resenper2` (
	`idres` INT(11) NOT NULL,
	`dagdeelm` TINYINT(1) NULL,
	`dagdeelo` TINYINT(1) NULL,
	`dagdeela` TINYINT(1) NULL,
	`accepted` TINYINT(1) NULL,
	`dag` DATE NULL,
	`arragement` TEXT NULL COLLATE 'utf8_unicode_ci',
	`personen` INT(11) NULL,
	`naam` VARCHAR(50) NULL COLLATE 'utf8_unicode_ci',
	`achternaam` VARCHAR(50) NULL COLLATE 'utf8_unicode_ci',
	`email` VARCHAR(50) NULL COLLATE 'utf8_unicode_ci',
	`tel` VARCHAR(50) NULL COLLATE 'utf8_unicode_ci',
	`idper` INT(11) NOT NULL
) ENGINE=MyISAM;

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
) ENGINE=InnoDB AUTO_INCREMENT=211 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumpen data van tabel zaalhetlokaal.reservering: ~20 rows (ongeveer)
/*!40000 ALTER TABLE `reservering` DISABLE KEYS */;
INSERT INTO `reservering` (`id`, `aangemaakt`, `dagdeelm`, `dagdeelo`, `dagdeela`, `accepted`, `personen`, `dag`, `arragement`, `persoon_id`) VALUES
	(205, '2019-01-20 18:33:38', 0, 0, 1, 1, 34, '2019-01-23', 'bbq', 186),
	(210, '2019-01-20 20:04:45', 1, 0, 0, 1, 35, '2019-01-31', 'buffet', 191);
/*!40000 ALTER TABLE `reservering` ENABLE KEYS */;

-- Structuur van  view zaalhetlokaal.resenper wordt geschreven
-- Tijdelijke tabel wordt verwijderd, en definitieve VIEW wordt aangemaakt.
DROP TABLE IF EXISTS `resenper`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` VIEW `resenper` AS SELECT reservering.id as idres, reservering.dagdeelm, reservering.dagdeelo, reservering.dagdeela, reservering.accepted, reservering.dag, reservering.arragement, persoon.naam, persoon.achternaam, persoon.email, persoon.tel, persoon.id as idper
FROM reservering
INNER JOIN persoon ON reservering.persoon_id = persoon.id ;

-- Structuur van  view zaalhetlokaal.resenper2 wordt geschreven
-- Tijdelijke tabel wordt verwijderd, en definitieve VIEW wordt aangemaakt.
DROP TABLE IF EXISTS `resenper2`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` VIEW `resenper2` AS SELECT reservering.id as idres, reservering.dagdeelm, reservering.dagdeelo, reservering.dagdeela, reservering.accepted, reservering.dag, reservering.arragement,
reservering.personen, persoon.naam, persoon.achternaam, persoon.email, persoon.tel, persoon.id as idper
FROM reservering
INNER JOIN persoon ON reservering.persoon_id = persoon.id ;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
