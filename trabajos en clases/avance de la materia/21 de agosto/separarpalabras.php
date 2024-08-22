<?php

$oracion="Esta es una oracion";


?>

<ul>
<?php    
explode("",$oracion);

foreach ($separado as $palabra ) 
{?>
    <li> 
        <?php echo $palabra ?> </li> <?php 
} ?>

</ul>
<?php
$invertido="";
for ($i=0;$i<strlen($oracion);$i++)
{
    $invertido=substr($oracion,$i,1),$invertido;
}
echo $invertido, "<br>";
$separado=explode(" ",$invertido);
echo implode("-",$invertido);


