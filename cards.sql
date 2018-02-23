drop table if exists Cards;
CREATE TABLE `Cards` (
  `CardID` int(8) unsigned NOT NULL AUTO_INCREMENT,
  `State` varchar(16) DEFAULT NULL,
  `Binary` varchar(16) DEFAULT NULL,
  `Logic` varchar(16) DEFAULT NULL,
  `Description` text DEFAULT NULL,
  PRIMARY KEY (`CardID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;


