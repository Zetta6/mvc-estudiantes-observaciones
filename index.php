<?php
//print_r($_GET);
include 'controllers/estudianteController.php';
//include 'config/bd.php';
$controller = $_GET['controller'];
$action     = $_GET['action'];

$controller = new $controller();
$controller -> $action();
