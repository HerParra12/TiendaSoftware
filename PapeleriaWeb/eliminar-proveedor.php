<?php
    require_once '../persistence/proveedorDAO.php';
    $proveedorDAO = new ProveedorDAO();
    
    header("Content-Type: application/json");
    $data = json_decode(file_get_contents("php://input"), true);
    $id = $data['idProveedor'];
    $proveedorDAO -> eliminar($id);
    http_response_code(200);
    echo json_encode(["Response" => true, "id" => $id]);
?>