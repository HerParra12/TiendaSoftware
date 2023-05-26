<?php

    require_once '../model/proveedor.php';
    require_once 'crud.php';

    class ProveedorDAO implements CRUD {

        private $listaProveedores;

        public function __construct() {
            $this -> listaProveedores = null;
        }

        public function agregar() {

        }

        public function eliminar() {

        }

        public function actualizar() {

        }
        
        public function mostrarLista() {

        }
    }

?>