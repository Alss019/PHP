<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ajout</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="./asset/style/style.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-danger">
    <div class="container-fluid">
      <a class="navbar-brand text-light" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link text-light" aria-current="page" href="../util/ctrl_index.php">Ajout</a>
          <a class="nav-link text-light" href="../util/ctrl_view_all_user.php">Liste Utilisateurs</a>
        </div>
      </div>
    </div>
  </nav>
  <div class="container">
    <br>
    <h1>Modifier utilisateurs</h1>
    <br>
    <form method="post" action="">
      <div class="mb-3">
        <p>Saisir le nom :</p>
        <input type="text" class="form-control mx-3" name="nom_util">
      </div>
      <div>
        <p>Saisir le prenom :</p>
        <input type="text" class="form-control mx-3" name="prenom_util">
      </div>
      <div>
        <p>Saisir le mail :</p>
        <input type="email" class="form-control mx-3" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" 
        name="mail_util" required>
      </div>
      <div>
        <p>Saisir le mot de passe :</p>
        <input type="password" class="form-control mx-3" name="mdp_util">
      </div>
      <p><input type="submit" class="btn btn-primary m-3" name="valider" value="Modifier"></p>
    </form>
  </div>
</body>

</html>