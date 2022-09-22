<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selectors</title>
</head>
<body>
<form>

	<select name="skinfile">
		<option value="vermell">VERMELL</option>
		<option value="blau">BLAU</option>
		<option value="verd">VERD</option>
    </select>
	<br/>
	<input type="submit" />
</form>

    <?php
    if (isset($_GET['skinfile'])){
        if ($_GET['skinfile'] == "vermell"){
            echo "<body style='background-color:red'></body>";
        }
        else if ($_GET['skinfile'] == "blau"){
            echo "<body style='background-color:blue'></body>";
        }
        else if ($_GET['skinfile'] == "verd"){
            echo "<body style='background-color:green'></body>";
        }
    }
    
    ?>
    
</body>
</html>