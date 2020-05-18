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
	<div class="col-md-6">
		<div class="form-group">
			<h1>Profesores</h1>
			<button type="submit" class="btn btn-primary">Agregar</button>
			<button type="submit" class="btn btn-primary">Actualizar</button>
			<button type="submit" class="btn btn-primary">Eliminar</button>
			
			<table id="table_id" class="display">
			    <thead>
			        <tr>
			            <th>Nombre</th>
			            <th>Correo electrónico</th>
			            <th>Teléfono</th>
			            <th>Carrera</th>
			        </tr>
			    </thead>
			    <tbody>
			        <tr>
			            <td>Row1</td>
			            <td>Row2</td>
			            <td>Row3</td>
			            <td>Row4</td>
			        </tr>
			    </tbody>
			</table>
		</div>
	</div>	
	
	<form action="/action_page.php" class="was-validated" id="profesor_formulario">
		<div class="col-md-6">
			<div class="form-group">
				<label for="uname">Nombre del alumno:</label>
		    	<input type="text" class="form-control" id="nombre_profesor" placeholder="Nombre" name="nombre_profesor" required>
		    	<div class="valid-feedback">Valid.</div>
		    	<div class="invalid-feedback">Please fill out this field.</div>
		  	</div>
		  	<div class="form-group">
				<label for="uname">Correo electrónico:</label>
		    	<input type="text" class="form-control" id="email_profesor" placeholder="Correo electrónico" name="email_profesor" required>
		    	<div class="valid-feedback">Valid.</div>
		    	<div class="invalid-feedback">Please fill out this field.</div>
		  	</div>
		  	<div class="form-group">
				<label for="uname">Teléfono:</label>
		    	<input type="text" class="form-control" id="telefono_profesor" placeholder="Teléfono" name="telefono_profesor" required>
		    	<div class="valid-feedback">Valid.</div>
		    	<div class="invalid-feedback">Please fill out this field.</div>
		  	</div>
		  	<div class="form-group">
				<label for="uname">Carrera:</label>
		    	<input type="text" class="form-control" id="carrera_profesor" placeholder="Carrera" name="carrera_profesor" required>
		    	<div class="valid-feedback">Valid.</div>
		    	<div class="invalid-feedback">Please fill out this field.</div>
		  	</div>
		  	<button type="submit" class="btn btn-primary">Guardar</button>
		</div>
	</form>
</section>


</body>
</html>