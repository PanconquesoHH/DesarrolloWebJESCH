function mostrar() {
    var contenido = document.getElementById('contenido');
    var ajax = new XMLHttpRequest()
    ajax.open("get","personas.php", true);
    ajax.onreadystatechange = function (){
        if (ajax.readyState == 4){
            personas = JSON.parse(ajax.responseText)
            console.log(personas);
            contenido.innerHTML += `<table>`
        }
    }
    ajax.send();
}