<?php

    if ($_POST['inputPass1'] == $_POST['inputPass2']){
        $haveNum = false;
        for($i = 0; $i < strlen($_POST['inputPass1']); $i++){
            if (is_numeric($_POST['inputPass1'][$i]) == true){
                $haveNum = true;
            }
        }
        if ($haveNum == true){
            echo "CORRECT!";
        }
        else{
            echo "ERROR: les contrasenyes han de tenir al menys un numero";
        }
    }
    else{
        echo "ERROR: les contrasenyes han de coincidir";
    }

?>