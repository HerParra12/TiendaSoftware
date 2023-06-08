<?php
	require_once '../persistence/pedidoDAO.php';
	$PedidoDAO = new PedidoDAO();
	$lista = $PedidoDAO->mostrarLista();
	echo count($lista);
?>