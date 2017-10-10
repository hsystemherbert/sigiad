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

-- Copiando estrutura para tabela db_dionysius.adm_paginas_grupos
CREATE TABLE IF NOT EXISTS `adm_paginas_grupos` (
  `idPaginaGrupo` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `icone` varchar(50) NOT NULL,
  `htmlId` varchar(20) NOT NULL,
  PRIMARY KEY (`idPaginaGrupo`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela db_dionysius.adm_paginas_grupos: ~10 rows (aproximadamente)
/*!40000 ALTER TABLE `adm_paginas_grupos` DISABLE KEYS */;
INSERT INTO `adm_paginas_grupos` (`idPaginaGrupo`, `nome`, `icone`, `htmlId`) VALUES
	(5, 'Setores', 'fa fa-group', 'setores'),
	(8, 'Usuários', 'fa fa-user', 'usuarios'),
	(9, 'Fornecedores', 'fa fa-industry', 'fornecedores'),
	(10, 'Clientes', 'fa fa-male', 'clientes'),
	(11, 'Produtos', 'fa fa-gift', 'produtos'),
	(12, 'Estoque', 'fa fa-archive', 'estoque'),
	(13, 'Vendas', 'fa fa-shopping-cart', 'vendas'),
	(14, 'Relatórios', 'fa fa-book', 'relatorios'),
	(15, 'Meios de Pagamento', 'fa fa-credit-card-alt', 'meiospagamento'),
	(16, 'Pagamentos', 'fa fa-money', 'pagamentos');
/*!40000 ALTER TABLE `adm_paginas_grupos` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
