<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-BR" xml:lang="pt-BR">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SIGIAD - Sistema de Gerenciamento de Igrejas Evangélicas</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url('assets/vendors/bootstrap/dist/css/bootstrap.min.css')?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url('assets/vendors/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url('assets/vendors/nprogress/nprogress.css')?>" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url('assets/build/css/custom.css')?>" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo base_url('assets/vendors/iCheck/skins/flat/green.css')?>" rel="stylesheet">

    <!-- sweetalert -->
    <link href="<?php echo base_url('assets/vendors/sweetalert/sweetalert.css')?>" rel="stylesheet">

     <!-- My Style -->
    <link href="<?php echo base_url('assets/css/style.css')?>" rel="stylesheet">

     <!-- fileinput -->
    <link href="<?php echo base_url('assets/vendors/bootstrap-fileinput-master/css/fileinput.min.css')?>" media = "all" rel="stylesheet" type="text/css"/>



 	
 	<!-- jQuery -->
    <script src="<?php echo base_url('assets/vendors/jquery/dist/jquery.min.js')?>"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url('assets/vendors/bootstrap/dist/js/bootstrap.min.js')?>"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url('assets/vendors/fastclick/lib/fastclick.js')?>"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url('assets/vendors/nprogress/nprogress.js')?>"></script>
    <!-- Chart.js -->
    <script src="<?php echo base_url('assets/vendors/Chart.js/dist/Chart.min.js')?>"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url('assets/vendors/iCheck/icheck.min.js')?>"></script>
    <!-- sweetalert -->
    <script src="<?php echo base_url('assets/vendors/sweetalert/sweetalert.min.js')?>"></script>
    <!-- jQuery Sparklines -->
    <script src="<?php echo base_url('assets/vendors/jquery-sparkline/dist/jquery.sparkline.min.js')?>"></script>
    <!-- Flot -->
    <script src="<?php echo base_url('assets/vendors/Flot/jquery.flot.js')?>"></script>
    <script src="<?php echo base_url('assets/vendors/Flot/jquery.flot.pie.js')?>"></script>
    <script src="<?php echo base_url('assets/vendors/Flot/jquery.flot.time.js')?>"></script>
    <script src="<?php echo base_url('assets/vendors/Flot/jquery.flot.stack.js')?>"></script>
    <script src="<?php echo base_url('assets/vendors/Flot/jquery.flot.resize.js')?>"></script>
    <!-- Flot plugins -->
    <script src="<?php echo base_url('assets/vendors/flot.orderbars/js/jquery.flot.orderBars.js')?>"></script>
    <script src="<?php echo base_url('assets/vendors/flot-spline/js/jquery.flot.spline.min.js')?>"></script>
    <script src="<?php echo base_url('assets/vendors/flot.curvedlines/curvedLines.js')?>"></script>
    <!-- DateJS -->
    <script src="<?php echo base_url('assets/vendors/DateJS/build/date.js')?>"></script>

    <script src="<?php echo base_url('assets/vendors/jquery.steps/jquery.steps.js')?>"></script>

    <!-- fileinput -->
    <script src="<?php echo base_url('assets/vendors/bootstrap-fileinput-master/js/plugins/piexif.min.js')?>"></script>
    <script src="<?php echo base_url('assets/vendors/bootstrap-fileinput-master/js/plugins/sortable.min.js')?>"></script>
    <script src="<?php echo base_url('assets/vendors/bootstrap-fileinput-master/js/fileinput.min.js')?>"></script>
    <script src="<?php echo base_url('assets/vendors/bootstrap-fileinput-master/js/locales/pt-BR.js')?>"></script>

    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo base_url('assets/js/moment/moment.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/datepicker/daterangepicker.js')?>"></script>
  

  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="<?php echo base_url('painel/Principal')?>" class="site_title"><i class="fa fa-sitemap" aria-hidden="true"></i> <span class="" style="padding-left: 30px;">SIGIAD</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile">
              <div class="profile_pic">
                <img src="<?php echo base_url('assets/img/Usuario/{FOTO}')?>" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Bem Vindo</span>
                <h2>{NOME}</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Geral</h3>
                <ul class="nav side-menu">
            		<li><a href="<?php echo base_url('painel/Principal')?>"><i class="fa fa-home"></i> HOME </a></li>
                  <li><a><i class="fa fa-edit"></i>SECRETARIA<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                       <li><a href="#" data-toggle="modal" data-target="#ModalPlano" id="BbtnModalPlano" class="">Membresia</a></li>
                       <li><a href="#" data-toggle="modal" data-target="#ModalCadastro">Cadastro Gerais</a></li>
                      <li><a href="form_advanced.html">Cadastro de Igreja</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-desktop"></i>TESOURARIA<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url('tesouraria/LancamentoCaixa')?>">Lançamentos de Caixa</a></li>
                      <li><a href="media_gallery.html">Lista Plano de Contas</a></li>
                      <li><a href="<?php echo base_url('contabilidade/Planocontas')?>">Cadastrar Novo Plano</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-desktop"></i>CONTABILIDADE<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url('cadastros/CadastroLoja')?>">Cadastro de Loja</a></li>
                      <li><a href="<?php echo base_url('cadastros/CadastroFuncionarios')?>">Cadastro de Funcionários</a></li>
                      <li><a href="<?php echo base_url('cadastros/CadastroFornecedores')?>">Cadastro de Fornecedores</a></li>
                      <li><a href="<?php echo base_url('cadastros/CadastroUsuarios')?>">Cadastro de Usuários</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-desktop"></i>AJUDA<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url('cadastros/CadastroLoja')?>">Cadastro de Loja</a></li>
                      <li><a href="<?php echo base_url('cadastros/CadastroFuncionarios')?>">Cadastro de Funcionários</a></li>
                      <li><a href="<?php echo base_url('cadastros/CadastroFornecedores')?>">Cadastro de Fornecedores</a></li>
                      <li><a href="<?php echo base_url('cadastros/CadastroUsuarios')?>">Cadastro de Usuários</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
             
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a href="<?php echo base_url('painel/Login/Logout')?>" data-toggle="tooltip" data-placement="top" title="Sair">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?php echo base_url('assets/img/Usuario/{FOTO}')?>" alt="">{NOME}
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Perfil</a></li>
                    <li><a href="javascript:;">ajuda</a></li>
                    <li><a href="<?php echo base_url('painel/Login/Logout')?>"><i class="fa fa-sign-out pull-right"></i>Sair</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
		
		{CONTEUDO}
		
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            SIGIAD Sistema de Gestão de Igrejas versão 1 . 1 .1 - Direitos Reservados a Hsystem Technology - <a href="https://colorlib.com">Hsystem</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>


<div class="modal fade" id="ModalPlano" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h1 class="modal-title text-center" id="myModalLabel">Membresia</h1><hr>     
      <div class="conteudo-modal">
        <ul class="nav nav-modal">
          <li><a href="<?php echo base_url('secretaria/CadastroMembro')?>">Cadastro de Membros</a></li>
          <li><a href="<?php echo base_url('secretaria/LivroRol')?>">Livro de Rol</a></li>
          <li><a href="<?php echo base_url('secretaria/FichaMembro')?>">Ficha de Membro</a></li>
          <li><a href="<?php echo base_url('secretaria/CartaoMembro')?>">Cartão de Membro</a></li>
          <li><a href="<?php echo base_url('secretaria/EmissaoCartas')?>">Emissão de Cartas</a></li>
          <li><a href="<?php echo base_url('secretaria/RelatorioGeral')?>">Relatório Geral</a></li>
        </ul>
      </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="ModalCadastro" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h2 class="modal-title text-center" id="myModalLabel">Cadastros Gerais</h2><hr>     
      <div class="conteudo-modal">
        <ul class="nav nav-modal">
          <li><a href="<?php echo base_url('secretaria/CadastroMembro')?>">Admissão</a></li>
          <li><a href="<?php echo base_url('secretaria/FichaMembro')?>">Cargos</a></li>
          <li><a href="<?php echo base_url('secretaria/CartaoMembro')?>">Procedência</a></li>
          <li><a href="<?php echo base_url('secretaria/EmissaoCartas')?>">Funções</a></li>
          <li><a href="<?php echo base_url('secretaria/RelatorioGeral')?>">Departamentos</a></li>
        </ul>
      </div>
      </div>
    </div>
  </div>
</div>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url('assets/build/js/custom.min.js')?>"></script>

<script>
  $(document).ready(function(){

    $('#ModalPlano').on('hidden.bs.modal', function (e) {
        $('.nav.child_menu>li.active').removeClass("active");
    });
    $('#ModalCadastro').on('hidden.bs.modal', function (e) {
        $('.nav.child_menu>li.active').removeClass("active");
    });
  });
</script>

  </body>
</html>