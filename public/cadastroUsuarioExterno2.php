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
                <div class="panel-title">Cadastro Usuário Externo - Parte II</div>
            </div>
            <div class="panel-body">
                <form id="sigupform" class="form-horizontal" data-toggle="validator" role="form" method="POST" action="../application/routes/routes.php">

                    <div id="signuppalert" style="display:none" class="alert alert-danger">
                        <p>Erro:</p>
                        <span></span>
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
                        <label for="telefone" class="col-md-3 control-label">Telefone</label>
                        <div class="col-md-9">
                            <input type="tel" class="form-control" name="telefone" placeholder="(XX) XXXXX-XXXX" >
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="celular" class="col-md-3 control-label">Celular</label>
                        <div class="col-md-9">
                            <input type="tel" class="form-control" id="celular" name="celular" placeholder="Digite seu telefone fixo">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="whatsapp" class="col-md-3 control-label">WhatsApp</label>
                        <div class="col-md-9">
                            <input type="tel" class="form-control" id="whatsapp" name="whatsapp" placeholder="Digite seu telefone fixo">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="empresa" class="col-md-3 control-label">Empresa</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="empresa" name="empresa" placeholder="Empresa que você trabalha" required>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="ocupacao" class="col-md-3 control-label">Ocupação</label>
                        <div class="col-md-9">
                            <input required type="text" class="form-control" name="ocupacao" placeholder="Digite sua ocupação" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="senha" class="col-md-3 control-label">Senha</label>
                        <div class="col-md-9">
                            <input required type="password" class="form-control" id="senha" name="senha" placeholder="Mínimo de 4 Caracteres" required
                                minlength="4">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="confirmarSenha" class="col-md-3 control-label">Confirmar Senha</label>
                        <div class="col-md-9">
                            <input type="password" class="form-control" name="confirmarSenha" placeholder="Repita a senha" required minlength="4" data-match="#senha">
                        </div>
                    </div>


                    <div class="form-group">

                        <div class="col-md-offset-3 col-md-9">
                            <button id="btn-signup" name="cadUserExterno" type="submit" class="btn btn-primary"><i class="icon-hand-right"></i> Finalizar</button>
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