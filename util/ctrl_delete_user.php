<?php

include './utils/connectBdd.php';
include './model/model_user.php';
include './view/view_delete_user.php';



$nom = 
$list = showAllUsers($bdd);
if(count($list) ==0){
    echo "<p>Il y a aucune données dans la BDD</p>";
}
else{
foreach ($list as $data) {
    echo 
    '<li class="li_grid list-group-item">
    <span>'.$data['prenom_util'].'</span>
    <span>'.$data['nom_util'].'</span>
    <span>'.$data['mail_util'].'</span>
    <span><input type="checkbox" name="id_util[]" value="'.$data['id_util'].'"></span>
    </li>';
    }
echo "</ul>";
echo "<br><input type='submit' class='btn btn-danger' value='Supprimer'>";

if(isset($_GET['error'])){
    echo "<p>Veuillez sélectionner un Utilisateur ou plusieur</p>";
}
if(isset($_POST['id_util'])){
    foreach($_POST['id_util'] as $value){
        $nom  = 
        deleteUser($bdd, $value);
        echo '<p>Suppression de $value</p>';
    }
    echo'<script>setTimeout(()=>{
        document.location.href="ctrl_delete_user.php"
    }, 3000);</script>';

}
else{
    echo "<p style=text-align:center;>Veuillez cocher un ou plusieurs produit à supprimer</p>";
}
}
?>