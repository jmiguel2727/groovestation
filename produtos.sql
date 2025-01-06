-- --------------------------------------------------------
-- Anfitrião:                    127.0.0.1
-- Versão do servidor:           8.0.30 - MySQL Community Server - GPL
-- SO do servidor:               Win64
-- HeidiSQL Versão:              12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- A despejar estrutura da base de dados para grupo205
CREATE DATABASE IF NOT EXISTS `grupo205` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `grupo205`;

-- A despejar estrutura para tabela grupo205.compras
CREATE TABLE IF NOT EXISTS `compras` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `Produto_Id` int NOT NULL,
  `Nome` varchar(50) DEFAULT NULL,
  `Apelido` varchar(50) DEFAULT NULL,
  `Contacto` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Morada` varchar(50) DEFAULT NULL,
  `CodigoPostal` varchar(50) DEFAULT NULL,
  `Localidade` varchar(50) DEFAULT NULL,
  `NIF` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Id`),
  KEY `Produto_Id` (`Produto_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- A despejar dados para tabela grupo205.compras: ~0 rows (aproximadamente)

-- A despejar estrutura para tabela grupo205.produtos
CREATE TABLE IF NOT EXISTS `produtos` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `Tipo` int DEFAULT NULL COMMENT '1-Guitarras;2-Baterias;3-Teclados;4-Sopros;',
  `Nome` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `Preco` float DEFAULT NULL COMMENT 'Preço em €',
  `Descricao` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `Imagem` varchar(50) DEFAULT NULL,
  `Quantidade` int DEFAULT '0' COMMENT 'Quantidade do produto no carrinho.',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- A despejar dados para tabela grupo205.produtos: ~32 rows (aproximadamente)
INSERT INTO `produtos` (`Id`, `Tipo`, `Nome`, `Preco`, `Descricao`, `Imagem`, `Quantidade`) VALUES
	(1, 1, 'Guitarra Tipo ST', 690, 'Versátil, sons nítidos e ajustáveis.', 'GuitarraST.png', 0),
	(2, 1, 'Guitarra Tipo LP', 990, 'Som poderoso, ideal para rock e metal.', 'GuitarraLP.png', 0),
	(3, 1, 'Guitarra Tipo SG', 700, 'Estilo agressivo e som potente para solos.', 'GuitarraSG.png', 0),
	(4, 1, 'Guitarra Hollowbody', 900, 'Sons quentes e ressonantes, ideal para jazz.', 'GuitarraHollowbody.png', 0),
	(5, 1, 'Guitarra Clássica', 100, 'Sons suaves, ideal para música clássica.', 'GuitarraClassica.png', 0),
	(6, 1, 'Guitarra Acústica', 170, 'Som equilibrado, ideal para iniciantes.', 'GuitarraAcustica.png', 0),
	(7, 1, 'Guitarra Roundback', 200, 'Conforto e som brilhante para diversos estilos.', 'GuitarraRoundback.png', 0),
	(8, 1, 'Guitarra 12 cordas', 190, 'Som rico com 12 cordas, excelente para palco.', 'Guitarra12Cordas.png', 0),
	(9, 2, 'Timbalão Pequeno', 200, 'Compacto, som vibrante e fácil de transportar.', 'TimbalaoPequeno.png', 0),
	(10, 2, 'Bateria Acústica', 700, 'Bateria com som rico e poderoso, ideal para palco.', 'BateriaAcustica.png', 1),
	(11, 2, 'Bateria Digital', 600, 'Prática silenciosa, sons personalizáveis.', 'BateriaDigital.png', 4),
	(12, 2, 'Acessório', 100, 'Ferramenta essencial para ajustes de instrumentos.', 'Acessorio.png', 2),
	(13, 2, 'Bateria Clássica', 1000, 'Bateria tradicional, som equilibrado e versátil.', 'BateriaClassica.png', 0),
	(14, 2, 'Timbalão', 300, 'Graves profundos, ideal para samba.', 'Timbalao.png', 0),
	(15, 2, 'Tarola', 400, 'Som agudo e nítido, essencial para ritmos.', 'Tarola.png', 0),
	(16, 2, 'Bombo', 550, 'Impacto profundo, essencial para orquestras.', 'Bombo.png', 0),
	(18, 3, 'Yamaha PSR-SX720', 320, 'Teclado avançado com sons premium e recursos.', 'YamahaPSR-SX720.png', 0),
	(19, 3, 'Yamaha PSR-EW320', 540, 'Teclado com 76 teclas e variedade de sons.', 'YamahaPSR-EW320.png', 0),
	(20, 3, 'Casio CT-S100 Preto', 430, 'Teclado compacto com funções de aprendizado.', 'CasioCT-S100.png', 0),
	(21, 3, 'Casio CT-S1', 450, 'Teclado portátil com sons de alta qualidade.', 'CasioCT-S1.png', 0),
	(22, 3, 'Casio CT-S200', 570, 'Modelo avançado com sons vibrantes.', 'CasioCT-S200.png', 0),
	(23, 3, 'MIDI 25 teclas', 150, 'Controlador compacto para produção musical.', 'MIDI25Teclas.png', 0),
	(24, 3, 'MIDI 49 Teclas', 190, 'Versátil, ideal para composições e precisão.', 'MIDI49Teclas.png', 0),
	(25, 3, 'MIDI 88 Teclas', 270, 'Controlador completo para músicos profissionais.', 'MIDI88Teclas.png', 0),
	(26, 4, 'Trompete Sib', 3000, 'Som brilhante e dinâmico, ideal para jazz.', 'TrompeteSib.png', 0),
	(27, 4, 'Trombone Alto', 2500, 'Som claro e forte, ideal para orquestras.', 'TromboneAlto.png', 0),
	(28, 4, 'Tuba Sib', 1400, 'Timbre versátil, ideal para performances solo.', 'TubaSib.png', 0),
	(29, 4, 'Saxofone', 1200, 'Timbre rico, ideal para jazz e orquestras.\n', 'Saxofone.png', 0),
	(30, 4, 'Harmónica', 35, 'Compacta, ideal para blues e folk.', 'Harmonica.png', 0),
	(31, 4, 'Flauta de Bisel', 10, 'Som suave e claro, ideal para iniciantes.', 'FlautaDeBisel.png', 0),
	(32, 4, 'Tuba Dó', 3100, 'Graves profundos, essencial para orquestras.', 'TubaDo.png', 0),
	(33, 4, 'Trompa Bb', 600, 'Som aveludado, essencial para orquestras.', 'TrompaBb.png', 0);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
