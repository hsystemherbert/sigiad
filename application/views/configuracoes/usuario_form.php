<div class="page-header">
    <h1>
        <a href="<?php echo base_url('painel/principal')?>">INÍCIO</a>
        <small>
            <i class="ace-icon fa fa-angle-double-right"></i>
            Painel de Controle
        </small>
         <small>
            <i class="ace-icon fa fa-angle-double-right"></i>
            Cadastro de Usuários
        </small>
    </h1>
</div><!-- /.page-header -->
<div id="page-wrapper" >
<div id="page-inner">
<div class="row">
	<div class="col-md-12">
		<h2 class="header smaller lighter blue text-center">CADASTRO DE USUÁRIOS</h2>
    </div>
</div>              
	<!-- /. ROW  -->
   
	<div class="row">
		<div class="col-md-12">
			<div class="panel-body">
				<div class="row">
					<form action="{ACAOFORM}" method="post" role="form">
                        <div class="col-xs-12 col-md-12">
    						<div class="row">
                                <input type="hidden" id="idusuario" name="idusuario" value="{idusuario}"/>
    							<div class="col-md-4 col-md-offset-4">
    								<div class="form-group"> 
                        				<label for="setorusuario">Setor</label>
                        				<select name="seotrusuario" id="setorusuario" class="form-control">
                                            <option value="">Selecione...</option>
                                            {BLC_SETOR}
                                                <option value="{ID}">{SETOR_USER}</option>
                                            {/BLC_SETOR}
                                        </select>
                        			</div>
    							</div>
                            </div>
    						<div class="row">
                                <div class="col-md-4 col-md-offset-4">
    								<div class="form-group"> 
                        				<label for="nomeusuario">Nome</label>
                        				<input type="text" id="nomeusuario" name="nomeusuario" value="{nomeusuario}" class="form-control" />
                        			</div>
                                </div>
    						</div>
                            <div class="row">
    							<div class="col-md-4 col-md-offset-4">
    								<div class="form-group"> 
                        				<label for="loginusuario">Login</label>
                        				<input type="text" id="loginusuario" name="loginusuario" value="{loginusuario}" class="form-control" />
                        			</div>
                                </div>
    						</div>
                            <div class="row">
    							<div class="col-md-4 col-md-offset-4">
    								<div class="form-group"> 
                        				<label for="senhausuario">Senha</label>
                        				<input type="password" id="senhausuario" name="senhausuario" value="" class="form-control" />
                        			</div>
    							</div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-md-offset-4">
    								<div class="form-group"> 
                        				<label for="confsenhausuario">Confirma Senha</label>
                        				<input type="password" id="confsenhausuario" name="confsenhausuario" value="" class="form-control" />
                        			</div>
    							</div>
    						</div>
                        </div>
							<div class="col-md-12"><br>
								<div style="text-align: right; padding-right: 30px;">
									<button class="btn btn-primary"><i class=" fa fa-refresh "></i> Novo</button>
									<button type="submit" class="btn btn-success"><i class="fa fa-edit "></i> Salvar</button>
									<button class="btn btn-warning"><i class="fa fa-edit "></i> Editar</button>
									<button class="btn btn-danger"><i class="fa fa-pencil"></i> Excluir</button>
								</div>
							</div>
					</form>
				</div>
			</div>
			<hr />
			 <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Igrejas do Campo de Queluz
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="">
                                    <thead>
                                        <tr>
                                            <th>Cód</th>
                                            <th>Nome Usuário</th>
                                            <th>Login do Usuário</th>
                                            <th>Setor</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    {BLC_DADOS}
                                        <tr class="odd gradeX">
                                            <td>{ID}</td>
                                            <td>{NOME}</td>
                                            <td>{LOGIN}</td>
                                            <td>{SETOR}</td>
                                            <td class="text-center"><a href="{URLEDITAR}" title="Editar" class="btn btn-warning">Editar</a>&nbsp<a href="{URLEXCLUIR}" title="Excluir" class="btn btn-danger">Excluir</a></td>
                                        </tr>
                                    {/BLC_DADOS}
                                    {BLC_SEMDADOS}
                                        <tr>
                                            <td colspan="3" class="text-center">Não há dados</td>
                                        </tr>
                                    {/BLC_SEMDADOS}
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
 
        </div>
               
    </div>
</div>
</div>
<script>
      $(document).ready(function () {
        $('#dataTables-form').dataTable();
     });
</script>