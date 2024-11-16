document.getElementById("botonMenu").addEventListener("click", function () {
    
    document.getElementById("principal").innerHTML = `
        Nombre del estudiante: Jhonn Emanuel Saavedra Chavez <br> Carnet Universitario: 35-5271
    `;

    
    fetch("botones.html")
        .then((response) => response.text())
        .then((data) => {
            
            if (!document.querySelector(".boton")) {
                document.getElementById("menu").innerHTML += data;

                
                var botones = document.querySelectorAll(".boton");
                botones.forEach((boton) => {
                    boton.addEventListener("click", function () {
                        var idHistorial = document.getElementById("historial");
                        idHistorial.innerHTML += `Presionó ${this.innerText}<br>`;

                        
                        if (this.innerText === "5") {
                            fetch("colores.html")
                                .then((response) => response.text())
                                .then((formulario) => {
                                    document.getElementById("principal").innerHTML = formulario;
                                })
                                
                        }


                    });
                });
            }
        })
        ;
});


function cambiarColor() {
    var seccion = document.getElementById("seccion").value; 
    var color = document.getElementById("color").value; 

    if (seccion && color) {
        var elemento = document.getElementById(seccion); 
        if (elemento) {
            elemento.style.backgroundColor = color; 
        }
    }
}
function generarTabla() {
    var numero = parseInt(document.getElementById("numero").value);
    var operacion = document.querySelector('input[name="operacion"]:checked').value;
    var limite = parseInt(document.getElementById("limite").value);

    if (numero > 10 || numero < 1) {
        return;
    }
    if (limite < 2) {
        
        return;
    }

    
    let tablaHTML = "";
    for (let i = 1; i <= limiteñ; i++) {
        let resultado;
        switch (operacion) {
            case "suma":
                resultado = i + numero;
                break;
            case "resta":
                resultado = i - numero;
                break;
            case "multiplicacion":
                resultado = i * numero;
                break;
            case "division":
                resultado = i / numero;
                break;
        }
        tablaHTML += `${numero} ${operacion} ${i} = ${resultado}<br>`;
    }

   
    document.getElementById("Resultado").innerHTML = tablaHTML;
}
