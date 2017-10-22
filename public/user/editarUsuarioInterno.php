<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>EGDOC - Busca de Arquivo</title>
  <link href="../assets/css/bootstrap.css" rel="stylesheet" />
  <link href="../assets/css/font-awesome.css" rel="stylesheet" />
  <link href="../assets/css/custom.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link href="../assets/css/quill.bubble.css" rel="stylesheet" />
  <link href="../assets/css/quill.snow.css" rel="stylesheet" />
</head>

<body>

<?php
  //NAVBAR
  require_once 'navbarUser.php';
  //SIDEBAR
  require_once 'sidebarUser.php'; 
?>

    <div id="wrapper">
      <div id="page-wrapper">
        <div id="page-inner">
          <div class="row">
            <div class="col-md-10">
              <h2 class="text-primary text-center">Editar Dados</h2>
            </div>
          </div>

          <hr>

          
            <form id="formCadastro" data-toggle="validator" role="form" data-delay="350">
                <!-- Primero bloco -->
                <div class="row">
                    <div class="form-group col-md-5">
                        <label for="ie">Nome:</label>
                        <input type="text" required placeholder="Nome Completo" class="form-control" id="nome" size=30>
                    </div>

                    <div class="form-group col-md-3">
                        <label for="tel">Sexo:</label>
                        <select id="sexo" class="form-control">
                            <option value="masculino">Masculino</option>
                            <option value="feminino">Feminino</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="tel">Estado Civil:</label>
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
                    <div class="form-group col-md-4">
                        <label for="tel">Email:</label>
                        <input placeholder="Email" class="form-control" type="email">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="bairro">Senha:</label>
                        <input placeholder="Senha" required type="password" class="form-control" id="senha">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="bairro">Confirmar Senha:</label>
                        <input placeholder="Confirmar Senha" required type="password" class="form-control" id="senhaConfirmar">
                    </div>
                  
                </div>

                <hr>
                 <!-- Segundo bloco -->
                <div class="row"> 
                    <div class="form-group col-md-4">
                        <label for="tel">CPF/CNPJ:</label>
                        <input placeholder="CPF/CNPJ" pattern="([0-9]{2}[\.]?[0-9]{3}[\.]?[0-9]{3}[\/]?[0-9]{4}[-]?[0-9]{2})|([0-9]{3}[\.]?[0-9]{3}[\.]?[0-9]{3}[-]?[0-9]{2})"
                            class="form-control" type="text">
                    </div>   
                    <div class="form-group col-md-4">
                        <label for="tel">Profissão:</label>
                        <input placeholder="Profissão" class="form-control" type="text">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="tel">Empresa:</label>
                        <input placeholder="Empresa" class="form-control" type="text">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-4">
                    <label for="tel">Telefone:</label>
                    <input class="form-control" id="tel" placeholder="(XX) XXXXX-XXXX" pattern="^(\(11\) [9][0-9]{4}-[0-9]{4})|(\(1[2-9]\) [5-9][0-9]{3}-[0-9]{4})|(\([2-9][1-9]\) [5-9][0-9]{3}-[0-9]{4})$">
                    </div>

                    <div class="form-group col-md-4">
                    <label for="tel">Celular:</label>
                    <input required class="form-control" id="tel" placeholder="(XX) XXXXX-XXXX" pattern="^(\(11\) [9][0-9]{4}-[0-9]{4})|(\(1[2-9]\) [5-9][0-9]{3}-[0-9]{4})|(\([2-9][1-9]\) [5-9][0-9]{3}-[0-9]{4})$">
                    </div>


                    <div class="form-group col-md-4">
                    <label for="tel">WhatsApp:</label>
                    <input required class="form-control" id="tel" placeholder="(XX) XXXXX-XXXX" pattern="^(\(11\) [9][0-9]{4}-[0-9]{4})|(\(1[2-9]\) [5-9][0-9]{3}-[0-9]{4})|(\([2-9][1-9]\) [5-9][0-9]{3}-[0-9]{4})$">
                    </div>
                </div>
                
                <hr>
                 <!-- Segundo bloco -->
                <div class="row">
                    <div class="form-group col-md-3">
                        <label for="cep">C.E.P:</label>
                        <input placeholder="C.E.P" placeholder="XXXXX-XXX" required pattern="^\\d{5}[-]\\d{3}$" type="text" class="form-control" id="cep" size="10">
                    </div>  
                    <div class="form-group col-md-3">
                        <label for="cidade">Cidade:</label>
                        <select placeholder="Cidade" required id="cidades" class="form-control">
                            <option value=""</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="estados">UF:</label>
                        <select required id="estados" class="form-control">
                            <option value=""></option>
                        </select>
                    </div>

                    <div class="form-group col-md-3">
                        <label for="pais">País:</label>
                        <select required id="pais" class="form-control">
                            <option value=""></option>
                        </select>
                    </div>
                </div>


                <div class="row">
                    <div class="form-group col-md-3">
                    <label for="complemento">Complemento:</label>
                    <input placeholder="Ex: Edíficio número 2" type="text" class="form-control" id="complemento">
                    </div>

                    <div class="form-group col-md-3">
                    <label for="bairro">Bairro:</label>
                    <input placeholder="Bairro" required type="text" class="form-control" id="bairro">
                    </div>

                    <div class="form-group col-md-3">
                    <label for="endereco">Logradouro:</label>
                    <input placeholder="Logradouro" type="text" required class="form-control" id="endereco">
                    </div>

                    <div class="form-group col-md-3">
                    <label for="endereco">Número:</label>
                    <input placeholder="Número" type="number" required class="form-control" id="numero">
                    </div>
                    
                </div>


                
                <div class="row">
                    
                </div>

                <br>

                <div class="row">
                    <div class="form-group col-md-offset-3 col-md-4">
                        <button class="btn btn-lg btn-danger" type="reset" name="resetar">Cancelar</button>
                    </div>

                    <div class="form-group col-md-4">
                        <button class="btn btn-lg btn-primary" type="submit" name="salvar">Salvar</button>
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


  <!-- /. WRAPPER  -->
  <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
  <!-- JQUERY SCRIPTS -->
  <script src="../assets/js/lib/jquery-1.10.2.js"></script>
  <!-- BOOTSTRAP SCRIPTS -->


  <script src="../assets/js/lib/bootstrap.min.js"></script>
  <!-- CUSTOM SCRIPTS -->
  <script src="../assets/js/cadastroCliente.js"></script>

  <script src="../assets/js/cadastroArquivo.js"></script>

  <script src="../assets/js/lib/quill.min.js"></script>

  <script src="../assets/js/custom.js"></script>








</body>

</html>