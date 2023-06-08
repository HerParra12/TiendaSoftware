<?php
	
	require_once '../persistence/compraDAO.php';
	$compraDao = new CompraDAO();
	$lista = $compraDao->mostrarLista();
	echo count($lista);
	
?>