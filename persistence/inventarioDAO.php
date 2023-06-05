<?php
	/**
	 * Clase InventarioDAO
	 * 
	 * Esta clase implementa la interfaz CRUD y proporciona métodos para gestionar el inventario utilizando una base de datos.
	 */
	class InventarioDAO implements CRUD {
		private $listaInventario;
		private $link;
		private $util;

		/**
		 * Constructor de la clase.
		 * Crea una instancia de la clase Conexion y obtiene una conexión PDO.
		 * Inicializa la lista de inventario y la instancia de DAOUtil.
		 */
		public function __construct() {
			$conexion = new Conexion();
			$this->link = $conexion->getConexion();
			$this->listaInventario = array();
			$this->util = new DAOUtil();
		}

		/**
		 * Método para agregar un nuevo inventario.
		 *
		 * @param Inventario $nuevoInventario El objeto Inventario a agregar.
		 * @return void
		 */
		public function agregar($nuevoInventario) {
			$mapa = array(
				":upc" => $nuevoInventario->getUpc(),
				":marca_producto" => $nuevoInventario->getMarca_producto(),
				":nombre" => $nuevoInventario->getNombre(),
				":precio" => $nuevoInventario->getPrecio(),
				":cantidad" => $nuevoInventario->getCantidad()
			);
			$this->util->agregar($this->link, "INSERT INTO Inventario VALUES(null, :upc, :marca_producto, :nombre, :precio, :cantidad)", $mapa);
			$this->mostrarLista();
		}

		/**
		 * Método para eliminar un inventario por su ID.
		 *
		 * @param mixed $idInventario El ID del inventario a eliminar.
		 * @return void
		 */
		public function eliminar($idInventario) {
			$this->util->eliminar($this->link, "DELETE FROM Inventario WHERE id_inventario = :id", $idInventario);
			$this->mostrarLista();
		}

		/**
		 * Método para actualizar un inventario.
		 *
		 * @param mixed $idInventario El ID del inventario a actualizar.
		 * @param Inventario $nuevoInventario El objeto Inventario con los nuevos valores.
		 * @return void
		 */
		public function actualizar($idInventario, $nuevoInventario) {
			$mapa = array(
				":id" => $idInventario,
				":marca_producto" => $nuevoInventario->getMarca_producto(),
				":nombre" => $nuevoInventario->getNombre(),
				":precio" => $nuevoInventario->getPrecio(),
				":cantidad" => $nuevoInventario->getCantidad()
			);
			$this->util->actualizar($this->link, "UPDATE Inventario SET upc = :upc, marca_producto = :marca_producto, nombre = :nombre, precio = :precio, cantidad = :cantidad WHERE id_inventario = :id", $mapa);
			$this->mostrarLista();
		}

		/**
		 * Método para mostrar la lista de inventario.
		 *
		 * @return array Un array de objetos Inventario que representa la lista de inventario.
		 */
		public function mostrarLista() {
			$lista = $this->util->mostrarLista($this->link, "SELECT * FROM Inventario", array());
			$query = "SELECT * FROM inventario inv, ventainventario vi, venta ve WHERE inv.id_inventario = vi.id_inventario AND vi.id_venta = ve.id_venta AND inv.id_inventario = :id";
			foreach ($lista as $value) {
				$idInventario = $value['id_inventario'];
				$listaVentas = $this->util->mostrarLista($this->link, $query, array(":id" => $idInventario));
				$this->listaInventario[] = new Inventario($idInventario, $value['upc'], $value['marca_producto'], $value['nombre'], $value['precio'], $value['cantidad'], $listaVentas);
			}
			return $this->listaInventario;
		}
	}
?>