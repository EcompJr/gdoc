<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>EGDOC - Abertura de Arquivo</title>
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
  require_once 'navbar_adm.php';
  //SIDEBAR
  require_once 'sidebar_adm.php'; 
?>

<!--    <nav class="navbar-default navbar-side" role="navigation">
      <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">


          <li class="active-link scrollMenu"><a aria-hidden="true" href="#">Cadastro</a></li>
          <div style="max-height:0;overflow: hidden;transition:max-height 0.2s ease-out;" class="sidebar-collapse">
            <ul style="margin-top:-50px;" class="nav">
              <li class="active-link">
                <a href="cadastroNovosUsuarios.html" aria-hidden="true">Cadastro de Usuários</a>
              </li>

              <li class="active-link">
                <a href="cadastroInstancias.html">Cadastro de Instâncias</a>
              </li>

              <li class="active-link">
                <a href="cadastroInstrumento.html">Cadastro de Instrumentos</a>
              </li>
            </ul>
          </div>

          <li class="active-link scrollMenu"><a aria-hidden="true" href="#">Consulta</a></li>
          <div class="sidebar-collapse" style="max-height:0;overflow: hidden;transition:max-height 0.2s ease-out;">
            <ul style="margin-top:-50px;" class="nav">
              <li class="active-link">
                <a href="movimentacaoProcesso.html">Movimentação de Processos</a>
              </li>

              <li class="active-link">
                <a href="#">Consulta de Protocolo</a>
              </li>
              <li class="active-link">
                <a href="#">Consulta de Movimentação</a>
              </li>
            </ul>
          </div>

          <li class="active-link scrollMenu"><a aria-hidden="true" href="#">Arquivo</a></li>
          <div class="sidebar-collapse" style="max-height:223px;overflow: hidden;transition:max-height 0.2s ease-out;">
            <ul style="margin-top:-50px;" class="nav">
              <li class="active-link">
                <a href="manutencaoArquivo.html">Cadastro de Arquivo</a>
              </li>
              <li class="active-link">
                <a href="cadastroArquivo.html">Abertura de Arquivo</a>
              </li>
            </ul>
          </div>

          <li class="active-link">
            <a href="relatorio.html">Relatório</a>
          </li>

          <li class="active-link">
            <a href="#">Trocar senha</a>
          </li>
          <li class="active-link">
            <a href="#">Atualização de Dados de Perfil</a>
          </li>

        </ul>
      </div>

    </nav>-->
    <!-- /. NAV SIDE  -->

    <div id="wrapper">
      <div id="page-wrapper">
        <div id="page-inner">
          <div class="row">
            <div class="col-md-10">
              <h2 class="text-primary text-center">Abertura de Arquivo</h2>
            </div>
          </div>

          <hr />

          <!-- Primero bloco -->
          <!-- <form> -->
          <form d="formArquivo">
            <!-- <div class="form-group">
            <label for="nomePasta">Nome da Pasta</label>
            <input type="text" required class="form-control" id="nomePasta" size=63>
          </div> -->
            <div class="input-group">
                <div class="input-group">
                  <div class="col-md-6">
                    <label for="anexar">Nome da Pasta</label>
                    <input requierd type="text" class="form-control" id="pasta">
                  </div>
                  <div class="col-md-6">
                    <label for="anexar">Data de Cadastro</label>
                    <input type="date" class="form-control" id="data" maxlength="40">
                  </div>
                  <div style="padding-top: 2%" class="col-md-6">
                    <label for="documento">Tipo de Documento</label>
                    <select>
                        <option>*DOCX</option>
                        <option>*DOC</option>
                        <option>*PDF</option>
                        <option>*ODF</option>
                        <option>*TXT</option>
                    </select>
                  </div>
                </div>
            </div>
            <button style="float: right" type="submit" class="btn btn-primary" role="search">Pesquisar</button>
          </form>

          <div style="padding-right: 35%;padding-top: 10%" class="row">
            <div class="col-md-8 col-lg-8 col-md-offset-4">
              <table class="table table-responsive table-striped table-bordered table-hover">
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
          </div>

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