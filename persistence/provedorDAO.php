<?php

    require_once 'crud.php';
    require_once 'conexion.php';
    include 'DAOUtil.php';

    class ProveedorDAO implements CRUD {

        private $listaProveedores;
        private $link;
        private $util;

        public function __construct() {
            $conexion = new Conexion();
            $this -> link = $conexion -> getConexion();
            $this -> listaProveedores = array();
            $this -> util = new DAOUtil();
        }

        public function agregar($nuevoProveedor) {
            $mapa = array(
                ":nit" => $nuevoProveedor -> getNit(),
                ":nombre" => $nuevoProveedor -> getNombre(),
                ":direccion" => $nuevoProveedor -> getDireccion(),
                ":correo" => $nuevoProveedor -> getCorreo()
            );
            $this -> util -> agregar($this -> link, "INSERT INTO Proveedor VALUES(null, :nit, :nombre, :direccion, :correo)", $mapa);
        }

        public function eliminar($idProveedor) {
            $this -> util -> eliminar($this -> link, "DELETE FROM Proveedor WHERE id_proveedor = :id", $idProveedor);
            $this -> mostrarLista();
        }

        public function actualizar($idProveedor, $nuevoProveedor) {
            $mapa = array(
                ":id" => $idProveedor,
                ":nit" => $nuevoProveedor -> getNit(),
                ":nombre" => $nuevoProveedor -> getNombre(),
                ":direccion" => $nuevoProveedor -> getDireccion(),
                ":correo" => $nuevoProveedor -> getCorreo()
            );
            $this -> util -> actualizar($this -> link, "UPDATE Proveedor SET nit = :nit, nombre = :nombre, direccion = :direccion, correo = :correo WHERE id_proveedor = :id", $mapa);
            $this -> mostrarLista();
        }
        
        public function mostrarLista() {
            $lista = $this -> util -> mostrarLista($this -> link, "SELECT * FROM Proveedor", array());
            foreach($lista as $value) {
                $idProveedor = $value['id_proveedor'];
                $user = new Proveedor($idProveedor, $value['nit'], $value['nombre'], $value['direccion'], $value['correo']);
                $mapa = array(":id" => $idProveedor);
                $user -> setListaTelefono($this -> util -> mostrarLista($this -> link, "SELECT * FROM Telefono WHERE id_usuario = :id", $mapa));
                $this -> listaProveedores[] = $user;
            }            
            return $this -> listaProveedores;
        }
    }

?>