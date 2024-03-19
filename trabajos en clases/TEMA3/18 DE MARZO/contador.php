
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesi</title>
</head>
<body>
    <?php session_start();
    if(isset($_SESSION["contador"]))
    {
        $valor=$_SESSION["contador"]++;
        
    }
    else{
        $valor=$_SESSION["contador"]=+1;
        
    }
    
echo "Este es su numero de visita nro. ". $_SESSION['contador'] ;


    ?>
    <br>
    <a href="cerrar.PHP">
        Cerrar sesion
    </a>
    
</body>
</html>