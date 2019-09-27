<?php 
// Using Medoo namespace
use Medoo\Medoo;
 
$server = ($_SERVER['HTTP_HOST'] == "localhost") ? "smoothoperators.com.mx" : "localhost" ;

// Initialize
$db = new Medoo([
    'database_type' => 'mysql',
    'database_name' => 'proyecto-desarrollo', //nombre de la base de datos
    'server' => $server,
    'username' => 'remote', //nombre de usuario
    'password' => 'D7AC3D58A7318'  //contraseña
]);

 ?>