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
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categorias`
--

LOCK TABLES `categorias` WRITE;
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
INSERT INTO `categorias` VALUES (17,'Política'),(19,'Economia'),(20,'Esportes'),(21,'Crônicas'),(22,'Noticia');
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
  `texto` varchar(55500) DEFAULT NULL,
  `imagens` varchar(255) NOT NULL,
  `videos` varchar(255) DEFAULT NULL,
  `tags` varchar(255) NOT NULL,
  `id_categoria` int(11) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `datahora` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_categoria` (`id_categoria`),
  KEY `id_usuario` (`id_usuario`),
  CONSTRAINT `noticias_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`),
  CONSTRAINT `noticias_ibfk_2` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id`),
  CONSTRAINT `noticias_ibfk_3` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=114 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `noticias`
--

LOCK TABLES `noticias` WRITE;
/*!40000 ALTER TABLE `noticias` DISABLE KEYS */;
INSERT INTO `noticias` VALUES (106,'O Grand Canyon como nunca se viu','Um desfiladeiro íngreme esculpido pelo rio Colorado','O Grand Canyon é um desfiladeiro íngreme esculpido pelo rio Colorado, no estado do Arizona, nos Estados Unidos. A formação faz parte do Parque Nacional do Grand Canyon. O presidente estadunidense Theodore Roosevelt foi um grande defensor da preservação da área do Grand Canyon e visitou-o em várias ocasiões para caçar e apreciar a paisagem.\r\n\r\nO Grand Canyon tem 446 km de comprimento, até 29 km de largura e atinge uma profundidade de mais de 1,8 km. Por 2 bilhões de anos de história geológica da Terra o rio Colorado e seus afluentes cortaram seus canais através das camadas de rocha enquanto o planalto do Colorado era erguido.\r\n\r\nApesar de alguns aspectos sobre a história da incisão do canyon serem debatidos por geólogos, vários estudos recentes apoiam a hipótese de que o rio Colorado estabeleceu seu curso através da região há cerca de 5 ou 6 milhões de anos. Desde essa época, o rio tem aprofundado e alargado o desfiladeiro.\r\n\r\nPor milhares de anos, a área tem sido continuamente habitada por nativos norte-americanos, que construíram assentamentos em suas muitas cavernas. Os índios pueblo consideravam o Grand Canyon um local sagrado e faziam peregrinações até ele. O primeiro europeu que avistou o Grand Canyon foi García López de Cárdenas da Espanha, que chegou em 1540.\r\n\r\nEm 1999, o corredor de trilhas Carlos Sposito tornou-se o primeiro brasileiro a cruzar a região correndo sem paradas.','img/noticias/2019.08.09-00.59.38.jpg','Sem video','Grand Canyon, USA, Rio Colorado',21,1,'2019-08-09 00:59:38'),(107,'Limpeza da Praia do Futuro','Com participação de Influenciadoras digitais','Convidados e influenciadoras digitais se dedicaram ao processo de limpeza de uma faixa de 650 metros de praia. Na areia aparentemente limpa estavam ocultos pedaços de tijolo, bitucas de cigarro, embalagens plásticas, copos descartáveis, cascas de caranguejo e arestas de madeira.\r\n\r\nA mitigação dos danos causados ao meio ambiente por resíduos sólidos depende de cada um dos moradores da cidade, avalia Luzanira Ribeiro, estudante do curso de Ciências Ambientais da Universidade Federal do Ceará (UFC). Ela foi uma das participantes de ação de limpeza da Praia do Futuro, em Fortaleza, na manhã deste sábado. A iniciativa foi capitaneada pela empresa Cardigan em parceria com a Sunrise Beach Clube, a Pizzon, a Pague Menos e a Dauf. Ao longo da manhã, convidados e influenciadoras digitais se dedicaram ao processo de limpeza de uma faixa de 650 metros de praia. O grupo também teve um momento de conversa com os estudantes da universidade, que explicaram quais são os efeitos do plástico e de outros resíduos sólidos para o meio ambiente quando descartados de modo incorreto','img/noticias/2019.08.09-01.08.39.jpg','Sem video','Praia, Fortaleza, Meio Ambiente',21,4,'2019-08-09 01:08:39'),(108,'Previdência: relator elogia texto da Câmara','Tasso Jereissati apresentará parecer à CCJ; se Senado mudar texto da Câmara.','O senador Tasso Jereissati (PSDB-CE), escolhido relator da reforma da Previdência, elogiou nesta quinta-feira (8) o texto aprovado pela Câmara e afirmou que eventuais mudanças devem ser feitas por uma proposta de emenda à Constituição (PEC) paralela.\r\n\r\nAprovada pelos deputados em segundo turno nesta quarta (7), a proposta já foi entregue pelo presidente da Câmara, Rodrigo Maia (DEM-RJ), ao presidente do Senado, Davi Alcolumbre (DEM-AP). Agora, caberá a Jereissati apresentar um parecer à Comissão de Constituição e Justiça (CCJ) sobre a reforma.\r\n\r\n\"O meu convencimento pessoal como relator é que, se tiver que mudar alguma coisa, tem que ser o mínimo possível. A reforma que veio da Câmara, na minha opinião, é boa. Ela é um trabalho ótimo feito pela Câmara\", declarou Jereissati.\r\n\r\nSe o Senado mantiver o texto aprovado pela Câmara, a reforma seguirá para promulgação. Se os senadores modificarem a proposta, a PEC voltará à Câmara para nova análise dos deputados.\r\n\r\nDiante disso, Tasso Jereissati afirmou que eventuais mudanças, como a inclusão de estados e municípios, devem ser discutidas em outra PEC.\r\n\r\n\"O ponto que eu considero, e que há um consenso praticamente sobre isso aqui no Senado, é a inclusão de estados e municípios em uma PEC paralela. Porque o nosso compromisso com o país e com o Senado é de que o coração da reforma não volte para a Câmara, para lá na Câmara começar todo o processo novamente. O país não suporta isso\", acrescentou.','img/noticias/2019.08.09-01.12.26.jpg','Sem video','Reforma da previdência, Senado, Tasso Jereissate',17,3,'2019-08-09 01:12:26'),(109,'Caetano Veloso se apresenta','','Famosos vão à inauguração do MG4, conjunto de novos estúdios da Globo\r\nTony Ramos, Adriana Esteves, Isis Valverde, Murilo Benício, Vladimir Brichta participaram do evento nesta quinta (8), no Rio de Janeiro.\r\nFernanda Montenegro fez discurso na inauguração e Caetano Veloso se apresenta na inauguração do complexo MG4.','img/noticias/2019.08.09-01.19.41.jpg','Sem video','Caetano Veloso, Estúdio Globo, Inauguração',22,6,'2019-08-09 01:19:41'),(110,'Moro pede que PGR investigue presidente da OAB','Felipe santa cruz teria caluniado o ministro','O ministro da Justiça, Sergio Moro, pediu à Procuradoria-Geral da República que investigue o presidente da OAB (Ordem dos Advogados do Brasil), Felipe Santa Cruz, por suposto crime de calúnia. No documento, ele diz que Santa Cruz fez declarações que podem caracterizar crimes contra sua honra e pede que \"sejam as condutas apuradas e promovida a responsabilização criminal cabível\". Nos ofícios encaminhados por Moro à PGR, o ministro argumenta que, após análise, \"a conduta do ofensor reúne elementos aptos ao enquadramento nos tipos penais de calúnia, injúria e difamação, com o que estou de acordo, além de consignar que o teor da manifestação repercutiu, efetivamente, sobre a minha honra subjetiva','img/noticias/2019.08.09-01.27.07.jpg','Sem video','Sergio Moro, OAB, Investigação',17,10,'2019-08-09 01:27:07'),(113,'Dorival Júnior admite chance de negociação com o Cruzeiro','Treinador volta a negar contato com diretoria da Raposa para assumir posto de Mano','Em meio às especulações que o colocam entre os nomes preferidos para assumir o Cruzeiro, Dorival Júnior atendeu à ligação do GloboEsporte.com nesta quinta-feira. Estava \"em casa\", na cidade de Florianópolis, onde mora com a família.\r\n\r\nO técnico não treina nenhuma equipe desde que deixou o Flamengo, no fim do Brasileirão do ano passado. Dorival disse que estava feliz em ter o nome cotado para assumir o Cruzeiro. O treinador afirmou que vinha acompanhando a equipe, comandada por Mano Menezes, que deixou o cargo após a derrota para o Internacional, no jogo de ida das semifinais da Copa do Brasil.\r\n\r\n- Claro que estou acompanhando o Cruzeiro. Quem está fora, como eu, procura ver todos os clubes - disse Dorival à reportagem.\r\n\r\nO GloboEsporte.com apurou que o Dorival Júnior e a direção do Cruzeiro iniciaram conversas nesta quinta-feira. O próximo passo da negociação envolve reunião entre as partes. Uma das condições pedidas pelo treinador é a assinatura de um contrato a longo prazo. Perguntado sobre a negociação, disse que não recebeu contato do clube mineiro, até o momento.\r\n\r\n- Ninguém me ligou, nem para meu agente - afirmou o treinador.\r\n\r\nNo entanto, Dorival admitiu que está aberto a propostas e considera o fato de o clube não ter mais um técnico empregado, após a saída de Mano Menezes, como um facilitador.','img/noticias/2019.08.09-02.19.08.jpg','Sem video','Dorival Jr, Cruzeiro, Negociação',20,11,'2019-08-09 02:19:08');
/*!40000 ALTER TABLE `noticias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissoes`
--

DROP TABLE IF EXISTS `permissoes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permissoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissoes`
--

LOCK TABLES `permissoes` WRITE;
/*!40000 ALTER TABLE `permissoes` DISABLE KEYS */;
/*!40000 ALTER TABLE `permissoes` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'João Paulo de Araújo Ferreira','joaopauloaferreira23@gmail.com','f913184fe8e5aed1ad65c1730bc0d80f','administrador'),(3,'Paulo','paulico@email.com','d5f0790a48b3f1b9fe4ffe5538ef7c0d','Padrão'),(4,'Maria','maria@email.com','d5f0790a48b3f1b9fe4ffe5538ef7c0d','Padrão'),(6,'Julia','julia@email.com','d5f0790a48b3f1b9fe4ffe5538ef7c0d','Padrão'),(10,'Mateus','mateus@email.com','d5f0790a48b3f1b9fe4ffe5538ef7c0d','Padrão'),(11,'Pedro','pedro@email.com','d5f0790a48b3f1b9fe4ffe5538ef7c0d','Padrão'),(12,'Felipe','felipe@email.com','d5f0790a48b3f1b9fe4ffe5538ef7c0d','Padrão'),(13,'Luiz','luiz@email.com','d5f0790a48b3f1b9fe4ffe5538ef7c0d','Padrão');
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

-- Dump completed on 2019-08-09  2:35:24
