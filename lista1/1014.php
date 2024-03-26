<?php

    $X = floatval(readline());
    $Y = floatval(readline());
    
    $CG = $X/ $Y;
    $CG = number_format($CG, 3, ".", "");
    
    echo "$CG km/l\n";



?>