<div class="page-header">
    <h1>
        <a href="<?php echo base_url('painel/principal')?>">INÍCIO</a>
        <small>
            <i class="ace-icon fa fa-angle-double-right"></i>
            Painel de Controle
        </small>
         <small>
            <i class="ace-icon fa fa-angle-double-right"></i>
            Administrativo
        </small>
    </h1>
</div><!-- /.page-header -->
<div id="page-wrapper" >
<div id="page-inner">
<div class="row">
	<div class="col-xs-12 col-md-12">
		<h2 class="header smaller lighter blue text-center">CADASTRO DE PERMISSÕES E CADASTRO DE MENU</h2>
    </div>
</div>              
	<!-- /. ROW  -->
 
	<div class="row">
		<div class="col-xs-12 col-md-12">
			<div class="panel-body">
				<div class="row">
					<form role="form" id="form_permissao">
						<div class="col-xs-12" id="permissao">
                            <div class="col-xs-12 col-md-12">
                                <div class="col-xs-12 col-md-6 col-md-offset-3" id="usuario_select"></div>
                            </div>
							<div class="col-xs-12 col-md-6 col-md-offset-3" id="sel_usuario">
								<div class="form-group"> 
                    				<label for="usuario">Selecione o Usuário</label>
                    				<select name="usuario" id="usuario" class="form-control">
                                        <option value="">Selecione...</option>
                                        {BLC_USUARIO}
                                            <option value="{ID}">{USER}</option>
                                        {/BLC_USUARIO}
                                    </select>
                    			</div>
							</div>
                            <div class="col-xs-12 col-md-6 col-md-offset-3" id="sel_permissao">
                                <div class="form-group"> 
                                    <label for="permissao_user">Tipo de Permissão</label>
                                    <select name="permissao_user" id="permissao_user" class="form-control">
                                        <option value="">Selecione...</option>
                                        {BLC_PERMISSAO}
                                            <option value="{ID}">{PERMISSAO}</option>
                                        {/BLC_PERMISSAO}
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-12" id="sel_menu">
                                <div class="text-center"><h1>Selecionar Menu</h1></div><br>
                                <div class="col-xs-12 col-md-12" id="select_menu">
                                <h2></h2><hr>
                                    <div class="col-xs-3">
                                        <label>
                                            <input name="switch-field-1" class="ace ace-switch" type="checkbox" />
                                            <span class="lbl">&nbsp {SUBMENU}</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
						</div>
					</form>
                    <div class="col-xs-12 col-md-12"><br>
                        <div class="col-xs-12 col-md-6 col-md-offset-7">
                            <span id="btn_confirma"><button class="btn btn-success"><i class="fa fa-edit "></i> CONFIRMAR</button></span>
                            <span id="btn_conf_permissao"><a href="" class="btn btn-success"><i class=" fa fa-edit "></i> CONFIRMAR</a></span>
                            <span id="cad_menu"><a href="" class="btn btn-primary"><i class=" fa fa-sign-out "></i> CONFIRMAR</a></span>
                            <span id="btn_cancela"><a href="<?php echo base_url('painel/principal')?>" class="btn btn-danger"><i class=" fa fa-sign-out "></i> CANCELAR</a></span>
                        </div>
                    </div>
				</div>
			</div>
        </div>
    </div>
</div>
<script>
    var url      = '<?php echo base_url('')?>configuracoes/Administrativo/validarusuario/';
    var url_menu = '<?php echo base_url('')?>configuracoes/Administrativo/cadastromenu/';
</script>
<script src="<?php echo base_url('../assets/js/js_sistema/administrativo.js')?>"></script>
