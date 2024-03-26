<?php

    $PI = 3.14159;
    list($A, $B, $C) = explode(" ", readline());

    $T = $A * $C/2 ;
    $T = number_format($T, 3, ".", "");
    echo "TRIANGULO: $T\n";
    
    $CI = $PI * $C**2 ;
    $CI = number_format($CI, 3, ".", "");
    echo "CIRCULO: $CI\n";
    
    $TR = ($A+$B)*$C/2;
    $TR = number_format($TR, 3, ".", "");
    echo "TRAPEZIO: $TR\n";
    
    $Q = $B**2;
    $Q = number_format($Q, 3, ".", "");
    echo "QUADRADO: $Q\n";
    
    $R = $A * $B;
    $R = number_format($R, 3, ".", "");
    echo "RETANGULO: $R\n";
    



?>