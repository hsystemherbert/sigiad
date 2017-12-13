<!DOCTYPE html>
<html lang="pt-br">
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
    <!-- Animate.css -->
    <link href="https://colorlib.com/polygon/gentelella/css/animate.min.css" rel="stylesheet">

    <!-- sweetalert -->
    <link href="<?php echo base_url('assets/vendors/sweetalert/sweetalert.css')?>" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url('assets/build/css/custom.min.css')?>" rel="stylesheet">

    <!-- <style>
        body{
          background-image: url('<?php echo base_url('assets/img/bg-login.jpg')?>') !important;
        }
    </style> -->
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="container">
          <div class="row">
            <div class="animate form login_form">
          <section class="login_content">
            <form>
              <h1>Área Restrita</h1>
              <div>
                <input type="text" class="form-control" placeholder="Usuário" name="email" id="email" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Senha" name="senha" id="senha" required="" />
              </div>
              <div>
               <input type="button" class="btn btn-lg btn-success btn-block" id="enviar" value="Enviar Dados" />
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">
                  <a href="#signup" class="to_register">Esqueceu a Senha?</a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                 <h1><i class="fa fa-sitemap" aria-hidden="true"></i> SIGIAD Sistema de Gestão de Igrejas</h1>
                  <p>©2017 Todos direitos Reservados a Hsystem Technology. O Sistema de Gestão Comercial é um programa da Hsystem. Privacidade e Termos</p>
                </div>
              </div>
            </form>
          </section>
        </div>
          </div>
        </div>

        <!-- <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form>
              <h1>Create Account</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Email" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" href="index.html">Submit</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-sitemap" aria-hidden="true"></i> Sistema de Gestão Comercial</h1>
                  <p>©2017 Todos direitos Reservados a Hsystem Technology. O Sistema de Gestão Comercial é um programa da Hsystem. Privacidade e Termos</p>
                </div>
              </div>
            </form>
          </section>
        </div> -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url('assets/vendors/jquery/dist/jquery.min.js')?>"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url('assets/vendors/bootstrap/dist/js/bootstrap.min.js')?>"></script>
     <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url('assets/build/js/custom.min.js')?>"></script>
    <!-- sweetalert -->
    <script src="<?php echo base_url('assets/vendors/sweetalert/sweetalert.min.js')?>"></script>

    <script>
     $(document).ready(function(){

        var url = "<?php echo base_url('painel/Login/Logar')?>";

        $('#enviar').click(function(){

            $.ajax({
                url : url,
                type : 'POST',
                data : 'loginuser=' + $('#email').val() + '&senhauser=' + $('#senha').val(),
                success: function(data){
                  // window.location.href = "<?php echo base_url('painel/Principal')?>";
                  console.log(data);
                }, erro: function(data){
                  //window.location.href = "<?php echo base_url('Home')?>";
                  console.log(data);
                }
            });
        });
    });
    </script>

  </body>
</html>