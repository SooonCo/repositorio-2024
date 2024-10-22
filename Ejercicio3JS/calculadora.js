let pantalla = document.getElementById('pantalla');
let listaOperaciones = document.getElementById('lista-operaciones');
let operacionActual = '';
let resultadoActual = null;

function agregarValor(valor) {
    operacionActual += valor;
    pantalla.value = operacionActual;
}

function calcular() {
    try {
        let resultado = eval(operacionActual);

        if (isNaN(resultado) || !isFinite(resultado)) {
            throw new Error("Operación inválida o división por cero.");
        }

        // Mostrar resultado en pantalla
        pantalla.value = resultado;

        // Agregar operación y resultado al historial
        agregarAlHistorial(operacionActual + ' = ' + resultado);

        // Restablecer operación actual
        operacionActual = '';
        resultadoActual = resultado;

    } catch (error) {
        pantalla.value = "Error";
        agregarAlHistorial("Error: " + operacionActual);
        operacionActual = '';
    }
}

function borrar() {
    operacionActual = '';
    pantalla.value = '';
}

function agregarAlHistorial(operacion) {
    let nuevoItem = document.createElement('li');
    nuevoItem.textContent = operacion;
    listaOperaciones.appendChild(nuevoItem);

    // Hacer scroll automático al final
    listaOperaciones.scrollTop = listaOperaciones.scrollHeight;
}
