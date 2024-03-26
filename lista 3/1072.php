<?php

    $f = intval(readline());
    
    $a = 0;
    $b = 0;
    
    for($r = 0; $r < $f; $r++){
        $q = intval(readline());
        
        if($q >= 10 and $q <= 20){
            $a++;
        }
        else{
            $b++;
        }
    }

    echo "$a in\n"."$b out\n";

?>