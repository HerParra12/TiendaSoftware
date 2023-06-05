<?php
/*
require_once '../persistence/conexion.php';
require_once '../persistence/crud.php';
require_once '../persistence/DAOUtil.php';
require_once '../persistence/ProveedorDAO.php';
require_once '../model/Proveedor.php';

$nit = $_POST['nit'];
$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$correo = $_POST['correo'];

$proveedorDAO = new ProveedorDAO();
$proveedorDAO->agregar(new Proveedor(0, $nit, $nombre, $direccion, $correo, []));
*/
require_once '../persistence/proveedorDAO.php';
    $proveedorDao = new ProveedorDAO();

    $nit = $_POST['nit'];
    $nombre = $_POST['nombre'];
    $direccion = $_POST['direccion'];
    $correo = $_POST['correo'];
require_once '../persistence/proveedorDAO.php';
    $proveedorDao = new ProveedorDAO();

    $nit = $_POST['nit'];
    $nombre = $_POST['nombre'];
    $direccion = $_POST['direccion'];
    $correo = $_POST['correo'];
    echo "nit: " . $nit . ", nombre: " . $nombre . ", direccion: " . $direccion . ", correo: " . $correo;
?>
