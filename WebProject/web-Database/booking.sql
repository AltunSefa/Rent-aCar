use rent_a_car;
CREATE TABLE `booking` (
  `bookingId` int NOT NULL AUTO_INCREMENT,
  `paymentId` int NOT NULL ,
  `carId` int NOT NULL,
  `userId` int NOT NULL,
  `bookingDate` date DEFAULT NULL,
  `purchaseDate` date DEFAULT NULL,
  `returnDate` date DEFAULT NULL,
  `amount` int NOT NULL,
  PRIMARY KEY (`bookingId`),
  foreign key (carId) References car_info (carId),
  foreign key (userId) References user_info (userId),
  foreign key (paymentId) References payment (paymentId)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci