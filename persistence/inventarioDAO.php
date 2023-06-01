<?php

    require_once '../model/inventario.php';
    require_once 'crud.php';

    class InventarioDAO implements CRUD {

        private $listaInventario;
        private $link;

        public function __construct() {
            $conexion = new Conexion();
            $this -> link = $conexion -> getConexion();
            $this -> listaInventario = null;
        }

        public function agregar() {

        }

        public function eliminar() {

        }

        public function actualizar() {

        }
        
        public function mostrarLista() {
            try {
                $query = "SELECT * FROM inventario";
                $stmt = $this->db->query($query);
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
            } catch(PDOException $e) {
                echo "Error al obtener los datos del inventario: " . $e->getMessage();
                return null;
            }
        }
    }

?>