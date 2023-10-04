-- MariaDB dump 10.19  Distrib 10.5.21-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: languageapp
-- ------------------------------------------------------
-- Server version	10.5.21-MariaDB

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
-- Table structure for table `conjugation_present`
--

DROP TABLE IF EXISTS `conjugation_present`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `conjugation_present` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `translation` varchar(255) NOT NULL,
  `example` varchar(255) NOT NULL,
  `je` varchar(255) NOT NULL,
  `tu` varchar(255) NOT NULL,
  `ilelle` varchar(255) NOT NULL,
  `nous` varchar(255) NOT NULL,
  `vous` varchar(255) NOT NULL,
  `ilselles` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `conjugation_present`
--

LOCK TABLES `conjugation_present` WRITE;
/*!40000 ALTER TABLE `conjugation_present` DISABLE KEYS */;
INSERT INTO `conjugation_present` VALUES (1,'avoir','to have','Elle a un chien.','ai','as','a','avons','avez','ont'),(2,'être','to be','Je suis sympa.','suis','es','est','sommes','êtes','sont'),(3,'aller','to go','Nous allons au supermarché.','vais','vas','va','allons','allez','vont'),(4,'faire','to do','Je fais du yoga.','fais','fais','fait','faisons','faites','font'),(5,'dire','to say','Je dis la vérité.','dis','dis','dit','disons','dites','disent'),(6,'voir','to see','Vous voyez les goélands.','vois','vois','voit','voyons','voyez','voient'),(7,'savoir','to know','Je ne sais pas.','sais','sais','sait','savons','savez','savent'),(8,'pouvoir','can','Tu peux le faire.','peux','peux','peut','pouvons','pouvez','peuvent'),(9,'vouloir','to want','Je veux de la glace.','veux','veux','veut','voulons','voulez','veulent'),(10,'venir','to come','undefined','viens','viens','vient','venons','venez','viennent'),(11,'prendre','to take','Tu prends un café.','prends','prends','prend','prenons','prenez','prennent'),(12,'arriver','to arrive','J’arrive dans dix minutes.','arrive','arrives','arrive','arrivons','arrivez','arrivent'),(13,'croire','to believeto guess','Je crois que c’est vrai.','crois','crois','croit','croyons','croyez','croient'),(14,'mettre','to put','Tu mets des glaçons dans ton verre.','mets','mets','met','mettons','mettez','mettent'),(15,'passer','to pass','Il passe devant la maison.','passe','passes','passe','passons','passez','passent'),(16,'devoir','must','Je dois partir bientôt.','dois','dois','doit','devons','devez','doivent');
/*!40000 ALTER TABLE `conjugation_present` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-10-04  9:22:10
