<?php
	$conexion= new mysqli("localhost", "user", "pass", "trdesarrolloweb");
	//Comprobar conexion
	if(mysqli_connect_errno())
	{
		printf("Conexion Fallida");
	}
	else {
		//printf("Estas conectado");
	}
?>