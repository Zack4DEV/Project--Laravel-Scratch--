CREATE TABLE `emp_login` (
  `empid` int(100) NOT NULL,
  `Emp_Email` varchar(100) NOT NULL,
  `Emp_Password` varchar(100) NOT NULL,
  PRIMARY KEY (`empid`)
);

CREATE TABLE `payment` (
  `id` int(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `RoomType` varchar(100) NOT NULL,
  `Bed` varchar(100) NOT NULL,
  `NoofRoom` int(100) NOT NULL,
  `cin` date NOT NULL,
  `cout` date NOT NULL,
  `noofdays` int(100) NOT NULL,
  `roomtotal` double(32, 2)  NOT NULL,
  `bedtotal` double(32, 2)  NOT NULL,
  `meal` varchar(100) NOT NULL,
  `mealtotal` double(32, 2)  NOT NULL,
  `finaltotal` double(32, 2)  NOT NULL,
  PRIMARY KEY (`id`)
);

CREATE TABLE `room` (
  `id` int(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `bedding` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
);
CREATE TABLE `roombook` (
  `id` int(10) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Country` varchar(100) NOT NULL,
  `Phone` varchar(100) NOT NULL,
  `RoomType` varchar(100) NOT NULL,
  `Bed` varchar(100) NOT NULL,
  `Meal` varchar(100) NOT NULL,
  `NoofRoom` varchar(100) NOT NULL,
  `cin` date NOT NULL,
  `cout` date NOT NULL,
  `nodays` int(50) NOT NULL,
  `stat` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
);
CREATE TABLE `signup` (
  `UserID` int(100) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  PRIMARY KEY (`UserID`)
);
CREATE TABLE `staff` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `work` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
);
UPDATE `emp_login`
SET `Emp_Email` = 'staff@z-hotel.uk', `Emp_Password` = 'staff'
WHERE `empid` = 1;
