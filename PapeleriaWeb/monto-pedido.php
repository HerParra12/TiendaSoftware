<?php

	require_once '../persistence/pedidoDAO.php';

	$pedidoDAO = new PedidoDAO();
	$montoTotal = $pedidoDAO->obtenerMontoTotalPedidos();

	echo $montoTotal;
?>
