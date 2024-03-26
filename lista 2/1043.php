<?php

    list($a, $b, $c) = explode(" ", readline());
    
    if( $a + $b > $c and $a + $c > $b and $b + $c > $a){
    
    $perimetro = $a + $b + $c;
    $perimetro = number_format($perimetro, 1, ".","");
    
    echo "Perimetro = $perimetro\n";
    }
    
        else{
            $area = (($a + $b)*$c)/2;
            $area = number_format($area, 1, ".","");
            
            echo "Area = $area\n";
        }




?>