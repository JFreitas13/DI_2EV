<?php

//Creamos una funcion para conectarnos a la BBDD con los parametros y devolvemos la conexion
function getConnection() {

    $user = 'root';
    $pwd = '';
    return new PDO('mysql:host=localhost;dbname=aa2_jf', $user, $pwd);
}

//Recoje la conexión lanzar un select a la BBDD para devolver un array de libros
function getCategorias() {

    $db = getConnection();
    $result = $db->query('SELECT id, nombre FROM categoria');
    $result->execute();
    return $categorias = $result->fetchAll(PDO::FETCH_ASSOC); //fectAll crea un array
//Para devolver un array de los resultados, con el titulo y el precio de los libros en este caso
//    $categorias = array();
//    while ($categoria = $result->fetch()) {
//        $categorias[] = $categoria;
//        return $categorias;
    }


    //NO BORRO DE MOMENTO. PRUEBAS VARIAS DE DELETE
//    function deleteCategoria($id) {
//        $db = getConnection();
//        $result = $db->prepare('DELETE FROM categoria WHERE id=:id');
//        $result->bindParam(':id', $_GET['id']);
//        $result->execute();
//    }
