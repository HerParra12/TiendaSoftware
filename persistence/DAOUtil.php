<?php

    class DAOUtil {


        public function __construct() {}

        public function agregar($link, $query, $mapa) {
            try {       
                $statement = $link -> prepare($query);
                foreach($mapa as $key => $value) {
                    $statement -> bindValue($key, $value);
                }
                $statement -> execute();
                return true;
            } catch(PDOException $error) {
                echo "Error en DAOUtil agregar: " . $error -> getMesssage();
                return false;
            }
        }


        public function eliminar($link, $query, $id) {
            try {
                $statement = $link -> prepare($query);
                $statement -> bindValue(':id', $id);
                $statement -> execute();
                return true;
            }catch (PDOException $error) {
                echo "Error en DAOUtil eliminar: " . $error -> getMessage();
                return false;
            }
        }


        public function actualizar($link, $query, $mapa) {
            try {
                $statement = $link -> prepare($query);
                foreach($mapa as $key => $value) {
                    $statement -> bindValue($key, $value);
                }
                $statement -> execute();
                return true;
            } catch(PDOException $error) {
                echo "Error en DAOUtil actualizar: " . $error -> getMessage();
                return false;
            }
        }


        public function mostrarLista($link, $query, $mapa) {
            try {
                $statement = $link -> prepare($query);
                foreach($mapa as $key => $value) {
                    $statement -> bindValue($key, $value);
                }
                $statement -> execute();
                return $statement -> fetchAll(PDO::FETCH_ASSOC);
            } catch(PDOException $error) {
                echo "Error en DAOUtil mostrarLista: " . $error -> getMessage();
                return array();
            }
        }
    }

?>