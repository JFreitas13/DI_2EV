<?php

//SE USA PARA LISTAR CON EL SISTEMA DE INDEX
function listarProducto() {
    require 'model/producto_listar_model.php';
    //Le pide al modelo todos los libros
    $productos = getProductos(); //funcion creada dentro de libros_model.php
    //Pasa a la vista toda la infromacion que se desea representar
    include ('view/listar_productos_view.php'); //se lo pasamos a la vista especifica
}

function listarProductoCategoria() {
    if (!isset ($_GET ['id_categoria']))
        die("No has especificado una categoria");
    $id_categoria = $_GET ['id_categoria'];
    //Incluimos el modelo correspondiente
    require 'model/productoCategoria_listar_model.php';
    //Le pedimos al modelo el libro con id = $id
    $producto = getProductoCategoria($id_categoria);
    if ($producto == null)
        die('Categoria no existe');
    //Pasamos a la vista toda la informacion que se desea representar
    include ('view/listar_productosCategoria_view.php');
}

////Función para borrar categoria
//function deleteProducto() {
//    if(isset($_GET['id']) && is_numeric($_GET['id']))
//        // obtener el valor de ID mediante el método GET
//        $id = $_GET['id'];
//    //Incluimos el modelo correspondiente
//    require 'model/categoria_delete_model.php';
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
//            require 'model/categoria_update_model.php';
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
//}