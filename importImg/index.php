<?php
include './utils/bddconnect.php';
include './utils/function.php';
include './view/view_form.php';
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

if(isset($_FILES['file']) AND $_FILES['file']['name'] != ''){
    $tmpName = $_FILES['file']['tmp_name'];
    $name = $_FILES['file']['name'];
    $ext = get_file_extension($name);
    $nameFile = "image$cpt.$ext";
    $fichier = move_uploaded_file($tmpName, "./image/$nameFile");
    $cpt++;
    

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
}
?>