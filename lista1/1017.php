<?php

    $horas = floatval(readline());
    $velocidade = floatval(readline());
    
    $litros = $horas * $velocidade/12;
    $litros = number_format($litros, 3, ".", "");
    
    echo "$litros\n";


?>