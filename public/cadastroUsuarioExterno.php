<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>EGDOC - Cadastro Externo</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>



<body style="background-color: rgb(33, 71, 97)">

    <div id="signupbox" style="" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="panel-title">Cadastro de Usuário Externo - Parte I</div>
            </div>
            <div class="panel-body">

                <form id="sigupform" class="form-horizontal" data-toggle="validator" role="form" method="POST" action="../application/routes/routes.php">

                    <div id="signuppalert" style="display:none" class="alert alert-danger">
                        <p>Erro:</p>
                        <span></span>
                    </div>

                    <div class="form-group">
                        <label for="nome" class="col-md-3 control-label">Nome:</label>
                        <div class="col-md-9">
                            <input required type="text" class="form-control" name="nome" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email" class="col-md-3 control-label">E-mail</label>
                        <div class="col-md-9">
                            <input type="email" class="form-control" name="email" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email" class="col-md-3 control-label">CPF</label>
                        <div class="col-md-9">
                            <input pattern="([0-9]{2}[\.]?[0-9]{3}[\.]?[0-9]{3}[\/]?[0-9]{4}[-]?[0-9]{2})|([0-9]{3}[\.]?[0-9]{3}[\.]?[0-9]{3}[-]?[0-9]{2})"
                                required type="text" class="form-control" name="cpf" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="civil" class="col-md-3 control-label">Estado Civil</label>
                        <div class="col-md-9">
                            <select required id="civil" name="estCivil" class="form-control">
                                <option value="solteiro">Solteiro</option>
                                <option value="casado">Casado</option>
                                <option value="divorciado">Divorciado</option>
                                <option value="viuvo">Viúvo</option>
                                <option value="viuvo">União Estável</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="telefone" class="col-md-3 control-label">Celular</label>
                        <div class="col-md-9">
                            <input type="tel" class="form-control" name="telefone" placeholder="(XX) XXXXX-XXXX" >
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="celular" class="col-md-3 control-label">Telefone</label>
                        <div class="col-md-9">
                            <input type="tel" class="form-control" id="celular" name="celular" >
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="whatsapp" class="col-md-3 control-label">WhatsApp</label>
                        <div class="col-md-9">
                            <input type="tel" class="form-control" id="whatsapp" name="whatsapp">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="empresa" class="col-md-3 control-label">Empresa</label>
                        <div class="col-md-9">
                            <select required id="empresa" name="empresa" class="form-control">
                                <option value="" disabled selected></option>
                                <option value="empresa1">Empresa 1</option>
                                <option value="empresa2">Empresa 2</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="ocupacao" class="col-md-3 control-label">Ocupação</label>
                        <div class="col-md-9">
                            <input required type="text" class="form-control" name="ocupacao" required>
                        </div>
                    </div>

                
                    
                    <div class="form-group">

                        <div class="col-md-offset-3 col-md-9">
                            <button id="btn-signup" name="cadUserExterno" type="submit" class="btn btn-primary pull-right">Próximo</button>
                            
                        </div>
                    </div>

                    
                </form>
            </div>
        </div>
    </div>
    </div>

</body>


<script src="assets/js/lib/jquery-1.10.2.js"></script>

<script src="assets/js/lib/bootstrap.min.js"></script>

<script src="assets/js/lib/validator.min.js"></script>

<script src="assets/js/estados.js"></script>

<script src="assets/js/paises.js"></script>

<script src="assets/js/cadastroUsuarioExterno.js"></script>


</html>