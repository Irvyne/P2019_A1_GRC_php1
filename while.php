<?php

$over = false;
$max  = 19;

while (!$over) {
    echo 'A';

    //....

    if ($max === mt_rand(10, 25)) {
        $over = true;
    }
}
