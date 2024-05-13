-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.32-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.5.0.6677
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para paperjobs
CREATE DATABASE IF NOT EXISTS `paperjobs` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `paperjobs`;

-- Copiando estrutura para tabela paperjobs.movimentacoes_pontos
CREATE TABLE IF NOT EXISTS `movimentacoes_pontos` (
  `id_movimentacao` int(11) NOT NULL AUTO_INCREMENT,
  `usuario_vinculado` int(11) DEFAULT NULL,
  `total_pontos` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_movimentacao`),
  KEY `usuario_vinculado` (`usuario_vinculado`),
  CONSTRAINT `usuario_vinculado_pontos` FOREIGN KEY (`usuario_vinculado`) REFERENCES `usuarios` (`usuario_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela paperjobs.movimentacoes_pontos: ~0 rows (aproximadamente)
DELETE FROM `movimentacoes_pontos`;

-- Copiando estrutura para tabela paperjobs.pontos
CREATE TABLE IF NOT EXISTS `pontos` (
  `usuario_vinculado` int(11) DEFAULT NULL,
  `total_pontos` int(11) DEFAULT NULL,
  KEY `usuario_vinculado` (`usuario_vinculado`),
  CONSTRAINT `usuario_vinculado` FOREIGN KEY (`usuario_vinculado`) REFERENCES `usuarios` (`usuario_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela paperjobs.pontos: ~0 rows (aproximadamente)
DELETE FROM `pontos`;

-- Copiando estrutura para tabela paperjobs.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `usuario_id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario_login` varchar(50) DEFAULT NULL,
  `usuario_senha` varchar(255) DEFAULT NULL,
  `usuario_nome` varchar(50) DEFAULT NULL,
  `usuario_telefone` varchar(50) DEFAULT NULL,
  `usuario_email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`usuario_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela paperjobs.usuarios: ~1 rows (aproximadamente)
DELETE FROM `usuarios`;
INSERT INTO `usuarios` (`usuario_id`, `usuario_login`, `usuario_senha`, `usuario_nome`, `usuario_telefone`, `usuario_email`) VALUES
	(1, 'admin', '$2y$10$4RSNVU8/FG/H/9B.c693g.rWADEsvX.U/6gWnkH5P3dmV8ptnBroG', 'administrador', '11972657465', 'devdamaceno@gmail.com');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
