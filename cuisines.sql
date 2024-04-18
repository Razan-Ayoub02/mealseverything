DROP TABLE IF EXISTS `cuisines`;
CREATE TABLE IF NOT EXISTS `cuisines` (
  `cuisine_id` int NOT NULL AUTO_INCREMENT,
  `cuisine-name` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`cuisine_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `cuisines`
--

INSERT INTO `cuisines` (`cuisine_id`, `cuisine-name`) VALUES
(1, 'lebanese'),
(2, 'japanese');