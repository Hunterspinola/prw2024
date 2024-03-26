<?php

    list($v1, $v2, $v3) = explode(" ", readline());

    $M1 = ($v1 + $v2 + abs($v1 - $v2))/2;
    $MF = ($M1 + $v3 + abs($M1 - $v3))/2;

    echo "$MF eh o maior\n";

?>