<?php

    $q = intval(readline());
    $f = array();
    $d = 0;
    
    for ($r = 1; $r <= $q; $r++){
        $a = floatval(readline());
        
        if($a == 0){
            array_splice($f, $d, 0, "NULL");
        }
        elseif($a%2 == 0){
            
            if($a > 0){
                array_splice($f, $d, 0, "EVEN POSITIVE");
            }
            else{
                array_splice($f, $d, 0, "EVEN NEGATIVE");
            }
        }
        else{
            if($a > 0){
                array_splice($f, $d, 0, "ODD POSITIVE");
            }
            else{
                array_splice($f, $d, 0, "ODD NEGATIVE");
            }
        }
        
        $d++;
    }
        foreach ($f as $e) {
            echo $e . "\n";
        }
?>