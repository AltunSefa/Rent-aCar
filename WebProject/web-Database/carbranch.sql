use rent_a_car;
CREATE TABLE `carbranch` (
  `branchdId` int NOT NULL ,
  `branch` varchar(500) NOT NULL,
  PRIMARY KEY (`branchdId`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


INSERT INTO `carbranch` (branchdId,`branch`)  VALUES ( 1,'Antalya');
INSERT INTO `carbranch` (branchdId,`branch`)  VALUES ( 2,'Ordu');
INSERT INTO `carbranch` (branchdId,`branch`)  VALUES ( 3,'Samsun');
INSERT INTO `carbranch` (branchdId,`branch`)  VALUES ( 4,'Trabzon');