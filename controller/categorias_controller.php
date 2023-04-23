<?php

//SE USA PARA LISTAR CON EL SISTEMA DE INDEX
function listar() {
    require 'model/categorias_model.php';
    //Le pide al modelo todos los libros
    $categorias = getCategorias(); //funcion creada dentro de libros_model.php
    //Pasa a la vista toda la infromacion que se desea representar
    include ('view/listar_categorias_view.php'); //se lo pasamos a la vista especifica
}

function listarPorId() {
    if (!isset ($_GET ['id']))
        die("No se han encontrado productos");
    $id = $_GET ['id'];
    //Incluimos el modelo correspondiente
    require 'models/categorias_model';
    //Le pedimos al modelo el libro con id = $id
    $categoria = getCategoria($id);
    if ($categoria == null)
        die('Identificador incorrecto');
    //Pasamos a la vista toda la informacion que se desea representar
    include ('views/libros_ver.php');
}

//Función para borrar categoria
function deleteCategoria() {
    if(isset($_GET['id']) && is_numeric($_GET['id']))
        // obtener el valor de ID mediante el método GET
        $id = $_GET['id'];
    //Incluimos el modelo correspondiente
    require 'model/categorias_model.php';
    $categoria = delete($id);
    include 'view/home_view.php';
}

function updateCategoria()
{
    if (isset($_GET['id']) && is_numeric($_GET['id'])) {
        // obtener el valor de ID mediante el método GET
        $id = $_GET['id'];
        $nombre = $_GET['nombre'];
        include 'view/update_categoria_view.php';

        if (isset($_POST['modificar'])) {
            //confirma que el "ID" recibido es un valor válida antes
            // de obtener los datos del formulario
            if (is_numeric($_POST['id'])) {
                // obtiene los datos del formulario, asegurándonos que son válidos
                $id = $_POST['id'];
                $nombre = htmlspecialchars($_POST['nombre']);
                require 'model/categorias_model.php';
                $categoria = update($id);
                include 'view/home_view.php';
// guardamos los datos en la base de datos
            }
            //una vez guardados, redirigimos a la página principal
            header("Location: home_view.php");
        } else {
// Si el valor de "id" no es válidos, mostramos un mensaje de error
            echo 'Error!';
        }
    }
}