<?php

    require_once 'crud.php';
    require_once 'conexion.php';

    class VentaDAO implements CRUD {

        private $listaVenta;

        public function __construct() {
            $conexion = new Conexion();
            $this -> link = $conexion -> getConexion();
            $this -> listaVenta = array();
        }

        public function agregar($nuevaVenta) {
            try {
                $query = "INSERT INTO Usuario VALUES(null, :nombres, :apellidos, :correo, :rol, :fecha_nacimiento)";
                $statement = $this -> link -> prepare($query);
                $statement -> bindValue(':nombres', $nuevaCompra -> getNombres());
                $statement -> bindValue(':apellidos', $nuevaCompra -> getApellidos());
                $statement -> bindValue(':correo', $nuevaCompra -> getCorreo());
                $statement -> bindValue(':rol', $nuevaCompra -> getRole());
                $statement -> bindValue(':fecha_nacimiento',  $nuevaCompra -> getFechaNacimiento());
                $statement -> execute();
                $this -> mostrarLista();
            } catch (PDOException $error) {
                return null;
            }
        }

        public function eliminar() {

        }

        public function actualizar() {

        }
        
        public function mostrarLista() {

        }
    }

?>