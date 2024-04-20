<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        table {
            
            border: 2px solid green;
            background-color: white;
            margin: 20px;
        }
        th, td {
            border: 1px solid green;
            padding: 8px;
        }
    </style>
</head>
<body>
    <h2>Resultados de Conversión de Temperatura</h2>
    <?php
    if (isset($_POST['temperatura'])) {
        $celsius = $_POST['temperatura'];
        $kelvin = $celsius + 273.15;
        $fahrenheit = ($celsius * 9/5) + 32;
        ?>
        <table>
            <tr>
                <th>Kelvin</th>
                <th>Fahrenheit</th>
            </tr>
            <tr>
                <td><?php echo $kelvin; ?></td>
                <td><?php echo $fahrenheit; ?></td>
            </tr>
        </table>
        <?php
    }  
    ?>
   
</body>
</html>
