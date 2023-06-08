<?php

    require_once '../persistence/proveedorDAO.php';
    $proveedorDao = new ProveedorDAO();
    $lista = $proveedorDao -> mostrarLista();
    foreach($lista as $value) {
        $numeros = $value -> getListaTelefono();
        foreach($numeros as $numero) {
            echo ("
                <tr>
                    <td>
                        <button id='modify-fila' style='border: none; background-color: transparent;' onclick='eliminarFormularioTelefonos(" . $numero . ")'><i class='bx bxs-trash'></i></button>
                    </td>
                    <td>" . $value -> getNombre() . "</td>
                    <td>" .  $numero . "</td>
                </tr>"
            );
        }
    }

?>

