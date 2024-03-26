<?php

    function eDeMalaSorte($numero) {
        $numero_str = strval($numero);
        
        if (strpos($numero_str, '13') !== false) {
            return true;
        }
        
        return false;
    }
    $N = trim(fgets(STDIN));

    if (eDeMalaSorte($N)) {
        echo "$N es de Mala Suerte\n";
    } else {
        echo "$N NO es de Mala Suerte\n";
    }

?>