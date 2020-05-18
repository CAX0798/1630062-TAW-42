<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Template</title>
</head>
<body>

<header>
<?php include_once("modulos/modulos.php"); ?>

</header>

<section>
	<h1>Carreras</h1>
	<form action="/action_page.php" class="was-validated" id="carrera_formulario">
		<div class="form-group">
			<label for="uname">Carrera:</label>
	    	<input type="text" class="form-control" id="nombre_carrera" placeholder="Nombre" name="nombre_carrera" required>
	    	<div class="valid-feedback">Valid.</div>
	    	<div class="invalid-feedback">Please fill out this field.</div>
	  	</div>
	  	<button type="submit" class="btn btn-primary">Submit</button>
	</form>
</section>


</body>
</html>