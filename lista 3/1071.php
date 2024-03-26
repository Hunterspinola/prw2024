<?php

function isOdd($number) {
    return $number % 2 != 0;
}


function sumOddNumbers($x, $y) {
    $sum = 0;

    if ($x > $y) {
        $temp = $x;
        $x = $y;
        $y = $temp;
    }
   
    for ($i = $x + 1; $i < $y; $i++) {
        if (isOdd($i)) {
            $sum += $i;
        }
    }
    return $sum;
}


$x = intval(readline());
$y = intval(readline());


$sum = sumOddNumbers($x, $y);


echo "$sum\n";

?>