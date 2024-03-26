<?php
    
    list($q, $a, $b, $t, $r) = 0;
    
    while($r != 2){
        $t++;
        
        list($x, $y) = explode(" ", readline());
        
        if($x > $y){
            $q++;
        }
        elseif($y > $x){
            $a++;
        }
        else{
            $b++;
        }
        $v = 0;
        while($v != 1){
            echo "Novo grenal (1-sim 2-nao)\n";
            $new = intval(readline());
            if($new == 1){
                $r = 0;
                $v = $new;
                    
            }
            elseif($new == 2){
                $v = 1;
            }
            }
            if($new ==2){
                $r = 2;
                echo "$t grenais\n";
                echo "Inter:".number_format($q)."\n";
                echo "Gremio:".number_format($a)."\n";
                echo "Empates:".number_format($b)."\n";
                if($q > $a){
                    echo "Inter venceu mais\n";
                }
                elseif($a > $q){
                    echo "Gremio venceu mais\n";
                }
                else{
                    echo "Nao houve vencedor\n";
                }
            }
    }
    
    
?>