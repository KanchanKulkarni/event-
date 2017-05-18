CREATE DATABASE  IF NOT EXISTS `eventmanagement` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `eventmanagement`;
-- MySQL dump 10.13  Distrib 5.7.18, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: eventmanagement
-- ------------------------------------------------------
-- Server version	5.7.18-0ubuntu0.16.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `event`
--

DROP TABLE IF EXISTS `event`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `event` (
  `eventid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) DEFAULT NULL,
  `organizor` varchar(150) DEFAULT NULL,
  `description` varchar(150) DEFAULT NULL,
  `venue` varchar(150) DEFAULT NULL,
  `startdate` date DEFAULT NULL,
  `enddate` date DEFAULT NULL,
  `eventurlname` varchar(150) DEFAULT NULL,
  `ticketprize` varchar(50) DEFAULT NULL,
  `contactno` varchar(50) DEFAULT NULL,
  `numberofseats` varchar(50) DEFAULT NULL,
  `bookingurl` varchar(50) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`eventid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `event`
--

LOCK TABLES `event` WRITE;
/*!40000 ALTER TABLE `event` DISABLE KEYS */;
INSERT INTO `event` VALUES (1,'Beaulieu Jazz Festival','aissel','sunidhi is singing','Hubli','2017-05-15','2017-05-16','aissel.com','150','7829972224','10','name.com','/php/event/web/images/fabi-reyna.jpg'),(2,'spotlight','aissel','bangalore drama company is coming to perform','Hubli','2017-05-21','2017-05-25','aissel.com','120','4575867457','15','xyz.com','/php/event/web/images/dra.jpg'),(3,'12 year a slave','aissel','drama by physical handicap','Dharwad','2017-05-21','2017-05-23','aissel.com','40','5478654875','12','xyz.com','/php/event/web/images/ba-drama-theatre-arts.jpg'),(4,'The slience of lambs','aissel','drama by a couple ','Dharwad','2017-05-23','2017-05-25','aissel.com','60','254684574','30','xyz.com','/php/event/web/images/Sound_of_Music-95.jpg');
/*!40000 ALTER TABLE `event` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `members`
--

DROP TABLE IF EXISTS `members`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) DEFAULT NULL,
  `lastname` varchar(150) DEFAULT NULL,
  `email` varchar(300) DEFAULT NULL,
  `phoneno` varchar(150) DEFAULT NULL,
  `address` varchar(150) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `c_password` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `members`
--

LOCK TABLES `members` WRITE;
/*!40000 ALTER TABLE `members` DISABLE KEYS */;
INSERT INTO `members` VALUES (1,'Kanchan Kulkarni','dgdg','','','kjsdfhkasdjfh','root','root','1',NULL),(6,'Nikhil','R','a@b.com','12345678','Hubli','nikhil','123456','1',NULL),(7,'Nikhil','R','a@b.com','12345678','Hubli','nikhil','123456','1',NULL),(8,'','','','','','','','1',NULL),(9,'','','','','','','','1',NULL),(10,'','','','','','','','1',NULL),(13,'Sneha','wali','','','Navalgund','sneha','123456','1','123456'),(14,'a','wali','sneha@gmail.com','1234567897','Navalgund','sneha','123456','1','123456'),(16,'Kanchan','Kulkarni','kanchan@gmail.com','12456975','Navalgund','kanchan','123456','1','123456'),(17,'','','','','','','','1',''),(18,'','','','','','','','1',''),(19,'','','','','','','','1',''),(20,'test','test','ac@gmai.com','124585','hubli','test','123','1','123');
/*!40000 ALTER TABLE `members` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ticketbooking`
--

DROP TABLE IF EXISTS `ticketbooking`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ticketbooking` (
  `bookingid` int(11) NOT NULL AUTO_INCREMENT,
  `memberid` varchar(50) DEFAULT NULL,
  `eventid` varchar(50) DEFAULT NULL,
  `noofticketbooked` varchar(50) DEFAULT NULL,
  `totalprize` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`bookingid`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ticketbooking`
--

LOCK TABLES `ticketbooking` WRITE;
/*!40000 ALTER TABLE `ticketbooking` DISABLE KEYS */;
INSERT INTO `ticketbooking` VALUES (1,'16','3','','80'),(2,'16','2','','360'),(3,'16','2','','360'),(4,'16','4','','240'),(5,'16','1','','600'),(6,'16','1','','600'),(7,'16','1','','450');
/*!40000 ALTER TABLE `ticketbooking` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-05-18 15:07:36
