<?php

	require_once '../persistence/proveedorDAO.php';
	$proveedorDao = new ProveedorDAO();
	$cantidadProveedores = $proveedorDao->contarProveedoresConNombreCar();
	echo $cantidadProveedores;

?>