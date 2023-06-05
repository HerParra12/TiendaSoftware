<?php
/*
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

// Consulta SQL para obtener el número de usuarios empleados
$sql = "SELECT COUNT(*) AS total FROM usuario WHERE rol = 'Empleado'";
$resultado = mysqli_query($conexion, $sql);

// Verificar si la consulta fue exitosa
if ($resultado) {
  // Obtener el número de usuarios empleados
  $fila = mysqli_fetch_assoc($resultado);
  $numEmpleados = $fila['total'];

  // Mostrar el número de usuarios empleados en el <h3>
  echo "<h3>$numEmpleados</h3>";
} else {
  echo "Error al consultar la base de datos";
}

// Cerrar la conexión a la base de datos
mysqli_close($conexion);
*/

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