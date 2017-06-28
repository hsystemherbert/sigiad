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

<script>
    $(document).ready(function() {
   $('#myModal').modal('show');
});
</script>