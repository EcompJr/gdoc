<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>EGDOC - Movimentação de Processos</title>
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
    <link href="../assets/css/custom.css" rel="stylesheet" />
    <link href="../assets/css/jquery-ui-1.12.1.min.css" rel="stylesheet" />
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
  
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-10">
                        <h2 class="text-primary text-center">Movimentação de Processos</h2>
                    </div>
                </div>

                <form>
                    <div class="row" style="padding-top:40px">
                        <div class="col-md-12">
                            <h3> Pesquisa Avançada</h3>
                        </div>
                    </div>

                    <div class="row" style="padding-top:40px">
                        <div class="col-md-3">
                            <input placeholder="Requerido/Requerente" type="text" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <input placeholder="Tipo Instrumento" type="text" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <input placeholder="Instância" type="text" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <input id="datepicker" placeholder="Data" type="text" class="form-control">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12" style="padding-top:30px">
                            <button id="pesquisa" class="btn btn-default" type="search">Pesquisa</button>
                        </div>
                    </div>

                </form>

                <div class="row" style="padding-top:40px">
                    <div class="col-lg-6 col-md-6">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Data</th>
                                    <th>Ato</th>
                                    <th>Instrumento</th>
                                    <th>Origem</th>
                                    <th>Destino</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>

                    </div>
                </div>


                <div style="height:375px" id="editor">
                </div>

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

    <script src="../assets/js/lib/jquery-ui-1.12.1.min.js"></script>

    <script src="../assets/js/lib/bootstrap.min.js"></script>

    <script src="../assets/js/manutencaoArquivo.js"></script>

    <script src="../assets/js/lib/quill.min.js"></script>

    <script src="../assets/js/custom.js"></script>

    <script>
        $.datepicker.setDefaults($.datepicker.regional["pt"]);

        $(function () {

            $("#datepicker").datepicker();
        });
    </script>

</body>

</html>