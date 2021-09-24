<?php
include 'models/estudiante.php';
class EstudianteController{
	
	public function index(){
		
		$estudiantes = Estudiante::getAll('Estudiantes');
		
		include 'views/estudiantes/index.php';
		
	}
	public function create(){
		
		//$estudiantes = Estudiante::getAll('Estudiantes');
		
		include 'views/estudiantes/create.php';
		
	}
	public function store(){
		
		$estudiante = new Estudiante();
		
		$estudiante->nombre=$_POST["nombre"];
		$estudiante->apellido1=$_POST["apellido1"];
		$estudiante->apellido2=$_POST["apellido2"];
		$estudiante->curso=$_POST["curso"];
		$estudiante->run=$_POST["run"];
		$estudiante->correo=$_POST["correo"];
		$estudiante->fecha_nacimiento=$_POST["fecha_nacimiento"];
		$estudiante->edad=$_POST["edad"];
		$estudiante->peso=$_POST["peso"];
		$estudiante->estatura=$_POST["estatura"];
		//print_r($estudiante);
		
		if($estudiante->store('estudiantes')){
			header('Location: index.php?controller=estudiantecontroller&action=index');
		}else{
			echo "FAIL";
		}
		
		
	}
	
}