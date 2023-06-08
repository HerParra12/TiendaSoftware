<?php

    require_once '../persistence/telefonoDAO.php';
    $telefonoDao = new TelefonoDAO();

    header("Content-Type: application/json");
    $data = json_decode(file_get_contents("php://input"), true);
    $id = $data['numeroTelefonoProveedor'];
    $telefonoDao -> eliminar($id);
    http_response_code(200);
    echo json_encode(["Response" => true, "numero" => $id ]);

?>