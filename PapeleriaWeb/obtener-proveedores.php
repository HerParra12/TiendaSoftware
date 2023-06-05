<?php
require_once '../persistence/proveedorDAO.php';
$proveedorDAO = new ProveedorDAO(); // Crea una instancia de la clase ProveedorDAO
$nombresProveedores = $proveedorDAO->obtenerNombresProveedores(); // Obtiene los nombres de los proveedores

foreach ($nombresProveedores as $nombre) {
    echo "<option value=\"$nombre\">$nombre</option>"; // Genera las opciones del select
}
?>