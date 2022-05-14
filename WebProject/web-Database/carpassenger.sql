use rent_a_car;
CREATE TABLE `carpassenger` (
  `passengerId` int NOT NULL ,
  `passenger` varchar(500) NOT NULL,
  PRIMARY KEY (`passengerId`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


INSERT INTO `carpassenger` (passengerId,`passenger`)  VALUES ( 1,'1-2');
INSERT INTO `carpassenger` (passengerId,`passenger`)  VALUES ( 2,'1-3');
INSERT INTO `carpassenger` (passengerId,`passenger`)  VALUES ( 3,'1-4');
INSERT INTO `carpassenger` (passengerId,`passenger`)  VALUES ( 4,'1-6');