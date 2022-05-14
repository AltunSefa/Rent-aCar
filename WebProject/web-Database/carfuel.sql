use rent_a_car;
CREATE TABLE `carfuel` (
  `fuelId` int NOT NULL ,
  `fuel` varchar(500) NOT NULL,
  PRIMARY KEY (`fuelId`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


INSERT INTO `carfuel` (fuelId,`fuel`)  VALUES ( 1,'gasoline');
INSERT INTO `carfuel` (fuelId,`fuel`)  VALUES ( 2,'diesel');