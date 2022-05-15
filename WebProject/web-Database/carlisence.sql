use rent_a_car;
CREATE TABLE `carlisence` (
  `lisenceId` int NOT NULL ,
  `lisence` varchar(500) NOT NULL,
  PRIMARY KEY (`lisenceId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


INSERT INTO `carlisence` (lisenceId,`lisence`)  VALUES ( 1,'a');
INSERT INTO `carlisence` (lisenceId,`lisence`)  VALUES ( 2,'b');
INSERT INTO `carlisence` (lisenceId,`lisence`)  VALUES ( 3,'c');