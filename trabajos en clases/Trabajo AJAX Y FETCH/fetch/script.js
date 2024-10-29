
function cargarAnios() {
    var anioSelect = document.getElementById('anio');
    for (let i = 1975; i <= 2024; i++) {
        var option = document.createElement('option');
        option.value = i;
        option.textContent = i;
        anioSelect.appendChild(option);
    }
}
function cargarCalendario() {
    var mes = document.getElementById('mes').value;
    var anio = document.getElementById('anio').value;


    fetch(`calendario.php?anio=${anio}&mes=${mes}`)
        .then(response => response.text())
        .then(data => {
            document.getElementById('contenido').innerHTML = data;
        })
        
}

document.getElementById('mes').addEventListener('change', cargarCalendario);
document.getElementById('anio').addEventListener('change', cargarCalendario);

window.addEventListener('load', () => {
    cargarAnios();
    cargarCalendario();
});
