<?php

    class Venta {

        private $idVenta;
        private $fechaVenta;
        private $totalVenta;
        private $listaProductos;

        public function __construct($fechaVenta, $totalVenta, $listaProductos) {
            $this -> fechaVenta = $fechaVent;
            $this -> totalVenta = $totalVenta;
            $this -> listaProductos = $listaProductos;
        }

        public function __toString() {
            return "idVenta: " . $this -> idVenta . "\n" . 
                   "fecha venta: " . $this -> fechaVenta . "\n" . 
                   "total venta: " . $this -> totalVenta . "\n" . 
                   "lista productso: " . $this -> listaProductos;
        }

        public function getIdVenta() {
            return $this -> idVenta;
        }
    
        public function setIdVenta($idVenta) {
            $this -> idVenta = $idVenta;
        }
    
        public function getFechaVenta() {
            return $this -> fechaVenta;
        }
    
        public function setFechaVenta($fechaVenta) {
            $this -> fechaVenta = $fechaVenta;
        }
    
        public function getTotalVenta() {
            return $this -> totalVenta;
        }
    
        public function setTotalVenta($totalVenta) {
            $this -> totalVenta = $totalVenta;
        }
    
        public function getListaProductos() {
            return $this -> listaProductos;
        }
    
        public function setListaProductos($listaProductos) {
            $this -> listaProductos = $listaProductos;
        }
    }
?>