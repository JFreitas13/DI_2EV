<?php

//Creamos una funcion para conectarnos a la BBDD con los parametros y devolvemos la conexion
function getConnection() {

    $user = 'root';
    $pwd = '';
    return new PDO('mysql:host=localhost;dbname=aa2_jf', $user, $pwd);
}

function getProductoCategoria($id_categoria) {

    $db = getConnection();
    $query = ('SELECT * FROM producto WHERE id_categoria = ?');
    $stmt = $db->prepare($query);
    $stmt->execute(array($id_categoria));
    $producto = $stmt->fetch();
    return $producto;
}


    //NO BORRO DE MOMENTO. PRUEBAS VARIAS DE DELETE
//    function deleteCategoria($id) {
//        $db = getConnection();
//        $result = $db->prepare('DELETE FROM categoria WHERE id=:id');
//        $result->bindParam(':id', $_GET['id']);
//        $result->execute();
//    }
