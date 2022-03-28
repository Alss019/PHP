<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <p> Saisir un nombre</p>
        <input type="text" name="nbr1">
        <p> Saisir un nombre</p>
        <input type="text" name="nbr2">
        <p>Saisir un Opérateur (+,-,*,/) :</p>
        <input type="text" name="operateur">
        <p><input type="submit" value="Calculer"></p>
    </form>
<?php
    if(isset($_POST['nbr1'])
    AND isset($_POST['nbr2']) 
    AND isset($_POST['operateur'])
    AND $_POST['nbr1'] != "" 
    AND $_POST['nbr2'] != "" 
    AND $_POST['operateur'] != "" ){
    $nbr1=$_POST['nbr1'];
    $nbr2=$_POST['nbr2'];
    $operateur=$_POST['operateur'];

    switch ($operateur){
        case "+":
            $resultat = round ($nbr1 + $nbr2, 2);
            echo " $nbr1 + $nbr2 = $resultat";
            break;
        case "-":
            $resultat = round($nbr1 - $nbr2,2);
            echo " $nbr1 - $nbr2 = $resultat";
            break;
        case "*":
            $resultat = round ($nbr1 * $nbr2, 2);
            echo " $nbr1 * $nbr2 = $resultat";
            break;
        case "/":
            $resultat = round($nbr1 / $nbr2 ,2);
            echo " $nbr1 / $nbr2 = $resultat";
            break;
        }
    }

?>
<!-- header('location : index.php'); -->
</body>
</html>