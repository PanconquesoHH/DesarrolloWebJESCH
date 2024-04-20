<?php
$resultado = determinar(2);
    if ($resultado ) {
        echo "el numero es par";
    }else{
        echo "el numero es impar";
    }


function determinar($numero)
{
if ($numero % 2 == 0 and $numero >=0) {
    return true; 

}else{
    return false;
}
}

?>