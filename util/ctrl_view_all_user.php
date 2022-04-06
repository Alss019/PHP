<?php
    include './utils/connectBdd.php';
    include './model/model_user.php';
    include './view/view_show_all_user.php';
    
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
        <span><a href="ctrl_update_user.php?id='.$data['id_util'].'">🖍</a></span>
        </li>';
            }
    echo "</ul>";
    '</form>';
        }
?>