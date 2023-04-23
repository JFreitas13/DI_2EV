<?php
require './db/db_connect.php'; //conexión a BBDD

//Recoje la conexión lanzar un select a la BBDD para devolver un array de libros
function getCategorias()
{
    $db = getConnection();
    $result = $db->query('SELECT id, nombre FROM categoria');
    $result->execute();
    return $categorias = $result->fetchAll(PDO::FETCH_ASSOC); //fecthAll crea un array
}

function delete($id) {
    $db = getConnection();
    $result = $db->prepare('DELETE FROM categoria WHERE id=:id');
    $result->bindParam(':id', $_GET['id']);
    $result->execute();
}

