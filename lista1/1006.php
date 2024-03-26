<?php

    $A = floatval(readline());
    $B = floatval(readline());
    $C = floatval(readline());
    
    $M = (($A * 0.2) + ($B * 0.3) + ($C * 0.5));
    $M = number_format($M, 1, ".", "");
    
    echo "MEDIA = $M\n";
    



?>