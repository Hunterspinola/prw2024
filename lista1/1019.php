<?php

    $DS = intval(readline());
    $h = intval($DS / 3600);
    $DS %= 3600;
    
    $m = intval($DS / 60);
    $s = $DS % 60;
    
    printf("%d:%d:%d\n" , $h, $m, $s);
    
    
?>