<?php
	/**
	 * Clase Usuario
	 * 
	 * Esta clase representa un usuario en el sistema.
	 */
	class Usuario {

		private $idUsuario;
		private $nombres;
		private $apellidos;
		private $role;
		private $correo;
		private $fechaNacimiento;
		private $listaPedidos;

		/**
		 * Constructor de la clase.
		 * Crea una nueva instancia de la clase Usuario.
		 *
		 * @param mixed $idUsuario El ID del usuario.
		 * @param string $nombres Los nombres del usuario.
		 * @param string $apellidos Los apellidos del usuario.
		 * @param string $role El rol del usuario.
		 * @param string $correo El correo electrónico del usuario.
		 * @param string $fechaNacimiento La fecha de nacimiento del usuario.
		 * @param array $listaPedidos La lista de pedidos del usuario.
		 */
		public function __construct($idUsuario, $nombres, $apellidos, $role, $correo, $fechaNacimiento, $listaPedidos) {
			$this->idUsuario = $idUsuario;
			$this->nombres = $nombres;
			$this->apellidos = $apellidos;
			$this->role = $role;
			$this->correo = $correo;
			$this->fechaNacimiento = $fechaNacimiento;
			$this->listaPedidos = $listaPedidos;
		}

		/**
		 * Método mágico __toString().
		 * Devuelve una representación en cadena del usuario.
		 *
		 * @return string La representación en cadena del usuario.
		 */
		public function __toString() {
			return "idUsuario: " . $this->idUsuario . "\n" .
				   "nombres: " . $this->nombres . "\n" . 
				   "apellidos: " . $this->apellidos . "\n" .
				   "tipo usuario: " . $this->role . 
				   "correo: " . $this->correo . 
				   "fecha nacimiento: " . $this->fechaNacimiento;
		}

		/**
		 * Método getter para obtener el ID del usuario.
		 *
		 * @return mixed El ID del usuario.
		 */
		public function getIdUsuario() {
			return $this->idUsuario;
		}

		/**
		 * Método setter para establecer el ID del usuario.
		 *
		 * @param mixed $idUsuario El ID del usuario.
		 * @return void
		 */
		public function setIdUsuario($idUsuario) {
			$this->idUsuario = $idUsuario;
		}

		/**
		 * Método getter para obtener los nombres del usuario.
		 *
		 * @return string Los nombres del usuario.
		 */
		public function getNombres() {
			return $this->nombres;
		}

		/**
		 * Método setter para establecer los nombres del usuario.
		 *
		 * @param string $nombres Los nombres del usuario.
		 * @return void
		 */
		public function setNombres($nombres) {
			$this->nombres = $nombres;
		}

		/**
		 * Método getter para obtener los apellidos del usuario.
		 *
		 * @return string Los apellidos del usuario.
		 */
		public function getApellidos() {
			return $this->apellidos;
		}

		/**
		 * Método setter para establecer los apellidos del usuario.
		 *
		 * @param string $apellidos Los apellidos del usuario.
		 * @return void
		 */
		public function setApellidos($apellidos) {
			$this->apellidos = $apellidos;
		}

		/**
		 * Método getter para obtener el rol del usuario.
		 *
		 * @return string El rol del usuario.
		 */
		public function getRole() {
			return $this->role;
		}

		/**
		 * Método setter para establecer el rol del usuario.
		 *
		 * @param string $role El rol del usuario.
		 * @return void
		 */
		public function setRole($role) {
			$this->role = $role;
		}

		/**
		 * Método getter para obtener el correo electrónico del usuario.
		 *
		 * @return string El correo electrónico del usuario.
		 */
		public function getCorreo() {
			return $this->correo;
		}

		/**
		 * Método setter para establecer el correo electrónico del usuario.
		 *
		 * @param string $correo El correo electrónico del usuario.
		 * @return void
		 */
		public function setCorreo($correo) {
			$this->correo = $correo;
		}

		/**
		 * Método getter para obtener la fecha de nacimiento del usuario.
		 *
		 * @return string La fecha de nacimiento del usuario.
		 */
		public function getFechaNacimiento() {
			return $this->fechaNacimiento;
		}

		/**
		 * Método setter para establecer la fecha de nacimiento del usuario.
		 *
		 * @param string $fechaNacimiento La fecha de nacimiento del usuario.
		 * @return void
		 */
		public function setFechaNacimiento($fechaNacimiento) {
			$this->fechaNacimiento = $fechaNacimiento;
		}

		/**
		 * Método getter para obtener la lista de pedidos del usuario.
		 *
		 * @return array La lista de pedidos del usuario.
		 */
		public function getListaPedidos() {
			return $this->listaPedidos;
		}

		/**
		 * Método setter para establecer la lista de pedidos del usuario.
		 *
		 * @param array $listaPedidos La lista de pedidos del usuario.
		 * @return void
		 */
		public function setListaPedidos($listaPedidos) {
			$this->listaPedidos = $listaPedidos;
		}
	}
?>
