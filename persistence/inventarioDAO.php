<?php

    require_once 'crud.php';
    require_once 'conexion.php';
    include 'DAOUtil.php';

    class InventarioDAO implements CRUD {

        private $listaInventario;
        private $link;
        private $util;

        public function __construct() {
            $conexion = new Conexion();
            $this -> link = $conexion -> getConexion();
            $this -> listaInventario = array();
            $this -> util = new DAOUtil();
        }

        public function agregar($nuevoInventario) {
            $mapa = array(
                ":nombre" => $nuevoInventario -> getNombre(),
                ":precio" =>  $nuevoInventario -> getPrecio(),
                ":cantidad" => $nuevoInventario -> getCantidad()
            );
            $this -> util -> agregar($this -> link, "INSERT INTO Inventario VALUES(null, :nombre, :precio, :cantidad)", $mapa);
            $this -> mostrarLista();
        }

        public function eliminar($idInventario) {
            $this -> util -> eliminar($this -> link, "DELETE FROM Inventario WHERE id_inventario = :id", $idInventario);
            $this -> mostrarLista();
        }

        public function actualizar($idInventario, $nuevoInventario) {
            $mapa = array(
                ":id" => $idInventario,
                ":nombre" => $nuevoInventario -> getNombre(),
                ":precio" =>  $nuevoInventario -> getPrecio(),
                ":cantidad" => $nuevoInventario -> getCantidad()
            );
            $this -> util -> actualizar($this -> link, "UPDATE Inventario SET nombre = :nombre, precio = :precio, cantidad = :cantidad WHERE id_inventario = :id", $mapa);
            $this -> mostrarLista();
        }
        
        public function mostrarLista() {
            $lista = $this -> util -> mostrarLista($this -> link, "SELECT * FROM Inventario", array());
            $query = "SELECT * FROM inventario inv, ventainventario vi, venta ve WHERE inv.id_inventario = vi.id_inventario AND vi.id_venta = ve.id_venta AND inv.id_inventario = :id";
            foreach($lista as $value) {
                $idInventario = $value['id_inventario'];
                $listaVentas = $this -> util -> mostrarLista($this -> link, $query, array(":id" => $idInventario));
                $this -> listaInventario[] = new Inventario($idInventario, $value['nombre'], $value['precio'], $value['cantidad'], $listaVentas);
            }
            return $this -> listaInventario;
        }
    }

?>