<?php

    $f = 0;
    
    for ($r = 1; $r <= 100; $r++){
        $q = intval(readline());
        
        if ($q > $f){
            
            $f = $q;
            $a = $r;
        }
    }
        printf($f."\n");
        printf($a."\n");
?>