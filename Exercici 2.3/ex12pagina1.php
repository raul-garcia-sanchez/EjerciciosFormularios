<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selectors</title>
</head>

<?php
    if (isset($_GET['skinfile'])){
        if ($_GET['skinfile'] == "vermell"){
            echo "<body style='background-color:red'>";
        }
        else if ($_GET['skinfile'] == "blau"){
            echo "<body style='background-color:blue'>";
        }
        else if ($_GET['skinfile'] == "verd"){
            echo "<body style='background-color:green'>";
        }
        else{
            echo "<body>";
        }
    }
    ?>

<form>

	<select name="skinfile">
		<option <?php if (isset($_GET['skinfile'])) if($_GET['skinfile'] == 'vermell') echo 'selected'?> value="vermell">VERMELL</option>
		<option <?php if (isset($_GET['skinfile'])) if($_GET['skinfile'] == 'blau') echo 'selected'?> value="blau">BLAU</option>
		<option <?php if (isset($_GET['skinfile'])) if($_GET['skinfile'] == 'verd') echo 'selected'?> value="verd">VERD</option>
    </select>
	<br/>
	<input type="submit" />
</form>

    
    
</body>
</html>