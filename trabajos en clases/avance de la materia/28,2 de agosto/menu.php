<?php
$a =$_GET['a'];
$b=$_GET['b'];
setcookie('a',$a,3);
setcookie('b',$b,3);
echo '<ul>'; 
echo '<li> <a href="resultado.php?operacion=suma">suma</a>';
echo '<li><a href="resultado.php?operacion=restar">resta</a>';
echo '<li><a href="resultado.php?operacion=multiplicar">multiplicar</a>';
echo '<ul>';

?>;
