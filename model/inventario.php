<?php

    class Inventario {

        private $idInventario;
        private $nombre;
        private $precio;
        private $cantidad;


        public function __construct($idInventario, $nombre, $precio, $cantidad) {
            $this -> idInventario = $idInventario;
            $this -> nombre = $nombre;
            $this -> precio = $precio;
            $this -> cantidad = $cantidad;
        }
        
        public function __toString() {
            return "idInventario: " . $this -> idInventario . "\n" .
                   "nombre: " . $this -> nombre . "\n" . 
                   "precio: " . $this -> precio . "\n" . 
                   "cantidad: " . $this -> cantidad;
        }

        public function getIdInventario() {
            return $this -> idInventario;
        }

        public function setIdInventario($idInventario) {
            $this -> idInventario = $idInventario;
        }

        public function getNombre() {
            return $this -> nombre;
        }
    
        public function setNombre($nombre) {
            $this -> nombre = $nombre;
        }
    
        public function getPrecio() {
            return $this -> precio;
        }
    
        public function setPrecio($precio) {
            $this -> precio = $precio;
        }
    
        public function getCantidad() {
            return $this -> cantidad;
        }
    
        public function setCantidad($cantidad) {
            $this -> cantidad = $cantidad;
        }
    }

?>
