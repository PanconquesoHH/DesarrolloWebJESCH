<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./index.css">
    <script src="./script.js"></script>
</head>
<body>
    <div class="body">
        <div class="container">
            <div id="submenu">
                <div>
                    <img src="./usfx.jpg" width="120">
                </div>
                <li>Opciones</li>
                <div id="options">
                    <li style="background-color:#fff"><a>Detalle 1</a></li>
                    <li style="background-color:#fff"><a>Detalle 2</a></li>
                </div>
            </div>
            <div id="subcontainer">
                <div id="menu">
                    <li><a>Pregunta 1</a></li>
                    <li><a>Pregunta 2</a></li>
                    <li><a href="javascript:cargarContenidoAjax('pregunta3.php', 'Pregunta 3')">Pregunta 3</a></li>
                    <li><a href="javascript:cargarContenidoAjax('pregunta4.php', 'Pregunta 4')" onclick="cargarSubMenu()">Pregunta 4</a></li>
                    <li><a href="javascript:cargarContenidoAjax('pregunta5.php', 'Pregunta 5')">Pregunta 5</a></li>
                </div>
                <div id="titulo">
                    Titulo
                </div>
                <div id="contenido">
                    <div class="target">
                        <div class="header-target">
                            <h3 style="padding:4px">SIS 256 Programación Web</h3>
                            <p style="padding:4px">Examen Final - 02-12-2023 7:00 am</p>
                        </div>
                        <div id="profile">
                            <img src="./profile.jpg" alt="Foto de perfil">
                        </div>
                        <div class="content-target">
                            <h3 style="padding:4px">Rosa Leonor Blanco Moya</h3>
                            <p style="padding:4px">Carrera: Ing. en Sistemas</p>
                            <p style="padding:4px">Repositorio Examen: </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="pie">
            <p>Sucre - Semestre 2-2023</p>
        </div>
    </div>
</body>
</html>