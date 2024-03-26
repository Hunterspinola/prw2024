<?php

    list($hi, $hf) = explode(' ', readline());
        
        if($hi > $hf){
            $tempo = 24 - $hi + $hf;
            
            echo "O JOGO DUROU $tempo HORA(S)\n";
        }
            elseif($hi == $hf){
                echo "O JOGO DUROU 24 HORA(S)\n";
            }
                else{
                    $tempo = $hf - $hi;
                    echo "O JOGO DUROU $tempo HORA(S)\n";
                }
?>