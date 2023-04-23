<?php
//este controllet lista el sistema de index

//Función listar todas los productos
function listarProducto()
{
    require 'model/productos_model.php';
    $productos = getProductos();
    include ('view/listar_productos_view.php');
}

//Listar todos los productos de una categoria
function listarProductoCategoria()
{
    if (!isset ($_GET ['id_categoria']))
        die("No has especificado una categoria");
    $id_categoria = $_GET ['id_categoria'];
    //Incluimos el modelo correspondiente
    require 'model/productos_model.php';
    //Le pedimos al modelo el producto con id = $id
    $productos = getProductoCategoria($id_categoria);
    if ($productos == null)
        die('No existem productos para esta categoria.');
    //Pasamos a la vista toda la informacion que se desea representar
    include ('view/listar_productosCategoria_view.php');
}

//Añadir producto
function productoNuevo()
{
    include ("view/header.php");
    require_once 'view/nuevo_producto.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") { //verificamos que se ha enviado la solicitud de POST
        //obtenemos los datos
        $nombre = $_POST["nombre"];
        $precio = $_POST["precio"];
        $id_categoria = $_POST["id_categoria"];

        //Incluimos el modelo correspondiente
        require 'model/productos_model.php';
        $producto = nuevoProdcuto($nombre, $precio, $id_categoria);
        header("Location: ../index_listar_productos.php");
    }

}

//Función para borrar producto TODO: MIRAR BORRAR SET NUL EN MYSQL
function deleteProducto() {
    if(isset($_GET['id']) && is_numeric($_GET['id']))
        // obtener el valor de ID mediante el método GET
        $id = $_GET['id'];
    //Incluimos el modelo correspondiente
    require 'model/productos_model.php';
    $producto = delete($id);
    include 'view/home_view.php';
}
