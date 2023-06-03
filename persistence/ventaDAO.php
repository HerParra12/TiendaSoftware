<?php

    require_once 'crud.php';
    require_once 'conexion.php';

    class VentaDAO implements CRUD {

        private $listaVenta;
		private $link;
        private $util;

        public function __construct() {
            $conexion = new Conexion();
            $this -> link = $conexion -> getConexion();
            $this -> listaVenta = array();
			$this -> util = new DAOUtil();
        }

        public function agregar($nuevaVenta) {
            $mapa = array(
				":fecha_venta" => $nuevaVenta -> getFechaVenta(),
				":total_venta" => $nuevaVenta -> getTotalVenta()
			);
			$this -> util -> agregar($this -> link, "INSERT INTO Venta VALUES(null, :fecha_venta, :total_venta)", $mapa);
        }

        public function eliminar($idVenta) {
			$this -> util -> eliminar($this -> link, "DELETE FROM Venta WHERE id_venta = :id", $idVenta);
			$this -> mostrarLista();
		}


        public function actualizar($idVenta, $venta) {
			$mapa = array(
				":id" => $idVenta,
				":fecha_venta" => $venta -> getFechaVenta(),
				":total_venta" => $venta -> getTotalVenta()
			);
			$this -> util -> actualizar($this -> link, "UPDATE Venta SET fecha_venta = :fecha_venta, total_venta = :total_venta WHERE id_venta = :id", $mapa);
			$this -> mostrarLista();
		}
        
        public function mostrarLista() {
			$lista = $this -> util -> mostrarLista($this -> link, "SELECT * FROM Venta", array());
			$query = "SELECT ve.fecha_venta, ve.total_venta FROM venta ve, ventainventario vi, inventario inv WHERE ve.id_venta = vi.id_venta AND vi.id_inventario = inv.id_inventario AND ve.id_venta = :id";
			foreach ($lista as $value) {
				$idVenta = $value['id_venta'];
				$listaInventario = $this -> util -> mostrarLista($this -> link, $query, array(":id" => $idVenta));
				$this -> listaVenta[] = new Venta($idVenta, $value['fecha_venta'], $value['total_venta'], $listaInventario);
			}
			return $this -> listaVenta;
		}
    }
?>