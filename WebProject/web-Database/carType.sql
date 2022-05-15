CREATE TABLE `carType` (
  `typeId` int NOT NULL ,
  `type` varchar(500) NOT NULL,
  PRIMARY KEY (`typeId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
INSERT INTO `carType` (typeId,`type`)  VALUES ( 1,'Sedan');
INSERT INTO `carType` (typeId,`type`)  VALUES ( 2,'Hatchback');
INSERT INTO `carType` (typeId,`type`)  VALUES ( 3,'Sport');
INSERT INTO `carType` (typeId,`type`)  VALUES ( 4,'SUV');
INSERT INTO `carType` (typeId,`type`)  VALUES ( 5,'Caravan');
INSERT INTO `carType` (typeId,`type`)  VALUES ( 6,'Pick Up');