use rent_a_car;
CREATE TABLE `car_info` (
  `carId` int NOT NULL AUTO_INCREMENT,
  `carName` varchar(45) NOT NULL,
  `carBrand` varchar(45)  NOT NULL ,
  `carYear` varchar(45) NOT NULL,
  `price` int NOT NULL,
  `carImg` varchar(45) NOT NULL ,
  `carDsc` varchar(500)  NOT NULL,
  `carStatus` int NOT NULL,
  `carTypeId` int NOT NULL,
  `carSegmentId` int NOT NULL,
  `lisenceId` int NOT NULL,
  `gearId` int NOT NULL,
  `fuelId` int NOT NULL,
  `passengerId` int NOT NULL,
  `branchdId` int NOT NULL,
  
  PRIMARY KEY (`carId`),
  foreign key (carSegmentId) References carsegment (segmentId),
  foreign key (carTypeId) References cartype (typeId),
  foreign key (lisenceId) References carlisence (lisenceId),
  foreign key (gearId) References cargear (gearId),
  foreign key (fuelId) References carfuel (fuelId),
  foreign key (passengerId) References carpassenger (passengerId),
  foreign key (branchdId) References carbranch (branchdId) 
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci