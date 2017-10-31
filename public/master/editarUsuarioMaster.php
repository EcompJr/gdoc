<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>EGDOC - Edição de Usuário Master</title>
  <link href="../assets/css/bootstrap.css" rel="stylesheet" />
  <link href="../assets/css/font-awesome.css" rel="stylesheet" />
  <link href="../assets/css/custom.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>

<body>

  <?php
    //NAVBAR
    require_once 'navbar_master.php';
    //NAV SIDE 
    require_once 'sidebar_master.php';
  ?>

    <div id="wrapper">
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
              <h2 class="text-primary text-center">Editar Dados do Usuário Master</h2>
              <br>
            </div>
          </div>
          <hr>
          <div>
            <p><b>Buscar Usuário:</b></p>
          </div>
          <div class="row">
              <div class="col-md-4">
               
                  <select name="buscarUsuario" class="form-control" placeholder="Digite o login">
                      <option disabled selected>Escolha um usuário</option>
                  </select>
              </div>
              <div class="col-md-2">
                <button id="buscarBTN" type="submit" class="btn btn-primary" name="buscarBTN">Buscar</button>
              </div>
          </div>
          <hr>
          <form id="formCadastro" data-toggle="validator" role="form" data-delay="350">
              <div class="row">
                <div class="form-group col-md-4">
                    <label> Situação: </label>
                    <br>
                    <div class="btn-group" data-toggle="buttons">
                      <label class="btn btn-primary active">
                        <input type="radio" name="options" id="option1" checked="" > Ativo
                      </label>
                      <label class="btn btn-primary">
                        <input type="radio" name="options" id="option2"> Inativo
                      </label>
                    </div>
                  </div>
              </div>
            <div class="row">
              <div class="form-group col-md-4">
                <label for="empresa">Razão Social</label>
                <input type="text" class="form-control" placeholder="Nome Empresa" readonly>
              </div>

              <div class="form-group col-md-4">
                <label for="empresa">Código de Controle da Empresa</label>
                <input type="number" class="form-control" placeholder="142123" readonly>
              </div>
              <div class="form-group col-md-4">
                <label for="controle">Código de Controle do Usuário</label>
                <input type="text" class="form-control" id="controle" placeholder="Código Automático" readonly>
              </div>
            </div>

            
              <div class="row">
                
                <div class="form-group col-md-4">
                  <label for="nome">Nome Completo:</label>
                  <input required type="text" class="form-control" id="nome" placeholder="" readonly>
                </div>
                <div class="form-group col-md-4">
                  <label for="email">Email:</label>
                  <input required type="email" class="form-control" id="email" placeholder="" readonly>
                </div>
                <div class="form-group col-md-4">
                  <label for="passwd">Senha:</label>
                  <input required type="password" class="form-control" id="passwd" placeholder="Minimo de 4 caracteres" minlength="4" readonly>
                </div>
              </div>
          
              <div class="row">
                <div class="form-group col-md-4">
                  <label for="telefone">Telefone:</label>
                  <input required type="tel" class="form-control" id="telefone" placeholder="(XX) XXXXX-XXXX" pattern="^(\(11\) [9][0-9]{4}-[0-9]{4})|(\(1[2-9]\) [5-9][0-9]{3}-[0-9]{4})|(\([2-9][1-9]\) [5-9][0-9]{3}-[0-9]{4})$" readonly>
                </div>

                <div class="form-group col-md-4">
                  <label for="nome">CPF:</label>
                  <input pattern="([0-9]{2}[\.]?[0-9]{3}[\.]?[0-9]{3}[\/]?[0-9]{4}[-]?[0-9]{2})|([0-9]{3}[\.]?[0-9]{3}[\.]?[0-9]{3}[-]?[0-9]{2})"
                    required type="text" class="form-control" id="nome" placeholder="" readonly>
                </div>
                <div class="form-group col-md-4">
                  <label for="passwd">Confirmar senha:</label>
                  <input required type="password" class="form-control" id="passwd" placeholder="Confirmar senha" minlength="4" readonly>
                </div>
                
              </div>

              <br>

              <div class="form-group">        
                <button style="float: left" class="btn btn-danger" type="submit" name="excluir">Excluir</button>
                <button style="float: right" class="btn btn-primary" type="submit" name="salvar">Salvar</button>
              </div>
           
          </form>
          <!-- /. ROW  -->
          


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
  <script src="../assets/js/editarUsuarioMaster.js"></script>
  <script src="../assets/js/lib/validator.min.js"></script>
  <script src="../assets/js/custom.js"></script>


</body>

</html>