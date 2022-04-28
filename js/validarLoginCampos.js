$(document).ready(function () {

	$("input").focusout(function(){     
		$(this).val(jQuery.trim($(this).val())); 
	});

    $(".formulario").submit(function () {

		if($("#user").val().length < 1) {
			alert("Por favor ingrese su usuario");
				$("#user").focus();
			return false;
		}
        if($("#txtPassword").val().length < 6) {
            alert("Por favor ingrese su contraseña. ¡Recuerde que debe ser minimo 4 a 12 caracteres!");
            $("#txtPassword").focus();
        return false;
    }
    });
});