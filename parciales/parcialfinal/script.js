function pregunta1() {
    var contador = document.getElementById('contador');
    fetch('contador.php')
    .then(response => response.text())
    .then(data => contador.innerHTML = data)

    var titulo = document.getElementById('titulo');
    titulo.innerHTML= "Pregunta 1"
}

function cambiarColor() {
    var nombre_id = document.getElementById('nombre_id').value;
    var colorFondo = document.getElementById('colorFondo').value;
    if (nombre_id == 'menu') {
        var menu = document.getElementById('menu');
        menu.style.backgroundColor = colorFondo;
    } else if (nombre_id == 'titulo') {
        var titulo = document.getElementById('titulo');
        titulo.style.backgroundColor = colorFondo;
    } else if (nombre_id == 'sub-menu') {
        var sub_menu = document.getElementById('sub-menu');
        sub_menu.style.backgroundColor = colorFondo;
    } else if (nombre_id == 'contenido') {
        var contenido = document.getElementById('contenido');
        contenido.style.backgroundColor = colorFondo;
    } else if (nombre_id == 'pie') {
        var pie = document.getElementById('pie');
        pie.style.backgroundColor = colorFondo;
    } else if (nombre_id == 'contador') {
        var contador = document.getElementById('contador');
        contador.style.backgroundColor = colorFondo;
    }
}


function pregunta4() {
    var titulo = document.getElementById('titulo');
    titulo.innerHTML= "Pregunta 4";
    var sub_menu = document.getElementById('sub-menu');
    fetch('editarcalificaciones.php')
    .then(response => response.text())
    .then(data => sub_menu.innerHTML = data);
}

function editarCalificaciones(materia) {
    var contenido = document.getElementById('contenido');
    var ajax = new XMLHttpRequest();
    ajax.open('get', 'tablaCalificaciones.php?materia=' + materia, true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            var filas = JSON.parse(ajax.responseText);
            console.log(filas);
            var tabla = 
            `
            <table border="1">
            <tr>
                <td style="background-color: rgb(0, 81, 255);">Nro</td>
                <td style="background-color: rgb(0, 81, 255);">Nombre</td>
                <td style="background-color: rgb(0, 81, 255);">Calificacion</td>
            </tr>`;
            for (let i = 0; i < filas.length; i++) {
                tabla += `
                <tr>
                    <td>${i+1}</td>
                    <td>${filas[i].nombres_apellidos}</td>
                    <td id="${filas[i].id}" onclick="cambiarNota('${filas[i].id}')">${filas[i].calificacion}</td>
                </tr>`;
            }
            tabla += `
            </table>`;
            contenido.innerHTML = tabla;
        }
    }
    ajax.send();
}

function cambiarNota(id) {
    var celda = document.getElementById(id);
    celda.innerHTML = `<input type='number' name='calificacion' id='calificacion' value="${celda.innerHTML}">`;
    celda.onclick = null;
    document.getElementById('calificacion').addEventListener('keypress', function (event) {
        if (event.key == "Enter") {
            var calificacion = document.getElementById('calificacion').value;
            var ajax = new XMLHttpRequest();
            ajax.open('get', 'cambiarNota.php?calificacion=' + calificacion + '&id=' + id, true);
            ajax.onreadystatechange = function () {
                if (ajax.readyState == 4) {
                    celda.innerHTML = calificacion;
                    celda.onclick = function() { cambiarNota(id); };
                }
            }
            ajax.send();
        }
    });
}
