<?php
    require_once '../persistence/pedidoDAO.php';
    $pedidoDao = new PedidoDAO();
    $lista = $pedidoDao->mostrarLista();
    foreach ($lista as $pedido) {
        echo "<tr>";
        echo "<td>";
        echo "<button id='modify-fila' style='border: none; background-color: transparent;' onclick='modificarFormularioPedidos()'><i class='bx bxs-edit-alt'></i></button>";
        echo "<button id='modify-fila' style='border: none; background-color: transparent;' onclick='eliminarFormularioPedidos(" . $pedido -> getIdPedido() . ")'><i class='bx bxs-trash'></i></button>";
        echo "</td>";
        echo "<td>" . $pedido->getFecha() . "</td>";
        echo "<td>" . $pedido->getTotalPedido() . "</td>";
        echo "</tr>";
    }
?>