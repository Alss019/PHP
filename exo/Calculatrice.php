<?php
        if(isset($_POST['nbr1'])
        AND isset($_POST['nbr2']) 
        AND isset($_POST['operateur'])
        AND $_POST['nbr1'] != "" 
        AND $_POST['nbr2'] != "" 
        AND $_POST['operateur'] != "" 
        AND is_numeric($_POST['nbr1'])
        AND is_numeric($_POST['nbr2'])){
    
        $nbr1=$_POST['nbr1'];
        $nbr2=$_POST['nbr2'];
        $operateur=$_POST['operateur'];
    
        switch ($operateur){
            case "+":
                $resultat = round ($nbr1 + $nbr2, 2);
                echo " $nbr1 + $nbr2 = $resultat";
                break;
            case "-":
                $resultat = round($nbr1 - $nbr2,2);
                echo " $nbr1 - $nbr2 = $resultat";
                break;
            case "*":
                $resultat = round ($nbr1 * $nbr2, 2);
                echo " $nbr1 * $nbr2 = $resultat";
                break;
            case "/":
                $resultat = round($nbr1 / $nbr2 ,2);
                echo " $nbr1 / $nbr2 = $resultat";
                break;
            default:
            $resultat ="Mauvais opérateur";
            echo $resultat;
            break;
            }
        }
        else{
            echo  "Veuillez remplir les champs";
        }
?>