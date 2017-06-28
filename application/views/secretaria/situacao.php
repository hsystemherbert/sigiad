<div id="page-wrapper" >
<div id="page-inner"-->
<div class="row">
	<div class="col-md-12">
		<div class="col-md-1">
			<img src="<?php echo base_url('assets/img/icones/43.png')?>" style="padding-left: 20px;">
		</div>
		<div class="col-md-10">
			<h2 style="padding-left: 15px;">CADASTRO DE SITUAÇÃO CADASTRAL</h2>
		</div>
    </div>
</div>              
	<!-- /. ROW  -->
    <hr />
	<div class="row">
		<div class="col-md-12">
			<div class="panel-body">
				<div class="row">
					<form action="{ACAOFORM}" method="post" role="form">
						<div class="col-md-12">
                            <input type="hidden" id="situacaoID" name="situacaoID" value="{situacaoID}"/>
							<div class="col-md-6">
								<div class="form-group"> 
                    				<label for="situacao">Situação Cadastral</label>
                    				<input type="text" id="situacao" name="situacao" value="{situacao}" class="form-control" />
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
                            Situação Cadastral
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-form">
                                    <thead>
                                        <tr>
                                            <th>Código</th>
                                            <th>Situação</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    {BLC_DADOS}
                                        <tr class="odd gradeX">
                                            <td>{ID}</td>
                                            <td>{NOME}</td>
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