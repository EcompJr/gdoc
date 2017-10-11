<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>EGDOC - Relatório de Acesso</title>
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
    <link href="../assets/css/custom.css" rel="stylesheet" />
    <link href="../assets/css/jquery-ui-1.12.1.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>

<body>
       
    <!-- NAVBAR -->
    <?php
        require_once 'navbar_master.php';
    ?>
        
    <!-- NAV SIDE  -->
    <?php
        require_once 'sidebar_master.php';
    ?>
    <!-- NAV SIDE  -->

    <div id="wrapper">
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-4">
                        <a class="navbar-brand" href="../index.html">
                           <img src="../assets/img/logo.png" />
                       </a>
                    </div>
                    <div class="col-md-4" style="padding-top:50px">
                        <h2>Razão Social</h2>
                    </div>
                </div>

                <form data-toggle="validator" role="form">
                    <div class="row">
                        <div class="col-md-12">
                            <h3> Relatório de Acesso:</h3>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <label for="exampleInputName2">Data Inicial</label>
                            <input required name="datepicker" type="text" class="form-control" id="periodoInicio">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="exampleInputEmail2">Data Final</label>
                            <input required name="datepicker1" type="text" class="form-control" id="periodoFim">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <label for="usuario">Usuário:</label>
                            <select required class="form-control" name="usuario" id="usuario">
                                        <option value="">Selecione um usuário</option>
                                        <option value="exemplo1">Exemplo 1</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <label for="transacao">Transação:</label>
                            <input required placeholder="Transação" type="text" class="form-control" id="transacao">
                        </div>
                    </div>

                    <div class="row" style="padding-top:40px">
                        <div class="col-md-2">
                            <button class="btn btn-default" type="submit" id="auditoria">Auditar</button>
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
    <script src="../assets/js/custom.js"></script>
    <script src="../assets/js/lib/jquery-ui-1.12.1.min.js"></script>
    <script src="../assets/js/lib/validator.min.js"></script>

    <script>
        $.datepicker.setDefaults($.datepicker.regional["pt"]);

        $(function () {

            $("#periodoInicio").datepicker();

            $("#periodoFim").datepicker();

        });
    </script>


</body>

</html>