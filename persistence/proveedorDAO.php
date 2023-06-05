<?php

	require_once 'crud.php';
	require_once 'conexion.php';
	require_once 'DAOUtil.php';

	/**
	 * Clase ProveedorDAO
	 * 
	 * Esta clase implementa la interfaz CRUD y proporciona métodos para gestionar los proveedores utilizando una base de datos.
	 */
	class ProveedorDAO implements CRUD {

		private $listaProveedores;
		private $link;
		private $util;

		/**
		 * Constructor de la clase.
		 * Crea una instancia de la clase Conexion y obtiene una conexión PDO.
		 * Inicializa la lista de proveedores y la instancia de DAOUtil.
		 */
		public function __construct() {
			$conexion = new Conexion();
			$this->link = $conexion->getConexion();
			$this->listaProveedores = array();
			$this->util = new DAOUtil();
		}

		/**
		 * Método para agregar un nuevo proveedor.
		 *
		 * @param Proveedor $nuevoProveedor El objeto Proveedor a agregar.
		 * @return void
		 */
		public function agregar($nuevoProveedor) {
			$mapa = array(
				":nit" => $nuevoProveedor->getNit(),
				":nombre" => $nuevoProveedor->getNombre(),
				":direccion" => $nuevoProveedor->getDireccion(),
				":correo" => $nuevoProveedor->getCorreo()
			);
			$this->util->agregar($this->link, "INSERT INTO Proveedor VALUES(null, :nit, :nombre, :direccion, :correo)", $mapa);
		}

		/**
		 * Método para eliminar un proveedor por su ID.
		 *
		 * @param mixed $idProveedor El ID del proveedor a eliminar.
		 * @return void
		 */
		public function eliminar($idProveedor) {
			$this->util->eliminar($this->link, "DELETE FROM Telefono WHERE id_proveedor = :id", $idProveedor);
			$this->util->eliminar($this->link, "DELETE FROM Proveedor WHERE id_proveedor = :id", $idProveedor);
			$this->mostrarLista();
		}

		/**
		 * Método para actualizar un proveedor.
		 *
		 * @param mixed $idProveedor El ID del proveedor a actualizar.
		 * @param Proveedor $nuevoProveedor El objeto Proveedor con los nuevos valores.
		 * @return void
		 */
		public function actualizar($idProveedor, $nuevoProveedor) {
			$mapa = array(
				":id" => $idProveedor,
				":nit" => $nuevoProveedor->getNit(),
				":nombre" => $nuevoProveedor->getNombre(),
				":direccion" => $nuevoProveedor->getDireccion(),
				":correo" => $nuevoProveedor->getCorreo()
			);
			$this->util->actualizar($this->link, "UPDATE Proveedor SET nit = :nit, nombre = :nombre, direccion = :direccion, correo = :correo WHERE id_proveedor = :id", $mapa);
			$this->mostrarLista();
		}

		/**
		 * Método para mostrar la lista de proveedores.
		 *
		 * @return array Un array de objetos Proveedor que representa la lista de proveedores.
		 */
		public function mostrarLista() {
			$this -> listaProveedores = array();
			$lista = $this->util->mostrarLista($this->link, "SELECT * FROM Proveedor", array());
			foreach ($lista as $value) {
				$idProveedor = $value['id_proveedor'];
				$telefonos = $this->util->mostrarLista($this->link, "SELECT * FROM Telefono WHERE id_proveedor = :id", array(":id" => $idProveedor));
				$proveedor = new Proveedor($idProveedor, $value['nit'], $value['nombre'], $value['direccion'], $value['correo'], $telefonos);
				$this->listaProveedores[] = $proveedor;
			}
			return $this->listaProveedores;
		}
		/**
		 * Método para contar la cantidad de proveedores cuyo nombre contiene la subcadena "car".
		 *
		 * @return int La cantidad de proveedores.
		 */
		public function contarProveedoresConNombreCar() {
			$statement = $this->link->prepare("SELECT COUNT(*) as count FROM Proveedor");
			$statement->execute();
			$result = $statement->fetch(PDO::FETCH_ASSOC);

			return $result['count'];
		}
	}

?>