<?php
     
    list($A, $B, $C, $D) = explode(" ", readline());
  
    $CD = $C + $D;
    $AB = $A + $B;
  
    if($B>$C && $D>$A && $CD>$AB && $C>0 && $D>0 && fmod($A,2)==0)
    
        echo "Valores aceitos\n";
    
    else {
        echo "Valores nao aceitos\n";
    }
?>