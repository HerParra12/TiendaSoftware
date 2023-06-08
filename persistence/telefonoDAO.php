<?php

require_once 'crud.php';
require_once 'conexion.php';
require_once 'DAOUtil.php';

/**
 * Clase TelefonoDAO
 *
 * Esta clase implementa la interfaz CRUD y proporciona métodos para gestionar los teléfonos utilizando una base de datos.
 */
class TelefonoDAO implements CRUD
{

    private $link;
    private $util;

    /**
     * Constructor de la clase.
     * Crea una instancia de la clase Conexion y obtiene una conexión PDO.
     * Inicializa la instancia de DAOUtil.
     */
    public function __construct()
    {
        $conexion = new Conexion();
        $this->link = $conexion->getConexion();
        $this->util = new DAOUtil();
    }

    /**
     * Método para agregar un nuevo teléfono.
     *
     * @param Telefono $nuevoTelefono El objeto Telefono a agregar.
     * @return void
     */
    public function agregar($nuevoTelefono)
    {
        $mapa = array(
            ":idProveedor" => $nuevoTelefono->getIdProveedor(),
            ":telefono" => $nuevoTelefono->getTelefono()
        );
        $this->util->agregar($this->link, "INSERT INTO Telefono VALUES(null, :idProveedor, :telefono)", $mapa);
    }

    /**
     * Método para eliminar un teléfono por su ID.
     *
     * @param mixed $idTelefono El ID del teléfono a eliminar.
     * @return void
     */
    public function eliminar($idTelefono)
    {
        $this->util->eliminar($this->link, "DELETE FROM Telefono WHERE telefono = :id", $idTelefono);
    }

    /**
     * Método para actualizar un teléfono.
     *
     * @param mixed $idTelefono El ID del teléfono a actualizar.
     * @param Telefono $nuevoTelefono El objeto Telefono con los nuevos valores.
     * @return void
     */
    public function actualizar($idTelefono, $nuevoTelefono)
    {
        $mapa = array(
            ":idProveedor" => $nuevoTelefono->getIdProveedor(),
            ":telefono" => $nuevoTelefono->getTelefono()
        );
        $this->util->actualizar($this->link, "UPDATE Telefono SET telefono = :telefono WHERE id_proveedor = :idProveedor", $mapa);
    }

    /**
     * Método para obtener un teléfono por su ID.
     *
     * @param mixed $idTelefono El ID del teléfono a obtener.
     * @return Telefono|null El objeto Telefono correspondiente al ID proporcionado, o null si no se encontró ningún teléfono.
     */
    public function obtenerPorId($idTelefono)
    {
        $query = "SELECT * FROM Telefono WHERE id_telefono = :id";
        $telefonos = $this->util->mostrarLista($this->link, $query, array(":id" => $idTelefono));

        if (count($telefonos) > 0) {
            $telefono = $telefonos[0];
            return new Telefono($telefono['id_telefono'], $telefono['id_proveedor'], $telefono['telefono']);
        } else {
            return null;
        }
    }

    /**
     * Método para obtener la lista de todos los teléfonos.
     *
     * @return array Un array de objetos Telefono que representa la lista de todos los teléfonos.
     */
    public function mostrarLista()
    {
        $telefonos = array();
        $lista = $this->util->mostrarLista($this->link, "SELECT * FROM Telefono", array());
        foreach ($lista as $telefono) {
            $telefonos[] = new Telefono($telefono['id_telefono'], $telefono['id_proveedor'], $telefono['telefono']);
        }
        return $telefonos;
    }
}

?>
