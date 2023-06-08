<?php
/**
 * Clase Telefono
 * 
 * Esta clase representa un teléfono asociado a un proveedor.
 */
class Telefono {

    private $idTelefono;
    private $idProveedor;
    private $telefono;

    /**
     * Constructor de la clase.
     * Crea una nueva instancia de la clase Telefono.
     *
     * @param mixed $idTelefono El ID del teléfono.
     * @param mixed $idProveedor El ID del proveedor asociado.
     * @param string $telefono El número de teléfono.
     */
    public function __construct($idTelefono, $idProveedor, $telefono) {
        $this->idTelefono = $idTelefono;
        $this->idProveedor = $idProveedor;
        $this->telefono = $telefono;
    }

    /**
     * Método getter para obtener el ID del teléfono.
     *
     * @return mixed El ID del teléfono.
     */
    public function getIdTelefono() {
        return $this->idTelefono;
    }

    /**
     * Método setter para establecer el ID del teléfono.
     *
     * @param mixed $idTelefono El ID del teléfono.
     * @return void
     */
    public function setIdTelefono($idTelefono) {
        $this->idTelefono = $idTelefono;
    }

    /**
     * Método getter para obtener el ID del proveedor asociado.
     *
     * @return mixed El ID del proveedor asociado.
     */
    public function getIdProveedor() {
        return $this->idProveedor;
    }

    /**
     * Método setter para establecer el ID del proveedor asociado.
     *
     * @param mixed $idProveedor El ID del proveedor asociado.
     * @return void
     */
    public function setIdProveedor($idProveedor) {
        $this->idProveedor = $idProveedor;
    }

    /**
     * Método getter para obtener el número de teléfono.
     *
     * @return string El número de teléfono.
     */
    public function getTelefono() {
        return $this->telefono;
    }

    /**
     * Método setter para establecer el número de teléfono.
     *
     * @param string $telefono El número de teléfono.
     * @return void
     */
    public function setTelefono($telefono) {
        $this->telefono = $telefono;
    }
}
?>
