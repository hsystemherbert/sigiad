<div id="page-wrapper" >
<div id="page-inner"-->
<div class="row">
	<div class="col-md-12">
		<div class="col-md-1">
			<img src="<?php echo base_url('assets/img/icones/58m.png')?>" style="padding-left: 20px;">
		</div>
		<div class="col-md-10">
			<h2 style="padding-left: 15px;">CADASTRO DE MEMBROS</h2>
		</div>
	</div>
</div>              
	<!-- /. ROW  -->
<hr />
<div class="row">
	<div class="col-md-12">
		<div class="panel-body">
			<div class="row">
				<form role="form" name="formCadastro">

					<!-- 1 linha formulario -->
					<div class="col-md-12">
						<div class="col-md-1">
							<div class="form-group"> 
								<label for="membroID">Código</label>
								<input type="text" id="membroID" name="membroID" value="{membroID}" class="form-control" />
							</div>
						</div>
						<div class="col-md-2">
							<div class="form-group"> 
								<label for="membroRol">ROL</label>
								<input type="text" id="membroRol" name="membroRol" value="{membroRol}" class="form-control" />
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group"> 
								<label for="membroNome">Nome do Membro</label>
								<input type="text" id="membroNome" name="membroNome" value="{membroNome}" class="form-control" />
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
                                <label for="membroCargo">Cargo</label>
                                <select class="form-control">
	                                <option id="">Selecione...</option>
	                                {BLC_CARGO}
	                                    <option id="{ID}">{NOME}</option>
	                                {/BLC_CARGO}
                                </select>
                            </div>
                        </div>
					</div>

					<div class="col-md-12">
						<div class="col-md-3">
							<div class="form-group">
                                <label for="membroCargo">Situação &nbsp <a href=""><i class=" fa fa-edit "></i></a></label>
                                <select class="form-control">
                                	<option id="">Selecione...</option>
                                {BLC_SITUACAO}
                                    <option id="{ID}">{NOME}</option>
                                {/BLC_SITUACAO}
                                </select>
                            </div>
						</div>
						<div class="col-md-6">
							<div class="form-group"> 
								<label for="membroLotacao">Lotação:</label>
								<input type="text" id="membroLotacao" name="membroLotacao" value="{membroLotacao}" class="form-control" />
							</div>
						</div>
					</div>
					<!-- / 1 linha formulario -->

					<!-- 2 linha formulario -->
					

					<!-- quebra de linha formulario -->
					<div class="col-md-12">
						<p style="padding-left: 20px; padding-top: 18px; color: #708090; font-size: 15px"><b>Dados Pessoais<b></p><hr>
					</div>

					<!-- 5 linha formulario -->
					<div class="col-md-12">
						<div class="col-md-3">
							<div class="form-group"> 
								<label for="membroRg">RG:</label>
								<input type="text" id="membroRg" name="membroRg" value="{membroRg}" class="form-control" />
							</div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
                                <label for="membroCargo">Órgão Emissor &nbsp <a href=""><i class=" fa fa-edit "></i></a></label>
                                <select class="form-control">
                                	<option id="">Selecione...</option>
                                {BLC_ORGAO}
                                    <option id="{ID}">{NOME}</option>
                                {/BLC_ORGAO}
                                </select>
                            </div>
						</div>
						<div class="col-md-2">
							<div class="form-group"> 
								<label for="membroEmissao">Data Emissão</label>
								<input type="text" id="membroEmissao" name="membroEmissao" value="{membroEmissao}" class="form-control" />
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group"> 
								<label for="membroCpf">CPF</label>
								<input type="text" id="membroCpf" name="membroCpf" value="{membroCpf}" class="form-control" />
							</div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
                                <label for="membroCargo">Sexo</label>
                                <select class="form-control">
                                	<option id=""></option>
                                	<option id="M">M</option>
                                    <option id="F">F</option>
                                </select>
                            </div>
						</div>
					</div>
					<!-- / 5 linha formulario -->

					<div class="col-md-12">
						<div class="col-md-2">
							<div class="form-group">
                                <label for="membroCargo">Estado Civil &nbsp <a href=""><i class=" fa fa-edit "></i></a></label>
                                <select class="form-control">
                                	<option id="">Selecione...</option>
                                {BLC_CIVIL}
                                    <option id="{ID}">{NOME}</option>
                                {/BLC_CIVIL}
                                </select>
                            </div>
						</div>
						<div class="col-md-2">
							<div class="form-group"> 
								<label for="membroNasc">Data de Nascimento</label>
								<input type="text" id="membroNasc" name="membroNasc" value="{membroNasc}" class="form-control" />
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group"> 
								<label for="membroNatu">Naturalidade</label>
								<input type="text" id="membroNatu" name="membroNatu" value="{membroNatu}" class="form-control" />
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group"> 
								<label for="membroNaci">Nacionalidade</label>
								<input type="text" id="membroNaci" name="membroNaci" value="{membroNaci}" class="form-control" />
							</div>
						</div>
					</div>
					<!-- / 2 linha formulario -->

					<!-- 3 linha formulario -->
					<div class="col-md-12">
						<div class="col-md-6">
							<div class="form-group"> 
								<label for="membrologra">Logradouro</label>
								<input type="text" id="membrologra" name="membrologra" value="{membrologra}" class="form-control" />
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group"> 
								<label for="membroComp">Complemento</label>
								<input type="text" id="membroComp" name="membroComp" value="{membroComp}" class="form-control" />
							</div>
						</div>
						<div class="col-md-2">
							<div class="form-group"> 
								<label for="membroNumber">N°</label>
								<input type="text" id="membroNumber" name="membroNumber" value="{membroNumber}" class="form-control" />
							</div>
						</div>
					</div>
					<!-- / 3 linha formulario -->

					<!-- 4 linha formulario -->
					<div class="col-md-12">
						<div class="col-md-3">
							<div class="form-group">
                                <label for="membroCargo">Cidade &nbsp <a href=""><i class=" fa fa-edit "></i></a></label>
                                <select class="form-control">
                                	<option id="">Selecione...</option>
                                {BLC_CIDADE}
                                    <option id="{ID}">{NOME}</option>
                                {/BLC_CIDADE}
                                </select>
                            </div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
                                <label for="membroCargo">Bairro &nbsp <a href=""><i class=" fa fa-edit "></i></a></label>
                                <select class="form-control">
                                	<option id="">Selecione...</option>
                                {BLC_BAIRRO}
                                    <option id="{ID}">{NOME}</option>
                                {/BLC_BAIRRO}
                                </select>
                            </div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
                                <label for="membroCargo">UF &nbsp <a href=""><i class=" fa fa-edit "></i></a></label>
                                <select class="form-control">
                                	<option id="">Selecione...</option>
                                {BLC_UF}
                                    <option id="{ID}">{NOME}</option>
                                {/BLC_UF}
                                </select>
                            </div>
						</div>
						<div class="col-md-2">
							<div class="form-group"> 
								<label for="membroCep">CEP</label>
								<input type="text" id="membroCep" name="membroCep" value="{membroCep}" class="form-control" />
							</div>
						</div>
					</div>
					<!-- / 4 linha formulario -->

					<!-- 6 linha formulario -->
					<div class="col-md-12">
						<div class="col-md-6">
							<div class="form-group"> 
								<label for="membroPai">Pai:</label>
								<input type="text" id="membroPai" name="membroPai" value="{membroPai}" class="form-control" />
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group"> 
								<label for="membroMae">Mãe:</label>
								<input type="text" id="membroMae" name="membroMae" value="{membroMae}" class="form-control" />
							</div>
						</div>
					</div>

					<!-- 7 linha formulario -->
					<div class="col-md-12">
						<div class="col-md-6">
							<div class="form-group"> 
								<label for="membroConjuge">Cônjuge:</label>
								<input type="text" id="membroConjuge" name="membroConjuge" value="{membroConjuge}" class="form-control" />
							</div>
						</div>
					</div>
				</form>

				<!-- Botões do formulario -->
				<div class="col-md-12"><br>
					<div style="text-align: right; padding-right: 30px;">
						<button class="btn btn-primary"><i class=" fa fa-refresh "></i> Novo</button>
						<button class="btn btn-success"><i class="fa fa-edit "></i> Salvar</button>
						<button class="btn btn-warning"><i class="fa fa-edit "></i> Editar</button>
						<button class="btn btn-danger"><i class="fa fa-pencil"></i> Excluir</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>
<script type="text/javascript"> 
jQuery.noConflict();
jQuery(function($){
   $("#membroEmissao").mask("99/99/9999");
   $("#membroNasc").mask("99/99/9999");
   $("#telefone").mask("(099) 9999-9999");
   $("#membroCpf").mask("999.999.999-99");
   $("#membroCep").mask("99999-999");
});
</script> 