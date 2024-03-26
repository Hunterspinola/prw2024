<?php

    list($a, $b, $c) = explode(" ", readline());
    
    $d = ($b*$b)-((4*$a) * $c);
    
    $bap = (-$b + sqrt($d)) / (2 * $a);
    $bap = number_format($bap, 5, ".", "");
    
    $ban = (-$b - sqrt($d)) / (2 * $a);
    $ban = number_format($ban, 5, ".", "");
    
    if($d<0 or $a==0)
    
    echo "Impossivel calcular\n";
    
    else{
        echo "R1 = $bap\n";
        echo "R2 = $ban\n";
    }



?>