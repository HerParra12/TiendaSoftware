<?php
	/**
	 * Clase Venta
	 * 
	 * Esta clase representa una venta en el sistema.
	 */
	class Venta {

		private $idVenta;
		private $fechaVenta;
		private $totalVenta;
		private $listaInventario;

		/**
		 * Constructor de la clase.
		 * Crea una nueva instancia de la clase Venta.
		 *
		 * @param mixed $idVenta El ID de la venta.
		 * @param string $fechaVenta La fecha de la venta.
		 * @param float $totalVenta El total de la venta.
		 * @param array $listaInventario La lista de inventario de la venta.
		 */
		public function __construct($idVenta, $fechaVenta, $totalVenta, $listaInventario) {
			$this->idVenta = $idVenta;
			$this->fechaVenta = $fechaVenta;
			$this->totalVenta = $totalVenta;
			$this->listaInventario = $listaInventario;
		}

		/**
		 * Método mágico __toString().
		 * Devuelve una representación en cadena de la venta.
		 *
		 * @return string La representación en cadena de la venta.
		 */
		public function __toString() {
			return "idVenta: " . $this->idVenta . "\n" . 
				   "fecha venta: " . $this->fechaVenta . "\n" . 
				   "total venta: " . $this->totalVenta . "\n";
		}

		/**
		 * Método getter para obtener el ID de la venta.
		 *
		 * @return mixed El ID de la venta.
		 */
		public function getIdVenta() {
			return $this->idVenta;
		}

		/**
		 * Método setter para establecer el ID de la venta.
		 *
		 * @param mixed $idVenta El ID de la venta.
		 * @return void
		 */
		public function setIdVenta($idVenta) {
			$this->idVenta = $idVenta;
		}

		/**
		 * Método getter para obtener la fecha de la venta.
		 *
		 * @return string La fecha de la venta.
		 */
		public function getFechaVenta() {
			return $this->fechaVenta;
		}

		/**
		 * Método setter para establecer la fecha de la venta.
		 *
		 * @param string $fechaVenta La fecha de la venta.
		 * @return void
		 */
		public function setFechaVenta($fechaVenta) {
			$this->fechaVenta = $fechaVenta;
		}

		/**
		 * Método getter para obtener el total de la venta.
		 *
		 * @return float El total de la venta.
		 */
		public function getTotalVenta() {
			return $this->totalVenta;
		}

		/**
		 * Método setter para establecer el total de la venta.
		 *
		 * @param float $totalVenta El total de la venta.
		 * @return void
		 */
		public function setTotalVenta($totalVenta) {
			$this->totalVenta = $totalVenta;
		}

		/**
		 * Método getter para obtener la lista de inventario de la venta.
		 *
		 * @return array La lista de inventario de la venta.
		 */
		public function getListaInventario() {
			return $this->listaInventario;
		}

		/**
		 * Método setter para establecer la lista de inventario de la venta.
		 *
		 * @param array $listaInventario La lista de inventario de la venta.
		 * @return void
		 */
		public function setListaInventario($listaInventario) {
			$this->listaInventario = $listaInventario;
		}
	}
?>