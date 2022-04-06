<?php
    include './utils/connectBdd.php';
    include './model/model_user.php';
    include './view/view_add_user.php';
    
    if(isset($_POST["valider"])){

    if (isset($_POST['nom_util']) AND isset ($_POST['prenom_util']) 
    AND isset ($_POST['mail_util']) AND isset ($_POST['mdp_util']) AND
    $_POST['nom_util'] != '' AND $_POST['prenom_util'] != '' AND $_POST['mail_util'] != ''
    AND $_POST['mdp_util'] != ''){
        
        $nom = $_POST['nom_util'];
        $prenom = $_POST['prenom_util'];
        $mail = $_POST['mail_util'];
        $mdp = $_POST['mdp_util'];
        $mdp = md5($_POST['mdp_util']);
        adduser($bdd, $nom, $prenom, $mail, $mdp);
        echo'<div class="container">
        <div class="alert alert-success" style=text-align:center role="alert">
        '.$nom.' a été ajouter a la BDD
        </div>
        </div>';
    }
    else{
        echo'<div class="container">
        <div class="alert alert-warning" style=text-align:center role="alert">
        veuillez completer les champs du formulaire
        </div>
        </div>';
    }
}
?>