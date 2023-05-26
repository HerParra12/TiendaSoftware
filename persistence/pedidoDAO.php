<?php

    require_once '../model/pedido.php';
    require_once 'crud.php';

    class PedidoDAO implements CRUD {

        private $listaPedido;

        public function __construct() {
            $this -> listaPedido = null;
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