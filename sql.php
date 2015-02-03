<?php

$config = [
    'hostname' => 'localhost',
    'username' => 'root',
    'password' => 'toor', // WAMP => '' | MAMP => 'root'
    'port'     => null, // WAMP => null | MAMP => 8889
    'dbname'   => 'p2019_grc_php1',
];

$link = mysqli_connect(
    $config['hostname'],
    $config['username'],
    $config['password'],
    $config['dbname'],
    $config['port']
) or die('Erreur');

