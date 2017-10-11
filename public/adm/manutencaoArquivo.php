<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>EGDOC - Cadastro de Arquivo</title>
  <link href="../assets/css/bootstrap.css" rel="stylesheet" />
  <link href="../assets/css/font-awesome.css" rel="stylesheet" />
  <link href="../assets/css/custom.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link href="../assets/css/quill.bubble.css" rel="stylesheet" />
  <link href="../assets/css/quill.snow.css" rel="stylesheet" />

</head>

<body>

  <?php
          require_once 'sidebar_adm.php';
  ?>
  
<!-- NAVBAR -->
<?php
require_once 'navbar_adm.php';
?>
<!-- /. NAVBAR  -->

<div id="wrapper">  
    <div id="page-wrapper">
      <div id="page-inner">
        <div class="row">
          <div class="col-md-10">
            <h2 class="text-primary text-center">Cadastro de Arquivo</h2>
          </div>
        </div>

        <hr />
        <h4 class="text-primary"> Pesquisa Avançada :</h4>
        <form class="form-inline" d="formCadastro" role="form">

          <div class="form-group">
            <label for="nomePasta">Nome da Pasta</label>
            <input type="text" class="form-control" id="nomePasta" size=10>
          </div>

          <div class="form-group">
            <label for="documento">Documento</label>
            <!--<input type="text" class="form-control" id="documento" size=10>-->
            <select>
                <option>*DOCX</option>
                <option>*DOC</option>
                <option>*PDF</option>
                <option>*ODF</option>
                <option>*TXT</option>
            </select>

          </div>

          <div class="form-group">
            <label for="palavraComentario">Palavra Comentário</label>
            <input type="text" class="form-control" id="palavraComentario" size=5>
          </div>

          <div class="form-group">
            <label for="data">Data</label>
            <input type="date" class="form-control" id="data">
          </div>

          <button type="submit" class="btn btn-primary" role="search">Pesquisar</button>
          <br>

          <div class="row">
            <div class="col-md-8 col-lg-8 col-md-offset-4 col-xs-12 table-responsive">

              <table class="table table-striped table-bordered table-hover">
                <thead>
                  <tr>
                    <th>Data</th>
                    <th>Ato </th>
                    <th>Instrumento</th>
                    <th>Origem </th>
                    <th>Destino</th>
                  </tr>
                </thead>

                <tbody>
                  <tr>
                    <td>XX/XX/XXXX</td>
                    <td> Lorem Ipsum</td>
                    <td> Lorem Ipsum</td>
                    <td> Lorem Ipsum</td>
                    <td> Lorem Ipsum</td>

                  </tr>
                  <tr>
                    <td>XX/XX/XXXX</td>
                    <td>Lorem Ipsum</td>
                    <td>Ipsum Lorem</td>
                    <td> Lorem Ipsum</td>
                    <td> Lorem Ipsum</td>

                  </tr>
                </tbody>

              </table>

            </div>


            <div style="height:375px" id="editor">
            </div>

            <form id="formAnexo" role="form">

              <div class="form-group">
                <label for="anexar">Anexar</label>
                <input type="file" class="form-control" id="anexar">







              </div>

              <br>

              <div class="form-group">
                <button class="btn btn-primary" type="submit" name="salvar" disabled>Gravar Dados</button>
              </div>
              <div class="form-group">
                <button class="btn btn-primary" type="reset" name="limpar" disabled>Limpar Dados</button>
              </div>
              <div class="form-group">
                <button class="btn btn-primary" type="text" name="cancelar" disabled>Cancelar Cadastro</button>
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
          &copy; 2017 egdoc.com | Design by: <a href="http://ecompjr.com.br/" style="color:#fff;" target="_blank"> <strong>www.ecompjr.com.br</strong></a>
        </div>
      </div>
    </div>


    <script src="../assets/js/lib/jquery-1.10.2.js"></script>
    <script src="../assets/js/lib/bootstrap.min.js"></script>
    <script src="../assets/js/cadastroCliente.js"></script>
    <script src="../assets/js/manutencaoArquivo.js"></script>
    <script src="../assets/js/lib/quill.min.js"></script>
    <script src="../assets/js/custom.js"></script>

</body>

</html>