-- MySQL dump 10.13  Distrib 5.7.24, for Linux (x86_64)
--
-- Host: localhost    Database: portal
-- ------------------------------------------------------
-- Server version	5.7.24-0ubuntu0.16.04.1

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
-- Table structure for table `assinantes`
--

DROP TABLE IF EXISTS `assinantes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `assinantes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `assinantes`
--

LOCK TABLES `assinantes` WRITE;
/*!40000 ALTER TABLE `assinantes` DISABLE KEYS */;
/*!40000 ALTER TABLE `assinantes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categorias`
--

DROP TABLE IF EXISTS `categorias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categorias`
--

LOCK TABLES `categorias` WRITE;
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
INSERT INTO `categorias` VALUES (1,'Categoria 1'),(2,'Categoria 2'),(3,'Categoria 3');
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `noticias`
--

DROP TABLE IF EXISTS `noticias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `noticias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) NOT NULL,
  `subtitulo` varchar(255) NOT NULL,
  `texto` varchar(255) NOT NULL,
  `imagens` varchar(255) DEFAULT NULL,
  `videos` varchar(255) DEFAULT NULL,
  `tags` varchar(255) NOT NULL,
  `id_categoria` int(11) DEFAULT NULL,
  `datahora` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_usuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_usuario` (`id_usuario`),
  KEY `id_categoria` (`id_categoria`),
  CONSTRAINT `noticias_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`),
  CONSTRAINT `noticias_ibfk_2` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `noticias`
--

LOCK TABLES `noticias` WRITE;
/*!40000 ALTER TABLE `noticias` DISABLE KEYS */;
INSERT INTO `noticias` VALUES (1,'Primeira NotÃ­cia do Portal','Este Ã© um subtitulo pra a primeira notÃ­cia','Lorem ispum lorem lorem','www.servidordeimagens.com.br/imagem_da_primeira_noticia','www.servidordevideo.com.br/video_da_primeira_noticia','Primeira noticia, inauguraÃ§Ã£o',NULL,'2019-07-30 01:08:41',NULL),(2,'Primeira NotÃ­cia do Portal','Este Ã© um subtitulo pra a primeira notÃ­cia','Lorem ispum lorem lorem','www.servidordeimagens.com.br/imagem_da_primeira_noticia','www.servidordevideo.com.br/video_da_primeira_noticia','Primeira noticia, inauguraÃ§Ã£o',NULL,'2019-07-30 03:12:27',NULL),(3,'Primeira NotÃ­cia do Portal','Este Ã© um subtitulo pra a primeira notÃ­cia','Lorem ispum lorem lorem','www.servidordeimagens.com.br/imagem_da_primeira_noticia','www.servidordevideo.com.br/video_da_primeira_noticia','Primeira noticia, inauguraÃ§Ã£o',NULL,'2019-07-30 03:15:46',NULL),(4,'Segunda NotÃ­cia do Portal','Este Ã© um subtitulo pra a primeira notÃ­cia','Lorem ispum lorem lorem','www.servidordeimagens.com.br/imagem_da_primeira_noticia','www.servidordevideo.com.br/video_da_primeira_noticia','Primeira noticia, inauguraÃ§Ã£o',NULL,'2019-07-30 03:16:02',NULL),(5,'Terceira NotÃ­cia do Portal','Este Ã© um subtitulo pra a primeira notÃ­cia','Lorem ispum lorem lorem','www.servidordeimagens.com.br/imagem_da_primeira_noticia','www.servidordevideo.com.br/video_da_primeira_noticia','Primeira noticia, inauguraÃ§Ã£o',NULL,'2019-07-30 03:17:13',NULL),(6,'Terceira NotÃ­cia do Portal','Este Ã© um subtitulo pra a primeira notÃ­cia','Lorem ispum lorem lorem','www.servidordeimagens.com.br/imagem_da_primeira_noticia','www.servidordevideo.com.br/video_da_primeira_noticia','Primeira noticia, inauguraÃ§Ã£o',NULL,'2019-07-30 03:20:41',NULL),(7,'Terceira Notícia do Portal','Este é um subtitulo pra a primeira notícia','Lorem ispum lorem lorem','www.servidordeimagens.com.br/imagem_da_primeira_noticia','www.servidordevideo.com.br/video_da_primeira_noticia','Primeira noticia, inauguração',NULL,'2019-07-30 03:22:01',NULL),(8,'Isso é um teste','Testando','		    sdfscategoriacategoriacategoriacategoriacategoria','','','',2,'2019-07-30 05:08:36',NULL),(9,'Isso é um teste','Testando','		    sdfscategoriacategoriacategoriacategoriacategoria','','','',2,'2019-07-30 05:09:09',NULL),(10,'Isso é um teste','Testando','		    sdfscategoriacategoriacategoriacategoriacategoria','','','',2,'2019-07-30 05:09:13',NULL),(11,'Isso é um teste','Testando','		    sdfscategoriacategoriacategoriacategoriacategoria','','','',2,'2019-07-30 05:09:21',NULL),(12,'Isso é um teste','Testando','		    sdfscategoriacategoriacategoriacategoriacategoria','','','',2,'2019-07-30 05:09:41',NULL),(13,'Isso é um teste','Testando','		    sdfscategoriacategoriacategoriacategoriacategoria','','','',2,'2019-07-30 05:09:46',NULL),(14,'Isso é um teste','Testando','		    sdfscategoriacategoriacategoriacategoriacategoria','','','',2,'2019-07-30 05:10:34',NULL),(15,'Isso é um teste','Testando','		    sdfscategoriacategoriacategoriacategoriacategoria','','','',2,'2019-07-30 05:10:53',NULL),(16,'Isso é um teste','Testando','		    sdfscategoriacategoriacategoriacategoriacategoria','','','',2,'2019-07-30 05:11:10',NULL),(17,'Isso é um teste','Testando','		    sdfscategoriacategoriacategoriacategoriacategoria','','','Teste, teste, teste',2,'2019-07-30 05:11:39',NULL),(18,'Isso é um teste','Testando','		    sdfscategoriacategoriacategoriacategoriacategoria','','','Teste, teste, teste',2,'2019-07-30 05:12:01',NULL),(19,'Isso é um teste','Testando','		    sdfscategoriacategoriacategoriacategoriacategoria','','','Teste, teste, teste',2,'2019-07-30 05:12:21',NULL),(20,'Isso é um teste','Testando','		    sdfscategoriacategoriacategoriacategoriacategoria','','','Teste, teste, teste',2,'2019-07-30 05:12:21',NULL),(21,'Isso é um teste','Testando','		    sdfscategoriacategoriacategoriacategoriacategoria','asds','asds','Teste, teste, teste',2,'2019-07-30 05:13:05',NULL),(22,'Isso é um teste','Testando','		    sdfscategoriacategoriacategoriacategoriacategoria','','','Teste, teste, teste',2,'2019-07-30 05:13:57',NULL),(23,'Isso é um teste','Testando','		    sdfscategoriacategoriacategoriacategoriacategoria','','','Teste, teste, teste',2,'2019-07-30 05:15:05',NULL),(24,'Isso é um teste','Testando','		    sdfscategoriacategoriacategoriacategoriacategoria','','','Teste, teste, teste',NULL,'2019-07-30 05:16:04',NULL),(25,'Isso é um teste','Testando','		    sdfscategoriacategoriacategoriacategoriacategoria','','','Teste, teste, teste',2,'2019-07-30 05:16:35',NULL);
/*!40000 ALTER TABLE `noticias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `nivel_permissao` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
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

-- Dump completed on 2019-07-30 22:26:35
