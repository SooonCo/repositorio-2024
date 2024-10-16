function calcular(numero1, numero2, operacion) {
    let resultado;

    numero1 = parseFloat(numero1);
    numero2 = parseFloat(numero2);

    switch (operacion) {
        case 'suma':
            resultado = numero1 + numero2;
            break;
        case 'resta':
            resultado = numero1 - numero2;
            break;
        case 'multiplicacion':
            resultado = numero1 * numero2;
            break;
        case 'division':
            if (numero2 == 0) {
                return "No se puede dividir por cero...";
            }
            resultado = numero1 / numero2;
            break;
        default:
            return "La operación es invalida";
    }

    return resultado;
}

function realizarCalculo() {
    const numero1 = document.getElementById("numero1").value;
    const numero2 = document.getElementById("numero2").value;
    const operacion = document.getElementById("operacion").value;

    const resultado = calcular(numero1, numero2, operacion);
    
    document.getElementById("resultado").textContent = "Resultado: " + resultado;
}
