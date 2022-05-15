CREATE TABLE `carSegment` (
  `segmentId` int NOT NULL ,
  `segment` varchar(500) NOT NULL,
  PRIMARY KEY (`segmentId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
INSERT INTO `carSegment` (segmentId,segment)  VALUES ( 1,'Economic Rental Vehicles');
INSERT INTO `carSegment` (segmentId,segment)  VALUES ( 2,'Comfort Rental Cars');
INSERT INTO `carSegment` (segmentId,segment)  VALUES ( 3,'Prestige Rental Cars');
INSERT INTO `carSegment` (segmentId,segment)  VALUES ( 4,'Premium Rental Cars');
INSERT INTO `carSegment` (segmentId,segment)  VALUES ( 5,'Luxury Rental Cars');
INSERT INTO `carSegment` (segmentId,segment)  VALUES ( 6,' Van Rental Cars');