
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
     <input type="radio" name="source" value="b1" checked> Botón 1<br>
	 <input type="radio" name="source" value="b2"> Botón 2<br>
	 <input type="radio" name="source" value="b3"> Botón 3<br>
	 <input type="radio" name="source" value="b4"> Botón 4<br>
	 <input type="radio" name="source" value="otro"> otro
	 <br>

    
    
    <fieldset>
	    <legend>Tamaño de la imagen:</legend>
	    <table style="width:100%">
	    	<tr>
	    		<th>
	    			Nuevo Ancho:<br>
	 				<input type="text" name="alto">
	    		</th>

	    		<th>
	    			Nuevo Alto:<br>
	    			<input type="text" name="ancho">

	    		</th>

	    		<th>
	    			Color de dfondo:<br>
	   				<input type="text" name="colorFondo">
	    		</th>
	    	</tr>
	    	
	    </table>		
	</fieldset>

	<br><br>

    <fieldset>
    	<legend>Texto en la imagen:</legend>
		<div>
			<table style="width:100%">
				<tr>
					<th>
						Texto:<br>
						<input type="text" name="texto">
					</th>
					<th>
						Tamaño:<br>
						<input type="text" name="tamaño">
					</th>
				</tr>

				<tr>
					<th>
						Color: <br>
						<input type="text" name="color">
					</th>

					<th>
						Fuente:<br>
						<input type="text" name="fuente">	
					</th>
				</tr>

				<tr>
					<th>
						Posición X:<br>
						<input type="text" name="posX"> 
					</th>

					<th>
						Posición Y:<br>
						<input type="text" name="posY">		
					</th>
				</tr>
			</table>
			</div>
	</fieldset>

    <br><br>
    <input type="submit" value="Submit">
  </fieldset>
</form>

</body>
</html>