<?php

include './utils/connectBdd.php';
include './model/model_user.php';
include './view/view_show_all_user.php';

if(isset($_POST['id_util'])){
    foreach($_POST['id_util'] as $value){
        deleteProduit($bdd, $value);
        echo "<p>Suppression de $value</p>";
    }
    header('Location:ctrl_view_all_user.php');
}
else{
    echo "<p style=text-align:center;>Veuillez cocher un ou plusieurs produit à supprimer</p>";
}
?>