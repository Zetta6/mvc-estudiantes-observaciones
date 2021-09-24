<?php
include 'config/bd.php';
class Estudiante{
	public $estudiante_id;
	public $nombre;
	public $apellido1;
	public $apellido2;
	public $curso;
	public $run;
	public $correo;
	public $fecha_nacimiento;
	public $edad;
	public $peso;
	public $estatura;
	
	public static function  getAll($tabla){
		$bd  = Bd::conectar();
		$stm = $bd->prepare("SELECT * FROM $tabla");
		$stm->execute();
		return $stm->fetchAll(PDO::FETCH_CLASS,'Estudiante');
	}
	public function store($tabla){
		$bd  = Bd::conectar();
		$sql = "INSERT INTO $tabla(estudiante_id,
								   nombre,
								   apellido1,
								   apellido2,
								   curso,
								   run,
								   correo,
								   fecha_nacimiento,
								   edad,
								   peso,
								   estatura)
				VALUES(null,
					   :nombre,
					   :apellido1,
					   :apellido2,
					   :curso,
					   :run,
					   :correo,
					   :fecha_nacimiento,
					   :edad,
					   :peso,
					   :estatura)";
		$stm = $bd->prepare($sql);
		$stm->bindParam(":nombre",$this->nombre,PDO::PARAM_STR);
		$stm->bindParam(":apellido1",$this->apellido1,PDO::PARAM_STR);
		$stm->bindParam(":apellido2",$this->apellido2,PDO::PARAM_STR);
		$stm->bindParam(":curso",$this->curso,PDO::PARAM_STR);
		$stm->bindParam(":run",$this->run,PDO::PARAM_STR);
		$stm->bindParam(":correo",$this->correo,PDO::PARAM_STR);
		$stm->bindParam(":fecha_nacimiento",$this->fecha_nacimiento,PDO::PARAM_STR);
		$stm->bindParam(":edad",$this->edad,PDO::PARAM_STR);
		$stm->bindParam(":peso",$this->peso,PDO::PARAM_INT);
		$stm->bindParam(":estatura",$this->estatura,PDO::PARAM_INT);
		$res = $stm->execute();
		return $res;
	}
	
	
}