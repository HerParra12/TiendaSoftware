<?php

    require_once 'crud.php';
    require_once 'conexion.php';

    class VentaDAO implements CRUD {

        private $listaVenta;

        public function __construct() {
            $conexion = new Conexion();
            $this -> link = $conexion -> getConexion();
            $this -> listaVenta = array();
        }

        public function agregar($nuevaVenta) {
            try {
                $query = "INSERT INTO Usuario VALUES(null, :nombres, :apellidos, :correo, :rol, :fecha_nacimiento)";
                $statement = $this -> link -> prepare($query);
                $statement -> bindValue(':nombres', $nuevaCompra -> getNombres());
                $statement -> bindValue(':apellidos', $nuevaCompra -> getApellidos());
                $statement -> bindValue(':correo', $nuevaCompra -> getCorreo());
                $statement -> bindValue(':rol', $nuevaCompra -> getRole());
                $statement -> bindValue(':fecha_nacimiento',  $nuevaCompra -> getFechaNacimiento());
                $statement -> execute();
                $this -> mostrarLista();
            } catch (PDOException $error) {
                return null;
            }
        }

        public function eliminar($idVenta) {
			try {
				$query = "DELETE FROM Venta WHERE id_venta = :idVenta";
				$statement = $this->link->prepare($query);
				$statement->bindValue(':idVenta', $idVenta);
				$statement->execute();
				return $statement->rowCount();
			} catch (PDOException $error) {
				echo "Error al eliminar la venta: " . $error->getMessage();
				return 0;
			}
		}


        public function actualizar($venta) {
			try {
				$query = "UPDATE Venta SET fecha_venta = :fechaVenta, total_venta = :totalVenta WHERE id_venta = :idVenta";
				$statement = $this->link->prepare($query);
				$statement->bindValue(':fechaVenta', $venta->getFechaVenta());
				$statement->bindValue(':totalVenta', $venta->getTotalVenta());
				$statement->bindValue(':idVenta', $venta->getIdVenta());
				$statement->execute();
				return $statement->rowCount();
			} catch (PDOException $error) {
				echo "Error al actualizar la venta: " . $error->getMessage();
				return 0;
			}
		}
        
        public function mostrarLista() {
			try {
				$query = "SELECT * FROM Venta";
				$statement = $this->link->query($query);
				$results = $statement->fetchAll(PDO::FETCH_ASSOC);
				foreach ($results as $value) {
					$this->listaVentas[] = new Venta($value['fecha_venta'], $value['total_venta'], $value['lista_productos']);
				}
				return $listaVentas;
			} catch (PDOException $error) {
				echo "Error al obtener los datos de las ventas: " . $error->getMessage();
				return [];
			}
		}
    }
?>