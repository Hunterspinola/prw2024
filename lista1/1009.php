<?php

    $no = readline();
    $sa = floatval(readline());
    $vc = floatval(readline());
    
    $vc = (($vc/100) * 15);
    $TR = $sa + $vc;
    $TR = number_format($TR, 2, ".", "");
    
    echo "TOTAL = R$ $TR\n";



?>