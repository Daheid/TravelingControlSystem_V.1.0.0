
function limpiarFormulario() {
    var fechaActual = document.getElementById("fecha").value;
    var horaActual = document.getElementById("hora").value;
    document.getElementById("fecha").value = fechaActual;
    document.getElementById("hora").value = horaActual;
}

function currentTime() {
    let date = new Date();
    let hh = date.getHours();
    let mm = date.getMinutes();
    let ss = date.getSeconds();

    hh = (hh < 10) ? "0" + hh : hh;
    mm = (mm < 10) ? "0" + mm : mm;
    ss = (ss < 10) ? "0" + ss : ss;

let time = hh + ":" + mm + ":" + ss;

    watch.innerHTML = time; 
}
setInterval(currentTime, 1000);

window.onload = function() {
    var today = new Date();
    var date = today.getDate() + '/' + (today.getMonth()+1) + '/' + today.getFullYear();
    document.getElementById('currentDate').innerHTML = date;
}



const formulario = document.querySelector('#formulario');
const tabla = document.querySelector('#tabla tbody');
let numFilas = 0;

formulario.addEventListener('submit', (event) => {
  event.preventDefault(); // prevenir el envío del formulario
  
  const unidad = formulario.elements['unidad'].value;
  const destino = formulario.elements['destino'].value;
  const parada = formulario.elements['parada'].value;
  const hora = new Date().toLocaleTimeString();
  const fecha = new Date().toLocaleDateString();

  if (numFilas < 2) {
    // crear una nueva fila en la tabla
    const fila = tabla.insertRow();
    fila.insertCell().textContent = unidad;
    fila.insertCell().textContent = destino;
    fila.insertCell().textContent = parada;
    fila.insertCell().textContent = hora;
    fila.insertCell().textContent = fecha;
    
    numFilas++;
  } else {
    alert('Se ha alcanzado el límite de filas permitidas.');
  }
  
  // limpiar el formulario
  formulario.reset();
});



function obtenerDatosDeOtraPagina() {
    fetch('ruta/a/la/pagina')
      .then(response => response.json())
      .then(data => {
        // Procesa los datos recuperados y agrega opciones al select
        const select = document.getElementById('select-paradas');
        data.forEach(parada => {
          const option = document.createElement('option');
          option.value = parada.numero;
          option.text = `${parada.numero}, ${parada.destino}, ${parada.parada}, ${parada.hora}, ${parada.fecha}`;
          select.appendChild(option);
        });
      })
      .catch(error => console.error(error));
  }