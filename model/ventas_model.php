<?php

require './db/db_connect.php'; //conexión a BBDD


function getVentas()
{
    $db = getConnection();
    $result = $db->query('SELECT id, fecha, id_producto, id_usuario FROM pedido');
    $result->execute();
    return $ventas = $result->fetchAll(PDO::FETCH_ASSOC); //fectAll crea un array
}

function getVentasProducto($id_producto)
{
    $db = getConnection();
    $query = ('SELECT * FROM pedido WHERE id_producto = ?');
    $stmt = $db->prepare($query);
    $stmt->execute(array($id_producto));
    return $ventas = $stmt->fetchAll(PDO::FETCH_ASSOC); //fectAll crea un array
}
