<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>EGDOC - Nova Senha</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/login.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>


    <div id="recoverybox" style="padding-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="panel-title">Definir nova senha</div>
            </div>
            <div class="panel-body">
                <form id="recoveryform" class="form-horizontal" data-toggle="validator" role="form">

                    <div id="recoverypalert" style="display:none" class="alert alert-danger">
                        <p>Erro:</p>
                        <span></span>
                    </div>

                    <div class="form-group">
                        <label for="novaSenha" class="col-md-3 control-label">Nova Senha</label>
                        <div class="col-md-9">
                            <input type="novaSenha" class="form-control" name="email" placeholder="Digite sua nova senha" required>
                        </div>
                        <label for="confirmacaoSenha" class="col-md-3 control-label">Confirmação da Senha</label>
                        <div style="padding-top: 2%" class="col-md-9">
                            <input type="confirmacaoSenha" class="form-control" name="confirmacaoSenha" placeholder="Digite novamente sua nova senha" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-offset-3 col-md-9">
                            <button style="float: right" id="btn-recovery" type="submit" class="btn btn-primary"><i class="icon-hand-right"></i>Confirmar</button>
                        </div>
                    </div>

                    
                </form>
            </div>
        </div>
    </div>
    </div>


    <script src="assets/js/lib/jquery-1.10.2.js"></script>

    <script src="assets/js/lib/bootstrap.min.js"></script>

    <script src="assets/js/lib/validator.min.js"></script>

    <script src="assets/js/estados.js"></script>

    <script src="assets/js/paises.js"></script>




</body>