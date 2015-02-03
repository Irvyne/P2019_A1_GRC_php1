<?php

$types = [
    'fire' => [
        [
            'name' => 'Charizard',
            'hp'   => 250,
        ],
        [
            'name' => 'Salamander',
            'hp'   => 75,
        ],
    ],
    'water' => [
        [
            'name' => 'Blastoise',
            'hp'   => 500,
        ],
        [
            'name' => 'Squirtle',
            'hp'   => 99,
        ],
    ],
    'electric' => [
        [
            'name' => 'Pikachu',
            'hp'   => 999,
        ],
        [
            'name' => 'Raichu',
            'hp'   => 78,
        ],
    ],
    'plant' => [
        [
            'name' => 'Venusaur',
            'hp'   => 654,
        ],
        [
            'name' => 'Bulbasaur',
            'hp'   => 320
        ],
    ],
    'psy' => [],
];

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Pokemons</h1>
    <?php

    foreach ($types as $type => $pokemons) {
        echo '<h2>Type: '.$type.'</h2>';

        foreach ($pokemons as $pokemon) {
            echo '<article>';
                echo '<h1>'.$pokemon['name'].'</h1>';
                echo '<small>'.$pokemon['hp'].' HP </small>';
            echo '</article>';
        }
    }

    ?>
</body>
</html>