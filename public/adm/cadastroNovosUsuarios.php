<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>EGDOC - Cadastro de Clientes</title>
  <link href="../assets/css/bootstrap.css" rel="stylesheet" />
  <link href="../assets/css/font-awesome.css" rel="stylesheet" />
  <link href="../assets/css/custom.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>

<body>

<?php
    require_once 'sidebar_adm.php';
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
    
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper">
      <div id="page-inner">
        <div class="row">
          <div class="col-md-10">
            <h2 class="text-primary text-center">Cadastro de Usuários - Sistema</h2>

            <!--<h2 class="text-primary text-left">Razão Social</h2>-->
          </div>
        </div>

        <hr />
        <!-- Primero bloco -->
        <form id="formCadastro" data-toggle="validator" role="form" data-delay="350">

          <div class="row">
            <div class="form-group col-md-4">
              <label for="tipoUsuario">Tipo de Usuário:</label>
              <select id="tipoUsuario" class="form-control">
                <option value"Administrador" checked>Administrador</option>
                <!--<option value="Intermédiario">Intermediario</option>-->
                <option value="Interno">Interno</option>
                <!--<option value="Externo">Externo</option>-->
            </select>
            </div>
          </div>

          <!--s</br>-->

          <div class="row">
            <div class="form-group col-md-6">
              <label for="ie">Nome</label>
              <input type="text" required class="form-control" id="nome" size=30>
            </div>

            <div class="form-group col-md-2">
              <label for="tel">Sexo</label>
              <select id="sexo" class="form-control">
                  <option value="masculino">Masculino</option>
                  <option value="feminino">Feminino</option>
              </select>
            </div>
          </div>


          <div class="row">
            <div class="form-group col-md-4">
              <label for="tel">CPF/CNPJ</label>
              <input pattern="([0-9]{2}[\.]?[0-9]{3}[\.]?[0-9]{3}[\/]?[0-9]{4}[-]?[0-9]{2})|([0-9]{3}[\.]?[0-9]{3}[\.]?[0-9]{3}[-]?[0-9]{2})"
                class="form-control" type="text">
            </div>

            <div class="form-group col-md-4">
              <label for="pais">País</label>
              <select required id="pais" class="form-control">
                <option value=""></option>
              </select>
            </div>
          </div>


          <div class="row">
            <div class="form-group col-md-4">
              <label for="tel">Profissão</label>
              <input class="form-control" type="text">
            </div>

            <div class="form-group col-md-4">
              <label for="tel">Estado Civil</label>
              <select id="civil" class="form-control">
              <option value="solteiro">Solteiro</option>
              <option value="casado">Casado</option>
              <option value="divorciado">Divorciado</option>
              <option value="viuvo">Viúvo</option>
              <option value="viuvo">União Estável</option>
            </select>
            </div>
          </div>

          <div class="row">
            <div class="form-group col-md-3">
              <label for="tel">Telefone:</label>
              <input class="form-control" id="tel" placeholder="(XX) XXXXX-XXXX" pattern="^(\(11\) [9][0-9]{4}-[0-9]{4})|(\(1[2-9]\) [5-9][0-9]{3}-[0-9]{4})|(\([2-9][1-9]\) [5-9][0-9]{3}-[0-9]{4})$">
            </div>

            <div class="form-group col-md-3">
              <label for="tel">Celular:</label>
              <input required class="form-control" id="tel" placeholder="(XX) XXXXX-XXXX" pattern="^(\(11\) [9][0-9]{4}-[0-9]{4})|(\(1[2-9]\) [5-9][0-9]{3}-[0-9]{4})|(\([2-9][1-9]\) [5-9][0-9]{3}-[0-9]{4})$">
            </div>


            <div class="form-group col-md-3">
              <label for="tel">WhatsApp:</label>
              <input required class="form-control" id="tel" placeholder="(XX) XXXXX-XXXX" pattern="^(\(11\) [9][0-9]{4}-[0-9]{4})|(\(1[2-9]\) [5-9][0-9]{3}-[0-9]{4})|(\([2-9][1-9]\) [5-9][0-9]{3}-[0-9]{4})$">
            </div>
          </div>

          <div class="row">
            <div class="form-group col-md-3 ">
              <label for="cep">C.E.P</label>
              <input placeholder="XXXXX-XXX" required pattern="^\\d{5}[-]\\d{3}$" type="text" class="form-control" id="cep" size="10">
            </div>

            <div class="form-group col-md-3">
              <label for="estados">UF</label>
              <select required id="estados" class="form-control">
              <option value=""></option>
            </select>
            </div>

            <div class="form-group col-md-3">
              <label for="cidade">Cidade</label>
              <select required id="cidades" class="form-control">
            </select>
            </div>
          </div>


          <div class- "row">
            <div class="form-group col-md-3">
              <label for="complemento">Complemento</label>
              <input placeholder="Edíficio número 2" type="text" class="form-control" id="complemento">
            </div>

            <div class="form-group col-md-3">
              <label for="bairro">Bairro</label>
              <input placeholder="Bairro" required type="text" class="form-control" id="bairro">
            </div>

            <div class="form-group col-md-3">
              <label for="endereco">Logradouro</label>
              <input type="text" required class="form-control" id="endereco">
            </div>

            <div class="form-group col-md-3">
              <label for="endereco">Numero</label>
              <input type="number" required class="form-control" id="numero">
            </div>

          </div>


          <div class="row">
            <div class="form-group col-md-3">
              <label for="tel">Email</label>
              <input class="form-control" type="email">
            </div>

            <div class="form-group col-md-4">
              <label for="bairro">Email para autorizar cadastro externo </label>
              <input id="emailExterno" class="form-control" placeholder="Email" type="email" class="form-control" id="emailExterno">
            </div>

            <div class="form-group col-md-4">
              <label for="bairro">Email para autorizar cadastro interno</label>
              <input id="emailInterno" class="form-control" placeholder="Email" type="email" class="form-control" id="emailInterno">
            </div>
          </div>

          <div class="row">
            <div class="form-group col-md-3">
              <label for="bairro">Senha</label>
              <input placeholder="Senha" required type="password" class="form-control" id="senha">
            </div>

            <div class="form-group col-md-3">
              <label for="bairro">Confirmar Senha</label>
              <input placeholder="Confirmar Senha" required type="password" class="form-control" id="senhaConfirmar">
            </div>
          </div>

          <br>

          <div class="row">
            <div class="form-group col-md-2">
              <button class="btn btn-primary" type="submit" name="salvar">Salvar</button>
            </div>

            <div class="form-group col-md-2">
              <button class="btn btn-primary" type="reset" name="resetar">Resetar</button>
            </div>
          </div>


        </form>


        <!-- Fim o Ultimo Bloco -->



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

  <script src="../assets/js/cadastroNovosUsuarios.js"></script>

  <script src="../assets/js/lib/validator.min.js"></script>

  <script src="../assets/js/custom.js"></script>



</body>

</html>