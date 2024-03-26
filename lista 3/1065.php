<?php

    $f = 0;
    
    for ($r = 1; $r <= 5; $r++){
        
        $q = floatval(readline());
        if ($q%2 == 0){
            
            $f += 1;
        }
    }
    
    echo "$f valores pares\n";

?>