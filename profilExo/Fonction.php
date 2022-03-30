<?php

function addUtil($bdd,$nom,$prenom,$mail,$mdp,$img){
        try{
            $req = $bdd->prepare('INSERT INTO utilisateur(nom_util,prenom_util,mail_util,mdp_util,img_util) 
            VALUES(:nomUtil, :prenomUtil, :mailUtil, :mdpUtil, :imgUtil)');
            $req->execute(array(
                'nomUtil' => $nom,
                'prenomUtil' =>$prenom,
                'mailUtil' => $mail,
                'mdpUtil' =>$mdp,
                'imgUtil' => $img,
                ));
        }
        catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }
    }

function showAllUtil($bdd){
    try{
        $req = $bdd->prepare('SELECT * FROM utilisateur');
        $req->execute();
        while ($data = $req->fetch()){
            $format = 
                '<div class="card m-3" style="width:18rem;">
                                <img src="%s" class="card-img-top h-50" alt="...">
                                <div class="card-body">
                                <h5 class="card-title">%s</h5>
                                <p class="card-text">%s</p>
                                <a href="modifUtil.php?id=%s" class="btn btn-primary w-50">Modifier</a>
                            </div>
                </div>';
            echo sprintf($format, $data["img_util"], $data["nom_util"], $data["prenom_util"], $data["id_util"], $data["id_util"]);
    }
}
catch(Exception $e){
    die('Erreur : '.$e->getMessage());
    }
}

function showUtil($bdd){
    try{
        $req = $bdd->prepare('SELECT * FROM utilisateur');
        $req->execute();
        while ($data = $req->fetch()){
            $id= $data['id_util'];
            $format = 
                '<li class="list-group-item"">
                    <input class="form-check-input me-1";" type="checkbox" name="id_util[]" value="'.$id.'"> %s %s %s</li>';

        echo sprintf($format, $data["nom_util"], $data["prenom_util"], $data["mail_util"]);
    }
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}
}


function deleteProduit($bdd, $value){
    try{
        $req = $bdd->prepare('DELETE FROM utilisateur WHERE id_util = :id_util');
        $req->execute(array(
            'id_util' => $value
            ));
    }
    catch(Exception $e)
    {
    die('Erreur : '.$e->getMessage());
    }
}

function updateUtil($bdd,$nom,$prenom,$mail,$mdp,$value){
    try{
        $req = $bdd->prepare('UPDATE utilisateur SET nom_util = :nom_util,
        prenom_util = :prenom_util, mail_util = :mail_util, mdp_util = :mdp_util
        WHERE id_util = :id_util');
        $req->execute(array(
                'id_util' =>$value,
                'nom_util' => $nom,
                'prenom_util' =>$prenom,
                'mail_util' => $mail,
                'mdp_util' =>$mdp,
            ));
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
}

?>