<?php


    require_once '../persistence/usuarioDAO.php';
    require_once '../model/usuario.php';
    $usuarioDao = new UsuarioDAO();
    
    header("Content-Type: application/json");
    $id = $_POST['id'];
    $nombre = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $correo = $_POST['correo'];
    $usuarioDao -> actualizar($id, new Usuario($id, $nombre, $apellidos, 'Empleado', $correo, date('Y-m-d'), array()));
    echo json_encode(["Response" => true, "id" => $id ]);

?>