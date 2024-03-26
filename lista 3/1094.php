<?php

    $q = intval(readline());
    
    list($a, $b, $c) = 0;
    
    for($r = 0; $r < $q; $r++){
        
        list($x, $y) = explode(" ", readline());
        if($x >= 1 and $x <= 15){
            if($y == 'C'){
                $a = $a + $x;
            }
            elseif($y == 'R'){
                $b = $b + $x;
            }
            else{
                $c = $c + $x;
            }
        }
    }
    $t = $a + $b + $c;
    
    echo "Total: $t cobaias\n"."Total de coelhos: $a\n"."Total de ratos: $b\n"."Total de sapos: $c\n";
    echo "Percentual de coelhos: ".number_format(($a * 100)/($t), 2, ".", " ")." %\n";
    echo "Percentual de ratos: ".number_format(($b * 100)/($t), 2, ".", " ")." %\n";
    echo "Percentual de sapos: ".number_format(($c * 100)/($t), 2, ".", " ")." %\n";



?>
