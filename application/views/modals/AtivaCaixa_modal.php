<div class="panel panel-default">
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <div class="modal-body text-center">
                        <div class="alert alert-danger text-center">
                            <h2>ERRO!</h2><br>
                            <hr>
                        </div>
                            <h2>É Necessário Ativar o Caixa!!!</h2><hr><hr>
                       <a href="<?php echo base_url('/financeiro/AtivaMesCaixa')?>" class="btn btn-success btn-lg">Ativar Caixa</a>
                       <a href="<?php echo base_url('/painel/Principal')?>" class="btn btn-danger btn-lg">Cancelar</a>
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