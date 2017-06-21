$(document).ready(function () {

    /*
    Preenche automaticamente uma lista de países
    */

    $.getJSON('https://raw.githubusercontent.com/juliolvfilho/lista-paises/master/paises-array.json', function (data) {
        var items = [];
        var options = '<option placeholder="Países" value=""></option>';
        $.each(data, function (key, val) {
            options += '<option value="' + val.nome + '">' + val.nome + '</option>';
        });
        $("#pais").html(options);
    });
});