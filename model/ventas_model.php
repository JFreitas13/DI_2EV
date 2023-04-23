<?php

//Creamos una funcion para conectarnos a la BBDD con los parametros y devolvemos la conexion
function getConnection() {

    $user = 'root';
    $pwd = '';
    return new PDO('mysql:host=localhost;dbname=aa2_jf', $user, $pwd);
}
//
//function nuevoProdcuto($nombre, $precio, $id_categoria) {
//
//    $db = getConnection();
//    $query = ('INSERT INTO producto (nombre, precio, id_categoria) VALUES (:nombre, :precio, :id_categoria)');
//    $stmt = $db->prepare($query);
//    $stmt->bindParam(':nombre', $nombre);
//    $stmt->bindParam(':precio', $precio);
//    $stmt->bindParam(':id_categoria', $id_categoria);
//    $stmt->execute();
//}

//Recoje la conexión lanzar un select a la BBDD para devolver un array de libros
function getVentas()
{

    $db = getConnection();
    $result = $db->query('SELECT id, fecha, id_producto, id_usuario FROM pedido');
    $result->execute();
    return $ventas = $result->fetchAll(PDO::FETCH_ASSOC); //fectAll crea un array
}


function getVentasProducto($id_producto) {

    $db = getConnection();
    $query = ('SELECT * FROM pedido WHERE id_producto = ?');
    $stmt = $db->prepare($query);
    $stmt->execute(array($id_producto));
    return $ventas = $stmt->fetchAll(PDO::FETCH_ASSOC); //fectAll crea un array
//    $producto = $stmt->fetch();
//    return $producto;
}


    //NO BORRO DE MOMENTO. PRUEBAS VARIAS DE DELETE
//    function deleteCategoria($id) {
//        $db = getConnection();
//        $result = $db->prepare('DELETE FROM categoria WHERE id=:id');
//        $result->bindParam(':id', $_GET['id']);
//        $result->execute();
//    }
