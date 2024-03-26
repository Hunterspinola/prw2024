<?php

    $A = floatval(readline());
    $B = floatval(readline());
    
    $M = (($A * 3.5 ) + ($B * 7.5)) /11;
    $M = number_format($M, 5, ".", "");
    
    
    echo "MEDIA = $M\n";



?>