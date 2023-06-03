<?php

    class Pedido {

        private $idPedido;
        private $proveedor;
        private $usuario;
        private $fecha;
        private $totalPedido;
        private $medioPago;

        public function __construct($idPedido, $proveedor, $usuario, $fecha, $totalPedido, $medioPago) {
            $this -> idPedido = $idPedido;
            $this -> proveedor = $proveedor;
            $this -> usuario = $usuario;
            $this -> fecha = $fecha;
            $this -> totalPedido = $totalPedido;
            $this -> medioPago = $medioPago;
        }

        public function __toString() {
            return "idPedido: " . $this -> idPedido . "\n" .
                   "proveedor: " . $this -> proveedor . "\n" .
                   "usuario: " . $this -> usuario . "\n" . 
                   "fecha: " . $this -> fecha . "\n" .
                   "total pedido: " . $this -> totalPedido . "\n" .
                   "medio pago: " . $this -> medioPago;
        }
        
        public function getIdPedido() {
            return $this -> idPedido;
        }

        public function setIdPedido($idPedido) {
            $this -> idPedido = $idPedido;
        }

        public function getProveedor() {
            return $this -> proveedor;
        }

        public function setProveedor($proveedor) {
            $this -> proveedor = $proveedor;
        }

        public function getUsuario() {
            return $this -> usuario;
        }

        public function setUsuario($usuario) {
            $this -> usuario = $usuario;
        }

        public function getFecha() {
            return $this -> fecha;
        }

        public function setFecha($fecha) {
            $this -> fecha = $fecha;
        }

        public function getTotalPedido() {
            return $this -> totalPedido;
        }

        public function setTotalPedido($totalPedido) {
            $this -> totalPedido = $totalPedido;
        }	
    }

?>
