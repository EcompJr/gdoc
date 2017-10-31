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
    //NAVBAR
    require_once 'navbar_adm.php';
    //SIDEBAR
    require_once 'sidebar_adm.php'; 
  ?>

    <!-- NAV SIDE  -->
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
              <h2 class="text-primary text-center">Cadastro de Arquivo</h2>
            </div>
          </div>

          <hr>
          <!-- Primero bloco -->
          <!-- <form> -->
          <form d="formArquivo">

            <!-- <div class="form-group">
            <label for="nomePasta">Nome da Pasta</label>
            <input type="text" required class="form-control" id="nomePasta" size=63>
          </div> -->
            <div class="input-group">
              <form>
                <div class="input-group">
                  <div class="col-md-6">
                    <label for="anexar">Nome da Pasta</label>
                    <input requierd type="text" class="form-control" id="pasta">
                  </div>
                  <div class="col-md-6">
                    <label for="anexar">Anexar</label>
                    <input requierd type="file" class="form-control" id="anexar" accept="application/msword, application/vnd.ms-excel, application/vnd.ms-powerpoint,
  text/plain, application/pdf">
                  </div>
                  <div class="col-md-6">
                  <br>
                    <label for="anexar">Comentário Adicional</label>
                    <input type="text" class="form-control" id="anexar" maxlength="40">
                  </div>
                </div>
              </form>
            </div>

          </form>

          <br>
          <br>


          <div style="height:375px" id="editor">

          </div>


          <br>

          <form class="form-inline">
            <div style="float: right" class="form-group">
              <button class="btn btn-primary" type="submit" name="salvar" disabled>Gravar Dados</button>
            </div>
            <div style="float: left" class="form-group">
              <button class="btn" type="text" name="cancelar">Cancelar Cadastro</button>
            </div>
            <!-- </form> -->
            <!-- Fim do Segundo Bloco -->

            <!-- Terceiro Bloco -->
            <!-- <form class="form-inline"> -->

            <!-- Fim do Terceiro Bloco -->
            <!--</form> -->

          </form>
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