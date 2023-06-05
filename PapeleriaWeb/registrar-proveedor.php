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
$nit = $_POST['nit'];
$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$correo = $_POST['correo'];

// Realizar la inserción de datos en la tabla correspondiente (por ejemplo, "tabla_registro")
$sql = "INSERT INTO proveedor (nit, nombre, direccion, correo) VALUES ('$nit', '$nombre', '$direccion', '$correo')";
$resultado = mysqli_query($conexion, $sql);

// Verificar si la inserción fue exitosa
if ($resultado) {
  exit();
} else {
  echo "Error al registrar los datos";
}

// Cerrar la conexión a la base de datos
mysqli_close($conexion);

?>