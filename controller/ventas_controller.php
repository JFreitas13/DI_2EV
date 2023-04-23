<?php

//SE USA PARA LISTAR CON EL SISTEMA DE INDEX
function listarVentas() {
    require 'model/ventas_model.php';
    //Le pide al modelo todos los libros
    $ventas = getVentas(); //funcion creada dentro de libros_model.php
    //Pasa a la vista toda la infromacion que se desea representar
    include ('view/listar_ventas_view.php'); //se lo pasamos a la vista especifica
}

function listarVentasProductos() {
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
    include ('view/listar_productosCategoria_view.php');
}
//
//function productoNuevo() {
//    include ("view/header.php");
//    require_once 'view/nuevo_producto.php';
//    if ($_SERVER["REQUEST_METHOD"] == "POST") { //verificamos que se ha enviado la solicitud de POST
//        //obtenemos los datos
//        $nombre = $_POST["nombre"];
//        $precio = $_POST["precio"];
//        $id_categoria = $_POST["id_categoria"];
//
//        //Incluimos el modelo correspondiente
//        require 'model/productos_model.php';
//        $producto = nuevoProdcuto($nombre, $precio, $id_categoria);
//        header("Location: home_view.php");
//        echo "añadido";
//    }


////Función para borrar categoria
//function deleteProducto() {
//    if(isset($_GET['id']) && is_numeric($_GET['id']))
//        // obtener el valor de ID mediante el método GET
//        $id = $_GET['id'];
//    //Incluimos el modelo correspondiente
//    require 'model/categorias_model.php';
//    $categoria = delete($id);
//    include 'view/home_view.php';
//}
//
//function updateCategoria() {
//
//    if(isset($_GET['id']) && is_numeric($_GET['id'])) {
//        // obtener el valor de ID mediante el método GET
//        $id = $_GET['id'];
//        $nombre = $_GET['nombre'];
//        include 'view/update_categoria_view.php';
//        die();
//    }

//
//    if (isset($_POST['modificar'])) {
//    //confirma que el "ID" recibido es un valor válida antes
//    // de obtener los datos del formulario
//        if (is_numeric($_POST['id'])) {
//    // obtiene los datos del formulario, asegurándonos que son válidos
//            $id = $_POST['id'];
//            $nombre = htmlspecialchars($_POST['nombre']);
//            require 'model/categorias_model.php';
//            $categoria = update($id);
//            include 'view/home_view.php';
//// guardamos los datos en la base de datos
//        }
//            //una vez guardados, redirigimos a la página principal
//            header("Location: home_view.php");
//        } else {
//// Si el valor de "id" no es válidos, mostramos un mensaje de error
//            echo 'Error!';
//        }
//function updateCategoria($id) {
//    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//        $this->modelo_categoria->update($id, $_POST);
//        header("Location: home_view");
//        exit();
//    } else {
//        echo 'ERROOOOR';
//    }
//}