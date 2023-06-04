<?php
/**
 * Clase Inventario
 * 
 * Esta clase representa un elemento del inventario en el sistema.
 */
class Inventario {

    private $idInventario;
    private $upc;
    private $marca_producto;
    private $nombre;
    private $precio;
    private $cantidad;
    private $listaVentas;

    /**
     * Constructor de la clase.
     * Crea una nueva instancia de la clase Inventario.
     *
     * @param mixed $idInventario El ID del elemento del inventario.
     * @param string $upc El UPC del elemento del inventario.
     * @param string $marca_producto La marca del elemento del inventario.
     * @param string $nombre El nombre del elemento del inventario.
     * @param float $precio El precio del elemento del inventario.
     * @param int $cantidad La cantidad disponible del elemento del inventario.
     * @param array $listaVentas La lista de ventas asociadas al elemento del inventario.
     */
    public function __construct($idInventario, $upc, $marca_producto, $nombre, $precio, $cantidad, $listaVentas) {
        $this->idInventario = $idInventario;
        $this->upc = $upc;
        $this->marca_producto = $marca_producto;
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->cantidad = $cantidad;
        $this->listaVentas = $listaVentas;
    }
    
    /**
     * Método mágico __toString().
     * Devuelve una representación en cadena del elemento del inventario.
     *
     * @return string La representación en cadena del elemento del inventario.
     */
    public function __toString() {
        return "idInventario: " . $this->idInventario . "\n" .
               "upc: " . $this->upc . "\n" . 
               "marca_producto: " . $this->marca_producto . "\n" . 
               "nombre: " . $this->nombre . "\n" . 
               "precio: " . $this->precio . "\n" . 
               "cantidad: " . $this->cantidad;
    }

    /**
     * Método getter para obtener el ID del elemento del inventario.
     *
     * @return mixed El ID del elemento del inventario.
     */
    public function getIdInventario() {
        return $this->idInventario;
    }

    /**
     * Método setter para establecer el ID del elemento del inventario.
     *
     * @param mixed $idInventario El ID del elemento del inventario.
     * @return void
     */
    public function setIdInventario($idInventario) {
        $this->idInventario = $idInventario;
    }
    
    /**
     * Método getter para obtener el UPC del elemento del inventario.
     *
     * @return string El UPC del elemento del inventario.
     */
    public function getUpc() {
        return $this->upc;
    }

    /**
     * Método setter para establecer el UPC del elemento del inventario.
     *
     * @param string $upc El UPC del elemento del inventario.
     * @return void
     */
    public function setUpc($upc) {
        $this->upc = $upc;
    }
    
    /**
     * Método getter para obtener la marca del elemento del inventario.
     *
     * @return string La marca del elemento del inventario.
     */
    public function getMarcaProducto() {
        return $this->marca_producto;
    }

    /**
     * Método setter para establecer la marca del elemento del inventario.
     *
     * @param string $marca_producto La marca del elemento del inventario.
     * @return void
     */
    public function setMarcaProducto($marca_producto) {
        $this->marca_producto = $marca_producto;
    }
    
    /**
     * Método getter para obtener el nombre del elemento del inventario.
     *
     * @return string El nombre del elemento del inventario.
     */
    public function getNombre() {
        return $this->nombre;
    }

    /**
     * Método setter para establecer el nombre del elemento del inventario.
     *
     * @param string $nombre El nombre del elemento del inventario.
     * @return void
     */
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    /**
     * Método getter para obtener el precio del elemento del inventario.
     *
     * @return float El precio del elemento del inventario.
     */
    public function getPrecio() {
        return $this->precio;
    }

    /**
     * Método setter para establecer el precio del elemento del inventario.
     *
     * @param float $precio El precio del elemento del inventario.
     * @return void
     */
    public function setPrecio($precio) {
        $this->precio = $precio;
    }

    /**
     * Método getter para obtener la cantidad disponible del elemento del inventario.
     *
     * @return int La cantidad disponible del elemento del inventario.
     */
    public function getCantidad() {
        return $this->cantidad;
    }

    /**
     * Método setter para establecer la cantidad disponible del elemento del inventario.
     *
     * @param int $cantidad La cantidad disponible del elemento del inventario.
     * @return void
     */
    public function setCantidad($cantidad) {
        $this->cantidad = $cantidad;
    }

    /**
     * Método getter para obtener la lista de ventas asociadas al elemento del inventario.
     *
     * @return array La lista de ventas asociadas al elemento del inventario.
     */
    public function getListaVentas() {
        return $this->listaVentas;
    }

    /**
     * Método setter para establecer la lista de ventas asociadas al elemento del inventario.
     *
     * @param array $listaVentas La lista de ventas asociadas al elemento del inventario.
     * @return void
     */
    public function setListaVentas($listaVentas) {
        $this->listaVentas = $listaVentas;
    }
}
?>
