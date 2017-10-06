<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>EGDOC - Cadastro de Entidades</title>
  <link href="../assets/css/bootstrap.css" rel="stylesheet" />
  <link href="../assets/css/font-awesome.css" rel="stylesheet" />
  <link href="../assets/css/custom.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>

<body>



  <div id="wrapper">
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="adjust-nav">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
          <a class="navbar-brand" href="../index.html">
            <img src="../assets/img/logo.png" />
          </a>
        </div>

        <span class="logout-spn">
        <a href="#" style="color:#fff;">Sair</a>

      </span>
      </div>
    </div>
    <!-- /. NAV TOP  -->
    
    <!-- NAV SIDE  -->
    <?php
        require_once 'sidebar_master.php';
    ?>
    <!-- NAV SIDE  -->    
    
    <div id="page-wrapper">
      <div id="page-inner">
        <div class="row">
          <div class="col-md-10">
            <h2 class="text-primary text-center">Cadastro de Entidades</h2>
          </div>
        </div>

        <hr />

        <!-- Primero bloco -->
        <form d="formCadastro" data-toggle="validator" role="form" data-delay="350">

          <div class="row">
            <div class="form-group col-md-3">
              <label for="razaoSocial">Razão Social:</label>
              <input type="text" required placeholder="Nome da Empresa" class="form-control" id="razaoSocial">
            </div>

            <div class="form-group col-md-3">
              <label for="cnpj">CNPJ/CPF</label>
              <input type="text" required class="form-control" id="cnpj">
            </div>

            <div class="form-group col-md-3">
              <label for="ie">I.E.</label>
              <input type="text" required class="form-control" id="ie">
            </div>

            <div class="form-group col-md-3">
              <label for="im">I.M.</label>
              <input type="text" required class="form-control" id="im">
            </div>
          </div>

          <div class="row">

            <div class="form-group col-md-3">
              <label for="cep">C.E.P</label>
              <input id="cep" placeholder="XXXXX-XXX" required pattern="^\\d{5}[-]\\d{3}$" type="text" class="form-control" >
            </div>

            <div class="form-group col-md-3">
              <label for="estados">UF</label>
              <select class="form-control" required id="estados">
                <option value=""></option>
            </select>
            </div>


            <div class="form-group col-md-3">
              <label for="cidade">Cidade</label>
              <select id="cidades" class="form-control" required>
              </select>
            </div>
          </div>

          <div class="row">
            <div class="form-group col-md-3">
              <label for="tel">Tel.</label>
              <input type="tel" required class="form-control" id="tel1" placeholder="(XX) XXXXX-XXXX" pattern="^(\(11\) [9][0-9]{4}-[0-9]{4})|(\(1[2-9]\) [5-9][0-9]{3}-[0-9]{4})|(\([2-9][1-9]\) [5-9][0-9]{3}-[0-9]{4})$">
            </div>

            <div class="form-group col-md-3">
              <label for="endereco">Endereço</label>
              <input type="text" required class="form-control" id="endereco">
            </div>

            <div class="form-group col-md-3">
            <label for="bairro">Bairro</label>
            <input placeholder="Bairro" required type="text" class="form-control" id="bairro">
          </div>

            <div class="form-group col-md-3">
              <label for="complemento">Complemento</label>
              <input placeholder="Edíficio número 2" type="text" class="form-control" id="complemento">
            </div>
          </div>

          <!--<br>-->
          <!--Antes era: Dados responsável-->
          <h3 class="text-primary"> Responsável: </h3>

          <div class="row">
          <div class="form-group col-md-3">
            <label for="exampleInputName2">Nome</label>
            <input type="text" required class="form-control" id="nome1">
          </div>
          <div class="form-group col-md-3">
            <label for="exampleInputName2">Tel</label>
            <input required class="form-control" id="tel2" placeholder="(XX) XXXXX-XXXX" pattern="^(\(11\) [9][0-9]{4}-[0-9]{4})|(\(1[2-9]\) [5-9][0-9]{3}-[0-9]{4})|(\([2-9][1-9]\) [5-9][0-9]{3}-[0-9]{4})$">
          </div>

          <div class="form-group col-md-3">
            <label for="email1">Email</label>
            <input type="email" required class="form-control" id="email1"6>
          </div>

          <div class="form-group col-md-3">
            <label for="outros1">Outros</label>
            <input type="email" required class="form-control" id="outros1">
          </div>
          </div>

         <!--<br>-->
        <!--Antes era: Dados operacional-->          
          <h3 class="text-primary"> Operacional: </h3>

          <div class="row">
          <div class="form-group col-md-3">
            <label for="nome2">Nome</label>
            <input type="text" required class="form-control" id="nome2">
          </div>
          <div class="form-group col-md-3">
            <label for="tel3">Tel</label>
            <input type="text" required class="form-control" id="tel3" placeholder="(XX) XXXXX-XXXX" pattern="^(\(11\) [9][0-9]{4}-[0-9]{4})|(\(1[2-9]\) [5-9][0-9]{3}-[0-9]{4})|(\([2-9][1-9]\) [5-9][0-9]{3}-[0-9]{4})$">
          </div>

          <div class="form-group col-md-3">
            <label for="email2">Email</label>
            <input type="email" required class="form-control" id="email2">
          </div>

          <div class="form-group col-md-3">
            <label for="outros2">Outros</label>
            <input type="email" required="true" class="form-control" id="outros2">
          </div>
          </div>

          <!--<br>-->
          <!--Antes era: Dados financeiro-->
          <h3 class="text-primary"> Financeiro: </h3>

          <div class="row">
          <div class="form-group col-md-3">
            <label for="nome3">Nome</label>
            <input type="text" required class="form-control" id="nome3" size=52>
          </div>
          <div class="form-group col-md-3">
            <label for="exampleInputName2">Tel</label>
            <input type="text" required="true" class="form-control" id="tel4" placeholder="(XX) XXXXX-XXXX" pattern="^(\(11\) [9][0-9]{4}-[0-9]{4})|(\(1[2-9]\) [5-9][0-9]{3}-[0-9]{4})|(\([2-9][1-9]\) [5-9][0-9]{3}-[0-9]{4})$"
              size=13>
          </div>

          <div class="form-group col-md-3">
            <label for="email3">Email</label>
            <input type="email" required class="form-control" id="email3" size=76>
          </div>

          <div class="form-group col-md-3">
            <label for="outros3">Outros</label>
            <input type="email" required class="form-control" id="outros3" size=75>
          </div>
          </div>

          <!--<br>-->

          <div class="row">
          <div class="form-group col-md-4">
            <label for="dataContratacao">Data de Contratação</label>
            <input type="date" required class="form-control" id="dataContratacao">
          </div>
          <div class="form-group col-md-4">
            <label for="dataRecisao">Data de Recisão</label>
            <input type="date" required class="form-control" id="dataRecisao">
          </div>
          </div>

          <div class="row">
          <div class="form-group col-md-4">
            <label for="valorMensal">Valor Mensal</label>
            <input type="number" required class="form-control" id="valorMensal">
          </div>

          <div class="form-group col-md-4">
            <label for="codigoControle">Código de Controle</label>
            <input type="text" required class="form-control" id="codigoControle">
          </div>
          </div>

          <div class="row">
          <div class="form-group col-md-4">
            <label for="logo">Anexar Logo:</label>
            <input requierd type="file" class="form-control" id="logo">
          </div>

          <div class="form-group col-md-4">
            <label for="obs">Obs</label>
            <textarea placeholder="Escreva aqui sua observação" id="obs" rows="5" cols="50">
      </textarea>
          </div>
          </div>

          <div class="form-group">
            <button class="btn btn-primary" type="submit" name="salvar">Salvar</button>
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