<?php 

require_once 'Medoo.php';
require_once 'db.php';


if ($_POST) {
	switch ($_POST['accion']) {
		case 'login': login();
			break;
		
		default:
			# code...
			break;
	}
}

function login(){
	global $db;
	$respuesta = [];
	$usuario = $db->get("usuarios","*",["correo" => $_POST['usuario']]);
	if ($usuario > 0) {
		$respuesta["texto"] = "Si existe";
		$respuesta["status"] = 1;
//Validar que la contraseña sea la correcta
		//Si la contraseña es correcta enviar estatus 0 con el texto que uno desea
		// Si la contraseña es correcta entonces:
		//1. Iniciar sesion
		//2. setear a la variable de $_session los valores: nombre, correo, estatus, id y nivel
		//3. Responder status 1

	}else{
		$respuesta["texto"] = "No existe";
		$respuesta["status"] = 0;
	}

	echo json_encode($respuesta);
}

 ?>