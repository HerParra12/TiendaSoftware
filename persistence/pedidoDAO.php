<?php
	require_once '../model/pedido.php';
	require_once 'crud.php';
    require_once 'conexion.php';
	require_once 'DAOUtil.php';
	/**
	 * Clase PedidoDAO
	 * 
	 * Esta clase implementa la interfaz CRUD y proporciona métodos para gestionar los pedidos utilizando una base de datos.
	 */
	class PedidoDAO implements CRUD {
		private $listaPedidos;
		private $link;
		private $util;

		/**
		 * Constructor de la clase.
		 * Crea una instancia de la clase Conexion y obtiene una conexión PDO.
		 * Inicializa la lista de pedidos y la instancia de DAOUtil.
		 */
		public function __construct() {
			$conexion = new Conexion();
			$this->link = $conexion->getConexion();
			$this->listaPedidos = array();
			$this->util = new DAOUtil();
		}

		/**
		 * Método para agregar un nuevo pedido.
		 *
		 * @param Pedido $nuevoPedido El objeto Pedido a agregar.
		 * @return void
		 */
		public function agregar($nuevoPedido) {
			$mapa = array(
				":idProveedor" => $nuevoPedido->getIdProveedor(),
				":idProducto" => $nuevoPedido->getIdProducto(),
				":idUsuario" => $nuevoPedido->getIdUsuario(),
				":fechaPedido" => $nuevoPedido->getFecha(),
				":totalPedido" => $nuevoPedido->getTotalPedido()
			);
			$this->util->agregar($this->link, "INSERT INTO Pedido (null, id_proveedor, id_usuario, fecha_pedido, total_pedido) VALUES (:idProveedor, :idUsuario, :fechaPedido, :totalPedido)", $mapa);
			$this->mostrarLista();
		}


		/**
		 * Método para eliminar un pedido por su ID.
		 *
		 * @param mixed $idPedido El ID del pedido a eliminar.
		 * @return void
		 */
		public function eliminar($idPedido) {
			$this->util->eliminar($this->link, "DELETE FROM Pedido WHERE id_pedido = :id", $idPedido);
			$this->mostrarLista();
		}

		/**
		 * Método para actualizar un pedido.
		 *
		 * @param mixed $idPedido El ID del pedido a actualizar.
		 * @param Pedido $nuevoPedido El objeto Pedido con los nuevos valores.
		 * @return void
		 */
		public function actualizar($idPedido, $nuevoPedido) {
			$mapa = array(
				":id" => $idPedido,
				":idProveedor" => $nuevoPedido->getIdProveedor(),
				":idProducto" => $nuevoPedido->getIdProducto(),
				":idUsuario" => $nuevoPedido->getIdUsuario(),
				":fechaPedido" => $nuevoPedido->getFecha()
			);
			$this->util->actualizar($this->link, "UPDATE Pedido SET id_proveedor = :idProveedor, id_producto = :idProducto, id_usuario = :idUsuario, fecha_pedido = :fechaPedido WHERE id_pedido = :id", $mapa);
			$this->mostrarLista();
		}

		/**
		 * Método para mostrar la lista de pedidos.
		 *
		 * @return array Un array de objetos Pedido que representa la lista de pedidos.
		 */
		public function mostrarLista() {
			$lista = $this->util->mostrarLista($this->link, "SELECT * FROM Pedido", array());
			$query = "SELECT * FROM pedido p, pedidoinventario pi, inventario inv WHERE p.id_pedido = pi.id_pedido AND pi.id_inventario = inv.id_inventario AND p.id_pedido = :id";
			foreach ($lista as $value) {
				$idPedido = $value['id_pedido'];
				$listaInventario = $this->util->mostrarLista($this->link, $query, array(":id" => $idPedido));
				$this->listaPedidos[] =  new Pedido($idPedido, $value['id_proveedor'], $value['id_usuario'], $value['fecha_pedido'], $value['total_pedido'], $listaInventario);
			}
			return $this->listaPedidos;
		}
		
		public function obtenerMontoTotalPedidos() {
        $statement = $this->link->prepare("SELECT SUM(total_pedido) as total FROM Pedido");
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);

        return $result['total'];
    }
		
	}

?>
