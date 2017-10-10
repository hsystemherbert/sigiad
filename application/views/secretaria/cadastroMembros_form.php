<div class="col-xs-12 col-md-12 page-title">
  <div class="title_left">
    <h3>Cadastro de Membros / Pessoas</h3>
  </div>
</div>

<div class="col-md-12 col-sm-12 col-xs-12" id="DadosPessoais">
  <div class="x_panel x_panel_primary">
    <div class="x_title x_title_primary">
      <h2><i class="fa fa-bars"></i> Dados Pessoais</h2>
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
        <li><a class=""><i class="fa fa-close"></i></a>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <div class="" role="tabpanel" data-example-id="togglable-tabs">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <form action="" id="CadastroMembros" enctype="multipart/form-data">
            <div class="col-md-3 col-xs-12">
              <div class="col-xs-12 col-md-12 upload-foto">
                <a class="collapse-arquivos-foto"><img src="<?php echo base_url('assets/img/Usuario/login.png')?>" alt="Imagem do membro cadastrado" title="Clique para adicionar uma foto" class="img img-responsive"></a>
              </div>
            </div>
            <div class="col-md-9 col-xs-12">
              <div class="col-md-12 col-xs-12">
                <div class="col-md-2 col-xs-12">
                  <div class="item form-group" id="item-CodMembro"> 
                      <label for="CodMembro">COD:</label>
                      <input type="text" id="CodMembro" name="CodMembro" value="{CodMembro}" class="form-control" />
                  </div>
                </div>
                <div class="col-md-10 col-xs-12">
                  <div class="item form-group" id="item-NomeMembro"> 
                      <label for="NomeMembro">Nome do Membro / Pessoa:</label>
                      <input type="text" id="NomeMembro" name="NomeMembro" value="{NomeMembro}" class="form-control" />
                  </div>
                </div>
              </div>
              <div class="col-md-12 col-xs-12">
                <div class="col-md-3 col-xs-12">
                    <div class="item form-group" id="item-DataNascimento"> 
                        <label for="DataNascimento">Data Nascimento: </label>
                        <input type="date" id="DataNascimento" name="DataNascimento" value="{DataNascimento}" class="form-control" />
                    </div>
                </div>
                <div class="col-md-4 col-xs-12">
                    <div class="item form-group"> 
                        <label for="Naturalidade">Naturalidade: </label>
                        <input type="text" id="Naturalidade" name="Naturalidade" value="{Naturalidade}" class="form-control" />
                    </div>
                </div>
                <div class="col-md-2 col-xs-12">
                    <div class="item form-group"> 
                        <label for="EstadoNaturalidade">UF: </label>
                        <input type="text" id="EstadoNaturalidade" name="EstadoNaturalidade" value="{EstadoNaturalidade}" class="form-control" />
                    </div>
                </div>
                <div class="col-md-3 col-xs-12">
                    <div class="item form-group" id="item-Sexo"> 
                        <label for="Sexo">Sexo: </label>
                        <select name="Sexo" id="Sexo" class="form-control">
                          <option value="">Selecione</option>
                          <option value="masc">Masculino</option>
                          <option value="fem">Feminino</option>
                        </select>
                    </div>
                </div>
              </div>
              <div class="col-md-12 col-xs-12">
                <div class="col-xs-12 col-md-10">
                    <div class="item form-group"> 
                        <label for="Logradouro">Logradouro: </label>
                        <input type="text" id="Logradouro" name="Logradouro" value="{Logradouro}" class="form-control" />
                    </div>
                </div>
                <div class="col-md-2 col-xs-12">
                    <div class="item form-group"> 
                        <label for="Numero">Nº: </label>
                        <input type="text" id="Numero" name="Numero" value="{Numero}" class="form-control" />
                    </div>
                </div>
              </div>
              <div class="col-md-12 col-xs-12">
                <div class="col-xs-12 col-md-4">
                    <div class="item item form-group"> 
                        <label for="Bairro">Bairro: </label>
                        <input type="text" id="Bairro" name="Bairro" value="{Bairro}" class="form-control" />
                    </div>
                </div>
                <div class="col-md-4 col-xs-12">
                    <div class="item form-group" id="item-Cidade"> 
                        <label for="Cidade">Cidade: </label>
                        <input type="text" id="Cidade" name="Cidade" value="{Cidade}" class="form-control" />
                    </div>
                </div>
                <div class="col-md-3 col-xs-12">
                    <div class="item form-group"> 
                        <label for="Cep">CEP: </label>
                        <input type="text" id="Cep" name="Cep" value="{Cep}" class="form-control" />
                    </div>
                </div>
                <div class="col-md-1 col-xs-12">
                    <div class="item form-group"> 
                        <label for="EstadoLogadrouro">UF: </label>
                        <input type="text" id="EstadoLogadrouro" name="EstadoLogadrouro" value="{EstadoLogadrouro}" class="form-control" />
                    </div>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-md-12">
              <div class="col-md-6 col-xs-12">
                  <div class="item form-group"> 
                      <label for="NomePai">Pai: </label>
                      <input type="text" id="NomePai" name="NomePai" value="{NomePai}" class="form-control" />
                  </div>
              </div>
              <div class="col-md-6 col-xs-12">
                  <div class="item form-group"> 
                      <label for="NomeMae">Mãe: </label>
                      <input type="text" id="NomeMae" name="NomeMae" value="{NomeMae}" class="form-control" />
                  </div>
              </div>
            </div>
            <div class="col-xs-12 col-md-12">
              <div class="col-md-3 col-xs-12">
                  <div class="item form-group"> 
                      <label for="EstadoCivil">Estado Civil: </label>
                      <select name="EstadoCivil" id="EstadoCivil" class="form-control">
                        <option value="">Selecione...</option>
                        <option value="solteiro">Solteiro(a)</option>
                        <option value="casado">Casado(a)</option>
                        <option value="divorciado">Divorciado(a)</option>
                        <option value="viuvo">Viúvo(a)</option>
                      </select>
                  </div>
              </div>
              <div class="col-md-6 col-xs-12" id="divConjuge">
                <div class="item form-group"> 
                    <label for="Conjuge">Cônjuge: </label>
                    <input type="text" id="Conjuge" name="Conjuge" value="{Conjuge}" class="form-control" />
                </div>
              </div>
              <div class="col-md-3 col-xs-12" id="divData">
                <div class="item form-group"> 
                    <label for="DataCasamento">Data: </label>
                    <input type="date" id="DataCasamento" name="DataCasamento" value="{DataCasamento}" class="form-control" />
                </div>
              </div>
              <div class="col-md-3 col-xs-10" id="divData">
                <div class="item form-group"> 
                    <label for="Telefone">Telefone: </label>
                    <input type="text" id="Telefone" name="Telefone" value="{Telefone}" class="form-control" />
                </div>
              </div>
              <div class="col-md-1 col-xs-1" id="divData">
                <div class="item form-group"> 
                    <input type="button" data-toggle="modal" data-target="#ModalCadTelefone" id="BbtnModalCadTelefone" value="+" class="btn btn-primary form-input" />
                </div>
              </div>
              <div class="col-md-5 col-xs-12" id="divData">
                <div class="item form-group"> 
                    <label for="Email">E-mail: </label>
                    <input type="email" id="Email" name="Email" value="{Email}" class="form-control" />
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-md-12">
              <div class="alert alert-info alert-form" role="alert">
                <h2>Documentos Pessoais</h2>
              </div>
            </div>
            <div class="col-md-12 col-xs-12">
              <div class="alert alert-danger" id="alert-documento"></div>
            </div>
            <div class="col-xs-12 col-md-12">
              <div class="col-md-3 col-xs-12">
                  <div class="item form-group" id="item-cpf"> 
                      <label for="Cpf">CPF: </label>
                      <input type="text" id="Cpf" name="Cpf" value="{Cpf}" class="form-control" />
                  </div>
              </div>
              <div class="col-md-3 col-xs-12">
                  <div class="item form-group" id="item-rg"> 
                      <label for="Identidade">RG: </label>
                      <input type="text" id="Identidade" name="Identidade" value="{Identidade}" class="form-control" />
                  </div>
              </div>
              <div class="col-md-2 col-xs-12">
                  <div class="item form-group"> 
                      <label for="DataEmissao">Data: </label>
                      <input type="date" id="DataEmissao" name="DataEmissao" value="{DataEmissao}" class="form-control" />
                  </div>
              </div>
              <div class="col-md-3 col-xs-10">
                  <div class="item form-group"> 
                      <label for="OrgaoEmissor">Órgão Emissor: </label>
                      <select name="OrgaoEmissor" id="OrgaoEmissor" class="form-control">
                        <option value="">Selecione...</option>
                        {BLC_EMISSOR}
                        <option value="{CODEMISSOR}">{EMISSOR}</option>
                        {/BLC_EMISSOR}
                      </select>
                  </div>
              </div>
              <div class="col-md-1 col-xs-1" id="divOrgaoEmissor">
                <div class="item form-group"> 
                    <input type="button" data-toggle="modal" data-target="#ModalCadOrgaoEmissor" id="BbtnModalCadOrgaoEmissor" value="+" class="btn btn-primary form-input" />
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
          <div class="col-md-12 col-sm-12 col-xs-12 text-center buttons-collapse">
            <a class="close-form btn btn-danger col-md-2 col-xs-12">Cancelar</a>
            <a class="collapse-salvar-pessoal btn btn-success col-md-2  col-xs-12">Salvar</a>
            <a class="collapse-eclesia btn btn-primary col-md-3  col-xs-12">Dados Eclesiásticos</a>
            <a class="collapse-arquivos btn btn-warning col-md-2  col-xs-12">Arquivos</a>
            <a class="collapse-historico btn btn-info col-md-2  col-xs-12">Histórico</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="col-md-12 col-sm-12 col-xs-12" id="DadosEclesiasticos">
  <div class="x_panel x_panel_primary">
    <div class="x_title x_title_primary">
      <h2><i class="fa fa-bars"></i> Dados Eclesiásticos</h2>
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
        <div class="col-md-12 col-sm-12 col-xs-12">
          <form action="" id="CadastroMembros">
            <div class="col-xs-12 col-md-12">
              <div class="col-md-4 col-xs-12">
                  <div class="item form-group" id="item-lotacao"> 
                      <label for="LotacaoMembro">Lotação: </label>
                      <select name="LotacaoMembro" id="LotacaoMembro" class="form-control">
                        <option value="">Selecione...</option>
                        {BLC_LOTACAO}
                        <option value="{CODLOTACAO}">{LOTACAO}</option>
                        {/BLC_LOTACAO}
                      </select>
                  </div>
              </div>
              <div class="col-md-2 col-xs-12">
                  <div class="item form-group"> 
                      <label for="RolMembro">ROL: </label>
                      <input type="text" id="RolMembro" name="RolMembro" value="{RolMembro}" class="form-control" />
                  </div>
              </div>
              <div class="col-md-3 col-xs-12">
                  <div class="item form-group" id="item-tipo"> 
                      <label for="TipoMembro">Tipo: </label>
                      <select name="TipoMembro" id="TipoMembro" class="form-control">
                        <option value="">Selecione...</option>
                        <option value="membro">Membro</option>
                        <option value="obreiro">Obreiro</option>
                        <option value="congregante">Congregante</option>
                        <option value="outros">Outros</option>
                      </select>
                  </div>
              </div>
              <div class="col-md-3 col-xs-12">
                  <div class="item form-group"> 
                      <label for="CargoMembro">Cargo: </label>
                      <select name="CargoMembro" id="CargoMembro" class="form-control">
                        <option value="">Selecione...</option>
                        {BLC_CARGO}
                        <option value="{CODCARGO}">{CARGO}</option>
                        {/BLC_CARGO}
                      </select>
                  </div>
              </div>
            </div>
            <div class="col-md-12 col-xs-12">
              <div class="col-md-5 col-xs-10">
                  <div class="item form-group"> 
                      <label for="FuncaoMembro">Função: </label>
                      <select name="FuncaoMembro" id="FuncaoMembro" class="form-control">
                        <option value="">Selecione...</option>
                        {BLC_FUNCAO}
                        <option value="{CODFUNCAO}">{FUNCAO}</option>
                        {/BLC_FUNCAO}
                      </select>
                  </div>
              </div>
              <div class="col-md-1 col-xs-1" id="divFuncao">
                <div class="item form-group"> 
                    <input type="button" data-toggle="modal" data-target="#ModalCadFuncao" id="BbtnModalFuncao" value="+" class="btn btn-primary form-input" />
                </div>
              </div>
              <div class="col-md-3 col-xs-12">
                <div class="item form-group" id="item-situacao"> 
                    <label for="SituacaoCadastral">Situação: </label>
                    <select name="SituacaoCadastral" id="SituacaoCadastral" class="form-control">
                      <option value="">Selecione...</option>
                      <option value="ativo">Ativo</option>
                      <option value="inativo">Inativo</option>
                      <option value="desligado">Desligado</option>
                    </select>
                </div>
              </div>
              <div class="col-md-3 col-xs-12" id="DivBatismoAguas">
                <div class="item form-group"> 
                    <label for="BatismoAguas">Batizado nas águas?: </label>
                    <select name="BatismoAguas" id="BatismoAguas" class="form-control">
                      <option value="">Selecione...</option>
                      <option value="sim">Sim</option>
                      <option value="nao">Não</option>
                    </select>
                </div>
              </div>
            </div>
            <div class="col-md-12 col-xs-12">
              <div class="col-md-9 col-xs-12" id="DivBatismoAguasIgreja">
                <div class="item form-group"> 
                    <label for="IgrejaBatismoAguas">Igreja: </label>
                    <input type="text" id="IgrejaBatismoAguas" name="IgrejaBatismoAguas" value="{IgrejaBatismoAguas}" class="form-control" />
                </div>
              </div>
              <div class="col-md-3 col-xs-12" id="DivBatismoAguasData">
                <div class="item form-group"> 
                    <label for="DataBatismoAguas">Data: </label>
                    <input type="date" id="DataBatismoAguas" name="DataBatismoAguas" value="{DataBatismoAguas}" class="form-control" />
                </div>
              </div>
              <div class="col-md-3 col-xs-12" id="DivBatismoEspiritoSanto">
                <div class="item form-group"> 
                    <label for="BatismoEspiritoSanto">Batismo Espírito Santo?: </label>
                    <select name="BatismoEspiritoSanto" id="BatismoEspiritoSanto" class="form-control">
                      <option value="">Selecione...</option>
                      <option value="sim">Sim</option>
                      <option value="nao">Não</option>
                    </select>
                </div>
              </div>
              <div class="col-md-3 col-xs-12" id="DivBatismoEspiritoSantoData">
                <div class="item form-group"> 
                    <label for="DataBatismoEspiritoSanto">Data: </label>
                    <input type="date" id="DataBatismoEspiritoSanto" name="DataBatismoEspiritoSanto" value="{DataBatismoEspiritoSanto}" class="form-control" />
                </div>
              </div>
              <div class="col-md-8 col-xs-10" id="DivProcedencia">
                  <div class="item form-group" id="item-procedencia"> 
                      <label for="Procedencia">Procedencia: </label>
                      <select name="Procedencia" id="Procedencia" class="form-control">
                        <option value="">Selecione...</option>
                        {BLC_PROCEDENCIA}
                        <option value="{CODPROCEDENCIA}">{PROCEDENCIA}</option>
                        {/BLC_PROCEDENCIA}
                      </select>
                  </div>
              </div>
              <div class="col-md-1 col-xs-1" id="divFuncao">
                <div class="item form-group"> 
                    <input type="button" data-toggle="modal" data-target="#ModalCadProcedencia" id="BbtnModalFuncao" value="+" class="btn btn-primary form-input" />
                </div>
              </div>
              <div class="col-md-12 col-xs-12" id="Divdescprocedencia">
                  <div class="item form-group"> 
                      <label for="DescricaoProcedencia">Descrição Procedência: </label>
                      <input type="text" id="DescricaoProcedencia" name="DescricaoProcedencia" value="{DescricaoProcedencia}" class="form-control" />
                  </div>
              </div>
            </div>
          </form>
          <div class="col-md-12 col-xs-12">
            <div class="alert alert-danger" id="alert-geral-eclesia"></div>
          </div> 
          <div class="ln_solid"></div>
        </div>
        <div class="form-group collapse-close">
          <div class="col-md-8 col-md-offset-2 col-sm-9 col-xs-12 text-center buttons-collapse">
            <a class="close-form btn btn-danger col-md-2 col-xs-12">Cancelar</a>
            <a class="collapse-salvar-eclesia btn btn-success col-md-2  col-xs-12">Salvar</a>
            <a class="collapse-pessoal btn btn-info col-md-3  col-xs-12">Dados Pessoais</a>
            <a class="collapse-livroRol btn btn-warning col-md-2  col-xs-12">Livro Rol</a>
            <a class="collapse-historico btn btn-primary col-md-2  col-xs-12">Histórico</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="ModalCadTelefone" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h2 class="modal-title text-center" id="myModalLabel">Cadastros Gerais</h2><hr>     
      <div class="conteudo-modal">
        Cadastro de Telefone
      </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="ModalCadOrgaoEmissor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h2 class="modal-title text-center" id="myModalLabel">Cadastro de orgao Emissor</h2><hr>     
      <div class="conteudo-modal">
      Cadastro de orgao Emissor
      </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="ModalCadFuncao" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h2 class="modal-title text-center" id="myModalLabel">Cadastro de Funções</h2><hr>     
      <div class="conteudo-modal">
      Cadastro de Funções
      </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="ModalCadProcedencia" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h2 class="modal-title text-center" id="myModalLabel">Cadastro de Procedência</h2><hr>     
      <div class="conteudo-modal">
      Cadastro de Procedencias
      </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="ModalCadRol" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h2 class="modal-title text-center" id="myModalLabel">Livro de ROL</h2><hr>     
      <div class="conteudo-modal">
      Cadastro de Procedencias
      </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="ModalArquivos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Upload de Arquivos para Cadastro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <label for="input-b9">Selecionar Arquivos</label>
        <div class="file-loading">
          <input id="input-b9" name="input-b9[]" multiple type="file"'>
        </div>
        <div>
          <label for="input-b9">Digite o Nome do Arquivo:</label>
          <input type="text" class="form-control">
        </div>
        <div id="kartik-file-errors"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary" title="Your custom upload logic">Salvar</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="ModalFoto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Upload de Imagem para Cadastro</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <label for="input-b1">Selecionar Foto</label>
        <div class="file-loading">
          <input id="imageFoto" name="imageFoto[]" type="file">
        </div>
        <div id="kartik-file-errors"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary" title="Your custom upload logic">Salvar</button>
      </div>
    </div>
  </div>
</div>



<script src="<?php echo base_url('assets/vendors/system/CadastroMembro.js')?>"></script>

<script>

  urlPost = '<?php echo base_url()?>/secretaria/CadastroMembro/';

  $(".close-form").click(function()
  {
   // urlGlobal = '<?php echo base_url()?>/painel/Principal';
   
   // location.href= urlGlobal;
   location.reload();
  });

</script>