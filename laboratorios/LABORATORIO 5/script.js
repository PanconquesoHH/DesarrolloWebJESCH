function insertar(){
    var formularios = document.getElementById('formularios')
    var formulario= document.getElementById('formulario_insertar');
    var parametros= new FormData(formulario);
    var ajax= new XMLHttpRequest();
    ajax.open('post', 'insertar.php', true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            formularios.innerHTML = ajax.responseText;
        }
    }
    ajax.send(parametros);
}
function editar(id){
    var formularios = document.getElementById('formularios')
    var ajax= new XMLHttpRequest();
    ajax.open('get', 'formeditar.php?id=' + id, true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            formularios.innerHTML = ajax.responseText;
        }
    }
    ajax.send();
    var operacion = document.getElementById('operacion');
    operacion.innerHTML = "<b>Operacion Editar</b>";
    
}
function editarLibro(){
    var formularios = document.getElementById('formularios')
    var formulario= document.getElementById('formularioeditar');
    var parametros= new FormData(formulario);
    var ajax= new XMLHttpRequest();
    ajax.open('post', 'editar.php', true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            formularios.innerHTML = ajax.responseText;
        }
    }
    ajax.send(parametros);
} 

function eliminar(id) {
    var ajax = new XMLHttpRequest();
    ajax.open("GET",'eliminar.php?id=' + id, true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            tabla.innerHTML = mostrarTabla();
        }
    }
    ajax.send(); 
}

function mostrar(id) {
    
    var ajax = new XMLHttpRequest();
    ajax.open("GET",'mostrar.php?id=' + id, true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            formularios.innerHTML = ajax.responseText;
        }
    }
    ajax.send(); 
    var operacion = document.getElementById('operacion');
    operacion.innerHTML = "<b>Operacion Mostrar</b>";
}