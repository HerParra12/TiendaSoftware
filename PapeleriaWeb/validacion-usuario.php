<?php
require_once '../persistence/usuarioDAO.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Obtiene los datos del formulario
  $correo = $_POST["email"];
  $rol = $_POST["rol"];

  // Crea una instancia de UsuarioDAO
  $usuarioDAO = new UsuarioDAO();
  $usuarioDAO -> validar($correo,$rol);
  header("Location: papeleria.php");
  exit();
}
?>
