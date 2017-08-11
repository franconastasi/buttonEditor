<?php 


$_source = (isset($_GET['source']) ? $_GET['source'] : "");
//$_source = $_GET['source'];
$_width =  isset($_GET['alto']) ? $_GET['alto'] : "";
$_height = isset($_GET['ancho']) ? $_GET['ancho'] : "";

$_str = (isset($_GET['texto']) ? $_GET['texto'] : "");
$_str_size = isset($_GET['tamaño']) ? $_GET['tamaño']: "";

$_str_font = (isset($_GET['fuente'])? $_GET['fuente'] : "");
//$_str_font = $_GET['fuente'];
$_str_posX = (isset($_GET['posX']) ? $_GET['posX'] : "");
$_str_posY = (isset($_GET['posY']) ? $_GET['posY'] : "");

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
<p style='text-align: center;'>
<img src='button.php?src=http://" . $_source . "&s=asdsad|asdas|" .$_width . "|" . $_height ."&" .
"stext=" . $_str .  "|" . "./" . "$_str_font" . ".ttf" . "|" . $_str_size ."|" . $_str_posX . "|" . $_str_posY . "'>
</p>

";


echo "
<form id= \"mainForm\" action=\"/gdTest/action_page.php\">
  <fieldset>
    <legend>Personal information:</legend>
    Origen:<br>
    <input id=\"org\" type=\"text\" name=\"source\" value=\"www.ign.gob.ar/2013/img/Mindef_curvas.png\">
    <br><br>

	<fieldset>
	    <legend>Tamaño de la imagen:</legend>
		    Nuevo Ancho:<br>
		    <input type=\"text\" name=\"alto\" value=" . $_width .">
		    <br><br>
		    Nuevo Alto:<br>
		    <input type=\"text\" name=\"ancho\" value=" . $_height .">
	</fieldset>

	<br><br>
	<fieldset>
		<legend>Texto en la imagen:</legend>
		<div>
			Texto:<br>
			<input type=\"text\" name=\"texto\" value=" . $_str . ">
			<br>
			Tamaño:<br>
			<input type=\"text\" name=\"tamaño\" value=" . $_str_size .">
			<br>
			Fuente:<br>
			<input type=\"text\" name=\"fuente\" value=" . $_str_font .">
			<br>
			Posición X:<br>
			<input  type=\"text\" name=\"posX\" value=" . $_str_posX .">
			<br>
			Posición Y:<br>
			<input type=\"text\" name=\"posY\" value=" . $_str_posY ." >
			<br>
		</div>
	 </fieldset>

    <br><br>
    <input type=\"submit\" value=\"Submit\">
  </fieldset>
</form>
";


?>


</body>
</html>