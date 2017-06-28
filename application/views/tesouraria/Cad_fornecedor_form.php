<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
        	<div class="col-md-12">
        		<div class="col-md-1">
        			<img src="<?php echo base_url('assets/img/icones/53m.png')?>" style="padding-left: 20px;">
        		</div>
        		<div class="col-md-8">
        			<h2 style="padding-left: 18px;">CADASTRO DE FORNECEDORES</h2>
        		</div>
                <div class="col-md-2">
                    <h2 style="padding-left: 15px;">{CODIGO}</h2>
                </div>
            </div>
        </div> 
        <hr />
    	<div class="row">
    		<div class="col-md-12">
    			<div class="panel-body">
    				<div class="row">
    					<form action="{ACAOFORM}" method="post" role="form" id="CadFornecedor">
    						<div class="col-md-12">
                        		<input type="hidden" id="FonecedorID" name="FonecedorID" value="{FonecedorID}" class="form-control" />
                                <div class="col-md-5">
                                    <div class="form-group"> 
                                        <label for="NomeRazao">Nome / Razão Social</label>
                                        <input type="text" id="NomeRazao" name="NomeRazao" value="{NomeRazao}" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group"> 
                                        <label for="NomeFantasia">Nome Fantasia</label>
                                        <input type="text" id="NomeFantasia" name="NomeFantasia" value="{NomeFantasia}" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group"> 
                                        <label for="TipoEmpresa">Tipo Pessoa: </label>
                                        <select name="TipoEmpresa" id="TipoEmpresa" class="form-control">
                                            <option value="">Selecione...</option>
                                            <option value="fisica">Física</option>
                                            <option value="juridica">Jurídica</option>
                                        </select>
                                    </div>
                                </div>
    						</div>
                            <div class="col-md-12">
                                <div class="col-md-3">
                                    <div class="form-group"> 
                                        <label for="Documento" id="DocumentoLabel">CPF/CNPJ</label>
                                        <input type="text" id="Documento" name="Documento" value="{Documento}" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group"> 
                                        <label for="RamoAtividade">Ramo de Atividade: &nbsp <a href="" data-toggle="modal" data-target="#ModalRamo"><i class="fa fa-edit "></i></a></label>
                                        <select name="RamoAtividade" id="RamoAtividade" class="form-control">
                                            <option value="">Selecione...</option>
                                            {BLC_ATIVIDADE}
                                            <option value="{ID}">{ATIVIDADE}</option>
                                            {/BLC_ATIVIDADE}
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group"> 
                                        <label for="InscricaoEstadual">Inscrição Estadual:</label>
                                        <input type="text" id="InscricaoEstadual" name="InscricaoEstadual" value="{InscricaoEstadual}" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group"> 
                                        <label for="InscricaoMunicipal">Inscrição Municipal:</label>
                                        <input type="text" id="InscricaoMunicipal" name="InscricaoMunicipal" value="{InscricaoMunicipal}" class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="col-md-8">
                                    <div class="form-group"> 
                                        <label for="Endereco">Endereço:</label>
                                        <input type="text" id="Endereco" name="Endereco" value="{Endereco}" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group"> 
                                        <label for="Numero">N°:</label>
                                        <input type="text" id="Numero" name="Numero" value="{Numero}" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group"> 
                                        <label for="CodigoPostal">CEP: </label>
                                        <input type="text" id="CodigoPostal" name="CodigoPostal" value="{CodigoPostal}" class="form-control" />
                                    </div>
                                </div> 
                            </div>
                            <div class="col-md-12">
                                <div class="col-md-4">
                                    <div class="form-group"> 
                                        <label for="Bairro">Bairro: &nbsp <a href="<?php echo base_url('')?>"><i class=" fa fa-edit "></i></a></label>
                                        <select name="Bairro" id="Bairro" class="form-control">
                                            <option value="">Selecione...</option>
                                            {BLC_BAIRRO}
                                            <option value="{ID}">{BAIRRO}</option>
                                            {/BLC_BAIRRO}
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group"> 
                                        <label for="Cidade">Cidade: &nbsp <a href="<?php echo base_url('tesouraria/Fornecedor')?>"><i class=" fa fa-edit "></i></a></label>
                                        <select name="Cidade" id="Cidade" class="form-control">
                                            <option value="">Selecione...</option>
                                            {BLC_CIDADE}
                                            <option value="{ID}">{CIDADE}</option>
                                            {/BLC_CIDADE}
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group"> 
                                        <label for="Estado">UF: &nbsp <a href="<?php echo base_url('tesouraria/Fornecedor')?>"><i class=" fa fa-edit "></i></a></label>
                                        <select name="Estado" id="Estado" class="form-control">
                                            <option value="">Selecione...</option>
                                            {BLC_UF}
                                            <option value="{ID}">{UF}</option>
                                            {/BLC_UF}
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group"> 
                                        <label for="Nacionalidade">País: </label>
                                        <input type="text" id="Nacionalidade" name="Nacionalidade" value="{Nacionalidade}" class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="col-md-3">
                                    <div class="form-group"> 
                                        <label for="Telefone1">Telefone Empresa: </label>
                                        <input type="text" id="Telefone1" name="Telefone1" value="{Telefone1}" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group"> 
                                        <label for="Telefone2">Fax Empresa: </label>
                                        <input type="text" id="Telefone2" name="Telefone2" value="{Telefone2}" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group"> 
                                        <label for="EmailEmpresa">E-mail Empresa: </label>
                                        <input type="text" id="EmailEmpresa" name="EmailEmpresa" value="{EmailEmpresa}" class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="col-md-5">
                                    <div class="form-group"> 
                                        <label for="PessoaContato">Pessoa de Contato: </label>
                                        <input type="text" id="PessoaContato" name="PessoaContato" value="{PessoaContato}" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group"> 
                                        <label for="TelefonePessoa">Telefone: </label>
                                        <input type="text" id="TelefonePessoa" name="TelefonePessoa" value="{TelefonePessoa}" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group"> 
                                        <label for="EmailPessoa">E-mail: </label>
                                        <input type="text" id="EmailPessoa" name="EmailPessoa" value="{EmailPessoa}" class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="col-md-12">
                                    <div class="form-group"> 
                                        <label for="Observacao">Observação: </label>
                                        <input type="text" id="Observacao" name="Observacao" value="{Observacao}" class="form-control" />
                                    </div>
                                </div>
                            </div>
    							<div class="col-md-12"><br>
    								<div style="text-align: right; padding-right: 30px;">
    									<button type="submit" id="btnSalvar" class="btn btn-success"><i class="fa fa-edit "></i> Salvar</button>
    									<a href="<?php echo base_url('painel/Principal')?>" class="btn btn-warning"><i class="fa fa-edit "></i>Cancelar</a>
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
                                Fornecedores Cadastrados na Igreja
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-form">
                                        <thead>
                                            <tr>
                                                <th>Código</th>
                                                <th>Nome/Razão Social</th>
                                                <th>Nome Fantasia</th>
                                                <th>Atividade</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        {BLC_DADOS}
                                            <tr class="odd gradeX">
                                                <td>{ID}</td>
                                                <td>{RAZAO}</td>
                                                <td>{NOME}</td>
                                                <td>{ATIVIDADE}</td>
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

<div class="panel panel-default">
    <div class="modal fade" id="ModalRamo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Cadastro de Ramo de Atividade</h4><hr>
                    <div class="modal-body">
                        <form action="{ACAO_MODAL_CAMPO}" method="POST" id="formModal">
                            <div class="form-group"> 
                                <label for="CAMPO">Campo:</label>
                                <input type="text" id="CAMPO" name="CAMPO" value="{CAMPO}" class="form-control" />
                            </div>
                                <button id="btn_Salvar_modal" class="btn btn-primary">Salvar</button>
                                <button type="button" class="btn btn-danger"  data-dismiss="modal">Cancelar</button>
                        </form>
                        <!--div class="alert alert-danger"><p>Erro de Alerta</p></div-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
      $(document).ready(function () {
        $('#dataTables-form').dataTable();
        new SendForm({frm: $('#CadFornecedor'), btn:$('#btnSalvar')});
    });
</script>