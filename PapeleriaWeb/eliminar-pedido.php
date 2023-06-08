<?php
    require_once '../persistence/pedidoDAO.php';
    $pedidoDAO = new PedidoDAO();
    
    header("Content-Type: application/json");
    $data = json_decode(file_get_contents("php://input"), true);
    $id = $data['idPedido'];
    $pedidoDAO -> eliminar($id);
    http_response_code(200);
    echo json_encode(["Response" => true, "id" => $id]);
?>