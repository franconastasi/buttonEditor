<?php 

$_source = $_GET['source'];
$_width =  $_GET['alto'] ;
$_height = $_GET['ancho'];



?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

<style type="text/css">
	#mainForm{
		position: absolute;
		left: 25%;
		width: 50%;
		top: 50%;
	}

	#org{
		width: 100%;
	}

</style>


</head>
<body >

<?php
echo "
<img src='button.php?src=http://" . $_source . "&s=asdsad|asdas|" .$_width . "|" . $_height ."&" .
"'>";
?>

<form id="mainForm" action="/gdTest/action_page.php">
  <fieldset>
    <legend>Personal information:</legend>
    Origen:<br>
    <input id="org" type="text" name="source" value="www.ign.gob.ar/2013/img/Mindef_curvas.png">
    <br><br>
    Nuevo Alto:<br>
    <input type="text" name="alto">
    <br><br>
    Nuevo ancho:<br>
    <input type="text" name="ancho">
    <br>

    <br><br>
    <input type="submit" value="Submit">
  </fieldset>
</form>


</body>
</html>