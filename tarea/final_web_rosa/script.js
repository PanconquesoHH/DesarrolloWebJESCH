function cargarContenidoAjax(url, titulo){
    document.getElementById("titulo").textContent = titulo;
    var contenedor = document.getElementById("contenido");
    contenedor.style.height='auto';
    var ajax = new XMLHttpRequest();
    ajax.open('GET',url , true);
    ajax.onreadystatechange = function (){
        if(ajax.readyState == 4 )
        {
            contenedor.innerHTML = ajax.responseText;
          
        }
    };
    ajax.send();
}
function cargarContenidoFetch(url) {
    var contenedor = document.getElementById("contenido");
    fetch(url)
        .then(response => response.text())
        .then(data => contenedor.innerHTML = data);
}

function mostrarFormInsert() {
    var content_p3 = document.getElementById("content_p3");
    content_p3.innerHTML = `
        <h1>Insertar Alumno</h1>
        <form method="post" action="insertar_alumno.php">
            <label for="CU">CU:</label>
            <input type="text" name="CU" id="CU"><br>
            <label for="nombres">Nombres:</label>
            <input type="text" name="nombres" id="nombres"><br>
            <label for="apellidos">Apellidos:</label>
            <input type="text" name="apellidos" id="apellidos"><br>
            <button type="submit">Insertar</button>
        </form>
    `;
    content_p3.style.display = "block";
}

function cambiarColor() {
    var selectId = document.getElementById('selectId').value;
    var selectedColor = document.getElementById('colorPicker').value;
    var selectedOption = document.getElementById('selectOption').value;

    var selectedDiv = document.getElementById(selectId);

    if (selectedOption === 'backgroundColor') {
        selectedDiv.style.backgroundColor = selectedColor;
    } else {
        selectedDiv.style.color = selectedColor;
    }
}

function cargarSubMenu (){
    var html = `<li style='background-color:#fff'><a href="javascript:cargarContenidoFetch('pregunta4.php')">Listar</a></li>
            <li style='background-color:#fff'><a href="javascript:cargarContenidoFetch('form_insertar.html')">Insertar</a></li>`;
    var options = document.getElementById("options");
    options.innerHTML = html;
}

function insertarLibro(){
    var contenedor = document.getElementById("contenido");
    var formulario =document.getElementById("form_libro");
    var parametros = new FormData(formulario);
    f=new FormData();
    f.add
    var ajax = new XMLHttpRequest();
    ajax.open('POST','insertar_libro.php', true);
    ajax.onreadystatechange = function (){
        if(ajax.readyState == 4 )
        {
            contenedor.innerHTML = ajax.responseText;
            document.getElementById("contenido").textContent = 'Se anadio el registro correctamente';
        }
    };
    ajax.send(parametros);
}
function eliminarLibro (id){
    var contenedor = document.getElementById("contenido");
    var ajax = new XMLHttpRequest();
    ajax.open('GET','eliminar_libro.php?id='+id, true);
    ajax.onreadystatechange = function (){
        if(ajax.readyState == 4 )
        {
            contenedor.innerHTML = ajax.responseText;
            document.getElementById("contenido").textContent = 'Se elimino el registro correctamente';
        }
    };
    ajax.send();
}

function updateLibro (){
    var contenedor = document.getElementById("contenido");
    var formulario =document.getElementById("form_libro");
    var parametros = new FormData(formulario);
    f=new FormData();
    f.add
    var ajax = new XMLHttpRequest();
    ajax.open('POST','update_libro.php', true);
    ajax.onreadystatechange = function (){
        if(ajax.readyState == 4 )
        {
            contenedor.innerHTML = ajax.responseText;
            document.getElementById("contenido").textContent = 'Se actualizo el registro correctamente';
        }
    };
    ajax.send(parametros);

}