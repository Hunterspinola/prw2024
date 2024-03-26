<?php

    $I = intval(readline());

    $A = intval($I / 365);
    $I %= 365;
    $M = intval($I / 30);
    $S = $I % 30;

    echo "$A ano(s)\n$M mes(es)\n$S dia(s)\n";


?>