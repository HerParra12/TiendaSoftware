<?php

    interface CRUD {

        public function agregar($nuevoValor);
        public function eliminar($id);
        public function actualizar($id, $nuevoValor);
        public function mostrarLista();
        
    }

?>