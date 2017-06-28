<div id="page-wrapper" >
<div id="page-inner">
<div class="row">
	<div class="col-md-12">
		<div class="col-md-1">
			<img src="<?php echo base_url('assets/img/icones/33m.png')?>" style="padding-left: 20px;">
		</div>
		<div class="col-md-10">
			<h2 style="padding-left: 15px;">CADASTRO DE IGREJAS</h2>
		</div>
    </div>
</div>              
	<!-- /. ROW  -->
    <hr />
	<div class="row">
		<div class="col-md-12">
			<div class="panel-body">
				<div class="row">
					<form action="{ACAOFORM}" id="frmIgreja" method="post" role="form">''
						<div class="col-md-12">
                            <div class="col-md-1">
                                <div class="form-group"> 
                                    <label for="IgrejaID">Código</label>
                                    <input type="text" id="IgrejaID" name="IgrejaID" value="{IgrejaID}" class="form-control" />
                                </div>
                            </div>
							<div class="col-md-6">
								<div class="form-group"> 
                    				<label for="IgrejaNome">Nome da Igreja</label>
                    				<input type="text" id="IgrejaNome" name="IgrejaNome" value="{IgrejaNome}" class="form-control" />
                    			</div>
							</div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="IgrejaTipo">Tipo</label>
                                    <select name="IgrejaTipo" id="IgrejaTipo" class="form-control">
                                        <option id=""></option>
                                        <option id="S">Sede</option>
                                        <option id="C">Congregação.</option>
                                        <option id="I">Igreja</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="IgrejaCampo">Campo &nbsp <a href="" data-toggle="modal" data-target="#myModal"><i class=" fa fa-edit "></i></a></label>
                                    <select name="IgrejaCampo" id="IgrejaCampo" class="form-control">
                                        <option value="">Selecione...</option>
                                        {BLC_CAMPO}
                                            <option value="{ID}">{CAMPO}</option>
                                        {/BLC_CAMPO}
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-3">
                                <div class="form-group"> 
                                    <label for="IgrejaLotacao">Lotação</label>
                                    <input type="text" id="IgrejaLotacao" name="IgrejaLotacao" value="{IgrejaLotacao}" class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="IgrejaSetor">Setor &nbsp <a href="" data-toggle="modal" data-target="#myModal"><i class=" fa fa-edit "></i></a></label>
                                    <select name="IgrejaSetor" id="IgrejaSetor" class="form-control">
                                        <option value="">Selecione...</option>
                                        {BLC_SETOR}
                                            <option value="{ID}">{SETOR}</option>
                                        {/BLC_SETOR}
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group"> 
                                    <label for="IgrejaEndereco">Endereço</label>
                                    <input type="text" id="IgrejaEndereco" name="IgrejaEndereco" value="{IgrejaEndereco}" class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-1">
                                <div class="form-group"> 
                                    <label for="IgrejaEndereco">N°</label>
                                    <input type="text" id="IgrejaEndereco" name="IgrejaEndereco" value="{IgrejaEndereco}" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="IgrejaBairro">Bairro &nbsp <a href="" data-toggle="modal" data-target="#myModal"><i class=" fa fa-edit "></i></a></label>
                                    <select name="IgrejaBairro" id="IgrejaBairro" class="form-control">
                                        <option value="">Selecione...</option>
                                        {BLC_BAIRRO}
                                            <option value="{ID}">{NOME}</option>
                                        {/BLC_BAIRRO}
                                    </select>
                                </div>
                            </div>
                             <div class="col-md-4">
                                <div class="form-group">
                                    <label for="IgrejaCidade">Cidade &nbsp <a href="" data-toggle="modal" data-target="#myModal"><i class=" fa fa-edit "></i></a></label>
                                    <select name="IgrejaCidade" id="IgrejaCidade" class="form-control">
                                        <option value="">Selecione...</option>
                                        {BLC_CIDADE}
                                            <option value="{ID}">{NOME}</option>
                                        {/BLC_CIDADE}
                                    </select>
                                </div>
                            </div>
                             <div class="col-md-2">
                                <div class="form-group">
                                    <label for="IgrejaUf">UF &nbsp <a href="" data-toggle="modal" data-target="#myModal"><i class=" fa fa-edit "></i></a></label>
                                    <select name="IgrejaUf" id="IgrejaUf" class="form-control">
                                        <option value="">Selecione...</option>
                                        {BLC_UF}
                                            <option value="{ID}">{NOME}</option>
                                        {/BLC_UF}
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group"> 
                                    <label for="IgrejaCEP">CEP</label>
                                    <input type="text" id="IgrejaCEP" name="IgrejaCEP" value="{IgrejaCEP}" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-2">
                                <div class="form-group"> 
                                    <label for="telefone1">Telefone - 1</label>
                                    <input type="text" id="telefone1" name="telefone1" value="{telefone1}" class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group"> 
                                    <label for="telefone2">Telefone - 2</label>
                                    <input type="text" id="telefone2" name="telefone2" value="{telefone2}" class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group"> 
                                    <label for="IgrejaEmail">E-mail</label>
                                    <input type="text" id="IgrejaEmail" name="IgrejaEmail" value="{IgrejaEmail}" class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group"> 
                                    <label for="IgrejaCNPJ">CNPJ</label>
                                    <input type="text" id="IgrejaCNPJ" name="IgrejaCNPJ" value="{IgrejaCNPJ}" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <p style="padding-left: 20px; padding-top: 18px; color: #708090; font-size: 15px"><b>Os campos abaixo só serão preenchidos se a igreja não pertecer ao Campo Local! <b></p><hr>
                        </div>
                         <div class="col-md-12">
                            <div class="col-md-6">
                                <div class="form-group"> 
                                    <label for="dirigenteNome">Nome do Dirigente:</label>
                                    <input type="text" id="dirigenteNome" name="dirigenteNome" value="{dirigenteNome}" class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group"> 
                                    <label for="dirigenteTel">Tel:</label>
                                    <input type="text" id="dirigenteTel" name="dirigenteTel" value="{dirigenteTel}" class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group"> 
                                    <label for="dirigenteEmail">E-mail:</label>
                                    <input type="text" id="dirigenteEmail" name="dirigenteEmail" value="{dirigenteEmail}" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-6">
                                <div class="form-group"> 
                                    <label for="secretarioNome">Nome do Secretário:</label>
                                    <input type="text" id="secretarioNome" name="secretarioNome" value="{secretarioNome}" class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group"> 
                                    <label for="secretarioTel">Tel:</label>
                                    <input type="text" id="secretarioTel" name="secretarioTel" value="{secretarioTel}" class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group"> 
                                    <label for="secretarioTel">E-mail:</label>
                                    <input type="text" id="secretarioTel" name="secretarioTel" value="{secretarioTel}" class="form-control" />
                                </div>
                            </div>
                        </div>
					</form>
                    <div class="col-md-12"><br>
                        <div style="text-align: right; padding-right: 30px;">
                            <button class="btn btn-primary" onclick="{NOVO}"><i class=" fa fa-edit "></i> Novo</button>
                            <button id="btnSalvar" class="btn btn-success"><i class="fa fa-refresh "></i> Salvar</button>
                            <button class="btn btn-warning" onclick="{CANCELAR}"><i class="fa fa-edit "></i>Cancelar</button>
                            <button class="btn btn-danger" onclick="{SAIR}"><i class="fa fa-pencil"></i> Sair</button>
                        </div>
                    </div>
				</div>
			</div>
			<hr />
			 <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Igrejas Cadastradas
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-form">
                                    <thead>
                                        <tr>
                                            <th>Código</th>
                                            <th>Nome da igreja</th>
                                            <th>Tipo</th>
                                            <th>Lotação</th>
                                            <th>Cidade</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    {BLC_DADOS}
                                        <tr class="odd gradeX">
                                            <td>{ID}</td>
                                            <td>{NOME}</td>
                                            <td>{TIPO}</td>
                                            <td>{LOTACAO}</td>
                                            <td>{CIDADE}</td>
                                            <td class="text-center"><a href="{URLEDITAR}" title="Editar" class="btn btn-warning">Editar</a>&nbsp<a href="{URLEXCLUIR}" title="Excluir" class="btn btn-danger">Excluir</a></td>
                                        </tr>
                                    {/BLC_DADOS}
                                    {BLC_SEMDADOS}
                                        <tr>
                                            <td colspan="8" class="text-center">Não existem dados cadastrados</td>
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

    <div class="panel panel-default">
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">Cadastro de Campo</h4><hr>
                        <div class="modal-body">
                            <form action="{ACAO_MODAL_CAMPO}" method="POST" id="formModal">
                                <div class="form-group"> 
                                    <label for="CAMPO">Campo:</label>
                                    <input type="text" id="CAMPO" name="CAMPO" value="{CAMPO}" class="form-control" />
                                </div>
                                    <button id="btn_Salvar_modal" class="btn btn-primary">Salvar</button>
                                    <button type="button" class="btn btn-danger"  data-dismiss="modal">Cancelar</button>
                            </form>
                            <div class="alert alert-danger"><p>Erro de Alerta</p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
    <!-- End Modals-->

<script>
    $(document).ready(function () {
        $("#myBtn").click(function(){
        $("#myModal").modal();
    });
        
    $('#dataTables-form').dataTable();

        new SendForm({frm: $('#frmIgreja'), btn:$('#btnSalvar')}).setShowErrors(showerrors());
        new SendForm({frm: $('#formModal'), btn:$('#btn_Salvar_modal')});
    });

</script>