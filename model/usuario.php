<?php
    
    class Usuario {

        private $idUsuario;
        private $nombres;
        private $apellidos;
        private $role;
        private $correo;
        private $fechaNacimiento;

        public function __construct($idUsuario, $nombres, $apellidos, $role, $correo, $fechaNacimiento) {
            $this -> idUsuario = $idUsuario;
            $this -> nombres = $nombres;
            $this -> apellidos = $apellidos;
            $this -> role = $role;
            $this -> correo = $correo;
            $this -> fechaNacimiento = $fechaNacimiento;
        }
        
        public function __toString() {
            return "idUsuario: " . $this -> idUsuario . "\n" .
                   "nombres: " . $this -> nombres . "\n" . 
                   "apellidos: " . $this -> apellidos . "\n" .
                   "tipo usuario: " . $this -> role . 
                   "correo: " . $this -> correo . 
                   "fecha nacimiento: " . $this -> fechaNacimiento;
        }

        public function getIdUsuario() {
            return $this -> idUsuario;
        }

        public function setIdUsuario($idUsuario) {
            $this -> idUsuario = $idUsuario;
        }

        public function getNombres() {
            return $this -> nombres;
        }
    
        public function setNombres($nombres) {
            $this -> nombres = $nombres;
        }

        public function getApellidos() {
            return $this -> apellidos;
        }

        public function setApellidos($apellidos) {
            $this -> apellidos = $apellidos;
        }

        public function getRole() {
            return $this -> role;
        }

        public function setRole($role) {
            $this -> role = $role;
        }	

        public function getCorreo() {
            return $this -> correo;
        }
    
        public function setCorreo($correo) {
            $this -> correo = $correo;
        }
    
        public function getFechaNacimiento() {
            return $this -> fechaNacimiento;
        }
    
        public function setFechaNacimiento($fechaNacimiento) {
            $this -> fechaNacimiento = $fechaNacimiento;
        }
    }

?>
