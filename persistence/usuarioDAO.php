<?php

	require_once 'crud.php';
    require_once 'conexion.php';
	/**
	 * Clase UsuarioDAO
	 * 
	 * Esta clase implementa la interfaz CRUD y proporciona métodos para gestionar los usuarios utilizando una base de datos.
	 */
	class UsuarioDAO implements CRUD {

		private $listaUsuarios;
		private $link;
		private $util;

		/**
		 * Constructor de la clase.
		 * Crea una instancia de la clase Conexion y obtiene una conexión PDO.
		 * Inicializa la lista de usuarios y la instancia de DAOUtil.
		 */
		public function __construct() {
			$conexion = new Conexion();
			$this->link = $conexion->getConexion();
			$this->listaUsuarios = array();
			$this->util = new DAOUtil();
		}

		/**
		 * Método para agregar un nuevo usuario.
		 *
		 * @param Usuario $nuevoUsuario El objeto Usuario a agregar.
		 * @return void
		 */
		public function agregar($nuevoUsuario) {
			$mapa = array(
				":nombres" => $nuevoUsuario->getNombres(),
				":apellidos" => $nuevoUsuario->getApellidos(),
				":correo" => $nuevoUsuario->getCorreo(),
				":rol" => $nuevoUsuario->getRole(),
				":fecha_nacimiento" => $nuevoUsuario->getFechaNacimiento()
			);
			$this->util->agregar($this->link, "INSERT INTO Usuario VALUES(null, :nombres, :apellidos, :correo, :rol, :fecha_nacimiento)", $mapa);
			$this->mostrarLista();
		}

		/**
		 * Método para eliminar un usuario por su ID.
		 *
		 * @param mixed $idUsuario El ID del usuario a eliminar.
		 * @return void
		 */
		public function eliminar($idUsuario) {
			$this->util->eliminar($this->link, "DELETE FROM Usuario WHERE id_usuario = :id", $idUsuario);
			$this->mostrarLista();
		}

		/**
		 * Método para actualizar un usuario.
		 *
		 * @param mixed $idUsuario El ID del usuario a actualizar.
		 * @param Usuario $nuevoUsuario El objeto Usuario con los nuevos valores.
		 * @return void
		 */
		public function actualizar($idUsuario, $nuevoUsuario) {
			$mapa = array(
				":id" => $idUsuario,
				":nombres" => $nuevoUsuario->getNombres(),
				":apellidos" => $nuevoUsuario->getApellidos(),
				":correo" => $nuevoUsuario->getCorreo(),
				":rol" => $nuevoUsuario->getRole(),
				":fecha_nacimiento" => $nuevoUsuario->getFechaNacimiento()
			);
			$this->util->agregar($this->link, "UPDATE Usuario SET nombres = :nombres, apellidos = :apellidos, correo = :correo, rol = :rol, fecha_nacimiento = :fecha_nacimiento WHERE id_usuario = :id", $mapa);
			$this->mostrarLista();
		}
		
		/**
		 * Método para mostrar la lista de usuarios.
		 *
		 * @param mixed $idPedido El ID del pedido.
		 * @return array Un array de objetos Usuario que representa la lista de usuarios asociados a un pedido.
		 */
		public function mostrarLista($idPedido) {
			$query = "SELECT u.* FROM Usuario u, Pedido p WHERE u.id_usuario = p.id_usuario AND p.id_pedido = :idPedido";
			$usuarios = $this->util->mostrarLista($this->link, $query, array(":idPedido" => $idPedido));
			$this->listaUsuarios = array();
			foreach($usuarios as $usuario) {
				$this->listaUsuarios[] = new Usuario($usuario['id_usuario'], $usuario['nombres'], $usuario['apellidos'], $usuario['correo'], $usuario['rol'], $usuario['fecha_nacimiento']);
			}
			return $this->listaUsuarios;
		}
		
		/**
		 * Método para mostrar la lista completa de usuarios.
		 *
		 * @return array Un array de objetos Usuario que representa la lista de todos los usuarios.
		 */
		public function mostrarLista() {
			$lista = $this->util->mostrarLista($this->link, "SELECT * FROM Usuario", array());
			$query = "SELECT * FROM Usuario u, Pedido p WHERE u.id_usuario = p.id_usuario AND u.id_usuario = :id";
			foreach($lista as $value) {
				$idUsuario = $value['id_usuario'];
				$listaPedidos = $this->util->mostrarLista($this->link, $query, array(":id" => $idUsuario));
				$this->listaUsuarios[] = new Usuario($idUsuario, $value['nombres'], $value['apellidos'], $value['correo'], $value['rol'], $value['fecha_nacimiento']);
			}
			return $this->listaUsuarios;
		}

	}
?>