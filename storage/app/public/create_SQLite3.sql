CREATE TABLE `emp_login` (
    `empid` int(100) NOT NULL,
    `Emp_Email` varchar(50) NOT NULL,
    `Emp_Password` varchar(50) NOT NULL,
    PRIMARY KEY (`empid`)
);

CREATE TABLE `payment` (
    `id` int(30) NOT NULL,
    `Name` varchar(30) NOT NULL,
    `Email` varchar(30) NOT NULL,
    `RoomType` varchar(30) NOT NULL,
    `Bed` varchar(30) NOT NULL,
    `NoofRoom` int(30) NOT NULL,
    `cin` date NOT NULL,
    `cout` date NOT NULL,
    `noofdays` int(30) NOT NULL,
    `roomtotal` double(8, 2) NOT NULL,
    `bedtotal` double(8, 2) NOT NULL,
    `meal` varchar(30) NOT NULL,
    `mealtotal` double(8, 2) NOT NULL,
    `finaltotal` double(8, 2) NOT NULL,
    PRIMARY KEY (`id`)
);

CREATE TABLE `room` (
    `id` int(30) NOT NULL,
    `type` varchar(50) NOT NULL,
    `bedding` varchar(50) NOT NULL,
    PRIMARY KEY (`id`)
);
CREATE TABLE `roombook` (
    `id` int(10) NOT NULL,
    `Name` varchar(50) NOT NULL,
    `Email` varchar(50) NOT NULL,
    `Country` varchar(30) NOT NULL,
    `Phone` varchar(30) NOT NULL,
    `RoomType` varchar(30) NOT NULL,
    `Bed` varchar(30) NOT NULL,
    `Meal` varchar(30) NOT NULL,
    `NoofRoom` varchar(30) NOT NULL,
    `cin` date NOT NULL,
    `cout` date NOT NULL,
    `nodays` int(50) NOT NULL,
    `stat` varchar(30) NOT NULL,
    PRIMARY KEY (`id`)
);
CREATE TABLE `signup` (
    `UserID` int(100) NOT NULL,
    `Username` varchar(50) NOT NULL,
    `Email` varchar(50) NOT NULL,
    `Password` varchar(50) NOT NULL,
    PRIMARY KEY (`UserID`)
);
CREATE TABLE `staff` (
    `id` int(30) NOT NULL,
    `name` varchar(30) NOT NULL,
    `work` varchar(30) NOT NULL,
    PRIMARY KEY (`id`)
);