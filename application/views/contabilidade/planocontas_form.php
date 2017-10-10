<script src="<?php echo base_url('assets/assets/js/system/PlanoContas.js')?>"></script>
<div class="page-header">
    <h1>
        <a href="<?php echo base_url('painel/principal')?>">INÍCIO</a>
        <small>
            <i class="ace-icon fa fa-angle-double-right"></i>
            Contabilidade
        </small>
         <small>
            <i class="ace-icon fa fa-angle-double-right"></i>
            Cadastro do Plano de Contas
        </small>
    </h1>
</div><!-- /.page-header -->
<div id="page-wrapper" >
<div id="page-inner">
<div class="row">
	<div class="col-md-12">
		<h2 class="header smaller lighter blue text-center" ">CADASTRO DO PLANO DE CONTAS</h2>
    </div>
</div>              
<!-- /. ROW  -->
<div class="row">
	<div class="col-md-12">
		<div class="panel-body">
			<div class="row">
				<form action="{ACAOFORM}" id="planoconta" method="POST" role="form">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="form-group alert alert-info" id="txt-status"> 
                            <h2>Informação:</h2>
                            <p>Você deve selecionar a 1ª Natureza</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-md-offset-3" id="nivel1">
                        <div class="col-md-12">
                            <div class="col-md-8" id="nivel1_select">
                                <div class="form-group"> 
                                    <label class="labelPlano" for="natureza1">Selecione a 1ª Natureza do Plano &nbsp &nbsp Nível 1</label>
                                    <select name="natureza1" id="natureza1" class="form-control">
                                        <option value="">Selecione...</option>
                                    {BLC_NATUREZA}
                                        <option value="{ID}">{NATUREZA}</option>
                                    {/BLC_NATUREZA}
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-md-offset-3" id="nivel2">
                        <div class="col-md-12">
                            <div class="col-md-8" id="nivel2_select">
                                <div class="form-group"> 
                                    <label class="labelPlano" for="natureza1">Selecione a 2ª Natureza do Plano &nbsp &nbsp Nível 1</label>
                                    <select name="natureza2" id="natureza2" class="form-control">
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-8" id="nivel2_input">
                                <div class="form-group"> 
                                    <label class="labelPlano" for="natureza1_input">Descrição da 2ª Natureza</label>
                                    <input type="text" id="natureza1_input" name="natureza1_input" class="form-control" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-md-offset-3" id="nivel3">
                        <div class="col-md-12">
                            <div class="col-md-8">
                                <div class="form-group"> 
                                    <label class="labelPlano" for="natureza3">Selecione a 3ª Natureza do Plano &nbsp &nbsp Nível 1</label>
                                    <select name="natureza3" id="natureza3" class="form-control">
                                        <option value="">Selecione...</option>
                                    {BLC_NATUREZA}
                                        <option value="{ID}">{NATUREZA}</option>
                                    {/BLC_NATUREZA}
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-8" id="nivel3_input">
                                <div class="form-group"> 
                                    <label class="labelPlano" for="natureza1_input">Descrição da 3ª Natureza</label>
                                    <input type="text" id="natureza1_input" name="natureza1_input" class="form-control" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-md-offset-3" id="nivel4">
                        <div class="col-md-12">
                            <div class="col-md-8">
                                <div class="form-group"> 
                                    <label class="labelPlano" for="natureza4">Selecione a 4ª Natureza do Plano &nbsp &nbsp Nível 1</label>
                                    <select name="natureza4" id="natureza4" class="form-control">
                                        <option value="">Selecione...</option>
                                    {BLC_NATUREZA}
                                        <option value="{ID}">{NATUREZA}</option>
                                    {/BLC_NATUREZA}
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-8" id="nivel4_input">
                                <div class="form-group"> 
                                    <label class="labelPlano" for="natureza1_input">Descrição da 4ª Natureza</label>
                                    <input type="text" id="natureza1_input" name="natureza1_input" class="form-control" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-md-offset-3" id="nivel5">
                        <div class="col-md-12">
                            <div class="col-md-8">
                                <div class="form-group"> 
                                    <label class="labelPlano" for="natureza5">Selecione a 5ª Natureza do Plano &nbsp &nbsp Nível 1</label>
                                    <select name="natureza5" id="natureza5" class="form-control">
                                        <option value="">Selecione...</option>
                                    {BLC_NATUREZA}
                                        <option value="{ID}">{NATUREZA}</option>
                                    {/BLC_NATUREZA}
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-8" id="nivel5_input">
                                <div class="form-group"> 
                                    <label class="labelPlano" for="natureza1_input">Descrição da 5ª Natureza</label>
                                    <input type="text" id="natureza1_input" name="natureza1_input" class="form-control" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-md-offset-4" id="receberLancamento">
                        <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="planocontaCheck" id="planocontaCheck" value="planocontaCheck" style="max-width: 100px; max-height: 80px; width: auto; height: auto" />Pode Receber Lançamentos Contábeis?
                                    </label>
                                </div>
                            </div>
                    </div>
                    <div class="col-md-12"><br>
                    <div style="text-align: right; padding-right: 30px;">
                        <button class="btn btn-primary"><i class=" fa fa-refresh "></i>Novo</button>
                        <button type="submit" id="btnSalvar" class="btn btn-success"><i class="fa fa-edit"></i>Salvar</button>
                        <button class="btn btn-warning"><i class="fa fa-edit"></i>Editar</button>
                        <button class="btn btn-danger"><i class="fa fa-pencil"></i>Excluir</button>
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
                        Cargos
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-form">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Código Contábil</th>
                                        <th>Descrição Contábil</th>
                                        <th>Permite Lançameto</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                {BLC_DADOS}
                                    <tr class="odd gradeX">
                                        <td>{ID}</td>
                                        <td>{COD}</td>
                                        <td>{NOME}</td>
                                        <td>{CHECK}</td>
                                        <td class="text-center"><a href="{URLEDITAR}" id="btnEditar" title="Editar" class="btn btn-warning">Editar</a>&nbsp<a href="{URLEXCLUIR}" title="Excluir" class="btn btn-danger">Excluir</a></td>
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
<!-- <script>
      $(document).ready(function () {
        $('#dataTables-form').dataTable();
     });
</script> -->
<script>
    var url       = '<?php echo base_url('')?>contabilidade/Planocontas';
    var url_nivel = '<?php echo base_url('')?>contabilidade/Planocontas/selecaoPlanoConta';
    //var url_menu = '<?php //echo base_url('')?>configuracoes/Administrativo/cadastromenu/';
</script>
