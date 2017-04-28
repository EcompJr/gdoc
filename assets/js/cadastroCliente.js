		$(document).ready(function () {
		
			$.getJSON('https://gist.githubusercontent.com/ografael/2037135/raw/5d31e7baaddd0d599b64c3ec04827fc244333447/estados_cidades.json', function (data) {
				var items = [];
				var options = '<option value="">escolha um estado</option>';	
				$.each(data, function (key, val) {
					options += '<option value="' + val.nome + '">' + val.nome + '</option>';
				});					
				$("#estados").html(options);				
				
				$("#estados").change(function () {				
				
					var options_cidades = '';
					var str = "";					
					
					$("#estados option:selected").each(function () {
						str += $(this).text();
					});
					
					$.each(data, function (key, val) {
						if(val.nome == str) {							
							$.each(val.cidades, function (key_city, val_city) {
								options_cidades += '<option value="' + val_city + '">' + val_city + '</option>';
							});							
						}
					});
					$("#cidades").html(options_cidades);
					
				}).change();		
			
			});
		
		});