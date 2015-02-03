<?php

function calcul($a) {
    $a += 3;
    $a *= 5;
    $a -= 9;

    return $a;
}

function addition($a, $b) {
    return $a+$b;
}

function subtraction($a, $b) {
    return $a-$b;
}

//echo calcul(9);

echo subtraction(8, 45);
