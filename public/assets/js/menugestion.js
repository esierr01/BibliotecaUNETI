//! Funcion para desaparecer automaticamente mensajes de error con id="alerta"
window.onload = () => {
    setTimeout(() => {
        if (document.getElementById('alerta') != null) {
            document.getElementById('alerta').remove()
        }
    }, 4000);
}

//! Funcion para en carga de nuevo libro mostrar caratula al seleccionar un archivo
function mostrarImagen(event) {
    console.log('Evento change disparado');
    var input = event.target;
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById('ImagenLibro').src = e.target.result;
        }
        reader.readAsDataURL(input.files[0]);
    }
}