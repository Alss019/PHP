<?php
include './utils/bddconnect.php';
$cpt;
try
{
    $reponse = $bdd->query('SELECT cpt_nbr FROM nbr WHERE id_nbr = 1');
    while ($donnees = $reponse->fetch())
    {   
        $cpt = $donnees['cpt_nbr'];                    
    }
}
catch(Exception $e)
{   
    die('Erreur : '.$e->getMessage());
}   
if(isset($_FILES['file'])){
    $tmpName = $_FILES['file']['tmp_name'];
    $name = $_FILES['file']['name'];
    $size = $_FILES['file']['size'];
    $error = $_FILES['file']['error'];
    $ext = get_file_extension($name);
    $nameFile = "image$cpt.$ext";
    $fichier = move_uploaded_file($tmpName, "./image/$nameFile");
    $cpt++;
    try
    {   
        $req = $bdd->prepare('UPDATE nbr SET cpt_nbr = :cpt WHERE id_nbr = 1');
        $req->execute(array(
            'cpt' => $cpt,
        ));
    }
    catch(Exception $e)
    {  
        die('Erreur : '.$e->getMessage());
    }
    try
    {   
        $req = $bdd->prepare('INSERT INTO image(nom_img, url_img) 
        VALUES (:nom_img, :url_img)');
        $req->execute(array(
        'nom_img' => $nameFile,
        'url_img' => "/image/$nameFile",
    ));
    }
    catch(Exception $e)
    {   
        die('Erreur : '.$e->getMessage());
    }        
}

function get_file_extension($file) {
    return substr(strrchr($file,'.'),1);
}
?>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>
<form action="index.php" method="POST" enctype="multipart/form-data">
    <h2>importer une image</h2>
    <input type="file" name="file">
    <p><button type="submit">importer</button></p>
</form>
</html>