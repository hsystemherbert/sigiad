<script src="<?php echo base_url('assets/vendors/system/LivroRol.js')?>"></script>

<div class="col-xs-12 col-md-12 page-title">
  <div class="title_left">
    <h3>Cadastro do Livro ROL</h3>
  </div>
</div>
<div class="col-md-12 col-sm-12 col-xs-12" id="DadosEclesiasticos">
  <div class="x_panel x_panel_primary">
    <div class="x_title x_title_primary">
      <h2><i class="fa fa-bars"></i> Cadastro de ROL</h2>
      <ul class="nav navbar-right panel_toolbox">
        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Settings 1</a>
            </li>
            <li><a href="#">Settings 2</a>
            </li>
          </ul>
        </li>
        <li><a class="close-eclesia"><i class="fa fa-close"></i></a>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <div class="" role="tabpanel" data-example-id="togglable-tabs">
        <div class="col-md-12 col-xs-12">
        	<h4 class="">Último ROL cadastrado</h4>
			<table class="table">
            	<thead>
                	<tr>
                  		<th>ROL</th>
                  		<th>Nome</th>
                  		<th>Situação</th>
                  		<th>Data Entrada</th>
                  		<th>Data Batismo</th>
                  		<th>Procedência</th>
                  		<th>Descrição Procedência</th>
                	</tr>
              	</thead>
              	<tbody>
              	{BLC_ROL}
                	<tr>
                  		<th scope="">{RolID}</th>
                  		<td>{NomeMembro}</td>
                  		<td>{SituacaoCadastral}</td>
                  		<td>{DataEntrada}</td>
                  		<td>{DataBatismoAguas}</td>
                  		<td>{Procedencia}</td>
                  		<td>{DescricaoProcedencia}</td>
                	</tr>
                {/BLC_ROL}
                {BLC_SEMROL}
                	<tr>
                  		<th scope="" colspan="6">Não Existe ROL Cadastrado no Sistema</th>
                	</tr>
                {/BLC_SEMROL}
              	</tbody>
            </table>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12">
          <form action="" id="CadastroMembros">
            <h3 class="text-center">Novo Rol para Cadastro</h3>
            <div class="col-xs-12 col-md-12 col-md-offset-1">
              <div class="col-md-7 col-xs-12">
                  <div class="item form-group" id="item-lotacao"> 
                      <label for="NomeMembro">Nome: </label>
                      <select name="NomeMembro" id="NomeMembro" class="form-control">
                        <option value="">Selecione...</option>
                        {BLC_NOME}
                        <option value="{CODNOME}">{NOME}</option>
                        {/BLC_NOME}
                      </select>
                  </div>
              </div>
              <div class="col-md-3 col-xs-12">
                  <div class="item form-group"> 
                      <label for="DataEntrada">Data de Entrada: </label>
                      <input type="date" id="DataEntrada" name="DataEntrada" value="{DataEntrada}" class="form-control" />
                  </div>
              </div>
            </div>
          </form>
          <div class="col-md-12 col-xs-12">
            <div class="alert alert-danger" id="alert-geral"></div>
          </div> 
          <div class="ln_solid"></div>
        </div>
        <div class="form-group collapse-close">
          <div class="col-md-8 col-md-offset-3 col-sm-9 col-xs-12 text-center buttons-collapse">
            <a class="close-form btn btn-danger col-md-2 col-xs-12">Cancelar</a>
            <a class="collapse-salvar btn btn-success col-md-2  col-xs-12">Salvar</a>
            <a class="collapse-pesquisa btn btn-primary col-md-3  col-xs-12"><i class="fa fa-search"></i> Pesquisar</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="ModalPesquisa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h2 class="modal-title text-center" id="myModalLabel">Pesquisa Livro de ROL</h2><hr>     
      <div class="conteudo-modal">
       <div class="col-md-12 col-xs-12">
       	<div class="container">
       	 <div class="row">
       		<div class="item form-group" id="item-lotacao"> 
              <label for="NomeMembroRol">Nome: </label>
              <select name="NomeMembroRol" id="NomeMembroRol" class="form-control">
                <option value="">Selecione...</option>
                {BLC_NOME}
                <option value="{CODNOME}">{NOME}</option>
                {/BLC_NOME}
              </select>
          	</div>
          	<div class="ln_solid"></div>
          	<div class="col-xs-12 col-md-12">
          		<div class="container">
          			<div class="row">
          				<table class="table table-striped table-bordered table-hover">
				        	<thead>
				            	<tr>
				              		<th>ROL</th>
				              		<th>Nome</th>
				              		<th>Data Entrada</th>
				            	</tr>
				          	</thead>
				          	<tbody id="tabela">
				          	</tbody>
				        </table>
          			</div>
          		</div>
          	</div>	
       	 </div>
       	</div>
       </div>
      </div>
      </div>
    </div>
  </div>
</div>

<script>

	var url = '<?php echo base_url()?>/secretaria/LivroRol/';

	$(".close-form").click(function(){
		urlGlobal = '<?php echo base_url()?>/painel/Principal';
   		location.href= urlGlobal;
	});
</script>