<?php
    
    require_once '../persistence/compraDAO.php';
    $compraDao = new CompraDAO();
    $lista = $compraDao->mostrarLista();
    foreach($lista as $compra) {
        echo "<tr>";
        echo "<td>";
        echo "<button id='modify-fila' style='border: none; background-color: transparent;' onclick='modificarFormularioCompras(" . $compra -> getIdCompra() . ")'><i class='bx bxs-edit-alt'></i></button>";
        echo "</td>";
        echo "<td>" . $compra->getIdPedido() . "</td>";
        echo "<td>" . $compra->getFecha() . "</td>";
        echo "<td>" . $compra->getMontoTotal() . "</td>";
        echo "<td>" . $compra->getEstado() . "</td>";
        echo "</tr>";
    } 
    
?>
