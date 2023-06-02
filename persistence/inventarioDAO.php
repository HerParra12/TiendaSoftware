<?php

    require_once 'crud.php';
    require_once 'conexion.php';

    class InventarioDAO implements CRUD {

        private $listaInventario;
        private $link;

        public function __construct() {
            $conexion = new Conexion();
            $this -> link = $conexion -> getConexion();
            $this -> listaInventario = array();
        }

        public function agregar($nuevoInventario) {
            try {
                $query = "INSERT INTO Inventario VALUES(null, :nombre, :precio, :cantidad)";
                $statement = $this -> link -> prepare($query);
                $statement -> bindValue(':nombre', $nuevoInventario -> getNombre());
                $statement -> bindValue(':precio', $nuevoInventario -> getPrecio());
                $statement -> bindValue(':cantidad', $nuevoInventario -> getCantidad());
                $statement -> execute();
                $this -> mostrarLista();
            } catch (PDOException $error) {
                echo "Error al obtener los datos del inventario: " . $error -> getMessage();
                return null;
            }
        }

        public function eliminar($idInventario) {
            try {
                $query = "DELETE FROM Inventario WHERE id_inventario = :id";
                $statement = $this -> link -> prepare($query);
                $statement -> bindValue(':id', $idInventario);
                $statement -> execute();
                $this -> mostrarLista();
            }catch (PDOException $error) {
                echo "Error al obtener los datos del inventario: " . $error -> getMessage();
                return null;
            }
        }

        public function actualizar($idInventario, $nuevoInventario) {
            try {
                $query = "UPDATE Inventario SET nombre = :nombre, precio = :precio, cantidad = :cantidad WHERE id_inventario = :id";
                $statement = $this -> link -> prepare($query);
                $statement -> bindValue(':id', $idInventario);
                $statement -> bindValue(':nombre', $nuevoInventario -> getNombre());
                $statement -> bindValue(':precio', $nuevoInventario -> getPrecio());
                $statement -> bindValue(':cantidad', $nuevoInventario -> getCantidad());
                $statement -> execute();
                $this -> mostrarLista();
            } catch (PDOException $error) {
                echo "Error al obtener los datos del inventario: " . $error -> getMessage();
                return null;
            }
        }
        
        public function mostrarLista() {
            try {
                $query = "SELECT * FROM Inventario";
                $statement = $this -> link -> query($query);
                $results = $statement -> fetchAll(PDO::FETCH_ASSOC);
                foreach($results as $value) {
                    $this -> listaInventario[] = new Inventario($value['id_inventario'], $value['nombre'], $value['precio'], $value['cantidad']);
                }
                return $this -> listaInventario;
            } catch(PDOException $error) {
                echo "Error al obtener los datos del inventario: " . $error -> getMessage();
                return array();
            }
        }
    }

?>