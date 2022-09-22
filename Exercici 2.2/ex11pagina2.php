<?php

    $limitQuantitat = $_POST['inputQuantitat'];
    for($i = 0; $i < $limitQuantitat; $i++){
        echo "<a href='./ex11pagina3.php?num=$i'> Comanda $i</a><br>";
    }
    
?>