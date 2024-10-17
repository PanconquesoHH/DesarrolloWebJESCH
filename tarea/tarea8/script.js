function calcular() {
 
    var operacion = document.getElementById("operacion").value;
    var valorA = parseFloat(document.getElementById("valorA").value);
    var valorB = parseFloat(document.getElementById("valorB").value);
    var resultado = 0;


    if (isNaN(valorA) || isNaN(valorB)) {
        document.getElementById("resultado").innerHTML = "Por favor, ingresa números válidos.";
        return;
    }

   
    if (operacion === "suma") {
        resultado = valorA + valorB;
    } else if (operacion === "resta") {
        resultado = valorA - valorB;
    } else if (operacion === "multiplicacion") {
        resultado = valorA * valorB;
    } else if (operacion === "division") {
        if (valorB === 0) {
            document.getElementById("resultado").innerHTML = "No se puede dividir entre 0.";
            return;
        }
        resultado = valorA / valorB;
    }

    
    document.getElementById("resultado").innerHTML = "El resultado es: " + resultado;
}
