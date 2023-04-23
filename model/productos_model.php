<?php

//Creamos una funcion para conectarnos a la BBDD con los parametros y devolvemos la conexion
function getConnection() {

    $user = 'root';
    $pwd = '';
    return new PDO('mysql:host=localhost;dbname=aa2_jf', $user, $pwd);
}

function nuevoProdcuto($nombre, $precio, $id_categoria) {

    $db = getConnection();
    $query = ('INSERT INTO producto (nombre, precio, id_categoria) VALUES (:nombre, :precio, :id_categoria)');
    $stmt = $db->prepare($query);
    $stmt->bindParam(':nombre', $nombre);
    $stmt->bindParam(':precio', $precio);
    $stmt->bindParam(':id_categoria', $id_categoria);
    $stmt->execute();
}

//Recoje la conexión lanzar un select a la BBDD para devolver un array de libros
function getProductos() {

    $db = getConnection();
    $result = $db->query('SELECT id, nombre, precio, id_categoria FROM producto');
    $result->execute();
    return $productos = $result->fetchAll(PDO::FETCH_ASSOC); //fectAll crea un array
//Para devolver un array de los resultados, con el titulo y el precio de los libros en este caso
//    $categorias = array();
//    while ($categoria = $result->fetch()) {
//        $categorias[] = $categoria;
//        return $categorias;
    }

function getProductoCategoria($id_categoria) {

    $db = getConnection();
    $query = ('SELECT * FROM producto WHERE id_categoria = ?');
    $stmt = $db->prepare($query);
    $stmt->execute(array($id_categoria));
    return $productos = $stmt->fetchAll(PDO::FETCH_ASSOC); //fectAll crea un array
}


    //NO BORRO DE MOMENTO. PRUEBAS VARIAS DE DELETE
//    function deleteCategoria($id) {
//        $db = getConnection();
//        $result = $db->prepare('DELETE FROM categoria WHERE id=:id');
//        $result->bindParam(':id', $_GET['id']);
//        $result->execute();
//    }
