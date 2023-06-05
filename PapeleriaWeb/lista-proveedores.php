<?php
    require_once '../persistence/proveedorDAO.php';
    $proveedorDao = new proveedorDAO();
    $lista = $proveedorDao -> mostrarLista();
    foreach($lista as $proveedor) {
        echo "<tr>";
        echo "<td>";
        echo "<button id='modify-fila' style='border: none; background-color: transparent;' onclick='modificarFormularioEmpleados()'><i class='bx bxs-edit-alt'></i></button>";
        echo "<button id='modify-fila' style='border: none; background-color: transparent;' onclick='eliminarFormularioEmpleados()'><i class='bx bxs-trash'></i></button>";
        echo "</td>";
        echo "<td>" . $proveedor -> getNit() . "</td>";
        echo "<td>" . $proveedor -> getNombre() . "</td>";
		echo "<td>" . $proveedor -> getDireccion() . "</td>";
        echo "<td>" . $proveedor -> getCorreo() . "</td>";
        echo "</tr>";
    } 
?>