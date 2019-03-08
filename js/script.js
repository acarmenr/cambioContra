//inicio de sesion improvisado, cuando se integre con el login, la direccion correcta sera 'php/seguridadSesion.php'
$(document).ready(function(){
    $.ajax({
        method:'POST',
        url:'php/inicioSesion.php',
        success:function(resp){
            $('#usuario').html(resp+" &nbsp&nbsp<i class='fas fa-cog'></i>");
        }
    });
});

function guardarNuevaContraseña() {
    var expresionRegular=/^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8,16}$/;     
    if(expresionRegular.test($('#txt_nuevaContra').val()) && expresionRegular.test($('#txt_confirmaNuevaContra').val())){
        if($('#txt_nuevaContra').val()==$('#txt_confirmaNuevaContra').val()){
            var contra=hex_md5($('#txt_nuevaContra').val());
            var parametro={"CONTRASEÑA":contra};
            $.ajax({
                method:'POST',
                data:parametro,
                url:'php/cambioContra.php',
                success:function(resp){
                    alert(resp);
                }
            });            
        }
        else{
            alert('El contenido de los campos de texto es diferente');
        }
    }
    else{
        alert('La contraseña debe tener entre 8 y 16 caracteres, al menos un dígito, al menos una minúscula y al menos una mayúscula. NO puede tener otros símbolos');
    }
}

function desenmascararContraseña() {
    $('#txt_nuevaContra').attr('type','text');
}

function enmascararContraseña() {
    $('#txt_nuevaContra').attr('type','password');
}

function desenmascararConfirmacion() {
    $('#txt_confirmaNuevaContra').attr('type','text');
}

function enmascararConfirmacion() {
    $('#txt_confirmaNuevaContra').attr('type','password');
}