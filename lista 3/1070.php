<?php

    $f = intval(readline());
    
    if($f%2 == 0){
        $f -= 1;
    
        for($r = 0; $r <6; $r++){
            $f += 2;
            
            echo $f."\n";
        }
    }
    else{
        echo $f."\n";
        
        for($r = 0;$r <5; $r++){
            $f += 2;
            
            echo $f."\n";
        }
    }

?>