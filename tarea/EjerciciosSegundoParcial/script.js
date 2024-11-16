function generarTabla() {
    const numero = parseInt(document.getElementById("numero").value);
    const operacion = document.querySelector('input[name="operacion"]:checked').value;
    const limite = parseInt(document.getElementById("limite").value);

    
    if (numero > 10 || numero < 1) {
        alert("El primer número debe ser mayor a 0 y menor o igual a 10.");
        return;
    }
    if (limite < 2) {
        alert("El límite debe ser mayor o igual a 2.");
        return;
    }

    
    let tablaHTML = "";
    for (let i = 1; i <= limite; i++) {
        let resultado;
        switch (operacion) {
            case "suma":
                resultado = numero + i;
                break;
            case "resta":
                resultado = numero - i;
                break;
            case "multiplicacion":
                resultado = numero * i;
                break;
            case "division":
                resultado = numero / i;
                break;
        }
        tablaHTML += `${numero} ${operacion} ${i} = ${resultado}<br>`;
    }

   
    document.getElementById("Resultado").innerHTML = tablaHTML;
}

function estaLogeado() {
    
    return true; 
}

function mostrarTablaUsuarios() {
    if (estaLogeado()) {
        fetch('listar.php')
            .then(response => response.text())
            .then(data => {
                document.getElementById('contenido').innerHTML = data;
            })
            .catch(error => {
                console.error('Error:', error);
            });
    } else {
        alert('Debes iniciar sesión para ver esta información.');
    }
}

function cambiarNivel(idUsuario, nivelActual) {
    const nuevoNivel = nivelActual === 1 ? 0 : 1;
    fetch('actualizar_nivel.php?id=' + idUsuario + '&nivel=' + nuevoNivel)
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                mostrarTablaUsuarios(); 
            } else {
                alert('Error al actualizar el nivel del usuario.');
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
}