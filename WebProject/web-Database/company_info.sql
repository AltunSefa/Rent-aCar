use rent_a_car;
CREATE TABLE `company_info` (
  `companyId` int(1) NOT NULL ,
  `companyPassword` varchar(45) NOT NULL,
  PRIMARY KEY (`companyId`)
  )ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
  
  insert into company_info (companyId,companyPassword) value (1,'gold');