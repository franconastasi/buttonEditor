
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
    <input id="org" type="text" name="source" value="www.ign.gob.ar/2013/img/Mindef_curvas.png">
    <br><br>
    Nuevo Alto:<br>
    <input type="text" name="alto">
    <br><br>
    Nuevo ancho:<br>
    <input type="text" name="ancho">
    <br>
	<div>
		
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