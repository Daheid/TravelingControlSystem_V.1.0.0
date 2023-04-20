function confirmacion(e) {
    if (window.alert("¿Desea eliminar este usuario?")) {
        return true;
    } else {
        e.preventDefault();
    }
}

let linkDelete = document.querySelectorAll(".table__item__link");

for(var i = 0; i <linkDelete.lengt; i++){
    linkDelete[i].addEventListener('click', confirmacion);
}