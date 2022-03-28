<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afficher la  liste des produits</title>
</head>
<body>
    <ul>
        <li><a href="ajoutProduit.php">ajout produit</a></li>
    </ul>
    <form action="" method="post">
    <?php

        include 'ConnectBdd.php';
        include  'fonction.php';
        showAllProduit($bdd);
    ?>
    <input type="submit" value="Supprimer">
    </form>
    <?php

    if(isset($_POST['id_prod'])){
        foreach($_POST['id_prod'] as $value){
            deleteProduit($bdd,$value);
        }
    }
    else{
        echo "<p>Veuillez cochez un ou plusieurs produits a supprimer</p>";
    }
    ?>

</body>
</html>