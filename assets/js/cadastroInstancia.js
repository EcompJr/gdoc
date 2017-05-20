$(document).ready(function() {
        var campos_max          = 10;   //max de 10 campos
        var x = 1; // campos iniciais
        $('#add_field').click (function(e) {
                e.preventDefault();     //prevenir novos clicks
                if (x < campos_max) {
                        $('#listas').append('<<div class="input-group">\
                            <div class="col-md-4">\
                                <label for="anexar">Instâncias:</label>\
                                <input requierd type="text" class="form-control" id="anexar">\
                            </div>\
                            <div class="col-md-4">\
                                <label for="anexar">Prazo:</label>\
                                <input requierd type="number" class="form-control" id="anexar" placeholder="Em dias">\
                            </div>\
                            <div class="col-md-4">\
                                <label for="anexar">Responsável:</label>\
                                <input requierd type="text" class="form-control" id="anexar">\
                        </div>'0);
                        x++;
                }
        });
});
