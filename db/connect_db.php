<?php

class Conexion {
    private $dbname = "aa2_jf";
    private $user = "root";
    private $password = "";
    private $server = 'localhost';
    private $dbh ="";

    private $conexion;

    /**
     * @param string $user
     * @param string $password
     * @param string $server
     */
//    public function __construct($user, $password, $server) {
//        $this->user = $user;
//        $this->password = $password;
//        $this->server = $server;
//    }


    public function conectar() {
        $this->conexion = null;
        // Con un array de opciones
        try {
            $dsn = "mysql:host=$this->server;dbname=$this->dbname;charset=UTF8";
            $conexion = new PDO($dsn, $this->user, $this->password);
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conexion;
            //echo "Conexión realizada con éxito !!!";
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return  $this->conexion;
    }

    //Método para almacenar los datos devueltos por las consultas realizadas a la base de datos
    public function consultar($strComando) {
        try {
            $ejecutar=$this->conexion->prepare($strComando);
            //Ejecuta la sentencia que le pasamos como parámetro strComando.
            $ejecutar->execute();
            //Guardamos en la variable row lo que devuelva la función fetchAll, es decir la consulta SQL.
            $rows = $ejecutar->fetchAll();
            return $rows;
        } catch(PDOException $ex) {
            //Devuelve la variable ex con la excepción que surja
            throw $ex;
        }
    }
}