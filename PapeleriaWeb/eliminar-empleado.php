<?php

    require_once '../persistence/usuarioDAO.php';
    $usuarioDao = new UsuarioDAO();

    header("Content-Type: application/json");
    $data = json_decode(file_get_contents("php://input"), true);
    $id = $data['idEmpleado'];
    $usuarioDao -> eliminar($id);
    echo json_encode(["Response" => true, "id" => $id ]);
?>