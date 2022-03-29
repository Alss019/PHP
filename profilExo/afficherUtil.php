<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Afficher Utilisateur</title>
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
        <h1 class="fw-light">Liste des utilisateurs</h1>
      </div>
    </div>
  </div>
</header>
    <h3>Liste des Utilisateurs :</h3>
    <a type="button" class="btn btn-primary btn-block m-5" href=deleteUser.php>Supprimer</a>
    <form action="" method="post">
    
    <div class="d-flex">
    <?php

        include 'connectBDD.php';
        include 'Fonction.php';
        showAllUtil($bdd);
    ?>
    </div>
    </form>
</body>
</html>