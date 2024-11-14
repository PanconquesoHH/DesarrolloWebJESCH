
function mostrarBandeja(tipo) {
    fetch(`mostrarBandeja.php?bandeja=${tipo}`)
        .then(response => response.text())
        .then(data => {
            document.getElementById('contenido').innerHTML = data;
        });
}


function mostrarRedactar() {
    document.getElementById('contenido').innerHTML = `
        <h3>Redactar Mensaje</h3>
        <form onsubmit="enviarCorreo(event)">
            <input type="email" id="correo" placeholder="Correo" required><br>
            <input type="text" id="asunto" placeholder="Asunto"><br>
            <textarea id="mensaje" placeholder="Mensaje"></textarea><br>
            <button type="submit">Enviar</button>
        </form>
    `;
}


function enviarCorreo(event) {
    event.preventDefault();
    var correo = document.getElementById('correo').value;
    var asunto = document.getElementById('asunto').value;
    var mensaje = document.getElementById('mensaje').value;

    fetch('enviarCorreo.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ correo, asunto, mensaje })
    }).then(() => {
        alert("Correo enviado");
        mostrarBandeja('salida');
    });
}


function verCorreo(id) {
    fetch(`verCorreo.php?id=${id}`)
        .then(response => response.text())
        .then(data => {
            document.getElementById('modal-body').innerHTML = data;
            document.getElementById('modal').style.display = "block";
        });
}

function cerrarModal() {
    document.getElementById('modal').style.display = "none";
}
