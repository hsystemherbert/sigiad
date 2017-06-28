<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> SIGIAD - Sistema de Gerenciamento de Igrejas Assembléias de Deus</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="<?php echo base_url('assets/css/bootstrap.css')?>" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="<?php echo base_url('assets/css/font-awesome.css')?>" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="<?php echo base_url('assets/js/morris/morris-0.4.3.min.css')?>" rel="stylesheet" />

    <link href="<?php echo base_url('assets/css/sweetalert.css')?>" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="<?php echo base_url('assets/css/custom.css')?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/css/style.css')?>" rel="stylesheet" />
    
    <!-- SCROLLBAR STYLES-->
    <link href="<?php echo base_url('assets/css/jquery.mCustomScrollbar.css')?>" rel="stylesheet" />

     <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

    <!-- TABLE STYLES-->
    <link href="<?php echo base_url('assets/js/dataTables/dataTables.bootstrap.css')?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/js/input-search/input-search.css')?>" rel="stylesheet" />

        <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="<?php echo base_url('assets/js/jquery-1.10.2.js')?>"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="<?php echo base_url('assets/js/jquery.metisMenu.js')?>"></script>

    <script src="<?php echo base_url('assets/js/sendform.js')?>"></script>
    <script src="<?php echo base_url('assets/js/sweetalert.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.maskedinput.js')?>"></script>
    <script src="<?php echo base_url('assets/js/jquery-maskmoney.js')?>"></script>
     
    <!-- MORRIS CHART SCRIPTS -->
     <script src="<?php echo base_url('assets/js/morris/raphael-2.1.0.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/morris/morris.js')?>"></script>
    <!-- DATA TABLE SCRIPTS -->
    <script src="<?php echo base_url('assets/js/dataTables/jquery.dataTables.js')?>"></script>
    <script src="<?php echo base_url('assets/js/dataTables/dataTables.bootstrap.js')?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.mCustomScrollbar.js')?>"></script>
    <script src="<?php echo base_url('assets/js/input-search/jquery.quick.search.js')?>"></script>
    
     <!-- CUSTOM SCRIPTS -->
    <script src="<?php echo base_url('assets/js/custom.js')?>"></script>
    
</head>
<body> 
    <div id="wrapper">
         <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo base_url('/painel/Principal');?>"><img src="<?php echo base_url('assets/img/icones/30a.png')?>" style="margin-top: -10px;">&nbsp;SIGIAD</a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                          <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Painel
                            <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                              <li><a href="<?php echo base_url ('/painel/Principal'); ?>">Administrativo</a></li>
                              <li><a href="<?php echo base_url ('/painel/Principal'); ?>">Financeiro</a></li>
                            </ul>
                          </li>
                           <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Configuração
                            <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                              <li><a href="<?php echo base_url('/configuracoes/usuario');?>">Cadastro de Usuários</a></li>
                            </ul>
                          </li>
                        <li><a href="<?php echo base_url('painel/Login/logout');?>">Login/Logout</a></li>
                    </ul>
                </div>

            </div>
        </div>
        <!-- /. NAV TOP  -->
        <div style="width: 20%; height: 30px; background-color: #fff; position: fixed;">
         <div class="text-center user-image-back user-image-center">
          <img src="<?php echo base_url('assets/img/fotos/{FOTO}')?>" class="img-circle">
          <p class="name-logado"><b>{NOME}</b></p>
        </div>
        </div>
        <nav class="navbar-default navbar-side mCustomScrollbar" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <!-- NAV SECRETARIA -->
                    <li>
                        <a href="#"><img src="<?php echo base_url('assets/img/icones/25a.png')?>" class="navbar-img"><span class="navbar-img-text">SECRETARIA</span></a>
                        <ul class="nav nav-second-level">
                            <li>
                              <a href="<?php echo base_url('/secretaria/membros')?>"><img src="<?php echo base_url('assets/img/icones/50a.png')?>" class="navbar-img"><span class="navbar-img-text">Membresia</span></a>
                            </li>
                            <li>
                              <a href="<?php echo base_url('/secretaria/membresia')?>"><img src="<?php echo base_url('assets/img/icones/36.png')?>" class="navbar-img"><span class="navbar-img-text">Ficha Cadastral</span></a>
                            </li>
                            <li>
                              <a href="<?php echo base_url('/secretaria/cadastros')?>"><img src="<?php echo base_url('assets/img/icones/73a.png')?>" class="navbar-img"><span class="navbar-img-text">Cadastros Gerais</span></a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('/secretaria/Igreja')?>"><img src="<?php echo base_url('assets/img/icones/33a.png')?>" class="navbar-img"><span class="navbar-img-text">Igrejas</span></a>
                           </li>
                            <li>
                                <a href="<?php echo base_url('/secretaria/cadastros')?>"><img src="<?php echo base_url('assets/img/icones/49a.png')?>" class="navbar-img"><span class="navbar-img-text">Missionários</span></a>
                           </li>
                            <li>
                                <a href="<?php echo base_url('')?>"><img src="<?php echo base_url('assets/img/icones/35a.png')?>" class="navbar-img"><span class="navbar-img-text">Batismo</span></a>
                           </li>
                            <li>
                                <a href="<?php echo base_url('')?>"><img src="<?php echo base_url('assets/img/icones/34a.png')?>" class="navbar-img"><span class="navbar-img-text">Criança/Filho</span></a>
                           </li>
                           <li>
                                <a href="<?php echo base_url('')?>"><img src="<?php echo base_url('assets/img/icones/39.png')?>" class="navbar-img"><span class="navbar-img-text">ATAS</span></a>
                           </li>
                             <li>
                                 <a href="<?php echo base_url('')?>"><img src="<?php echo base_url('assets/img/icones/38.png')?>" class="navbar-img"><span class="navbar-img-text">EBD</span><span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="<?php echo base_url('')?>"><img src="<?php echo base_url('assets/img/icones/10a.png')?>" class="navbar-img"><span class="navbar-img-text">Cadastro de Classes</span></a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url('')?>"><img src="<?php echo base_url('assets/img/icones/48a.png')?>" class="navbar-img"><span class="navbar-img-text">Cadastro de Alunos</span></a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url('')?>"><img src="<?php echo base_url('assets/img/icones/14a.png')?>" class="navbar-img"><span class="navbar-img-text">Grades de Controle</span></a>
                                        </li>
                                         <li>
                                            <a href="<?php echo base_url('')?>"><img src="<?php echo base_url('assets/img/icones/13a.png')?>" class="navbar-img"><span class="navbar-img-text">Grades de Lançamento</span></a>
                                        </li>
                                    </ul>
                            </li>
                        </ul>
                    </li>
                     <!-- /NAV SECRETARIA -->
                    
                     <!-- NAV TESOURARIA -->
                    <li>
                        <a href="#"><img src="<?php echo base_url('assets/img/icones/4a.png')?>" class="navbar-img"><span class="navbar-img-text">TESOURARIA</span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo base_url('Tesouraria/Fornecedor')?>"><img src="<?php echo base_url('assets/img/icones/53a.png')?>" class="navbar-img"><span class="navbar-img-text">Fornecedores</span></a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('Tesouraria/ContaPagar')?>"><img src="<?php echo base_url('assets/img/icones/57a.png')?>" class="navbar-img"><span class="navbar-img-text">Conta a Pagar</span></a>
                           </li>
                             <li>
                                 <a href="#"><img src="<?php echo base_url('assets/img/icones/71a.png')?>" class="navbar-img"><span class="navbar-img-text">Patrimônio</span><span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="<?php echo base_url('Tesouraria')?>"><img src="<?php echo base_url('assets/img/icones/62a.png')?>" class="navbar-img"><span class="navbar-img-text">Locais</span></a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url('Tesouraria')?>"><img src="<?php echo base_url('assets/img/icones/56a.png')?>" class="navbar-img"><span class="navbar-img-text">Cadastro de Bens</span></a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url('Tesouraria')?>"><img src="<?php echo base_url('assets/img/icones/70a.png')?>" class="navbar-img"><span class="navbar-img-text">Depreciação Automática</span></a>
                                        </li>
                                         <li>
                                            <a href="<?php echo base_url('Tesouraria')?>"><img src="<?php echo base_url('assets/img/icones/64a.png')?>" class="navbar-img"><span class="navbar-img-text">Contabiliza Depreciação</span></a>
                                        </li>
                                    </ul>
                            </li>
                            <li>
                                <a href="<?php echo base_url('Tesouraria/QuadroDizimista')?>"><img src="<?php echo base_url('assets/img/icones/78a.png')?>" class="navbar-img"><span class="navbar-img-text">Quadro de Dizimistas</span></a>
                            </li>
                            <!--li>
                                 <a href="<?php echo base_url('Tesouraria')?>"><img src="<?php echo base_url('assets/img/icones/86a.png')?>" class="navbar-img"><span class="navbar-img-text">Boletos</span><span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="<?php echo base_url('Tesouraria')?>"><img src="<?php echo base_url('assets/img/icones/60a.png')?>" class="navbar-img"><span class="navbar-img-text">Cobranças</span></a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url('Tesouraria')?>"><img src="<?php echo base_url('assets/img/icones/67a.png')?>" class="navbar-img"><span class="navbar-img-text">Geração de Boletos</span></a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url('Tesouraria')?>"><img src="<?php echo base_url('assets/img/icones/84a.png')?>" class="navbar-img"><span class="navbar-img-text">Emissão de Boletos</span></a>
                                        </li>
                                         <li>
                                            <a href="<?php echo base_url('Tesouraria')?>"><img src="<?php echo base_url('assets/img/icones/85a.png')?>" class="navbar-img"><span class="navbar-img-text">Visualiza Registros</span></a>
                                        </li>
                                         <li>
                                            <a href="<?php echo base_url('Tesouraria')?>"><img src="<?php echo base_url('assets/img/icones/79a.png')?>" class="navbar-img"><span class="navbar-img-text">Processa Retornos</span></a>
                                        </li>
                                         <li>
                                            <a href="<?php echo base_url('Tesouraria')?>"><img src="<?php echo base_url('assets/img/icones/55a.png')?>" class="navbar-img"><span class="navbar-img-text">Sacados</span></a>
                                        </li>
                                    </ul>
                            </li-->
                        </ul>
                    </li>
                     <!-- /NAV TESOURARIA -->
                    
                     <!-- NAV FINANCEIRO -->
                    <li>
                        <a href="<?php echo base_url('Financeiro/')?>"><img src="<?php echo base_url('assets/img/icones/5a.png')?>" class="navbar-img"><span class="navbar-img-text">FINANCEIRO</span></a>
                        <ul class="nav nav-second-level">
                             <li>
                                <a href="<?php echo base_url('/financeiro/lancamentocaixa')?>"><img src="<?php echo base_url('assets/img/icones/72a.png')?>" class="navbar-img"><span class="navbar-img-text">Lançamento de Caixa</span></a>
                           </li>
                            <li>
                                <a href="" id="btnAtivarCaixa" ><img src="<?php echo base_url('assets/img/icones/63a.png')?>" class="navbar-img"><span class="navbar-img-text">Ativa Mês do Caixa</span></a>
                           </li>
                            <li>
                                <a href="<?php echo base_url('/financeiro/lancamentobancario')?>"><img src="<?php echo base_url('assets/img/icones/80a.png')?>" class="navbar-img"><span class="navbar-img-text">Lançamentos Bancários</span></a>
                           </li>
                             <li>
                                 <a href="#"><img src="<?php echo base_url('assets/img/icones/78a.png')?>" class="navbar-img"><span class="navbar-img-text">Lançamento de Dízimos</span><span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="<?php echo base_url('/financeiro/lancamentodizimo')?>"><img src="<?php echo base_url('assets/img/icones/45a.png')?>" class="navbar-img"><span class="navbar-img-text">Obreiros</span></a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url('/financeiro/lancamentodizimo')?>"><img src="<?php echo base_url('assets/img/icones/50a.png')?>" class="navbar-img"><span class="navbar-img-text">Membros</span></a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url('/financeiro/lancamentodizimo')?>""><img src="<?php echo base_url('assets/img/icones/49a.png')?>" class="navbar-img"><span class="navbar-img-text">Visitantes</span></a>
                                        </li>
                                         <li>
                                            <a href="<?php echo base_url('/financeiro/lancamentodizimo')?>"><img src="<?php echo base_url('assets/img/icones/48a.png')?>" class="navbar-img"><span class="navbar-img-text">Outros</span></a>
                                        </li>
                                    </ul>
                            </li>
                            <li>
                                <a href="<?php echo base_url('/financeiro/cadastrobanco')?>"><img src="<?php echo base_url('assets/img/icones/80a.png')?>" class="navbar-img"><span class="navbar-img-text">Cadastro de Bancos</span></a>
                           </li>
                            <li>
                                <a href="<?php echo base_url('/financeiro/baixaduplicata')?>"><img src="<?php echo base_url('assets/img/icones/59a.png')?>" class="navbar-img"><span class="navbar-img-text">Baixa Duplicatas/Conta a Pagar</span></a>
                           </li>
                            <li>
                                <a href="<?php echo base_url('/financeiro/saldoinicialcaixa')?>"><img src="<?php echo base_url('assets/img/icones/85a.png')?>" class="navbar-img"><span class="navbar-img-text">Saldo Inicial do Caixa</span></a>
                           </li>
                            <li>
                                <a href="<?php echo base_url('/financeiro/conciliacaobancaria')?>"><img src="<?php echo base_url('assets/img/icones/55a.png')?>" class="navbar-img"><span class="navbar-img-text">Conciliação Bancária</span></a>
                           </li>
                        </ul>
                    </li>
                     <!-- /NAV FINANCEIRO -->
                    
                     <!-- NAV CONTABILIDADE -->
                    <li>
                        <a href="<?php echo base_url('')?>"><img src="<?php echo base_url('assets/img/icones/3a.png')?>" class="navbar-img"><span class="navbar-img-text">CONTABILIDADE</span></a>
                        <ul class="nav nav-second-level">
                             <li>
                                <a href="<?php echo base_url('/contabilidade/planocontas')?>"><img src="<?php echo base_url('assets/img/icones/57a.png')?>" class="navbar-img"><span class="navbar-img-text">Plano de Contas</span></a>
                           </li>
                             <li>
                                <a href="<?php echo base_url('Contabilidade')?>"><img src="<?php echo base_url('assets/img/icones/85a.png')?>" class="navbar-img"><span class="navbar-img-text">Históricos</span></a>
                           </li>
                             <li>
                                <a href="<?php echo base_url('Contabilidade')?>"><img src="<?php echo base_url('assets/img/icones/60a.png')?>" class="navbar-img"><span class="navbar-img-text">Eventos Contábeis</span></a>
                           </li>
                             <li>
                                <a href="<?php echo base_url('Contabilidade')?>"><img src="<?php echo base_url('assets/img/icones/77a.png')?>" class="navbar-img"><span class="navbar-img-text">Lançamentos Contábeis</span></a>
                           </li>
                             <li>
                                <a href="<?php echo base_url('Contabilidade')?>"><img src="<?php echo base_url('assets/img/icones/75a.png')?>" class="navbar-img"><span class="navbar-img-text">Cálculo do Balancete</span></a>
                           </li>
                            <li>
                                 <a href="<?php echo base_url('Contabilidade')?>"><img src="<?php echo base_url('assets/img/icones/63a.png')?>" class="navbar-img"><span class="navbar-img-text">Encerramento do Exercício</span><span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="<?php echo base_url('Contabilidade')?>"><img src="<?php echo base_url('assets/img/icones/14a.png')?>" class="navbar-img"><span class="navbar-img-text">Apuração do Resultado Anual</span></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="<?php echo base_url('assets/img/icones/75a.png')?>" class="navbar-img"><span class="navbar-img-text">Cálculo do Balancete</span></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="<?php echo base_url('assets/img/icones/13a.png')?>" class="navbar-img"><span class="navbar-img-text">Gera Balanço Padrão</span></a>
                                        </li>
                                    </ul>
                            </li>
                             <li>
                                <a href="#"><img src="<?php echo base_url('assets/img/icones/36.png')?>" class="navbar-img"><span class="navbar-img-text">Apropriação do Resultado do Exercício</span></a>
                           </li>
                             <li>
                                <a href="#"><img src="<?php echo base_url('assets/img/icones/79a.png')?>" class="navbar-img"><span class="navbar-img-text">Abertura e Encerramento</span></a>
                           </li>
                             <li>
                                <a href="#"><img src="<?php echo base_url('assets/img/icones/61a.png')?>" class="navbar-img"><span class="navbar-img-text">Volta Data do Mês Bloqueado</span></a>
                           </li>
                             <li>
                                <a href="#"><img src="<?php echo base_url('assets/img/icones/14a.png')?>" class="navbar-img"><span class="navbar-img-text">Balancete de Abertura</span></a>
                           </li>
                            <li>
                                 <a href="#"><img src="<?php echo base_url('assets/img/icones/99.png')?>" class="navbar-img"><span class="navbar-img-text">Exporta DIPJ</span><span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="#"><img src="<?php echo base_url('assets/img/icones/97.png')?>" class="navbar-img"><span class="navbar-img-text">2016</span></a>
                                        </li>
                                    </ul>
                            </li>
                            <li>
                                 <a href="#"><img src="<?php echo base_url('assets/img/icones/100.png')?>" class="navbar-img"><span class="navbar-img-text">Importa Folha de Pagamento</span><span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="#"><img src="<?php echo base_url('assets/img/icones/98.png')?>" class="navbar-img"><span class="navbar-img-text">Importação</span></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="<?php echo base_url('assets/img/icones/105.png')?>" class="navbar-img"><span class="navbar-img-text">Ajustes da Importancia</span></a>
                                        </li>
                                    </ul>
                            </li>
                            <li>
                                 <a href="#"><img src="<?php echo base_url('assets/img/icones/101.png')?>" class="navbar-img"><span class="navbar-img-text">Sped Contábil</span><span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="#"><img src="<?php echo base_url('assets/img/icones/97.png')?>" class="navbar-img"><span class="navbar-img-text">Exporta ECD</span></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="<?php echo base_url('assets/img/icones/97.png')?>" class="navbar-img"><span class="navbar-img-text">Exporta ECF</span></a>
                                        </li>
                                    </ul>
                            </li>
                        </ul>
                    </li>
                     <!-- /NAV CONTABILIDADE -->
                    
                     <!-- NAV RELATÓRIOS SECRETARIA -->
                    <li>
                        <a href="#"><img src="<?php echo base_url('assets/img/icones/14a.png')?>" class="navbar-img"><span class="navbar-img-text">RELATÓRIOS SECRETARIA</span></a>
                        <ul class="nav nav-second-level">
                            
                            <li>
                                 <a href="#"><img src="<?php echo base_url('assets/img/icones/101.png')?>" class="navbar-img"><span class="navbar-img-text">Membros</span><span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="#"><img src="<?php echo base_url('assets/img/icones/101.png')?>" class="navbar-img"><span class="navbar-img-text"></span>Função que Exerce</a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="<?php echo base_url('assets/img/icones/101.png')?>" class="navbar-img"><span class="navbar-img-text"></span>Cargos Ministeriais</a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="<?php echo base_url('assets/img/icones/101.png')?>" class="navbar-img"><span class="navbar-img-text"></span>Membros Resumido</a>
                                        </li>
                                         <li>
                                            <a href="#"><img src="<?php echo base_url('assets/img/icones/101.png')?>" class="navbar-img"><span class="navbar-img-text"></span>Membros por Grupos</a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="<?php echo base_url('assets/img/icones/101.png')?>" class="navbar-img"><span class="navbar-img-text">Certificados</span><span class="fa arrow"></span></a>
                                            <ul class="nav nav-second-level">
                                                <li>
                                                    <a href="#"><img src="<?php echo base_url('assets/img/icones/101.png')?>" class="navbar-img"><span class="navbar-img-text">Batismo</span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><img src="<?php echo base_url('assets/img/icones/101.png')?>" class="navbar-img"><span class="navbar-img-text">Criança Apresentada</span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><img src="<?php echo base_url('assets/img/icones/101.png')?>" class="navbar-img"><span class="navbar-img-text">Evento</span></a>
                                                </li>
                                                 <li>
                                                    <a href="#"><img src="<?php echo base_url('assets/img/icones/101.png')?>" class="navbar-img"><span class="navbar-img-text">Consagração Ministerial</span></a>
                                                </li>
                                                 <li>
                                                    <a href="#"><img src="<?php echo base_url('assets/img/icones/101.png')?>" class="navbar-img"><span class="navbar-img-text">Consagração Obreiro</span></a>
                                                </li>
                                                 <li>
                                                    <a href="#"><img src="<?php echo base_url('assets/img/icones/101.png')?>" class="navbar-img"><span class="navbar-img-text">Honra ao Mérito</span></a>
                                                </li>
                                                 <li>
                                                    <a href="#"><img src="<?php echo base_url('assets/img/icones/101.png')?>" class="navbar-img"><span class="navbar-img-text">Aniversário</span></a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#"><img src="<?php echo base_url('assets/img/icones/101.png')?>" class="navbar-img"><span class="navbar-img-text">Relatório Seletivo</span></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="<?php echo base_url('assets/img/icones/101.png')?>" class="navbar-img"><span class="navbar-img-text">Por Tipo de Admissão</span></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="<?php echo base_url('assets/img/icones/101.png')?>" class="navbar-img"><span class="navbar-img-text">Ficha de Membro</span></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="<?php echo base_url('assets/img/icones/101.png')?>" class="navbar-img"><span class="navbar-img-text">Por Faixa Etária</span></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="<?php echo base_url('assets/img/icones/101.png')?>" class="navbar-img"><span class="navbar-img-text">Membros com Endereço</span></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="<?php echo base_url('assets/img/icones/101.png')?>" class="navbar-img"><span class="navbar-img-text">Lista Para Assinatura</span></a>
                                        </li>                                        
                                    </ul>
                            </li>
                            <li>
                                <a href="#"><img src="<?php echo base_url('assets/img/icones/101.png')?>" class="navbar-img"><span class="navbar-img-text">Visitantes</span></a>
                           </li>
                            <li>
                                 <a href="#"><img src="<?php echo base_url('assets/img/icones/101.png')?>" class="navbar-img"><span class="navbar-img-text">Crianças</span><span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="#"><img src="<?php echo base_url('assets/img/icones/101.png')?>" class="navbar-img"><span class="navbar-img-text">Relatório Geral</span></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="<?php echo base_url('assets/img/icones/101.png')?>" class="navbar-img"><span class="navbar-img-text">Certificados</span></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="<?php echo base_url('assets/img/icones/101.png')?>" class="navbar-img"><span class="navbar-img-text">FIcha Cadastral</span></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="<?php echo base_url('assets/img/icones/101.png')?>" class="navbar-img"><span class="navbar-img-text">Relatório por Faixa Etária</span></a>
                                        </li>
                                    </ul>
                            </li>
                            <li>
                                 <a href="#"><img src="<?php echo base_url('assets/img/icones/101.png')?>" class="navbar-img"><span class="navbar-img-text">Data de Aniversário</span></a>
                            </li>
                            <li>
                                 <a href="#"><img src="<?php echo base_url('assets/img/icones/101.png')?>" class="navbar-img"><span class="navbar-img-text">Cartas e Etiquetas</span></a>
                            </li>
                            <li>
                                <a href="#"><img src="<?php echo base_url('assets/img/icones/101.png')?>" class="navbar-img"><span class="navbar-img-text">Credenciais</span></a>
                           </li>
                            <li>
                                <a href="#"><img src="<?php echo base_url('assets/img/icones/101.png')?>" class="navbar-img"><span class="navbar-img-text">Vencimento Carteiras</span></a>
                           </li>
                            <li>
                                <a href="#"><img src<?php echo base_url('assets/img/icones/101.png')?> class="navbar-img"><span class="navbar-img-text">Agenda</span></a>
                           </li>
                            <li>
                                 <a href="#"><img src="<?php echo base_url('assets/img/icones/101.png')?>" class="navbar-img"><span class="navbar-img-text">Batismo</span><span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="#"><img src="<?php echo base_url('assets/img/icones/101.png')?>" class="navbar-img"><span class="navbar-img-text">Lista de Presença</span></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="<?php echo base_url('assets/img/icones/101.png')?>" class="navbar-img"><span class="navbar-img-text">Batizados</span></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="<?php echo base_url('assets/img/icones/101.png')?>" class="navbar-img"><span class="navbar-img-text">Certificados</span></a>
                                        </li>
                                    </ul>
                            </li>
                            <li>
                                 <a href="#"><img src="<?php echo base_url('assets/img/icones/101.png')?>" class="navbar-img"><span class="navbar-img-text">EBD</span><span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="#"><img src="<?php echo base_url('assets/img/icones/101.png')?>" class="navbar-img"><span class="navbar-img-text">Cadastro de Alunos</span></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="<?php echo base_url('assets/img/icones/101.png')?>" class="navbar-img"><span class="navbar-img-text">Lançamentos da EBD</span></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="<?php echo base_url('assets/img/icones/101.png')?>" class="navbar-img"><span class="navbar-img-text">Acompanhamento por Classes</span></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="<?php echo base_url('assets/img/icones/101.png')?>" class="navbar-img"><span class="navbar-img-text">Faltas da Escola Bíblica</span></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="<?php echo base_url('assets/img/icones/101.png')?>" class="navbar-img"><span class="navbar-img-text">Chamada</span></a>
                                        </li>
                                    </ul>
                            </li>
                            <li>
                                 <a href="#"><img src="<?php echo base_url('assets/img/icones/101.png')?>" class="navbar-img"><span class="navbar-img-text">Igrejas</span><span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="#"><img src="<?php echo base_url('assets/img/icones/101.png')?>" class="navbar-img"><span class="navbar-img-text">Cadastro</span></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="<?php echo base_url('assets/img/icones/101.png')?>" class="navbar-img"><span class="navbar-img-text">Aniversário dos Pastores</span></a>
                                        </li>
                                    </ul>
                            </li>
                            <li>
                                 <a href="#"><img src="<?php echo base_url('assets/img/icones/101.png')?>" class="navbar-img"><span class="navbar-img-text">Acervo</span><span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="#"><img src="<?php echo base_url('assets/img/icones/101.png')?>" class="navbar-img"><span class="navbar-img-text">Relação Geral</span></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="<?php echo base_url('assets/img/icones/101.png')?>" class="navbar-img"><span class="navbar-img-text">Movimentação do Acervo</span></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="<?php echo base_url('assets/img/icones/101.png')?>" class="navbar-img"><span class="navbar-img-text">Etiquetas</span></a>
                                        </li>
                                         <li>
                                            <a href="#"><img src="<?php echo base_url('assets/img/icones/101.png')?>" class="navbar-img"><span class="navbar-img-text">Itens Alugados/Emprestados</span></a>
                                        </li>
                                    </ul>
                            </li>
                            <li>
                                 <a href="#"><img src="<?php echo base_url('assets/img/icones/11a.png')?>" class="navbar-img"><span class="navbar-img-text">Local de Frequência</span><span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="#"><img src="<?php echo base_url('assets/img/icones/11a.png')?>" class="navbar-img"><span class="navbar-img-text">Relatório Simples</span></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="<?php echo base_url('assets/img/icones/11a.png')?>" class="navbar-img"><span class="navbar-img-text">Relatório Completo</span></a>
                                        </li>
                                    </ul>
                            </li>
                            <li>
                                 <a href="#"><img src="<?php echo base_url('assets/img/icones/11a.png')?>" class="navbar-img"><span class="navbar-img-text">Famílias</span><span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="#"><img src="<?php echo base_url('assets/img/icones/11a.png')?>" class="navbar-img"><span class="navbar-img-text">Relação das Famílias</span></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="<?php echo base_url('assets/img/icones/11a.png')?>" class="navbar-img"><span class="navbar-img-text">Composição das Famílias</span></a>
                                        </li>
                                    </ul>
                            </li>
                        </ul>
                    </li>
                     <!-- /NAV RELATÓRIOS SECRETARIA -->
                    
                     <!-- NAV RELATÓRIOS TESOURARIA -->
                    <li>
                        <a href="#"><img src="<?php echo base_url('assets/img/icones/13a.png')?>" class="navbar-img"><span class="navbar-img-text">RELATÓRIOS TESOURARIA</span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                 <a href="#"><img src="<?php echo base_url('assets/img/icones/5a.png')?>" class="navbar-img"><span class="navbar-img-text">Financeiro</span><span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="#"><img src="<?php echo base_url('assets/img/icones/11a.png')?>" class="navbar-img"><span class="navbar-img-text">Movimento Caixa</span></a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url('relatorios/Relatorio_LancamentoCaixa')?>"><img src="<?php echo base_url('assets/img/icones/11a.png')?>" class="navbar-img"><span class="navbar-img-text">Lançamento de Caixa</span></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="<?php echo base_url('assets/img/icones/11a.png')?>" class="navbar-img"><span class="navbar-img-text">Extrato Bancário</span></a>
                                        </li>
                                         <li>
                                             <a href="#"><img src="<?php echo base_url('assets/img/icones/11a.png')?>" class="navbar-img"><span class="navbar-img-text">Controle de Dízimo</span><span class="fa arrow"></span></a>
                                             <ul class="nav nav-second-level">
                                                <li>
                                                    <a href="#"><img src="<?php echo base_url('assets/img/icones/11a.png')?>" class="navbar-img"><span class="navbar-img-text">Controle Anual</span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><img src="<?php echo base_url('assets/img/icones/11a.png')?>" class="navbar-img"><span class="navbar-img-text">Quadro Anual Valor</span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><img src="<?php echo base_url('assets/img/icones/11a.png')?>" class="navbar-img"><span class="navbar-img-text">Ficha Financeira</span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><img src="<?php echo base_url('assets/img/icones/11a.png')?>" class="navbar-img"><span class="navbar-img-text">Por Período</span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><img src="<?php echo base_url('assets/img/icones/11a.png')?>" class="navbar-img"><span class="navbar-img-text">Recibos</span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><img src="<?php echo base_url('assets/img/icones/11a.png')?>" class="navbar-img"><span class="navbar-img-text">Quadro Dízimos e Ofertas Nominal</span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><img src="<?php echo base_url('assets/img/icones/11a.png')?>" class="navbar-img"><span class="navbar-img-text">Grade de Lançamentos</span></a>
                                                </li>
                                            </ul>
                                        </li>
                                         <li>
                                            <a href="<?php echo base_url('relatorios/Relatorio_Fornecedores')?>"><img src="<?php echo base_url('assets/img/icones/11a.png')?>" class="navbar-img"><span class="navbar-img-text">Fornecedores</span></a>
                                        </li>
                                         <li>
                                            <a href="#"><img src="<?php echo base_url('assets/img/icones/11a.png')?>" class="navbar-img"><span class="navbar-img-text">Contas a Pagar</span></a>
                                        </li>
                                         <li>
                                            <a href="#"><img src="<?php echo base_url('assets/img/icones/11a.png')?>" class="navbar-img"><span class="navbar-img-text">Patrimônio</span></a>
                                        </li>
                                         <li>
                                            <a href="#"><img src="<?php echo base_url('assets/img/icones/11a.png')?>" class="navbar-img"><span class="navbar-img-text">Emissão de Cheques</span></a>
                                        </li>
                                         <li>
                                            <a href="#"><img src="<?php echo base_url('assets/img/icones/11a.png')?>" class="navbar-img"><span class="navbar-img-text">Carnês</span></a>
                                        </li>
                                         <li>
                                            <a href="#"><img src="<?php echo base_url('assets/img/icones/11a.png')?>" class="navbar-img"><span class="navbar-img-text">Boletos</span></a>
                                        </li>
                                    </ul>
                            </li>
                             <li>
                                 <a href="#"><img src="<?php echo base_url('assets/img/icones/3a.png')?>" class="navbar-img"><span class="navbar-img-text">Contabilidade</span><span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="#"><img src="<?php echo base_url('assets/img/icones/11a.png')?>" class="navbar-img"><span class="navbar-img-text">Balancete Financeiro Simples</span></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="<?php echo base_url('assets/img/icones/11a.png')?>" class="navbar-img"><span class="navbar-img-text">Balancete Financeiro Completo</span></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="<?php echo base_url('assets/img/icones/11a.png')?>" class="navbar-img"><span class="navbar-img-text">Balancete de Verificação</span></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="<?php echo base_url('assets/img/icones/11a.png')?>" class="navbar-img"><span class="navbar-img-text">LIvro Diário</span></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="<?php echo base_url('assets/img/icones/11a.png')?>" class="navbar-img"><span class="navbar-img-text">Balancete Resultado Mensal</span></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="<?php echo base_url('assets/img/icones/11a.png')?>" class="navbar-img"><span class="navbar-img-text">Balanço Patrimonial</span></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="<?php echo base_url('assets/img/icones/11a.png')?>" class="navbar-img"><span class="navbar-img-text">Demonstrativo de Apuração Resultado</span></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="<?php echo base_url('assets/img/icones/11a.png')?>" class="navbar-img"><span class="navbar-img-text">Palno de Contas</span></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="<?php echo base_url('assets/img/icones/11a.png')?>" class="navbar-img"><span class="navbar-img-text">Razão Analítico</span></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="<?php echo base_url('assets/img/icones/11a.png')?>" class="navbar-img"><span class="navbar-img-text">Razão Analítico por Período</span></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="<?php echo base_url('assets/img/icones/11a.png')?>" class="navbar-img"><span class="navbar-img-text">Razão Geral com Histórico</span></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="<?php echo base_url('assets/img/icones/11a.png')?>" class="navbar-img"><span class="navbar-img-text">Lançamentos Contábeis</span></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="<?php echo base_url('assets/img/icones/11a.png')?>" class="navbar-img"><span class="navbar-img-text">Resumo Trimestral</span></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="<?php echo base_url('assets/img/icones/11a.png')?>" class="navbar-img"><span class="navbar-img-text">Eventos Contábeis</span></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="<?php echo base_url('assets/img/icones/11a.png')?>" class="navbar-img"><span class="navbar-img-text">Receita Últimos Meses</span></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="<?php echo base_url('assets/img/icones/11a.png')?>" class="navbar-img"><span class="navbar-img-text">Importação da Folha</span></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="<?php echo base_url('assets/img/icones/11a.png')?>" class="navbar-img"><span class="navbar-img-text">Relatório para Contador</span></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="<?php echo base_url('assets/img/icones/11a.png')?>" class="navbar-img"><span class="navbar-img-text">Demonstração das Mutações do Patrimônio Líquido</span></a>
                                        </li>
                                        
                                    </ul>
                            </li>
                        </ul>
                    </li>
                     <!-- /NAV RELATÓRIOS TESOURARIA -->
                    
                     <!-- NAV GRÁFICOS -->
                    <li>
                        <a href="#"><img src="<?php echo base_url('assets/img/icones/51a.png')?>" class="navbar-img"><span class="navbar-img-text">GRÁFICOS</span></a>
                        <ul class="nav nav-second-level">
                             <li>
                                 <a href="#"><img src="<?php echo base_url('assets/img/icones/25a.png')?>" class="navbar-img"><span class="navbar-img-text">Secretaria</span><span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                       <li>
                                            <a href="#"><img src="<?php echo base_url('assets/img/icones/101.png')?>" class="navbar-img"><span class="navbar-img-text">Grafico Por Situações</span></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="<?php echo base_url('assets/img/icones/101.png')?>" class="navbar-img"><span class="navbar-img-text">Gráfico Por Sexo</span></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="<?php echo base_url('assets/img/icones/101.png')?>" class="navbar-img"><span class="navbar-img-text">Gráfico Por Estado Civil</span></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="<?php echo base_url('assets/img/icones/101.png')?>" class="navbar-img"><span class="navbar-img-text">Gráfico Por Local de Frequência</span></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="<?php echo base_url('assets/img/icones/101.png')?>" class="navbar-img"><span class="navbar-img-text">Gráfico Por Tipo de Admissão</span></a>
                                        </li>
                                         <li>
                                            <a href="#"><img src="<?php echo base_url('assets/img/icones/101.png')?>" class="navbar-img"><span class="navbar-img-text">Gráfico Por Bairros</span></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="<?php echo base_url('assets/img/icones/101.png')?>" class="navbar-img"><span class="navbar-img-text">Gráfico Por Funções da Igreja</span></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="<?php echo base_url('assets/img/icones/101.png')?>" class="navbar-img"><span class="navbar-img-text">Gráfico Visitantes Por Período</span></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="<?php echo base_url('assets/img/icones/101.png')?>" class="navbar-img"><span class="navbar-img-text">Gráfico Cargos Por Local de Frequência</span></a>
                                        </li>
                                    </ul>
                            </li>
                             <li>
                                 <a href="#"><img src="<?php echo base_url('assets/img/icones/4a.png')?>" class="navbar-img"><span class="navbar-img-text">Tesouraria</span><span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                       <li>
                                            <a href="#"><img src="<?php echo base_url('assets/img/icones/101.png')?>" class="navbar-img"><span class="navbar-img-text">Despesa Mensal</span></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="<?php echo base_url('assets/img/icones/101.png')?>" class="navbar-img"><span class="navbar-img-text">Despesa 12 Meses</span></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="<?php echo base_url('assets/img/icones/101.png')?>" class="navbar-img"><span class="navbar-img-text">Receita Mensal</span></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="<?php echo base_url('assets/img/icones/101.png')?>" class="navbar-img"><span class="navbar-img-text">Receita 12 Meses</span></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="<?php echo base_url('assets/img/icones/101.png')?>" class="navbar-img"><span class="navbar-img-text">Receita x Despesa</span></a>
                                        </li>
                                         <li>
                                            <a href="#"><img src="<?php echo base_url('assets/img/icones/101.png')?>" class="navbar-img"><span class="navbar-img-text">Dizimistas</span></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="<?php echo base_url('assets/img/icones/101.png')?>" class="navbar-img"><span class="navbar-img-text">Dízimo Por Período</span></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="<?php echo base_url('assets/img/icones/101.png')?>" class="navbar-img"><span class="navbar-img-text">Dízimo Per Cápita</span></a>
                                        </li>
                                    </ul>
                            </li>
                        </ul>
                    </li>
                     <!-- /NAV GRÁFICOS -->
                    
                     <!-- NAV CARTAS -->
                    <li>
                        <a href="#"><img src="<?php echo base_url('assets/img/icones/27a.png')?>" class="navbar-img"><span class="navbar-img-text">CARTAS</span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#"><img src="<?php echo base_url('assets/img/icones/101.png')?>" class="navbar-img"><span class="navbar-img-text">Aniversário de Nascimento</span></a>
                            </li>
                            <li>
                                <a href="#"><img src="<?php echo base_url('assets/img/icones/101.png')?>" class="navbar-img"><span class="navbar-img-text">Aniversário Pastoral</span></a>
                            </li>
                            <li>
                                <a href="#"><img src="<?php echo base_url('assets/img/icones/101.png')?>" class="navbar-img"><span class="navbar-img-text">Aniversário Congregação</span></a>
                            </li>
                            <li>
                                <a href="#"><img src="<?php echo base_url('assets/img/icones/101.png')?>" class="navbar-img"><span class="navbar-img-text">Aniversário Grupo/Departamento</span></a>
                            </li>
                            <li>
                                <a href="#"><img src="<?php echo base_url('assets/img/icones/101.png')?>" class="navbar-img"><span class="navbar-img-text">Carta Visitantes</span></a>
                            </li>
                             <li>
                                <a href="#"><img src="<?php echo base_url('assets/img/icones/101.png')?>" class="navbar-img"><span class="navbar-img-text">Carta Novo Convertido</span></a>
                            </li>
                            <li>
                                <a href="#"><img src="<?php echo base_url('assets/img/icones/101.png')?>" class="navbar-img"><span class="navbar-img-text">Membresia</span><span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="#"><img src="<?php echo base_url('assets/img/icones/101.png')?>" class="navbar-img"><span class="navbar-img-text">Mudança</span></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="<?php echo base_url('assets/img/icones/101.png')?>" class="navbar-img"><span class="navbar-img-text">Recomendação</span></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="<?php echo base_url('assets/img/icones/101.png')?>" class="navbar-img"><span class="navbar-img-text">Reconciliação</span></a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                     <!-- /NAV CARTAS -->
                    
                    
                     <!-- NAV SOBRE -->
                    <li>
                        <a href="#"><img src="<?php echo base_url('assets/img/icones/18a.png')?>" class="navbar-img"><span class="navbar-img-text">SOBRE</span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#"><img src="<?php echo base_url('assets/img/icones/101.png')?>" class="navbar-img"><span class="navbar-img-text">Ajuda</span></a>
                            </li>
                            <li>
                                <a href="#"><img src="<?php echo base_url('assets/img/icones/101.png')?>" class="navbar-img"><span class="navbar-img-text">Sobre</span></a>
                            </li>
                        </ul>
                    </li>
                     <!-- /NAV SOBRE -->
                    
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  --
        <div id="page-wrapper" >
            <div id="page-inner"-->
                <div id="modalM"></div>
                 {MENSAGEM_SISTEMA_ERRO}
                 {MENSAGEM_SISTEMA_SUCESSO}
                 {CONTEUDO}
            
             <!-- /. PAGE INNER  --
        </div></div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
<script>
    
  $(document).ready(function(){

    
    $("#btnAtivarCaixa").click(function(){

        alert("dfd");
        // var res = '<div id="myModal" class="modal fade" role="dialog">  <div class="modal-dialog">    <!-- Modal content-->    <div class="modal-content">      <div class="modal-header">        <button type="button" class="close" data-dismiss="modal">&times;</button>        <h4 class="modal-title">Modal Header</h4>      </div>      <div class="modal-body">        <p>Some text in the modal.</p>      </div>      <div class="modal-footer">        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>      </div>    </div> </div></div>';

        // $("#modalM").html(res);
        // $("#myModal").show();


    });

<?php echo base_url('/financeiro/AtivaMesCaixa')?>
  });

</script>


</body>
</html>