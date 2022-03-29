
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h3>Ajout Produit :</h3>

<form action="" method="post">
    <p>Saisir le nom du produit<p>
    <input type="text" name="nom_produit">
    <p>Saisr le contenu du produit:<p>
    <textarea name="contenu_produit" cols="30" rows="10">
    </textarea>
    <br><br>
    <input type="submit" value="Modifier">
</form>
<?php
    include 'ConnectBdd.php';
    include  'fonction.php';
    if(isset($_GET['id'])AND $_GET['$id'] !=""){
        $id= $_GET['id'];
        if(isset($_POST['nom_produit']) AND isset($_POST['contenu_produit'])
        AND $_POST['nom_produit'] != "" AND $_POST['contenu_produit'] != ""){
            $nom = $_POST['nom_produit'];
            $content = $_POST['contenu_produit'];
        updateProduit($bdd,$nom,$content,$value);
        echo "<p>$nom à été modifié en BDD</p>";
    }
    //test si les champs du formulaire ne sont pas remplis
    else{
        echo '<p>Veuillez remplir les champs du  formulaire</p>';
    }
}
//test si l'id n'existe pas 
else{
    header('Location: showProduit.php');
}

?>
</body>
</html>