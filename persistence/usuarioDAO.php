<?php

    require_once '../model/usuario.php';

    class UsuarioDAO {

        private $listaUsuarios;

        public function __construct() {
            $this -> listaUsuarios =  null;
        }
    }
?>