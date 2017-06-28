<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SIGIAD - Sistema de Administração da Igreja Evangélica Assembléia de Deus Ministério do Belém Queluz-SP</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="<?php echo base_url('assets/css/bootstrap.css')?>" rel="stylesheet" />

    <!-- FONTAWESOME STYLES-->
    <link href="<?php echo base_url('assets/css/font-awesome.css')?>" rel="stylesheet" />

    <!-- MORRIS CHART STYLES-->
    <link href="<?php echo base_url('assets/js/morris/morris-0.4.3.min.css')?>" rel="stylesheet" />

    <!-- CUSTOM STYLES-->
    <link href="<?php echo base_url('assets/css/custom.css')?>" rel="stylesheet" />

    <link href="<?php echo base_url('assets/css/sweetalert.css')?>" rel="stylesheet" />

    <link href="<?php echo base_url('assets/css/style.css')?>" rel="stylesheet" />


    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="<?php echo base_url('assets/js/jquery-1.10.2.js')?>"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="<?php echo base_url('assets/js/jquery.metisMenu.js')?>"></script>
    <!-- MORRIS CHART SCRIPTS -->
    <script src="<?php echo base_url('assets/js/morris/raphael-2.1.0.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/morris/morris.js')?>"></script>
    <script src="<?php echo base_url('assets/js/sendform.js')?>"></script>
    <script src="<?php echo base_url('assets/js/sweetalert.min.js')?>"></script>


    <style>

        body {

            background-image: url(../../assets/img/fouder.jpg);
            background-size: 100%;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
        }
        .navbar-right{
            margin-right: 10px !important;
        }

    </style>
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
                <a class="navbar-brand" href="<?php echo base_url('Home');?>"><img src="<?php echo base_url('assets/img/icones/30a.png')?>" style="margin-top: -10px;">&nbsp;SIGIAD</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?php echo base_url ('Home'); ?>">HOME</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">IGREJAS
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url ('Site/Igreja/Sede'); ?>">Sede</a></li>
                            <li><a href="<?php echo base_url ('Site/Igreja/QueluzI'); ?>">Queluz I</a></li>
                            <li><a href="<?php echo base_url ('Site/Igreja/ItatiaiaI'); ?>">Itatiaia I</a></li>
                            <li><a href="<?php echo base_url ('Site/Igreja/ItatiaiaII'); ?>">Itatiaia II</a></li>
                            <li><a href="<?php echo base_url ('Site/Igreja/Resende'); ?>">Resende</a></li>
                            <li><a href="<?php echo base_url ('Site/Igreja/PortoReal'); ?>">Porto Real</a></li>
                            <li><a href="<?php echo base_url ('Site/Igreja/Areias'); ?>">Areias</a></li>
                            <li><a href="<?php echo base_url ('Site/Igreja/Arapei'); ?>">Arapeí</a></li>
                            <li><a href="<?php echo base_url ('Site/Igreja/Bananal'); ?>">Bananal</a></li>
                            <li><a href="<?php echo base_url ('Site/Igreja/SaoJoseBarreiro'); ?>">São José do Barreiro</a></li>
                            <li><a href="<?php echo base_url ('Site/Igreja/EngenheiroPassos'); ?>">Engenheiro Passos</a></li>

                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">AGENDA 2017
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url('Site/Agenda/EnviarEvento');?>">Enviar Evento</a></li>
                            <li><a href="<?php echo base_url('Site/Agenda/Janeiro');?>">Janeiro</a></li>
                            <li><a href="<?php echo base_url('Site/Agenda/Fevereiro');?>">Fevereiro</a></li>
                            <li><a href="<?php echo base_url('Site/Agenda/Marco');?>">Março</a></li>
                            <li><a href="<?php echo base_url('Site/Agenda/Abril');?>">Abril</a></li>
                            <li><a href="<?php echo base_url('Site/Agenda/Maio');?>">Maio</a></li>
                            <li><a href="<?php echo base_url('Site/Agenda/Junho');?>">Junho</a></li>
                            <li><a href="<?php echo base_url('Site/Agenda/Julho');?>">Julho</a></li>
                            <li><a href="<?php echo base_url('Site/Agenda/Agosto');?>">Agosto</a></li>
                            <li><a href="<?php echo base_url('Site/Agenda/Setembro');?>">Setembro</a></li>
                            <li><a href="<?php echo base_url('Site/Agenda/Outubro');?>">Outubro</a></li>
                            <li><a href="<?php echo base_url('Site/Agenda/Novembro');?>">Novembro</a></li>
                            <li><a href="<?php echo base_url('Site/Agenda/Dezembro');?>">Dezembro</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo base_url('painel/Login');?>">LOGIN</a></li>
                </ul>
            </div>

        </div>
    </div>
</div>

{CONTEUDO}


</body>
</html>
