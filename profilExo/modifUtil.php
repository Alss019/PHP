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
</nav>
  <div class="container h-100">
    <div class="row h-100 align-items-center">
      <div class="col-12 text-center">
        <h1 class="fw-light">Modifier un utilisateur</h1>
      </div>
    </div>
  </div>
</header>
<div class="container">
    <form method="post" action="" style="margin-top: 30px;">
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
    <input type="text" class="form-control" name="mail_util"/>
    </div>

    <div class="form-outline mb-4">
    <label class="form-label">Mot de Passe</label>
    <input type="text" class="form-control" name="mdp_util"/>
    </div>

        <button type="submit" class="btn btn-primary btn-block" value="Modifier" >Modifier</button>
    <br>
    </div>


    <?php

include 'connectBDD.php';
include 'Fonction.php';


        if(isset($_GET['id']) AND $_GET['id'] !=''){
        $value = $_GET['id'];


          if(isset($_POST['nom_util'])AND isset($_POST['prenom_util']) 
          AND isset($_POST['mail_util'])AND isset($_POST['mdp_util']) AND
          $_POST['nom_util'] != "" AND $_POST['prenom_util'] !="" AND 
          $_POST['mail_util'] != "" AND $_POST['mdp_util'] !=""){
              $nom = $_POST['nom_util'];
              $prenom = $_POST['prenom_util'];
              $mail = $_POST['mail_util'];
              $mdp = $_POST['mdp_util'];

              updateUtil($bdd, $nom, $prenom, $mail, $mdp, $value);
              echo "<p>Votre profil a été modifier<p>";
          }
        
          else{
              echo '<p style="text-align:center">Veuillez remplir les champs du  formulaire<p>';
          }
        // }
        //   else{
        //     header('Location : afficherUtil.php?error');
        }
?>
    </form>
</body>
</html>