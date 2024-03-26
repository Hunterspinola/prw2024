<?php

 $v = explode(" ", readline());
    $v[0] = (float) $v[0];
    $v[1] = (float) $v[1];
    $v[2] = (float) $v[2];
    rsort($v);
    
    $A = $v[0];
    $B = $v[1];
    $C = $v[2];
    
    if ($A >= ($B + $C)){
        echo "NAO FORMA TRIANGULO\n";
    }
    else{
        if (($A**2) == (($B**2) + pow($C, 2))){
            echo "TRIANGULO RETANGULO\n";
        }
            elseif (($A**2) > (($B**2) + ($C**2))){
                echo "TRIANGULO OBTUSANGULO\n";
            }
                elseif (($A**2) < (($B**2) + ($C**2))){
                    echo "TRIANGULO ACUTANGULO\n";
                }

            if (($A == $B) && ($A == $C)){
                echo "TRIANGULO EQUILATERO\n";
            }
                elseif ((($A == $B) && ($A != $C)) || (($A == $C) && ($A != $B)) || (($B == $C) && ($B != $A))){
                    echo "TRIANGULO ISOSCELES\n";
                }
        }



?>