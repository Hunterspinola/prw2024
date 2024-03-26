<?php

function DDD($d){
    if($d > 30){
        if($d == 31){
            echo "Belo Horizonte\n";
        }
        elseif($d == 32){
            echo "Juiz de Fora\n";
        }
        elseif($d == 61){
            echo "Brasilia\n";
        }
        elseif($d == 71){
            echo "Salvador\n";
        }else{
            echo "DDD nao cadastrado\n";
        }
    }
    elseif($d <= 30){
        if($d == 27){
            echo "Vitoria\n";
        }
        elseif($d == 21){
            echo "Rio de Janeiro\n";
        }
        elseif($d == 19){
            echo "Campinas\n";
        }
        elseif($d == 11){
            echo "Sao Paulo\n";
        }else{
            echo "DDD nao cadastrado\n";
        }
    }
}

$d = intval(readline());

DDD($d)
?>