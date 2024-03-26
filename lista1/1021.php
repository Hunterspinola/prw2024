<?php

    function imprimirQuantidade($VA, $TIPO, $VU) {
    $Q = intval($VA / $VU);
    printf("%d %s(s) de R$ %.2f\n", $Q, $TIPO, $VU / 100);
    return $VA % $VU;
    }

    $VA = (float)readline();

    $CE = (int)($VA * 100);

    $NO = [10000, 5000, 2000, 1000, 500, 200];
    $MO = [100, 50, 25, 10, 5, 1];

    echo "NOTAS:\n";
    
    foreach ($NO as $N) {
    $CE = imprimirQuantidade($CE, "nota", $N);
    }

    echo "MOEDAS:\n";
    
    foreach ($MO as $M) {
    $CE = imprimirQuantidade($CE, "moeda", $M);
    }



?>