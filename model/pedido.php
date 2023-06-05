<?php
	/**
	 * Clase Pedido
	 * 
	 * Esta clase representa un pedido realizado en el sistema.
	 */
	class Pedido {

		private $idPedido;
		private $proveedor;
		private $usuario;
		private $fecha;
		private $totalPedido;
		private $listaInventario;

		/**
		 * Constructor de la clase.
		 * Crea una nueva instancia de la clase Pedido.
		 *
		 * @param mixed $idPedido El ID del pedido.
		 * @param string $proveedor El proveedor del pedido.
		 * @param string $usuario El usuario que realizó el pedido.
		 * @param string $fecha La fecha del pedido.
		 * @param float $totalPedido El total del pedido.
		 * @param string $medioPago El medio de pago utilizado para el pedido.
		 */
		public function __construct($idPedido, $proveedor, $usuario, $fecha, $totalPedido, $listaInventario) {
			$this->idPedido = $idPedido;
			$this->proveedor = $proveedor;
			$this->usuario = $usuario;
			$this->fecha = $fecha;
			$this->totalPedido = $totalPedido;
			$this->listaInventario = $listaInventario;
		}

		/**
		 * Método mágico __toString().
		 * Devuelve una representación en cadena del pedido.
		 *
		 * @return string La representación en cadena del pedido.
		 */
		public function __toString() {
			return "idPedido: " . $this->idPedido . "\n" .
				   "proveedor: " . $this->proveedor . "\n" .
				   "usuario: " . $this->usuario . "\n" . 
				   "fecha: " . $this->fecha . "\n" .
				   "total pedido: " . $this->totalPedido . "\n" .
				   "medio pago: " . $this->medioPago;
		}

		/**
		 * Método getter para obtener el ID del pedido.
		 *
		 * @return mixed El ID del pedido.
		 */
		public function getIdPedido() {
			return $this->idPedido;
		}

		/**
		 * Método setter para establecer el ID del pedido.
		 *
		 * @param mixed $idPedido El ID del pedido.
		 * @return void
		 */
		public function setIdPedido($idPedido) {
			$this->idPedido = $idPedido;
		}

		/**
		 * Método getter para obtener el proveedor del pedido.
		 *
		 * @return string El proveedor del pedido.
		 */
		public function getProveedor() {
			return $this->proveedor;
		}

		/**
		 * Método setter para establecer el proveedor del pedido.
		 *
		 * @param string $proveedor El proveedor del pedido.
		 * @return void
		 */
		public function setProveedor($proveedor) {
			$this->proveedor = $proveedor;
		}

		/**
		 * Método getter para obtener el usuario que realizó el pedido.
		 *
		 * @return string El usuario que realizó el pedido.
		 */
		public function getUsuario() {
			return $this->usuario;
		}

		/**
		 * Método setter para establecer el usuario que realizó el pedido.
		 *
		 * @param string $usuario El usuario que realizó el pedido.
		 * @return void
		 */
		public function setUsuario($usuario) {
			$this->usuario = $usuario;
		}

		/**
		 * Método getter para obtener la fecha del pedido.
		 *
		 * @return string La fecha del pedido.
		 */
		public function getFecha() {
			return $this->fecha;
		}

		/**
		 * Método setter para establecer la fecha del pedido.
		 *
		 * @param string $fecha La fecha del pedido.
		 * @return void
		 */
		public function setFecha($fecha) {
			$this->fecha = $fecha;
		}

		/**
		 * Método getter para obtener el total del pedido.
		 *
		 * @return float El total del pedido.
		 */
		public function getTotalPedido() {
			return $this->totalPedido;
		}

		/**
		 * Método setter para establecer el total del pedido.
		 *
		 * @param float $totalPedido El total del pedido.
		 * @return void
		 */
		public function setTotalPedido($totalPedido) {
			$this->totalPedido = $totalPedido;
		}	
	}
?>
