<?php

    class Pedido {

        private $idPedido;
        private $idProveedor;
        private $idProducto;
        private $idUsuario;
        private $fecha;
        private $totalPedido;
        private $medioPago;
        
        public function __construct() {}

        public function __construct($idPedido, $idProveedor, $idProducto, $idUsuario, $fecha, $totalPedido, $medioPago) {
            $this -> idPedido = $idPedido;
            $this -> idProveedor = $idProveedor;
            $this -> idProducto = $idProducto;
            $this -> idUsuario = $idUsuario;
            $this -> fecha = $fecha;
            $this -> totalPedido = $totalPedido;
            $this -> medioPago = $medioPago;
        }

        public function __toString() {
            return "idPedido: " . $this -> idPedido . "\n" .
                   "idProveedor: " . $this -> idProveedor . "\n" .
                   "idProducto: " . $this -> idProducto . "\n" .
                   "idUsuario: " . $this -> idUsuario . "\n" .
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

        public function getIdProveedor() {
            return $this -> idProveedor;
        }

        public function setIdProveedor($idProveedor) {
            $this -> idProveedor = $idProveedor;
        }

        public function getIdProducto() {
            return $this -> idProducto;
        }

        public function setIdProducto($idProducto) {
            $this -> idProducto = $idProducto;
        }

        public function getIdUsuario() {
            return $this -> idUsuario;
        }

        public function setIdUsuario($idUsuario) {
            $this -> idUsuario = $idUsuario;
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
