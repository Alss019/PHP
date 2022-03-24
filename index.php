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
    echo $total;
    echo '<br>';

// Exo2
    $a = 5;
    $b = 3;
    $c = $a + $b;
    echo '<br>';
    echo $a,$b,$c;
    echo '<br>';
    $a = 2;
    echo $a;
    $c= $b-$a;
    echo '<br>';
    echo $a,$b,$c;
    echo '<br>';

// Exo 3
    $a = 15;
    $b = 23;
    echo $a,$b;
    [$a, $b] = [$b, $a];
    echo'<br>';
    echo $a,$b;

// Exo 4
    echo'<br>';
    $a=15;
    $b=23;
    $c=$a;
    $a=$b;
    $b=$c;
    echo "$a<br>";
    echo "$b<br>";
    

// -----------------FONCTION----------------


// Exo 5
    function prixTTC($prixHT,$nbr,$tva){
        $totalTTC = $prixHT * $nbr;
        $totalTTC = ($totalTTC +($totalTTC * $tva/100));
        return "le prix TTC est de : $totalTTC €";
    };
    echo prixTTC(10,2,20);

// Exo 6
    function testNbr($nbr){
        if($nbr > 0){
            echo " le nombre $nbr est positif";
        }
        else if ($nbr == 0){
            echo "Le Nombre $nbr est null";
        }
        else{
            echo "le Nombre $nbr est negatif";
        }
    };
    echo '<br>';
    testNbr(23);
    echo '<br>';
    testNbr(-23);
    echo '<br>';
    testNbr(0);

// Exo 7
    function nbr($a,$b,$c){
        if($a > $b and $a > $b){
            echo "le chiffre le plus grand est : $a";
        }
        else if($b > $a and $b > $c){
            echo "le chiffre le plus grand est : $b";
        }
        else{
            echo "le chiffre le plus grand est : $c";
        }
    }
    echo '<br>';
    echo '<br>';
    echo nbr(10,20,34);

// Exo 8
function nbr1($a,$b,$c){
    if($a < $b and $a < $b){
        echo "le chiffre le plus petit est : $a";
    }
    else if($b < $a and $b < $c){
        echo "le chiffre le plus petit est : $b";
    }
    else{
        echo "le chiffre le plus petit est : $c";
    }
}
echo "<br>" ;
echo nbr1(10,20,34);

// Exo 9

function cat($age){
    if($age >= 6 and $age <= 7){
        echo "Poussin";
    }
    else if ($age >= 8 and $age <= 9){
        echo "Pupille";
    }
    else if ($age >= 10 and $age <= 11){
        echo "Minime";
    }
    else{
        echo "Cadet";
    }
}
echo '<br>';
echo cat(17);
?>
</body>
</html>