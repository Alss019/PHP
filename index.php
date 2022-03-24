<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- -----------------SYNTAXE---------------- -->

    <?php
    echo "hello world";
    echo '<br>';
    $int = 5;
    echo $int;
    echo '<br>';
    echo gettype($int);
    echo '<br>';
    $string = "Corentin";
    echo $string;
    echo '<br>';
    $bool = false;
    echo gettype($bool);
    echo'<br>';

// -----------------VARIABLES----------------


    // Exo 1
    $a = 12;
    $b= 10;
    $total = $a + $b;
    echo $total

    // Exo2
    $a = 5;
    $b = 3;
    $c = $a + $b;
    echo '<br>';
    echo $a,$b,$c;
    $a = 2;
    echo $a;
    $c= $b-$a;
    echo '<br>';
    echo $a,$b,$c;

    // Exo 3
    $a = 15;
    $b = 23;
    echo $a,$b;
    [$a, $b] = [$b, $a];
    echo'<br>';
    echo $a,$b;

    // Exo 4
?>
</body>
</html>