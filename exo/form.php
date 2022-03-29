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

<!-- Exo GET -->

    <form method="get" action="">
        <p>Saisir chiffre 1 : <p>
        <input type="text" name="nbr1">
        <p>Saisir chiffre 2 :<p>
        <input type="text" name="nbr2">
        <br>
        <br>
        <input type="submit" value="Envoyer">
        </form>


<!-- // --------Exo1 GET-------- -->
<!-- <?php
if(isset($_GET['Nom']) AND isset($_GET['Prenom']) 
AND $_GET['Nom'] != "" AND $_GET['Prenom'] != ""){
    $nom = $_GET['Nom'];
    $prenom = $_GET['Prenom'];
    echo "Mon nom est: $nom<br>";
}
else{
    echo " Veuillez remplir les champs du formulaire";
}
?> -->


<!-- // --------Exo2 GET-------- -->
<?php
if(isset($_GET['nbr1']) AND isset($_GET['nbr2']) 
    AND $_GET['nbr1'] != "" AND $_GET['nbr2'] != ""){
        $nbr1 = $_GET['nbr1'];
        $nbr2 = $_GET['nbr2'];
        $total = $nbr1 + $nbr2;
        echo "la somme des deux chiffre est de : $total <br>";
    }
else{   
    echo " Veuillez remplir les champs du formulaire";
}

?>

</form>


<!-- // --------Exo4 TVA-------- -->
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

        <?php
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
?>
</form>


       <!-------------------Exo 5 Liste Déroulante------------------- -->
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

        <?php
if (isset ($_POST['nom']) 
AND isset($_POST['genre'])
AND $_POST['nom'] != "" 
AND $_POST['genre'] != ""){
    $nom = $_POST['nom'];
    $genre = $_POST['genre'];
    switch ($genre){
        case 1:
            echo "<p>$nom est une Femme</p>";
            break;
        case 2:
            echo "<p>$nom est un Homme</p>";
            break;
        case 3:
            echo "<p>$nom est ni Homme ni Femme</p>";
            break;
    };
}
else{
    echo "<p>Veuillez remplir les champs du formulaires</p>";
}

?>
</form>

<!------------------- Exo 6 ------------------- -->

<h4>Cocher une ou plusieurs checkbox :</h4>
<!--Formulaire HTML-->
<form action="" method="post">
    <p><input type="checkbox" name="box[]" value="1"/>1</p>
    <p><input type="checkbox" name="box[]" value="2"/>2</p>
    <p><input type="checkbox" name="box[]" value="3"/>3</p>
    <p><input type="checkbox" name="box[]" value="4"/>4</p>
    <p><input type="checkbox" name="box[]" value="5"/>5</p>
    <p><input type="submit" value="Récupérer"></p>
</form>

<?php
    if(isset($_POST['box'])){
        foreach($_POST['box'] as $value){
            echo"<p>Id de la box: $value</p>";
        }
    }
    else{
        echo"<p>Veuillez cocher une ou plusieur checkbox</p>";
    }
?>
<body>
</html>