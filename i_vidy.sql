-- MySQL dump 10.17  Distrib 10.3.17-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: i_vidy
-- ------------------------------------------------------
-- Server version	10.3.17-MariaDB-0ubuntu0.19.04.1

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
-- Table structure for table `Client`
--

DROP TABLE IF EXISTS `Client`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Client` (
  `id_client` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `mail` varchar(50) NOT NULL,
  `telephone` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id_client`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Client`
--

LOCK TABLES `Client` WRITE;
/*!40000 ALTER TABLE `Client` DISABLE KEYS */;
INSERT INTO `Client` VALUES (1,'nom','ptr','m@gmail.com',5555),(2,'RAKOTO','Bema','bema@gmail.com',4555),(3,'Ntsoa','nn','ntsoa.s118@gmail.com',346664788),(4,'nom','prenom','maim@gmail.com',555),(5,'mm','kk','tt@gmail.com',8855),(6,'xc','xc','xcxc@gmail.com',656),(7,'Jule','Rakoto','hh@gmail.com',365626),(8,'sd','sd','qsdqsd@gmail.com',55);
/*!40000 ALTER TABLE `Client` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Commande`
--

DROP TABLE IF EXISTS `Commande`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Commande` (
  `id_commande` int(11) NOT NULL AUTO_INCREMENT,
  `date_commande` date NOT NULL,
  `heure_commande` time NOT NULL,
  `id_repas` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  PRIMARY KEY (`id_commande`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Commande`
--

LOCK TABLES `Commande` WRITE;
/*!40000 ALTER TABLE `Commande` DISABLE KEYS */;
INSERT INTO `Commande` VALUES (1,'2019-08-05','08:00:00',1,1),(2,'2019-08-21','10:30:00',1,2),(3,'2019-08-23','09:00:00',1,2),(4,'2019-08-15','10:30:00',1,3),(5,'2019-08-15','11:15:00',1,6),(6,'2019-08-06','10:00:00',5,8);
/*!40000 ALTER TABLE `Commande` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Contrat`
--

DROP TABLE IF EXISTS `Contrat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Contrat` (
  `num_livraison` int(11) NOT NULL,
  `id_produit` int(11) NOT NULL,
  `quantite_livraison` int(11) NOT NULL,
  PRIMARY KEY (`num_livraison`,`id_produit`),
  KEY `contrat_Produit0_FK` (`id_produit`),
  CONSTRAINT `contrat_Livraison_FK` FOREIGN KEY (`num_livraison`) REFERENCES `Livraison` (`num_livraison`),
  CONSTRAINT `contrat_Produit0_FK` FOREIGN KEY (`id_produit`) REFERENCES `Produit` (`id_produit`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Contrat`
--

LOCK TABLES `Contrat` WRITE;
/*!40000 ALTER TABLE `Contrat` DISABLE KEYS */;
/*!40000 ALTER TABLE `Contrat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Demande`
--

DROP TABLE IF EXISTS `Demande`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Demande` (
  `id_commande` int(11) NOT NULL,
  `id_produit` int(11) NOT NULL,
  `quantite_commande` int(11) NOT NULL,
  PRIMARY KEY (`id_commande`,`id_produit`),
  KEY `demande_Produit0_FK` (`id_produit`),
  CONSTRAINT `demande_Commande_FK` FOREIGN KEY (`id_commande`) REFERENCES `Commande` (`id_commande`),
  CONSTRAINT `demande_Produit0_FK` FOREIGN KEY (`id_produit`) REFERENCES `Produit` (`id_produit`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Demande`
--

LOCK TABLES `Demande` WRITE;
/*!40000 ALTER TABLE `Demande` DISABLE KEYS */;
/*!40000 ALTER TABLE `Demande` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Livraison`
--

DROP TABLE IF EXISTS `Livraison`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Livraison` (
  `num_livraison` int(11) NOT NULL AUTO_INCREMENT,
  `id_repas` int(11) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `id_client` int(11) NOT NULL,
  `prix_livraison` int(11) NOT NULL,
  PRIMARY KEY (`num_livraison`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Livraison`
--

LOCK TABLES `Livraison` WRITE;
/*!40000 ALTER TABLE `Livraison` DISABLE KEYS */;
INSERT INTO `Livraison` VALUES (1,1,'222',4,0),(2,2,'88566',5,2000),(3,1,'Talata',7,2000);
/*!40000 ALTER TABLE `Livraison` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Produit`
--

DROP TABLE IF EXISTS `Produit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Produit` (
  `id_produit` int(11) NOT NULL AUTO_INCREMENT,
  `nom_produit` varchar(255) NOT NULL,
  `prix_produit` decimal(15,3) NOT NULL,
  `quantite_produit` int(11) NOT NULL,
  PRIMARY KEY (`id_produit`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Produit`
--

LOCK TABLES `Produit` WRITE;
/*!40000 ALTER TABLE `Produit` DISABLE KEYS */;
/*!40000 ALTER TABLE `Produit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Repas`
--

DROP TABLE IF EXISTS `Repas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Repas` (
  `id_repas` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `prix` int(9) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_repas`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Repas`
--

LOCK TABLES `Repas` WRITE;
/*!40000 ALTER TABLE `Repas` DISABLE KEYS */;
INSERT INTO `Repas` VALUES (1,'Sakafo matsiro','I am a very simple card. I am good at containing small bits of information.\r\nI am convenient because I require little markup to use effectively.',5000,'food2.jpg'),(2,'Sakafo miavaka','I am a very simple card. I am good at containing small bits of information.\r\nI am convenient because I require little markup to use effectively.',3500,'food1.jpg'),(3,'Frite','Frite tena matsiro be',2000,'frite.JPG'),(5,'Vary miaraka @ anadrano sy sosisy','Gasisasy mahavoky be oooo!',7500,'MDG_5457.jpg');
/*!40000 ALTER TABLE `Repas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Reservation`
--

DROP TABLE IF EXISTS `Reservation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Reservation` (
  `num_reservation` int(11) NOT NULL AUTO_INCREMENT,
  `date_reservation` date NOT NULL,
  `heure_reservation` time NOT NULL,
  `nombre_personne` int(5) DEFAULT NULL,
  `id_client` int(11) NOT NULL,
  PRIMARY KEY (`num_reservation`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Reservation`
--

LOCK TABLES `Reservation` WRITE;
/*!40000 ALTER TABLE `Reservation` DISABLE KEYS */;
/*!40000 ALTER TABLE `Reservation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Table_table`
--

DROP TABLE IF EXISTS `Table_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Table_table` (
  `num_table` int(11) NOT NULL,
  `nbChaise_table` int(11) NOT NULL,
  PRIMARY KEY (`num_table`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Table_table`
--

LOCK TABLES `Table_table` WRITE;
/*!40000 ALTER TABLE `Table_table` DISABLE KEYS */;
INSERT INTO `Table_table` VALUES (1,2),(2,2),(3,2),(4,2),(5,2),(6,2),(7,2),(8,2),(9,2),(10,2),(11,4),(12,4),(13,4),(14,4),(15,4),(16,4),(17,4),(18,4),(19,4),(20,4),(21,6),(22,6),(23,6),(24,6),(25,6),(26,6),(27,6),(28,6),(29,6),(30,6);
/*!40000 ALTER TABLE `Table_table` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reservation_table`
--

DROP TABLE IF EXISTS `reservation_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reservation_table` (
  `num_reservation` int(11) NOT NULL,
  `num_table` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reservation_table`
--

LOCK TABLES `reservation_table` WRITE;
/*!40000 ALTER TABLE `reservation_table` DISABLE KEYS */;
/*!40000 ALTER TABLE `reservation_table` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-08-21  8:24:43
