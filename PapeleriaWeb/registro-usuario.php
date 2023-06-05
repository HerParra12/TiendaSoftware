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

// Recibir los datos del formulario HTML (para el formulario de registro)
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$email = $_POST['email'];
$fechaNacimiento = $_POST['fechaNacimiento'];
$rol = $_POST['rol'];

// Realizar la inserción de datos en la tabla correspondiente (por ejemplo, "tabla_registro")
$sql = "INSERT INTO usuario (nombres, apellidos, correo, rol, fecha_nacimiento) VALUES ('$nombre', '$apellidos', '$email', '$rol', '$fechaNacimiento')";
$resultado = mysqli_query($conexion, $sql);

// Verificar si la inserción fue exitosa
if ($resultado) {
  header("Location: papeleria.php");
  exit();
} else {
  echo "Error al registrar los datos";
}

// Cerrar la conexión a la base de datos
mysqli_close($conexion);

?>
