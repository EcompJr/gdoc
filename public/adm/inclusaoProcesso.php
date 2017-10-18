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
                        <h2 class="text-primary text-center">Cadastro de Processo</h2>
                    </div>
                </div>

                <hr />
                <form d="formArquivo">


                    <div style="margin-left:10px" class="input-group">
                        <form>
                            <div class="input-group">
                                <div class="col-md-6">
                                    <label for="anexar">Requerente: </label>
                                    <input requierd type="text" class="form-control" id="requerente">
                                </div>
                                <div class="col-md-4">
                                    <label for="anexar">Grupo:</label>
                                    <input requierd type="text" class="form-control" id="grupo">
                                </div>

                            </div>
                            <div class="input-group">
                                <div class="col-md-6">
                                    <label for="anexar">Requerido:</label>
                                    <input requierd type="text" class="form-control" id="requerido">
                                </div>
                                <div class="col-md-6">
                                    <label for="responsavel">Responsável:</label>
                                    <select class="form-control" id="responsavel">
                                        <option>Exemplo</option>
                                    </select>

                                </div>
                            </div>
                            <div class="input-group">
                                <div class="col-md-4">
                                    <label for="assunto">Assunto</label>
                                    <input requierd type="text" class="form-control" id="assunto">
                                </div>
                                <div class="col-md-6">
                                    <label for="anexar">Informações adicionais</label>
                                    <input type="text" class="form-control" id="info" maxlength="40" placeholder="Máximo de 40 caracteres">
                                </div>
                            </div>
                            <div class="input-group">
                                <div class="col-md-12">
                                    <div id="editor">
                                    </div>
                                </div>
                            </div>
                            <div class="input-group">
                                <div class="col-md-4">
                                    <label for="anexar">Anexar</label>
                                    <input type="file" id="anexar" accept="application/msword, application/vnd.ms-excel, application/vnd.ms-powerpoint, text/plain, application/pdf">
                                </div>
                            </div>
                        </form>
                    </div>

                    <br>

                    <br>


                    <br>

                    <form class="form-inline">
                        <div class="form-group col-md-2">
                            <button class="btn btn-primary" type="submit" name="salvar" disabled>Gravar Dados</button>
                        </div>
                        <div class="form-group col-md-2">
                            <button class="btn btn-primary" type="reset" name="limpar">Limpar Dados</button>
                        </div>
                        <div class="form-group col-md-2">
                            <button class="btn btn-primary" type="text" name="cancelar">Cancelar Cadastro</button>
                        </div>
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


    <script src="../assets/js/lib/jquery-1.10.2.js"></script>
    <script src="../assets/js/lib/bootstrap.min.js"></script>
    <script src="../assets/js/custom.js"></script>


</body>

</html>