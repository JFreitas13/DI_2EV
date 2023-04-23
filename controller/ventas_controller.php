<?php

//este controllet lista el sistema de index

//Función listar todas las ventas
function listarVentas()
{
    require 'model/ventas_model.php';
    $ventas = getVentas();
    include ('view/listar_ventas_view.php');
}

function listarVentasProductos()
{
    if (!isset ($_GET ['id_producto']))
        die("No has especificado un produto");
    $id_producto = $_GET ['id_producto'];
    //Incluimos el modelo correspondiente
    require 'model/ventas_model.php';
    //Le pedimos al modelo el libro con id = $id
    $ventas = getVentasProducto($id_producto);
    if ($ventas == null)
        die('No existem productos para esta categoria.');
    //Pasamos a la vista toda la informacion que se desea representar
    include ('view/listar_ventasProductos_view.php');
}
