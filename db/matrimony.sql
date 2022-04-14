-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: matrimony
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

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
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) NOT NULL,
  `password` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'admin','admin','admin@nowhere.com');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customer` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `cust_id` int(5) NOT NULL,
  `email` varchar(60) NOT NULL,
  `age` varchar(10) NOT NULL,
  `height` int(10) NOT NULL,
  `sex` varchar(6) NOT NULL,
  `religion` varchar(20) NOT NULL,
  `caste` varchar(20) NOT NULL,
  `subcaste` varchar(20) NOT NULL,
  `district` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `country` varchar(10) NOT NULL,
  `maritalstatus` varchar(20) NOT NULL,
  `profilecreatedby` varchar(20) NOT NULL,
  `education` text NOT NULL,
  `education_sub` text NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `body_type` text NOT NULL,
  `physical_status` text NOT NULL,
  `drink` varchar(8) NOT NULL,
  `mothertounge` text NOT NULL,
  `colour` varchar(20) NOT NULL,
  `weight` int(5) NOT NULL,
  `blood_group` varchar(5) NOT NULL,
  `diet` varchar(8) NOT NULL,
  `smoke` varchar(8) NOT NULL,
  `dateofbirth` date NOT NULL,
  `occupation` text NOT NULL,
  `occupation_descr` text NOT NULL,
  `annual_income` varchar(20) NOT NULL,
  `fathers_occupation` varchar(20) NOT NULL,
  `mothers_occupation` varchar(20) NOT NULL,
  `no_bro` int(5) NOT NULL,
  `no_sis` int(5) NOT NULL,
  `aboutme` text NOT NULL,
  `profilecreationdate` date NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cust_id` (`cust_id`)
) ENGINE=InnoDB AUTO_INCREMENT=124 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer`
--

LOCK TABLES `customer` WRITE;
/*!40000 ALTER TABLE `customer` DISABLE KEYS */;
INSERT INTO `customer` VALUES (111,2,'test@test.com','27',5,'Male','Hindu','Thiyya','sub cast1','Wayanad','Kerala','India','Single','Self','Primary','','Santosh','Kumar','Slim','No Problem','Sometime','Malayalam','Dark',58,'O +ve','Veg','Sometime','1996-01-12','Business','Doctor','4654456','Clark','Nurse',1,1,'Nice to meet u!','2016-02-27'),(112,7,'jdshfkjsh@nowhere.com','26',0,'Male','Hindu','OPEN','Maratha','Thane','Maharashtra','India','Single','Mother','Diploma','Civil','Ramesh','Shinde','Average','No Problem','No','Marathi','Dark',67,'O +ve','Veg','No','0000-00-00','Employee','Sevice','300000','Teacher','Teacher',1,3,'Motivational Person','2016-02-27'),(113,12,'aakash@gmail.com','25`',0,'Male','Hindu','OBC','Kunbi','Dombivali','Maharashtra','India','Single','Self','Graduate','Computer Engineering','Aakash','Shinde','Athletic','No Problem','Yes','Marathi','Fair',60,'O +ve','Veg','Sometime','1998-02-14','Employee','Software Developer','50000000','Business','House wife',1,0,'Mulichya shodhat','2016-02-28'),(114,13,'reshma@asdfsadf.com','30',0,'Female','Hindu','OPEN','Maratha','Pune','Maharashtra','India','Divorsed','Father','Post Graduate','Civil','Reshma','Deshpande','Heavy','No Problem','No','Hindi','Fair',60,'O +ve','Veg','Sometime','1998-02-14','Business','Actor','6000000','Doctor','Teacher',2,2,'Angel Reshma','2016-02-28'),(115,14,'rahul@asdfsadf.com','18',0,'Male','Hindu','Thiyya','sub cast1','Wayanad','Kerala','India','Single','Self','PG','dsadasd','Rahul','Rahul','Slim','No Problem','No','Malayalam','Dark',58,'O +ve','Veg','No','1998-02-14','das','dasdas','8598','dasdasd','asdasdsd',1,1,'assdfsdf sdfas fasdf asdfasdf asdf','2016-02-28'),(116,15,'suyogkadam@gmail.com','22',7,'','Hindu','OBC','Mali','Mumbai','','Thane','Single','Self','Graduate','Computer Engineering','Suyog','Kadam','Athletic','No Problem','No','Marathi','Normal',80,'A+','Non Veg','No','0000-00-00','Employee','Software Developer','500000','Business','House wife',1,1,'I am a very Open Minded, Cool, Calm and caring person.','2022-04-04'),(117,16,'Sakshi@gmail.com','',7,'','Hindu','OBC','Mali','Mumbai','','Dombivali','Single','Self','Graduate','Computer Engineering','Sakshi','mane','Athletic','No Problem','No','Marathi','Fair',75,'A+','Non Veg','No','0000-00-00','Employee','Software Engineer','500000','Business','House wife',1,1,'I am a 22 year old 6.5\" tall, slim women, based on Dombivali.','2022-04-04'),(118,1,'admin@nowhere.com','24',6,'','Hindu','BANIYA','POWAR','Thane','Maharashtra','India','Single','Self','Post Graduate','IT','RAMCHADRA','JADHAV','Average','No Problem','No','Marathi','Dark',68,'A+','Veg','No','0000-00-00','Business','Agriculture','1500000','Business','Agriculture',1,0,'Cool Boy','2022-04-06'),(119,6,'test123@test.com','26',6,'','Hindu','BRAHMAN','DESHASTHA','Pune','Maharashtra','India','Single','Self','Diploma','Mechanical','Ali ','Bhat','Slim','No Problem','No','Hindi','Fair',60,'O-','Veg','No','0000-00-00','Business','Actor','50000000','Business','Producer- Buisness',0,0,'Cool Girl','2022-04-06'),(120,8,'champak@gmail.com','25',5,'','Hindu','OBC','Kunbi','Thane','Maharashtra','India','Single','Father','Graduate','Pharmacy','Siddhi','Patil','Athletic','No Problem','No','Marathi','Fair',50,'O-','Non Veg','No','0000-00-00','Employee','Medical','5600000','Business','House wife',2,1,'Simple Girl','2022-04-08'),(121,9,'raju@nowhere.com','30',7,'','Hindu','OPEN','Brahman','Ratnagiri','Maharashtra','India','Single','Sister','PHD','Sanskrit','Raju','Vaidya','Average','No Problem','No','Konkani','Normal',80,'AB+','Veg','No','0000-00-00','Employee','Professor','6000000','Doctor','Doctor',0,1,'Smart Boy','2022-04-08'),(122,10,'kuttapi@kuttappi.com','28',6,'','Inter Religion','Brahman','DESHASTHA','Panaji','Goa','India','Single','Brother','Graduate','Chemical Engg','Aarush','Ayar','Slim','Blind','No','Hindi','Dark',67,'O-','Non Veg','No','0000-00-00','Employee','Project Manager','4000000','Goverment Employee','House wife',2,2,'ESmart Boy','2022-04-08'),(123,11,'twetwet@sdfds.com','22',4,'','Hindu','OBC','Vani','Thane','Maharashtra','India','Single','Mother','Graduate','BSC','Vidhi','Sherekar','Slim','No Problem','No','Marathi','Dark',50,'O+','Non Veg','No','0000-00-00','Employee','Manager','3430000','Goverment Employee','House wife',1,0,'Pappa ki Pari','2022-04-08');
/*!40000 ALTER TABLE `customer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `partnerprefs`
--

DROP TABLE IF EXISTS `partnerprefs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `partnerprefs` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `custId` int(10) NOT NULL,
  `agemin` varchar(3) NOT NULL,
  `agemax` int(3) NOT NULL,
  `maritalstatus` varchar(20) NOT NULL,
  `complexion` varchar(10) NOT NULL,
  `height` int(3) NOT NULL,
  `diet` varchar(10) NOT NULL,
  `religion` varchar(15) NOT NULL,
  `caste` varchar(20) NOT NULL,
  `subcaste` varchar(20) NOT NULL,
  `mothertounge` varchar(20) NOT NULL,
  `education` varchar(30) NOT NULL,
  `occupation` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `descr` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `custId` (`custId`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `partnerprefs`
--

LOCK TABLES `partnerprefs` WRITE;
/*!40000 ALTER TABLE `partnerprefs` DISABLE KEYS */;
INSERT INTO `partnerprefs` VALUES (1,6,'18',30,'Single','',6,'Veg','OPEN','BRAHMAN','','Hindi','Degree','Business','India','Beatiful'),(2,7,'18',40,'Single','',150,'Veg','Not Applicable','','','Konkani','Diploma','Goverment servent','India','Cool'),(3,12,'18',40,'Single','',150,'Veg','Hindu','OBC','','','PG','Doctor','India',''),(4,13,'18',40,'Single','',0,'Veg','Hindu','OPEN','','Marathi','PG','Teacher','Hindu','Cool'),(5,14,'18',50,'Single','',0,'Veg','Hindu','OPEN','','Marathi','Diploma','Software Engineer','India','Cool'),(6,15,'22',30,'','',0,'','','OBC','','marathi','','Business','India','Angel'),(7,16,'22',25,'Single','',7,'Non Veg','Hindu','OBC','','Hindi','Degree','Employee','India','Smart Boy'),(8,1,'',0,'Single','',0,'','OPEN','','','Marathi','Diploma','Employee','India','Handsome'),(10,8,'20',30,'Single','',0,'','','','','','Degree','Actor','India','Hot'),(11,9,'22',30,'Single','',0,'','','','','','Diploma','Employee','India','Healthy'),(12,10,'25',30,'','',0,'','','','','','','Business','India',''),(13,11,'20',40,'','',0,'','','','','Hindi','','Business','India','');
/*!40000 ALTER TABLE `partnerprefs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `photos`
--

DROP TABLE IF EXISTS `photos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `photos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `cust_id` int(10) NOT NULL,
  `pic1` varchar(25) NOT NULL,
  `pic2` varchar(40) NOT NULL,
  `pic3` varchar(40) NOT NULL,
  `pic4` varchar(40) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cust_id` (`cust_id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `photos`
--

LOCK TABLES `photos` WRITE;
/*!40000 ALTER TABLE `photos` DISABLE KEYS */;
INSERT INTO `photos` VALUES (27,6,'10.jpg','20.jpeg','30.jpg','40.jpg'),(28,7,'d1.jpg','d2.jpg','d3.jpg','d4.jpg'),(29,12,'a1.jpg','a2.jpg','a3.jpg','a4.jpg'),(30,13,'b1.jpg','b2.jpg','b3.jpg','b4.jpg'),(31,14,'Neil-Bhatt.jpg','neil-bhatt-coronavirus.jpg','',''),(32,15,'aa2.jpg','aa4.jpg','aa1.jpg','aa3.jpg'),(33,16,'e2.jpg','e1.jpg','e3.jpg','e4.jpg'),(34,1,'1.jpg','3.jpg','4.jpg','10.jpg'),(35,8,'1212.jpg','12121.jpg','21212.jpg','2121212.jpg'),(36,9,'f4.jpg','f3.jpg','f1.jpg','f2.jpg'),(37,10,'g1.jpg','g2.jpeg','g3.jpg','g4.jpg'),(38,11,'a1.jpg','a2.png','a3.jpg','a4.png'),(39,2,'Sanket-Pathak-1.jpg','','','');
/*!40000 ALTER TABLE `photos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `profilestat` int(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `dateofbirth` date NOT NULL,
  `gender` varchar(5) NOT NULL,
  `userlevel` int(2) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,0,'admin','admin','admin@nowhere.com','2016-02-17','male',1),(2,0,'test2','test2','test@test.com','1991-01-01','male',0),(6,0,'test','test','test123@test.com','2016-02-11','femal',0),(7,0,'shobi','shobi','jdshfkjsh@nowhere.com','0000-00-00','male',0),(8,0,'champak','champak','champak@gmail.com','0000-00-00','Femal',0),(9,0,'Raju','raju','raju@nowhere.com','0000-00-00','male',0),(10,0,'kuttappi','kuttappi','kuttapi@kuttappi.com','0000-00-00','Male',0),(11,0,'vidhi','vidhi','twetwet@sdfds.com','0000-00-00','Femal',0),(12,0,'aakash','shinde','aakash@gmail.com','1997-01-20','male',0),(13,0,'reshma','reshma','reshma@asdfsadf.com','1998-02-14','femal',0),(14,0,'rahul','rahul','rahul@asdfsadf.com','1998-02-14','male',0),(15,0,'suyogkadam@gmail.com','Suyog@123','suyogkadam@gmail.com','2000-11-20','male',0),(16,0,'sakshimane@gmail.com','Sakshi@123','sakshimane@gmail.com','2000-01-01','femal',0),(18,0,'sahil','Sahil@123','Sahil@gmail.com','2000-11-01','male',0);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-04-14 16:22:29
