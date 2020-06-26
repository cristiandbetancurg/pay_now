<?php 

$db = new mysqli('localhost', 'cristian', '', 'pedido');

	if($db->connect_errno) {
		printf("Ha ocurrido un Error al conectar con la base de datos, llamé urgente al administrador de los servicios web: 0424-2535682",$mysql->connect_errno);
	}

?>