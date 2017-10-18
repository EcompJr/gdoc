<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>EGDOC - Cadastro de Instâncias</title>
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
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-10">
                        <h2 class="text-primary text-center">Cadastro de Instância</h2>
                    </div>
                </div>

                <hr>

                <form d="formArquivo">

                    <div class="form-group">
                        <label for="anexar">Grupo:</label>
                        <input requierd type="text" class="form-control" id="pasta">
                    </div>


                    <div id="listas">
                        <div class="row" id="1">
                            <div class="form-group col-md-4">
                                <label for="anexar">Instâncias:</label>
                                <input required type="text" class="form-control">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="anexar">Prazo:</label>
                                <input required type="number" class="form-control" placeholder="Em dias">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="anexar">Responsável:</label>
                                <select type="text" class="form-control">
                                <option value="" selected>Selecione o funcionário</option>
                            </select>
                            </div>
                        </div>

                    </div>

                    <br>

                    <div class="row">
                        <div class="form-group col-md-2">
                            <button class="btn btn-default" type="button" id="add_field">Adicionar Instâncias</button>
                        </div>

                        <div class="form-group col-md-2">
                            <button class="btn btn-default" type="button" id="remove_field">Remover Instâncias</button>
                        </div>
                    </div>

                    <br>
                    <br>

                    <div class="row">
                        <div class="form-group col-md-2">
                            <button class="btn btn-primary" type="submit" name="salvar" disabled>Gravar Dados</button>
                        </div>
                        <div class="form-group col-md-2">
                            <button class="btn btn-primary" type="reset" name="limpar">Limpar Dados</button>
                        </div>
                        <div class="form-group col-md-2">
                            <button class="btn btn-primary" type="text" name="cancelar">Cancelar Cadastro</button>
                        </div>

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


    <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="../assets/js/lib/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->

    <script src="../assets/js/cadastroInstancia.js"></script>

    <script src="../assets/js/custom.js"></script>
    <script src="../assets/js/lib/bootstrap.min.js"></script>
    <!-- CUSTOM SCRIPTS -->


</body>

</html>