-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: localhost    Database: case_swap
-- ------------------------------------------------------
-- Server version	8.0.34

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `alte_case`
--

DROP TABLE IF EXISTS `alte_case`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `alte_case` (
  `id_case` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `tara` text,
  `oras` text,
  `suprafata` int DEFAULT NULL,
  `camere` int DEFAULT NULL,
  `caut_oras` char(255) DEFAULT NULL,
  PRIMARY KEY (`id_case`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alte_case`
--

LOCK TABLES `alte_case` WRITE;
/*!40000 ALTER TABLE `alte_case` DISABLE KEYS */;
INSERT INTO `alte_case` VALUES (1,'garsoniera','Moldova','Chisinau',30,4,'Bucuresti'),(2,'apartament','Romania','Bucuresti',60,2,'Cluj-Napoca'),(3,'casa cu gradina','Spania','Barcelona',150,5,'Madrid'),(4,'villa de lux','Franta','Paris',300,8,'Nisa'),(5,'studio','Italia','Roma',40,1,'Milano'),(6,'penthouse','Germania','Berlin',120,3,'Hamburg'),(7,'loft','Olanda','Amsterdam',80,2,'Rotterdam'),(8,'casuta rurala','Romania','Brasov',100,4,'Sibiu'),(9,'apartament modern','Spania','Madrid',70,2,'Barcelona'),(10,'casa de vacanta','Grecia','Atena',200,6,'Salonic'),(11,'duplex','Italia','Milano',90,3,'Roma'),(12,'garsoniera renovata','Romania','Timisoara',35,1,'Cluj-Napoca'),(13,'apartament cu terasa','Franta','Nisa',80,2,'Paris'),(14,'casa in regim hotelier','Spania','Barcelona',250,7,'Valencia'),(15,'loft industrial','Germania','Hamburg',110,3,'Berlin');
/*!40000 ALTER TABLE `alte_case` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `casute`
--

DROP TABLE IF EXISTS `casute`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `casute` (
  `id` int NOT NULL AUTO_INCREMENT,
  `locatie` char(200) DEFAULT NULL,
  `tip` char(200) DEFAULT NULL,
  `suprafata` bigint DEFAULT NULL,
  `camere` bigint DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `casute`
--

LOCK TABLES `casute` WRITE;
/*!40000 ALTER TABLE `casute` DISABLE KEYS */;
INSERT INTO `casute` VALUES (1,'Maldive','Casa',200,5),(2,'Chisinau','garsoniera',30,4),(3,'Bucharest','apartment',80,3),(5,'Tokyo','studio',40,2);
/*!40000 ALTER TABLE `casute` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contact` (
  `id_client` int NOT NULL AUTO_INCREMENT,
  `nume` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `mesaj` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_client`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact`
--

LOCK TABLES `contact` WRITE;
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
INSERT INTO `contact` VALUES (1,'dsadada','asdad@gmail.com','sdadasdadasdadasdadasdadasdadasdadasdada'),(2,'Anonim','anonim@gmail.com','ceva anonimceva anonimceva anonim');
/*!40000 ALTER TABLE `contact` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transactions`
--

DROP TABLE IF EXISTS `transactions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `transactions` (
  `ID_transaction` int NOT NULL AUTO_INCREMENT,
  `Date_start` date NOT NULL,
  `Date_end` date DEFAULT NULL,
  `id_case` int NOT NULL,
  `ID_user` int NOT NULL,
  PRIMARY KEY (`ID_transaction`),
  KEY `transaction_book_fk` (`id_case`),
  KEY `transaction_user_fk` (`ID_user`),
  CONSTRAINT `transaction_user_fk` FOREIGN KEY (`ID_user`) REFERENCES `users` (`ID_user`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transactions`
--

LOCK TABLES `transactions` WRITE;
/*!40000 ALTER TABLE `transactions` DISABLE KEYS */;
INSERT INTO `transactions` VALUES (65,'2024-01-19','2024-01-19',1,30),(66,'2024-01-19',NULL,1,30);
/*!40000 ALTER TABLE `transactions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `ID_user` int NOT NULL AUTO_INCREMENT,
  `username` text CHARACTER SET utf8mb3 COLLATE utf8mb3_polish_ci NOT NULL,
  `password` text CHARACTER SET utf8mb3 COLLATE utf8mb3_polish_ci NOT NULL,
  `email` text CHARACTER SET utf8mb3 COLLATE utf8mb3_polish_ci NOT NULL,
  PRIMARY KEY (`ID_user`),
  UNIQUE KEY `ID_user` (`ID_user`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (28,'admin','$2y$10$1.04cbdk4Q9t.WP6etTUguzV4ph9wLB42ROYCc5nHaeBkYcCrVZ2K','admin@example.com'),(30,'kiwijuice','$2y$10$h1hSBBmRAJRdWjf4CQtkk.yV3iwLw4K.oagnJVs5A10MMzIBsD/F2','kiwijuice@gmail.com');
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

-- Dump completed on 2024-01-19 21:20:40
