<?php

    $raio = intval(readline());
    $pi = 3.14159;
    
    $V = (4/3) * $pi * ($raio ** 3);
    $V = number_format($V, 3, ".", "");
    
    echo "VOLUME = $V\n";



?>