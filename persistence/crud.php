<?php
	/**
	 * Interfaz CRUD
	 * 
	 * Esta interfaz define los métodos básicos para realizar operaciones CRUD (Crear, Leer, Actualizar, Eliminar) en una entidad.
	 */
	interface CRUD {
		/**
		 * Método para agregar un nuevo valor a la entidad.
		 *
		 * @param mixed $nuevoValor El valor a agregar.
		 * @return void
		 */
		public function agregar($nuevoValor);

		/**
		 * Método para eliminar un valor de la entidad basado en su ID.
		 *
		 * @param mixed $id El ID del valor a eliminar.
		 * @return void
		 */
		public function eliminar($id);

		/**
		 * Método para actualizar un valor de la entidad basado en su ID.
		 *
		 * @param mixed $id El ID del valor a actualizar.
		 * @param mixed $nuevoValor El nuevo valor.
		 * @return void
		 */
		public function actualizar($id, $nuevoValor);

		/**
		 * Método para mostrar la lista de valores de la entidad.
		 *
		 * @return void
		 */
		public function mostrarLista();
	}

?>