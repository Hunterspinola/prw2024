<?php
    $N = intval(readline());
    $q = 1;
   
    if (1 < $N and $N < 1000){
        for ($r = 0 ;$r < $N ;$r++){
            $a = $q ** 2;
            $b = $q ** 3;
            echo "$q "."$a "."$b\n";
            $q = $q + 1;
        }
    }
?>