<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <ul>
        <li><a href="showProduit.php">Show Produit</a></li>
            <li><a href="index.php">Index</a></li>
            <li><a href="form.php">Form</a></li>
        </ul>
    </header>
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
    echo'<br>';

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
    echo'<br>';

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
    echo'<br>';

// Exo 7
    function nbr($a,$b,$c){
        if($a > $b and $a > $b){
            return "le chiffre le plus grand est : $a";
        }
        else if($b > $a and $b > $c){
            return "le chiffre le plus grand est : $b";
        }
        else{
            return "le chiffre le plus grand est : $c";
        }
    }

    echo '<br>';
    echo nbr(10,20,34);
    echo'<br>';

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
echo'<br>';

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
echo'<br>';


function categorie($categorie){
    switch($categorie){
    case ($categorie >= 6 and $categorie <=7) :
            echo "poussin";
            break;

    case ($categorie >= 8 and $categorie <=9) : 
            echo " Pupille";
            break;

    case ($categorie >= 10 and  $categorie <=11) : 
            echo "Minime";
            break;

    case ($categorie >= 12): 
            echo "Cadet";
            break;
    default :
            echo "entre pas dans les categories";
            break;
    }
}
    categorie(11);

    echo'<br>';
    $i = 1;
    while ($i<6){
        echo $i;
        $i++;
        echo'<br>';
    }

function calcul($nbr){
for($i=0 ; $i < 11 ;$i++){
    echo $nbr++;
    echo'<br>';
    }
}
calcul(23);

$p = 23;
$m = $p + 10;
$i = 1;
echo'<br>';
while ($p<$m){
    echo $p;
    $p++;
    echo'<br>';
}


$tab = [];
for($i = 0; $i<10; $i++){
    $tab[$i] = $i;
    $tab[$i]++;
}
var_dump($tab);
echo '<br>';


$tab1 = [];
for($i = 0; $i<10; $i++){
    $tab1[$i] = $i;
    $tab1[$i] = random_int(10, 30);
}
var_dump($tab1);
echo '<br>';


$tab1 = [];
for($i = 0; $i<10; $i++){
    $tab1[$i] = $i;
    $tab1[$i] = rand (10,30);
}
var_dump($tab1);

echo '<br>';
echo '<br>';

$tableauBonus = array();
for ($i=0; $i <=10 ; $i++) { 
    $tableauBonus[$i] = random_int(10, 30);
}
var_dump($tableauBonus);


$tab6 = array(10,25,6,33, 58,1,49,110,12,13);
function getmaxArray($tab6){
    $max = 0;
    foreach($tab6 as $value){
        if($value > $max){
            $max=$value;
        }    
    }
    return $max;
}
echo getmaxArray($tab6);
    






?>
</body>
</html>