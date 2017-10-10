
<div class="col-xs-12 col-md-12 page-title">
  <div class="title_left">
    <h3>Lançamentos de Caixa</h3>
  </div>
</div>
<div class="col-md-12 col-sm-12 col-xs-12" id="selecao">
  <div class="x_panel x_panel_primary">
    <div class="x_title x_title_primary">
      <h2><i class="fa fa-bars"></i> Lançamento de Caixa <small>Escolher Tipo de Lançamento</small></h2>
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
        <li><a class="close-link"><i class="fa fa-close"></i></a>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <div class="" role="tabpanel" data-example-id="togglable-tabs">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="col-md-offset-3 col-md-6 col-xs-12">
            <form class="form_panel_body">
              <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                <label for="">Escolha o tipo de Lançamento</label>
                <select name="lancamento" id="TipoLancamento" class="form-control">
                  <option value="">Selecione</option>
                  <option value="1">Entrada</option>
                  <option value="2">Saída</option>
                </select>
              </div>
            </form>
            <div class="form-group collapse-close">
              <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-2 text-center">
                <a class="collapse-link btn btn-primary">Cancelar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="col-md-12 col-sm-12 col-xs-12" id="entrada">
  <div class="x_panel x_panel_primary">
    <div class="x_title x_title_primary">
      <h2><i class="fa fa-bars"></i> Lançamento de Entradas<small>Selecioanar a Lotação</small></h2>
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
        <li><a class="close-panel"><i class="fa fa-close"></i></a>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <div class="" role="tabpanel" data-example-id="togglable-tabs">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="col-md-offset-3 col-md-6 col-xs-12">
            <form class="form_panel_body">
              <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                <label for="">Selecione a Lotação</label>
                <select name="" id="select_lotacao" class="form-control">
                 <option value="">Selecione</option>
                  {BLC_LOTACAO}
                  <option value="{COD_LOT}">{LOTACAO}</option>
                  {/BLC_LOTACAO}
                </select>
              </div>
            </form>
            <div class="form-group collapse-close">
              <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-2 text-center">
                <a class="close-panel btn btn-primary">Cancelar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="col-md-12 col-sm-12 col-xs-12" id="saida">
  <div class="x_panel x_panel_primary">
    <div class="x_title x_title_primary">
      <h2><i class="fa fa-bars"></i> Lançamento das Saídas <small>Selecioanar a Lotação</small></h2>
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
        <li><a class="close-panel"><i class="fa fa-close"></i></a>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <div class="" role="tabpanel" data-example-id="togglable-tabs">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="col-md-offset-3 col-md-6 col-xs-12">
            <form class="form_panel_body">
              <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                <label for="">Selecione a Lotação</label>
                <select name="" id="select_lotacao_saida" class="form-control">
                  <option value="">Selecione</option>
                  {BLC_LOTACAO}
                  <option value="{COD_LOT}">{LOTACAO}</option>
                  {/BLC_LOTACAO}
                </select>
              </div>
            </form>
            <div class="form-group collapse-close">
              <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-2 text-center">
                <a class="close-panel btn btn-primary">Cancelar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="col-md-12 col-sm-12 col-xs-12" id="form_entrada">
  <div class="x_panel x_panel_primary">
    <div class="x_title x_title_primary">
      <h2><i class="fa fa-bars"></i> Lançamento das Entradas <small id="small_form_entrada"></small></h2>
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
        <li><a class="close-panel"><i class="fa fa-close"></i></a>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <div class="" role="tabpanel" data-example-id="togglable-tabs">
        <div class="col-md-12 col-sm-12 col-xs-12">
          
          <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">First Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Last Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Middle Name / Initial</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="middle-name">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Gender</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div id="gender" class="btn-group" data-toggle="buttons">
                            <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="gender" value="male"> &nbsp; Male &nbsp;
                            </label>
                            <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="gender" value="female"> Female
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Of Birth <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" class="btn btn-primary">Cancel</button>
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>

                    </form>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="col-md-12 col-sm-12 col-xs-12" id="form_saida">
  <div class="x_panel x_panel_primary">
    <div class="x_title x_title_primary">
      <h2><i class="fa fa-bars"></i> Lançamento das Saídas <small id="small_form_saida"></small></h2>
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
        <li><a class="close-panel"><i class="fa fa-close"></i></a>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <div class="" role="tabpanel" data-example-id="togglable-tabs">
        <div class="col-md-12 col-sm-12 col-xs-12">
         <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
         <!--  <fieldset>
            <div class="control-group">
              <div class="controls">
                <div class="col-md-11 xdisplay_inputx form-group has-feedback">
                  <input type="text" class="form-control has-feedback-left" id="single_cal4" placeholder="First Name" aria-describedby="inputSuccess2Status4">
                  <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                  <span id="inputSuccess2Status4" class="sr-only">(success)</span>
                </div>
              </div>
            </div>
          </fieldset> -->
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Mês/Ano: <span class="required">*</span>
            </label>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Data:<span class="required">*</span>
            </label>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Tipo de Movimento <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <select name="select_movimento" id="select_lotacao_saida" class="form-control">
                <option value="">Selecione</option>
                <option value="1">Lançamento em Caixa</option>
                <option value="2">Lançamento Bancário</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Plano de Contas</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="col-xs-12 col-md-2">
                <a href="" data-toggle="modal" data-target="#ModalPlano" id="BbtnModalPlano" class="btn btn-primary"><i class="fa fa-edit"></i>Plano</a>
              </div>
              <div class="col-xs-12 col-md-offset-1 col-md-3">
                <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Código: </label>
              </div>
              <div class="col-xs-12 col-md-6">
                <input type="text" id="cod_plano_contas" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
          </div>
          <div class="form-group" id="select_plano">
            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Plano de Contas</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
             <select name="" id="select_lotacao_saida" class="form-control">
                <option value="">Selecione</option>
                {BLC_PLANO}
                <option value="{COD}">{CODIGO} - {PLANO}</option>
                {/BLC_PLANO}
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Descrição <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Valor <span class="required">*</span>
            </label>
            <div class="col-md-4 col-sm-6 col-xs-12">
              <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
            </div>
          </div>
          <div class="col-md-offset-8 col-md-2 col-xs-12 app-button" id="app-button-id">
            <a class="btn btn-app app-primary"><i class="fa fa-plus"></i></a>
          </div>
          <div class="ln_solid"></div>
         <div class="table-saida"></div>
          <div class="ln_solid"></div>

          <div class="form-group">
            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
              <a class="close-panel btn btn-primary">Cancelar</a>
              <button type="submit" class="btn btn-success">Enviar</button>
            </div>
          </div>
         </form>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="ModalPlano" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h2 class="modal-title text-center" id="myModalLabel">Selecionar Plano de Contas</h2><hr>     
      <div class="conteudo-modal"></div>
      </div>
    </div>
  </div>
</div>

<script src="<?php echo base_url('assets/vendors/system/lancamentoCaixa.js')?>"></script>