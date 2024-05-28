function Departamento(){
    var Departamento = document.getElementById('Departamento')
     var ajax = new XMLHttpRequest()
     ajax.open("get", "departamentos.php", true );
     ajax.onreadystatechange = function() {
        if (ajax.readyState ==4) {
            Departamento = JSON.parse(ajax.responseText)
            console.log(Departamento);

            for(i=0;Departamento.length;i++)
                {
                    let elemento = document.createElement("option");
                    elemento.value = Departamento[i].id
                    elemento.innerHTML = Departamento[i].Departamento
                    lista.appendChild(elemento);
                }
        }
     }
     ajax.send();
}