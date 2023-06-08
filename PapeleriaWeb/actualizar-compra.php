<?php
	require_once '../persistence/compraDAO.php';
    require_once '../model/compra.php';
    $CompraDAO = new CompraDAO();

    header("Content-Type: application/json");
    $id = $_POST['id'];
    $estado = $_POST['estado'];
    $CompraDAO -> actualizar($id, $estado);
    echo json_encode(["Response" => true, "id" => $id]);
?>