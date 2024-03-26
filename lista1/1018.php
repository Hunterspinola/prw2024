<?php

    $V = intval(readline());
    $C = [100, 50, 20, 10, 5, 2, 1];
    
    echo $V . "\n";
    
    foreach ($C as $C) {
        $not = intval($V / $C);
        $V %= $C;
        $C = number_format($C, 2, ',', '');
        
        echo $not . " nota(s) de R$ $C\n";
    }

?>