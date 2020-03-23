-- MySQL dump 10.15  Distrib 10.0.38-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: courses
-- ------------------------------------------------------
-- Server version	10.0.38-MariaDB-0ubuntu0.16.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `courses` (
  `course_id` int(255) NOT NULL AUTO_INCREMENT,
  `course` varchar(128) NOT NULL,
  `teacher` varchar(128) NOT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `courses`
--

LOCK TABLES `courses` WRITE;
/*!40000 ALTER TABLE `courses` DISABLE KEYS */;
INSERT INTO `courses` VALUES (1,'PHP','Titov M.'),(2,'JavaScript','Ivanova O'),(3,'Java','Senov S');
/*!40000 ALTER TABLE `courses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `students` (
  `student_id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `surname` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `photo_name` varchar(128) NOT NULL,
  `course_id` int(255) NOT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `students`
--

LOCK TABLES `students` WRITE;
/*!40000 ALTER TABLE `students` DISABLE KEYS */;
INSERT INTO `students` VALUES (70,'Serg ',' Ivanov ',' sergg602@gmail.ckkkom','/var/www/dz_mvc_singl/test.com/uploads/user1.jpeg','',1),(71,'Toma ',' Olins ',' sewe@gmail.com','/var/www/dz_mvc_singl/test.com/uploads/user8.jpeg','',1),(72,'Viki ',' Viki ',' viki@gmail.com','/var/www/dz_mvc_singl/test.com/uploads/user3.jpeg','',2),(73,'Taras ',' Tarasov ',' tarik@gmail.com','/var/www/dz_mvc_singl/test.com/uploads/user5.jpeg','',0),(74,'Hanna ',' Mit ',' hanna@gmail.com','/var/www/dz_mvc_singl/test.com/uploads/user4.jpeg','',3),(75,'Volva ',' Dakov ',' dk@gmail.com','/var/www/dz_mvc_singl/test.com/uploads/user6.jpeg','',2),(76,'Vill ',' Smit ',' villi@gmail.com','/var/www/dz_mvc_singl/test.com/uploads/user7.jpeg','',3),(77,'Tot ',' Romin ',' toto@gmail.com','/var/www/dz_mvc_singl/test.com/uploads/user9.jpeg','',1),(78,'Tot ',' Romin ',' toto@gmail.com','/var/www/dz_mvc_singl/test.com/uploads/user9.jpeg','',1);
/*!40000 ALTER TABLE `students` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-03-23 11:39:50
