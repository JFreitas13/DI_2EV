<?php

//SE USA PARA BORRAR USANDO EN IDEX. DE MOMENTO NO BORRO
//Creamos una funcion para conectarnos a la BBDD con los parametros y devolvemos la conexion
function getConnection() {

    $user = 'root';
    $pwd = '';
    return new PDO('mysql:host=localhost;dbname=aa2_jf', $user, $pwd);
}

function update($id) {
    $db = getConnection();
    $result = $db->prepare('UPDATE categoria SET nombre=:nombre WHERE id=:id');
    $result->bindParam(':id', $_POST['id']);
    $result->bindParam(':nombre', $_POST['nombre']);
    $result->execute();
}