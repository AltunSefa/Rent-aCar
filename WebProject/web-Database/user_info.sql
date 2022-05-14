use rent_a_car;
CREATE TABLE `user_info` (
  `userId` int NOT NULL AUTO_INCREMENT,
  `userName` varchar(45) NOT NULL,
  `eMail` varchar(45) NOT NULL,
  `phoneNumber` varchar(45) DEFAULT NULL,
  `password` varchar(45) NOT NULL,
  `age` int ,
  `gender` varchar(45) ,
  `date` date DEFAULT NULL,
  `userImg` varchar(45) ,
  PRIMARY KEY (`userId`),
  UNIQUE KEY `email_UNIQUE` (`eMail`),
  UNIQUE KEY `phone_number_UNIQUE` (`phoneNumber`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci