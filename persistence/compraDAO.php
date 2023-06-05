<?php

	require_once 'crud.php';
	require_once 'conexion.php';
	require_once 'DAOUtil.php';

	class CompraDAO implements CRUD {
		private $listaCompras;
		private $link;
		private $util;

		public function __construct() {
			$conexion = new Conexion();
			$this->link = $conexion->getConexion();
			$this->listaCompras = array();
			$this->util = new DAOUtil();
		}

		public function agregar($nuevaCompra) {
			$mapa = array(
				":idPedido" => $nuevaCompra->getIdPedido(),
				":fecha" => $nuevaCompra->getFecha(),
				":montoTotal" => $nuevaCompra->getMontoTotal(),
				":estado" => $nuevaCompra->getEstado()
			);
			$this->util->agregar($this->link, "INSERT INTO Compra (id_pedido, fecha, monto_total, estado) VALUES (:idPedido, :fecha, :montoTotal, :estado)", $mapa);
			$this->mostrarLista();
		}

		public function eliminar($idCompra) {
			$this->util->eliminar($this->link, "DELETE FROM Compra WHERE id_compra = :id", $idCompra);
			$this->mostrarLista();
		}

		public function actualizar($idCompra, $nuevaCompra) {
			$mapa = array(
				":id" => $idCompra,
				":idPedido" => $nuevaCompra->getIdPedido(),
				":fecha" => $nuevaCompra->getFecha(),
				":montoTotal" => $nuevaCompra->getMontoTotal(),
				":estado" => $nuevaCompra->getEstado()
			);
			$this->util->actualizar($this->link, "UPDATE Compra SET id_pedido = :idPedido, fecha = :fecha, monto_total = :montoTotal, estado = :estado WHERE id_compra = :id", $mapa);
			$this->mostrarLista();
		}

		public function mostrarLista() {
			$lista = $this->util->mostrarLista($this->link, "SELECT * FROM Compra", array());
			foreach ($lista as $value) {
				$idCompra = $value['id_compra'];
				$this->listaCompras[] = new Compra($idCompra, $value['id_pedido'], $value['fecha'], $value['monto_total'], $value['estado']);
			}
			return $this->listaCompras;
		}
		
		public function contarCompras() {
			$statement = $this->link->prepare("SELECT COUNT(*) as count FROM Compra");
			$statement->execute();
			$result = $statement->fetch(PDO::FETCH_ASSOC);

			return $result['count'];
		}
		
		
		
	}

?>
