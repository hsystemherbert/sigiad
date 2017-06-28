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

-- Copiando estrutura para tabela db_dionysius.adm_setores_paginas
CREATE TABLE IF NOT EXISTS `adm_setores_paginas` (
  `idPagina` smallint(5) unsigned NOT NULL,
  `IdSetor` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`idPagina`,`IdSetor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Informa as páginas que o setor terá acesso';

-- Copiando dados para a tabela db_dionysius.adm_setores_paginas: ~33 rows (aproximadamente)
/*!40000 ALTER TABLE `adm_setores_paginas` DISABLE KEYS */;
INSERT INTO `adm_setores_paginas` (`idPagina`, `IdSetor`) VALUES
	(9, 5),
	(10, 5),
	(15, 5),
	(21, 5),
	(22, 5),
	(23, 5),
	(24, 5),
	(26, 5),
	(27, 5),
	(28, 5),
	(29, 5),
	(30, 5),
	(31, 5),
	(32, 5),
	(33, 5),
	(34, 5),
	(35, 5),
	(36, 5),
	(37, 5),
	(38, 5),
	(39, 5),
	(40, 5),
	(42, 5),
	(43, 5),
	(44, 5),
	(45, 5),
	(46, 5),
	(47, 5),
	(49, 5),
	(50, 5),
	(51, 5),
	(52, 5),
	(53, 5);
/*!40000 ALTER TABLE `adm_setores_paginas` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
