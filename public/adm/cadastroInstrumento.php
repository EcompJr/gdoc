<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>EGDOC - Cadastro de Instrumentos</title>
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
                        <h2 class="text-primary text-center">Cadastro de Instrumentos</h2>
                    </div>
                </div>

                <hr />

                <form d="formArquivo">

                    <div class="input-group">
                        <form>
                            <div class="input-group">
                                <div class="col-md-4">
                                    <label for="anexar">Tipo:</label>
                                    <input requierd type="text" class="form-control" id="tipo">
                                </div>
                                <div class="col-md-4">
                                    <label for="sub">Sub-Título:</label>
                                    <input requierd type="text" class="form-control" id="sub">
                                </div>
                                <div class="col-md-4">
                                    <label for="anexar">Anexar:</label>
                                    <input requierd type="file" class="form-control" id="anexar" accept="application/msword, application/vnd.ms-excel, application/vnd.ms-powerpoint,
text/plain, application/pdf">
                                </div>
                            </div>

                            <div class="input-group">
                                <div class="col-md-10">
                                    <label for="descricao">Descrição do Processo</label>
                                    <input requierd type="text" class="form-control" id="descricao" size="70">
                                </div>
                            </div>

                            <div style="height:375px" id="editor">
                            </div>

                        </form>
                    </div>

                </form>

                <br>
                <br>
                <br>

                <form class="form-inline">
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit" name="salvar" disabled>Gravar Dados</button>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" type="reset" name="limpar">Limpar Dados</button>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" type="text" name="cancelar">Cancelar Cadastro</button>
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

    <script src="../assets/js/manutencaoArquivo.js"></script>

    <script src="../assets/js/lib/quill.min.js"></script>

    <script src="../assets/js/custom.js"></script>

</body>

</html>