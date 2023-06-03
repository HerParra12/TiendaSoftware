<?php

    require_once 'crud.php';
    require_once 'conexion.php';

    class UsuarioDAO implements CRUD {

        private $listaUsuarios;
        private $link;
        private $util;

        public function __construct() {
            $conexion = new Conexion();
            $this -> link = $conexion -> getConexion();
            $this -> listaUsuarios =  array();
            $this -> util = new DAOUtil();
        }

        public function agregar($nuevoUsuario) {
            $mapa = array(
                ":nombres" => $nuevoUsuario -> getNombres(),
                ":apellidos" => $nuevoUsuario -> getApellidos(),
                ":correo" => $nuevoUsuario -> getCorreo(),
                ":rol" => $nuevoUsuario -> getRole(),
                ":fecha_nacimiento" => $nuevoUsuario -> getFechaNacimiento()
            );
            $this -> util -> agregar($this -> link, "INSERT INTO Usuario VALUES(null, :nombres, :apellidos, :correo, :rol, :fecha_nacimiento)", $mapa);
            $this -> mostrarLista();
        }

        public function eliminar($idUsuario) {
            $this -> util -> eliminar($this -> link, "DELETE FROM Usuario WHERE id_usuario = :id", $idUsuario);
            $this -> mostrarLista();
        }

        public function actualizar($idUsuario, $nuevoUsuario) {
            $mapa = array(
                ":id" => $idUsuario,
                ":nombres" => $nuevoUsuario -> getNombres(),
                ":apellidos" => $nuevoUsuario -> getApellidos(),
                ":correo" => $nuevoUsuario -> getCorreo(),
                ":rol" => $nuevoUsuario -> getRole(),
                ":fecha_nacimiento" => $nuevoUsuario -> getFechaNacimiento()
            );
            $this -> util -> agregar($this -> link, "UPDATE Usuario SET nombres = :nombres, apellidos = :apellidos, correo = :correo, rol = :rol, fecha_nacimiento = :fecha_nacimiento WHERE id_usuario = :id", $mapa);
            $this -> mostrarLista();
        }
        
        public function mostrarLista() {
            $lista = $this -> util -> mostrarLista($this -> link, "SELECT * FROM Usuario", array());
            foreach($lista as $value) {
                $idUsuario = $value['id_usuario'];
                $this -> listaUsuarios[] = new Usuario($idUsuario, $value['nombres'], $value['apellidos'], $value['rol'], $value['correo'], $value['fecha_nacimiento'], array());
            }
            return $this -> listaUsuarios;
        }
    }
?>