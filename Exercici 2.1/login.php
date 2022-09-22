<?php

$users = [
    ["raulG","1234"],
    ["ivanG","3451"],
    ["xavI","Rg77"],
    ["IkeR","RekI"],
];

foreach($users as $user){
    if ($_POST['inputUser'] == $user[0] && $_POST['inputPass'] == $user[1]){
        echo "Login correcte!";
        break;
    }
    else{
        if ($_POST['inputUser'] == $user[0] && $_POST['inputPass'] != $user[1]){
            echo "Contrasenya incorrecte!";
            break;
        }
        else if ($_POST['inputUser'] != $user[0] && $_POST['inputPass'] == $user[1]){
            echo "Usuari incorrecte!";
            break;
        }
        else{
            echo "Login incorrecte!";
            break;
        }
    }
}


?>