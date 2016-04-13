<?php

$servidor="localhost";
$us="root";
$contra="";
$bd="routesystem23";

$mysqli = new mysqli($servidor,$us,$contra, $bd);


class login{
	public function __construct($usuario,$contrasena){

	$this->user = $usuario;
	$this->contra = $contrasena;

}

	public function valida(){

$user=$_POST['usuario'];
$contra=$_POST['contrasena'];

}

/* verificar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión failed: %s\n", $mysqli->connect_error);
    exit();
}

?>