<?php

	require_once 'CRUD.php';
	require_once 'conexion.php';
	include 'DAOUtil.php';

	class PedidoDAO implements CRUD {
		
		private $listaPedidos;
        private $link;
		private $util;

		public function __construct() {
			$conexion = new Conexion();
            $this -> link = $conexion -> getConexion();
            $this -> listaPedidos =  array();
			$this -> util = new DAOUtil();
		}

		public function agregar($nuevoPedido) {
			$mapa = array(
				":idProveedor" => $nuevoPedido -> getIdProveedor(),
				":idProducto" =>  $nuevoPedido -> getIdProducto(),
				":idUsuario" => $nuevoPedido -> getIdUsuario(),
				":fechaPedido" => $nuevoPedido -> getFecha()
			);
			$this -> util -> agregar($this -> link, "INSERT INTO Pedido VALUES(null, :idProveedor, :idProducto, :idUsuario, :fechaPedido)", $mapa);
			$this -> mostrarLista();
		}

		public function eliminar($idPedido) {
			$this -> util -> eliminar($this -> link, "DELETE FROM Pedido WHERE id_pedido = :idPedido", $idPedido);
			$this -> mostrarLista();
		}

		public function actualizar($idPedido, $nuevoPedido) {
			$mapa = array(
                ":id" => $idPedido,
                ":idProveedor" => $nuevoPedido -> getIdProveedor(),
                ":idProducto" =>  $nuevoPedido -> getIdProducto(),
                ":idUsuario" => $nuevoPedido -> getIdUsuario(),
				":fechaPedido" => $nuevoPedido -> getFecha()
            );
            $this -> util -> actualizar($this -> link, "UPDATE Pedido SET id_proveedor = :idProveedor, id_producto = :idProducto,
						  id_usuario = :idUsuario, fecha_pedido = :fechaPedido WHERE id_pedido = :idPedido", $mapa);
            $this -> mostrarLista();
		}

		public function mostrarLista() {
			$lista = $this -> util -> mostrarLista($this -> link, "SELECT * FROM Pedido", array());
			$query = "SELECT * FROM pedido p, pedidoinventario pi, inventario inv WHERE p.id_pedido = pi.id_pedido AND pi.id_inventario = inv.id_inventario AND inv.id_inventario = :id";
			foreach($lista as $value) {
				$idPedido = $value['id_pedido'];
				$listaInventario = $this -> util -> mostrarLista($this -> link, $query, array(":id" => $idPedido));
				$this -> listaPedidos[] = new Pedido($idPedido, $value['idProveedor'], $value['idProducto'], $value['idUsuario'], $value['fechaPedido'], $listaInventario);
			}
			return $this -> listaPedidos;
		}
	}
?>
