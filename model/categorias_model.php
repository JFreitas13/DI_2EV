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

function delete($id) {
    $db = getConnection();
    $result = $db->prepare('DELETE FROM categoria WHERE id=:id');
    $result->bindParam(':id', $_GET['id']);
    $result->execute();
    //return $respuestas = $db->rowCount();
}

function update($id) {
    $db = getConnection();
    $result = $db->prepare('UPDATE categoria SET nombre=:nombre WHERE id=:id');
    $result->bindParam(':id', $_POST['id']);
    $result->bindParam(':nombre', $_POST['nombre']);
    $result->execute();
}


    //NO BORRO DE MOMENTO. PRUEBAS VARIAS DE DELETE
//    function deleteCategoria($id) {
//        $db = getConnection();
//        $result = $db->prepare('DELETE FROM categoria WHERE id=:id');
//        $result->bindParam(':id', $_GET['id']);
//        $result->execute();
//    }
