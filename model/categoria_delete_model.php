<?php
//
////SE USA PARA BORRAR USANDO EN IDEX. DE MOMENTO NO BORRO
////Creamos una funcion para conectarnos a la BBDD con los parametros y devolvemos la conexion
//function getConnection() {
//
//    $user = 'root';
//    $pwd = '';
//    return new PDO('mysql:host=localhost;dbname=aa2_jf', $user, $pwd);
//}
//
//function deleteCategoria($id) {
//    $db = getConnection();
//    $result = $db->prepare('DELETE FROM categoria WHERE id=:id');
//    $result->bindParam(':id', $_GET['id']);
//    $result->execute($id);
//    return $respuestas = $db->rowCount();
//}