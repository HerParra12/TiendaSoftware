<?php
    require_once '../persistence/proveedorDAO.php';
    $proveedorDao = new ProveedorDAO();
    $lista = $proveedorDao -> mostrarLista();
    foreach($lista as $proveedor) {
        echo "<tr>";
        echo "<td>";
        echo "<button style='border: none; background-color: transparent;' onclick='modificarFormularioProveedores(" . $proveedor -> getIdProveedor() . ")'><i class='bx bxs-edit-alt'></i></button>";
        echo "<button style='border: none; background-color: transparent;' onclick='eliminarFormularioProveedores(" . $proveedor -> getIdProveedor() . ")'><i class='bx bxs-trash'></i></button>";
        echo "</td>";
        echo "<td>" . $proveedor -> getNit() . "</td>";
        echo "<td>" . $proveedor -> getNombre() . "</td>";
        echo "<td>" . $proveedor -> getDireccion() . "</td>";
        echo "<td>" . $proveedor -> getCorreo() . "</td>";
        echo "</tr>";
    } 
?>