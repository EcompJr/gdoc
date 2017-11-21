<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>EGDOC - Auditoria</title>
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
    <link href="../assets/css/custom.css" rel="stylesheet" />
    <link href="../assets/css/jquery-ui-1.12.1.min.css" rel="stylesheet" />
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
                    <div class="col-md-10">
                        <h2 class="text-primary text-center">Auditoria</h2>
                    </div>
                </div>
        <hr>
          <form data-toggle="validator" role="form">
            <div class="row">
              <div class="col-md-4">
                <label for="periodoInicio">Data Inicial</label>
                <input required id="datepicker" type="date" class="form-control" name="periodoInicio" id="periodoInicio">
              </div>
              <div class="col-md-4">
                <label for="periodoFim">Data Final</label>
                <input required id="datepicker1" type="date" class="form-control" name="periodoFim" id="periodoFim">
              </div>
              <div class="col-md-4">
                <label for="transacao">Transação</label>
                <input required type="text" class="form-control" name="transacao" id="transacao">
              </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                <br>
                    <label for="usuario">Usuário</label>
                    <select required class="form-control" name="usuario" id="usuario">
                                <option value="">Selecione um usuário</option>
                                <option value="exemplo1">Exemplo 1</option>
                    </select>
                </div>
            </div>
            <div style="float: right;margin-top: 3%;" class="row" style="padding-top:40px">
              <div class="col-md-6">
                <button class="btn btn-primary" type="submit" id="relatório">Auditar</button>
              </div>
            </div>
          </form>
        </div>




                <!-- /. ROW  -->
                <hr>

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