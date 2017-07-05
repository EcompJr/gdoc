//Quadno o documento carregar
$(document).ready(function() {

	var request = {cadastroUsuarioExterno:"true"};

	//faz requisição ajax ao servidor
	$.ajax({
		//para esse caminho
		url: "/../../application/controller/routes.php",
		//por esse método
		type: "GET",
		//essas informações
		data: request,
		//em caso de sucesso
		success: function(response){
			/*
				#CODE
			*/
		}


	});
	
	
});