<?php

    require_once 'crud.php';
    require_once 'conexion.php';

    class ProveedorDAO implements CRUD {

        private $listaProveedores;
        private $link;

        public function __construct() {
            $conexion = new Conexion();
            $this -> link = $conexion -> getConexion();
            $this -> listaProveedores = array();
        }

        public function agregar($nuevoProveedor) {
            try {
                $query = "INSERT INTO Proveedor VALUES(null, :nit, :nombre, :direccion, :correo)";
                $statement = $this -> link -> prepare($query);
                $statement -> bindValue(':nit', $nuevoProveedor -> getNit());
                $statement -> bindValue(':nombre', $nuevoProveedor -> getNombre());
                $statement -> bindValue(':direccion', $nuevoProveedor -> getDireccion());
                $statement -> bindValue(':correo', $nuevoProveedor -> getCorreo());
                $statement -> execute();
                $this -> mostrarLista();
            } catch (PDOException $error) {
                echo "Error al obtener los datos del proveedor: " . $error -> getMessage();
                return null;
            }
        }

        public function eliminar($idProveedor) {
            try {
                $query = "DELETE FROM Proveedor WHERE id_proveedor = :id";
                $statement = $this -> link -> prepare($query);
                $statement -> bindValue(':id', $idProveedor);
                $statement -> execute();
                $this -> mostrarLista();
            }catch (PDOException $error) {
                echo "Error al obtener los datos del proveedor: " . $error -> getMessage();
                return null;
            }
        }

        public function actualizar($idProveedor, $nuevoProveedor) {
            try {
                $query = "UPDATE Proveedor SET nit = :nit, nombre = :nombre, direccion = :direccion, correo = :correo WHERE id_proveedor = :id";
                $statement = $this -> link -> prepare($query);
                $statement -> bindValue(':id', $idProveedor);
                $statement -> bindValue(':nit', $nuevoProveedor -> getNit());
                $statement -> bindValue(':nombre', $nuevoProveedor -> getNombre());
                $statement -> bindValue(':direccion', $nuevoProveedor -> getDireccion());
                $statement -> bindValue(':correo', $nuevoProveedor -> getCorreo());
                $statement -> execute();
                $this -> mostrarLista();
            } catch (PDOException $error) {
                echo "Error al obtener los datos del proveedor: " . $error -> getMessage();
                return null;
            }
        }
        
        public function mostrarLista() {
            echo "<br><br>";
            try {
                $query = "SELECT * FROM Proveedor";
                $statement = $this -> link -> query($query);
                $results = $statement -> fetchAll(PDO::FETCH_ASSOC);
                foreach($results as $value) {
                    $this -> listaProveedores[] = new Proveedor($value['id_proveedor'], $value['nit'], $value['nombre'], $value['direccion'], $value['correo']);
                }
                return $this -> listaProveedores;
            } catch(PDOException $error) {
                echo "Error al obtener los datos del proveedor: " . $error -> getMessage();
                return array();
            }
        }
    }

?>