<?php

    $N = intval(readline());
    $a = $N;
    $b = 1;
    
    if (2< $N and $N <1000){
        for($r = 0; $r <10; $r++){
        
            $N = $a * $b;
        
            echo $b.' x '.$a.' = '.$N."\n";
                
                $b = $b + 1;
        }
    }

?>