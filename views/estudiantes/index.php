<!DOCTYPE html> <!-- Versión de HTML -->
<html>
	<head>
		<title>Estudiantes</title>
		<meta charset="utf-8">
	</head>
	
	<body>
		<h1>Listado de estudiantes</h1>
		
		<a href="index.php?controller=estudiantecontroller&action=create">Registrar nuevo estudiante</a>
		
		<table border="1">
			
			<tr>
				<th>#</th>
				<th>Nombre</th>
				<th>Apellido paterno</th>
				<th>Apellido materno</th>
				<th>Curso</th>
				<th>Run</th>
				<th>Correo</th>
				<th>Fecha de nacimiento</th>
				<th>Edad</th>
				<th>Peso</th>
				<th>Estatura</th>
			</tr>
			
			<?php foreach($estudiantes as $e){ ?>
				<tr>
					<td><?php echo $e->estudiante_id ?></td>
					<td><?php echo $e->nombre ?>      </td>
					<td><?php echo $e->apellido1 ?></td>
					<td><?php echo $e->apellido2 ?></td>
					<td><?php echo $e->curso ?></td>
					<td><?php echo $e->run ?></td>
					<td><?php echo $e->correo ?></td>
					<td><?php echo $e->fecha_nacimiento ?></td>
					<td><?php echo $e->edad ?></td>
					<td><?php echo $e->peso ?></td>
					<td><?php echo $e->estatura ?></td>
				</tr>
			<?php } ?>
			
		</table> 
		
	</body>
	
</html>