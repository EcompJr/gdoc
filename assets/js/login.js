$(document).ready(function () {

    $('#recuperar').click(function () {
        $('#loginbox').hide();
        $('#recoverybox').show();
    });

    $('#cadastrar').click(function () {
        $('#loginbox').hide();
        $('#signupbox').show();
    });

    $('#recovery-back').click(function () {
        $('#loginbox').show();
        $('#recoverybox').hide();
    });

    $('#signup-back').click(function () {
        $('#loginbox').show();
        $('#signupbox').hide();
    });

    /* Tela de Cadastro */
    $('#empresa').keyup(function () {

        var string = $('#empresa').val();
        $('#empresa').val(string.charAt(0).toUpperCase() + string.slice(1));
    });

    $('#celular').keyup(function () {

        var numero = $('#celular').val();
        $('#whatsapp').val(numero);
    });
    /* Tela de Cadastro */









});