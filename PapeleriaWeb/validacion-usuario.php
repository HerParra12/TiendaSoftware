<?php
$servidor = "localhost"; // Dirección del servidor MySQL (puede variar)
$usuario = "root"; // Usuario de la base de datos (puede variar)
$password = ""; // Contraseña de la base de datos (puede variar)
$nombreBD = "papeleriadb"; // Nombre de la base de datos que creaste

// Establecer conexión
$conexion = mysqli_connect($servidor, $usuario, $password, $nombreBD);

// Verificar si hay errores de conexión
if (!$conexion) {
  die("Error de conexión: " . mysqli_connect_error());
}

$conexion = mysqli_connect($servidor, $usuario, $password, $nombreBD);

// Verificar si hay errores de conexión
if (!$conexion) {
  die("Error de conexión: " . mysqli_connect_error());
}
// Obtener los datos del formulario
$email = $_POST['email'];
$rol = $_POST['rol'];

// Consulta SQL para verificar el usuario y la contraseña
$sql = "SELECT nombres FROM usuario WHERE correo = '$email' AND rol = '$rol'";
$resultado = mysqli_query($conexion, $sql);

// Verificar si la consulta retornó un resultado
if (mysqli_num_rows($resultado) > 0) {
  // Redireccionar a papeleria.php
  header("Location: papeleria.php");
  exit();
} else {
  // Si no se encontró una combinación válida de correo y rol, mostrar un mensaje de error
  echo "Error de inicio de sesión";
}

// Cerrar la conexión a la base de datos
mysqli_close($conexion);

?>
