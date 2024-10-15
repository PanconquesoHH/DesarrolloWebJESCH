
<?php
include("conexion.php");
$sql = "SELECT id,nombres,apellidos,correo FROM usuarios";
$resultado = $con->query($sql);
if ($resultado->num_rows > 0)
 { ?>  
    <table border="1" style="margin:auto;width: 700px;height: 200px;">
    <tr >
    <th style="background-color:red;color:white; height:20px">Nombres</th>
    <th style="background-color:red;color:white">Apellido</th>
    <th style="background-color:red;color:white">correo</th>
   
    
    <tr>

    <?php
    while ($row = $resultado->fetch_assoc()) {
        ?>
        <tr>
            <td> <?php  echo $row  ["nombres"]; ?></td>
            <td ><?php echo $row ["apellidos"]; ?></td>
            <td ><?php echo $row ["correo"] ; ?></td>
        </tr>
        <?php
    }
    ?>
        
        
    <table>
        <?php
    }
     else {
    echo"0 resultados";
    }
    mysqli_close($con);
?>

