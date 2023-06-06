<?php
    require_once '../persistence/proveedorDAO.php';
    require_once '../model/proveedor.php';
    $proveedorDao = new ProveedorDAO();
    
    header("Content-Type: application/json");
    $id = $_POST['id'];
    $nit = $_POST['nit'];
    $nombre = $_POST['nombre'];
    $direccion = $_POST['direccion'];
    $correo = $_POST['correo'];
    http_response_code(200);
    
    $proveedorDao -> actualizar($id, new Proveedor(0, $nit, $nombre, $direccion, $correo, array()));
    echo json_encode(["Response" => true, "id" => $id ]);
?>
