<?php

    class Venta {

        private $idVenta;
        private $fechaVenta;
        private $totalVenta;
        private $listaInventario;

        public function __construct($idVenta, $fechaVenta, $totalVenta, $listaInventario) {
            $this -> idVenta = $idVenta;
            $this -> fechaVenta = $fechaVenta;
            $this -> totalVenta = $totalVenta;
            $this -> listaInventario = $listaInventario;
        }

        public function __toString() {
            return "idVenta: " . $this -> idVenta . "\n" . 
                   "fecha venta: " . $this -> fechaVenta . "\n" . 
                   "total venta: " . $this -> totalVenta . "\n";
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
    
        public function getlistaInventario() {
            return $this -> listaInventario;
        }
    
        public function setlistaInventario($listaInventario) {
            $this -> listaInventario = $listaInventario;
        }
    }
?>