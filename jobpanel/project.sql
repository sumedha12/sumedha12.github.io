-- MySQL dump 10.13  Distrib 5.7.9, for Win64 (x86_64)
--
-- Host: localhost    Database: my_db
-- ------------------------------------------------------
-- Server version	5.7.10-log

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
-- Table structure for table `education`
--

DROP TABLE IF EXISTS `education`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `education` (
  `id` int(11) NOT NULL,
  `degree` varchar(45) DEFAULT NULL,
  `branch` varchar(45) DEFAULT NULL,
  `college` varchar(45) DEFAULT NULL,
  `ide` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ide`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `education`
--

LOCK TABLES `education` WRITE;
/*!40000 ALTER TABLE `education` DISABLE KEYS */;
INSERT INTO `education` VALUES (1,'M. Tech','Computer Science','Harvard',1),(4,'MBA','Electronics','Stanford',2),(2,'M. Tech','Computer Science','MIT',3),(3,'B. Tech','Computer Science','Yale',4),(5,'BBA','General','Stanford',5),(6,'B.Arch','Genera','Yale',6),(1,'B Tech','Computer science','Harvard',7),(3,'LLB','General','Delhi University',8),(1,'Phd','Computer Science','Harvard',9),(5,'MBA','General','Stanford',10);
/*!40000 ALTER TABLE `education` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `friends`
--

DROP TABLE IF EXISTS `friends`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `friends` (
  `id1` int(11) DEFAULT NULL,
  `id2` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `friends`
--

LOCK TABLES `friends` WRITE;
/*!40000 ALTER TABLE `friends` DISABLE KEYS */;
INSERT INTO `friends` VALUES (1,2),(1,3),(1,4),(1,5);
/*!40000 ALTER TABLE `friends` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `job2`
--

DROP TABLE IF EXISTS `job2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `job2` (
  `id` int(11) NOT NULL,
  `views` varchar(45) DEFAULT NULL,
  `applicants` varchar(45) DEFAULT NULL,
  `shortlists` varchar(45) DEFAULT NULL,
  `graduate` varchar(45) DEFAULT NULL,
  `postgraduate` varchar(45) DEFAULT NULL,
  `phd` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job2`
--

LOCK TABLES `job2` WRITE;
/*!40000 ALTER TABLE `job2` DISABLE KEYS */;
INSERT INTO `job2` VALUES (1,'100','150','12','150','45','10'),(2,'100','20','2','120','45','5'),(3,'120','5','6','110','1','20'),(4,'130','60','30','112','1','11'),(5,'120','75','80','135','11','10');
/*!40000 ALTER TABLE `job2` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jobs` (
  `company_name` varchar(45) DEFAULT NULL,
  `designation` varchar(45) DEFAULT NULL,
  `experience` varchar(45) DEFAULT NULL,
  `qualification` varchar(45) DEFAULT NULL,
  `name_contact` varchar(500) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pref_locn` varchar(45) DEFAULT NULL,
  `skills` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobs`
--

LOCK TABLES `jobs` WRITE;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
INSERT INTO `jobs` VALUES ('Evalueserve','R.A.','5','M.Tech','Sumedha Sood','sumedha.sood@yahoo.com',1,'Boston','CFA'),('Infinite Brainstorm','SRA','5','B Tech','Sumedha Sood','sumedha.sood@yahoo.com',2,'Reno','Data Analytics'),('Entrepeuners.com','RA','6','M.S','Reena Bhardwaj','ABC@gmail.com',3,'Reno','Programming'),('The Creative Mind','Programmer','7-8 years','M.S.','Honey Gupta','Honey @gmail.com',4,'newyork','Big Data'),('The Job Panel','Web Developer','1-2 Years','B.Tech','Nikhil Gupta','Nikhil @gmail.com',5,'California','Big Data'),('The Job Panel','Financer','4 Years','CFA','Nandani Arya','nandani@gmail.com',6,'NewJersey','IPR'),('Creative Minds','Creative Artist','1 Year','B Arch','Nand Kishore','Nand@gmail.com',7,'New York','Legal'),('TheJobBoard','Programmer','4 years','B Tech','Archana Gupta','Archana@gmail.com',11,'Cambridge','Legal'),('NewVenture','Lawer','2 Years','LLM','Anila Gupta','anila@gmail.com',12,'Boston','IPR'),('Infinite Brainstorm','Lawer','1 Year','LLB','Manish Kapoor','manish@gmail.com',13,'New Jersey','Legal'),('Entrepueners.com','LAWER','2 year','MBA','Anandi Gupta','Anandi@gmail.com',14,'California','CFA'),('Evalueserve','RA','5 Years','MBA','Honey Kapoor','honey@gmail.com',15,'Boston','IPR'),('Infinite','SRA','7 years','MBA','Ankita kapoor','Ankita@gmail.com',16,'Chicago',NULL),('evs','ra','5-6','bba','honey','honey.gupta@gmail.com',17,'boston','MBA'),('job panel','Programmer','5-6 years','M BA','anchal Kapoor','anchal@gmail.com',18,'Reno','Programming'),('Infinite brainstorm','Research Analyst','7 years','MBA','akshit','akshit.kapoor@gmail.com',19,'Delhi','cfa, programming');
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `paper`
--

DROP TABLE IF EXISTS `paper`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `paper` (
  `id` int(11) NOT NULL,
  `name_paper` varchar(45) DEFAULT NULL,
  `author` varchar(45) DEFAULT NULL,
  `title` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `paper`
--

LOCK TABLES `paper` WRITE;
/*!40000 ALTER TABLE `paper` DISABLE KEYS */;
INSERT INTO `paper` VALUES (1,'aa','aa','aa');
/*!40000 ALTER TABLE `paper` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profile`
--

DROP TABLE IF EXISTS `profile`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `profile` (
  `name` varchar(45) DEFAULT NULL,
  `image` varchar(45) DEFAULT NULL,
  `message` varchar(45) DEFAULT NULL,
  `experience` int(11) DEFAULT NULL,
  `work_locn` varchar(45) DEFAULT NULL,
  `skills` varchar(45) DEFAULT NULL,
  `work_pref` varchar(45) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profile`
--

LOCK TABLES `profile` WRITE;
/*!40000 ALTER TABLE `profile` DISABLE KEYS */;
INSERT INTO `profile` VALUES ('abc',NULL,'nnnnnnnnnnnnnnn',6,'india','cfa','full_time',1),('Ashna','image/photo.jpg','Hello Myself Ashna. I have an experience of',10,'USA','LLM','Full_time',2),('def',NULL,'hhhhhhhhhjlllllllllll',6,'India','IPR','PART_TIME',3),('Divya','image/photo.jpg','Hello. Myself Divya. I am ..............',10,'USA','LLB','Full Time',4),('Gaurav','image/photo.jpg','Hello Myself Gaurav. I have an',10,'USA','CFA','Full_time',5),('ghi',NULL,'HHHJJJJJJJJJJ',6,'III','IPR','KKKK',6),('Raghav',NULL,'Hellooooooo...........',10,'USA','CFA','Full_time',7),('SUMEDHA','image/photo.jpg','Hello. Myself Sumedha Sood. I have an',10,'USA','IPR','Full Time',8),('Vibhu','image/photo.jpg','Hello. Myself Vibhu',10,'USA','CFA','Full TIme',9),('Vineet','image/photo.jpg','Hello Myself Vineet. I have .....',10,'USA','MIT','Full_time',10);
/*!40000 ALTER TABLE `profile` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `published`
--

DROP TABLE IF EXISTS `published`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `published` (
  `id` int(11) NOT NULL,
  `name_paper` varchar(500) DEFAULT NULL,
  `certification` varchar(45) DEFAULT NULL,
  `extra` varchar(45) DEFAULT NULL,
  `author` varchar(45) DEFAULT NULL,
  `title` varchar(45) DEFAULT NULL,
  `ide` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ide`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `published`
--

LOCK TABLES `published` WRITE;
/*!40000 ALTER TABLE `published` DISABLE KEYS */;
INSERT INTO `published` VALUES (1,'Cloud3','SCWP','Played international Baseball','sumedha Sood, Vineet Khattar','25 march,2015',1),(2,'Cloud 2','SCJP','Played international Basket Ball','sumedha Sood, Vibhu Sood','10 march,2016',2),(3,'Comparitive analysis of present day clouds using service level agreements','SCJP','Played international Hockey','sumedha Sood, Divya Sood','20 April 2012',3),(1,'How clouds work-a review','SCWP','Played international hockey','sumedha Sood, Vibhu Sood','25 April 2012',4),(4,'Present day cloud-review','SCJP','World champion cricket','SumedhaSood','5th Nov,2015',5),(5,'New Trends in grid computing',NULL,NULL,'Vineet Khattar','7th November,2016',6),(6,'New Technologies',NULL,NULL,'Divya Sood','15th November,2015',12),(1,'A review on internet technologies',NULL,NULL,'Sumedha Sood','20 April,2010',13),(3,'Present day grid technology- A review',NULL,NULL,'Divya Sood','25 April 2016',14),(3,'Cloud computing-a review',NULL,NULL,'Divya Sood','20 april 2013',15),(1,'Review on Cloud computing',NULL,NULL,'sumedha Sood','20 Apr 2013',16),(1,'Review on grids',NULL,NULL,'Sumedha Sood','10 Apr 2010',17),(3,'A review on grids',NULL,NULL,'Divya Sood','20 April 2012',18),(7,'Review on Historical issues',NULL,NULL,'Anirudh','15 Feb 2010',19),(7,'abc',NULL,NULL,'dd','15 march 2015',20),(5,'The historic analysis',NULL,NULL,'Aparna','7 july 2015',21),(5,'The new trends in technology',NULL,NULL,'Aparna','6 july 2016',22),(1,'Review on clouds',NULL,NULL,'Sumedha Sood','10 March 2013',23),(1,'Super computers',NULL,NULL,'Sumedha','20 march 2016',24),(19,'research on new chemical compounds',NULL,NULL,'akshit','20 june 2012',25);
/*!40000 ALTER TABLE `published` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `startup`
--

DROP TABLE IF EXISTS `startup`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `startup` (
  `id` int(11) NOT NULL,
  `img` varchar(45) DEFAULT NULL,
  `heading` varchar(45) DEFAULT NULL,
  `description` varchar(4500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `startup`
--

LOCK TABLES `startup` WRITE;
/*!40000 ALTER TABLE `startup` DISABLE KEYS */;
INSERT INTO `startup` VALUES (1,NULL,'Web Developer','I am a web developer having experience of 10+ years.I live web development and creating new designs.'),(2,NULL,'Programmer','I am a programmer. Programming has been my hobbey from since childhood. I am working with infinite brainstorms from last 10 years. It is a wonderfull organization with wondeful people'),(3,NULL,'Lawer','I am a lawyer. I have an experience of 20+ years. I have won a number of cases.'),(4,NULL,'Patent Engineer ','I am a patent engineer working in patents field from past 10+ years. I have done drafting, landscapings and patent searching etc. I excel in my work and like to work really hard to get my work done.'),(5,NULL,'Portfolio Manager','I am a portfolio manager. I have been hired by XYZ corporations and manage funds of the entire company.'),(6,NULL,'Treasury analyst','I am a Treasury analyst. I have been hired by ABC corporations and manage treasury of the entire company.');
/*!40000 ALTER TABLE `startup` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `table1`
--

DROP TABLE IF EXISTS `table1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `table1` (
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `hghestqual` varchar(45) DEFAULT NULL,
  `CollegeName` varchar(45) DEFAULT NULL,
  `university` varchar(45) DEFAULT NULL,
  `experience` varchar(45) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `skills` varchar(450) DEFAULT NULL,
  `work_pref` varchar(45) DEFAULT NULL,
  `work_locn` varchar(45) DEFAULT NULL,
  `work_time` varchar(45) DEFAULT NULL,
  `lname` varchar(45) DEFAULT NULL,
  `email` varchar(45) NOT NULL,
  `img` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `table1`
--

LOCK TABLES `table1` WRITE;
/*!40000 ALTER TABLE `table1` DISABLE KEYS */;
INSERT INTO `table1` VALUES ('sumedha','Dvibhsu11','M.Tech','Harvard','Harvard','5',1,'Programming,Web Development','on-site','Reno','Full Time','sood','sood.sumedha15@gmail.com','image\\photo.jpg'),('Anchal','Arora','MBA','IP university','IP','6',2,'Programming,Blogging,','Remote','Remote','Full Time','a','a@a',NULL),('Divya','Dvibhsu11','LLB','Delhi University','Delhi University','7 Years',3,'Legal Drafting','on-site','Cambridge','Full Time','Sood','divya.sood@yahoo.com',NULL),('Vibhu','vibhsu11','MBA','Harvard Business School','Harvard','8-10 years',4,'CFA,Financial Analysis','on-site','Reno','Full Time','Sood','vibhu.sood99@gmail.com',NULL),('Aparna','Dvibhsu11','Mtech','MIT','MIT','10 years',5,'Networking, cyber Analysis','on-site','Chicago','Full Time','sood','sood.sumedha16@gmail.com',NULL),('Vineet','vineet','CFA','MIT','MIT','8 Years',6,'Credit analyst','on-site','New York','Full Time','Khattar','vineet.khattar@gmail.com',NULL),('Anirudh','Anirudh','MBA','DU','DU','10 Years',7,'Blogging, Googling','Remote','Boston','Full TIme','kapoor','ani@gmail.com',NULL),('Gaurav','Asdfgh','aa','a','a','a',9,'m','m','m','m','Kaushik','Gk@gmail.com',NULL),('Gaurav','Gk0202','M Tech','MIT','MIT','10 Years',10,'a','b','c','d','Kaushik','gauravkaushik@gmail.com',NULL),('chandani','Chandni','M Tech','Tuft University','Tuft University','10 Years',11,'Programming','On-site','Boston','Full Time','Grover','chandaniGrover@gmail.com',NULL),('Ashna','Khatri','MBA','Tuck College','Tuck College','12 Years',12,'a','Remote','Salem','Part Time','a','Ashna@gmail.com',NULL),('Anjana','Asdfgh','MBA','HBS','Harvard','15 years',13,'Web Development','On-Site','Reno','Full Time','Singh','abc@gmail.com',NULL),('Sham','hhiijj','BBA','Sloan','MIT','18 years',14,'Web Development','Remote','California','Full Time','Arora','mm@gmail.com',NULL),('abc','defdef','ghi','jkl','mno','pqr',15,'stu','vwy','xyz','abc','def','ghi',NULL),('Anjana','aassdd','MBA','Harvard','Harvard','10 Yrs',16,'a','b','c','d','Bharti','Anjana@gmail.com',NULL),('Dipanshu','anmkl','CFA','Cal extension','California','20 years',17,'CFA','On-site','Salem','Part time','Gupta','Dips@gmail.com',NULL),('sunaina','Sun123','MBA','HBS','Harvard','Harvard',18,'Googling','Remote','Hyderabad','Full time','Rathi','sunaina@gmail.com',NULL),('Akshit','Akshit','M S','DU','DU','4-5 Years',19,'Googling','On-Site','Boston','Full time','kapoor','akshit@gmail.com',NULL);
/*!40000 ALTER TABLE `table1` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-05-09  3:17:54
