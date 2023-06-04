<?php
	/**
	 * Clase Proveedor
	 * 
	 * Esta clase representa un proveedor en el sistema.
	 */
	class Proveedor {

		private $idProveedor;
		private $nit;
		private $nombre;
		private $direccion;
		private $correo;
		private $listaTelefono;

		/**
		 * Constructor de la clase.
		 * Crea una nueva instancia de la clase Proveedor.
		 *
		 * @param mixed $idProveedor El ID del proveedor.
		 * @param string $nit El NIT del proveedor.
		 * @param string $nombre El nombre del proveedor.
		 * @param string $direccion La dirección del proveedor.
		 * @param string $correo El correo electrónico del proveedor.
		 * @param array $listaTelefono La lista de números de teléfono del proveedor.
		 */
		public function __construct($idProveedor, $nit, $nombre, $direccion, $correo, $listaTelefono) {
			$this->idProveedor = $idProveedor;
			$this->nit = $nit;
			$this->nombre = $nombre;
			$this->direccion = $direccion;
			$this->correo = $correo;
			$this->listaTelefono = $listaTelefono;
		}

		/**
		 * Método mágico __toString().
		 * Devuelve una representación en cadena del proveedor.
		 *
		 * @return string La representación en cadena del proveedor.
		 */
		public function __toString() {
			return "idProveedor: " . $this->idProveedor .  "\n" .
				   "nit: " . $this->nit . "\n" . 
				   "nombre: " . $this->nombre . "\n" . 
				   "direccion: " . $this->direccion . "\n" .
				   "correo: " . $this->correo . "\n";
		}

		/**
		 * Método getter para obtener el ID del proveedor.
		 *
		 * @return mixed El ID del proveedor.
		 */
		public function getIdProveedor() {
			return $this->idProveedor;
		}

		/**
		 * Método setter para establecer el ID del proveedor.
		 *
		 * @param mixed $idProveedor El ID del proveedor.
		 * @return void
		 */
		public function setIdProveedor($idProveedor) {
			$this->idProveedor = $idProveedor;
		}

		/**
		 * Método getter para obtener el NIT del proveedor.
		 *
		 * @return string El NIT del proveedor.
		 */
		public function getNit() {
			return $this->nit;
		}

		/**
		 * Método setter para establecer el NIT del proveedor.
		 *
		 * @param string $nit El NIT del proveedor.
		 * @return void
		 */
		public function setNit($nit) {
			$this->nit = $nit;
		}

		/**
		 * Método getter para obtener el nombre del proveedor.
		 *
		 * @return string El nombre del proveedor.
		 */
		public function getNombre() {
			return $this->nombre;
		}

		/**
		 * Método setter para establecer el nombre del proveedor.
		 *
		 * @param string $nombre El nombre del proveedor.
		 * @return void
		 */
		public function setNombre($nombre) {
			$this->nombre = $nombre;
		}

		/**
		 * Método getter para obtener la dirección del proveedor.
		 *
		 * @return string La dirección del proveedor.
		 */
		public function getDireccion() {
			return $this->direccion;
		}

		/**
		 * Método setter para establecer la dirección del proveedor.
		 *
		 * @param string $direccion La dirección del proveedor.
		 * @return void
		 */
		public function setDireccion($direccion) {
			$this->direccion = $direccion;
		}

		/**
		 * Método getter para obtener el correo electrónico del proveedor.
		 *
		 * @return string El correo electrónico del proveedor.
		 */
		public function getCorreo() {
			return $this->correo;
		}

		/**
		 * Método setter para establecer el correo electrónico del proveedor.
		 *
		 * @param string $correo El correo electrónico del proveedor.
		 * @return void
		 */
		public function setCorreo($correo) {
			$this->correo = $correo;
		}

		/**
		 * Método getter para obtener la lista de números de teléfono del proveedor.
		 *
		 * @return array La lista de números de teléfono del proveedor.
		 */
		public function getListaTelefono() {
			return $this->listaTelefono;
		}

		/**
		 * Método setter para establecer la lista de números de teléfono del proveedor.
		 *
		 * @param array $listaTelefono La lista de números de teléfono del proveedor.
		 * @return void
		 */
		public function setListaTelefono($listaTelefono) {
			$this->listaTelefono = $listaTelefono;
		}
	}
?>