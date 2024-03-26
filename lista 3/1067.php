<?php

    $f=intval(readline());
    
    if ($f >= 1 and $f <= 1000){
   
        for($r = 1; $r <= $f; $r++){
            
            if($r%2 == 1){
                
                print_r($r."\n");
            }
        }
    }


?>