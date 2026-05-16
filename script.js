function validarFormulario() {
    var respuestaInput = document.getElementById("respuesta");
    var valor = respuestaInput.value.trim();

    if (valor === "") {
        alert("¡Atención! No puedes enviar una respuesta vacía. Intenta descifrar la pista.");
        respuestaInput.focus();
        return false;
    }
    return true;
}