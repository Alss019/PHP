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

<form method="post" action="">
        <p>prix HT: <p>
        <input type="text" name="prix">
        <p>nbr :<p>
        <input type="text" name="nbr">
        <p>tva:<p>
        <input type="text" name="tva">
        <br>
        <br>
        <input type="submit" value="Envoyer">
</form>

<form method="post" action="">
        <p>Saisir son nom : <p>
        <input type="text" name="nom">
        <p>Saisir son genre :<p>
        <select name="genre">
        <option value="1">
            Femme
        </option>
        <option value="2">
            Hommes
        </option>
        <option value="3">
            Autre
        </option> 
        </select>
        <br>
        <p><input type="submit" value="Afficher"><p>
</form>

<!-- Exo GET -->
<?php
if(isset($_GET['Nom']) AND isset($_GET['Prenom']) 
AND $_GET['Nom'] != "" AND $_GET['Prenom'] != ""){
    $nom = $_GET['Nom'];
    $prenom = $_GET['Prenom'];
    echo "Mon nom est: $nom<br>";
}
// else{
//     echo " Veuillez remplir les champs du formulaire";
// }

// --------Exo2 GET--------

if(isset($_GET['nbr1']) AND isset($_GET['nbr2']) 
    AND $_GET['nbr1'] != "" AND $_GET['nbr2'] != ""){
        $nbr1 = $_GET['nbr1'];
        $nbr2 = $_GET['nbr2'];
        $total = $nbr1 + $nbr2;
        echo "la somme des deux chiffre est de : $total <br>";
    }
// else{   
//     echo " Veuillez remplir les champs du formulaire";
// }


// --------------Exo 4 TVA-------------------

if(isset($_POST['prix']) AND isset($_POST['nbr']) AND isset($_POST['tva']) 
    AND $_POST['prix'] != "" AND $_POST['nbr'] != "" AND $_POST['tva'] != ""){
        $prix = $_POST['prix'];
        $nbr = $_POST['nbr'];
        $tva = $_POST['tva'];
        $totalHT = $prix * $nbr;
        $prixTTC = round ($totalHT +($totalHT * $tva/100),2);
        echo "le prix TTC est de : $prixTTC €";
    }
else{   
    echo " Veuillez remplir les champs du formulaire <br>";
}

// -------------------Exo 5-------------------

if (isset ($_POST['nom']) 
AND isset($_POST['genre'])
AND $_POST['nom'] != "" 
AND $_POST['genre'] != ""){
    $nom = $_POST['nom'];
    $genre = $_POST['genre'];
    switch ($genre){
        case 1:
            ($genre = "Femmes");
            break;
        case 2:
            ($genre = "Hommes");
            break;
        case 3:
            ($genre = "Autres");
            break;
    }
    echo "Je m'appel $nom et je suis un(e) $genre";
}

    ?>
<body>
</html>