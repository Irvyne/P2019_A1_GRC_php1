<?php

$firstName = "Thibaud";
$age       = 20;
$world     = 'zefzefze';

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
    include 'test.php';

    $age += 3; // $age = $age+3;
    echo "Hello $firstName ur $age yo";
    //echo 'Hello '.$firstName.' ur '.$age.' yo';
?>
</body>
</html>
