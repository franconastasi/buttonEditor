<?php 



//$_source = (isset($_GET['source']) ? $_GET['source'] : "www.ign.gob.ar/sites/default/files/logo2012blanco.png");
$_source = "";
$__source = $_GET['source'];

$checked_b1 = "";
$checked_b2 = "";
$checked_b3 = "";
$checked_b4 = "";



switch ($__source) {
	case 'b1':
		$_source = './buttons_PNG68.png';
		$checked_b1 = "checked";
		break;
	case 'b2':
		$_source = './buttons_PNG153.png';
		$checked_b2 = "checked";
		break;
	case 'b3':
		$_source = './button-24843_640.png';
		$checked_b3 = "checked";
		break;
	case 'b4':
		$_source = './pill_button_blank_yellow.png';
		$checked_b4 = "checked";
		break;
	case 'otro':
		$_source = isset($_GET["source_other"]) ? $_GET["source_other"] :"";
		$checked_bOther = "checked";
		break;
	default:
		$_source = "";
		break;
}

$_width =  isset($_GET['ancho']) ? $_GET['ancho'] : "";
$_height = isset($_GET['alto']) ? $_GET['alto'] : "";
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


<script>
function ShowHideDiv() {
    var chkYes = document.getElementById("chkYes");
    var dvtext = document.getElementById("dvtext");
    dvtext.style.display = chkYes.checked ? "block" : "none";
}
</script>

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
    <input type=\"radio\" name=\"source\" value=\"b1\" onclick=\"ShowHideDiv()\" ". $checked_b1 . "> Botón 1<br>
	 <input type=\"radio\" name=\"source\" value=\"b2\" onclick=\"ShowHideDiv()\" " .$checked_b2 . "> Botón 2<br>
	 <input type=\"radio\" name=\"source\" value=\"b3\" onclick=\"ShowHideDiv()\" " .$checked_b3 . "> Botón 3<br>
	 <input type=\"radio\" name=\"source\" value=\"b4\" onclick=\"ShowHideDiv()\" " .$checked_b4 . "> Botón 4<br>
	 <input id=\"chkYes\" type=\"radio\" name=\"source\" value=\"otro\" onclick=\"ShowHideDiv()\"" . $checked_bOther. "> otro
	 <input id=\"dvtext\" style=\"display: none; width:70% \" type =\"text\" name=\"source_other\"><br>
	 <br>

	<fieldset>
	    <legend>Tamaño de la imagen:</legend>
		    <table style=\"width:100%\">
	    	<tr>
	    		<th>
	    			Nuevo Ancho:<br>
	 				<input type=\"number\" name=\"ancho\" value = ". $_width . " min >
	    		</th>

	    		<th>
	    			Nuevo Alto:<br>
	    			<input type=\"number\" name=\"alto\" value = ". $_height . ">

	    		</th>

	    		<th>
	    			Color de dfondo:<br>
	   				<input type=\"text\" name=\"colorFondo\" value = ". $_bacground_color . " >
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
						<input type=\"text\" name=\"texto\" value = ". $_str . ">
					</th>
					<th>
						Tamaño:<br>
						<input type=\"text\" name=\"tamaño\" value = ". $_str_size . ">
					</th>
				</tr>

				<tr>
					<th>
						Color: <br>
						<input type=\"text\" name=\"color\" value = ". $_str_color . ">
					</th>

					<th>
						Fuente:<br>
						<input type=\"text\" name=\"fuente\" value = ". $_str_font . ">	
					</th>
				</tr>

				<tr>
					<th>
						Posición X:<br>
						<input type=\"number\" name=\"posX\" value = ". $_str_posX . ">
					</th>

					<th>
						Posición Y:<br>
						<input type=\"text\" name=\"posY\" value = ". $_str_posY . " >
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