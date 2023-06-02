<?php

    require_once 'model/usuario.php';
    require_once 'model/proveedor.php';
    require_once 'model/inventario.php';
    include './persistence/usuarioDAO.php';
    include './persistence/provedorDAO.php';
    include './persistence/inventarioDAO.php';

    $usuarioDao = new UsuarioDAO();
    $proveedorDao = new ProveedorDAO();
    $inventarioDao = new InventarioDAO();
    
?> 