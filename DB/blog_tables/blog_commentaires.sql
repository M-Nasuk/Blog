-- MySQL dump 10.13  Distrib 5.7.24, for Linux (x86_64)
--
-- Host: localhost    Database: blog
-- ------------------------------------------------------
-- Server version	5.7.24-0ubuntu0.18.04.1

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
-- Table structure for table `commentaires`
--

DROP TABLE IF EXISTS `commentaires`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `commentaires` (
  `id_commentaires` bigint(11) NOT NULL AUTO_INCREMENT,
  `author` bigint(11) NOT NULL,
  `date_de_publication` datetime NOT NULL,
  `texte` longtext NOT NULL,
  `insertion_image` blob,
  `valider_comm` tinyint(1) DEFAULT NULL,
  `reponse_comm` longtext,
  `billet` bigint(11) NOT NULL,
  `parent` bigint(11) DEFAULT NULL,
  PRIMARY KEY (`id_commentaires`),
  UNIQUE KEY `id_comentaires_UNIQUE` (`id_commentaires`),
  KEY `fk_commentaires_3_idx` (`parent`),
  KEY `fk_commentaires_1_idx` (`author`),
  KEY `fk_commentaires_2_idx` (`billet`),
  CONSTRAINT `fk_commentaires_1` FOREIGN KEY (`author`) REFERENCES `utilisateur` (`id_utilisateur`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_commentaires_2` FOREIGN KEY (`billet`) REFERENCES `billet` (`id_billet`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_commentaires_3` FOREIGN KEY (`parent`) REFERENCES `commentaires` (`id_commentaires`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `commentaires`
--

LOCK TABLES `commentaires` WRITE;
/*!40000 ALTER TABLE `commentaires` DISABLE KEYS */;
INSERT INTO `commentaires` VALUES (3,1,'2019-01-10 16:04:52','Test Comm 1',NULL,NULL,NULL,9,NULL),(4,1,'2019-01-10 16:05:22','Commentaires 2',NULL,NULL,NULL,9,NULL),(5,2,'2019-01-10 16:41:15','Comm 3 \r\nOK\r\nTest',NULL,NULL,NULL,9,NULL),(6,2,'2019-01-10 16:42:59','Commentaires 4',NULL,NULL,NULL,9,NULL),(7,2,'2019-01-10 16:43:25','Comentaires 5',NULL,NULL,NULL,9,NULL),(8,2,'2019-01-10 16:46:19','Commentaires 6',NULL,NULL,NULL,9,NULL),(9,3,'2019-01-11 14:06:15','salut',NULL,NULL,NULL,9,NULL);
/*!40000 ALTER TABLE `commentaires` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-01-14  9:54:27
