<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        .grande{
            width: 240px;
            margin: 0 auto;
            border: 1px solid black;
            background-color: yellow;
        }
        .mediano{
            width: 200px;
            margin: 0 auto;
            border: 1px solid black;
            background-color: red;
        }
        .pequeno{
            width: 160px;
            margin: 0 auto;
            border: 1px solid black;
            background-color: green;
        }
    </style>
    
</body>
<div class="<?php echo $_GET['estilo'];?>">
    Programacion Web

</div>
</html>