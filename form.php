<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get" action="">
        <p>Saisir chiffre 1 : <p>
        <input type="text" name="nbr1">
        <p>Saisir chiffre 2 :<p>
        <input type="text" name="nbr2">
        <br>
        <br>
        <input type="submit" value="Envoyer">
</form>

<!-- Exo GET -->
<?php
if(isset($_GET['Nom']) AND isset($_GET['Prenom']) 
AND $_GET['Nom'] != "" AND $_GET['Prenom'] != ""){
    $nom = $_GET['Nom'];
    $prenom = $_GET['Prenom'];
    echo "Mon nom est: $nom<br>";
}
else{
    echo " Veuillez remplir les champs du formulaire";
}

// --------Exo2 GET--------

if(isset($_GET['nbr1']) AND isset($_GET['nbr2']) 
    AND $_GET['nbr1'] != "" AND $_GET['nbr2'] != ""){
        $nbr1 = $_GET['nbr1'];
        $nbr2 = $_GET['nbr2'];
        $total = $nbr1 + $nbr2;
        echo "la somme des deux chiffre est de : $total";
    }
else{   
    echo " Veuillez remplir les champs du formulaire";
}





    ?>
<body>
</html>