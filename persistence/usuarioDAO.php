<?php

    require_once '../model/usuario.php';
    require_once 'crud.php';

    class UsuarioDAO implements CRUD {

        private $listaUsuarios;

        public function __construct() {
            $this -> listaUsuarios =  null;
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