<?php

require 'function/database.fn.php';

$config = [
    'hostname' => 'localhost',
    'username' => 'root',
    'password' => 'toor', // WAMP => '' | MAMP => 'root'
    'port'     => null, // WAMP => null | MAMP => 8889
    'dbname'   => 'p2019_grc_php1',
];

$link = database_connect($config);

// SELECT | INSERT | UPDATE | DELETE
$sql = 'SELECT * FROM pokemon';

$query = mysqli_query($link, $sql);

$pokemons = mysqli_fetch_all($query, MYSQLI_ASSOC);

foreach ($pokemons as $pokemon) {
    //var_dump($pokemon);
    echo '<h1>'.$pokemon['name'].'</h1>';
    // TODO Afficher nom du pok dans un <h1>
    echo '<h2>'.$pokemon['hp'].'HP</h2>';
    // TODO Afficher hp du pok dans un <h2>
}

/*
while (null !== $result = mysqli_fetch_assoc($query)) {
    var_dump($result);
}
*/
