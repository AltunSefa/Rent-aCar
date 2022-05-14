use rent_a_car;
CREATE TABLE `reservation` (
  `reservationId` int NOT NULL AUTO_INCREMENT,
  `carId` int NOT NULL,
  `userId` int NOT NULL,
  `reservationDate` date DEFAULT NULL,
  `purchaseDate` date DEFAULT NULL,
  `returnDate` date DEFAULT NULL,
  PRIMARY KEY (`reservationId`),
  foreign key (carId) References car_info (carId),
  foreign key (userId) References user_info (userId)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci