<?php
// Realiza la conexión a la base de datos
$servidor = "localhost";
$usuario = "root";
$password = "";
$nombreBD = "papeleriadb";
$conexion = mysqli_connect($servidor, $usuario, $password, $nombreBD);

// Verifica si hay errores de conexión
if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

// Realiza la consulta para obtener los datos de la tabla "usuario"
$sql = "SELECT * FROM usuario";
$resultado = mysqli_query($conexion, $sql);

// Verifica si se obtuvieron resultados
if (mysqli_num_rows($resultado) > 0) {
    // Itera sobre los resultados y genera las filas de la tabla
    while ($fila = mysqli_fetch_assoc($resultado)) {
        echo "<tr>";
        echo "<td>";
        echo "<button id='modify-fila' style='border: none; background-color: transparent;' onclick='modificarFormularioEmpleados()'><i class='bx bxs-edit-alt'></i></button>";
        echo "<button id='modify-fila' style='border: none; background-color: transparent;' onclick='eliminarFormularioEmpleados()'><i class='bx bxs-trash'></i></button>";
        echo "</td>";
        echo "<td>" . $fila['nombres'] . "</td>";
        echo "<td>" . $fila['apellidos'] . "</td>";
        echo "<td>" . $fila['correo'] . "</td>";
        echo "<td>" . $fila['rol'] . "</td>";
        echo "<td>" . $fila['fecha_nacimiento'] . "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='6'>No se encontraron registros.</td></tr>";
}

// Cierra la conexión a la base de datos
mysqli_close($conexion);
?>
