function actualizarFechaHora() {
    var fechaHora = new Date();
    var fechaActual = fechaHora.toISOString().slice(0, 10);
    var horaActual = fechaHora.getHours().toString().padStart(2, '0') + ':' + fechaHora.getMinutes().toString().padStart(2, '0');
    document.getElementById("fecha").value = fechaActual;
    document.getElementById("hora").value = horaActual;
}

function limpiarFormulario() {
    var fechaActual = document.getElementById("fecha").value;
    var horaActual = document.getElementById("hora").value;
    document.getElementById("fecha").value = fechaActual;
    document.getElementById("hora").value = horaActual;
}