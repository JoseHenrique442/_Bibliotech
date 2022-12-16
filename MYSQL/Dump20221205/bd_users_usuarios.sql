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
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuarios` (
  `idusuarios` int NOT NULL AUTO_INCREMENT,
  `NOME` varchar(120) DEFAULT NULL,
  `CPF` varchar(16) NOT NULL,
  `MATRICULA` varchar(10) DEFAULT NULL,
  `EMAIL` varchar(320) NOT NULL,
  `CURSO` varchar(320) DEFAULT NULL,
  `CAMPUS` varchar(320) DEFAULT NULL,
  `TIPOUS` varchar(320) DEFAULT NULL,
  `SITUACAO` varchar(320) DEFAULT NULL,
  `SENHA` varchar(320) DEFAULT NULL,
  `DATA` datetime NOT NULL,
  `PERM` int DEFAULT '0',
  PRIMARY KEY (`idusuarios`),
  UNIQUE KEY `CPF_UNIQUE` (`CPF`),
  UNIQUE KEY `EMAIL_UNIQUE` (`EMAIL`),
  UNIQUE KEY `idusuarios_UNIQUE` (`idusuarios`),
  UNIQUE KEY `MATRICULA_UNIQUE` (`MATRICULA`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (5,'adm','123','123','','Técnico em Informática','Campus Frederico Westphalen','','on','202cb962ac59075b964b07152d234b70','2022-12-03 18:05:28',0),(18,'Cleber Jacinto Pinto','1234','1123','danielcasarindarosa@gmail.com','Técnico em Informática','Campus Frederico Westphalen','Usuário','on','202cb962ac59075b964b07152d234b70','2022-12-03 19:16:44',3),(24,'Adam','12345','12345','danielc12asarindarosa@gmail.com','Bacharelado em Ciências da Computação','Campus Frederico Westphalen','Usuário','on','202cb962ac59075b964b07152d234b70','2022-12-04 09:04:58',0),(25,'Daniel','12','12','danielcasarindarosa12@gmail.com','Técnico em Informática','Campus Frederico Westphalen','Servidor','on','202cb962ac59075b964b07152d234b70','2022-12-04 18:49:37',2),(26,'Cleber Francisco','03545278032','2020450334','Cleber0409@hotmail.com','Técnico em Administração','Campus Júlio de Castilhos','Usuário','on','202cb962ac59075b964b07152d234b70','2022-12-05 15:27:03',1);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-12-08  9:15:32
