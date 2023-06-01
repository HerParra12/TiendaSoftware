<?php

    require_once 'model/usuario.php';
    require_once 'model/proveedor.php';
    include './persistence/usuarioDAO.php';
    include './persistence/provedorDAO.php';

    $usuarioDao = new UsuarioDAO();
    $proveedorDao = new ProveedorDAO();
?> 