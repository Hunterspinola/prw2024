<?php

 list($c, $q) = explode(" ", readline());
    
    if($c == 1)
    {
        $t = $q * 4;
        $t = number_format($t, 2, ".", "");
        echo "Total: R$ $t\n";
    }
    
    else
        if($c == 2)
        {
            $t = $q * 4.50;
            $t = number_format($t, 2, ".", "");
            echo "Total: R$ $t\n";
        }
        else
            if($c == 3)
            {
                $t = $q * 5;
                $t = number_format($t, 2, ".", "");
                echo "Total: R$ $t\n";
            }
            else
                if($c == 4)
                {
                    $t = $q * 2;
                    $t = number_format($t, 2, ".", "");
                    echo "Total: R$ $t\n";
                }
                else
                     if($c == 5)
                    {
                        $t = $q * 1.50;
                        $t = number_format($t, 2, ".", "");
                        echo "Total: R$ $t\n";
                    }

?>