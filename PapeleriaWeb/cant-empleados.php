<?php

	require_once '../persistence/usuarioDAO.php';
	$usuarioDao = new UsuarioDAO();
	$lista = $usuarioDao->mostrarLista();
	$contador = 0;

	foreach ($lista as $usuario) {
		if ($usuario->getCorreo() == "empleado") {
			$contador++;
		}
	}

	echo $contador;
	

?>