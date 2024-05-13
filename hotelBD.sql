-- MySQL dump 10.13  Distrib 8.3.0, for macos13.6 (x86_64)
--
-- Host: localhost    Database: hotel_BD
-- ------------------------------------------------------
-- Server version	8.3.0

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
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
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admin` (
  `idadmin` int unsigned NOT NULL,
  `name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  PRIMARY KEY (`idadmin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'Moha','moha@gmail.com','moh2000'),(2,'Yaya','yaya@gmail.com','yaya2001'),(3,'Michael','michael@gmail;com','mic2024');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `chambre`
--

DROP TABLE IF EXISTS `chambre`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `chambre` (
  `idchambre` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `superficie` int DEFAULT NULL,
  `hotel_idhotel` int NOT NULL,
  `image_idimage` int NOT NULL,
  `prix` int DEFAULT NULL,
  `nombre_adulte` int DEFAULT NULL,
  `nombre_enfant` int DEFAULT NULL,
  `type_idtype` int NOT NULL,
  PRIMARY KEY (`idchambre`,`hotel_idhotel`,`image_idimage`,`type_idtype`),
  KEY `fk_chambre_hotel_idx` (`hotel_idhotel`),
  KEY `fk_chambre_type1_idx` (`type_idtype`),
  CONSTRAINT `fk_chambre_hotel` FOREIGN KEY (`hotel_idhotel`) REFERENCES `hotel` (`idhotel`),
  CONSTRAINT `fk_chambre_type1` FOREIGN KEY (`type_idtype`) REFERENCES `type` (`idtype`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chambre`
--

LOCK TABLES `chambre` WRITE;
/*!40000 ALTER TABLE `chambre` DISABLE KEYS */;
INSERT INTO `chambre` VALUES (1,'c1',18,1,1,235,1,0,1),(2,'c2',25,1,2,135,2,0,2),(3,'c3',35,2,3,400,2,1,1),(4,'A1',25,4,4,350,2,1,3),(5,'R1',30,5,5,530,2,2,4),(6,'R2',45,5,9,700,1,1,4);
/*!40000 ALTER TABLE `chambre` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `client`
--

DROP TABLE IF EXISTS `client`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `client` (
  `idclient` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  PRIMARY KEY (`idclient`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `client`
--

LOCK TABLES `client` WRITE;
/*!40000 ALTER TABLE `client` DISABLE KEYS */;
INSERT INTO `client` VALUES (1,'Moussa','samake@gmail.com','moussa66'),(2,'Kadia','kadia@gmail.com','kadia77'),(3,'Yacou','yacou@gmail.com','yacou83'),(4,'Ovi','ovi@gmail.com','ovi2024'),(5,'Antony','antony@gmail.com','antony'),(6,'Chris','chris@gmail.com','chris2024'),(10,'Lore','lore@gmail.com','lore2024'),(11,'Moussa','samake@gmail.com','moussa66');
/*!40000 ALTER TABLE `client` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hotel`
--

DROP TABLE IF EXISTS `hotel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `hotel` (
  `idhotel` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `adresse` varchar(45) NOT NULL,
  `image` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idhotel`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hotel`
--

LOCK TABLES `hotel` WRITE;
/*!40000 ALTER TABLE `hotel` DISABLE KEYS */;
INSERT INTO `hotel` VALUES (1,'palace','66 rue Camille, 75020 Paris','image/palace.jpeg'),(2,'Novotel','17 avenue Paule, 75012 Paris','image/novotel.jpeg'),(3,'Eden','55 rue de la place, 93200 Saint-Denis','image/eden.jpeg'),(4,'Amitié','23 avenue Charles De Gaule, Evry 91100','image/amitie.jpeg'),(5,'Radisson','18 rue des Moulins, Cachan 94230','image/radisson.jpeg'),(7,'IBIS hôtel','15 rue vavin, Saint-Denis 93200','image/hotel-e1425034775410.jpg'),(8,'Hôtel ARAS','54 Avenue CDG, Viry-Chatillon 91170','image/images.jpeg');
/*!40000 ALTER TABLE `hotel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `image`
--

DROP TABLE IF EXISTS `image`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `image` (
  `idimage` int NOT NULL AUTO_INCREMENT,
  `chambre_idchambre` int NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idimage`,`chambre_idchambre`),
  KEY `fk_image_chambre1_idx` (`chambre_idchambre`),
  CONSTRAINT `fk_image_chambre1` FOREIGN KEY (`chambre_idchambre`) REFERENCES `chambre` (`idchambre`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `image`
--

LOCK TABLES `image` WRITE;
/*!40000 ALTER TABLE `image` DISABLE KEYS */;
INSERT INTO `image` VALUES (1,1,'image/image1.jpeg'),(2,2,'image/image2.jpeg'),(3,1,'image/image3.jpeg'),(4,3,'image/image4.jpeg'),(5,1,'image/image5.jpeg'),(6,1,'image/image6.jpeg'),(7,4,'image/image4.jpeg'),(8,5,'image/image5.jpeg'),(9,6,'image/image6.jpeg');
/*!40000 ALTER TABLE `image` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `reservation` (
  `chambre_idchambre` int NOT NULL,
  `client_idclient` int NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `idreservation` int NOT NULL AUTO_INCREMENT,
  `montant` int NOT NULL,
  PRIMARY KEY (`idreservation`),
  KEY `fk_chambre_has_client_client1_idx` (`client_idclient`),
  KEY `fk_chambre_has_client_chambre1_idx` (`chambre_idchambre`),
  CONSTRAINT `fk_chambre_has_client_chambre1` FOREIGN KEY (`chambre_idchambre`) REFERENCES `chambre` (`idchambre`),
  CONSTRAINT `fk_chambre_has_client_client1` FOREIGN KEY (`client_idclient`) REFERENCES `client` (`idclient`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reservation`
--

LOCK TABLES `reservation` WRITE;
/*!40000 ALTER TABLE `reservation` DISABLE KEYS */;
INSERT INTO `reservation` VALUES (1,1,'2024-05-11','2024-05-12',33,235),(3,1,'2024-05-11','2024-05-12',34,400);
/*!40000 ALTER TABLE `reservation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `type`
--

DROP TABLE IF EXISTS `type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `type` (
  `idtype` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY (`idtype`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `type`
--

LOCK TABLES `type` WRITE;
/*!40000 ALTER TABLE `type` DISABLE KEYS */;
INSERT INTO `type` VALUES (1,'chambre individuelle'),(2,'double chambre'),(3,'chambre familiale'),(4,'suite');
/*!40000 ALTER TABLE `type` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-05-13 12:01:22
