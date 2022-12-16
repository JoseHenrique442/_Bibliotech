CREATE DATABASE  IF NOT EXISTS `bd_users` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `bd_users`;
-- MySQL dump 10.13  Distrib 8.0.27, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: bd_users
-- ------------------------------------------------------
-- Server version	8.0.27

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
-- Table structure for table `obras`
--

DROP TABLE IF EXISTS `obras`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `obras` (
  `idobras` int NOT NULL AUTO_INCREMENT,
  `TIPO` varchar(320) DEFAULT NULL,
  `NUM_SERIE` varchar(500) DEFAULT NULL,
  `AUTORES` varchar(300) DEFAULT NULL,
  `TRADUTORES` varchar(300) DEFAULT NULL,
  `TITULO_OBRA` varchar(320) DEFAULT NULL,
  `SUBTITU_OBRA` varchar(300) DEFAULT NULL,
  `GENERO` varchar(320) DEFAULT NULL,
  `EDICAO` varchar(300) DEFAULT NULL,
  `ANO_PUBLI` date DEFAULT NULL,
  `LUGAR_PUBLI` varchar(300) DEFAULT NULL,
  `BIBLIO_PERTE` varchar(320) DEFAULT NULL,
  `DESCR_FISICA` varchar(500) DEFAULT NULL,
  `CLASSI` varchar(500) DEFAULT NULL,
  `RESUMO` longtext,
  `PALAV_CHAVE` varchar(500) DEFAULT NULL,
  `CAPA_LIVRO` varchar(320) DEFAULT NULL,
  `LINK_ELETRO` longtext,
  `LINK_EBOOK` longtext,
  `NUM_LIVRO` varchar(320) DEFAULT NULL,
  `DATA` datetime DEFAULT NULL,
  `RANKING` int DEFAULT '1500',
  PRIMARY KEY (`idobras`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `obras`
--

LOCK TABLES `obras` WRITE;
/*!40000 ALTER TABLE `obras` DISABLE KEYS */;
INSERT INTO `obras` VALUES (17,'123','232323','1','wefwefw','wefwfew','wefwef','Classicos','wefwef','2322-03-12','wefw','IFFar-FW','wefwe','wfewfw','wefwefw','wefwe','naruto-1.jpg','weffw','wefwfw','wefwefw','2022-12-07 20:36:40',1500),(18,'12','ewfwew','1','wefwef','fewf','wfewf','Classicos','wefwef','2222-12-12','wefwf','IFFar-FW','efwfw','wfefw','ewfwfw','wefw','1984.jpg','esfse','esfs','sef','2022-12-07 21:58:25',1500),(19,'123','fafa','1','afwfa','awfaf','awfawf','Classicos','awfa','1211-12-12','efwf','IFFar-FW','ewfw','wefw','wefwfw','wefewf','o-sol-para-todos.jpg','fwefw','ewfw','wefwf','2022-12-07 22:00:10',1500),(20,'12345','efsfs','sefs','sefsf','sefs','sefsef','Classicos','esfs','2112-12-12','ewfw','IFFar-FW','wefwef','wefw','wefwef','wefwef','o-processo.jpg','wefw','wefwe','wefwef','2022-12-07 22:14:54',1495),(21,'123','Sim','1','wafawf','Sim','esfs','Drama','fsesfs','1211-12-12','esfesfs','IFFar-FW','sefsfs','sefsfs','sefsefs','sefsf','ensaio-cegueira.jpg','sefsef','sefsfs','sefsfes','2022-12-07 22:25:15',1500);
/*!40000 ALTER TABLE `obras` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-12-08  9:15:31
