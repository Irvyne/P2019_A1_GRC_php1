<?php

$name = 'Kenny';

if (isset($_GET['dead']) && $_GET['dead'] === 'true') {
    $dead = true;
} else {
    $dead = false;
}

$falseString  = "";
$falseInteger = 0;
$falseBoolean = false;
$falseArray   = [];
$falseObject  = new StdClass();

if (true === $dead) {
    echo "$name is dead. U bastard";
} elseif (false === $dead) {
    echo "$name is alive";
} else {
    echo "type is not a boolean";
}

// boolean == string

/*
0 => "0"
0 => ""

4 => "4"

true  => 1
false => 0

"ezfze" => true

// =   Assignation
// ==  Test de valeur
// === Test de type puis valeur
*/