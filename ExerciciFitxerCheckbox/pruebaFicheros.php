<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
</head>
<body>

    <?php

    $productos = file("productos.txt");
    foreach ($productos as $producto){
        echo $producto."<input type='checkbox'><br>";
    }

    ?>
    
</body>
</html>