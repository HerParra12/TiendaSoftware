<?php
require_once '../persistence/usuarioDAO.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Obtiene los datos del formulario
  $nombres = $_POST["nombre"];
  $apellidos = $_POST["apellidos"];
  $correo = $_POST["email"];
  $rol = $_POST["rol"];
  $fechaNacimiento = $_POST["fechaNacimiento"];

  // Crea un nuevo objeto Usuario
  $nuevoUsuario = new Usuario(0,$nombres,$apellidos,$rol,$correo,$fechaNacimiento,array());

  // Crea una instancia de UsuarioDAO
  $usuarioDAO = new UsuarioDAO();
  $usuarioDAO -> agregar($nuevoUsuario);
  header("Location: papeleria.php");
  exit();
}
?>
