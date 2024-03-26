<?php

    list($hi, $mi, $hf, $mf) = explode(' ', readline());
    
    if($hi < $hf and $mi > $mf){
        $horas = ($hf -$hi) - 1; 
        $minutos = 60- ($mi -$mf);
      
        echo "O JOGO DUROU $horas HORA(S) E $minutos MINUTO(S)\n";
    }
        elseif($hi < $hf and $mi < $mf){
            $horas = $hf - $hi; 
            $minutos = $mf - $mi;
                
            echo "O JOGO DUROU $horas HORA(S) E $minutos MINUTO(S)\n";
        }
        elseif($hi > $hf and $mi > $mf){
            $horas = (24 - $hi + $hf) - 1;
            $minutos = 60 - ($mi - $mf);
          
            echo "O JOGO DUROU $horas HORA(S) E $minutos MINUTO(S)\n";
        }
        elseif($hi > $hf and $mi < $mf){
            $horas = 24 - ($hi + $hf);
            $minutos = $mf - $mi;
            
                echo "O JOGO DUROU $horas HORA(S) E $minutos MINUTO(S)\n";
        }
        elseif($hi == $hf and $mi == $mf){
            echo "O JOGO DUROU 24 HORA(S) E 0 MINUTO(S)\n";
        }   
        elseif($hi < $hf and $mi == $mf){
            $horas = $hf - $hi; 
            
            echo "O JOGO DUROU $horas HORA(S) E 0 MINUTO(S)\n";
        }
        elseif($hi > $hf and $mi == $mf){
            $horas = 24 - ($hi + $hf);
            
            echo "O JOGO DUROU $horas HORA(S) E 0 MINUTO(S)\n";
        }
        elseif($hi == $hf and $mi < $mf){
            $minutos = $mf - $mi;
            
            echo "O JOGO DUROU 0 HORA(S) E $minutos MINUTO(S)\n";
        }
        elseif($hi == $hf and $mi > $mf){
            $minutos = 60 - ($mi - $mf);
            
            echo "O JOGO DUROU 23 HORA(S) E $minutos MINUTO(S)\n";
        }

?>