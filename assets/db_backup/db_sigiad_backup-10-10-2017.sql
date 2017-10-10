-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.7.14 - MySQL Community Server (GPL)
-- OS do Servidor:               Win32
-- HeidiSQL Versão:              9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para sigiad
CREATE DATABASE IF NOT EXISTS `sigiad` /*!40100 DEFAULT CHARACTER SET latin1 COLLATE latin1_general_ci */;
USE `sigiad`;

-- Copiando estrutura para tabela sigiad.adm_paginas
CREATE TABLE IF NOT EXISTS `adm_paginas` (
  `idPagina` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `idPaginaGrupo` int(10) unsigned NOT NULL,
  `nome` varchar(50) NOT NULL,
  `uri` varchar(50) NOT NULL,
  `mostraMenu` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY (`idPagina`),
  UNIQUE KEY `PAG_URI` (`uri`),
  KEY `FK_adm_paginas_adm_paginas_grupos` (`idPaginaGrupo`),
  CONSTRAINT `FK_adm_paginas_adm_paginas_grupos` FOREIGN KEY (`idPaginaGrupo`) REFERENCES `adm_paginas_grupos` (`idPaginaGrupo`)
) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.
-- Copiando estrutura para tabela sigiad.adm_paginas_grupos
CREATE TABLE IF NOT EXISTS `adm_paginas_grupos` (
  `idPaginaGrupo` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `icone` varchar(50) NOT NULL,
  `htmlId` varchar(20) NOT NULL,
  `ordem` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`idPaginaGrupo`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.
-- Copiando estrutura para tabela sigiad.adm_permissao
CREATE TABLE IF NOT EXISTS `adm_permissao` (
  `PermissaoID` int(11) NOT NULL AUTO_INCREMENT,
  `Permissao` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`PermissaoID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.
-- Copiando estrutura para tabela sigiad.adm_setores
CREATE TABLE IF NOT EXISTS `adm_setores` (
  `idSetor` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `idUsuarioResponsavel` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`idSetor`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.
-- Copiando estrutura para tabela sigiad.adm_setores_paginas
CREATE TABLE IF NOT EXISTS `adm_setores_paginas` (
  `idPagina` smallint(5) unsigned NOT NULL,
  `IdSetor` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`idPagina`,`IdSetor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Informa as páginas que o setor terá acesso';

-- Exportação de dados foi desmarcado.
-- Copiando estrutura para tabela sigiad.adm_usuario
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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.
-- Copiando estrutura para tabela sigiad.cad_upload_arquivo_membro
CREATE TABLE IF NOT EXISTS `cad_upload_arquivo_membro` (
  `UploadID` int(11) NOT NULL AUTO_INCREMENT,
  `Cod_Membro` int(11) DEFAULT NULL,
  `NomeArquivo` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `DataHora` int(11) DEFAULT NULL,
  PRIMARY KEY (`UploadID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- Exportação de dados foi desmarcado.
-- Copiando estrutura para tabela sigiad.ci_sessions
CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.
-- Copiando estrutura para tabela sigiad.financeiro_caixa_financeiro
CREATE TABLE IF NOT EXISTS `financeiro_caixa_financeiro` (
  `CaixaFinanceiroID` int(11) NOT NULL AUTO_INCREMENT,
  `ID_PlanoConta` int(11) DEFAULT NULL,
  PRIMARY KEY (`CaixaFinanceiroID`),
  KEY `FK_financeiro_caixa_financeiro_financeiro_plano_contas` (`ID_PlanoConta`),
  CONSTRAINT `FK_financeiro_caixa_financeiro_financeiro_plano_contas` FOREIGN KEY (`ID_PlanoConta`) REFERENCES `financeiro_plano_contas` (`PlanoID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.
-- Copiando estrutura para tabela sigiad.financeiro_detalhe_lancamentos
CREATE TABLE IF NOT EXISTS `financeiro_detalhe_lancamentos` (
  `DetalheLancamentoID` int(11) NOT NULL AUTO_INCREMENT,
  `ID_Lancamento` int(11) NOT NULL,
  `ID_PlanoConta` int(11) NOT NULL,
  `TipoOperacao` int(11) NOT NULL COMMENT 'DEBITO ou CREDITO',
  `ValorLancamento` decimal(10,2) NOT NULL,
  PRIMARY KEY (`DetalheLancamentoID`),
  KEY `FK_financeiro_detalhe_lancamentos_financeiro_lancamento` (`ID_Lancamento`),
  KEY `FK_financeiro_detalhe_lancamentos_financeiro_plano_contas` (`ID_PlanoConta`),
  CONSTRAINT `FK_financeiro_detalhe_lancamentos_financeiro_lancamento` FOREIGN KEY (`ID_Lancamento`) REFERENCES `financeiro_lancamento` (`LancamentoID`),
  CONSTRAINT `FK_financeiro_detalhe_lancamentos_financeiro_plano_contas` FOREIGN KEY (`ID_PlanoConta`) REFERENCES `financeiro_plano_contas` (`PlanoID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.
-- Copiando estrutura para tabela sigiad.financeiro_lancamento
CREATE TABLE IF NOT EXISTS `financeiro_lancamento` (
  `LancamentoID` int(11) NOT NULL AUTO_INCREMENT,
  `DataLancamento` date DEFAULT NULL,
  `ID_Igreja` int(11) DEFAULT NULL,
  `ID_CadPessoa` int(11) DEFAULT NULL,
  `Historico` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`LancamentoID`),
  KEY `FK_financeiro_lancamento_sec_igreja` (`ID_Igreja`),
  CONSTRAINT `FK_financeiro_lancamento_sec_igreja` FOREIGN KEY (`ID_Igreja`) REFERENCES `sec_igreja` (`IgrejaID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.
-- Copiando estrutura para tabela sigiad.financeiro_planoconta_natureza
CREATE TABLE IF NOT EXISTS `financeiro_planoconta_natureza` (
  `NaturezaPlanoContaID` int(11) NOT NULL AUTO_INCREMENT,
  `NaturezaPlanoContaDescricao` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  PRIMARY KEY (`NaturezaPlanoContaID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- Exportação de dados foi desmarcado.
-- Copiando estrutura para tabela sigiad.financeiro_planoconta_subnatureza
CREATE TABLE IF NOT EXISTS `financeiro_planoconta_subnatureza` (
  `SubNaturezaPlanoID` int(11) NOT NULL AUTO_INCREMENT,
  `ID_NaturezaPlano` int(11) DEFAULT NULL,
  `CodSubNaturezaPlano` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `SubNaturezaPlanoDescricao` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  PRIMARY KEY (`SubNaturezaPlanoID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- Exportação de dados foi desmarcado.
-- Copiando estrutura para tabela sigiad.financeiro_plano_contas
CREATE TABLE IF NOT EXISTS `financeiro_plano_contas` (
  `PlanoID` int(11) NOT NULL AUTO_INCREMENT,
  `CodigoContabil` varchar(50) DEFAULT NULL,
  `DescricaoPlano` varchar(50) DEFAULT NULL,
  `RecebeLancamento` bit(1) DEFAULT b'0',
  `ValorContabil` decimal(10,2) NOT NULL,
  `PlanoContabilPai_ID` int(11) DEFAULT '0',
  PRIMARY KEY (`PlanoID`),
  KEY `FK_financeiro_plano_contas_financeiro_plano_contas` (`PlanoContabilPai_ID`),
  CONSTRAINT `FK_financeiro_plano_contas_financeiro_plano_contas` FOREIGN KEY (`PlanoContabilPai_ID`) REFERENCES `financeiro_plano_contas` (`PlanoID`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.
-- Copiando estrutura para tabela sigiad.sec_cargos
CREATE TABLE IF NOT EXISTS `sec_cargos` (
  `CargosID` int(11) NOT NULL AUTO_INCREMENT,
  `Cargos` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`CargosID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.
-- Copiando estrutura para tabela sigiad.sec_departamento
CREATE TABLE IF NOT EXISTS `sec_departamento` (
  `DepartamentoID` int(11) NOT NULL AUTO_INCREMENT,
  `Departamento` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`DepartamentoID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.
-- Copiando estrutura para tabela sigiad.sec_funcao
CREATE TABLE IF NOT EXISTS `sec_funcao` (
  `FuncaoID` int(11) NOT NULL AUTO_INCREMENT,
  `Funcao` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`FuncaoID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.
-- Copiando estrutura para tabela sigiad.sec_igreja
CREATE TABLE IF NOT EXISTS `sec_igreja` (
  `IgrejaID` int(11) NOT NULL AUTO_INCREMENT,
  `NomeIgreja` varchar(255) DEFAULT NULL,
  `TipoIgreja` varchar(255) DEFAULT NULL,
  `CampoIgreja` varchar(255) DEFAULT NULL,
  `SetorIgreja` varchar(255) DEFAULT NULL,
  `NomeLotacao` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`IgrejaID`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.
-- Copiando estrutura para tabela sigiad.sec_igrejacampo
CREATE TABLE IF NOT EXISTS `sec_igrejacampo` (
  `IgrejaCampoID` int(11) NOT NULL AUTO_INCREMENT,
  `IgrejaCampo` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`IgrejaCampoID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.
-- Copiando estrutura para tabela sigiad.sec_igrejasetor
CREATE TABLE IF NOT EXISTS `sec_igrejasetor` (
  `IgrejaSetorID` int(11) NOT NULL AUTO_INCREMENT,
  `IgrejaSetor` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`IgrejaSetorID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.
-- Copiando estrutura para tabela sigiad.sec_livro_rol
CREATE TABLE IF NOT EXISTS `sec_livro_rol` (
  `RolID` int(11) NOT NULL AUTO_INCREMENT,
  `DataEntrada` date NOT NULL,
  `Cod_Membro` int(11) NOT NULL,
  PRIMARY KEY (`RolID`),
  UNIQUE KEY `Cod_Membro` (`Cod_Membro`),
  CONSTRAINT `FK_sec_livro_rol_sec_membro` FOREIGN KEY (`Cod_Membro`) REFERENCES `sec_membro` (`MembroID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- Exportação de dados foi desmarcado.
-- Copiando estrutura para tabela sigiad.sec_membro
CREATE TABLE IF NOT EXISTS `sec_membro` (
  `MembroID` int(11) NOT NULL AUTO_INCREMENT,
  `NomeMembro` varchar(255) NOT NULL,
  `DataNascimento` date NOT NULL,
  `EstadoNaturalidade` varchar(5) DEFAULT NULL,
  `SexoMembro` varchar(20) NOT NULL,
  `Logradouro` varchar(255) DEFAULT NULL,
  `Numero` varchar(10) DEFAULT NULL,
  `Bairro` varchar(50) DEFAULT NULL,
  `Cidade` varchar(50) NOT NULL,
  `Cep` int(11) DEFAULT NULL,
  `EstadoLogadrouro` varchar(5) DEFAULT NULL,
  `NomePai` varchar(255) DEFAULT NULL,
  `NomeMae` varchar(255) DEFAULT NULL,
  `EstadoCivil` varchar(10) DEFAULT NULL,
  `Conjuge` varchar(255) DEFAULT NULL,
  `DataCasamento` date DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `cpfMembro` int(20) DEFAULT NULL,
  `IdentidadeMembro` int(20) DEFAULT NULL,
  `DataEmissao` date DEFAULT NULL,
  `Cod_OrgaoEmissor` int(11) DEFAULT NULL,
  `FotoMembro` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`MembroID`),
  UNIQUE KEY `cpfMembro` (`cpfMembro`),
  KEY `FK_sec_membro_sec_orgaoemissoridentidade` (`Cod_OrgaoEmissor`),
  CONSTRAINT `FK_sec_membro_sec_orgaoemissoridentidade` FOREIGN KEY (`Cod_OrgaoEmissor`) REFERENCES `sec_orgaoemissoridentidade` (`OrgaoID`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.
-- Copiando estrutura para tabela sigiad.sec_membro_dados_eclesia
CREATE TABLE IF NOT EXISTS `sec_membro_dados_eclesia` (
  `DadosEclesiaID` int(11) NOT NULL AUTO_INCREMENT,
  `Cod_membro` int(11) NOT NULL DEFAULT '0',
  `Cod_Lotacao` int(11) NOT NULL,
  `RolMembro` int(11) DEFAULT NULL,
  `TipoMembro` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `Cod_Cargo` int(11) DEFAULT NULL,
  `Cod_Funcao` int(11) DEFAULT NULL,
  `SituacaoCadastral` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `BatismoAguas` char(3) COLLATE latin1_general_ci DEFAULT NULL,
  `IgrejaBatismo` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `DataBatismoAguas` int(11) DEFAULT NULL,
  `BatismoEspiritoSanto` char(3) COLLATE latin1_general_ci DEFAULT NULL,
  `DataBatismoEspiritoSanto` int(11) DEFAULT NULL,
  `Cod_Procedencia` int(11) NOT NULL,
  `DescricaoProcedencia` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  PRIMARY KEY (`DadosEclesiaID`),
  UNIQUE KEY `Cod_membro` (`Cod_membro`),
  KEY `FK_sec_membro_dados_eclesia_sec_igreja` (`Cod_Lotacao`),
  KEY `FK_sec_membro_dados_eclesia_sec_cargos` (`Cod_Cargo`),
  KEY `FK_sec_membro_dados_eclesia_sec_funcao` (`Cod_Funcao`),
  KEY `FK_sec_membro_dados_eclesia_sec_procedenciamembro` (`Cod_Procedencia`),
  CONSTRAINT `FK_sec_membro_dados_eclesia_sec_cargos` FOREIGN KEY (`Cod_Cargo`) REFERENCES `sec_cargos` (`CargosID`),
  CONSTRAINT `FK_sec_membro_dados_eclesia_sec_funcao` FOREIGN KEY (`Cod_Funcao`) REFERENCES `sec_funcao` (`FuncaoID`),
  CONSTRAINT `FK_sec_membro_dados_eclesia_sec_membro` FOREIGN KEY (`Cod_membro`) REFERENCES `sec_membro` (`MembroID`),
  CONSTRAINT `FK_sec_membro_dados_eclesia_sec_procedenciamembro` FOREIGN KEY (`Cod_Procedencia`) REFERENCES `sec_procedenciamembro` (`ProcedenciaID`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- Exportação de dados foi desmarcado.
-- Copiando estrutura para tabela sigiad.sec_orgaoemissoridentidade
CREATE TABLE IF NOT EXISTS `sec_orgaoemissoridentidade` (
  `OrgaoID` int(11) NOT NULL AUTO_INCREMENT,
  `OrgaoEmissor` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`OrgaoID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.
-- Copiando estrutura para tabela sigiad.sec_procedenciamembro
CREATE TABLE IF NOT EXISTS `sec_procedenciamembro` (
  `ProcedenciaID` int(11) NOT NULL AUTO_INCREMENT,
  `Procedencia` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ProcedenciaID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.
-- Copiando estrutura para tabela sigiad.sec_situacao
CREATE TABLE IF NOT EXISTS `sec_situacao` (
  `SituacaoID` int(11) NOT NULL AUTO_INCREMENT,
  `SituacaoCadastral` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`SituacaoID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.
-- Copiando estrutura para view sigiad.vw_consulta_rol
-- Criando tabela temporária para evitar erros de dependência de VIEW
CREATE TABLE `vw_consulta_rol` 
) ENGINE=MyISAM;

-- Copiando estrutura para view sigiad.vw_dados_consulta_cadrol
-- Criando tabela temporária para evitar erros de dependência de VIEW
CREATE TABLE `vw_dados_consulta_cadrol` 
) ENGINE=MyISAM;

-- Copiando estrutura para view sigiad.vw_planocontas
-- Criando tabela temporária para evitar erros de dependência de VIEW
CREATE TABLE `vw_planocontas` (
	`nat1` VARCHAR(50) NULL COLLATE 'utf8_general_ci',
	`nat2` VARCHAR(50) NULL COLLATE 'utf8_general_ci',
	`nat3` VARCHAR(50) NULL COLLATE 'utf8_general_ci',
	`nat4` VARCHAR(50) NULL COLLATE 'utf8_general_ci'
) ENGINE=MyISAM;

-- Copiando estrutura para view sigiad.vw_ultimo_rol
-- Criando tabela temporária para evitar erros de dependência de VIEW
CREATE TABLE `vw_ultimo_rol` (
	`RolID` INT(11) NOT NULL,
	`NomeMembro` VARCHAR(255) NOT NULL COLLATE 'utf8_general_ci',
	`DataEntrada` DATE NOT NULL,
	`SituacaoCadastral` VARCHAR(50) NOT NULL COLLATE 'latin1_general_ci',
	`DataBatismoAguas` INT(11) NULL,
	`Procedencia` VARCHAR(50) NULL COLLATE 'utf8_general_ci',
	`DescricaoProcedencia` VARCHAR(255) NULL COLLATE 'latin1_general_ci'
) ENGINE=MyISAM;

-- Copiando estrutura para view sigiad.vw_consulta_rol
-- Removendo tabela temporária e criando a estrutura VIEW final
DROP TABLE IF EXISTS `vw_consulta_rol`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_consulta_rol` AS select `slr`.`RolID` AS `RolID`,`sm`.`MembroID` AS `MembroID`,`sm`.`NomeMembro` AS `NomeMembro`,`slr`.`DataEntrada` AS `DataEntrada`,`smd`.`DataBatismoAguas` AS `DataBatismoAguas`,`sp`.`Procedencia` AS `Procedencia`,`smd`.`DescricaoProcedencia` AS `DescricaoProcedencia` from (((`sec_livro_rol` `slr` join `sec_membro` `sm` on((`sm`.`MembroID` = `slr`.`Cod_Membro`))) join `sec_membro_dados_eclesia` `smd` on((`smd`.`DadosEclesiaID` = `sm`.`Cod_DadosEclesia`))) join `sec_procedenciamembro` `sp` on((`sp`.`ProcedenciaID` = `smd`.`Cod_Procedencia`)));

-- Copiando estrutura para view sigiad.vw_dados_consulta_cadrol
-- Removendo tabela temporária e criando a estrutura VIEW final
DROP TABLE IF EXISTS `vw_dados_consulta_cadrol`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_dados_consulta_cadrol` AS select `sm`.`MembroID` AS `MembroID`,`smd`.`DataBatismoAguas` AS `DataBatismoAguas`,`sp`.`Procedencia` AS `Procedencia`,`smd`.`DescricaoProcedencia` AS `DescricaoProcedencia` from ((`sec_membro` `sm` join `sec_membro_dados_eclesia` `smd` on((`smd`.`DadosEclesiaID` = `sm`.`Cod_DadosEclesia`))) join `sec_procedenciamembro` `sp` on((`sp`.`ProcedenciaID` = `smd`.`Cod_Procedencia`)));

-- Copiando estrutura para view sigiad.vw_planocontas
-- Removendo tabela temporária e criando a estrutura VIEW final
DROP TABLE IF EXISTS `vw_planocontas`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_planocontas` AS select `fpc1`.`DescricaoPlano` AS `nat1`,`fpc2`.`DescricaoPlano` AS `nat2`,`fpc3`.`DescricaoPlano` AS `nat3`,`fpc4`.`DescricaoPlano` AS `nat4` from (((`financeiro_plano_contas` `fpc1` left join `financeiro_plano_contas` `fpc2` on((`fpc2`.`PlanoContabilPai_ID` = `fpc1`.`PlanoID`))) left join `financeiro_plano_contas` `fpc3` on((`fpc3`.`PlanoContabilPai_ID` = `fpc2`.`PlanoID`))) left join `financeiro_plano_contas` `fpc4` on((`fpc4`.`PlanoContabilPai_ID` = `fpc3`.`PlanoID`)));

-- Copiando estrutura para view sigiad.vw_ultimo_rol
-- Removendo tabela temporária e criando a estrutura VIEW final
DROP TABLE IF EXISTS `vw_ultimo_rol`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_ultimo_rol` AS select `slr`.`RolID` AS `RolID`,`sm`.`NomeMembro` AS `NomeMembro`,`slr`.`DataEntrada` AS `DataEntrada`,`smd`.`SituacaoCadastral` AS `SituacaoCadastral`,`smd`.`DataBatismoAguas` AS `DataBatismoAguas`,`sp`.`Procedencia` AS `Procedencia`,`smd`.`DescricaoProcedencia` AS `DescricaoProcedencia` from (((`sec_livro_rol` `slr` join `sec_membro` `sm` on((`sm`.`MembroID` = `slr`.`Cod_Membro`))) join `sec_membro_dados_eclesia` `smd` on((`smd`.`Cod_membro` = `sm`.`MembroID`))) join `sec_procedenciamembro` `sp` on((`sp`.`ProcedenciaID` = `smd`.`Cod_Procedencia`))) order by `slr`.`RolID` desc limit 1;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
