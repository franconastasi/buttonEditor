<?php 


//$_source = (isset($_GET['source']) ? $_GET['source'] : "www.ign.gob.ar/sites/default/files/logo2012blanco.png");
$_source = $_GET['source'];
$_width =  isset($_GET['alto']) ? $_GET['alto'] : "";
$_height = isset($_GET['ancho']) ? $_GET['ancho'] : "";
$_bacground_color = isset($_GET['colorFondo']) ? $_GET['colorFondo'] : "";

$_str = (isset($_GET['texto']) ? $_GET['texto'] : "");
$_str_size = isset($_GET['tamaño']) ? $_GET['tamaño']: "";

$_str_font = (isset($_GET['fuente'])? $_GET['fuente'] : "");
//$_str_font = $_GET['fuente'];
$_str_posX = (isset($_GET['posX']) ? $_GET['posX'] : "");
$_str_posY = (isset($_GET['posY']) ? $_GET['posY'] : "");
$_str_color = (isset($_GET['color']) ? $_GET['color'] : "");

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

<style type="text/css">
	#mainForm{
		position: absolute;
		left: 25%;
		width: 50%;
		
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
<img src='button.php?src=" . $_source . "&s=".  $_bacground_color . "|" .$_width . "|" . $_height ."&" .
"stext=" . $_str .  "|" .  $_str_font . "|" . $_str_size ."|" . $_str_posX . "|" . $_str_posY . "|" . $_str_color .  "'>
</p>

";


echo "
<form id= \"mainForm\" action=\"/gdTest/action_page.php\">
  <fieldset>
    <legend>Personal information:</legend>
    Origen:<br>
    <input id=\"org\" type=\"text\" name=\"source\" value= $_source>
    <br><br>

	<fieldset>
	    <legend>Tamaño de la imagen:</legend>
		    <table style=\"width:100%\">
	    	<tr>
	    		<th>
	    			Nuevo Ancho:<br>
	 				<input type=\"text\" name=\"alto\">
	    		</th>

	    		<th>
	    			Nuevo Alto:<br>
	    			<input type=\"text\" name=\"ancho\">

	    		</th>

	    		<th>
	    			Color de dfondo:<br>
	   				<input type=\"text\" name=\"colorFondo\">
	    		</th>
	    	</tr>
	    </table>
	</fieldset>

	<br><br>
	<fieldset>
		<legend>Texto en la imagen:</legend>
		<div>
			<table style=\"width:100%\">
				<tr>
					<th>
						Texto:<br>
						<input type=\"text\" name=\"texto\">
					</th>
					<th>
						Tamaño:<br>
						<input type=\"text\" name=\"tamaño\">
					</th>
				</tr>

				<tr>
					<th>
						Color: <br>
						<input type=\"text\" name=\"color\">
					</th>

					<th>
						Fuente:<br>
						<input type=\"text\" name=\"fuente\">	
					</th>
				</tr>

				<tr>
					<th>
						Posición X:<br>
						<input type=\"text\" name=\"posX\"> 
					</th>

					<th>
						Posición Y:<br>
						<input type=\"text\" name=\"posY\">		
					</th>
				</tr>
			</table>
	 </fieldset>

    <br><br>
    <input type=\"submit\" value=\"Submit\">
  </fieldset>
</form>
";


?>


</body>
</html>