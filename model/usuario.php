<?php

    class Usuario {

        private $idUsuario;
        private $primerNombre;
        private $segundoNombre;
        private $apellidos;
        private $tipoUsuario;

        public function __construct($idUsuario, $primerNombre, $segundoNombre, $apellidos, $tipoUsuario) {
            $this -> idUsuario = $idUsuario;
            $this -> primerNombre = $primerNombre;
            $this -> segundoNombre = $segundoNombre;
            $this -> apellidos = $apellidos;
            $this -> tipoUsuario = $tipoUsuario;
        }
        
        public function __toString() {
            return "idUsuario: " . $this -> idUsuario . "\n" .
                   "primer nombre: " . $this -> primerNombre . "\n" .
                   "segundo nombre: " . $this -> segundoNombre . "\n" .
                   "apellidos: " . $this -> apellidos . "\n" .
                   "tipo usuario: " . $this -> tipoUsuario;
        }

        public function getIdUsuario() {
            return $this -> idUsuario;
        }

        public function setIdUsuario($idUsuario) {
            $this -> idUsuario = $idUsuario;
        }

        public function getPrimerNombre() {
            return $this -> primerNombre;
        }

        public function setPrimerNombre($primerNombre) {
            $this -> primerNombre = $primerNombre;
        }

        public function getSegundoNombre() {
            return $this -> segundoNombre;
        }

        public function setSegundoNombre($segundoNombre) {
            $this -> segundoNombre = $segundoNombre;
        }

        public function getApellidos() {
            return $this -> apellidos;
        }

        public function setApellidos($apellidos) {
            $this -> apellidos = $apellidos;
        }

        public function getTipoUsuario() {
            return $this -> tipoUsuario;
        }

        public function setTipoUsuario($tipoUsuario) {
            $this -> tipoUsuario = $tipoUsuario;
        }	
    }

?>
