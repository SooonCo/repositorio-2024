function cambiarColor(color) {
    document.body.style.backgroundColor = color;
    document.getElementById('contenedor').style.backgroundColor = color;
}

function restablecerColor() {
    document.body.style.backgroundColor = '#f8f9fa';
    document.getElementById('contenedor').style.backgroundColor = '#ffffff';
}
