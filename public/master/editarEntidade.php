<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>EGDOC - Edição de Entidades</title>
  <link href="../assets/css/bootstrap.css" rel="stylesheet" />
  <link href="../assets/css/font-awesome.css" rel="stylesheet" />
  <link href="../assets/css/custom.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>

<body>



    <!-- NAVBAR -->
    <?php
        require_once 'navbar_master.php';
    ?>
          
    <!-- NAV SIDE  -->
    <?php
        require_once 'sidebar_master.php';
    ?>
    <!-- NAV SIDE  -->    
    
  <div id="wrapper">
    <div id="page-wrapper">
      <div id="page-inner">
        <div class="row">
          <div class="col-md-10">
            <h2 class="text-primary text-center">Edição de Entidades</h2>
          </div>
        </div>

        <hr />

        <!-- Primero bloco -->
        <form d="formCadastro" data-toggle="validator" role="form" data-delay="350">

        <script>
            function unblock() {
                document.getElementById("razaoSocial").disabled = false;
                document.getElementById("cnpj").disabled = false;
                document.getElementById("ie").disabled = false;
                document.getElementById("im").disabled = false;
                document.getElementById("cep").disabled = false;
                document.getElementById("estados").disabled = false;
                document.getElementById("cidades").disabled = false;
                document.getElementById("hierarquia").disabled = false;
                document.getElementById("telefone1").disabled = false;
                document.getElementById("endereco").disabled = false;
                document.getElementById("bairro").disabled = false;
                document.getElementById("complemento").disabled = false;
                document.getElementById("responsavel").disabled = false;
                document.getElementById("operacional").disabled = false;
                document.getElementById("financeiro").disabled = false;
                document.getElementById("dataContratacao").disabled = false;
                document.getElementById("dataRecisao").disabled = false;
                document.getElementById("valorMensal").disabled = false;
                document.getElementById("codigoControle").disabled = false;
                document.getElementById("logo").disabled = false;
                document.getElementById("obs").disabled = false;
            }
        </script>

        <div class="row">
            <div class="form-group col-md-3">
                <label for="estados">Selecione uma Entidade</label>
                    <select class="form-control" required id="entidade" onchange="unblock()">
                        <option value="" disabled selected></option>
                        <option value="">Entidade1</option>
                        <option value="">Entidade2</option>
                    </select>
          </div>
        </div>

          <div class="row">
            <div class="form-group col-md-3">
              <label for="razaoSocial">Razão Social:</label>
              <input type="text" required placeholder="Nome da Empresa" class="form-control" id="razaoSocial" disabled>
            </div>

            <div class="form-group col-md-3">
              <label for="cnpj">CNPJ/CPF</label>
              <input type="text" required class="form-control" id="cnpj" disabled>
            </div>

            <div class="form-group col-md-3">
              <label for="ie">Inscrição Estadual</label>
              <input type="text" required class="form-control" id="ie" disabled>
            </div>

            <div class="form-group col-md-3">
              <label for="im">Inscrição Municipal</label>
              <input type="text" required class="form-control" id="im" disabled>
            </div>
          </div>

          <div class="row">

            <div class="form-group col-md-3">
              <label for="cep">CEP</label>
              <input id="cep" placeholder="XXXXX-XXX" required pattern="^\\d{5}[-]\\d{3}$" type="text" class="form-control" disabled>
            </div>

            <div class="form-group col-md-3">
              <label for="estados">UF</label>
              <select class="form-control" required id="estados" disabled>
                <option value=""></option>
            </select>
            </div>


            <div class="form-group col-md-3">
              <label for="cidade">Cidade</label>
              <select id="cidades" class="form-control" required disabled>
              </select>
            </div>

            <div class="form-group col-md-3">
              <label for="nivelHierarquico">Nível Hierárquico</label>
              <select id="hierarquia" class="form-control" required disabled>
              </select>
            </div>

          </div>

          <div class="row">
            <div class="form-group col-md-3">
              <label for="Telefone">Telefone</label>
              <input type="Telefone" required class="form-control" id="telefone1" placeholder="(XX) XXXXX-XXXX" pattern="^(\(11\) [9][0-9]{4}-[0-9]{4})|(\(1[2-9]\) [5-9][0-9]{3}-[0-9]{4})|(\([2-9][1-9]\) [5-9][0-9]{3}-[0-9]{4})$" disabled>
            </div>

            <div class="form-group col-md-3">
              <label for="endereco">Endereço</label>
              <input type="text" required class="form-control" id="endereco" disabled>
            </div>

            <div class="form-group col-md-3">
            <label for="bairro">Bairro</label>
            <input required type="text" class="form-control" id="bairro" disabled>
          </div>

            <div class="form-group col-md-3">
              <label for="complemento">Complemento</label>
              <input type="text" class="form-control" id="complemento" disabled>
            </div>
          </div>

          <!--<br>-->
          <!--Antes era: Dados responsável-->

          <div class="row">
            <div class="form-group col-md-6">
            <h3 class="text-primary"> Responsável </h3>
                <select id="responsavel" class="form-control" required disabled>
                </select>
            </div>
            <div class="form-group col-md-6">
            <h3 class="text-primary"> Operacional </h3>
                <select id="operacional" class="form-control" required disabled>
                </select>
            </div>
          </div>

          <!--<br>-->
          <!--Antes era: Dados financeiro-->
          <h3 class="text-primary"> Financeiro </h3>

          <div class="row">
            <div class="form-group col-md-12">
            <label for="responsavelFinanceiro">Responsável</label>
              <select id="financeiro" class="form-control" required disabled></select>
            </div>
            </div>

          <!--<br>-->

          <div class="row">
          <div class="form-group col-md-4">
            <label for="dataContratacao">Data de Contratação</label>
            <input type="date" required class="form-control" id="dataContratacao" disabled>
          </div>
          <div class="form-group col-md-4">
            <label for="dataRecisao">Data de Recisão</label>
            <input type="date" required class="form-control" id="dataRecisao" disabled>
          </div>
          <div class="form-group col-md-4">
            <label for="valorMensal">Valor Mensal</label>
            <input type="number" required class="form-control" id="valorMensal" disabled>
          </div>
          </div>

          <div class="row">


          <div class="form-group col-md-4">
            <label for="codigoControle">Código de Controle</label>
            <input type="text" required class="form-control" id="codigoControle" disabled>
          </div>
          <div class="form-group col-md-4">
            <label for="logo">Anexar Logo:</label>
            <input requierd type="file" class="form-control" id="logo" disabled>
          </div>
          <div class="form-group col-md-4">
            <label for="obs">Observações</label>
            <textarea placeholder="Escreva aqui sua observação" id="obs" rows="5" cols="40" disabled></textarea>
          </div>
          </div>

            
            <!-- Modal -->
            <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Você tem certeza de que deseja excluir esta Entidade?</h4>
                </div>
                <div class="modal-body">
                    <p>Este entidade será excluída permanentemente.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Sim</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Não</button>

                </div>
                </div>

            </div>
            </div>

          <div class="form-group">
            <button style="float: left" class="btn btn-danger"  name="excluir" data-toggle="modal" data-target="#myModal">Excluir</button>
            <button style="float: right" class="btn btn-primary" type="submit" name="salvar">Salvar</button>
          </div>

        </form>


        <!-- /. ROW  -->
      </div>
      <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
  </div>
  <div class="footer">


    <div class="row">
      <div class="col-lg-12">
        &copy; 2017 egdoc.com | Design by:
        <a href="http://ecompjr.com.br/" style="color:#fff;" target="_blank"> <strong>www.ecompjr.com.br</strong></a>
      </div>
    </div>
  </div>


  <script src="../assets/js/lib/jquery-1.10.2.js"></script>
  <script src="../assets/js/lib/bootstrap.min.js"></script>
  <script src="../assets/js/cadastroCliente.js"></script>
  <script src="../assets/js/lib/validator.min.js"></script>


</body>

</html>