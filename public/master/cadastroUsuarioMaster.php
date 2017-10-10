<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>EGDOC - Cadastro de Usuário Master</title>
  <link href="../assets/css/bootstrap.css" rel="stylesheet" />
  <link href="../assets/css/font-awesome.css" rel="stylesheet" />
  <link href="../assets/css/custom.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>

<body>

<?php
    require_once 'sidebar_master.php';
?>

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
    
    <div id="page-wrapper">
      <div id="page-inner">

        <div class="row">
          <div class="col-md-4">
            <a class="navbar-brand" href="../index.html">
           <img src="../assets/img/logo.png" />
         </a>
          </div>
          <div class="col-md-4">

            <br>
            <br>
          </div>

        </div>
        <div class="row">
          <div class="col-md-10">
            <h2 class="text-primary text-center">Dados do Usuário Master</h2>
            <br>
          </div>
        </div>


        <form id="formCadastro" data-toggle="validator" role="form" data-delay="350">

          <div class="row">
            <div class="form-group col-md-3">
              <label for="empresa">Razão Social</label>
              <input type="text" class="form-control" placeholder="Empresa Exemplo" readonly>
            </div>

            <div class="form-group col-md-3">
              <label for="empresa">Código de Controle da Empresa</label>
              <input type="number" class="form-control" placeholder="142123" readonly>
            </div>
          </div>

          <div class="row">
            <div class="form-group col-md-3">
              <label for="controle">Código de Controle do Usuário</label>
              <input type="text" class="form-control" id="controle" placeholder="Código Automático" readonly>
            </div>

            <div class="form-group col-md-3">
              <label> Situação: </label>
              <br>
              <div class="btn-group" data-toggle="buttons">
                <label class="btn btn-primary active">
                      <input type="radio" name="options" id="option1" checked=""> Ativo
                    </label>
                <label class="btn btn-primary">
                      <input type="radio" name="options" id="option2"> Inativo
                    </label>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="form-group col-md-3">
              <label for="nome">Nome:</label>
              <input required type="text" class="form-control" id="nome" placeholder="Nome Completo">
            </div>
          </div>

          <div class="row">
            <div class="form-group col-md-3">
              <label for="email">Email:</label>
              <input required type="email" class="form-control" id="email" placeholder="Email">
            </div>
          </div>

          <div class="row">
            <div class="form-group col-md-3">
              <label for="telefone">Tel:</label>
              <input required type="tel" class="form-control" id="telefone" placeholder="(XX) XXXXX-XXXX" pattern="^(\(11\) [9][0-9]{4}-[0-9]{4})|(\(1[2-9]\) [5-9][0-9]{3}-[0-9]{4})|(\([2-9][1-9]\) [5-9][0-9]{3}-[0-9]{4})$">
            </div>

            <div class="form-group col-md-3">
              <label for="nome">CPF</label>
              <input pattern="([0-9]{2}[\.]?[0-9]{3}[\.]?[0-9]{3}[\/]?[0-9]{4}[-]?[0-9]{2})|([0-9]{3}[\.]?[0-9]{3}[\.]?[0-9]{3}[-]?[0-9]{2})"
                required type="text" class="form-control" id="nome" placeholder="Nome">
            </div>
          </div>

          <div class="row">
            <div class="form-group col-md-3">
              <label for="passwd">Senha:</label>
              <input required type="password" class="form-control" id="passwd" placeholder="Minimo de 4 caracteres" minlength="4">
            </div>
          </div>

          <br>

          <div class="row">
            <div class="form-group col-md-2">
              <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
            <div class="form-group col-md-2">
              <button type="reset" class="btn btn-primary">Resetar</button>
            </div>
          </div>
        </form>
        <!-- /. ROW  -->
        <hr />


        <!-- /. ROW  -->
      </div>
      <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
  </div>
  <div class="footer">


    <div class="row">
      <div class="col-lg-12">
        &copy; 2017 egdoc.com | Design by: <a href="http://ecompjr.com.br/" style="color:#fff;" target="_blank"> <strong>www.ecompjr.com.br</strong></a>
      </div>
    </div>
  </div>


  <script src="../assets/js/lib/jquery-1.10.2.js"></script>
  <script src="../assets/js/lib/bootstrap.min.js"></script>
  <script src="../assets/js/cadastroUsuarioMaster.js"></script>
  <script src="../assets/js/lib/validator.min.js"></script>
  <script src="../assets/js/custom.js"></script>


</body>

</html>