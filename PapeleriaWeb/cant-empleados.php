<?php
	require_once '../persistence/usuarioDAO.php';
	$usuarioDao = new UsuarioDAO();
	$lista = $usuarioDao->mostrarLista();
	echo count($lista);
?>