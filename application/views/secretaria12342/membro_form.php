<div id="page-wrapper" >
<div id="page-inner"-->
<div class="row">
	<div class="col-md-12">
		<div class="col-md-1">
			<img src="<?php echo base_url('assets/img/icones/58m.png')?>" style="padding-left: 20px;">
		</div>
		<div class="col-md-10">
			<h2 style="padding-left: 15px;">LISTA DE MEMBROS</h2>
		</div>
	</div>
</div>              
	<!-- /. ROW  -->
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
                                <th class="text-center">Código</th>
                                <th class="text-center">Foto</th>
                                <th class="text-center">ROL</th>
                                <th class="text-center">Nome</th>
                                <th class="text-center">Cargo</th>
                                <th class="text-center">Lotação</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        {BLC_DADOS}
                            <tr class="odd gradeX">
                                <td class="text-center">{ID}</td>
                                <td class="text-center"><img src="<?php echo base_url('assets/img/fotos/{FOTO}')?>"" class="img-foto"></td>
                                <td class="text-center">{ROL}</td>
                                <td>{NOME}</td>
                                <td class="text-center">{CARGO}</td>
                                <td class="text-center">{LOTACAO}</td>
                                <td class="text-center"><a href="{URLEDITAR}" title="Editar" class="btn btn-success" style="width: 100px">Editar</a>&nbsp<a href="{URLEXCLUIR}" title="Excluir" class="btn btn-danger" style="width: 100px">Excluir</a></td>
                            </tr>
                        {/BLC_DADOS}
                        {BLC_SEMDADOS}
                            <tr>
                                <td colspan="7" class="text-center">Não há dados</td>
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