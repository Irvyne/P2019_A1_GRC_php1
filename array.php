<?php

//print_r($_SERVER);
//var_dump($_SERVER);

$articles = [
    [
        'title'   => 'Mon titre',
        'content' => 'zre zezefth d',
        'enabled' => true,
    ],
    [
        'title'   => 'title ef',
        'content' => 'efjkn',
        'enabled' => true,
    ],
];

foreach ($articles as $article) {
    if (true === $article['enabled']) {
        echo '<h1>'.$article['title'].'</h1>';
        echo '<p>'.$article['content'].'</p>';
    }
}

//var_dump($articles);