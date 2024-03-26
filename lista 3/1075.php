<?php

    $q = intval(readline());
    
    for($r = 1; $r <= 10000; $r++){
        
        $f = $r % $q;
        
        if ($f == 2){
            
            printf($r."\n");
        }
    }
    
?>