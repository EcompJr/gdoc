$(document).ready(function() { // Espera o DOM carregar

	$('#loginForm').submit(function(ev) {
          ev.preventDefault(); // Para a subimissão do formulário
          // Captura inputs do formulário
          var inputLogin = $(this).find('input[name="login"]').val();
          var inputSenha = $(this).find('input[name="senha"]').val();
          var inputLembrar = $(this).find('input[name="lembrar"]').val();

          var request = {botaoLogin:"botaoLogin", login: inputLogin, senha: inputSenha, lembrar: inputLembrar };

          $.ajax(function{
          	url: /../



          });

     });
	
});