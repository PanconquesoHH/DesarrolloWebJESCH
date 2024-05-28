function listar(){
    var datos = document.getElementById('datos');
    var ajax = new XMLHttpRequest() ;
    ajax.open("get","read.php",true);
    ajax.onreadystatechange = function(){
        if(ajax.readyState==4){
            datos.innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type","text/html; charset=uft-8" );
    ajax.send();
}
function cargar(url){
    var datos = document.getElementById('datos');
    var ajax = new XMLHttpRequest() ;
    ajax.open("get",url,true);
    ajax.onreadystatechange = function(){
        if(ajax.readyState==4){
            datos.innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type","text/html; charset=uft-8" );
    ajax.send();
}
function insertar(){
    var datos = document.getElementById('datos');
    var ajax = new XMLHttpRequest() ;
    var formulario = document.getElementById("form_persona");
    var parametros = new FormData(formulario);
    ajax.open("post","insertar.php",true);
    ajax.onreadystatechange = function(){
        if(ajax.readyState==4){
            datos.innerHTML = ajax.responseText;
        }
    }
    //ajax.setRequestHeader("Content-Type","text/html; charset=uft-8" );
    ajax.send(parametros);   
}
