<?php

//SE USA PARA LISTAR CON EL SISTEMA DE INDEX
function listar() {
    require 'model/categorias_model.php';
    //Le pide al modelo todos los libros
    $categorias = getCategorias(); //funcion creada dentro de libros_model.php
    //Pasa a la vista toda la infromacion que se desea representar
    include ('view/listar_categorias_view.php'); //se lo pasamos a la vista especifica

}

//LO HE USADO DE PRUEBA PARA BORRAR PERO NO TERMINA DE FUNCIONAR. DE MOMENTO NO BORRO EL CODIGO YA QUE ESTOY EN PRUEBA
function deleteCategoria()
{
    if(isset($_GET['id']) && is_numeric($_GET['id']))
        // obtener el valor de ID mediante el método GET
        $id = $_GET['id'];
    //Incluimos el modelo correspondiente
    require 'model/categoria_delete_model.php';
    $categoria = delete($id);
    echo $id;
        //$categoria = deleteCategoria();
    include 'view/home_view.php';

//    if ($_GET['action'] == 'eliminar') {
//        // Eliminar el registro por su ID
//        $id = $_GET['id'];
//        require 'model/categoria_model.php';
//        $resultado = eliminar($id);
//        if ($resultado) {
//            header('"Location: ../index_listar_categorias.php"');
//        } else {
//            echo 'Error al eliminar el registro';
//        }
//
//    }
}