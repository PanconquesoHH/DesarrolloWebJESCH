<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        .celda{
            width: 30px;
            height: 30px;
            border: 1px solid black;
        }
    </style>
    
</body>
</html>

<?php
include('examen.php');

$cadena1=$_POST['cadena1'];
$cadena2=$_POST['cadena2'];

$e = new Examen ($cadena1,$cadena2);

$e ->cruzar();
?>;