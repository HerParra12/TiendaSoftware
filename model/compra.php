<?php

    class Compra {

        private $idCompra;
        private $idPedido;
        private $medioPago;

        public function __construct($idCompra, $idPedido, $medioPago) {
            $this -> idCompra = $idCompra;
            $this -> idPedido = $idPedido;
            $this -> medioPago = $medioPago;
        }
        
        
        public function __toString() {
            return "idCompra: " . $this -> idCompra . "\n" . 
                   "idPedido: " . $this -> idPedido . "\n" .
                   "medio pago: " . $this -> medioPago;
        }

        public function getIdCompra() {
            return $this -> idCompra;
        }

        public function setIdCompra($idCompra) {
            $this -> idCompra = $idCompra;
        }

        public function getIdPedido() {
            return $this -> idPedido;
        }

        public function setIdPedido($idPedido) {
            $this -> idPedido = $idPedido;
        }

        public function getMedioPago() {
            return $this -> medioPago;
        }

        public function setMedioPago($medioPago) {
            $this -> medioPago = $medioPago;
        }	
    }
?>
