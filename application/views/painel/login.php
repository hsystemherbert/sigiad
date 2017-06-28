<div id="wrapper">
    <div class="tem-login">
        <div class="col-md-5 col-sm-6 col-xs-6">
            <div class="panel panel-back noti-login">
                <div class="row">
                    <div class="text-box">
                        <h3 style="color: blue; padding-left:15%; ">ENTRAR NO SISTEMA</h3>
                    </div>
                </div><hr/>
                <div class="row">
                    <div class="col-md-4 col-sm-3 col-xs-3">
                        <img src="<?php echo base_url('assets/img/login1.png')?>" style="padding-left:15%; ">
                    </div>
                    <div class="col-md-8 col-sm-3 col-xs-3">
                        <form id="efetuarlogin" action="{ACAOFORM}" method="POST">
                            <div class="col-md-12">
                                <input type="hidden" id="idUsuario" name="idUsuario" value="{idUsuario}"/>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="loginuser">Login</label>
                                        <input type="text" id="loginuser" name="loginuser" value="{loginuser}" class="form-control" />
                                    </div>
                                    <div class="form-group">
                                        <label for="senhauser">Senha</label>
                                        <input type="password" id="senhauser" name="senhauser" class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6"><br>
                                <div class="form-group has-success">
                                    <button type="submit" id="btnEntrar" class="btn btn-success btn-sm" style="width: 100px; font-size: 14px;">Entrar</button>
                                </div>
                            </div>
                        </form>

                        <div class="col-md-6"><br>
                            <div class="form-group has-success">
                                <a href="{CANCELAR}" class="btn btn-danger" style="width: 100px; font-size: 14px;">Cancelar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    /* $(document).ready(function(){
     new SendForm({frm: "#frmIgreja" , bt: "#btnSalvar"});
     });*/
    $(document).ready(function() {

        new SendForm({frm: $('#efetuarlogin'), btn:$('#btnEntrar')}).setOnSuccess(function () {
            window.location.href = "<?php  echo base_url('painel/principal'); ?>";
        });
    });
</script>