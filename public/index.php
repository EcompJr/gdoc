<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>EGDOC - Login</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/login.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>

    <div class="container-fluid">

        <div id="loginbox" style="padding-top:40px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="panel-title">EGDOC - Login</div>
                    <div id="esqueceu"><a href="#">Esqueceu a senha?</a></div>
                </div>

                <div style="padding-top:30px" class="panel-body">

                    <div id="login-alert" class="alert alert-danger col-sm-12"></div>

                    <form id="loginform" class="form-horizontal" data-toggle="validator" role="form">

                        <div class="input-group input-margin">
                            <button class="btn"><i class="fa fa-certificate fa-spin fa-2x" aria-hidden="true"></i> Entre com Certificado Digital</button>
                        </div>

                        <div class="input-group input-margin">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="CPF" pattern="([0-9]{2}[\.]?[0-9]{3}[\.]?[0-9]{3}[\/]?[0-9]{4}[-]?[0-9]{2})|([0-9]{3}[\.]?[0-9]{3}[\.]?[0-9]{3}[-]?[0-9]{2})"
                                data-match-error="Digite somente números" required>
                            <div class="help-block with-errors"></div>
                        </div>

                        <div class="input-group input-margin">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="login-password" type="password" class="form-control" name="password" placeholder="Senha" required>
                        </div>



                        <div class="input-group">
                            <div class="checkbox">
                                <label>
                              <input id="login-remember" type="checkbox" name="remember" value="1" data-validate="false"> Lembrar suas credenciais
                          </label>
                            </div>
                        </div>


                        <div style="margin-top:10px" class="form-group">

                            <div class="col-sm-12 controls">
                                <button id="btn-login" type="submit" href="#" class="btn btn-primary">Login  </button>


                            </div>
                        </div>

                        <!-- Nao possui cadastro -->
                        <div class="form-group">
                            <div class="col-md-12 control">
                                <div class="login-footnotes">
                                    Não Possui Cadastro?
                                    <a href="cadastroUsuarioExterno.php" id="cadastrar">
                            Clique aqui.
                        </a>
                                </div>
                            </div>
                        </div>
                        <!--. -->

                        <!-- Esqueceu a senha -->
                        <div class="form-group">
                            <div class="col-md-12 control">
                                <div class="login-footnotes">
                                    Esqueceu Sua Senha?
                                    <a href="recuperarSenha.php" id="recuperar">
                            Clique aqui.
                        </a>
                                </div>
                            </div>
                        </div>
                        <!--. -->



                    </form>



                </div>
            </div>
        </div>

        <!-- Formulario Recuperar Senha -->

        

    <!--.Formulário recuperar senha  -->


    <!-- Formulario cadastrar Usuário Externo -->

    

    <!-- . Formulario para cadastrar usuário externo -->


</body>

<script src="assets/js/lib/jquery-1.10.2.js"></script>

<script src="assets/js/lib/bootstrap.min.js"></script>

<script src="assets/js/lib/validator.min.js"></script>

<script src="assets/js/login.js"></script>

<script src="assets/js/estados.js"></script>

<script src="assets/js/fazerLogin.js"></script>

<script src="assets/js/paises.js"></script>

</html>