
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

<style type="text/css">
	#mainForm{
		position: absolute;
		left: 25%;
		width: 50%;
		top: 15%;
	}

	#org{
		width: 100%;
	}

</style>

</head>

<body >

<form id="mainForm" action="/gdTest/action_page.php">
  <fieldset>
    <legend>Personal information:</legend>
    Origen:<br>
    <input id="org" type="text" name="source" value="http://www.ign.gob.ar/sites/default/files/logo2012blanco.png">
    <br><br>
    
    <fieldset>
	    <legend>Tamaño de la imagen:</legend>
	    Nuevo Ancho:<br>
	    <input type="text" name="alto">
	    <br><br>
	    Nuevo Alto:<br>
	    <input type="text" name="ancho">
	    <br><br>
	    Color de dfondo:<br>
	    <input type="text" name="colorFondo">
	    <br><br>
		
	</fieldset>

	<br><br>

    <fieldset>
    	<legend>Texto en la imagen:</legend>
		<div>
			Texto:<br>
			<input type="text" name="texto">
			<br>
			Tamaño:<br>
			<input type="text" name="tamaño">
			<br>
			Fuente:<br>
			<input type="text" name="fuente">
			<br>
			Posición X:<br>
			<input type="text" name="posX"> 
			<br>
			Posición Y:<br>
			<input type="text" name="posY">
			<br>
			Color: <br>
			<input type="text" name="color">
			<br>
		</div>
	</fieldset>

    <br><br>
    <input type="submit" value="Submit">
  </fieldset>
</form>

</body>
</html>