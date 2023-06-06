<?php
/**
 * Clase Compra
 * 
 * Esta clase representa una compra realizada en el sistema.
 */
class Compra {

    private $idCompra;
    private $idPedido;
    private $medioPago;
    private $estado;
    private $fecha;

    /**
     * Constructor de la clase.
     * Crea una nueva instancia de la clase Compra.
     *
     * @param mixed $idCompra El ID de la compra.
     * @param mixed $idPedido El ID del pedido asociado a la compra.
     * @param mixed $medioPago El medio de pago utilizado en la compra.
     * @param mixed $estado El estado de la compra.
     * @param mixed $fecha La fecha de la compra.
     */
    public function __construct($idCompra, $idPedido, $medioPago, $estado, $fecha) {
        $this->idCompra = $idCompra;
        $this->idPedido = $idPedido;
        $this->medioPago = $medioPago;
        $this->estado = $estado;
        $this->fecha = $fecha;
    }
    
    /**
     * Método mágico __toString().
     * Devuelve una representación en cadena de la compra.
     *
     * @return string La representación en cadena de la compra.
     */
    public function __toString() {
        return "idCompra: " . $this->idCompra . "\n" . 
               "idPedido: " . $this->idPedido . "\n" .
               "medio pago: " . $this->medioPago . "\n" .
               "estado: " . $this->estado . "\n" .
               "fecha: " . $this->fecha;
    }

    /**
     * Método getter para obtener el ID de la compra.
     *
     * @return mixed El ID de la compra.
     */
    public function getIdCompra() {
        return $this->idCompra;
    }

    /**
     * Método setter para establecer el ID de la compra.
     *
     * @param mixed $idCompra El ID de la compra.
     * @return void
     */
    public function setIdCompra($idCompra) {
        $this->idCompra = $idCompra;
    }

    /**
     * Método getter para obtener el ID del pedido asociado a la compra.
     *
     * @return mixed El ID del pedido asociado a la compra.
     */
    public function getIdPedido() {
        return $this->idPedido;
    }

    /**
     * Método setter para establecer el ID del pedido asociado a la compra.
     *
     * @param mixed $idPedido El ID del pedido asociado a la compra.
     * @return void
     */
    public function setIdPedido($idPedido) {
        $this->idPedido = $idPedido;
    }

    /**
     * Método getter para obtener el medio de pago utilizado en la compra.
     *
     * @return mixed El medio de pago utilizado en la compra.
     */
    public function getMedioPago() {
        return $this->medioPago;
    }

    /**
     * Método setter para establecer el medio de pago utilizado en la compra.
     *
     * @param mixed $medioPago El medio de pago utilizado en la compra.
     * @return void
     */
    public function setMedioPago($medioPago) {
        $this->medioPago = $medioPago;
    }

    /**
     * Método getter para obtener el estado de la compra.
     *
     * @return mixed El estado de la compra.
     */
    public function getEstado() {
        return $this->estado;
    }

    /**
     * Método setter para establecer el estado de la compra.
     *
     * @param mixed $estado El estado de la compra.
     * @return void
     */
    public function setEstado($estado) {
        $this->estado = $estado;
    }

    /**
     * Método getter para obtener la fecha de la compra.
     *
     * @return mixed La fecha de la compra.
     */
    public function getFecha() {
        return $this->fecha;
    }

    /**
     * Método setter para establecer la fecha de la compra.
     *
     * @param mixed $fecha La fecha de la compra.
     * @return void
     */
    public function setFecha($fecha) {
        $this->fecha = $fecha;
    }
}
?>
