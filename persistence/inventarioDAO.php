<?php

    require_once '../model/inventario.php';
    require_once 'crud.php';

    class InventarioDAO implements CRUD {

        private $listaInventario;

        public function __construct() {
            $this -> listaInventario = null;
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