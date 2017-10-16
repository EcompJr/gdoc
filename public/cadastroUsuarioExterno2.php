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
                    <label for="email" class="col-md-3 control-label">Pais</label>
                    <div class="col-md-9">
                        <select required id="pais" name="pais" class="form-control">
                            <option value=""></option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="email" class="col-md-3 control-label">Estado</label>
                    <div class="col-md-9">
                        <select required id="estados" name="estado" class="form-control">
                            <option value=""></option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="email" class="col-md-3 control-label">Cidade</label>
                    <div class="col-md-9">
                        <select required id="cidades" name="cidade" class="form-control">
                            <option value=""></option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="bairro" class="col-md-3 control-label">Bairro</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="bairro" placeholder="Digite o nome do seu bairro" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="logradouro" class="col-md-3 control-label">Logradouro</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="logradouro" placeholder="Digite seu endereço" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="email" class="col-md-3 control-label">Número</label>
                    <div class="col-md-9">
                        <input type="number" class="form-control" name="numero" placeholder="Digite o número do logradouro" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="complemento" class="col-md-3 control-label">Complemento</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="complemento" placeholder="Digite o Complemento (Opcional)">
                    </div>
                </div>

                <div class="form-group">
                    <label for="cep" class="col-md-3 control-label">CEP</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="cep" placeholder="Digite o email cadastrado" required>
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