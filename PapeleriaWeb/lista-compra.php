<?php
    require_once 'compraDAO.php';

    $compraDao = new CompraDAO();
    $lista = $compraDao->mostrarLista();
    $size = count($lista);
    
    foreach($lista as $compra) {
        echo "<tr>";
        echo "<td>";
        echo "<button id='modify-fila' style='border: none; background-color: transparent;' onclick='modificarFormularioEmpleados()'><i class='bx bxs-edit-alt'></i></button>";
        echo "<button id='modify-fila' style='border: none; background-color: transparent;' onclick='eliminarFormularioEmpleados()'><i class='bx bxs-trash'></i></button>";
        echo "</td>";
        echo "<td>" . $compra->getIdCompra() . "</td>";
        echo "<td>" . $compra->getIdPedido() . "</td>";
        echo "<td>" . $compra->getFecha() . "</td>";
        echo "<td>" . $compra->getMontoTotal() . "</td>";
        echo "<td>" . $compra->getEstado() . "</td>";
        echo "</tr>";
    } 
?>
