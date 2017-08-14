
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

<form id="mainForm" action="/gdTest/action_page.php">
  <fieldset>
    <legend>Personal information:</legend>
    Origen:<br>
    <input id="org" type="text" name="source" value="http://www.ign.gob.ar/sites/default/files/logo2012blanco.png">
    <br><br>
    Nuevo Ancho:<br>
    <input type="text" name="alto">
    <br><br>
    Nuevo Alto:<br>
    <input type="text" name="ancho">
    <br><br>

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
		Color: <br>
		<input type="text" name="color">
		<br>
	</div>

    <br><br>
    <input type="submit" value="Submit">
  </fieldset>
</form>

<!--
<img src='button.php?src=http://www.ign.gob.ar/2013/img/Mindef_curvas.png'>

<img src="button.php?src=http://www.ign.gob.ar/2013/img/Mindef_curvas.png&s=asdsad|asdas|960|198&stext=Drakaris|./OpenSans-BoldItalic.ttf|20|10|20">

<img src="button.php?s=asdsad|asdas|800|600&stext=Hello World|./OpenSans-BoldItalic.ttf|30|100|200">

<img src="button.php?">
<img src="button.php?src=logo2012blanco.png">

-->

</body>
</html>