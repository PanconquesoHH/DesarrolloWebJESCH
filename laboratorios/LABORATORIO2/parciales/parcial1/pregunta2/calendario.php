   <?php 


   $largos=6;
   $n=8;
   $dias=7; 
   echo "<table>";

    for($i=0;$i<$largos;$i++){
         echo"<tr>";
         for($j=0;$j<$dias;$j++){
              echo"<td>",$n,"</td>";
              $n=$n+2;
         }
         echo"</tr>";
    }
    
     echo"</table>";
    



    ?>

