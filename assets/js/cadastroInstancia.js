$(document).ready(function() {

        var x = 1; // campos iniciais
        const campos_max = 6;
        const campos_min = 1;
        
        $( "#add_field" ).click(function() {
                if (x < campos_max) {
                        $('#listas').append('<div class="row" id="'+ ++x +'">\
                        <div class="form-group col-md-4">\
                            <label for="anexar">Instâncias:</label>\
                            <input requierd type="text" class="form-control" id="anexar">\
                        </div>\
                        <div class="form-group col-md-4">\
                            <label for="anexar">Prazo:</label>\
                            <input requierd type="number" class="form-control" id="anexar" placeholder="Em dias">\
                        </div>\
                        <div class="form-group col-md-4">\
                            <label for="anexar">Responsável:</label>\
                            <select  type="text" class="form-control">\
                                <option value="" selected>Selecione o funcionário</option>\
                            </select>\
                        </div>\
                    </div>');

                    //x++;
                    
                }
                else{
                     alert("Número máximo de Instâncias");   
                }
                
        });

        $("#remove_field").click(function(){

                var id = "#" + x

                if(x > campos_min){
                        $(id).remove();
                        x--;
                }
                else{
                        alert("Número mínimo de Instâncias");
                }
                
        });
});
