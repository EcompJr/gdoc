$(document).ready(function () {
    
    
    $("#buscarBTN").click(function(){
        
        $("#teste input").removeAttr('readonly');
    });
    
    
    $("#resetBTN").click(function(){
    
        $("#teste input").attr('readonly', 'readonly');
    });    

    
});