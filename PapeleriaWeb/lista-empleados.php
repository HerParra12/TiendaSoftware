<?php
    require_once '../persistence/usuarioDAO.php';
    $usuarioDao = new UsuarioDAO();
    $lista = $usuarioDao -> mostrarLista();
    foreach($lista as $usuario) {
        echo "<tr>";
        echo "<td>";
        echo "<button id='modify-fila' style='border: none; background-color: transparent;' onclick='modificarFormularioEmpleados()'><i class='bx bxs-edit-alt'></i></button>";
        echo "<button id='modify-fila' style='border: none; background-color: transparent;' onclick='eliminarFormularioEmpleados()'><i class='bx bxs-trash'></i></button>";
        echo "</td>";
        echo "<td>" . $usuario -> getNombres() . "</td>";
        echo "<td>" . $usuario -> getApellidos() . "</td>";
		echo "<td>" . $usuario -> getRole() . "</td>";
        echo "<td>" . $usuario -> getCorreo() . "</td>";
        echo "<td>" . $usuario -> getFechaNacimiento() . "</td>";
        echo "</tr>";
    } 
?>
