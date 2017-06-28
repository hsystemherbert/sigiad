-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.7.14 - MySQL Community Server (GPL)
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Copiando estrutura para tabela db_dionysius.adm_usuario
CREATE TABLE IF NOT EXISTS `adm_usuario` (
  `idUsuario` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `login` varchar(100) NOT NULL,
  `nivel` tinyint(4) NOT NULL DEFAULT '0',
  `password` char(32) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `foto` varchar(50) DEFAULT NULL,
  `idSetor` int(11) DEFAULT NULL,
  `telefone` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`idUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela db_dionysius.adm_usuario: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `adm_usuario` DISABLE KEYS */;
INSERT INTO `adm_usuario` (`idUsuario`, `login`, `nivel`, `password`, `nome`, `foto`, `idSetor`, `telefone`) VALUES
	(10, 'danielcanedo@live.com', 0, 'e10adc3949ba59abbe56e057f20f883e', 'Daniel Canêdo', '10.jpg\r\n', 5, NULL),
	(11, 'joao034@hotmail.com', 0, '7b35f32bf3c096094e53555adba666ae', 'João Francisco', '', 6, 24974034641);
/*!40000 ALTER TABLE `adm_usuario` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
