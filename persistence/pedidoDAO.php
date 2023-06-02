<?php

	require_once '../model/Pedido.php';
	require_once 'CRUD.php';
	require_once 'conexion.php';

	class PedidoDAO implements CRUD {

		private $listaPedidos;
        private $link;

		public function __construct() {
			$conexion = new Conexion();
            $this -> link = $conexion -> getConexion();
            $this -> listaPedidos =  array();
		}

		public function agregar($pedido) {
			try {
				$query = "INSERT INTO Pedido (id_pedido, id_proveedor, id_producto, id_usuario, fecha_pedido)
						  VALUES (:idPedido, :idProveedor, :idProducto, :idUsuario, :fechaPedido)";

				$stmt = $this->conexion->prepare($query);

				$stmt->bindValue(':idPedido', $pedido->getIdPedido());
				$stmt->bindValue(':idProveedor', $pedido->getIdProveedor());
				$stmt->bindValue(':idProducto', $pedido->getIdProducto());
				$stmt->bindValue(':idUsuario', $pedido->getIdUsuario());
				$stmt->bindValue(':fechaPedido', $pedido->getFecha());

				$stmt->execute();

				return $stmt->rowCount();
				}
			} catch (PDOException $error) {
                echo "Error al obtener los datos del pedido: " . $error -> getMessage();
                return null;
            }

		public function eliminar($idPedido) {
			try{
				$query = "DELETE FROM Pedido WHERE id_pedido = :idPedido";

				$stmt = $this->conexion->prepare($query);
				$stmt->bindValue(':idPedido', $idPedido);

				$stmt->execute();

				return $stmt->rowCount();
			} catch (PDOException $error) {
                echo "Error al obtener los datos del pedido: " . $error -> getMessage();
                return null;
            }
		}

		public function actualizar($pedido) {
			try{
				$query = "UPDATE Pedido SET id_proveedor = :idProveedor, id_producto = :idProducto,
						  id_usuario = :idUsuario, fecha_pedido = :fechaPedido WHERE id_pedido = :idPedido";

				$stmt = $this->conexion->prepare($query);

				$stmt->bindValue(':idProveedor', $pedido->getIdProveedor());
				$stmt->bindValue(':idProducto', $pedido->getIdProducto());
				$stmt->bindValue(':idUsuario', $pedido->getIdUsuario());
				$stmt->bindValue(':fechaPedido', $pedido->getFecha());
				$stmt->bindValue(':idPedido', $pedido->getIdPedido());

				$stmt->execute();

				return $stmt->rowCount();
			} catch (PDOException $error) {
                echo "Error al obtener los datos del pedido: " . $error -> getMessage();
                return null;
            }
		}

		public function mostrarLista() {
			try {
				$query = "SELECT * FROM Pedido";
				$statement = $this -> link -> query($query);
				$results = $statement -> fetchAll(PDO::FETCH_ASSOC);

				foreach ($results as $row) {
					$this -> listaPedidos[] = new Pedido($value['id_pedido'], $value['id_proveedor'], $value['id_producto'], $value['id_usuario'], $value['fecha_pedido']);
				}
				return $this -> listaPedidos;
			} catch (PDOException $error) {
				echo "Error al obtener los datos de los pedidos: " . $error->getMessage();
				return [];
			}
		}
	}
?>
