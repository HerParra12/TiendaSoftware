<?php

    class Conexion {

        private $host;
        private $dataName;
        private $username;
        private $password;

        public function __construct() {
            $this -> host = "localhost:3310";
            $this -> dataName = "rosita";
            $this -> username = "root";
            $this -> password = "";
        }


        public function __toString() {
            return "host: " .  $this -> host . "\n" . 
                   "dataName: " . $this -> dataName . "\n" .
                   "username: " . $this -> username . "\n" . 
                   "password: " . $this -> password;
        }

        public function error() {
            return "";
        }


        public function getConexion() {
            try {
                $link = "mysql:host=" . $this -> host . ";dbname=" . $this -> dataName . ";charset=utf8";
                $conexion = new PDO($link, $this -> username, $this -> password);
                $conexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
                return $conexion;
            } catch (PDOException $error) {
                echo "Error en la conexion: " . $error -> getMesssage();
                return null;
            }
        }
    }

?>