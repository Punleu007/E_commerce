/*
SQLyog Ultimate v12.4.3 (64 bit)
MySQL - 5.6.35 : Database - e_commerce
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`e_commerce` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `e_commerce`;

/*Table structure for table `optiongroups` */

DROP TABLE IF EXISTS `optiongroups`;

CREATE TABLE `optiongroups` (
  `OptionGroupID` int(11) NOT NULL AUTO_INCREMENT,
  `OptionGroupName` varchar(50) COLLATE latin1_german2_ci DEFAULT NULL,
  PRIMARY KEY (`OptionGroupID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COLLATE=latin1_german2_ci;

/*Data for the table `optiongroups` */

insert  into `optiongroups`(`OptionGroupID`,`OptionGroupName`) values 
(1,'color'),
(2,'size');

/*Table structure for table `options` */

DROP TABLE IF EXISTS `options`;

CREATE TABLE `options` (
  `OptionID` int(11) NOT NULL AUTO_INCREMENT,
  `OptionGroupID` int(11) DEFAULT NULL,
  `OptionName` varchar(50) COLLATE latin1_german2_ci DEFAULT NULL,
  PRIMARY KEY (`OptionID`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1 COLLATE=latin1_german2_ci;

/*Data for the table `options` */

insert  into `options`(`OptionID`,`OptionGroupID`,`OptionName`) values 
(1,1,'red'),
(2,1,'blue'),
(3,1,'green'),
(4,2,'S'),
(5,2,'M'),
(6,2,'L'),
(7,2,'XL'),
(8,2,'XXL');

/*Table structure for table `orderdetails` */

DROP TABLE IF EXISTS `orderdetails`;

CREATE TABLE `orderdetails` (
  `DetailID` int(11) NOT NULL AUTO_INCREMENT,
  `DetailOrderID` int(11) NOT NULL,
  `DetailProductID` int(11) NOT NULL,
  `DetailName` varchar(250) COLLATE latin1_german2_ci NOT NULL,
  `DetailPrice` float NOT NULL,
  `DetailSKU` varchar(50) COLLATE latin1_german2_ci NOT NULL,
  `DetailQuantity` int(11) NOT NULL,
  PRIMARY KEY (`DetailID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_german2_ci;

/*Data for the table `orderdetails` */

/*Table structure for table `orders` */

DROP TABLE IF EXISTS `orders`;

CREATE TABLE `orders` (
  `OrderID` int(11) NOT NULL AUTO_INCREMENT,
  `OrderUserID` int(11) NOT NULL,
  `OrderAmount` float NOT NULL,
  `OrderShipName` varchar(100) COLLATE latin1_german2_ci NOT NULL,
  `OrderShipAddress` varchar(100) COLLATE latin1_german2_ci NOT NULL,
  `OrderShipAddress2` varchar(100) COLLATE latin1_german2_ci NOT NULL,
  `OrderCity` varchar(50) COLLATE latin1_german2_ci NOT NULL,
  `OrderState` varchar(50) COLLATE latin1_german2_ci NOT NULL,
  `OrderZip` varchar(20) COLLATE latin1_german2_ci NOT NULL,
  `OrderCountry` varchar(50) COLLATE latin1_german2_ci NOT NULL,
  `OrderPhone` varchar(20) COLLATE latin1_german2_ci NOT NULL,
  `OrderFax` varchar(20) COLLATE latin1_german2_ci NOT NULL,
  `OrderShipping` float NOT NULL,
  `OrderTax` float NOT NULL,
  `OrderEmail` varchar(100) COLLATE latin1_german2_ci NOT NULL,
  `OrderDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `OrderShipped` tinyint(1) NOT NULL DEFAULT '0',
  `OrderTrackingNumber` varchar(80) COLLATE latin1_german2_ci DEFAULT NULL,
  PRIMARY KEY (`OrderID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_german2_ci;

/*Data for the table `orders` */

/*Table structure for table `productcategories` */

DROP TABLE IF EXISTS `productcategories`;

CREATE TABLE `productcategories` (
  `CategoryID` int(11) NOT NULL AUTO_INCREMENT,
  `CategoryName` varchar(50) COLLATE latin1_german2_ci NOT NULL,
  PRIMARY KEY (`CategoryID`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 COLLATE=latin1_german2_ci;

/*Data for the table `productcategories` */

insert  into `productcategories`(`CategoryID`,`CategoryName`) values 
(1,'Rice'),
(2,'Corn'),
(3,'Cucumber'),
(4,'Pepper'),
(5,'Palm Sugar');

/*Table structure for table `productoptions` */

DROP TABLE IF EXISTS `productoptions`;

CREATE TABLE `productoptions` (
  `ProductOptionID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ProductID` int(10) unsigned NOT NULL,
  `OptionID` int(10) unsigned NOT NULL,
  `OptionPriceIncrement` double DEFAULT NULL,
  `OptionGroupID` int(11) NOT NULL,
  PRIMARY KEY (`ProductOptionID`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1 COLLATE=latin1_german2_ci;

/*Data for the table `productoptions` */

insert  into `productoptions`(`ProductOptionID`,`ProductID`,`OptionID`,`OptionPriceIncrement`,`OptionGroupID`) values 
(1,1,1,0,1),
(2,1,2,0,1),
(3,1,3,0,1),
(4,1,4,0,2),
(5,1,5,0,2),
(6,1,6,0,2),
(7,1,7,2,2),
(8,1,8,2,2);

/*Table structure for table `products` */

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `ProductID` int(12) NOT NULL AUTO_INCREMENT,
  `ProductSKU` varchar(50) COLLATE latin1_german2_ci NOT NULL,
  `ProductName` varchar(100) COLLATE latin1_german2_ci NOT NULL,
  `ProductPrice` float NOT NULL,
  `ProductWeight` float NOT NULL,
  `ProductCartDesc` varchar(250) COLLATE latin1_german2_ci NOT NULL,
  `ProductShortDesc` varchar(1000) COLLATE latin1_german2_ci NOT NULL,
  `ProductLongDesc` text COLLATE latin1_german2_ci NOT NULL,
  `ProductThumb` varchar(100) COLLATE latin1_german2_ci NOT NULL,
  `ProductImage` longblob NOT NULL,
  `ProductCategoryID` int(11) DEFAULT NULL,
  `ProductUpdateDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ProductStock` float DEFAULT NULL,
  `ProductLive` tinyint(1) DEFAULT '0',
  `ProductUnlimited` tinyint(1) DEFAULT '1',
  `ProductLocation` varchar(250) COLLATE latin1_german2_ci DEFAULT NULL,
  `UserID` int(11) NOT NULL,
  PRIMARY KEY (`ProductID`)
) ENGINE=MyISAM AUTO_INCREMENT=1008 DEFAULT CHARSET=latin1 COLLATE=latin1_german2_ci;

/*Data for the table `products` */

insert  into `products`(`ProductID`,`ProductSKU`,`ProductName`,`ProductPrice`,`ProductWeight`,`ProductCartDesc`,`ProductShortDesc`,`ProductLongDesc`,`ProductThumb`,`ProductImage`,`ProductCategoryID`,`ProductUpdateDate`,`ProductStock`,`ProductLive`,`ProductUnlimited`,`ProductLocation`,`UserID`) values 
(1,'000-0001','Neang Khon',9.99,3,'where silk clothes','decoration items','Buying local products in Cambodian create jobs for Cambodians and support the national economy. It helps as well to preserve and develop traditional Khmer handicrafts. ','3','\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0',1,'2013-06-13 08:00:50',100,1,0,'PNH',1),
(992,'000-0004','Neang Minh',80,10,'proprietary design',' poor communities','Buying local products in Cambodian create jobs for Cambodians and support the national economy. It helps as well to preserve and develop traditional Khmer handicrafts.','4','\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0',1,'2018-02-06 23:38:11',10,4,1,'kompong cham',1),
(2,'000-0002','Phka Khnei',179.99,8,'managing various program','development of rural ','When you buy fair trade products, you adhere and support the fair trade practices by ensuring safe and hygienic working conditions, non-exploitation of children, paying living wages.','4','\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0',1,'2013-07-26 02:04:36',20,2,1,'REP',1),
(3,'000-0003','Phkar Malis',12,5,'members manufacture','support livelihood','The government registered a label to help the visitor to distinguish the local made products from the fake imported products. If you find the label Angkor Handicraft Association (AHA),','5','\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0',1,'2018-02-21 23:38:06',50,3,1,'Kompot',1),
(993,'000-0005','Sweet Corn ',30,15,'ackaging materials','build their philosophy','When you buy fair trade products, you adhere and support the fair trade practices by ensuring safe and hygienic working conditions, non-exploitation of children, paying living wages.','3','\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0',2,'2018-02-07 23:40:52',40,5,1,'Kep',1),
(994,'000-0006','Dent Corn',40,20,'Cambodia silk','expatriates and local','The government registered a label to help the visitor to distinguish the local made products from the fake imported products. If you find the label Angkor Handicraft Association (AHA), ','4','\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0',2,'2018-02-08 23:43:41',90,6,1,'REP',1),
(995,'000-0007','Flint Corn',50,25,'local materials','russei sell different','When you buy fair trade products, you adhere and support the fair trade practices by ensuring safe and hygienic working conditions, non-exploitation of children, paying living wages.','5','\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0',2,'2018-02-09 23:46:03',70,7,1,'PNH',1),
(996,'000-0008','Flour Corn',60,30,'landmine survivor','products internationally','The government registered a label to help the visitor to distinguish the local made products from the fake imported products. If you find the label Angkor Handicraft Association (AHA)','3','\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0',2,'2018-02-10 23:48:08',80,8,1,'Kep',1),
(997,'000-0009','Pod Corn',70,35,'Friends restaurant','different project','Buying local products in Cambodian create jobs for Cambodians and support the national economy. It helps as well to preserve and develop traditional Khmer handicrafts.','4','\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0',2,'2018-02-11 23:52:44',90,9,1,'PNH',1),
(998,'000-00010','Slicing Cucumbers ',80,40,'visiting Angkor','reduce the country','When you buy fair trade products, you adhere and support the fair trade practices by ensuring safe and hygienic working conditions, non-exploitation of children, paying living wages.','5','\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0',3,'2018-02-12 23:52:56',100,10,1,'Takeo',1),
(999,'000-00011','Pickling Cucumbers',90,45,'Cambodians and support','Buying local products','The government registered a label to help the visitor to distinguish the local made products from the fake imported products. If you find the label Angkor Handicraft Association (AHA),','3','\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0',3,'2018-02-13 23:54:46',110,11,1,'Kompong Channg',1),
(1000,'000-00012','Specialty Cucumbers ',100,50,'authenticity of their product, ','cultural richness of Siem reap.','you will have the guaranty of the product. Likewise, this label support entrepreneurship and sustainable business practices. These models create a real impact to alleviate poverty.','4','\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0',3,'2018-02-14 00:01:04',115,12,1,'Kompong Cham',1),
(1001,'000-00013','Container Cucumbers ',110,55,'Cambodian create jobs','ensuring safe and hygienic','When you buy fair trade products, you adhere and support the fair trade practices by ensuring safe and hygienic working conditions, non-exploitation of children, paying living wages.','5','\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0',3,'2018-02-15 00:03:23',120,13,1,'REP',1),
(1002,'000-00014','Muncher Slicing Cucumber',120,60,'develop traditional Khmer ','fair trade products','The government registered a label to help the visitor to distinguish the local made products from the fake imported products. If you find the label Angkor Handicraft Association (AHA),','3','\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0',3,'2018-02-16 00:14:37',125,14,1,'PNH',1),
(1003,'000-00015','Black pepper',130.1,65,' working conditions','non-exploitation','you will have the guaranty of the product. Likewise, this label support entrepreneurship and sustainable business practices. These models create a real impact to alleviate poverty','4','\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0',4,'2018-02-17 00:14:43',130,15,1,'Kompot',1),
(1005,'000-00017','White pepper',150,75,'produces a range of stylish ','contemporary products ethically made.','All items are made with fair trade products and are a part of a collaboration with many social enterprises such as Cambodia knits, khmer creation and Fariweave.','3','\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0',4,'2018-02-20 00:21:22',140,17,1,'Kep',1),
(1004,'000-00016','	Green pepper',140.2,70,'importation of goods','To guarantee the authenticity','build their philosophy by ensuring incomes in order to reduce the country’s poverty and reduce the importation of goods.  ','5','\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0',4,'2018-02-15 00:19:28',135,16,1,'Kompong Cham',1),
(1006,'000-00018','palm sugar',160,80,'decoration items and toys.','contributes to the development','is a workshop, where silk clothes, scarf, bags are created by victims of the anti-personal mines.','4','\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0',5,'2018-02-22 00:24:04',145,18,1,'PNH',1),
(1007,'000-00019','palm sugar',170,85,' service and next day ',' ','through Paypal and cash at delivery','5','\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0',5,'2018-02-23 00:34:32',150,19,1,'REP',1);

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `UserID` int(11) NOT NULL AUTO_INCREMENT,
  `UserEmail` varchar(500) COLLATE latin1_german2_ci DEFAULT NULL,
  `UserPassword` varchar(500) COLLATE latin1_german2_ci DEFAULT NULL,
  `UserFirstName` varchar(50) COLLATE latin1_german2_ci DEFAULT NULL,
  `UserLastName` varchar(50) COLLATE latin1_german2_ci DEFAULT NULL,
  `UserCity` varchar(90) COLLATE latin1_german2_ci DEFAULT NULL,
  `UserState` varchar(20) COLLATE latin1_german2_ci DEFAULT NULL,
  `UserZip` varchar(12) COLLATE latin1_german2_ci DEFAULT NULL,
  `UserEmailVerified` tinyint(1) DEFAULT '0',
  `UserRegistrationDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `UserVerificationCode` varchar(20) COLLATE latin1_german2_ci DEFAULT NULL,
  `UserIP` varchar(50) COLLATE latin1_german2_ci DEFAULT NULL,
  `UserPhone` varchar(20) COLLATE latin1_german2_ci DEFAULT NULL,
  `UserFax` varchar(20) COLLATE latin1_german2_ci DEFAULT NULL,
  `UserCountry` varchar(20) COLLATE latin1_german2_ci DEFAULT NULL,
  `UserAddress` varchar(100) COLLATE latin1_german2_ci DEFAULT NULL,
  `UserAddress2` varchar(50) COLLATE latin1_german2_ci DEFAULT NULL,
  PRIMARY KEY (`UserID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_german2_ci;

/*Data for the table `users` */

insert  into `users`(`UserID`,`UserEmail`,`UserPassword`,`UserFirstName`,`UserLastName`,`UserCity`,`UserState`,`UserZip`,`UserEmailVerified`,`UserRegistrationDate`,`UserVerificationCode`,`UserIP`,`UserPhone`,`UserFax`,`UserCountry`,`UserAddress`,`UserAddress2`) values 
(1,'mengty','123','mengty','vong','Phnom Penh','#217','12000',0,'2018-02-26 22:27:36','sdfdgoer34gsdfg534f5','125','092790725','092790725','Phnom Penh','Phnom Penh','Phnom Penh');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
