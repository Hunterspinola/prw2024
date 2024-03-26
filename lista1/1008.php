<?php

    $nf = intval(readline());
    $h = floatval(readline());
    $vh = floatval(readline());    
    
    $S = $h * $vh;
    $S = number_format($S, 2, ".", "");
    
    echo "NUMBER = $nf\n";
    echo "SALARY = U$ $S\n";



?>