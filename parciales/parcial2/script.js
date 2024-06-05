function generarTabla() {
    var operaciones = document.getElementById('operaciones');
    fetch('datos.html')
    .then(response => response.text())
    .then(data => operaciones.innerHTML = data);
    var titulo = document.getElementById('titulo');
    titulo.innerHTML = 'Pregunta 1';
    titulo.style.display= "flex";
    titulo.style.alignItems= "center";
    titulo.style.justifyContent= "center";
    titulo.style.color= "red";
}

function creartabla() {
    var contenido = document.getElementById('contenido');
    var filas = document.getElementById('filas').value;
    var columnas = document.getElementById('columnas').value;
    var html = `<table border="1" style='width:50%'>`
        for (i = 0; i < filas; i++) {
            html+=`<tr>`
                for (j = 0; j < columnas; j++) {
                    html+=`<td id='celda${j}' onclick='mostrarImput("celda${j}")'></td>`
                }
            html+=`</tr>`
        }
    html+=`</table>`
    contenido.innerHTML = html;
}

function mostrarImput(celda) {
    var celdas = document.getElementById(celda);
    celdas.innerHTML=`<input type="number" id="valor" style='width:100px'>`;
    document.getElementById('valor').addEventListener("keypress", () => {
        if (event.key == "Enter") {
            celdas.innerHTML = document.getElementById('valor').value;
        }
    })
}

function pregunta3() {
    var operar = document.getElementById('operar');
    var ajax = new XMLHttpRequest();
    ajax.open('get', 'galeria.php', true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            operaciones.innerHTML = ajax.responseText;
        }
    }
    ajax.send();
    titulo.innerHTML = 'Pregunta 3';
    titulo.style.display= "flex";
    titulo.style.alignItems= "center";
    titulo.style.justifyContent= "center";
    titulo.style.color= "red";
}

function mostrarBorde(img) {
    var imagenborde = document.getElementById(img);
    imagenborde.style.border= "2px solid blue";
}

function mostrarImagen(imagen,titulo,autor,editorial,año) {
    var content = document.getElementById('content');
    contenido.innerHTML = `
    <div style='display:flex'>
        <div>
            <img src="images/${imagen}" width="150px">
        </div>
        <div style='display:flex; flex-direction: column; justify-content: center;'>
            <p>Titulo: ${titulo}</p>
            <p>Autor: ${autor}</p>
            <p>Editorial: ${editorial}</p>
            <p>Año: ${año}</p>
        </div>
    </div>
    `
}

