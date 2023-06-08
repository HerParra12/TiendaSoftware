<?php

	require_once '../persistence/compraDAO.php';

	$compraDao = new CompraDAO();
	$montoTotal = $compraDao->obtenerMontoTotalCompras();

	echo $montoTotal;
?>
