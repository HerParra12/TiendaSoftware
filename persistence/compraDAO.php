<?php
require_once '../model/compra.php';
require_once 'crud.php';
require_once 'conexion.php';
require_once 'DAOUtil.php';
require_once '../model/compra.php';

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

    /**
     * Agrega una nueva compra a la base de datos.
     *
     * @param Compra $nuevaCompra La nueva compra a agregar.
     * @return void
     */
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

    /**
     * Elimina una compra de la base de datos.
     *
     * @param int $idCompra El ID de la compra a eliminar.
     * @return void
     */
    public function eliminar($idCompra) {
        $this->util->eliminar($this->link, "DELETE FROM Compra WHERE id_compra = :id", $idCompra);
        $this->mostrarLista();
    }

    /**
     * Actualiza una compra en la base de datos.
     *
     * @param int $idCompra El ID de la compra a actualizar.
     * @param Compra $nuevaCompra Los nuevos datos de la compra.
     * @return void
     */
    public function actualizar($idCompra, $nuevaCompra) {
        $mapa = array(
            ":id" => $idCompra,
            ":estado" => $nuevaCompra->getEstado()
        );
        $this->util->actualizar($this->link, "UPDATE Compra SET estado = :estado WHERE id_compra = :id", $mapa);
        $this->mostrarLista();
    }

    /**
     * Muestra la lista de compras almacenadas en la base de datos.
     *
     * @return array La lista de compras.
     */
    public function mostrarLista() {
        $lista = $this->util->mostrarLista($this->link, "SELECT * FROM Compra", array());
        foreach ($lista as $value) {
            $idCompra = $value['id_compra'];
            $this->listaCompras[] = new Compra($idCompra, $value['id_pedido'], $value['fecha'], $value['monto_total'], $value['estado']);
        }
        return $this->listaCompras;
    }

    /**
     * Obtiene el monto total de todas las compras.
     *
     * @return float El monto total de las compras.
     */
    public function obtenerMontoTotalCompras() {
        $statement = $this->link->prepare("SELECT SUM(monto_total) as total FROM Compra");
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);

        return $result['total'];
    }
}
?>
