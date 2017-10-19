<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>EGDOC - Atualização de Dados</title>
  <link href="../assets/css/bootstrap.css" rel="stylesheet" />
  <link href="../assets/css/font-awesome.css" rel="stylesheet" />
  <link href="../assets/css/custom.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>

<body>

  <?php
    //NAVBAR
    require_once 'navbar_adm.php';
    //SIDEBAR
    require_once 'sidebar_adm.php'; 
  ?>

<div id="wrapper">  
    <div id="page-wrapper">
      <div id="page-inner">
        <div class="row">
          <div class="col-md-10">
            <h2 class="text-primary text-center">Atualização de Dados</h2>
            <!--<h2 class="text-primary text-left">Razão Social</h2>-->
          </div>
        </div>

        <hr>
            <div class="row">
                <div class="form-group col-md-12">
                <label for="tel">Usuários Cadastrados</label>
                <select id="civil" class="form-control">
                <option value="solteiro">Usuário 1</option>
                <option value="solteiro">Usuário 2</option>
                </select>
                </div>
            </div>
        <hr>

        <!-- Primero bloco -->
        <form id="formCadastro" data-toggle="validator" role="form" data-delay="350">
          <div class="row">
            <div class="form-group col-md-4">
              <label for="tipoUsuario">Tipo de Usuário</label>
              <select id="tipoUsuario" class="form-control" disabled>
                <option value"Administrador" checked>Administrador</option>
                <!--<option value="Intermédiario">Intermediario</option>-->
                <option value="Interno">Interno</option>
                <!--<option value="Externo">Externo</option>-->
            </select>
            </div>
            <div class="form-group col-md-4">
              <label for="ie">Nome</label>
              <input readonly="true" type="text" required class="form-control" id="nome" size=30>
            </div>
            <div class="form-group col-md-4">
              <label for="tel">Sexo</label>
              <select id="sexo" class="form-control" disabled>
                  <option value="masculino">Masculino</option>
                  <option value="feminino">Feminino</option>
              </select>
            </div>
          </div>

          <div class="row">
            <div class="form-group col-md-4">
              <label for="tel">CPF/CNPJ</label>
              <input readonly="true" pattern="([0-9]{2}[\.]?[0-9]{3}[\.]?[0-9]{3}[\/]?[0-9]{4}[-]?[0-9]{2})|([0-9]{3}[\.]?[0-9]{3}[\.]?[0-9]{3}[-]?[0-9]{2})"
                class="form-control" type="text">
            </div>

            <div class="form-group col-md-4">
              <label for="pais">País</label>
              <select required id="pais" class="form-control" disabled>
                <option value=""></option>
              </select>
            </div>
            <div class="form-group col-md-4">
              <label for="tel">Profissão</label>
              <input readonly="true" class="form-control" type="text">
            </div>
          </div>

          <div class="row">
            <div class="form-group col-md-4">
              <label for="tel">Estado Civil</label>
              <select id="civil" class="form-control" disabled>
              <option value="solteiro">Solteiro</option>
              <option value="casado">Casado</option>
              <option value="divorciado">Divorciado</option>
              <option value="viuvo">Viúvo</option>
              <option value="viuvo">União Estável</option>
            </select>
            </div>
            <div class="form-group col-md-4">
              <label for="tel">Telefone</label>
              <input readonly="true" class="form-control" id="tel" placeholder="(XX) XXXXX-XXXX" pattern="^(\(11\) [9][0-9]{4}-[0-9]{4})|(\(1[2-9]\) [5-9][0-9]{3}-[0-9]{4})|(\([2-9][1-9]\) [5-9][0-9]{3}-[0-9]{4})$">
            </div>
            <div class="form-group col-md-4">
              <label for="tel">Celular</label>
              <input readonly="true" required class="form-control" id="tel" placeholder="(XX) XXXXX-XXXX" pattern="^(\(11\) [9][0-9]{4}-[0-9]{4})|(\(1[2-9]\) [5-9][0-9]{3}-[0-9]{4})|(\([2-9][1-9]\) [5-9][0-9]{3}-[0-9]{4})$">
            </div>
          </div>

          <div class="row">
            <div class="form-group col-md-4 ">
                <label for="cep">CEP</label>
                <input readonly="true" placeholder="XXXXX-XXX" required pattern="^\\d{5}[-]\\d{3}$" type="text" class="form-control" id="cep" size="10">
            </div>
            <div class="form-group col-md-4">
              <label for="tel">WhatsApp</label>
              <input readonly="true" required class="form-control" id="tel" placeholder="(XX) XXXXX-XXXX" pattern="^(\(11\) [9][0-9]{4}-[0-9]{4})|(\(1[2-9]\) [5-9][0-9]{3}-[0-9]{4})|(\([2-9][1-9]\) [5-9][0-9]{3}-[0-9]{4})$">
            </div>
            <div class="form-group col-md-4">
              <label for="estados">UF</label>
              <select required id="estados" class="form-control" disabled>
              <option value=""></option>
            </select>
            </div>
          </div>

          <div class="row">
            <div class="form-group col-md-4">
              <label for="cidade">Cidade</label>
              <select required id="cidades" class="form-control" disabled></select>
            </div>
            <div class="form-group col-md-4">
              <label for="complemento">Complemento</label>
              <input readonly="true" type="text" class="form-control" id="complemento">
            </div>
            <div class="form-group col-md-4">
              <label for="bairro">Bairro</label>
              <input readonly="true" required type="text" class="form-control" id="bairro">
            </div>
          </div>

          <div class="row">
            <div class="form-group col-md-4">
              <label for="cidade">Logradouro</label>
              <input readonly="true" required type="text" class="form-control" id="logradouro">
              </div>
            <div class="form-group col-md-4">
              <label for="complemento">Número</label>
              <input readonly="true" type="text" class="form-control" id="numero">
            </div>
            <div class="form-group col-md-4">
              <label for="bairro">Email</label>
              <input readonly="true" required type="text" class="form-control" id="email">
            </div>
          </div>

          <div class="row">
            <div class="form-group col-md-6">
              <label for="bairro">Email para autorizar cadastro externo </label>
              <input readonly="true" id="emailExterno" class="form-control" type="email" class="form-control" id="emailExterno">
            </div>
            <div class="form-group col-md-6">
              <label for="bairro">Email para autorizar cadastro interno</label>
              <input readonly="true" id="emailInterno" class="form-control" type="email" class="form-control" id="emailInterno">
            </div>
          </div>

          <div class="row">
            <div class="form-group col-md-6">
              <label for="bairro">Senha</label>
              <input readonly="true" required type="password" class="form-control" id="senha">
            </div>
            <div class="form-group col-md-6">
              <label for="bairro">Confirmar Senha</label>
              <input readonly="true" required type="password" class="form-control" id="senhaConfirmar">
            </div>
          </div>

          <form class="form-inline">
            <div style="float: right" class="form-group">
              <button class="btn btn-primary" type="text" name="cancelar" disabled>Salvar</button>
            </div>
            <div style="float: left" class="form-group">
              <button class="btn" type="submit" name="salvar" disabled>Resetar</button>
            </div>
          </form>
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