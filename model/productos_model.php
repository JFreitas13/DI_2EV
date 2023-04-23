<?php
require './db/db_connect.php'; //conexión a BBDD

function nuevoProdcuto($nombre, $precio, $id_categoria)
{
    $db = getConnection();
    $query = ('INSERT INTO producto (nombre, precio, id_categoria) VALUES (:nombre, :precio, :id_categoria)');
    $stmt = $db->prepare($query);
    $stmt->bindParam(':nombre', $nombre);
    $stmt->bindParam(':precio', $precio);
    $stmt->bindParam(':id_categoria', $id_categoria);
    $stmt->execute();
}

function getProductos()
{
    $db = getConnection();
    $result = $db->query('SELECT id, nombre, precio, id_categoria FROM producto');
    $result->execute();
    return $productos = $result->fetchAll(PDO::FETCH_ASSOC); //fectAll crea un array
}

function getProductoCategoria($id_categoria) {
    $db = getConnection();
    $query = ('SELECT * FROM producto WHERE id_categoria = ?');
    $stmt = $db->prepare($query);
    $stmt->execute(array($id_categoria));
    return $productos = $stmt->fetchAll(PDO::FETCH_ASSOC); //fectAll crea un array
}

function delete($id)
{
    $db = getConnection();
    $result = $db->prepare('DELETE FROM producto WHERE id=:id');
    $result->bindParam(':id', $_GET['id']);
    $result->execute();
}
