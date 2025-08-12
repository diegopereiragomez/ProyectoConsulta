<?php

namespace App\Helper;

class DbHelper {

    var $db;

    function __contruct(){
    //conexionmediante PDO
        $opciones = [\PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"];

        try{
                    echo "inicia la consulta";
            $this->db = new \PDO("mysql:host=localhost; dbname=cms", "root", "", $opciones);
        
            $this->db->setAttribute(\PDO::ATTR_ERRORMODE,\PDO::ERRORMODE_EXCEPTION);
          

        } catch(\PDOException $e) {
            echo 'fallo en la conexion: '.$e->getMessage();
        }
    }
}
?>