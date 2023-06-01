<?php

    require_once 'crud.php';
    require_once 'conexion.php';

    class UsuarioDAO implements CRUD {

        private $listaUsuarios;
        private $link;

        public function __construct() {
            $conexion = new Conexion();
            $this -> link = $conexion -> getConexion();
            $this -> listaUsuarios =  array();
        }

        public function agregar($nuevoUsuario) {
            try {
                $query = "INSERT INTO Usuario VALUES(null, :nombres, :apellidos, :correo, :rol, :fecha_nacimiento)";
                $statement = $this -> link -> prepare($query);
                $statement -> bindValue(':nombres', $nuevoUsuario -> getNombres());
                $statement -> bindValue(':apellidos', $nuevoUsuario -> getApellidos());
                $statement -> bindValue(':correo', $nuevoUsuario -> getCorreo());
                $statement -> bindValue(':rol', $nuevoUsuario -> getRole());
                $statement -> bindValue(':fecha_nacimiento',  $nuevoUsuario -> getFechaNacimiento());
                $statement -> execute();
                $this -> mostrarLista();
            } catch (PDOException $error) {
                echo "Error al obtener los datos del inventario: " . $error -> getMessage();
                return null;
            }
        }

        public function eliminar($idUsuario) {
            try {
                $query = "DELETE FROM Usuario WHERE id_usuario = :id";
                $statement = $this -> link -> prepare($query);
                $statement -> bindValue(':id', $idUsuario);
                $statement -> execute();
                $this -> mostrarLista();
            }catch (PDOException $error) {
                echo "Error al obtener los datos del inventario: " . $error -> getMessage();
                return null;
            }
        }

        public function actualizar($idUsuario, $nuevoUsuario) {
            try {
                $query = "UPDATE Usuario SET nombres = :nombres, apellidos = :apellidos, correo = :correo, rol = :rol, fecha_nacimiento = :fecha_nacimiento WHERE id_usuario = :id";
                echo $query;
                $statement = $this -> link -> prepare($query);
                $statement -> bindValue(':id', $idUsuario);
                $statement -> bindValue(':nombres', $nuevoUsuario -> getNombres());
                $statement -> bindValue(':apellidos', $nuevoUsuario -> getApellidos());
                $statement -> bindValue(':correo', $nuevoUsuario -> getCorreo());
                $statement -> bindValue(':rol', $nuevoUsuario -> getRole());
                $statement -> bindValue(':fecha_nacimiento',  $nuevoUsuario -> getFechaNacimiento());
                $statement -> execute();
                $this -> mostrarLista();
            } catch (PDOException $error) {
                echo "Error al obtener los datos del inventario: " . $error -> getMessage();
                return null;
            }
        }
        
        public function mostrarLista() {
            try {
                $query = "SELECT * FROM Usuario";
                $statement = $this -> link -> query($query);
                $results = $statement -> fetchAll(PDO::FETCH_ASSOC);
                foreach($results as $value) {
                    $this -> listaUsuarios[] = new Usuario($value['id_usuario'], $value['nombres'], $value['apellidos'], $value['correo'], $value['rol'], $value['fecha_nacimiento']);
                }
                return $this -> listaUsuarios;
            } catch(PDOException $error) {
                echo "Error al obtener los datos del inventario: " . $error -> getMessage();
                return array();
            }
        }
    }
?>