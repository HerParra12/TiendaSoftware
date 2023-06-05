<?php
require_once '../persistence/usuarioDAO.php';
$usuarioDAO = new UsuarioDAO();
$contador = $usuarioDAO->contarUsuariosEmpleado();
echo "" . $contador;

?>