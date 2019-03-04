-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 09, 2018 at 08:49 AM
-- Server version: 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodcourt`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `CID` int(32) NOT NULL AUTO_INCREMENT,
  `Order_Id` int(32) NOT NULL,
  `F_Id` int(32) NOT NULL,
  `Qty` int(32) NOT NULL,
  PRIMARY KEY (`CID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `foodchart`
--

DROP TABLE IF EXISTS `foodchart`;
CREATE TABLE IF NOT EXISTS `foodchart` (
  `F_Id` int(32) NOT NULL AUTO_INCREMENT,
  `F_Name` varchar(32) NOT NULL,
  `F_Sales` int(32) NOT NULL,
  PRIMARY KEY (`F_Id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `foodchart`
--

INSERT INTO `foodchart` (`F_Id`, `F_Name`, `F_Sales`) VALUES
(1, 'Chapathi', 20),
(2, 'Porota', 10),
(3, 'Appam', 0),
(4, 'Dosha', 0),
(5, 'Meals', 50),
(6, 'Biriyani', 0),
(7, 'Chicken', 0),
(8, 'Beef', 60);

-- --------------------------------------------------------

--
-- Table structure for table `foodmenu`
--

DROP TABLE IF EXISTS `foodmenu`;
CREATE TABLE IF NOT EXISTS `foodmenu` (
  `FID` int(3) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Rate` int(6) NOT NULL,
  `Quantity` int(5) NOT NULL,
  `Available_Quantity` int(32) NOT NULL DEFAULT '0',
  PRIMARY KEY (`FID`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `foodmenu`
--

INSERT INTO `foodmenu` (`FID`, `Name`, `Rate`, `Quantity`, `Available_Quantity`) VALUES
(1, 'chapathi', 8, 50, 0),
(2, 'Porota', 8, 50, 0),
(3, 'Appam', 8, 50, 0),
(4, 'Chicken Curry', 95, 50, 50);

-- --------------------------------------------------------

--
-- Table structure for table `foodorders`
--

DROP TABLE IF EXISTS `foodorders`;
CREATE TABLE IF NOT EXISTS `foodorders` (
  `Foodorder_Id` int(32) NOT NULL AUTO_INCREMENT,
  `Order_Id` int(32) NOT NULL,
  `FID` int(32) NOT NULL,
  `Qty` int(32) NOT NULL,
  PRIMARY KEY (`Foodorder_Id`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `Order_Id` int(32) NOT NULL AUTO_INCREMENT,
  `UID` int(32) NOT NULL,
  `Order_Status` enum('Active','Cancelled','Delivered') NOT NULL DEFAULT 'Active',
  `Date_Time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Order_Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `todaysfood`
--

DROP TABLE IF EXISTS `todaysfood`;
CREATE TABLE IF NOT EXISTS `todaysfood` (
  `TFID` int(10) NOT NULL,
  `F_Name` varchar(50) NOT NULL,
  `F_Qty` int(32) NOT NULL,
  `Avail_Qty` int(32) NOT NULL,
  `F_Rate` int(32) NOT NULL,
  PRIMARY KEY (`TFID`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `todaysfood`
--

INSERT INTO `todaysfood` (`TFID`, `F_Name`, `F_Qty`, `Avail_Qty`, `F_Rate`) VALUES
(1, 'Chapathi', 50, 50, 8),
(2, 'Porota', 50, 50, 8),
(3, 'Chicken Curry', 10, 10, 95),
(4, 'Beef Fry', 50, 50, 120);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `UID` int(10) NOT NULL AUTO_INCREMENT,
  `First_Name` varchar(32) NOT NULL,
  `Last_Name` varchar(32) DEFAULT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Admission_No` int(4) NOT NULL,
  `Email_Id` varchar(50) NOT NULL,
  `Mobile_No` bigint(12) NOT NULL,
  PRIMARY KEY (`UID`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UID`, `First_Name`, `Last_Name`, `Username`, `Password`, `Admission_No`, `Email_Id`, `Mobile_No`) VALUES
(1, 'admin', 'admin', 'admin', 'admin', 0, 'admin@admin.admin', 0),
(2, 'Jiss', 'Johnson', 'jiss', 'jiss', 8009, 'jissjohnson@it.ajce.in', 9544497526),
(3, 'user', 'user', 'user', 'user', 1, 'user@user.user', 0),
(4, 'user2', 'user2', 'user2', 'user2', 2, 'user2@user.user', 0),
(5, 'user3', 'user3', 'user', 'user3', 3, 'user3@user.user', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
