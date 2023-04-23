<?php

//Creamos una funcion para conectarnos a la BBDD con los parametros y devolvemos la conexion
function getConnection() {

    $dbname = "aa2_jf";
    $user = "root";
    $password = "";
    $server = 'localhost';
    $dbh ="";

// Con un array de opciones
    try {
        $dsn = "mysql:host=$server;dbname=$dbname;charset=UTF8";
        $dbh = new PDO($dsn, $user, $password);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    return $dbh;
}