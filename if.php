<?php

$name = 'Kenny';
$dead = "ezfze";

$falseString  = "";
$falseInteger = 0;
$falseBoolean = false;
$falseArray   = [];
$falseObject  = new StdClass();

if (true === $dead) {
    echo "$name is dead. U bastard";
} else {
    echo "$name is alive";
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