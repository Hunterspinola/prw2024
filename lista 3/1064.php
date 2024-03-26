<?php

    $f = 0;
    $v = array();
    
    for ($r = 1; $r <= 6; $r++){
        
        $c = floatval(readline());
        if ($c > 0){
            
            array_splice($v, $f, 0, $c);
            $f += 1;
        }
    }
    
    $s = array_sum($v);
    $quan = count($v);
    $med = $s / $quan;
    
    echo "$f valores positivos\n";
    echo "".number_format($med, 1, ".", "")."\n";



?>