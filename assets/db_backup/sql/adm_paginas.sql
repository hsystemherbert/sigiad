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

-- Copiando estrutura para tabela db_dionysius.adm_paginas
CREATE TABLE IF NOT EXISTS `adm_paginas` (
  `idPagina` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `idPaginaGrupo` smallint(5) unsigned NOT NULL,
  `nome` varchar(50) NOT NULL,
  `uri` varchar(50) NOT NULL,
  `mostraMenu` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY (`idPagina`),
  UNIQUE KEY `PAG_URI` (`uri`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela db_dionysius.adm_paginas: ~33 rows (aproximadamente)
/*!40000 ALTER TABLE `adm_paginas` DISABLE KEYS */;
INSERT INTO `adm_paginas` (`idPagina`, `idPaginaGrupo`, `nome`, `uri`, `mostraMenu`) VALUES
	(9, 5, 'Lista', 'setores', 1),
	(10, 5, 'Cadastro', 'setores/cadastro', 1),
	(15, 5, 'Alterar', 'setores/alterar', 0),
	(21, 8, 'Lista', 'usuarios', 1),
	(22, 8, 'Cadastro', 'usuarios/cadastro', 1),
	(23, 8, 'Alterar', 'usuarios/alterar', 0),
	(24, 9, 'Lista', 'fornecedores', 1),
	(26, 9, 'Cadastro', 'fornecedores/cadastro', 1),
	(27, 9, 'Alterar', 'fornecedores/alterar', 0),
	(28, 10, 'Lista', 'clientes', 1),
	(29, 10, 'Cadastro', 'clientes/cadastro', 1),
	(30, 10, 'Alterar', 'clientes/alterar', 0),
	(31, 11, 'Lista', 'produtos', 1),
	(32, 11, 'Cadastro', 'produtos/cadastro', 1),
	(33, 11, 'Alterar', 'produtos/alterar', 0),
	(34, 12, 'Entrada Produto', 'estoque/entrada', 1),
	(35, 12, 'Visualizar', 'estoque', 1),
	(36, 12, 'Listar', 'estoque/listar', 0),
	(37, 12, 'Saída Produto', 'estoque/saida', 1),
	(38, 13, 'Nova', 'vendas/nova', 1),
	(39, 14, 'Vendas\r\n', 'relatorios/vendas', 1),
	(40, 15, 'Listar', 'meiospagamento', 1),
	(42, 15, 'Cadastro', 'meiospagamento/cadastro', 1),
	(43, 15, 'Alterar', 'meiospagamento/alterar', 0),
	(44, 12, 'Buscar', 'estoque/get', 0),
	(45, 16, 'Receber', 'pagamentos/receber', 1),
	(46, 16, 'CreditosCliente', 'creditos-cliente/get', 0),
	(47, 13, 'Detalhe', 'vendas/detalhe', 0),
	(49, 13, 'Listar', 'vendas', 1),
	(50, 13, 'ListarAjax', 'vendas/listar', 0),
	(51, 14, 'Títulos em aberto', 'relatorios/areceber', 1),
	(52, 13, 'Alterar', 'vendas/alterar', 0),
	(53, 14, 'Gráfico de Vendas Mensal', 'relatorios/graficovendas', 1);
/*!40000 ALTER TABLE `adm_paginas` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
