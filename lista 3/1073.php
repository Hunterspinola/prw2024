<?php

    $q = intval(readline());
    $n = 0;
    
    if(5< $q and $q<2000){
        
        if($q%2 == 0){
        for($r = 0;$r < $q/2; $r++){
            
            $n += 2;
            $f = $n ** 2; 
            
            echo "$n^2 = $f\n";
        }
    }
        else{
            for($r = 0;$r <($q - 1)/2; $r++){
                
                $n += 2;
                $f = $n ** 2;
                
                echo "$n^2 = $f\n";
            }
        }
    }
?>