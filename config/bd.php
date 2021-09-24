<?php
class Bd{
	
	public static function conectar(){
		$mbd = new PDO('mysql:host=localhost;dbname=base-eo','root','');
		return $mbd;
	}
	
}