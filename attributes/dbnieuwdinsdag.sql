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
) ENGINE=InnoDB AUTO_INCREMENT=72 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumpen data van tabel zaalhetlokaal.aanvulling: ~51 rows (ongeveer)
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
	(47, 'koffie, thee', 9, 2.20, 1, 'vergadering'),
	(48, 'frisdrank', 9, 2.30, 1, 'vergadering'),
	(49, 'vergader arrangement, onbeperkt koffie, thee, water, cake', 9, 6.00, 1, 'vergadering'),
	(50, 'broodjes buffet basis', 9, 14.50, 1, 'vergadering'),
	(51, 'broodjes buffet luxe', 9, 19.50, 1, 'vergadering'),
	(52, 'diverse soorten fruit', 9, 2.00, 1, 'vergadering'),
	(53, 'zaalhuur', 9, 175.00, 0, 'zaalhuur'),
	(54, 'geluid, 4 microfoons', 9, 75.00, 0, 'Facilitair'),
	(55, 'beamer met scherm en laptop', 9, 75.00, 0, 'Facilitair'),
	(56, 'flipover', 9, 75.00, 0, 'Facilitair'),
	(57, 'kookworkshop', 10, 70.00, 0, 'nvt'),
	(58, 'frisdrank', 5, 2.30, 0, 'drank'),
	(59, 'Pils tap', 5, 2.60, 0, 'drank'),
	(60, 'Pils fles', 5, 2.90, 0, 'drank'),
	(61, 'wijn, port, sherry, vermouth', 5, 3.50, 0, 'drank'),
	(62, 'sappen', 5, 2.60, 0, 'drank'),
	(63, 'koffie, thee', 5, 2.20, 0, 'drank'),
	(64, 'gedistllleerd binnenland', 5, 3.30, 0, 'drank'),
	(65, 'gedistllleerd buitenland', 5, 5.50, 0, 'drank'),
	(66, 'gebakjes vers van de bakker', 5, 3.50, 0, 'eten'),
	(67, 'petit four', 5, 3.00, 0, 'eten'),
	(68, 'plakje cake', 5, 1.50, 0, 'eten'),
	(69, 'gemengde bittergarnituur per stuk', 5, 0.65, 0, 'bittergarnituur'),
	(70, 'bord met 25 stukjes verschillende kazen', 5, 19.50, 0, 'bittergarnituur'),
	(71, 'bord met 25 stukjes verschillende hapjes', 5, 19.50, 0, 'bittergarnituur');
/*!40000 ALTER TABLE `aanvulling` ENABLE KEYS */;

-- Structuur van  tabel zaalhetlokaal.aanvulling_reservering wordt geschreven
CREATE TABLE IF NOT EXISTS `aanvulling_reservering` (
  `aanvulling_id` int(11) DEFAULT NULL,
  `reservering_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumpen data van tabel zaalhetlokaal.aanvulling_reservering: ~26 rows (ongeveer)
/*!40000 ALTER TABLE `aanvulling_reservering` DISABLE KEYS */;
INSERT INTO `aanvulling_reservering` (`aanvulling_id`, `reservering_id`) VALUES
	(6, 229),
	(8, 229),
	(12, 229),
	(24, 229),
	(6, 230),
	(8, 230),
	(12, 230),
	(24, 230),
	(6, 231),
	(8, 231),
	(12, 231),
	(24, 231),
	(6, 232),
	(8, 232),
	(12, 232),
	(24, 232),
	(6, 233),
	(8, 233),
	(12, 233),
	(24, 233),
	(6, 234),
	(8, 234),
	(12, 234),
	(24, 234),
	(6, 235),
	(8, 235),
	(12, 235),
	(24, 235),
	(6, 236),
	(8, 236),
	(12, 236),
	(24, 236),
	(6, 237),
	(8, 237),
	(12, 237),
	(24, 237),
	(6, 238),
	(8, 238),
	(12, 238),
	(24, 238),
	(6, 239),
	(8, 239),
	(12, 239),
	(24, 239);
/*!40000 ALTER TABLE `aanvulling_reservering` ENABLE KEYS */;

-- Structuur van  tabel zaalhetlokaal.adminor wordt geschreven
CREATE TABLE IF NOT EXISTS `adminor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `password` text COLLATE utf8_unicode_ci,
  `username` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumpen data van tabel zaalhetlokaal.adminor: ~7 rows (ongeveer)
/*!40000 ALTER TABLE `adminor` DISABLE KEYS */;
INSERT INTO `adminor` (`id`, `password`, `username`) VALUES
	(2, '$2y$10$MzfBJO8CMD.GmzcVbvYH3eodkMqjEbHfoBgxu3GEIIWWfHh7Rgoju', 'tim'),
	(3, '$2y$10$.T3lJAAt8oc3yEbSs4kG6.CD0f8RC7yttGmaj53Yn/DKna/26BGo2', 'tim2'),
	(4, '$2y$10$XhkQw4G4wNBz9/smuj8IOekYyvnIbzQmrhm0PrW2sWidsXpoMG52m', 'tim'),
	(5, '$2y$10$gzkGB5.6HsCsL53ud2TZdemtmg7WEQ1KgSIsXhj3wied6zNuIc7Pe', 'tim'),
	(6, '$2y$10$8jGGOznT8JmUovYSJVpjmujKPBRCTfYgIBxMcxDJ5J/uXv/w0c3VC', 'tim'),
	(7, '$2y$10$fTEkp.X68Hv1XBQaoDI.HeaFXflEWCjo6N47ovDWMORHbXNJjKEle', 'tim'),
	(8, '$2y$10$o5bPTrFAvR1X2rMtF7Uww.Mg3371A79E8vcJaIex8Fy0CGPDllWjC', 'tim'),
	(9, '$2y$10$pakkSPKVR20INiB1TLZ.DOV.qqHEKo1Q3LWUm6FWUznQjuATH/08i', 'tim2'),
	(10, '$2y$10$vm5S5f4T5OviOdBtGbI8oe4sC6JcqaUf6ooOxv4x4ZghsWvKV1fNG', 'tim2');
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
) ENGINE=InnoDB AUTO_INCREMENT=221 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumpen data van tabel zaalhetlokaal.persoon: ~35 rows (ongeveer)
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
	(191, 't', 'Mouse', 'Mouse@disney.com', '0348-402391', '2019-01-20 20:04:45'),
	(192, 'tim', 'de vos', 'timedevos@gmail.com', '03484032391', '2019-01-22 14:25:43'),
	(193, 'tim', 'de vos', 'ongeintim@gmail.com', 'test', '2019-01-22 14:26:34'),
	(194, 'tim', 'de vos', 'ongeintim@gmail.com', 'test', '2019-01-22 14:28:08'),
	(195, 'tim', 'de vos', 'ongeintim@gmail.com', 'test', '2019-01-22 14:28:18'),
	(196, 'tim', 'de vos', 'timedevos@gmail.com', '0348402391', '2019-01-22 14:55:25'),
	(197, 'tim', 'de vos', 'timedevos@gmail.com', '0348402391', '2019-01-22 15:05:43'),
	(198, 'tim', 'de vos', 'timedevos@gmail.com', '0348402391', '2019-01-22 15:06:32'),
	(199, 'tim', 'de vos', 'timedevos@gmail.com', '0348402391', '2019-01-22 15:53:18'),
	(200, 'tim', 'de vos', 'ongeintim@gmail.com', '0348402391', '2019-01-22 16:04:53'),
	(201, 'tim', 'de vos', 'ongeintim@gmail.com', '0348402391', '2019-01-22 16:05:57'),
	(202, 'tim', 'de vos', 'ongeintim@gmail.com', '0348402391', '2019-01-22 16:06:00'),
	(203, 'tim', 'de vos', 'timedevos@gmail.com', '23', '2019-01-22 16:13:36'),
	(204, 'tim', 'de vos', 'ongeintim@gmail.com', '0348402391', '2019-01-22 16:27:08'),
	(205, 'tim', 'de vos', 'timedevos@gmail.com', '0348402391', '2019-01-23 00:47:33'),
	(206, 'tim', 'de vos', 'timedevos@gmail.com', '0348402391', '2019-01-23 00:48:36'),
	(207, 'tim', 'de vos', 'timedevos@gmail.com', '0235', '2019-01-23 00:49:31'),
	(208, 'tim', 'de vos', 'timedevos@gmail.com', '0235', '2019-01-23 00:50:45'),
	(209, 'tim', 'de vos', 'timedevos@gmail.com', '0235', '2019-01-23 00:55:08'),
	(210, 'tim', 'de vos', 'timedevos@gmail.com', '03469332', '2019-01-23 01:00:41'),
	(211, 'tim', 'de vos', 'timedevos@gmail.com', '03469332', '2019-01-23 01:03:19'),
	(212, 'tim', 'de vos', 'timedevos@gmail.com', '03469332', '2019-01-23 01:03:40'),
	(213, 'tim', 'de vos', 'timedevos@gmail.com', '03469332', '2019-01-23 01:04:23'),
	(214, 'tim', 'de vos', 'timedevos@gmail.com', '03469332', '2019-01-23 01:05:36'),
	(215, 'tim', 'de vos', 'timedevos@gmail.com', '03469332', '2019-01-23 01:07:45'),
	(216, 'tim', 'de vos', 'timedevos@gmail.com', '03469332', '2019-01-23 01:07:46'),
	(217, 'tim', 'de vos', 'timedevos@gmail.com', '03469332', '2019-01-23 01:07:57'),
	(218, 'tim', 'de vos', 'timedevos@gmail.com', '03469332', '2019-01-23 01:19:11'),
	(219, 'tim', 'de vos', 'timedevos@gmail.com', '03469332', '2019-01-23 01:21:19'),
	(220, 'tim', 'de vos', 'timedevos@gmail.com', '03469332', '2019-01-23 01:25:20');
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
) ENGINE=InnoDB AUTO_INCREMENT=240 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumpen data van tabel zaalhetlokaal.reservering: ~6 rows (ongeveer)
/*!40000 ALTER TABLE `reservering` DISABLE KEYS */;
INSERT INTO `reservering` (`id`, `aangemaakt`, `dagdeelm`, `dagdeelo`, `dagdeela`, `accepted`, `personen`, `dag`, `arragement`, `persoon_id`) VALUES
	(229, '2019-01-23 01:00:41', 0, 1, 0, 0, 31, '2019-01-26', 'buffet', 210),
	(230, '2019-01-23 01:03:19', 0, 1, 0, 0, 31, '2019-01-26', 'buffet', 211),
	(231, '2019-01-23 01:03:40', 0, 1, 0, 0, 31, '2019-01-26', 'buffet', 212),
	(232, '2019-01-23 01:04:23', 0, 1, 0, 0, 31, '2019-01-26', 'buffet', 213),
	(233, '2019-01-23 01:05:36', 0, 1, 0, 0, 31, '2019-01-26', 'buffet', 214),
	(234, '2019-01-23 01:07:45', 0, 1, 0, 0, 31, '2019-01-26', 'buffet', 215),
	(235, '2019-01-23 01:07:46', 0, 1, 0, 0, 31, '2019-01-26', 'buffet', 216),
	(236, '2019-01-23 01:07:57', 0, 1, 0, 0, 31, '2019-01-26', 'buffet', 217),
	(237, '2019-01-23 01:19:11', 0, 1, 0, 0, 31, '2019-01-26', 'buffet', 218),
	(238, '2019-01-23 01:21:19', 0, 1, 0, 0, 31, '2019-01-26', 'buffet', 219),
	(239, '2019-01-23 01:25:20', 0, 1, 0, 0, 31, '2019-01-26', 'buffet', 220);
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
