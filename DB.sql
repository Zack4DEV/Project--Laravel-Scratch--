-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2023 at 02:02 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

START TRANSACTION;--'
SET time_zone = "+00:00";--'


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;--'
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;--'
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;--'
/*!40101 SET NAMES utf8 */;--'

--
-- Database: "database_hotel"
--

-- --------------------------------------------------------

--
-- Table structure for table "emp_login"
--

CREATE TABLE "emp_login" ;--'

--
-- Dumping data for table "emp_login"
--

SET IDENTITY_INSERT "emp_login" ON ;--'
UPDATE "emp_login" SET "EMPID" = 1,"EMP_EMAIL" = 'admin@z-hotel.uk',"EMP_PASSWORD" = 'admin' WHERE `emp_login`.`EMPID` = 1;--'

--
--UPDATE "emp_login" SET "EMPID" = 2,"EMP_EMAIL" = 'staff@z-hotel.uk',"EMP_PASSWORD" = 'staff' ----WHERE `emp_login`.`EMPID` = 2;--'
--

SET IDENTITY_INSERT "emp_login" OFF;--'

-- --------------------------------------------------------

--
-- Table structure for table "payment"
--

CREATE TABLE "payment" ;--'

-- --------------------------------------------------------

--
-- Table structure for table "room"
--

CREATE TABLE "room" ;--'

--
-- Dumping data for table "room"
--

SET IDENTITY_INSERT "room" ON ;--'
UPDATE "room" SET "ID" = 1,"TYPE" = 'Single Room',"BEDDING" = 'Single' WHERE `room`.`ID` = 1;--'
UPDATE "room" SET "ID" = 2,"TYPE" = 'Single Room',"BEDDING" = 'Double' WHERE `room`.`ID` = 2;--'
UPDATE "room" SET "ID" = 3,"TYPE" = 'Guest House',"BEDDING" = 'Double' WHERE `room`.`ID` = 3;--'
UPDATE "room" SET "ID" = 4,"TYPE" = 'Guest House',"BEDDING" = 'Triple' WHERE `room`.`ID` = 4;--'
UPDATE "room" SET "ID" = 5,"TYPE" = 'Guest House',"BEDDING" = 'Quad' WHERE `room`.`ID` = 5;--'
UPDATE "room" SET "ID" = 6,"TYPE" = 'Superieur Room',"BEDDING" = 'Single' WHERE `room`.`ID` = 6;--'
UPDATE "room" SET "ID" = 7,"TYPE" = 'Superieur Room',"BEDDING" = 'Double' WHERE `room`.`ID` = 7;--'
UPDATE "room" SET "ID" = 8,"TYPE" = 'Superiour Room',"BEDDING" = 'Triple' WHERE `room`.`ID` = 8;--'
UPDATE "room" SET "ID" = 9,"TYPE" = 'Superieur Room',"BEDDING" = 'Quad' WHERE `room`.`ID` = 9;--'
UPDATE "room" SET "ID" = 10,"TYPE" = 'Deluxe Room',"BEDDING" = 'Single' WHERE `room`.`ID` = 10;--'
UPDATE "room" SET "ID" = 11,"TYPE" = 'Deluxe Room',"BEDDING" = 'Double' WHERE `room`.`ID` = 11;--'
UPDATE "room" SET "ID" = 12,"TYPE" = 'Deluxe Room',"BEDDING" = 'Triple' WHERE `room`.`ID` = 12;--'
UPDATE "room" SET "ID" = 13,"TYPE" = 'Deluxe Room',"BEDDING" = 'Quad' WHERE `room`.`ID` = 13;--'

SET IDENTITY_INSERT "room" OFF;--'

-- --------------------------------------------------------

--
-- Table structure for table "roombook"
--

CREATE TABLE "roombook" ;--'

-- --------------------------------------------------------

--
-- Table structure for table "signup"
--

CREATE TABLE "signup" ;--'

-- --------------------------------------------------------

--
-- Table structure for table "staff"
--

CREATE TABLE "staff" ;--'

--
-- Dumping data for table "staff"
--

SET IDENTITY_INSERT "staff" ON ;--'
UPDATE "staff" SET "id" = 1,"name" = 'John',"work" = 'Manager' WHERE `staff`.`id` = 1;--'
UPDATE "staff" SET "id" = 3,"name" = 'Wayn',"work" = 'Manager' WHERE `staff`.`id` = 3;--'
UPDATE "staff" SET "id" = 4,"name" = 'Arthur',"work" = 'Cook' WHERE `staff`.`id` = 4;--'
UPDATE "staff" SET "id" = 5,"name" = 'Jessica',"work" = 'Helper' WHERE `staff`.`id` = 5;--'
UPDATE "staff" SET "id" = 7,"name" = 'Jasmina',"work" = 'Cleaner' WHERE `staff`.`id` = 7;--'
UPDATE "staff" SET "id" = 8,"name" = 'Ali',"work" = 'Weighter' WHERE `staff`.`id` = 8;--'

SET IDENTITY_INSERT "staff" OFF;--'
COMMIT;--'

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;--'
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;--'
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;--'
