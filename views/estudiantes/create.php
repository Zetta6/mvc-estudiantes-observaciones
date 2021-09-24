<!DOCTYPE html> <!-- Versión de HTML -->
<html>
	<head>
		<title>Estudiantes</title>
		<meta charset="utf-8">
	</head>
	
	<body>
		<h1>Nuevo estudiante</h1>
		
		<form method="POST" action="index.php?controller=estudiantecontroller&action=store">
			
			<div>
				<label for="nombre">Nombre</label>
				<input type="text" id="nombre" name="nombre" required>
			</div>
			<div>
				<label for="apellido1">Apellido paterno</label>
				<input type="text" id="apellido1" name="apellido1">
			</div>
			<div>
				<label for="apellido2">Apellido materno</label>
				<input type="text" id="apellido2" name="apellido2">
			</div>
			<div>
				<label for="curso">Curso</label>
				<input type="text" id="curso" name="curso">
			</div>
			<div>
				<label for="run">Run</label>
				<input type="text" id="run" name="run">
			</div>
			<div>
				<label for="correo">Correo</label>
				<input type="text" id="correo" name="correo">
			</div>
			<div>
				<label for="fecha_nacimiento">Fecha de nacimiento</label>
				<input type="date" id="fecha_nacimiento" name="fecha_nacimiento">
			</div>
			<div>
				<label for="edad">Edad</label>
				<input type="text" id="edad" name="edad">
			</div>
			<div>
				<label for="peso">Peso</label>
				<input type="text" id="peso" name="peso">
			</div>
			<div>
				<label for="estatura">Estatura</label>
				<input type="text" id="estatura" name="estatura">
			</div>
			<input type="submit" value="registrar">
		</form>
		
		
	</body>
	
</html>