
function cargarAnios() {
    const anioSelect = document.getElementById('anio');
    for (let i = 1975; i <= 2024; i++) {
        const option = document.createElement('option');
        option.value = i;
        option.textContent = i;
        anioSelect.appendChild(option);
    }
}


function cargarCalendario() {
    const mes = document.getElementById('mes').value;
    const anio = document.getElementById('anio').value;


    const xhr = new XMLHttpRequest();
    xhr.open('GET', `calendario.php?anio=${anio}&mes=${mes}`, true);


    xhr.onload = function() {
        if (xhr.status === 200) {

            document.getElementById('contenido').innerHTML = xhr.responseText;
        } else {
            console.error('Error al cargar el calendario:', xhr.status);
        }
    };
    xhr.send();
}


document.getElementById('mes').addEventListener('change', cargarCalendario);
document.getElementById('anio').addEventListener('change', cargarCalendario);

window.addEventListener('load', () => {
    cargarAnios();
    cargarCalendario();
});
