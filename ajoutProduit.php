<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout Produit</title>
</head>
<body>

<ul>
        <li><a href="showProduit.php">show produit</a></li>
    </ul>

    <h1>Ajout Produit :</h1>

    <form action="" method="post">
    <p>Saisir le nom du produit<p>
        <input type="text" name="nom_produit">
    <p>Saisr le contenu du produit:<p>
        <textarea name="contenu_produit" cols="30" rows="10"></textarea><br><br>
        <input type="submit" value="Ajouter">
</form>

<?php
    include 'ConnectBdd.php';
    include  'fonction.php';

if(isset($_POST['nom_produit'])
    AND isset($_POST['contenu_produit'])
    AND $_POST['nom_produit'] != ""
    AND $_POST['contenu_produit'] != ""){
        $nom = $_POST['nom_produit'];
        $content = $_POST['contenu_produit'];
        insertProduit($bdd,$nom,$content);
        echo "$nom a été ajouter a la BDD";
    }
else{
    echo  "veuillez remplir le formulaire";
}
?>

</body>
</html>