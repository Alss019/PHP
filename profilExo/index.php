<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Ajouter Utilisateur</title>
</head>
<body>
<header class="masthead">
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow fixed-top">
  <div class="container">
  <a class="navbar-brand" href="#">Profil Utilisateur</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item active">
        <a class="nav-link" href="index.php">Ajouter</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="modifUtil.php">Modifier</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="afficherUtil.php">Afficher</a>
        </li>
      </ul>
    </div>
  </div>
</nav
  <div class="container h-100">
    <div class="row h-100 align-items-center">
      <div class="col-12 text-center">
        <h1 class="fw-light">Ajouter un utilisateur</h1>
      </div>
    </div>
  </div>
</header>
<div class="container">
<form action="index.php" method="POST" enctype="multipart/form-data"  style="margin-top: 30px;" >

    <div class="form-outline mb-4">
    <label class="form-label">Nom</label>
    <input type="text" class="form-control" name="nom_util"/>
    </div>

    <div class="form-outline mb-4">
    <label class="form-label">Prénom</label>
    <input type="text" class="form-control" name="prenom_util"/>
    </div>

    <div class="form-outline mb-4">
    <label class="form-label">Email</label>
    <input type="email" class="form-control" name="mail_util"/>
    </div>

    <div class="form-outline mb-4">
    <label class="form-label">Mot de Passe</label>
    <input type="password" class="form-control" name="mdp_util"/>
    </div>

    <div class="form-outline mb-4">
    <label class="form-label">Photo de Profil</label>
    <input type="file" class="form-control" name="img_util"/>
    </div>

        <button type="submit" class="btn btn-primary btn-block" value="Ajouter" >Ajouter</button>
    <br>
    </form>
    </div>
<?php

        include 'connectBDD.php';
        include 'Fonction.php';

        if(isset($_POST['nom_util'])AND isset($_POST['prenom_util']) 
        AND isset($_POST['mail_util'])AND isset($_POST['mdp_util']) AND isset($_FILES['img_util']) AND
        $_POST['nom_util'] !='' AND $_POST['prenom_util'] !='' AND 
        $_POST['mail_util'] !='' AND $_POST['mdp_util'] !='' AND $_FILES['img_util'] !=''){
            
          $nomUtil = $_POST['nom_util'];
            $prenomUtil = $_POST['prenom_util'];
            $mailUtil = $_POST['mail_util'];
            $mdpUtil = $_POST['mdp_util'];
            $mdpUtil = md5($_POST['mdp_util']);
            $tmpName = $_FILES['img_util']['tmp_name'];
            $name = $_FILES['img_util']['name'];
            $img = "./image/$name";
            move_uploaded_file($tmpName, $img);
            addUtil($bdd,$nomUtil, $prenomUtil, $mailUtil, $mdpUtil, $img);
            echo '<br><div class="alert alert-success container" style="text-align:center;"> Votre profil a été créer avec succès </div>';
        }
        else{
            echo '<br><div class="alert alert-danger container" style="text-align:center;"> Veuillez remplir les champs du  formulaire </div>';
        }
        
    ?>
</body>
</html>



<!-- $nomTemp = $_FILES['img_util']['tmp_name'];
    $nameFile = $_FILES['img_util']['name'];
            
            $fichier = move_uploaded_file($tmpName, "./image/$name"); -->