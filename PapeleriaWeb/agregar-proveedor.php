<?php

    require_once '../persistence/proveedorDAO.php';
    require_once '../model/proveedor.php';
    $proveedorDAO = new ProveedorDAO();
    $nit = $_POST['nit'];
    $nombre = $_POST['nombre'];
    $direccion = $_POST['direccion'];
    $correo = $_POST['correo'];
    $proveedorDAO -> agregar(new Proveedor(0, $nit, $nombre, $direccion, $correo, array()));
    
?>
