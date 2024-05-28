function listar(parametros) {
    var datos = document.getElementById('datos');
    var ajax = new XMLHttpRequest();
    if (parametros) {
        ajax.open("GET", "read.php?"+parametros, true);
    }else {
        ajax.open("GET", "read.php", true);
    }
    
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            datos.innerHTML = ajax.responseText;
        }
    }
    ajax.getResponseHeader('Content-Type', 'test/html; charset=utf-8');
    ajax.send(); 
}

function buscar() {
    palabra = document.getElementById('filtro').value;
    listar("filtro="+palabra);
}

function cargar(url) {
    var datos = document.getElementById('datos');
    var ajax = new XMLHttpRequest();
    ajax.open("GET",url, true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            datos.innerHTML = ajax.responseText;
        }
    }
    ajax.getResponseHeader('Content-Type', 'test/html; charset=utf-8');
    ajax.send(); 
}

function insertar() {
    var datos = document.getElementById('datos');
    var ajax = new XMLHttpRequest();

    var formulario = document.getElementById('form-persona');
    var parametro = new FormData(formulario);

    ajax.open("POST",'insertar.php', true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            datos.innerHTML = ajax.responseText;
        }
    }
    ajax.getResponseHeader('Content-Type', 'application/x-www-form-urlencoded');
    ajax.send(parametro); 
}