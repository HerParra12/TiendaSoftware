<?php
	/**
	 * Clase DAOUtil
	 * 
	 * Esta clase proporciona métodos utilitarios para ejecutar consultas CRUD utilizando un objeto de conexión PDO.
	 */
	class DAOUtil {
		/**
		 * Constructor de la clase.
		 */
		public function __construct() {}

		/**
		 * Método para agregar un nuevo registro utilizando una consulta preparada.
		 *
		 * @param PDO $link Objeto de conexión PDO.
		 * @param string $query La consulta preparada para agregar el registro.
		 * @param array $mapa Un array asociativo que mapea los valores en la consulta preparada.
		 * @return bool True si la operación de agregar es exitosa, False en caso contrario.
		 */
		public function agregar($link, $query, $mapa) {
			try {
				$statement = $link->prepare($query);
				foreach ($mapa as $key => $value) {
					$statement->bindValue($key, $value);
				}
				$statement->execute();
				return true;
			} catch (PDOException $error) {
				echo "Error en DAOUtil agregar: " . $error->getMessage();
				return false;
			}
		}

		/**
		 * Método para eliminar un registro utilizando una consulta preparada y un ID.
		 *
		 * @param PDO $link Objeto de conexión PDO.
		 * @param string $query La consulta preparada para eliminar el registro.
		 * @param mixed $id El ID del registro a eliminar.
		 * @return bool True si la operación de eliminar es exitosa, False en caso contrario.
		 */
		public function eliminar($link, $query, $id) {
			try {
				$statement = $link->prepare($query);
				$statement->bindValue(':id', $id);
				$statement->execute();
				return true;
			} catch (PDOException $error) {
				echo "Error en DAOUtil eliminar: " . $error->getMessage();
				return false;
			}
		}

		/**
		 * Método para actualizar un registro utilizando una consulta preparada y un mapa de valores.
		 *
		 * @param PDO $link Objeto de conexión PDO.
		 * @param string $query La consulta preparada para actualizar el registro.
		 * @param array $mapa Un array asociativo que mapea los valores en la consulta preparada.
		 * @return bool True si la operación de actualizar es exitosa, False en caso contrario.
		 */
		public function actualizar($link, $query, $mapa) {
			try {
				$statement = $link->prepare($query);
				foreach ($mapa as $key => $value) {
					$statement->bindValue($key, $value);
				}
				$statement->execute();
				return true;
			} catch (PDOException $error) {
				echo "Error en DAOUtil actualizar: " . $error->getMessage();
				return false;
			}
		}

		/**
		 * Método para mostrar una lista de registros utilizando una consulta preparada y un mapa de valores.
		 *
		 * @param PDO $link Objeto de conexión PDO.
		 * @param string $query La consulta preparada para obtener la lista de registros.
		 * @param array $mapa Un array asociativo que mapea los valores en la consulta preparada.
		 * @return array Un array de registros obtenidos de la base de datos.
		 */
		public function mostrarLista($link, $query, $mapa) {
			try {
				$statement = $link->prepare($query);
				foreach ($mapa as $key => $value) {
					$statement->bindValue($key, $value);
				}
				$statement->execute();
				return $statement->fetchAll(PDO::FETCH_ASSOC);
			} catch (PDOException $error) {
				echo "Error en DAOUtil mostrarLista: " . $error->getMessage();
				return array();
			}
		}
	}
?>