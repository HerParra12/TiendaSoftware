<?php

    class Proveedor {

        private $idProveedor;
        private $nit;
        private $nombre;
        private $direccion;
        private $correo;
        private $listaTelefono;

        public function __construct($idProveedor, $nit, $nombre, $direccion, $correo, $listaTelefono) {
            $this -> idProveedor = $idProveedor;
            $this -> nit = $nit;
            $this -> nombre = $nombre;
            $this -> direccion = $direccion;
            $this -> correo = $correo;
            $this -> listaTelefono = $listaTelefono;
        }

        public function __toString() {
            return "idProveedor: " . $this -> idProveedor .  "\n" .
                   "nit: " . $this -> nit . "\n" . 
                   "nombre: " . $this -> nombre . "\n" . 
                   "direccion: " . $this -> direccion . "\n" .
                   "correo: " . $this -> correo . "\n";
        }


        public function getIdProveedor() {
            return $this -> idProveedor;
        }
    
        public function setIdProveedor($idProveedor) {
            $this -> idProveedor = $idProveedor;
        }
    
        public function getNit() {
            return $this -> nit;
        }
    
        public function setNit($nit) {
            $this -> nit = $nit;
        }
    
        public function getNombre() {
            return $this -> nombre;
        }
    
        public function setNombre($nombre) {
            $this -> nombre = $nombre;
        }
    
        public function getDireccion() {
            return $this -> direccion;
        }
    
        public function setDireccion($direccion) {
            $this -> direccion = $direccion;
        }
    
        public function getCorreo() {
            return $this -> correo;
        }
    
        public function setCorreo($correo) {
            $this -> correo = $correo;
        }
    
        public function getListaTelefono() {
            return $this -> listaTelefono;
        }
    
        public function setListaTelefono($listaTelefono) {
            $this -> listaTelefono = $listaTelefono;
        }
    }
?>