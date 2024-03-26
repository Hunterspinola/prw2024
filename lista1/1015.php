<?php

    list($v1, $v2) = explode(" ", readline());
    list($v3, $v4) = explode(" ", readline());

    $d = (($v3 - $v1)**2 + ($v4 - $v2)**2) ** (1/2);
    $d = number_format($d, 4, ".", "");

    echo "$d\n";


?>