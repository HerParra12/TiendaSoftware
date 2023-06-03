<?php

    require_once 'model/usuario.php';
    require_once 'model/proveedor.php';
    require_once 'model/inventario.php';
    require_once 'model/pedido.php';
    include './persistence/usuarioDAO.php';
    include './persistence/provedorDAO.php';
    include './persistence/inventarioDAO.php';
    include './persistence/pedidoDAO.php';

    $usuarioDao = new UsuarioDAO();
    $proveedorDao = new ProveedorDAO();
    $inventarioDao = new InventarioDAO();
    $pedidioDao = new PedidoDAO();

    
?> 