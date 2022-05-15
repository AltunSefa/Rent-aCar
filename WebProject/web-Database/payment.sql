use rent_a_car;
CREATE TABLE `payment` (
  `paymentId` int NOT NULL AUTO_INCREMENT,
  `userId` int NOT NULL,
  `Name_Surname` varchar(45) NOT NULL,
  `Credit-Card-No` varchar(45) NOT NULL,
   `Year` varchar(45) NOT NULL,
   `ccv` int NOT NULL,
  PRIMARY KEY (`paymentId`),
  foreign key (userId) References user_info (userId)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci