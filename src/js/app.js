
$(document).on("submit",".form_registro",function(event){
    event.preventDefault();
    var $form = $(this) //almaceno el formulario
    var data_form = {
        email: $("input[type='email']", $form).val(),
        password: $("input[type='password']", $form).val()
    }
    //Validacion en front
    if(data_form.email.length < 6){
        $("#msg_error").text("Email no valido").show();
        return false;
    }else if(data_form.password.length > 8){
        $("#msg_error").text("El password debe de ser de 8 caracteres minimoo").show();
        return false
    }
  
    var url_php="http://localhost/MAVICRUD/controller/login.php";
    //Peticion AJAX
    $.ajax({
        type:"POST",
        url: url_php,
        data:data_form,
        dataType:"json",
        async: true
    })
    .done(function ajaxDone(res){
        if(res.error != undefined){
            return false
        }
        //console.log(res.redirect);
        if(res.redirect != undefined){
            console.log("Rrrr")
            window.location = res.redirect;

        }
    })
    .fail(function ajaxError(e){

    })
    .always(function ajaxSiempre(){
        //console.log("Final de la llamada ajax");
    })
    return false;

});

$(document).ready(function() {
    $('#crearRegistro').on('click', function() {
        console.log('Botón Crear Registro presionado');
        $('.form1').show();
        
    });
});

//crear registro

$(document).on("submit",".form1",function(event){
    event.preventDefault();
    var $form = $(this) //almaceno el formulario
    var data_form = {
        email: $("input[id='email']", $form).val(),
        domicilio: $("input[id='domicilio']", $form).val(),
        apellido: $("input[id='apellido']", $form).val(),
        nombre: $("input[id='nombre']", $form).val(),
        password: $("input[type='password']", $form).val()
    }

  
    var url_php="http://localhost/MAVICRUD/controller/userApi.php";
    //Peticion AJAX
    $.ajax({
        type:"POST",
        url: url_php,
        data:data_form,
        dataType:"json",
        async: true
    })
    .done(function ajaxDone(res){

    })
    .fail(function ajaxError(e){

    })
    .always(function ajaxSiempre(){
        //console.log("Final de la llamada ajax");
    })
    return false;

});