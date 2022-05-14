use rent_a_car;
CREATE TABLE `cargear` (
  `gearId` int NOT NULL ,
  `gear` varchar(500) NOT NULL,
  PRIMARY KEY (`gearId`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


INSERT INTO `cargear` (gearId,`gear`)  VALUES ( 1,'manuel');
INSERT INTO `cargear` (gearId,`gear`)  VALUES ( 2,'automatic');

