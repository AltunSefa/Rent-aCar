use rent_a_car;
CREATE TABLE `userdescription` (
  `dscId` int NOT NULL AUTO_INCREMENT,
  `dsc` varchar(500) NOT NULL,
  `eMail` varchar(45) NOT NULL,
 `dateD` date DEFAULT NULL,
  PRIMARY KEY (`dscId`),
  foreign key (eMail) References user_info (eMail)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci