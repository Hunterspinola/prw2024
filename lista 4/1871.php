<?php

    function removeZeros($num) {
        return (int) str_replace('0', '', $num);
    }
    
    while (true) {
     
        list($M, $N) = explode(" ", trim(fgets(STDIN)));

        if ($M == 0 && $N == 0) {
            break;
        }
        
        $soma = removeZeros($M) + removeZeros($N);
        
        echo removeZeros($soma) . "\n";
    }


?>