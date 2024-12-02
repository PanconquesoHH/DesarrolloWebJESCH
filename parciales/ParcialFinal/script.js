    function verModal(id) {
        fetch(`verModal.html?id=${id}`)
            .then(response => response.text())
            .then(data => {
                document.getElementById('modal-body').innerHTML = data;
                document.getElementById('modal').style.display = "block";
            });
    }
    
    function cerrarModal() {
        document.getElementById('modal').style.display = "none";
    }




let colorSeleccionado = null;


function crearTablaColores() {
  var colores = [
    "#FF0000", "#00FF00", "#0000FF", "#FFFF00",
    "#FFA500", "#800080", "#FFC0CB", "#A52A2A",
    "#808080", "#00FFFF", "#00FF00", "#4B0082",
    "#008080", "#800000", "#FFD700", "#C0C0C0"
  ];

  
  var contenedorPrincipal = document.getElementById("principal");
  if (!contenedorPrincipal) {
    console.error("");
    return;
  }

  
  contenedorPrincipal.innerHTML = ""; 

 
  var tabla = document.createElement("table");
  tabla.style.margin = "20px auto";
  tabla.style.borderCollapse = "collapse";

  colores.forEach((color, index) => {
    if (index % 4 === 0) {
      var fila = document.createElement("tr");
      tabla.appendChild(fila);
    }

    var celda = document.createElement("td");
    celda.style.backgroundColor = color;
    celda.style.width = "50px";
    celda.style.height = "50px";
    celda.style.cursor = "pointer";
    celda.style.border = "1px solid black";
    celda.style.color = "#ffffff";
    celda.style.textAlign = "center";
    celda.style.fontSize = "10px";


    celda.addEventListener("click", function () {
      colorSeleccionado = color; 
      alert(`Color seleccionado: ${colorSeleccionado}`);
    });

    fila.appendChild(celda);
  });

  contenedorPrincipal.appendChild(tabla);
}

function cambiarColor(seccion) {
  if (colorSeleccionado) {
    seccion.style.backgroundColor = colorSeleccionado;
  } 
}

function pregunta5(event) {
  event.preventDefault(); 
  crearTablaColores();
}


document.getElementById("menu").addEventListener("click", () => cambiarColor(document.getElementById("menu")));
document.getElementById("pie").addEventListener("click", () => cambiarColor(document.getElementById("pie")));
document.getElementById("navegacion").addEventListener("click", () => cambiarColor(document.getElementById("navegacion")));
document.getElementById("principal").addEventListener("click", () => cambiarColor(document.getElementById("principal")));
document.getElementById("login").addEventListener("click", () => cambiarColor(document.getElementById("login")));






