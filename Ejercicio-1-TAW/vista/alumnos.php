<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<head>
	<meta charset="UTF-8">
	<title>Template</title>
</head>
<body>

<header>
<?php include_once("modulos/modulos.php"); ?>

</header>

<section>
<h1>Alumnos</h1>
	<form action="/action_page.php" class="was-validated" id="alumno_formulario">
		<div class="form-group">
			<label for="uname">Nombre del alumno:</label>
	    	<input type="text" class="form-control" id="nombre_alumno" placeholder="Nombre" name="nombre_alumno" required>
	    	<div class="valid-feedback">Valid.</div>
	    	<div class="invalid-feedback">Please fill out this field.</div>
	  	</div>
	  	<div class="form-group">
			<label for="uname">Correo electrónico:</label>
	    	<input type="text" class="form-control" id="email_alumno" placeholder="Correo electrónico" name="email_alumno" required>
	    	<div class="valid-feedback">Valid.</div>
	    	<div class="invalid-feedback">Please fill out this field.</div>
	  	</div>
	  	<div class="form-group">
			<label for="uname">Teléfono:</label>
	    	<input type="text" class="form-control" id="telefono_alumno" placeholder="Teléfono" name="telefono_alumno" required>
	    	<div class="valid-feedback">Valid.</div>
	    	<div class="invalid-feedback">Please fill out this field.</div>
	  	</div>
	  	<div class="form-group">
			<label for="uname">Edad:</label>
	    	<input type="text" class="form-control" id="edad_alumno" placeholder="Edad" name="edad_alumno" required>
	    	<div class="valid-feedback">Valid.</div>
	    	<div class="invalid-feedback">Please fill out this field.</div>
	  	</div>
	  	<div class="form-group">
			<label for="uname">Carrera:</label>
	    	<input type="text" class="form-control" id="carrera_alumno" placeholder="Carrera" name="carrera_alumno" required>
	    	<div class="valid-feedback">Valid.</div>
	    	<div class="invalid-feedback">Please fill out this field.</div>
	  	</div>
	  	<button type="submit" class="btn btn-primary">Submit</button>
	</form>
</section>


</body>
</html>